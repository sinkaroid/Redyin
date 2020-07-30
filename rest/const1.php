</div>
</div></div>
<div class="page">
<a href="/page?x=1">1</span></a>&nbsp;&nbsp;&nbsp;<a href="/page?x=2"><span class="pg">2</span></a>&nbsp;&nbsp;&nbsp;<a href="/page?x=3"><span class="pg">3</span></a>&nbsp;&nbsp;&nbsp;<a href="/page?x=4"><span class="pg">4</span></a>&nbsp;&nbsp;&nbsp;<a href="/page?x=5"><span class="pg">5</span></a>&nbsp;&nbsp;&nbsp;<a href="/page?x=6"><span class="pg">6</span></a>&nbsp;&nbsp;&nbsp;<a href="/page?x=7"><span class="pg">7</span></a>&nbsp;&nbsp;&nbsp;<a href="/page?x=8"><span class="pg">8</span></a>&nbsp;&nbsp;&nbsp;<a href="/page?x=9"><span class="pg">9</span></a>&nbsp;&nbsp;&nbsp;<a href="/page?x=10"><span class="pg">10</span></a>&nbsp;&nbsp;&nbsp;<a href="/page?x=11"><span class="pg">&gt;</span></a>&nbsp;&nbsp;&nbsp;<a href="/page?x=87"><span class="pg">Last</span></a> </div>
</div>
</center>
<div class="argu">
<font color=black face=Ubuntu size=3>

<center>params:<br></center>
<?php
$bc = basename(__FILE__);
echo "SITE: ".$_SERVER['SERVER_NAME']."<br>";
echo "FILE: ".$bc."<br>";


echo "
/$bc?home [mainpage]<br>
/$bc?page={1..99)[multiple]<br>
/lib/anime.php?q=[query]";
  ?>
</div>  
<br>
<center>

<p>
<div class="intro" style="width: 400px">
<font color=crimson face=consolas size=3>

<b>&copy; Sin,</b>
(<a href="https://dolls.redsplit.org/782309035" rel="nofollow" target="_blank" class="class2">server status</a>) | <font size="2" color="green">
scraped in <?php echo(number_format(microtime(true) - $start_time, 2)); ?> sec.</font>
<br><font size="2" color="gray">
feel free to pull,issues,or stealing at:<br><font color=blue> https://github.com/sinkaroid/Redyin</font>
</font>
</div>  
<script> 
        document.onreadystatechange = function() { 
            if (document.readyState !== "complete") { 
                document.querySelector( 
                  "body").style.visibility = "hidden"; 
                document.querySelector( 
                  "#loader").style.visibility = "visible"; 
            } else { 
                document.querySelector( 
                  "#loader").style.display = "none"; 
                document.querySelector( 
                  "body").style.visibility = "visible"; 
            } 
        }; 
    </script>