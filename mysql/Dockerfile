FROM alpine:3.11

COPY start.sh wordpress.sql /

RUN apk update
RUN apk add openrc mysql mysql-client
COPY mariadb-server.cnf /etc/my.cnf.d

RUN rc-status
RUN touch /run/openrc/softlevel

CMD sh start.sh