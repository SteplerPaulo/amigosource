<?php
/* Product Test cases generated on: 2015-06-02 12:02:15 : 1433246535*/
App::import('Model', 'Product');

class ProductTestCase extends CakeTestCase {
	var $fixtures = array('app.product', 'app.category', 'app.business', 'app.business_type', 'app.tmp_business', 'app.certification', 'app.factory', 'app.picture');

	function startTest() {
		$this->Product =& ClassRegistry::init('Product');
	}

	function endTest() {
		unset($this->Product);
		ClassRegistry::flush();
	}

}
