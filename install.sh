#!/bin/bash

echo "Checkout"
rm -rf mymp3
git clone https://github.com/andradesysadmin/mymp3.git

echo "Build"
docker stop mymp3 || true
docker rm mymp3 || true
docker rmi mymp3 || true
cd mymp3
ls -la
docker build -t mymp3 .
cd ..

echo "Deploy"
docker run -d --name mymp3 -p 8080:80 mymp3
