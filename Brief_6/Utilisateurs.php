<?php
    class Utilisateurs 
    {
        private $nomUtilisateur;
        private $email;
        private $motdePasse;
        private $telephone;
        public function __construct(array $donnees)
        {
            $this->hydrate($donnees);
        }
        public function hydrate($donnees){
            foreach($donnees as $key=>$values){
                $method = 'set'. ucfirst($key);
                // echo $method . "<br>";
                if(method_exists($this, $method)){
                    $this->$method($values);
                }
            }
        }
        public static function nameValidator($nomdonne){
            $patterName = '/^(?![0-9]+$)[\wÀ-ÿ -]{3,30}$/';
            if(preg_match($patterName, $nomdonne)){
                return true;
            } else {
                 return false;
            }
        }
        // public static function emailValidator($emaildonne){
        //     $patternEmail = '/^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/';
        //     // pattern a vérifier ????
        //     if(preg_match($patternEmail, $emaildonne)){
        //         return true;
        //     } else {
        //         return false;
        //     }
        // }
        public static function passwordValidator($motdepassedonne){
            $patternMotdePasse = '/^.{4,10}$/';
            if(preg_match($patternMotdePasse, $motdepassedonne)){
                return true;
            } else {
                return false;
            }
        }
        public static function phoneNumberValidator($telephonedonne){
            $patternTelephone = '/^\+221 7[0678]{1}[ ]{1}[0-9]{3}[ ]{1}[0-9 ]{2}[ ]{1}[0-9]{2}$/';
            if(preg_match($patternTelephone, $telephonedonne)){
                return true;
            } else {
                return false;
            }
        }
        public function getNomUtilisateur(){
            return $this->nomUtilisateur;
        }
        public function getEmail(){
            return $this->email;
        }
        public function getMotdePasse(){
            return $this->motdePasse;
        }
        public function getTelephone(){
            return $this->telephone;
        }
        public function setNomUtilisateur($nomdonne){
            if(is_string($nomdonne)  && self::nameValidator($nomdonne)==true){
                $this->nomUtilisateur = $nomdonne;
            } else {
                // throw(new Exception("Le nom d'utilisateur n'est pas valide"));
                echo "Le nom saisie n'est pas valide! <br>";
                echo '<a href="page_accueil.php"><img src="images/arrow.ico"></a>';
                die();
            }
        }
        public function setEmail($emaildonne){
            $emaildonne = (string) $emaildonne;
            if(filter_var($emaildonne, FILTER_VALIDATE_EMAIL)){
                $this->email = $emaildonne;
            } else {
                echo "L'email saisie n'est pas valide! <br>";
                echo '<a href="page_accueil.php"><img src="images/arrow.ico"></a>';
                die();
            }
            
        }
        public function setMotdePasse($motdepassedonne){
            $motdepassedonne = (string) $motdepassedonne;
            if(self::passwordValidator($motdepassedonne)==true){
                $this->motdePasse = $motdepassedonne;
            } else {
                echo "mot de passe invalide! <br>";
                echo '<a href="page_accueil.php"><img src="images/arrow.ico"></a>';
                die();
            }
           
        }
        public function setTelephone($telephonedonne){
            $telephonedonne = (string) $telephonedonne;
            if(self::phoneNumberValidator($telephonedonne)==true){
                $this->telephone = $telephonedonne;
            } else {
                echo "Numéro de téléphone invalide !<br>";
                echo '<a href="page_accueil.php"><img src="images/arrow.ico"></a>';
                die();
            }
        
        }
        
    }

?>