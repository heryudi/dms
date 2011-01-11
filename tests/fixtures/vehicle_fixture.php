<?php
/* Vehicle Fixture generated on: 2011-01-11 14:01:07 : 1294729327 */
class VehicleFixture extends CakeTestFixture {
	var $name = 'Vehicle';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'vin' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'engine_nr' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'type_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'vin' => 'Lorem ipsum dolor sit amet',
			'engine_nr' => 'Lorem ipsum dolor sit amet',
			'type_id' => 1,
			'created' => '2011-01-11 14:02:07',
			'modified' => '2011-01-11 14:02:07'
		),
	);
}
?>