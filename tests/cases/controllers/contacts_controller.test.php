<?php
/* Contacts Test cases generated on: 2011-01-11 14:01:52 : 1294729912*/
App::import('Controller', 'Contacts');

class TestContactsController extends ContactsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class ContactsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.contact', 'app.account', 'app.account_phone', 'app.registration', 'app.vehicle', 'app.type', 'app.labour', 'app.repair', 'app.complaint', 'app.repair_order', 'app.part_transaction', 'app.part', 'app.invoice', 'app.labours_type', 'app.contact_phone');

	function startTest() {
		$this->Contacts =& new TestContactsController();
		$this->Contacts->constructClasses();
	}

	function endTest() {
		unset($this->Contacts);
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