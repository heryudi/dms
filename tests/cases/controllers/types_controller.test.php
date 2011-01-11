<?php
/* Types Test cases generated on: 2011-01-11 14:01:53 : 1294729913*/
App::import('Controller', 'Types');

class TestTypesController extends TypesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class TypesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.type', 'app.vehicle', 'app.registration', 'app.contact', 'app.account', 'app.account_phone', 'app.contact_phone', 'app.part_transaction', 'app.part', 'app.repair_order', 'app.complaint', 'app.repair', 'app.labour', 'app.labours_type', 'app.invoice');

	function startTest() {
		$this->Types =& new TestTypesController();
		$this->Types->constructClasses();
	}

	function endTest() {
		unset($this->Types);
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

}
?>