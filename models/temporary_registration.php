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
	
	var $actsAs = array(
		'MeioUpload' => array(
			'logo' => array(
				'dir' => 'img{DS}uploads{DS}images',
				'create_directory' => false,
				'allowed_mime' => array('image/jpeg', 'image/pjpeg', 'image/png'),
				'allowed_ext' => array('.jpg', '.jpeg', '.png'),
				'zoomCrop' => true,
				'thumbsizes' => array(
					'normal' => array('width' => 400, 'height' => 300),
					'small' => array('width' => 80, 'height' => 80,'maxDimension' => '', 'thumbnailQuality' => 100, 'zoomCrop' => true),
				),
				'default' => 'default.jpg'
			)
		),
		'MeioUpload' => array(
			'files' => array(
				'dir' => 'img{DS}uploads{DS}images',
				'create_directory' => false,
				'allowed_mime' => array('image/jpeg', 'image/pjpeg', 'image/png'),
				'allowed_ext' => array('.jpg', '.jpeg', '.png'),
				'zoomCrop' => true,
				'thumbsizes' => array(
					'normal' => array('width' => 400, 'height' => 300),
					'small' => array('width' => 80, 'height' => 80,'maxDimension' => '', 'thumbnailQuality' => 100, 'zoomCrop' => true),
				),
				'default' => 'default.jpg'
			)
		)
	);

}
