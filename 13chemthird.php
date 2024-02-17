<?php
$add = "library";
include 'header.php';

?>
<title>A/Ls-grade 13 third term test chemistry MCQ answers of Royal college,Visakha Vidayalya,Ananda college,Devi Balika Vidyalaya etc</title>
    <meta name="description" content="Accurate answers for A/L grade 13 third term test chemistry MCQ papers of Royal college,Visakha Vidayalya,Ananda college,Devi Balika Vidyalaya etc ">
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-5152023475480843",
    enable_page_level_ads: true
  });
</script>
</head>
<?php
include 'rest.php';
?>

	<div id="head"><h1>
		CHEMISTRY<br><p>13 THIRD TERM</p>
	</h1></div>

	<div id="searchcon">
		
		<form action="13chemthirdsearch" method="POST">

			<select name="dropschool" id="dropschool">

				<option value="null">Select school</option>
	    	    <option value="Royal college">Royal college</option>
				<option value="Visakha Vidyalaya">Visakha Vidyalaya</option>
				<option value="Ananda college">Ananda college</option>
				<option value="Devi Balika Vidyalaya">Devi Balika Vidyalaya</option>

	        </select>

	        <select name="dropyr" id="dropyr">

	            <option value="null">Select year</option>
	            <option value="2019">2019</option>
				<option value="2018">2018</option>
				<option value="2017">2017</option>
				<option value="2016">2016</option>
				<option value="2015">2015</option>
				<option value="2014">2014</option>
				<option value="2013">2013</option>
				<option value="2012">2012</option>
			
	        </select>

			<button type="submit" name="submit"> Search</button>

		</form>
		
			<div id="uploadId"><a href="13chemthirdupload">
			<p>Upload answers</p></a>
		     </div>
        
	</div>
	<div id="midad">
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- midad1 -->
<ins class="adsbygoogle"
     style="display:block;background-color:transparent"
     data-ad-client="ca-pub-5152023475480843"
     data-ad-slot="5983527065"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
	</div>
		<p id="all"> All results</p>
	<?php
	$sql = "SELECT * From chem133posting_mcqs ORDER BY paper_yr DESC";
	$result = mysqli_query($conn,$sql);
	$queryResults = mysqli_num_rows($result);
	if ($queryResults > 0 ) {
		while ($row = mysqli_fetch_assoc($result)) {
			echo "
		<a href='133chem?school=".$row['school']."&paper_yr=".$row['paper_yr']."'' class='mcqAcn'>
     	    <div class='mcqBox'>
                <h1>".$row['school'] . "  ".$row['paper_yr']."</h1>
                 
                  <p>By : ".$row['author']."</p>
	        </div>
		</a>";
		}
		
	}
	 else{
        	echo "<div id='idnothing'><p>Nothing yet :(</p></div>";
        }
 
	?>

<?php
include 'stylecode/mcqpgstyle.php';
?>
<?php
 include 'footer.php';
  ?>
	