<?php
/* ContactPhone Test cases generated on: 2011-01-11 14:01:55 : 1294729315*/
App::import('Model', 'ContactPhone');

class ContactPhoneTestCase extends CakeTestCase {
	var $fixtures = array('app.contact_phone', 'app.contact');

	function startTest() {
		$this->ContactPhone =& ClassRegistry::init('ContactPhone');
	}

	function endTest() {
		unset($this->ContactPhone);
		ClassRegistry::flush();
	}

}
?>