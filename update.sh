git pull origin master
git add .
if test $# -eq 0
then
  name=`git config user.name`
  git commit -m "update by $name "
else
  git commit -m "$1"
fi
git push origin master
