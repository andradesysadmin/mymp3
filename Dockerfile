#Escolhi usar o xampp pelo habito e facilidade de configuração :)
FROM tomsik68/xampp 

COPY . /opt/lampp/htdocs/

RUN chmod -R 775 /opt/lampp/htdocs/

RUN rm -f /opt/lampp/htdocs/app/models/playlists_uploads/*/deleteisso.txt && rm -f /opt/lampp/htodocs/app/models/uploads/teste.txt

EXPOSE 80

CMD ["/opt/lampp/bin/httpd", "-D", "FOREGROUND"]
