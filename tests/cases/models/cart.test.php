<?php
/* Cart Test cases generated on: 2015-03-07 13:40:32 : 1425732032*/
App::import('Model', 'Cart');

class CartTestCase extends CakeTestCase {
	var $fixtures = array('app.cart', 'app.product');

	function startTest() {
		$this->Cart =& ClassRegistry::init('Cart');
	}

	function endTest() {
		unset($this->Cart);
		ClassRegistry::flush();
	}

}
