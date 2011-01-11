<?php
class Type extends AppModel {
	var $name = 'Type';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasMany = array(
		'Vehicle' => array(
			'className' => 'Vehicle',
			'foreignKey' => 'type_id',
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
		'Labour' => array(
			'className' => 'Labour',
			'joinTable' => 'labours_types',
			'foreignKey' => 'type_id',
			'associationForeignKey' => 'labour_id',
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