<?php
/* Productmod Fixture generated on: 2015-03-07 13:41:28 : 1425732088 */
class ProductmodFixture extends CakeTestFixture {
	var $name = 'Productmod';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
		'product_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 10, 'key' => 'index'),
		'sku' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'value' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 36, 'key' => 'index', 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'price' => array('type' => 'float', 'null' => true, 'default' => NULL, 'length' => '8,2'),
		'weight' => array('type' => 'float', 'null' => true, 'default' => NULL, 'length' => '8,2'),
		'active' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 1),
		'views' => array('type' => 'integer', 'null' => true, 'default' => '0'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL, 'key' => 'index'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'modified' => array('column' => 'modified', 'unique' => 0), 'category_id' => array('column' => 'product_id', 'unique' => 0), 'brand_id' => array('column' => 'value', 'unique' => 0)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_unicode_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'product_id' => 1,
			'sku' => 'Lorem ipsum dolor sit amet',
			'name' => 'Lorem ipsum dolor sit amet',
			'value' => 'Lorem ipsum dolor sit amet',
			'price' => 1,
			'weight' => 1,
			'active' => 1,
			'views' => 1,
			'created' => '2015-03-07 13:41:28',
			'modified' => '2015-03-07 13:41:28'
		),
	);
}
