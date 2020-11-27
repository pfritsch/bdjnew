<?php
require 'config.php';
session_start();

if(isset($_POST['pseudo']) && isset($_POST['email']) && isset($_POST['password'])){
    $pseudo = $_POST['pseudo'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    if(isset($_POST['Valid'])==true){
        $requete = "INSERT INTO bertrandsahler_groupe1.User_BDJ VALUES('$pseudo','$email', '$password')";
        $exec_requete = mysqli_query($db, $requete) or die;
        header("Location: ../index2.php");
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="script.js" defer></script>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="images/favicon.ico" />
    <script src="https://kit.fontawesome.com/b98953f37e.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet"> 
    <title>Bande de Joueur</title>
</head>
<body>
    <header>
        <nav>
            <ol>
                <div class="menus">
                    <li>Joueurs</li>
                    <li>Prochaine Partie</li>
                    <li>Découvrir</li>
                </div>
                <div class="connexionlangues">
                    <select name="pays" id="pays">
                        <option value="">FR</option>
                        <option value="en">EN</option>
                        <option value="de">DE</option>
                    </select>
                    <input type="button" class="connexion" value="Connexion">
                    <input type="button" class="enregistrement" value="Rejoins la Bande">
                </div>
            </ol>

        </nav>
    </header>
    <main>
        <section class="accueil">
            <h1 class="titre">BANDE DE JOUEURS</h1>
            <h2>C'est quand même mieux à plusieurs!</h2>
            <img class="heros" src="images/hero.jpg" alt="heros">
        </section>
        <section class="apropos">
            <h3 class="titre">Jeux de société ou jeux vidéo</h3>
            <h2>Trouve des partenaires pour tes jeux préférés</h2>
            <p>Bande de Joueurs, c'est une communauté en ligne, où tu peux rencontrer d'autres personnes afin de ne plus jouer tout seul.
            Parce que les jeux ne devrais pas nous isoler, mais nous faire partager des moments agréables à plusieurs, nous rapprocher.
            </p>
            <div class="ccm">
                <h3 class="titre">Comment ça marche ?</h3>
                <ol>
                    <div class="un">
                        <li class="chiffre">1</li>
                        <li>Organise ou inscris toi à une partie, pour le jeu de ton choix</li>
                    </div>
                    <div class="deux">
                        <li class="chiffre">2</li>
                        <li>Rencontre les joueurs comme convenu, en ligne ou près de chez toi</li>
                    </div>
                    <div class="trois">
                        <li class="chiffre">3</li>
                        <li>C'est tout. La Partie peut commencer !</li>
                    </div>
                </ol>
            </div>
        </section>
        <section class="explications">
            <div class="haut">
                <img class="roi" src="images/king.jpg" alt="roi">
                <div class="textroi">
                    <h3>Rien de prévu ce week-end</h3>
                    <p>Participe à une soirée jeux près de chez toi</p>
                </div>
            </div>
            <div class="milieu">
                <div class="textchevalier">
                    <h3>Un nouveau jeu à tester ?</h3>
                    <p>Organise une partie et rencontre des gens sympas pour l'essayer</p>
                </div>
                <img class="chevalier" src="images/knight.jpg" alt="chevalier">
            </div>
            <div class="bas">
                <img class="robot" src="images/robot.jpg" alt="robot">
                <div class="textrobot">
                    <h3>Fini le mode solo ?</h3>
                    <p>Rencontre d'autre gamers pour les modes multi et co-op</p>
                </div>
            </div>
        </section>
        <section class="membres">
            <h3>Rejoindre la bande</h3>
            <h2>Tu en fais presque déjà parti !</h2>
            <p>C'est Gratuit et ça ne t'engage en rien. Tu pourras choisir
            de divulguer tes données personnelles ou non.
            </p>
            <div class="dragonform">
                <img class="dragon" src="images/gameboy.png" alt="dragon">
                <form method="POST" action="index.php">
                    <label>Pseudonyme</label>
                    <input class="pseudo" name= 'pseudo' type="text" placeholder="Effraie tes adversaire avec un nom qui claque!" required>
                    <label>Email</label>
                    <input class="email" name= 'email' type="email" placeholder="Promis, pas de spam!" required>
                    <label>Password</label>
                    <input class="mdp" name= 'password' type="password" placeholder="Au moins 6 caractères" required>
                    <input class="play" name= 'Valid' type="submit" value="PUSH START">
                    <a href="connexion.php">Déja membre de la bande ?</a>
                </form>
            </div>
        </section>
        <section class="quisommesnous">
            <h3>Qui sommes nous ?</h3>
            <div class="membrestwitter">
                <p>Une bande de passionnés qui fait ça pour le plaisir :
                Aline, Elodie, Frank, Guillaume, Max, Philou, Pierre, Roland et Sam,
                ainsi que les éleves de la Ligne Numérique 6 : Salim, Vincent et Yannick.
                </p>
                <div class="twitter">
                    <i class="fab fa-twitter"></i>
                    <p>Retrouve-nous sur Twitter : <a href="https://twitter.com/bandedejoueurs">@bandedejoueurs</a></p>
                </div>
            </div>
        </section>
    </main>
</body>
</html>
