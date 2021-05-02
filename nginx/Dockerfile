FROM alpine:3.11

RUN apk update
RUN apk add openrc nginx

RUN rc-status
RUN touch /run/openrc/softlevel

COPY server.key server.crt start.sh /
COPY index.html /var/www
COPY default.conf /etc/nginx/conf.d

CMD sh start.sh