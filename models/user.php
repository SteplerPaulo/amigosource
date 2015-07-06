<?php
class User extends AppModel {
	var $name = 'User';
	var $validate = array(
		'email' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'password' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
	public function beforeFind($queryData) {
		if (empty($queryData['fields'])) {
			$schema = $this->schema();
			unset($schema['password']);
			//unset($schema['email']);

			foreach (array_keys($schema) as $field) {
				$queryData['fields'][] = $this->alias . '.' . $field;
			}
			return $queryData;
		}
		return parent::beforeFind($queryData);
	}
	public function checkEmail($email){
		$conditions = array('User.email'=>$email);
		$this->recursive=0;
		$reg_user = $this->find('count',array('conditions'=>$conditions));
		$this->tablePrefix= 'temp_';
		$tmp_user = $this->find('count',array('conditions'=>$conditions));
		return $reg_user+$tmp_user;
	}

}
