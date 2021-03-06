<?php
class Photo extends AppModel {
	var $name = 'Photo';
	var $validate = array(
		'gallery_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => true, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'name' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => true, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Gallery' => array(
			'className' => 'Gallery',
			'foreignKey' => 'gallery_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
	
	var $actsAs = array(
		'MeioUpload' => array(
			'img_file' => array(
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
