<?php
class User extends AppModel {
	var $name = 'User';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasOne = array(
		'Document' => array(
			'className' => 'Document',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);


}
