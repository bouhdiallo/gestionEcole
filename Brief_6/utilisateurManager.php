<?php
    class utilisateurManager
    {
        private $db;
        public function __construct($db)
        {
            $this->setDb($db);
        }
        public function setDb(PDO $dbdonnee){
            $this->db = $dbdonnee;
        }
        public function insertion(Utilisateurs $user){
            $query = $this->db->prepare('INSERT into Utilisateurs SET nom = :nom, email = :email, 
            motdepasse = :motdepasse, telephone = :telephone');
            $query->bindValue(':nom', $user->getNomUtilisateur());
            $query->bindValue(':email', $user->getEmail());
            $query->bindValue(':motdepasse', sha1($user->getMotdePasse()));
            $query->bindValue(':telephone', $user->getTelephone());
            $query->execute();
            header('page_accueil.php');
        }
        public function connexion(array $userlog){
            $query = $this->db->prepare('SELECT nom, motdepasse
            FROM Utilisateurs WHERE nom = ? AND motdepasse = ?');
            $query->execute(array($userlog[0], sha1($userlog[1])));
            if($query->rowCount()>0){
                echo "<header> <h1>Bienvenue à E-taxibokko, votre service taxi par covoiturage<h1>";
                echo "<h2>". $userlog[0]."</h2></header>";
                echo "<style>
                body{
                    background-color: yellow;
                }
                header{
                width : 100%; 
                background-color: black;
                color: white;
                align-items: center;
                }
                h1{
                    text-align : center;
                }
                h2 {
                    text-align: center;
                }
                .resultat{
                    margin-left: 200px;
                    margin-right: 200px;
                }
                .res{
                    margin-left: 200px;
                    margin-right: 200px;
                    background-color: white;
                    width: 50%;
                    padding: 10px;
                } </style>";
                self::affichage();
                // echo "connexion réussie";
            } else {
               echo "la connexion a échouée";
               header('Location: page_accueil.php');
            }

        }
        public function affichage(){
            $query = $this->db->prepare('SELECT * FROM Utilisateurs');
            $query->execute();
            $result = $query->fetchall();
            echo '<div class="resultat"><h3>Les utilisateurs du service de E-taxibokko sont :</h3></div>';
            echo '<div class="res">';
            foreach($result as $res){
            echo '<p><img src="images/icons8_taxi.ico">'.$res['nom'];
            echo "<br></p>";
            // echo "</div>";
            }
            echo "</div>";
            // echo "<pre>"; print_r($result); echo "</pre>";
        }
    }

?>