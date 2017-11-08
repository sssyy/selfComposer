h j k l移动光标定位
ctrl+w+w 光标在左右窗口切换
ctrl+w+r 切换当前窗口左右布局
ctrl+p 模糊搜索文件
gT 切换到前一个tab
g t 切换到后一个tab

在.vimrc里为标签页进行的配置，通过ctrl h/l切换标签等
let mapleader = ','
nnoremap <C-l> gt
nnoremap <C-h> gT
nnoremap <leader>t : tabe<CR>
o 打开关闭文件或者目录，如果是文件的话，光标出现在打开的文件中
O 打开结点下的所有目录
X 合拢当前结点的所有目录
x 合拢当前结点的父目录

i和s水平分割或纵向分割窗口打开文件
u 打开上层目录
t 在标签页中打开
T 在后台标签页中打开

p 到上层目录
P 到根目录
K 到同目录第一个节点
J 到同目录最后一个节点
m 显示文件系统菜单（添加、删除、移动操作）
? 帮助
:q 关闭

