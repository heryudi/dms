<?php
/* Parts Test cases generated on: 2011-01-11 14:01:52 : 1294729912*/
App::import('Controller', 'Parts');

class TestPartsController extends PartsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class PartsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.part', 'app.part_transaction', 'app.repair_order', 'app.vehicle', 'app.type', 'app.labour', 'app.repair', 'app.complaint', 'app.invoice', 'app.labours_type', 'app.registration', 'app.contact', 'app.account', 'app.account_phone', 'app.contact_phone');

	function startTest() {
		$this->Parts =& new TestPartsController();
		$this->Parts->constructClasses();
	}

	function endTest() {
		unset($this->Parts);
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