<?php
/* Productmod Test cases generated on: 2015-03-07 13:41:28 : 1425732088*/
App::import('Model', 'Productmod');

class ProductmodTestCase extends CakeTestCase {
	var $fixtures = array('app.productmod', 'app.product');

	function startTest() {
		$this->Productmod =& ClassRegistry::init('Productmod');
	}

	function endTest() {
		unset($this->Productmod);
		ClassRegistry::flush();
	}

}
