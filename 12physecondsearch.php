<?php
$add = "12physecond";
include 'header.php';

?>
<title>iota.lk</title>
    <meta name="description" content="iota.lk was developed to share A/L MCQ answers , school term test papers and govenment model papers. This site contains papers and answers from Royal college , Visakha vidyalaya, Devi Balika vidyalaya , Ananda college etc..">
</head>
<?php
include 'rest.php';
?>
	<div id="head"><h1>Search results
  </h1></div>

	
		<div id="whattodo">
		
		<?php
         if (isset($_POST['submit'])) {
         	$search1 = mysqli_real_escape_string($conn,$_POST['dropyr']);
         	$search2 = mysqli_real_escape_string($conn,$_POST['dropschool']);

         	if ($search2 == "null" || $search1 == "null") {
         		$sql = "SELECT * FROM phy122posting_mcqs  WHERE paper_yr='$search1' OR school='$search2';";

         	$result = mysqli_query($conn,$sql);
	$queryResults = mysqli_num_rows($result);
	if ($queryResults > 0 ) {
		while ($row = mysqli_fetch_assoc($result)) {
			echo "
		
     	    <div class='mcqBox'>
          <a href='122phy?school=".$row['school']."&paper_yr=".$row['paper_yr']."' class='mcqAcn'>
                <h1>".$row['school'] . "  ".$row['paper_yr']."</h1>
                  <p>By: ".$row['author']."</p>
                  </a>
	        </div>
		";
		   }
		
        }
        else{
        	echo "<div id='idnothing'><p>No results... :(</p></div>";
        }
      
       }
       else {
       	$sql = "SELECT * FROM phy122posting_mcqs  WHERE paper_yr='$search1' AND school='$search2';";

         	$result = mysqli_query($conn,$sql);
	$queryResults = mysqli_num_rows($result);
	if ($queryResults > 0 ) {
		while ($row = mysqli_fetch_assoc($result)) {
			echo "
	
     	    <div class='mcqBox'>
          <a href='122phy?school=".$row['school']."&paper_yr=".$row['paper_yr']."' class='mcqAcn'>
                <h1>".$row['school'] . "  ".$row['paper_yr']."</h1>
                  <p>By: ".$row['author']."</p>
                  </a>
	        </div>
		";
		   }
		
        }
        else{
        	echo "<div id='idnothing'><p>No results... :(</p></div>";
        }
      
     }
    	}

         	


    
		?>
</div>

<?php
include 'stylecode/searchpgstyle.php';
  ?>

<?php
include 'footer.php';
?>