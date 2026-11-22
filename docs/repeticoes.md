# APOSTILA: ESTRUTURAS DE REPETIÇÃO EM PHP

## FOR, WHILE, DO WHILE e FOREACH

### 1\. Introdução às estruturas de repetição

As estruturas de repetição são recursos da programação que permitem executar um determinado bloco de código várias vezes, enquanto uma condição for atendida ou enquanto existirem elementos para percorrer.

Na linguagem PHP, as principais estruturas de repetição são:

- FOR: utilizado quando conhecemos a quantidade de repetições.
- WHILE: executa enquanto uma condição for verdadeira.
- DO WHILE: executa pelo menos uma vez antes de verificar a condição.
- FOREACH: utilizado principalmente para percorrer arrays.

Essas estruturas são muito importantes para desenvolver sistemas de cadastro, relatórios, tabelas, cálculos, listas de produtos e aplicações web.

### 2\. Estrutura FOR

O FOR é utilizado quando sabemos quantas vezes determinado comando deverá ser executado.

**Sintaxe:**

php

```php
for (inicializacao; condicao; incremento) {
    // Comandos executados durante a repetição
}
```

A estrutura possui três partes:

1. Inicialização: define o valor inicial do contador.
2. Condição: determina quando a repetição deve continuar.
3. Incremento: modifica o contador a cada repetição.

**Exemplo 1: Contagem de 1 até 10**

php

```php
<?php

for ($i = 1; $i <= 10; $i++) {
    echo $i . "<br>";
}

?>
```

Resultado:

text

```text
1
2
3
4
5
6
7
8
9
10
```

**Explicação:**

- `$i = 1`: inicia o contador em 1.
- `$i <= 10`: mantém a repetição enquanto o contador for menor ou igual a 10.
- `$i++`: aumenta o contador em uma unidade.

**Exemplo 2: Tabuada**

php

```php
<?php

$numero = 5;

for ($i = 1; $i <= 10; $i++) {

    $resultado = $numero * $i;

    echo "$numero x $i = $resultado <br>";

}

?>
```

Resultado:

text

```text
5 x 1 = 5
5 x 2 = 10
5 x 3 = 15
...
5 x 10 = 50
```

**Exemplo 3: Contagem regressiva**

php

```php
<?php

for ($i = 10; $i >= 1; $i--) {
    echo $i . "<br>";
}

echo "Fim da contagem!";

?>
```

### 3\. Estrutura WHILE

O WHILE executa um bloco de código enquanto determinada condição for verdadeira.

É indicado quando não sabemos exatamente quantas repetições serão necessárias.

**Sintaxe:**

php

```php
while (condicao) {
    // Comandos executados enquanto a condição for verdadeira
}
```

**Exemplo 1: Contagem de 1 até 5**

php

```php
<?php

$contador = 1;

while ($contador <= 5) {

    echo $contador . "<br>";

    $contador++;

}

?>
```

Resultado:

text

```text
1
2
3
4
5
```

**Explicação:**

1. A variável `$contador` começa com valor 1.
2. O WHILE verifica se o contador é menor ou igual a 5.
3. O número é apresentado na tela.
4. O contador é incrementado.
5. O processo continua até a condição ser falsa.

**Exemplo 2: Somando números**

php

```php
<?php

$contador = 1;
$soma = 0;

while ($contador <= 10) {

    $soma += $contador;

    $contador++;

}

echo "Soma total: $soma";

?>
```

Resultado:

text

```text
Soma total: 55
```

### 4\. Estrutura DO WHILE

O DO WHILE é semelhante ao WHILE, mas possui uma diferença importante: o bloco de código é executado pelo menos uma vez, mesmo que a condição seja falsa.

Isso acontece porque a condição é verificada somente depois da execução do bloco.

**Sintaxe:**

php

```php
do {
    // Comandos executados
} while (condicao);
```

**Exemplo 1: Contagem de 1 até 5**

php

```php
<?php

$contador = 1;

do {

    echo $contador . "<br>";

    $contador++;

} while ($contador <= 5);

?>
```

Resultado:

text

```text
1
2
3
4
5
```

**Exemplo 2: Condição inicialmente falsa**

php

```php
<?php

$numero = 10;

do {

    echo "Esta mensagem será exibida.";

} while ($numero < 5);

?>
```

Mesmo que a condição seja falsa, a mensagem será exibida uma vez.

**Explicação:**

O DO WHILE executa primeiro e verifica a condição depois.

### 5\. Estrutura FOREACH

O FOREACH é utilizado principalmente para percorrer arrays, permitindo acessar cada elemento de uma coleção de dados.

É muito utilizado em sistemas que trabalham com listas de usuários, produtos, alunos e informações armazenadas em bancos de dados.

**Sintaxe:**

php

```php
foreach ($array as $valor) {
    // Comandos
}
```

**Exemplo 1: Percorrendo uma lista de nomes**

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

**Exemplo 2: Arrays associativos**

O FOREACH também permite percorrer arrays que possuem chaves e valores.

php

```php
<?php

$aluno = [
    "nome" => "João",
    "idade" => 20,
    "curso" => "Informática"
];

foreach ($aluno as $chave => $valor) {

    echo "$chave: $valor <br>";

}

?>
```

Resultado:

text

```text
nome: João
idade: 20
curso: Informática
```

**Explicação:**

- `$chave` representa o nome da chave.
- `$valor` representa o conteúdo armazenado naquela chave.

**Exemplo 3: Lista de produtos**

php

```php
<?php

$produtos = [
    "Notebook",
    "Mouse",
    "Teclado",
    "Monitor"
];

foreach ($produtos as $produto) {

    echo "Produto: $produto <br>";

}

?>
```

### 6\. Diferenças entre FOR, WHILE, DO WHILE e FOREACH

Cada estrutura possui uma finalidade específica.

| Estrutura | Utilização |
| --- | --- |
| FOR | Quando sabemos a quantidade de repetições |
| WHILE | Quando a repetição depende de uma condição |
| DO WHILE | Quando precisamos executar pelo menos uma vez |
| FOREACH | Quando precisamos percorrer arrays |

**Quando utilizar FOR?**

Quando precisamos repetir uma operação uma quantidade determinada de vezes, como criar uma tabuada ou realizar uma contagem.

**Quando utilizar WHILE?**

Quando precisamos repetir uma operação até que determinada condição deixe de ser verdadeira.

**Quando utilizar DO WHILE?**

Quando precisamos garantir que o bloco de código seja executado pelo menos uma vez.

**Quando utilizar FOREACH?**

Quando precisamos percorrer os elementos de um array sem controlar manualmente os índices.

### 7\. Estruturas de repetição aninhadas

Uma estrutura de repetição aninhada acontece quando colocamos um laço de repetição dentro de outro.

Esse recurso é muito utilizado para criar tabelas, matrizes e relatórios.

**Exemplo: Tabuada de 1 até 5**

php

```php
<?php

for ($i = 1; $i <= 5; $i++) {

    echo "<h3>Tabuada do $i</h3>";

    for ($j = 1; $j <= 10; $j++) {

        echo "$i x $j = " . ($i * $j) . "<br>";

    }

}

?>
```

Nesse exemplo, o primeiro FOR controla as tabuadas e o segundo FOR realiza os cálculos de cada uma delas.

### 8\. Comandos BREAK e CONTINUE

Além das estruturas de repetição, o PHP possui comandos que permitem controlar a execução dos laços.

**BREAK**

O BREAK interrompe imediatamente a estrutura de repetição.

Exemplo:

php

```php
<?php

for ($i = 1; $i <= 10; $i++) {

    if ($i == 5) {
        break;
    }

    echo $i . "<br>";

}

?>
```

Resultado:

text

```text
1
2
3
4
```

Quando o contador chega a 5, o laço é encerrado.

**CONTINUE**

O CONTINUE interrompe somente a repetição atual e passa para a próxima.

Exemplo:

php

```php
<?php

for ($i = 1; $i <= 5; $i++) {

    if ($i == 3) {
        continue;
    }

    echo $i . "<br>";

}

?>
```

Resultado:

text

```text
1
2
4
5
```

O número 3 não é apresentado porque aquela repetição foi ignorada.

### 9\. Trabalhando com arrays e estruturas de repetição

As estruturas de repetição podem trabalhar em conjunto com arrays para organizar e apresentar grandes quantidades de informações.

**Exemplo: Lista de alunos**

php

```php
<?php

$alunos = [
    "Ana",
    "Carlos",
    "Pedro",
    "Mariana",
    "João"
];

foreach ($alunos as $aluno) {

    echo "Aluno: $aluno <br>";

}

?>
```

**Exemplo: Calculando a soma de valores**

php

```php
<?php

$valores = [10, 20, 30, 40, 50];

$soma = 0;

foreach ($valores as $valor) {

    $soma += $valor;

}

echo "Soma dos valores: $soma";

?>
```

Resultado:

text

```text
Soma dos valores: 150
```

### 10\. Exemplo prático: Sistema de notas dos alunos

Neste exemplo, utilizaremos FOREACH para percorrer uma lista de alunos e apresentar suas notas.

php

```php
<?php

$alunos = [
    "Ana" => 8,
    "Carlos" => 6,
    "Pedro" => 9,
    "Maria" => 7
];

foreach ($alunos as $nome => $nota) {

    echo "Aluno: $nome <br>";
    echo "Nota: $nota <br>";

    if ($nota >= 7) {
        echo "Situação: Aprovado";
    } else {
        echo "Situação: Reprovado";
    }

    echo "<hr>";

}

?>
```

O programa percorre todos os alunos, apresenta suas notas e verifica automaticamente a situação de cada um.

### 11\. Exemplo prático: Criando uma tabela HTML com PHP

Podemos utilizar o FOR para gerar tabelas dinamicamente.

php

```php
<?php

echo "<table border='1'>";

echo "<tr>";
echo "<th>Número</th>";
echo "<th>Quadrado</th>";
echo "</tr>";

for ($i = 1; $i <= 10; $i++) {

    $quadrado = $i * $i;

    echo "<tr>";

    echo "<td>$i</td>";
    echo "<td>$quadrado</td>";

    echo "</tr>";

}

echo "</table>";

?>
```

O programa cria uma tabela com os números de 1 a 10 e seus respectivos quadrados.

### 12\. Cuidados e boas práticas

Ao trabalhar com estruturas de repetição, é importante observar algumas recomendações:

1. Verificar se a condição de parada está correta.
2. Atualizar o contador quando necessário.
3. Evitar repetições infinitas.
4. Utilizar FOREACH para percorrer arrays quando apropriado.
5. Organizar o código com indentação.
6. Evitar operações desnecessárias dentro dos laços.
7. Utilizar BREAK e CONTINUE somente quando fizer sentido.
8. Testar o programa com diferentes valores.

**Atenção: loops infinitos**

Um loop infinito acontece quando a condição de repetição nunca se torna falsa.

Exemplo de código incorreto:

php

```php
<?php

$contador = 1;

while ($contador <= 5) {

    echo $contador;

    // O contador não é incrementado.

}

?>
```

Nesse exemplo, o programa ficará repetindo indefinidamente porque o contador permanece com valor 1.

### 13\. Exercícios práticos

**Exercício 1 – Contagem simples**

Utilize FOR para apresentar os números de 1 até 20.

**Exercício 2 – Contagem regressiva**

Utilize FOR para apresentar os números de 10 até 1.

**Exercício 3 – Tabuada**

Crie um programa que receba um número e apresente sua tabuada de 1 até 10 utilizando FOR.

**Exercício 4 – Soma de números**

Utilize WHILE para somar todos os números de 1 até 100.

**Exercício 5 – DO WHILE**

Crie um programa que apresente os números de 1 até 10 utilizando DO WHILE.

**Exercício 6 – Lista de nomes**

Crie um array com cinco nomes e utilize FOREACH para apresentar todos eles.

**Exercício 7 – Lista de produtos**

Crie um array associativo contendo nome, preço e quantidade de três produtos. Utilize FOREACH para apresentar as informações.

**Exercício 8 – Números pares**

Utilize FOR para apresentar somente os números pares entre 1 e 50.

**Exercício 9 – BREAK**

Crie um programa que conte de 1 até 20, mas interrompa a repetição quando chegar ao número 10.

**Exercício 10 – CONTINUE**

Crie um programa que apresente os números de 1 até 20, ignorando os múltiplos de 3.

### 14\. Projeto prático: Sistema de gerenciamento de alunos

Desenvolva um programa em PHP para apresentar informações de vários alunos e suas respectivas notas.

**Requisitos:**

1. Criar um array associativo com nomes e notas.
2. Utilizar FOREACH para percorrer os alunos.
3. Apresentar o nome de cada aluno.
4. Apresentar a nota de cada aluno.
5. Verificar se o aluno foi aprovado ou reprovado.
6. Calcular a média geral da turma.
7. Apresentar a quantidade de alunos cadastrados.

**Exemplo de solução:**

php

```php
<?php

$alunos = [
    "Ana" => 8,
    "Carlos" => 6,
    "Pedro" => 9,
    "Mariana" => 7,
    "João" => 5
];

$soma = 0;
$quantidade = 0;

foreach ($alunos as $nome => $nota) {

    echo "Aluno: $nome <br>";
    echo "Nota: $nota <br>";

    if ($nota >= 7) {
        echo "Situação: Aprovado <br>";
    } else {
        echo "Situação: Reprovado <br>";
    }

    echo "<hr>";

    $soma += $nota;
    $quantidade++;

}

$media = $soma / $quantidade;

echo "Quantidade de alunos: $quantidade <br>";
echo "Média geral da turma: " . number_format($media, 2, ",", ".");

?>
```

### 15\. Conclusão

As estruturas de repetição são fundamentais para o desenvolvimento de aplicações em PHP, pois permitem executar tarefas automaticamente sem precisar escrever o mesmo código várias vezes.

O domínio de FOR, WHILE, DO WHILE e FOREACH permite criar programas mais organizados, eficientes e dinâmicos.

Com esses conhecimentos, o estudante estará preparado para desenvolver sistemas que trabalham com listas, tabelas, cadastros, relatórios e grandes conjuntos de informações.

A prática dos exercícios é essencial para desenvolver o raciocínio lógico e compreender como controlar a execução dos programas.

### 16\. Referências bibliográficas e materiais de apoio

- Manual oficial do PHP: [https://www.php.net/manual/pt\_BR/](<https://www.php.net/manual/pt_BR/>)
- Estrutura FOR: [https://www.php.net/manual/pt\_BR/control-structures.for.php](<https://www.php.net/manual/pt_BR/control-structures.for.php>)
- Estrutura WHILE: [https://www.php.net/manual/pt\_BR/control-structures.while.php](<https://www.php.net/manual/pt_BR/control-structures.while.php>)
- Estrutura FOREACH: [https://www.php.net/manual/pt\_BR/control-structures.foreach.php](<https://www.php.net/manual/pt_BR/control-structures.foreach.php>)
- BREAK: [https://www.php.net/manual/pt\_BR/control-structures.break.php](<https://www.php.net/manual/pt_BR/control-structures.break.php>)
- CONTINUE: [https://www.php.net/manual/pt\_BR/control-structures.continue.php](<https://www.php.net/manual/pt_BR/control-structures.continue.php>)

**Fim da apostila — Estruturas de Repetição em PHP.**

## Próxima etapa da aprendizagem

A sequência recomendada para continuar seus estudos é:

1. Funções em PHP.
2. Arrays em PHP.
3. Manipulação de strings.
4. Formulários HTML com PHP.
5. Programação orientada a objetos (POO).
