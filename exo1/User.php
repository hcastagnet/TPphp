<?php
class User{
    //propriété :
    private $_nom;
    private $_MDP = '123';

    public function __construct($nom,$MDP){
        $this->_nom = $nom;
        $this->_MDP = $MDP;
    }

    //méthode :
    public function afficherNom(){
            echo"<p> Le prenom est".$this->_nom."</p>";
    }
    public function setNom($NouveauNom){
        $this->_nom = $NouveauNom;
    }
    public function verifmdp($LeNom,$LeMdp){
        if($LeNom == $this->_nom){
            if($LeMdp == $this->_MDP){
                return true;
            }
        }
        return false;
    }
}

?>
