<?php
/* Picture Fixture generated on: 2015-06-02 12:02:14 : 1433246534 */
class PictureFixture extends CakeTestFixture {
	var $name = 'Picture';

	var $fields = array(
		'id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36, 'key' => 'primary', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'url' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 150, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'product_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => '556d9b46-31fc-4316-9a1b-19e853314baa',
			'url' => 'Lorem ipsum dolor sit amet',
			'product_id' => 1,
			'created' => '2015-06-02 12:02:14'
		),
	);
}
