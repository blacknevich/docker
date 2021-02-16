FROM debian:buster

#I download phpmyadmin
ADD https://files.phpmyadmin.net/phpMyAdmin/5.0.2/phpMyAdmin-5.0.2-all-languages.tar.gz phpmyadmin.tar.gz

#I open ports
EXPOSE 80 443

#I copy all of the scripts to my root
COPY ./srcs/run_programms.sh .
COPY ./srcs/initiate_database.sql .
COPY ./srcs/autoindex_switch.sh .

#I update OS packages, install all the neccesary programms, unzip phpmyadmin to var/www/html (web server root), move wordpress configs to html and create my ssl sertificate + key giving it 600 rights, 
RUN apt-get -y update \
&& apt-get install -y nginx \
default-mysql-server \
php7.3 \
php7.3-fpm \
wordpress \
php7.3-mysql \
php-json \
php-mbstring \
vim \
&& tar xvzf phpmyadmin.tar.gz && mv phpMyAdmin-5.0.2-all-languages /var/www/html/phpmyadmin \
&& mv /usr/share/wordpress /var/www/html \
&& openssl req -newkey rsa:4096 -x509 -sha256 -days 63 -nodes -verbose -out /etc/ssl/certs/nscarab.crt -keyout /etc/ssl/private/nscarab.key -subj "/C=RU/ST=Moscow/L=Moscow/O=42 School/OU=nscarab/CN=html" \
&& chmod -R 600 /etc/ssl/*

COPY ./srcs/default /etc/nginx/sites-available
#I copy config for nginx from project srcs (default file edited + ssl && autoindex)

#I copy config for phpmyadmin from project srcs (default file edited + blowfish && allownopassword && user to manipulate with storageZZ)
COPY ./srcs/config.inc.php /var/www/html/phpmyadmin

#I copy wordpress config from project srcs (default file edited + database userinfo && security keys)
COPY ./srcs/wp-config.php /var/www/html/wordpress

#I run mysql and create my database
RUN service mysql start && mysql < initiate_database.sql

ENTRYPOINT bash run_programms.sh
#I make www-data the owner of web server and give it all the rights. Then I start php fpm, ngynx and msql looping it to infinity.
#To run it use "docker build -t nscarab_ft_server ." && "docker run -d --rm -p 80:80 -p 443:443 nscarab_ft_server"
#To get into the container use "docker exec -it ID bin/bash"
