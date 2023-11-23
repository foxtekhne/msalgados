<?php

namespace  models;

use core\database\DBQuery;
use core\utils\Sanitize;
use core\database\Where;


	class Users {

	private $id;
	private $username;
	private $password;
	private $created_at;

	private $tableName  = "hostdeprojetos_msalgados.users";
	private $fieldsName = "id, username, password, created_at";
	private $fieldKey   = "id";
	private $dbquery     = null;

	function __construct(){
		$this->dbquery = new DBQuery($this->tableName, $this->fieldsName, $this->fieldKey);
	}

	function populate( $id, $username, $password, $created_at){

		 $this->setId( $id );
		 $this->setUsername( $username );
		 $this->setPassword( $password );
		 $this->setCreated_at( $created_at );
	}

	public function toArray(){
		 return array(
			 'id' => $this->getId(),
			 'username' => $this->getUsername(),
			 'password' => $this->getPassword(),
			 'created_at' => $this->getCreated_at()
		);
	}

	public function toJson(){
		return( json_encode( $this->toArray() ));
	}

	public function toString(){
		 return("\n\t\t\t". implode(", ",$this->toArray()));
	}


	public function save() {
		if($this->getId() == 0){
			return( $this->dbquery->insert($this->toArray()));
		}else{
			return( $this->dbquery->update($this->toArray()));
		}
	}

	public function listAll() {
		    $rSet = $this->dbquery->select();
		    return( $rSet );
	}

	
	public function checkLogin() {
	    $where = new Where();
	    $where->addCondition('AND', 'username', '=', $this->getUsername());
	    $where->addCondition('AND', 'password', '=', $this->getPassword());
	    $resultSet = $this->dbquery->selectFiltered($where);
	    if (session_status() == PHP_SESSION_NONE) {
	        session_start();
	    }
	    if( \count($resultSet) > 0 ){
	        foreach ($resultSet as $linha) {
	            $_SESSION["idUsuario"] = $linha['id'];
	        }
	        return(true);
	    }else{
	        unset( $_SESSION["idUsuario"]);
	        return(false);
	    }
	}
	
	public function listByFieldKey( $value ){
		    $where = (new Where())->addCondition('AND', $this->fieldKey , '=', $value);
		    $rSet = $this->dbquery->selectWhere($where);
		    return( $rSet );
	}

	public function delete() {
		if($this->getId() != 0){
			return( $this->dbquery->delete($this->toArray()));
		}
	}

	public function setId( $id ){
		 $this->id = $id;
	}

	public function getId(){
		  return( $this->id );
	}

	public function setUsername( $username ){
		 $this->username = $username;
	}

	public function getUsername(){
		  return( $this->username );
	}

	public function setPassword( $password ){
		 $this->password = $password;
	}

	public function getPassword(){
		  return( $this->password );
	}

	public function setCreated_at( $created_at ){
		 $this->created_at = $created_at;
	}

	public function getCreated_at(){
		  return( $this->created_at );
	}

}


?>