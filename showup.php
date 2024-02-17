<style type="text/css">

		#newone {
			float: left;
			height: 40px;
			width: 15%;
			z-index: 2000 !important;
			position: relative;
			left: 20px;
			margin-top: 20px;
			border-radius: 6px;
			background-color:#3F3F40 ;
		 
line-height: 40px;

color:white;


		}
		#noteone {
			float: right;
			height: 40px ;
			width: 15%;
			z-index: 2000 !important;
			position: relative;
			right: 20px !important;
			margin-top: 20px;
			border-radius: 6px;
			background-color:#3F3F40 ;
			
   

line-height: 40px;
color: white;
}
#newdiv {
			cursor: pointer;
			height: 40px;
			width: 100%;
			border-radius: 6px;
			
			position: relative;
			
			background-color:#3F3F40 ;
		 -webkit-animation: example 4s infinite;
			 animation: example 4s infinite;

text-align: center;
color:white;


		}
		#newpapers{
			width: 100%;
			line-height: 20px;
			text-align: center;
			display: none;
			height: 100px;
			z-index: 3000 !important;
			list-style: none;

		}
			#newpapers li{
			width: 100%;
			line-height: 20px;
			text-align: center;
			font-size: 12px;
			color: white;
			
		}
		#notediv {
		
			height: 40px ;
			width: 100%;
			
			position: relative;
			
			border-radius: 6px;
			background-color:#3F3F40 ;
			 -webkit-animation: example 4s infinite;
			 animation: example 4s infinite;
   


text-align: center;
color: white;
}
#notep{
	display: block;
}
#request{
	font-size: 12px;
	color: white;
	text-align: center;
	display: none;
	line-height: 20px !important;
}

@-webkit-keyframes example {
  33%   {background-color: #3F3F40;}
  66%  {background-color: #999999;}
  100% {background-color:#3F3F40;}
}

 
@keyframes example {
  33%   {background-color:#3F3F40;}
  66%  {background-color: #999999;}
  100% {background-color: #3F3F40;}
}

*@-webkit-keyframes exampledoh {
  33% {color:white;}
  66%  {color: rgb(56,56,56);}
  100% {color:white;}
}


@keyframes exampledoh {
  33%{color:white ;}
  66% {color: rgb(56,56,56) ;}
  100% {color:white;}
}
#notep,#newp{

	 -webkit-animation: exampledoh 4s infinite;
			 animation: exampledoh 4s infinite;
}
@media only screen and (min-width:1000px){
	#newone {
			height: 40px;
			width: 8%;
			z-index: 3000;
			
			left: 150px;
			
		
			
			
		



		}
		#noteone {

			height: 40px ;
			width: 8%;
			z-index: 3000;
			
			right: 150px !important;
			
			
			
			
			 
  

}
@media only screen and (min-width:1200px){ 
    
    	#newone {

			
		
				left: 300px;
			
		



		}
		#noteone {

			right: 300px !important;
			}
}
	</style>
<script type="text/javascript">
	var x = 0;
	var y = 0;
	function newpop() {
		if (x==0) {
			if (window.innerWidth<1000) {
				 document.getElementById('newone').style.width="70%";
				 document.getElementById('noteone').style.width="15%";
				   
			}
			else {
                  document.getElementById('newone').style.width="30%";
				 document.getElementById('noteone').style.width="8%";
				  
			}
          document.getElementById('newone').style.marginTop="0px";
        document.getElementById('newone').style.height="80px";
          document.getElementById('newdiv').style.display="none";
           document.getElementById('wenna').style.display="none";
           document.getElementById('newpapers').style.display="block";
           
           
			 document.getElementById('notediv').style.width="100%";
			 document.getElementById('notediv').style.display="block";
			document.getElementById('request').style.display="none";
			  document.getElementById('noteone').style.height="40px";
			 y=0;
          x=1;
		}
		else {
			if (window.innerWidth<1000) {
				
				 document.getElementById('newone').style.width="15%";
			}
			else {
                
				 document.getElementById('newone').style.width="8%";
				 
			}
			 document.getElementById('newone').style.marginTop="20px";
			 document.getElementById('newdiv').style.width="100%";
			 document.getElementById('newdiv').style.display="block";
			 document.getElementById('wenna').style.display="block";
			  document.getElementById('newpapers').style.display="none";
			
			   document.getElementById('newone').style.height="40px";
			 x=0;
		}
	}
  	function notepop() {
		if (y==0) {
			if (window.innerWidth<1000) {
				 document.getElementById('noteone').style.width="60%";
				 document.getElementById('newone').style.width="15%";
				 
				   
			}
			else {
                  document.getElementById('noteone').style.width="30%";
				 document.getElementById('newone').style.width="8%";
				 
				
			}
         document.getElementById('newone').style.marginTop="20px";
          document.getElementById('noteone').style.height="50px";
        
          document.getElementById('notediv').style.display="none";
           document.getElementById('wenna').style.display="none";
        
           
			 document.getElementById('newdiv').style.width="100%";
			 document.getElementById('newdiv').style.display="block";
			
			  document.getElementById('newpapers').style.display="none";
			 
            document.getElementById('request').style.display="block";
           
			   document.getElementById('newone').style.height="40px";
          y=1;
           x=0;
		}
		else {
			if (window.innerWidth<1000) {
				
				 document.getElementById('noteone').style.width="15%";
			}
			else {
                
				 document.getElementById('noteone').style.width="8%";
				 
			}
			
			 document.getElementById('notediv').style.width="100%";
			 document.getElementById('notediv').style.display="block";
			 document.getElementById('wenna').style.display="block";
			 document.getElementById('request').style.display="none";
			
			   document.getElementById('noteone').style.height="40px";
			 y=0;
		}
	}
</script>