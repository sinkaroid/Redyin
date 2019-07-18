<?php

echo'<font face=Ubuntu>';
function wordFilter($text)
{
    //string layout
    $ambilkata = $text;
    $ambilkata = str_replace('<a class="entry-category"', '<p hidden>', $ambilkata);
    $ambilkata = str_replace('<b>Genre</b>', '<p hidden>', $ambilkata);
    $ambilkata = str_replace('<div class="entry-thumb">', '<div class="kotak">', $ambilkata);
    $ambilkata = str_replace('h2', 'h3', $ambilkata);

    //string modifyurl
    $ambilkata = str_replace('<a href="', '<a href="lib/get.php?anti=', $ambilkata);
    $ambilkata = str_replace('" rel=', '&fansub=SUCK" rel="nofollow" target="_blank" rel=', $ambilkata);
    $ambilkata = str_replace('" title', '&fansub=SUCK" rel="nofollow" target="_blank" " title', $ambilkata);
    return $ambilkata;
}

// page1
$curl = curl_init('https://www.daizurin.com'); 
curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE); 
$page = curl_exec($curl); 
if(curl_errno($curl)) // check for execution errors
{
	echo 'Scraper error: ' . curl_error($curl);
	exit;
}
curl_close($curl);

$regex = '/<div class="content-inside">(.*?)<h2 class="screen-reader-text">/s';
if ( preg_match($regex, $page, $list) )
	
    echo wordFilter($list[0]); 
else 
    print "Not found"; 
 ?>
 <p>
 <div class="intro">
<font color=crimson face=consolas size=3>

<b>&copy; Sin,</b>
(<a href="lib/info.php" rel="nofollow" target="_blank" class="class2">server status</a>) | <font size="3" color="green">
scraped in <?php echo(number_format(microtime(true) - $start_time, 2)); ?> sec.</font>
<br><font size="3" color="gray">
feel free to pull,issues,or stealing at:<br><font color=blue> https://github.com/sinkaroid/antifansub</font>
</font>
</div>  