<?php
class Invoice extends AppModel {
	var $name = 'Invoice';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasMany = array(
		'PartTransaction' => array(
			'className' => 'PartTransaction',
			'foreignKey' => 'invoice_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Repair' => array(
			'className' => 'Repair',
			'foreignKey' => 'invoice_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
?>