#!python
#!C:\Python37\python.exe
from colorama import Fore, Style
import feedparser

print(Fore.RED)
print("""
                     _ _                 _____     _      
                    | | |               |  _  |   | |     
 ___ _ __ ___   __ _| | | ___ _ __   ___| |/' | __| | ___ 
/ __| '_ ` _ \ / _` | | |/ _ \ '_ \ / __|  /| |/ _` |/ _ |
\__ \ | | | | | (_| | | |  __/ | | | (__\ |_/ / (_| |  __/
|___/_| |_| |_|\__,_|_|_|\___|_| |_|\___|\___/ \__,_|\___|               
""")
print(Style.RESET_ALL)
genre = input("genre: ")
halaman = input("page: ")
if genre.strip():
    print("ok")
else:
    print("null")

print ("\nyou are make request for: genre "+Fore.RED+genre+" // and page" +halaman)

feed = feedparser.parse("https://www.daizurin.com/tag/"+genre+"/feed/"+"?paged="+halaman)

feed_entries = feed.entries

for entry in feed.entries:

    article_title = entry.title
    article_link = entry.link

    content = entry.summary
    print ("{} -> [ {} ]".format(Fore.GREEN + article_title, Fore.BLUE +article_link.replace('www.daizurin.com/','yin.kireisubs.org/lib/get.php?id=') + Fore.GREEN))
