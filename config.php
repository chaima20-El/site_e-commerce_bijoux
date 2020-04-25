<?php
session_start();
if(isset($_SESSION["email"]))
{

 	echo'<!doctype html>
<html lang="en">

<head>
    <title>Bijoux_FHE</title>
    <!-- Required meta tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="ACCUEIL.css">

</head>

<body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="index.php">_FHE_</a>
        <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false" role="button">FEMME</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="BIJOUX_FEMME.php">les bagues</a>
                    <a class="dropdown-item" href="braceletF.php">les bracelets</a>
                    <a class="dropdown-item" href="colliersF.php">les colliers</a>
                    <a class="dropdown-item" href="boucles_oreillesF.php">les boucles d’oreilles</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false" role="button">HOMME</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="BIJOUX_HOMME.php">les bagues</a>
                    <a class="dropdown-item" href="braceletH.php">les bracelets</a>
                    <a class="dropdown-item" href="colliersH.php">les colliers</a>
                    <a class="dropdown-item" href="montresH.php">les montres</a>
                    <a class="dropdown-item" href="bouttons.php">les bouttons de manchette</a>

                </div>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false" role="button">ENFANT</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="BIJOUX_ENFANTS.php">les bagues</a>
                    <a class="dropdown-item" href="braceletE.php">les bracelets</a>
                    <a class="dropdown-item" href="colliersE.php">les colliers</a>
                    <a class="dropdown-item" href="boucles_oreillesE.php">les boucles d’oreilles</a>
                </div>
            </li>


            <li class="nav-item dropdown">
                <a class="nav-link " href="Connect.php" role="button">Iscription</a>

            </li>
            <li class="nav-item dropdown">
                <a class="nav-link " href="login.php" role="button">déconnexion</a>

            </li>
            <li class="nav-item dropdown">
                <a class="nav-link " href="cart.php" role="button">panier</a>

            </li>
            <li class="nav-item dropdown">
              <a href="rapport_site.pdf" download="file"> <button ><i class="fa fa-download" >  Rapport de site</i></button> </a>

             <!--a class="nav-link " href="rapport_site.pdf" download="rapport" role="button">Rapport de site</a-->
            </li>

        </ul>
        <form class="form-inline">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Search</button>
        </form>
    </nav>';
    echo'<div class="jumbotron">


        <div class="container-fluid padding">
            <div class="row welcome text-center">
                <div class="col-12 ">
                    <h1 class="display-4">Interface client</h1>
                </div>
                <hr>
            </div>
        </div>';
    	echo '<h3>Bonjour - ' .$_SESSION["email"].'</h3>
    	<br><h2><font color="black">pour acheter des bijoux</font></h2><font color="red"><b><a href="BIJOUX_HOMME.php"> HOMME</a></b></font>
    	<br><h2><font color="black">pour acheter des bijoux</font></h2><font color="blue"><a href="BIJOUX_FEMME.php"> FEMME</a></font>
    	<br><h2><font color="black">pour acheter des bijoux</font></h2><font color="blue"><a href="BIJOUX_ENFANTS.php"> ENFANT</a></font>
    	<br><h2><font color="black">pour voir votre </font></h2><font color="blue"><a href="cart.php"> Panier</a></font>';
 	
echo'</div>';
echo'
    <!---x----->

    <div class="container-fluid padding">
        <div class="row text-center padding">
            <!--div class="col-12" >
        <h2>connect</h2>
      </div-->
            <div class="col-12 social padding">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
                <a href="#"><i class="fa fa-youtube"></i></a>
            </div>


        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    </div>


</body>

</html>';
 }else{
 	header("location:login.php");
}
?>

