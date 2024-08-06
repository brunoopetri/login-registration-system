FROM php:8.3-apache

# Instalar dependências necessárias
RUN apt-get update && apt-get install -y \
    nano \
    curl \
    gnupg \
    zip \
    unzip \
    git \
    && docker-php-ext-install pdo pdo_mysql

# Instalar Node.js e npm usando o 'n' package manager
RUN curl -fsSL https://deb.nodesource.com/setup_18.x | bash - \
    && apt-get install -y nodejs \
    && npm install -g n \
    && n stable

# Instalar Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Habilitar mod_rewrite
RUN a2enmod rewrite

# Adicionar configuração personalizada para permitir o uso de .htaccess
RUN echo "<Directory /var/www/html>" > /etc/apache2/conf-available/custom-config.conf \
    && echo "    AllowOverride All" >> /etc/apache2/conf-available/custom-config.conf \
    && echo "</Directory>" >> /etc/apache2/conf-available/custom-config.conf \
    && a2enconf custom-config

# Adicionar configuração personalizada
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

# Dar permissão ao diretório
RUN chown -R www-data:www-data /var/www/ /var/www/html 

# Configurar o PHP para não ter limite de memória
RUN echo "memory_limit = -1" > /usr/local/etc/php/conf.d/memory-limit.ini

# Expor a porta 80
EXPOSE 80
