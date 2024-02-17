<?php
$add = "##";
include 'header.php';
?>
<title>iota.lk</title>
<meta name="description" content="iota.lk was developed to share A/L MCQ answers , school term test papers and govenment model papers. This site contains papers and answers from Royal college , Visakha vidyalaya, Devi Balika vidyalaya , Ananda college etc..">
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
<?php
   if (isset($_GET['up'])) {
    $upget = $_GET['up'];
     if ($upget == "empty") {
      echo "<div class='error'><p>Fill all fields</p></div>";
      
     }
    
     elseif ($upget == "uploaded") {
      echo "<div id='good'><p>Successfully uploaded</p></div>";
     }
   }
  ?>
  <h1> Upload a paper </h1>
  <div id="skip">Due to a technical difficulty you can't upload large files, if you do get an error message kindly EMAIL your files to <br> iotapapers@gmail.com </div>
  <form action="uploadimginc.php" method="POST" enctype="multipart/form-data">
  <input type="text" name="school"  class="enterbox" placeholder="School">
  <input type="text" name="paper_yr" class="enterbox" placeholder="Year">
 <select name="papert" id="paperyrbox" >

              <option value="Paper type">Paper type</option>
              <option value="MCQ">MCQ</option>
        <option value="ESSAY">ESSAY</option>
        
      
          </select>
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
  <div id="thebox">
  <input type="file" name="file1" id="file1" class="file">
  <input type="file" name="file2" id="file2" class="file">
  <input type="file" name="file3" id="file3" class="file">
  <input type="file" name="file4" id="file4" class="file">
  <input type="file" name="file5" id="file5" class="file">
  <input type="file" name="file6" id="file6" class="file">
  <input type="file" name="file7" id="file7" class="file">
  <input type="file" name="file8" id="file8" class="file">
  <input type="file" name="file9" id="file9" class="file">
  <input type="file" name="file10" id="file10" class="file">
  <input type="file" name="file11" id="file11" class="file">

 <div id="plusimg"><img src="plus.png" id="plus" onclick="plus12()"></div>
</div>
<button type="submit" name="submit" id="thebutton">UPLOAD</button>
</form>

<script>
  var uploadField = document.getElementById("file1");

uploadField.onchange = function() {
    if(this.files[0].size > 2000000){
       alert("File is too big!");
       this.value = "";
    };
};
  var uploadField = document.getElementById("file2");

uploadField.onchange = function() {
    if(this.files[0].size > 2000000){
       alert("File is too big!");
       this.value = "";
    };
};
  var uploadField = document.getElementById("file3");

uploadField.onchange = function() {
    if(this.files[0].size > 800000){
       alert("File is too big!");
       this.value = "";
    };
};
var uploadField = document.getElementById("file4");

uploadField.onchange = function() {
    if(this.files[0].size > 800000){
       alert("File is too big!");
       this.value = "";
    };
};
var uploadField = document.getElementById("file5");

uploadField.onchange = function() {
    if(this.files[0].size > 800000){
       alert("File is too big!");
       this.value = "";
    };
};
var uploadField = document.getElementById("file6");

uploadField.onchange = function() {
    if(this.files[0].size > 800000){
       alert("File is too big!");
       this.value = "";
    };
};
var uploadField = document.getElementById("file7");

uploadField.onchange = function() {
    if(this.files[0].size > 800000){
       alert("File is too big!");
       this.value = "";
    };
};
var uploadField = document.getElementById("file8");

uploadField.onchange = function() {
    if(this.files[0].size > 800000){
       alert("File is too big!");
       this.value = "";
    };
};
var uploadField = document.getElementById("file9");

uploadField.onchange = function() {
    if(this.files[0].size > 800000){
       alert("File is too big!");
       this.value = "";
    };
};
var uploadField = document.getElementById("file10");

uploadField.onchange = function() {
    if(this.files[0].size > 800000){
       alert("File is too big!");
       this.value = "";
    };
};
var uploadField = document.getElementById("file11");

uploadField.onchange = function() {
    if(this.files[0].size > 800000){
       alert("File is too big!");
       this.value = "";
    };
};
var h = 5;
function plus12() {
   if (h==5) {
    document.getElementById('file6').style.display="block";
    h=6;
  }
    else if (h==6) {
    document.getElementById('file7').style.display="block";
    h=7;
  }
    else if (h==7) {
    document.getElementById('file8').style.display="block";
    h=8;
  }
    else if (h==8) {
    document.getElementById('file9').style.display="block";
    h=9;
  }
  else if (h==9) {
    document.getElementById('file10').style.display="block";
    h=10;
  }
   else if (h==10) {
    document.getElementById('file11').style.display="block";
     document.getElementById('plus').style.display="none";
    h=10;
  }
 
  }
</script>
  
<style type="text/css">
.error{
 width:100%;
 height: 50px;
 background-color:#F25D3C;
 line-height: 50px
}
.error p{
 text-align: center;
 font-size: 15px;

 line-height: 50px
}

#good {
  width:100%;
 height: 50px;
 background-color:#66F26A;
 line-height: 50px
}
#good p {
 text-align: center;
 font-size: 15px;

 line-height: 50px
}
h1{
  text-align: center;
  font-size: 25px;
  opacity: 0.6;
  font-family: arial;
  margin-bottom: 5px;
  
}
header nav  ul a li:hover{
    background-color: #999999;
    opacity: 0.6;

}
#upa {
  background-color: #999999;
  }
#lib{
     background-color: #3F3F40 !important;
  }
  #lib:hover{
     background-color: #999999 !important;
    opacity: 0.6;
  }
#backarrow{
  
display: none !important;  
}
header nav  ul {
  margin-left: 5% !important;
  margin-right: 5% !important;
}
header nav  ul a li{
  
  margin-left: 2.5%;
  margin-right: 2.5%;
    }
    footer {
    top: 60px;
  }
  #topad{
    display:block;
   height: 100px;/*100*/
   margin-bottom:10px;
   text-align:center;
  }
  #midad{
display:none;
    width: 60%;
    height: auto !important;
    overflow:hidden;
  }
  #bottomad{
     display: block !important;/**/

   height:auto !important;
     
    
  }
  .enterbox {
  width: 80%;
  height: 30px;
  background-color:#CCCCCC;
  

  
  margin: 5px 10%;
  font-size: 20px;
  
  border-radius: 5px;
 
   text-align: center;
cursor: pointer;
}
  #skip{
      background-color: #295285;
      border-radius: 3px;
      color: white;
      line-height: 17px;
      font-size: 15px;
      width: 80%;
      height: 85px;
      position: relative;
      margin: 0 auto;
      text-align: center;
}
#thebox{
  width: 90%;
  border:2px solid grey;
  margin:0 auto;
  border-radius: 6px;
  padding-top: 20px;
  margin-top: 10px;
}
#plusimg{
  width: 27px;
  height: 27px;
  margin: 0 auto;
  margin-bottom:10px;
 
  position: relative;
}
#plus{
  width: 27px;
  height: 27px;
  cursor: pointer;
}
#paperyrbox{
  width: 80%;
  height: 40px;
  background-color:#CCCCCC;
  

  
  margin: 5px 10%;
  font-size: 20px;
  
  border-radius: 5px;
 
   text-align: center;
cursor: pointer;
}
.file {
   width: 80%;
  height: 28px;
  background-color:#CCCCCC;
  margin: 5px 10%;
  font-size: 20px;
  border-radius: 5px;
 
   text-align: center;
cursor: pointer;
}
#thebutton {
   width: 80%;
  height: 40px;
color: white;
margin: 20px 10%;
  font-size: 20px;
  
  border-radius: 5px;
 
   text-align: center;
cursor: pointer;
 background-color:#3F3F40;
   border: 1px solid grey;
    box-shadow: 2px 2px 2px 0px rgba(0.4, 0.4, 0.4, 0.4);

}
#file6{
  display: none;
}
#file7{
  display: none;
}
#file8{
  display: none;
}
#file9{
  display: none;
}
#file10{
  display: none;
}
#file11{
  display: none;
}

@media only screen and (min-width:500px){}
  @media only screen and (min-width:1000px){
  

header nav  ul {
  margin-left: 8% !important;
  margin-right: 0% !important;
}
header nav  ul a li{
  
  margin-left: 0% !important; 
 }
 
.enterbox{
  width: 40%;
 margin-left: 30%;
  
}
#paperyrbox{
  width: 40%;
 
  margin-left: 30%;
  
}

#thebutton {
   width: 60%;
  height: 65px;
margin: 20px 20%;
  font-size: 20px;
  
  border-radius: 5px;
  font-size: 20px;
 
  
}
 #skip{

      line-height: 19px;
      font-size: 17px;
    
      height: 54px;
     
  }
form {
  position: relative;
  margin: 0 auto;
  width: 80%;
  /*float: left;*/
}
#topad{
    height: 150px;
}
#bottomad {
height:auto !important;
    width: 100%;
    display:block !important;

 
 
}
#midad{
    display:none !important;/**/
height:auto;
width:100%;
 position: relative;
 margin:0 auto;
}
 @media only screen and (min-width:1200px){
 #skip{
width: 70%;
      line-height: 22px;
      font-size: 17px;
    
      height: 48px;
     
  }

     }
 }
  </style>
   <?php
 include 'footer.php';
  ?>