FROM yiisoftware/yii2-php:8.1-fpm-nginx

COPY /php/xdebug.ini /usr/local/etc/php/conf.d/xdebug.ini
