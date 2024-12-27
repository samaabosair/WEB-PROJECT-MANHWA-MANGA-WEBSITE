<?php 
@include 'config.php';
if(isset($_POST['submit'])){
$name = mysqli_real_escape_string($conn,$_POST['names']);
$email =mysqli_real_escape_string($conn,$_POST['email']);
$pass = mysqli_real_escape_string($conn,$_POST['password']);
$cpass = mysqli_real_escape_string($conn,$_POST['cpassword']);
$user_type ="user";
$select1 ="SELECT * FROM users";
$select ="SELECT * FROM users WHERE Gmail='$email' && password ='$pass'";
$result =mysqli_query($conn,$select);
$result1 =mysqli_query($conn,$select1);
if(mysqli_num_rows($result)>0){
  $error[]='user already exist';
}
  else{
    if($pass != $cpass){
      $error[]='password not matched!';
    }
    else{
      $rowcount = mysqli_num_rows( $result1 );
      $counts = $rowcount+1;
      $insert="INSERT INTO users (Gmail,password,user_type,user_name) VALUES ('$email','$pass','$user_type','$name')";
      mysqli_query($conn,$insert);
      header('location:login.php');  }
    }
};
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register WebToon</title>
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
        <li><a href="Browse.php" id="Browse">Browse</a></li>
        <li><a href="login.php" id="Login" >Login</a></li>
        <li><a href="register.php" id="Signup">Sign Up</a></li>
      </ul>
   
    </nav>
         
  </header></div>
   
   

<!---loginform--->
<main class="container">
<div class="p-4 p-md-5 mb-4 rounded text-bg-dark">

<div class ="form-container">
  <form action="register.php" method="post">
  <h3>register now</h3>
  <?php
  if(isset($error)){
    foreach($error as $error){
      echo '<span class="error-msg">'.$error.'</span>';
    };
  };
  ?>
  <input type="text" name ="names" required placeholder="enter your name"/>
  <input type="email" name ="email" required placeholder="enter your email"/>
  <input type="password" name ="password" required placeholder="enter your pass"/>
  <input type="password" name ="cpassword" required placeholder="enter your pass"/>
 
      <button value="register now" class="form-btn" type="submit" name="submit">Continue</button>
      <a href="login.php"> Already have an account? login now</a>
    </form>
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
  © WebToon By Sama Abusair,Marah Hanani <span id="year">20</span> :
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

</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</html>