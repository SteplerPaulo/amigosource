<?php
/* User Fixture generated on: 2015-05-26 06:38:26 : 1432622306 */
class UserFixture extends CakeTestFixture {
	var $name = 'User';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'username' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'comment' => 'Username', 'charset' => 'latin1'),
		'password' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 60, 'collate' => 'latin1_swedish_ci', 'comment' => 'Password', 'charset' => 'latin1'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => NULL, 'comment' => 'Date Registered'),
		'status' => array('type' => 'string', 'null' => true, 'default' => 'PEND', 'length' => 4, 'collate' => 'latin1_swedish_ci', 'comment' => 'Status either PEND-ing or RETuRn', 'charset' => 'latin1'),
		'type' => array('type' => 'string', 'null' => true, 'default' => 'RGLR', 'length' => 4, 'collate' => 'latin1_swedish_ci', 'comment' => 'Type Regular', 'charset' => 'latin1'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'username' => 'Lorem ipsum dolor sit amet',
			'password' => 'Lorem ipsum dolor sit amet',
			'created' => '2015-05-26 06:38:26',
			'status' => 'Lo',
			'type' => 'Lo'
		),
	);
}
