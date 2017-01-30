<?php
//to-do implement functionality when the project extends to manage 'Becarios', so far it only manages prospects only.

class Becas{
	
	private $startingDate;
	private $finishingDate;
	
	//Data for follow up the desired applicant's university
	private $programmeName;
	private $programmeType; //Master, PhD
	private $programmeArea;
	private $targetUniversityName;
	private $targetUniversityCountry;
	private $targetUniversityAddress;
	private $applicationYear;
	
	public function setStartingDate( $newStartingDate ){
		$this->startingDate = $newStartingDate;
	}
	public function getStartingDate(){
		return $this->startingDate;
	}
	
	public function setFinishingDate( $newFinishingDate ){
		$this->finishingDate = $newFinishingDate;
	}
	
	public function getFinishingDate(){
		return $this->finishingDate;
	}
	
	//
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
		
}
?>