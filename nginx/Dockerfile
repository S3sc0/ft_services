FROM alpine:3.11

RUN apk update
RUN apk add openrc nginx

RUN rc-status
RUN touch /run/openrc/softlevel

# install telegraf
RUN wget http://dl-cdn.alpinelinux.org/alpine/v3.13/community/x86_64/telegraf-1.17.0-r0.apk
RUN apk add --allow-untrusted telegraf-1.17.0-r0.apk
COPY telegraf.conf /etc

COPY server.key server.crt start.sh /
COPY index.html /var/www
COPY default.conf /etc/nginx/conf.d

CMD sh start.sh