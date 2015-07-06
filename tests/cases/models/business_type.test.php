<?php
/* BusinessType Test cases generated on: 2015-06-02 12:02:04 : 1433246524*/
App::import('Model', 'BusinessType');

class BusinessTypeTestCase extends CakeTestCase {
	var $fixtures = array('app.business_type', 'app.business', 'app.certification', 'app.factory', 'app.product', 'app.category', 'app.picture', 'app.tmp_business');

	function startTest() {
		$this->BusinessType =& ClassRegistry::init('BusinessType');
	}

	function endTest() {
		unset($this->BusinessType);
		ClassRegistry::flush();
	}

}
