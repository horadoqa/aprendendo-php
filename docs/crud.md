# CRUD COM PHP E MYSQL

## Desenvolvimento de um sistema completo de cadastro, listagem, edição e exclusão de registros

## 1\. Introdução ao CRUD

CRUD é uma sigla formada pelas quatro operações fundamentais utilizadas para manipular informações em bancos de dados.

| Operação | Tradução | Função |
| --- | --- | --- |
| Create | Criar | Cadastrar novos registros |
| Read | Ler | Consultar registros |
| Update | Atualizar | Modificar registros existentes |
| Delete | Excluir | Remover registros |

Essas operações estão presentes em praticamente todos os sistemas informatizados.

Exemplos de utilização:

- Sistemas escolares.
- Sistemas comerciais.
- Sistemas de gerenciamento de funcionários.
- Sistemas de controle de estoque.
- Sistemas de cadastro de clientes.
- Sistemas de gerenciamento de produtos.
- Sistemas administrativos.

## 2\. Objetivo do Projeto

Neste projeto, vamos desenvolver um sistema de gerenciamento de alunos.

O sistema permitirá:

1. Cadastrar novos alunos.
2. Listar todos os alunos.
3. Consultar informações cadastradas.
4. Pesquisar alunos pelo nome.
5. Editar informações.
6. Excluir registros.
7. Validar informações dos formulários.
8. Conectar PHP ao MySQL utilizando PDO.

## 3\. Tecnologias utilizadas

| Tecnologia | Utilização |
| --- | --- |
| HTML5 | Estrutura das páginas |
| CSS3 | Estilização da interface |
| PHP | Processamento das informações |
| MySQL | Armazenamento dos dados |
| PDO | Comunicação com o banco |
| SQL | Manipulação dos registros |
| XAMPP | Ambiente de desenvolvimento local |

## 4\. Preparando o ambiente

Para desenvolver o projeto, utilizaremos o XAMPP.

Após a instalação:

1. Abra o painel de controle do XAMPP.
2. Inicie o Apache.
3. Inicie o MySQL.
4. Abra o navegador.
5. Acesse o phpMyAdmin.

Endereço:

http://localhost/phpmyadmin

## 5\. Criando o banco de dados

Vamos criar um banco de dados chamado `sistema_crud`.

Execute o seguinte comando SQL:

sql

```sql
CREATE DATABASE sistema_crud
CHARACTER SET utf8mb4
COLLATE utf8mb4_unicode_ci;
```

Depois, selecione o banco:

sql

```sql
USE sistema_crud;
```

## 6\. Criando a tabela de alunos

Agora vamos criar a tabela responsável por armazenar as informações dos alunos.

sql

```sql
CREATE TABLE alunos (

    id INT AUTO_INCREMENT PRIMARY KEY,

    nome VARCHAR(100) NOT NULL,

    email VARCHAR(150) NOT NULL,

    telefone VARCHAR(20),

    curso VARCHAR(100) NOT NULL,

    idade INT NOT NULL,

    data_cadastro TIMESTAMP DEFAULT CURRENT_TIMESTAMP

) ENGINE=InnoDB;
```

Explicação dos campos:

| Campo | Descrição |
| --- | --- |
| id | Identificador único |
| nome | Nome do aluno |
| email | E-mail do aluno |
| telefone | Telefone do aluno |
| curso | Curso matriculado |
| idade | Idade do aluno |
| data\_cadastro | Data do cadastro |

## 7\. Inserindo dados de teste

Podemos inserir alguns registros para testar o funcionamento do sistema.

sql

```sql
INSERT INTO alunos
(nome, email, telefone, curso, idade)
VALUES
('Carlos Silva', 'carlos@email.com', '21999990000', 'Informática', 20),
('Maria Souza', 'maria@email.com', '21988880000', 'Administração', 22),
('João Santos', 'joao@email.com', '21977770000', 'Programação', 19);
```

## 8\. Criando a estrutura de pastas

Dentro da pasta `htdocs` do XAMPP, crie uma pasta chamada `sistema_crud`.

A estrutura será:

text

```text
sistema_crud/
│
├── config/
│   └── conexao.php
│
├── css/
│   └── estilo.css
│
├── index.php
│
├── cadastrar.php
│
├── salvar.php
│
├── editar.php
│
├── atualizar.php
│
├── excluir.php
│
└── detalhes.php
```

Cada arquivo terá uma responsabilidade específica.

## 9\. Criando a conexão com o banco de dados

O primeiro passo é estabelecer a comunicação entre PHP e MySQL.

Crie o arquivo `config/conexao.php`.

php

```php
<?php

$host = "localhost";
$banco = "sistema_crud";
$usuario = "root";
$senha = "";

try {

    $pdo = new PDO(
        "mysql:host=$host;dbname=$banco;charset=utf8mb4",
        $usuario,
        $senha
    );

    $pdo->setAttribute(
        PDO::ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION
    );

    $pdo->setAttribute(
        PDO::ATTR_DEFAULT_FETCH_MODE,
        PDO::FETCH_ASSOC
    );

} catch (PDOException $e) {

    error_log($e->getMessage());

    exit("Erro ao conectar ao banco de dados.");

}
```

Explicação:

- `$host`: endereço do servidor.
- `$banco`: nome do banco de dados.
- `$usuario`: usuário do MySQL.
- `$senha`: senha do MySQL.
- `new PDO()`: estabelece a conexão.
- `PDO::ERRMODE_EXCEPTION`: permite tratar erros por exceções.

Nos exemplos locais, utilizamos as credenciais padrão do XAMPP. Em produção, configure um usuário próprio com permissões limitadas.

## 10\. Criando o arquivo principal do sistema

O arquivo `index.php` será a página inicial do sistema.

Nele, apresentaremos os registros cadastrados no banco de dados.

php

```php
<?php

require_once "config/conexao.php";

$sql = "SELECT * FROM alunos ORDER BY id DESC";

$stmt = $pdo->query($sql);

$alunos = $stmt->fetchAll();

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">

    <title>Sistema de Alunos</title>

    <link rel="stylesheet" href="css/estilo.css">

</head>

<body>

    <div class="container">

        <h1>Gerenciamento de Alunos</h1>

        <a href="cadastrar.php" class="botao">
            Novo Aluno
        </a>

        <table>

            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Curso</th>
                <th>Idade</th>
                <th>Ações</th>
            </tr>

            <?php foreach ($alunos as $aluno): ?>

            <tr>

                <td><?= $aluno["id"] ?></td>

                <td>
                    <?= htmlspecialchars($aluno["nome"]) ?>
                </td>

                <td>
                    <?= htmlspecialchars($aluno["email"]) ?>
                </td>

                <td>
                    <?= htmlspecialchars($aluno["curso"]) ?>
                </td>

                <td><?= $aluno["idade"] ?></td>

                <td>

                    <a href="detalhes.php?id=<?= $aluno["id"] ?>">
                        Visualizar
                    </a>

                    <a href="editar.php?id=<?= $aluno["id"] ?>">
                        Editar
                    </a>

                    <form action="excluir.php" method="POST"
                          style="display:inline">

                        <input type="hidden"
                               name="id"
                               value="<?= $aluno["id"] ?>">

                        <input type="hidden"
                               name="csrf"
                               value="<?= htmlspecialchars(
                                   $_SESSION["csrf"] ?? "",
                                   ENT_QUOTES,
                                   "UTF-8"
                               ) ?>">

                        <button type="submit">Excluir</button>

                    </form>

                </td>

            </tr>

            <?php endforeach; ?>

        </table>

        <?php if (count($alunos) === 0): ?>

            <p>Nenhum aluno cadastrado.</p>

        <?php endif; ?>

    </div>

</body>

</html>
```

**Observação:** para utilizar o formulário de exclusão com proteção CSRF, precisamos inicializar a sessão e gerar o token. Faremos isso na seção de segurança e integraremos ao arquivo principal.

## 11\. Operação CREATE: cadastrando alunos

A operação CREATE permite inserir novos registros no banco de dados.

Primeiro, vamos criar um formulário HTML.

Arquivo `cadastrar.php`:

php

```php
<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">

    <title>Cadastrar Aluno</title>

    <link rel="stylesheet" href="css/estilo.css">

</head>

<body>

    <div class="container">

        <h1>Cadastrar Aluno</h1>

        <form action="salvar.php" method="POST">

            <label>Nome:</label>

            <input type="text"
                   name="nome"
                   maxlength="100"
                   required>

            <label>E-mail:</label>

            <input type="email"
                   name="email"
                   maxlength="150"
                   required>

            <label>Telefone:</label>

            <input type="text"
                   name="telefone"
                   maxlength="20">

            <label>Curso:</label>

            <input type="text"
                   name="curso"
                   maxlength="100"
                   required>

            <label>Idade:</label>

            <input type="number"
                   name="idade"
                   min="1"
                   max="120"
                   required>

            <button type="submit">
                Cadastrar
            </button>

        </form>

        <a href="index.php">Voltar</a>

    </div>

</body>

</html>
```

Agora precisamos criar o arquivo responsável por receber e armazenar os dados.

Arquivo `salvar.php`:

php

```php
<?php

require_once "config/conexao.php";

if ($_SERVER["REQUEST_METHOD"] !== "POST") {

    http_response_code(405);
    exit("Método não permitido.");

}

$nome = trim($_POST["nome"] ?? "");

$email = trim($_POST["email"] ?? "");

$telefone = trim($_POST["telefone"] ?? "");

$curso = trim($_POST["curso"] ?? "");

$idade = filter_input(
    INPUT_POST,
    "idade",
    FILTER_VALIDATE_INT
);

if (
    $nome === "" ||
    mb_strlen($nome, "UTF-8") > 100
) {
    exit("Nome inválido.");
}

if (
    !filter_var($email, FILTER_VALIDATE_EMAIL) ||
    mb_strlen($email, "UTF-8") > 150
) {
    exit("E-mail inválido.");
}

if (mb_strlen($telefone, "UTF-8") > 20) {

    exit("Telefone inválido.");

}

if (
    $curso === "" ||
    mb_strlen($curso, "UTF-8") > 100
) {
    exit("Curso inválido.");
}

if (
    $idade === false ||
    $idade === null ||
    $idade < 1 ||
    $idade > 120
) {
    exit("Idade inválida.");
}

$sql = "INSERT INTO alunos
        (nome, email, telefone, curso, idade)
        VALUES
        (:nome, :email, :telefone, :curso, :idade)";

$stmt = $pdo->prepare($sql);

$stmt->execute([

    ":nome" => $nome,
    ":email" => $email,
    ":telefone" => $telefone,
    ":curso" => $curso,
    ":idade" => $idade

]);

header("Location: index.php");

exit;

?>
```

Explicação:

- `$_POST`: recebe os dados do formulário.
- `trim()`: remove espaços desnecessários.
- `filter_var()`: valida o formato do e-mail.
- `filter_input()`: valida a idade.
- `prepare()`: prepara o comando SQL.
- `execute()`: executa a inserção.
- `header()`: redireciona para a página inicial.

## 12\. Operação READ: listando alunos

A operação READ permite recuperar informações armazenadas no banco de dados.

No nosso projeto, essa funcionalidade já foi implementada no arquivo `index.php`.

O comando SQL utilizado foi:

sql

```sql
SELECT * FROM alunos
ORDER BY id DESC;
```

No PHP:

php

```php
$stmt = $pdo->query(
    "SELECT * FROM alunos ORDER BY id DESC"
);

$alunos = $stmt->fetchAll();
```

O método `fetchAll()` recupera todos os registros encontrados.

Podemos percorrer os resultados com `foreach`.

php

```php
foreach ($alunos as $aluno) {

    echo $aluno["nome"];

}
```

## 13\. Criando uma pesquisa de alunos

Vamos adicionar uma pesquisa pelo nome.

No arquivo `index.php`, antes da tabela, adicione:

HTMLQuebrar linhasCopiar códigoVer prévia

```html
<form method="GET" action="index.php">

    <input
        type="text"
        name="pesquisa"
        placeholder="Pesquisar aluno pelo nome"
    >

    <button type="submit">
        Pesquisar
    </button>

</form>
```

Agora substitua a consulta SQL inicial do `index.php` por:

php

```php
<?php

require_once "config/conexao.php";

$pesquisa = trim($_GET["pesquisa"] ?? "");

$sql = "SELECT * FROM alunos
        WHERE nome LIKE :pesquisa
        ORDER BY id DESC";

$stmt = $pdo->prepare($sql);

$stmt->execute([

    ":pesquisa" => "%" . $pesquisa . "%"

]);

$alunos = $stmt->fetchAll();

?>
```

Dessa maneira, podemos pesquisar alunos pelo nome.

## 14\. Visualizando os detalhes de um aluno

Vamos criar uma página para visualizar todas as informações de determinado aluno.

Arquivo `detalhes.php`:

php

```php
<?php

require_once "config/conexao.php";

$id = filter_input(
    INPUT_GET,
    "id",
    FILTER_VALIDATE_INT
);

if (!$id || $id < 1) {

    exit("Identificador inválido.");

}

$sql = "SELECT * FROM alunos WHERE id = :id";

$stmt = $pdo->prepare($sql);

$stmt->execute([":id" => $id]);

$aluno = $stmt->fetch();

if (!$aluno) {

    http_response_code(404);
    exit("Aluno não encontrado.");

}

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">

    <title>Detalhes do Aluno</title>

    <link rel="stylesheet" href="css/estilo.css">

</head>

<body>

    <div class="container">

        <h1>Detalhes do Aluno</h1>

        <p>
            <strong>ID:</strong>
            <?= $aluno["id"] ?>
        </p>

        <p>
            <strong>Nome:</strong>
            <?= htmlspecialchars($aluno["nome"]) ?>
        </p>

        <p>
            <strong>E-mail:</strong>
            <?= htmlspecialchars($aluno["email"]) ?>
        </p>

        <p>
            <strong>Telefone:</strong>
            <?= htmlspecialchars($aluno["telefone"]) ?>
        </p>

        <p>
            <strong>Curso:</strong>
            <?= htmlspecialchars($aluno["curso"]) ?>
        </p>

        <p>
            <strong>Idade:</strong>
            <?= $aluno["idade"] ?>
        </p>

        <a href="index.php">Voltar</a>

    </div>

</body>

</html>
```

## 15\. Operação UPDATE: editando alunos

A operação UPDATE permite modificar informações de registros existentes.

Primeiro, vamos criar o formulário de edição.

Arquivo `editar.php`:

php

```php
<?php

require_once "config/conexao.php";

$id = filter_input(
    INPUT_GET,
    "id",
    FILTER_VALIDATE_INT
);

if (!$id || $id < 1) {

    exit("Identificador inválido.");

}

$sql = "SELECT * FROM alunos WHERE id = :id";

$stmt = $pdo->prepare($sql);

$stmt->execute([":id" => $id]);

$aluno = $stmt->fetch();

if (!$aluno) {

    http_response_code(404);
    exit("Aluno não encontrado.");

}

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">

    <title>Editar Aluno</title>

    <link rel="stylesheet" href="css/estilo.css">

</head>

<body>

    <div class="container">

        <h1>Editar Aluno</h1>

        <form action="atualizar.php" method="POST">

            <input type="hidden"
                   name="id"
                   value="<?= $aluno["id"] ?>">

            <label>Nome:</label>

            <input type="text"
                   name="nome"
                   value="<?= htmlspecialchars($aluno["nome"], ENT_QUOTES, "UTF-8") ?>"
                   required>

            <label>E-mail:</label>

            <input type="email"
                   name="email"
                   value="<?= htmlspecialchars($aluno["email"], ENT_QUOTES, "UTF-8") ?>"
                   required>

            <label>Telefone:</label>

            <input type="text"
                   name="telefone"
                   value="<?= htmlspecialchars($aluno["telefone"], ENT_QUOTES, "UTF-8") ?>">

            <label>Curso:</label>

            <input type="text"
                   name="curso"
                   value="<?= htmlspecialchars($aluno["curso"], ENT_QUOTES, "UTF-8") ?>"
                   required>

            <label>Idade:</label>

            <input type="number"
                   name="idade"
                   min="1"
                   max="120"
                   value="<?= $aluno["idade"] ?>"
                   required>

            <button type="submit">
                Salvar alterações
            </button>

        </form>

        <a href="index.php">Voltar</a>

    </div>

</body>

</html>
```

Agora vamos criar o arquivo responsável por atualizar os dados.

Arquivo `atualizar.php`:

php

```php
<?php

require_once "config/conexao.php";

if ($_SERVER["REQUEST_METHOD"] !== "POST") {

    http_response_code(405);
    exit("Método não permitido.");

}

$id = filter_input(
    INPUT_POST,
    "id",
    FILTER_VALIDATE_INT
);

$nome = trim($_POST["nome"] ?? "");

$email = trim($_POST["email"] ?? "");

$telefone = trim($_POST["telefone"] ?? "");

$curso = trim($_POST["curso"] ?? "");

$idade = filter_input(
    INPUT_POST,
    "idade",
    FILTER_VALIDATE_INT
);

if (!$id || $id < 1) {

    exit("Identificador inválido.");

}

if (
    $nome === "" ||
    mb_strlen($nome, "UTF-8") > 100
) {

    exit("Nome inválido.");

}

if (
    !filter_var($email, FILTER_VALIDATE_EMAIL) ||
    mb_strlen($email, "UTF-8") > 150
) {

    exit("E-mail inválido.");

}

if (mb_strlen($telefone, "UTF-8") > 20) {

    exit("Telefone inválido.");

}

if (
    $curso === "" ||
    mb_strlen($curso, "UTF-8") > 100
) {

    exit("Curso inválido.");

}

if (
    $idade === false ||
    $idade === null ||
    $idade < 1 ||
    $idade > 120
) {

    exit("Idade inválida.");

}

$sql = "UPDATE alunos SET

        nome = :nome,
        email = :email,
        telefone = :telefone,
        curso = :curso,
        idade = :idade

        WHERE id = :id";

$stmt = $pdo->prepare($sql);

$stmt->execute([

    ":nome" => $nome,
    ":email" => $email,
    ":telefone" => $telefone,
    ":curso" => $curso,
    ":idade" => $idade,
    ":id" => $id

]);

header("Location: index.php");

exit;

?>
```

Explicação:

- `UPDATE`: atualiza informações.
- `SET`: define os novos valores.
- `WHERE`: identifica o registro que será atualizado.
- `prepare()`: prepara a consulta.
- `execute()`: executa a atualização.

## 16\. Operação DELETE: excluindo alunos

A operação DELETE permite excluir registros do banco de dados.

Para isso, criaremos o arquivo `excluir.php`.

A exclusão será realizada por POST, evitando que uma simples visita a um endereço provoque a remoção de um registro.

php

```php
<?php

require_once "config/conexao.php";

if ($_SERVER["REQUEST_METHOD"] !== "POST") {

    http_response_code(405);
    exit("Método não permitido.");

}

$id = filter_input(
    INPUT_POST,
    "id",
    FILTER_VALIDATE_INT
);

if (!$id || $id < 1) {

    exit("Identificador inválido.");

}

$sql = "DELETE FROM alunos WHERE id = :id";

$stmt = $pdo->prepare($sql);

$stmt->execute([":id" => $id]);

header("Location: index.php");

exit;

?>
```

No entanto, antes de utilizar esse arquivo em um sistema real, precisamos adicionar proteção contra requisições falsificadas, utilizando tokens CSRF, conforme veremos na próxima seção.

## 17\. Implementando proteção CSRF

CSRF significa Cross-Site Request Forgery.

É um tipo de ataque no qual um usuário autenticado pode ser induzido a realizar uma ação indesejada em determinado sistema.

Para reduzir esse risco, podemos utilizar tokens CSRF.

Crie o arquivo `config/seguranca.php`:

php

```php
<?php

if (session_status() !== PHP_SESSION_ACTIVE) {

    session_start();

}

if (empty($_SESSION["csrf"])) {

    $_SESSION["csrf"] = bin2hex(
        random_bytes(32)
    );

}

function validarCsrf(): void {

    $token = $_POST["csrf"] ?? "";

    if (
        !is_string($token) ||
        !hash_equals($_SESSION["csrf"], $token)
    ) {

        http_response_code(403);

        exit("Solicitação não autorizada.");

    }

}
```

Para proteger os formulários de exclusão e atualização, adicione o campo:

php

```php
<input
    type="hidden"
    name="csrf"
    value="<?= htmlspecialchars($_SESSION["csrf"], ENT_QUOTES, "UTF-8") ?>"
>
```

Nos arquivos que processam operações POST, carregue a proteção:

php

```php
require_once "config/seguranca.php";

validarCsrf();
```

O arquivo de segurança deve ser carregado antes de qualquer saída HTML.

Também devemos utilizar essa proteção nos formulários de cadastro e edição.

## 18\. Criando o arquivo CSS

Agora vamos melhorar a aparência do sistema.

Arquivo `css/estilo.css`:

css

```css
* {
    box-sizing: border-box;
}

body {

    font-family: Arial, sans-serif;

    background: #f2f4f8;

    margin: 0;

    padding: 30px;

}

.container {

    max-width: 1100px;

    margin: auto;

    background: white;

    padding: 30px;

    border-radius: 10px;

    box-shadow: 0 2px 10px rgba(0,0,0,0.08);

}

h1 {

    color: #263238;

    margin-bottom: 25px;

}

form {

    margin-bottom: 20px;

}

label {

    display: block;

    margin-top: 15px;

    font-weight: bold;

}

input {

    width: 100%;

    padding: 12px;

    margin-top: 6px;

    border: 1px solid #ccc;

    border-radius: 5px;

}

button,
.botao {

    display: inline-block;

    padding: 11px 18px;

    margin-top: 15px;

    background: #2563eb;

    color: white;

    border: none;

    border-radius: 5px;

    text-decoration: none;

    cursor: pointer;

}

button:hover,
.botao:hover {

    background: #1d4ed8;

}

table {

    width: 100%;

    border-collapse: collapse;

    margin-top: 25px;

}

th,
td {

    padding: 12px;

    border: 1px solid #ddd;

    text-align: left;

}

th {

    background: #263f75;

    color: white;

}

tr:nth-child(even) {

    background: #f5f5f5;

}

a {

    margin-right: 8px;

}

@media (max-width: 700px) {

    body {
        padding: 10px;
    }

    .container {
        padding: 15px;
        overflow-x: auto;
    }

    table {
        min-width: 650px;
    }

}
```

## 19\. Executando o projeto

Agora que os arquivos estão criados, vamos executar o sistema.

1. Abra o XAMPP.
2. Inicie Apache e MySQL.
3. Verifique se o banco `sistema_crud` foi criado.
4. Confira se a tabela `alunos` existe.
5. Salve o projeto dentro da pasta `htdocs`.
6. Abra o navegador.
7. Acesse o endereço abaixo:

text

```text
http://localhost/sistema_crud/
```

A página inicial deverá apresentar os alunos cadastrados.

## 20\. Testando as operações CRUD

Realize os seguintes testes:

**Teste 1 – CREATE**

- Clique em Novo Aluno.
- Preencha o formulário.
- Clique em Cadastrar.
- Verifique se o registro aparece na listagem.

**Teste 2 – READ**

- Acesse a página inicial.
- Verifique os registros.
- Pesquise um aluno pelo nome.
- Abra os detalhes de um aluno.

**Teste 3 – UPDATE**

- Escolha um aluno.
- Clique em Editar.
- Modifique o nome ou o curso.
- Salve as alterações.
- Confira as informações atualizadas.

**Teste 4 – DELETE**

- Escolha um aluno.
- Clique em Excluir.
- Confirme a operação antes de executá-la.
- Verifique se o registro foi removido.

## 21\. Melhorias para o sistema

Depois de implementar as quatro operações, podemos adicionar novas funcionalidades.

Algumas sugestões:

- Paginação de registros.
- Pesquisa por nome, curso e e-mail.
- Filtros por idade.
- Validação de e-mails duplicados.
- Mensagens de sucesso e erro.
- Confirmação de exclusão.
- Sistema de login.
- Controle de permissões.
- Upload de fotografias.
- Exportação de relatórios em PDF.
- Exportação de dados para Excel.
- Interface responsiva.
- Cadastro de usuários administradores.

## 22\. Segurança no desenvolvimento CRUD

Ao desenvolver sistemas com PHP e MySQL, devemos adotar algumas práticas de segurança.

**1\. Utilizar consultas preparadas**

Sempre prefira `prepare()` e `execute()` para trabalhar com informações recebidas do usuário.

**2\. Validar os dados**

Não confie exclusivamente nas validações realizadas pelo HTML.

**3\. Utilizar htmlspecialchars()**

Ao apresentar dados recebidos do banco em HTML, utilize escape adequado para reduzir riscos de XSS.

**4\. Proteger operações de exclusão**

Utilize POST, tokens CSRF e verificação de permissões.

**5\. Proteger as credenciais**

Não disponibilize senhas do banco de dados publicamente.

**6\. Controlar permissões**

Usuários comuns não devem ter acesso automaticamente às operações administrativas.

**7\. Utilizar HTTPS**

Proteja as informações transmitidas entre o navegador e o servidor.

**8\. Criar backups**

Mantenha cópias de segurança do banco de dados.

## 23\. Exercícios práticos

### Exercício 1 – Cadastro de clientes

Desenvolva um CRUD para cadastrar clientes com os campos:

- ID.
- Nome.
- E-mail.
- Telefone.
- Endereço.
- Cidade.

### Exercício 2 – Cadastro de produtos

Crie um sistema CRUD para produtos com:

- ID.
- Nome.
- Descrição.
- Preço.
- Quantidade.
- Categoria.

### Exercício 3 – Cadastro de funcionários

Desenvolva um sistema para gerenciar funcionários com:

- Nome.
- CPF.
- Cargo.
- Salário.
- Departamento.
- Data de admissão.

### Exercício 4 – Sistema de cursos

Crie um sistema que permita cadastrar, listar, editar e excluir cursos.

### Exercício 5 – Pesquisa avançada

Implemente filtros para pesquisar alunos pelo nome, curso e idade.

### Exercício 6 – Paginação

Modifique o sistema para apresentar somente dez registros por página.

### Exercício 7 – Validação de e-mail

Implemente uma regra para impedir o cadastro de e-mails duplicados.

### Exercício 8 – Sistema de estoque

Desenvolva um CRUD de produtos com controle de quantidade disponível.

### Exercício 9 – Sistema de login

Implemente autenticação de usuários utilizando sessões e senhas armazenadas com `password_hash()`.

### Exercício 10 – Controle de acesso

Implemente níveis de acesso para administrador e usuário comum.

## 24\. Projeto final: Sistema de Gerenciamento Escolar

Agora vamos propor um projeto mais completo.

Desenvolva um sistema de gerenciamento escolar utilizando PHP, MySQL, PDO, HTML e CSS.

### Requisitos funcionais

O sistema deverá permitir:

1. Cadastrar alunos.
2. Listar alunos.
3. Pesquisar alunos.
4. Visualizar detalhes.
5. Editar informações.
6. Excluir alunos.
7. Cadastrar professores.
8. Cadastrar cursos.
9. Relacionar alunos aos cursos.
10. Cadastrar disciplinas.
11. Consultar informações.
12. Gerar relatórios.

### Requisitos técnicos

- PHP para processamento.
- MySQL para armazenamento.
- PDO para conexão.
- HTML5 para estrutura.
- CSS3 para apresentação.
- Consultas preparadas.
- Validação de formulários.
- Proteção CSRF.
- Sistema de autenticação.
- Controle de permissões.

### Desafio adicional

Organize o sistema utilizando arquitetura MVC (Model, View e Controller).

Essa organização permitirá separar as regras de negócio, as consultas ao banco e a interface do usuário.

## 25\. Conclusão

CRUD é uma das bases do desenvolvimento de sistemas com PHP e MySQL.

Por meio das operações Create, Read, Update e Delete, conseguimos desenvolver aplicações capazes de armazenar, consultar, modificar e excluir informações.

Nesta apostila, desenvolvemos um sistema de gerenciamento de alunos, trabalhando com formulários HTML, conexão PDO, comandos SQL, validação de dados e organização de arquivos.

O domínio dessas operações é essencial para quem deseja desenvolver sistemas web profissionais.

## 26\. Referências e materiais de apoio

- Manual oficial do PHP: [https://www.php.net/manual/pt\_BR/](<https://www.php.net/manual/pt_BR/>)
- PDO no PHP: [https://www.php.net/manual/pt\_BR/book.pdo.php](<https://www.php.net/manual/pt_BR/book.pdo.php>)
- PHP e MySQL: [https://www.php.net/manual/pt\_BR/ref.pdo-mysql.php](<https://www.php.net/manual/pt_BR/ref.pdo-mysql.php>)
- Manual do MySQL: [https://dev.mysql.com/doc/](<https://dev.mysql.com/doc/>)
- phpMyAdmin: [https://www.phpmyadmin.net/](<https://www.phpmyadmin.net/>)
- OWASP SQL Injection Prevention: [https://cheatsheetseries.owasp.org/cheatsheets/SQL\_Injection\_Prevention\_Cheat\_Sheet.html](<https://cheatsheetseries.owasp.org/cheatsheets/SQL_Injection_Prevention_Cheat_Sheet.html>)
- OWASP Cross-Site Request Forgery Prevention: [https://cheatsheetseries.owasp.org/cheatsheets/Cross-Site\_Request\_Forgery\_Prevention\_Cheat\_Sheet.html](<https://cheatsheetseries.owasp.org/cheatsheets/Cross-Site_Request_Forgery_Prevention_Cheat_Sheet.html>)

**Fim da apostila — CRUD com PHP e MySQL.**

## Próxima etapa da aprendizagem

Depois de dominar o CRUD, o próximo passo é aprender a organizar aplicações PHP de maneira profissional.

Minha recomendação é seguir esta sequência:

1. Programação Orientada a Objetos (POO) em PHP.
2. Classes, objetos, métodos e propriedades.
3. Herança, encapsulamento e polimorfismo.
4. Arquitetura MVC com PHP.
5. Composer e gerenciamento de dependências.
6. Desenvolvimento de sistemas profissionais com PHP.
