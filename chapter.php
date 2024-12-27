<?php require './config.php' ?>
<?php
if (!isset($_GET['id']) && !isset(( $_GET['idc']))){
  echo "Invalid Request";
 
  die();
}
$id=$_GET['id'];
$idc=$_GET['idc'];
$sql="Select url from img where chabter_num = (Select Id from chabter where manga_num = $id AND chabter_num =$id)";
$res=mysqli_query($conn,$sql);
$datas = mysqli_fetch_array($res);
$sql2="SELECT * From manhwa where Manhwa_Num =$id";
$res2=mysqli_query($conn,$sql2);
$datas1 = mysqli_fetch_array($res2);
$sqlmax ="SELECT MAX(chabter_num) FROM chabter WHERE manga_num = $id";
$resmax = mysqli_query($conn,$sqlmax);
$datamax = mysqli_fetch_array($resmax);
$max= $datamax[0];
$sqlmin ="SELECT Min(chabter_num) FROM chabter WHERE manga_num = $id";
$resmin= mysqli_query($conn,$sqlmin);
$datamin = mysqli_fetch_array($resmin);
$min= $datamin[0];
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
    <title>Chapter</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
   <link rel="icon" href="bcfbbee028e94accaf8b199570d4528e.jpg" type="image/x-icon"/>
    <link rel="stylesheet" type="text/css" href="blog.css" />
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
      @media screen and (max-width: 480px) {
    img {
         width: 300px;
    }
}
@media screen and (max-width: 550px) {
    img {
         width: 300px;
    }
}
@media screen and (max-width: 570px) {
    img {
         width: 400px;
    }
}
@media screen and (max-width: 590px) {
    img {
         width: 430px;
    }
}
@media screen and (max-width: 600px) {
    img {
         width: 460px;
    }
}
@media screen and (max-width: 620px) {
    img {
         width: 460px;
    }
}
@media screen and (max-width: 640px) {
    img {
         width: 460px;
    }
}
@media screen and (max-width: 650px) {
    img {
         width: 460px;
    }
}
@media screen and (max-width: 900px) {
    img {
         width: 460px;
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
      <header class="blog-header lh-1 py-3">
<div class="top-bar">
      <span> <ion-icon name="call" ></ion-icon> +972 595 323 342</span>
      <ul>
      
        <li><a href="https:www.facebook.com/profile.php?id=100063495220810&mibextid=LQQJ4d" ><ion-icon name="logo-facebook"></ion-icon> </a> </li>
        <li><a href="https:twitter.com/web_toon7"><ion-icon name="logo-twitter"></ion-icon></a></ion-icon></li>
        <li><a href="https:www.instagram.com/web_toon7/?igshid=YmMyMTA2M2Y%3D"><ion-icon name="logo-instagram"></ion-icon></a></ion-icon></li>
       
      </ul>
    </div>
    <nav>
      <div class="logo">
        <a href="Manhwa.php">
          <img src="bcfbbee028e94accaf8b199570d4528e.jpg" alt="logo"
        /></a>
      </div>
      <div class="toggle">
        <a href="#"><ion-icon name="menu"></ion-icon></a>
      </div>

      <ul class="menu">
        <li><a href="Manhwa.php" id="home">Home</a></li>
        <li><a href="GENRES.php" id="Ranking">Genres</a></li>
        <li><a href="Browse.php" id="Browse">Browse</a></li>
        <li><a href="login.php" id="Login" >Login</a></li>
        <li><a href="register.php" id="Signup">Sign Up</a></li>
      </ul>
      <div class="search"> 
        <span class="icon">
          <ion-icon name="search" class="searchbtn"></ion-icon>
          <ion-icon name="close-circle" class="closbtn"></ion-icon>
        </span>
      </div>
      <div class="searchbox">
        <input type="text" placeholder="Search here .." >
      </div>
    
    </nav>
         
    </div>

<div class="py-2 mb-2 container">
        <nav class="nav d-flex justify-content-between">
          
        </nav>
</div>

   

<main class="container">
<div class="p-4 p-md-5 mb-4 rounded text-bg-dark">
<h3 style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif"><?php echo $datas1['Man_name']?> - <span class="spanchnum1"><?php echo $idc ?></span></h3>

<div class="top_par2"> 
        <a href="Manhwa.php" style="color :#bdc4cf;"><span>Home<span></a> 
        <a> / </a>
        <a href="http://localhost/project/manga.php?id=<?php echo $id?>" style="color :#bdc4cf;"><span><?php echo $datas1['Man_name']?><span></a>
        <a> / </a>
        <a href="#" style="color :#bdc4cf;"><span><?php echo $idc ?><span></a>
</div>
<br>
<div class="top-par3">
  <div>
  <a type="button" id="nexta" class="btn btn-primary" href="http://localhost/project/chapter.php?id=<?php echo $id?> &&idc=<?php echo ($idc+1)?>"> <span  id="nexto">Next</span> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
</svg></a>

<a type="button" id="Previousa" class="btn btn-primary" href="http://localhost/project/chapter.php?id=<?php echo $id?> &&idc=<?php echo ($idc-1)?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
</svg><span id ="Previouso">Previous</span></a>
  </div>
<div class="selectchabter">
<div class="dropdown">
  <button type="button"  class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
 <span id="selectcha"></span>
</button>
  <ul class="dropdown-menu">
  <?php
    $chabternum =  mysqli_query($conn, "SELECT * FROM chabter where manga_num=$id
    ");
  while ($row1 = mysqli_fetch_assoc($chabternum )) {

  echo '<li><a class="dropdown-item" href="http://localhost/project/chapter.php?id='.$id.' &&idc='.$row1['chabter_num'].'">'.$row1['chabter_num'].'</a></li>';
   } ?>
  </ul>
</div>

</div>

<script>
    const selectInput = document.getElementById('selectcha');

    selectInput.innerHTML=<?php echo $idc ?>;
   if (<?php echo($idc+1)?> > <?php echo $max ?>){
    $('#nexto').text("Manhwa Page");
    
    var yourElement = document.getElementById('nexta');
    yourElement.setAttribute('href', 'http://localhost/project/manga.php?id= <?php echo $id ?>');

   }
   if (<?php echo($idc-1)?> < <?php echo $min ?>){
    $('#Previouso').text("Manhwa Page");
    
    var yourElementPreviouso = document.getElementById('Previousa');
    yourElementPreviouso.setAttribute('href', 'http://localhost/project/manga.php?id= <?php echo $id ?>');

   }
</script>
 

</div>

<?php

$img_chabter =  mysqli_query($conn,"select url from img where chabter_num =(SELECT Id from chabter where manga_num = $id AND chabter_num =$idc);
");

while ($row = mysqli_fetch_assoc($img_chabter)) {
  echo '<div  class ="py-4" style="  text-align: center;" >';
  echo ' <img src= '. $row['url'] . '  alt="">';
  echo '</div>';
}

?>



<div class="top-par3">
  <div>
  <a type="button" id="nexta2" class="btn btn-primary" href="http://localhost/project/chapter.php?id=<?php echo $id?> &&idc=<?php echo ($idc+1)?>"><span id="next2">Next</span> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
</svg></a>

<a type="button" id="Previousa2" class="btn btn-primary" href="http://localhost/project/chapter.php?id=<?php echo $id?> &&idc=<?php echo ($idc-1)?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
</svg> <span id="Previous22">Previous </span></a>
  </div>

<div class="selectchabter">
<div class="dropdown">
  <button type="button"  class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
 <span id="selectcha2"></span>
</button>
  <ul class="dropdown-menu">
  <?php
    $chabternum =  mysqli_query($conn, "SELECT * FROM chabter where manga_num=$id
    ");
  while ($row1 = mysqli_fetch_assoc($chabternum )) {

  echo '<li><a class="dropdown-item" href="http://localhost/project/chapter.php?id='.$id.' &&idc='.$row1['chabter_num'].'">'.$row1['chabter_num'].'</a></li>';
   } ?>
  </ul>
</div>

</div>

<script>
    const selectInput2 = document.getElementById('selectcha2');
    selectInput2.innerHTML=<?php echo $idc ?>;
    if (<?php echo($idc+1)?> > <?php echo $max ?>){
    $('#next2').text("Manhwa Page");
    
    var yourElement3 = document.getElementById('nexta2');
    yourElement3.setAttribute('href', 'http://localhost/project/manga.php?id= <?php echo $id ?>');

   }
   if (<?php echo($idc-1)?> < <?php echo $min ?>){
    $('#Previous22').text("Manhwa Page");
    
    var yourElementPreviouso = document.getElementById('Previousa2');
    yourElementPreviouso.setAttribute('href', 'http://localhost/project/manga.php?id= <?php echo $id ?>');

   }
</script>

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
  © WebToon By Sama Abusair,Marah Hanani <span id="year">2023</span> :
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
<script> 
let searchbtn = document.querySelector('.searchbtn');
let closbtn = document.querySelector('.closbtn');
let searchbox = document.querySelector('.searchbox');
searchbtn.onclick=function(){
  searchbox.classList.add('active');
  closbtn.classList.add('active');
  searchbtn.classList.add('active');

}
closbtn.onclick=function(){
  searchbox.classList.remove('active');
  closbtn.classList.remove('active');
  searchbtn.classList.remove('active');

}
// Get the button:
let mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}
$('#year').text(new Date().getFullYear());

</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script></html>