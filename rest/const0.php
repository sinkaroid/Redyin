<title>smallenc0de</title>
<link rel="stylesheet" type="text/css" href="/lib/style.css">

<link href="http://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/css/flag-icon.min.css">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<script type="text/javascript" src="/lib/rain.js"></script>
<style>
    body {
  background: url(src/goblok.jpg) no-repeat center center fixed;
  background-size: cover;
  height: 100%;
  
}

#loader { 
            border: 12px solid #f3f3f3; 
            border-radius: 50%; 
            border-top: 12px solid #444444; 
            width: 70px; 
            height: 70px; 
            animation: spin 1s linear infinite; 
        } 
          
        @keyframes spin { 
            100% { 
                transform: rotate(360deg); 
            } 
        } 
          
        .center { 
            position: absolute; 
            top: 0; 
            bottom: 0; 
            left: 0; 
            right: 0; 
            margin: auto; 
        } 
</style>
<center>
<div class="toto">
<font face="courier" size="4" color="red">
<pre style="text-align: left;">
__   ___            ______         _           _ _ _   
\ \ / (_)           | ___ \       | |         | (_) |  
 \ V / _ _ __ ______| |_/ /___  __| |___ _ __ | |_| |_ 
  \ / | | '_ \______|    // _ \/ _` / __| '_ \| | | __|
  | | | | | | |_    | |\ \  __/ (_| \__ \ |_) | | | |_ 
  \_/ |_|_| |_( )   \_| \_\___|\__,_|___/ .__/|_|_|\__|
              |/                        | |            
                                        |_|       
                                                          
</pre></div>

<div class="anjing" style="width: 650px">
<font face=Ubuntu color=white size=2><div id="sis">
<i class="fa fa-user-circle" style="font-size:25px;color:white"></i>
<a href="/"><b>/yin<b/></a>
<a href="https://kato.kireisubs.org/" rel="nofollow" target="_blank"><b>/kato</b></a>
<a href="#" rel="nofollow" target="_blank"><b>/miyamori</b></a>
<a href="https://kumiko.kireisubs.org/" rel="nofollow" target="_blank"><b>/oumae</b></a>
<a href="https://sayuki.kireisubs.org/" rel="nofollow" target="_blank"><b>/sayuki</b></a>
<a href="https://nino.kireisubs.org/" rel="nofollow" target="_blank"><b>/nino</b></a><br><br>
<font color=gold size=2>(0ur core Sisters,an smol circle merged into antifansub and core scraper as well.)</font>
<hr width=70%>
<!-- <img src="https://i.imgur.com/7dqql2a.png" align="right" width="150" height="150"> -->
</div><p>

<center>
<?php

// class tentang

if(isset($_GET['about'])){
  echo '
  <font face=consolas color=white>
  fuckoff
  <p>./eof</font>';  
  exit;
  } #or curl /page/?about

// multiple timestamp

echo '<i class="fa fa-clock-o" style="font-size:25px;color:white"></i><i class="flag-icon flag-icon-jp" style="font-size:20px"></i><font face=Ubuntu color=gold size=3>';
date_default_timezone_set('Asia/Tokyo'); 
echo ' Asia/Tokyo: ',date('M-d (H:i)');
print '</font>';
echo ' <font color=white size=5> || </font> ';
echo '<i class="fa fa-clock-o" style="font-size:25px;color:white"></i><i class="flag-icon flag-icon-id" style="font-size:20px"></i><font face=Ubuntu color=orange size=3>';
date_default_timezone_set('Asia/Jakarta'); 
echo ' Asia/jakarta: ',date('M-d (H:i)');
print '</font>';
?>


<font face=Ubuntu size="2" color="white">
<center><br><div id="steal"><a href="/"><b><i class="fa fa-rocket" style="font-size:25px;color:white"></i>/home<b/></a>
<a href="/list" rel="nofollow" target="_blank"><b><i class="fa fa-desktop" style="font-size:20px;color:white"></i>animelist</b></a>
<a href="?chart" rel="nofollow" target="_blank"><b><i class="fa fa-globe" style="font-size:20px;color:white"></i>fullschedule</b></a>
<a href="#popup1"><b><i class="fab fa-discord" style="font-size:20px;color:white"></i>Discordbots</b></a>
<a href="?about" rel="nofollow" target="_blank"><b><i class="fa fa-bug" style="font-size:20px;color:white"></i>about</b></a>
</div><br>

<form action="/lib/anime.php" method="get">
<i class="fa fa-terminal" style="font-size:20px;color:white"></i> yin@redsplit:~ <input type="show" class="bordergaya" style="width:20%;" placeholder="search.." name="q">
</form>
</font>
</div>
<br>
<div id="sos">
<br><font size=2><i class="fa fa-sun-o" style="font-size:25px;color:white"></i>
<a href="?chart" rel="nofollow" target="_blank">📅current season:
<?php include("lib/api.php"); ?>
</a></font></div><br>
<hr width=10%>
<div class="fetish">

<div class="row">
<body> 
    <div id="loader" class="center"></div> 