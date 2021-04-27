FROM alpine:3.11

RUN apk update
RUN apk add openrc nginx

RUN rc-status
RUN touch /run/openrc/softlevel

COPY start.sh /
COPY index.html /var/www

CMD sh start.sh