# Imagem PHP mais recente
FROM php:latest

# Copia o codigo do projeto para dentro do container
COPY . /var/www/html

#Expõe a porta do servidor web
EXPOSE 80

#Inicia o servidor web (no caso apache)
CMD ["php", "-S", "0.0.0.0:80", "-t", "/var/www/html"]
