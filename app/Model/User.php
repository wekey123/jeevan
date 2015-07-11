<?php
App::uses('AppModel', 'Model');
/**
 * User Model
 *
 * @property Order $Order
 */
class User extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Order' => array(
			'className' => 'Order',
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
	
	private $username;
	private $password;
	private $email;
	private $role;
	private $created;
	private $modified;
	
	public function setUsername($username){
		$this->username = $username;
	}

	public function getUsername(){
		return $this->username;
	}
	
	public function setPassword($username){
		$this->password = $password;
	}

	public function getPassword(){
		return $this->password;
	}	
	
	public function setEmail($email){
		$this->email = $email;
	}

	public function getEmail(){
		return $this->email;
	}
		
	
	public function setRole($role){
		$this->role = $role;
	}

	public function getRole(){
		return $this->role;
	}
	
	public function setCreated($created){
		$this->created = $created;
	}

	public function getCreated(){
		return $this->created;
	}
		
	public function setModified($modified){
		$this->modified = $modified;
	}

	public function getModified(){
		return $this->modified;
	}
	
}
