<?php
/* Labours Test cases generated on: 2011-01-11 14:01:52 : 1294729912*/
App::import('Controller', 'Labours');

class TestLaboursController extends LaboursController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class LaboursControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.labour', 'app.repair', 'app.complaint', 'app.repair_order', 'app.vehicle', 'app.type', 'app.labours_type', 'app.registration', 'app.contact', 'app.account', 'app.account_phone', 'app.contact_phone', 'app.part_transaction', 'app.part', 'app.invoice');

	function startTest() {
		$this->Labours =& new TestLaboursController();
		$this->Labours->constructClasses();
	}

	function endTest() {
		unset($this->Labours);
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