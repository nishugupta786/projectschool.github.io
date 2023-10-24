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
      
    </div>
	 
  </div>
</nav>

<!------end nav---->


<!-- Contact Start -->
   
 
	
	 <div class="container-fluid contact py-5">
        <div class="container py-5">
            <div class="text-center mb-2">
                <h5 class="hp1">Contact</h5>
                <h1>Contact For Any Query</h1>
            </div>
            <div class="row justify-content-center">
            <?php
//insert query//
//''single quate use//foldername=crudsqlconand file name connectiondata.php attach file//
include "connectiondata.php";
$ids =$_GET['id'];//any variabee namr
$showquery="select * from contactform  where id={$ids}"; //konsi change ksrni id ya name wo fiiled ayagi where mi// 
$showdata = mysqli_query($conn,$showquery);
$arrdata = mysqli_fetch_array($showdata );

if(isset($_POST['submit'])){
$idupdate =$_GET['id'];
$name=$_POST['name'];//-----input type name jo input type mai name diya hai wo dana hai  in$_POST['name']---variable nmaeany $must //
$email=$_POST['email'];
$password=$_POST['pswd'];
$mobileno=$_POST['mobile'];
$message=$_POST['text'];



//update query
$query = "UPDATE contactform SET name='$name',email='$email',password='$password',sub='$mobileno',message='$message' WHERE id='$idupdate'";
//$query ="update  contactform  set id=$id,name='$name',email='$email',password='$password',sub='$mobileno',message='$message' where id=$idupdate";



$res=mysqli_query($conn,$query);   
//create varialble name $res//conect two file (connection.php attacht $conn,insert quesry//

if($res){

?>
<script>
  alert("data update");
  </script>
  <?php
}
else{
?>
  <script>
  alert("data not  update");
  </script>
  <?php

}

}

?>


<div class="col-lg-8">
	
	
	 <form action="" method="POST">
	 <div class="mb-3 mt-3">
      
 <input type="text" class="form-control" id="Name" placeholder="Name" name="name" value="<?php echo $arrdata['name'];?>" required/>
    </div>
    <div class="mb-3 mt-3">
      
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="<?php echo $arrdata['email'];?>" required/>
    </div>
    <div class="mb-3">
      
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd" value="<?php echo $arrdata['password'];?>"required/>
    </div>
	<div class="mb-3">
      
      <input type="text" class="form-control" id="subject" placeholder="Enter mobile no" name="mobile" value="<?php echo $arrdata['sub'];?>" required/>
    </div>
	
	<div class="mb-3 mt-3">
     
      <textarea class="form-control" rows="5" id="Message" placeholder="Enter message" name="text" value="<?php echo $arrdata['message'];?>"></textarea>
    </div>
	
      <input type="submit" class="btn btn-primary" name="submit" value="update">
     
       
  </form>
</div>
</div>
</div>
</div>



   <!-- Contact End -->

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










