- awk 列求和
awk '{sum += $1};END {print sum}' test

git branch -D `git branch | grep yue | grep -v \* | awk '{print $1}'`