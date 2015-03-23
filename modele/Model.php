<?php
	include_once('modele/Patho.php');
	class Model{
	    private $table;

	    // identifiant de connexion
	    protected $bdd;

	    public function __construct($table)
	    {
			$this->table = $table;
			try
			{
				$this->bdd = new PDO('mysql:host=localhost;dbname=acubd;charset=utf8', 'root', '');
			}
			catch (Exception $e)
			{
				die('Erreur : ' . $e->getMessage());
			}
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
						JOIN keywords k ON k.idK = ks.idK;');

			} catch(PDOException $ex) {
				echo "An Error occured!"; //user friendly message
			}
			$donnees = $requete->fetchAll(PDO::FETCH_ASSOC);
			$pathos = "";
			//echo $requete->columnCount();
			/*for ($i = 0 ; $donnees[$i] ; $i++){
				$patho = new Patho($donnees[$i]['Type'],$donnees[$i]['Description'],$donnees[$i]['Meridien'],$donnees[$i]['Element'],$donnees[$i]['Symptome'],$donnees[$i]['tags']);
				$pathos[$i] = $patho;
			}*/
			return $donnees;
	    }
	}	
?>