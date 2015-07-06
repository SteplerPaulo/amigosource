<?php
/* Business Test cases generated on: 2015-06-02 12:02:06 : 1433246526*/
App::import('Model', 'Business');

class BusinessTestCase extends CakeTestCase {
	var $fixtures = array('app.business', 'app.business_type', 'app.tmp_business', 'app.certification', 'app.factory', 'app.product', 'app.category', 'app.picture');

	function startTest() {
		$this->Business =& ClassRegistry::init('Business');
	}

	function endTest() {
		unset($this->Business);
		ClassRegistry::flush();
	}

}
