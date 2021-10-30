<?php include_once "include/db.php"?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Boxicons css -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <title>Gems For You</title>
    <link rel="stylesheet" href="src/style.css">
    <style>

.btn{
  border: none;
}
.btn:focus {
  outline: none;
  box-shadow: none;
  }
.logo_cover{
  width: 55px;
  height: auto;
  padding: 0;
  margin: 0;
}

.jewe_img{
  
  height: 200px;
  
}
.card{
  height: 310px;
}
.para{
  font-size: 16px;
  padding: 0;
  margin: 0;
}
    </style>
  </head>
  <body class="">

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark p-0">
  <div class="container">
    <a class="navbar-brand" href="#">
      <figure class="logo_cover">
        <img class="img-fluid" src="src/img/logo.png" alt="">
      </figure>
    </a>
    <button class="btn menu_js navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      
      <i class='bx bx_js_right bx-menu-alt-right '></i>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
      <ul class="navbar-nav  mb-2 mb-lg-0">
        <?php
          $query = "SELECT * FROM categotries";
          $result = mysqli_query($connect,$query);
          if(!$result){
            die("Query Fail " . mysqli_error($result));
          }
          while($row = mysqli_fetch_assoc($result)){
            $cat_id = $row['cat_id'];
            $cat_title = $row['cat_title'];
            ?>
            <li class="nav-item">
            <a class="nav-link " aria-current="page" href="#"><?php echo $cat_title?></a>
          </li>
        <?php  
          }
        ?>
       
        
      </ul>
      
    </div>
  </div>
</nav>
    <!-- Navbar End -->

<!-- selling card Start -->

<div class="container-fluid my-5">
  <div class="container">
    <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
      <div class="col">
        <div class=" bg-light">
          <div class="card" >
  <img src="src/img/1.JPG" class="card-img-top jewe_img" alt="...">
  <div class="card-body">
    <h5 class="card-title"></h5>
    <p class="card-text para">
      ကျောက်နက် <br>
      စျေး - 15000Ks
    </p>
    <a href="#" class="btn btn-sm btn-primary">Buy</a>
  </div>
</div>
        </div>
      </div>
      <div class="col">
        <div class=" bg-light">
          <div class="card" >
            <img src="src/img/2.JPG" class="card-img-top jewe_img " alt="...">
            <div class="card-body">
              <h5 class="card-title"></h5>
              <p class="card-text"></p>
              <a href="#" class="btn btn-sm btn-primary float-end">Buy</a>
            </div>
          </div>
        </div>
      </div>
      
    </div>
  </div>
</div>

<!-- selling card End -->


    



    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script> -->
    
    <!-- custom JS -->
    <script src="js/script.js"></script>
  </body>
</html>