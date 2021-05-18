#!bin/bash

ps | grep grafana-server | grep -v grep
ret=$?
if [ $ret = 0 ];
then
    exit 0
else
    exit 1
fi