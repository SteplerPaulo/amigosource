<?php
class Province extends AppModel {
	var $name = 'Province';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Country' => array(
			'className' => 'Country',
			'foreignKey' => 'country_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	var $hasMany = array(
		'City' => array(
			'className' => 'City',
			'foreignKey' => 'province_id',
			'dependent' => false,
			'conditions' => array('is_active'),
			'fields' => array('id','name','province_id','zip_code'),
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);
	function afterFind($results){
		$response = array();
		foreach($results as $index=>$result){
			$prov = array();
			if(isset($result['Province'])){
				foreach($result['Province'] as $key=>$value){
					$prov[$key]=$value;
				}
				$prov['cities']  =$result['City'];
				array_push($response,$prov);
			}
		}
		if(count($response)==0) return $results;
		return $response;
	}
}
