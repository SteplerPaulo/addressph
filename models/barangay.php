<?php
class Barangay extends AppModel {
	var $name = 'Barangay';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Municipality' => array(
			'className' => 'Municipality',
			'foreignKey' => 'municipality_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
