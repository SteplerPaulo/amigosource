<?php
class BusinessesController extends AppController {

	var $name = 'Businesses';
	var $uses = array('User','Business','Certification','Factory','Product','Currency','AutoMessage','RegistrationComment','ArchiveRegistration');
	var $helpers = array('Html','CustomForm');
	function beforeFilter() {
		if(isset($_GET['access_code'])){
			if($this->params['action']=='edit'){
				 $this->Business->tablePrefix='temp_';
				 $this->Business->recursive=0;
				$business = $this->Business->find('first',array('conditions'=>array('access_code'=>$_GET['access_code'])));				
				if($business){
					$this->Auth->allow('edit'); 
				}
			}
		}
		
		parent::beforeFilter();
	}
	function index() {
		$status = isset($_GET['status'])?$_GET['status']:'all';
		$this->Business->recursive = 1;
		
		if($status=='submitted') $status = 'SUBMT';
		if($status=='approved') $status = 'APPRV';
		else if($status=='returned') $status = 'RETRN';
		else if($status=='resubmitted') $status = 'RSBMT';
		
		$this->Business->tablePrefix =$status=='APPRV'?null:'temp_';
		if($status!='all'){
			$conditions = array('Business.status'=>$status);
			$this->paginate = array('Business'=>array('conditions'=>$conditions));
		}
		$this->set('businesses', $this->paginate('Business'));
		$this->set('status', $status);
	}

	function view($id = null,$token=null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid business', true));
			$this->redirect(array('action' => 'index'));
		}
		if(md5('APPRV'.$id)!=$token){
			$this->Business->tablePrefix ='temp_';
			$this->Business->User->tablePrefix ='temp_';
			$this->Business->Certification->tablePrefix ='temp_';
			$this->Business->Factory->tablePrefix ='temp_';
			$this->Business->Product->tablePrefix ='temp_';
			$this->Business->Product->Picture->tablePrefix ='temp_';
		}
		$this->set('has_approve_token',md5('APPRV'.$id)==$token);
		$this->Business->recursive=2;
		$business = $this->Business->read(null, $id);
		$fields = array();
		if(isset($business['RegistrationComment'])){
			foreach($business['RegistrationComment'] as $comment){
				if(!in_array($comment['field'],$fields)) array_push($fields,$comment['field']);
			}
		}
		$business['RegistrationComment'] = $fields;
		$this->set('business', $business);
	}

	function add() {
		if (!empty($this->data)) {			
				$this->header('Content-Type: application/json');
				$securimage = new Securimage();
				if(!isset($this->data['captcha'])){
					$response=array('status'=>'ERROR','error'=>'captcha');
					echo json_encode($response);exit;
				}else if($securimage->check($this->data['captcha'])==false){
					$response=array('status'=>'ERROR','error'=>'captcha');
					echo json_encode($response);exit;
				}else{
					if($this->User->checkEmail($this->data['User']['email'])){
						$response=array('status'=>'ERROR','error'=>'email');
						echo json_encode($response);exit;
					}
					if ($this->ManualSave($this->data,'temp_')) {
						$this->AutoMessage->sendMessage($this->data['User']['email'],'REGISTER',array('contact_name'=>$this->data['Business']['contact_name']));
						if($this->RequestHandler->isAjax()){
							$response=array('status'=>'OK','data'=>$this->data);
							echo json_encode($response);exit;
						}else{
							$this->Session->setFlash(__('The business has been saved', true));
							$this->redirect(array('action' => 'index'));
						}
					} else {
						if($this->RequestHandler->isAjax()){
							$response=array('status'=>'ERROR','error'=>'internal','data'=>$this->data);
							echo json_encode($response);exit;
						}else{
							$this->Session->setFlash(__('The business could not be saved. Please, try again.', true));
						}
						
					}
					
					
				}
			
		}
		$businessTypes = $this->Business->BusinessType->find('list');
		$currencies = $this->Currency->find('list',array('fields'=>array('id','description')));
		$categories = $this->Product->Category->find('list',array('conditions'=>array('parent_id'=>null)));
		$totalAnnualSalesVolume = array(
			 '1-1,000,000'=>'1 - 1,000,000',		
			 '1,000,001–5,000,000'=>'1,000,001 – 5,000,000',		
			 '5,000,001–10,000,000'=>'5,000,001 – 10,000,000',		
			 '10,000,001–50,000,000'=>'10,000,001 – 50,000,000',		
			 '50,000,001–100,000,000'=>'50,000,001 – 100,000,000',		
			 '100,000,001–500,000,000'=>'100,000,001 – 500,000,000',		
			 '>500,000,001'=>'>500,000,001'		
		);

		$exportPercentage = array(
								'10 – 25%'=>'10 – 25%',	
								'25 – 50%'=>'25 – 50%',	
								'50 – 75%'=>'50 – 75%',	
								'>75%'=>'>75%',	
							);
		$noOfRange = array(
			'1-5'=>'1-5',
			'6-10'=>'6-10',
			'11-15'=>'11-15',
			'16-20'=>'16-20',
			'21-25'=>'21-25',
			'26-30'=>'26-30',
			'31-50'=>'31-50',
			'51-100'=>'51-100',
			'> 100'=>'> 100'
		);


		$noOfEmployees = array(
					'1-25' =>'1 - 25',
					'26-50' =>'26 - 50',
					'51-75' =>'51 - 75',
					'76-100' =>'76 - 100',
					'101–500'	=>'101 – 500',
					'501–1000' =>'501 – 1000',
					'1001–2000' =>'1001 – 2000',
					'2001–5000' =>'2001 – 5000',
					'5001–10000' =>'5001 – 10000',
					'> 10000' =>'> 10000',
		);
		$this->set(compact('businessTypes','currencies','categories','totalAnnualSalesVolume','exportPercentage','noOfRange','noOfEmployees'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid business', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			$this->data['Business']['status'] = 'RSBMT';
			$this->ManualSave($this->data,'temp_',false);
			echo json_encode($this->data);exit;
			if ($this->Business->save($this->data)) {
				$this->Session->setFlash(__('The business has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The business could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->Business->tablePrefix ='temp_';
			$this->Business->User->tablePrefix ='temp_';
			$this->Business->Certification->tablePrefix ='temp_';
			$this->Business->Factory->tablePrefix ='temp_';
			$this->Business->Product->tablePrefix ='temp_';
			$this->Business->Product->Picture->tablePrefix ='temp_';
			$this->Business->recursive=2;
			$this->RegistrationComment->recursive=-1;
			$comments = $this->RegistrationComment->find('list',array('conditions'=>array('business_id'=>$id),'fields'=>array('field','comment')));
			$noOfRange = array(
				'1-5'=>'1-5',
				'6-10'=>'6-10',
				'11-15'=>'11-15',
				'16-20'=>'16-20',
				'21-25'=>'21-25',
				'26-30'=>'26-30',
				'31-50'=>'31-50',
				'51-100'=>'51-100',
				'> 100'=>'> 100'
			);
			$noOfEmployees = array(
						'1-25' =>'1 - 25',
						'26-50' =>'26 - 50',
						'51-75' =>'51 - 75',
						'76-100' =>'76 - 100',
						'101–500'	=>'101 – 500',
						'501–1000' =>'501 – 1000',
						'1001–2000' =>'1001 – 2000',
						'2001–5000' =>'2001 – 5000',
						'5001–10000' =>'5001 – 10000',
						'> 10000' =>'> 10000',
			);
			$business = $this->Business->read(null, $id);
			$this->set(compact('business','comments','noOfRange','noOfEmployees'));
		}
		$businessTypes = $this->Business->BusinessType->find('list');
		$this->set(compact('businessTypes'));
	}

	function delete($id = null,$approved=false) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for business', true));
			$this->redirect(array('action'=>'index'));
		}
		if(!$approved){
			$this->Business->tablePrefix ='temp_';
			$this->Business->Certification->tablePrefix ='temp_';
			$this->Business->Factory->tablePrefix ='temp_';
			$this->Business->Product->tablePrefix ='temp_';
			$this->Business->Product->Picture->tablePrefix ='temp_';
		}
		$this->Business->recursive = -1;
		$business = $this->Business->read(null, $id);
		$uid = $business['Business']['user_id'];
		if(!$approved) $this->User->tablePrefix='temp_';
		if ($this->Business->delete($id)&&$this->User->delete($uid)) {
			$this->Session->setFlash(__('Business '.$business['Business']['name'].' was deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Business was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	function success(){
		
	}
	function approved(){
		if(!empty($this->data)){
			$this->header('Content-Type: application/json');
			$business_id = $this->data['Business']['id'];
			$prefix = 'temp_';
			$this->User->tablePrefix = $prefix;
			$this->Business->tablePrefix = $prefix;
			$this->Certification->tablePrefix = $prefix;
			$this->Factory->tablePrefix = $prefix;
			$this->Product->tablePrefix = $prefix;	
			$this->Product->Picture->tablePrefix = $prefix;	
			$this->Business->recursive=1;			
			$business = $this->Business->read(null,$business_id);
			$this->Product->recursive=1;
			$product_ids = array();
			foreach($business['Product'] as $product){
				array_push($product_ids,$product['id']);
			}
			$pictures = $this->Product->Picture->find('all',array('conditions'=>array('Product.id'=>$product_ids),'fields'=>array('Picture.product_id','Picture.url')));
			$product_pics = array();
			$pids = array();
			foreach($pictures as $pic){
				$pid = $pic['Picture']['product_id'];
				$url = $pic['Picture']['url'];
				if(!isset($product_pics[$pid])) $product_pics[$pid] = array();
				array_push($product_pics[$pid],$url);
				array_push($pids,$pid);
			}
			foreach($business['Product'] as $index=>$product){
				$pid = $product['id'];
				if(isset($product_pics[$pid])) $business['Product'][$index]['product_image'] = $product_pics[$pid];
			}
			sleep(2);
			$details = json_encode(array('timestamp'=>time(),'data'=>$business));
			$hash = md5($details);
			$archive = array('details'=>$details,'hash'=>$hash);
			$this->ArchiveRegistration->save($archive);
			$uid = $business['User']['id'];
			$email = $business['User']['email'];
			$contact_name = $business['Business']['contact_name'];
			$business['Business']['id'] = null;
			$business['Business']['status'] = 'APPRV';
			$business['User']['id'] = null;
			if(isset($business['Factory'][0])) $business['Factory']  = $business['Factory'][0];
			$this->ManualSave($business,null,false);
			$this->ManualDelete($business_id,$pids,$uid,'temp_');
			$subject ='Registration Approved';
			$send = $this->AutoMessage->sendViaPHPMailer($email,$subject,'APPROVE',array('contact_name'=>$contact_name,'email'=>$email,'comment'=>''));
			$response=array('status'=>'OK','data'=>$business,'send'=>$send);
			echo json_encode($response);exit;
		}
	}
	function test(){
		$data = '{"timestamp":1433511615,"data":{"Business":{"id":"1","name":"The Simplified Solutions","business_type_id":"SRVC","country":"PH","province":"BTG","city":"178","address":"1144 Do\u00f1a Fidela Subdivision","zip_code":"4234","contact_name":"Dave Alaras","designation":"Programer","landline":"432113038","mobile":"9479945308","fax":null,"logo":"","website":"http:\/\/amigosource.com","created":"2015-06-05 13:39:23","modified":"2015-06-05 13:39:23","user_id":"1","status":"SUBMT","access_code":null},"BusinessType":{"id":"SRVC","name":"Services"},"User":{"id":"1","email":"arroyo.daveil@gmail.com","password":"2761c61f0438dde56271ca3b8ffb222a1974706a","created":"2015-06-05 13:39:23","status":"PEND","type":"RGLR","user_type":"supplier"},"Certification":[{"id":"5571a68b-f63c-460c-b53d-08d853314baa","business_id":"1","description":"Sample certification","issuing_agency":"Agency 1","date_issued":"2014-12-03","created":"2015-06-05 13:39:23","modified":"2015-06-05 13:39:23"}],"Factory":[{"id":"5571a68b-6cac-48be-bd5f-08d853314baa","business_id":"1","location":"Batangas","contract_manufacturing":"N\/A","product_line_count":"1-5","r_and_d_staff_count":"6-10","qc_staff_count":"> 100","employee_count":"1-25","created":"2015-06-05 13:39:23","modified":"2015-06-05 13:39:23"}],"Product":[{"id":"1","business_id":"1","category_id":"6","classification_id":"86","name":"Sample item 2","details":"details","standard_pckg":"pkg","specifications":"specs","technical_desc":"tech desc","cost_currency":"PHP","cost":"77777.00","unit_measure_code":"m","stock_on_hand":"909","min_order_qty":"10","payment_terms":"cash","shipping_terms":"code","contact_name":"Dave","contact_number":"9479945308","contact_email":"arroyo.daveil@gmail.com","created":"2015-06-05 13:39:23","modified":"2015-06-05 13:39:23","product_image":["2015-05-27-072215desert.jpg","2015-05-27-072215hydrangeas.jpg"]}]}}';
		$data =  json_decode($data,true);
		$this->	ManualSave($data['data'],'temp_',false);
	}
	function returned(){
		if(!empty($this->data)){
			$this->header('Content-Type: application/json');
			$status_code = 'RETRN';
			$this->data['Business']['time'] = time();
			$this->data['Business']['status'] = $status_code;
			$access_code =  substr(md5(json_encode($this->data)),0,20);
			$this->data['Business']['access_code'] = $access_code;
			$this->Business->tablePrefix='temp_';
			$this->Business->save($this->data['Business']);
			sleep(2);
			$this->RegistrationComment->saveAll($this->data['RegistrationComment']);
			$business_id = $this->data['Business']['id'];
			$business = $this->Business->getBusinessContactInfo($business_id,'temp_');
			$contact_name = $business['Business']['contact_name'];
			$email = $business['User']['email'];
			$comments = '';
			foreach($this->data['RegistrationComment'] as $item){
				$str = str_replace('.',' ',$item['field']);
				$str  = preg_replace('/\[(.*?)\]/', '', $str);
				$str  =  Inflector::humanize($str);
				$comments .= '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$str.':  '.$item['comment'].'<br/>';
			}
			$subject ='Registration Returned';
			$link = 'http://tssi-erb.com/amigo/businesses/edit/'.$business_id.'?access_code='.$access_code;
			$send = $this->AutoMessage->sendViaPHPMailer($email,$subject,'RETURN',array('contact_name'=>$contact_name,'comment'=>$comments,'link'=>$link));
			$response=array('status'=>'OK','data'=>$this->data,'message'=>$send,'biz'=>$business);
			echo json_encode($response);exit;
		}
	}
	protected function ManualDelete($business_id,$pids,$uid,$prefix){
		$this->User->tablePrefix = $prefix;
		$this->Business->tablePrefix = $prefix;
		$this->Certification->tablePrefix = $prefix;
		$this->Factory->tablePrefix = $prefix;
		$this->Product->tablePrefix = $prefix;	
		$this->Product->Picture->tablePrefix = $prefix;	
		
		$this->Business->delete($business_id,true);
		$this->User->delete($uid);
		$this->Product->Picture->deleteAll(array('product_id'=>$pids));
	}
	protected function ManualSave($data,$prefix=null,$hashPassword = true){
		$this->User->tablePrefix = $prefix;
		$this->Business->tablePrefix = $prefix;
		$this->Certification->tablePrefix = $prefix;
		$this->Factory->tablePrefix = $prefix;
		$this->Product->tablePrefix = $prefix;	
		$this->Product->Picture->tablePrefix = $prefix;	
		
		if($hashPassword){
			$data['User']['password'] = AuthComponent::password($data['User']['password']);
		}
		if($prefix==null){
			$data['User']['id']  =  $data['Business']['id'] = null;
		}
		$this->User->save($data['User']);
		$user_id = $this->User->id;
		
		if($user_id){
			$data['Business']['user_id'] = $user_id;
			$this->Business->save($data['Business']);
			
			$business_id = $this->Business->id;
			if($business_id){
				
				if(isset($data['Certification'])){
					foreach($data['Certification'] as $k=>$v){
						$data['Certification'][$k]['business_id'] = $business_id;
					}
				}
				
				if(isset($data['Product'])){
					foreach($data['Product'] as $k=>$v){
						$data['Product'][$k]['business_id'] = $business_id;
					}
				}
				
				if(isset($data['Factory'])){
					if($prefix==null) $data['Factory']['id'] = null;
					$data['Factory']['business_id'] = $business_id;
					$this->Factory->save($data['Factory']);
				}
				if(isset($data['Certification'])){
					if($prefix==null){
						foreach($data['Certification'] as $ci=>$co){
							$data['Certification'][$ci]['id'] = null;
						}
					}
					$this->Certification->saveAll($data['Certification']);
				}
				
				if(isset($data['Product'])){
					foreach($data['Product'] as $product){
						if(!isset($product['id'])) $product['id'] = null;
						if($prefix==null) $product['id'] = null;
						$this->Product->save($product);
						$product_id = $this->Product->id;
						if(isset($product['product_image'])){
							foreach($product['product_image'] as $url){
								$this->Product->Picture->save(array('Picture'=>array('id'=>null,'url'=>$url,'product_id'=>$product_id)));
							}
						}
					}
				}
				return true;
			}else{
				return false;
			}
		}else{
			return false;
		}
		
	}
}
