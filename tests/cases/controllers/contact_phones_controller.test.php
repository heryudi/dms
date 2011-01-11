<?php
/* ContactPhones Test cases generated on: 2011-01-11 14:01:51 : 1294729911*/
App::import('Controller', 'ContactPhones');

class TestContactPhonesController extends ContactPhonesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class ContactPhonesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.contact_phone', 'app.contact', 'app.account', 'app.account_phone', 'app.registration', 'app.vehicle', 'app.type', 'app.labour', 'app.repair', 'app.complaint', 'app.repair_order', 'app.part_transaction', 'app.part', 'app.invoice', 'app.labours_type');

	function startTest() {
		$this->ContactPhones =& new TestContactPhonesController();
		$this->ContactPhones->constructClasses();
	}

	function endTest() {
		unset($this->ContactPhones);
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