<?php
include 'config.php';

$username= $_POST['username'];
$email= $_POST['email'];
$id=$_POST['id'];;
$dob= $_POST['dob'];
$address= $_POST['address'];
$mobile=$_POST['mobile'];;
$gender= $_POST['gender'];




if(!empty($id)){

$sql="update information set `username`='$username' ,`email`='$email',`dob`='$dob'
,`address`='$address',`mobile`='$mobile',`gender`='$gender' where id=$id";

mysqli_query($con,$sql);


header("Location: view.php?msg=User Updated added successfully");
die();

}
else
{
$sql="insert into information(`username`,`email`,`mobile`,`gender`,`dob`,`address`) values ('$username','$email','$mobile','$gender','$dob','$address')";

mysqli_query($con,$sql);


header("Location: view.php?msg=New user added successfully");
die();
}



?>