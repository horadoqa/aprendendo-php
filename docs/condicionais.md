# APOSTILA: ESTRUTURAS CONDICIONAIS EM PHP

## IF, ELSE, ELSEIF e SWITCH

### 1\. Introdução às estruturas condicionais

As estruturas condicionais são recursos da programação utilizados para tomar decisões durante a execução de um programa.

Elas permitem que o sistema execute diferentes comandos dependendo de determinadas condições.

Na linguagem PHP, as principais estruturas condicionais são:

- IF: executa um bloco de código quando uma condição é verdadeira.
- ELSE: executa um bloco alternativo quando a condição do IF é falsa.
- ELSEIF: permite verificar várias condições.
- SWITCH: permite selecionar uma opção entre diferentes possibilidades.

As estruturas condicionais são utilizadas em sistemas de login, cadastros, cálculos de notas, lojas virtuais, sistemas bancários e aplicações administrativas.

### 2\. Estrutura IF

A estrutura IF é utilizada para verificar se determinada condição é verdadeira.

Se a condição for verdadeira, o PHP executará o bloco de código correspondente.

**Sintaxe:**

php

```php
if (condicao) {
    // Código executado se a condição for verdadeira
}
```

**Exemplo:**

php

```php
<?php

$idade = 20;

if ($idade >= 18) {
    echo "Você é maior de idade!";
}

?>
```

Resultado:

Você é maior de idade\!

**Explicação:**

1. A variável `$idade` recebe o valor 20.
2. O IF verifica se a idade é maior ou igual a 18.
3. Como a condição é verdadeira, a mensagem é apresentada.

### 3\. Estrutura IF e ELSE

A estrutura ELSE permite executar um bloco alternativo quando a condição do IF é falsa.

**Sintaxe:**

php

```php
if (condicao) {
    // Código se verdadeiro
} else {
    // Código se falso
}
```

**Exemplo:**

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

Resultado:

Menor de idade.

**Explicação:**

Como a idade é 16, a condição é falsa. Portanto, o programa executa o bloco ELSE.

### 4\. Estrutura ELSEIF

A estrutura ELSEIF permite verificar várias condições diferentes dentro de um mesmo programa.

Ela é utilizada quando existem diversas possibilidades de resultados.

**Sintaxe:**

php

```php
if (condicao1) {
    // Primeiro resultado
} elseif (condicao2) {
    // Segundo resultado
} elseif (condicao3) {
    // Terceiro resultado
} else {
    // Resultado alternativo
}
```

**Exemplo: sistema de notas**

php

```php
<?php

$nota = 8;

if ($nota >= 9) {
    echo "Excelente!";
} elseif ($nota >= 7) {
    echo "Aprovado!";
} elseif ($nota >= 5) {
    echo "Recuperação!";
} else {
    echo "Reprovado!";
}

?>
```

Resultado:

Aprovado\!

**Explicação:**

- Se a nota for igual ou superior a 9, o resultado será Excelente.
- Se for igual ou superior a 7, será Aprovado.
- Se for igual ou superior a 5, será Recuperação.
- Caso contrário, será Reprovado.

O PHP verifica as condições de cima para baixo e executa somente o primeiro bloco cuja condição seja verdadeira.

### 5\. Estrutura SWITCH

A estrutura SWITCH permite comparar o valor de uma variável com diferentes possibilidades.

É bastante utilizada em menus, sistemas de opções e seleção de operações.

**Sintaxe:**

php

```php
switch ($variavel) {
    case valor1:
        // Código
        break;

    case valor2:
        // Código
        break;

    default:
        // Código padrão
}
```

**Exemplo: dias da semana**

php

```php
<?php

$dia = 3;

switch ($dia) {

    case 1:
        echo "Domingo";
        break;

    case 2:
        echo "Segunda-feira";
        break;

    case 3:
        echo "Terça-feira";
        break;

    case 4:
        echo "Quarta-feira";
        break;

    case 5:
        echo "Quinta-feira";
        break;

    case 6:
        echo "Sexta-feira";
        break;

    case 7:
        echo "Sábado";
        break;

    default:
        echo "Dia inválido";
}

?>
```

Resultado:

Terça-feira.

**Explicação:**

A variável `$dia` recebe o valor 3.

O SWITCH verifica os casos disponíveis até encontrar o valor correspondente.

O comando BREAK encerra a execução do SWITCH após o caso selecionado.

O DEFAULT é executado quando nenhum dos casos corresponde ao valor informado.

### 6\. Diferença entre IF, ELSEIF e SWITCH

Embora essas estruturas tenham a finalidade de controlar decisões, existem diferenças entre elas.

| Estrutura | Finalidade |
| --- | --- |
| IF | Verificar uma condição |
| ELSE | Executar uma alternativa |
| ELSEIF | Verificar várias condições |
| SWITCH | Comparar um valor com diferentes opções |

**Quando utilizar IF e ELSE?**

Quando precisamos verificar condições que envolvem comparações, intervalos e operadores lógicos.

**Quando utilizar ELSEIF?**

Quando existem várias condições que precisam ser verificadas em sequência.

**Quando utilizar SWITCH?**

Quando precisamos comparar uma mesma expressão com diferentes valores possíveis.

### 7\. Utilizando operadores lógicos nas estruturas condicionais

As estruturas condicionais podem trabalhar em conjunto com operadores lógicos.

Os principais operadores são:

| Operador | Significado |
| --- | --- |
| && | E lógico |
| \|\| | OU lógico |
| \! | NÃO lógico |

**Exemplo com AND (&&):**

php

```php
<?php

$idade = 25;
$documento = true;

if ($idade >= 18 && $documento == true) {
    echo "Cadastro autorizado";
} else {
    echo "Cadastro não autorizado";
}

?>
```

As duas condições precisam ser verdadeiras para autorizar o cadastro.

**Exemplo com OR (||):**

php

```php
<?php

$administrador = false;
$gerente = true;

if ($administrador || $gerente) {
    echo "Acesso permitido";
} else {
    echo "Acesso negado";
}

?>
```

Nesse caso, basta uma das condições ser verdadeira.

### 8\. Estruturas condicionais aninhadas

Uma estrutura condicional aninhada ocorre quando colocamos um IF dentro de outro IF.

Isso permite realizar verificações mais específicas.

**Exemplo:**

php

```php
<?php

$idade = 25;
$cadastro_ativo = true;

if ($idade >= 18) {

    if ($cadastro_ativo == true) {
        echo "Acesso liberado!";
    } else {
        echo "Cadastro inativo!";
    }

} else {
    echo "Acesso permitido somente para maiores de idade.";
}

?>
```

**Explicação:**

1. O programa verifica se a pessoa possui idade igual ou superior a 18 anos.
2. Se a condição for verdadeira, verifica se o cadastro está ativo.
3. Se as duas condições forem atendidas, libera o acesso.

### 9\. SWITCH com múltiplos casos

O SWITCH permite agrupar diferentes casos que devem executar o mesmo bloco de código.

**Exemplo:**

php

```php
<?php

$dia = 6;

switch ($dia) {

    case 2:
    case 3:
    case 4:
    case 5:
    case 6:
        echo "Dia útil";
        break;

    case 1:
    case 7:
        echo "Final de semana";
        break;

    default:
        echo "Dia inválido";
}

?>
```

Resultado:

Dia útil.

Essa técnica evita repetir o mesmo código em vários casos.

### 10\. SWITCH com match: alternativa moderna

A partir do PHP 8.0, existe também a expressão MATCH.

Ela permite comparar um valor com diferentes possibilidades e retornar um resultado.

Exemplo:

php

```php
<?php

$opcao = 2;

$resultado = match ($opcao) {
    1 => "Cadastrar",
    2 => "Consultar",
    3 => "Excluir",
    default => "Opção inválida"
};

echo $resultado;

?>
```

Resultado:

Consultar.

**Diferenças entre SWITCH e MATCH:**

- MATCH é uma expressão e retorna um valor.
- MATCH utiliza comparação estrita.
- MATCH não precisa de BREAK.
- SWITCH é uma estrutura de controle tradicional.

### 11\. Exemplo prático: sistema de aprovação escolar

Neste exemplo, utilizaremos IF, ELSEIF e ELSE para verificar a situação de um aluno.

**Regras:**

- Nota igual ou superior a 7: aprovado.
- Nota entre 5 e 6,9: recuperação.
- Nota inferior a 5: reprovado.

php

```php
<?php

$nome = "Carlos";
$nota = 8.5;

echo "Aluno: $nome <br>";
echo "Nota: $nota <br>";

if ($nota >= 7) {

    echo "Situação: Aprovado";

} elseif ($nota >= 5) {

    echo "Situação: Recuperação";

} else {

    echo "Situação: Reprovado";

}

?>
```

### 12\. Exemplo prático: sistema de menu

Neste exemplo, utilizaremos SWITCH para criar um menu de opções.

php

```php
<?php

$opcao = 2;

switch ($opcao) {

    case 1:
        echo "Cadastrar usuário";
        break;

    case 2:
        echo "Consultar usuários";
        break;

    case 3:
        echo "Alterar cadastro";
        break;

    case 4:
        echo "Excluir cadastro";
        break;

    case 5:
        echo "Sair do sistema";
        break;

    default:
        echo "Opção inválida";

}

?>
```

### 13\. Exemplo prático: calculadora utilizando SWITCH

O programa realiza operações matemáticas conforme a opção selecionada.

php

```php
<?php

$numero1 = 20;
$numero2 = 5;
$operacao = "multiplicar";

switch ($operacao) {

    case "somar":
        $resultado = $numero1 + $numero2;
        break;

    case "subtrair":
        $resultado = $numero1 - $numero2;
        break;

    case "multiplicar":
        $resultado = $numero1 * $numero2;
        break;

    case "dividir":

        if ($numero2 != 0) {
            $resultado = $numero1 / $numero2;
        } else {
            echo "Não é possível dividir por zero.";
            exit;
        }

        break;

    default:
        echo "Operação inválida.";
        exit;
}

echo "Resultado: $resultado";

?>
```

Resultado:

100.

### 14\. Cuidados e boas práticas

Ao trabalhar com estruturas condicionais, é importante observar algumas recomendações:

1. Utilizar condições claras e objetivas.
2. Organizar corretamente as chaves `{}`.
3. Evitar condições desnecessárias.
4. Utilizar parênteses para facilitar a leitura.
5. Preferir comparações estritas quando apropriado.
6. Verificar se todas as possibilidades importantes foram consideradas.
7. Utilizar DEFAULT no SWITCH para tratar opções não previstas.
8. Validar dados recebidos de formulários antes de utilizá-los.
9. Evitar estruturas condicionais excessivamente complexas.

### 15\. Exercícios práticos

**Exercício 1 – Verificação de idade**

Crie um programa que receba uma idade e informe se a pessoa é:

- Menor de idade.
- Maior de idade.

Utilize IF e ELSE.

**Exercício 2 – Aprovação escolar**

Crie um programa que receba uma nota e informe:

- Aprovado: nota igual ou superior a 7.
- Recuperação: nota entre 5 e 6,9.
- Reprovado: nota inferior a 5.

Utilize IF, ELSEIF e ELSE.

**Exercício 3 – Dia da semana**

Crie uma variável com um número de 1 a 7 e utilize SWITCH para apresentar o dia correspondente.

**Exercício 4 – Calculadora**

Crie um programa que receba dois números e uma operação matemática. Utilize SWITCH para executar a operação selecionada.

**Exercício 5 – Sistema de acesso**

Crie duas variáveis:

- `$usuario_ativo`.
- `$senha_correta`.

Utilize IF e operadores lógicos para verificar se o usuário pode acessar o sistema.

**Exercício 6 – Classificação de idade**

Crie um programa que classifique uma pessoa em:

- Criança: até 11 anos.
- Adolescente: de 12 a 17 anos.
- Adulto: de 18 a 59 anos.
- Idoso: 60 anos ou mais.

Utilize IF e ELSEIF. Considere somente idades válidas.

**Exercício 7 – Menu de opções**

Crie um menu com as seguintes opções:

1. Cadastrar.
2. Consultar.
3. Atualizar.
4. Excluir.
5. Sair.

Utilize SWITCH para executar a opção escolhida.

### 16\. Projeto prático: Sistema de gerenciamento escolar

Desenvolva um programa em PHP para gerenciar a situação acadêmica de um estudante.

**Requisitos:**

1. Criar uma variável para o nome do aluno.
2. Criar três variáveis para armazenar as notas.
3. Calcular a média.
4. Verificar a situação do aluno.
5. Utilizar IF, ELSEIF e ELSE.
6. Exibir o nome, as notas, a média e o resultado.

**Critérios:**

- Média igual ou superior a 7: aprovado.
- Média entre 5 e 6,9: recuperação.
- Média inferior a 5: reprovado.

**Exemplo de solução:**

php

```php
<?php

$nome = "Mariana";

$nota1 = 8;
$nota2 = 7;
$nota3 = 9;

$media = ($nota1 + $nota2 + $nota3) / 3;

echo "Nome: $nome <br>";
echo "Nota 1: $nota1 <br>";
echo "Nota 2: $nota2 <br>";
echo "Nota 3: $nota3 <br>";

echo "Média: " . number_format($media, 2) . "<br>";

if ($media >= 7) {

    echo "Resultado: Aprovado!";

} elseif ($media >= 5) {

    echo "Resultado: Recuperação!";

} else {

    echo "Resultado: Reprovado!";

}

?>
```

### 17\. Conclusão

As estruturas condicionais são fundamentais para desenvolver programas capazes de tomar decisões.

Com o domínio de IF, ELSE, ELSEIF e SWITCH, o estudante consegue criar sistemas mais inteligentes, que respondem de maneira diferente de acordo com as informações recebidas.

Esses conhecimentos são essenciais para desenvolver sistemas de cadastro, controle de acesso, gerenciamento escolar, comércio eletrônico e aplicações empresariais.

A prática constante dos exercícios apresentados ajudará a desenvolver o raciocínio lógico e a capacidade de resolver problemas utilizando PHP.

### 18\. Referências bibliográficas e materiais de apoio

- Documentação oficial do PHP: [https://www.php.net/manual/pt\_BR/](<https://www.php.net/manual/pt_BR/>)
- Estruturas de controle: [https://www.php.net/manual/pt\_BR/language.control-structures.php](<https://www.php.net/manual/pt_BR/language.control-structures.php>)
- IF: [https://www.php.net/manual/pt\_BR/control-structures.if.php](<https://www.php.net/manual/pt_BR/control-structures.if.php>)
- SWITCH: [https://www.php.net/manual/pt\_BR/control-structures.switch.php](<https://www.php.net/manual/pt_BR/control-structures.switch.php>)
- MATCH: [https://www.php.net/manual/pt\_BR/control-structures.match.php](<https://www.php.net/manual/pt_BR/control-structures.match.php>)

