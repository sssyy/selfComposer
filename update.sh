git pull origin master
git add .
if $1
then
git commit -m "$1"
else
git commit -m "update by "
fi
git push origin master
