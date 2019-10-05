
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
<font face="courier" size="4" color="gold">
<pre style="text-align: left;">
                      _ _                  ___      _x265     
                     | | |                / _ \    | |     
  ___ _ __ ___   __ _| | | ___ _ __   ___| | | | __| | ___ 
 / __| '_ ` _ \ / _` | | |/ _ \ '_ \ / __| | | |/ _` |/ _ \
 \__ \ | | | | | (_| | | |  __/ | | | (__| |_| | (_| |  __/
 |___/_| |_| |_|\__,_|_|_|\___|_| |_|\___|\___/ \__,_|\___|
                                                          
</pre></div>
<center>
<?php

// multiple timestamp
echo '<b><font face=Ubuntu color=gold size=3>';
date_default_timezone_set('Asia/Tokyo'); 
echo 'JST: ',date('M-d (H:i)');
print '</font>';

echo ' <font color=white size=5> // </font> ';

echo '<font face=Ubuntu color=orange size=3>';
date_default_timezone_set('Asia/Jakarta'); 
echo 'Asia/jakarta: ',date('M-d (H:i)');
print '</font></b>';
?>



<font face=Ubuntu size="2" color="white">
<center><br><div id="steal"><a href="/"><b>/home<b/></a>
<a href="/list" rel="nofollow" target="_blank"><b>animelist</b></a>
<a href="/?chart" rel="nofollow" target="_blank"><b>schedule</b></a></div><br>
</font>


<form action="/lib/anime.php" method="get">
<input type="show" style="width:10%;" placeholder="series" name="q"><br>
</form>


<?php
echo'<font color=gold>';
echo'<font face=Ubuntu>';
function wordFilter($text)
{
    //string layout
    $ambilkata = $text;
    $ambilkata = str_replace('<a class="entry-category"', '<p hidden>', $ambilkata);
    $ambilkata = str_replace('<b>Genre</b>', '<p hidden>', $ambilkata);
    $ambilkata = str_replace('<div class="entry-thumb">', '<div class="kotak">', $ambilkata);
    $ambilkata = str_replace('h2', 'h4', $ambilkata);

    //string modifyurl
    $ambilkata = str_replace('<a href="https://www.daizurin.com/', '<a href="/lib/get.php?id=', $ambilkata);
    $ambilkata = str_replace('rel="bookmark"', 'rel="nofollow" target="_blank"', $ambilkata);
    $ambilkata = str_replace('title=', 'rel="nofollow" target="_blank" title=', $ambilkata);
    return $ambilkata;
}

if(isset($_GET['x'])){

$babi = $_GET['x'];
$bangsat = 'https://www.daizurin.com/page/';
$kontol = $bangsat . $babi; // site.com/search?q="query" lo jadi ini dipecah jadi 2
$curl = curl_init($kontol); 

curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE); 
$target = curl_exec($curl); 
if(curl_errno($curl))
{
	echo 'error: ' . curl_error($curl);
	exit;
}
 
curl_close($curl);


$tag = '/<div class="content-inside">(.*?)<div class="ft-paginate">/s';
if ( preg_match($tag, $target, $udah) )
	
    echo wordFilter($udah[0]);
else 
    print "error";
}



// usage http://localhost/authremote/antk.php?memek=12(etc.)
?>
<title><?php echo 'page: ', $babi,' - smallenc0de'; ?></title>
<div class="page">
<a href="/page?x=1">1</span></a>&nbsp;&nbsp;&nbsp;<a href="/daizurin/page?x=2"><span class="pg">2</span></a>&nbsp;&nbsp;&nbsp;<a href="/page?x=3"><span class="pg">3</span></a>&nbsp;&nbsp;&nbsp;<a href="/page?x=4"><span class="pg">4</span></a>&nbsp;&nbsp;&nbsp;<a href="/page?x=5"><span class="pg">5</span></a>&nbsp;&nbsp;&nbsp;<a href="/page?x=6"><span class="pg">6</span></a>&nbsp;&nbsp;&nbsp;<a href="/page?x=7"><span class="pg">7</span></a>&nbsp;&nbsp;&nbsp;<a href="/page?x=8"><span class="pg">8</span></a>&nbsp;&nbsp;&nbsp;<a href="/page?x=9"><span class="pg">9</span></a>&nbsp;&nbsp;&nbsp;<a href="/page?x=10"><span class="pg">10</span></a>&nbsp;&nbsp;&nbsp;<a href="/page?x=11"><span class="pg">&gt;</span></a>&nbsp;&nbsp;&nbsp;<a href="/page?x=87"><span class="pg">Last</span></a> </div>
<div>
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