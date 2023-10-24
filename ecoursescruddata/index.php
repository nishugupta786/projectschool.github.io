
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="css/all.css">
<link rel="stylesheet" type="text/css" href="css/all.min.css">
<link rel="stylesheet" type="text/css" href="css/fontawesome.min.css">

</head>
<body>

<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img class="logo" src="img/logo.png" alt="Logo"> 
    </a>

  
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Home</a>
        </li>
		
        <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>
		<li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Blog</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="blog.php">Blog List</a></li>
        
           
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="courses.php">Courses</a>
        </li>
		
		<li class="nav-item">
          <a class="nav-link" href="crudsqlcon/contactinsertdata.php">Contact</a>
        </li>
      </ul>
      <a href=""><button type="button" class="btn btn-primary">Join Now</button></a>
    </div>
	 
  </div>
</nav>




<!-- Carousel -->
<div id="demo" class="carousel slide" data-bs-ride="carousel">

    <!-- Indicators/dots -->
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
    </div>
    
    <!-- The slideshow/carousel -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/carousel-1.jpg" alt="carousel-1" class="d-block">
        <div class="carousel-caption">
            
                <h5>Best Online Courses</h5>
                <h1>Best Education From Your Home</h1>
               
            </div>
        </div>
      
      <div class="carousel-item">
        <img src="img/carousel-2.jpg" alt="carousel-2" class="d-block">
        <div class="carousel-caption">
            
                <h5>Best Online Courses</h5>
                <h1>Best Online Learning Platform</h1>
               
            </div>
      </div>
      <div class="carousel-item">
        <img src="img/carousel-3.jpg" alt="carousel-3" class="d-block">
		<div class="carousel-caption">
            
                <h5>Best Online Courses</h5>
                <h1>New Way To Learn From Home</h1>
               
            </div>
      </div>
    </div>
   
    <!-- Left and right controls/icons -->
    <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
    </button>
  </div>
 <!----about us------> 
  <div class="container-fluid">
  <div class="container py-5">
  <div class="row">
  <div class="col-lg-6">
    <img class="img-fluid rounded mb-4" src="img/about.jpg" alt="about">
  </div>
 <div class="col-lg-6">
 <h5 class="text-primary text-uppercase mt-2">About Us</h5>
  <h1>Innovative Way To Learn</h1>
  <p class="text-justify">Aliquyam accusam clita nonumy ipsum sit sea clita ipsum clita, ipsum dolores amet voluptua duo dolores et sit ipsum rebum, sadipscing et erat eirmod diam kasd labore clita est. Diam sanctus gubergren sit rebum clita amet, sea est sea vero sed et. Sadipscing labore tempor at sit dolor clita consetetur diam. Diam ut diam tempor no et, lorem dolore invidunt no nonumy stet ea labore, dolor justo et sit gubergren diam sed sed no ipsum. Sit tempor ut nonumy elitr dolores justo aliquyam ipsum stet</p>
   <a href=""><button type="button" class="btn btn-primary buttonlearn">Learn More</button></a>
  </div>
  </div>
  </div>
  </div>
  <!---about end----->
  
  
  <!---category--->
  <div class="container-fluid">
  <div class="container">
  <div class="text-center mb-5">
                <h5 class="text-uppercase mb-3">Subjects</h5>
                <h1>Explore Top Subjects</h1>
            </div>
  <div class="row  text-center">
  <div class="col-lg-3  col-md-3">
  <div class="card mb-3">
  <img src="img/cat-1.jpg" class="card-img-top" alt="cat-1">
  <div class="card-body">
    <h5 class="card-title">Web Design</h5>
  </div>
</div>
</div>


<div class="col-lg-3   col-md-3">
  <div class="card mb-3">
  <img src="img/cat-2.jpg" class="card-img-top" alt="cat-2">
  <div class="card-body">
    <h5 class="card-title">Development</h5>
  </div>
</div>
</div>



<div class="col-lg-3 col-md-3">
  <div class="card mb-3">
  <img src="img/cat-3.jpg" class="card-img-top" alt="cat-3">
  <div class="card-body">
    <h5 class="card-title">Game Design</h5>
  </div>
</div>
</div>



<div class="col-lg-3 col-md-3">
  <div class="card mb-3">
  <img src="img/cat-4.jpg" class="card-img-top" alt="cat-4">
  <div class="card-body">
    <h5 class="card-title">Apps Design</h5>
  </div>
</div>
</div>


<div class="col-lg-3 col-md-3">
  <div class="card mb-3">
  <img src="img/cat-5.jpg" class="card-img-top" alt="cat-5">
  <div class="card-body">
    <h5 class="card-title">Marketing</h5>
  </div>
</div>
</div>



<div class="col-lg-3 col-md-3">
  <div class="card mb-3">
  <img src="img/cat-6.jpg" class="card-img-top" alt="cat-6">
  <div class="card-body">
    <h5 class="card-title">Research</h5>
  </div>
</div>
</div>



<div class="col-lg-3 col-md-3">
  <div class="card mb-3">
  <img src="img/cat-7.jpg" class="card-img-top" alt="cat-7">
  <div class="card-body">
    <h5 class="card-title">Content Writing</h5>
  </div>
</div>
</div>



<div class="col-lg-3 col-md-3">
  <div class="card mb-3">
  <img src="img/cat-8.jpg" class="card-img-top" alt="cat-8">
  <div class="card-body">
    <h5 class="card-title">SEO</h5>
  </div>
</div>
</div>

	
  </div>
</div>
</div>
<!------end----->





<!-- Footer Start -->
    <div class="container-fluid bg-dark text-white py-5 mt-5">
        <div class="container">
			<div class="row">
             
                    <div class="col-lg-4 col-md-6 mb-5">
                        <h5 class="text-primary text-uppercase mb-4">Get In Touch</h5>
                        <p><i class="fa fa-map-marker-alt mr-2"></i>123 Street, New York, USA</p>
                        <p><i class="fa fa-phone-alt mr-2"></i>+012 345 67890</p>
                        <p><i class="fa fa-envelope mr-2"></i>info@example.com</p>
                        <div class="d-flex justify-content-start mt-4">
                            <a class="btn btn-outline-light btn-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-outline-light btn-square" href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-5">
                        <h5 class="text-primary text-uppercase mb-4" style="letter-spacing: 5px;">Our Courses</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Web Design</a>
                            <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Apps Design</a>
                            <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Marketing</a>
                            <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Research</a>
                            <a class="text-white" href="#"><i class="fa fa-angle-right mr-2"></i>SEO</a>
                        </div>
                    </div>
               
            
            <div class="col-lg-4 mb-5">
                <h5 class="text-primary text-uppercase mb-4">Newsletter</h5>
                <p>Rebum labore lorem dolores kasd est, et ipsum amet et at kasd, ipsum sea tempor magna tempor. Accu kasd sed ea duo ipsum. Dolor duo eirmod sea justo no lorem est diam</p>
                
            
			
			
			</div>
        </div>
    </div>






   




	
  
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>

