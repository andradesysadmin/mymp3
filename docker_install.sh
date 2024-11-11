#!/bin/bash

# Armazena o gerenciador de pacotes da distro
PACKAGE_MANAGER=""

# Comando de instalação
INSTALL_CMD=""

# Configurações iniciais para a prosseguir com a instalção
CONFIGS=""

function install(){

    eval $CONFIGS
    eval $INSTALL_CMD

    sudo systemctl start docker
    sudo systemctl enable docker
    sudo usermod -aG docker $USER
}

#Verifica se o docker ja esta instalado

if command -v docker --version > /dev/null; then

    echo "Docker já está instalado"
    exit 0;

fi

if command -v apt >/dev/null; then

    PACKAGE_MANAGER="apt"
    INSTALL_CMD="sudo apt-get install docker-ce docker-ce-cli containerd.io docker-buildx-plugin docker-compose-plugin"
    CONFIGS="sudo apt-get update
            sudo apt-get install ca-certificates curl
            sudo install -m 0755 -d /etc/apt/keyrings
            sudo curl -fsSL https://download.docker.com/linux/ubuntu/gpg -o /etc/apt/keyrings/docker.asc
            sudo chmod a+r /etc/apt/keyrings/docker.asc
            
            echo \"deb [arch=\$(dpkg --print-architecture) signed-by=/etc/apt/keyrings/docker.asc] https://download.docker.com/linux/ubuntu \$(. /etc/os-release && echo \$VERSION_CODENAME) stable\" | \
            sudo tee /etc/apt/sources.list.d/docker.list > /dev/null
            sudo apt-get update"


elif command -v dnf >/dev/null; then

    PACKAGE_MANAGER="dnf"
    INSTALL_CMD="sudo dnf install -y docker-ce docker-ce-cli containerd.io"
    CONFIGS="sudo dnf install -y dnf-plugins-core && sudo dnf config-manager --add-repo https://download.docker.com/linux/fedora/docker-ce.repo"

elif command -v yum >/dev/null; then

    PACKAGE_MANAGER="yum"
    INSTALL_CMD="sudo yum install -y docker-ce docker-ce-cli containerd.io"
    CONFIGS="sudo yum install -y yum-utils && sudo yum-config-manager --add-repo https://download.docker.com/linux/centos/docker-ce.repo"

elif command -v pacman >/dev/null; then

    PACKAGE_MANAGER="pacman"
    INSTALL_CMD="sudo pacman -S --noconfirm docker"
    CONFIGS="sudo pacman -Sy"

elif command -v zypper >/dev/null; then

    PACKAGE_MANAGER="zypper"
    INSTALL_CMD="sudo zypper install -y docker"
    CONFIGS="sudo zypper refresh"

else

    PACKAGE_MANAGER="Gerenciador de pacotes desconhecido!"
    echo $PACKAGE_MANAGER
    exit 1
fi

echo "Instalando o docker com o gerenciador de pacotes $PACKAGE_MANAGER"
install
