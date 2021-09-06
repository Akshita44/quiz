<?php
session_start();

$con = mysqli_connect("localhost","root");
if($con)
{
    echo "successfully established";
}
else{
    echo "no connection";
}
mysqli_select_db($con,"projectjs128");


$email =$_POST["email"];
$password=$_POST["password"];

$query ="select * from user where email='$email' and password= '$password';";

$result= mysqli_query($con,$query);
$r=mysqli_num_rows($result);
if($r == 1)
{
   $query ="select username from user where email='$email' and password= '$password';";
   $p=mysqli_query($con,$query);
   $n=mysqli_fetch_array($p);
   $_SESSION["username"]=$n["username"];
   header("location:home.php");
}
else{
    header("location:index.php");
}
?>  