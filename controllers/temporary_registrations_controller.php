<?php
class TemporaryRegistrationsController extends AppController {

	var $name = 'TemporaryRegistrations';
	var $uses = array('TemporaryRegistration','Category','MonetaryCurrency','Country','Province','CityAndMunicipalities','BusinessType');


	function index() {
		$this->TemporaryRegistration->recursive = 0;
		$this->set('temporaryRegistrations', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid tempory registration', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('TemporaryRegistration', $this->TemporaryRegistration->read(null, $id));
	}

	function add() {
		
			unset($this->data['Pr']);
			pr($this->data);exit;
	
	
		if (!empty($this->data)) {
			$this->TemporaryRegistration->create();
			if ($this->TemporaryRegistration->saveAll($this->data)) {
				$this->Session->setFlash(__('The tempory registration has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tempory registration could not be saved. Please, try again.', true));
			}
		}
		$businessTypes = $this->TemporaryRegistration->BusinessType->find('list');
		$currencies = $this->TemporaryRegistration->Currency->find('list');
		$this->set(compact('businessTypes', 'currencies'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid tempory registration', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->TemporaryRegistration->save($this->data)) {
				$this->Session->setFlash(__('The tempory registration has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tempory registration could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->TemporaryRegistration->read(null, $id);
		}
		$businessTypes = $this->TemporaryRegistration->BusinessType->find('list');
		$currencies = $this->TemporaryRegistration->Currency->find('list');
		$this->set(compact('businessTypes', 'currencies'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for tempory registration', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->TemporaryRegistration->delete($id)) {
			$this->Session->setFlash(__('Tempory registration deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Tempory registration was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	
	function user(){
	
	
		//Step-2
		$businessTypes = $this->BusinessType->find('list');		
		$countries = array();
		foreach($this->Country->find('all',array('order'=>'seq_order','conditions'=>array('is_active'=>1))) as $key=>$country){
			$countries[$key]= array('value'=>$country['Country']['id'],
									'name'=>$country['Country']['name'], 
									'country_code'=>$country['Country']['country_code']
								);
		}
		
		$provinces = array();
		foreach($this->Province->find('all') as $key=>$prov){
			$provinces[$key]= array('value'=>$prov['Province']['name'],
									'name'=>$prov['Province']['name'], 
									'province_id'=>$prov['Province']['id'],
									'country_id'=>$prov['Province']['country_id'],
									//'style'=>'display:none;',
								);
		}
		
		$cityAndMunicipalities = array();
		foreach($this->CityAndMunicipalities->find('all') as $key=>$munc){
			$cityAndMunicipalities[$key]= array(
									'value'=>$munc['CityAndMunicipalities']['name'],
									'name'=>$munc['CityAndMunicipalities']['name'], 
									'province_id'=>$munc['CityAndMunicipalities']['province_id'],
									//'style'=>'display:none;',
								);
		}
		
		$this->set(compact('countries','provinces','cityAndMunicipalities','businessTypes'));
		
		//Step 3
		$monetrayCurrencies = array();
			foreach($this->MonetaryCurrency->find('all') as $key=>$cur){
				$monetrayCurrencies[$key]= array(
										'value'=>$cur['MonetaryCurrency']['id'],
										'name'=>$cur['MonetaryCurrency']['description'], 
										'symbol'=>$cur['MonetaryCurrency']['symbol']
									);
			}
			
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
			
		$this->set(compact('monetrayCurrencies','totalAnnualSalesVolume','noOfEmployees','exportPercentage'));
		
		//Step 4
		$categories = $this->Category->find('threaded', array('recursive' => -1,'order' => array('Category.lft' => 'ASC')));
		
		$child_index = 0;
		$generalCategoristLists = array();
		$classificationLists = array();
		
		foreach($categories  as $mainCategories){
			//Add main category on the general category list
			$generalCategoristLists[$mainCategories['Category']['id']]=$mainCategories['Category']['name'];
		
			foreach($mainCategories['children'] as $child){
				//Add main category children on classification list
				$classificationLists[$child_index]= array(
									'value'=>$child['Category']['id'],
									'name'=>$child['Category']['name'], 
									'parent-id'=>$child['Category']['parent_id'],
									//'style'=>'display:none;',
								);
				$child_index++;
			}	
		}
		
		$this->set(compact('generalCategoristLists','classificationLists'));
	
	}
	
	function test(){
	
	}
}
