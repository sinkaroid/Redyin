<title>smallenc0de | Download</title>
<link href="http://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet" type="text/css">
<script type="text/javascript" src="/lib/rain.js"></script>
<style>
.memek {
  margin: auto;
  background-color: #f7f3f3;
  width: 50%;
  
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
  width: 30%;
  
  padding: 10px;
  -moz-border-radius: 5px;
	-webkit-border-radius: 20px;
}
</style>
<font face=Ubuntu>
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

?>
</div></div></div>
<p><center>
 <div class="intro">
<font color=crimson face=consolas size=3>

<b>&copy; Sin,</b>

<br><font size="3" color="gray">
feel free to pull,issues,or stealing at:<br><font color=blue> https://github.com/sinkaroid/daizurin</font>
</font>
</div>   