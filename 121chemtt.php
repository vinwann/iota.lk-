	<?php
$add = "chemtt121";
include 'header.php';
include_once 'includes/dbh.php';
?>
  <?php
   if (isset($_GET['school'])) {
                   $school = $_GET['school'];
                    $paper_yr = $_GET['paper_yr'];
                    $papert = $_GET['papert'];
               
                   $sql = "SELECT * From chem121tt WHERE school='$school' AND paper_yr='$paper_yr' AND papert='$papert'";
    $result = mysqli_query($conn,$sql);
    $queryResults = mysqli_num_rows($result);
    $row = mysqli_fetch_assoc($result);
    
    if ($queryResults > 0 ) {
      if ($row['papert']=="Marking scheme") {
echo "<title> Download ".$row['school']." ".$row['paper_yr']." grade 12 first term test chemistry ".$row['papert']."  </title>
   <meta name='description' content='Download ".$row['school']." ".$row['paper_yr']." grade 12 first term test chemistry ".$row['papert']."'>";
}
else {
  echo "<title>Download ".$row['school']." ".$row['paper_yr']." grade 12 first term test chemistry ".$row['papert']." paper </title>
   <meta name='description' content='Download ".$row['school']." ".$row['paper_yr']." grade 12 first term test chemistry ".$row['papert']." paper'>";
}
}
}?>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-5152023475480843",
    enable_page_level_ads: true
  });
</script>
</head>
 <?php
  include 'stylecode/ttshowstyle.php';
  ?>
    <?php
include 'rest.php';
?>
    
     
  <?php
              
                if (isset($_GET['school'])) {
                   $school = $_GET['school'];
                    $paper_yr = $_GET['paper_yr'];
                    $papert = $_GET['papert'];
               
                   $sql = "SELECT * From chem121tt WHERE school='$school' AND paper_yr='$paper_yr' AND papert='$papert'";
    $result = mysqli_query($conn,$sql);
    $queryResults = mysqli_num_rows($result);
    $row = mysqli_fetch_assoc($result);
     //$fieldcount = mysqli_num_fields($result);
    if ($queryResults > 0 ) {
      if ($row['papert']=="Marking scheme") {
        if ($row['img_4']=="0")
      {echo " 
             <h1 id='top'>".$row['school']." ".$row['paper_yr']." <br>".$row['papert']."</h1><a href='chem12first/chem121".$row['school']."".$row['paper_yr']."".$row['papert']."IOTA.pdf' class='mcqAcn' download><div class='contentbox'>Download pdf</div></a>
             <p class='numberp'> Number of pages:".$row['img_3']."</p>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_1'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_2'].".png' class='imgdo'></div>
            <div id='midad1'>
           <script async src='//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js'></script>
<!-- midad1 -->
<ins class='adsbygoogle'
     style='display:block;background-color:transparent'
     data-ad-client='ca-pub-5152023475480843'
     data-ad-slot='5983527065'
     data-ad-format='auto'
     data-full-width-responsive='true'></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script></div>
            <div class='imgbox' id='lastone3'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_3'].".png' class='imgdo'></div>
              <div id='midad'>
    <script async src='//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js'></script>
<!-- bottomad -->
<ins class='adsbygoogle'
     style='display:block'
     data-ad-client='ca-pub-5152023475480843'
     data-ad-slot='5676405307'
     data-ad-format='auto'
     data-full-width-responsive='true'></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
               ";}
      else if ($row['img_5']=="0") {
          echo "
             <h1 id='top'>".$row['school']." ".$row['paper_yr']." <br>".$row['papert']."</h1><a href='chem12first/chem121".$row['school']."".$row['paper_yr']."".$row['papert']."IOTA.pdf' class='mcqAcn' download><div class='contentbox'>Download pdf</div></a>
             <p class='numberp'> Number of pages:".$row['img_4']."</p>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_1'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_2'].".png' class='imgdo'></div>
            <div id='midad1'>
           <script async src='//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js'></script>
<!-- midad1 -->
<ins class='adsbygoogle'
     style='display:block;background-color:transparent'
     data-ad-client='ca-pub-5152023475480843'
     data-ad-slot='5983527065'
     data-ad-format='auto'
     data-full-width-responsive='true'></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_3'].".png' class='imgdo'></div>
            <div class='imgbox' id='lastone4'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_4'].".png' class='imgdo'></div>
             <div id='midad'>
    <script async src='//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js'></script>
<!-- bottomad -->
<ins class='adsbygoogle'
     style='display:block'
     data-ad-client='ca-pub-5152023475480843'
     data-ad-slot='5676405307'
     data-ad-format='auto'
     data-full-width-responsive='true'></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
             " ;}
             else if ($row['img_6']=="0") {
          echo "<h1 id='top'>".$row['school']." ".$row['paper_yr']." <br>".$row['papert']."</h1><a href='chem12first/chem121".$row['school']."".$row['paper_yr']."".$row['papert']."IOTA.pdf' class='mcqAcn' download><div class='contentbox'>Download pdf</div></a>
          <p class='numberp'> Number of pages:".$row['img_5']."</p>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_1'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_2'].".png' class='imgdo'></div>
            <div id='midad1'>
            <script async src='//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js'></script>
<!-- midad1 -->
<ins class='adsbygoogle'
     style='display:block;background-color:transparent'
     data-ad-client='ca-pub-5152023475480843'
     data-ad-slot='5983527065'
     data-ad-format='auto'
     data-full-width-responsive='true'></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_3'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_4'].".png' class='imgdo'></div>
            <div class='imgbox' id='lastone5'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_5'].".png' class='imgdo'></div>
   <div id='midad'>
    <script async src='//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js'></script>
<!-- bottomad -->
<ins class='adsbygoogle'
     style='display:block'
     data-ad-client='ca-pub-5152023475480843'
     data-ad-slot='5676405307'
     data-ad-format='auto'
     data-full-width-responsive='true'></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
    " ;}
             else if ($row['img_7']=="0") {
          echo "<h1 id='top'>".$row['school']." ".$row['paper_yr']." <br>".$row['papert']." </h1><a href='chem12first/chem121".$row['school']."".$row['paper_yr']."".$row['papert']."IOTA.pdf' class='mcqAcn' download><div class='contentbox'>Download pdf</div></a>
          <p class='numberp'> Number of pages:".$row['img_6']."</p>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_1'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_2'].".png' class='imgdo'></div>
            <div id='midad1'>
            <script async src='//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js'></script>
<!-- midad1 -->
<ins class='adsbygoogle'
     style='display:block;background-color:transparent'
     data-ad-client='ca-pub-5152023475480843'
     data-ad-slot='5983527065'
     data-ad-format='auto'
     data-full-width-responsive='true'></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_3'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_4'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_5'].".png' class='imgdo'></div>
            <div class='imgbox' id='lastone6'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_6'].".png' class='imgdo'></div>
        <div id='midad'>
    <script async src='//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js'></script>
<!-- bottomad -->
<ins class='adsbygoogle'
     style='display:block'
     data-ad-client='ca-pub-5152023475480843'
     data-ad-slot='5676405307'
     data-ad-format='auto'
     data-full-width-responsive='true'></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div> " ;}
             else if ($row['img_8']=="0") {
          echo "<h1 id='top'>".$row['school']." ".$row['paper_yr']." <br>".$row['papert']."</h1><a href='chem12first/chem121".$row['school']."".$row['paper_yr']."".$row['papert']."IOTA.pdf' class='mcqAcn' download><div class='contentbox'>Download pdf</div></a>
           <p class='numberp'> Number of pages:".$row['img_7']."</p>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_1'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_2'].".png' class='imgdo'></div>
            <div id='midad1'>
           <script async src='//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js'></script>
<!-- midad1 -->
<ins class='adsbygoogle'
     style='display:block;background-color:transparent'
     data-ad-client='ca-pub-5152023475480843'
     data-ad-slot='5983527065'
     data-ad-format='auto'
     data-full-width-responsive='true'></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_3'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_4'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_5'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_6'].".png' class='imgdo'></div>
            <div id='midad'>
    <script async src='//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js'></script>
<!-- bottomad -->
<ins class='adsbygoogle'
     style='display:block'
     data-ad-client='ca-pub-5152023475480843'
     data-ad-slot='5676405307'
     data-ad-format='auto'
     data-full-width-responsive='true'></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
            <div class='imgbox' id='lastone7'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_7'].".png' class='imgdo'></div>
" ;}
             else if ($row['img_9']=="0") {
          echo "<h1 id='top'>".$row['school']." ".$row['paper_yr']." <br>".$row['papert']."</h1><a href='chem12first/chem121".$row['school']."".$row['paper_yr']."".$row['papert']."IOTA.pdf' class='mcqAcn' download><div class='contentbox'>Download pdf</div></a>
          <p class='numberp'> Number of pages:".$row['img_8']."</p>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_1'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_2'].".png' class='imgdo'></div>
            <div id='midad1'>
           <script async src='//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js'></script>
<!-- midad1 -->
<ins class='adsbygoogle'
     style='display:block;background-color:transparent'
     data-ad-client='ca-pub-5152023475480843'
     data-ad-slot='5983527065'
     data-ad-format='auto'
     data-full-width-responsive='true'></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_3'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_4'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_5'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_6'].".png' class='imgdo'></div>
            <div id='midad'>
    <script async src='//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js'></script>
<!-- bottomad -->
<ins class='adsbygoogle'
     style='display:block'
     data-ad-client='ca-pub-5152023475480843'
     data-ad-slot='5676405307'
     data-ad-format='auto'
     data-full-width-responsive='true'></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_7'].".png' class='imgdo'></div>
            <div class='imgbox' id='lastone8'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_8'].".png' class='imgdo'></div>
        
            " ;}
             else if ($row['img_10']=="0") {
          echo "<h1 id='top'>".$row['school']." ".$row['paper_yr']." <br>".$row['papert']."</h1><a href='chem12first/chem121".$row['school']."".$row['paper_yr']."".$row['papert']."IOTA.pdf' class='mcqAcn' download><div class='contentbox'>Download pdf</div></a>
          <p class='numberp'> Number of pages:".$row['img_9']."</p>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_1'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_2'].".png' class='imgdo'></div>
            <div id='midad1'>
            <script async src='//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js'></script>
<!-- midad1 -->
<ins class='adsbygoogle'
     style='display:block;background-color:transparent'
     data-ad-client='ca-pub-5152023475480843'
     data-ad-slot='5983527065'
     data-ad-format='auto'
     data-full-width-responsive='true'></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_3'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_4'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_5'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_6'].".png' class='imgdo'></div>
            <div id='midad'>
    <script async src='//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js'></script>
<!-- bottomad -->
<ins class='adsbygoogle'
     style='display:block'
     data-ad-client='ca-pub-5152023475480843'
     data-ad-slot='5676405307'
     data-ad-format='auto'
     data-full-width-responsive='true'></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_7'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_8'].".png' class='imgdo'></div>
            <div class='imgbox' id='lastone9'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_9'].".png' class='imgdo'></div>
          
            " ;}
             else if ($row['img_11']=="0") {
          echo "<h1 id='top'>".$row['school']." ".$row['paper_yr']." <br>".$row['papert']."</h1><a href='chem12first/chem121".$row['school']."".$row['paper_yr']."".$row['papert']."IOTA.pdf' class='mcqAcn' download><div class='contentbox'>Download pdf</div></a>
          <p class='numberp'> Number of pages:".$row['img_10']."</p>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_1'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_2'].".png' class='imgdo'></div>
            <div id='midad1'>
           <script async src='//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js'></script>
<!-- midad1 -->
<ins class='adsbygoogle'
     style='display:block;background-color:transparent'
     data-ad-client='ca-pub-5152023475480843'
     data-ad-slot='5983527065'
     data-ad-format='auto'
     data-full-width-responsive='true'></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_3'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_4'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_5'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_6'].".png' class='imgdo'></div>
            <div id='midad'>
    <script async src='//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js'></script>
<!-- bottomad -->
<ins class='adsbygoogle'
     style='display:block'
     data-ad-client='ca-pub-5152023475480843'
     data-ad-slot='5676405307'
     data-ad-format='auto'
     data-full-width-responsive='true'></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_7'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_8'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_9'].".png' class='imgdo'></div>
            <div class='imgbox' id='lastone10'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_10'].".png' class='imgdo'></div>
        
            " ;}
             else if ($row['img_12']=="0") {
          echo "<h1 id='top'>".$row['school']." ".$row['paper_yr']." <br>".$row['papert']."</h1><a href='chem12first/chem121".$row['school']."".$row['paper_yr']."".$row['papert']."IOTA.pdf' class='mcqAcn' download><div class='contentbox'>Download pdf</div></a>
          <p class='numberp'> Number of pages:".$row['img_11']."</p>
          <p class='numberp'> Number of pages:".$row['img_11']."</p>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_1'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_2'].".png' class='imgdo'></div>
            <div id='midad1'>
        <script async src='//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js'></script>
<!-- midad1 -->
<ins class='adsbygoogle'
     style='display:block;background-color:transparent'
     data-ad-client='ca-pub-5152023475480843'
     data-ad-slot='5983527065'
     data-ad-format='auto'
     data-full-width-responsive='true'></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_3'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_4'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_5'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_6'].".png' class='imgdo'></div>
            <div id='midad'>
    <script async src='//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js'></script>
<!-- bottomad -->
<ins class='adsbygoogle'
     style='display:block'
     data-ad-client='ca-pub-5152023475480843'
     data-ad-slot='5676405307'
     data-ad-format='auto'
     data-full-width-responsive='true'></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_7'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_8'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_9'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_10'].".png' class='imgdo'></div>
            <div class='imgbox' id='lastone11'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_11'].".png' class='imgdo'></div>
           
            " ;}
             else if ($row['img_13']=="0") {
          echo "<h1 id='top'>".$row['school']." ".$row['paper_yr']." <br>".$row['papert']."</h1><a href='chem12first/chem121".$row['school']."".$row['paper_yr']."".$row['papert']."IOTA.pdf' class='mcqAcn' download><div class='contentbox'>Download pdf</div></a>
          <p class='numberp'> Number of pages:".$row['img_12']."</p>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_1'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_2'].".png' class='imgdo'></div>
            <div id='midad1'>
            <script async src='//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js'></script>
<!-- midad1 -->
<ins class='adsbygoogle'
     style='display:block;background-color:transparent'
     data-ad-client='ca-pub-5152023475480843'
     data-ad-slot='5983527065'
     data-ad-format='auto'
     data-full-width-responsive='true'></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_3'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_4'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_5'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_6'].".png' class='imgdo'></div>
            <div id='midad'>
    <script async src='//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js'></script>
<!-- bottomad -->
<ins class='adsbygoogle'
     style='display:block'
     data-ad-client='ca-pub-5152023475480843'
     data-ad-slot='5676405307'
     data-ad-format='auto'
     data-full-width-responsive='true'></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_7'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_8'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_9'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_10'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_11'].".png' class='imgdo'></div>
            <div class='imgbox' id='lastone12'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_12'].".png' class='imgdo'></div>
          
            " ;}
             else if ($row['img_14']=="0") {
          echo "<h1 id='top'>".$row['school']." ".$row['paper_yr']." <br>".$row['papert']."</h1><a href='chem12first/chem121".$row['school']."".$row['paper_yr']."".$row['papert']."IOTA.pdf' class='mcqAcn' download><div class='contentbox'>Download pdf</div></a>
          <p class='numberp'> Number of pages:".$row['img_13']."</p>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_1'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_2'].".png' class='imgdo'></div>
            <div id='midad1'>
           <script async src='//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js'></script>
<!-- midad1 -->
<ins class='adsbygoogle'
     style='display:block;background-color:transparent'
     data-ad-client='ca-pub-5152023475480843'
     data-ad-slot='5983527065'
     data-ad-format='auto'
     data-full-width-responsive='true'></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_3'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_4'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_5'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_6'].".png' class='imgdo'></div>
            <div id='midad'>
    <script async src='//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js'></script>
<!-- bottomad -->
<ins class='adsbygoogle'
     style='display:block'
     data-ad-client='ca-pub-5152023475480843'
     data-ad-slot='5676405307'
     data-ad-format='auto'
     data-full-width-responsive='true'></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_7'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_8'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_9'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_10'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_11'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_12'].".png' class='imgdo'></div>
            <div class='imgbox' id='lastone13'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_13'].".png' class='imgdo'></div>
            
            " ;}
             else if ($row['img_15']=="0") {
          echo "<h1 id='top'>".$row['school']." ".$row['paper_yr']." <br>".$row['papert']."</h1><a href='chem12first/chem121".$row['school']."".$row['paper_yr']."".$row['papert']."IOTA.pdf' class='mcqAcn' download><div class='contentbox'>Download pdf</div></a>
           <p class='numberp'> Number of pages:".$row['img_14']."</p>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_1'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_2'].".png' class='imgdo'></div>
            <div id='midad1'>
            <script async src='//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js'></script>
<!-- midad1 -->
<ins class='adsbygoogle'
     style='display:block;background-color:transparent'
     data-ad-client='ca-pub-5152023475480843'
     data-ad-slot='5983527065'
     data-ad-format='auto'
     data-full-width-responsive='true'></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_3'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_4'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_5'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_6'].".png' class='imgdo'></div>
            <div id='midad'>
    <script async src='//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js'></script>
<!-- bottomad -->
<ins class='adsbygoogle'
     style='display:block'
     data-ad-client='ca-pub-5152023475480843'
     data-ad-slot='5676405307'
     data-ad-format='auto'
     data-full-width-responsive='true'></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_7'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_8'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_9'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_10'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_11'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_12'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_13'].".png' class='imgdo'></div>
            <div class='imgbox' id='lastone14'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_14'].".png' class='imgdo'></div>
           
            " ;}
             else if ($row['img_16']=="0") {
          echo "<h1 id='top'>".$row['school']." ".$row['paper_yr']." <br>".$row['papert']."</h1><a href='chem12first/chem121".$row['school']."".$row['paper_yr']."".$row['papert']."IOTA.pdf' class='mcqAcn' download><div class='contentbox'>Download pdf</div></a>
          <p class='numberp'> Number of pages:".$row['img_15']."</p>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_1'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_2'].".png' class='imgdo'></div>
            <div id='midad1'>
            <script async src='//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js'></script>
<!-- midad1 -->
<ins class='adsbygoogle'
     style='display:block;background-color:transparent'
     data-ad-client='ca-pub-5152023475480843'
     data-ad-slot='5983527065'
     data-ad-format='auto'
     data-full-width-responsive='true'></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_3'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_4'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_5'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_6'].".png' class='imgdo'></div>
            <div id='midad'>
    <script async src='//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js'></script>
<!-- bottomad -->
<ins class='adsbygoogle'
     style='display:block'
     data-ad-client='ca-pub-5152023475480843'
     data-ad-slot='5676405307'
     data-ad-format='auto'
     data-full-width-responsive='true'></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_7'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_8'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_9'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_10'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_11'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_12'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_13'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_14'].".png' class='imgdo'></div>
            <div class='imgbox' id='lastone15'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_15'].".png' class='imgdo'></div>
            
            " ;}
             else if ($row['img_17']=="0") {
          echo "<h1 id='top'>".$row['school']." ".$row['paper_yr']." <br>".$row['papert']."</h1><a href='chem12first/chem121".$row['school']."".$row['paper_yr']."".$row['papert']."IOTA.pdf' class='mcqAcn' download><div class='contentbox'>Download pdf</div></a>
          <p class='numberp'> Number of pages:".$row['img_16']."</p>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_1'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_2'].".png' class='imgdo'></div>
            <div id='midad1'>
           <script async src='//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js'></script>
<!-- midad1 -->
<ins class='adsbygoogle'
     style='display:block;background-color:transparent'
     data-ad-client='ca-pub-5152023475480843'
     data-ad-slot='5983527065'
     data-ad-format='auto'
     data-full-width-responsive='true'></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_3'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_4'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_5'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_6'].".png' class='imgdo'></div>
            <div id='midad'>
    <script async src='//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js'></script>
<!-- bottomad -->
<ins class='adsbygoogle'
     style='display:block'
     data-ad-client='ca-pub-5152023475480843'
     data-ad-slot='5676405307'
     data-ad-format='auto'
     data-full-width-responsive='true'></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_7'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_8'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_9'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_10'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_11'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_12'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_13'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_14'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_15'].".png' class='imgdo'></div>
            <div class='imgbox' id='lastone16'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_16'].".png' class='imgdo'></div>
            
            " ;}
             else if ($row['img_18']=="0") {
          echo "<h1 id='top'>".$row['school']." ".$row['paper_yr']."<br> ".$row['papert']."</h1><a href='chem12first/chem121".$row['school']."".$row['paper_yr']."".$row['papert']."IOTA.pdf' class='mcqAcn' download><div class='contentbox'>Download pdf</div></a>
          <p class='numberp'> Number of pages:".$row['img_17']."</p>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_1'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_2'].".png' class='imgdo'></div>
            <div id='midad1'>
            <script async src='//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js'></script>
<!-- midad1 -->
<ins class='adsbygoogle'
     style='display:block;background-color:transparent'
     data-ad-client='ca-pub-5152023475480843'
     data-ad-slot='5983527065'
     data-ad-format='auto'
     data-full-width-responsive='true'></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_3'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_4'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_5'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_6'].".png' class='imgdo'></div>
            <div id='midad'>
    <script async src='//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js'></script>
<!-- bottomad -->
<ins class='adsbygoogle'
     style='display:block'
     data-ad-client='ca-pub-5152023475480843'
     data-ad-slot='5676405307'
     data-ad-format='auto'
     data-full-width-responsive='true'></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_7'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_8'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_9'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_10'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_11'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_12'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_13'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_14'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_15'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_16'].".png' class='imgdo'></div>
            <div class='imgbox' id='lastone17'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_17'].".png' class='imgdo'></div>
           
            " ;}
             else if ($row['img_19']=="0") {
          echo "<h1 id='top'>".$row['school']." ".$row['paper_yr']." <br>".$row['papert']."</h1><a href='chem12first/chem121".$row['school']."".$row['paper_yr']."".$row['papert']."IOTA.pdf' class='mcqAcn' download><div class='contentbox'>Download pdf</div></a>
          <p class='numberp'> Number of pages:".$row['img_18']."</p>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_1'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_2'].".png' class='imgdo'></div>
            <div id='midad1'>
            <script async src='//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js'></script>
<!-- midad1 -->
<ins class='adsbygoogle'
     style='display:block;background-color:transparent'
     data-ad-client='ca-pub-5152023475480843'
     data-ad-slot='5983527065'
     data-ad-format='auto'
     data-full-width-responsive='true'></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_3'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_4'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_5'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_6'].".png' class='imgdo'></div>
            <div id='midad'>
    <script async src='//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js'></script>
<!-- bottomad -->
<ins class='adsbygoogle'
     style='display:block'
     data-ad-client='ca-pub-5152023475480843'
     data-ad-slot='5676405307'
     data-ad-format='auto'
     data-full-width-responsive='true'></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_7'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_8'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_9'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_10'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_11'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_12'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_13'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_14'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_15'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_16'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_17'].".png' class='imgdo'></div>
            <div class='imgbox' id='lastone18'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_18'].".png' class='imgdo'></div>
         
            " ;}
             else if ($row['img_20']=="0") {
          echo "<h1 id='top'>".$row['school']." ".$row['paper_yr']." <br>".$row['papert']."</h1><a href='chem12first/chem121".$row['school']."".$row['paper_yr']."".$row['papert']."IOTA.pdf' class='mcqAcn' download><div class='contentbox'>Download pdf</div></a>
          <p class='numberp'> Number of pages:".$row['img_19']."</p>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_1'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_2'].".png' class='imgdo'></div>
            <div id='midad1'>
            <script async src='//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js'></script>
<!-- midad1 -->
<ins class='adsbygoogle'
     style='display:block;background-color:transparent'
     data-ad-client='ca-pub-5152023475480843'
     data-ad-slot='5983527065'
     data-ad-format='auto'
     data-full-width-responsive='true'></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_3'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_4'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_5'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_6'].".png' class='imgdo'></div>
            <div id='midad'>
    <script async src='//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js'></script>
<!-- bottomad -->
<ins class='adsbygoogle'
     style='display:block'
     data-ad-client='ca-pub-5152023475480843'
     data-ad-slot='5676405307'
     data-ad-format='auto'
     data-full-width-responsive='true'></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_7'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_8'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_9'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_10'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_11'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_12'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_13'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_14'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_15'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_16'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_17'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_18'].".png' class='imgdo'></div>
            <div class='imgbox' id='lastone19'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_19'].".png' class='imgdo'></div>
            
            " ;}
             else  {
          echo "<h1 id='top'>".$row['school']." ".$row['paper_yr']." <br>".$row['papert']."</h1><a href='chem12first/chem121".$row['school']."".$row['paper_yr']."".$row['papert']."IOTA.pdf' class='mcqAcn' download><div class='contentbox'>Download pdf</div></a>
           <p class='numberp'> Number of pages:".$row['img_20']."</p>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_1'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_2'].".png' class='imgdo'></div>
            <div id='midad1'>
            <script async src='//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js'></script>
<!-- midad1 -->
<ins class='adsbygoogle'
     style='display:block;background-color:transparent'
     data-ad-client='ca-pub-5152023475480843'
     data-ad-slot='5983527065'
     data-ad-format='auto'
     data-full-width-responsive='true'></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_3'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_4'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_5'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_6'].".png' class='imgdo'></div>
            <div id='midad'>
    <script async src='//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js'></script>
<!-- bottomad -->
<ins class='adsbygoogle'
     style='display:block'
     data-ad-client='ca-pub-5152023475480843'
     data-ad-slot='5676405307'
     data-ad-format='auto'
     data-full-width-responsive='true'></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_7'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_8'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_9'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_10'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_11'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_12'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_13'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_14'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_15'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_16'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_17'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_18'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_19'].".png' class='imgdo'></div>
            <div class='imgbox' id='lastone20'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_20'].".png' class='imgdo'></div>
            " ;}
            
      }
      else{
        if ($row['img_4']=="0")
      {echo " 
             <h1 id='top'>".$row['school']." ".$row['paper_yr']." <br>".$row['papert']." paper</h1><a href='chem12first/chem121".$row['school']."".$row['paper_yr']."".$row['papert']."IOTA.pdf' class='mcqAcn' download><div class='contentbox'>Download pdf</div></a>
            <p class='numberp'> Number of pages:".$row['img_3']."</p>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_1'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_2'].".png' class='imgdo'></div>
            <div id='midad1'>
            <script async src='//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js'></script>
<!-- midad1 -->
<ins class='adsbygoogle'
     style='display:block;background-color:transparent'
     data-ad-client='ca-pub-5152023475480843'
     data-ad-slot='5983527065'
     data-ad-format='auto'
     data-full-width-responsive='true'></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script></div>
            <div class='imgbox' id='lastone3'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_3'].".png' class='imgdo'></div>
            <div id='midad'>
    <script async src='//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js'></script>
<!-- bottomad -->
<ins class='adsbygoogle'
     style='display:block'
     data-ad-client='ca-pub-5152023475480843'
     data-ad-slot='5676405307'
     data-ad-format='auto'
     data-full-width-responsive='true'></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
               ";}
      else if ($row['img_5']=="0") {
          echo "
             <h1 id='top'>".$row['school']." ".$row['paper_yr']." <br>".$row['papert']." paper</h1><a href='chem12first/chem121".$row['school']."".$row['paper_yr']."".$row['papert']."IOTA.pdf' class='mcqAcn' download><div class='contentbox'>Download pdf</div></a>
              <p class='numberp'> Number of pages:".$row['img_4']."</p>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_1'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_2'].".png' class='imgdo'></div>
            <div id='midad1'>
            <script async src='//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js'></script>
<!-- midad1 -->
<ins class='adsbygoogle'
     style='display:block;background-color:transparent'
     data-ad-client='ca-pub-5152023475480843'
     data-ad-slot='5983527065'
     data-ad-format='auto'
     data-full-width-responsive='true'></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_3'].".png' class='imgdo'></div>
            <div class='imgbox' id='lastone4'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_4'].".png' class='imgdo'></div>
            <div id='midad'>
    <script async src='//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js'></script>
<!-- bottomad -->
<ins class='adsbygoogle'
     style='display:block'
     data-ad-client='ca-pub-5152023475480843'
     data-ad-slot='5676405307'
     data-ad-format='auto'
     data-full-width-responsive='true'></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
             " ;}
             else if ($row['img_6']=="0") {
          echo "<h1 id='top'>".$row['school']." ".$row['paper_yr']." <br>".$row['papert']." paper</h1><a href='chem12first/chem121".$row['school']."".$row['paper_yr']."".$row['papert']."IOTA.pdf' class='mcqAcn' download><div class='contentbox'>Download pdf</div></a>
         
           <p class='numberp'> Number of pages:".$row['img_5']."</p>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_1'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_2'].".png' class='imgdo'></div>
            <div id='midad1'>
           <script async src='//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js'></script>
<!-- midad1 -->
<ins class='adsbygoogle'
     style='display:block;background-color:transparent'
     data-ad-client='ca-pub-5152023475480843'
     data-ad-slot='5983527065'
     data-ad-format='auto'
     data-full-width-responsive='true'></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_3'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_4'].".png' class='imgdo'></div>
            <div class='imgbox' id='lastone5'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_5'].".png' class='imgdo'></div>
            <div id='midad'>
    <script async src='//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js'></script>
<!-- bottomad -->
<ins class='adsbygoogle'
     style='display:block'
     data-ad-client='ca-pub-5152023475480843'
     data-ad-slot='5676405307'
     data-ad-format='auto'
     data-full-width-responsive='true'></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
    " ;}
             else if ($row['img_7']=="0") {
          echo "<h1 id='top'>".$row['school']." ".$row['paper_yr']." <br>".$row['papert']." paper</h1><a href='chem12first/chem121".$row['school']."".$row['paper_yr']."".$row['papert']."IOTA.pdf' class='mcqAcn' download><div class='contentbox'>Download pdf</div></a>
          <p class='numberp'> Number of pages:".$row['img_6']."</p>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_1'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_2'].".png' class='imgdo'></div>
            <div id='midad1'>
            <script async src='//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js'></script>
<!-- midad1 -->
<ins class='adsbygoogle'
     style='display:block;background-color:transparent'
     data-ad-client='ca-pub-5152023475480843'
     data-ad-slot='5983527065'
     data-ad-format='auto'
     data-full-width-responsive='true'></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_3'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_4'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_5'].".png' class='imgdo'></div>
            <div class='imgbox' id='lastone6'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_6'].".png' class='imgdo'></div>
            <div id='midad'>
    <script async src='//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js'></script>
<!-- bottomad -->
<ins class='adsbygoogle'
     style='display:block'
     data-ad-client='ca-pub-5152023475480843'
     data-ad-slot='5676405307'
     data-ad-format='auto'
     data-full-width-responsive='true'></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
         " ;}
             else if ($row['img_8']=="0") {
          echo "<h1 id='top'>".$row['school']." ".$row['paper_yr']." <br>".$row['papert']." paper</h1><a href='chem12first/chem121".$row['school']."".$row['paper_yr']."".$row['papert']."IOTA.pdf' class='mcqAcn' download><div class='contentbox'>Download pdf</div></a>
          <p class='numberp'> Number of pages:".$row['img_7']."</p>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_1'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_2'].".png' class='imgdo'></div>
            <div id='midad1'>
            <script async src='//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js'></script>
<!-- midad1 -->
<ins class='adsbygoogle'
     style='display:block;background-color:transparent'
     data-ad-client='ca-pub-5152023475480843'
     data-ad-slot='5983527065'
     data-ad-format='auto'
     data-full-width-responsive='true'></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_3'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_4'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_5'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_6'].".png' class='imgdo'></div>
            <div id='midad'>
    <script async src='//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js'></script>
<!-- bottomad -->
<ins class='adsbygoogle'
     style='display:block'
     data-ad-client='ca-pub-5152023475480843'
     data-ad-slot='5676405307'
     data-ad-format='auto'
     data-full-width-responsive='true'></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
            <div class='imgbox' id='lastone7'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_7'].".png' class='imgdo'></div>
" ;}
             else if ($row['img_9']=="0") {
          echo "<h1 id='top'>".$row['school']." ".$row['paper_yr']." <br>".$row['papert']." paper</h1><a href='chem12first/chem121".$row['school']."".$row['paper_yr']."".$row['papert']."IOTA.pdf' class='mcqAcn' download><div class='contentbox'>Download pdf</div></a>
          <p class='numberp'> Number of pages:".$row['img_8']."</p>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_1'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_2'].".png' class='imgdo'></div>
            <div id='midad1'>
           <script async src='//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js'></script>
<!-- midad1 -->
<ins class='adsbygoogle'
     style='display:block;background-color:transparent'
     data-ad-client='ca-pub-5152023475480843'
     data-ad-slot='5983527065'
     data-ad-format='auto'
     data-full-width-responsive='true'></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_3'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_4'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_5'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_6'].".png' class='imgdo'></div>
            <div id='midad'>
    <script async src='//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js'></script>
<!-- bottomad -->
<ins class='adsbygoogle'
     style='display:block'
     data-ad-client='ca-pub-5152023475480843'
     data-ad-slot='5676405307'
     data-ad-format='auto'
     data-full-width-responsive='true'></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_7'].".png' class='imgdo'></div>
            <div class='imgbox' id='lastone8'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_8'].".png' class='imgdo'></div>
        
            " ;}
             else if ($row['img_10']=="0") {
          echo "<h1 id='top'>".$row['school']." ".$row['paper_yr']." <br>".$row['papert']." paper</h1><a href='chem12first/chem121".$row['school']."".$row['paper_yr']."".$row['papert']."IOTA.pdf' class='mcqAcn' download><div class='contentbox'>Download pdf</div></a>
         <p class='numberp'> Number of pages:".$row['img_9']."</p>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_1'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_2'].".png' class='imgdo'></div>
            <div id='midad1'>
           <script async src='//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js'></script>
<!-- midad1 -->
<ins class='adsbygoogle'
     style='display:block;background-color:transparent'
     data-ad-client='ca-pub-5152023475480843'
     data-ad-slot='5983527065'
     data-ad-format='auto'
     data-full-width-responsive='true'></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_3'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_4'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_5'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_6'].".png' class='imgdo'></div>
            <div id='midad'>
    <script async src='//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js'></script>
<!-- bottomad -->
<ins class='adsbygoogle'
     style='display:block'
     data-ad-client='ca-pub-5152023475480843'
     data-ad-slot='5676405307'
     data-ad-format='auto'
     data-full-width-responsive='true'></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_7'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_8'].".png' class='imgdo'></div>
            <div class='imgbox' id='lastone9'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_9'].".png' class='imgdo'></div>
          
            " ;}
             else if ($row['img_11']=="0") {
          echo "<h1 id='top'>".$row['school']." ".$row['paper_yr']." <br>".$row['papert']." paper</h1><a href='chem12first/chem121".$row['school']."".$row['paper_yr']."".$row['papert']."IOTA.pdf' class='mcqAcn' download><div class='contentbox'>Download pdf</div></a>
          <p class='numberp'> Number of pages:".$row['img_10']."</p>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_1'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_2'].".png' class='imgdo'></div>
            <div id='midad1'>
            <script async src='//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js'></script>
<!-- midad1 -->
<ins class='adsbygoogle'
     style='display:block;background-color:transparent'
     data-ad-client='ca-pub-5152023475480843'
     data-ad-slot='5983527065'
     data-ad-format='auto'
     data-full-width-responsive='true'></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_3'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_4'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_5'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_6'].".png' class='imgdo'></div>
            <div id='midad'>
    <script async src='//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js'></script>
<!-- bottomad -->
<ins class='adsbygoogle'
     style='display:block'
     data-ad-client='ca-pub-5152023475480843'
     data-ad-slot='5676405307'
     data-ad-format='auto'
     data-full-width-responsive='true'></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_7'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_8'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_9'].".png' class='imgdo'></div>
            <div class='imgbox' id='lastone10'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_10'].".png' class='imgdo'></div>
        
            " ;}
             else if ($row['img_12']=="0") {
          echo "<h1 id='top'>".$row['school']." ".$row['paper_yr']." <br>".$row['papert']." paper</h1><a href='chem12first/chem121".$row['school']."".$row['paper_yr']."".$row['papert']."IOTA.pdf' class='mcqAcn' download><div class='contentbox'>Download pdf</div></a>
          <p class='numberp'> Number of pages:".$row['img_11']."</p>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_1'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_2'].".png' class='imgdo'></div>
            <div id='midad1'>
           <script async src='//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js'></script>
<!-- midad1 -->
<ins class='adsbygoogle'
     style='display:block;background-color:transparent'
     data-ad-client='ca-pub-5152023475480843'
     data-ad-slot='5983527065'
     data-ad-format='auto'
     data-full-width-responsive='true'></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_3'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_4'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_5'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_6'].".png' class='imgdo'></div>
            <div id='midad'>
    <script async src='//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js'></script>
<!-- bottomad -->
<ins class='adsbygoogle'
     style='display:block'
     data-ad-client='ca-pub-5152023475480843'
     data-ad-slot='5676405307'
     data-ad-format='auto'
     data-full-width-responsive='true'></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_7'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_8'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_9'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_10'].".png' class='imgdo'></div>
            <div class='imgbox' id='lastone11'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_11'].".png' class='imgdo'></div>
           
            " ;}
             else if ($row['img_13']=="0") {
          echo "<h1 id='top'>".$row['school']." ".$row['paper_yr']." <br>".$row['papert']." paper</h1><a href='chem12first/chem121".$row['school']."".$row['paper_yr']."".$row['papert']."IOTA.pdf' class='mcqAcn' download><div class='contentbox'>Download pdf</div></a>
         <p class='numberp'> Number of pages:".$row['img_12']."</p>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_1'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_2'].".png' class='imgdo'></div>
            <div id='midad1'>
            <script async src='//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js'></script>
<!-- midad1 -->
<ins class='adsbygoogle'
     style='display:block;background-color:transparent'
     data-ad-client='ca-pub-5152023475480843'
     data-ad-slot='5983527065'
     data-ad-format='auto'
     data-full-width-responsive='true'></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_3'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_4'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_5'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_6'].".png' class='imgdo'></div>
            <div id='midad'>
    <script async src='//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js'></script>
<!-- bottomad -->
<ins class='adsbygoogle'
     style='display:block'
     data-ad-client='ca-pub-5152023475480843'
     data-ad-slot='5676405307'
     data-ad-format='auto'
     data-full-width-responsive='true'></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_7'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_8'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_9'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_10'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_11'].".png' class='imgdo'></div>
            <div class='imgbox' id='lastone12'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_12'].".png' class='imgdo'></div>
          
            " ;}
             else if ($row['img_14']=="0") {
          echo "<h1 id='top'>".$row['school']." ".$row['paper_yr']." <br>".$row['papert']." paper</h1><a href='chem12first/chem121".$row['school']."".$row['paper_yr']."".$row['papert']."IOTA.pdf' class='mcqAcn' download><div class='contentbox'>Download pdf</div></a>
          <p class='numberp'> Number of pages:".$row['img_13']."</p>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_1'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_2'].".png' class='imgdo'></div>
            <div id='midad1'>
            <script async src='//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js'></script>
<!-- midad1 -->
<ins class='adsbygoogle'
     style='display:block;background-color:transparent'
     data-ad-client='ca-pub-5152023475480843'
     data-ad-slot='5983527065'
     data-ad-format='auto'
     data-full-width-responsive='true'></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_3'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_4'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_5'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_6'].".png' class='imgdo'></div>
            <div id='midad'>
    <script async src='//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js'></script>
<!-- bottomad -->
<ins class='adsbygoogle'
     style='display:block'
     data-ad-client='ca-pub-5152023475480843'
     data-ad-slot='5676405307'
     data-ad-format='auto'
     data-full-width-responsive='true'></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_7'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_8'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_9'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_10'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_11'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_12'].".png' class='imgdo'></div>
            <div class='imgbox' id='lastone13'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_13'].".png' class='imgdo'></div>
            
            " ;}
             else if ($row['img_15']=="0") {
          echo "<h1 id='top'>".$row['school']." ".$row['paper_yr']." <br>".$row['papert']." paper</h1><a href='chem12first/chem121".$row['school']."".$row['paper_yr']."".$row['papert']."IOTA.pdf' class='mcqAcn' download><div class='contentbox'>Download pdf</div></a>
          <p class='numberp'> Number of pages:".$row['img_14']."</p>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_1'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_2'].".png' class='imgdo'></div>
            <div id='midad1'>
           <script async src='//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js'></script>
<!-- midad1 -->
<ins class='adsbygoogle'
     style='display:block;background-color:transparent'
     data-ad-client='ca-pub-5152023475480843'
     data-ad-slot='5983527065'
     data-ad-format='auto'
     data-full-width-responsive='true'></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_3'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_4'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_5'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_6'].".png' class='imgdo'></div>
            <div id='midad'>
    <script async src='//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js'></script>
<!-- bottomad -->
<ins class='adsbygoogle'
     style='display:block'
     data-ad-client='ca-pub-5152023475480843'
     data-ad-slot='5676405307'
     data-ad-format='auto'
     data-full-width-responsive='true'></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_7'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_8'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_9'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_10'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_11'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_12'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_13'].".png' class='imgdo'></div>
            <div class='imgbox' id='lastone14'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_14'].".png' class='imgdo'></div>
           
            " ;}
             else if ($row['img_16']=="0") {
          echo "<h1 id='top'>".$row['school']." ".$row['paper_yr']." <br>".$row['papert']." paper</h1><a href='chem12first/chem121".$row['school']."".$row['paper_yr']."".$row['papert']."IOTA.pdf' class='mcqAcn' download><div class='contentbox'>Download pdf</div></a>
         <p class='numberp'> Number of pages:".$row['img_15']."</p>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_1'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_2'].".png' class='imgdo'></div>
            <div id='midad1'>
           <script async src='//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js'></script>
<!-- midad1 -->
<ins class='adsbygoogle'
     style='display:block;background-color:transparent'
     data-ad-client='ca-pub-5152023475480843'
     data-ad-slot='5983527065'
     data-ad-format='auto'
     data-full-width-responsive='true'></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_3'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_4'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_5'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_6'].".png' class='imgdo'></div>
            <div id='midad'>
    <script async src='//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js'></script>
<!-- bottomad -->
<ins class='adsbygoogle'
     style='display:block'
     data-ad-client='ca-pub-5152023475480843'
     data-ad-slot='5676405307'
     data-ad-format='auto'
     data-full-width-responsive='true'></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_7'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_8'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_9'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_10'].".png' class='imgdo'></div>
            <div id='midad'>
   
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_11'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_12'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_13'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_14'].".png' class='imgdo'></div>
            <div class='imgbox' id='lastone15'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_15'].".png' class='imgdo'></div>
            
            " ;}
             else if ($row['img_17']=="0") {
          echo "<h1 id='top'>".$row['school']." ".$row['paper_yr']." <br>".$row['papert']." paper</h1><a href='chem12first/chem121".$row['school']."".$row['paper_yr']."".$row['papert']."IOTA.pdf' class='mcqAcn' download><div class='contentbox'>Download pdf</div></a>
         <p class='numberp'> Number of pages:".$row['img_16']."</p>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_1'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_2'].".png' class='imgdo'></div>
            <div id='midad1'>
            <script async src='//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js'></script>
<!-- midad1 -->
<ins class='adsbygoogle'
     style='display:block;background-color:transparent'
     data-ad-client='ca-pub-5152023475480843'
     data-ad-slot='5983527065'
     data-ad-format='auto'
     data-full-width-responsive='true'></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_3'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_4'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_5'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_6'].".png' class='imgdo'></div>
            <div id='midad'>
    <script async src='//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js'></script>
<!-- bottomad -->
<ins class='adsbygoogle'
     style='display:block'
     data-ad-client='ca-pub-5152023475480843'
     data-ad-slot='5676405307'
     data-ad-format='auto'
     data-full-width-responsive='true'></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_7'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_8'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_9'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_10'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_11'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_12'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_13'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_14'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_15'].".png' class='imgdo'></div>
            <div class='imgbox' id='lastone16'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_16'].".png' class='imgdo'></div>
            
            " ;}
             else if ($row['img_18']=="0") {
          echo "<h1 id='top'>".$row['school']." ".$row['paper_yr']." <br>".$row['papert']." paper</h1><a href='chem12first/chem121".$row['school']."".$row['paper_yr']."".$row['papert']."IOTA.pdf' class='mcqAcn' download><div class='contentbox'>Download pdf</div></a>
           <p class='numberp'> Number of pages:".$row['img_17']."</p>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_1'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_2'].".png' class='imgdo'></div>
            <div id='midad1'>
           <script async src='//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js'></script>
<!-- midad1 -->
<ins class='adsbygoogle'
     style='display:block;background-color:transparent'
     data-ad-client='ca-pub-5152023475480843'
     data-ad-slot='5983527065'
     data-ad-format='auto'
     data-full-width-responsive='true'></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_3'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_4'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_5'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_6'].".png' class='imgdo'></div>
            <div id='midad'>
    <script async src='//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js'></script>
<!-- bottomad -->
<ins class='adsbygoogle'
     style='display:block'
     data-ad-client='ca-pub-5152023475480843'
     data-ad-slot='5676405307'
     data-ad-format='auto'
     data-full-width-responsive='true'></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_7'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_8'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_9'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_10'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_11'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_12'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_13'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_14'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_15'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_16'].".png' class='imgdo'></div>
            <div class='imgbox' id='lastone17'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_17'].".png' class='imgdo'></div>
           
            " ;}
             else if ($row['img_19']=="0") {
          echo "<h1 id='top'>".$row['school']." ".$row['paper_yr']." <br>".$row['papert']." paper</h1><a href='chem12first/chem121".$row['school']."".$row['paper_yr']."".$row['papert']."IOTA.pdf' class='mcqAcn' download><div class='contentbox'>Download pdf</div></a>
          <p class='numberp'> Number of pages:".$row['img_18']."</p>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_1'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_2'].".png' class='imgdo'></div>
            <div id='midad1'>
            <script async src='//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js'></script>
<!-- midad1 -->
<ins class='adsbygoogle'
     style='display:block;background-color:transparent'
     data-ad-client='ca-pub-5152023475480843'
     data-ad-slot='5983527065'
     data-ad-format='auto'
     data-full-width-responsive='true'></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_3'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_4'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_5'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_6'].".png' class='imgdo'></div>
            <div id='midad'>
    <script async src='//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js'></script>
<!-- bottomad -->
<ins class='adsbygoogle'
     style='display:block'
     data-ad-client='ca-pub-5152023475480843'
     data-ad-slot='5676405307'
     data-ad-format='auto'
     data-full-width-responsive='true'></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_7'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_8'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_9'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_10'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_11'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_12'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_13'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_14'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_15'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_16'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_17'].".png' class='imgdo'></div>
            <div class='imgbox' id='lastone18'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_18'].".png' class='imgdo'></div>
         
            " ;}
             else if ($row['img_20']=="0") {
          echo "<h1 id='top'>".$row['school']." ".$row['paper_yr']." <br>".$row['papert']." paper</h1><a href='chem12first/chem121".$row['school']."".$row['paper_yr']."".$row['papert']."IOTA.pdf' class='mcqAcn' download><div class='contentbox'>Download pdf</div></a>
          <p class='numberp'> Number of pages:".$row['img_19']."</p>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_1'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_2'].".png' class='imgdo'></div>
            <div id='midad1'>
           <script async src='//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js'></script>
<!-- midad1 -->
<ins class='adsbygoogle'
     style='display:block;background-color:transparent'
     data-ad-client='ca-pub-5152023475480843'
     data-ad-slot='5983527065'
     data-ad-format='auto'
     data-full-width-responsive='true'></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_3'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_4'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_5'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_6'].".png' class='imgdo'></div>
            <div id='midad'>
    <script async src='//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js'></script>
<!-- bottomad -->
<ins class='adsbygoogle'
     style='display:block'
     data-ad-client='ca-pub-5152023475480843'
     data-ad-slot='5676405307'
     data-ad-format='auto'
     data-full-width-responsive='true'></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_7'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_8'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_9'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_10'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_11'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_12'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_13'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_14'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_15'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_16'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_17'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_18'].".png' class='imgdo'></div>
            <div class='imgbox' id='lastone19'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_19'].".png' class='imgdo'></div>
            
            " ;}
             else  {
          echo "<h1 id='top'>".$row['school']." ".$row['paper_yr']." <br>".$row['papert']." paper</h1><a href='chem12first/chem121".$row['school']."".$row['paper_yr']."".$row['papert']."IOTA.pdf' class='mcqAcn' download><div class='contentbox'>Download pdf</div></a>
          <p class='numberp'> Number of pages:".$row['img_20']."</p>
            
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_1'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_2'].".png' class='imgdo'></div>
            <div id='midad1'>
           <script async src='//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js'></script>
<!-- midad1 -->
<ins class='adsbygoogle'
     style='display:block;background-color:transparent'
     data-ad-client='ca-pub-5152023475480843'
     data-ad-slot='5983527065'
     data-ad-format='auto'
     data-full-width-responsive='true'></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_3'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_4'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_5'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_6'].".png' class='imgdo'></div>
            <div id='midad'>
    <script async src='//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js'></script>
<!-- bottomad -->
<ins class='adsbygoogle'
     style='display:block'
     data-ad-client='ca-pub-5152023475480843'
     data-ad-slot='5676405307'
     data-ad-format='auto'
     data-full-width-responsive='true'></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_7'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_8'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_9'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_10'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_11'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_12'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_13'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_14'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_15'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_16'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_17'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_18'].".png' class='imgdo'></div>
            <div class='imgbox'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_19'].".png' class='imgdo'></div>
            <div class='imgbox' id='lastone20'><img src='papers/chemistry/chem121/".$row['school']."".$row['paper_yr']."".$row['papert']."/".$row['img_20'].".png' class='imgdo'></div>
            " ;}
            
      }

    
           }
            else {
              echo "nothing";
            }}
         ?>
        
   
  <?php
 include 'footer.php';
  ?>
  