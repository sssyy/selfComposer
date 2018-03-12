###### 由于以前一直都在用git ，也有自己的git 仓库，但是到了新公司之后，用的确实svn ，一下子就有些不习惯，所以决定，自己搭一个，好好研究一下
#####  环境 ubuntu 17.04
开始自己的命令


----------


注：apt-get不知道在ubuntu哪个版本更新为apt，少4个词，就能省好长时间，真心不错
1.安装subversion
sudo apt install subversion
2.随便在哪个目录下创建个文件,作为svn的仓库专属文件夹
sudo mkdir /home/svn
3.创建一个文件夹，作为其中一个仓库
sudo mkdir /home/svn/repository
4.1将仓库初始化
sudo svnadmin create /home/svn/repository/
4.2记的给权限哟
sudo chmod -R 777 /home//svn/repository/
5.1编辑配置文件，修改权限，
cd /home/svn/repository/conf
sudo vim svnserve.conf

```
### read/write access to the repository.
### The sample settings below are the defaults and specify that anonymous
### users have read-only access to the repository, while authenticated
### users have read and write access to the repository.
anon-access = read
auth-access = write
### The password-db option controls the location of the password
### database file.  Unless you specify a path starting with a /,
### the file's location is relative to the directory containing
### this configuration file.
### If SASL is enabled (see below), this file will NOT be used.
### Uncomment the line below to use the default password file.
password-db = passwd
### The authz-db option controls the location of the authorization
### rules for path-based access control.  Unless you specify a path
```
分别将anon-access (设置任何一个人访问为可读)、auth-access(用户认证之后可写)、password-db（密码认证） 取消注释
*注：一定要定格将每一行，要不然会报错的*
5.2编辑用户配置文件
sudo vim passwd
```
### This file is an example password file for svnserve.
### Its format is similar to that of svnserve.conf. As shown in the
### example below it contains one section labelled [users].
### The name and password for each user follow, one account per line.

[users]
# harry = harryssecret
# sally = sallyssecret

joshua = joshuasecret

```
添加一个用户名为joshua 密码微joshuasecret 配置项
5.3修改组权限配置文件
sudo vim authz
```
[groups]
# harry_and_sally = harry,sally
# harry_sally_and_joe = harry,sally,&joe
own = joshua
# [/foo/bar]
# harry = rw
# &joe = r
# * =

# [repository:/baz/fuz]
# @harry_and_sally = rw
# * = r
@own = rw
* = r

```
own 组 里面具有joshua用户，也就是刚才创建，并给own组相应的权限

6.启动svnserve
svnserve -d -r /home/svn


7.这个仓库的地址就是svn://ip/repository,可以使用任何一个svn客户端进行checkout 了eg.windows 中的小乌龟，ubuntu 中的rabbit ，还有mac 中的Cornerstone




-------


注：

 - svn 的默认端口为3690 ，当你需要另一个仓库时，需要将仓库指向另一个端口eg.  svnserve -d -r /home/svn --listen-port yourport 
 - 注意你的防火墙，sudo ufw allow 3690
 - 配置文件一定要顶格


then ，就可以愉快的搞事情了，

*说实话，自己还是比较喜欢git*
 








