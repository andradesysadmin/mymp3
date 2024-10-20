#Escolhi usar o xampp pelo habito e facilidade de configuração :)
FROM tomsik68/xampp 

COPY . /opt/lampp/htdocs/

RUN chmod -R 755 /opt/lampp/htdocs/

RUN rm -f /opt/lampp/htdocs/app/models/playlists_uploads/*/deleteisso.txt

EXPOSE 80

CMD ["/opt/lampp/bin/httpd", "-D", "FOREGROUND"]
