<?php
	include_once('modele/Patho.php');
	include_once('lib/PDO1.php');
	class Model{
	    private $table;

	    // identifiant de connexion
	    protected $bdd;

	    public function __construct($table)
	    {
			$this->table = $table;
			$this->bdd = PDO1::getInstance();
	    }
	    
	    public function getBdd(){
			return $this->bdd;
	    }
	    
	    public function getPathos(){
			try {
				$requete = $this->bdd
				->query('	SELECT p.type as Type, 
						p.desc as Description,
						m.nom as Meridien,
						m.element as Element,
						s.desc as Symptome,
						k.name as tags 
						FROM patho p
						JOIN meridien m ON p.mer = m.code
						JOIN symptPatho sp ON p.idP = sp.idP
						JOIN symptome s ON s.idS = sp.idS
						JOIN keySympt ks ON ks.idS = s.idS
						JOIN keywords k ON k.idK = ks.idK
						ORDER BY Symptome;');

			} catch(PDOException $ex) {
				echo "An Error occured!"; //user friendly message
			}
			$donnees = $requete->fetchAll(PDO::FETCH_ASSOC);
			return $donnees;
	    }
		
		public function getListPatho(){
			try {
				$requete = $this->bdd
				->query('SELECT p.desc,p.type FROM patho p;');

			} catch(PDOException $ex) {
				echo "An Error occured!"; //user friendly message
			}
			$listPathos = $requete->fetchAll(PDO::FETCH_ASSOC);
			return $listPathos;
	    }
		
		//Pathologies par mot cle
		 public function getPathosMC($meridien,$carac,$typePatho,$motCle){
			 $donnees = '';
			 $firstArg = true;
			try {
				$bdd = $this->bdd;
				$query= '	SELECT p.type as Type, 
						p.desc as Description,
						p.type as Type,
						m.nom as Meridien,
						m.element as Element,
						s.desc as Symptome,
						k.name as tags 
						FROM patho p
						JOIN meridien m ON p.mer = m.code
						JOIN symptPatho sp ON p.idP = sp.idP
						JOIN symptome s ON s.idS = sp.idS
						JOIN keySympt ks ON ks.idS = s.idS
						JOIN keywords k ON k.idK = ks.idK';
				if($meridien != ''){
					$firstArg = false;
					$query = $query." WHERE m.nom='".$meridien."'";
				}
				if($carac != ''){
					$carac = '%'.$carac;
					if($firstArg){
						$query = $query." WHERE p.desc LIKE '".$carac."'";
						$firstArg = false;
					}
					else
						$query = $query." AND p.desc LIKE '".$carac."'";				
				}
				if($motCle != ''){
					if($firstArg){
						$query = $query." WHERE k.name LIKE '%".$motCle."%'";
						$firstArg = false;
					}
					else
						$query = $query." AND k.name LIKE '%".$motCle."%'";	
				}
				if($typePatho != ''){
					if($firstArg){
						$query = $query.' WHERE';
						$firstArg = false;
					}
					else{
						$query = $query.' AND';
					}
					
					switch($typePatho){
						case 'zang fu':
							$query = $query." p.type LIKE 't%'";
							break;
						case 'meridien':
							$query = $query." (p.type ='mi' OR p.type='me')";
							break;
						case 'voie luo':
							$query = $query." p.type LIKE 'l%'";
							break;
						case 'merveilleux vaisseaux':
							$query = $query." (p.type LIKE 'mv%' OR p.type='mv')";
							break;
						case 'jing jin':
							$query = $query." p.type='j'";
							break;
					}
					//ajout du pt virgule de fin
					$query = $query.";";
						
				}
				//echo $query;
				$requete = $bdd->query($query);
				$donnees = $requete->fetchAll();


			} catch(PDOException $ex) {
				echo "An Error occured!".$ex->getMessage(); //user friendly message
				echo $query;
			}
			return $donnees;
	    }
		//Meridiens
		 public function getMeridiens(){
			 $donnees = '';
			try {
				$bdd = $this->bdd;
				$query= 'SELECT nom FROM meridien ORDER BY nom asc;';
				$prep = $bdd->prepare($query);
				$prep->execute();
				$donnees = $prep->fetchAll(PDO::FETCH_ASSOC);
				$prep->closeCursor();
				$prep = NULL;

			} catch(PDOException $ex) {
				echo 'An Error occured!'.$ex->getMessage(); //user friendly message
			}
			$pathos = "";
			return $donnees;
	    }
		
		public function getPathoById($id){
			 $donnees = '';
			try {
				$bdd = $this->bdd;
				$query= 'SELECT p.idP, p.desc as Description,
						p.type as Type,
						m.nom as Meridien,
						m.element as Element,
						s.desc as Symptome
						FROM patho p
						JOIN meridien m ON p.mer = m.code
						JOIN symptPatho sp ON p.idP = sp.idP
						JOIN symptome s ON s.idS = sp.idS
						WHERE p.idP = :id
						group by p.desc,s.desc;';
				$prep = $bdd->prepare($query);
				$prep->bindParam(':id',$id);
				$prep->execute();
				$donnees = $prep->fetchAll(PDO::FETCH_ASSOC);
				$prep->closeCursor();
				$prep = NULL;

			} catch(PDOException $ex) {
				echo 'An Error occured!'.$ex->getMessage(); //user friendly message
			}
			return $donnees;
	    }
		
 
	}	