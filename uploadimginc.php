<?php
if (isset($_POST['submit'])) {
	if (empty($_POST['school']) OR  empty($_POST['paper_yr']) OR  empty($_POST['papert'])){
 	 header("Location: upload.php?up=empty");
  	 exit();
 } 

	$file1 = $_FILES['file1']['size'];
	$school = $_POST['school'];
	$paper_yr = $_POST['paper_yr'];
	$papert = $_POST['papert'];
 $namepaper = $school . ' ' . $paper_yr . ' ' . $papert;
 //print_r($file1);
 //exit();
$file1Name = $_FILES['file1']['name'];
$file1Type = $_FILES['file1']['type'];
$file1TmpName = $_FILES['file1']['tmp_name'];
$file1Error = $_FILES['file1']['error'];
$file1Size = $_FILES['file1']['size'];
$file1Ext = explode('.',$file1Name);
$file1ActualExt = strtolower(end($file1Ext));
$allowed = array('jpg','jpeg','png','pdf');
if (in_array($file1ActualExt,$allowed)) {
	if ($file1Error === 0) {
		mkdir($namepaper);
	 $file1NameNew = uniqid('',true).".".$file1ActualExt;
	 $file1destin = $namepaper.'/'.$file1NameNew;
	 move_uploaded_file($file1TmpName,$file1destin);

	 header("Location: upload.php?up=uploaded");
	}else{
		echo "there was an error";
	}
}
else{
	echo "you cant upload it";
}
$file2Name = $_FILES['file2']['name'];
$file2Type = $_FILES['file2']['type'];
$file2TmpName = $_FILES['file2']['tmp_name'];
$file2Error = $_FILES['file2']['error'];
$file2Size = $_FILES['file2']['size'];
$file2Ext = explode('.',$file2Name);
$file2ActualExt = strtolower(end($file2Ext));
$allowed = array('jpg','jpeg','png','pdf');
if (in_array($file2ActualExt,$allowed)) {
	if ($file2Error === 0) {
		mkdir($namepaper);
	 $file2NameNew = uniqid('',true).".".$file2ActualExt;
	 $file2destin = $namepaper.'/'.$file2NameNew;
	 move_uploaded_file($file2TmpName,$file2destin);

	 header("Location: upload.php?up=uploaded");
	}else{
		echo "there was an error";
	}
}
else{
	echo "you cant upload it";
}
$file3Name = $_FILES['file3']['name'];
$file3Type = $_FILES['file3']['type'];
$file3TmpName = $_FILES['file3']['tmp_name'];
$file3Error = $_FILES['file3']['error'];
$file3Size = $_FILES['file3']['size'];
$file3Ext = explode('.',$file3Name);
$file3ActualExt = strtolower(end($file3Ext));
$allowed = array('jpg','jpeg','png','pdf');
if (in_array($file3ActualExt,$allowed)) {
	if ($file3Error === 0) {
		mkdir($namepaper);
	 $file3NameNew = uniqid('',true).".".$file3ActualExt;
	 $file3destin = $namepaper.'/'.$file3NameNew;
	 move_uploaded_file($file3TmpName,$file3destin);

	 header("Location: upload.php?up=uploaded");
	}else{
		echo "there was an error";
	}
}
else{
	echo "you cant upload it";
}
$file4Name = $_FILES['file4']['name'];
$file4Type = $_FILES['file4']['type'];
$file4TmpName = $_FILES['file4']['tmp_name'];
$file4Error = $_FILES['file4']['error'];
$file4Size = $_FILES['file4']['size'];
$file4Ext = explode('.',$file4Name);
$file4ActualExt = strtolower(end($file4Ext));
$allowed = array('jpg','jpeg','png','pdf');
if (in_array($file4ActualExt,$allowed)) {
	if ($file4Error === 0) {
		mkdir($namepaper);
	 $file4NameNew = uniqid('',true).".".$file4ActualExt;
	 $file4destin = $namepaper.'/'.$file4NameNew;
	 move_uploaded_file($file4TmpName,$file4destin);

	 header("Location: upload.php?up=uploaded");
	}else{
		echo "there was an error";
	}
}
else{
	echo "you cant upload it";
}
$file5Name = $_FILES['file5']['name'];
$file5Type = $_FILES['file5']['type'];
$file5TmpName = $_FILES['file5']['tmp_name'];
$file5Error = $_FILES['file5']['error'];
$file5Size = $_FILES['file5']['size'];
$file5Ext = explode('.',$file5Name);
$file5ActualExt = strtolower(end($file5Ext));
$allowed = array('jpg','jpeg','png','pdf');
if (in_array($file5ActualExt,$allowed)) {
	if ($file5Error === 0) {
		mkdir($namepaper);
	 $file5NameNew = uniqid('',true).".".$file5ActualExt;
	 $file5destin = $namepaper.'/'.$file5NameNew;
	 move_uploaded_file($file5TmpName,$file5destin);

	 header("Location: upload.php?up=uploaded");
	}else{
		echo "there was an error";
	}
}
else{
	echo "you cant upload it";
}
$file6Name = $_FILES['file6']['name'];
$file6Type = $_FILES['file6']['type'];
$file6TmpName = $_FILES['file6']['tmp_name'];
$file6Error = $_FILES['file6']['error'];
$file6Size = $_FILES['file6']['size'];
$file6Ext = explode('.',$file6Name);
$file6ActualExt = strtolower(end($file6Ext));
$allowed = array('jpg','jpeg','png','pdf');
if (in_array($file6ActualExt,$allowed)) {
	if ($file6Error === 0) {
		mkdir($namepaper);
	 $file6NameNew = uniqid('',true).".".$file6ActualExt;
	 $file6destin = $namepaper.'/'.$file6NameNew;
	 move_uploaded_file($file6TmpName,$file6destin);

	 header("Location: upload.php?up=uploaded");
	}else{
		echo "there was an error";
	}
}
else{
	echo "you cant upload it";
}
$file7Name = $_FILES['file7']['name'];
$file7Type = $_FILES['file7']['type'];
$file7TmpName = $_FILES['file7']['tmp_name'];
$file7Error = $_FILES['file7']['error'];
$file7Size = $_FILES['file7']['size'];
$file7Ext = explode('.',$file7Name);
$file7ActualExt = strtolower(end($file7Ext));
$allowed = array('jpg','jpeg','png','pdf');
if (in_array($file7ActualExt,$allowed)) {
	if ($file7Error === 0) {
		mkdir($namepaper);
	 $file7NameNew = uniqid('',true).".".$file7ActualExt;
	 $file7destin = $namepaper.'/'.$file7NameNew;
	 move_uploaded_file($file7TmpName,$file7destin);

	 header("Location: upload.php?up=uploaded");
	}else{
		echo "there was an error";
	}
}
else{
	echo "you cant upload it";
}
$file8Name = $_FILES['file8']['name'];
$file8Type = $_FILES['file8']['type'];
$file8TmpName = $_FILES['file8']['tmp_name'];
$file8Error = $_FILES['file8']['error'];
$file8Size = $_FILES['file8']['size'];
$file8Ext = explode('.',$file8Name);
$file8ActualExt = strtolower(end($file8Ext));
$allowed = array('jpg','jpeg','png','pdf');
if (in_array($file8ActualExt,$allowed)) {
	if ($file8Error === 0) {
		mkdir($namepaper);
	 $file8NameNew = uniqid('',true).".".$file8ActualExt;
	 $file8destin = $namepaper.'/'.$file8NameNew;
	 move_uploaded_file($file8TmpName,$file8destin);

	 header("Location: upload.php?up=uploaded");
	}else{
		echo "there was an error";
	}
}
else{
	echo "you cant upload it";
}
$file9Name = $_FILES['file9']['name'];
$file9Type = $_FILES['file9']['type'];
$file9TmpName = $_FILES['file9']['tmp_name'];
$file9Error = $_FILES['file9']['error'];
$file9Size = $_FILES['file9']['size'];
$file9Ext = explode('.',$file9Name);
$file9ActualExt = strtolower(end($file9Ext));
$allowed = array('jpg','jpeg','png','pdf');
if (in_array($file9ActualExt,$allowed)) {
    if ($file9Error === 0) {
        mkdir($namepaper);
     $file9NameNew = uniqid('',true).".".$file9ActualExt;
     $file9destin = $namepaper.'/'.$file9NameNew;
     move_uploaded_file($file9TmpName,$file9destin);

     header("Location: upload.php?up=uploaded");
    }else{
        echo "there was an error";
    }
}
else{
    echo "you cant upload it";
}
$file10Name = $_FILES['file10']['name'];
$file10Type = $_FILES['file10']['type'];
$file10TmpName = $_FILES['file10']['tmp_name'];
$file10Error = $_FILES['file10']['error'];
$file10Size = $_FILES['file10']['size'];
$file10Ext = explode('.',$file10Name);
$file10ActualExt = strtolower(end($file10Ext));
$allowed = array('jpg','jpeg','png','pdf');
if (in_array($file10ActualExt,$allowed)) {
    if ($file10Error === 0) {
        mkdir($namepaper);
     $file10NameNew = uniqid('',true).".".$file10ActualExt;
     $file10destin = $namepaper.'/'.$file10NameNew;
     move_uploaded_file($file10TmpName,$file10destin);

     header("Location: upload.php?up=uploaded");
    }else{
        echo "there was an error";
    }
}
else{
    echo "you cant upload it";
}
$file11Name = $_FILES['file11']['name'];
$file11Type = $_FILES['file11']['type'];
$file11TmpName = $_FILES['file11']['tmp_name'];
$file11Error = $_FILES['file11']['error'];
$file11Size = $_FILES['file11']['size'];
$file11Ext = explode('.',$file11Name);
$file11ActualExt = strtolower(end($file11Ext));
$allowed = array('jpg','jpeg','png','pdf');
if (in_array($file11ActualExt,$allowed)) {
    if ($file11Error === 0) {
        mkdir($namepaper);
     $file11NameNew = uniqid('',true).".".$file11ActualExt;
     $file11destin = $namepaper.'/'.$file11NameNew;
     move_uploaded_file($file11TmpName,$file11destin);

     header("Location: upload.php?up=uploaded");
    }else{
        echo "there was an error";
    }
}
else{
    echo "you cant upload it";
}
}