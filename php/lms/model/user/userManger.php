<?php

class UserManager{
	private $_bdd;
	function __construct($bdd){
		$this->_bdd= $bdd;
	}
	function findUserByEmail($email){
		$request=$this->_bdd->prepare('select * from user where email = :email');
		$request->bindParam('email',$email);
		$request->execute();
		return $request->fetch();
	}
	function updateUser($id){
		$request= $this->_bdd->prepare('update user set last_login=now() where user_id= :id');
		$request->bindParam('id',$id);
		$request->execute();
	}
}




 ?>