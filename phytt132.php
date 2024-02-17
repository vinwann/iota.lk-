<?php
$add = "library";
include 'header.php';

?>
<title>Download A/Ls-grade 13 second term test physics papers of Royal college,Visakha Vidayalya,Ananda college,Devi Balika Vidyalaya etc</title>
    <meta name="description" content="Download A/Ls-grade 13 second term test MCQ and ESSAY physics papers of Royal college,Visakha Vidayalya,Ananda college,Devi Balika Vidyalaya etc ">
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
<div id="newone" onclick="newpop()"><div id="newdiv" ><p id="newp">NEW</p></div>
<ul id="newpapers">
			
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul></div>
	<div id="noteone" onclick="notepop()"><div id="notediv"><p id="notep">NOTE</p></div> <P id="request">Upload your MCQ answers for the papers you downloaded :)</P></div>
	<div id="head"><h1 id="wenna">

		PHYSICS<br><p>13 SECOND TERM</p>
	</h1></div>
		<style>
	    #newdiv {
	        animation-duration: 0s !important;
	    }
	    #newp {
	         animation-duration: 0s !important;
	    }
	</style>
<?php

include 'showup.php';

?>
	<div id="searchcon">
		
		<form action="phytt132search" method="POST">

			<select name="dropschool" id="dropschool">

			
				<option value="null">Select school</option>
	    	    <option value="Royal college">Royal college</option>
				<option value="Visakha Vidyalaya">Visakha Vidyalaya</option>
				<option value="Ananda college">Ananda college</option>
				<option value="Devi Balika Vidyalaya">Devi Balika Vidyalaya</option>

	        </select>

	        <select name="dropyr" id="dropyr">

	            <option value="null">Select year</option>
	           
				<option value="2018">2018</option>
				<option value="2017">2017</option>
				<option value="2016">2016</option>
				<option value="2015">2015</option>
				<option value="2014">2014</option>
				<option value="2013">2013</option>
				<option value="2012">2012</option>
				 <option value="2011">2011</option>
			
	        </select>
	          <select name="dropt" id="dropt">

	            <option value="null">Paper type</option>
	            <option value="MCQ">MCQ</option>
				<option value="ESSAY">ESSAY</option>
				<option value="Marking scheme">Marking scheme</option>
			
	        </select>

			<button type="submit" name="submit"> Search</button>

		</form>
		
			
        
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
   <?php 
 $sql = "SELECT * From phy132 ORDER BY paper_yr";
	$result = mysqli_query($conn,$sql);
$queryResults = mysqli_num_rows($result);
	echo "<p id='all'> All results (".$queryResults.")</p>";
 ?>
	<?php
	$sql = "SELECT * From phy132 ORDER BY paper_yr DESC";
	$result = mysqli_query($conn,$sql);
	$queryResults = mysqli_num_rows($result);
	if ($queryResults > 0 ) {
		while ($row = mysqli_fetch_assoc($result)) {
			echo "
	<div class='mcqBox'>
		<p id='thanks'>".$row['user'] . " </p>
                <h1>".$row['school'] . "  ".$row['paper_yr']." <br>
                    ".$row['papert']."

                </h1>
                 <a href='phy13second/phy132".$row['school']."".$row['paper_yr']."".$row['papert']."IOTA.pdf' class='mcqAcn' download><div class='contentbox'>Download</div></a>
                 <a href='132phytt?school=".$row['school']."&paper_yr=".$row['paper_yr']."&papert=".$row['papert']."' class='mcqAcn' ><div class='contentbox'>View</div></a>
	        </div>";
		}
		
	}
	 else{
        	echo "<div id='idnothing'><p>Nothing yet :(</p></div>";
        }
 
	?>

<?php
include 'stylecode/ttstyle1.php';
?>
<?php
 include 'footer.php';
  ?>
	