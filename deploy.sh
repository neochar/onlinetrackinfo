git add .

echo "Enter commit message"

read commitmsg

git commit -m "$commitmsg"

git push

ssh popove@176.120.28.244 "cd /home/popove/web/onlinetrackinfo.neochar.com/public_html && git pull"
