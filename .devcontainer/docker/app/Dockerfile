FROM hyperf/hyperf:8.3-alpine-v3.19-swoole

##
# ---------- env settings ----------
##
# --build-arg timezone=Asia/Shanghai
ARG timezone

ENV TIMEZONE=${timezone:-"Asia/Shanghai"} \
    APP_ENV=dev \
    SCAN_CACHEABLE=(false)
    

# update

RUN apk update
RUN apk add sudo protobuf openssh busybox-extras bind-tools strace

RUN set -ex \
    && apk add php83-xdebug \
    && echo "zend_extension=xdebug.so" >> /etc/php83/conf.d/50_xdebug.ini \
    && echo "xdebug.mode=off" >> /etc/php83/conf.d/50_xdebug.ini 


RUN set -ex \
    # show php version and extensions
    && php -v \
    && php -m \
    && php --ri swoole \
    #  ---------- some config ----------
    && cd /etc/php* \
    # - config PHP
    && { \
        echo "upload_max_filesize=128M"; \
        echo "post_max_size=128M"; \
        echo "memory_limit=1G"; \
        echo "date.timezone=${TIMEZONE}"; \
    } | tee conf.d/99_overrides.ini \
    # - config timezone
    && ln -sf /usr/share/zoneinfo/${TIMEZONE} /etc/localtime \
    && echo "${TIMEZONE}" > /etc/timezone \
    # ---------- clear works ----------
    && rm -rf /var/cache/apk/* /tmp/* /usr/share/man \
    && echo -e "\033[42;37m Build Completed :).\033[0m\n"



RUN echo '%wheel ALL=(ALL) NOPASSWD:ALL' > /etc/sudoers.d/wheel
RUN adduser -D docker -G wheel

RUN chmod o+x /usr/local/bin/composer
    
USER docker

WORKDIR /workspace

# Composer Cache
# COPY ./composer.* /opt/www/
# RUN composer install --no-dev --no-scripts

# COPY . /opt/www
# RUN composer install && php bin/hyperf.php

EXPOSE 9501
