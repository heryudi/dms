<?php
class Labour extends AppModel {
	var $name = 'Labour';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasMany = array(
		'Repair' => array(
			'className' => 'Repair',
			'foreignKey' => 'labour_id',
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


	var $hasAndBelongsToMany = array(
		'Type' => array(
			'className' => 'Type',
			'joinTable' => 'labours_types',
			'foreignKey' => 'labour_id',
			'associationForeignKey' => 'type_id',
			'unique' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		)
	);

}
?>