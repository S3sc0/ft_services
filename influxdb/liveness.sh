#!bin/bash

ps | grep telegraf | grep -v grep
ret1=$?
ps | grep influxdb | grep -v grep
ret2=$?
if [ $ret1 = 0 ] || [ $ret2 = 0 ];
then
    exit 0
else
    exit 1
fi