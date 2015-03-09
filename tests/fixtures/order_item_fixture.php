<?php
/* OrderItem Fixture generated on: 2015-03-07 13:40:53 : 1425732053 */
class OrderItemFixture extends CakeTestFixture {
	var $name = 'OrderItem';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
		'order_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 10),
		'product_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 10),
		'name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'quantity' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'weight' => array('type' => 'float', 'null' => true, 'default' => '0.00', 'length' => '8,2'),
		'price' => array('type' => 'float', 'null' => true, 'default' => NULL, 'length' => '8,2'),
		'subtotal' => array('type' => 'float', 'null' => true, 'default' => NULL, 'length' => '8,2'),
		'productmod_name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_unicode_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'order_id' => 1,
			'product_id' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'quantity' => 1,
			'weight' => 1,
			'price' => 1,
			'subtotal' => 1,
			'productmod_name' => 'Lorem ipsum dolor sit amet',
			'created' => '2015-03-07 13:40:53',
			'modified' => '2015-03-07 13:40:53'
		),
	);
}
