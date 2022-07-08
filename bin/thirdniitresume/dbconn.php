<?php  

$server = "localhost";
$user = "root";
$password="";
$db = "niit";

$con = mysqli_connect($server,$user,$password,$db);

if($con){ 
    
    echo "<script>alert ('connection succesfully');</script>";
    

    
}else{
    echo "<script>alert ('connection unsuccesfully');</script>";
}
?>
