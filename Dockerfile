#Usando o xampp pela facilidade de configuração ;)
FROM tomsik68/xampp 

COPY . /opt/lampp/htdocs/

RUN chmod -R /opt/lammp/htdocs/

RUN rm app/models/playlists_uploads/*/deleteisso.txt

EXPOSE 80

CMD ["/opt/lampp/bin/httpd", "-D", "FOREGROUND"]
