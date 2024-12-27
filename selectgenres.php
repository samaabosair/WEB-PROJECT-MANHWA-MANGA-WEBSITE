<?php require './config.php' ?>
<?php
session_start();

if(isset($_POST['searchos'])){
  if($_POST['searchinput']==null){
    header('location:Manhwa.php');

  }
  else{
$resultsearch =$_POST['searchinput'];
$_SESSION['$resultsearcho']=$resultsearch;
header('location:search.php');}
//$data = mysqli_query($conn, "SELECT * FROM manhwa where Man_name Like '%$resultsearch%';");
}?>
<?php 
if (!isset($_GET['idg'])){
  echo "Invalid Request";
  die();
}
$idg=$_GET['idg'];
$sql="SELECT * From genres where gen_num =$idg";
$res=mysqli_query($conn,$sql);
$datas = mysqli_fetch_array($res);
?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="auto">
  <head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta
      name="author"
      content="Mark Otto, Jacob Thornton, and Bootstrap contributors"
    />
    <meta name="generator" content="Hugo 0.111.3" />
    <title>Genres</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
   <link rel="icon" href="bcfbbee028e94accaf8b199570d4528e.jpg" type="image/x-icon"/>
    <link rel="stylesheet" type="text/css" href="blog.css" />
    <link rel="stylesheet" type="text/css" href="stylee1.css" />

    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        width: 100%;
        height: 3rem;
        background-color: rgba(0, 0, 0, 0.1);
        border: solid rgba(0, 0, 0, 0.15);
        border-width: 1px 0;
        box-shadow: inset 0 0.5em 1.5em rgba(0, 0, 0, 0.1),
          inset 0 0.125em 0.5em rgba(0, 0, 0, 0.15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -0.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

      .btn-bd-primary {
        --bd-violet-bg: #712cf9;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #6528e0;
        --bs-btn-hover-border-color: #6528e0;
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #5a23c8;
        --bs-btn-active-border-color: #5a23c8;
      }
      .bd-mode-toggle {
        z-index: 1500;
      }
    </style>

    <!-- Custom styles for this template -->
    <link
      href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap"
      rel="stylesheet"
    />
    <!-- Custom styles for this template -->
    <link href="blog.css" rel="stylesheet" />
  </head>
  <body>
  <button onclick="topFunction()" id="myBtn" title="Go to top"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z"/>
</svg></button>
  <div class="container">
      <header class="blog-header lh-1 py-3"><div class="top-bar">
    <span> <ion-icon name="call"></ion-icon> +972 595 323 342</span>
    <ul>

      <li><a href="https:www.facebook.com/profile.php?id=100063495220810&mibextid=LQQJ4d"><ion-icon name="logo-facebook"></ion-icon> </a> </li>
      <li><a href="https:twitter.com/web_toon7"><ion-icon name="logo-twitter"></ion-icon></a></ion-icon></li>
      <li><a href="https:www.instagram.com/web_toon7/?igshid=YmMyMTA2M2Y%3D"><ion-icon name="logo-instagram"></ion-icon></a></ion-icon></li>

    </ul>
  </div>
  <nav>
    <div class="logo">
      <a href="Manhwa.php">
        <img src="bcfbbee028e94accaf8b199570d4528e.jpg" alt="logo" /></a>
    </div>
    <div class="toggle">
      <a href="#"><ion-icon name="menu"></ion-icon></a>
    </div>

    <ul class="menu">
      <li><a href="Manhwa.php" id="home">Home</a></li>
      <li><a href="GENRES.php" id="Ranking">Genres</a></li>
      <li><a href="login.php" id="Login">Login</a></li>
      <li><a href="register.php" id="Signup">Sign Up</a></li>
    </ul>
    
    <div class="searchs">  
  <div class="input-group">
    <form class="formsearch"  action="" method="post">
  <input type="search" name="searchinput"  style=" margin-bottom: .3em;" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />

<a><button type="submit" class="btn btn-primary" style="margin-left: 10px;   background: linear-gradient(to right, #1e2225, #182130, #0e0e11);
Color:white;" name="searchos">search</button></a>
    </form>
</div>
</div>
        </div>

  </nav>

      </header>
</div>


      <div class="py-2 mb-2 container">
        <nav class="nav d-flex justify-content-between">
          <?php
          $lastgenres =  mysqli_query($conn, "SELECT  * from genres LIMIT 10
          ");
while ($row = mysqli_fetch_assoc($lastgenres)) {

         echo '<a class="p-2 link-secondary" href="http://localhost/project/selectgenres.php?idg='.$row['gen_num'].'">'.$row['gen_name'].'</a>';
        }
          ?>
          <div class="btn-group">
            <button type="button" class="btn" style="color:#ffffff;"> Other</button>
            <button type="button" class="btn dropdown-toggle dropdown-toggle-split" style="color:rgb(243, 237, 237);" data-bs-toggle="dropdown" aria-expanded="false">
              <span class="visually-hidden">Toggle Dropdown</span>
            </button>
            <ul class="dropdown-menu" style="  background-color: rgb(26, 26, 31);">
              <li><a class="dropdown-item p-2 link-secondary" href="#">Other</a></li>
              <?php
              $othergenres =  mysqli_query($conn, "SELECT * FROM `genres` WHERE gen_num>10;
              ");
              while ($row = mysqli_fetch_assoc($othergenres )) {
             echo' <li><a class="dropdown-item p-2 link-secondary" href="http://localhost/project/selectgenres.php?idg='.$row['gen_num'].'">'.$row['gen_name'].'</a></li>';
               } ?>
            </ul>
          </div>
        </nav>
      
      </div>
     
      
    </div>
 <!---main arae--->


 <main class="container">
    <div class="p-4 p-md-5 mb-4 rounded text-bg-dark">

      <div class="row g-5">
        <div class="col-md-8">
          <h3 class="pb-2 mb-6 fst-italic border-bottom"><?php echo $datas['gen_name']  ?>
          </h3>

          <article class="blog-post">

            <div class="row" style="color:dark; min-height:200px; margin-right: 3px;">


              <?php
              $cards_data = mysqli_query($conn, "SELECT * FROM manhwa Where genres_num =$idg");
              // the while-loop will loop over all the rows in manhwa table

              while ($row = mysqli_fetch_assoc($cards_data)) {

                //for every manhwa the last chapter that have released ->
                  //for every manhwa the last chapter that have released ->
                  $manhwa_id = $row['Manhwa_Num'];
                  $num_ch_result = mysqli_query($conn, "SELECT count(chabter_num) as lastch FROM chabter WHERE manga_num = $manhwa_id");
                  $num_ch = mysqli_fetch_assoc($num_ch_result);
                  $num_ch_result2 = mysqli_query($conn, "SELECT last_add  as last FROM chabter WHERE manga_num = $manhwa_id and chabter_num=$num_ch[lastch]");
                 
            
                  if (mysqli_num_rows($num_ch_result2) > 0) {
                    $num_ch2 = mysqli_fetch_assoc($num_ch_result2);
                    $lastoor =$num_ch2['last'];
  
                  }
                  else{
                    $lastoor = "";
  
                  }
          
                  //here is not the end of the loop
                ?>
                  <div class="col-lg-6">
                    <div class="card mb-2" style="width: 325px; margin:14px; height: 121px;">
                      <div class="row g-0">
                        <div style="position:relative" class="col-md-3 grow" >
                          <a href="<?php echo "http://localhost/project/manga.php?id= $manhwa_id "?>" class="img-link" style="height:100%;"><img style="display: block; position: absolute; top: 52%; left: 50%; min-height: 118px; min-width: 100%; transform: translate(-50%, -50%);
" src="<?php echo $row['coverimg'] ?>" class="img-fluid rounded-start" alt="..."></a>
                        </div>
                        <div class="col-md-8">
                          <div class="card-body">
                            <h6 class="card-title"><?php echo $row['Man_name'] ?></h6>
                            <a type="button" href="<?php echo "http://localhost/project/chapter.php?id= $manhwa_id &&idc=$num_ch[lastch]"?>"class="btn btn-primary btn-sm" style="background-color: white; color:#394b58;"><?php echo $num_ch['lastch'] ?></a>
  
                            <img class="new" src="new.gif" width="50px">
                          <p class="card-text"><small   class="text-body-secondary">Last updated <?php echo $lastoor?></small></p>
                        </div>
                        </div>
                      </div>
                    </div>
                  </div>
              <?php
                //end of the loop
              }
              ?>

            </div>

            <article class="blog-post">

           
        </div>

        <div class="col-md-4 py-5">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
  <div class="carousel-item active">
                <img src="swipper1/bcfbbee028e94accaf8b199570d4528e.jpg" class="d-block w-100" style="height:300px;" alt="...">
              </div>
  <?php
          $swiooer =  mysqli_query($conn, "SELECT  * from swipper 
          ");
while ($row = mysqli_fetch_assoc($swiooer)) {
   echo '<div class="carousel-item ">';
   echo'<img src=' . $row['img_swip'] . ' class="d-block w-100" style="height:300px;" alt="...">';
    echo'</div>';
  }
      ?>
   
  
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>
            </div>





     

          </div>
        </div>
      </div>
    </main>

   <!-- Footer -->
   <footer class="bg-dark text-center text-white">
  <!-- Grid container -->
  <div class="container p-4">
  
    <!-- Section: Text -->
    <section class="mb-4">
      <p>
      Manhwa is a term that describes South Korean comics. Many also refer to them as webtoons due to the popular website of the same name. Manhwas are fully colored and filled with panels that look like paintings. Manhwa characters look more natural and photorealistic.
      </p>
    </section>
    <!-- Section: Text -->


     
        <!--Grid column-->
      </div>
      <!--Grid row-->
    </section>
    <!-- Section: Links -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
  © WebToon By Sama Abusair,Marah Hanani <span id="year">2020</span> :
  <a class="text-white" href="https:www.facebook.com/profile.php?id=100063495220810&mibextid=LQQJ4d">Contact Us</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->

    <script>



      $(function () {
        $(".toggle").on("click", function () {
          if ($(".menu").hasClass("active")) {
            $(".menu").removeClass("active");
            $(this).find("a").html("<ion-icon name='menu'></ion-icon>");
          } else {
            $(".menu").addClass("active");
            $(this).find("a").html("<ion-icon name='close-circle'></ion-icon>");
          }
        });
      });
    </script>

     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
     <script
       src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"
       integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE"
       crossorigin="anonymous"
     ></script>
     <script
       src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"
       integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ"
       crossorigin="anonymous"
     ></script>
  </body>
</html>
