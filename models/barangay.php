<?php
class Barangay extends AppModel {
	var $name = 'Barangay';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'City' => array(
			'className' => 'City',
			'foreignKey' => 'city_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
	function afterFind($results){
		$response = array();
		foreach($results as $index=>$result){
			$brgy = array();
			if(isset($result['Barangay'])){
				foreach($result['Barangay'] as $key=>$value){
					$brgy[$key]=$value;
				}
				array_push($response,$brgy);
			}
		}
		if(count($response)==0) return $results;
		return $response;
	}
}
