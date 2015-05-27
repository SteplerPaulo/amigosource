<?php
class TemporaryRegistrationProduct extends AppModel {
	var $name = 'TemporaryRegistrationProduct';
	var $displayField = 'name';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'TemporaryRegistration' => array(
			'className' => 'TemporaryRegistration',
			'foreignKey' => 'temporary_registration_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'GeneralCategory' => array(
			'className' => 'Category',
			'foreignKey' => 'general_category_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Classification' => array(
			'className' => 'Category',
			'foreignKey' => 'classification_id',
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
		)
	);
	
	var $hasMany = array(
		'Picture' => array(
			'className' => 'Picture',
			'foreignKey' => 'tmp_product_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
	);
	
	var $actsAs = array(
		'MeioUpload' => array(
			'image' => array(
				'dir' => 'img{DS}uploads{DS}product-images',
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
