<?php
class User extends AppModel {

	var $name = 'User';
	var $validate = array(
		'name' => array('notempty'),
		'email' => array('email')
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $hasMany = array(
		'Topic' => array(
			'className' => 'Topic',
			'foreignKey' => 'user_id',
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