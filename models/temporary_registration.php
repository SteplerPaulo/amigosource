<?php
class TemporaryRegistration extends AppModel {
	var $name = 'TemporaryRegistration';
	
	var $virtualFields = array('registration_type'=>"CASE TemporaryRegistration.registration_type WHEN 1 THEN 'Supplier' WHEN 2 THEN 'Buyer' END ");
	
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'BusinessType' => array(
			'className' => 'BusinessType',
			'foreignKey' => 'business_type_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'MonetaryCurrency' => array(
			'className' => 'MonetaryCurrency',
			'foreignKey' => 'monetary_currency_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Country' => array(
			'className' => 'Country',
			'foreignKey' => 'business_country',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	var $hasMany = array(
		'TemporaryRegistrationAddressNotPhilippine' => array(
			'className' => 'TemporaryRegistrationAddressNotPhilippine',
			'foreignKey' => 'temporary_registration_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'TemporaryRegistrationCertification' => array(
			'className' => 'TemporaryRegistrationCertification',
			'foreignKey' => 'temporary_registration_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'TemporaryRegistrationProduct' => array(
			'className' => 'TemporaryRegistrationProduct',
			'foreignKey' => 'temporary_registration_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
