<?php
$server="localhost";
$db="form";
$user="root";
$password="";

$con=mysqli_connect($server,$user,$password,$db);
if($con){
//   echo "byaciyemo";
}else{
    echo "byanze".mysqli_error($con);
   
}
 
 ?> 