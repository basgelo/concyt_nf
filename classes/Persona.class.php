<?php

class Persona
{
 private $name;
 private $lastName1;
 private $lastName2;
 private $address;
 private $telephone1;
 private $telephone2;
 private $email_address;
 private $user;
 
 public function __construct(){
	//Default values 
   $this->name = "noname";
   $this->lastName1 = "nolastname";
   
}
 
 public function setName( $newName ){   
	$this->name = $newName;
 }
 public function getName(){
    return $this->name;
 }
 
 public function setLastName1( $newlastName1 ){   
	$this->lastName1 = $newlastName1;
 }
 public function getlastName1(){
    return $this->lastName1;
 }
 
 public function setLastName2( $newLastName2 ){   
	$this->lastName2 = $newLastName2;
 }
 public function getLastName2(){
    return $this->lastName2;
 }
 
 public function setAddress( $newAddress ){   
	$this->address = $newAddress;
 }
 public function getAddress(){
    return $this->address;
 }
 
 public function setTelephone1( $newTelephone1 ){   
	$this->telephone1 = $newTelephone1;
 }
 public function getTelephone1(){
    return $this->telephone1;
 }
 
 public function setTelephone2( $newTelephone2 ){   
	$this->telephone2 = $newTelephone2;
 }
 public function getTelephone2(){
    return $this->telephone2;
 }
 
 public function setEmail_Address( $newEmail_Address ){   
	$this->email_address =  $this->checkEmail_Address( $newEmail_Address);
 }
 public function getEmail_Address(){
    return $this->email_address;
 }
 
 private function checkEmail_Address($email_AddressToCheck){
 	if(filter_var($email_AddressToCheck, FILTER_VALIDATE_EMAIL)){
 		return TRUE;
 	}else{
 		return FALSE;
 	}
 }
 
 public function setUSer(SystemUser $newUser ){
 	$this->user = $newUser;
 }
 public function getUser(){
 	return $this->user;
 }

}

?>