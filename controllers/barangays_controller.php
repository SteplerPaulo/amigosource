<?php
class BarangaysController extends AppController {

	var $name = 'Barangays';
	function index() {
		if($this->RequestHandler->accepts('js')){		
			$this->header('Content-Type: application/javascript');
			$barangays = $this->Barangay->find('all',array('fields'=>array('id','name','city_id','zip_code')));
			$this->set(compact('barangays'));
		}else{
			$this->Barangay->recursive = 0;
			$this->set('barangays', $this->paginate());
		}
	}

}
