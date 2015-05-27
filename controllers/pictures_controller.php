<?php
class PicturesController extends AppController {

	var $name = 'Pictures';

	function index() {
		$this->Picture->recursive = 0;
		$this->set('pictures', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid picture', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('picture', $this->Picture->read(null, $id));
	}	
	function add() {
		$response = array();
		$pictures = array();
		
		foreach($_FILES['pictures']as $key=>$value){
			foreach($value as $index =>$content){
				if(!isset($pictures[$index])) $pictures[$index] = array();
				$pictures[$index][$key] = $content;
			}
		}
		
		$fileOK = $this->uploadFiles('img/files', $pictures);
		if(array_key_exists('urls', $fileOK)) {
			$response['initialPreview'] = array();
			$response['imageUrls'] = array();
			$response['thumbnailUrls'] = array();
			foreach($fileOK['urls'] as $index=>$url){
				$img_url = 'http://'.$_SERVER['HTTP_HOST'].'/'.APP_DIR.'/'.$url;
				$tmb_url = 'http://'.$_SERVER['HTTP_HOST'].'/'.APP_DIR.'/'.$fileOK['thumbnail_urls'][$index];
				$markup  = "<img src='$tmb_url' class='file-preview-image'>";
				array_push($response['initialPreview'],$markup);
				array_push($response['imageUrls'],$img_url);
				array_push($response['thumbnailUrls'],$tmb_url);
			}
			
		}else if(array_key_exists('errors', $fileOK)) {
			$response['error'] = implode(','.$fileOK['errors']);
		}
		echo json_encode($response);exit;
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid picture', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Picture->save($this->data)) {
				$this->Session->setFlash(__('The picture has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The picture could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Picture->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for picture', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Picture->delete($id)) {
			$this->Session->setFlash(__('Picture deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Picture was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	/**
	 * uploads files to the server
	 * @params:
	 *		$folder 	= the folder to upload the files e.g. 'img/files'
	 *		$formdata 	= the array containing the form files
	 *		$itemId 	= id of the item (optional) will create a new sub folder
	 * @return:
	 *		will return an array with the success of each file upload
	 */
	protected function uploadFiles($folder, $formdata, $itemId = null) {
		// Import phpThumb class
		App::import('Vendor','phpthumb', array('file' => 'phpThumb'.DS.'phpthumb.class.php'));
		$phpThumb = new phpthumb;
		// setup dir names absolute and relative
		$folder_url = WWW_ROOT.$folder;
		$rel_url = $folder;
		
		// create the folder if it does not exist
		if(!is_dir($folder_url)) {
			mkdir($folder_url);
		}
			
		// if itemId is set create an item folder
		if($itemId) {
			// set new absolute folder
			$folder_url = WWW_ROOT.$folder.'/'.$itemId; 
			// set new relative folder
			$rel_url = $folder.'/'.$itemId;
			// create directory
			if(!is_dir($folder_url)) {
				mkdir($folder_url);
			}
		}
		
		// list of permitted file types, this is only images but documents can be added
		$permitted = array('image/gif','image/jpeg','image/pjpeg','image/png');
		
		// loop through and deal with the files
		foreach($formdata as $file) {
			// replace spaces with underscores
			$filename = str_replace(' ', '_', $file['name']);
			$filename = $this->sanitize($filename);
			// assume filetype is false
			$typeOK = false;
			// check filetype is ok
			foreach($permitted as $type) {
				if($type == $file['type']) {
					$typeOK = true;
					break;
				}
			}
			
			// if file type ok upload the file
			if($typeOK) {
				// switch based on error code
				switch($file['error']) {
					case 0:
						// check filename already exists
						if(!file_exists($folder_url.'/'.$filename)) {
							// create full filename
							$full_url = $folder_url.'/'.$filename;
							$url = $rel_url.'/'.$filename;
							// upload the file
							$success = move_uploaded_file($file['tmp_name'], $url);
						} else {
							// create unique filename and upload file
							ini_set('date.timezone', 'Europe/London');
							$now = date('Y-m-d-His');
							$filename= $now.$filename;
							$full_url = $folder_url.'/'.$filename;
							$url = $rel_url.'/'.$filename;
							$success = move_uploaded_file($file['tmp_name'], $url);
						}
						// if upload was successful
						if($success) {
							// save the url of the file
							$result['urls'][] = $url;
							
							$thumbnail = $folder_url.'/thumb-'.$filename;
							$thumbnail_url = $rel_url.'/thumb/thumb-'.$filename;
							
							// Configuring thumbnail settings
							
							
							$phpThumb->setSourceFilename($url);
							$phpThumb->w = 150;
							$phpThumb->h = 150;
							if ($phpThumb->GenerateThumbnail()) {
								if (!$phpThumb->RenderToFile($thumbnail_url)) {
									$result['errors'][] = 'Could not render image to: '.$thumbnail_url;
								}else{
									$result['thumbnail_urls'][] = $thumbnail_url;
								}
							}else{
								$result['errors'][] = 'Could not generate image to: '.$thumbnail_url;
							}							
						} else {
							$result['errors'][] = "Error uploaded $filename. Please try again.";
						}
						break;
					case 3:
						// an error occured
						$result['errors'][] = "Error uploading $filename. Please try again.";
						break;
					default:
						// an error occured
						$result['errors'][] = "System error uploading $filename. Contact webmaster.";
						break;
				}
			} elseif($file['error'] == 4) {
				// no file was selected for upload
				$result['nofiles'][] = "No file Selected";
			} else {
				// unacceptable file type
				$result['errors'][] = "$filename cannot be uploaded. Acceptable file types: gif, jpg, png.";
			}
		}
	return $result;
	}
	protected function sanitize($string, $force_lowercase = true, $anal = false) {
    $strip = array("~", "`", "!", "@", "#", "$", "%", "^", "&", "*", "(", ")", "_", "=", "+", "[", "{", "]",
                   "}", "\\", "|", ";", ":", "\"", "'", "&#8216;", "&#8217;", "&#8220;", "&#8221;", "&#8211;", "&#8212;",
                   "â€”", "â€“", ",", "<", ">", "/", "?");
    $clean = trim(str_replace($strip, "", strip_tags($string)));
    $clean = preg_replace('/\s+/', "-", $clean);
    $clean = ($anal) ? preg_replace("/[^a-zA-Z0-9]/", "", $clean) : $clean ;
    return ($force_lowercase) ?
        (function_exists('mb_strtolower')) ?
            mb_strtolower($clean, 'UTF-8') :
            strtolower($clean) :
        $clean;
}
}
