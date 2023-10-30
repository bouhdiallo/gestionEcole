<?php
    if(isset($_POST['connecter'])){
        function chargerClass($class){
            require $class. '.php';
        }
        spl_autoload_register('chargerClass');
        $userload = array(
            $_POST['username'],
            $_POST['mtpasse'],
        );
        $db = new PDO('mysql:host=localhost;dbname=etaxibokko2','root','');
        $manager = new utilisateurManager($db);
        // $manager->connexion($userload);
       $manager->connexion($userload);
    //    $manager->affichage();
    
            
       
    }
?>