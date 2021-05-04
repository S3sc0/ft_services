FROM alpine:3.11

RUN apk update
RUN apk add openrc

RUN rc-status
RUN touch /run/openrc/softlevel
RUN wget http://dl-cdn.alpinelinux.org/alpine/v3.13/community/x86_64/grafana-7.3.6-r0.apk
RUN apk add --allow-untrusted grafana-7.3.6-r0.apk 

COPY start.sh /
COPY grafana /grafana

# install telegraf
RUN wget http://dl-cdn.alpinelinux.org/alpine/v3.13/community/x86_64/telegraf-1.17.0-r0.apk
RUN apk add --allow-untrusted telegraf-1.17.0-r0.apk
COPY telegraf.conf /etc

CMD sh start.sh