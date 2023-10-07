# Imagem do PHP
FROM php:8.1-cli

# instalação de dependências necessárias
RUN apt-get update && apt-get install -y \
    git \
    unzip

# Instalação do composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Adicionando diretório do composer bin no PATH
ENV PATH="/root/.composer/vendor/bin:${PATH}"

# Criação do diretório de trabalho
WORKDIR /app

# Cópia do projeto para o container
COPY composer.json composer.json