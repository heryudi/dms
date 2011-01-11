<?php
/* LaboursTypes Test cases generated on: 2011-01-11 14:01:50 : 1294729670*/
App::import('Controller', 'LaboursTypes');

class TestLaboursTypesController extends LaboursTypesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class LaboursTypesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.labours_type', 'app.labour', 'app.repair', 'app.complaint', 'app.repair_order', 'app.vehicle', 'app.type', 'app.registration', 'app.contact', 'app.account', 'app.account_phone', 'app.contact_phone', 'app.part_transaction', 'app.part', 'app.invoice');

	function startTest() {
		$this->LaboursTypes =& new TestLaboursTypesController();
		$this->LaboursTypes->constructClasses();
	}

	function endTest() {
		unset($this->LaboursTypes);
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