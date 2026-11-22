# OPERADORES EM PHP

## Conceitos, tipos, aplicações e exemplos práticos

### 1\. Introdução aos operadores em PHP

Os operadores são símbolos ou palavras utilizados para realizar operações com variáveis e valores.

Na linguagem PHP, os operadores permitem realizar cálculos matemáticos, comparar informações, combinar condições, atribuir valores e manipular dados.

Os operadores são fundamentais para desenvolver sistemas, calculadoras, formulários, cadastros, sistemas financeiros e aplicações web.

Exemplo:

php

```php
<?php

$numero1 = 10;
$numero2 = 5;

$resultado = $numero1 + $numero2;

echo $resultado;

?>
```

Resultado: 15.

Nesse exemplo, o sinal `+` é um operador aritmético responsável por realizar uma adição.

### 2\. Operadores aritméticos

Os operadores aritméticos são utilizados para realizar operações matemáticas.

| Operador | Operação | Exemplo |
| --- | --- | --- |
| + | Adição | 10 + 5 |
| - | Subtração | 10 - 5 |
| \* | Multiplicação | 10 \* 5 |
| / | Divisão | 10 / 5 |
| % | Módulo (resto) | 10 % 3 |
| \*\* | Potenciação | 2 \*\* 3 |

Exemplo prático:

php

```php
<?php

$a = 20;
$b = 5;

echo "Adição: " . ($a + $b) . "<br>";
echo "Subtração: " . ($a - $b) . "<br>";
echo "Multiplicação: " . ($a * $b) . "<br>";
echo "Divisão: " . ($a / $b) . "<br>";
echo "Resto: " . ($a % $b) . "<br>";
echo "Potência: " . ($a ** 2);

?>
```

Resultados:

- Adição: 25
- Subtração: 15
- Multiplicação: 100
- Divisão: 4
- Resto: 0
- Potência: 400

### 3\. Operadores de atribuição

Os operadores de atribuição são utilizados para atribuir valores às variáveis.

O operador básico é o sinal de igualdade (`=`).

Exemplo:

php

```php
<?php

$valor = 100;

echo $valor;

?>
```

Também existem operadores de atribuição combinados.

| Operador | Exemplo | Equivalente |
| --- | --- | --- |
| = | $x = 10 | $x recebe 10 |
| += | $x += 5 | $x = $x + 5 |
| -= | $x -= 5 | $x = $x - 5 |
| \*= | $x \*= 2 | $x = $x \* 2 |
| /= | $x /= 2 | $x = $x / 2 |
| %= | $x %= 3 | $x = $x % 3 |
| \*\*= | $x \*\*= 2 | $x = $x \*\* 2 |
| .= | $texto .= "PHP" | Concatena texto |

Exemplo:

php

```php
<?php

$saldo = 100;

$saldo += 50;

echo $saldo;

?>
```

Resultado: 150.

### 4\. Operadores de comparação

Os operadores de comparação permitem comparar dois valores.

O resultado de uma comparação é um valor booleano: `true` ou `false`.

| Operador | Significado |
| --- | --- |
| == | Igual em valor |
| === | Idêntico em valor e tipo |
| \!= | Diferente |
| \<\> | Diferente |
| \!== | Não idêntico |
| \> | Maior que |
| \< | Menor que |
| \>= | Maior ou igual |
| \<= | Menor ou igual |
| \<=\> | Comparação de três vias |

Exemplo:

php

```php
<?php

$a = 10;
$b = 20;

var_dump($a == $b);
var_dump($a != $b);
var_dump($a < $b);
var_dump($a > $b);

?>
```

Resultado:

- false
- true
- true
- false

#### Diferença entre == e ===

O operador `==` compara os valores, enquanto `===` compara os valores e os tipos de dados.

Exemplo:

php

```php
<?php

$numero = 10;
$texto = "10";

var_dump($numero == $texto);
var_dump($numero === $texto);

?>
```

Resultado:

- true
- false

É recomendado utilizar comparações estritas (`===` e `!==`) quando a intenção for verificar também o tipo de dado.

### 5\. Operadores lógicos

Os operadores lógicos permitem combinar duas ou mais condições.

| Operador | Significado |
| --- | --- |
| && | E lógico |
|  |  |
| \! | NÃO lógico |
| and | E lógico |
| or | OU lógico |
| xor | OU exclusivo |

**Operador AND (&&)**

Retorna verdadeiro quando todas as condições são verdadeiras.

php

```php
<?php

$idade = 25;
$documento = true;

if ($idade >= 18 && $documento == true) {
    echo "Acesso permitido";
}

?>
```

**Operador OR (||)**

Retorna verdadeiro quando pelo menos uma condição é verdadeira.

php

```php
<?php

$administrador = false;
$gerente = true;

if ($administrador || $gerente) {
    echo "Acesso autorizado";
}

?>
```

**Operador NOT (\!)**

Inverte o valor lógico de uma condição.

php

```php
<?php

$bloqueado = false;

if (!$bloqueado) {
    echo "Usuário liberado";
}

?>
```

**Operador XOR**

Retorna verdadeiro quando exatamente uma das condições é verdadeira.

php

```php
<?php

$a = true;
$b = false;

var_dump($a xor $b);

?>
```

Resultado: true.

### 6\. Operadores de incremento e decremento

Esses operadores aumentam ou diminuem o valor de uma variável em uma unidade.

| Operador | Função |
| --- | --- |
| ++$x | Pré-incremento |
| $x++ | Pós-incremento |
| --$x | Pré-decremento |
| $x-- | Pós-decremento |

Exemplo:

php

```php
<?php

$numero = 10;

$numero++;

echo $numero;

?>
```

Resultado: 11.

#### Diferença entre pré e pós-incremento

No pré-incremento, o valor é aumentado antes de ser utilizado na expressão.

No pós-incremento, o valor original é utilizado primeiro e depois aumentado.

Exemplo:

php

```php
<?php

$x = 5;

echo ++$x;

?>
```

Resultado: 6.

Exemplo de pós-incremento:

php

```php
<?php

$x = 5;

echo $x++;

echo "<br>";

echo $x;

?>
```

Resultados:

5 e 6.

### 7\. Operadores de concatenação

A concatenação permite juntar textos e valores de variáveis.

No PHP, o operador utilizado é o ponto (`.`).

Exemplo:

php

```php
<?php

$nome = "Maria";
$sobrenome = "Silva";

$nome_completo = $nome . " " . $sobrenome;

echo $nome_completo;

?>
```

Resultado: Maria Silva.

Também podemos utilizar o operador `.=` para adicionar conteúdo a uma string existente.

php

```php
<?php

$mensagem = "Olá";
$mensagem .= " mundo!";
 
echo $mensagem;

?>
```

Resultado: Olá mundo\!

### 8\. Operador ternário

O operador ternário permite realizar uma verificação condicional de maneira resumida.

Sua estrutura é:

php

```php
condicao ? valor_se_verdadeiro : valor_se_falso;
```

Exemplo:

php

```php
<?php

$idade = 20;

$resultado = ($idade >= 18) ? "Maior de idade" : "Menor de idade";

echo $resultado;

?>
```

Resultado: Maior de idade.

O operador ternário é útil quando precisamos fazer verificações simples.

### 9\. Operador de coalescência nula (??)

O operador `??` verifica se uma variável ou expressão existe e não é nula.

Caso não exista ou seja nula, utiliza um valor alternativo.

Exemplo:

php

```php
<?php

$nome = $_GET["nome"] ?? "Visitante";

echo $nome;

?>
```

Se não existir um parâmetro `nome` na URL, o programa utilizará a palavra "Visitante".

### 10\. Operador de coalescência nula com atribuição (??=)

O operador `??=` atribui um valor somente quando a variável não existe ou possui valor `null`.

Exemplo:

php

```php
<?php

$usuario = null;

$usuario ??= "Visitante";

echo $usuario;

?>
```

Resultado: Visitante.

### 11\. Operadores de arrays

O PHP possui operadores específicos para trabalhar com arrays.

| Operador | Função |
| --- | --- |
| + | União de arrays |
| == | Igualdade |
| === | Identidade |
| \!= | Diferença |
| \<\> | Diferença |
| \!== | Não identidade |

Exemplo de união:

php

```php
<?php

$dados1 = [
    "nome" => "João",
    "idade" => 25
];

$dados2 = [
    "cidade" => "Rio de Janeiro",
    "curso" => "PHP"
];

$resultado = $dados1 + $dados2;

print_r($resultado);

?>
```

O operador `+` une os elementos dos arrays, preservando as chaves já existentes no array da esquerda.

### 12\. Operadores bit a bit

Os operadores bit a bit trabalham diretamente com a representação binária dos números.

São utilizados em situações específicas, como manipulação de bits, permissões e otimizações.

| Operador | Função |
| --- | --- |
| & | AND bit a bit |
| \| | OR bit a bit |
| ^ | XOR bit a bit |
| \~ | NOT bit a bit |
| \<\< | Deslocamento à esquerda |
| \>\> | Deslocamento à direita |

Exemplo:

php

```php
<?php

$a = 5;
$b = 3;

echo $a & $b;

?>
```

Resultado: 1.

Representação binária:

- 5 = 0101
- 3 = 0011
- AND = 0001

### 13\. Precedência dos operadores

A precedência determina a ordem em que as operações são realizadas em uma expressão.

Exemplo:

php

```php
<?php

$resultado = 10 + 5 * 2;

echo $resultado;

?>
```

Resultado: 20.

A multiplicação acontece antes da adição.

Para alterar a ordem das operações, podemos utilizar parênteses.

php

```php
<?php

$resultado = (10 + 5) * 2;

echo $resultado;

?>
```

Resultado: 30.

Recomenda-se utilizar parênteses para deixar as expressões mais claras e evitar erros.

### 14\. Exemplo prático: calculadora em PHP

O exemplo abaixo demonstra a utilização dos operadores aritméticos.

php

```php
<?php

$numero1 = 20;
$numero2 = 4;

echo "Primeiro número: $numero1 <br>";
echo "Segundo número: $numero2 <br>";

echo "Adição: " . ($numero1 + $numero2) . "<br>";
echo "Subtração: " . ($numero1 - $numero2) . "<br>";
echo "Multiplicação: " . ($numero1 * $numero2) . "<br>";

if ($numero2 != 0) {
    echo "Divisão: " . ($numero1 / $numero2);
} else {
    echo "Não é possível dividir por zero.";
}

?>
```

### 15\. Exemplo prático: sistema de aprovação de alunos

Neste exemplo, utilizamos operadores aritméticos, de comparação e lógicos.

php

```php
<?php

$nota1 = 8;
$nota2 = 7;
$frequencia = 85;

$media = ($nota1 + $nota2) / 2;

if ($media >= 7 && $frequencia >= 75) {
    echo "Aluno aprovado!";
} else {
    echo "Aluno reprovado!";
}

echo "<br>Média: $media";
echo "<br>Frequência: $frequencia%";

?>
```

Regras:

- Média igual ou superior a 7.
- Frequência igual ou superior a 75%.

As duas condições precisam ser verdadeiras para que o aluno seja aprovado.

### 16\. Exercícios práticos

**Exercício 1 – Operações matemáticas**

Crie duas variáveis numéricas e realize as operações de adição, subtração, multiplicação, divisão e módulo.

**Exercício 2 – Comparação de números**

Crie duas variáveis e verifique:

- Se são iguais.
- Se são diferentes.
- Se o primeiro é maior.
- Se o segundo é maior ou igual.

**Exercício 3 – Maioridade**

Crie uma variável para armazenar a idade de uma pessoa. Utilize operadores de comparação para verificar se ela é maior ou menor de idade.

**Exercício 4 – Operadores lógicos**

Crie duas condições:

- A pessoa possui idade igual ou superior a 18 anos.
- A pessoa possui autorização.

Utilize o operador lógico AND para verificar se as duas condições são verdadeiras.

**Exercício 5 – Incremento e decremento**

Crie uma variável com valor inicial 10. Utilize os operadores de incremento e decremento para modificar seu valor.

**Exercício 6 – Operador ternário**

Crie uma variável para armazenar a nota de um aluno. Utilize o operador ternário para informar se ele foi aprovado ou reprovado.

**Exercício 7 – Calculadora de descontos**

Crie variáveis para armazenar o preço de um produto e o percentual de desconto. Calcule e apresente o preço final.

**Exercício 8 – Sistema de acesso**

Crie duas variáveis booleanas: `$usuario_ativo` e `$senha_correta`. Utilize operadores lógicos para verificar se o acesso deve ser permitido.

### 17\. Projeto prático: Sistema de vendas

Desenvolva um programa em PHP para calcular o valor de uma venda.

Requisitos:

1. Criar uma variável para o nome do produto.
2. Criar uma variável para o preço unitário.
3. Criar uma variável para a quantidade.
4. Calcular o valor total.
5. Aplicar um desconto de 10% quando a compra for igual ou superior a R$ 500,00.
6. Apresentar o valor original.
7. Apresentar o desconto aplicado.
8. Apresentar o valor final.

Exemplo de solução:

php

```php
<?php

$produto = "Notebook";
$preco = 250.00;
$quantidade = 3;

$total = $preco * $quantidade;

if ($total >= 500) {
    $desconto = $total * 0.10;
} else {
    $desconto = 0;
}

$total_final = $total - $desconto;

echo "Produto: $produto <br>";
echo "Preço unitário: R$ " . number_format($preco, 2, ",", ".") . "<br>";
echo "Quantidade: $quantidade <br>";
echo "Valor total: R$ " . number_format($total, 2, ",", ".") . "<br>";
echo "Desconto: R$ " . number_format($desconto, 2, ",", ".") . "<br>";
echo "Valor final: R$ " . number_format($total_final, 2, ",", ".");

?>
```

### 18\. Conclusão

Os operadores são fundamentais para o desenvolvimento de aplicações em PHP, pois permitem realizar cálculos, comparações, atribuições e verificações lógicas.

Compreender os operadores aritméticos, de atribuição, comparação, lógicos, incremento, decremento e concatenação é essencial para construir programas eficientes e organizados.

O domínio desse conteúdo prepara o estudante para avançar em estruturas condicionais, estruturas de repetição, funções e desenvolvimento de sistemas completos.

### 19\. Referências bibliográficas e materiais de apoio

- Manual oficial de operadores PHP: [https://www.php.net/manual/pt\_BR/language.operators.php](<https://www.php.net/manual/pt_BR/language.operators.php>)
- Operadores aritméticos: [https://www.php.net/manual/pt\_BR/language.operators.arithmetic.php](<https://www.php.net/manual/pt_BR/language.operators.arithmetic.php>)
- Operadores de comparação: [https://www.php.net/manual/pt\_BR/language.operators.comparison.php](<https://www.php.net/manual/pt_BR/language.operators.comparison.php>)
- Operadores lógicos: [https://www.php.net/manual/pt\_BR/language.operators.logical.php](<https://www.php.net/manual/pt_BR/language.operators.logical.php>)
- Operadores de atribuição: [https://www.php.net/manual/pt\_BR/language.operators.assignment.php](<https://www.php.net/manual/pt_BR/language.operators.assignment.php>)

