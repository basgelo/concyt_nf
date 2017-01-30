<?php

class ProspectoBecario extends Persona
{
 private $ID;
 private $beca;
 //Data for statistical purposes about the past education of the applicant
 private $procedenceProgrammeName;
 private $procedenceProgrammeType;//Bachelor, Master
 private $procedenceUniversityName;
 private $graduationYear;
 //Data for follow up processes within the system
 private $acceptanceLetter; //cast to bool
 private $reminder; //cast to bool
 const DAYS_FOR_REMINDER = 7; //NUMBER OF DAYS BETWEEN REMINDERS
 protected static $numberProspectsCreated; //Counter for total of applicants
  
 public function __construct(){
	//Default values 
   parent::__construct();
   $this->ID = uniqid();
   $this->applicationYear = 2000;
   $this->acceptanceLetter = FALSE;
   $this->reminder = TRUE;
   self::$numberProspectsCreated++;
 }
 
 public function __toString()
 {
 	return 'ID: ' . $this->ID;
 }
 
 public function setBecas(Becas $newBeca ){
 	$this->beca = $newBeca;
 }
 public function getBecas(){
 	return $this->becas;
 }
 
 public function setProcedenceProgrammeName( $newProcedenceProgrammeName ){
 	$this->procedenceProgrammeName = $newProcedenceProgrammeName;
 }
 public function getProcedenceProgrammeName(){
 	return $this->procedenceProgrammeName;
 }
 
 public function setProcedenceProgrammeType( $newProcedenceProgrammeType ){
 	$this->procedenceProgrammeType = $newProcedenceProgrammeType;
 }
 public function getProcedenceProgrammeType(){
 	return $this->procedenceProgrammeType;
 }
  
 public function setProcedenceUniversityName( $newProcedenceUniversityName ){   
	$this->procedenceUniversityName = $newProcedenceUniversityName;
 }
 public function getProcedenceUniversity(){
    return $this->procedenceUniversityName;
 }
 
 public function setGraduationYear( $newGraduationYear ){
 	$this->graduationYear = $newGraduationYear;
 }
 public function getGradiationYear(){
 	return $this->graduationYear;
 }
 
 public function setApplicationYear( $newApplicationYear ){   
	$this->applicationYear = $newApplicationYear;
 }
 public function getApplicationYear(){
    return $this->applicationYear;
 }
 
 public function setAcceptanceLetter( $newAcceptanceLetter ){   
	$this->acceptanceLetter = $newAcceptanceLetter;
 }
 public function Has_ApplicationYear(){
    return $this->acceptanceLetter;
 }
 
 public function setReminder( $newReminder ){   
	$this->reminder = $newReminder;
 }
 public function Has_Reminder(){
    return $this->reminder;
 }
 
 public static function getNumberProspectsCreated(){
	 return self::$numberProspectsCreated;
 }
  
}

?>