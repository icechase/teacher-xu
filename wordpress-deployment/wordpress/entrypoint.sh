#!/bin/bash
# 1.替换变量.

wordpress_file=/usr/share/nginx/html/wp-config.php
sed -i s/{DB_NAME}/${DB_NAME:-wordpress}/g ${wordpress_file}
sed -i s/{DB_USER}/${DB_USER:-wordpress}/g ${wordpress_file}
sed -i s/{DB_PASSWORD}/${DB_PASSWORD:-wordpress}/g ${wordpress_file}
sed -i s/{DB_HOST}/${DB_HOST:-localhost}/g ${wordpress_file}
# 启动nginx和PHP

php-fpm && \
nginx -g "daemon off;" 
