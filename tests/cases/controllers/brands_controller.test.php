<?php
/* Brands Test cases generated on: 2015-03-10 08:30:10 : 1425972610*/
App::import('Controller', 'Brands');

class TestBrandsController extends BrandsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class BrandsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.brand', 'app.product', 'app.category', 'app.cart', 'app.order_item', 'app.order', 'app.productmod');

	function startTest() {
		$this->Brands =& new TestBrandsController();
		$this->Brands->constructClasses();
	}

	function endTest() {
		unset($this->Brands);
		ClassRegistry::flush();
	}

	function testIndex() {

	}

	function testView() {

	}

	function testAdd() {

	}

	function testEdit() {

	}

	function testDelete() {

	}

	function testAdminIndex() {

	}

	function testAdminView() {

	}

	function testAdminAdd() {

	}

	function testAdminEdit() {

	}

	function testAdminDelete() {

	}

}
