# 1.0 Introdução
Este projeto é um CRUD de formulário construído com PHP 8 e utiliza o banco de dados MySQL para armazenar os dados. O objetivo é permitir a criação, leitura, atualização e exclusão de formulários.
Uso
O projeto consiste em um CRUD de formulário com as seguintes funcionalidades:

Criar formulário: Clique no botão "Novo Formulário" na página inicial e preencha o formulário com os dados desejados.

Editar formulário: Clique no botão "Editar" ao lado do formulário que deseja alterar na página inicial e faça as alterações desejadas.

Visualizar formulário: Clique no botão "Visualizar" ao lado do formulário que deseja ver na página inicial.

Excluir formulário: Clique no botão "Excluir" ao lado do formulário que deseja remover na página inicial.

# 2.0 Requisitos
Antes de começar, certifique-se de ter as seguintes ferramentas instaladas em seu computador:

XAMPP ou qualquer outro servidor web compatível com PHP 8.

# 3.0 Instalando as dependências
O projeto utiliza o Composer para gerenciar suas dependências. Para instalá-lo, basta seguir as instruções no site oficial: https://getcomposer.org/download/.

Após instalar o Composer, navegue até a pasta do projeto e execute o seguinte comando:
```
composer install
```
Isso irá instalar todas as dependências necessárias para o projeto.

# 4.0 Configurando o ambiente
O projeto utiliza um arquivo .env para armazenar as variáveis de ambiente. Para configurar o ambiente, basta criar uma cópia do arquivo .example.env e renomeá-lo para .env:
```
cp .example.env .env
```
Em seguida, abra o arquivo .env em um editor de texto e configure as variáveis de ambiente de acordo com o seu ambiente. Certifique-se de definir as variáveis DB_CONNECTION, DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME e DB_PASSWORD para que o projeto possa se conectar ao banco de dados corretamente.

# 5.0 Configurar o banco de dados
Acesse o phpMyAdmin em seu navegador e faça login com o usuário e senha padrão do XAMPP.

Crie um novo banco de dados com o nome "nome_do_banco_de_dados".

Selecione o banco de dados criado e clique em "Importar" na barra de menu superior.

Selecione o arquivo table.sql que está localizado na pasta raiz do projeto e clique em "Executar".

# 6.0 Executando o projeto
Por fim, inicie o servidor web XAMPP ou outro compatível com PHP 8 e navegue até a pasta do projeto em um navegador. O projeto deve estar acessível em http://localhost/seu-projeto/.
