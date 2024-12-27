<?php require './config.php' ?>
<?php
if (!isset($_GET['id'])){
  echo "Invalid Request";
  die();
}
$id=$_GET['id'];
$sql="SELECT * From manhwa where Manhwa_Num =$id";
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
    <title><?php echo $datas['Man_name'] ?></title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
   <link rel="icon" href="<?php echo $datas['coverimg'] ?>" type="image/x-icon"/>
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
    <div class="search">      <div class="input-group">
  <input type="search" style="    margin-bottom: .3em;

" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon"   />
 <a href="http://localhost//project/search.php?ids=2"><button type="button" class="btn btn-outline-primary" style="margin-left: 10px;   background: linear-gradient(to right, #1e2225, #182130, #0e0e11);
Color:white;">search</button></a> 
</div>
</div>
        </div>
  </nav>

</div>

<div class="py-2 mb-2 container">
        <nav class="nav d-flex justify-content-between">
          
        </nav>
</div>

<main class="container">
 
      <div class="p-4 p-md-5 mb-4 rounded text-bg-dark">
        <h3><?php echo $datas ['Man_name']?></h3>
        <div class="top_par2"> <a href="Manhwa.php" style="color :#bdc4cf;"><span><b>Home</span></a> 
        <a> / </a>
        <a href="http://localhost/project/manga.php?id=<?php echo $id?>" style="color :#bdc4cf;"><span><b><?php echo $datas ['Man_name']?></b></span></a>
        
        </div>

     <br>
      <div class="p-6 p-md-5 mb-4 rounded" style=" background: linear-gradient(to right, #1e2225,#0e0e11);
      ">
      <div class="container">
    <div class="row mb-2 ">
        <div class="col-5  grow">
            <img class="card-text1" style='float:left; width:200px;height:270px; margin-right:10px;' src="<?php echo $datas ['coverimg']?>" />
            <p class="card-text1">Evaluation :</p> 
            <p class="card-text1">Other Names :</p>
            <p class="card-text1">Author : </p>
            <p class="card-text1">Painter : </p>
            <p class="card-text1">Genres : </p>
            <p class="card-text1">Production Year : </p>
            <p class="card-text1">The Status :</p>  
        </div>
        <div class="col-5 themed-grid-col grow">
            <p class="card-text2">Average <?php echo $datas ['Evaluation']?>/ 5 </p>
            <p class="card-text2"><?php echo $datas ['Other_Names']?></p>
            <p class="card-text2"><?php echo $datas ['Author']?></p>
            <p class="card-text2"><?php echo $datas ['Painter']?></p>
            <?php
            $idcc = $datas ['genres_num'];
            $sql2="SELECT * From genres where gen_num = $idcc";
            $res2= mysqli_query($conn,$sql2);
            $row2 = mysqli_fetch_assoc($res2) ;
            echo '<p class="card-text2">'.$row2 ['gen_name'].'</p>';
            ?>
            <p class="card-text2"><?php echo $datas ['addData']?></p>
            <p class="card-text2"><?php echo $datas ['Status']?></p>
            
        </div>
    
    </div>
    
       
    
    
      </div>
      </div>
</main>



<main class="container ">
      <div class="p-2 p-md-5 mb-4 rounded text-bg-dark post">
       
      <div class="row g-3 ">
        <div class="col-md-8">
          <h3 class="pb-2 mb-4  border-bottom">The Story</h3>
          <article class="blog-post">
            <p class="blog-post-meta">
              <?php echo $datas ['Description']?>
            </p>
            <hr />
          <h5 class="pb-2 mb-4">Chabters</h5>
           
          <hr />
        
<!--loop chabter-->
<?php
$res1=mysqli_query($conn,"SELECT * From chabter where manga_num =$id");
while ($row1 = mysqli_fetch_assoc($res1)) {
          echo'<div class="row mb-2 chab ">';
        echo'<div class="col-5  grow">';
        echo  '<a href="http://localhost/project/chapter.php?id='.$id.' &&idc='.$row1['chabter_num'].'" style="color:#ffffff;"><p class="card-text1">Chabter'.$row1['chabter_num'].'</p> </a>'; 
       echo '</div>';
       echo '<div class="col-5 themed-grid-col grow">';
       echo '<img class="new" src="new.gif" width="50px">';
       echo '</div>';
   echo '</div>';
    echo'<hr />';}
    ?>
  <!--end loop-->
 <!--loop chabter-->
 

    

          </article>
<!--swipper-->
</article>

<article class="blog-post">
 
</div>


<div class="col-md-4">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="swipper1/pic1.jpg" class="d-block w-100" style="height:320px;" alt="...">
    </div>
    <?php
    $last5Manga_result =  mysqli_query($conn, "SELECT * FROM manhwa ORDER BY Manhwa_Num ASC LIMIT 4 ");
    while ($row = mysqli_fetch_assoc($last5Manga_result)) {

   echo '<div class="carousel-item">';
    echo ' <a href="http://localhost/project/manga.php?id='.$row['Manhwa_Num'].'"><img src= '. $row['coverimg'] .'  style="height:320px;" class="d-block w-100" alt="..."></a>';
   echo '</div>';
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
      © WebToon By Sama Abusair,Marah Hanani <span id="year">2023</span> :
    </div>

    <!-- Copyright -->
  </footer>
  <!-- Footer -->



  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script>
    const loadmore=document.querySelector('.load-more');
    let curreentitem=3;
    loadmore.addEventListener('click',(e)=>{
      const elemintlist=[...document.querySelectorAll('.post div')];
      e.target.classList.add('show-loader');
for(let i=curreentitem;i<curreentitem+3;i++){
  serTimeout(function(){

    e.target.classList.remove('show-loader');
      if(elemintlist[i]){
        elemintlist[i].style.display='flex';}

},3000)
}
curreentitem+=3;
///hide button after fully load
if(curreentitem>= elemintlist.length){
  event.target.classList.add('loaded')
}
    })
  </script>
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

  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</body>

</html>