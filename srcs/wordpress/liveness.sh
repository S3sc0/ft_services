#!bin/bash

ps | grep php-fpm7 | grep -v grep
ret1=$?
ps | grep nginx | grep -v grep
ret2=$?
if [ $ret1 = 0 ] && [ $ret2 = 0 ];
then
    exit 0
else
    exit 1
fi