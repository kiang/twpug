<?php
class User extends AppModel {

	var $name = 'User';
	var $validate = array(
	    'email' => array(
            'isNumeric' => array(
                'rule' => 'email',
                'message' => '信箱的格式有問題',
            ),
			'notEmpty' => array(
                'rule' => 'notEmpty',
                'message' => '這個欄位必須輸入',
            ),
        ),
        'name' => array(
            'notEmpty' => array(
                'rule' => 'notEmpty',
                'message' => '這個欄位必須輸入',
            ),
        ),
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