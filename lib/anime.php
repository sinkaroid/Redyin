<title>AntifansubID</title>
<link href="http://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="/lib/style.css">
<?php $start_time = microtime(true); ?>

<script type="text/javascript" src="/lib/rain.js"></script>
<style>
  body { 
    background: black url("/src/bg.jpg") no-repeat fixed center; 
 }
 
</style>
<center>
<div class="toto">
<font face="courier" size="4" color="red">
<pre style="text-align: left;">
                      _ _                  ___      _x265     
                     | | |                / _ \    | |     
  ___ _ __ ___   __ _| | | ___ _ __   ___| | | | __| | ___ 
 / __| '_ ` _ \ / _` | | |/ _ \ '_ \ / __| | | |/ _` |/ _ \
 \__ \ | | | | | (_| | | |  __/ | | | (__| |_| | (_| |  __/
 |___/_| |_| |_|\__,_|_|_|\___|_| |_|\___|\___/ \__,_|\___|
                                                          
</pre></div>
<center>
<center>
<?php

echo '<font face=Consolas color=gold size=3>';
$tanggal= mktime(date("m"),date("d"),date("Y"));
echo "[<font color=green>d</font> : <b>(".date("d-M-Y", $tanggal).")</b> ";
date_default_timezone_set('Asia/Jakarta');
$jam=date("H:i:s");
echo "-> <font color=green>t</font> : <b>(". $jam.") "."</b> -> ";
$a = date ("H");
if (($a>=6) && ($a<=11)){
echo "<font color=white><b>Morning</font></b>]";
}
else if(($a>11) && ($a<=15))
{
echo ", Morning";}
else if (($a>15) && ($a<=18)){
echo ", Good day";}
else { echo ", <b> Night</b>";}
echo '</font>';
?>



<font face=Ubuntu size="2" color="white">
<center><br><div id="steal"><a href="/"><b>/home<b/></a>
<a href="/list" rel="nofollow" target="_blank"><b>animelist</b></a>
<a href="/?chart" rel="nofollow" target="_blank"><b>schedule</b></a></div><br>
</font>


<form action="anime.php" method="get">
<input type="show" style="width:10%;" placeholder="series" name="q"><br>
</form>

<?php

require 'search.php';


if(isset($_GET['q'])){

  $babi = $_GET['q'];
  $bangsat = 'https://www.daizurin.com/?s=';
  $kontol = $bangsat . $babi; 
  $curl = curl_init($kontol); 
  
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE); 
  $target = curl_exec($curl); 
  if(curl_errno($curl))
  {
    echo 'error: ' . curl_error($curl);
    exit;
  }
   
  curl_close($curl);
  
  
  $tag = '/<div class="entry-thumb">(.*?)<\/section>/s';
  if ( preg_match($tag, $target, $udah) )
  
    
      echo 'searched > <font color=white>',$babi,'</font><br><br>',
      wordFilter($udah[0]);
  else 
      print "error";
      
  }
  
?>

