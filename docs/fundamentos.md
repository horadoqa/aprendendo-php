# FUNDAMENTOS DO PHP

## Introdução à programação com PHP

### 1\. Introdução ao PHP

PHP (PHP: Hypertext Preprocessor) é uma linguagem de programação de código aberto, utilizada principalmente no desenvolvimento de aplicações web.

É uma linguagem executada no servidor, permitindo criar páginas dinâmicas, processar formulários, gerenciar usuários, acessar bancos de dados e desenvolver sistemas completos.

O PHP é bastante utilizado em sites, lojas virtuais, sistemas administrativos e plataformas de gerenciamento de conteúdo, como o WordPress.

### 2\. Características do PHP

Entre as principais características do PHP, destacam-se:

- Linguagem de código aberto e gratuita.
- Fácil integração com HTML.
- Execução no lado do servidor.
- Compatibilidade com diferentes sistemas operacionais.
- Suporte a diversos bancos de dados.
- Grande comunidade de desenvolvedores.
- Utilização em aplicações web de pequeno, médio e grande porte.

### 3\. Como funciona o PHP?

O PHP funciona por meio de um servidor que interpreta os códigos e envia o resultado ao navegador do usuário.

O processo acontece da seguinte maneira:

1. O usuário acessa uma página pelo navegador.
2. O navegador solicita a página ao servidor.
3. O servidor executa o código PHP.
4. O PHP processa as informações e pode consultar um banco de dados.
5. O servidor envia o resultado ao navegador.

O navegador recebe normalmente HTML, CSS e JavaScript, e não o código PHP original.

### 4\. Primeiro programa em PHP

Para escrever um código PHP, utilizamos as tags `<?php` e `?>`.

Exemplo:

php

```php
<?php
echo "Olá, mundo!";
?>
```

Resultado:

Olá, mundo\!

O comando `echo` é utilizado para exibir informações na tela.

### 5\. Variáveis

As variáveis são utilizadas para armazenar informações que podem ser utilizadas durante a execução do programa.

No PHP, toda variável começa com o símbolo `$`.

Exemplo:

php

```php
<?php
$nome = "Maria";
$idade = 25;
$altura = 1.65;

echo $nome;
echo $idade;
echo $altura;
?>
```

Regras importantes:

- O nome da variável começa com `$`.
- Não pode começar com números.
- Não deve conter espaços.
- PHP diferencia letras maiúsculas e minúsculas nos nomes das variáveis.

### 6\. Tipos de dados

O PHP possui diferentes tipos de dados:

**String:** representa textos.

php

```php
$nome = "Carlos";
```

**Integer:** representa números inteiros.

php

```php
$idade = 30;
```

**Float:** representa números decimais.

php

```php
$preco = 49.90;
```

**Boolean:** representa verdadeiro ou falso.

php

```php
$ativo = true;
```

**Array:** armazena vários valores em uma única variável.

php

```php
$frutas = ["Maçã", "Banana", "Uva"];
```

**Null:** representa a ausência de um valor.

php

```php
$telefone = null;
```

### 7\. Operadores em PHP

Os operadores permitem realizar cálculos e comparações.

**Operadores aritméticos:**

| Operador | Função |
| --- | --- |
| + | Adição |
| - | Subtração |
| \* | Multiplicação |
| / | Divisão |
| % | Resto da divisão |
| \*\* | Potenciação |

Exemplo:

php

```php
<?php
$a = 10;
$b = 5;

echo $a + $b;
?>
```

Resultado: 15.

**Operadores de comparação:**

| Operador | Função |
| --- | --- |
| == | Igualdade de valor |
| === | Igualdade de valor e tipo |
| \!= | Diferente |
| \> | Maior que |
| \< | Menor que |
| \>= | Maior ou igual |
| \<= | Menor ou igual |

**Operadores lógicos:**

- `&&`: E lógico.
- `||`: OU lógico.
- `!`: Negação.

### 8\. Estruturas condicionais

As estruturas condicionais permitem executar diferentes comandos dependendo de uma condição.

**Estrutura IF:**

php

```php
<?php
$idade = 20;

if ($idade >= 18) {
    echo "Maior de idade";
}
?>
```

**Estrutura IF e ELSE:**

php

```php
<?php
$idade = 16;

if ($idade >= 18) {
    echo "Maior de idade";
} else {
    echo "Menor de idade";
}
?>
```

**Estrutura ELSEIF:**

php

```php
<?php
$nota = 8;

if ($nota >= 9) {
    echo "Excelente";
} elseif ($nota >= 7) {
    echo "Aprovado";
} else {
    echo "Reprovado";
}
?>
```

### 9\. Estruturas de repetição

As estruturas de repetição permitem executar um conjunto de comandos várias vezes.

**WHILE:**

php

```php
<?php
$contador = 1;

while ($contador <= 5) {
    echo $contador;
    $contador++;
}
?>
```

**FOR:**

php

```php
<?php
for ($i = 1; $i <= 5; $i++) {
    echo $i;
}
?>
```

**FOREACH:**

É utilizado principalmente para percorrer arrays.

php

```php
<?php
$nomes = ["Ana", "Carlos", "Pedro"];

foreach ($nomes as $nome) {
    echo $nome . "<br>";
}
?>
```

### 10\. Funções

As funções são blocos de código que executam tarefas específicas e podem ser reutilizados.

Exemplo:

php

```php
<?php
function saudacao() {
    echo "Bem-vindo ao PHP!";
}

saudacao();
?>
```

As funções também podem receber parâmetros e retornar valores.

php

```php
<?php
function somar($a, $b) {
    return $a + $b;
}

$resultado = somar(10, 20);

echo $resultado;
?>
```

Resultado: 30.

### 11\. Arrays

Arrays permitem armazenar vários valores em uma única variável.

**Array indexado:**

php

```php
<?php
$cores = ["Azul", "Verde", "Vermelho"];

echo $cores[0];
?>
```

Resultado: Azul.

**Array associativo:**

php

```php
<?php
$aluno = [
    "nome" => "João",
    "idade" => 22,
    "curso" => "Informática"
];

echo $aluno["nome"];
?>
```

Resultado: João.

### 12\. Integração entre PHP e HTML

O PHP pode ser utilizado junto com HTML para criar páginas dinâmicas.

Exemplo:

php

```php
<!DOCTYPE html>
<html>
<head>
    <title>Meu primeiro site</title>
</head>
<body>

    <h1>
        <?php
        echo "Olá! Bem-vindo ao meu site.";
        ?>
    </h1>

</body>
</html>
```

O HTML organiza o conteúdo da página, enquanto o PHP permite gerar informações dinamicamente.

### 13\. Formulários em PHP

Os formulários permitem receber informações dos usuários.

Exemplo de formulário HTML:

HTMLQuebrar linhasCopiar códigoVer prévia

```html
<form method="POST" action="receber.php">
    <label>Nome:</label>
    <input type="text" name="nome">

    <button type="submit">Enviar</button>
</form>
```

Arquivo `receber.php`:

php

```php
<?php
$nome = $_POST["nome"] ?? "";

echo "Olá, " . htmlspecialchars($nome, ENT_QUOTES, "UTF-8");
?>
```

O método POST envia os dados do formulário ao servidor.

### 14\. Banco de dados MySQL

O PHP pode se conectar ao MySQL para armazenar, consultar, atualizar e excluir informações.

Uma das formas recomendadas de conexão é utilizando PDO.

Exemplo:

php

```php
<?php

$pdo = new PDO(
    "mysql:host=localhost;dbname=escola;charset=utf8mb4",
    "usuario",
    "senha"
);

echo "Conexão realizada com sucesso!";
?>
```

Em aplicações reais, as credenciais devem ser protegidas e armazenadas fora do código público.

### 15\. Segurança no PHP

A segurança é fundamental durante o desenvolvimento de aplicações.

Algumas boas práticas são:

- Validar os dados recebidos dos usuários.
- Utilizar `htmlspecialchars()` para evitar a interpretação indevida de conteúdo HTML.
- Utilizar consultas preparadas com PDO para evitar SQL Injection.
- Armazenar senhas utilizando `password_hash()`.
- Verificar senhas com `password_verify()`.
- Proteger sessões e informações confidenciais.
- Manter o PHP e suas bibliotecas atualizados.

Exemplo de proteção de senha:

php

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
?>
```

### 16\. Exercícios práticos

Para fixar os conhecimentos, desenvolva os seguintes exercícios:

**Exercício 1 – Apresentação**

Crie um programa que armazene seu nome, idade e cidade em variáveis e exiba essas informações.

**Exercício 2 – Calculadora**

Crie um programa que receba dois números e realize as operações de adição, subtração, multiplicação e divisão.

**Exercício 3 – Verificação de idade**

Crie um programa que verifique se uma pessoa é maior ou menor de idade.

**Exercício 4 – Tabuada**

Utilize uma estrutura de repetição para exibir a tabuada de um número.

**Exercício 5 – Cadastro de alunos**

Crie um formulário HTML para receber nome, idade e curso de um aluno. Utilize PHP para processar e apresentar as informações.

**Exercício 6 – Banco de dados**

Desenvolva uma conexão com MySQL utilizando PDO e crie uma tabela para armazenar os dados dos alunos.

### 17\. Conclusão

O PHP é uma linguagem importante para o desenvolvimento web e oferece recursos para construir aplicações dinâmicas, sistemas administrativos, plataformas de cadastro e integração com bancos de dados.

Dominar seus fundamentos, como variáveis, tipos de dados, operadores, condicionais, repetições, funções e arrays, é essencial para avançar no desenvolvimento de aplicações mais complexas.

Com prática constante e desenvolvimento de pequenos projetos, o estudante poderá evoluir para conceitos mais avançados, como orientação a objetos, programação segura, APIs e frameworks como Laravel.

### 18\. Referências para estudo

- Documentação oficial do PHP: [https://www.php.net/manual/pt\_BR/](<https://www.php.net/manual/pt_BR/>)
- PHP: [https://www.php.net/](<https://www.php.net/>)
- MySQL: [https://dev.mysql.com/doc/](<https://dev.mysql.com/doc/>)
- PDO: [https://www.php.net/manual/pt\_BR/book.pdo.php](<https://www.php.net/manual/pt_BR/book.pdo.php>)
- Laravel: [https://laravel.com/docs](<https://laravel.com/docs>)

