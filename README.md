# Requisitos
Antes de começar, certifique-se de ter as seguintes ferramentas instaladas em seu computador:

XAMPP ou qualquer outro servidor web compatível com PHP 8.

# Clonando o projeto
Para começar, abra o terminal e navegue até a pasta onde deseja clonar o projeto. Em seguida, execute o seguinte comando:


# Instalando as dependências
O projeto utiliza o Composer para gerenciar suas dependências. Para instalá-lo, basta seguir as instruções no site oficial: https://getcomposer.org/download/.

Após instalar o Composer, navegue até a pasta do projeto e execute o seguinte comando:
```
composer install
```
Isso irá instalar todas as dependências necessárias para o projeto.

# Configurando o ambiente
O projeto utiliza um arquivo .env para armazenar as variáveis de ambiente. Para configurar o ambiente, basta criar uma cópia do arquivo .example.env e renomeá-lo para .env:
```
cp .example.env .env
```
Em seguida, abra o arquivo .env em um editor de texto e configure as variáveis de ambiente de acordo com o seu ambiente. Certifique-se de definir as variáveis DB_CONNECTION, DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME e DB_PASSWORD para que o projeto possa se conectar ao banco de dados corretamente.

# Configurando o banco de dados
O projeto utiliza o banco de dados MySQL para armazenar os dados. Certifique-se de ter o MySQL instalado e configurado em seu ambiente.

Para criar o banco de dados, execute os seguintes comandos no terminal:

mysql -u root -p
Em seguida, digite a senha do seu usuário do MySQL e execute os seguintes comandos:

mysql
CREATE DATABASE nome_do_banco_de_dados;
USE nome_do_banco_de_dados;
Por fim, importe o arquivo db.sql para criar as tabelas do banco de dados:

mysql -u root -p nome_do_banco_de_dados < db.sql

# Executando o projeto
Por fim, inicie o servidor web XAMPP ou outro compatível com PHP 8 e navegue até a pasta do projeto em um navegador. O projeto deve estar acessível em http://localhost/seu-projeto/.
