
<link href="http://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet" type="text/css">
<script type="text/javascript" src="/lib/rain.js"></script>
<style>
.memek {
  margin: auto;
  background-color: #f7f3f3;
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
  background: black url("src/bg.jpg") no-repeat fixed center; 
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
</style>

<font face=Ubuntu>
<center><div id="steal"><a href="/"><b>/home<b/></a>
</div>  
<b>
<?php
$form = '<form action="lib/get.php" method="get">
<input type="hidden" style="width:40%;" name="id"><br>
<input type="hidden" name="id" value="SUCK">
</center>
</form>';

print $form;

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

print '<div class="memek"><center><br>';
//anime info    
function wordFilter($text)
{
    $ambilkata = $text;
    $ambilkata = str_replace('<p style="text-align: center;">', '<p hidden>', $ambilkata);
    $ambilkata = str_replace('<h2 style="text-align: center;">', '<p hidden>', $ambilkata);
    $ambilkata = str_replace('<span class="dpsp-network-label">', '<p hidden>', $ambilkata);
    $ambilkata = str_replace('<div id="M477931ScriptRootC728502"> ', '<div hidden>', $ambilkata);
    $ambilkata = str_replace('<li>', '', $ambilkata);
    return $ambilkata;
}



//link    
$regex = '/<div class="entry-content">(.*?)<\/article>/s';
if ( preg_match($regex, $page, $list) )
	
    echo wordFilter($list[0]); 
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
</b>
<title><?php echo $judul,' - Download'; ?></title>
</div></div></div>
<p><center>
 <div class="intro">
<font color=crimson face=consolas size=2>

<b>&copy; Sin,</b>

<br><font size="2" color="gray">
feel free to pull,issues,or stealing at:<br><font color=blue> https://github.com/sinkaroid/smallencode</font>
</font>
</div>   