
<link href="http://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet" type="text/css">
<script class="udan" type="text/javascript" src="/lib/rain.js"></script>
<style>
.memek {
  margin: auto;
  background:rgba(255, 255, 255, 0.801);
  width: 60%;
  
  padding: 10px;
  -moz-border-radius: 5px;
	-webkit-border-radius: 30px;
}

.bokong {
  margin: auto;
  text-align: center;
  width: 100%;
  padding: 1px;
}

div.rounded {
   
   border: 3px dotted gray;
   margin: auto;
   width: 70%;
   color: #000000;
   font-weight: bold;
   padding: 1px;
   
   -moz-border-radius: 5px;
   border-radius: 10px; }


.koceng {
  display: inline-block;
  text-align: left;
 }
 
 #steal a{
  padding:5px 5px;
  margin:1;
  background:white;
  text-decoration:none;
  letter-spacing:1px;
  -moz-border-radius: 10px; -webkit-border-radius: 5px; -khtml-border-radius: 5px; border-radius: 5px;
}
#steal a:hover{
  background:pink;
  border-bottom:5px solid #red;
  border-top:5px solid #red;
}
 div.rounded {
   
    border: 3px dotted gray;
    margin: auto;
  width: 70%;
	color: #000000;
	font-weight: bold;
    padding: 1px;
    
	-moz-border-radius: 5px;
    -webkit-border-radius: 10px; }
    
    div.kotak {
	background-color: silver;
    margin: auto;
  width: 30%;
	color: #000000;
    padding: 1px;
    
	-moz-border-radius: 5px;
	-webkit-border-radius: 20px; }   
   
  body {
  background: url(/src/goblok.jpg) no-repeat center center fixed;
  background-size: cover;
  height: 100%;
  
}

.intro {
  margin: auto;
  background-color: #f7f3f3;
  width: 20%;
  
  padding: 10px;
  -moz-border-radius: 5px;
	-webkit-border-radius: 20px;
}

img {
  -moz-border-radius: 5px;
	 -webkit-border-radius: 40px; }    
 }


a:link {
  color: green;
  background-color: transparent;
  text-decoration: none;
}
a:visited {
  color: pink;
  background-color: transparent;
  text-decoration: none;
}
a:hover {
  color: red;
  background-color: transparent;
  text-decoration: underline;
}
a:active {
  color: yellow;
  background-color: transparent;
  text-decoration: underline;
}
</style>

<font face=Ubuntu>
<center><div id="steal"><a href="/"><b>/home<b/></a>
</div>  
<b>
<?php
$start_time = microtime(true);
$form = '<form action="lib/get.php" method="get">
<input type="hidden" style="width:40%;" name="id"><br>
<input type="hidden" name="id" value="SUCK">
</center>
</form>';


if(isset($_GET['id'])){
  $anti = $_GET['id'];
 
  $bangsat = 'https://www.daizurin.com/';
  $kontol = $bangsat . $anti; 
  $curl = curl_init($kontol); 

curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE); 
$page = curl_exec($curl); 
if(curl_errno($curl)) 
{
	echo 'Scraper error: ' . curl_error($curl);
	exit;
}
 
curl_close($curl);

print '<div class="memek" style="width: 850px"><center><br>';
//anime info    
function wordFilter($text)
{
    $ambilkata = $text;
    
    $ambilkata = str_replace('type="text/javascript"', 'type="text/javascript" hidden>', $ambilkata); #dog
    $ambilkata = str_replace('<a href="https://adserver', '<a hidden', $ambilkata); #dog again
    $ambilkata = str_replace('Alt download', '', $ambilkata); 
    $ambilkata = str_replace('width="', 'width="300"', $ambilkata); 
    $ambilkata = str_replace('height="', 'height="200"', $ambilkata);
    $ambilkata = str_replace('<p>Information', '<div class="rounded"><p>Information', $ambilkata); 
    $ambilkata = str_replace('<p>Sinopsis', '</div><p>Sinopsis', $ambilkata); 
    return $ambilkata;
}



//link    
$regex = '/<div class="entry-content">(.*?)<b>CARA DOWNLOAD:/s'; // \* = "*" matches
if ( preg_match($regex, $page, $list) )
	
    echo wordFilter($list[1]); 
else 
    print "Not found";

}

function sed($text)
{
    $sed = $text;
    $sed = str_replace('-', ' ', $sed);
    
    return $sed;
}

$judul = sed(strtoupper($_GET['id']));

?>
</div>
</b>
<title><?php echo $judul,' - Download'; ?></title>
</div></div></div>
<p><center>
<div class="intro" style="width: 400px">
<font color=crimson face=consolas size=3>

<b>&copy; Sin,</b>
(<a href="https://dolls.redsplit.org/782309035" rel="nofollow" target="_blank" class="class2">server status</a>) | <font size="2" color="green">
scraped in <?php echo(number_format(microtime(true) - $start_time, 2)); ?> sec.</font>
<br><font size="2" color="gray">
feel free to pull,issues,or stealing at:<br><font color=blue> https://github.com/sinkaroid/Redyin</font>
</font>
</div>    