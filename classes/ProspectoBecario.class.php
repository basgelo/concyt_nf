<?php

class ProspectoBecario extends Persona
{
 //Data for follow up the desired applicant's university
 private $programmeName;
 private $programmeType; //Master, PhD
 private $programmeArea;
 private $targetUniversityName; 
 private $targetUniversityCountry;
 private $targetUniversityAddress;
 private $applicationYear;
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
   $this->applicationYear = 2000;
   $this->acceptanceLetter = FALSE;
   $this->reminder = TRUE;
   self::$numberProspectsCreated++;
}
 public function setProgrammeName( $newProgrammeName ){   
	$this->programmeName = $newProgrammeName;
 }
 public function getProgrammeName(){
    return $this->programmeName;
 }
 
 public function setProgrammeType( $newProgrammeType ){   
	$this->programmeType = $newProgrammeType;
 }
 public function getProgrammeType(){
    return $this->programmeType;
 } 

 public function setProgrammeArea( $newProgrammeArea ){
 	$this->programmeArea = $newProgrammeArea;
 }
 public function getProgrammeArea(){
 	return $this->programmeArea;
 }
 
 public function setTargetUniversityName( $newTargetUniversityName ){   
	$this->targetUniversityName = $newTargetUniversityName;
 }
 public function getTargetUniversityName(){
    return $this->targetUniversityName;
 }
 
 public function setTargetUniversityCountry( $newTargetUniversityCountry ){
 	$this->targetUniversityCountry = $newTargetUniversityCountry;
 }
 public function getTargetUniversityCountry(){
 	return $this->targetUniversityCountry;
 }
 
 public function setTargetUniversityAddress( $newTargetUniversityAddress ){
 	$this->targetUniversityAddress = $newTargetUniversityAddress;
 }
 public function getTargetUniversityAddress(){
 	return $this->targetUniversityAddress;
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