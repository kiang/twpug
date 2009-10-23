<?php
class Topic extends AppModel {

	var $name = 'Topic';
	var $validate = array(
		'user_id' => array('numeric'),
		'sort' => array('numeric'),
		'title' => array('notempty')
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

}
?>