### PHP错误日志和内存查看
1.通过命令查看服务器上一共开了多少的 php-cgi 进程：

ps -fe |grep "php-fpm"|grep "pool"|wc -l

2.查看FPM在你的机子上的平均内存占用：

ps --no-headers -o "rss,cmd" -C php-fpm | awk '{ sum+=$1 } END { printf ("%d%s\n", sum/NR/1024,"M") }'  

3.指令ps找出消耗内存的元凶

ps -A --sort -rss -o comm,pmem,pcpu |uniq -c |head -15

 

PHP错误日志

vim /usr/local/php-5.6.5/etc/php.ini

display_errors = On

error_log = "/data/phplog/error_log"

chmod a+w /data/phplog/error_log

 

开启PHP错误日志级别

ini_set("display_errors", On);
ini_set("error_reporting", E_ALL);