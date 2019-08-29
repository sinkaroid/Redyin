<?php 
header('Content-Type: text/plain');
$url = 'https://www.daizurin.com/feed';
function wordFilter($text)
{
    $sed = $text;
    $sed = str_replace('https://www.daizurin.com/', 'https://yin.kireisubs.org/lib/get.php?id=', $sed);
    return $sed;
}
echo wordFilter(file_get_contents($url));