<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, instial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./../content/style/auth.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" />
</head>

<body>
    <div class="container" id="container">
        <div class="form-container sign-up-container">

            <form action="../controllers/addUserController.php" method="post">


                <h1>Créer un compte</h1>
                <div class="social-container">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <span>Utiliser un compte gmail</span>
                <div class="scroller">
                    <input type="text" name="lastname" placeholder="Nom">
                    <input type="text" name="firstname" placeholder="Prénom">
                    <input type="text" name="username" placeholder="Nom d'utilisateur">
                    <input type="password" name="password" placeholder="Mot de passe">
                    <input type="text" name="size" placeholder="Taille(cm)">
                    <input type="text" name="weight" placeholder="Poids(kg)">
                    <input id="date" name="birthdate" type="date" value="Date de naissance">
                    <div class="activity-container">

                        <select id="activity-options" name="sportive_activity">
                            <option name="sportive_activity" value="">--Niveau d'activité--</option>
                            <option name="sportive_activity" value="1">Inactif</option>
                            <option name="sportive_activity" value="2">Modérément actif</option>
                            <option name="sportive_activity" value="3">Très actif</option>
                        </select>
                    </div>







                    <div class="sexe">
                        <label>Femme</label>
                        <input type="radio" name="sex" value="0">
                        <label>Homme</label>
                        <input type="radio" name="sex" value="1">
                    </div>

                    <button id="btn-sign"> Créer le compte</button>
                </div>
            </form>
        </div>
        <div class="form-container login-container">
            <form action="./../controllers/loginController.php" method="post">
                <h1>Se connecter</h1>
                <div class="social-container">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <span>Je n'ai pas de compte</span>
                <?php if (isset($_SESSION["error"]["id"])) { ?>
                    <label for="error_id" class="error"><?= $_SESSION["error"]["id"] ?></label>
                <?php session_destroy();
                } ?>
                <input type="text" name="username" placeholder="identifiant">
                <input type="password" name="password" placeholder="mot de passe">
                <input type="submit" value="Se connecter">

            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Bienvenue!</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure facilis dolores doloribus nulla
                        adipisci maiores nemo odit voluptate necessitatibus eveniet accusantium aspernatur, ab, nostrum
                    </p>
                    <button class="ghost" id="login">Se connecter</button>
                </div>

                <div class="overlay-panel overlay-right">
                    <h1>Bienvenue!</h1>
                    <p>Créer un compte et rejoindre notre communauté
                    </p>
                    <button class="ghost" id="signUp">Créer un compte</button>
                </div>
            </div>
        </div>
    </div>


    <script src="./../js/auth.js"></script>
    <script src="./../js/select.js"></script>
</body>

</html>