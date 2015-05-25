<?php
class Picture extends AppModel {
	var $name = 'Picture';
	var $displayField = 'name';
	var $belongsTo = array(
		'TemporaryRegistrationProduct' => array(
			'className' => 'TemporaryRegistrationProduct',
			'foreignKey' => 'tmp_product_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
