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

CMD sh start.sh