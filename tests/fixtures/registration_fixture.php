<?php
/* Registration Fixture generated on: 2011-01-11 14:01:02 : 1294729322 */
class RegistrationFixture extends CakeTestFixture {
	var $name = 'Registration';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'vehicle_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'contact_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'account_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'year' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'registration_exp_date' => array('type' => 'date', 'null' => true, 'default' => NULL),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'vehicle_id' => 1,
			'contact_id' => 1,
			'account_id' => 1,
			'year' => 1,
			'registration_exp_date' => '2011-01-11',
			'created' => '2011-01-11 14:02:02',
			'modified' => '2011-01-11 14:02:02'
		),
	);
}
?>