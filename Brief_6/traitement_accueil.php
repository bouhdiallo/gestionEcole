<?php
    function chargerClass($class){
        require $class. '.php';
    }
    spl_autoload_register('chargerClass');
    $donnees = array();
    if(isset($_POST['inscrire'])){
        $donnees = array
        (
            "nomUtilisateur"=>$_POST['nom'],
            "email" => $_POST['email'],
            "motdePasse" => $_POST['psw'],
            "telephone" => $_POST['tel']
        );
        // echo "<pre>"; print_r($donnees); echo "</pre>";
        $user = new Utilisateurs($donnees);
        $db = new PDO('mysql:host=localhost;dbname=etaxibokko2','root','');
        $manager = new utilisateurManager($db);
        $manager->insertion($user);
        header('Location: page_accueil.php');

    }

?>