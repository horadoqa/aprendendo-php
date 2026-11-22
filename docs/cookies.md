# SESSÕES E COOKIES EM PHP

## Conceitos, criação, gerenciamento, segurança e aplicações práticas

### 1\. Introdução às Sessões e Cookies

Durante a navegação em um site, muitas vezes precisamos manter informações de um usuário entre diferentes páginas.

Por exemplo:

- Manter um usuário conectado ao sistema.
- Armazenar o nome do usuário autenticado.
- Controlar permissões de acesso.
- Guardar produtos em um carrinho de compras.
- Armazenar preferências de navegação.
- Controlar o tempo de acesso ao sistema.

Para realizar essas tarefas, o PHP oferece dois recursos importantes:

**Sessões (Sessions):** permitem armazenar informações no servidor, associadas a um identificador de sessão.

**Cookies:** permitem armazenar pequenas informações no navegador do usuário, que podem ser enviadas ao servidor nas requisições seguintes.

### 2\. O que são Sessões em PHP?

Uma sessão é um mecanismo utilizado para manter informações relacionadas a um usuário durante diferentes requisições HTTP.

Como o protocolo HTTP não mantém automaticamente o estado das requisições, as sessões permitem que o sistema reconheça um usuário enquanto ele navega entre páginas.

**Exemplo de utilização:**

Imagine um sistema escolar:

1. O aluno acessa a página de login.
2. Informa seu usuário e senha.
3. O sistema verifica as credenciais.
4. O PHP inicia uma sessão autenticada.
5. O aluno acessa a página principal.
6. O sistema identifica o aluno sem solicitar novamente sua senha em cada página.

### 3\. Iniciando uma sessão com SESSION\_START()

Para iniciar ou retomar uma sessão em PHP, utilizamos a função `session_start()`.

**Sintaxe:**

php

```php
session_start();
```

Essa função deve ser executada antes de qualquer saída enviada ao navegador, como HTML, espaços ou mensagens.

**Exemplo:**

php

```php
<?php

session_start();

echo "Sessão iniciada com sucesso!";

?>
```

A função inicia uma nova sessão ou recupera uma sessão existente, conforme o identificador recebido.

### 4\. Criando variáveis de sessão

Para armazenar informações em uma sessão, utilizamos a variável superglobal `$_SESSION`.

**Exemplo:**

php

```php
<?php

session_start();

$_SESSION["nome"] = "Carlos";

$_SESSION["idade"] = 20;

$_SESSION["curso"] = "Informática";

echo "Dados armazenados na sessão.";

?>
```

Nesse exemplo, armazenamos três informações:

- Nome.
- Idade.
- Curso.

Essas informações ficam disponíveis nas páginas que utilizarem a mesma sessão.

### 5\. Recuperando valores de uma sessão

Para recuperar informações armazenadas, basta acessar os elementos de `$_SESSION`.

**Exemplo:**

Arquivo `pagina1.php`:

php

```php
<?php

session_start();

$_SESSION["nome"] = "Maria";

?>
```

Arquivo `pagina2.php`:

php

```php
<?php

session_start();

echo "Nome: " . $_SESSION["nome"];

?>
```

Resultado:

text

```text
Nome: Maria
```

As informações permanecem disponíveis enquanto a sessão existir e o navegador continuar utilizando o identificador correspondente.

### 6\. Verificando se uma variável de sessão existe

Podemos utilizar `isset()` para verificar se determinada variável foi criada.

**Exemplo:**

php

```php
<?php

session_start();

if (isset($_SESSION["nome"])) {

    echo "Usuário: " . $_SESSION["nome"];

} else {

    echo "Usuário não identificado.";

}

?>
```

Essa verificação é importante para evitar acessar informações inexistentes.

### 7\. Removendo uma variável de sessão

Para remover uma informação específica, utilizamos `unset()`.

**Exemplo:**

php

```php
<?php

session_start();

$_SESSION["nome"] = "Carlos";

unset($_SESSION["nome"]);

echo "Variável removida.";

?>
```

O comando `unset()` remove somente a variável indicada, não encerrando necessariamente toda a sessão.

### 8\. Destruindo uma sessão

Para encerrar uma sessão, utilizamos `session_destroy()`.

**Exemplo:**

php

```php
<?php

session_start();

session_destroy();

echo "Sessão encerrada.";

?>
```

É importante compreender que `session_destroy()` destrói os dados da sessão no servidor, mas não limpa automaticamente a variável `$_SESSION` da memória da requisição atual nem elimina necessariamente o cookie de identificação do navegador.

Uma rotina de encerramento mais completa é apresentada posteriormente.

### 9\. Diferença entre SESSION\_START(), SESSION\_DESTROY() e UNSET()

| Função ou comando | Finalidade |
| --- | --- |
| session\_start() | Inicia ou recupera uma sessão |
| session\_destroy() | Destrói os dados da sessão no servidor |
| unset() | Remove uma variável específica |
| session\_unset() | Remove todas as variáveis da sessão atual |

### 10\. O que são Cookies em PHP?

Cookies são pequenos dados armazenados no navegador do usuário.

Eles permitem que um site reconheça determinadas preferências e informações em visitas posteriores.

Exemplos de utilização:

- Preferência de idioma.
- Tema claro ou escuro.
- Preferência de exibição.
- Identificação de determinadas configurações.
- Manutenção de informações não sensíveis.

Diferentemente das sessões, os cookies são armazenados no dispositivo do usuário.

### 11\. Criando Cookies com SETCOOKIE()

Para criar um cookie, utilizamos a função `setcookie()`.

**Sintaxe:**

php

```php
setcookie(nome, valor, opções);
```

**Exemplo:**

php

```php
<?php

setcookie("usuario", "Carlos", time() + 3600, "/");

echo "Cookie criado!";

?>
```

Nesse exemplo:

- `usuario`: nome do cookie.
- `Carlos`: valor armazenado.
- `time() + 3600`: tempo de validade de uma hora.
- `/`: disponibiliza o cookie para todo o site.

O cookie é enviado ao navegador por meio de um cabeçalho HTTP. Por isso, `setcookie()` deve ser chamado antes de qualquer saída enviada ao navegador.

### 12\. Recuperando Cookies

Para recuperar um cookie, utilizamos a variável superglobal `$_COOKIE`.

**Exemplo:**

Arquivo `criar.php`:

php

```php
<?php

setcookie("nome", "Maria", time() + 3600, "/");

?>
```

Arquivo `mostrar.php`:

php

```php
<?php

if (isset($_COOKIE["nome"])) {

    echo "Nome: " .
        htmlspecialchars($_COOKIE["nome"], ENT_QUOTES, "UTF-8");

} else {

    echo "Cookie não encontrado.";

}

?>
```

O navegador só envia o cookie em uma requisição posterior, desde que ele esteja válido e corresponda ao domínio e caminho configurados.

### 13\. Definindo o tempo de duração de um Cookie

Podemos determinar por quanto tempo um cookie ficará disponível.

**Cookie com validade de uma hora:**

php

```php
<?php

setcookie("usuario", "Carlos", time() + 3600, "/");

?>
```

**Cookie com validade de um dia:**

php

```php
<?php

setcookie("usuario", "Carlos", time() + 86400, "/");

?>
```

**Cookie com validade de sete dias:**

php

```php
<?php

setcookie("usuario", "Carlos", time() + 604800, "/");

?>
```

O valor de `time()` representa o horário atual em segundos desde a época Unix.

### 14\. Removendo Cookies

Para remover um cookie, podemos enviar novamente o mesmo cookie com uma data de expiração no passado.

**Exemplo:**

php

```php
<?php

setcookie("usuario", "", time() - 3600, "/");

echo "Cookie removido.";

?>
```

É importante utilizar os mesmos atributos de caminho e domínio usados na criação do cookie.

### 15\. Utilizando Cookies com Opções de Segurança

O PHP permite configurar opções adicionais ao criar cookies.

Exemplo:

php

```php
<?php

setcookie("preferencia", "escuro", [

    "expires" => time() + 86400,

    "path" => "/",

    "secure" => true,

    "httponly" => true,

    "samesite" => "Lax"

]);

?>
```

Significado das opções:

| Opção | Finalidade |
| --- | --- |
| expires | Define a data de expiração |
| path | Define o caminho em que o cookie estará disponível |
| domain | Define o domínio |
| secure | Envia o cookie somente por HTTPS |
| httponly | Impede o acesso ao cookie por JavaScript |
| samesite | Controla o envio do cookie em requisições entre sites |

**Importante:** a opção `secure => true` deve ser utilizada em ambientes com HTTPS.

### 16\. Diferenças entre Sessões e Cookies

Embora sejam utilizados para manter informações entre requisições, sessões e cookies possuem diferenças importantes.

| Característica | Sessões | Cookies |
| --- | --- | --- |
| Armazenamento principal | Servidor | Navegador |
| Identificação | ID de sessão | Nome e valor |
| Validade | Controlada pelo servidor e configuração | Definida por expiração ou sessão do navegador |
| Capacidade | Depende do armazenamento do servidor | Limitada pelo navegador |
| Segurança | Dados mantidos no servidor | Dados armazenados no dispositivo do usuário |
| Utilização | Login e controle de acesso | Preferências e configurações |

### 17\. Criando um Sistema de Login com Sessões

Um dos usos mais importantes das sessões é controlar a autenticação de usuários.

Vamos desenvolver um exemplo didático de login.

**Arquivo:****`login.php`**

php

```php
<?php

session_start();

$erro = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $usuario = trim($_POST["usuario"] ?? "");

    $senha = $_POST["senha"] ?? "";

    // Exemplo didático de autenticação.
    // Em sistemas reais, consulte o banco de dados.

    if ($usuario === "admin" && $senha === "123456") {

        session_regenerate_id(true);

        $_SESSION["usuario"] = $usuario;

        $_SESSION["autenticado"] = true;

        header("Location: painel.php");

        exit;

    } else {

        $erro = "Usuário ou senha incorretos.";

    }

}

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">

    <title>Login</title>

</head>

<body>

    <h1>Acesso ao Sistema</h1>

    <form method="POST">

        <label>Usuário:</label>

        <input type="text" name="usuario" required>

        <br><br>

        <label>Senha:</label>

        <input type="password" name="senha" required>

        <br><br>

        <button type="submit">Entrar</button>

    </form>

    <p>
        <?= htmlspecialchars($erro, ENT_QUOTES, "UTF-8") ?>
    </p>

</body>

</html>
```

### 18\. Criando o Painel do Usuário

Após realizar o login, o usuário será encaminhado para o painel.

**Arquivo:****`painel.php`**

php

```php
<?php

session_start();

if (
    !isset($_SESSION["autenticado"]) ||
    $_SESSION["autenticado"] !== true
) {

    header("Location: login.php");

    exit;

}

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">

    <title>Painel</title>

</head>

<body>

    <h1>Bem-vindo ao sistema!</h1>

    <p>
        Usuário:
        <?= htmlspecialchars($_SESSION["usuario"], ENT_QUOTES, "UTF-8") ?>
    </p>

    <a href="logout.php">Sair do sistema</a>

</body>

</html>
```

O painel verifica se o usuário possui uma sessão autenticada antes de apresentar o conteúdo.

### 19\. Criando o Logout (Encerramento de Sessão)

O logout permite que o usuário encerre sua autenticação.

**Arquivo:****`logout.php`**

php

```php
<?php

session_start();

// Remove todas as variáveis da sessão.
$_SESSION = [];

// Remove o cookie de identificação da sessão.
if (ini_get("session.use_cookies")) {

    $params = session_get_cookie_params();

    setcookie(session_name(), "", [
        "expires" => time() - 42000,
        "path" => $params["path"],
        "domain" => $params["domain"],
        "secure" => $params["secure"],
        "httponly" => $params["httponly"],
        "samesite" => $params["samesite"] ?? "Lax"
    ]);

}

// Destrói os dados da sessão.
session_destroy();

header("Location: login.php");

exit;

?>
```

Esse procedimento remove os dados da sessão e expira o cookie de identificação.

### 20\. Utilizando Sessões para Controlar Permissões

As sessões também podem armazenar informações sobre o nível de acesso dos usuários.

Exemplo:

php

```php
<?php

session_start();

$_SESSION["usuario"] = "Carlos";

$_SESSION["perfil"] = "administrador";

if ($_SESSION["perfil"] === "administrador") {

    echo "Acesso administrativo autorizado.";

} else {

    echo "Acesso restrito.";

}

?>
```

Em sistemas reais, as permissões devem ser verificadas no servidor em todas as operações protegidas.

Não basta esconder botões ou links na interface.

### 21\. Exemplo prático: Carrinho de Compras com Sessões

As sessões podem ser utilizadas para manter os produtos selecionados pelo usuário.

**Arquivo:****`carrinho.php`**

php

```php
<?php

session_start();

if (!isset($_SESSION["carrinho"])) {

    $_SESSION["carrinho"] = [];

}

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $produto = $_POST["produto"] ?? "";

    $produtosValidos = [
        "Notebook",
        "Mouse",
        "Teclado"
    ];

    if (in_array($produto, $produtosValidos, true)) {

        $_SESSION["carrinho"][] = $produto;

    }

}

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">

    <title>Carrinho de Compras</title>

</head>

<body>

    <h1>Adicionar Produtos</h1>

    <form method="POST">

        <select name="produto">

            <option value="Notebook">Notebook</option>

            <option value="Mouse">Mouse</option>

            <option value="Teclado">Teclado</option>

        </select>

        <button type="submit">Adicionar</button>

    </form>

    <h2>Meu Carrinho</h2>

    <?php foreach ($_SESSION["carrinho"] as $item): ?>

        <p>
            <?= htmlspecialchars($item, ENT_QUOTES, "UTF-8") ?>
        </p>

    <?php endforeach; ?>

</body>

</html>
```

Nesse exemplo, os produtos permanecem armazenados na sessão durante a navegação.

Em aplicações reais, também devemos implementar remoção de produtos, quantidades, preços obtidos de uma fonte confiável e validações adicionais.

### 22\. Exemplo prático: Armazenando Preferências com Cookies

Vamos criar um exemplo em que o usuário pode escolher um tema para o site.

**Arquivo:****`tema.php`**

php

```php
<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $tema = $_POST["tema"] ?? "";

    $temasValidos = ["claro", "escuro"];

    if (in_array($tema, $temasValidos, true)) {

        setcookie("tema", $tema, [
            "expires" => time() + 86400 * 30,
            "path" => "/",
            "secure" => !empty($_SERVER["HTTPS"]),
            "httponly" => true,
            "samesite" => "Lax"
        ]);

        header("Location: tema.php");

        exit;

    }

}

$tema = $_COOKIE["tema"] ?? "claro";

if (!in_array($tema, ["claro", "escuro"], true)) {

    $tema = "claro";

}

$fundo = $tema === "escuro" ? "#222" : "#fff";

$cor = $tema === "escuro" ? "#fff" : "#222";

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">

    <title>Preferências</title>

</head>

<body style="background: <?= $fundo ?>; color: <?= $cor ?>;">

    <h1>Preferências de Tema</h1>

    <form method="POST">

        <select name="tema">

            <option value="claro">Tema Claro</option>

            <option value="escuro">Tema Escuro</option>

        </select>

        <button type="submit">Salvar preferência</button>

    </form>

    <p>Tema atual: <?= htmlspecialchars($tema, ENT_QUOTES, "UTF-8") ?></p>

</body>

</html>
```

Esse exemplo mostra como um cookie pode armazenar uma preferência para visitas posteriores.

### 23\. Segurança em Sessões e Cookies

A segurança é fundamental quando trabalhamos com sessões e cookies.

Algumas recomendações importantes:

**1\. Regenerar o identificador da sessão**

Após a autenticação, utilize:

php

```php
session_regenerate_id(true);
```

Isso ajuda a prevenir ataques de fixação de sessão.

**2\. Utilizar HTTPS**

O HTTPS protege a comunicação entre o navegador e o servidor.

**3\. Utilizar cookies HttpOnly**

Essa configuração dificulta o acesso ao cookie de sessão por scripts executados no navegador.

**4\. Configurar SameSite**

A opção SameSite ajuda a reduzir determinados riscos relacionados a requisições entre sites.

**5\. Definir o tempo de validade**

Configure adequadamente o tempo de vida das sessões e cookies.

**6\. Não armazenar senhas em cookies**

Senhas e informações de autenticação não devem ser armazenadas diretamente em cookies.

**7\. Proteger páginas restritas**

Verifique a autenticação em todas as páginas e operações que exigem acesso autorizado.

**8\. Não confiar nos dados recebidos do navegador**

Cookies podem ser modificados pelo usuário. Sempre valide as informações recebidas.

### 24\. Configurações importantes de Sessões no PHP

O PHP permite configurar o comportamento das sessões.

Algumas configurações importantes:

| Configuração | Finalidade |
| --- | --- |
| session.cookie\_lifetime | Tempo de vida do cookie de sessão |
| session.cookie\_secure | Exige HTTPS para enviar o cookie |
| session.cookie\_httponly | Impede acesso ao cookie por JavaScript |
| session.cookie\_samesite | Define a política SameSite |
| session.use\_strict\_mode | Rejeita identificadores de sessão não inicializados |
| session.gc\_maxlifetime | Define o tempo de vida dos dados antes de serem considerados candidatos à limpeza |

Exemplo de configuração antes de iniciar a sessão:

php

```php
<?php

ini_set("session.use_strict_mode", "1");

session_set_cookie_params([
    "lifetime" => 0,
    "path" => "/",
    "secure" => true,
    "httponly" => true,
    "samesite" => "Lax"
]);

session_start();

?>
```

Esse exemplo pressupõe um ambiente HTTPS.

### 25\. Diferença entre Cookies de Sessão e Cookies Persistentes

Existem dois tipos comuns de cookies conforme sua duração.

**Cookies de sessão:**

São criados sem uma data de expiração persistente.

Normalmente são removidos quando o navegador encerra sua sessão, embora o comportamento possa variar conforme as configurações de restauração do navegador.

**Cookies persistentes:**

Possuem uma data de expiração definida.

Exemplo:

php

```php
<?php

setcookie("idioma", "pt-BR", time() + 86400 * 30, "/");

?>
```

Nesse caso, o cookie terá validade de aproximadamente 30 dias.

### 26\. Comparação entre SESSION e COOKIE na prática

Imagine um sistema de gerenciamento escolar.

Podemos utilizar sessões para:

- Identificar o aluno conectado.
- Controlar o acesso ao painel.
- Armazenar temporariamente informações do usuário.
- Controlar permissões administrativas.

Podemos utilizar cookies para:

- Salvar o idioma preferido.
- Lembrar o tema escolhido.
- Armazenar preferências de visualização.
- Manter configurações de navegação.

A escolha depende da finalidade da informação e dos requisitos de segurança.

### 27\. Boas práticas de desenvolvimento

1. Sempre iniciar a sessão antes de utilizar `$_SESSION`.
2. Executar `session_start()` antes de qualquer saída.
3. Regenerar o identificador após autenticação.
4. Utilizar HTTPS.
5. Configurar cookies com `HttpOnly`, `Secure` e `SameSite` adequadamente.
6. Não armazenar senhas em cookies.
7. Validar informações recebidas do navegador.
8. Destruir corretamente as sessões no logout.
9. Verificar permissões em todas as páginas protegidas.
10. Evitar armazenar informações desnecessárias nas sessões.
11. Configurar tempos de expiração adequados.
12. Não utilizar cookies como mecanismo confiável de autorização.

### 28\. Exercícios práticos

**Exercício 1 – Criando uma sessão**

Crie um programa que inicie uma sessão e armazene o nome de um usuário.

**Exercício 2 – Recuperando informações**

Crie duas páginas PHP. Na primeira, armazene o nome de um usuário. Na segunda, apresente o nome armazenado.

**Exercício 3 – Removendo variáveis**

Crie três variáveis de sessão e remova apenas uma utilizando `unset()`.

**Exercício 4 – Destruindo uma sessão**

Crie um programa que destrua completamente a sessão atual.

**Exercício 5 – Criando cookies**

Crie um cookie chamado `nome` com validade de 24 horas.

**Exercício 6 – Recuperando cookies**

Desenvolva uma página que apresente o valor de um cookie, caso ele exista.

**Exercício 7 – Removendo cookies**

Crie um programa que remova um cookie previamente armazenado.

**Exercício 8 – Sistema de login**

Desenvolva um formulário de login que utilize sessões para identificar o usuário autenticado.

**Exercício 9 – Controle de acesso**

Crie uma página restrita que somente possa ser acessada por usuários autenticados.

**Exercício 10 – Preferências do usuário**

Desenvolva um sistema que permita salvar a preferência de tema claro ou escuro utilizando cookies.

### 29\. Projeto prático: Sistema de autenticação de usuários

Desenvolva um pequeno sistema de autenticação utilizando PHP, sessões e formulários HTML.

**Requisitos:**

1. Criar uma página de login.
2. Receber usuário e senha.
3. Validar as credenciais.
4. Criar uma sessão após autenticação.
5. Regenerar o identificador da sessão.
6. Criar um painel administrativo.
7. Impedir o acesso ao painel sem autenticação.
8. Apresentar o nome do usuário conectado.
9. Criar uma página de logout.
10. Encerrar corretamente a sessão.

**Desafio adicional:**

Amplie o sistema para:

- Cadastrar usuários em um banco de dados MySQL.
- Armazenar senhas utilizando `password_hash()`.
- Validar senhas utilizando `password_verify()`.
- Implementar níveis de acesso.
- Criar recuperação de senha.
- Registrar a data e hora do último acesso.

### 30\. Conclusão

Sessões e cookies são recursos fundamentais para desenvolver aplicações web dinâmicas utilizando PHP.

As sessões permitem manter informações no servidor associadas ao usuário durante a navegação, enquanto os cookies permitem armazenar informações no navegador.

Compreender esses mecanismos é essencial para desenvolver sistemas de login, controle de acesso, carrinhos de compras, preferências de usuários e aplicações administrativas.

Também é importante conhecer as técnicas de segurança para proteger identificadores de sessão, dados de autenticação e informações armazenadas no navegador.

A prática dos exercícios apresentados permitirá desenvolver aplicações mais completas e preparará o estudante para trabalhar com autenticação e bancos de dados.

### 31\. Referências bibliográficas e materiais de apoio

- Manual oficial do PHP: [https://www.php.net/manual/pt\_BR/](<https://www.php.net/manual/pt_BR/>)
- Sessões em PHP: [https://www.php.net/manual/pt\_BR/book.session.php](<https://www.php.net/manual/pt_BR/book.session.php>)
- Função session\_start(): [https://www.php.net/manual/pt\_BR/function.session-start.php](<https://www.php.net/manual/pt_BR/function.session-start.php>)
- Função session\_destroy(): [https://www.php.net/manual/pt\_BR/function.session-destroy.php](<https://www.php.net/manual/pt_BR/function.session-destroy.php>)
- Função setcookie(): [https://www.php.net/manual/pt\_BR/function.setcookie.php](<https://www.php.net/manual/pt_BR/function.setcookie.php>)
- Variáveis superglobais: [https://www.php.net/manual/pt\_BR/language.variables.superglobals.php](<https://www.php.net/manual/pt_BR/language.variables.superglobals.php>)
- Segurança de sessões: [https://www.php.net/manual/pt\_BR/session.security.php](<https://www.php.net/manual/pt_BR/session.security.php>)
- OWASP Session Management Cheat Sheet: [https://cheatsheetseries.owasp.org/cheatsheets/Session\_Management\_Cheat\_Sheet.html](<https://cheatsheetseries.owasp.org/cheatsheets/Session_Management_Cheat_Sheet.html>)

**Fim da apostila — Sessões e Cookies em PHP.**

## Próxima etapa da aprendizagem

Depois de estudar sessões e cookies, recomendo continuar com:

1. Validação e tratamento de dados em PHP.
2. Banco de dados MySQL.
3. SQL: CREATE, INSERT, SELECT, UPDATE e DELETE.
4. Conexão com MySQL usando PDO.
5. CRUD com PHP e MySQL.
6. Programação Orientada a Objetos (POO).
