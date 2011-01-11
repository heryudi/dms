<?php
/* Repair Fixture generated on: 2011-01-11 14:01:04 : 1294729324 */
class RepairFixture extends CakeTestFixture {
	var $name = 'Repair';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'complaint_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'labour_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'fee' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'discount' => array('type' => 'float', 'null' => true, 'default' => NULL, 'length' => '3,1'),
		'start' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'finish' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'status' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'invoice_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'complaint_id' => 1,
			'labour_id' => 1,
			'fee' => 1,
			'discount' => 1,
			'start' => '2011-01-11 14:02:04',
			'finish' => '2011-01-11 14:02:04',
			'status' => 'Lorem ipsum dolor sit amet',
			'invoice_id' => 1,
			'created' => '2011-01-11 14:02:04',
			'modified' => '2011-01-11 14:02:04'
		),
	);
}
?>