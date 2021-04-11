FROM alpine:3.11

RUN apk update
RUN apk add openrc nginx php7 php7-fpm php7-opcache php7-gd php7-mysqli php7-zlib php7-curl php7-xml php7-json php7-iconv php7-session
RUN wget https://wordpress.org/latest.zip
RUN unzip latest.zip
RUN mv wordpress /var/www

COPY default.conf /etc/nginx/conf.d
COPY wp-config.php /var/www/wordpress
COPY start.sh /

RUN rc-status
RUN touch /run/openrc/softlevel

CMD sh start.sh