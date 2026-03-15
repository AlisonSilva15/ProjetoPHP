# 💱 Conversor de Moedas com Sistema de Login (PHP)

Projeto desenvolvido com **PHP, HTML e CSS**, contendo um sistema
completo de autenticação de usuários e um conversor de moedas utilizando
API externa.

O objetivo do projeto foi praticar conceitos fundamentais de
desenvolvimento web backend com PHP, incluindo **autenticação, sessões,
conexão com banco de dados e organização de projeto**.

------------------------------------------------------------------------

## 🚀 Funcionalidades

O sistema possui as seguintes funcionalidades:

-   🔐 Login de usuário
-   📝 Cadastro de novos usuários
-   🔑 Recuperação de senha
-   🚪 Logout do sistema
-   📊 Dashboard protegido por sessão
-   💱 Conversor de moedas utilizando API
-   🗄 Armazenamento de usuários em banco de dados
-   ⚠️ Validação para impedir emails duplicados
-   🔒 Senhas armazenadas com hash seguro (`password_hash`)

------------------------------------------------------------------------

## 🧠 Conceitos aplicados

Durante o desenvolvimento foram aplicados diversos conceitos importantes
de programação:

-   Manipulação de sessões em PHP
-   PDO para conexão segura com banco de dados
-   Prepared Statements para evitar SQL Injection
-   Hash de senha
-   Estruturação de projeto em múltiplas pastas
-   Proteção de páginas autenticadas
-   Tratamento de erros
-   Organização de código backend

------------------------------------------------------------------------

## 📂 Estrutura do projeto

    ApiConversao
    │
    ├── assets
    │   └── css
    │        style.css
    │
    ├── config
    │   └── conexao.php
    │
    ├── controllers
    │   ├── auth.php
    │   └── logout.php
    │
    └── pages
        ├── index.php
        ├── dashboard.php
        ├── cadastro.php
        ├── esqueci_senha.php
        └── conversao.php

### Explicação das pastas

**assets**\
Arquivos estáticos do projeto (CSS, imagens, etc).

**config**\
Arquivos de configuração do sistema, como conexão com banco de dados.

**controllers**\
Arquivos responsáveis por processar ações do sistema, como login e
logout.

**pages**\
Páginas visuais do sistema (interface).

------------------------------------------------------------------------

## 🛠 Tecnologias utilizadas

-   PHP
-   MySQL
-   HTML5
-   CSS3
-   Boxicons
-   API de conversão de moedas

------------------------------------------------------------------------

## ⚙️ Como executar o projeto

### 1️⃣ Clonar o repositório

``` bash
git clone https://github.com/SEU-USUARIO/SEU-REPOSITORIO.git
```

------------------------------------------------------------------------

### 2️⃣ Colocar o projeto dentro do servidor local

Exemplo usando **XAMPP**:

    xampp/htdocs/

------------------------------------------------------------------------

### 3️⃣ Criar o banco de dados

No **phpMyAdmin**, crie um banco chamado:

    api_conversao

Depois execute:

``` sql
CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100),
    email VARCHAR(100) UNIQUE,
    senha VARCHAR(255),
    criado_em TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

------------------------------------------------------------------------

### 4️⃣ Configurar conexão com banco

No arquivo:

    config/conexao.php

ajuste os dados de acesso:

``` php
$host = "localhost";
$db = "api_conversao";
$user = "root";
$pass = "";
```

------------------------------------------------------------------------

### 5️⃣ Executar o projeto

Abra no navegador:

    http://localhost/ApiConversao/pages/index.php

------------------------------------------------------------------------

## 📚 Aprendizados com o projeto

Durante o desenvolvimento deste projeto foram praticados:

-   Estruturação de um sistema PHP do zero
-   Integração com banco de dados
-   Controle de sessões
-   Segurança básica de autenticação
-   Organização de código em múltiplas camadas
-   Uso de APIs externas

------------------------------------------------------------------------

## 👨‍💻 Autor

Projeto desenvolvido por **Alison Silva** como parte dos estudos em
desenvolvimento web e backend com PHP.

GitHub:\
https://github.com/AlisonSilva15
