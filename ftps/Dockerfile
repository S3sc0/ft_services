FROM alpine:3.11

COPY start.sh /

RUN apk update
RUN apk add openrc vsftpd

RUN rc-status
RUN touch /run/openrc/softlevel

CMD sh start.sh