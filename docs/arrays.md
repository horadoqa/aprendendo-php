# ARRAYS EM PHP

## Conceitos, tipos, criação, manipulação e aplicações práticas

### 1\. Introdução aos Arrays

Um array é uma estrutura de dados que permite armazenar vários valores em uma única variável.

Em vez de criar diversas variáveis para guardar informações, podemos utilizar um array para organizar todos os dados em uma única estrutura.

Por exemplo, imagine que precisamos armazenar os nomes de cinco alunos.

Sem utilizar arrays:

php

```php
<?php

$aluno1 = "Ana";
$aluno2 = "Carlos";
$aluno3 = "Pedro";
$aluno4 = "Maria";
$aluno5 = "João";

?>
```

Utilizando arrays:

php

```php
<?php

$alunos = [
    "Ana",
    "Carlos",
    "Pedro",
    "Maria",
    "João"
];

?>
```

O segundo exemplo é mais organizado e facilita a manipulação das informações.

### 2\. Criando Arrays em PHP

Existem diferentes maneiras de criar arrays em PHP.

A forma mais utilizada atualmente é utilizando colchetes `[]`.

**Exemplo:**

php

```php
<?php

$frutas = ["Maçã", "Banana", "Laranja"];

print_r($frutas);

?>
```

Também podemos utilizar a função `array()`:

php

```php
<?php

$frutas = array("Maçã", "Banana", "Laranja");

print_r($frutas);

?>
```

As duas formas criam um array.

### 3\. Tipos de Arrays em PHP

O PHP permite trabalhar principalmente com três formas de organização de arrays:

1. Arrays indexados.
2. Arrays associativos.
3. Arrays multidimensionais.

Cada tipo possui características específicas.

### 4\. Arrays indexados

Os arrays indexados utilizam números inteiros como índices para identificar os elementos.

Normalmente, os índices começam em zero.

**Exemplo:**

php

```php
<?php

$frutas = [
    "Maçã",
    "Banana",
    "Laranja",
    "Uva"
];

echo $frutas[0];
echo "<br>";
echo $frutas[1];
echo "<br>";
echo $frutas[2];

?>
```

Resultado:

text

```text
Maçã
Banana
Laranja
```

Observe que:

- Índice 0: Maçã.
- Índice 1: Banana.
- Índice 2: Laranja.
- Índice 3: Uva.

**Adicionando elementos:**

php

```php
<?php

$frutas = ["Maçã", "Banana"];

$frutas[] = "Laranja";
$frutas[] = "Uva";

print_r($frutas);

?>
```

Os novos elementos serão adicionados ao final do array.

### 5\. Arrays associativos

Os arrays associativos utilizam chaves personalizadas para identificar os valores.

São muito utilizados para armazenar informações organizadas de pessoas, produtos, alunos e usuários.

**Exemplo:**

php

```php
<?php

$aluno = [
    "nome" => "Carlos",
    "idade" => 20,
    "curso" => "Informática",
    "nota" => 8.5
];

echo $aluno["nome"];
echo "<br>";
echo $aluno["idade"];
echo "<br>";
echo $aluno["curso"];
echo "<br>";
echo $aluno["nota"];

?>
```

Resultado:

text

```text
Carlos
20
Informática
8.5
```

**Explicação:**

- `nome` é uma chave.
- `Carlos` é o valor associado à chave.
- `idade` é uma chave.
- `20` é o valor associado à chave.

**Adicionando elementos:**

php

```php
<?php

$aluno = [
    "nome" => "Maria",
    "idade" => 22
];

$aluno["curso"] = "Programação";

print_r($aluno);

?>
```

### 6\. Arrays multidimensionais

Os arrays multidimensionais são estruturas que armazenam outros arrays dentro de um array principal.

São úteis para organizar informações relacionadas.

**Exemplo: cadastro de alunos**

php

```php
<?php

$alunos = [

    [
        "nome" => "Ana",
        "idade" => 20,
        "nota" => 8
    ],

    [
        "nome" => "Carlos",
        "idade" => 22,
        "nota" => 7
    ],

    [
        "nome" => "Pedro",
        "idade" => 19,
        "nota" => 9
    ]

];

echo $alunos[0]["nome"];
echo "<br>";

echo $alunos[1]["nome"];
echo "<br>";

echo $alunos[2]["nome"];

?>
```

Resultado:

text

```text
Ana
Carlos
Pedro
```

**Explicação:**

- `$alunos[0]` representa o primeiro aluno.
- `$alunos[1]` representa o segundo aluno.
- `$alunos[2]` representa o terceiro aluno.
- `["nome"]` acessa o nome de cada aluno.

### 7\. Percorrendo Arrays com FOREACH

O FOREACH é uma das estruturas mais utilizadas para percorrer arrays.

Ele permite acessar todos os elementos sem precisar controlar manualmente os índices.

**Exemplo:**

php

```php
<?php

$nomes = ["Ana", "Carlos", "Pedro", "Maria"];

foreach ($nomes as $nome) {

    echo $nome . "<br>";

}

?>
```

Resultado:

text

```text
Ana
Carlos
Pedro
Maria
```

**Percorrendo arrays associativos:**

php

```php
<?php

$produto = [
    "nome" => "Notebook",
    "preco" => 3500,
    "estoque" => 10
];

foreach ($produto as $chave => $valor) {

    echo "$chave: $valor <br>";

}

?>
```

O FOREACH permite acessar simultaneamente as chaves e os valores.

### 8\. Principais funções para manipular Arrays

O PHP possui diversas funções prontas para trabalhar com arrays.

| Função | Finalidade |
| --- | --- |
| count() | Conta os elementos |
| array\_push() | Adiciona elementos ao final |
| array\_pop() | Remove o último elemento |
| array\_shift() | Remove o primeiro elemento |
| array\_unshift() | Adiciona elementos no início |
| sort() | Ordena em ordem crescente |
| rsort() | Ordena em ordem decrescente |
| asort() | Ordena pelos valores preservando as chaves |
| ksort() | Ordena pelas chaves |
| in\_array() | Verifica se um valor existe |
| array\_search() | Pesquisa um valor |
| array\_merge() | Combina arrays |
| array\_sum() | Soma os valores |
| array\_reverse() | Inverte a ordem |
| array\_unique() | Remove valores duplicados |

### 9\. Adicionando elementos em Arrays

Podemos adicionar novos elementos utilizando diferentes métodos.

**Utilizando array\_push():**

php

```php
<?php

$frutas = ["Maçã", "Banana"];

array_push($frutas, "Laranja");

print_r($frutas);

?>
```

**Utilizando colchetes:**

php

```php
<?php

$frutas = ["Maçã", "Banana"];

$frutas[] = "Uva";

print_r($frutas);

?>
```

### 10\. Removendo elementos de Arrays

Podemos remover elementos utilizando funções específicas.

**Utilizando array\_pop():**

Remove o último elemento.

php

```php
<?php

$frutas = ["Maçã", "Banana", "Uva"];

array_pop($frutas);

print_r($frutas);

?>
```

**Utilizando array\_shift():**

Remove o primeiro elemento.

php

```php
<?php

$frutas = ["Maçã", "Banana", "Uva"];

array_shift($frutas);

print_r($frutas);

?>
```

**Utilizando unset():**

Remove um elemento específico.

php

```php
<?php

$frutas = ["Maçã", "Banana", "Uva"];

unset($frutas[1]);

print_r($frutas);

?>
```

O `unset()` remove o elemento, mas não reorganiza automaticamente os índices.

### 11\. Ordenando Arrays

O PHP possui funções que permitem organizar os elementos de um array.

**Ordem crescente:**

php

```php
<?php

$numeros = [50, 10, 40, 20, 30];

sort($numeros);

print_r($numeros);

?>
```

Resultado:

text

```text
10, 20, 30, 40, 50
```

**Ordem decrescente:**

php

```php
<?php

$numeros = [50, 10, 40, 20, 30];

rsort($numeros);

print_r($numeros);

?>
```

Resultado:

text

```text
50, 40, 30, 20, 10
```

**Ordenando arrays associativos:**

php

```php
<?php

$alunos = [
    "Carlos" => 8,
    "Ana" => 9,
    "Pedro" => 7
];

asort($alunos);

print_r($alunos);

?>
```

O `asort()` organiza pelos valores e preserva as chaves.

### 12\. Pesquisando elementos em Arrays

Podemos verificar se determinado valor existe em um array.

**Utilizando in\_array():**

php

```php
<?php

$frutas = ["Maçã", "Banana", "Uva"];

if (in_array("Banana", $frutas, true)) {

    echo "Fruta encontrada!";

} else {

    echo "Fruta não encontrada!";

}

?>
```

O terceiro argumento `true` faz uma comparação estrita, verificando também o tipo do valor.

**Utilizando array\_search():**

php

```php
<?php

$frutas = ["Maçã", "Banana", "Uva"];

$posicao = array_search("Banana", $frutas, true);

if ($posicao !== false) {

    echo "Elemento encontrado no índice: $posicao";

}

?>
```

### 13\. Contando elementos de um Array

A função `count()` permite descobrir quantos elementos existem em um array.

**Exemplo:**

php

```php
<?php

$alunos = ["Ana", "Carlos", "Pedro", "Maria"];

$total = count($alunos);

echo "Total de alunos: $total";

?>
```

Resultado:

Total de alunos: 4.

### 14\. Somando valores de um Array

A função `array_sum()` permite somar todos os valores numéricos de um array.

**Exemplo:**

php

```php
<?php

$notas = [8, 7, 9, 10];

$soma = array_sum($notas);

echo "Soma das notas: $soma";

?>
```

Resultado:

Soma das notas: 34.

Também podemos calcular a média:

php

```php
<?php

$notas = [8, 7, 9, 10];

$media = array_sum($notas) / count($notas);

echo "Média: " . number_format($media, 2, ",", ".");

?>
```

Resultado:

Média: 8,50.

### 15\. Unindo Arrays

A função `array_merge()` permite combinar dois ou mais arrays.

**Exemplo:**

php

```php
<?php

$frutas1 = ["Maçã", "Banana"];

$frutas2 = ["Uva", "Laranja"];

$resultado = array_merge($frutas1, $frutas2);

print_r($resultado);

?>
```

Resultado:

text

```text
Maçã, Banana, Uva, Laranja
```

### 16\. Trabalhando com Arrays e IF

Podemos utilizar estruturas condicionais para verificar informações armazenadas em arrays.

**Exemplo:**

php

```php
<?php

$aluno = [
    "nome" => "Carlos",
    "nota" => 8
];

if ($aluno["nota"] >= 7) {

    echo $aluno["nome"] . " foi aprovado!";

} else {

    echo $aluno["nome"] . " foi reprovado!";

}

?>
```

Essa combinação é muito utilizada em sistemas escolares e administrativos.

### 17\. Arrays e formulários HTML

Os arrays também podem ser utilizados para receber várias informações de formulários.

Exemplo de formulário:

HTMLQuebrar linhasCopiar códigoVer prévia

```html
<form method="POST" action="receber.php">

    <label>Nome:</label>
    <input type="text" name="nome">

    <label>Interesses:</label>

    <input type="checkbox" name="interesses[]" value="PHP">
    PHP

    <input type="checkbox" name="interesses[]" value="HTML">
    HTML

    <input type="checkbox" name="interesses[]" value="CSS">
    CSS

    <button type="submit">Enviar</button>

</form>
```

Arquivo `receber.php`:

php

```php
<?php

$nome = $_POST["nome"] ?? "";

$interesses = $_POST["interesses"] ?? [];

if (!is_array($interesses)) {
    $interesses = [];
}

echo "Nome: " .
    htmlspecialchars($nome, ENT_QUOTES, "UTF-8");

echo "<br>Interesses:<br>";

foreach ($interesses as $interesse) {

    echo htmlspecialchars($interesse, ENT_QUOTES, "UTF-8");
    echo "<br>";

}

?>
```

O uso de `interesses[]` permite enviar vários valores com o mesmo nome de campo.

### 18\. Exemplo prático: Sistema de cadastro de produtos

Neste exemplo, utilizaremos arrays associativos e FOREACH para organizar produtos.

php

```php
<?php

$produtos = [

    [
        "nome" => "Notebook",
        "preco" => 3500,
        "estoque" => 5
    ],

    [
        "nome" => "Mouse",
        "preco" => 80,
        "estoque" => 20
    ],

    [
        "nome" => "Teclado",
        "preco" => 150,
        "estoque" => 10
    ]

];

foreach ($produtos as $produto) {

    echo "Produto: " . $produto["nome"] . "<br>";

    echo "Preço: R$ " .
        number_format($produto["preco"], 2, ",", ".") . "<br>";

    echo "Estoque: " . $produto["estoque"] . "<br>";

    echo "<hr>";

}

?>
```

O programa percorre os produtos e apresenta suas informações.

### 19\. Exemplo prático: Sistema de gerenciamento escolar

Vamos desenvolver um programa que armazena alunos, notas e calcula automaticamente a média de cada estudante.

php

```php
<?php

$alunos = [

    "Ana" => [8, 9, 10],

    "Carlos" => [6, 7, 5],

    "Pedro" => [9, 8, 9],

    "Maria" => [5, 6, 4]

];

foreach ($alunos as $nome => $notas) {

    $media = array_sum($notas) / count($notas);

    echo "Aluno: $nome <br>";

    echo "Notas: " . implode(", ", $notas) . "<br>";

    echo "Média: " .
        number_format($media, 2, ",", ".") . "<br>";

    if ($media >= 7) {

        echo "Situação: Aprovado";

    } else {

        echo "Situação: Reprovado";

    }

    echo "<hr>";

}

?>
```

### 20\. Boas práticas na utilização de Arrays

Para desenvolver códigos organizados e eficientes, recomenda-se:

1. Utilizar nomes descritivos para os arrays.
2. Escolher o tipo de array adequado.
3. Utilizar FOREACH para percorrer coleções.
4. Verificar a existência de chaves antes de acessá-las.
5. Utilizar `count()` para contar elementos.
6. Evitar misturar informações sem relação.
7. Organizar arrays multidimensionais de maneira clara.
8. Validar dados recebidos de formulários.
9. Utilizar comparações estritas quando apropriado.
10. Consultar a documentação oficial das funções de arrays.

### 21\. Exercícios práticos

**Exercício 1 – Lista de frutas**

Crie um array com cinco frutas e apresente todos os elementos utilizando FOREACH.

**Exercício 2 – Lista de números**

Crie um array com dez números inteiros e calcule a soma de todos eles.

**Exercício 3 – Média escolar**

Crie um array contendo quatro notas de um aluno. Calcule a média e informe se ele foi aprovado ou reprovado.

**Exercício 4 – Array associativo**

Crie um array contendo nome, idade, endereço e profissão de uma pessoa. Apresente todas as informações.

**Exercício 5 – Cadastro de produtos**

Crie um array multidimensional com cinco produtos, contendo nome, preço e quantidade em estoque.

**Exercício 6 – Ordenação**

Crie um array com dez números aleatórios e organize os valores em ordem crescente e decrescente.

**Exercício 7 – Pesquisa**

Crie um array com nomes de alunos e utilize `in_array()` para verificar se determinado aluno está cadastrado.

**Exercício 8 – Remoção**

Crie um array com seis elementos e remova o primeiro e o último elemento.

**Exercício 9 – União de Arrays**

Crie dois arrays com diferentes nomes de cidades e utilize `array_merge()` para unir as informações.

**Exercício 10 – Array multidimensional**

Crie um array contendo cinco alunos, com nome, idade, curso e nota. Utilize FOREACH para apresentar os dados.

### 22\. Projeto prático: Sistema de gerenciamento de estoque

Desenvolva um pequeno sistema em PHP para organizar os produtos de uma loja.

**Requisitos:**

1. Criar um array multidimensional para armazenar produtos.
2. Cada produto deve possuir nome, preço e quantidade.
3. Utilizar FOREACH para apresentar os produtos.
4. Calcular o valor total de cada produto em estoque.
5. Calcular o valor total do estoque.
6. Identificar produtos com estoque inferior a cinco unidades.
7. Apresentar um relatório final.

**Exemplo de solução:**

php

```php
<?php

$produtos = [

    [
        "nome" => "Notebook",
        "preco" => 3500,
        "quantidade" => 3
    ],

    [
        "nome" => "Mouse",
        "preco" => 80,
        "quantidade" => 10
    ],

    [
        "nome" => "Teclado",
        "preco" => 150,
        "quantidade" => 4
    ]

];

$totalEstoque = 0;

foreach ($produtos as $produto) {

    $subtotal = $produto["preco"] * $produto["quantidade"];

    $totalEstoque += $subtotal;

    echo "Produto: " . $produto["nome"] . "<br>";

    echo "Preço: R$ " .
        number_format($produto["preco"], 2, ",", ".") . "<br>";

    echo "Quantidade: " . $produto["quantidade"] . "<br>";

    echo "Valor em estoque: R$ " .
        number_format($subtotal, 2, ",", ".") . "<br>";

    if ($produto["quantidade"] < 5) {

        echo "Atenção: Estoque baixo!";

    }

    echo "<hr>";

}

echo "Valor total do estoque: R$ " .
    number_format($totalEstoque, 2, ",", ".");

?>
```

### 23\. Conclusão

Os arrays são estruturas fundamentais para armazenar e manipular conjuntos de informações em PHP.

Compreender arrays indexados, associativos e multidimensionais permite desenvolver sistemas mais organizados e eficientes.

O domínio das funções de manipulação, como `count()`, `array_push()`, `array_pop()`, `sort()`, `array_merge()` e `array_sum()`, amplia as possibilidades de desenvolvimento.

Os arrays são amplamente utilizados em sistemas de cadastro, controle de estoque, gerenciamento escolar, relatórios, formulários e aplicações conectadas a bancos de dados.

A prática dos exercícios apresentados ajudará a desenvolver habilidades importantes para a construção de aplicações web completas.

### 24\. Referências bibliográficas e materiais de apoio

- Manual oficial do PHP: [https://www.php.net/manual/pt\_BR/](<https://www.php.net/manual/pt_BR/>)
- Arrays: [https://www.php.net/manual/pt\_BR/language.types.array.php](<https://www.php.net/manual/pt_BR/language.types.array.php>)
- Funções de Arrays: [https://www.php.net/manual/pt\_BR/ref.array.php](<https://www.php.net/manual/pt_BR/ref.array.php>)
- FOREACH: [https://www.php.net/manual/pt\_BR/control-structures.foreach.php](<https://www.php.net/manual/pt_BR/control-structures.foreach.php>)
- Ordenação de Arrays: [https://www.php.net/manual/pt\_BR/array.sorting.php](<https://www.php.net/manual/pt_BR/array.sorting.php>)
- Manipulação de Arrays: [https://www.php.net/manual/pt\_BR/ref.array.php](<https://www.php.net/manual/pt_BR/ref.array.php>)

**Fim da apostila — Arrays em PHP.**

## Próxima etapa da aprendizagem

Depois de estudar Arrays, recomendo continuar nesta sequência:

1. Manipulação de Strings em PHP.
2. Formulários HTML com PHP.
3. Validação e tratamento de dados.
4. Conexão com banco de dados MySQL usando PDO.
5. CRUD em PHP e MySQL.
6. Programação Orientada a Objetos (POO).
