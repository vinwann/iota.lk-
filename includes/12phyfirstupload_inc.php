<?php
include_once 'dbh.php';
	
$schoolA =  $_POST['school'];
$authorA = $_POST['author'] ;
 $paper_yrA  =   $_POST['paper_yr'];
 $school = mysqli_real_escape_string($conn,$_POST['school']);
 $paper_yr = mysqli_real_escape_string($conn,$_POST['paper_yr']);
 $author = mysqli_real_escape_string($conn,$_POST['author']);



 
 if (empty($_POST['mcq_21']) AND  empty($_POST['mcq_22']) AND empty($_POST['mcq_23']) AND  empty($_POST['mcq_20'])){
 	 header("Location: ../12phyfirstupload?up=empty");
  	 exit();
 } 
 



  $mcq_1 = $_POST['mcq_1'];
  $mcq_2 = $_POST['mcq_2'];
  $mcq_3 = $_POST['mcq_3'];
  $mcq_4 = $_POST['mcq_4'];
  $mcq_5 = $_POST['mcq_5'];
  $mcq_6 = $_POST['mcq_6'];
  $mcq_7 = $_POST['mcq_7'];
  $mcq_8 = $_POST['mcq_8'];
  $mcq_9 = $_POST['mcq_9'];
  $mcq_10 = $_POST['mcq_10'];
  $mcq_11 = $_POST['mcq_11'];
  $mcq_12 = $_POST['mcq_12'];
  $mcq_13 = $_POST['mcq_13'];
  $mcq_14 = $_POST['mcq_14'];
  $mcq_15 = $_POST['mcq_15'];
  $mcq_16 = $_POST['mcq_16'];
  $mcq_17 = $_POST['mcq_17'];
  $mcq_18 = $_POST['mcq_18'];
  $mcq_19 = $_POST['mcq_19'];
  $mcq_20 = $_POST['mcq_20'];
  $mcq_21 = $_POST['mcq_21'];
  $mcq_22 = $_POST['mcq_22'];
  $mcq_23 = $_POST['mcq_23'];
  $mcq_24 = $_POST['mcq_24'];
  $mcq_25 = $_POST['mcq_25'];
  $mcq_26 = $_POST['mcq_26'];
  $mcq_27 = $_POST['mcq_27'];
  $mcq_28 = $_POST['mcq_28'];
  $mcq_29 = $_POST['mcq_29'];
  $mcq_30 = $_POST['mcq_30'];
  
 


  if ( empty($school) || $paper_yr == "Enteryear" || empty($author)  ) {
  	 header("Location: ../12phyfirstupload?up=emptyfelid&school=$schoolA&paper_yr=$paper_yrA&author=$authorA&mcq_1=$mcq_1&mcq_2=$mcq_2&mcq_3=$mcq_3&mcq_4=$mcq_4&mcq_5=$mcq_5&mcq_6=$mcq_6&mcq_7=$mcq_7&mcq_8=$mcq_8&mcq_9=$mcq_9&mcq_10=$mcq_10&mcq_11=$mcq_11&mcq_12=$mcq_12&mcq_13=$mcq_13&mcq_14=$mcq_14&mcq_15=$mcq_15&mcq_16=$mcq_16&mcq_17=$mcq_17&mcq_18=$mcq_18&mcq_19=$mcq_19&mcq_20=$mcq_20&mcq_21=$mcq_21&mcq_22=$mcq_22&mcq_23=$mcq_23&mcq_24=$mcq_24&mcq_25=$mcq_25&mcq_26=$mcq_26&mcq_27=$mcq_27&mcq_28=$mcq_28&mcq_29=$mcq_29&mcq_30=$mcq_30");
  	 exit();
  }
 elseif ($author == "iota.lk"|| $author == "iota") {
 	 header("Location: ../12phyfirstupload?up=invafelid&school=$schoolA&paper_yr=$paper_yrA&author=$authorA&mcq_1=$mcq_1&mcq_2=$mcq_2&mcq_3=$mcq_3&mcq_4=$mcq_4&mcq_5=$mcq_5&mcq_6=$mcq_6&mcq_7=$mcq_7&mcq_8=$mcq_8&mcq_9=$mcq_9&mcq_10=$mcq_10&mcq_11=$mcq_11&mcq_12=$mcq_12&mcq_13=$mcq_13&mcq_14=$mcq_14&mcq_15=$mcq_15&mcq_16=$mcq_16&mcq_17=$mcq_17&mcq_18=$mcq_18&mcq_19=$mcq_19&mcq_20=$mcq_20&mcq_21=$mcq_21&mcq_22=$mcq_22&mcq_23=$mcq_23&mcq_24=$mcq_24&mcq_25=$mcq_25&mcq_26=$mcq_26&mcq_27=$mcq_27&mcq_28=$mcq_28&mcq_29=$mcq_29&mcq_30=$mcq_30");
  	 exit();
 }
  
    
    






 



$sql = "INSERT INTO phy121uploading_mcqs (school,paper_yr,author,mcq_1,mcq_2,mcq_3,mcq_4,mcq_5,mcq_6,mcq_7,mcq_8,mcq_9,mcq_10,mcq_11,mcq_12,mcq_13,mcq_14,mcq_15,mcq_16,mcq_17,mcq_18,mcq_19,mcq_20,mcq_21,mcq_22,mcq_23,mcq_24,mcq_25,mcq_26,mcq_27,mcq_28,mcq_29,mcq_30) VALUES('$school','$paper_yr','$author','$mcq_1',
     '$mcq_2',
    '$mcq_3',
    '$mcq_4',
    '$mcq_5',
    '$mcq_6',
    '$mcq_7',
    '$mcq_8',
    '$mcq_9',
    '$mcq_10',
    '$mcq_11',
    '$mcq_12',
    '$mcq_13',
    '$mcq_14',
    '$mcq_15',
    '$mcq_16',
    '$mcq_17',
    '$mcq_18',
    '$mcq_19',
    '$mcq_20',
    '$mcq_21',
    '$mcq_22',
    '$mcq_23',
    '$mcq_24',
    '$mcq_25',
    '$mcq_26' ,
    '$mcq_27' ,
   '$mcq_28' ,
    '$mcq_29' ,
    '$mcq_30' );";



 mysqli_query($conn,$sql) ;

 header("Location: ../12phyfirstupload?up=success");




    
    
 ?>