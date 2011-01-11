<?php
/* Vehicles Test cases generated on: 2011-01-11 14:01:53 : 1294729913*/
App::import('Controller', 'Vehicles');

class TestVehiclesController extends VehiclesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class VehiclesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.vehicle', 'app.type', 'app.labour', 'app.repair', 'app.complaint', 'app.repair_order', 'app.contact', 'app.account', 'app.account_phone', 'app.registration', 'app.contact_phone', 'app.part_transaction', 'app.part', 'app.invoice', 'app.labours_type');

	function startTest() {
		$this->Vehicles =& new TestVehiclesController();
		$this->Vehicles->constructClasses();
	}

	function endTest() {
		unset($this->Vehicles);
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