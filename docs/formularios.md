# FORMULÁRIOS HTML COM PHP

## Criação, envio, recebimento, processamento e validação de dados

### 1\. Introdução aos formulários HTML com PHP

Os formulários HTML são recursos utilizados para receber informações dos usuários em páginas web.

Com PHP, podemos receber, processar, validar e armazenar essas informações.

Os formulários são utilizados em praticamente todos os sistemas web, como:

- Cadastro de usuários.
- Sistemas de login.
- Cadastro de produtos.
- Inscrições em cursos.
- Pesquisas online.
- Contato com empresas.
- Sistemas escolares.
- Sistemas administrativos.

**Exemplo de funcionamento:**

1. O usuário acessa uma página com um formulário.
2. Preenche os campos solicitados.
3. Clica no botão Enviar.
4. O navegador envia os dados para o servidor.
5. O PHP recebe e processa as informações.
6. O sistema apresenta uma resposta ao usuário.

### 2\. Estrutura básica de um formulário HTML

Para criar um formulário HTML, utilizamos a tag `<form>`.

**Sintaxe:**

HTMLQuebrar linhasCopiar códigoVer prévia

```html
<form action="processar.php" method="POST">

    <!-- Campos do formulário -->

    <button type="submit">Enviar</button>

</form>
```

Principais atributos:

| Atributo | Finalidade |
| --- | --- |
| action | Define o arquivo que receberá os dados |
| method | Define o método de envio |
| name | Identifica o campo enviado ao servidor |
| type | Define o tipo de campo |
| required | Torna o preenchimento obrigatório |
| placeholder | Apresenta uma orientação dentro do campo |

### 3\. Métodos GET e POST

O HTML permite enviar informações utilizando diferentes métodos HTTP.

Os mais utilizados em formulários são GET e POST.

**Método GET**

O método GET envia os dados por meio dos parâmetros da URL.

Exemplo:

HTMLQuebrar linhasCopiar códigoVer prévia

```html
<form action="processar.php" method="GET">

    <label>Nome:</label>
    <input type="text" name="nome">

    <button type="submit">Enviar</button>

</form>
```

Arquivo `processar.php`:

php

```php
<?php

$nome = $_GET["nome"] ?? "";

echo "Nome: " .
    htmlspecialchars($nome, ENT_QUOTES, "UTF-8");

?>
```

Se o usuário informar Maria, a URL poderá apresentar:

text

```text
processar.php?nome=Maria
```

Características do GET:

- Os dados aparecem na URL.
- É adequado para pesquisas e filtros.
- Permite compartilhar links com parâmetros.
- Não deve ser utilizado para enviar senhas.
- Possui limitações práticas de tamanho da URL.

**Método POST**

O método POST envia os dados no corpo da requisição HTTP.

Exemplo:

HTMLQuebrar linhasCopiar códigoVer prévia

```html
<form action="processar.php" method="POST">

    <label>Nome:</label>
    <input type="text" name="nome">

    <button type="submit">Enviar</button>

</form>
```

Arquivo `processar.php`:

php

```php
<?php

$nome = $_POST["nome"] ?? "";

echo "Nome: " .
    htmlspecialchars($nome, ENT_QUOTES, "UTF-8");

?>
```

Características do POST:

- Os dados não aparecem diretamente na URL.
- É utilizado em cadastros e formulários de login.
- Permite enviar diferentes tipos de dados.
- É adequado para operações que modificam informações no servidor.

**Importante:** POST não significa criptografia. Para proteger os dados durante a transmissão, utilize HTTPS.

### 4\. Criando campos de texto (INPUT TEXT)

O campo `text` permite que o usuário digite informações textuais.

**Exemplo:**

HTMLQuebrar linhasCopiar códigoVer prévia

```html
<form method="POST" action="processar.php">

    <label>Nome:</label>

    <input type="text" name="nome">

    <button type="submit">Enviar</button>

</form>
```

Recebendo os dados:

php

```php
<?php

$nome = $_POST["nome"] ?? "";

echo "Olá, " .
    htmlspecialchars($nome, ENT_QUOTES, "UTF-8");

?>
```

### 5\. Campo de e-mail (INPUT EMAIL)

O campo `email` permite receber endereços de correio eletrônico.

**Exemplo:**

HTMLQuebrar linhasCopiar códigoVer prévia

```html
<form method="POST" action="processar.php">

    <label>E-mail:</label>

    <input type="email" name="email" required>

    <button type="submit">Enviar</button>

</form>
```

No PHP, podemos validar o endereço utilizando `filter_var()`.

php

```php
<?php

$email = trim($_POST["email"] ?? "");

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

    echo "E-mail válido!";

} else {

    echo "E-mail inválido!";

}

?>
```

### 6\. Campo de senha (INPUT PASSWORD)

O campo `password` permite receber senhas sem apresentar os caracteres digitados diretamente na tela.

**Exemplo:**

HTMLQuebrar linhasCopiar códigoVer prévia

```html
<form method="POST" action="processar.php">

    <label>Senha:</label>

    <input type="password" name="senha" required>

    <button type="submit">Enviar</button>

</form>
```

Para armazenar senhas, devemos utilizar a função `password_hash()`.

php

```php
<?php

$senha = $_POST["senha"] ?? "";

if ($senha !== "") {

    $hash = password_hash($senha, PASSWORD_DEFAULT);

    echo "Senha processada com segurança.";

}

?>
```

Em aplicações reais, o hash deve ser armazenado no banco de dados, nunca a senha original.

### 7\. Campo numérico (INPUT NUMBER)

O campo `number` permite receber valores numéricos.

**Exemplo:**

HTMLQuebrar linhasCopiar códigoVer prévia

```html
<form method="POST" action="processar.php">

    <label>Idade:</label>

    <input
        type="number"
        name="idade"
        min="1"
        max="120"
        required
    >

    <button type="submit">Enviar</button>

</form>
```

Processamento em PHP:

php

```php
<?php

$idade = filter_input(INPUT_POST, "idade", FILTER_VALIDATE_INT);

if ($idade === false || $idade === null || $idade < 1 || $idade > 120) {

    echo "Idade inválida.";

} else {

    echo "Idade informada: " . $idade;

}

?>
```

### 8\. Campo de data (INPUT DATE)

O campo `date` permite selecionar datas utilizando um calendário.

**Exemplo:**

HTMLQuebrar linhasCopiar códigoVer prévia

```html
<form method="POST" action="processar.php">

    <label>Data de nascimento:</label>

    <input type="date" name="nascimento" required>

    <button type="submit">Enviar</button>

</form>
```

Recebendo os dados:

php

```php
<?php

$data = $_POST["nascimento"] ?? "";

echo "Data recebida: " .
    htmlspecialchars($data, ENT_QUOTES, "UTF-8");

?>
```

Para aplicações reais, a data deve ser validada antes de ser armazenada.

### 9\. Botões de opção (RADIO)

Os campos `radio` permitem selecionar apenas uma opção dentro de um grupo.

**Exemplo:**

HTMLQuebrar linhasCopiar códigoVer prévia

```html
<form method="POST" action="processar.php">

    <label>Sexo:</label>

    <input type="radio" name="sexo" value="Masculino">
    Masculino

    <input type="radio" name="sexo" value="Feminino">
    Feminino

    <input type="radio" name="sexo" value="Outro">
    Outro

    <button type="submit">Enviar</button>

</form>
```

Recebendo os dados:

php

```php
<?php

$sexo = $_POST["sexo"] ?? "";

$opcoes = ["Masculino", "Feminino", "Outro"];

if (in_array($sexo, $opcoes, true)) {

    echo "Opção selecionada: " .
        htmlspecialchars($sexo, ENT_QUOTES, "UTF-8");

} else {

    echo "Selecione uma opção válida.";

}

?>
```

### 10\. Caixas de seleção (CHECKBOX)

As caixas de seleção permitem escolher uma ou várias opções.

**Exemplo:**

HTMLQuebrar linhasCopiar códigoVer prévia

```html
<form method="POST" action="processar.php">

    <label>Quais linguagens você conhece?</label>

    <input type="checkbox" name="linguagens[]" value="PHP">
    PHP

    <input type="checkbox" name="linguagens[]" value="JavaScript">
    JavaScript

    <input type="checkbox" name="linguagens[]" value="Python">
    Python

    <input type="checkbox" name="linguagens[]" value="Java">
    Java

    <button type="submit">Enviar</button>

</form>
```

Observe o uso de `linguagens[]`.

Os colchetes permitem enviar várias opções como um array.

Processamento em PHP:

php

```php
<?php

$linguagens = $_POST["linguagens"] ?? [];

$opcoesValidas = ["PHP", "JavaScript", "Python", "Java"];

if (!is_array($linguagens)) {
    exit("Dados inválidos.");
}

foreach ($linguagens as $linguagem) {

    if (!is_string($linguagem) ||
        !in_array($linguagem, $opcoesValidas, true)) {

        exit("Opção inválida.");

    }

    echo htmlspecialchars($linguagem, ENT_QUOTES, "UTF-8");
    echo "<br>";

}

?>
```

### 11\. Lista de seleção (SELECT)

O elemento `select` permite apresentar uma lista de opções.

**Exemplo:**

HTMLQuebrar linhasCopiar códigoVer prévia

```html
<form method="POST" action="processar.php">

    <label>Escolha seu curso:</label>

    <select name="curso">

        <option value="">Selecione</option>

        <option value="Informática">Informática</option>

        <option value="Administração">Administração</option>

        <option value="Contabilidade">Contabilidade</option>

        <option value="Eletrônica">Eletrônica</option>

    </select>

    <button type="submit">Enviar</button>

</form>
```

Processamento:

php

```php
<?php

$curso = $_POST["curso"] ?? "";

$cursosValidos = [
    "Informática",
    "Administração",
    "Contabilidade",
    "Eletrônica"
];

if (in_array($curso, $cursosValidos, true)) {

    echo "Curso selecionado: " .
        htmlspecialchars($curso, ENT_QUOTES, "UTF-8");

} else {

    echo "Selecione um curso válido.";

}

?>
```

### 12\. Campo de texto longo (TEXTAREA)

O `textarea` permite receber textos maiores, como mensagens, comentários e observações.

**Exemplo:**

HTMLQuebrar linhasCopiar códigoVer prévia

```html
<form method="POST" action="processar.php">

    <label>Mensagem:</label>

    <textarea name="mensagem" rows="5" cols="40"></textarea>

    <button type="submit">Enviar</button>

</form>
```

Processamento:

php

```php
<?php

$mensagem = trim($_POST["mensagem"] ?? "");

echo nl2br(
    htmlspecialchars($mensagem, ENT_QUOTES, "UTF-8")
);

?>
```

### 13\. Campos ocultos (INPUT HIDDEN)

O campo `hidden` permite enviar informações que não aparecem visualmente no formulário.

**Exemplo:**

HTMLQuebrar linhasCopiar códigoVer prévia

```html
<form method="POST" action="processar.php">

    <input type="hidden" name="origem" value="site">

    <label>Nome:</label>

    <input type="text" name="nome">

    <button type="submit">Enviar</button>

</form>
```

No PHP:

php

```php
<?php

$origem = $_POST["origem"] ?? "";

echo "Origem: " .
    htmlspecialchars($origem, ENT_QUOTES, "UTF-8");

?>
```

**Atenção:** campos ocultos podem ser modificados pelo usuário. Nunca utilize esses campos como prova de autorização ou como fonte confiável de valores importantes.

### 14\. Botões de envio e limpeza

Existem diferentes tipos de botões nos formulários.

**Botão de envio:**

HTMLQuebrar linhasCopiar códigoVer prévia

```html
<button type="submit">Enviar</button>
```

Envia os dados para o servidor.

**Botão de limpeza:**

HTMLQuebrar linhasCopiar códigoVer prévia

```html
<button type="reset">Limpar</button>
```

Restaura os campos aos valores iniciais.

**Botão comum:**

HTMLQuebrar linhasCopiar códigoVer prévia

```html
<button type="button">Clique aqui</button>
```

Não envia o formulário automaticamente.

### 15\. Validando formulários com HTML

O HTML oferece atributos que permitem realizar validações básicas no navegador.

| Atributo | Finalidade |
| --- | --- |
| required | Exige o preenchimento |
| minlength | Define o tamanho mínimo |
| maxlength | Define o tamanho máximo |
| min | Define o valor mínimo |
| max | Define o valor máximo |
| pattern | Define um padrão de entrada |
| type="email" | Verifica o formato básico de e-mail |
| type="number" | Restringe a entrada a valores numéricos |

**Exemplo:**

HTMLQuebrar linhasCopiar códigoVer prévia

```html
<form method="POST" action="processar.php">

    <label>Nome:</label>

    <input
        type="text"
        name="nome"
        minlength="3"
        maxlength="50"
        required
    >

    <br><br>

    <label>E-mail:</label>

    <input type="email" name="email" required>

    <br><br>

    <label>Idade:</label>

    <input
        type="number"
        name="idade"
        min="18"
        max="100"
        required
    >

    <br><br>

    <button type="submit">Cadastrar</button>

</form>
```

A validação HTML melhora a experiência do usuário, mas não substitui a validação no servidor.

### 16\. Validando dados com PHP

Toda informação recebida do navegador deve ser considerada não confiável.

Por isso, o PHP deve validar os dados antes de realizar operações.

**Exemplo:**

php

```php
<?php

$nome = trim($_POST["nome"] ?? "");

$email = trim($_POST["email"] ?? "");

$idade = filter_input(
    INPUT_POST,
    "idade",
    FILTER_VALIDATE_INT
);

if ($nome === "") {

    exit("Informe o nome.");

}

if (mb_strlen($nome, "UTF-8") < 3) {

    exit("O nome deve possuir pelo menos três caracteres.");

}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

    exit("Informe um e-mail válido.");

}

if ($idade === false || $idade === null || $idade < 18 || $idade > 100) {

    exit("Idade inválida.");

}

echo "Dados validados com sucesso!";

?>
```

### 17\. Verificando se o formulário foi enviado

Podemos verificar se uma requisição foi enviada utilizando a variável `$_SERVER["REQUEST_METHOD"]`.

**Exemplo:**

php

```php
<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $nome = $_POST["nome"] ?? "";

    echo "Formulário recebido!";

    echo "<br>";

    echo htmlspecialchars($nome, ENT_QUOTES, "UTF-8");

}

?>
```

Esse recurso permite colocar o formulário e seu processamento no mesmo arquivo.

### 18\. Criando formulário e processamento no mesmo arquivo

É possível desenvolver uma aplicação que apresente o formulário e processe os dados utilizando apenas um arquivo PHP.

**Exemplo:****`cadastro.php`**

php

```php
<?php

$nome = "";
$mensagem = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $nome = trim($_POST["nome"] ?? "");

    if ($nome === "") {

        $mensagem = "Informe seu nome.";

    } else {

        $mensagem = "Cadastro recebido com sucesso!";

    }

}

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">

    <title>Cadastro de Usuário</title>

</head>

<body>

    <h1>Cadastro de Usuário</h1>

    <form method="POST">

        <label>Nome:</label>

        <input
            type="text"
            name="nome"
            value="<?= htmlspecialchars($nome, ENT_QUOTES, 'UTF-8') ?>"
            required
        >

        <button type="submit">Cadastrar</button>

    </form>

    <p>
        <?= htmlspecialchars($mensagem, ENT_QUOTES, 'UTF-8') ?>
    </p>

</body>

</html>
```

### 19\. Trabalhando com arquivos enviados por formulários

O PHP permite receber arquivos enviados pelos usuários.

Para isso, utilizamos o atributo `enctype="multipart/form-data"` no formulário.

**Exemplo de formulário:**

HTMLQuebrar linhasCopiar códigoVer prévia

```html
<form
    action="upload.php"
    method="POST"
    enctype="multipart/form-data"
>

    <label>Selecione uma imagem:</label>

    <input type="file" name="imagem" accept="image/jpeg,image/png">

    <button type="submit">Enviar imagem</button>

</form>
```

**Processamento em PHP:**

php

```php
<?php

if (!isset($_FILES["imagem"])) {
    exit("Nenhum arquivo enviado.");
}

$arquivo = $_FILES["imagem"];

if ($arquivo["error"] !== UPLOAD_ERR_OK) {
    exit("Erro no envio do arquivo.");
}

if ($arquivo["size"] > 2 * 1024 * 1024) {
    exit("O arquivo deve ter no máximo 2 MB.");
}

$finfo = new finfo(FILEINFO_MIME_TYPE);

$tipo = $finfo->file($arquivo["tmp_name"]);

$tiposPermitidos = [
    "image/jpeg" => "jpg",
    "image/png" => "png"
];

if (!isset($tiposPermitidos[$tipo])) {
    exit("Formato de imagem não permitido.");
}

$nomeArquivo = bin2hex(random_bytes(16))
    . "." . $tiposPermitidos[$tipo];

$pasta = __DIR__ . "/uploads";

if (!is_dir($pasta)) {
    mkdir($pasta, 0750, true);
}

$destino = $pasta . "/" . $nomeArquivo;

if (!move_uploaded_file($arquivo["tmp_name"], $destino)) {
    exit("Não foi possível salvar o arquivo.");
}

echo "Imagem enviada com sucesso!";

?>
```

**Cuidados importantes:**

- Não confie apenas no atributo `accept` do HTML.
- Valide o tipo real do arquivo no servidor.
- Defina limites de tamanho.
- Utilize nomes de arquivos gerados pelo sistema.
- Não permita execução de arquivos enviados.
- Armazene os arquivos fora da área pública sempre que possível.

### 20\. Segurança em formulários PHP

A segurança é um dos aspectos mais importantes no desenvolvimento de formulários.

Algumas medidas recomendadas:

**1\. Proteção contra XSS**

Utilize `htmlspecialchars()` ao apresentar dados fornecidos pelos usuários.

php

```php
echo htmlspecialchars(
    $nome,
    ENT_QUOTES,
    "UTF-8"
);
```

**2\. Proteção contra SQL Injection**

Utilize consultas preparadas com PDO ou MySQLi.

Não concatene diretamente dados do formulário em comandos SQL.

**3\. Proteção contra CSRF**

Utilize tokens de segurança nos formulários que executam operações importantes.

Exemplo simplificado de geração de token:

php

```php
<?php

session_start();

$_SESSION["csrf_token"] = bin2hex(random_bytes(32));

?>
```

No formulário:

php

```php
<input
    type="hidden"
    name="csrf_token"
    value="<?= htmlspecialchars($_SESSION["csrf_token"], ENT_QUOTES, "UTF-8") ?>"
>
```

Na validação do processamento:

php

```php
<?php

session_start();

$token = $_POST["csrf_token"] ?? "";

if (
    !is_string($token) ||
    !isset($_SESSION["csrf_token"]) ||
    !hash_equals($_SESSION["csrf_token"], $token)
) {

    exit("Requisição inválida.");

}

unset($_SESSION["csrf_token"]);

?>
```

**4\. Validação no servidor**

Nunca confie exclusivamente nas validações realizadas pelo navegador.

**5\. Senhas seguras**

Utilize `password_hash()` e `password_verify()` para trabalhar com senhas.

### 21\. Exemplo prático: Sistema de cadastro de alunos

Vamos desenvolver um formulário para cadastrar alunos e apresentar as informações recebidas.

**Arquivo:****`alunos.php`**

php

```php
<?php

$mensagem = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $nome = trim($_POST["nome"] ?? "");

    $email = trim($_POST["email"] ?? "");

    $curso = $_POST["curso"] ?? "";

    $cursosValidos = [
        "Informática",
        "Administração",
        "Contabilidade"
    ];

    if ($nome === "" || $email === "") {

        $mensagem = "Preencha todos os campos.";

    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

        $mensagem = "E-mail inválido.";

    } elseif (!in_array($curso, $cursosValidos, true)) {

        $mensagem = "Selecione um curso válido.";

    } else {

        $mensagem = "Aluno cadastrado com sucesso!";

    }

}

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">

    <title>Cadastro de Alunos</title>

</head>

<body>

    <h1>Cadastro de Alunos</h1>

    <form method="POST">

        <label>Nome:</label>

        <input type="text" name="nome" required>

        <br><br>

        <label>E-mail:</label>

        <input type="email" name="email" required>

        <br><br>

        <label>Curso:</label>

        <select name="curso" required>

            <option value="">Selecione</option>

            <option value="Informática">Informática</option>

            <option value="Administração">Administração</option>

            <option value="Contabilidade">Contabilidade</option>

        </select>

        <br><br>

        <button type="submit">Cadastrar</button>

    </form>

    <h3>
        <?= htmlspecialchars($mensagem, ENT_QUOTES, "UTF-8") ?>
    </h3>

</body>

</html>
```

### 22\. Exemplo prático: Formulário de contato

Vamos criar um formulário para receber mensagens dos visitantes de um site.

**Arquivo:****`contato.php`**

php

```php
<?php

$mensagemSistema = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $nome = trim($_POST["nome"] ?? "");

    $email = trim($_POST["email"] ?? "");

    $assunto = trim($_POST["assunto"] ?? "");

    $mensagem = trim($_POST["mensagem"] ?? "");

    if (
        $nome === "" ||
        $assunto === "" ||
        $mensagem === ""
    ) {

        $mensagemSistema = "Preencha todos os campos.";

    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

        $mensagemSistema = "Informe um e-mail válido.";

    } else {

        $mensagemSistema = "Mensagem recebida com sucesso!";

    }

}

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">

    <title>Contato</title>

</head>

<body>

    <h1>Entre em contato</h1>

    <form method="POST">

        <label>Nome:</label>
        <input type="text" name="nome" required>

        <br><br>

        <label>E-mail:</label>
        <input type="email" name="email" required>

        <br><br>

        <label>Assunto:</label>
        <input type="text" name="assunto" required>

        <br><br>

        <label>Mensagem:</label>
        <textarea name="mensagem" required></textarea>

        <br><br>

        <button type="submit">Enviar mensagem</button>

    </form>

    <p>
        <?= htmlspecialchars($mensagemSistema, ENT_QUOTES, "UTF-8") ?>
    </p>

</body>

</html>
```

### 23\. Principais variáveis superglobais utilizadas em formulários

O PHP possui variáveis superglobais que permitem acessar informações das requisições.

| Variável | Finalidade |
| --- | --- |
| $\_GET | Recebe dados enviados pelo método GET |
| $\_POST | Recebe dados enviados pelo método POST |
| $\_REQUEST | Reúne dados de GET, POST e COOKIE, conforme a configuração |
| $\_FILES | Recebe informações de arquivos enviados |
| $\_SERVER | Fornece informações sobre o servidor e a requisição |
| $\_SESSION | Armazena informações associadas à sessão |
| $\_COOKIE | Acessa cookies enviados pelo navegador |

### 24\. Boas práticas no desenvolvimento de formulários

1. Utilizar labels para identificar os campos.
2. Definir nomes claros para os campos.
3. Utilizar `required` quando necessário.
4. Validar todos os dados no servidor.
5. Utilizar HTTPS.
6. Proteger as saídas com `htmlspecialchars()`.
7. Utilizar consultas preparadas para trabalhar com bancos de dados.
8. Proteger operações importantes contra CSRF.
9. Não armazenar senhas em texto puro.
10. Apresentar mensagens claras ao usuário.
11. Separar a apresentação HTML do processamento PHP em projetos maiores.
12. Validar arquivos enviados.
13. Evitar confiar em valores enviados pelo navegador.
14. Tratar corretamente campos ausentes ou inválidos.

### 25\. Exercícios práticos

**Exercício 1 – Formulário de identificação**

Crie um formulário com nome, idade e cidade. Receba os dados utilizando POST e apresente as informações.

**Exercício 2 – Formulário de cadastro**

Crie um formulário contendo nome, e-mail, telefone e endereço.

**Exercício 3 – Formulário de login**

Crie um formulário com campos de usuário e senha. Faça a validação dos campos no PHP.

**Exercício 4 – Formulário de cursos**

Crie um formulário com uma lista de cursos utilizando SELECT. Apresente o curso selecionado.

**Exercício 5 – Formulário de interesses**

Crie um formulário com caixas de seleção para que o usuário escolha várias linguagens de programação.

**Exercício 6 – Calculadora**

Crie um formulário com dois números e um campo de seleção para escolher uma operação matemática. Apresente o resultado utilizando PHP.

**Exercício 7 – Cadastro de produtos**

Crie um formulário com nome do produto, preço, quantidade e categoria. Valide os dados recebidos.

**Exercício 8 – Formulário de inscrição**

Crie um formulário com nome, e-mail, data de nascimento, telefone e curso pretendido.

**Exercício 9 – Upload de imagem**

Crie um formulário que permita enviar uma imagem. Valide o tamanho e o formato do arquivo no servidor.

**Exercício 10 – Pesquisa de produtos**

Crie um formulário de pesquisa que receba o nome de um produto utilizando GET.

### 26\. Projeto prático: Sistema de cadastro de estudantes

Desenvolva uma aplicação em PHP para realizar o cadastro de estudantes.

**Requisitos funcionais:**

1. Criar um formulário de cadastro.
2. Receber nome completo.
3. Receber e-mail.
4. Receber telefone.
5. Receber data de nascimento.
6. Permitir selecionar um curso.
7. Permitir selecionar o turno.
8. Validar os campos obrigatórios.
9. Validar o formato do e-mail.
10. Apresentar os dados cadastrados.

**Campos sugeridos:**

| Campo | Tipo HTML |
| --- | --- |
| Nome completo | text |
| E-mail | email |
| Telefone | tel |
| Data de nascimento | date |
| Curso | select |
| Turno | radio |
| Interesses | checkbox |
| Observações | textarea |

**Desafio adicional:**

Amplie o sistema para armazenar os estudantes em um banco de dados MySQL, utilizando PDO e consultas preparadas.

### 27\. Conclusão

Os formulários HTML integrados ao PHP são fundamentais para o desenvolvimento de aplicações web dinâmicas.

Com eles, podemos receber informações dos usuários, validar dados, processar solicitações, enviar arquivos e integrar sistemas com bancos de dados.

O domínio dos métodos GET e POST, dos campos HTML, das variáveis superglobais e das técnicas de validação é essencial para desenvolver aplicações funcionais e seguras.

A prática dos exercícios propostos permitirá construir sistemas reais de cadastro, autenticação, pesquisa e gerenciamento de informações.

### 28\. Referências bibliográficas e materiais de apoio

- Manual oficial do PHP: [https://www.php.net/manual/pt\_BR/](<https://www.php.net/manual/pt_BR/>)
- Variáveis externas: [https://www.php.net/manual/pt\_BR/language.variables.external.php](<https://www.php.net/manual/pt_BR/language.variables.external.php>)
- Tratamento de uploads: [https://www.php.net/manual/pt\_BR/features.file-upload.php](<https://www.php.net/manual/pt_BR/features.file-upload.php>)
- Filtragem de dados: [https://www.php.net/manual/pt\_BR/book.filter.php](<https://www.php.net/manual/pt_BR/book.filter.php>)
- Função htmlspecialchars(): [https://www.php.net/manual/pt\_BR/function.htmlspecialchars.php](<https://www.php.net/manual/pt_BR/function.htmlspecialchars.php>)
- Segurança de senhas: [https://www.php.net/manual/pt\_BR/book.password.php](<https://www.php.net/manual/pt_BR/book.password.php>)
- Formulários HTML — MDN: [https://developer.mozilla.org/pt-BR/docs/Learn\_web\_development/Extensions/Forms](<https://developer.mozilla.org/pt-BR/docs/Learn_web_development/Extensions/Forms>)

**Fim da apostila — Formulários HTML com PHP.**

## Próxima etapa da aprendizagem

Depois de estudar formulários, recomendo continuar nesta sequência:

1. Validação e tratamento de dados em PHP.
2. Métodos GET e POST em profundidade.
3. Sessões e Cookies em PHP.
4. Conexão com banco de dados MySQL usando PDO.
5. Comandos SQL fundamentais.
6. CRUD com PHP e MySQL.

Próxima apostila recomendada: Sessões e Cookies em PHP, para aprender a manter usuários autenticados, controlar acessos e armazenar informações temporárias durante a navegação.