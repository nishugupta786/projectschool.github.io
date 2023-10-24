<!--?php

//''single quate use//foldername=crudsqlconand file name connectiondata.php attach file//
include "connectiondata.php";
//select query//
$selectquery="select * from contactform";
$query = mysqli_query($conn,$selectquery);
$nums= mysqli_num_rows($query);//number rows data insert//
//$res = mysqli_fetch_array($query);

//echo $nums; //echo print//

//$res = mysqli_fetch_array($query);

//echo $res[1];//konsr row ka data lana hai //
//$res =mysqli_fetch_array($query);
/*while($i<10){
    echo $i."<br>";
    $i++;
}*/


while($res =mysqli_fetch_array($query)){
    echo $res['name']."<br>";
   
}


?--->




<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--link rel="stylesheet" href="css/bootstrap.min.css"--->
  <ink href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
  <!--script src="js/bootstrap.bundle.min.js"></script--->
</head>
<body>

<div class="container">
  <h2>list detail</h2>          
  <table class="table">
    <thead>
      <tr>
        <th>id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
        <th>Mobileno</th>
        <th>Message</th>
      </tr>
    </thead>
    <tbody>

                    <?php

                    //''single quate use//foldername=crudsqlconand file name connectiondata.php attach file//
                    include "connectiondata.php";
                 
                    //select query//
                    $selectquery="select * from contactform";
                    $query = mysqli_query($conn,$selectquery);
                    $nums= mysqli_num_rows($query);//number rows data insert//

                    while($res =mysqli_fetch_array($query)){
                       // echo $res['name']."<br>";

?>


                        <tr>
                        <td><?php echo $res['id'];?></td><!--jo sql quey mai name diya hai wahi echonkaa hai -->
                        <td><?php echo $res['name'];?></td>
                        <td><?php echo $res['email'];?></td>
                        <td><?php echo $res['password'];?></td>
                        <td><?php echo $res['sub'];?></td>
                        <td><?php echo $res['message'];?></td>
                        <td><a href="update.php?id=<?php echo $res['id'];?>">edit</a></td><!--update.php?id--id ak varable name hai--->
                        <td><a href="delete.php?idth=<?php echo $res['id'];?>">delete</a></td><!--idth variable name--->
                
                      </tr>
                    <?php
                    }

                    
                    ?>

 <!--td><a href="update.php?id=<!--?php echo $res['id'];?>">edit</a></td> konsi id sa user ka data change karna data-->
         

      
    </tbody>
  </table>
</div>

</body>
</html>















