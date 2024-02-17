<?php


include_once 'dbh.php';

 $school = mysqli_real_escape_string($conn,$_POST['school']);
 $paper_yr = mysqli_real_escape_string($conn,$_POST['paper_yr']);
 $mcq_1 = mysqli_real_escape_string($conn,$_POST['mcq_1']);
  $mcq_2 = mysqli_real_escape_string($conn,$_POST['mcq_2']);
  $mcq_3 = mysqli_real_escape_string($conn,$_POST['mcq_3']);
  $mcq_4 = mysqli_real_escape_string($conn,$_POST['mcq_4']);
  $mcq_5 = mysqli_real_escape_string($conn,$_POST['mcq_5']);
  $mcq_6 = mysqli_real_escape_string($conn,$_POST['mcq_6']);
  $mcq_7 = mysqli_real_escape_string($conn,$_POST['mcq_7']);
  $mcq_8 = mysqli_real_escape_string($conn,$_POST['mcq_8']);
  $mcq_9 = mysqli_real_escape_string($conn,$_POST['mcq_9']);
  $mcq_10 = mysqli_real_escape_string($conn,$_POST['mcq_10']);
  $mcq_11 = mysqli_real_escape_string($conn,$_POST['mcq_11']);
  $mcq_12 = mysqli_real_escape_string($conn,$_POST['mcq_12']);
  $mcq_13 = mysqli_real_escape_string($conn,$_POST['mcq_13']);
  $mcq_14 = mysqli_real_escape_string($conn,$_POST['mcq_14']);
  $mcq_15 = mysqli_real_escape_string($conn,$_POST['mcq_15']);
  $mcq_16 = mysqli_real_escape_string($conn,$_POST['mcq_16']);
  $mcq_17 = mysqli_real_escape_string($conn,$_POST['mcq_17']);
  $mcq_18 = mysqli_real_escape_string($conn,$_POST['mcq_18']);
  $mcq_19 = mysqli_real_escape_string($conn,$_POST['mcq_19']);
  $mcq_20 = mysqli_real_escape_string($conn,$_POST['mcq_20']);
  $mcq_21 = mysqli_real_escape_string($conn,$_POST['mcq_21']);
  $mcq_22 = mysqli_real_escape_string($conn,$_POST['mcq_22']);
  $mcq_23 = mysqli_real_escape_string($conn,$_POST['mcq_23']);
  $mcq_24 = mysqli_real_escape_string($conn,$_POST['mcq_24']);
  $mcq_25 = mysqli_real_escape_string($conn,$_POST['mcq_25']);
  $mcq_26 = mysqli_real_escape_string($conn,$_POST['mcq_26']);
  $mcq_27 = mysqli_real_escape_string($conn,$_POST['mcq_27']);
  $mcq_28 = mysqli_real_escape_string($conn,$_POST['mcq_28']);
  $mcq_29 = mysqli_real_escape_string($conn,$_POST['mcq_29']);
  $mcq_30 = mysqli_real_escape_string($conn,$_POST['mcq_30']);
  $nametxt = mysqli_real_escape_string($conn,$_POST['nametxt']);
 
 



 

  $sql = "INSERT INTO chem121phy_mcq (school,paper_yr,mcq_1,mcq_2,mcq_3,mcq_4,mcq_5,mcq_6,mcq_7,mcq_8,mcq_9,mcq_10,mcq_11,mcq_12,mcq_13,mcq_14,mcq_15,mcq_16,mcq_17,mcq_18,mcq_19,mcq_20,mcq_21,mcq_22,mcq_23,mcq_24,mcq_25,mcq_26,mcq_27,mcq_28,mcq_29,mcq_30,nametxt) VALUES( '$school','$paper_yr','$mcq_1',
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
  '$mcq_26',
  '$mcq_27',
  '$mcq_28',
  '$mcq_29',
  '$mcq_30',
  '$nametxt');";


 mysqli_query($conn,$sql) ;

 header("Location: ../12phyfirst?up=success");
 ?>
