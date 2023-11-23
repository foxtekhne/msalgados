<?php

namespace  models;

use core\database\DBQuery;
use core\utils\Sanitize;
use core\database\Where;


	class Products {

	private $id;
	private $name;
	private $price;
	private $image;

	private $tableName  = "hostdeprojetos_msalgados.products";
	private $fieldsName = "id, name, price, image";
	private $fieldKey   = "id";
	private $dbquery     = null;

	function __construct(){
		$this->dbquery = new DBQuery($this->tableName, $this->fieldsName, $this->fieldKey);
	}

	function populate( $id, $name, $price, $image){

		 $this->setId( $id );
		 $this->setName( $name );
		 $this->setPrice( $price );
		 $this->setImage( $image );
	}

	public function toArray(){
		 return array(
			 'id' => $this->getId(),
			 'name' => $this->getName(),
			 'price' => $this->getPrice(),
			 'image' => $this->getImage()
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

	public function setName( $name ){
		 $this->name = $name;
	}

	public function getName(){
		  return( $this->name );
	}

	public function setPrice( $price ){
		 $this->price = $price;
	}

	public function getPrice(){
		  return( $this->price );
	}

	public function setImage( $image ){
		 $this->image = $image;
	}

	public function getImage(){
		  return( $this->image );
	}

}


?>