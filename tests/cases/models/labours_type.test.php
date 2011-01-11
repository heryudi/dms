<?php
/* LaboursType Test cases generated on: 2011-01-11 14:01:59 : 1294729319*/
App::import('Model', 'LaboursType');

class LaboursTypeTestCase extends CakeTestCase {
	var $fixtures = array('app.labours_type', 'app.labour', 'app.repair', 'app.type');

	function startTest() {
		$this->LaboursType =& ClassRegistry::init('LaboursType');
	}

	function endTest() {
		unset($this->LaboursType);
		ClassRegistry::flush();
	}

}
?>