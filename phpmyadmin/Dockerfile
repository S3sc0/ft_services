FROM alpine:3.11

RUN apk update
RUN apk add nginx openrc nginx openrc php7 php7-fpm php7-opcache php7-gd php7-mysqli php7-zlib php7-curl php7-xml php7-json php7-iconv php7-session php-mbstring
RUN wget https://files.phpmyadmin.net/phpMyAdmin/5.1.0/phpMyAdmin-5.1.0-all-languages.zip
RUN unzip phpMyAdmin-5.1.0-all-languages.zip
RUN mv phpMyAdmin-5.1.0-all-languages phpmyadmin
RUN mkdir /var/www/html
RUN mv phpmyadmin/* /var/www/html

COPY default.conf /etc/nginx/conf.d
COPY config.inc.php /var/www/html
COPY start.sh /

RUN rc-status
RUN touch /run/openrc/softlevel

CMD sh start.sh