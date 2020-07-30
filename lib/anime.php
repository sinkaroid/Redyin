
<link href="http://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="/lib/style.css">
<?php $start_time = microtime(true); ?>

<script type="text/javascript" src="/lib/rain.js"></script>
<style>
    body {
  background: url(/src/goblok.jpg) no-repeat center center fixed;
  background-size: cover;
  height: 100%;
  
}
 
</style>
<center>
<div class="toto">
<font face="courier" size="4" color="gold">
<pre style="text-align: left;">

__   ___            ______         _           _ _ _   
\ \ / (_)           | ___ \       | |         | (_) |  
 \ V / _ _ __ ______| |_/ /___  __| |___ _ __ | |_| |_ 
  \ / | | '_ \______|    // _ \/ _` / __| '_ \| | | __|
  | | | | | | |_    | |\ \  __/ (_| \__ \ |_) | | | |_ 
  \_/ |_|_| |_( )   \_| \_\___|\__,_|___/ .__/|_|_|\__|
              |/                        | |            
                                        |_|       codename:Yin
                                                          
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


<form action="anime.php" method="get">
<input type="show" style="width:10%;" placeholder="series" name="q"><br>
</form>
<div class="fetish">

<div class="row">
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
</div>
<title><?php echo 'searched :', $babi,' - smallenc0de'; ?></title>
