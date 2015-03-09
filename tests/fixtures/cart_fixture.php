<?php
/* Cart Fixture generated on: 2015-03-07 13:40:32 : 1425732032 */
class CartFixture extends CakeTestFixture {
	var $name = 'Cart';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
		'sessionid' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'product_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'weight' => array('type' => 'float', 'null' => true, 'default' => NULL, 'length' => '6,2'),
		'price' => array('type' => 'float', 'null' => true, 'default' => NULL, 'length' => '6,2'),
		'quantity' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'weight_total' => array('type' => 'float', 'null' => true, 'default' => NULL, 'length' => '6,2'),
		'subtotal' => array('type' => 'float', 'null' => true, 'default' => NULL, 'length' => '6,2'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_unicode_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'sessionid' => 'Lorem ipsum dolor sit amet',
			'product_id' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'weight' => 1,
			'price' => 1,
			'quantity' => 1,
			'weight_total' => 1,
			'subtotal' => 1,
			'created' => '2015-03-07 13:40:32',
			'modified' => '2015-03-07 13:40:32'
		),
	);
}
