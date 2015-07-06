<?php
/* Factory Fixture generated on: 2015-06-03 22:59:18 : 1433372358 */
class FactoryFixture extends CakeTestFixture {
	var $name = 'Factory';

	var $fields = array(
		'id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36, 'key' => 'primary', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'business_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'location' => array('type' => 'text', 'null' => false, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'contract_manufacturing' => array('type' => 'text', 'null' => false, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'product_line_count' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'r_and_d_staff_count' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'qc_staff_count' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'employee_count' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => '556f86c6-8000-4038-84ee-15cc53314baa',
			'business_id' => 1,
			'location' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'contract_manufacturing' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'product_line_count' => 1,
			'r_and_d_staff_count' => 1,
			'qc_staff_count' => 1,
			'employee_count' => 1,
			'created' => '2015-06-03 22:59:18',
			'modified' => '2015-06-03 22:59:18'
		),
	);
}
