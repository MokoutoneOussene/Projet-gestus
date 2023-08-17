    <?php
    session_start();
    $user = $_SESSION["user"];
    ?>
    <!DOCTYPE html>
    <html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="font/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="font/font-awesome/css/font-awesome.min.css">
        <script type="text/javascript" src="font/js/jquery/jquery.js"></script>
        <link rel="stylesheet" type="text/css" href="font/css/style.css">
        <title>Acceuil</title>
    </head>

    <body>

        <div class="container" id="container">
            <div class="container" id="banniere">
                <div class="div-1">
                    <img src="font/picture/unnamed.jpg" alt="logo de gauche" class="logo">
                </div>
                <div class="welcom">
                    <p>Direction des grandes entreprises</p>
                </div>

                <div class="div-2">
                    <img src="font/picture/logodgi2.png" alt="logo de droit" class="logo">
                </div>
            </div>

            <div class="mt-3 pull-right d-flex">
                <i class="fa fa-user mr-3 user"> <span class="ml-2"> <?= $user["statut"]; ?> </span> </i>
                <button class="btn btn-info"> <a class="text-light" href="index.php"> Deconnexion </a> </button>
            </div>

            <div class="bienvenu">BIENVENUE DANS GESTUS</div>
            <div class="global-content">
                <div class="contenu">
                    <aside class="d-flex flex-column p-3">
                        <h3 id="navig">Menu navigation</h3>
                        <h3 class="btn btn-info p-3 m-1"> <a class="text-light h-100 w-100" href="view/visite/list.php"> VISITES </a> </h3>
                        <h3 class="btn btn-info p-3 m-1"> <a class="text-light h-100 w-100" href="view/visiteur/list.php"> VISITEURS </a></h3>
                        <h3 class="btn btn-info p-3 m-1"> <a class="text-light h-100 w-100" href="view/personnel/list.php"> PERSONNELS </a></h3>
                        <h3 class="btn btn-info p-3 m-1"> <a class="text-light h-100 w-100" href="view/service/list.php"> SERVICES </a></h3>
                        <h3 class="btn btn-info p-3 m-1"> <a class="text-light h-100 w-100" href="view/contribuale/list.php"> CONTRIBUABLES </a></h3>
                    </aside>

                </div>
                <div class="page">
                    <img src="font/picture/logodgi2.png" alt="logo de droit" class="minifed">
                </div>
            </div>
            <?php
            include('include/footer.php');
            ?>
        </div>

    </body>

    </html>