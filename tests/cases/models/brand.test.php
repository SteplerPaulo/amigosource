<?php
/* Brand Test cases generated on: 2015-03-07 13:40:10 : 1425732010*/
App::import('Model', 'Brand');

class BrandTestCase extends CakeTestCase {
	var $fixtures = array('app.brand', 'app.product');

	function startTest() {
		$this->Brand =& ClassRegistry::init('Brand');
	}

	function endTest() {
		unset($this->Brand);
		ClassRegistry::flush();
	}

}
