<?php
@include 'config.php';
session_start();
if (!isset($_SESSION['admin_name'])) {
  header('location:login.php');
}
$select = "SELECT * FROM genres";
$select2 = "SELECT * FROM manhwa";

$result = mysqli_query($conn, $select);
$result3 = mysqli_query($conn, $select);
$result1 = mysqli_query($conn, $select2);
$result2 = mysqli_query($conn, $select2);
$result4 = mysqli_query($conn, $select2);
$result5 = mysqli_query($conn, $select2);
$result6 = mysqli_query($conn, $select2);
$result7 = mysqli_query($conn, $select2);


  ////////////////////////////add big swipper////////////////////////////////
  if (isset($_POST['add_swipperbig'])) {
    $allowed_ext3 = array(
      "jpg" => "image/jpg",
      "jpeg" => "image/jpeg",
      "png" => "image/png"
    );
  
      $file_path_tmp4= $_FILES['coverimgs3swipper']['tmp_name'];
      $file_name4 = $_FILES['coverimgs3swipper']['name'];
      $url6= "http://localhost/project/swipper2/" . $_FILES['coverimgs3swipper']['name'];
      $file_type = $_FILES["coverimgs3swipper"]["type"];
      $ext = pathinfo($file_name4, PATHINFO_EXTENSION);
      if (!array_key_exists($ext, $allowed_ext3)) {
        $error[] = 'Select a photo ';
      } else {
        move_uploaded_file($file_path_tmp4, "swipper2/" . $_FILES['coverimgs3swipper']['name']);
        $insert16 = "INSERT INTO swipper2 (imgs) VALUES ('$url6')";
        echo $insert16;
        mysqli_query($conn, $insert16);
        header('location:adminwen.php');
      }
    }
  ;
  ////////////////////////////////////////////////////////////////////////////
///////////////////////////// add swipper ////////////////////////////////////
if (isset($_POST['add_card'])) {
  $allowed_ext1 = array(
    "jpg" => "image/jpg",
    "jpeg" => "image/jpeg",
    "png" => "image/png"
  );

    $file_path_tmp3= $_FILES['coverimgs2swipper']['tmp_name'];
    $file_name3 = $_FILES['coverimgs2swipper']['name'];
    $url5 = "http://localhost/project/swipper1/" . $_FILES['coverimgs2swipper']['name'];
    $file_type = $_FILES["coverimgs2swipper"]["type"];
    $ext = pathinfo($file_name3, PATHINFO_EXTENSION);
    if (!array_key_exists($ext, $allowed_ext1)) {
      $error[] = 'Select a photo ';
    } else {
      move_uploaded_file($file_path_tmp3, "swipper1/" . $_FILES['coverimgs2swipper']['name']);
      $insert = "INSERT INTO swipper (img_swip)
      VALUES ('$url5')";
      mysqli_query($conn, $insert);
      header('location:adminwen.php');
    }
  }
;

///////////////////////////// end add manhwa //////////////////////////////////

///////////////////////////// end siper //////////////////////////////////
///////////////////////////// add manhwa////////////////////////////////////////



///////////////////////////// Genres Add  //////////////////////////////////
if (isset($_POST['add_genres'])) {
  $genres1_name = mysqli_real_escape_string($conn, $_POST['genres1_name']);
  $selecttwo = "SELECT * FROM genres WHERE gen_name = '$genres1_name' ";
  $resultone = mysqli_query($conn, $selecttwo);
  $selectcount2 = "SELECT * FROM genres";
  $resultcount2 = mysqli_query($conn, $selectcount2);
  if (mysqli_num_rows($resultone) > 0) {
    $error1[] = 'Genres already exist';
  } else {
    $rowcount = mysqli_num_rows($resultcount2);
    $counts = $rowcount + 1;
    $insert = "INSERT INTO genres (gen_num,gen_name) VALUES ('$counts','$genres1_name')";
    mysqli_query($conn, $insert);
    header('location:adminwen.php');
  }
};
///////////////////////////// end  Genres ///////////////////////////////

///////////////////////////// Ubdate_Manhwa ////////////////////////////
if (isset($_POST['Ubdate_Manhwa'])) {
  $allowed_ext1 = array(
    "jpg" => "image/jpg",
    "jpeg" => "image/jpeg",
    "png" => "image/png"
  );
  if (empty($_POST['selectubdate'])) {
    echo "eror";
    //   $error[]='select genres';
  } else {
    $genresselect1 = $_POST['selectubdate'];
    $selectthree = "SELECT Man_name FROM manhwa WHERE Manhwa_Num = '$genresselect1'";
    $resultthree = mysqli_query($conn, $selectthree);
    $roww = mysqli_fetch_array($resultthree);
    $_SESSION['manhwa_name'] = $roww['Man_name'];
    $manhwa_name = $_SESSION['manhwa_name'];
    $newmanhwa_name = mysqli_real_escape_string($conn, $_POST['newnames']);
    $genresselect2 = $_POST['genresselect3'];
    $othemanhwa_name2 = mysqli_real_escape_string($conn, $_POST['new_othername']);
    $authorn2 = mysqli_real_escape_string($conn, $_POST['newAuthorname']);
    $manhwa_painter2 = mysqli_real_escape_string($conn, $_POST['newPainter']);
    $status2 = $_POST['Statusubdate'];
    $evaluation2 = mysqli_real_escape_string($conn, $_POST['Num_eval2']);
    $desscribtionubdate = mysqli_real_escape_string($conn, $_POST['discrubtionubdate']);
    $file_path_tmpubdate = $_FILES['ubdatefile']['tmp_name'];
    $file_nameubdate = $_FILES['ubdatefile']['name'];
    $url1 = "http://localhost/project/cover/" . $_FILES['ubdatefile']['name'];
    $file_type = $_FILES["ubdatefile"]["type"];
    $ext1 = pathinfo($file_nameubdate, PATHINFO_EXTENSION);
    if (!array_key_exists($ext1, $allowed_ext1)) {
      $error2[] = 'Select a photo';
    } else {
      move_uploaded_file($file_path_tmpubdate, "cover/" . $_FILES['ubdatefile']['name']);
      $ubdate = "UPDATE manhwa SET Man_name = '$newmanhwa_name', Description = '$desscribtionubdate ', coverimg = '$url1', genres_num = '$genresselect2',Evaluation	='$evaluation2',Other_Names='$othemanhwa_name2',Author='$authorn2',Painter='$manhwa_painter2',Status='$status2' WHERE manhwa.Manhwa_Num = $genresselect1";
      mysqli_query($conn, $ubdate);
    }


  }
};
///////////////////////////// end Ubdate_Manhwa /////////////////////
////////////////////////////  delet manhwa /////////////////////////
if (isset($_POST['Delete_Manhwa'])) {
  $selectdeletemanhwa2= $_POST['deleteselect'];
  $insertdeletechabter = "DELETE from chabter WHERE  manga_num =$selectdeletemanhwa2";
    $insertdeletemahwa = "DELETE from  manhwa WHERE  Manhwa_Num=$selectdeletemanhwa2";

    mysqli_query($conn,$insertdeletechabter);
    mysqli_query($conn, $insertdeletemahwa );

    header('location:adminwen.php');
  }
;
if (isset($_POST['Delete_Manhwa'])) {
  $selectdeletemanhwa1 = $_POST['deletechabter'];
  $chabternum = mysqli_real_escape_string($conn, $_POST['Num_Chabter1']);
  $insertdeletechabter = "DELETE from chabter WHERE  manga_num =$selectdeletemanhwa1";

    mysqli_query($conn,$insertdeletechabter);

    header('location:adminwen.php');
  }
;

////////////////////////////  end delete manhwa ////////////////////
//////////////////////////// Add Chapter //////////////////////////

if (isset($_POST['add_chabter'])) {
  // if(!isset($_POST))
  $manhwa_id = $_POST['select_manhwa'];
  $chapter_num = $_POST['Num_Chabter'];
  $chabter_date = $_POST['chabteradd_date'];

  $url_upload;
  //Add the new chapter to the chapter table:
  mysqli_query($conn, "INSERT INTO chabter (manga_num, chabter_num,last_add) VALUES ($manhwa_id,$chapter_num,'$chabter_date')");

  $id = mysqli_fetch_array(mysqli_query($conn, "SELECT max(id) FROM chabter"))[0];

  $total_count = count($_FILES['chapter_imgs']['name']);
  $query = "INSERT INTO img (chabter_num, url) VALUES ( ?, ?)";
  $stmt = mysqli_prepare($conn, $query);

  mysqli_stmt_bind_param($stmt, "is", $id, $url_upload);
  echo  $url_upload;


  // Loop through every file
  for ($i = 0; $i < $total_count; $i++) {
    //The temp file loaded path is obtained
    $tmpFilePath = $_FILES['chapter_imgs']['tmp_name'][$i];
    //A file path needs to be present
    //Setup our new file path


    $type =  explode('.', $_FILES['chapter_imgs']['name'][$i])[1];

    //Gives me unique id for each image
    $file_name = uniqid();
    $newFilePath = "chapter_imgs/" . $file_name . '.' . $type;

    $url_upload = "http://localhost/project/$newFilePath";
    mysqli_stmt_execute($stmt);
    //File is uploaded to temp dir
    move_uploaded_file($tmpFilePath, $newFilePath);
  }
 

};

if (isset($_POST['add_Manhwa'])) {
  $manhwa_name = $_POST['manhwa_name'];
  $discrubtion11 =$_POST['discrubtion1'];
  $genresselect11 = $_POST['genresselectadd'];
  $othermanhwa_name11 =$_POST['manhwa_othername1'];
  $aouthorname11 =$_POST['authorname1'];
  $ppainter11 =$_POST['painter1'];
  $datas11 = $_POST['addmanga_date'];
  $chabtercount = 0;
  $status11 = $_POST['status1'];
  $Num_eval111 =$_POST['Num_eval11'];
 //////////////////////////////////////////////////img file////////////////////
    $file_path_tmp11= $_FILES['coverimgs']['tmp_name'];
    $file_name = $_FILES['coverimgs']['name'];
    $url1 = "http://localhost/project/cover/". $_FILES['coverimgs']['name'];
    $file_type = $_FILES["coverimgs"]["type"];
    $ext = pathinfo($file_name, PATHINFO_EXTENSION);
 /////////////////////////////////////////////////////////////////////////////
  $allowed_ext = array(
    "jpg" => "image/jpg",
    "jpeg" => "image/jpeg",
    "png" => "image/png"
  );

  ////////////////////////////////////////////////////////////////////////////////////
  $selectone11 = "SELECT * FROM manhwa WHERE Man_name = '$manhwa_name'";
  $selectone12 = "SELECT * FROM manhwa"; 
  $resultone12 = mysqli_query($conn, $selectone12);
  $resultone11 = mysqli_query($conn, $selectone11);

    $rowcount = mysqli_num_rows($resultone12);
    move_uploaded_file($file_path_tmp11,"cover/". $_FILES['coverimgs']['name']);
    $counts11 = $rowcount + 1;
    $insert11 = "INSERT INTO manhwa (Man_name,chabters_counter,Description,
    coverimg,genres_num,addData,Evaluation,Other_Names,Author,Painter,Status) 
    VALUES ('$manhwa_name','$chabtercount','$discrubtion11','$url1','$genresselect11',
    '$datas11','$Num_eval111','$othermanhwa_name11','$aouthorname11','$ppainter11','$status11')";
        mysqli_query($conn, $insert11);

    $error[] = 'Manhwa adde';
 
  

};
///////////////////////////// end add manhwa //////////////////////////////////

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
      <li><a href="GENRES.php" id="Genres">Genres</a></li>
      <div class="dropdown">
        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><span>
            <?php echo  $_SESSION['admin_name'] ?>
          </span>
        </a>

        <ul class="dropdown-menu">
          <li><a href="adminwen.php"class="dropdown-item" >Profile</a></li>
          <li><a href="setting.php" class="dropdown-item" >Setting</a></li>
          <li><a class="dropdown-item" href="logout.php">Log Out</a></li>
        </ul>
      </div>
      <li>
    </ul>

  </nav>



  <div class="FisrtBUtton" style="margin-top: 15px; margin-left:10%;">
    <a href="#bigswipper" type="button" class="btn btn-outline-light">Add to big swipper</a>
    <a href="#add_card" type="button" class="btn btn-outline-light">Add carousel img</a>

    <a href="#add_genres" type="button" class="btn btn-outline-light">Add Genres</a>

    <a href="#add_manhwa" type="button" class="btn btn-outline-light">Add Manhwa</a>
    <a href="#delete_manhwa" type="button" class="btn btn-outline-light">Delete Manhwa</a>
    <a href="#update" type="button" class="btn btn-outline-light">Ubdate Manhwa</a>

    <a href="#newchab" type="button" class="btn btn-outline-light">New Chabter</a>
    <a href="#deletechab" type="button" class="btn btn-outline-light">Delete Chabter</a>
  </div>


  <!---main arae--->


  <div id="bigswipper" class="form-container" style="position:relative">
    <a class="return_home" href="#">
      <img src="./icons/return_home.png">
    </a>
    <form action="" method="post" enctype="multipart/form-data">
      <h3>Big swipper Form</h3>
      <input name="coverimgs3swipper" class="form-control" type="file" id="formFileMultiple" />
      <button value="register now" class="form-btn" type="submit" name="add_swipperbig">Add img</button>

    </form>
  </div>

  <div id="add_card" class="form-container" style="position:relative">
    <a class="return_home" href="#">
      <img src="./icons/return_home.png">
    </a>
    <form action="" method="post" enctype="multipart/form-data">
      <h3>swipper Form</h3>
      <input name="coverimgs2swipper" class="form-control" type="file" id="formFileMultiple" />
      <button value="register now" class="form-btn" type="submit" name="add_card">Add img</button>

    </form>
  </div>
  
  <div id="add_genres" class="form-container" enctype="multipart/form-data">
  
    <form action="" method="post">
      <h3>Genres Form</h3>
      <?php
      if (isset($error1)) {
        foreach ($error1 as $error1) {
          echo '<span class="error-msg">' . $error1 . '</span>';
        };
      };
      ?>
      <input type="text" name="genres1_name" required placeholder="Name Of Genres" />

      <button class="form-btn" type="submit" name="add_genres">Add Genres</button>

    </form>
  </div>

  <div id="add_manhwa" class="form-container" style="position:relative">
    <a class="return_home" href="#">
      <img src="./icons/return_home.png">
    </a>
    <form action="" method="post" enctype="multipart/form-data">
      <h3>Manhwa Form</h3>
      <?php
      if (isset($error)) {
        foreach ($error as $error) {
          echo '<span class="error-msg">' . $error . '</span>';
        };
      };
      ?>
      <input type="text" name="manhwa_name" required placeholder="Name Of Manga?" />
      <input type="text" name="manhwa_othername1" required placeholder="Other Name Of Manga?" />
      <input type="text" name="authorname1" required placeholder="Name Of Author?" />
      <input type="text" name="painter1" required placeholder="Name Of Painter?" />

      <select name="genresselectadd" class="form-select" aria-label="Default select example">
        <?php while ($row1 = mysqli_fetch_array($result)) :; ?>
          <option value="<?php echo $row1[0]; ?>"><?php echo $row1[1]; ?></option>
        <?php endwhile; ?>
      </select>
      <input name="coverimgs" class="form-control" type="file" id="formFileMultiple" />
      <input type="text" name="discrubtion1" maxlength="200" required placeholder=" Add description of this manhwa" />
      <input type="date" min="0" name="addmanga_date" />
      <select name="status1" id="statuesid" class="form-select" aria-label="Default select example">
      <option >continuing</option>
      <option >stopped</option>
</select>
<input type="number" min="0" max="5" name="Num_eval11" required placeholder="Number Of Evaluation From 5?" />

      <button value="register now" class="form-btn" type="submit" name="add_Manhwa">Add Manhwa</button>

    </form>
  </div>

  <div id="update" class="form-container" style="position: relative;">
    <a class="return_home" href="#">
      <img src="./icons/return_home.png">
    </a>
    <form action="" method="post" enctype="multipart/form-data">
      <h3>Update Manhwa</h3>
      <?php
      if (isset($error2)) {
        foreach ($error2 as $error2) {
          echo '<span class="error-msg">' . $error2 . '</span>';
        };
      };
      ?>
      <select name="selectubdate" id="selectubdateid" class="form-select" aria-label="Default select example">
        <option selected>Select Manhwa</option>
        <?php while ($row1 = mysqli_fetch_array($result1)) :; ?>
          <option value="<?php echo $row1[0]; ?>"><?php echo $row1[1]; ?></option>
        <?php endwhile; ?>
        <input type="text" name="newnames" required placeholder="New name Of Manga?" />
        <input id="oldonameother" type="text" name="new_othername" required placeholder="Other Name Of Manga?" />
      <input id="oldauthor" type="text" name="newAuthorname" required placeholder="New Name Of Author?" />
      <input  id="oldpainter" type="text" name="newPainter" required placeholder="New Name Of Painter?" />
        <select name="genresselect3" class="form-select" aria-label="Default select example">
          <option selected>Select Genres</option>
          <?php while ($row1 = mysqli_fetch_array($result3)) :; ?>
            <option value="<?php echo $row1[0]; ?>"><?php echo $row1[1]; ?></option>
          <?php endwhile; ?>
        </select>
        
        <input class="form-control" name="ubdatefile" type="file" id="formFileMultiple" />
        <input id="desc_manhwa" type="text" name="discrubtionubdate" maxlength="255" required placeholder=" Add description of this manhwa" />
        <select name="Statusubdate" id="statuesidubdate" class="form-select" aria-label="Default select example">
      <option >continuing</option>
      <option >stopped</option>
</select>
<input  id ="evalonum" type="number" min="0" max="5"  name="Num_eval2" required placeholder="Number Of Evaluation From 5?" />

        <button class="form-btn" type="submit" name="Ubdate_Manhwa">Ubdate Manhwa</button>

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

  <div id="delete_manhwa" class="form-container" style="position:relative">
    <a class="return_home" href="#">
      <img src="./icons/return_home.png">
    </a>
    <form action="" method="post">
      <h3>DELETE MANHWA</h3>
      <select name ="deleteselect" class="form-select" aria-label="Default select example">
        <option selected>Select Manhwa</option>
        <?php while ($row1 = mysqli_fetch_array($result2)) :; ?>
          <option value="<?php echo $row1[0]; ?>"><?php echo $row1[1]; ?></option>
        <?php endwhile; ?>
      </select>

      <button value="register now" class="form-btn" type="submit" name="Delete_Manhwa">Delete Manhwa</button>
    </form>
  </div>




  <div class="form-container" id ="newchab" style="position:relative">
  <a class="return_home" href="#">
      <img src="./icons/return_home.png">
    </a>
    <form action="" method="post" enctype="multipart/form-data">
      <h3>New Chapter</h3>
      <select name="select_manhwa" class="form-select" aria-label="Default select example">
        <option selected>Select Manga</option>
        <?php while ($row1 = mysqli_fetch_array($result4)) :; ?>
          <option value="<?php echo $row1[0]; ?>"><?php echo $row1[1]; ?></option>
        <?php endwhile; ?>
      </select>
      <input type="number" min="0" name="Num_Chabter" required placeholder="Number Of Chabter?" />
      <input name="chapter_imgs[]" class="form-control" type="file" id="formFileMultiple" multiple />
      <input type="date" min="0" name="chabteradd_date" />

      <button value="register now" class="form-btn" type="submit" name="add_chabter">Add Chabter</button>


    </form>
  </div>


  <div class="form-container" id="deletechab" style="position:relative">
  <a class="return_home" href="#">
      <img src="./icons/return_home.png">
    </a>
    <form action="" method="post">
      <h3> Delte Chapter</h3>
      <select class="form-select" aria-label="Default select example" name="genresselectone">
        <option selected name="deletechabter">Select Manga</option>
        <?php while ($row1 = mysqli_fetch_array($result5)) :; ?>
          <option value="<?php echo $row1[0]; ?>"><?php echo $row1[1]; ?></option>
        <?php endwhile; ?>
      </select>
      <input type="number" min="0" name="Num_Chabter1" required placeholder="Number Of Chabter?" />
      <button value="register now" class="form-btn" type="submit" name="delete_chabter">Delete Chabter</button>



    </form>
  </div>

  <br>




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
    let ubdatewindow = document.querySelector('.searchbtn');
    let searchbtn = document.querySelector('.searchbtn');
    let closbtn = document.querySelector('.closbtn');
    let searchbox = document.querySelector('.searchbox');

    searchbtn.onclick = function() {
      searchbox.classList.add('active');
      closbtn.classList.add('active');
      searchbtn.classList.add('active');

    }
    closbtn.onclick = function() {
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
  <script>

  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</body>

</html>