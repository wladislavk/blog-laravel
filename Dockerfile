FROM php:7.1-apache

ARG USER_ID=1000
ARG GROUP_ID=1000
ARG USER_NAME=vkr
ARG GROUP_NAME=vkr
ARG API_DOMAIN
ENV HOME_DIR /var/www

# Install & configure php modules
RUN \
    apt-get update && \
    apt-get install -y \
    zlib1g-dev \
    libmcrypt-dev \
    libicu-dev \
    sudo \
    mysql-client \
    wget

RUN \
    docker-php-ext-install iconv && \
    docker-php-ext-install mcrypt && \
    docker-php-ext-install zip && \
    docker-php-ext-install pdo_mysql && \
    docker-php-ext-install mysqli && \
    docker-php-ext-install intl && \
    docker-php-ext-install mbstring && \
    docker-php-ext-install json

# System configuration
RUN echo "%${GROUP_NAME}   ALL=(ALL:ALL) NOPASSWD:ALL" >> /etc/sudoers

# Apache configuration
RUN a2enmod rewrite

RUN echo "\
    <VirtualHost *:80>\n\
        ServerName api\n\
        ServerAlias ${API_DOMAIN}\n\
        DocumentRoot \"/var/www/public\"\n\
        <Directory \"/var/www\">\n\
            Options ExecCGI FollowSymLinks\n\
            AllowOverride all\n\
            Allow from all\n\
            Order allow,deny\n\
            Require all granted\n\
            AddHandler cgi-script .cgi\n\
            AddHandler fastcgi-script .fcgi\n\
        </Directory>\n\
    </VirtualHost>\
    " | tee -a /etc/apache2/sites-available/api.conf

RUN a2ensite api

RUN { echo "memory_limit=-1\nmax_execution_time=120\n"; } | tee -a /usr/local/etc/php/php.ini

# Install composer
RUN cd /usr/local/bin/ && \
    curl -sS --tlsv1 https://getcomposer.org/installer | php && \
    mv composer.phar composer && \
    chmod 0755 composer

# Install phpunit
RUN cd /usr/local/bin/ && \
    wget https://phar.phpunit.de/phpunit-6.2.phar && \
    mv phpunit-6.2.phar phpunit && \
    chmod 0755 phpunit

# Configuring environment
RUN addgroup --gid ${GROUP_ID} ${GROUP_NAME} && \
    adduser \
    --uid ${USER_ID} \
    --gid ${GROUP_ID} \
    --home ${HOME_DIR} \
    --disabled-password \
    --no-create-home \
    --gecos '' ${USER_NAME}

RUN chown ${USER_NAME}:${GROUP_NAME} -R ${HOME_DIR}

USER ${USER_NAME}

WORKDIR ${HOME_DIR}

COPY ./DockerEntrypoint.sh /DockerEntrypoint.sh
ENTRYPOINT /DockerEntrypoint.sh
