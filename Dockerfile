# Imagem PHP mais recente
FROM php:latest

# Instala as extensões PHP necessárias
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copia o codigo do projeto para dentro do container
COPY . /var/www/html

#Expõe a porta do servidor web
EXPOSE 80

#Inicia o servidor web (no caso apache)
CMD ["apache2-foreground"]
