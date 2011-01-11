<?php
/* Complaints Test cases generated on: 2011-01-11 14:01:51 : 1294729911*/
App::import('Controller', 'Complaints');

class TestComplaintsController extends ComplaintsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class ComplaintsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.complaint', 'app.repair_order', 'app.vehicle', 'app.type', 'app.labour', 'app.repair', 'app.invoice', 'app.part_transaction', 'app.part', 'app.contact', 'app.account', 'app.account_phone', 'app.registration', 'app.contact_phone', 'app.labours_type');

	function startTest() {
		$this->Complaints =& new TestComplaintsController();
		$this->Complaints->constructClasses();
	}

	function endTest() {
		unset($this->Complaints);
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