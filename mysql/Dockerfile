FROM alpine:3.11

COPY start.sh wordpress.sql /

RUN apk update
RUN apk add openrc mysql mysql-client
COPY mariadb-server.cnf /etc/my.cnf.d

RUN rc-status
RUN touch /run/openrc/softlevel

# install telegraf
RUN wget http://dl-cdn.alpinelinux.org/alpine/v3.13/community/x86_64/telegraf-1.17.0-r0.apk
RUN apk add --allow-untrusted telegraf-1.17.0-r0.apk
COPY telegraf.conf /etc

CMD sh start.sh