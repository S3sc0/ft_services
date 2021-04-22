FROM alpine:3.11

RUN apk update
RUN apk add openrc influxdb

RUN rc-status
RUN touch /run/openrc/softlevel

RUN sed -i 's/  # auth-enabled = true/    auth-enabled = true/g' /etc/influxdb.conf

CMD tail -f /dev/null