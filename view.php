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
  
<?php

if(isset($_GET['msg']))
{
$msg=$_GET['msg'];
$msg = urlencode($msg);
$msg =str_replace("+"," ",$msg);

?>

<div class="alert alert-info">
  <strong>Info!</strong> <?php echo $msg ?>.
</div>
<?php
}
?>


<div class="container">
  <h2>User Data</h2>
  <p>List of user data can edit and delete:</p> 
  <p style="float: right;"><a href="form.php"> <button type="button" class="btn btn-default">Add Data</button></a> </p>      
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Username</th>
        <th>Email</th>
        <th>Mobile</th>
        <th>DOB</th>
        <th>Gender</th>
        <th>Address</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>

<?php

include("config.php");

$sql="select * from information";

$result=mysqli_query($con,$sql);


while($row=mysqli_fetch_assoc($result))
{

?>
      <tr>
        <td><?php echo $row['username']?></td>
        <td><?php echo $row['email']?></td>
        <td><?php echo $row['mobile']?></td>
        <td><?php echo $row['dob']?></td>
        <td><?php echo $row['gender']?></td>
        <td><?php echo $row['address']?></td>
        <td><a href="form.php?id=<?php echo $row['id']?>"> <button type="button" class="btn btn-primary">Edit</button></a></td>
        <td><a href="delete.php?id=<?php echo $row['id']?>"> <button type="button" class="btn btn-danger">Delete</button></a></td>
      </tr>
<?php } ?>      
    </tbody>
  </table>
</div>

</body>
</html>