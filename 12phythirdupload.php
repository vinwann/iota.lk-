<?php
$add = "12phythird";
include 'header.php';
include_once 'includes/dbh.php';
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
include 'stylecode/uploadpgstyle.php'
?>
	
	<?php
   if (isset($_GET['up'])) {
   	$upget = $_GET['up'];
   	 if ($upget == "empty") {
   	 	echo "<div class='error' ><p>Enter answers</p></div>";
   	 	
   	 }
   	 elseif ($upget == "emptyfelid") {
   	 	echo "<div class='error' ><p>A field is empty</p></div>";
   	 
   	 }
   	 elseif ($upget == "invafelid") {
   	 	echo "<div class='error' ><p>You can not use that name</p></div>";
   	 
   	 }
   	 elseif ($upget == "success") {
   	 	echo "<div id='good'><p>Answers were uploaded</p></div>";
   	 }
   }
	?>

	<form method="POST" action="includes/12phythirdupload_inc.php">

		<?php
         if (isset($_GET['school'] ,$_GET['paper_yr'] , $_GET['author'])) {
            $school = $_GET['school'];
            $paper_yr = $_GET['paper_yr'];
            $author  = $_GET['author'];
             $mcq_1 = $_GET['mcq_1'];
  $mcq_2 = $_GET['mcq_2'];
  $mcq_3 = $_GET['mcq_3'];
  $mcq_4 = $_GET['mcq_4'];
  $mcq_5 = $_GET['mcq_5'];
  $mcq_6 = $_GET['mcq_6'];
  $mcq_7 = $_GET['mcq_7'];
  $mcq_8 = $_GET['mcq_8'];
  $mcq_9 = $_GET['mcq_9'];
  $mcq_10 = $_GET['mcq_10'];
  $mcq_11 = $_GET['mcq_11'];
  $mcq_12 = $_GET['mcq_12'];
  $mcq_13 = $_GET['mcq_13'];
  $mcq_14 = $_GET['mcq_14'];
  $mcq_15 = $_GET['mcq_15'];
  $mcq_16 = $_GET['mcq_16'];
  $mcq_17 = $_GET['mcq_17'];
  $mcq_18 = $_GET['mcq_18'];
  $mcq_19 = $_GET['mcq_19'];
  $mcq_20 = $_GET['mcq_20'];
  $mcq_21 = $_GET['mcq_21'];
  $mcq_22 = $_GET['mcq_22'];
  $mcq_23 = $_GET['mcq_23'];
  $mcq_24 = $_GET['mcq_24'];
  $mcq_25 = $_GET['mcq_25'];
  $mcq_26 = $_GET['mcq_26'];
  $mcq_27 = $_GET['mcq_27'];
  $mcq_28 = $_GET['mcq_28'];
  $mcq_29 = $_GET['mcq_29'];
  $mcq_30 = $_GET['mcq_30'];
  $mcq_31 = $_GET['mcq_31'];
  $mcq_32 = $_GET['mcq_32'];
  $mcq_33 = $_GET['mcq_33'];
  $mcq_34 = $_GET['mcq_34'];
  $mcq_35 = $_GET['mcq_35'];
  $mcq_36 = $_GET['mcq_36'];
  $mcq_37 = $_GET['mcq_37'];
  $mcq_38 = $_GET['mcq_38'];
  $mcq_39 = $_GET['mcq_39'];
  $mcq_40 = $_GET['mcq_40'];
  $mcq_41 = $_GET['mcq_41'];
  $mcq_42 = $_GET['mcq_42'];
  $mcq_43 = $_GET['mcq_43'];
  $mcq_44 = $_GET['mcq_44'];
  $mcq_45 = $_GET['mcq_45'];
  $mcq_46 = $_GET['mcq_46'];
  $mcq_47 = $_GET['mcq_47'];
  $mcq_48 = $_GET['mcq_48'];
  $mcq_49 = $_GET['mcq_49'];
  $mcq_50 = $_GET['mcq_50'];
  
         	echo '<input type="text" name="school" value = "'.$school.'" id="schoolbox">
          <input type="text" name="paper_yr" value="'.$paper_yr.'" id="paperyrbox">
         	
                 
               <input type="text" name="author" value = "'.$author.'" id="authorbox">
	             <div id="midad">
	            <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- midad2 -->
<ins class="adsbygoogle"
     style="display:block;background-color:transparent"
     data-ad-client="ca-pub-5152023475480843"
     data-ad-slot="7044439243"
     data-ad-format="link"
     data-full-width-responsive="true"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script></div>
               
     <table>
			<tr>
				<th>question</th>
				<th>answer</th>
			</tr>
			<tr>
				<td>1</td>
				<td>
		        <input type="text" name="mcq_1" value="'.$mcq_1.'" class="afterBox" readonly>
		         </td>
			</tr>
			<tr>
				<td>2</td>
				<td> 
			    <input type="text" name="mcq_2" value="'.$mcq_2.'" class="afterBox" readonly>
		        </td>
			</tr>
			<tr>
				<td>3</td>
				<td> 
		        <input type="text" name="mcq_3" value="'.$mcq_3.'" class="afterBox" readonly>
		        </td>
			</tr>
			<tr>
				<td>4</td>
				<td> 
		        <input type="text" name="mcq_4" value="'.$mcq_4.'" class="afterBox" readonly>
		        </td>
			</tr>
		    <tr>
				<td>5</td>
				<td> 
		        <input type="text" name="mcq_5" value="'.$mcq_5.'" class="afterBox" readonly>
		        </td>
			</tr>
			<tr>
				<td>6</td>
				<td> 
		        <input type="text" name="mcq_6" value="'.$mcq_6.'" class="afterBox" readonly>
		       </td>
			</tr>
			<tr>
				<td>7</td>
				<td> 
                <input type="text" name="mcq_7" value="'.$mcq_7.'" class="afterBox" readonly>
                </td>
			</tr>
			<tr>
				<td>8</td>
				<td> 
                <input type="text" name="mcq_8" value="'.$mcq_8.'" class="afterBox" readonly>
                </td>
			</tr>
            <tr>
				<td>9</td>
				<td> 
                <input type="text" name="mcq_9" value="'.$mcq_9.'" class="afterBox" readonly>
                </td>
			</tr>
            <tr>
				<td>10</td>
				<td> 
                <input type="text" name="mcq_10" value="'.$mcq_10.'" class="afterBox" readonly>
                </td>
			</tr>
			 <tr>
                <td>11</td>
                <td> 
                <input type="text" name="mcq_11" value="'.$mcq_11.'" class="afterBox" readonly>
                </td>
            </tr>
                    <tr>
                <td>12</td>
                <td> 
                <input type="text" name="mcq_12" value="'.$mcq_12.'" class="afterBox" readonly>
                </td>
            </tr>
                    <tr>
                <td>13</td>
                <td>
                <input type="text" name="mcq_13" value="'.$mcq_13.'" class="afterBox" readonly>
                </td>
            </tr>
                    <tr>
                <td>14</td>
                <td>
                <input type="text" name="mcq_14" value="'.$mcq_14.'" class="afterBox" readonly>
                </td>
            </tr>
                    <tr>
                <td>15</td>
                <td>
                <input type="text" name="mcq_15" value="'.$mcq_15.'" class="afterBox" readonly>
                </td>
            </tr>
                    <tr>
                <td>16</td>
                <td> 
                <input type="text" name="mcq_16" value="'.$mcq_16.'" class="afterBox" readonly>
                </td>
            </tr>
                    <tr>
                <td>17</td>
                <td> 
                <input type="text" name="mcq_17" value="'.$mcq_17.'" class="afterBox" readonly>
                </td>
            </tr>
                    <tr>
                <td>18</td>
                <td> 
                <input type="text" name="mcq_18" value="'.$mcq_18.'" class="afterBox" readonly>
                </td>
            </tr>
                    <tr>
                <td>19</td>
                <td> 
                <input type="text" name="mcq_19" value="'.$mcq_19.'" class="afterBox" readonly>
                </td>
            </tr>
                    <tr>
                <td>20</td>
                <td> 
                <input type="text" name="mcq_20" value="'.$mcq_20.'" class="afterBox" readonly>
                </td>
            </tr>
                    <tr>
                <td>21</td>
                <td> 
                <input type="text" name="mcq_21" value="'.$mcq_21.'" class="afterBox" readonly>
                </td>
            </tr>
                    <tr>
                <td>22</td>
                <td> 
                <input type="text" name="mcq_22" value="'.$mcq_22.'" class="afterBox" readonly>
                </td>
            </tr>
                    <tr>
                <td>23</td>
                <td> 
                <input type="text" name="mcq_23" value="'.$mcq_23.'" class="afterBox" readonly>
                </td>
            </tr>
                    <tr>
                <td>24</td>
                <td> 
                <input type="text" name="mcq_24" value="'.$mcq_24.'" class="afterBox" readonly>
                </td>
            </tr>
                    <tr>
                <td>25</td>
                <td> 
                <input type="text" name="mcq_25" value="'.$mcq_25.'" class="afterBox" readonly>
                </td>
            </tr>
                    <tr>
                <td>26</td>
                <td> 
                <input type="text" name="mcq_26" value="'.$mcq_26.'" class="afterBox" readonly>
                </td>
            </tr>
                    <tr>
                <td>27</td>
                <td> 
                <input type="text" name="mcq_27" value="'.$mcq_27.'" class="afterBox" readonly>
                </td>
            </tr>
                    <tr>
                <td>28</td>
                <td> 
                <input type="text" name="mcq_28" value="'.$mcq_28.'" class="afterBox" readonly>
                </td>
            </tr>
                    <tr>
                <td>29</td>
                <td> 
                <input type="text" name="mcq_29" value="'.$mcq_29.'" class="afterBox" readonly>
                </td>
            </tr>
                    <tr>
                <td>30</td>
                <td>
                <input type="text" name="mcq_30" value="'.$mcq_30.'" class="afterBox" readonly>
                </td>
            </tr>
                    <tr>
                <td>31</td>
                <td> 
                <input type="text" name="mcq_31" value="'.$mcq_31.'" class="afterBox" readonly>
                </td>
            </tr>
                    <tr>
                <td>32</td>
                <td>
                <input type="text" name="mcq_32" value="'.$mcq_32.'" class="afterBox" readonly>
                </td>
            </tr>
                    <tr>
                <td>33</td>
                <td> 
                <input type="text" name="mcq_33" value="'.$mcq_33.'" class="afterBox" readonly>
                </td>
            </tr>
                    <tr>
                <td>34</td>
                <td>
                <input type="text" name="mcq_34" value="'.$mcq_34.'" class="afterBox" readonly>
                </td>
            </tr>
                    <tr>
                <td>35</td>
                <td> 
                <input type="text" name="mcq_35" value="'.$mcq_35.'" class="afterBox" readonly>
                </td>
            </tr>
                    <tr>
                <td>36</td>
                <td> 
                <input type="text" name="mcq_36" value="'.$mcq_36.'" class="afterBox" readonly>
                </td>
            </tr>
            <tr>
                <td>37</td>
                <td>
                <input type="text" name="mcq_37" value="'.$mcq_37.'" class="afterBox" readonly>
                </td>
            </tr>
                    <tr>
                <td>38</td>
                <td> 
                <input type="text" name="mcq_38" value="'.$mcq_38.'" class="afterBox" readonly>
                </td>
            </tr>
                    <tr>
                <td>39</td>
                <td> 
                <input type="text" name="mcq_39" value="'.$mcq_39.'" class="afterBox" readonly>
                </td>
            </tr>
            <tr>
                <td>40</td>
                <td> 
                <input type="text" name="mcq_40" value="'.$mcq_40.'" class="afterBox" readonly>
                </td>
            </tr>
            <tr>
                <td>41</td>
                <td>
                <input type="text" name="mcq_41" value="'.$mcq_41.'" class="afterBox" readonly>
                </td>
            </tr>
            <tr>
                <td>42</td>
                <td>
                <input type="text" name="mcq_42" value="'.$mcq_42.'" class="afterBox" readonly>
                </td>
            </tr>
                    <tr>
                <td>43</td>
                <td> 
                <input type="text" name="mcq_43" value="'.$mcq_43.'" class="afterBox" readonly>
                </td>
            </tr>
                    <tr>
                <td>44</td>
                <td> 
                <input type="text" name="mcq_44" value="'.$mcq_44.'" class="afterBox" readonly>
                </td>
            </tr>
                    <tr>
                <td>45</td>
                <td>
                <input type="text" name="mcq_45" value="'.$mcq_45.'" class="afterBox" readonly>
                </td>
            </tr>
                    <tr>
                <td>46</td>
                <td>
                <input type="text" name="mcq_46" value="'.$mcq_46.'" class="afterBox" readonly>
                </td>
            </tr>
                    <tr>
                <td>47</td>
                <td>  
                <input type="text" name="mcq_47" value="'.$mcq_47.'" class="afterBox" readonly>
                </td>
            </tr>
                    <tr>
                <td>48</td>
                <td> <input type="text" name="mcq_48" value="'.$mcq_48.'" class="afterBox" readonly>
                 </td>
            </tr>
                    <tr>
                <td>49</td>
                <td>
                <input type="text" name="mcq_49" value="'.$mcq_49.'" class="afterBox" readonly>
                </td>
            </tr>
                
             
                    <tr>
                <td>50</td>
                <td> 
                <input type="text" name="mcq_50" value="'.$mcq_50.'" class="afterBox" readonly>
                </td>
            </tr>
					
		</table>

	          
	            ';
         }
         else {
         	echo '
<input type="text" name="school" placeholder="Schoolname" id="schoolbox">

		<select name="paper_yr" id="paperyrbox" >

	            <option value="Enteryear">Select year</option>
	            <option value="2019">2019</option>
				<option value="2018">2018</option>
				<option value="2017">2017</option>
				<option value="2016">2016</option>
				<option value="2015">2015</option>
				<option value="2014">2014</option>
				<option value="2013">2013</option>
				<option value="2012">2012</option>
			
	        </select>
		

<input type="text" name="author" placeholder="Name" id="authorbox">

 <div id="midad">
	            <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- midad2 -->
<ins class="adsbygoogle"
     style="display:block;background-color:transparent"
     data-ad-client="ca-pub-5152023475480843"
     data-ad-slot="7044439243"
     data-ad-format="link"
     data-full-width-responsive="true"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script></div>
     <table>
			<tr>
				<th>Question</th>
				<th>Answer</th>
			</tr>
			<tr>
				<td>1</td>
				<td>
        <input type="hidden" name="mcq_1" id="mcq_1">
		      <input type="button" id="1" value="1" onclick="colorchange1(1,1);" class="checkBox" style="background:black">
		      <input type="button" id="2" value="2" onclick="colorchange1(2,2);" class="checkBox" style="background:black">
		      <input type="button" id="3" value="3" onclick="colorchange1(3,3);" class="checkBox" style="background:black">
		      <input type="button" id="4" value="4" onclick="colorchange1(4,4);" class="checkBox" style="background:black">
		      <input type="button" id="5" value="5" onclick="colorchange1(5,5);" class="checkBox" style="background:black">
           </td>
			</tr>
			<tr>
				<td>2</td>
				<td>
        <input type="hidden" name="mcq_2" id="mcq_2"> 
          <input type="button" id="6" value="1" onclick="colorchange2(6,1);" class="checkBox" style="background:black" >
		      <input type="button" id="7" value="2" onclick="colorchange2(7,2);" class="checkBox" style="background:black">
		      <input type="button" id="8" value="3" onclick="colorchange2(8,3);" class="checkBox" style="background:black">
		      <input type="button" id="9" value="4" onclick="colorchange2(9,4);" class="checkBox" style="background:black">
		      <input type="button" id="10" value="5" onclick="colorchange2(10,5);" class="checkBox" style="background:black">
         </td>
			</tr>
			<tr>
				<td>3</td>
				<td>
        <input type="hidden" name="mcq_3" id="mcq_3">
		      <input type="button" id="11" value="1" onclick="colorchange3(11,1);" class="checkBox" style="background:black">
		      <input type="button" id="12" value="2" onclick="colorchange3(12,2);" class="checkBox" style="background:black">
		      <input type="button" id="13" value="3" onclick="colorchange3(13,3);" class="checkBox" style="background:black">
		      <input type="button" id="14" value="4" onclick="colorchange3(14,4);" class="checkBox" style="background:black">
		      <input type="button" id="15" value="5" onclick="colorchange3(15,5);" class="checkBox" style="background:black">
         </td>
			</tr>
			<tr>
				<td>4</td>
				<td> 
        <input type="hidden" name="mcq_4" id="mcq_4">
		      <input type="button" id="16" value="1" onclick="colorchange4(16,1);" class="checkBox" style="background:black">
		      <input type="button" id="17" value="2" onclick="colorchange4(17,2);" class="checkBox" style="background:black">
		      <input type="button" id="18" value="3" onclick="colorchange4(18,3);" class="checkBox" style="background:black">
		      <input type="button" id="19" value="4" onclick="colorchange4(19,4);" class="checkBox" style="background:black">
		      <input type="button" id="20" value="5" onclick="colorchange4(20,5);" class="checkBox" style="background:black">
		    	</td>
			</tr>
		    <tr>
				<td>5</td>
				<td> 
        <input type="hidden" name="mcq_5" id="mcq_5">
		      <input type="button" id="21" value="1" onclick="colorchange5(21,1);" class="checkBox" style="background:black">
		      <input type="button" id="22" value="2" onclick="colorchange5(22,2);" class="checkBox" style="background:black">
		      <input type="button" id="23" value="3" onclick="colorchange5(23,3);" class="checkBox" style="background:black">
		      <input type="button" id="24" value="4" onclick="colorchange5(24,4);" class="checkBox" style="background:black">
		      <input type="button" id="25" value="5" onclick="colorchange5(25,5);" class="checkBox" style="background:black">
          </td>
			</tr>
			<tr>
				<td>6</td>
				<td>
        <input type="hidden" name="mcq_6" id="mcq_6"> 
          <input type="button" id="26" value="1" onclick="colorchange6(26,1);" class="checkBox" style="background:black">
		      <input type="button" id="27" value="2" onclick="colorchange6(27,2);" class="checkBox" style="background:black">
		      <input type="button" id="28" value="3" onclick="colorchange6(28,3);" class="checkBox" style="background:black">
		      <input type="button" id="29" value="4" onclick="colorchange6(29,4);" class="checkBox" style="background:black">
		      <input type="button" id="30" value="5" onclick="colorchange6(30,5);" class="checkBox" style="background:black">
		      </td>
			</tr>
			<tr>
				<td>7</td>
				<td> 
        <input type="hidden" name="mcq_7" id="mcq_7">
			    <input type="button" id="31" value="1" onclick="colorchange7(31,1);" class="checkBox" style="background:black">
		      <input type="button" id="32" value="2" onclick="colorchange7(32,2);" class="checkBox" style="background:black">
		      <input type="button" id="33" value="3" onclick="colorchange7(33,3);" class="checkBox" style="background:black">
		      <input type="button" id="34" value="4" onclick="colorchange7(34,4);" class="checkBox" style="background:black">
		      <input type="button" id="35" value="5" onclick="colorchange7(35,5);" class="checkBox" style="background:black">
		      </td>
			</tr>
			<tr>
				<td>8</td>
				<td> 
        <input type="hidden" name="mcq_8" id="mcq_8">
			    <input type="button" id="36" value="1" onclick="colorchange8(36,1);" class="checkBox" style="background:black">
		      <input type="button" id="37" value="2" onclick="colorchange8(37,2);" class="checkBox" style="background:black">
		      <input type="button" id="38" value="3" onclick="colorchange8(38,3);" class="checkBox" style="background:black">
		      <input type="button" id="39" value="4" onclick="colorchange8(39,4);" class="checkBox" style="background:black" >
		      <input type="button" id="40" value="5" onclick="colorchange8(40,5);" class="checkBox" style="background:black">
		      </td>
			</tr>
            <tr>
				<td>9</td>
				<td> 
        <input type="hidden" name="mcq_9" id="mcq_9">
			    <input type="button" id="41" value="1" onclick="colorchange9(41,1);" class="checkBox" style="background:black">
		      <input type="button" id="42" value="2" onclick="colorchange9(42,2);" class="checkBox" style="background:black">
		      <input type="button" id="43" value="3" onclick="colorchange9(43,3);" class="checkBox" style="background:black">
		      <input type="button" id="44" value="4" onclick="colorchange9(44,4);" class="checkBox" style="background:black">
		      <input type="button" id="45" value="5" onclick="colorchange9(45,5);" class="checkBox" style="background:black">
		      </td>
			</tr>
            <tr>
				<td>10</td>
				<td> 
        <input type="hidden" name="mcq_10" id="mcq_10">
			    <input type="button" id="46" value="1" onclick="colorchange10(46,1);" class="checkBox" style="background:black">
		      <input type="button" id="47" value="2" onclick="colorchange10(47,2);" class="checkBox" style="background:black">
		      <input type="button" id="48" value="3" onclick="colorchange10(48,3);" class="checkBox" style="background:black">
		      <input type="button" id="49" value="4" onclick="colorchange10(49,4);" class="checkBox" style="background:black">
		      <input type="button" id="50" value="5" onclick="colorchange10(50,5);" class="checkBox" style="background:black">
		      </td>
			</tr>
			 <tr>
                <td>11</td>
                <td> 
                <input type="hidden" name="mcq_11" id="mcq_11">
              <input type="button" id="51" value="1" onclick="colorchange11(51,1);" class="checkBox" style="background:black">
              <input type="button" id="52" value="2" onclick="colorchange11(52,2);" class="checkBox" style="background:black">
              <input type="button" id="53" value="3" onclick="colorchange11(53,3);" class="checkBox" style="background:black">
              <input type="button" id="54" value="4" onclick="colorchange11(54,4);" class="checkBox" style="background:black">
              <input type="button" id="55" value="5" onclick="colorchange11(55,5);" class="checkBox" style="background:black">
              </td>
            </tr>
                    <tr>
                <td>12</td>
                <td> 
                <input type="hidden" name="mcq_12" id="mcq_12">
              <input type="button" id="56" value="1" onclick="colorchange12(56,1);" class="checkBox" style="background:black">
              <input type="button" id="57" value="2" onclick="colorchange12(57,2);" class="checkBox" style="background:black">
              <input type="button" id="58" value="3" onclick="colorchange12(58,3);" class="checkBox" style="background:black">
              <input type="button" id="59" value="4" onclick="colorchange12(59,4);" class="checkBox" style="background:black">
              <input type="button" id="60" value="5" onclick="colorchange12(60,5);" class="checkBox" style="background:black">
              </td>
            </tr>
                    <tr>
                <td>13</td>
                <td> 
                <input type="hidden" name="mcq_13" id="mcq_13">
              <input type="button" id="61" value="1" onclick="colorchange13(61,1);" class="checkBox" style="background:black">
              <input type="button" id="62" value="2" onclick="colorchange13(62,2);" class="checkBox" style="background:black">
              <input type="button" id="63" value="3" onclick="colorchange13(63,3);" class="checkBox" style="background:black">
              <input type="button" id="64" value="4" onclick="colorchange13(64,4);" class="checkBox" style="background:black">
              <input type="button" id="65" value="5" onclick="colorchange13(65,5);" class="checkBox" style="background:black">
              </td>
            </tr>
                    <tr>
                <td>14</td>
                <td>
                <input type="hidden" name="mcq_14" id="mcq_14">
              <input type="button" id="66" value="1" onclick="colorchange14(66,1);" class="checkBox" style="background:black">
              <input type="button" id="67" value="2" onclick="colorchange14(67,2);" class="checkBox" style="background:black">
              <input type="button" id="68" value="3" onclick="colorchange14(68,3);" class="checkBox" style="background:black">
              <input type="button" id="69" value="4" onclick="colorchange14(69,4);" class="checkBox" style="background:black">
              <input type="button" id="70" value="5" onclick="colorchange14(70,5);" class="checkBox" style="background:black">
              </td>
            </tr>
                    <tr>
                <td>15</td>
                <td>
                <input type="hidden" name="mcq_15" id="mcq_15">
              <input type="button" id="71" value="1" onclick="colorchange15(71,1);" class="checkBox" style="background:black">
              <input type="button" id="72" value="2" onclick="colorchange15(72,2);" class="checkBox" style="background:black">
              <input type="button" id="73" value="3" onclick="colorchange15(73,3);" class="checkBox" style="background:black">
              <input type="button" id="74" value="4" onclick="colorchange15(74,4);" class="checkBox" style="background:black">
              <input type="button" id="75" value="5" onclick="colorchange15(75,5);" class="checkBox" style="background:black">
              </td>
            </tr>
                    <tr>
                <td>16</td>
                <td> 
                <input type="hidden" name="mcq_16" id="mcq_16">
              <input type="button" id="76" value="1" onclick="colorchange16(76,1);" class="checkBox" style="background:black">
              <input type="button" id="77" value="2" onclick="colorchange16(77,2);" class="checkBox" style="background:black">
              <input type="button" id="78" value="3" onclick="colorchange16(78,3);" class="checkBox" style="background:black">
              <input type="button" id="79" value="4" onclick="colorchange16(79,4);" class="checkBox" style="background:black">
              <input type="button" id="80" value="5" onclick="colorchange16(80,5);" class="checkBox" style="background:black">
              </td>
            </tr>
                    <tr>
                <td>17</td>
                <td> 
                <input type="hidden" name="mcq_17" id="mcq_17">
              <input type="button" id="81" value="1" onclick="colorchange17(81,1);" class="checkBox" style="background:black">
              <input type="button" id="82" value="2" onclick="colorchange17(82,2);" class="checkBox" style="background:black">
              <input type="button" id="83" value="3" onclick="colorchange17(83,3);" class="checkBox" style="background:black">
              <input type="button" id="84" value="4" onclick="colorchange17(84,4);" class="checkBox" style="background:black">
              <input type="button" id="85" value="5" onclick="colorchange17(85,5);" class="checkBox" style="background:black">
              </td>
            </tr>
                    <tr>
                <td>18</td>
                <td> 
                <input type="hidden" name="mcq_18" id="mcq_18">
              <input type="button" id="86" value="1" onclick="colorchange18(86,1);" class="checkBox" style="background:black">
              <input type="button" id="87" value="2" onclick="colorchange18(87,2);" class="checkBox" style="background:black">
              <input type="button" id="88" value="3" onclick="colorchange18(88,3);" class="checkBox" style="background:black">
              <input type="button" id="89" value="4" onclick="colorchange18(89,4);" class="checkBox" style="background:black">
              <input type="button" id="90" value="5" onclick="colorchange18(90,5);" class="checkBox" style="background:black">
              </td>
            </tr>
                    <tr>
                <td>19</td>
                <td> 
                <input type="hidden" name="mcq_19" id="mcq_19">
              <input type="button" id="91" value="1" onclick="colorchange19(91,1);" class="checkBox" style="background:black">
              <input type="button" id="92" value="2" onclick="colorchange19(92,2);" class="checkBox" style="background:black">
              <input type="button" id="93" value="3" onclick="colorchange19(93,3);" class="checkBox" style="background:black">
              <input type="button" id="94" value="4" onclick="colorchange19(94,4);" class="checkBox" style="background:black">
              <input type="button" id="95" value="5" onclick="colorchange19(95,5);" class="checkBox" style="background:black">
              </td>
            </tr>
                    <tr>
                <td>20</td>
                <td> 
                <input type="hidden" name="mcq_20" id="mcq_20">
              <input type="button" id="96" value="1" onclick="colorchange20(96,1);" class="checkBox" style="background:black">
              <input type="button" id="97" value="2" onclick="colorchange20(97,2);" class="checkBox" style="background:black">
              <input type="button" id="98" value="3" onclick="colorchange20(98,3);" class="checkBox" style="background:black">
              <input type="button" id="99" value="4" onclick="colorchange20(99,4);" class="checkBox" style="background:black">
              <input type="button" id="100" value="5" onclick="colorchange20(100,5);" class="checkBox" style="background:black">
              </td>
            </tr>
                    <tr>
                <td>21</td>
                <td> 
                <input type="hidden" name="mcq_21" id="mcq_21">
              <input type="button" id="101" value="1" onclick="colorchange21(101,1);" class="checkBox" style="background:black">
              <input type="button" id="102" value="2" onclick="colorchange21(102,2);" class="checkBox" style="background:black">
              <input type="button" id="103" value="3" onclick="colorchange21(103,3);" class="checkBox" style="background:black">
              <input type="button" id="104" value="4" onclick="colorchange21(104,4);" class="checkBox" style="background:black">
              <input type="button" id="105" value="5" onclick="colorchange21(105,5);" class="checkBox" style="background:black">
              </td>
            </tr>
                    <tr>
                <td>22</td>
                <td> 
                <input type="hidden" name="mcq_22" id="mcq_22">
              <input type="button" id="106" value="1" onclick="colorchange22(106,1);" class="checkBox" style="background:black">
              <input type="button" id="107" value="2" onclick="colorchange22(107,2);" class="checkBox" style="background:black">
              <input type="button" id="108" value="3" onclick="colorchange22(108,3);" class="checkBox" style="background:black">
              <input type="button" id="109" value="4" onclick="colorchange22(109,4);" class="checkBox" style="background:black">
              <input type="button" id="110" value="5" onclick="colorchange22(110,5);" class="checkBox" style="background:black">
              </td>
            </tr>
                    <tr>
                <td>23</td>
                <td> 
                <input type="hidden" name="mcq_23" id="mcq_23">
              <input type="button" id="111" value="1" onclick="colorchange23(111,1);" class="checkBox" style="background:black">
              <input type="button" id="112" value="2" onclick="colorchange23(112,2);" class="checkBox" style="background:black">
              <input type="button" id="113" value="3" onclick="colorchange23(113,3);" class="checkBox" style="background:black">
              <input type="button" id="114" value="4" onclick="colorchange23(114,4);" class="checkBox" style="background:black">
              <input type="button" id="115" value="5" onclick="colorchange23(115,5);" class="checkBox" style="background:black">
              </td>
            </tr>
                    <tr>
                <td>24</td>
                <td> 
                <input type="hidden" name="mcq_24" id="mcq_24">
              <input type="button" id="116" value="1" onclick="colorchange24(116,1);" class="checkBox" style="background:black">
              <input type="button" id="117" value="2" onclick="colorchange24(117,2);" class="checkBox" style="background:black">
              <input type="button" id="118" value="3" onclick="colorchange24(118,3);" class="checkBox" style="background:black">
              <input type="button" id="119" value="4" onclick="colorchange24(119,4);" class="checkBox" style="background:black">
              <input type="button" id="120" value="5" onclick="colorchange24(120,5);" class="checkBox" style="background:black">
              </td>
            </tr>
                    <tr>
                <td>25</td>
                <td> 
                <input type="hidden" name="mcq_25" id="mcq_25">
              <input type="button" id="121" value="1" onclick="colorchange25(121,1);" class="checkBox" style="background:black">
              <input type="button" id="122" value="2" onclick="colorchange25(122,2);" class="checkBox" style="background:black">
              <input type="button" id="123" value="3" onclick="colorchange25(123,3);" class="checkBox" style="background:black">
              <input type="button" id="124" value="4" onclick="colorchange25(124,4);"class="checkBox" style="background:black">
              <input type="button" id="125" value="5" onclick="colorchange25(125,5);" class="checkBox" style="background:black">
              </td>
            </tr>
                    <tr>
                <td>26</td>
                <td> 
                <input type="hidden" name="mcq_26" id="mcq_26">
              <input type="button" id="126" value="1" onclick="colorchange26(126,1);" class="checkBox" style="background:black">
              <input type="button" id="127" value="2" onclick="colorchange26(127,2);" class="checkBox" style="background:black">
              <input type="button" id="128" value="3" onclick="colorchange26(128,3);" class="checkBox" style="background:black">
              <input type="button" id="129" value="4" onclick="colorchange26(129,4);" class="checkBox" style="background:black">
              <input type="button" id="130" value="5" onclick="colorchange26(130,5);" class="checkBox" style="background:black">
              </td>
            </tr>
                    <tr>
                <td>27</td>
                <td> 
                <input type="hidden" name="mcq_27" id="mcq_27">
              <input type="button" id="131" value="1" onclick="colorchange27(131,1);" class="checkBox" style="background:black">
              <input type="button" id="132" value="2" onclick="colorchange27(132,2);" class="checkBox" style="background:black">
              <input type="button" id="133" value="3" onclick="colorchange27(133,3);" class="checkBox" style="background:black">
              <input type="button" id="134" value="4" onclick="colorchange27(134,4);" class="checkBox" style="background:black">
              <input type="button" id="135" value="5" onclick="colorchange27(135,5);" class="checkBox" style="background:black">
              </td>
            </tr>
                    <tr>
                <td>28</td>
                <td> 
                <input type="hidden" name="mcq_28" id="mcq_28">
              <input type="button" id="136" value="1" onclick="colorchange28(136,1);" class="checkBox" style="background:black">
              <input type="button" id="137" value="2" onclick="colorchange28(137,2);" class="checkBox" style="background:black">
              <input type="button" id="138" value="3" onclick="colorchange28(138,3);" class="checkBox" style="background:black">
              <input type="button" id="139" value="4" onclick="colorchange28(139,4);" class="checkBox" style="background:black">
              <input type="button" id="140" value="5" onclick="colorchange28(140,5);" class="checkBox" style="background:black">
              </td>
            </tr>
                    <tr>
                <td>29</td>
                <td> 
                <input type="hidden" name="mcq_29" id="mcq_29">
              <input type="button" id="141" value="1" onclick="colorchange29(141,1);" class="checkBox" style="background:black">
              <input type="button" id="142" value="2" onclick="colorchange29(142,2);" class="checkBox" style="background:black">
              <input type="button" id="143" value="3" onclick="colorchange29(143,3);" class="checkBox" style="background:black">
              <input type="button" id="144" value="4" onclick="colorchange29(144,4);" class="checkBox" style="background:black">
              <input type="button" id="145" value="5" onclick="colorchange29(145,5);" class="checkBox" style="background:black">
              </td>
            </tr>
                    <tr>
                <td>30</td>
                <td>
                <input type="hidden" name="mcq_30" id="mcq_30">
              <input type="button" id="146" value="1" onclick="colorchange30(146,1);" class="checkBox" style="background:black">
              <input type="button" id="147" value="2" onclick="colorchange30(147,2);" class="checkBox" style="background:black">
              <input type="button" id="148" value="3" onclick="colorchange30(148,3);" class="checkBox" style="background:black">
              <input type="button" id="149" value="4" onclick="colorchange30(149,4);" class="checkBox" style="background:black">
              <input type="button" id="150" value="5" onclick="colorchange30(150,5);" class="checkBox" style="background:black">
              </td>
            </tr>
                    <tr>
                <td>31</td>
                <td>
                <input type="hidden" name="mcq_31" id="mcq_31"> 
              <input type="button" id="151" value="1" onclick="colorchange31(151,1);" class="checkBox" style="background:black">
              <input type="button" id="152" value="2" onclick="colorchange31(152,2);" class="checkBox" style="background:black">
              <input type="button" id="153" value="3" onclick="colorchange31(153,3);" class="checkBox" style="background:black">
              <input type="button" id="154" value="4" onclick="colorchange31(154,4);" class="checkBox" style="background:black">
              <input type="button" id="155" value="5" onclick="colorchange31(155,5);" class="checkBox" style="background:black">
              </td>
            </tr>
                    <tr>
                <td>32</td>
                <td>
                <input type="hidden" name="mcq_32" id="mcq_32">
              <input type="button" id="156" value="1" onclick="colorchange32(156,1);" class="checkBox" style="background:black">
              <input type="button" id="157" value="2" onclick="colorchange32(157,2);" class="checkBox" style="background:black">
              <input type="button" id="158" value="3" onclick="colorchange32(158,3);" class="checkBox" style="background:black">
              <input type="button" id="159" value="4" onclick="colorchange32(159,4);" class="checkBox" style="background:black">
              <input type="button" id="160" value="5" onclick="colorchange32(160,5);" class="checkBox" style="background:black">
              </td>
            </tr>
                    <tr>
                <td>33</td>
                <td>
                <input type="hidden" name="mcq_33" id="mcq_33"> 
              <input type="button" id="161" value="1" onclick="colorchange33(161,1);" class="checkBox" style="background:black">
              <input type="button" id="162" value="2" onclick="colorchange33(162,2);" class="checkBox" style="background:black">
              <input type="button" id="163" value="3" onclick="colorchange33(163,3);" class="checkBox" style="background:black">
              <input type="button" id="164" value="4" onclick="colorchange33(164,4);" class="checkBox" style="background:black">
              <input type="button" id="165" value="5" onclick="colorchange33(165,5);" class="checkBox" style="background:black">
              </td>
            </tr>
                    <tr>
                <td>34</td>
                <td>
                <input type="hidden" name="mcq_34" id="mcq_34">
              <input type="button" id="166" value="1" onclick="colorchange34(166,1);" class="checkBox" style="background:black">
              <input type="button" id="167" value="2" onclick="colorchange34(167,2);" class="checkBox" style="background:black">
              <input type="button" id="168" value="3" onclick="colorchange34(168,3);" class="checkBox" style="background:black">
              <input type="button" id="169" value="4" onclick="colorchange34(169,4);" class="checkBox" style="background:black">
              <input type="button" id="170" value="5" onclick="colorchange34(170,5);" class="checkBox" style="background:black">
              </td>
            </tr>
                    <tr>
                <td>35</td>
                <td>
                <input type="hidden" name="mcq_35" id="mcq_35"> 
              <input type="button" id="171" value="1" onclick="colorchange35(171,1);" class="checkBox" style="background:black">
              <input type="button" id="172" value="2" onclick="colorchange35(172,2);" class="checkBox" style="background:black">
              <input type="button" id="173" value="3" onclick="colorchange35(173,3);" class="checkBox" style="background:black">
              <input type="button" id="174" value="4" onclick="colorchange35(174,4);" class="checkBox" style="background:black">
              <input type="button" id="175" value="5" onclick="colorchange35(175,5);" class="checkBox" style="background:black">
              </td>
            </tr>
                    <tr>
                <td>36</td>
                <td>
                <input type="hidden" name="mcq_36" id="mcq_36"> 
              <input type="button" id="176" value="1" onclick="colorchange36(176,1);" class="checkBox" style="background:black">
              <input type="button" id="177" value="2" onclick="colorchange36(177,2);" class="checkBox" style="background:black">
              <input type="button" id="178" value="3" onclick="colorchange36(178,3);" class="checkBox" style="background:black">
              <input type="button" id="179" value="4" onclick="colorchange36(179,4);" class="checkBox" style="background:black">
              <input type="button" id="180" value="5" onclick="colorchange36(180,5);" class="checkBox" style="background:black">
              </td>
            </tr>
            <tr>
                <td>37</td>
                <td>
                <input type="hidden" name="mcq_37" id="mcq_37">
              <input type="button" id="181" value="1" onclick="colorchange37(181,1);" class="checkBox" style="background:black">
              <input type="button" id="182" value="2" onclick="colorchange37(182,2);" class="checkBox" style="background:black">
              <input type="button" id="183" value="3" onclick="colorchange37(183,3);" class="checkBox" style="background:black">
              <input type="button" id="184" value="4" onclick="colorchange37(184,4);" class="checkBox" style="background:black">
              <input type="button" id="185" value="5" onclick="colorchange37(185,5);" class="checkBox" style="background:black">
              </td>
            </tr>
                    <tr>
                <td>38</td>
                <td> 
                <input type="hidden" name="mcq_38" id="mcq_38">
              <input type="button" id="186" value="1" onclick="colorchange38(186,1);" class="checkBox" style="background:black">
              <input type="button" id="187" value="2" onclick="colorchange38(187,2);" class="checkBox" style="background:black">
              <input type="button" id="188" value="3" onclick="colorchange38(188,3);" class="checkBox" style="background:black">
              <input type="button" id="189" value="4" onclick="colorchange38(189,4);" class="checkBox" style="background:black">
              <input type="button" id="190" value="5" onclick="colorchange38(190,5);" class="checkBox" style="background:black">
              </td>
            </tr>
                    <tr>
                <td>39</td>
                <td> 
                <input type="hidden" name="mcq_39" id="mcq_39">
              <input type="button" id="191" value="1" onclick="colorchange39(191,1);" class="checkBox" style="background:black">
              <input type="button" id="192" value="2" onclick="colorchange39(192,2);" class="checkBox" style="background:black">
              <input type="button" id="193" value="3" onclick="colorchange39(193,3);" class="checkBox" style="background:black">
              <input type="button" id="194" value="4" onclick="colorchange39(194,4);" class="checkBox" style="background:black"> 
              <input type="button" id="195" value="5" onclick="colorchange39(195,5);" class="checkBox" style="background:black">
              </td>
            </tr>
            <tr>
                <td>40</td>
                <td> 
                <input type="hidden" name="mcq_40" id="mcq_40">
              <input type="button" id="196" value="1" onclick="colorchange40(196,1);" class="checkBox" style="background:black">
              <input type="button" id="197" value="2" onclick="colorchange40(197,2);" class="checkBox" style="background:black">
              <input type="button" id="198" value="3" onclick="colorchange40(198,3);" class="checkBox" style="background:black">
              <input type="button" id="199" value="4" onclick="colorchange40(199,4);" class="checkBox" style="background:black">
              <input type="button" id="200" value="5" onclick="colorchange40(200,5);" class="checkBox" style="background:black">
              </td>
            </tr>
            <tr>
                <td>41</td>
                <td> 
                <input type="hidden" name="mcq_41" id="mcq_41">
              <input type="button" id="201" value="1" onclick="colorchange41(201,1);" class="checkBox" style="background:black">
              <input type="button" id="202" value="2" onclick="colorchange41(202,2);" class="checkBox" style="background:black">
              <input type="button" id="203" value="3" onclick="colorchange41(203,3);" class="checkBox" style="background:black">
              <input type="button" id="204" value="4" onclick="colorchange41(204,4);" class="checkBox" style="background:black">
              <input type="button" id="205" value="5" onclick="colorchange41(205,5);" class="checkBox" style="background:black">
              </td>
            </tr>
            <tr>
                <td>42</td>
                <td> 
                <input type="hidden" name="mcq_42" id="mcq_42">
              <input type="button" id="206" value="1" onclick="colorchange42(206,1);" class="checkBox" style="background:black">
              <input type="button" id="207" value="2" onclick="colorchange42(207,2);" class="checkBox" style="background:black">
              <input type="button" id="208" value="3" onclick="colorchange42(208,3);" class="checkBox" style="background:black">
              <input type="button" id="209" value="4" onclick="colorchange42(209,4);" class="checkBox" style="background:black">
              <input type="button" id="210" value="5" onclick="colorchange42(210,5);" class="checkBox" style="background:black">
              </td>
            </tr>
                    <tr>
                <td>43</td>
                <td> 
                <input type="hidden" name="mcq_43" id="mcq_43">
              <input type="button" id="211" value="1" onclick="colorchange43(211,1);" class="checkBox" style="background:black">
              <input type="button" id="212" value="2" onclick="colorchange43(212,2);" class="checkBox" style="background:black">
              <input type="button" id="213" value="3" onclick="colorchange43(213,3);" class="checkBox" style="background:black">
              <input type="button" id="214" value="4" onclick="colorchange43(214,4);" class="checkBox" style="background:black">
              <input type="button" id="215" value="5" onclick="colorchange43(215,5);" class="checkBox" style="background:black">
              </td>
            </tr>
                    <tr>
                <td>44</td>
                <td> 
                <input type="hidden" name="mcq_44" id="mcq_44">
              <input type="button" id="216" value="1" onclick="colorchange44(216,1);" class="checkBox" style="background:black">
              <input type="button" id="217" value="2" onclick="colorchange44(217,2);" class="checkBox" style="background:black">
              <input type="button" id="218" value="3" onclick="colorchange44(218,3);" class="checkBox" style="background:black">
              <input type="button" id="219" value="4" onclick="colorchange44(219,4);" class="checkBox" style="background:black">
              <input type="button" id="220" value="5" onclick="colorchange44(220,5);" class="checkBox" style="background:black">
              </td>
            </tr>
                    <tr>
                <td>45</td>
                <td> 
                <input type="hidden" name="mcq_45" id="mcq_45">
              <input type="button" id="221" value="1" onclick="colorchange45(221,1);" class="checkBox" style="background:black">
              <input type="button" id="222" value="2" onclick="colorchange45(222,2);" class="checkBox"style="background:black">
              <input type="button" id="223" value="3" onclick="colorchange45(223,3);" class="checkBox"style="background:black">
              <input type="button" id="224" value="4" onclick="colorchange45(224,4);" class="checkBox"style="background:black">
              <input type="button" id="225" value="5" onclick="colorchange45(225,5);" class="checkBox"style="background:black">
              </td>
            </tr>
                    <tr>
                <td>46</td>
                <td> 
                <input type="hidden" name="mcq_46" id="mcq_46">
              <input type="button" id="226" value="1" onclick="colorchange46(226,1);" class="checkBox" style="background:black">
              <input type="button" id="227" value="2" onclick="colorchange46(227,2);" class="checkBox" style="background:black">
              <input type="button" id="228" value="3" onclick="colorchange46(228,3);" class="checkBox" style="background:black">
              <input type="button" id="229" value="4" onclick="colorchange46(229,4);" class="checkBox" style="background:black">
              <input type="button" id="230" value="5" onclick="colorchange46(230,5);" class="checkBox" style="background:black">
              </td>
            </tr>
                    <tr>
                <td>47</td>
                <td> 
                <input type="hidden" name="mcq_47" id="mcq_47">
              <input type="button" id="231" value="1" onclick="colorchange47(231,1);" class="checkBox" style="background:black">
              <input type="button" id="232" value="2" onclick="colorchange47(232,2);" class="checkBox" style="background:black">
              <input type="button" id="233" value="3" onclick="colorchange47(233,3);" class="checkBox" style="background:black">
              <input type="button" id="234" value="4" onclick="colorchange47(234,4);" class="checkBox" style="background:black">
              <input type="button" id="235" value="5" onclick="colorchange47(235,5);" class="checkBox" style="background:black">
              </td>
            </tr>
                    <tr>
                <td>48</td>
                <td> 
                <input type="hidden" name="mcq_48" id="mcq_48">
              <input type="button" id="236" value="1" onclick="colorchange48(236,1);" class="checkBox" style="background:black">
              <input type="button" id="237" value="2" onclick="colorchange48(237,2);" class="checkBox" style="background:black">
              <input type="button" id="238" value="3" onclick="colorchange48(238,3);" class="checkBox" style="background:black">
              <input type="button" id="239" value="4" onclick="colorchange48(239,4);" class="checkBox" style="background:black">
              <input type="button" id="240" value="5" onclick="colorchange48(240,5);" class="checkBox" style="background:black">
              </td>
            </tr>
                    <tr>
                <td>49</td>
                <td>
                <input type="hidden" name="mcq_49" id="mcq_49">
              <input type="button" id="241" value="1" onclick="colorchange49(241,1);" class="checkBox" style="background:black">
              <input type="button" id="242" value="2" onclick="colorchange49(242,2);" class="checkBox" style="background:black">
              <input type="button" id="243" value="3" onclick="colorchange49(243,3);" class="checkBox" style="background:black">
              <input type="button" id="244" value="4" onclick="colorchange49(244,4);" class="checkBox" style="background:black">
              <input type="button" id="245" value="5" onclick="colorchange49(245,5);" class="checkBox" style="background:black">
              </td>
            </tr>
                    <tr>
                <td>50</td>
                <td> 
                <input type="hidden" name="mcq_50" id="mcq_50">
              <input type="button" id="246" value="1"  onclick="colorchange50(246,1);" class="checkBox" style="background:black">
              <input type="button" id="247" value="2"  onclick="colorchange50(247,2);" class="checkBox" style="background:black">
              <input type="button" id="248" value="3"  onclick="colorchange50(248,3);" class="checkBox" style="background:black">
              <input type="button" id="249" value="4"  onclick="colorchange50(249,4);" class="checkBox" style="background:black">
              <input type="button" id="250" value="5"  onclick="colorchange50(250,5);" class="checkBox" style="background:black">
              </td>
            </tr>
					
		</table>
		

		
		 
 
         	';
         }
		?>

       
	<button type="submit" name="submit" id="thebutton">Submit</button>
	</form>

	





<script >
  
  function colorchange1(id,num) {
     document.getElementById('mcq_1').value = document.getElementById('mcq_1').value + num;
    var background = document.getElementById(id).style.backgroundColor;
    if (background == "black") {
        document.getElementById(id).style.background = "#828282";
    } else {
        document.getElementById(id).style.background = "black";
    }

}


  function colorchange2(id,num) {
     document.getElementById('mcq_2').value = document.getElementById('mcq_2').value + num;
    var background = document.getElementById(id).style.backgroundColor;
    if (background == "black") {
        document.getElementById(id).style.background = "#828282";
    } else {
        document.getElementById(id).style.background = "black";
    }

}

  function colorchange3(id,num) {
     document.getElementById('mcq_3').value = document.getElementById('mcq_3').value + num;
    var background = document.getElementById(id).style.backgroundColor;
    if (background == "black") {
        document.getElementById(id).style.background = "#828282";
    } else {
        document.getElementById(id).style.background = "black";
    }

}

  function colorchange4(id,num) {
     document.getElementById('mcq_4').value = document.getElementById('mcq_4').value + num;
    var background = document.getElementById(id).style.backgroundColor;
    if (background == "black") {
        document.getElementById(id).style.background = "#828282";
    } else {
        document.getElementById(id).style.background = "black";
    }

}

  function colorchange5(id,num) {
     document.getElementById('mcq_5').value = document.getElementById('mcq_5').value + num;
    var background = document.getElementById(id).style.backgroundColor;
    if (background == "black") {
        document.getElementById(id).style.background = "#828282";
    } else {
        document.getElementById(id).style.background = "black";
    }

}

  function colorchange6(id,num) {
     document.getElementById('mcq_6').value = document.getElementById('mcq_6').value + num;
    var background = document.getElementById(id).style.backgroundColor;
    if (background == "black") {
        document.getElementById(id).style.background = "#828282";
    } else {
        document.getElementById(id).style.background = "black";
    }

}

  function colorchange7(id,num) {
     document.getElementById('mcq_7').value = document.getElementById('mcq_7').value + num;
    var background = document.getElementById(id).style.backgroundColor;
    if (background == "black") {
        document.getElementById(id).style.background = "#828282";
    } else {
        document.getElementById(id).style.background = "black";
    }

}

  function colorchange8(id,num) {
     document.getElementById('mcq_8').value = document.getElementById('mcq_8').value + num;
    var background = document.getElementById(id).style.backgroundColor;
    if (background == "black") {
        document.getElementById(id).style.background = "#828282";
    } else {
        document.getElementById(id).style.background = "black";
    }

}

  function colorchange9(id,num) {
     document.getElementById('mcq_9').value = document.getElementById('mcq_9').value + num;
    var background = document.getElementById(id).style.backgroundColor;
    if (background == "black") {
        document.getElementById(id).style.background = "#828282";
    } else {
        document.getElementById(id).style.background = "black";
    }

}

  function colorchange10(id,num) {
     document.getElementById('mcq_10').value = document.getElementById('mcq_10').value + num;
    var background = document.getElementById(id).style.backgroundColor;
    if (background == "black") {
        document.getElementById(id).style.background = "#828282";
    } else {
        document.getElementById(id).style.background = "black";
    }

}

  function colorchange11(id,num) {
     document.getElementById('mcq_11').value = document.getElementById('mcq_11').value + num;
    var background = document.getElementById(id).style.backgroundColor;
    if (background == "black") {
        document.getElementById(id).style.background = "#828282";
    } else {
        document.getElementById(id).style.background = "black";
    }

}

  function colorchange12(id,num) {
     document.getElementById('mcq_12').value = document.getElementById('mcq_12').value + num;
    var background = document.getElementById(id).style.backgroundColor;
    if (background == "black") {
        document.getElementById(id).style.background = "#828282";
    } else {
        document.getElementById(id).style.background = "black";
    }

}

  function colorchange13(id,num) {
     document.getElementById('mcq_13').value = document.getElementById('mcq_13').value + num;
    var background = document.getElementById(id).style.backgroundColor;
    if (background == "black") {
        document.getElementById(id).style.background = "#828282";
    } else {
        document.getElementById(id).style.background = "black";
    }

}

  function colorchange14(id,num) {
     document.getElementById('mcq_14').value = document.getElementById('mcq_14').value + num;
    var background = document.getElementById(id).style.backgroundColor;
    if (background == "black") {
        document.getElementById(id).style.background = "#828282";
    } else {
        document.getElementById(id).style.background = "black";
    }

}

  function colorchange15(id,num) {
     document.getElementById('mcq_15').value = document.getElementById('mcq_15').value + num;
    var background = document.getElementById(id).style.backgroundColor;
    if (background == "black") {
        document.getElementById(id).style.background = "#828282";
    } else {
        document.getElementById(id).style.background = "black";
    }

}

  function colorchange16(id,num) {
     document.getElementById('mcq_16').value = document.getElementById('mcq_16').value + num;
    var background = document.getElementById(id).style.backgroundColor;
    if (background == "black") {
        document.getElementById(id).style.background = "#828282";
    } else {
        document.getElementById(id).style.background = "black";
    }

}

  function colorchange17(id,num) {
     document.getElementById('mcq_17').value = document.getElementById('mcq_17').value + num;
    var background = document.getElementById(id).style.backgroundColor;
    if (background == "black") {
        document.getElementById(id).style.background = "#828282";
    } else {
        document.getElementById(id).style.background = "black";
    }

}

  function colorchange18(id,num) {
     document.getElementById('mcq_18').value = document.getElementById('mcq_18').value + num;
    var background = document.getElementById(id).style.backgroundColor;
    if (background == "black") {
        document.getElementById(id).style.background = "#828282";
    } else {
        document.getElementById(id).style.background = "black";
    }

}

  function colorchange19(id,num) {
     document.getElementById('mcq_19').value = document.getElementById('mcq_19').value + num;
    var background = document.getElementById(id).style.backgroundColor;
    if (background == "black") {
        document.getElementById(id).style.background = "#828282";
    } else {
        document.getElementById(id).style.background = "black";
    }

}

  function colorchange20(id,num) {
     document.getElementById('mcq_20').value = document.getElementById('mcq_20').value + num;
    var background = document.getElementById(id).style.backgroundColor;
    if (background == "black") {
        document.getElementById(id).style.background = "#828282";
    } else {
        document.getElementById(id).style.background = "black";
    }

}

  function colorchange21(id,num) {
     document.getElementById('mcq_21').value = document.getElementById('mcq_21').value + num;
    var background = document.getElementById(id).style.backgroundColor;
    if (background == "black") {
        document.getElementById(id).style.background = "#828282";
    } else {
        document.getElementById(id).style.background = "black";
    }

}

  function colorchange22(id,num) {
     document.getElementById('mcq_22').value = document.getElementById('mcq_22').value + num;
    var background = document.getElementById(id).style.backgroundColor;
    if (background == "black") {
        document.getElementById(id).style.background = "#828282";
    } else {
        document.getElementById(id).style.background = "black";
    }

}

  function colorchange23(id,num) {
     document.getElementById('mcq_23').value = document.getElementById('mcq_23').value + num;
    var background = document.getElementById(id).style.backgroundColor;
    if (background == "black") {
        document.getElementById(id).style.background = "#828282";
    } else {
        document.getElementById(id).style.background = "black";
    }

}

  function colorchange24(id,num) {
     document.getElementById('mcq_24').value = document.getElementById('mcq_24').value + num;
    var background = document.getElementById(id).style.backgroundColor;
    if (background == "black") {
        document.getElementById(id).style.background = "#828282";
    } else {
        document.getElementById(id).style.background = "black";
    }

}
function colorchange25(id,num) {
     document.getElementById('mcq_25').value = document.getElementById('mcq_25').value + num;
    var background = document.getElementById(id).style.backgroundColor;
    if (background == "black") {
        document.getElementById(id).style.background = "#828282";
    } else {
        document.getElementById(id).style.background = "black";
    }

}
function colorchange26(id,num) {
     document.getElementById('mcq_26').value = document.getElementById('mcq_26').value + num;
    var background = document.getElementById(id).style.backgroundColor;
    if (background == "black") {
        document.getElementById(id).style.background = "#828282";
    } else {
        document.getElementById(id).style.background = "black";
    }

}
function colorchange27(id,num) {
     document.getElementById('mcq_27').value = document.getElementById('mcq_27').value + num;
    var background = document.getElementById(id).style.backgroundColor;
    if (background == "black") {
        document.getElementById(id).style.background = "#828282";
    } else {
        document.getElementById(id).style.background = "black";
    }

}
function colorchange28(id,num) {
     document.getElementById('mcq_28').value = document.getElementById('mcq_28').value + num;
    var background = document.getElementById(id).style.backgroundColor;
    if (background == "black") {
        document.getElementById(id).style.background = "#828282";
    } else {
        document.getElementById(id).style.background = "black";
    }

}
function colorchange29(id,num) {
     document.getElementById('mcq_29').value = document.getElementById('mcq_29').value + num;
    var background = document.getElementById(id).style.backgroundColor;
    if (background == "black") {
        document.getElementById(id).style.background = "#828282";
    } else {
        document.getElementById(id).style.background = "black";
    }

}
function colorchange30(id,num) {
     document.getElementById('mcq_30').value = document.getElementById('mcq_30').value + num;
    var background = document.getElementById(id).style.backgroundColor;
    if (background == "black") {
        document.getElementById(id).style.background = "#828282";
    } else {
        document.getElementById(id).style.background = "black";
    }

}
function colorchange31(id,num) {
     document.getElementById('mcq_31').value = document.getElementById('mcq_31').value + num;
    var background = document.getElementById(id).style.backgroundColor;
    if (background == "black") {
        document.getElementById(id).style.background = "#828282";
    } else {
        document.getElementById(id).style.background = "black";
    }

}
function colorchange32(id,num) {
     document.getElementById('mcq_32').value = document.getElementById('mcq_32').value + num;
    var background = document.getElementById(id).style.backgroundColor;
    if (background == "black") {
        document.getElementById(id).style.background = "#828282";
    } else {
        document.getElementById(id).style.background = "black";
    }

}
function colorchange33(id,num) {
     document.getElementById('mcq_33').value = document.getElementById('mcq_33').value + num;
    var background = document.getElementById(id).style.backgroundColor;
    if (background == "black") {
        document.getElementById(id).style.background = "#828282";
    } else {
        document.getElementById(id).style.background = "black";
    }

}
function colorchange34(id,num) {
     document.getElementById('mcq_34').value = document.getElementById('mcq_34').value + num;
    var background = document.getElementById(id).style.backgroundColor;
    if (background == "black") {
        document.getElementById(id).style.background = "#828282";
    } else {
        document.getElementById(id).style.background = "black";
    }

}
function colorchange35(id,num) {
     document.getElementById('mcq_35').value = document.getElementById('mcq_35').value + num;
    var background = document.getElementById(id).style.backgroundColor;
    if (background == "black") {
        document.getElementById(id).style.background = "#828282";
    } else {
        document.getElementById(id).style.background = "black";
    }

}
function colorchange36(id,num) {
     document.getElementById('mcq_36').value = document.getElementById('mcq_36').value + num;
    var background = document.getElementById(id).style.backgroundColor;
    if (background == "black") {
        document.getElementById(id).style.background = "#828282";
    } else {
        document.getElementById(id).style.background = "black";
    }

}
function colorchange37(id,num) {
     document.getElementById('mcq_37').value = document.getElementById('mcq_37').value + num;
    var background = document.getElementById(id).style.backgroundColor;
    if (background == "black") {
        document.getElementById(id).style.background = "#828282";
    } else {
        document.getElementById(id).style.background = "black";
    }

}
function colorchange38(id,num) {
     document.getElementById('mcq_38').value = document.getElementById('mcq_38').value + num;
    var background = document.getElementById(id).style.backgroundColor;
    if (background == "black") {
        document.getElementById(id).style.background = "#828282";
    } else {
        document.getElementById(id).style.background = "black";
    }

}
function colorchange39(id,num) {
     document.getElementById('mcq_39').value = document.getElementById('mcq_39').value + num;
    var background = document.getElementById(id).style.backgroundColor;
    if (background == "black") {
        document.getElementById(id).style.background = "#828282";
    } else {
        document.getElementById(id).style.background = "black";
    }

}
function colorchange40(id,num) {
     document.getElementById('mcq_40').value = document.getElementById('mcq_40').value + num;
    var background = document.getElementById(id).style.backgroundColor;
    if (background == "black") {
        document.getElementById(id).style.background = "#828282";
    } else {
        document.getElementById(id).style.background = "black";
    }

}

function colorchange41(id,num) {
     document.getElementById('mcq_41').value = document.getElementById('mcq_41').value + num;
    var background = document.getElementById(id).style.backgroundColor;
    if (background == "black") {
        document.getElementById(id).style.background = "#828282";
    } else {
        document.getElementById(id).style.background = "black";
    }

}
function colorchange42(id,num) {
     document.getElementById('mcq_42').value = document.getElementById('mcq_42').value + num;
    var background = document.getElementById(id).style.backgroundColor;
    if (background == "black") {
        document.getElementById(id).style.background = "#828282";
    } else {
        document.getElementById(id).style.background = "black";
    }

}
function colorchange43(id,num) {
     document.getElementById('mcq_43').value = document.getElementById('mcq_43').value + num;
    var background = document.getElementById(id).style.backgroundColor;
    if (background == "black") {
        document.getElementById(id).style.background = "#828282";
    } else {
        document.getElementById(id).style.background = "black";
    }

}
function colorchange44(id,num) {
     document.getElementById('mcq_44').value = document.getElementById('mcq_44').value + num;
    var background = document.getElementById(id).style.backgroundColor;
    if (background == "black") {
        document.getElementById(id).style.background = "#828282";
    } else {
        document.getElementById(id).style.background = "black";
    }

}
function colorchange45(id,num) {
     document.getElementById('mcq_45').value = document.getElementById('mcq_45').value + num;
    var background = document.getElementById(id).style.backgroundColor;
    if (background == "black") {
        document.getElementById(id).style.background = "#828282";
    } else {
        document.getElementById(id).style.background = "black";
    }

}
function colorchange46(id,num) {
     document.getElementById('mcq_46').value = document.getElementById('mcq_46').value + num;
    var background = document.getElementById(id).style.backgroundColor;
    if (background == "black") {
        document.getElementById(id).style.background = "#828282";
    } else {
        document.getElementById(id).style.background = "black";
    }

}
function colorchange47(id,num) {
     document.getElementById('mcq_47').value = document.getElementById('mcq_47').value + num;
    var background = document.getElementById(id).style.backgroundColor;
    if (background == "black") {
        document.getElementById(id).style.background = "#828282";
    } else {
        document.getElementById(id).style.background = "black";
    }

}
function colorchange48(id,num) {
     document.getElementById('mcq_48').value = document.getElementById('mcq_48').value + num;
    var background = document.getElementById(id).style.backgroundColor;
    if (background == "black") {
        document.getElementById(id).style.background = "#828282";
    } else {
        document.getElementById(id).style.background = "black";
    }

}
function colorchange49(id,num) {
     document.getElementById('mcq_49').value = document.getElementById('mcq_49').value + num;
    var background = document.getElementById(id).style.backgroundColor;
    if (background == "black") {
        document.getElementById(id).style.background = "#828282";
    } else {
        document.getElementById(id).style.background = "black";
    }

}
function colorchange50(id,num) {
     document.getElementById('mcq_50').value = document.getElementById('mcq_50').value + num;
    var background = document.getElementById(id).style.backgroundColor;
    if (background == "black") {
        document.getElementById(id).style.background = "#828282";
    } else {
        document.getElementById(id).style.background = "black";
    }

}


</script>
<?php
include 'footer.php';
?>	
	