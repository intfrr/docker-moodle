FROM phpdockerio/php71-fpm:latest

# Install selected extensions and other stuff
RUN apt-get update \
    && apt-get -y --no-install-recommends install \
    php7.1-intl \
    php7.1-gd \
    php7.1-xsl \
    php7.1-gd \
    php7.1-memcached \
    php7.1-mysql \
    php7.1-redis \
    php7.1-xdebug \
    php7.1-xmlrpc \
    php7.1-mbstring \
    php7.1-soap \
    locales \
    clamav \
    clamav-daemon \
    clamav-freshclam \
    && apt-get clean; \
    rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/*; \
    printf 'en_AU.UTF-8 UTF-8\n' >> /etc/locale.gen \
    && locale-gen; \
    mkdir -p /var/run/clamav \
    && chown clamav:clamav /var/run/clamav \
    && chmod 750 /var/run/clamav; \
    mkdir -p /var/lib/clamav \
    && chown -R clamav:clamav /var/lib/clamav; \
    adduser www-data clamav \
    && adduser clamav www-data;

WORKDIR "/application"

CMD freshclam -d \
    & /usr/sbin/php-fpm7.1 -F -O 2>&1 | sed -u 's,.*: \"\(.*\)$,\1,'| sed -u 's,"$,,' 1>&1
