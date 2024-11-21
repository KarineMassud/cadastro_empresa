# Sistema de Cadastro de Empresas

Este projeto é um sistema básico para cadastro de empresas, desenvolvido em Laravel. Ele permite cadastrar empresas, seus dados e segmentos.

# Pré-requisitos

Antes de começar, certifique-se de ter os seguintes softwares instalados:

- PHP (>= 8.1)
- Composer
- MySQL
---

## 📥 Como instalar e rodar o projeto

### 1. Clone o repositório
```bash
git clone https://github.com/seu-usuario/nome-do-repositorio.git
cd nome-do-repositorio

 # 2. Instale as dependências do PHP
  composer install

# 3. Configure o arquivo .env
  cp .env

# 4 Edite o arquivo .env e configure as credenciais do banco de dados:
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nome_do_banco
DB_USERNAME=seu_usuario
DB_PASSWORD=sua_senha

# 5 Gere a chave da aplicação
php artisan key:generate

# 6 Configure o banco de dados
CREATE DATABASE sistema_empresas;

# 7 Execute as migrações e seeders
php artisan migrate
php artisan db:seed --class=SegmentosSeeder

# 8 Inicie o servidor local
php artisan serve

# 9 Como Popular a Tabela segmentos
Depois que criar o banco de dados, você consegue popular a tabela segmentos, com dados iniciais utilizados no seeder. Os passos são:

# 1 Rodar o seguinte comando:
php artisan db:seed --class=SegmentosSeeder

# 2 Depois que você executa o comando os dados fictícios definidos no seeder estarão disponíveis na tabela.
