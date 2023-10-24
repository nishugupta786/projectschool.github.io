<?php 
include "connectiondata.php";

$id = $_GET['idth'];//any variable name $id//


$deletequery ="DELETE FROM `contactform` WHERE id=$id";

$query1 =mysqli_query($conn,$deletequery);

if($query1){

    ?>
    <script>
      alert("delete");
      </script>
      <?php
    }
    else{
    ?>
      <script>
      alert("data not  delete");
      </script>
      <?php
    
    }

header('location:selectquery_display.php');//atach file header//
?>