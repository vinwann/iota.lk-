<?php
$add ="12phyfirst";
include 'header.php';
include_once 'includes/dbh.php';


?>
<?php
if (isset($_GET['school'])) {
 $school = $_GET['school'];
$paper_yr = $_GET['paper_yr'];
$sql = "SELECT * From phy121posting_mcqs WHERE school='$school' AND paper_yr='$paper_yr'";
$result = mysqli_query($conn,$sql);
$queryResults = mysqli_num_rows($result);
if ($queryResults > 0 ) {
while ($row = mysqli_fetch_assoc($result)) {
echo "<title>".$row['school']." ".$row['paper_yr']." grade 12 first term test physics MCQ answers </title>
   <meta name='description' content='Accurate MCQ answers for ".$row['school']." ".$row['paper_yr']." grade 12 first term test physics paper'>";
}
}
                }?>
</head>
    <?php
include 'rest.php';
?>
<?php
include 'stylecode/tablepgstyle.php';
?>	
	
	
	<?php
              
                if (isset($_GET['school'])) {
                    $school = $_GET['school'];
            
                $paper_yr = $_GET['paper_yr'];
      

            $sql = "SELECT * From phy121posting_mcqs WHERE school='$school' AND paper_yr='$paper_yr'";
    $result = mysqli_query($conn,$sql);
    $queryResults = mysqli_num_rows($result);
    if ($queryResults > 0 ) {

                
        while ($row = mysqli_fetch_assoc($result)) {
            echo "
                 
    
            <div id='mcqTable'>
                <h1>".$row['school']."</h1>
                 <p>".$row['paper_yr']."</p>
                    <div id='howto'>
                 <ul>
                 <li>&diams;If there is another suitable answer,then select both answers</li>
                 <li  >&diams;If the given answer is wrong,then select the correct answer</li>
                 </ul>
                 
                 </div>
                  <div id='midad'>
                  <script async src='//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js'></script>
<!-- midad2 -->
<ins class='adsbygoogle'
     style='display:block;background-color:transparent'
     data-ad-client='ca-pub-5152023475480843'
     data-ad-slot='7044439243'
     data-ad-format='link'
     data-full-width-responsive='true'></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script></div>
                  <form method='POST' action='includes/12firstphyrec_ans.php'>
                  <input type='hidden' name='school' value=".$school.">
                  <input type='hidden' name='paper_yr' value=".$paper_yr.">
                  <table id='table1'>
                               <tr>
                        <th style='width:50px' id='th110'>
                           Question
                        </th>
                        <th style='width:70px' id='th120'>
                            Answer
                        </th>
                        <th style='width:280px' id='th130'>
                        Alternative
                        </th>
                    </tr>
                    <tr>
                        <td>
                           1
                        </td>
                        <td>
                            ".$row['mcq_1']."
                        </td>
                        <td>
                            <input type='hidden' name='mcq_1' id='mcq_1'>
              <input type='button' id='1' value='1' onclick='colorchange1(1,1);' class='checkBox' style='background:black'>
              <input type='button' id='2' value='2' onclick='colorchange1(2,2);' class='checkBox' style='background:black'>
              <input type='button' id='3' value='3' onclick='colorchange1(3,3);' class='checkBox' style='background:black'>
              <input type='button' id='4' value='4' onclick='colorchange1(4,4);' class='checkBox' style='background:black'>
              <input type='button' id='5' value='5' onclick='colorchange1(5,5);' class='checkBox' style='background:black'>
                        </td>
                    </tr>
                               <tr>
                        <td>
                           2
                        </td>
                        <td>
                            ".$row['mcq_2']."
                           
                        </td>
                        <td>
                              <input type='hidden' name='mcq_2' id='mcq_2'>
              <input type='button' id='6' value='1' onclick='colorchange2(6,1);' class='checkBox' style='background:black'>
              <input type='button' id='7' value='2' onclick='colorchange2(7,2);' class='checkBox' style='background:black'>
              <input type='button' id='8' value='3' onclick='colorchange2(8,3);' class='checkBox' style='background:black'>
              <input type='button' id='9' value='4' onclick='colorchange2(9,4);' class='checkBox' style='background:black'>
              <input type='button' id='10' value='5' onclick='colorchange2(10,5);' class='checkBox' style='background:black'>
                        </td>
                     </tr>
                     <tr>
                        <td>
                           3
                        </td>
                        <td>
                            ".$row['mcq_3']."
                           
                        </td>
                        <td>
                             <input type='hidden' name='mcq_3' id='mcq_3'>
              <input type='button' id='11' value='1' onclick='colorchange3(11,1);' class='checkBox' style='background:black'>
              <input type='button' id='12' value='2' onclick='colorchange3(12,2);' class='checkBox' style='background:black'>
              <input type='button' id='13' value='3' onclick='colorchange3(13,3);' class='checkBox' style='background:black'>
              <input type='button' id='14' value='4' onclick='colorchange3(14,4);' class='checkBox' style='background:black'>
              <input type='button' id='15' value='5' onclick='colorchange3(15,5);' class='checkBox' style='background:black'>
                        </td>
                     </tr>
                     <tr>
                        <td>
                           4
                        </td>
                        <td>
                            ".$row['mcq_4']."
                        </td>
                        <td>
                             <input type='hidden' name='mcq_4' id='mcq_4'>
              <input type='button' id='16' value='1' onclick='colorchange4(16,1);' class='checkBox' style='background:black'>
              <input type='button' id='17' value='2' onclick='colorchange4(17,2);' class='checkBox' style='background:black'>
              <input type='button' id='18' value='3' onclick='colorchange4(18,3);' class='checkBox' style='background:black'>
              <input type='button' id='19' value='4' onclick='colorchange4(19,4);' class='checkBox' style='background:black'>
              <input type='button' id='20' value='5' onclick='colorchange4(20,5);' class='checkBox' style='background:black'>
                        </td>
                    </tr>
                    <tr>
                        <td>
                           5
                        </td>
                        <td>
                            ".$row['mcq_5']."
                        </td>
                         <td>
                             <input type='hidden' name='mcq_5' id='mcq_5'>
              <input type='button' id='21' value='1' onclick='colorchange5(21,1);' class='checkBox' style='background:black'>
              <input type='button' id='22' value='2' onclick='colorchange5(22,2);' class='checkBox' style='background:black'>
              <input type='button' id='23' value='3' onclick='colorchange5(23,3);' class='checkBox' style='background:black'>
              <input type='button' id='24' value='4' onclick='colorchange5(24,4);' class='checkBox' style='background:black'>
              <input type='button' id='25' value='5' onclick='colorchange5(25,5);' class='checkBox' style='background:black'>
                        </td>
                    </tr>
                    <tr>
                        <td>
                           6
                        </td>
                        <td>
                            ".$row['mcq_6']."
                        </td>
                         <td>
                             <input type='hidden' name='mcq_6' id='mcq_6'>
              <input type='button' id='26' value='1' onclick='colorchange6(26,1);' class='checkBox' style='background:black'>
              <input type='button' id='27' value='2' onclick='colorchange6(27,2);' class='checkBox' style='background:black'>
              <input type='button' id='28' value='3' onclick='colorchange6(28,3);' class='checkBox' style='background:black'>
              <input type='button' id='29' value='4' onclick='colorchange6(29,4);' class='checkBox' style='background:black'>
              <input type='button' id='30' value='5' onclick='colorchange6(30,5);' class='checkBox' style='background:black'>
                        </td>
                    </tr>
                               <tr>
                        <td>
                           7
                        </td>
                        <td>
                            ".$row['mcq_7']."
                        </td>
                         <td>
                             <input type='hidden' name='mcq_7' id='mcq_7'>
              <input type='button' id='31' value='1' onclick='colorchange7(31,1);' class='checkBox' style='background:black'>
              <input type='button' id='32' value='2' onclick='colorchange7(32,2);' class='checkBox' style='background:black'>
              <input type='button' id='33' value='3' onclick='colorchange7(33,3);' class='checkBox' style='background:black'>
              <input type='button' id='34' value='4' onclick='colorchange7(34,4);' class='checkBox' style='background:black'>
              <input type='button' id='35' value='5' onclick='colorchange7(35,5);' class='checkBox' style='background:black'>
                        </td>
                    </tr>
                    <tr>
                        <td>
                           8
                        </td>
                        <td>
                            ".$row['mcq_8']."
                        </td>
                         <td>
                             <input type='hidden' name='mcq_8' id='mcq_8'>
              <input type='button' id='36' value='1' onclick='colorchange8(36,1);' class='checkBox' style='background:black'>
              <input type='button' id='37' value='2' onclick='colorchange8(37,2);' class='checkBox' style='background:black'>
              <input type='button' id='38' value='3' onclick='colorchange8(38,3);' class='checkBox' style='background:black'>
              <input type='button' id='39' value='4' onclick='colorchange8(39,4);' class='checkBox' style='background:black'>
              <input type='button' id='40' value='5' onclick='colorchange8(40,5);' class='checkBox' style='background:black'>
                        </td>
                    </tr>
                               <tr>
                        <td>
                           9
                        </td>
                        <td>
                            ".$row['mcq_9']."
                        </td>
                         <td>
                             <input type='hidden' name='mcq_9' id='mcq_9'>
              <input type='button' id='41' value='1' onclick='colorchange9(41,1);' class='checkBox' style='background:black'>
              <input type='button' id='42' value='2' onclick='colorchange9(42,2);' class='checkBox' style='background:black'>
              <input type='button' id='43' value='3' onclick='colorchange9(43,3);' class='checkBox' style='background:black'>
              <input type='button' id='44' value='4' onclick='colorchange9(44,4);' class='checkBox' style='background:black'>
              <input type='button' id='45' value='5' onclick='colorchange9(45,5);' class='checkBox' style='background:black'>
                        </td>
                    </tr>
                               <tr>
                        <td>
                           10
                        </td>
                        <td>
                            ".$row['mcq_10']."
                        </td>
                         <td>
                             <input type='hidden' name='mcq_10' id='mcq_10'>
              <input type='button' id='46' value='1' onclick='colorchange10(46,1);' class='checkBox' style='background:black'>
              <input type='button' id='47' value='2' onclick='colorchange10(47,2);' class='checkBox' style='background:black'>
              <input type='button' id='48' value='3' onclick='colorchange10(48,3);' class='checkBox' style='background:black'>
              <input type='button' id='49' value='4' onclick='colorchange10(49,4);' class='checkBox' style='background:black'>
              <input type='button' id='50' value='5' onclick='colorchange10(50,5);' class='checkBox' style='background:black'>
                        </td>
                    </tr>
                               <tr>
                        <td>
                           11
                        </td>
                        <td>
                            ".$row['mcq_11']."
                        </td>
                         <td>
                             <input type='hidden' name='mcq_11' id='mcq_11'>
              <input type='button' id='51' value='1' onclick='colorchange11(51,1);' class='checkBox' style='background:black'>
              <input type='button' id='52' value='2' onclick='colorchange11(52,2);' class='checkBox' style='background:black'>
              <input type='button' id='53' value='3' onclick='colorchange11(53,3);' class='checkBox' style='background:black'>
              <input type='button' id='54' value='4' onclick='colorchange11(54,4);' class='checkBox' style='background:black'>
              <input type='button' id='55' value='5' onclick='colorchange11(55,5);' class='checkBox' style='background:black'>
                        </td>
                    </tr>
                    <tr>
                        <td>
                           12
                        </td>
                        <td>
                            ".$row['mcq_12']."
                        </td>
                         <td>
                             <input type='hidden' name='mcq_12' id='mcq_12'>
              <input type='button' id='56' value='1' onclick='colorchange12(56,1);' class='checkBox' style='background:black'>
              <input type='button' id='57' value='2' onclick='colorchange12(57,2);' class='checkBox' style='background:black'>
              <input type='button' id='58' value='3' onclick='colorchange12(58,3);' class='checkBox' style='background:black'>
              <input type='button' id='59' value='4' onclick='colorchange12(59,4);' class='checkBox' style='background:black'>
              <input type='button' id='60' value='5' onclick='colorchange12(60,5);' class='checkBox' style='background:black'>
                        </td>
                    </tr>
                               <tr>
                        <td>
                           13
                        </td>
                        <td>
                            ".$row['mcq_13']."
                        </td>
                         <td>
                             <input type='hidden' name='mcq_13' id='mcq_13'>
              <input type='button' id='61' value='1' onclick='colorchange13(61,1);' class='checkBox' style='background:black'>
              <input type='button' id='62' value='2' onclick='colorchange13(62,2);' class='checkBox' style='background:black'>
              <input type='button' id='63' value='3' onclick='colorchange13(63,3);' class='checkBox' style='background:black'>
              <input type='button' id='64' value='4' onclick='colorchange13(64,4);' class='checkBox' style='background:black'>
              <input type='button' id='65' value='5' onclick='colorchange13(65,5);' class='checkBox' style='background:black'>
                        </td>
                    </tr>
                               <tr>
                        <td>
                           14
                        </td>
                        <td>
                            ".$row['mcq_14']."
                        </td>
                         <td>
                             <input type='hidden' name='mcq_14' id='mcq_14'>
              <input type='button' id='66' value='1' onclick='colorchange14(66,1);' class='checkBox' style='background:black'>
              <input type='button' id='67' value='6' onclick='colorchange14(67,2);' class='checkBox' style='background:black'>
              <input type='button' id='68' value='6' onclick='colorchange14(68,3);' class='checkBox' style='background:black'>
              <input type='button' id='69' value='6' onclick='colorchange14(69,4);' class='checkBox' style='background:black'>
              <input type='button' id='70' value='5' onclick='colorchange14(70,5);' class='checkBox' style='background:black'>
                        </td>
                    </tr>
                               <tr>
                        <td>
                           15
                        </td>
                        <td>
                            ".$row['mcq_15']."
                        </td>
                         <td>
                             <input type='hidden' name='mcq_15' id='mcq_15'>
              <input type='button' id='71' value='1' onclick='colorchange15(71,1);' class='checkBox' style='background:black'>
              <input type='button' id='72' value='2' onclick='colorchange15(72,2);' class='checkBox' style='background:black'>
              <input type='button' id='73' value='3' onclick='colorchange15(73,3);' class='checkBox' style='background:black'>
              <input type='button' id='74' value='4' onclick='colorchange15(74,4);' class='checkBox' style='background:black'>
              <input type='button' id='75' value='5' onclick='colorchange15(75,5);' class='checkBox' style='background:black'>
                        </td>
                    </tr>
                               <tr>
                        <td>
                           16
                        </td>
                        <td>
                            ".$row['mcq_16']."
                        </td>
                         <td>
                             <input type='hidden' name='mcq_16' id='mcq_16'>
              <input type='button' id='76' value='1' onclick='colorchange16(76,1);' class='checkBox' style='background:black'>
              <input type='button' id='77' value='2' onclick='colorchange16(77,2);' class='checkBox' style='background:black'>
              <input type='button' id='78' value='3' onclick='colorchange16(78,3);' class='checkBox' style='background:black'>
              <input type='button' id='79' value='4' onclick='colorchange16(79,4);' class='checkBox' style='background:black'>
              <input type='button' id='80' value='5' onclick='colorchange16(80,5);' class='checkBox' style='background:black'>
                        </td>
                    </tr>
                               <tr>
                        <td>
                           17
                        </td>
                        <td>
                            ".$row['mcq_17']."
                        </td>
                         <td>
                             <input type='hidden' name='mcq_17' id='mcq_17'>
              <input type='button' id='81' value='1' onclick='colorchange17(81,1);' class='checkBox' style='background:black'>
              <input type='button' id='82' value='2' onclick='colorchange17(82,2);' class='checkBox' style='background:black'>
              <input type='button' id='83' value='3' onclick='colorchange17(83,3);' class='checkBox' style='background:black'>
              <input type='button' id='84' value='4' onclick='colorchange17(84,4);' class='checkBox' style='background:black'>
              <input type='button' id='85' value='5' onclick='colorchange17(85,5);' class='checkBox' style='background:black'>
                        </td>
                    </tr>
                               <tr>
                        <td>
                           18
                        </td>
                        <td>
                            ".$row['mcq_18']."
                        </td>
                         <td>
                             <input type='hidden' name='mcq_18' id='mcq_18'>
              <input type='button' id='86' value='1' onclick='colorchange18(86,1);' class='checkBox' style='background:black'>
              <input type='button' id='87' value='2' onclick='colorchange18(87,2);' class='checkBox' style='background:black'>
              <input type='button' id='88' value='3' onclick='colorchange18(88,3);' class='checkBox' style='background:black'>
              <input type='button' id='89' value='4' onclick='colorchange18(89,4);' class='checkBox' style='background:black'>
              <input type='button' id='90' value='5' onclick='colorchange18(90,5);' class='checkBox' style='background:black'>
                        </td>
                    </tr>
                               <tr>
                        <td>
                           19
                        </td>
                        <td>
                            ".$row['mcq_19']."
                        </td>
                         <td>
                             <input type='hidden' name='mcq_19' id='mcq_19'>
              <input type='button' id='91' value='1' onclick='colorchange19(91,1);' class='checkBox' style='background:black'>
              <input type='button' id='92' value='2' onclick='colorchange19(92,2);' class='checkBox' style='background:black'>
              <input type='button' id='93' value='3' onclick='colorchange19(93,3);' class='checkBox' style='background:black'>
              <input type='button' id='94' value='4' onclick='colorchange19(94,4);' class='checkBox' style='background:black'>
              <input type='button' id='95' value='5' onclick='colorchange19(95,5);' class='checkBox' style='background:black'>
                        </td>
                    </tr>
                               <tr>
                        <td>
                           20
                        </td>
                        <td>
                            ".$row['mcq_20']."
                        </td>
                        <td>
                              <input type='hidden' name='mcq_20' id='mcq_20'>
              <input type='button' id='96' value='1' onclick='colorchange20(96,1);' class='checkBox' style='background:black'>
              <input type='button' id='97' value='2' onclick='colorchange20(97,2);' class='checkBox' style='background:black'>
              <input type='button' id='98' value='3' onclick='colorchange20(98,3);' class='checkBox' style='background:black'>
              <input type='button' id='99' value='4' onclick='colorchange20(99,4);' class='checkBox' style='background:black'>
              <input type='button' id='100' value='5' onclick='colorchange20(100,5);' class='checkBox' style='background:black'>
                        </td>
                    </tr>
                               <tr>
                        <td>
                           21
                        </td>
                        <td>
                            ".$row['mcq_21']."
                        </td>
                        <td>
                             <input type='hidden' name='mcq_21' id='mcq_21'>
              <input type='button' id='101' value='1' onclick='colorchange21(101,1);' class='checkBox' style='background:black'>
              <input type='button' id='102' value='2' onclick='colorchange21(102,2);' class='checkBox' style='background:black'>
              <input type='button' id='103' value='3' onclick='colorchange21(103,3);' class='checkBox' style='background:black'>
              <input type='button' id='104' value='4' onclick='colorchange21(104,4);' class='checkBox' style='background:black'>
              <input type='button' id='105' value='5' onclick='colorchange21(105,5);' class='checkBox' style='background:black'>
                        </td>
                    </tr>
                               <tr>
                        <td>
                           22
                        </td>
                        <td>
                            ".$row['mcq_22']."
                        </td>
                        <td>
                             <input type='hidden' name='mcq_22' id='mcq_22'>
              <input type='button' id='106' value='1' onclick='colorchange22(106,1);' class='checkBox' style='background:black'>
              <input type='button' id='107' value='2' onclick='colorchange22(107,2);' class='checkBox' style='background:black'>
              <input type='button' id='108' value='3' onclick='colorchange22(108,3);' class='checkBox' style='background:black'>
              <input type='button' id='109' value='4' onclick='colorchange22(109,4);' class='checkBox' style='background:black'>
              <input type='button' id='110' value='5' onclick='colorchange22(110,5);' class='checkBox' style='background:black'>
                        </td>
                    </tr>
                    <tr>
                        <td>
                           23
                        </td>
                        <td>
                            ".$row['mcq_23']."
                        </td>
                        <td>
                              <input type='hidden' name='mcq_23' id='mcq_23'>
              <input type='button' id='111' value='1' onclick='colorchange23(111,1);' class='checkBox' style='background:black'>
              <input type='button' id='112' value='2' onclick='colorchange23(112,2);' class='checkBox' style='background:black'>
              <input type='button' id='113' value='3' onclick='colorchange23(113,3);' class='checkBox' style='background:black'>
              <input type='button' id='114' value='4' onclick='colorchange23(114,4);' class='checkBox' style='background:black'>
              <input type='button' id='115' value='5' onclick='colorchange23(115,5);' class='checkBox' style='background:black'>
                        </td>
                    </tr>
                               <tr>
                        <td>
                           24
                        </td>
                        <td>
                            ".$row['mcq_24']."
                        </td>
                        <td>
                             <input type='hidden' name='mcq_24' id='mcq_24'>
              <input type='button' id='116' value='1' onclick='colorchange24(116,1);' class='checkBox' style='background:black'>
              <input type='button' id='117' value='2' onclick='colorchange24(117,2);' class='checkBox' style='background:black'>
              <input type='button' id='118' value='3' onclick='colorchange24(118,3);' class='checkBox' style='background:black'>
              <input type='button' id='119' value='4' onclick='colorchange24(119,4);' class='checkBox' style='background:black'>
              <input type='button' id='120' value='5' onclick='colorchange24(120,5);' class='checkBox' style='background:black'>
                        </td>
                    </tr>
                               <tr>
                        <td>
                           25
                        </td>
                        <td>
                            ".$row['mcq_25']."
                        </td>
                        <td>
                              <input type='hidden' name='mcq_25' id='mcq_25'>
              <input type='button' id='121' value='1' onclick='colorchange25(121,1);' class='checkBox' style='background:black'>
              <input type='button' id='122' value='2' onclick='colorchange25(122,2);' class='checkBox' style='background:black'>
              <input type='button' id='123' value='3' onclick='colorchange25(123,3);' class='checkBox' style='background:black'>
              <input type='button' id='124' value='4' onclick='colorchange25(124,4);' class='checkBox' style='background:black'>
              <input type='button' id='125' value='5' onclick='colorchange25(125,5);' class='checkBox' style='background:black'>
                        </td>
                    </tr>
                 
                               <tr>
                        <td>
                           26
                        </td>
                        <td>
                            ".$row['mcq_26']."
                        </td>
                        <td>
                             <input type='hidden' name='mcq_26' id='mcq_26'>
              <input type='button' id='126' value='1' onclick='colorchange26(126,1);' class='checkBox' style='background:black'>
              <input type='button' id='127' value='2' onclick='colorchange26(127,2);' class='checkBox' style='background:black'>
              <input type='button' id='128' value='3' onclick='colorchange26(128,3);' class='checkBox' style='background:black'>
              <input type='button' id='129' value='4' onclick='colorchange26(129,4);' class='checkBox' style='background:black'>
              <input type='button' id='130' value='5' onclick='colorchange26(130,5);' class='checkBox' style='background:black'>
                        </td>
                    </tr>
                               <tr>
                        <td>
                           27
                        </td>
                        <td>
                            ".$row['mcq_27']."
                        </td>
                        <td>
                              <input type='hidden' name='mcq_27' id='mcq_27'>
              <input type='button' id='131' value='1' onclick='colorchange27(131,1);' class='checkBox' style='background:black'>
              <input type='button' id='132' value='2' onclick='colorchange27(132,2);' class='checkBox' style='background:black'>
              <input type='button' id='133' value='3' onclick='colorchange27(133,3);' class='checkBox' style='background:black'>
              <input type='button' id='134' value='4' onclick='colorchange27(134,4);' class='checkBox' style='background:black'>
              <input type='button' id='135' value='5' onclick='colorchange27(135,5);' class='checkBox' style='background:black'>
                        </td>
                    </tr>
                               <tr>
                        <td>
                           28
                        </td>
                        <td>
                            ".$row['mcq_28']."
                        </td>
                        <td>
                             <input type='hidden' name='mcq_28' id='mcq_28'>
              <input type='button' id='136' value='1' onclick='colorchange28(136,1);' class='checkBox' style='background:black'>
              <input type='button' id='137' value='2' onclick='colorchange28(137,2);' class='checkBox' style='background:black'>
              <input type='button' id='138' value='3' onclick='colorchange28(138,3);' class='checkBox' style='background:black'>
              <input type='button' id='139' value='4' onclick='colorchange28(139,4);' class='checkBox' style='background:black'>
              <input type='button' id='140' value='5' onclick='colorchange28(140,5);' class='checkBox' style='background:black'>
                        </td>
                    </tr>
                               <tr>
                        <td>
                           29
                        </td>
                        <td>
                            ".$row['mcq_29']."
                        </td>
                        <td>
                             <input type='hidden' name='mcq_29' id='mcq_29'>
              <input type='button' id='141' value='1' onclick='colorchange29(141,1);' class='checkBox' style='background:black'>
              <input type='button' id='142' value='2' onclick='colorchange29(142,2);' class='checkBox' style='background:black'>
              <input type='button' id='143' value='3' onclick='colorchange29(143,3);' class='checkBox' style='background:black'>
              <input type='button' id='144' value='4' onclick='colorchange29(144,4);' class='checkBox' style='background:black'>
              <input type='button' id='145' value='5' onclick='colorchange29(145,5);' class='checkBox' style='background:black'>
                        </td>
                    </tr>
                               <tr>
                        <td>
                           30
                        </td>
                        <td>
                            ".$row['mcq_30']."
                        </td>
                        <td>
                             <input type='hidden' name='mcq_30' id='mcq_30'>
              <input type='button' id='146' value='1' onclick='colorchange30(146,1);' class='checkBox' style='background:black'>
              <input type='button' id='147' value='2' onclick='colorchange30(147,2);' class='checkBox' style='background:black'>
              <input type='button' id='148' value='3' onclick='colorchange30(148,3);' class='checkBox' style='background:black'>
              <input type='button' id='149' value='4' onclick='colorchange30(149,4);' class='checkBox' style='background:black'>
              <input type='button' id='150' value='5' onclick='colorchange30(150,5);' class='checkBox' style='background:black'>
                        </td>
                    </tr>
                    <tr>
                    <td colspan='3'>
                  
                   <input type='text' id='nametxt' name='nametxt' placeholder='Name'>
                    </td>
                    </tr>        
                    <tr>
                    <td colspan='3'>
                  
                    <button type='submit' name='submit' id='alternativebut' >Submit alternative answers</button>
                    </td>
                    

                  </table>
                  </form>
                  
                  
                 
                  
            </div>";
        }
        
    }

                }else {

                }
      
                

               
    ?>
 

  






       
        





<?php
include 'scriptcode/1buttonscript.php';
 ?>

<?php
include 'footer.php';
?>
    