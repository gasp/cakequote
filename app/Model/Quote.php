<?php
App::uses('AppModel', 'Model');
/**
 * Quote Model
 *
 * @property User $User
 */
class Quote extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'title';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);


	public function isOwnedBy($quote_id,$user_id){

        return $this->field('id',array('id'=>$quote_id, 'user_id'=>$user_id)) === $quote_id;

	}
}