<?php
/* Product Fixture generated on: 2015-03-07 13:41:54 : 1425732114 */
class ProductFixture extends CakeTestFixture {
	var $name = 'Product';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'category_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'key' => 'index'),
		'brand_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'key' => 'index'),
		'name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'key' => 'index', 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'slug' => array('type' => 'string', 'null' => true, 'default' => NULL, 'key' => 'index', 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'description' => array('type' => 'text', 'null' => true, 'default' => NULL, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'image' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'price' => array('type' => 'float', 'null' => true, 'default' => NULL, 'length' => '8,2'),
		'weight' => array('type' => 'float', 'null' => true, 'default' => NULL, 'length' => '8,2'),
		'tags' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'views' => array('type' => 'integer', 'null' => true, 'default' => '0'),
		'active' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 1),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL, 'key' => 'index'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'name' => array('column' => 'name', 'unique' => 0), 'modified' => array('column' => 'modified', 'unique' => 0), 'name_slug' => array('column' => 'slug', 'unique' => 0), 'category_id' => array('column' => 'category_id', 'unique' => 0), 'brand_id' => array('column' => 'brand_id', 'unique' => 0)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_unicode_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'category_id' => 1,
			'brand_id' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'slug' => 'Lorem ipsum dolor sit amet',
			'description' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'image' => 'Lorem ipsum dolor sit amet',
			'price' => 1,
			'weight' => 1,
			'tags' => 'Lorem ipsum dolor sit amet',
			'views' => 1,
			'active' => 1,
			'created' => '2015-03-07 13:41:54',
			'modified' => '2015-03-07 13:41:54'
		),
	);
}
