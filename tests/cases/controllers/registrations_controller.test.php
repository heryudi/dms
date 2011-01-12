<?php
/* Registrations Test cases generated on: 2011-01-12 16:01:46 : 1294824526*/
App::import('Controller', 'Registrations');

class TestRegistrationsController extends RegistrationsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class RegistrationsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.registration', 'app.vehicle', 'app.type', 'app.labour', 'app.repair', 'app.complaint', 'app.repair_order', 'app.contact', 'app.account', 'app.account_phone', 'app.contact_phone', 'app.part_transaction', 'app.part', 'app.invoice', 'app.labours_type');

	function startTest() {
		$this->Registrations =& new TestRegistrationsController();
		$this->Registrations->constructClasses();
	}

	function endTest() {
		unset($this->Registrations);
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