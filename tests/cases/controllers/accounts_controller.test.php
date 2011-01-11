<?php
/* Accounts Test cases generated on: 2011-01-11 14:01:51 : 1294729911*/
App::import('Controller', 'Accounts');

class TestAccountsController extends AccountsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class AccountsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.account', 'app.account_phone', 'app.contact', 'app.contact_phone', 'app.part_transaction', 'app.part', 'app.repair_order', 'app.vehicle', 'app.type', 'app.labour', 'app.repair', 'app.complaint', 'app.invoice', 'app.labours_type', 'app.registration');

	function startTest() {
		$this->Accounts =& new TestAccountsController();
		$this->Accounts->constructClasses();
	}

	function endTest() {
		unset($this->Accounts);
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