<?php
echo '<font face=Ubuntu>';
//ambil str
function wordFilter($text)
{
    $ambilkata = $text;

    $ambilkata = str_replace('<a class="entry-category"', '<p hidden>', $ambilkata);
    $ambilkata = str_replace('<b>Genre</b>', '<p hidden>', $ambilkata);
    $ambilkata = str_replace('<div class="entry-thumb">', '<div class="kotak">', $ambilkata);
    $ambilkata = str_replace('h2', 'h4', $ambilkata);
    $ambilkata = str_replace('<div class="entry-excerpt">', '<div hidden>', $ambilkata);
    $ambilkata = str_replace('<div class="entry-meta entry-meta-1">', '<div hidden>', $ambilkata);

    //string modifyurl
    $ambilkata = str_replace('<a href="https://www.daizurin.com/', '<a href="/lib/get.php?id=', $ambilkata);
    $ambilkata = str_replace('rel="bookmark"', 'rel="nofollow" target="_blank"', $ambilkata);
    $ambilkata = str_replace('title=', 'rel="nofollow" target="_blank" title=', $ambilkata);
    

    
    return $ambilkata;
}

$form = '<form action="get.php" method="get">
<input type="hidden" style="width:40%;" name="id"><br>
<input type="hidden" name="fansub">
</center>
</form>';