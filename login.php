<?php 
@include 'config.php';
session_start();

if(isset($_POST['submit'])){
$email =mysqli_real_escape_string($conn,$_POST['email']);
$pass = mysqli_real_escape_string($conn,$_POST['password']);
$select ="SELECT * FROM users WHERE Gmail='$email' && password ='$pass'";
$result =mysqli_query($conn,$select);
if(mysqli_num_rows($result)>0){
   $row =mysqli_fetch_array($result);
   
   if($row['user_type'] =='Admin'){
    $_SESSION['admin_name']=$row['user_name'];
     header('location:adminwen.php');
   }

   elseif($row['user_type'] =='user'){
      $_SESSION['nameuser']=$row['user_name'];
      header('location:user.php');
    }

    else{
      $error[]='incorrect email or password!';
      
    }
  }
};
?>





<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login WebToon</title>
  <link rel="stylesheet" type="text/css" href="stylee1.css" />
<script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<link rel="icon" href="bcfbbee028e94accaf8b199570d4528e.jpg" type="image/x-icon"/>

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
        <li><a href="login.php" id="Login" >Login</a></li>
        <li><a href="register.php" id="Signup">Sign Up</a></li>
      </ul>
      
    </nav>
         
  </header></div>
   

<!---loginform--->

<main class="container">
      <div class="p-4 p-md-5 mb-4 rounded text-bg-dark">
       
<div class ="form-container">
  <form action ="" method="post">
  <h3>Login</h3>
  <?php
  if(isset($error)){
    foreach($error as $error){
      echo '<span class="error-msg">'.$error.'</span>';
    };
  };
  ?>
  <input type="email" name ="email" required placeholder="EMAIL"/>
  <input type="password" name ="password" required placeholder="PASSWORD"/> 
      <button value="register now" class="form-btn" type="submit" name="submit">Continue</button>
      <a href="register.php">Not have an account? Create account</a>
    </form>
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