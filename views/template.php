<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="./../content/style/designSystem.css">
    <link rel="stylesheet" href="./../content/style/profile.css">
    <link rel="stylesheet" href="./../content/style/mealsHistory.css">
    <link rel="stylesheet" href="./../content/style/homePageView.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Biryani&family=Sansita&family=Titillium+Web&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />

    <title><?= $title ?></title>
</head>

<body>

    <header id="header">
        <div id="logoHello">
            <a href="./../controllers/homeController.php">
                <img src="./../assets/img/logo_nutri_watch.png" alt="NutriWatch logo">
            </a>
            <h1 id="hello">Hello, <?= $_SESSION["auth"]["username"] ?></h1>
            <a href="../controllers/homeController.php">
                <i class="bi bi-arrow-left-circle-fill" id="returnBtn"></i>
            </a>
        </div>
        <div id="icons">
            <a href="./../controllers/displayProfileController.php">
                <i class="fa-regular fa-user" id="logoUser" alt="paramètres personnels"></i>
            </a>
            <a href="./../controllers/logoutController.php">
                <i class="fa-solid fa-power-off" id="logout" alt="se déconnecter"></i>
            </a>
        </div>
    </header>
    <div id="content">

        <?= $content ?>
    </div>

    <footer id="footer">
        <span>Mentions Légales</span>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script>
    <script src="../js/profile.js"></script>
    <!-- <script src="../js/graphic.js"></script> -->
    <script src="../js/meal.js"></script>
    <script src="../js/auth.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>