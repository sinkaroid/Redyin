#!python
#!C:\Python37\python.exe
from colorama import Fore, Style
import feedparser

que = input("query: ")
if que.strip():
    print("ok")
else:
    print("null")


feed = feedparser.parse("https://www.daizurin.com/?s="+que+"&feed=rss2")

feed_entries = feed.entries

for entry in feed.entries:

    article_title = entry.title
    article_link = entry.link

    content = entry.summary
    print ("{} -> [ {} ]".format(Fore.GREEN + article_title, Fore.BLUE +article_link.replace('www.daizurin.com/','yin.kireisubs.org/lib/get.php?id=') + Fore.GREEN))
 