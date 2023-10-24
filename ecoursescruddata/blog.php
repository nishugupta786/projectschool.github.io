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
          <a class="nav-link dropdown-toggle" href="blog.php" role="button" data-bs-toggle="dropdown">Blog</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="blog.php">Blog List</a></li>
        
           
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="courses.php">Courses</a>
        </li>
		
		<li class="nav-item">
          <a class="nav-link" href="contact.php">Contact</a>
        </li>
      </ul>
      <a href=""><button type="button" class="btn btn-primary">Join Now</button></a>
    </div>
	 
  </div>
</nav>

<!----end nav----->


<div class="container-fluid py-5">
			<div class="container py-5">
					<div class="row">
						<div class="col-lg-8">
							<div class="row pb-3">
								<div class="col-lg-6 mb-4">
						
								<img class="img-fluid" src="img/blog-1.jpg" alt="">
									<h5 class="text-white mb-3">Lorem elitr magna stet eirmod labore amet labore clita at ut clita</h5>
                                
								<p class="text-primary m-0">Jan 01, 2050</p>
								
								
								</div>
								
								<div class="col-lg-6 mb-4">
						
								<img class="img-fluid" src="img/blog-2.jpg" alt="">
									<h5 class="text-white mb-3">Lorem elitr magna stet eirmod labore amet labore clita at ut clita</h5>
                                
								<p class="text-primary m-0">Jan 01, 2050</p>
								
								
								</div>
								
								<div class="col-lg-6 mb-4">
						
								<img class="img-fluid" src="img/blog-3.jpg" alt="">
									<h5 class="text-white mb-3">Lorem elitr magna stet eirmod labore amet labore clita at ut clita</h5>
                                
								<p class="text-primary m-0">Jan 01, 2050</p>
								
								
								</div>
								
								<div class="col-lg-6 mb-4">
						
								<img class="img-fluid" src="img/blog-2.jpg" alt="">
									<h5 class="text-white mb-3">Lorem elitr magna stet eirmod labore amet labore clita at ut clita</h5>
                                
								<p class="text-primary m-0">Jan 01, 2050</p>
								
								
								</div>
								
								
								
								
								
								
								
								
								
								
								
							</div>
						</div>
						
						
					<div class="col-lg-4 mt-5 mt-lg-0">
					
					<div class="text-center bg-dark rounded mb-5 py-5 px-4">
                        <img src="img/user.jpg" class="img-fluid rounded-circle mx-auto mb-3">
                        <h3 class="text-primary mb-3">John Doe</h3>
                        <h3 class="text-uppercase mb-4">Tag Cloud</h3>
                        <p class="text-white ">Conset elitr erat vero dolor ipsum et diam, eos dolor lorem, ipsum sit no ut est  ipsum erat kasd amet elitr</p>
                    </div>
					
					
					<!-- Search Form -->
                    <div class="mb-5">
                        <form action="">
                            <div class="input-group">
                                <input type="text" class="form-control form-control-lg" placeholder="Keyword">
                                <div class="input-group-append">
                                    <span class="input-group-text bg-transparent text-primary"><i
                                            class="fa fa-search"></i></span>
                                </div>
                            </div>
                        </form>
                    </div>
					
					
					<!-- Recent Post -->
                    <div class="mb-5">
                        <h3 class="text-uppercase mb-4" style="letter-spacing: 5px;">Recent Post</h3>
                        <a class="d-flex align-items-center text-decoration-none mb-3" href="">
                            <img class="img-fluid rounded" src="img/blog-80x80.jpg" alt="">
                            <div class="pl-3">
                                <h6 class="m-1">Diam lorem dolore justo eirmod lorem dolore</h6>
                                <small>Jan 01, 2050</small>
                            </div>
                        </a>
                        <a class="d-flex align-items-center text-decoration-none mb-3" href="">
                            <img class="img-fluid rounded" src="img/blog-80x80.jpg" alt="">
                            <div class="pl-3">
                                <h6 class="m-1">Diam lorem dolore justo eirmod lorem dolore</h6>
                                <small>Jan 01, 2050</small>
                            </div>
                        </a>
                        <a class="d-flex align-items-center text-decoration-none mb-3" href="">
                            <img class="img-fluid rounded" src="img/blog-80x80.jpg" alt="">
                            <div class="pl-3">
                                <h6 class="m-1">Diam lorem dolore justo eirmod lorem dolore</h6>
                                <small>Jan 01, 2050</small>
                            </div>
                        </a>
                    </div>
    
                    <!-- Tag Cloud -->
                    <div class="mb-5">
                        <h3 class="text-uppercase mb-4" style="letter-spacing: 5px;">Tag Cloud</h3>
                        <div class="d-flex flex-wrap m-n1">
                            <a href="" class="btn btn-outline-primary m-1">Design</a>
                            <a href="" class="btn btn-outline-primary m-1">Development</a>
                            <a href="" class="btn btn-outline-primary m-1">Marketing</a>
                            <a href="" class="btn btn-outline-primary m-1">SEO</a>
                            <a href="" class="btn btn-outline-primary m-1">Writing</a>
                            <a href="" class="btn btn-outline-primary m-1">Consulting</a>
                        </div>
                    </div>
					
					
					
					
					
					</div>
	
	
	
	
	
	
	</div>
			</div>
					</div>
						</div>
							</div>




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