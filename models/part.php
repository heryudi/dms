<?php
class Part extends AppModel {
	var $name = 'Part';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasMany = array(
		'PartTransaction' => array(
			'className' => 'PartTransaction',
			'foreignKey' => 'part_id',
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