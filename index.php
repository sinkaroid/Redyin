<title>smallenc0de</title>
<?php $start_time = microtime(true); 

// curl jadwal
$start_time = microtime(true);
if(isset($_GET['chart'])){
require 'lib/jadwal.php';  #model
}
?>
<link rel="stylesheet" type="text/css" href="/lib/style.css">


<link href="http://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet" type="text/css">

<script type="text/javascript" src="/lib/rain.js"></script>
<style>
  body { 
   background: black url("src/bg.jpg") no-repeat fixed center; 
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

<?php

// multiple timestamp
echo '<b><font face=Ubuntu color=gold size=3>';
date_default_timezone_set('Asia/Tokyo'); 
echo 'JST: ',date('M-d (H:i)');
print '</font>';

echo ' <font color=white size=5>//</font> ';

echo '<font face=Ubuntu color=orange size=3>';
date_default_timezone_set('Asia/Jakarta'); 
echo 'Asia/jakarta: ',date('M-d (H:i)');
print '</font></b>';
?>


<font face=Ubuntu size="2" color="white">
<br><br><div id="steal"><a href="/"><b>/home<b/></a>
<a href="/list" rel="nofollow" target="_blank"><b>animelist</b></a>
<a href="?chart" rel="nofollow" target="_blank"><b>schedule</b></a></div><br>
</font>


<form action="lib/anime.php" method="get">
<input type="show" style="width:10%;" placeholder="series" name="q"><br>
</form>

<?php
require 'lib/str.php'; 

?>
<div class="page">
<a href="/page?x=1">1</span></a>&nbsp;&nbsp;&nbsp;<a href="/page?x=2"><span class="pg">2</span></a>&nbsp;&nbsp;&nbsp;<a href="/page?x=3"><span class="pg">3</span></a>&nbsp;&nbsp;&nbsp;<a href="/page?x=4"><span class="pg">4</span></a>&nbsp;&nbsp;&nbsp;<a href="/page?x=5"><span class="pg">5</span></a>&nbsp;&nbsp;&nbsp;<a href="/page?x=6"><span class="pg">6</span></a>&nbsp;&nbsp;&nbsp;<a href="/page?x=7"><span class="pg">7</span></a>&nbsp;&nbsp;&nbsp;<a href="/page?x=8"><span class="pg">8</span></a>&nbsp;&nbsp;&nbsp;<a href="/page?x=9"><span class="pg">9</span></a>&nbsp;&nbsp;&nbsp;<a href="/page?x=10"><span class="pg">10</span></a>&nbsp;&nbsp;&nbsp;<a href="/page?x=11"><span class="pg">&gt;</span></a>&nbsp;&nbsp;&nbsp;<a href="/page?x=87"><span class="pg">Last</span></a> </div>
</div>
</center>
<div class="argu">
<font color=black face=Ubuntu size=3>

<center>params:<br></center>
<?php
$bc = basename(__FILE__);
echo "SITE: ".$_SERVER['SERVER_NAME']."<br>";
echo "FILE: ".$bc."<br>";


echo "
/$bc?home [mainpage]<br>
/$bc?page={1..99)[multiple]<br>
/lib/anime.php?q=[query]";
  ?>
</div>  
<br>
<center>

<p>
<div class="intro">
<font color=crimson face=consolas size=3>

<b>&copy; Sin,</b>
(<a href="lib/info.php" rel="nofollow" target="_blank" class="class2">server status</a>) | <font size="2" color="green">
scraped in <?php echo(number_format(microtime(true) - $start_time, 2)); ?> sec.</font>
<br><font size="2" color="gray">
feel free to pull,issues,or stealing at:<br><font color=blue> https://github.com/sinkaroid/smallencode</font>
</font>
</div>  
