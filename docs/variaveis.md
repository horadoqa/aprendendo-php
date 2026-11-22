Segue uma segunda apostila, dedicada exclusivamente ao tema Variáveis em PHP, com explicações, exemplos de códigos, boas práticas e exercícios para iniciantes.

Escrita

# APOSTILA: VARIÁVEIS EM PHP

## Conceitos, declaração, tipos de dados e utilização prática

### 1\. Introdução às variáveis

As variáveis são elementos fundamentais da programação. Elas permitem armazenar informações na memória do computador para que possam ser utilizadas, modificadas e processadas durante a execução de um programa.

No PHP, as variáveis são utilizadas para armazenar diferentes tipos de informações, como:

- Nomes de pessoas.
- Idades.
- Endereços.
- Valores financeiros.
- Datas.
- Resultados de cálculos.
- Informações recebidas de formulários.

Exemplo:

php

```php
<?php
$nome = "Carlos";
$idade = 25;

echo $nome;
echo $idade;
?>
```

Nesse exemplo, foram criadas duas variáveis: `$nome` e `$idade`.

### 2\. Como declarar uma variável em PHP?

Para declarar uma variável em PHP, utilizamos o símbolo `$`, seguido do nome da variável.

A estrutura básica é:

php

```php
$nome_da_variavel = valor;
```

Exemplo:

php

```php
<?php
$nome = "Maria";
$cidade = "Rio de Janeiro";
$idade = 30;

echo $nome;
echo $cidade;
echo $idade;
?>
```

O sinal de igualdade (`=`) representa uma atribuição, ou seja, associa um valor à variável.

### 3\. Regras para criar nomes de variáveis

Existem algumas regras importantes para declarar variáveis em PHP:

1. Toda variável deve começar com `$`.
2. O primeiro caractere após `$` deve ser uma letra ou sublinhado (`_`).
3. Não é permitido começar o nome com números.
4. Não são permitidos espaços no nome.
5. PHP diferencia letras maiúsculas e minúsculas.
6. É recomendado utilizar nomes que representem o conteúdo armazenado.

Exemplos válidos:

php

```php
$nome = "João";
$idade = 20;
$valor_total = 150.50;
$_usuario = "admin";
$produto2 = "Notebook";
```

Exemplos inválidos:

php

```php
$2nome = "João";
$nome completo = "Maria";
$-idade = 25;
```

### 4\. Tipos de dados das variáveis

O PHP permite armazenar diferentes tipos de dados nas variáveis.

#### 4.1 String

Representa uma sequência de caracteres, normalmente utilizada para armazenar textos.

php

```php
<?php
$nome = "Ana";
$profissao = "Programadora";

echo $nome;
echo $profissao;
?>
```

#### 4.2 Integer

Representa números inteiros, positivos ou negativos.

php

```php
<?php
$idade = 28;
$quantidade = 100;
$temperatura = -5;

echo $idade;
?>
```

#### 4.3 Float

Representa números com casas decimais.

php

```php
<?php
$preco = 99.90;
$altura = 1.75;
$media = 8.5;

echo $preco;
?>
```

#### 4.4 Boolean

Representa dois valores lógicos: verdadeiro (`true`) ou falso (`false`).

php

```php
<?php
$aprovado = true;
$reprovado = false;

var_dump($aprovado);
?>
```

#### 4.5 Array

Permite armazenar vários valores dentro de uma única variável.

php

```php
<?php
$frutas = ["Maçã", "Banana", "Laranja"];

echo $frutas[0];
?>
```

Resultado: Maçã.

#### 4.6 Null

Representa uma variável sem valor definido.

php

```php
<?php
$telefone = null;

var_dump($telefone);
?>
```

### 5\. Exibindo o conteúdo das variáveis

O PHP possui diferentes comandos para apresentar informações.

**Comando echo:**

php

```php
<?php
$nome = "Pedro";

echo $nome;
?>
```

**Comando print:**

php

```php
<?php
$idade = 22;

print $idade;
?>
```

**Comando var\_dump:**

Exibe o valor e o tipo de dado armazenado.

php

```php
<?php
$preco = 49.90;

var_dump($preco);
?>
```

### 6\. Concatenando variáveis

A concatenação permite juntar textos e valores de diferentes variáveis.

No PHP, utilizamos o operador ponto (`.`).

Exemplo:

php

```php
<?php
$nome = "João";
$idade = 25;

echo "Meu nome é " . $nome . " e tenho " . $idade . " anos.";
?>
```

Resultado:

Meu nome é João e tenho 25 anos.

Também podemos utilizar interpolação de variáveis dentro de strings com aspas duplas:

php

```php
<?php
$nome = "Maria";

echo "Olá, $nome!";
?>
```

Resultado: Olá, Maria\!

### 7\. Alterando valores de variáveis

Uma variável pode receber novos valores durante a execução do programa.

Exemplo:

php

```php
<?php
$saldo = 100;

echo $saldo;

$saldo = 250;

echo $saldo;
?>
```

Primeiro, o saldo recebe 100. Depois, seu valor é alterado para 250.

### 8\. Operações com variáveis

As variáveis podem participar de operações matemáticas.

Exemplo:

php

```php
<?php
$numero1 = 20;
$numero2 = 10;

$soma = $numero1 + $numero2;
$subtracao = $numero1 - $numero2;
$multiplicacao = $numero1 * $numero2;
$divisao = $numero1 / $numero2;

echo "Soma: $soma";
echo "Subtração: $subtracao";
echo "Multiplicação: $multiplicacao";
echo "Divisão: $divisao";
?>
```

### 9\. Verificando o tipo de uma variável

O PHP possui funções que permitem identificar o tipo de dado armazenado.

| Função | Finalidade |
| --- | --- |
| gettype() | Retorna o tipo da variável |
| is\_string() | Verifica se é texto |
| is\_int() | Verifica se é inteiro |
| is\_float() | Verifica se é decimal |
| is\_bool() | Verifica se é booleano |
| is\_array() | Verifica se é array |
| is\_null() | Verifica se é null |

Exemplo:

php

```php
<?php
$idade = 30;

echo gettype($idade);
?>
```

Resultado:

integer

### 10\. Conversão de tipos de dados

Em PHP, podemos converter um valor de um tipo para outro.

Exemplo:

php

```php
<?php
$numero = "100";

$numero_convertido = (int) $numero;

var_dump($numero_convertido);
?>
```

Resultado:

int(100)

Outras conversões:

php

```php
$valor = (float) "25.50";
$texto = (string) 100;
$logico = (bool) 1;
```

É importante observar que nem toda conversão preserva o valor original. Por isso, devemos verificar os dados antes de utilizá-los.

### 11\. Variáveis globais e locais

O PHP possui diferentes escopos de variáveis.

**Variável local:**

É declarada dentro de uma função e normalmente só pode ser acessada dentro dela.

php

```php
<?php
function exemplo() {
    $mensagem = "Olá!";
    echo $mensagem;
}

exemplo();
?>
```

**Variável global:**

É declarada fora de uma função.

Para acessar uma variável global dentro de uma função, podemos utilizar a palavra-chave `global`.

php

```php
<?php
$nome = "Carlos";

function mostrarNome() {
    global $nome;
    echo $nome;
}

mostrarNome();
?>
```

Outra possibilidade é utilizar `$GLOBALS`.

php

```php
<?php
$valor = 100;

function mostrarValor() {
    echo $GLOBALS["valor"];
}

mostrarValor();
?>
```

### 12\. Variáveis superglobais

As superglobais são variáveis especiais disponíveis em diferentes escopos do programa.

As principais são:

| Superglobal | Finalidade |
| --- | --- |
| $\_GET | Receber dados enviados pela URL |
| $\_POST | Receber dados enviados por formulários |
| $\_SESSION | Armazenar informações da sessão |
| $\_COOKIE | Acessar cookies |
| $\_SERVER | Obter informações do servidor |
| $\_FILES | Receber arquivos enviados |
| $\_REQUEST | Acessar dados de requisições |
| $GLOBALS | Acessar variáveis globais |

Exemplo utilizando `$_POST`:

php

```php
<?php
$nome = $_POST["nome"] ?? "";

echo htmlspecialchars($nome, ENT_QUOTES, "UTF-8");
?>
```

### 13\. Constantes e diferenças em relação às variáveis

As constantes armazenam valores que não devem ser alterados durante a execução do programa.

Exemplo:

php

```php
<?php
define("NOME_SISTEMA", "Sistema Escolar");

echo NOME_SISTEMA;
?>
```

Também podemos utilizar `const`:

php

```php
<?php
const VERSAO = "1.0";

echo VERSAO;
?>
```

Diferenças:

| Variáveis | Constantes |
| --- | --- |
| Começam com `$` | Não utilizam `$` ao serem acessadas |
| Podem ter valores alterados | Não podem ser redefinidas |
| Possuem escopo | Possuem regras próprias de visibilidade |
| Exemplo: `$nome` | Exemplo: `NOME_SISTEMA` |

### 14\. Boas práticas na utilização de variáveis

Para escrever códigos organizados e fáceis de entender, recomenda-se:

- Utilizar nomes descritivos.
- Evitar nomes muito curtos sem significado.
- Manter um padrão de nomenclatura.
- Evitar variáveis globais desnecessárias.
- Inicializar variáveis antes de utilizá-las.
- Verificar os tipos de dados quando necessário.
- Validar informações recebidas de formulários.
- Não armazenar senhas em texto puro.

Exemplo de código organizado:

php

```php
<?php
$nome_cliente = "Ana";
$valor_compra = 250.00;
$desconto = 20.00;

$valor_final = $valor_compra - $desconto;

echo "Cliente: $nome_cliente";
echo "Valor final: R$ " . number_format($valor_final, 2, ",", ".");
?>
```

### 15\. Exercícios práticos

**Exercício 1 – Criando variáveis**

Crie três variáveis:

- Nome.
- Idade.
- Cidade.

Apresente os valores na tela.

**Exercício 2 – Operações matemáticas**

Crie duas variáveis numéricas e realize:

- Adição.
- Subtração.
- Multiplicação.
- Divisão.

**Exercício 3 – Dados de um produto**

Crie variáveis para armazenar:

- Nome do produto.
- Preço.
- Quantidade.
- Valor total.

Calcule o valor total da compra.

**Exercício 4 – Tipos de dados**

Crie variáveis dos tipos String, Integer, Float, Boolean e Array. Utilize `var_dump()` para verificar os tipos.

**Exercício 5 – Cadastro de aluno**

Crie variáveis para armazenar o nome, idade, curso e nota de um aluno. Apresente todas as informações.

**Exercício 6 – Variáveis em funções**

Crie uma função que receba dois números como parâmetros e retorne a soma deles.

**Exercício 7 – Formulário**

Crie um formulário HTML para receber o nome e a idade de uma pessoa. Utilize PHP para receber e apresentar os dados.

### 16\. Projeto prático: Sistema de cadastro de alunos

Desenvolva um pequeno programa que armazene informações de um aluno utilizando variáveis.

Requisitos:

1. Criar uma variável para o nome do aluno.
2. Criar uma variável para a idade.
3. Criar uma variável para o curso.
4. Criar três variáveis para notas.
5. Calcular a média das notas.
6. Apresentar os dados do aluno.
7. Informar se o aluno foi aprovado ou reprovado, considerando média mínima 7.

Exemplo de solução:

php

```php
<?php

$nome = "João";
$idade = 20;
$curso = "Informática";

$nota1 = 8;
$nota2 = 7;
$nota3 = 9;

$media = ($nota1 + $nota2 + $nota3) / 3;

echo "Nome: $nome <br>";
echo "Idade: $idade <br>";
echo "Curso: $curso <br>";
echo "Média: " . number_format($media, 2);

if ($media >= 7) {
    echo "<br>Resultado: Aprovado";
} else {
    echo "<br>Resultado: Reprovado";
}

?>
```

### 17\. Conclusão

As variáveis são um dos fundamentos mais importantes da linguagem PHP. Elas permitem armazenar, manipular e organizar informações durante a execução de um programa.

Compreender a declaração de variáveis, os tipos de dados, a concatenação, as operações matemáticas, os escopos e as superglobais é essencial para desenvolver aplicações web.

O domínio desse conteúdo prepara o estudante para avançar em estruturas condicionais, estruturas de repetição, funções, formulários, banco de dados e desenvolvimento de sistemas completos.

### 18\. Referências bibliográficas e materiais de apoio

- Manual oficial do PHP: [https://www.php.net/manual/pt\_BR/language.variables.php](<https://www.php.net/manual/pt_BR/language.variables.php>)
- Tipos de dados: [https://www.php.net/manual/pt\_BR/language.types.php](<https://www.php.net/manual/pt_BR/language.types.php>)
- Escopo de variáveis: [https://www.php.net/manual/pt\_BR/language.variables.scope.php](<https://www.php.net/manual/pt_BR/language.variables.scope.php>)
- Superglobais: [https://www.php.net/manual/pt\_BR/language.variables.superglobals.php](<https://www.php.net/manual/pt_BR/language.variables.superglobals.php>)
- Constantes: [https://www.php.net/manual/pt\_BR/language.constants.php](<https://www.php.net/manual/pt_BR/language.constants.php>)

