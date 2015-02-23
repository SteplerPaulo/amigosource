<?php
/* Category Fixture generated on: 2014-12-02 08:37:42 : 1417505862 */
class CategoryFixture extends CakeTestFixture {
	var $name = 'Category';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 3, 'key' => 'primary', 'comment' => 'cat_id'),
		'description' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 30, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'seq_order_no' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 3),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'is_active' => array('type' => 'integer', 'null' => true, 'default' => '1', 'length' => 1, 'comment' => '1=yes; 0=no'),
		'indexes' => array('cat_id' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'description' => 'Lorem ipsum dolor sit amet',
			'seq_order_no' => 1,
			'created' => '2014-12-02 08:37:42',
			'is_active' => 1
		),
	);
}
