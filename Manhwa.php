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
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors" />
  <meta name="generator" content="Hugo 0.111.3" />
  <title>Webtoon Homepage </title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="icon" href="bcfbbee028e94accaf8b199570d4528e.jpg" type="image/x-icon" />
  <link rel="stylesheet" type="text/css" href="stylee1.css" />
  <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
  <style>
   

    body {
      font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
      font-size: 14px;
    
    }

    .swiper {
      width: 100%;
      height: 100%;
    }


    .swiper-slide {
      text-align: center;
      font-size: 18px;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .swiper-slide img {
      display: block;
      width: 100%;
      height:450px;
    }
    
  </style>


</head>

<body>
<button onclick="topFunction()" id="myBtn" title="Go to top"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z"/>
</svg></button>
  <div class="container">
    <header class="blog-header lh-1 py-3">
      <div class="top-bar">
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
       <!----- <div class="search">
          <span class="icon">
           <a><ion-icon name="search"  class="searchbtn"></ion-icon></a> 
           <a href="http://localhost//project/search.php?ids=11"  id="gosearch" onclick="goDoSomething()";><ion-icon name="search"  class="searchbtn2"></ion-icon></a> 
            <ion-icon name="close-circle" class="closbtn"></ion-icon>
          </span>
        </div>
        <div class="searchbox py-2 mb-3 " style="width:100%; height:5%;">
          <input type="text" name="searchname" id="searchid" placeholder="Search here ..">
        </div>--->
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

    </hader>
  </div>
 
  <main class="container py-2 mb-2">
<div class="rounded text-bg-dark">
  <div class="swiper mySwiper">
    <div class="swiper-wrapper">
     
      <?php
          $swiooer =  mysqli_query($conn, "SELECT  * from swipper2 
          ");
while ($row = mysqli_fetch_assoc($swiooer)) {
 echo '<div class="swiper-slide"><img src=' . $row['imgs'] . '  alt=""></div>';
  }
      ?>

    </div>
    <div class="swiper-pagination"></div>
  </div>
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
  var swiper = new Swiper(".mySwiper", {
    spaceBetween: 30,
      centeredSlides: true,
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
    pagination: {
      el: ".swiper-pagination",
    },
  });
</script>
</div></main>

  <!---main arae--->


      <main class="container ">
    <div class="p-4 p-1 mb-4 rounded  baka ">
      <div class="row g-5">
        <div class="col-md-8">
          <h3 class="pb-2 mb-6 fst-italic border-bottom" style="color:azure;">Last Addition
          </h3>

          <article class="blog-post">

            <div class="row" style="color:dark; min-height:200px; margin-right: 3px;">


              <?php
              $cards_data = mysqli_query($conn, "SELECT * FROM manhwa");
              
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
                          <a href="<?php echo "http://localhost/project/manga.php?id= $manhwa_id "?>" class="img-link" style="height:100%;"><img style="display: block; position: absolute; top: 54%; left: 50%; min-height: 118px; min-width: 100%; transform: translate(-50%, -50%);
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
            
          <h3 class="pb-2 mb-9  border-bottom " style="  margin-left: 30%;
"></h3>
  <h3 class="pb-2 mb-9  border-bottom " style="  margin-left: 30%;
"></h3>

<div id="carouselExampleDark" class="carousel carousel-dark smsm p-4 p-md-5 mb-4" data-bs-ride="carousel" data-bs-interval="2500" >
   
   <div class="carousel-indicators">
  
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 4"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="4" aria-label="Slide 5"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="5" aria-label="Slide 6"></button>
  
  
      </div>
  
      <div class="carousel-inner">
        <?php
  
        $lastManga_result =  mysqli_query($conn, "SELECT * FROM manhwa where Manhwa_Num = 2");
  
        while ($row = mysqli_fetch_assoc($lastManga_result)) {
          $sqlmax ="SELECT MAX(chabter_num) FROM chabter WHERE manga_num =$row[Manhwa_Num]";
$resmax = mysqli_query($conn,$sqlmax);
$datamax = mysqli_fetch_array($resmax);
$max= $datamax[0];
$sqlmin ="SELECT Min(chabter_num) FROM chabter WHERE manga_num =$row[Manhwa_Num]";
$resmin= mysqli_query($conn,$sqlmin);
$datamin = mysqli_fetch_array($resmin);
$min= $datamin[0];
          echo '<div class="carousel-item active" data-bs-interval="10000 ">';
          echo '<div class="cards grow">';
          echo '<div class="imag-content">';
          echo    '<div class="card-image">';
          echo  '<a href="#" class="img-link"><img src= '. $row['coverimg'] .'  alt="" class="card-img"></a>';
          echo   '</div>';
          echo  '</div>';
          echo '<div class="card-content">';
          echo  '<h6 class="name">' . $row['Man_name'] . '</h6>';
          echo '<p class="discription">'. $row['Description'] . '</p>';
  
          echo   '<a href="http://localhost/project/manga.php?id='.$row['Manhwa_Num'].'"class="View btn" id="Rea_Advent_of_the_dark_Mage" type="button">View</a>';     
          echo   '<a href="http://localhost/project/chapter.php?id='.$row['Manhwa_Num'].'&&idc='.$min.'"class="firstchapter btn" id="Rea_Advent_of_the_dark_Mage" type="button">First Chapter</a>';     
          echo   '<a href="http://localhost/project/chapter.php?id='.$row['Manhwa_Num'].'&&idc='.$max.'"class="lastchapter btn" id="Rea_Advent_of_the_dark_Mage" type="button">Last Chapter</a>';     
          echo ' </div>';
          echo  '</div>';
          echo  '<div class="carousel-caption d-none d-md-block">';
          echo '</div>';
          echo '</div>';
        }
  
        ?>
  
  
        <?php
  
        $lastManga_result =  mysqli_query($conn, "SELECT * FROM manhwa ORDER BY Manhwa_Num DESC LIMIT 5 ");
  
        while ($row = mysqli_fetch_assoc($lastManga_result)) {
          $sqlmaxx ="SELECT MAX(chabter_num) FROM chabter WHERE manga_num =$row[Manhwa_Num]";
          $resmaxx = mysqli_query($conn,$sqlmaxx);
          $datamaxx = mysqli_fetch_array($resmaxx);
          $maxx= $datamaxx[0];
          $sqlminn ="SELECT Min(chabter_num) FROM chabter WHERE manga_num =$row[Manhwa_Num]";
          $resminn= mysqli_query($conn,$sqlminn);
          $dataminn = mysqli_fetch_array($resminn);
          $minn= $dataminn[0];
          echo '<div class="carousel-item ">';
          echo '<div class="cards grow">';
          echo '<div class="imag-content">';
          echo    '<div class="card-image">';
          echo  '<a href="#" class="img-link"><img src= ' . $row['coverimg'] . '  alt="" class="card-img"></a>';
          echo   '</div>';
          echo  '</div>';
          echo '<div class="card-content">';
          echo  '<h6 class="name">' . $row['Man_name'] . '</h6>';
          echo '<p class="discription">' . $row['Description'] . '</p>';
  
          echo   '<a href="http://localhost/project/manga.php?id='.$row['Manhwa_Num'].'"class="View btn" id="Rea_Advent_of_the_dark_Mage" type="button">View</a>';     
          echo   '<a href="http://localhost/project/chapter.php?id='.$row['Manhwa_Num'].'&&idc='.$minn.'"class="firstchapter btn" id="Rea_Advent_of_the_dark_Mage" type="button">First Chapter</a>';     
          echo   '<a href="http://localhost/project/chapter.php?id='.$row['Manhwa_Num'].'&&idc='.$maxx.'"class="lastchapter btn" id="Rea_Advent_of_the_dark_Mage" type="button">Last Chapter</a>';     
          echo ' </div>';
          echo  '</div>';
          echo  '<div class="carousel-caption d-none d-md-block">';
          echo '</div>';
          echo '</div>';
        }
  
        ?>

      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
            </div>

            <article class="blog-post">

        </div>

        <div class="col-md-4 py-5">
          <div id="carouselExampleControls" class="carousel " data-bs-ride="carousel">
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
      © WebToon By Sama Abusair,Marah Hanani <span id="year">2023</span>
    </div>

    <!-- Copyright -->
  </footer>
  <!-- Footer -->



  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script>
    $(function() {
      $(".toggle").on("click", function() {
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
  <script>
    
   // searchbtn.onclick = function() {
     
   // }
   


 
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</body>

</html>