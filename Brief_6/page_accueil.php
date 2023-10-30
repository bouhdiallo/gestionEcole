<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Page d'accueil E-Taxibokko</title>
</head>
<body>
    <header>

    </header>
    <div class="container">
        <div class="left_container">
            
        <h2>S'inscrire</h2>
        <p>Votre chauffeur en un clic !</p>
        <button id ="face">Continuer avec Facebook</button>
        <?php echo "<style>
        #face {
            margin-left: 35%;
            
        }
        p {
            text-align: center;
        }
        
        </style>";?>
        <hr>
        <form action="traitement_accueil.php" method="post" id="ins">
            <div class="corps_form">
                <label for="nom">Nom d'utilisateur</label>
                <input type="text" name="nom" autocomplete="off">
            </div>
            <div class="corps_form">
                <label for="email">Adresse email</label>
                <input type="email" name="email">
            </div>
            <div class="corps_form">
                <label for="psw">Mot de passe</label>
                <input type="password" name="psw" autocomplete="off">
            </div>
            <div class="corps_form">
                 <label for="tel">Téléphone</label>
                 <input type="tel" name="tel">
            </div>
            <button type="submit" for="ins" name="inscrire">S'inscrire</button>
        </form>
    </div>
    <div class="right_container">
        <h2>Connexion</h2>
        <form action="connexion_traitement.php" method="post" id="conn">
            <div class="corps_form">
                <label for="username">Nom d'utilisateur</label>
                <input type="text" name="username" id="username" autocomplete="off">
            </div>
            <div class="corps_form">
                <label for="mtpasse">Mot de passe</label>
                <input type="password" name="mtpasse" id="mtpasse" autocomplete="off">
            </div>
            
            
            <button type="submit" for="conn" name="connecter">Se connecter</button>
        </form>
    </div>
    </div>
       
    
</body>
</html>