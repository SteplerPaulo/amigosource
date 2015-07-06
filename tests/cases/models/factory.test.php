<?php
/* Factory Test cases generated on: 2015-06-02 12:02:12 : 1433246532*/
App::import('Model', 'Factory');

class FactoryTestCase extends CakeTestCase {
	var $fixtures = array('app.factory', 'app.business', 'app.business_type', 'app.tmp_business', 'app.certification', 'app.product', 'app.category', 'app.picture');

	function startTest() {
		$this->Factory =& ClassRegistry::init('Factory');
	}

	function endTest() {
		unset($this->Factory);
		ClassRegistry::flush();
	}

}
