FROM alpine:3.11

COPY start.sh /

RUN apk update
RUN apk add openrc vsftpd

RUN rc-status
RUN touch /run/openrc/softlevel

RUN echo -e "1234\n1234" | passwd
RUN mkdir /home/Sesco
COPY vsftpd.conf /etc/vsftpd
COPY vsftpd.pem /etc/ssl/private

# install telegraf
RUN wget http://dl-cdn.alpinelinux.org/alpine/v3.13/community/x86_64/telegraf-1.17.0-r0.apk
RUN apk add --allow-untrusted telegraf-1.17.0-r0.apk
COPY telegraf.conf /etc
COPY liveness.sh /

CMD sh start.sh