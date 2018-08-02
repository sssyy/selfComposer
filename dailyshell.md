ps aux|grep process_name |grep -v grep|awk '{print $2}'|xargs kill -9   杀掉进程

git config core.filemode false  git  忽略文件权限


ssh-copy-id user@root

将本地公钥复制到服务器端，实现无密码登录

tail -f xxx.log | perl -pe 's/(NOTICE)/\e[1;31m$1\e[0m/g'  

sed -n 20817,20892p log
 grep -na "wangwei_order_table" log
