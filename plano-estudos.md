# Plano de estudos: PHP do zero à execução de projetos

Este plano foi elaborado para quem deseja aprender PHP desde o absoluto zero, começando pela instalação do ambiente de desenvolvimento, passando pela sintaxe da linguagem, lógica de programação, banco de dados e chegando à criação e execução de aplicações web completas.

A ideia é aprender na prática: cada etapa terá explicações, exemplos de código, exercícios e pequenos projetos.

Trilha de aprendizado

Iniciante ao intermediário

8 semanas

Duração sugerida

1 a 2 horas

Por dia

40% teoria

Conceitos e explicações

60% prática

Exercícios e projetos

## 1. Preparando o ambiente de desenvolvimento

Objetivo: instalar as ferramentas necessárias para escrever e executar programas PHP.

### Ferramentas que você vai utilizar

Waifly - INEXPENSIVE & PAID 24/7 Hosting

> PHP

Linguagem de programação utilizada para desenvolver aplicações web.

[Instalação do PHP no Linux](<https://www.php.net/downloads.php>)

Primeiro, verifique a versão do seu LINUX

```bash
cat /etc/os-release
PRETTY_NAME="Ubuntu 26.04.1 LTS"
NAME="Ubuntu"
VERSION_ID="26.04"
VERSION="26.04.1 LTS (Resolute Raccoon)"
VERSION_CODENAME=resolute
ID=ubuntu
ID_LIKE=debian
HOME_URL="https://www.ubuntu.com/"
SUPPORT_URL="https://help.ubuntu.com/"
BUG_REPORT_URL="https://bugs.launchpad.net/ubuntu/"
PRIVACY_POLICY_URL="https://www.ubuntu.com/legal/terms-and-policies/privacy-policy"
UBUNTU_CODENAME=resolute
LOGO=ubuntu-logo
```

Na versão 26.04

```bash
sudo apt install -y ca-certificates curl lsb-release

curl -fsSLo /tmp/debsuryorg-archive-keyring.deb \
https://packages.sury.org/debsuryorg-archive-keyring.deb

sudo dpkg -i /tmp/debsuryorg-archive-keyring.deb

echo "deb [signed-by=/usr/share/keyrings/debsuryorg-archive-keyring.gpg] https://packages.sury.org/php/ $(lsb_release -sc) main" \
| sudo tee /etc/apt/sources.list.d/php.list

sudo apt update

sudo apt install -y php8.6

```

Em versões maais antigas

```bash
# Add the ondrej/php repository.
sudo apt update
sudo apt install -y software-properties-common
sudo LC_ALL=C.UTF-8 add-apt-repository ppa:ondrej/php -y
sudo apt update

# Install PHP.
sudo apt install -y php8.6
```

Instale também o Composer:
Gerenciador de dependências do PHP.

```bash
sudo apt install -y composer
```

Confira:

```bash
composer --version
```

> Visual Studio Code

Editor para escrever e organizar seus arquivos PHP.

[Baixar VS Code](<https://code.visualstudio.com>)

> XAMPP (opcional)

Pacote com Apache, PHP, MariaDB e outras ferramentas para desenvolvimento local.

[Baixar XAMPP](<https://www.apachefriends.org/pt_br/index.html>)

> Git (recomendado)

Controle de versões para acompanhar a evolução dos seus projetos.

[Baixar Git](<https://git-scm.com>)

### Passo a passo da instalação

1. Instale o PHP .
2. Instale o Visual Studio Code.
3. Abra o terminal do sistema.
4. Digite o comando:

```bash
php -v

php -v
PHP 8.6.0 (cli) (built: Nov 20 2026 15:07:19) (NTS)
Copyright © The PHP Group and Contributors
Built by Ubuntu
Zend Engine v4.6.0, Copyright © Zend by Perforce
    with Zend OPcache v8.6.0, Copyright ©, by Zend by Perforce
```

5. Verifique se a versão do PHP aparece na tela.

Se aparecer a versão instalada, o PHP está disponível no terminal.

### Seu primeiro programa PHP

Crie uma pasta chamada `curso-php`.

Dentro dela, crie um arquivo chamado `index.php`.

Digite:

```php
<?php

echo "Olá, mundo!";
```

Salve o arquivo e abra o terminal dentro da pasta.

Execute:

```bash
php index.php
```

Resultado esperado:

```text
Olá, mundo!
```

Primeiro programa executado!

Você também pode executar PHP através de um servidor local:

```bash
php -S localhost:8000
```

Depois, abra no navegador:

`http://localhost:8000`

## 2. Cronograma completo de estudos

## Semana 1 — Fundamentos do PHP

Nível iniciante

Objetivo: conhecer a linguagem e aprender a escrever os primeiros códigos.

Conteúdos:

- O que é PHP e para que serve.
- Como funciona PHP no servidor.
- Estrutura de um arquivo `.php`.
- Tags `<?php ?>`.
- Instruções `echo` e `print`.
- Comentários no código.
- Variáveis e constantes.
- Tipos de dados.

Exemplo 1 — Variáveis

```php
<?php

$nome = "João";
$idade = 25;
$altura = 1.75;
$ativo = true;

echo "Nome: " . $nome . "<br>";
echo "Idade: " . $idade . "<br>";
echo "Altura: " . $altura;
```

Exemplo 2 — Constantes

```php
<?php

define("NOME_SISTEMA", "Meu Sistema");

echo NOME_SISTEMA;
```

Exercícios:

1. Crie variáveis com seu nome, idade e profissão.
2. Exiba essas informações na tela.
3. Crie uma constante com o nome de uma empresa.
4. Faça um programa que apresente seus dados pessoais.

Mini projeto: cartão de apresentação pessoal.

## Semana 2 — Lógica de programação com PHP

Nível inicianteObjetivo: aprender a criar programas que tomam decisões e executam tarefas.

Conteúdos:

- Operadores matemáticos.
- Operadores de comparação.
- Operadores lógicos.
- Condicionais `if`, `else` e `elseif`.
- Estrutura `switch`.
- Laços `for`, `while` e `foreach`.

Exemplo 1 — Condicional

```php
<?php

$nota = 8;

if ($nota >= 7) {
    echo "Aluno aprovado!";
} else {
    echo "Aluno reprovado!";
}
```

Exemplo 2 — Laço de repetição

```php
<?php

for ($i = 1; $i <= 10; $i++) {
    echo "Número: $i <br>";
}
```

Exercícios:

1. Crie uma calculadora de soma.
2. Verifique se um número é par ou ímpar.
3. Desenvolva um programa que identifique a maioridade.
4. Exiba a tabuada de um número.
5. Crie um sistema de aprovação de alunos.

Mini projeto: calculadora com as quatro operações matemáticas.

## Semana 3 — Arrays e funções

InicianteObjetivo: organizar informações e reutilizar códigos.

Conteúdos:

- Arrays numéricos.
- Arrays associativos.
- Arrays multidimensionais.
- Funções.
- Parâmetros e argumentos.
- Retorno de valores.
- Funções nativas do PHP.

Exemplo 1 — Array

```php
<?php

$frutas = [
    "Maçã",
    "Banana",
    "Laranja"
];

foreach ($frutas as $fruta) {
    echo $fruta . "<br>";
}
```

Exemplo 2 — Array associativo

```php
<?php

$pessoa = [
    "nome" => "Maria",
    "idade" => 30,
    "cidade" => "Rio de Janeiro"
];

echo $pessoa["nome"];
```

Exemplo 3 — Funções

```php
<?php

function somar($a, $b) {
    return $a + $b;
}

$resultado = somar(10, 20);

echo $resultado;
```

Exercícios:

1. Crie um array com dez nomes.
2. Percorra o array usando `foreach`.
3. Crie uma função para calcular a média.
4. Crie uma função para calcular o desconto de um produto.

Mini projeto: cadastro e listagem de produtos em memória.

## Semana 4 — PHP e HTML: criando páginas web

InicianteObjetivo: aprender a integrar PHP com HTML e criar páginas dinâmicas.

Conteúdos:

- Integração entre HTML e PHP.
- Formulários.
- Método GET.
- Método POST.
- Recebimento de dados.
- Validação de formulários.
- Exibição dinâmica de informações.
- Segurança básica e escape de saída com `htmlspecialchars()`.

Exemplo 1 — PHP dentro do HTML

```php
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Minha página</title>
</head>
<body>

    <h1>
        <?php
            echo "Bem-vindo ao PHP!";
        ?>
    </h1>

</body>
</html>
```

Exemplo 2 — Formulário POST

Arquivo `index.php`:

```php
<form method="POST" action="">
    <input
        type="text"
        name="nome"
        placeholder="Digite seu nome"
    >

    <button type="submit">
        Enviar
    </button>
</form>

<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $nome = trim($_POST["nome"] ?? "");

    if ($nome !== "") {
        echo "Olá, " .
            htmlspecialchars($nome, ENT_QUOTES, "UTF-8");
    }
}
```

Exercícios:

1. Crie um formulário de nome e e-mail.
2. Receba os dados usando POST.
3. Exiba os dados na página.
4. Faça validação de campos obrigatórios.
5. Crie uma página de boas-vindas personalizada.

Mini projeto: formulário de cadastro de usuários.

## Semana 5 — Banco de dados MySQL

IntermediárioObjetivo: armazenar, consultar, atualizar e excluir informações.

Conteúdos:

- O que é banco de dados.
- Introdução ao MySQL e MariaDB.
- Criação de bancos e tabelas.
- Comandos SQL.
- Conexão PHP com banco de dados.
- PDO.
- Operações CRUD.
- Consultas preparadas e segurança contra SQL Injection.

Exemplo 1 — Criando uma tabela

sql

```sql
CREATE DATABASE curso_php;

USE curso_php;

CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(150) NOT NULL
);
```

Exemplo 2 — Conexão com PHP usando PDO

```php
<?php

$host = "localhost";
$dbname = "curso_php";
$user = "root";
$password = "";

try {
    $pdo = new PDO(
        "mysql:host=$host;dbname=$dbname;charset=utf8mb4",
        $user,
        $password
    );

    $pdo->setAttribute(
        PDO::ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION
    );

    echo "Banco conectado!";
} catch (PDOException $e) {
    echo "Erro ao conectar com o banco.";
}
```

Exemplo 3 — Inserindo dados

```php
<?php

$sql = "INSERT INTO usuarios (nome, email)
        VALUES (:nome, :email)";

$stmt = $pdo->prepare($sql);

$stmt->execute([
    ":nome" => "Carlos",
    ":email" => "carlos@email.com"
]);

echo "Usuário cadastrado!";
```

Exercícios:

1. Crie um banco chamado `empresa`.
2. Crie uma tabela de funcionários.
3. Cadastre funcionários usando PHP.
4. Liste os funcionários cadastrados.
5. Implemente edição e exclusão.

Mini projeto: sistema CRUD de usuários.

## Semana 6 — Programação orientada a objetos (POO)

IntermediárioObjetivo: aprender a organizar aplicações PHP de maneira profissional.

Conteúdos:

- Classes e objetos.
- Propriedades e métodos.
- Construtores.
- Encapsulamento.
- Herança.
- Polimorfismo.
- Interfaces.
- Namespaces.

Exemplo 1 — Criando uma classe

```php
<?php

class Pessoa
{
    public string $nome;

    public function apresentar(): string
    {
        return "Olá, meu nome é " . $this->nome;
    }
}

$pessoa = new Pessoa();

$pessoa->nome = "Ana";

echo $pessoa->apresentar();
```

Exemplo 2 — Construtor e encapsulamento

```php
<?php

class Produto
{
    private string $nome;
    private float $preco;

    public function __construct(
        string $nome,
        float $preco
    ) {
        $this->nome = $nome;
        $this->preco = $preco;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getPreco(): float
    {
        return $this->preco;
    }
}

$produto = new Produto("Notebook", 3500);

echo $produto->getNome();
```

Exercícios:

1. Crie uma classe Cliente.
2. Crie uma classe Produto.
3. Crie uma classe Funcionário.
4. Trabalhe com propriedades privadas.
5. Crie métodos para cadastrar e consultar informações.

Mini projeto: sistema de gerenciamento de produtos com POO.

## Semana 7 — PHP avançado e organização de projetos

IntermediárioObjetivo: aprender recursos usados no desenvolvimento profissional.

Conteúdos:

- Sessões com `$_SESSION`.
- Cookies.
- Upload de arquivos.
- Tratamento de exceções.
- Composer e autoload.
- Organização de pastas.
- Arquivos de configuração e variáveis de ambiente.
- Introdução ao padrão MVC.
- Autenticação e autorização.
- Segurança: senhas com `password_hash()` e `password_verify()`.

Exemplo — Sessões

```php
<?php

session_start();

$_SESSION["usuario"] = "Maria";

echo $_SESSION["usuario"];
```

Exemplo — Senhas

```php
<?php

$senha = "minhaSenha123";

$hash = password_hash(
    $senha,
    PASSWORD_DEFAULT
);

if (password_verify($senha, $hash)) {
    echo "Senha válida!";
}
```

Exercícios:

1. Crie uma sessão de usuário.
2. Implemente logout.
3. Faça upload de uma imagem com validação.
4. Crie um sistema de login.
5. Organize o projeto em pastas.

Mini projeto: sistema de login e autenticação.

## Semana 8 — Projeto final e execução

ConsolidaçãoObjetivo: juntar os conhecimentos e desenvolver uma aplicação completa.

Projeto sugerido: sistema de gerenciamento de usuários e produtos.

Funcionalidades:

- Cadastro de usuários.
- Login e logout.
- Cadastro de produtos.
- Listagem de produtos.
- Edição de registros.
- Exclusão de registros.
- Pesquisa de informações.
- Banco de dados MySQL.
- Interface HTML e CSS.
- Validação de dados.
- Proteção de rotas.

Estrutura sugerida:

text

```text
sistema-php/
│
├── config/
│   └── database.php
│
├── public/
│   ├── index.php
│   └── css/
│       └── style.css
│
├── src/
│   ├── controllers/
│   ├── models/
│   └── views/
│
├── vendor/
│
└── composer.json
```

Resultado esperado: uma aplicação web funcional, conectada ao banco de dados e executada localmente.

## 3. Como executar seus projetos PHP

É importante entender que PHP não funciona exatamente como HTML: o código PHP é interpretado pelo servidor e o resultado é enviado ao navegador.

Existem duas formas principais de execução.

### Opção A — Executando pelo terminal

Crie um arquivo `teste.php`:


```php
<?php

$nome = "Estudante";

echo "Olá, $nome!";
```

No terminal:

```bash
php teste.php
```

Resultado:

```text
Olá, Estudante!
```

### Opção B — Executando pelo navegador

Crie uma pasta chamada `meu-projeto`.

Dentro dela, crie `index.php`:

```php
<?php

echo "<h1>Meu primeiro site PHP</h1>";

echo "<p>PHP está funcionando!</p>";
```

Abra o terminal dentro da pasta e execute:

```bash
php -S localhost:8000
```

Acesse:

`http://localhost:8000`

Start the built-in PHP web server | egghead.io

[egghead.io](<https://egghead.io/lessons/php-start-the-built-in-php-web-server?utm_source=chatgpt.com>)

Se estiver usando XAMPP no Windows:

1. Abra o XAMPP Control Panel.
2. Inicie o Apache.
3. Coloque a pasta do projeto em `C:\xampp\htdocs\meu-projeto`.
4. Acesse `http://localhost/meu-projeto/`.

Para usar MySQL ou MariaDB, inicie também o serviço de banco de dados.

## 4. Rotina diária de estudos

Sugiro estudar de segunda a sexta e reservar o sábado para desenvolver projetos.

| Dia | Atividade |
| --- | --- |
| Segunda | Estudar conceitos novos |
| Terça | Fazer exemplos de código |
| Quarta | Resolver exercícios |
| Quinta | Desenvolver funcionalidades |
| Sexta | Revisar e corrigir erros |
| Sábado | Desenvolver um mini projeto |
| Domingo | Descanso ou revisão opcional |

Uma sessão de 1 hora e 30 minutos pode ser dividida assim:

- 20 minutos: teoria.
- 30 minutos: exemplos práticos.
- 30 minutos: exercícios.
- 10 minutos: revisão.

## 5. Checklist de evolução

Acompanhe seu progresso durante o curso:

Seu progresso

# 0%

0 de 14 etapas concluídas

[ ]Instalar PHP e configurar o ambiente

[ ]Executar meu primeiro arquivo PHP

[ ]Entender variáveis e tipos de dados

[ ]Dominar condicionais e repetições

[ ]Trabalhar com arrays e funções

[ ]Criar formulários HTML com PHP

[ ]Receber dados via GET e POST

[ ]Conectar PHP ao MySQL usando PDO

[ ]Desenvolver operações CRUD

[ ]Aprender programação orientada a objetos

[ ]Trabalhar com sessões e autenticação

[ ]Utilizar Composer

[ ]Organizar projetos com MVC

[ ]Desenvolver meu projeto final

 Reiniciar progresso

## 6. Materiais gratuitos para aprender PHP

Estes são bons recursos para acompanhar os estudos:

- Documentação oficial do PHP — [Manual em português](<https://www.php.net/manual/pt_BR/?utm_source=chatgpt.com>). Referência para aprender cada recurso da linguagem.
- W3Schools PHP — [Tutoriais e exemplos](<https://www.w3schools.com/php/?utm_source=chatgpt.com>). Bom para praticar sintaxe.
- PHP The Right Way — [Boas práticas PHP](<https://phptherightway.com/?utm_source=chatgpt.com>). Guia de desenvolvimento profissional.
- Composer — [Gerenciador de dependências](<https://getcomposer.org/?utm_source=chatgpt.com>).

## 7. Vamos personalizar seu curso

Para transformar esse plano em um curso realmente prático, preciso saber qual ambiente você pretende utilizar.

1. Qual sistema operacional você utiliza?

Windows Windows 10 ou 11

Linux

macOS

2. Qual é seu nível de conhecimento em programação?

zero Nunca programei

Conheço lógica de programação

Já programo em outras linguagens

3. O que deseja desenvolver com PHP?

web Sites e sistemas web

Sistemas administrativos e empresariais

APIs e integrações

Quero aprender tudo

4. Qual editor pretende utilizar?

VS Code Visual Studio Code

PhpStorm

Outro ou ainda não sei

 Montar meu curso personalizado

Minha recomendação: não pule as etapas de lógica de programação, formulários e banco de dados. Elas são a base para conseguir desenvolver sistemas profissionais com PHP. O mais importante é escrever código todos os dias, executar, testar e entender os erros.