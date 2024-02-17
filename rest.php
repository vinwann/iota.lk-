<body>
	<header>
		<div id="headerimg"></div>
		<div id="menuimgg"><img src="menuimg.png" id="menupic" onclick="toggle()"></div>
		<style type="text/css">
			#menuimgg{
    position: fixed;
    display: block;
    top: 22px;
    right: 9px;
    /*background-image: url(menuimg.png);*/
    width: 35px !important;
    height: 35px !important;
   /* background-repeat: no-repeat;
 background-size:100% ;*/
    z-index:3000 !important;
    float: right;
    cursor: pointer;

}
#menupic{
   
    width: 35px !important;
    height: 35px !important;
     z-index:3000 !important;
}
#sidebar {
	width: 60%;
	height: 480px;
	position: fixed;
	top: 0px;
	right: 0px;
	z-index: 2500;
	background-color: #3F3F40;
	display:none;
}
#sideul{
	text-decoration: none;
	list-style: none;
	margin-top: 80px;
}
.sideli {
	width: 100%;
	height: 60px;
	margin-top: 15px;
	margin-bottom: 15px;
	line-height: 60px;
	color: white;
	font-size: 15px;
	text-align: center;
}
.sideli:hover {
	background-color: #999999 !important;
}
#updateid {
	float: left;
	width: 70%;
	/*background-color:#C9C9C9 ;*/
	background-color:#E3E3E3 ;
	display: none;
	height: 100vh;

}
#upgradeid {
	float: left;
	width: 70%;
	background-color:#E3E3E3 ;
	display: none;
	height: 100vh;

}
#webid {
	float: left;
	width: 70%;
	background-color:#E3E3E3 ;
	display: none;
	height: 100vh;

}
#feedid {
	float: left;
	width: 70%;
	background-color:#E3E3E3 ;
	display: none;
	height: 100vh;

}
#thep{
	text-align: center;
	font-size: 20px;
	line-height: 25px;
	border-bottom: 2px solid grey;
	margin-bottom: 10px;
	opacity: 0.7;
}
#updateid ul {
width: 100%;
list-style: none;
text-decoration: none;
}
#updateid ul li{
width: 100%;
border-bottom: 2px solid grey;
margin-bottom: 3px;
padding-bottom: 3px;
}
.date {
    font-size: 15px !important;
	float: left;
	width: 50%;
	text-align: center;
	opacity: 0.8;
}
.p12{
	font-size: 15px !important;
	text-align: center;
	opacity: 0.8;
}
.p22 {
    font-size: 15px !important;
	background-color:#C9C9C9 ;
	margin-top: 4px;
	color: black;
	text-align: center;
}
#th8{
	display: none;
}
#th9{
	display: none;
}
#th10{
	display: none;
}
#th11{
	display: none;
}
#th12{
	display: none;
}
#thehelp{
	text-align: center;
	font-size: 25px;
	opacity: 0.7;
	margin-top: 5px;
	line-height: 25px;
	margin-bottom: 5px;
}
.thehow{
	font-size: 12px !important;
	text-align: center;
	border:none !important;
	color: black !important;
	line-height: 15px !important;

}
#div1{
	width: 100%;
	height: 215px;
	margin-bottom: 4px;

}
#div2{
	width: 100%;
	height: 300px;
	margin-bottom: 10px;
	
}
#thehow1{
 width: 100%;

}
#thehow2{
	 width: 100%;
	
}

#img1{
background-image: url(img1.jpg);
height: 200px;
background-repeat: no-repeat;
width: 150px;
background-size:100% ;
margin: 0 auto;
}
#img2{
background-image: url(img2.jpg);
height: 300px;
background-repeat: no-repeat;
width: 150px;
background-size:100% ;
margin: 0 auto;
}
#upgradeid{
	font-size: 30px;
	text-align: center;
	line-height: 100vh;
	opacity: 0.8;
}

#msg{
width: 95%;
  height: 300px;
  background-color:#CCCCCC;
  margin: 0 auto;
  font-size: 20px;
  border-radius: 5px;
 text-align:left;
cursor: pointer;
}
#butt{
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
#cat{
	line-height: 40px;
	font-size: 20px;
	text-align: center;
	opacity: 0.7;
	margin-top: 20px;
	margin-bottom: 20px;

}
@media only screen and (min-width:1000px){
	#menuimgg{
    width: 40px !important;
    height: 40px !important;
    top: 30px;
    right:3%;
   
}
#menupic{
    width: 40px !important;
    height: 40px !important;
     
}
#sidebar {
	width: 50%;
	height: 480px;
	
}
#thehelp{
	
	font-size: 30px;
	
	line-height: 30px;
	
}
.thehow{
	font-size: 16px !important;
	
	line-height: 22px !important;
margin-bottom: 10px;
}
#div1{

margin-bottom: 20px !important;
}


}
@media only screen and (min-width:1200px){

	#sidebar {
	width: 30%;
	
}
	}
		</style>
		<nav>
			<ul>
				<?php
				 echo'<a href="'.$add.'"><div id="backarrow"></div></a>'?>
				<a href="index" ><li id="about">About</li></a>
				<a  href="library" ><li id="lib">Library</li></a>
				<a href="upload" ><li id="upa">Upload</li></a>
			</ul>
		
	</nav>
	<div id="sidebar">
		<div id="updateid">
		<p id="thep" >Updates</p>
	<ul>
			<li id="the1"><p class="date">2018/12/24</p><p class="p12">Physics</p><a href="121phytt?school=Visakha%20Vidyalaya&paper_yr=2018&papert=MCQ"><p class="p22">Visakha Vidyalaya<br>2018 12 first term <br> Mcq paper</p></a>
					
			</li>
			<li id="the2">
					<p class="date">2018/12/24</p><p class="p12">Physics</p><a href="121phytt?school=Visakha%20Vidyalaya&paper_yr=2018&papert=ESSAY"><p class="p22">Visakha Vidyalaya<br class="gap"> 2018 grade 12 first term <br class="gap"> Essay paper</p></a>
			</li>
			<li id="the3">
				<p class="date">2018/12/24</p><p class="p12">Chemistry</p><a href="121chemtt?school=Visakha%20Vidyalaya&paper_yr=2018&papert=MCQ"><p class="p22">Visakha Vidyalaya<br>2018 12 first term <br> Mcq paper</p></a>
			</li>
			<li id="the4">
				<p class="date">2018/12/24</p><p class="p12">Chemistry</p><a href="121chemtt?school=Visakha%20Vidyalaya&paper_yr=2018&papert=ESSAY"><p class="p22">Visakha Vidyalaya<br class="gap"> 2018 grade 12 first term <br class="gap"> Essay paper</p></a>
			</li>
            <li id="the5">
				<p class="date">2018/12/24</p><p class="p12">Physics</p><a href="131phytt?school=Ananda%20college&paper_yr=2018&papert=MCQ"><p class="p22">Ananda college <br class="gap"> 2018 grade 13 first term <br class="gap"> Mcq paper</p></a>
			</li>
			<li id="the6">
		      	<p class="date">2018/12/24</p><p class="p12">Chemistry</p><a href="132chem?school=Ananda%20college&paper_yr=2018"><p class="p22">Ananda college <br class="gap"> 2018 grade 13 second term <br class="gap"> Mcq answers</p></a>
			</li>
			<li id="the7">
		    	<p class="date">2018/12/12</p><p class="p12">Chemistry</p><a href="133chem?school=Visakha%20Vidyalaya&paper_yr=2018"><p class="p22">Visakha Vidyalya<br>2018 13 third term <br> Mcq answers</p></a>
			</li>
			
		</ul>
	</div>
	<div id="upgradeid">Nothing yet..</div>

	<div id="webid"><p id="thehelp" > Add Web-APP</p>
 <div id="show">
 	<p class="thehow" id="headi" >By adding a web-APP you can access this website without having to use your browser.This app only takes a small amount of space in your device.This feature is only available on chrome</p>
 	<div id="div1"><p class="thehow" id="thehow1">Click on settings</p><div id="img1"></div></div>
 	<div id="div2"><p class="thehow" id="thehow2">Click on "Add to Home screen"</p><div id="img2"></div></div>
 </div>
</div>
	<div id="feedid">
		<p id="cat">What are your thoughts?</p>
		<form method="POST" action="includes/feed.php">
			<textarea name="msg" id="msg" placeholder="Type here..... "></textarea> 
			<button type="submit" id="butt">Submit</button>
		</form>
	</div>
		<ul id="sideul">
			<a href="##"><li class="sideli" onclick="bigger1()" id="upday">Updates</li></a>
			<a href="##"><li class="sideli" onclick="bigger2()" id="ugday">Upgrades</li></a>
			<a href="##"><li class="sideli" onclick="bigger3()" id="webday">WEB-APP</li></a>
			<a href="##"><li class="sideli"  >Sitemap</li></a>
		
			<a href="##"><li class="sideli" onclick="bigger4()" id="feedday">Feedback</li></a>
		</ul>
	</div>

	<script>
		var x = 0;
		var y = 0 ;
		var z = 0;
		var l =0;
		var k = 0;
		function toggle() {
		 if (x==0) {
		 	document.getElementById('sidebar').style.display="block";
		 	x=1;
		 }
		 else {
		 	document.getElementById('sidebar').style.display="none";
		 	document.getElementById('sidebar').style.height="480px";
		 	document.getElementById('sideul').style.height="480px";
		 	document.getElementById('updateid').style.display="none";
		 	document.getElementById('upgradeid').style.display="none";
		 	document.getElementById('webid').style.display="none";
		 	document.getElementById('feedid').style.display="none";
		 	document.getElementById('upday').style.backgroundColor="#3F3F40";
		 	document.getElementById('ugday').style.backgroundColor="#3F3F40";
		 	document.getElementById('webday').style.backgroundColor="#3F3F40";
		 	document.getElementById('feedday').style.backgroundColor="#3F3F40";
		 	if (window.innerWidth<1000) {
		 		document.getElementById('sidebar').style.width="60%";
		 		document.getElementById('sideul').style.width="100%";
		 	}
		 	else if (window.innerWidth<1200) {
                    document.getElementById('sidebar').style.width="50%";
                    document.getElementById('sideul').style.width="100%";
		 	}
		 	else {
              document.getElementById('sidebar').style.width="30%";
              document.getElementById('sideul').style.width="100%";
		 	}
		 	y=0;
		 	x=0;
		 	l=0;
		 	k=0;
		 	z=0;

		 }
		}
       function bigger1(){
       	if (y==0) {
       		if (window.innerWidth<1000) {
		 		document.getElementById('sidebar').style.width="100%";
		 	}
		 	else if (window.innerWidth<1200) {
                  document.getElementById('sidebar').style.width="50%";
		 	}
		 	else {
              document.getElementById('sidebar').style.width="50%";
		 	}
		 	
		 	document.getElementById('sidebar').style.height="100vh";
		 	document.getElementById('sideul').style.width="30%";
		 	document.getElementById('sideul').style.float="right";
		 	document.getElementById('sideul').style.height="100vh";
		 	document.getElementById('updateid').style.display="block";
		 	document.getElementById('upgradeid').style.display="none";
		 	document.getElementById('webid').style.display="none";
		 	document.getElementById('feedid').style.display="none";
		 	document.getElementById('upday').style.backgroundColor="#999999";
		 	document.getElementById('ugday').style.backgroundColor="#3F3F40";
		 	document.getElementById('webday').style.backgroundColor="#3F3F40";
		 	document.getElementById('feedday').style.backgroundColor="#3F3F40";
		 	y=1;
		 	z=0;
		 	l=0;
		 	k=0;
		 }
		 else {
		 	document.getElementById('sidebar').style.height="480px";
		 	document.getElementById('sideul').style.height="480px";
		 	document.getElementById('updateid').style.display="none";
		 	document.getElementById('upgradeid').style.display="none";
		 	document.getElementById('webid').style.display="none";
		 	document.getElementById('feedid').style.display="none";
		 	document.getElementById('upday').style.backgroundColor="#3F3F40";
		 	if (window.innerWidth<1000) {
		 		document.getElementById('sidebar').style.width="60%";
		 		document.getElementById('sideul').style.width="100%";
		 	}
		 	else if (window.innerWidth<1200) {
                    document.getElementById('sidebar').style.width="50%";
                    document.getElementById('sideul').style.width="100%";
		 	}
		 	else {
              document.getElementById('sidebar').style.width="30%";
              document.getElementById('sideul').style.width="100%";
		 	}
		 	y=0;
		 }
       }
       function bigger2(){
       	if (z==0) {
		 	if (window.innerWidth<1000) {
		 		document.getElementById('sidebar').style.width="100%";
		 	}
		 	else if (window.innerWidth<1200) {
                  document.getElementById('sidebar').style.width="50%";
		 	}
		 	else {
              document.getElementById('sidebar').style.width="40%";
		 	}
		 	
		 	document.getElementById('sidebar').style.height="100vh";
		 	document.getElementById('sideul').style.width="30%";
		 	document.getElementById('sideul').style.float="right";
		 	document.getElementById('sideul').style.height="100vh";
		 	document.getElementById('updateid').style.display="none";
		 	document.getElementById('upgradeid').style.display="block";
		 	document.getElementById('webid').style.display="none";
		 	document.getElementById('feedid').style.display="none";
		 	document.getElementById('ugday').style.backgroundColor="#999999";
		 	document.getElementById('upday').style.backgroundColor="#3F3F40";
		 	document.getElementById('webday').style.backgroundColor="#3F3F40";
		 	document.getElementById('feedday').style.backgroundColor="#3F3F40";
		 	z=1;
		 	y=0;
		 	l=0;
		 	k=0;
		 }
		 else {
		 	document.getElementById('sidebar').style.height="480px";
		 	document.getElementById('sideul').style.height="480px";
		 	document.getElementById('upgradeid').style.display="none";
		 	document.getElementById('updateid').style.display="none";
		 	document.getElementById('webid').style.display="none";
		 	document.getElementById('feedid').style.display="none";
		 	document.getElementById('ugday').style.backgroundColor="#3F3F40";
		 	if (window.innerWidth<1000) {
		 		document.getElementById('sidebar').style.width="60%";
		 		document.getElementById('sideul').style.width="100%";
		 	}
		 	else if (window.innerWidth<1200) {
                    document.getElementById('sidebar').style.width="50%";
                    document.getElementById('sideul').style.width="100%";
		 	}
		 	else {
              document.getElementById('sidebar').style.width="30%";
              document.getElementById('sideul').style.width="100%";
		 	}
		 	z=0;
		 }
       }
        function bigger3(){
       	if (l==0) {
		 	if (window.innerWidth<1000) {
		 		document.getElementById('sidebar').style.width="100%";
		 	}
		 	else if (window.innerWidth<1200) {
                  document.getElementById('sidebar').style.width="50%";
		 	}
		 	else {
              document.getElementById('sidebar').style.width="40%";
		 	}
		 	
		 	document.getElementById('sidebar').style.height="100vh";
		 	document.getElementById('sideul').style.width="30%";
		 	document.getElementById('sideul').style.float="right";
		 	document.getElementById('sideul').style.height="100vh";
		 	document.getElementById('updateid').style.display="none";
		 	document.getElementById('upgradeid').style.display="none";
		 	document.getElementById('webid').style.display="block";
		 	document.getElementById('feedid').style.display="none";
		 	document.getElementById('webday').style.backgroundColor="#999999";
		 	document.getElementById('ugday').style.backgroundColor="#3F3F40";
		 	document.getElementById('upday').style.backgroundColor="#3F3F40";
		 	document.getElementById('feedday').style.backgroundColor="#3F3F40";
		 	l=1;
		 	z=0;
		 	y=0;
		 	k=0;
		 }
		 else {
		 	document.getElementById('sidebar').style.height="480px";
		 	document.getElementById('sideul').style.height="480px";
		 	document.getElementById('updateid').style.display="none";
		 	document.getElementById('upgradeid').style.display="none";
		 	document.getElementById('webid').style.display="none";
		 	document.getElementById('feedid').style.display="none";
		 	document.getElementById('webday').style.backgroundColor="#3F3F40";
		 	if (window.innerWidth<1000) {
		 		document.getElementById('sidebar').style.width="60%";
		 		document.getElementById('sideul').style.width="100%";
		 	}
		 	else if (window.innerWidth<1200) {
                    document.getElementById('sidebar').style.width="50%";
                    document.getElementById('sideul').style.width="100%";
		 	}
		 	else {
              document.getElementById('sidebar').style.width="30%";
              document.getElementById('sideul').style.width="100%";
		 	}
		 	l=0;
		 }
       }
       function bigger4(){
       	if (k==0) {
		 	if (window.innerWidth<1000) {
		 		document.getElementById('sidebar').style.width="100%";
		 	}
		 	else if (window.innerWidth<1200) {
                  document.getElementById('sidebar').style.width="40%";
		 	}
		 	else {
              document.getElementById('sidebar').style.width="40%";
		 	}
		 	
		 	document.getElementById('sidebar').style.height="100vh";
		 	document.getElementById('sideul').style.width="30%";
		 	document.getElementById('sideul').style.float="right";
		 	document.getElementById('sideul').style.height="100vh";
		 	document.getElementById('updateid').style.display="none";
		 	document.getElementById('feedid').style.display="block";
		 	document.getElementById('webid').style.display="none";
		 	document.getElementById('upgradeid').style.display="none";
		 	document.getElementById('feedday').style.backgroundColor="#999999";
		 	document.getElementById('upday').style.backgroundColor="#3F3F40";
		 	document.getElementById('webday').style.backgroundColor="#3F3F40";
		 	document.getElementById('ugday').style.backgroundColor="#3F3F40";
		 		k=1;
		 	z=0;
		 	y=0;
		 	l=0;
		 }
		 else {
		 	document.getElementById('sidebar').style.height="480px";
		 	document.getElementById('sideul').style.height="480px";
		 	document.getElementById('upgradeid').style.display="none";
		 	document.getElementById('updateid').style.display="none";
		 	document.getElementById('webid').style.display="none";
		 	document.getElementById('feedid').style.display="none";
		 	document.getElementById('feedday').style.backgroundColor="#3F3F40";
		 	if (window.innerWidth<1000) {
		 		document.getElementById('sidebar').style.width="60%";
		 		document.getElementById('sideul').style.width="100%";
		 	}
		 	else if (window.innerWidth<1200) {
                    document.getElementById('sidebar').style.width="50%";
                    document.getElementById('sideul').style.width="100%";
		 	}
		 	else {
              document.getElementById('sidebar').style.width="30%";
              document.getElementById('sideul').style.width="100%";
		 	}
		 	k=0;
		 }
		 
		
		
		 
		 
		 
		 
       }
	</script>
	</header>
	<script src="main.js"></script>
	<div id="mainCon">
	    
	    <div id = "topad">
	 	  <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- topad5 -->
<ins class="adsbygoogle"
     style="display:inline-block;width:320px;height:100px;background-color:transparent"
     data-ad-client="ca-pub-5152023475480843"
     data-ad-slot="3687169232"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
	    </div>	
	     <div id = "topad1">
	         <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- topad4 -->
<ins class="adsbygoogle"
     style="display:inline-block;width:970px;height:90px;background-color:transparent"
     data-ad-client="ca-pub-5152023475480843"
     data-ad-slot="8311265361"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
	     </div>
		