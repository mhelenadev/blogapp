FROM ubuntu:20.10

#ATUALIZAÇÃO DO UBUNTU
RUN apt-get update

#CONFIGURAÇÃO DO TIMEZONE
ENV TZ=Europe/Lisboa
RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone
ENV DEBIAN_FRONTEND=noninteractive
RUN apt-get -y install tzdata

#INSTALAÇÃO DO PHP
RUN apt install -y php7.4 php-fpm php-json php-common php-mysql php-zip php-gd php-mbstring php-curl php-xml php-pear php-bcmath php-sqlite3

#INSTALAÇÃO DO COMPOSER
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
RUN php composer-setup.php
RUN php -r "unlink('composer-setup.php');"
RUN cp composer.phar bin/composer
#RUN apt-get update

#RUN composer global require laravel/installer

#SUBINDO O AMBIENTE
ADD run.sh /var/www
RUN cd /var/www
RUN chmod +x /var/www/run.sh
EXPOSE 8000
WORKDIR /var/www/html

# ENTRYPOINT [ "php artisan serve" ]
# ENTRYPOINT [ "./run.sh" ]
CMD /var/www/run.sh
