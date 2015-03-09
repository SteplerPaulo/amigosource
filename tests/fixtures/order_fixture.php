<?php
/* Order Fixture generated on: 2015-03-07 13:41:12 : 1425732072 */
class OrderFixture extends CakeTestFixture {
	var $name = 'Order';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
		'first_name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'last_name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'email' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'phone' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'billing_address' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'billing_address2' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'billing_city' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'billing_zip' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'billing_state' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'billing_country' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'shipping_address' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'shipping_address2' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'shipping_city' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'shipping_zip' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'shipping_state' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'shipping_country' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'weight' => array('type' => 'float', 'null' => true, 'default' => '0.00', 'length' => '8,2'),
		'order_item_count' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'subtotal' => array('type' => 'float', 'null' => true, 'default' => NULL, 'length' => '8,2'),
		'tax' => array('type' => 'float', 'null' => true, 'default' => NULL, 'length' => '8,2'),
		'shipping' => array('type' => 'float', 'null' => true, 'default' => NULL, 'length' => '8,2'),
		'total' => array('type' => 'float', 'null' => true, 'default' => NULL, 'length' => '8,2'),
		'order_type' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'authorization' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'transaction' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'status' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'ip_address' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_unicode_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'first_name' => 'Lorem ipsum dolor sit amet',
			'last_name' => 'Lorem ipsum dolor sit amet',
			'email' => 'Lorem ipsum dolor sit amet',
			'phone' => 'Lorem ipsum dolor sit amet',
			'billing_address' => 'Lorem ipsum dolor sit amet',
			'billing_address2' => 'Lorem ipsum dolor sit amet',
			'billing_city' => 'Lorem ipsum dolor sit amet',
			'billing_zip' => 'Lorem ipsum dolor sit amet',
			'billing_state' => 'Lorem ipsum dolor sit amet',
			'billing_country' => 'Lorem ipsum dolor sit amet',
			'shipping_address' => 'Lorem ipsum dolor sit amet',
			'shipping_address2' => 'Lorem ipsum dolor sit amet',
			'shipping_city' => 'Lorem ipsum dolor sit amet',
			'shipping_zip' => 'Lorem ipsum dolor sit amet',
			'shipping_state' => 'Lorem ipsum dolor sit amet',
			'shipping_country' => 'Lorem ipsum dolor sit amet',
			'weight' => 1,
			'order_item_count' => 1,
			'subtotal' => 1,
			'tax' => 1,
			'shipping' => 1,
			'total' => 1,
			'order_type' => 'Lorem ipsum dolor sit amet',
			'authorization' => 'Lorem ipsum dolor sit amet',
			'transaction' => 'Lorem ipsum dolor sit amet',
			'status' => 'Lorem ipsum dolor sit amet',
			'ip_address' => 'Lorem ipsum dolor sit amet',
			'created' => '2015-03-07 13:41:12',
			'modified' => '2015-03-07 13:41:12'
		),
	);
}