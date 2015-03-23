<?php
	include_once('modele/Model.php');
	class Patho extends Model{
	
		private $symptomes ="";
		private $meridien ="";
		private $type ="";
		private $description ="";
		private $element = "";
		private $tags = "";
		
		public function _construct($type,$description,$meridien,$element,$symptomes,$tags){
			parent::__construct('Pathologies');
			$this->symptomes = $symptomes;
			$this->meridien = $meridien;	
			$this->type = $type;	
			$this->description = $description;
			$this->element = $element;
			$this->tags = $tags;
		}
		
		public function getPatho(){
			return $this;
		}
		
		public function getSymptomes(){
			return $symptomes;
		}
		public function getMeridien(){
			return $meridien;
		}
		public function getDescription(){
			return $description;
		}		
		public function getType(){
			return $type;
		}
		public function getElement(){
			return $element;
		}		
		public function getTags(){
			return $tags;
		}			
	}
?>

