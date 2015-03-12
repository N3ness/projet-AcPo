<?php
	include_once('modele/Model.php');
	class Patho extends Model{
	
		private $symptomes ="";
		private $meridien ="";
		private $type ="";
		private $description ="";
		
		public function _construct($symptomes,$mer,$type,$desc){
			parent::__construct('Pathologies');
			$this->symptomes = $symptomes;
			$this->mer = $mer;	
			$this->type = $type;	
			$this->desc = $desc;	
		}
		
		public function getPatho(){
			return $this;
		}

		
	}
?>

