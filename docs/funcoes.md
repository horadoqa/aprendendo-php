# FUNÇÕES EM PHP

## Conceitos, declaração, parâmetros, retornos e aplicações práticas

### 1\. Introdução às funções em PHP

As funções são blocos de código desenvolvidos para executar tarefas específicas. Elas permitem organizar, reutilizar e simplificar programas.

Em vez de escrever o mesmo código várias vezes, podemos criar uma função e utilizá-la sempre que necessário.

As funções são muito importantes no desenvolvimento de sistemas, pois facilitam a manutenção, a organização e a reutilização do código.

Exemplos de utilização:

- Calcular médias escolares.
- Realizar operações matemáticas.
- Validar dados de usuários.
- Calcular descontos.
- Processar formulários.
- Consultar informações.
- Organizar sistemas administrativos.

### 2\. Como criar uma função em PHP?

Para declarar uma função em PHP, utilizamos a palavra-chave `function`, seguida do nome da função e dos parênteses.

**Sintaxe:**

php

```php
function nomeDaFuncao() {
    // Código que será executado
}
```

**Exemplo:**

php

```php
<?php

function saudacao() {
    echo "Olá! Seja bem-vindo ao PHP.";
}

saudacao();

?>
```

Resultado:

Olá\! Seja bem-vindo ao PHP.

**Explicação:**

1. A palavra `function` declara uma função.
2. `saudacao` é o nome da função.
3. As chaves delimitam o bloco de código.
4. `saudacao()` realiza a chamada da função.

Uma função declarada não executa automaticamente seu conteúdo. É necessário chamá-la, salvo situações especiais, como funções utilizadas em callbacks.

### 3\. Regras para nomear funções

Ao criar funções em PHP, é importante seguir algumas recomendações:

- Utilizar nomes que representem a finalidade da função.
- Não iniciar o nome com números.
- Não utilizar espaços.
- Evitar nomes iguais aos de funções existentes.
- Preferir nomes claros e objetivos.

Exemplos:

php

```php
function calcularMedia() {
    // Código
}

function cadastrarUsuario() {
    // Código
}

function mostrarMensagem() {
    // Código
}
```

### 4\. Funções com parâmetros

Os parâmetros permitem enviar informações para dentro de uma função.

Dessa forma, podemos utilizar a mesma função com diferentes valores.

**Exemplo:**

php

```php
<?php

function saudacao($nome) {
    echo "Olá, $nome!";
}

saudacao("Maria");
echo "<br>";
saudacao("João");

?>
```

Resultado:

text

```text
Olá, Maria!
Olá, João!
```

Nesse exemplo, `$nome` é um parâmetro que recebe diferentes valores durante as chamadas da função.

### 5\. Funções com múltiplos parâmetros

Uma função pode receber vários parâmetros.

**Exemplo:**

php

```php
<?php

function apresentarAluno($nome, $idade, $curso) {

    echo "Nome: $nome <br>";
    echo "Idade: $idade <br>";
    echo "Curso: $curso <br>";

}

apresentarAluno("Carlos", 20, "Informática");

?>
```

Resultado:

text

```text
Nome: Carlos
Idade: 20
Curso: Informática
```

Os argumentos são informados na mesma ordem dos parâmetros declarados.

### 6\. Funções com retorno de valores (RETURN)

O comando `return` permite que uma função devolva um resultado para o local onde foi chamada.

Isso possibilita armazenar o resultado em uma variável ou utilizá-lo em outras operações.

**Exemplo:**

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

Resultado:

30.

**Explicação:**

- A função recebe dois parâmetros.
- Realiza a adição.
- O RETURN devolve o resultado.
- A variável `$resultado` recebe o valor retornado.

### 7\. Diferença entre ECHO e RETURN

É importante compreender a diferença entre esses dois comandos.

| ECHO | RETURN |
| --- | --- |
| Exibe informações na tela | Devolve um valor |
| Utilizado para apresentar resultados | Utilizado para fornecer resultados ao código que chamou a função |
| Não retorna o valor exibido | Permite armazenar o resultado em uma variável |

**Exemplo utilizando ECHO:**

php

```php
<?php

function mostrarMensagem() {
    echo "Olá, mundo!";
}

mostrarMensagem();

?>
```

**Exemplo utilizando RETURN:**

php

```php
<?php

function obterMensagem() {
    return "Olá, mundo!";
}

$mensagem = obterMensagem();

echo $mensagem;

?>
```

### 8\. Funções com parâmetros padrão

O PHP permite definir valores padrão para os parâmetros.

Caso nenhum argumento seja informado, a função utilizará o valor definido.

**Exemplo:**

php

```php
<?php

function saudacao($nome = "Visitante") {

    echo "Olá, $nome!";

}

saudacao();
echo "<br>";
saudacao("Ana");

?>
```

Resultado:

text

```text
Olá, Visitante!
Olá, Ana!
```

### 9\. Funções com tipos de dados definidos

O PHP permite definir os tipos esperados para os parâmetros e também o tipo de valor retornado.

Esse recurso ajuda a tornar o código mais organizado e previsível.

**Exemplo:**

php

```php
<?php

function somar(int $a, int $b): int {

    return $a + $b;

}

echo somar(10, 20);

?>
```

Nesse exemplo:

- `int $a`: espera um número inteiro.
- `int $b`: espera outro número inteiro.
- `: int`: indica que a função deve retornar um inteiro.

Também podemos utilizar outros tipos, como `string`, `float`, `bool` e `array`.

### 10\. Funções com parâmetros variáveis

Em PHP, podemos criar funções que recebem uma quantidade variável de argumentos utilizando `...`.

**Exemplo:**

php

```php
<?php

function somarValores(...$numeros) {

    $soma = 0;

    foreach ($numeros as $numero) {
        $soma += $numero;
    }

    return $soma;

}

echo somarValores(10, 20, 30);

?>
```

Resultado:

60.

O parâmetro `...$numeros` reúne os argumentos recebidos em um array.

### 11\. Funções anônimas

As funções anônimas são funções que não possuem um nome declarado.

Podem ser armazenadas em variáveis e utilizadas em diferentes situações.

**Exemplo:**

php

```php
<?php

$saudacao = function($nome) {

    return "Olá, $nome!";

};

echo $saudacao("Carlos");

?>
```

Resultado:

Olá, Carlos\!

### 12\. Funções arrow (funções de seta)

As funções arrow foram introduzidas no PHP 7.4.

Elas permitem criar funções anônimas de maneira mais resumida.

**Exemplo:**

php

```php
<?php

$dobro = fn($numero) => $numero * 2;

echo $dobro(10);

?>
```

Resultado:

20.

São especialmente úteis para expressões simples.

### 13\. Funções recursivas

Uma função recursiva é aquela que chama a si própria para resolver um problema.

É importante estabelecer uma condição de parada para evitar chamadas infinitas.

**Exemplo: cálculo de fatorial**

php

```php
<?php

function fatorial($numero) {

    if ($numero <= 1) {
        return 1;
    }

    return $numero * fatorial($numero - 1);

}

echo fatorial(5);

?>
```

Resultado:

120.

Explicação:

5 × 4 × 3 × 2 × 1 = 120.

### 14\. Escopo das variáveis dentro das funções

O escopo determina onde uma variável pode ser acessada.

**Variáveis locais:**

São declaradas dentro de uma função e normalmente só podem ser utilizadas dentro dela.

php

```php
<?php

function exemplo() {

    $mensagem = "Variável local";

    echo $mensagem;

}

exemplo();

?>
```

**Variáveis globais:**

São declaradas fora de uma função.

Para utilizá-las dentro de uma função, podemos utilizar `global`.

php

```php
<?php

$nome = "Maria";

function mostrarNome() {

    global $nome;

    echo $nome;

}

mostrarNome();

?>
```

Também podemos acessar variáveis globais utilizando `$GLOBALS`.

**Variáveis estáticas:**

Uma variável declarada com `static` dentro de uma função mantém seu valor entre chamadas da função.

php

```php
<?php

function contador() {

    static $numero = 0;

    $numero++;

    echo $numero . "<br>";

}

contador();
contador();
contador();

?>
```

Resultado:

text

```text
1
2
3
```

### 15\. Funções internas do PHP

O PHP possui diversas funções prontas que podem ser utilizadas nos programas.

Alguns exemplos:

| Função | Finalidade |
| --- | --- |
| strlen() | Retorna o tamanho de uma string em bytes |
| strtoupper() | Converte texto para maiúsculas |
| strtolower() | Converte texto para minúsculas |
| count() | Conta elementos de um array |
| date() | Formata uma data |
| round() | Arredonda um número |
| number\_format() | Formata números |
| isset() | Verifica se uma variável existe e não é null |
| empty() | Verifica se uma variável está vazia |
| trim() | Remove espaços no início e no final de uma string |

**Exemplo:**

php

```php
<?php

$nome = "maria";

echo strtoupper($nome);

?>
```

Resultado:

MARIA.

### 16\. Organizando funções em arquivos separados

Em sistemas maiores, é recomendado separar as funções em arquivos específicos.

Isso facilita a manutenção e a organização do projeto.

Arquivo `funcoes.php`:

php

```php
<?php

function somar($a, $b) {
    return $a + $b;
}

function subtrair($a, $b) {
    return $a - $b;
}

?>
```

Arquivo `index.php`:

php

```php
<?php

require_once "funcoes.php";

echo somar(10, 5);

echo "<br>";

echo subtrair(10, 5);

?>
```

O comando `require_once` inclui o arquivo e evita que ele seja incluído novamente caso já tenha sido carregado.

### 17\. Exemplo prático: Calculadora utilizando funções

Vamos desenvolver uma calculadora utilizando funções para realizar as operações matemáticas.

php

```php
<?php

function somar($a, $b) {
    return $a + $b;
}

function subtrair($a, $b) {
    return $a - $b;
}

function multiplicar($a, $b) {
    return $a * $b;
}

function dividir($a, $b) {

    if ($b == 0) {
        return "Erro: divisão por zero.";
    }

    return $a / $b;
}

$numero1 = 20;
$numero2 = 5;

echo "Soma: " . somar($numero1, $numero2) . "<br>";
echo "Subtração: " . subtrair($numero1, $numero2) . "<br>";
echo "Multiplicação: " . multiplicar($numero1, $numero2) . "<br>";
echo "Divisão: " . dividir($numero1, $numero2);

?>
```

### 18\. Exemplo prático: Sistema de aprovação escolar

Neste exemplo, utilizaremos funções para calcular a média e verificar a situação de um aluno.

php

```php
<?php

function calcularMedia($nota1, $nota2, $nota3) {

    return ($nota1 + $nota2 + $nota3) / 3;

}

function verificarSituacao($media) {

    if ($media >= 7) {
        return "Aprovado";
    } elseif ($media >= 5) {
        return "Recuperação";
    } else {
        return "Reprovado";
    }

}

$nome = "Carlos";

$media = calcularMedia(8, 7, 9);

$situacao = verificarSituacao($media);

echo "Aluno: $nome <br>";
echo "Média: " . number_format($media, 2, ",", ".") . "<br>";
echo "Situação: $situacao";

?>
```

### 19\. Boas práticas na criação de funções

Para desenvolver programas organizados e profissionais, recomenda-se:

1. Criar funções com nomes descritivos.
2. Evitar funções muito grandes.
3. Utilizar parâmetros para receber informações.
4. Utilizar RETURN quando precisar devolver resultados.
5. Evitar depender excessivamente de variáveis globais.
6. Definir tipos de parâmetros e retornos quando apropriado.
7. Evitar repetir códigos desnecessariamente.
8. Documentar funções mais complexas.
9. Criar funções com responsabilidades específicas.
10. Testar as funções com diferentes valores.

### 20\. Exercícios práticos

**Exercício 1 – Função de saudação**

Crie uma função chamada `saudacao()` que apresente uma mensagem de boas-vindas.

**Exercício 2 – Função de soma**

Crie uma função que receba dois números e retorne a soma.

**Exercício 3 – Função de multiplicação**

Crie uma função que receba dois números e retorne a multiplicação.

**Exercício 4 – Função de média**

Crie uma função que receba três notas e calcule a média do aluno.

**Exercício 5 – Função de maioridade**

Crie uma função que receba a idade de uma pessoa e retorne se ela é maior ou menor de idade.

**Exercício 6 – Função com parâmetro padrão**

Crie uma função que receba um nome. Caso nenhum nome seja informado, utilize "Visitante".

**Exercício 7 – Função de desconto**

Crie uma função que receba o preço de um produto e o percentual de desconto. Retorne o preço final.

**Exercício 8 – Função de conversão**

Crie uma função que receba uma temperatura em Celsius e converta para Fahrenheit.

Fórmula:

F = (C × 9/5) + 32

**Exercício 9 – Função recursiva**

Crie uma função recursiva para calcular o fatorial de um número inteiro não negativo.

**Exercício 10 – Funções e arrays**

Crie uma função que receba um array de números e retorne a soma de todos os elementos.

### 21\. Projeto prático: Sistema de gerenciamento escolar com funções

Desenvolva um programa em PHP para gerenciar as notas de estudantes utilizando funções.

**Requisitos:**

1. Criar uma função para cadastrar ou organizar os dados dos alunos.
2. Criar uma função para calcular a média.
3. Criar uma função para verificar a situação do aluno.
4. Criar uma função para apresentar os dados.
5. Trabalhar com arrays para armazenar as informações.
6. Apresentar o resultado de todos os alunos.

**Exemplo de solução:**

php

```php
<?php

function calcularMedia($notas) {

    return array_sum($notas) / count($notas);

}

function verificarSituacao($media) {

    if ($media >= 7) {
        return "Aprovado";
    } elseif ($media >= 5) {
        return "Recuperação";
    }

    return "Reprovado";

}

function apresentarAluno($nome, $notas) {

    $media = calcularMedia($notas);

    $situacao = verificarSituacao($media);

    echo "Aluno: $nome <br>";

    echo "Notas: " . implode(", ", $notas) . "<br>";

    echo "Média: " . number_format($media, 2, ",", ".") . "<br>";

    echo "Situação: $situacao <hr>";

}

$alunos = [

    "Ana" => [8, 7, 9],

    "Carlos" => [6, 5, 7],

    "Mariana" => [9, 8, 10]

];

foreach ($alunos as $nome => $notas) {

    apresentarAluno($nome, $notas);

}

?>
```

### 22\. Conclusão

As funções são fundamentais para desenvolver aplicações organizadas, reutilizáveis e fáceis de manter.

Compreender a declaração de funções, parâmetros, retornos, funções anônimas, funções recursivas e escopo de variáveis é essencial para avançar no desenvolvimento com PHP.

Ao dominar esses conceitos, o estudante estará preparado para criar sistemas mais completos, dividir projetos em módulos e desenvolver aplicações profissionais.

A prática dos exercícios propostos ajudará a desenvolver o raciocínio lógico e a capacidade de estruturar programas de maneira eficiente.

### 23\. Referências bibliográficas e materiais de apoio

- Manual oficial do PHP: [https://www.php.net/manual/pt\_BR/](<https://www.php.net/manual/pt_BR/>)
- Funções definidas pelo usuário: [https://www.php.net/manual/pt\_BR/functions.user-defined.php](<https://www.php.net/manual/pt_BR/functions.user-defined.php>)
- Argumentos de funções: [https://www.php.net/manual/pt\_BR/functions.arguments.php](<https://www.php.net/manual/pt_BR/functions.arguments.php>)
- Valores de retorno: [https://www.php.net/manual/pt\_BR/functions.returning-values.php](<https://www.php.net/manual/pt_BR/functions.returning-values.php>)
- Funções anônimas: [https://www.php.net/manual/pt\_BR/functions.anonymous.php](<https://www.php.net/manual/pt_BR/functions.anonymous.php>)
- Funções arrow: [https://www.php.net/manual/pt\_BR/functions.arrow.php](<https://www.php.net/manual/pt_BR/functions.arrow.php>)
- Recursão: [https://www.php.net/manual/pt\_BR/functions.user-defined.php](<https://www.php.net/manual/pt_BR/functions.user-defined.php>)

**Fim da apostila — Funções em PHP.**

## Próxima etapa da aprendizagem

Depois de estudar funções, recomendo seguir esta sequência:

1. Arrays em PHP.
2. Manipulação de strings.
3. Formulários HTML com PHP.
4. Conexão com banco de dados MySQL.
5. Programação orientada a objetos (POO).
