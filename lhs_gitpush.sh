#!/bin/bash

#read -p "add file name :" file 

#파일 삭제시 add 하는거 추가  문자열 push 하기


git config  user.email "2hansoul@bucketstudio.co.kr"
git config  user.name "lhs"


git add .

echo "add all file"



git status

read  -p "git commit -m : " commit

for ((i=0; i<2; i++))
do 
    if [ -z "$commit" ] ; then
        echo "commit 메시지를 남겨주세요"
        read -p  "git commit -m : " commit 
    else  
        read -p "$commit message commit 하시겠습니까[y/n]?" yn
        case $yn in
            [Yy]* ) git commit -m "$commit";  git push origin master; break;;
            [Nn]* ) exit;;
        esac    
    fi
done












