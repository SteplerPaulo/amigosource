<?php
/**
 * Static content controller.
 *
 * This file will render views from views/pages/
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.cake.libs.controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

/**
 * Static content controller
 *
 * Override this controller by placing a copy in controllers directory of an application
 *
 * @package       cake
 * @subpackage    cake.cake.libs.controller
 */
class PagesController extends AppController {

/**
 * Controller name
 *
 * @var string
 * @access public
 */
	var $name = 'Pages';

/**
 * Default helper
 *
 * @var array
 * @access public
 */
	var $helpers = array('Html');

/**
 * This controller does not use a model
 *
 * @var array
 * @access public
 */
	var $uses = array('Category','MonetaryCurrency','Country','Province','CityAndMunicipalities','BusinessType');

/**
 * Displays a view
 *
 * @param mixed What page to display
 * @access public
 */
	function display() {
	
	
		$path = func_get_args();

		$count = count($path);
		if (!$count) {
			$this->redirect('/');
		}
		$page = $subpage = $title_for_layout = null;
		


		if (!empty($path[0])) {
			$page = $path[0];
		}
		if (!empty($path[1])) {
			$subpage = $path[1];
		}
		if (!empty($path[$count - 1])) {
			$title_for_layout = Inflector::humanize($path[$count - 1]);
		}
		if ($page == 'home') $this->layout = 'homepage';
		
		if ($page == 'product-details'){
			//CATEGORIES
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
		};
		
		if($page=='certification-profile'){
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
		}
		
		
		if($page == 'supplier-member-details'){
			$businessTypes = $this->BusinessType->find('list');
			
			
			$countries = array();
			foreach($this->Country->find('all',array('order'=>'seq_order')) as $key=>$country){
				$countries[$key]= array(
										'value'=>$country['Country']['id'],
										'name'=>$country['Country']['name'], 
										'country_code'=>$country['Country']['country_code']
									);
			}
			
			
			$provinces = array();
			foreach($this->Province->find('all') as $key=>$prov){
				$provinces[$key]= array(
										'value'=>$prov['Province']['name'],
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
		}
		
		$this->set(compact('page', 'subpage', 'title_for_layout'));
		$this->render(implode('/', $path));
		
	}
}
