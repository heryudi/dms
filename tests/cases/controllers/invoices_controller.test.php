<?php
/* Invoices Test cases generated on: 2011-01-11 14:01:52 : 1294729912*/
App::import('Controller', 'Invoices');

class TestInvoicesController extends InvoicesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class InvoicesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.invoice', 'app.part_transaction', 'app.part', 'app.repair_order', 'app.vehicle', 'app.type', 'app.labour', 'app.repair', 'app.complaint', 'app.labours_type', 'app.registration', 'app.contact', 'app.account', 'app.account_phone', 'app.contact_phone');

	function startTest() {
		$this->Invoices =& new TestInvoicesController();
		$this->Invoices->constructClasses();
	}

	function endTest() {
		unset($this->Invoices);
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