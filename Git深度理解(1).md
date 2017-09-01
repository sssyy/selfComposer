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




