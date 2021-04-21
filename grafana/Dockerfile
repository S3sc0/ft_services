FROM alpine:3.11

RUN apk update
RUN apk add openrc

RUN rc-status
RUN touch /run/openrc/softlevel

CMD tail -f /dev/null