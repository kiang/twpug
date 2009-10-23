<?php
class Topic extends AppModel {

	var $name = 'Topic';
	var $validate = array(
	    'sort' => array(
            'isNumeric' => array(
                'rule' => 'numeric',
                'message' => '這個欄位必須使用數字',
            ),
			'notEmpty' => array(
                'rule' => 'notEmpty',
                'message' => '這個欄位必須輸入',
            ),
        ),
        'title' => array(
            'notEmpty' => array(
                'rule' => 'notEmpty',
                'message' => '這個欄位必須輸入',
            ),
        ),
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