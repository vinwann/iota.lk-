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
  $mcq_31 = mysqli_real_escape_string($conn,$_POST['mcq_31']);
  $mcq_32 = mysqli_real_escape_string($conn,$_POST['mcq_32']);
  $mcq_33 = mysqli_real_escape_string($conn,$_POST['mcq_33']);
  $mcq_34 = mysqli_real_escape_string($conn,$_POST['mcq_34']);
  $mcq_35 = mysqli_real_escape_string($conn,$_POST['mcq_35']);
  $mcq_36 = mysqli_real_escape_string($conn,$_POST['mcq_36']);
  $mcq_37 = mysqli_real_escape_string($conn,$_POST['mcq_37']);
  $mcq_38 = mysqli_real_escape_string($conn,$_POST['mcq_38']);
  $mcq_39 = mysqli_real_escape_string($conn,$_POST['mcq_39']);
  $mcq_40 = mysqli_real_escape_string($conn,$_POST['mcq_40']);
  $mcq_41 = mysqli_real_escape_string($conn,$_POST['mcq_41']);
  $mcq_42 = mysqli_real_escape_string($conn,$_POST['mcq_42']);
  $mcq_43 = mysqli_real_escape_string($conn,$_POST['mcq_43']);
  $mcq_44 = mysqli_real_escape_string($conn,$_POST['mcq_44']);
  $mcq_45 = mysqli_real_escape_string($conn,$_POST['mcq_45']);
  $mcq_46 = mysqli_real_escape_string($conn,$_POST['mcq_46']);
  $mcq_47 = mysqli_real_escape_string($conn,$_POST['mcq_47']);
  $mcq_48 = mysqli_real_escape_string($conn,$_POST['mcq_48']);
  $mcq_49 = mysqli_real_escape_string($conn,$_POST['mcq_49']);
  $mcq_50 = mysqli_real_escape_string($conn,$_POST['mcq_50']);
  $nametxt = mysqli_real_escape_string($conn,$_POST['nametxt']);
 



 

  $sql = "INSERT INTO phy131rec_mcq  (school,paper_yr,mcq_1,mcq_2,mcq_3,mcq_4,mcq_5,mcq_6,mcq_7,mcq_8,mcq_9,mcq_10,mcq_11,mcq_12,mcq_13,mcq_14,mcq_15,mcq_16,mcq_17,mcq_18,mcq_19,mcq_20,mcq_21,mcq_22,mcq_23,mcq_24,mcq_25,mcq_26,mcq_27,mcq_28,mcq_29,mcq_30,mcq_31,mcq_32,mcq_33,mcq_34,mcq_35,mcq_36,mcq_37,mcq_38,mcq_39,mcq_40,mcq_41,mcq_42,mcq_43,mcq_44,mcq_45,mcq_46,mcq_47,mcq_48,mcq_49,mcq_50,nametxt) VALUES( '$school','$paper_yr','$mcq_1',
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
  '$mcq_31',
  '$mcq_32',
  '$mcq_33',
  '$mcq_34',
  '$mcq_35',
  '$mcq_36',
  '$mcq_37',
  '$mcq_38',
  '$mcq_39',
  '$mcq_40',
  '$mcq_41',
  '$mcq_42',
  '$mcq_43',
  '$mcq_44',
  '$mcq_45',
  '$mcq_46',
  '$mcq_47',
  '$mcq_48',
  '$mcq_49',
'$mcq_50',
'$nametxt');";


 mysqli_query($conn,$sql) ;

 header("Location: ../13phyfirst?up=success");
 ?>
