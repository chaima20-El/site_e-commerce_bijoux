<!doctype html>
 <html lang="en">
   <head>
     <title>Bijoux_FHE</title>
     <!-- Required meta tags -->
    
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" type="text/css" href="ACCUEIL.css">
         
 </head>
   <body>
  
     
     <div id="slides" class="carousel slide" data-ridz="carousel">
      <ul class="carousel-indicators">
          <li data-target="#slides" data-slide-to="0" class="active"></li>
          <li data-target="#slides" data-slide-to="1" ></li>
          <li data-target="#slides" data-slide-to="2" ></li>
      </ul>
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="img/11.jpg" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="img/44.jpg" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="img/00.jpg" alt="Third slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
  </div>
<!---x----->
  <div class="container-fluid padding">
    <div class="row welcome text-center">
      <div class="col-12 ">
        <h1 class="display-4">Modéle de Bijoux</h1>
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
          $query = "SELECT * FROM product where id=1 ";
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
          $query = "SELECT * FROM product where id=13 ";
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
          $query = "SELECT * FROM product where id=14 ";
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
          $query = "SELECT * FROM product where id=15 ";
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
          $query = "SELECT * FROM product where id=16 ";
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
          $query = "SELECT * FROM product where id=17 ";
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

      

  <?php
     include("menu/menu.php")
  ?>
   
    </body>
 </html>
 
