<?php
class SystemUser{
	private $userName;
	private $password;
	private $userType;
	private $creationDate;
	
	public function setUserName( $newUserName ){
		$this->userName = $newUserName;
	}
	public function getUserName(){
		return $this->userName;
	}
	
	public function setPassword( $newPassword ){
		$this->password = $newPassword;
	}
	public function getPassword(){
		return $this->password;
	}
	
	public function setCreationDate( $newCreationDate ){
		$this->creationDate = $newCreationDate;
	}
	public function getCreationDate(){
		return $this->creationDate;
	}
	
}
?>