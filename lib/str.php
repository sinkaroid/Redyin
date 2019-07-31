<?php

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
