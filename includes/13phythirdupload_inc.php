<?php
include_once 'dbh.php';
	
$schoolA =  $_POST['school'];
$authorA = $_POST['author'] ;
 $paper_yrA  =   $_POST['paper_yr'];
 $school = mysqli_real_escape_string($conn,$_POST['school']);
 $paper_yr = mysqli_real_escape_string($conn,$_POST['paper_yr']);
 $author = mysqli_real_escape_string($conn,$_POST['author']);



 
 if (empty($_POST['mcq_31']) AND  empty($_POST['mcq_32']) AND empty($_POST['mcq_33']) AND  empty($_POST['mcq_30'])){
 	 header("Location: ../13phythirdupload?up=empty");
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
  $mcq_31 = $_POST['mcq_31'];
  $mcq_32 = $_POST['mcq_32'];
  $mcq_33 = $_POST['mcq_33'];
  $mcq_34 = $_POST['mcq_34'];
  $mcq_35 = $_POST['mcq_35'];
  $mcq_36 = $_POST['mcq_36'];
  $mcq_37 = $_POST['mcq_37'];
  $mcq_38 = $_POST['mcq_38'];
  $mcq_39 = $_POST['mcq_39'];
  $mcq_40 = $_POST['mcq_40'];
  $mcq_41 = $_POST['mcq_41'];
  $mcq_42 = $_POST['mcq_42'];
  $mcq_43 = $_POST['mcq_43'];
  $mcq_44 = $_POST['mcq_44'];
  $mcq_45 = $_POST['mcq_45'];
  $mcq_46 = $_POST['mcq_46'];
  $mcq_47 = $_POST['mcq_47'];
  $mcq_48 = $_POST['mcq_48'];
  $mcq_49 = $_POST['mcq_49'];
  $mcq_50 = $_POST['mcq_50'];
 


  if ( empty($school) || $paper_yr == "Enteryear" || empty($author)  ) {
  	 header("Location: ../13phythirdupload?up=emptyfelid&school=$schoolA&paper_yr=$paper_yrA&author=$authorA&mcq_1=$mcq_1&mcq_2=$mcq_2&mcq_3=$mcq_3&mcq_4=$mcq_4&mcq_5=$mcq_5&mcq_6=$mcq_6&mcq_7=$mcq_7&mcq_8=$mcq_8&mcq_9=$mcq_9&mcq_10=$mcq_10&mcq_11=$mcq_11&mcq_12=$mcq_12&mcq_13=$mcq_13&mcq_14=$mcq_14&mcq_15=$mcq_15&mcq_16=$mcq_16&mcq_17=$mcq_17&mcq_18=$mcq_18&mcq_19=$mcq_19&mcq_20=$mcq_20&mcq_21=$mcq_21&mcq_22=$mcq_22&mcq_23=$mcq_23&mcq_24=$mcq_24&mcq_25=$mcq_25&mcq_26=$mcq_26&mcq_27=$mcq_27&mcq_28=$mcq_28&mcq_29=$mcq_29&mcq_30=$mcq_30&mcq_31=$mcq_31&mcq_32=$mcq_32&mcq_33=$mcq_33&mcq_34=$mcq_34&mcq_35=$mcq_35&mcq_36=$mcq_36&mcq_37=$mcq_37&mcq_38=$mcq_38&mcq_39=$mcq_39&mcq_40=$mcq_40&mcq_41=$mcq_41&mcq_42=$mcq_42&mcq_43=$mcq_43&mcq_44=$mcq_44&mcq_45=$mcq_45&mcq_46=$mcq_46&mcq_47=$mcq_47&mcq_48=$mcq_48&mcq_49=$mcq_49&mcq_50=$mcq_50");
  	 exit();
  }
 elseif ($author == "iota.lk"|| $author == "iota") {
 	 header("Location: ../13phythirdupload?up=invafelid&school=$schoolA&paper_yr=$paper_yrA&author=$authorA&mcq_1=$mcq_1&mcq_2=$mcq_2&mcq_3=$mcq_3&mcq_4=$mcq_4&mcq_5=$mcq_5&mcq_6=$mcq_6&mcq_7=$mcq_7&mcq_8=$mcq_8&mcq_9=$mcq_9&mcq_10=$mcq_10&mcq_11=$mcq_11&mcq_12=$mcq_12&mcq_13=$mcq_13&mcq_14=$mcq_14&mcq_15=$mcq_15&mcq_16=$mcq_16&mcq_17=$mcq_17&mcq_18=$mcq_18&mcq_19=$mcq_19&mcq_20=$mcq_20&mcq_21=$mcq_21&mcq_22=$mcq_22&mcq_23=$mcq_23&mcq_24=$mcq_24&mcq_25=$mcq_25&mcq_26=$mcq_26&mcq_27=$mcq_27&mcq_28=$mcq_28&mcq_29=$mcq_29&mcq_30=$mcq_30&mcq_31=$mcq_31&mcq_32=$mcq_32&mcq_33=$mcq_33&mcq_34=$mcq_34&mcq_35=$mcq_35&mcq_36=$mcq_36&mcq_37=$mcq_37&mcq_38=$mcq_38&mcq_39=$mcq_39&mcq_40=$mcq_40&mcq_41=$mcq_41&mcq_42=$mcq_42&mcq_43=$mcq_43&mcq_44=$mcq_44&mcq_45=$mcq_45&mcq_46=$mcq_46&mcq_47=$mcq_47&mcq_48=$mcq_48&mcq_49=$mcq_49&mcq_50=$mcq_50");
  	 exit();
 }
  
    
    






 



$sql = "INSERT INTO phy133uploading_mcqs (school,paper_yr,author,mcq_1,mcq_2,mcq_3,mcq_4,mcq_5,mcq_6,mcq_7,mcq_8,mcq_9,mcq_10,mcq_11,mcq_12,mcq_13,mcq_14,mcq_15,mcq_16,mcq_17,mcq_18,mcq_19,mcq_20,mcq_21,mcq_22,mcq_23,mcq_24,mcq_25,mcq_26,mcq_27,mcq_28,mcq_29,mcq_30,mcq_31,mcq_32,mcq_33,mcq_34,mcq_35,mcq_36,mcq_37,mcq_38,mcq_39,mcq_40,mcq_41,mcq_42,mcq_43,mcq_44,mcq_45,mcq_46,mcq_47,mcq_48,mcq_49,mcq_50) VALUES('$school','$paper_yr','$author','$mcq_1',
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
    '$mcq_30' ,
   '$mcq_31' ,
    '$mcq_32' ,
    '$mcq_33',
    '$mcq_34' ,
    '$mcq_35' ,
    '$mcq_36'  ,
    '$mcq_37'  ,
    '$mcq_38'  ,
    '$mcq_39'  ,
    '$mcq_40'  ,
   '$mcq_41'  ,
    '$mcq_42' ,
    '$mcq_43'  ,
    '$mcq_44 ' ,
    '$mcq_45'  ,
    '$mcq_46' ,
    '$mcq_47'  ,
    '$mcq_48'  ,
    '$mcq_49'  ,
    '$mcq_50');";



 mysqli_query($conn,$sql) ;

 header("Location: ../13phythirdupload?up=success");




    
    
 ?>