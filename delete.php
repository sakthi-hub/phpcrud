<?php

include ('config.php');

$id=$_GET['id'];


$sql="Delete from information where id='$id'";

mysqli_query($con,$sql);

header("Location: view.php?msg=Deleted successfully");
die();

?>