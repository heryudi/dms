<?php
/* ContactPhone Fixture generated on: 2011-01-11 14:01:55 : 1294729315 */
class ContactPhoneFixture extends CakeTestFixture {
	var $name = 'ContactPhone';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'contact_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'phone' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'contact_id' => 1,
			'phone' => 'Lorem ipsum dolor sit amet',
			'created' => '2011-01-11 14:01:55',
			'modified' => '2011-01-11 14:01:55'
		),
	);
}
?>