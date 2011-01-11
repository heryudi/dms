<?php
/* Repairs Test cases generated on: 2011-01-11 14:01:53 : 1294729913*/
App::import('Controller', 'Repairs');

class TestRepairsController extends RepairsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class RepairsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.repair', 'app.complaint', 'app.repair_order', 'app.vehicle', 'app.type', 'app.labour', 'app.labours_type', 'app.registration', 'app.contact', 'app.account', 'app.account_phone', 'app.contact_phone', 'app.part_transaction', 'app.part', 'app.invoice');

	function startTest() {
		$this->Repairs =& new TestRepairsController();
		$this->Repairs->constructClasses();
	}

	function endTest() {
		unset($this->Repairs);
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