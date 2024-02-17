<?php
$add = "chemtt121";
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
            $search3 = mysqli_real_escape_string($conn,$_POST['dropt']);
         	if ($search2 == "null" && $search1 !== "null" && $search3 == "null") {
         		$sql = "SELECT * FROM chem121  WHERE paper_yr='$search1' ;";

         	$result = mysqli_query($conn,$sql);
	$queryResults = mysqli_num_rows($result);
	if ($queryResults > 0 ) {
		while ($row = mysqli_fetch_assoc($result)) {
			echo "
		
     <div class='mcqBox'>
                <h1>".$row['school'] . "  ".$row['paper_yr']." <br>
                    ".$row['papert']."

                </h1>
                 <a href='chem12first/chem121".$row['school']."".$row['paper_yr']."".$row['papert']."IOTA.pdf' class='mcqAcn' download><div class='contentbox'>Download</div></a>
                 <a href='121chemtt?school=".$row['school']."&paper_yr=".$row['paper_yr']."&papert=".$row['papert']."' class='mcqAcn' ><div class='contentbox'>View</div></a>
	        </div>
		";
		   }
		
        }
        else{
        	echo "<div id='idnothing'><p>No results... :(</p></div>";
        }
      
       }
                  elseif ($search2 !== "null" && $search1 == "null" && $search3 == "null") {
            $sql = "SELECT * FROM chem121  WHERE  school='$search2' ;";

          $result = mysqli_query($conn,$sql);
  $queryResults = mysqli_num_rows($result);
  if ($queryResults > 0 ) {
    while ($row = mysqli_fetch_assoc($result)) {
      echo "
    
      <div class='mcqBox'>
                <h1>".$row['school'] . "  ".$row['paper_yr']." <br>
                    ".$row['papert']."

                </h1>
                 <a href='chem12first/chem121".$row['school']."".$row['paper_yr']."".$row['papert']."IOTA.pdf' class='mcqAcn' download><div class='contentbox'>Download</div></a>
                 <a href='121chemtt?school=".$row['school']."&paper_yr=".$row['paper_yr']."&papert=".$row['papert']."' class='mcqAcn' ><div class='contentbox'>View</div></a>
	        </div>
    ";
       }
    
        }
        else{
          echo "<div id='idnothing'><p>No results... :(</p></div>";
        }
      
       }
                  elseif ($search2 == "null" && $search1 == "null" && $search3 !== "null") {
            $sql = "SELECT * FROM chem121  WHERE  papert='$search3';";

          $result = mysqli_query($conn,$sql);
  $queryResults = mysqli_num_rows($result);
  if ($queryResults > 0 ) {
    while ($row = mysqli_fetch_assoc($result)) {
      echo "
    
      <div class='mcqBox'>
                <h1>".$row['school'] . "  ".$row['paper_yr']." <br>
                    ".$row['papert']."

                </h1>
                 <a href='chem12first/chem121".$row['school']."".$row['paper_yr']."".$row['papert']."IOTA.pdf' class='mcqAcn' download><div class='contentbox'>Download</div></a>
                 <a href='121chemtt?school=".$row['school']."&paper_yr=".$row['paper_yr']."&papert=".$row['papert']."' class='mcqAcn' ><div class='contentbox'>View</div></a>
	        </div>
    ";
       }
    
        }
        else{
          echo "<div id='idnothing'><p>No results... :(</p></div>";
        }
      
       }
       
       elseif($search1 !== "null" && $search2 !== "null" && $search3 == "null") {
       	$sql = "SELECT * FROM chem121  WHERE paper_yr='$search1' AND school='$search2' ;";

         	$result = mysqli_query($conn,$sql);
	$queryResults = mysqli_num_rows($result);
	if ($queryResults > 0 ) {
		while ($row = mysqli_fetch_assoc($result)) {
			echo "
 
       <div class='mcqBox'>
                <h1>".$row['school'] . "  ".$row['paper_yr']." <br>
                    ".$row['papert']."

                </h1>
                 <a href='chem12first/chem121".$row['school']."".$row['paper_yr']."".$row['papert']."IOTA.pdf' class='mcqAcn' download><div class='contentbox'>Download</div></a>
                 <a href='121chemtt?school=".$row['school']."&paper_yr=".$row['paper_yr']."&papert=".$row['papert']."' class='mcqAcn' ><div class='contentbox'>View</div></a>
	        </div>
    ";
		
		   }
		
        }
        else {
        	echo "<div id='idnothing'><p>No results... :(</p></div>";
        }
        }
      
     
      elseif($search3 !== "null" && $search1 !== "null" && $search2 == "null" ) {
        $sql = "SELECT * FROM chem121  WHERE papert='$search3' AND paper_yr='$search1' ;";

          $result = mysqli_query($conn,$sql);
  $queryResults = mysqli_num_rows($result);
  if ($queryResults > 0 ) {
    while ($row = mysqli_fetch_assoc($result)) {
      echo "
 
        <div class='mcqBox'>
                <h1>".$row['school'] . "  ".$row['paper_yr']." <br>
                    ".$row['papert']."

                </h1>
                 <a href='chem12first/chem121".$row['school']."".$row['paper_yr']."".$row['papert']."IOTA.pdf' class='mcqAcn' download><div class='contentbox'>Download</div></a>
                 <a href='121chemtt?school=".$row['school']."&paper_yr=".$row['paper_yr']."&papert=".$row['papert']."' class='mcqAcn' ><div class='contentbox'>View</div></a>
	        </div>
    ";
    
       }
    
        }
        else{
          echo "<div id='idnothing'><p>No results... :(</p></div>";
        }
      
     }
      elseif( $search2 !== "null" && $search3 !== "null" && $search1 == "null") {
        $sql = "SELECT * FROM chem121  WHERE  school='$search2' AND  papert='$search3';";

          $result = mysqli_query($conn,$sql);
  $queryResults = mysqli_num_rows($result);
  if ($queryResults > 0 ) {
    while ($row = mysqli_fetch_assoc($result)) {
      echo "
 
          <div class='mcqBox'>
                <h1>".$row['school'] . "  ".$row['paper_yr']." <br>
                    ".$row['papert']."

                </h1>
                 <a href='chem12first/chem121".$row['school']."".$row['paper_yr']."".$row['papert']."IOTA.pdf' class='mcqAcn' download><div class='contentbox'>Download</div></a>
                 <a href='121chemtt?school=".$row['school']."&paper_yr=".$row['paper_yr']."&papert=".$row['papert']."' class='mcqAcn' ><div class='contentbox'>View</div></a>
	        </div>
    ";
    
       }
    
        }
        else{
          echo "<div id='idnothing'><p>No results... :(</p></div>";
        }
      
     }
      elseif ($search1 !== "null" && $search2 !== "null" && $search3 !== "null") {
        $sql = "SELECT * FROM chem121  WHERE paper_yr='$search1' AND school='$search2' AND  papert='$search3';";

          $result = mysqli_query($conn,$sql);
  $queryResults = mysqli_num_rows($result);
  if ($queryResults > 0 ) {
    while ($row = mysqli_fetch_assoc($result)) {
      echo "
 
        <div class='mcqBox'>
                <h1>".$row['school'] . "  ".$row['paper_yr']." <br>
                    ".$row['papert']."

                </h1>
                 <a href='chem12first/chem121".$row['school']."".$row['paper_yr']."".$row['papert']."IOTA.pdf' class='mcqAcn' download><div class='contentbox'>Download</div></a>
                 <a href='121chemtt?school=".$row['school']."&paper_yr=".$row['paper_yr']."&papert=".$row['papert']."' class='mcqAcn' ><div class='contentbox'>View</div></a>
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
include 'stylecode/ttsearchstyle.php'
   ?>
	

<?php
include 'footer.php';
?>