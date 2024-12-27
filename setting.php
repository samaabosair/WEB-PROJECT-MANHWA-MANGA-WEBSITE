<?php
@include 'config.php';
session_start();
if (!isset($_SESSION['admin_name'])) {
  header('location:login.php');
}

?>
<?php 
if (isset($_POST['Ubdate_gmail'])) {
  
    $oldemil = $_POST['oldgmail'];
    $newemail = $_POST['newgmail'];
    $select ="SELECT * FROM users WHERE Gmail='$oldemil'";
    $result =mysqli_query($conn,$select);
    if(mysqli_num_rows($result)>0){
      $ubdate = "UPDATE users SET Gmail = '$newemail' WHERE Gmail = '$oldemil'";
      mysqli_query($conn, $ubdate);
      $error[]='The email has been changed successfully';

    }
 else{
  $error[]='This Account Not Found!';

 }

  
};

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors" />
  <meta name="generator" content="Hugo 0.111.3" />
  <title>Admin</title>
  
  <link rel="icon" href="bcfbbee028e94accaf8b199570d4528e.jpg" type="image/x-icon"/>


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="icon" href="bcfbbee028e94accaf8b199570d4528e.jpg" type="image/x-icon" />
  <link rel="stylesheet" type="text/css" href="stylee1.css" />
  <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>



</head>

<body>
<button onclick="topFunction()" id="myBtn" title="Go to top"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z"/>
</svg></button>
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
      <li><a href="adminwen.php" id="home">Home</a></li>
      <div class="dropdown">
        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><span>
            <?php echo  $_SESSION['admin_name'] ?>
          </span>
        </a>

        <ul class="dropdown-menu">
          <li><a href="adminwen.php" class="dropdown-item" >Profile</a></li>
          <li><a href="setting.php" class="dropdown-item">Setting</a></li>
          <li><a class="dropdown-item" href="logout.php">Log Out</a></li>
        </ul>
      </div>
      <li>
    </ul>
  

  </nav>



  
  <div class="FisrtBUtton" style="margin-top: 15px; margin-left:39%;">
    <a href="#updateemail" type="button" class="btn btn-outline-light">Change Email</a>
    <a href="#updatepass" type="button" class="btn btn-outline-light">Change Password</a>
  </div>
  <!---main arae--->


   
  
  <div id="updateemail" class="form-container" style="position: relative;">
  <a class="return_home" href="#">
      <img src="./icons/return_home.png">
    </a>
    <form action="" method="post" enctype="multipart/form-data">
      <h3>Change Email </h3>
      <?php
  if(isset($error)){
    foreach($error as $error){
      echo '<span class="error-msg">'.$error.'</span>';
    };
  };
  ?>
      <input id="oldemail" type="text" name="oldgmail" required placeholder="Old Gmail" />
      <input id="newemail" type="text" name="newgmail" required placeholder="New Gmail" />

  
        <button class="form-btn" type="submit" name="Ubdate_gmail">Change</button>

    </form>
  </div>
  <br>
  <div id="updatepass" class="form-container" style="position: relative;">
 
  <form action="" method="post" enctype="multipart/form-data">
  <a class="return_home" href="#">
      <img src="./icons/return_home.png">
    </a>
    <h3>Change Password</h3>
    <input type="password" name ="oldpassword" required placeholder="OLD PASSWORD"/> 
  <input type="password" name ="newpassword" required placeholder="New PASSWORD"/> 
  <input type="password" name ="confpassword" required placeholder="Conform New PASSWORD"/> 


      <button class="form-btn" type="submit" name="Ubdate_pass">Change</button>

  </form>
</div>
  <style>
    .return_home {
      display: inline-block;
      position: absolute;
      left: 0;
      top: 0;
      margin: 12px 18px;
      transition: 0.5s;
    }

    .return_home:hover {
      margin-left: 10px;
      filter: blur(0.5px);
    }
  </style>

  <script>
   const descManhwa = document.getElementById('desc_manhwa');
    const oldonameother = document.getElementById('oldonameother');
    const oldaother = document.getElementById('oldauthor');
    const oldpainter = document.getElementById('oldpainter');
    const selectInput = document.getElementById('selectubdateid');
    const evaloubdate = document.getElementById('evalonum');

    selectInput.onclick = function() {
      if (Number.isInteger(+selectInput.value)) {
        const url = 'http://localhost/project/getDescription.php?id=' + selectInput.value;

        const xhr = new XMLHttpRequest();
        xhr.onload = function(ev) {
         const data = this.responseText.split('@');
         console.log(data);
         descManhwa.value=data[0];
         oldonameother.value=data[1];
         oldaother.value=data[2];
         oldpainter.value=data[3];
         evaloubdate.value=data[4];
        

        }

        xhr.open('GET', url);
        xhr.send();
      }
    }
  </script>







  

  <br>


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
$('#year').text(new Date().getFullYear());
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</body>

</html>