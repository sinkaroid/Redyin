## smallenc0de  
[![CodeFactor](https://www.codefactor.io/repository/github/sinkaroid/smallencode/badge)](https://www.codefactor.io/repository/github/sinkaroid/smallencode) [![](https://img.shields.io/packagist/php-v/curl/curl)](https://packagist.org/packages/curl/curl) [![](https://img.shields.io/github/commit-activity/m/sinkaroid/smallencode)](https://github.com/sinkaroid/smallencode/tree/master)  
## parameter  
- `?home` main  
- `page/?x={1..99}` page  
- `/lib/anime.php?q=$argv[0]` query  
- `?list` series
- `?chart` fullschedule (based on JST)  

```php
require 'lib/str.php'; 
```

### webhook


![](https://i.imgur.com/q9UVkRJ.png)  

```php
{
    $sed = $text;
    $sed = str_replace('victim', 'https://yoursite/lib/get.php?id=', $sed);
    return $sed; # or u can use your own rss fetcher
}
``` 