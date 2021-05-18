FROM alpine:3.11

RUN apk update
RUN apk add openrc influxdb

# install telegraf
RUN wget http://dl-cdn.alpinelinux.org/alpine/v3.13/community/x86_64/telegraf-1.17.0-r0.apk
RUN apk add --allow-untrusted telegraf-1.17.0-r0.apk
COPY telegraf.conf /etc

RUN rc-status
RUN touch /run/openrc/softlevel

RUN sed -i 's/  # auth-enabled = true/    auth-enabled = true/g' /etc/influxdb.conf

COPY start.sh liveness.sh /
CMD sh start.sh