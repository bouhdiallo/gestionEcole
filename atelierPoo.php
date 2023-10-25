<?php
    class Etudiant
    {
        private $_nom;
        private $_prenom;
        private $_matricule;
        public $datenaissance;
        public function __construct($nomdonnee, $prenomdonne, $matriculedonne, $datenaissance){
            // $this->_nom = $nomdonnee;
            // $this->_prenom = $prenomdonne;
            // $this->_matricule = $matriculedonne;
            // $this->datenaissance = $datenaissance;
            $this-> setNom($nomdonnee);
            $this-> setPrenom($prenomdonne);
            $this-> setMatricule($matriculedonne);
            $this->datenaissance = $datenaissance;
        }
        public function getNom(){
            return $this->_nom;
        }
        
        public function setNom($nomdonnee){
            if(is_string($nomdonnee) && strlen($nomdonnee)<15){
                return $this->_nom = $nomdonnee;
            }
            
        }
        public function getPrenom(){
            return $this->_prenom ;
        }
        public function setPrenom($prenomdonne){
            if(is_string($prenomdonne) && strlen($prenomdonne)){
                return $this->_prenom = $prenomdonne;
            }
            
        }
        public function getMatricule(){
            return $this->_matricule;
        }
        public function setMatricule($matriculedonne){
            if(is_string($matriculedonne) && strlen($matriculedonne)<10){
                return $this->_matricule = $matriculedonne;
            }
            
        }
        public function Presenter(){
            echo "Je m'appelle $this->_prenom $this->_nom. Je suis étudiant avec le matricule
            $this->_matricule et je suis née le $this->datenaissance";
        }
        public function Fairecours(){
            echo "J'ai fais le cour: ";
        }
        public function FaireEvaluation(){
            echo "J'ai fais l'evaluation : ";
        }
    }
    class Professeur extends Etudiant
    {
        private $_salaire;
        private $_specialite;
        private $_voiture;
       
        public function __construct($_nom, $_prenom,  $_matricule, $datenaissance, $salairedonne, $specialitedonne, $voituredonne ){
            parent::__construct($_nom, $_prenom, $_matricule, $datenaissance);
           
            $this->_salaire = $salairedonne;
            $this->_specialite = $specialitedonne;
            $this->_voiture = $voituredonne;
           
        }
        
        public function getSalaire(){
            
            return $this->_salaire;
        }
        public function setSalaire($salairedonne){
            if(is_int($salairedonne)){
                return $this->_salaire = $salairedonne;
            }
            
        }
        public function getSpecialite(){
            return $this->_specialite;
        }
        public function setSpecialite($specialitedonne){
            if(is_string($specialitedonne)){
                return $this->_specialite = $specialitedonne;
            }
            
        }
        public function getVoiture(){
            return $this->_voiture;
        }
        public function setVoiture($voituredonne){
            if(is_string($voituredonne)){
                return $this->_voiture = $voituredonne;
            }
            
        }
        public function Presenter(){
            echo "Je m'appelle ". $this->getPrenom()." ".$this->getNom().".<br> Je suis un professeur avec 
            comme matricule le :". $this->getMatricule(). ".<br> Je suis né le $this->datenaissance. J'enseigne le 
            $this->_specialite. <br> $this->_voiture j'ai un véhicule de service<br> Je gagne $this->_salaire Frcs CFA";
        }
    }
    $etudiant1 = new Etudiant("Sarr", "Moustapha", "33AZ", "04/10/1994");
    $etudiant1->Presenter();
    echo "<br>";
    $professeur1 = new Professeur("Ndoye", "Macoumba", "22AF", "18/04/1960", 80000, "Anglais", "Oui");
   $professeur1->Presenter();
   echo "<br>";
   $professeur1->setNom("Ndiaye");
   $professeur1->Presenter();
?>