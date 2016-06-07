<?php
require('param.inc.php');

class enseignant {
  public $id,$nom,$prenon,$email,$bureau;
 
  public function __construct($id,$nom, $prenom, $email, $bureau)    {
        $this->id = $id;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
        $this->bureau = $bureau;
  }
  public function getID(){
    return $this->id;
  }  
  public function setId($id){
    $this->id = $id;
  }
  public function PartageLeBureau($nom, $prenom){
    require('param.inc.php');
    $sql = "SELECT * FROM enseignant WHERE nom =:nom AND prenom=:prenom";
		$stmt = $connexion->prepare($sql);
		$stmt->execute(array(
			":nom" => $nom,
			":prenom"=>$prenom));
    
    if($res=$stmt->fetch()){
      if($res['bureau'] == $this->bureau){
        echo $this->prenom . " " . $this->nom . " et " . $prenom . " " . $nom . " partagent le meme bureau.";
        return true;
     
      } else {
        echo $this->prenom . " " . $this->nom . " et " . $prenom . " " . $nom . " ne partagent pas le meme bureau.";
        return false;
      }
    }
 }
}
 $test=new enseignant(1,"momo","pa","aeaz",114);
 $test->PartageLeBureau("Valarcher","Pierre");
 
?>