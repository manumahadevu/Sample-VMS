FROM php:8.1-apache
RUN apt-get update
#install wget and unzips
RUN apt-get install wget
RUN apt-get install unzip
WORKDIR /var/www/
RUN wget "https://github.com/manumahadevu/Sample-VMS/archive/refs/heads/main.zip"
RUN unzip main.zip
RUN mv Sample-VMS-main app
RUN cp -r app /var/www/html
EXPOSE 80
