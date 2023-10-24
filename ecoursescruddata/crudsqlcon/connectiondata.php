<?php
//connecting to the database
$servername="localhost";
$username="root";
$password="";
$database="crudecourse";     //crudecourse database name//variable any name $must//

//create a connection  //$connvarialble name//
$conn=mysqli_connect($servername,$username,$password,$database);

//die if connection was not sucessful

// die use code if(!$conn){
    // simple echo use code if($conn){
    
//die("could not connect :".mysqli_cnnect_error());

if($conn){

    //echo "connection sucess";
    ?>
<script>
alert("connection sucess");
</script>
<?php


}else{
    echo "connection was no sucess";
}
    /*?>
<script>
alert("connection no sucess");
</script>
<?php*/

?>