<?php
/* AccountPhones Test cases generated on: 2011-01-11 14:01:51 : 1294729911*/
App::import('Controller', 'AccountPhones');

class TestAccountPhonesController extends AccountPhonesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class AccountPhonesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.account_phone', 'app.account', 'app.contact', 'app.contact_phone', 'app.part_transaction', 'app.part', 'app.repair_order', 'app.vehicle', 'app.type', 'app.labour', 'app.repair', 'app.complaint', 'app.invoice', 'app.labours_type', 'app.registration');

	function startTest() {
		$this->AccountPhones =& new TestAccountPhonesController();
		$this->AccountPhones->constructClasses();
	}

	function endTest() {
		unset($this->AccountPhones);
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