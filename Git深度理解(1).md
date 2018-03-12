# Git深度理解

标签（空格分隔）： Git

---
##### .git文件结构
```
branches    #供 GitWeb 程序使用
COMMIT_EDITMSG #
config      #项目特有的配置选项
HEAD        #文件指向当前分支
hooks       # 目录保存了客户端或服务端钩子脚本
index       # 文件保存了暂存区域信息
info        # 目录保存了一份不希望在 .gitignore 文件中管理的忽略模式 (ignored patterns) 的全局可执行文件
objects     # 目录存储所有数据内容
refs        #目录存储指向数据 (分支) 的提交对象的指针

```

##### Git对象

`内容寻址文件系统`  

git push origin :<branchName> 删除远程分支，相当于将空分支推到远程分支

------

## git  branch 
1. git branch branchName(在本地创建一个命名为branchName的分支)

2. git branch 查看当前自己所在的分支

3. git branch -a 查看服务器的所有分支以及自己当前所在的分支

4. git push origin branchName(把命名为branchName的本地分支推送到服务器)

5. git checkout --track origin/branchName (切换为远程服务器上的命名为branchName的远程分支)

6. 如果你的搭档要把他本地的分支给关联到服务器上命名为branchName的远程分支，请执行以下操作，git branch --set-upstream localBranchName origin/branchName  （为本地分支添加一个对应的远程分支 与之相对应）->这行命令用来关联本地的分支与服务器上的分支

7. 完成以上操作之后，就可以进行提交代码了，但是在提交代码之前，你要确定你当前所在的分支

8. git push origin branchName（提交代码到远程服务器上命名为branchName的分支上）

9. git pull origin branchName （从远程分支上拉取代码）

10. git update-index --assume-unchanged **/**  





