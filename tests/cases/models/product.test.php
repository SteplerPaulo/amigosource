<?php
/* Product Test cases generated on: 2015-03-07 13:41:55 : 1425732115*/
App::import('Model', 'Product');

class ProductTestCase extends CakeTestCase {
	var $fixtures = array('app.product', 'app.category', 'app.brand', 'app.cart', 'app.order_item', 'app.order', 'app.productmod');

	function startTest() {
		$this->Product =& ClassRegistry::init('Product');
	}

	function endTest() {
		unset($this->Product);
		ClassRegistry::flush();
	}

}
