<?php
include("connect.php");
if(isset($_POST['sub'])){ 


    $LastName=$_POST['last'];
    $FirstName=$_POST['first'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $ConfirmPass=$_POST['password'];
    $query="insert into student(LastName,FirstName,email,password,ConfirmPass) values('$LastName','$FirstName','$email','$password','$ConfirmPass')";
    $rs=mysqli_query($con,$query);
    if($rs){
    }
    else{
         echo "error".mysqli_erro($con);
    }

}


?>
