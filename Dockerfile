#Usando o xampp pela facilidade de configuração ;)
FROM tomsik68/xampp 

COPY . /opt/lampp/htdocs/

EXPOSE 80

CMD ["/opt/lampp/bin/httpd", "-D", "FOREGROUND"]
