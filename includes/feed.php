<?php
include_once 'dbh.php';
	

 $msg = mysqli_real_escape_string($conn,$_POST['msg']);
 


 
$sql = "INSERT INTO feed(msg) VALUES('$msg');";



 mysqli_query($conn,$sql) ;

 header("Location: ../library");


 ?>