<!DOCTYPE html>
<html lang="en">
<head>
  <title>Crud PHP</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="jumbotron text-center">
  <h1>Crud Application</h1>
  <p>Developed with HTML5,CSS4,Bootstap,PHP,MySql</p> 
</div>

<div class="container">
  <h2>Add form data</h2>

<?php

include ('config.php');


$id="";
$username="";
$email="";
$mobile="";
$dob="";
$gender="";
$address="";

if(isset($_GET['id'])){

$id=$_GET['id'];

$sql="select * from information where id='$id'";

$result=mysqli_query($con,$sql);

$rowcount=mysqli_num_rows($result);

if($rowcount>0)
{
while($row=mysqli_fetch_assoc($result))
{
$id=$row['id'];
$username=$row['username'];
$email=$row['email'];
$mobile=$row['mobile'];
$dob=$row['dob'];
$gender=$row['gender'];
$address=$row['address'];
}
}
}

?>
    

<p style="float:right;"><a href="view.php"><button class="btn btn-default">View</button></a>

<form action="insert.php" method="POST">
	  <div class="form-group">
    <label for="username">Username:</label>
    <input type="text" class="form-control" name="username" value="<?php echo $username; ?>" required>
  </div>
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" name="email" value="<?php echo $email; ?>" required>
  </div>
  <div class="form-group">
    <label for="mobile">Mobile:</label>
    <input type="text" class="form-control" name="mobile" value="<?php echo $mobile; ?>" required>
  </div>
  <div class="form-group">
    <label for="dob">DOB:</label>
    <input type="date" class="form-control" name="dob" value="<?php echo $dob; ?>"required>
  </div>
  <div class="form-group">
    <label for="gender">Gender:</label>
   <div class="radio">
      <label><input type="radio" name="gender" value="Male" <?php if($gender=="Male"){ echo "checked"; }?>>Male</label>
    </div>
    <div class="radio">
      <label><input type="radio" name="gender" value="Female" <?php if($gender=="Female"){ echo "checked"; }?>>Female</label>
    </div>
    </div>
  <div class="form-group">
        <label for="address">Address:</label>
    <textarea class="form-control" name="address" required><?php echo $address; ?></textarea>
  </div>
  <input type="hidden"  name="id" value="<?php echo $id; ?>">
  <input type="submit" class="btn btn-default"  value="Submit">
</form>