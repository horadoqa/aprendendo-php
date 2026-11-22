# MANIPULAÇÃO DE STRINGS EM PHP

## Conceitos, funções, métodos e aplicações práticas

### 1\. Introdução às Strings em PHP

Uma String é uma sequência de caracteres utilizada para representar textos em um programa.

Em PHP, as strings podem armazenar:

- Nomes de pessoas.
- Endereços.
- Números representados como texto.
- Mensagens.
- E-mails.
- Senhas.
- Descrições de produtos.
- Informações recebidas de formulários.

**Exemplo:**

php

```php
<?php

$nome = "Maria";
$cidade = "Rio de Janeiro";
$mensagem = "Bem-vindo ao PHP!";

echo $nome;
echo "<br>";
echo $cidade;
echo "<br>";
echo $mensagem;

?>
```

Resultado:

text

```text
Maria
Rio de Janeiro
Bem-vindo ao PHP!
```

### 2\. Formas de declarar Strings

O PHP permite declarar strings utilizando aspas simples ou aspas duplas.

**Aspas simples:**

php

```php
<?php

$nome = 'Carlos';

echo $nome;

?>
```

**Aspas duplas:**

php

```php
<?php

$nome = "Carlos";

echo "Olá, $nome!";

?>
```

A principal diferença é que as aspas duplas permitem interpolar variáveis diretamente no texto.

**Exemplo comparativo:**

php

```php
<?php

$nome = "Ana";

echo 'Olá, $nome!';
echo "<br>";
echo "Olá, $nome!";

?>
```

Resultado:

text

```text
Olá, $nome!
Olá, Ana!
```

### 3\. Concatenação de Strings

A concatenação consiste em unir duas ou mais strings.

Em PHP, utilizamos o operador ponto (`.`) para concatenar textos.

**Exemplo:**

php

```php
<?php

$nome = "João";
$sobrenome = "Silva";

$nomeCompleto = $nome . " " . $sobrenome;

echo $nomeCompleto;

?>
```

Resultado:

text

```text
João Silva
```

Também podemos concatenar mensagens:

php

```php
<?php

$produto = "Notebook";
$preco = 3500;

echo "Produto: " . $produto;
echo "<br>";
echo "Preço: R$ " . $preco;

?>
```

**Operador de concatenação e atribuição:**

O operador `.=` permite adicionar conteúdo ao final de uma string existente.

php

```php
<?php

$mensagem = "Olá";

$mensagem .= " estudante";
$mensagem .= " de PHP!";

echo $mensagem;

?>
```

Resultado:

text

```text
Olá estudante de PHP!
```

### 4\. Função STRLEN()

A função `strlen()` retorna o tamanho de uma string em bytes.

É utilizada para verificar o comprimento de um texto.

**Exemplo:**

php

```php
<?php

$texto = "Programação";

echo strlen($texto);

?>
```

Resultado:

text

```text
11
```

**Atenção:** `strlen()` conta bytes, não necessariamente caracteres. Em textos com acentos e caracteres UTF-8, podemos utilizar `mb_strlen()` para contar os caracteres corretamente.

Exemplo:

php

```php
<?php

$texto = "Olá";

echo strlen($texto);
echo "<br>";

echo mb_strlen($texto, "UTF-8");

?>
```

Resultado esperado:

text

```text
4
3
```

### 5\. Função STRTOUPPER()

A função `strtoupper()` transforma os caracteres de uma string em letras maiúsculas.

**Exemplo:**

php

```php
<?php

$nome = "maria";

echo strtoupper($nome);

?>
```

Resultado:

text

```text
MARIA
```

Para textos com acentos e caracteres especiais, utilize `mb_strtoupper()`:

php

```php
<?php

$texto = "programação em português";

echo mb_strtoupper($texto, "UTF-8");

?>
```

Resultado:

text

```text
PROGRAMAÇÃO EM PORTUGUÊS
```

### 6\. Função STRTOLOWER()

A função `strtolower()` transforma os caracteres de uma string em letras minúsculas.

**Exemplo:**

php

```php
<?php

$texto = "APRENDENDO PHP";

echo strtolower($texto);

?>
```

Resultado:

text

```text
aprendendo php
```

Para textos com acentos:

php

```php
<?php

$texto = "PROGRAMAÇÃO";

echo mb_strtolower($texto, "UTF-8");

?>
```

### 7\. Função UCWORDS()

A função `ucwords()` transforma a primeira letra de cada palavra em maiúscula.

**Exemplo:**

php

```php
<?php

$nome = "joão da silva";

echo ucwords($nome);

?>
```

Resultado:

text

```text
João Da Silva
```

Para trabalhar com caracteres acentuados, podemos utilizar `mb_convert_case()`:

php

```php
<?php

$nome = "joão da silva";

echo mb_convert_case($nome, MB_CASE_TITLE, "UTF-8");

?>
```

### 8\. Função ucfirst()

A função `ucfirst()` transforma a primeira letra da string em maiúscula.

**Exemplo:**

php

```php
<?php

$texto = "aprendendo php";

echo ucfirst($texto);

?>
```

Resultado:

text

```text
Aprendendo php
```

### 9\. Função lcfirst()

A função `lcfirst()` transforma a primeira letra da string em minúscula.

**Exemplo:**

php

```php
<?php

$texto = "Programação PHP";

echo lcfirst($texto);

?>
```

Resultado:

text

```text
programação PHP
```

### 10\. Função TRIM()

A função `trim()` remove espaços em branco e determinados caracteres do início e do final de uma string.

É muito utilizada para limpar informações recebidas de formulários.

**Exemplo:**

php

```php
<?php

$nome = "   Maria Silva   ";

$nome = trim($nome);

echo $nome;

?>
```

Resultado:

text

```text
Maria Silva
```

Também existem:

- `ltrim()`: remove espaços do início.
- `rtrim()`: remove espaços do final.

**Exemplo:**

php

```php
<?php

$texto = "   PHP   ";

echo "[" . ltrim($texto) . "]";
echo "<br>";

echo "[" . rtrim($texto) . "]";

?>
```

### 11\. Função STR\_REPLACE()

A função `str_replace()` permite substituir partes de uma string por outro conteúdo.

**Sintaxe:**

php

```php
str_replace($procurar, $substituir, $texto);
```

**Exemplo:**

php

```php
<?php

$texto = "Eu estudo Java";

$resultado = str_replace("Java", "PHP", $texto);

echo $resultado;

?>
```

Resultado:

text

```text
Eu estudo PHP
```

Também podemos substituir várias ocorrências:

php

```php
<?php

$texto = "PHP é interessante. PHP é poderoso.";

echo str_replace("PHP", "Programação", $texto);

?>
```

### 12\. Função STRPOS()

A função `strpos()` procura a posição da primeira ocorrência de um texto dentro de uma string.

**Exemplo:**

php

```php
<?php

$texto = "Aprendendo PHP";

$posicao = strpos($texto, "PHP");

if ($posicao !== false) {
    echo "Texto encontrado na posição: " . $posicao;
} else {
    echo "Texto não encontrado.";
}

?>
```

Resultado:

text

```text
Texto encontrado na posição: 11
```

**Importante:** a primeira posição de uma string é zero. Por isso, devemos utilizar `!== false` para verificar se um texto foi encontrado.

### 13\. Função STR\_CONTAINS()

A função `str_contains()` verifica se uma string contém determinado texto.

Disponível a partir do PHP 8.0.

**Exemplo:**

php

```php
<?php

$texto = "Aprendendo programação PHP";

if (str_contains($texto, "PHP")) {

    echo "A palavra PHP foi encontrada.";

} else {

    echo "Palavra não encontrada.";

}

?>
```

Resultado:

text

```text
A palavra PHP foi encontrada.
```

### 14\. Função SUBSTR()

A função `substr()` permite extrair uma parte de uma string.

**Sintaxe:**

php

```php
substr($texto, $inicio, $comprimento);
```

**Exemplo:**

php

```php
<?php

$texto = "Programação PHP";

echo substr($texto, 0, 11);

?>
```

Resultado:

text

```text
Programação
```

Podemos utilizar índices negativos para acessar posições a partir do final da string.

**Exemplo:**

php

```php
<?php

$texto = "Programação PHP";

echo substr($texto, -3);

?>
```

Resultado:

text

```text
PHP
```

Para textos UTF-8 com acentos, utilize `mb_substr()`.

### 15\. Função EXPLODE()

A função `explode()` divide uma string em partes e transforma essas partes em um array.

**Exemplo:**

php

```php
<?php

$frutas = "Maçã,Banana,Laranja,Uva";

$arrayFrutas = explode(",", $frutas);

print_r($arrayFrutas);

?>
```

Resultado:

text

```text
Array
(
    [0] => Maçã
    [1] => Banana
    [2] => Laranja
    [3] => Uva
)
```

Podemos acessar cada elemento:

php

```php
<?php

$frutas = "Maçã,Banana,Laranja";

$array = explode(",", $frutas);

echo $array[0];
echo "<br>";

echo $array[1];

?>
```

### 16\. Função IMPLODE()

A função `implode()` realiza o processo inverso do `explode()`.

Ela transforma um array em uma string, utilizando um separador.

**Exemplo:**

php

```php
<?php

$frutas = ["Maçã", "Banana", "Laranja"];

$resultado = implode(", ", $frutas);

echo $resultado;

?>
```

Resultado:

text

```text
Maçã, Banana, Laranja
```

### 17\. Função STR\_REPEAT()

A função `str_repeat()` repete uma string determinada quantidade de vezes.

**Exemplo:**

php

```php
<?php

echo str_repeat("PHP ", 5);

?>
```

Resultado:

text

```text
PHP PHP PHP PHP PHP
```

### 18\. Função STRREV()

A função `strrev()` inverte uma string.

**Exemplo:**

php

```php
<?php

$texto = "PHP";

echo strrev($texto);

?>
```

Resultado:

text

```text
PHP
```

Exemplo com outra palavra:

php

```php
<?php

$texto = "MUNDO";

echo strrev($texto);

?>
```

Resultado:

text

```text
ODNUM
```

Atenção: `strrev()` não trata corretamente todos os caracteres multibyte. Para textos com acentos e emojis, é necessário utilizar uma solução compatível com Unicode.

### 19\. Função STR\_PAD()

A função `str_pad()` completa uma string até atingir determinado comprimento.

Podemos adicionar caracteres no início ou no final.

**Exemplo:**

php

```php
<?php

$numero = "25";

echo str_pad($numero, 5, "0", STR_PAD_LEFT);

?>
```

Resultado:

text

```text
00025
```

Também podemos completar à direita:

php

```php
<?php

$texto = "PHP";

echo str_pad($texto, 8, "*", STR_PAD_RIGHT);

?>
```

Resultado:

text

```text
PHP*****
```

### 20\. Função STR\_WORD\_COUNT()

A função `str_word_count()` permite contar as palavras de uma string.

**Exemplo:**

php

```php
<?php

$texto = "Aprender PHP é muito interessante";

echo str_word_count($texto);

?>
```

Resultado:

text

```text
5
```

A função possui limitações no tratamento de caracteres acentuados. Para textos em português, podemos utilizar expressões regulares com suporte Unicode.

### 21\. Função NL2BR()

A função `nl2br()` transforma quebras de linha em elementos HTML `<br>`.

É útil quando precisamos apresentar textos digitados em várias linhas.

**Exemplo:**

php

```php
<?php

$texto = "Primeira linha\nSegunda linha\nTerceira linha";

echo nl2br($texto);

?>
```

Resultado visual:

text

```text
Primeira linha
Segunda linha
Terceira linha
```

### 22\. Função NUMBER\_FORMAT()

A função `number_format()` permite formatar números, definindo casas decimais e separadores.

É muito utilizada em sistemas financeiros e comerciais.

**Exemplo:**

php

```php
<?php

$valor = 1500.5;

echo number_format($valor, 2, ",", ".");

?>
```

Resultado:

text

```text
1.500,50
```

Outro exemplo:

php

```php
<?php

$preco = 2500;

echo "Preço: R$ " . number_format($preco, 2, ",", ".");

?>
```

Resultado:

text

```text
Preço: R$ 2.500,00
```

### 23\. Função HTMLSPECIALCHARS()

A função `htmlspecialchars()` converte caracteres especiais em entidades HTML.

É muito importante para ajudar a evitar que textos fornecidos por usuários sejam interpretados como código HTML ou JavaScript ao serem exibidos na página.

**Exemplo:**

php

```php
<?php

$texto = "<h1>Olá, mundo!</h1>";

echo htmlspecialchars($texto, ENT_QUOTES, "UTF-8");

?>
```

O navegador apresentará o conteúdo como texto, em vez de interpretar a tag HTML.

**Aplicação em formulários:**

php

```php
<?php

$nome = $_POST["nome"] ?? "";

$nome = htmlspecialchars($nome, ENT_QUOTES, "UTF-8");

echo "Nome: " . $nome;

?>
```

Atenção: a validação e o tratamento dos dados também devem ser realizados de acordo com a finalidade da aplicação. Para consultas SQL, por exemplo, utilize consultas preparadas com PDO ou MySQLi.

### 24\. Funções STRIP\_TAGS()

A função `strip_tags()` remove tags HTML e PHP de uma string.

**Exemplo:**

php

```php
<?php

$texto = "<h1>Aprendendo PHP</h1>";

echo strip_tags($texto);

?>
```

Resultado:

text

```text
Aprendendo PHP
```

Essa função pode ser utilizada para remover marcações HTML, mas não substitui a proteção adequada de saída com `htmlspecialchars()`.

### 25\. Função MD5()

A função `md5()` gera um resumo criptográfico de 128 bits representado por uma sequência hexadecimal.

**Exemplo:**

php

```php
<?php

$texto = "PHP";

echo md5($texto);

?>
```

O resultado será uma sequência hexadecimal de 32 caracteres.

**Atenção:** MD5 não deve ser utilizado para armazenar senhas. Para senhas, utilize `password_hash()` e `password_verify()`.

### 26\. Trabalhando com Senhas em PHP

O PHP oferece funções específicas para armazenar e verificar senhas de maneira segura.

**Utilizando password\_hash():**

php

```php
<?php

$senha = "123456";

$senhaHash = password_hash($senha, PASSWORD_DEFAULT);

echo $senhaHash;

?>
```

A função gera um hash seguro da senha.

**Utilizando password\_verify():**

php

```php
<?php

$senha = "123456";

$senhaHash = password_hash($senha, PASSWORD_DEFAULT);

if (password_verify("123456", $senhaHash)) {

    echo "Senha correta!";

} else {

    echo "Senha incorreta!";

}

?>
```

Em aplicações reais, o hash deve ser armazenado no banco de dados e recuperado durante a autenticação.

### 27\. Exemplo prático: Cadastro e tratamento de nomes

Neste exemplo, utilizaremos várias funções para tratar nomes recebidos de um sistema.

php

```php
<?php

$nome = "   joão da silva   ";

$nome = trim($nome);

$nome = mb_convert_case(
    $nome,
    MB_CASE_TITLE,
    "UTF-8"
);

echo "Nome: " . $nome;

echo "<br>";

echo "Quantidade de caracteres: " .
    mb_strlen($nome, "UTF-8");

?>
```

Resultado:

text

```text
Nome: João Da Silva
Quantidade de caracteres: 13
```

### 28\. Exemplo prático: Sistema de pesquisa de produtos

Vamos desenvolver um exemplo que permite verificar se determinado produto está presente em uma lista.

php

```php
<?php

$produtos = [
    "Notebook",
    "Mouse",
    "Teclado",
    "Monitor",
    "Impressora"
];

$pesquisa = "Mouse";

$encontrado = false;

foreach ($produtos as $produto) {

    if (stripos($produto, $pesquisa) !== false) {

        echo "Produto encontrado: " .
            htmlspecialchars($produto, ENT_QUOTES, "UTF-8");

        $encontrado = true;

    }

}

if (!$encontrado) {

    echo "Nenhum produto encontrado.";

}

?>
```

A função `stripos()` realiza uma pesquisa sem diferenciar letras maiúsculas e minúsculas.

### 29\. Exemplo prático: Manipulação de textos de um formulário

Considere um formulário que recebe nome, e-mail e mensagem.

Arquivo `index.php`:

HTMLQuebrar linhasCopiar códigoVer prévia

```html
<form method="POST" action="processar.php">

    <label>Nome:</label>
    <input type="text" name="nome" required>

    <br><br>

    <label>E-mail:</label>
    <input type="email" name="email" required>

    <br><br>

    <label>Mensagem:</label>
    <textarea name="mensagem" required></textarea>

    <br><br>

    <button type="submit">Enviar</button>

</form>
```

Arquivo `processar.php`:

php

```php
<?php

$nome = trim($_POST["nome"] ?? "");

$email = trim($_POST["email"] ?? "");

$mensagem = trim($_POST["mensagem"] ?? "");

if (
    $nome === "" ||
    $email === "" ||
    $mensagem === ""
) {

    exit("Preencha todos os campos.");

}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

    exit("E-mail inválido.");

}

echo "Nome: " .
    htmlspecialchars($nome, ENT_QUOTES, "UTF-8");

echo "<br>";

echo "E-mail: " .
    htmlspecialchars($email, ENT_QUOTES, "UTF-8");

echo "<br>";

echo "Mensagem:<br>";

echo nl2br(
    htmlspecialchars($mensagem, ENT_QUOTES, "UTF-8")
);

?>
```

Nesse exemplo, utilizamos funções de manipulação de strings, validação e proteção de saída.

### 30\. Principais funções de Strings em PHP

| Função | Finalidade |
| --- | --- |
| strlen() | Conta bytes de uma string |
| mb\_strlen() | Conta caracteres multibyte |
| strtoupper() | Converte para maiúsculas |
| strtolower() | Converte para minúsculas |
| mb\_strtoupper() | Converte para maiúsculas com suporte multibyte |
| mb\_strtolower() | Converte para minúsculas com suporte multibyte |
| ucfirst() | Coloca a primeira letra em maiúscula |
| lcfirst() | Coloca a primeira letra em minúscula |
| ucwords() | Coloca iniciais das palavras em maiúscula |
| trim() | Remove espaços nas extremidades |
| str\_replace() | Substitui partes de uma string |
| strpos() | Localiza texto |
| str\_contains() | Verifica se contém texto |
| substr() | Extrai parte de uma string |
| explode() | Divide uma string em um array |
| implode() | Transforma array em string |
| str\_repeat() | Repete uma string |
| strrev() | Inverte uma string |
| str\_pad() | Completa uma string |
| nl2br() | Converte quebras de linha em `<br>` |
| htmlspecialchars() | Converte caracteres especiais para entidades HTML |
| strip\_tags() | Remove tags HTML e PHP |
| number\_format() | Formata números |
| password\_hash() | Gera hash seguro para senhas |
| password\_verify() | Verifica uma senha |

### 31\. Boas práticas na manipulação de Strings

Ao trabalhar com textos em PHP, recomenda-se:

1. Utilizar UTF-8 para trabalhar corretamente com caracteres acentuados.
2. Utilizar `trim()` para remover espaços desnecessários.
3. Utilizar `mb_strlen()` para contar caracteres multibyte.
4. Utilizar `mb_strtolower()` e `mb_strtoupper()` em textos com acentos.
5. Utilizar `htmlspecialchars()` ao exibir dados fornecidos por usuários em HTML.
6. Validar e-mails com `filter_var()`.
7. Não armazenar senhas utilizando MD5 ou SHA-1.
8. Utilizar `password_hash()` para gerar hashes de senhas.
9. Utilizar consultas preparadas para acessar bancos de dados.
10. Testar as funções com textos vazios, acentos e caracteres especiais.

### 32\. Exercícios práticos

**Exercício 1 – Maiúsculas e minúsculas**

Crie uma variável contendo seu nome e apresente o conteúdo em letras maiúsculas e minúsculas.

**Exercício 2 – Contagem de caracteres**

Crie uma variável com uma frase e utilize `strlen()` e `mb_strlen()` para comparar os resultados.

**Exercício 3 – Concatenação**

Crie duas variáveis, uma contendo seu nome e outra seu sobrenome. Concatene as duas e apresente o nome completo.

**Exercício 4 – Substituição**

Crie uma frase contendo a palavra Java e substitua por PHP utilizando `str_replace()`.

**Exercício 5 – Pesquisa**

Crie uma variável contendo uma frase e verifique se ela possui a palavra programação utilizando `str_contains()`.

**Exercício 6 – Extração**

Crie uma variável contendo seu nome completo e utilize `substr()` ou `mb_substr()` para extrair uma parte do texto.

**Exercício 7 – Explode**

Crie uma variável contendo nomes separados por vírgulas. Utilize `explode()` para transformar os nomes em um array.

**Exercício 8 – Implode**

Crie um array contendo cinco cidades e utilize `implode()` para apresentar todas em uma única string.

**Exercício 9 – Formatação**

Crie uma variável contendo o valor 1250.75 e apresente no formato monetário brasileiro.

**Exercício 10 – Limpeza de texto**

Crie uma variável contendo espaços antes e depois de uma palavra. Utilize `trim()` para remover os espaços.

**Exercício 11 – Segurança**

Crie uma variável contendo uma tag HTML e utilize `htmlspecialchars()` para apresentar o conteúdo como texto.

**Exercício 12 – Sistema de pesquisa**

Crie um array com dez produtos e desenvolva uma pesquisa utilizando `stripos()`.

### 33\. Projeto prático: Sistema de tratamento e análise de textos

Desenvolva um programa em PHP que receba um texto e apresente diferentes informações sobre ele.

**Requisitos:**

1. Criar uma variável contendo um texto.
2. Remover espaços desnecessários utilizando `trim()`.
3. Apresentar o texto em letras maiúsculas.
4. Apresentar o texto em letras minúsculas.
5. Contar os caracteres utilizando `mb_strlen()`.
6. Verificar se existe determinada palavra.
7. Substituir uma palavra por outra.
8. Apresentar o texto original e o texto modificado.

**Exemplo de solução:**

php

```php
<?php

$texto = "   Aprendendo PHP é muito interessante!   ";

$texto = trim($texto);

echo "<h2>Análise de Texto</h2>";

echo "Texto original: " .
    htmlspecialchars($texto, ENT_QUOTES, "UTF-8");

echo "<br><br>";

echo "Maiúsculas: " .
    htmlspecialchars(
        mb_strtoupper($texto, "UTF-8"),
        ENT_QUOTES,
        "UTF-8"
    );

echo "<br><br>";

echo "Minúsculas: " .
    htmlspecialchars(
        mb_strtolower($texto, "UTF-8"),
        ENT_QUOTES,
        "UTF-8"
    );

echo "<br><br>";

echo "Quantidade de caracteres: " .
    mb_strlen($texto, "UTF-8");

echo "<br><br>";

if (str_contains($texto, "PHP")) {

    echo "A palavra PHP foi encontrada!";

}

echo "<br><br>";

$novoTexto = str_replace(
    "PHP",
    "Programação",
    $texto
);

echo "Texto modificado: " .
    htmlspecialchars($novoTexto, ENT_QUOTES, "UTF-8");

?>
```

### 34\. Conclusão

A manipulação de strings é fundamental no desenvolvimento de aplicações utilizando PHP.

Compreender as funções de concatenação, substituição, pesquisa, extração, formatação e conversão de textos permite desenvolver sistemas mais dinâmicos e eficientes.

Esses recursos são utilizados em formulários, cadastros, sistemas de autenticação, pesquisas, relatórios, mensagens e aplicações conectadas a bancos de dados.

O domínio da manipulação de strings também contribui para melhorar a segurança das aplicações, principalmente no tratamento de informações fornecidas pelos usuários.

A prática dos exercícios apresentados ajudará a desenvolver habilidades importantes para trabalhar com textos em projetos reais.

### 35\. Referências bibliográficas e materiais de apoio

- Manual oficial do PHP: [https://www.php.net/manual/pt\_BR/](<https://www.php.net/manual/pt_BR/>)
- Strings: [https://www.php.net/manual/pt\_BR/language.types.string.php](<https://www.php.net/manual/pt_BR/language.types.string.php>)
- Funções de Strings: [https://www.php.net/manual/pt\_BR/ref.strings.php](<https://www.php.net/manual/pt_BR/ref.strings.php>)
- Funções multibyte: [https://www.php.net/manual/pt\_BR/book.mbstring.php](<https://www.php.net/manual/pt_BR/book.mbstring.php>)
- Expressões regulares: [https://www.php.net/manual/pt\_BR/book.pcre.php](<https://www.php.net/manual/pt_BR/book.pcre.php>)
- Segurança de senhas: [https://www.php.net/manual/pt\_BR/book.password.php](<https://www.php.net/manual/pt_BR/book.password.php>)
- Filtragem de dados: [https://www.php.net/manual/pt\_BR/book.filter.php](<https://www.php.net/manual/pt_BR/book.filter.php>)

**Fim da apostila — Manipulação de Strings em PHP.**

## Próxima etapa da aprendizagem

Após estudar Strings, recomendo seguir esta sequência:

1. Formulários HTML com PHP.
2. Validação e tratamento de dados.
3. Métodos GET e POST.
4. Sessões e cookies em PHP.
5. Conexão com banco de dados MySQL usando PDO.
6. Desenvolvimento de sistemas CRUD.

