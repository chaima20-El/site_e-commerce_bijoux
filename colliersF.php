<!doctype html>
<html lang="en">

<head>
    <title>Bijoux_FHE</title>
    <!-- Required meta tags -->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="ACCUEIL.css">

</head>

<body>
    
    <!---x----->
    <div class="jumbotron">


        <div class="container-fluid padding">
            <div class="row welcome text-center">
                <div class="col-12 ">
                    <h1 class="display-4">BIJOUX_FEMME_COLLIERS</h1>
                </div>
                <hr>
            </div>
        </div>

        <div class="container-fluid padding">
            <div class="row">

                <div class="col-md-4 col-xs-4 col-sm-3 col-md-2">
                    <div class="card">
                        <?php
          $conn = mysqli_connect("localhost","id13014500_root","chaimaelmejgari","id13014500_ex_db");
          $query = "SELECT * FROM product where id=78 ";
            $result = mysqli_query($conn,$query);
            if(mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) { ?>
                        <form method="post" action="cart.php?action=add&id=<?php echo $row["id"]; ?>">
                                 <img src="<?php echo $row["image"]; ?>" class="card-img-top rounded mx-auto d-block">
                                <div class="card-body">
                                <h5 class="card-text"><?php echo $row["pname"]; ?></h5>
                                <h5 class="card-title"><?php echo $row["price"]; ?>$</h5>
                                <input type="text" name="quantity" class="form-control" value="1">
                                <input type="hidden" name="hidden_name" value="<?php echo $row["pname"]; ?>">
                                <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
                                <input class="btn btn-outline-secondary" type="submit" name="add" 
                                       value="acheter">
                                       </div>
                        </form>
                   
                    <?php
                }
            }
        ?>
                    </div>
                </div>

                <div class="col-md-4 col-xs-4 col-sm-3 col-md-2">
                    <div class="card">
                        <?php
          $conn = mysqli_connect("localhost","id13014500_root","chaimaelmejgari","id13014500_ex_db");
          $query = "SELECT * FROM product where id=79 ";
            $result = mysqli_query($conn,$query);
            if(mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) { ?>
                        <form method="post" action="cart.php?action=add&id=<?php echo $row["id"]; ?>">
                                 <img src="<?php echo $row["image"]; ?>" class="card-img-top rounded mx-auto d-block">
                                <div class="card-body">
                                <h5 class="card-text"><?php echo $row["pname"]; ?></h5>
                                <h5 class="card-title"><?php echo $row["price"]; ?>$</h5>
                                <input type="text" name="quantity" class="form-control" value="1">
                                <input type="hidden" name="hidden_name" value="<?php echo $row["pname"]; ?>">
                                <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
                                <input class="btn btn-outline-secondary" type="submit" name="add" 
                                       value="acheter">
                                       </div>
                        </form>
                   
                    <?php
                }
            }
        ?>
                    </div>
                </div>

                <div class="col-md-4 col-xs-4 col-sm-3 col-md-2 ">
                    <div class="card">
                        <?php
          $conn = mysqli_connect("localhost","id13014500_root","chaimaelmejgari","id13014500_ex_db");
          $query = "SELECT * FROM product where id=80 ";
            $result = mysqli_query($conn,$query);
            if(mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) { ?>
                        <form method="post" action="cart.php?action=add&id=<?php echo $row["id"]; ?>">
                                 <img src="<?php echo $row["image"]; ?>" class="card-img-top rounded mx-auto d-block">
                                <div class="card-body">
                                <h5 class="card-text"><?php echo $row["pname"]; ?></h5>
                                <h5 class="card-title"><?php echo $row["price"]; ?>$</h5>
                                <input type="text" name="quantity" class="form-control" value="1">
                                <input type="hidden" name="hidden_name" value="<?php echo $row["pname"]; ?>">
                                <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
                                <input class="btn btn-outline-secondary" type="submit" name="add" 
                                       value="acheter">
                                       </div>
                        </form>
                   
                    <?php
                }
            }
        ?>
                    </div>
                </div>

            </div>
        </div>



        <div class="container-fluid padding">
            <div class="row">

                <div class="col-md-4 col-xs-4 col-sm-3 col-md-2">
                    <div class="card">
                        <?php
          $conn = mysqli_connect("localhost","id13014500_root","chaimaelmejgari","id13014500_ex_db");
          $query = "SELECT * FROM product where id=81 ";
            $result = mysqli_query($conn,$query);
            if(mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) { ?>
                        <form method="post" action="cart.php?action=add&id=<?php echo $row["id"]; ?>">
                                 <img src="<?php echo $row["image"]; ?>" class="card-img-top rounded mx-auto d-block">
                                <div class="card-body">
                                <h5 class="card-text"><?php echo $row["pname"]; ?></h5>
                                <h5 class="card-title"><?php echo $row["price"]; ?>$</h5>
                                <input type="text" name="quantity" class="form-control" value="1">
                                <input type="hidden" name="hidden_name" value="<?php echo $row["pname"]; ?>">
                                <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
                                <input class="btn btn-outline-secondary" type="submit" name="add" 
                                       value="acheter">
                                       </div>
                        </form>
                   
                    <?php
                }
            }
        ?>
                    </div>
                </div>

                <div class="col-md-4 col-xs-4 col-sm-3 col-md-2">
                    <div class="card">
                        <?php
          $conn = mysqli_connect("localhost","id13014500_root","chaimaelmejgari","id13014500_ex_db");
          $query = "SELECT * FROM product where id=82 ";
            $result = mysqli_query($conn,$query);
            if(mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) { ?>
                        <form method="post" action="cart.php?action=add&id=<?php echo $row["id"]; ?>">
                                 <img src="<?php echo $row["image"]; ?>" class="card-img-top rounded mx-auto d-block">
                                <div class="card-body">
                                <h5 class="card-text"><?php echo $row["pname"]; ?></h5>
                                <h5 class="card-title"><?php echo $row["price"]; ?>$</h5>
                                <input type="text" name="quantity" class="form-control" value="1">
                                <input type="hidden" name="hidden_name" value="<?php echo $row["pname"]; ?>">
                                <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
                                <input class="btn btn-outline-secondary" type="submit" name="add" 
                                       value="acheter">
                                       </div>
                        </form>
                   
                    <?php
                }
            }
        ?>
                    </div>
                </div>

                <div class="col-md-4 col-xs-4 col-sm-3 col-md-2 ">
                    <div class="card">
                        <?php
          $conn = mysqli_connect("localhost","id13014500_root","chaimaelmejgari","id13014500_ex_db");
          $query = "SELECT * FROM product where id=83 ";
            $result = mysqli_query($conn,$query);
            if(mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) { ?>
                        <form method="post" action="cart.php?action=add&id=<?php echo $row["id"]; ?>">
                                 <img src="<?php echo $row["image"]; ?>" class="card-img-top rounded mx-auto d-block">
                                <div class="card-body">
                                <h5 class="card-text"><?php echo $row["pname"]; ?></h5>
                                <h5 class="card-title"><?php echo $row["price"]; ?>$</h5>
                                <input type="text" name="quantity" class="form-control" value="1">
                                <input type="hidden" name="hidden_name" value="<?php echo $row["pname"]; ?>">
                                <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
                                <input class="btn btn-outline-secondary" type="submit" name="add" 
                                       value="acheter">
                                       </div>
                        </form>
                   
                    <?php
                }
            }
        ?>
                    </div>
                </div>

            </div>
        </div>
    </div>

<?php
    include("menu/menu.php")
    ?>



</body>

</html>