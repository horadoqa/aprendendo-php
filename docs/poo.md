# PROGRAMAÇÃO ORIENTADA A OBJETOS (POO) EM PHP

## 1\. Introdução à Programação Orientada a Objetos

A Programação Orientada a Objetos, conhecida pela sigla POO, é um paradigma de programação que organiza o desenvolvimento de sistemas utilizando classes e objetos.

Em vez de desenvolver todo o código em uma sequência de instruções, a POO permite organizar o programa em estruturas que representam entidades do mundo real.

Por exemplo, em um sistema escolar podemos ter:

- Aluno.
- Professor.
- Curso.
- Disciplina.
- Turma.
- Matrícula.

Cada entidade pode ser representada por uma classe, contendo características e comportamentos.

A Programação Orientada a Objetos é utilizada em diversas linguagens, como PHP, Java, Python, C#, JavaScript e C++.

### 1.1. O que é POO?

POO é uma maneira de desenvolver programas utilizando objetos que possuem características e comportamentos.

Uma classe define a estrutura de um objeto, enquanto um objeto é uma instância dessa classe.

Exemplo:

Uma classe chamada `Aluno` pode possuir:

**Características:**

- Nome.
- Idade.
- E-mail.
- Curso.

**Comportamentos:**

- Cadastrar aluno.
- Exibir informações.
- Atualizar dados.
- Realizar matrícula.

### 1.2. Vantagens da POO

A utilização da Programação Orientada a Objetos apresenta diversas vantagens:

1. Organização do código.
2. Reutilização de código.
3. Facilidade de manutenção.
4. Melhor divisão de responsabilidades.
5. Segurança por meio do encapsulamento.
6. Facilidade para desenvolver sistemas grandes.
7. Redução da repetição de código.
8. Facilidade para trabalhar em equipe.

## 2\. Diferença entre programação procedural e orientação a objetos

Na programação procedural, o código é organizado principalmente por meio de instruções e funções.

Na orientação a objetos, o código é organizado utilizando classes e objetos.

### Exemplo de programação procedural

php

```php
<?php

$nome = "Carlos";
$idade = 20;

function apresentarAluno($nome, $idade) {

    echo "Nome: " . $nome . "<br>";

    echo "Idade: " . $idade;

}

apresentarAluno($nome, $idade);

?>
```

### Exemplo de programação orientada a objetos

php

```php
<?php

class Aluno {

    public $nome;

    public $idade;

    public function apresentar() {

        echo "Nome: " . $this->nome . "<br>";

        echo "Idade: " . $this->idade;

    }

}

$aluno = new Aluno();

$aluno->nome = "Carlos";

$aluno->idade = 20;

$aluno->apresentar();

?>
```

Observe que, na POO, reunimos os dados e os comportamentos relacionados dentro de uma mesma estrutura.

## 3\. Classes em PHP

Uma classe é uma estrutura que define as características e os comportamentos dos objetos.

Para criar uma classe em PHP, utilizamos a palavra-chave `class`.

### Exemplo:

php

```php
<?php

class Pessoa {

    public $nome;

    public $idade;

    public $cidade;

}

?>
```

Nesse exemplo, criamos uma classe chamada `Pessoa`.

Ela possui três atributos:

- Nome.
- Idade.
- Cidade.

Os atributos representam as características dos objetos criados a partir da classe.

### 3.1. Criando uma classe Aluno

php

```php
<?php

class Aluno {

    public $nome;

    public $email;

    public $curso;

    public $idade;

}

?>
```

Essa classe representa um aluno de uma instituição de ensino.

## 4\. Objetos em PHP

Um objeto é uma instância de uma classe.

Para criar um objeto, utilizamos a palavra-chave `new`.

### Exemplo:

php

```php
<?php

class Pessoa {

    public $nome;

    public $idade;

}

$pessoa1 = new Pessoa();

$pessoa1->nome = "Maria";

$pessoa1->idade = 25;

echo $pessoa1->nome;

echo "<br>";

echo $pessoa1->idade;

?>
```

Explicação:

- `class Pessoa`: cria a classe.
- `new Pessoa()`: cria um objeto.
- `$pessoa1`: variável que armazena o objeto.
- `->`: operador utilizado para acessar atributos e métodos do objeto.

### 4.1. Criando vários objetos

Uma mesma classe pode gerar vários objetos.

php

```php
<?php

class Aluno {

    public $nome;

    public $curso;

}

$aluno1 = new Aluno();

$aluno1->nome = "Carlos";

$aluno1->curso = "Informática";


$aluno2 = new Aluno();

$aluno2->nome = "Maria";

$aluno2->curso = "Administração";


$aluno3 = new Aluno();

$aluno3->nome = "João";

$aluno3->curso = "Programação";


echo $aluno1->nome;

echo "<br>";

echo $aluno2->nome;

echo "<br>";

echo $aluno3->nome;

?>
```

Cada objeto possui seus próprios valores, mesmo pertencendo à mesma classe.

## 5\. Atributos e propriedades

Atributos ou propriedades são variáveis declaradas dentro de uma classe.

Eles representam as características de um objeto.

### Exemplo:

php

```php
<?php

class Produto {

    public $nome;

    public $preco;

    public $quantidade;

}

$produto = new Produto();

$produto->nome = "Notebook";

$produto->preco = 3500;

$produto->quantidade = 10;

echo $produto->nome;

?>
```

Nesse exemplo, temos três propriedades:

- `$nome`.
- `$preco`.
- `$quantidade`.

## 6\. Métodos em PHP

Métodos são funções declaradas dentro de uma classe.

Eles representam os comportamentos ou as ações que um objeto pode executar.

### Exemplo:

php

```php
<?php

class Pessoa {

    public $nome;

    public function apresentar() {

        echo "Olá! Meu nome é " . $this->nome;

    }

}

$pessoa = new Pessoa();

$pessoa->nome = "Carlos";

$pessoa->apresentar();

?>
```

Nesse exemplo, criamos o método `apresentar()`.

O método utiliza `$this` para acessar a propriedade do próprio objeto.

### 6.1. Métodos com parâmetros

php

```php
<?php

class Calculadora {

    public function somar($numero1, $numero2) {

        return $numero1 + $numero2;

    }

}

$calculadora = new Calculadora();

$resultado = $calculadora->somar(10, 20);

echo $resultado;

?>
```

Resultado:

text

```text
30
```

### 6.2. Métodos com retorno

A palavra-chave `return` permite devolver um resultado produzido pelo método.

php

```php
<?php

class Calculadora {

    public function multiplicar($a, $b) {

        return $a * $b;

    }

}

$calc = new Calculadora();

echo $calc->multiplicar(5, 4);

?>
```

Resultado:

text

```text
20
```

## 7\. O construtor \_\_construct()

O construtor é um método especial executado automaticamente quando um objeto é criado.

Em PHP, utilizamos `__construct()`.

Ele normalmente é utilizado para inicializar as propriedades de um objeto.

### Exemplo:

php

```php
<?php

class Aluno {

    public $nome;

    public $idade;

    public function __construct($nome, $idade) {

        $this->nome = $nome;

        $this->idade = $idade;

    }

    public function apresentar() {

        echo "Nome: " . $this->nome . "<br>";

        echo "Idade: " . $this->idade;

    }

}

$aluno = new Aluno("Carlos", 20);

$aluno->apresentar();

?>
```

Explicação:

Quando executamos:

php

```php
$aluno = new Aluno("Carlos", 20);
```

O construtor recebe os valores e inicializa as propriedades do objeto.

### 7.1. Construtor com valores padrão

php

```php
<?php

class Produto {

    public $nome;

    public $preco;

    public function __construct(
        $nome = "Produto não informado",
        $preco = 0
    ) {

        $this->nome = $nome;

        $this->preco = $preco;

    }

}

$produto = new Produto();

echo $produto->nome;

?>
```

## 8\. O operador $this

O operador `$this` representa o próprio objeto que está executando determinado método.

Ele permite acessar propriedades e outros métodos da mesma instância.

### Exemplo:

php

```php
<?php

class Pessoa {

    public $nome;

    public function definirNome($nome) {

        $this->nome = $nome;

    }

    public function mostrarNome() {

        return $this->nome;

    }

}

$pessoa = new Pessoa();

$pessoa->definirNome("Maria");

echo $pessoa->mostrarNome();

?>
```

O operador `$this` é muito utilizado na programação orientada a objetos em PHP.

## 9\. Encapsulamento

Encapsulamento é um dos principais conceitos da POO.

Ele consiste em controlar o acesso às propriedades e aos métodos de uma classe.

Em PHP, utilizamos três modificadores de acesso:

| Modificador | Acesso |
| --- | --- |
| public | Acessível de qualquer lugar |
| private | Acessível somente dentro da própria classe |
| protected | Acessível na própria classe e nas classes derivadas |

### 9.1. Modificador public

php

```php
<?php

class Pessoa {

    public $nome;

}

$pessoa = new Pessoa();

$pessoa->nome = "Carlos";

echo $pessoa->nome;

?>
```

A propriedade pode ser acessada diretamente.

### 9.2. Modificador private

php

```php
<?php

class Conta {

    private $saldo = 1000;

    public function consultarSaldo() {

        return $this->saldo;

    }

}

$conta = new Conta();

echo $conta->consultarSaldo();

?>
```

A propriedade `$saldo` não pode ser acessada diretamente fora da classe.

### 9.3. Modificador protected

php

```php
<?php

class Pessoa {

    protected $nome = "Maria";

}

class Aluno extends Pessoa {

    public function mostrarNome() {

        return $this->nome;

    }

}

$aluno = new Aluno();

echo $aluno->mostrarNome();

?>
```

A propriedade protegida pode ser utilizada pela classe derivada.

## 10\. Getters e Setters

Getters e Setters são métodos utilizados para consultar e modificar propriedades privadas ou protegidas.

- Getter: recupera o valor de uma propriedade.
- Setter: modifica o valor de uma propriedade.

### Exemplo:

php

```php
<?php

class Pessoa {

    private $nome;

    public function setNome($nome) {

        $this->nome = $nome;

    }

    public function getNome() {

        return $this->nome;

    }

}

$pessoa = new Pessoa();

$pessoa->setNome("Carlos");

echo $pessoa->getNome();

?>
```

Os métodos permitem controlar como os dados são acessados e modificados.

## 11\. Herança

Herança é o mecanismo que permite que uma classe aproveite propriedades e métodos de outra classe.

A classe que fornece os recursos é chamada de classe-pai.

A classe que recebe esses recursos é chamada de classe-filha.

Em PHP, utilizamos a palavra-chave `extends`.

### Exemplo:

php

```php
<?php

class Pessoa {

    public $nome;

    public function apresentar() {

        echo "Meu nome é " . $this->nome;

    }

}

class Aluno extends Pessoa {

    public $curso;

}

$aluno = new Aluno();

$aluno->nome = "Carlos";

$aluno->curso = "Informática";

$aluno->apresentar();

?>
```

Nesse exemplo:

- `Pessoa` é a classe-pai.
- `Aluno` é a classe-filha.
- `Aluno` herda a propriedade e o método acessíveis da classe `Pessoa`.

### 11.1. Herança com construtores

php

```php
<?php

class Pessoa {

    protected $nome;

    public function __construct($nome) {

        $this->nome = $nome;

    }

}

class Professor extends Pessoa {

    private $disciplina;

    public function __construct($nome, $disciplina) {

        parent::__construct($nome);

        $this->disciplina = $disciplina;

    }

    public function apresentar() {

        echo $this->nome . " - " . $this->disciplina;

    }

}

$professor = new Professor(
    "João",
    "Programação"
);

$professor->apresentar();

?>
```

A palavra-chave `parent` permite acessar métodos da classe-pai.

## 12\. Polimorfismo

Polimorfismo significa a possibilidade de diferentes classes implementarem comportamentos específicos para uma mesma operação.

Uma forma comum de utilizar polimorfismo em PHP é por meio da sobrescrita de métodos.

### Exemplo:

php

```php
<?php

class Animal {

    public function emitirSom() {

        echo "Som do animal";

    }

}

class Cachorro extends Animal {

    public function emitirSom() {

        echo "Au Au";

    }

}

class Gato extends Animal {

    public function emitirSom() {

        echo "Miau";

    }

}

$cachorro = new Cachorro();

$gato = new Gato();

$cachorro->emitirSom();

echo "<br>";

$gato->emitirSom();

?>
```

Resultado:

text

```text
Au Au
Miau
```

Cada classe implementa o método `emitirSom()` de maneira diferente.

## 13\. Abstração

Abstração consiste em representar somente as características e os comportamentos relevantes de determinada entidade.

Em PHP, podemos utilizar classes abstratas para definir estruturas que serão implementadas por outras classes.

Uma classe abstrata não pode ser instanciada diretamente.

### Exemplo:

php

```php
<?php

abstract class Funcionario {

    protected $nome;

    public function __construct($nome) {

        $this->nome = $nome;

    }

    abstract public function calcularSalario();

}

class FuncionarioMensalista extends Funcionario {

    public function calcularSalario() {

        return 3000;

    }

}

$funcionario = new FuncionarioMensalista("Carlos");

echo $funcionario->calcularSalario();

?>
```

A classe abstrata define uma estrutura que deve ser completada pelas classes concretas.

## 14\. Interfaces

Uma interface define um conjunto de métodos que uma classe deve implementar.

Em PHP, utilizamos a palavra-chave `interface`.

### Exemplo:

php

```php
<?php

interface Pagamento {

    public function processarPagamento($valor);

}

class Cartao implements Pagamento {

    public function processarPagamento($valor) {

        echo "Pagamento de R$ " . $valor;

    }

}

$pagamento = new Cartao();

$pagamento->processarPagamento(150);

?>
```

A classe que implementa uma interface deve fornecer os métodos exigidos por ela.

Uma classe pode implementar várias interfaces.

## 15\. Métodos e propriedades estáticas

Membros estáticos pertencem à classe, e não a uma instância específica.

Em PHP, utilizamos a palavra-chave `static`.

Para acessar membros estáticos, utilizamos o operador `::`.

### Exemplo:

php

```php
<?php

class Calculadora {

    public static $versao = "1.0";

    public static function somar($a, $b) {

        return $a + $b;

    }

}

echo Calculadora::$versao;

echo "<br>";

echo Calculadora::somar(10, 20);

?>
```

Não precisamos criar um objeto para acessar o método estático.

## 16\. Constantes em classes

Constantes são valores que não podem ser alterados durante a execução.

Em classes PHP, podemos declarar constantes utilizando `const`.

### Exemplo:

php

```php
<?php

class Sistema {

    public const NOME = "Sistema Escolar";

    public const VERSAO = "1.0";

}

echo Sistema::NOME;

echo "<br>";

echo Sistema::VERSAO;

?>
```

## 17\. Tratamento de exceções

Exceções permitem tratar situações inesperadas durante a execução de um programa.

Em PHP, utilizamos:

- try.
- catch.
- finally.
- throw.

### Exemplo:

php

```php
<?php

function dividir($a, $b) {

    if ($b == 0) {

        throw new Exception(
            "Não é possível dividir por zero."
        );

    }

    return $a / $b;

}

try {

    echo dividir(10, 0);

} catch (Exception $e) {

    echo "Erro: " . $e->getMessage();

}

?>
```

O bloco `try` executa o código que pode gerar uma exceção.

O bloco `catch` captura e trata a exceção.

O bloco `finally`, quando utilizado, executa independentemente de ocorrer ou não uma exceção.

## 18\. Tipagem de propriedades e métodos

PHP permite declarar tipos para propriedades, parâmetros e valores retornados por métodos.

### Exemplo:

php

```php
<?php

class Produto {

    public string $nome;

    public float $preco;

    public function definirPreco(float $preco): void {

        $this->preco = $preco;

    }

    public function consultarPreco(): float {

        return $this->preco;

    }

}

$produto = new Produto();

$produto->nome = "Notebook";

$produto->definirPreco(3500.00);

echo $produto->consultarPreco();

?>
```

Alguns tipos utilizados em PHP:

- `int`: números inteiros.
- `float`: números decimais.
- `string`: textos.
- `bool`: valores booleanos.
- `array`: arrays.
- `object`: objetos.
- `?string`: texto ou null.
- `void`: método sem valor de retorno.

## 19\. Namespace em PHP

Namespaces permitem organizar classes, interfaces, funções e outros elementos em espaços de nomes.

Eles ajudam a evitar conflitos entre nomes iguais.

### Exemplo:

php

```php
<?php

namespace Sistema\Model;

class Aluno {

    public function apresentar() {

        echo "Aluno do sistema";

    }

}

?>
```

Para utilizar essa classe em outro arquivo:

php

```php
<?php

require_once "Aluno.php";

use Sistema\Model\Aluno;

$aluno = new Aluno();

$aluno->apresentar();

?>
```

Namespaces são muito utilizados em projetos profissionais.

## 20\. Autoload e Composer

Em projetos maiores, não é interessante utilizar dezenas de comandos `require_once` manualmente.

O Composer é um gerenciador de dependências para PHP e oferece suporte ao carregamento automático de classes.

Exemplo de estrutura:

text

```text
projeto/
│
├── src/
│   └── Aluno.php
│
├── vendor/
│
├── composer.json
│
└── index.php
```

Um exemplo de configuração do arquivo `composer.json`:

json

```json
{
    "autoload": {
        "psr-4": {
            "App\\": "src/"
        }
    }
}
```

Após configurar o autoload, execute:

bash

```bash
composer dump-autoload
```

No arquivo principal:

php

```php
<?php

require_once "vendor/autoload.php";

use App\Aluno;

?>
```

Dessa forma, o Composer carrega automaticamente as classes conforme suas configurações.

## 21\. Trabalhando com POO e MySQL

Agora vamos aplicar os conceitos aprendidos em um projeto prático.

Vamos desenvolver uma classe responsável por conectar o PHP ao MySQL.

Arquivo `Database.php`:

php

```php
<?php

class Database {

    private PDO $conexao;

    public function __construct() {

        $host = "localhost";

        $banco = "sistema_crud";

        $usuario = "root";

        $senha = "";

        $this->conexao = new PDO(
            "mysql:host=$host;dbname=$banco;charset=utf8mb4",
            $usuario,
            $senha
        );

        $this->conexao->setAttribute(
            PDO::ATTR_ERRMODE,
            PDO::ERRMODE_EXCEPTION
        );

    }

    public function getConexao(): PDO {

        return $this->conexao;

    }

}
```

Agora podemos utilizar a classe para estabelecer a conexão com o banco de dados.

php

```php
<?php

require_once "Database.php";

$db = new Database();

$pdo = $db->getConexao();

echo "Conexão realizada com sucesso!";

?>
```

## 22\. Projeto prático: Sistema de Gerenciamento de Alunos com POO

Vamos desenvolver um sistema utilizando Programação Orientada a Objetos.

O sistema permitirá:

1. Cadastrar alunos.
2. Listar alunos.
3. Consultar alunos.
4. Editar informações.
5. Excluir registros.

### 22.1. Estrutura do projeto

text

```text
sistema_poo/
│
├── config/
│   └── Database.php
│
├── models/
│   └── Aluno.php
│
├── controllers/
│   └── AlunoController.php
│
├── views/
│   ├── listar.php
│   ├── cadastrar.php
│   └── editar.php
│
└── index.php
```

Essa estrutura separa as responsabilidades do sistema.

### 22.2. Criando a classe Database

Arquivo `config/Database.php`:

php

```php
<?php

class Database {

    private PDO $conexao;

    public function __construct() {

        $this->conexao = new PDO(
            "mysql:host=localhost;dbname=sistema_crud;charset=utf8mb4",
            "root",
            ""
        );

        $this->conexao->setAttribute(
            PDO::ATTR_ERRMODE,
            PDO::ERRMODE_EXCEPTION
        );

    }

    public function conectar(): PDO {

        return $this->conexao;

    }

}
```

### 22.3. Criando a classe Aluno

Arquivo `models/Aluno.php`:

php

```php
<?php

class Aluno {

    private PDO $pdo;

    public function __construct(PDO $pdo) {

        $this->pdo = $pdo;

    }

    public function cadastrar(
        string $nome,
        string $email,
        string $telefone,
        string $curso,
        int $idade
    ): bool {

        $sql = "INSERT INTO alunos
                (nome, email, telefone, curso, idade)
                VALUES
                (:nome, :email, :telefone, :curso, :idade)";

        $stmt = $this->pdo->prepare($sql);

        return $stmt->execute([

            ":nome" => $nome,

            ":email" => $email,

            ":telefone" => $telefone,

            ":curso" => $curso,

            ":idade" => $idade

        ]);

    }

    public function listar(): array {

        $sql = "SELECT * FROM alunos ORDER BY id DESC";

        $stmt = $this->pdo->query($sql);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);

    }

    public function buscarPorId(int $id): array|false {

        $sql = "SELECT * FROM alunos WHERE id = :id";

        $stmt = $this->pdo->prepare($sql);

        $stmt->execute([":id" => $id]);

        return $stmt->fetch(PDO::FETCH_ASSOC);

    }

    public function atualizar(
        int $id,
        string $nome,
        string $email,
        string $telefone,
        string $curso,
        int $idade
    ): bool {

        $sql = "UPDATE alunos SET
                nome = :nome,
                email = :email,
                telefone = :telefone,
                curso = :curso,
                idade = :idade
                WHERE id = :id";

        $stmt = $this->pdo->prepare($sql);

        return $stmt->execute([

            ":id" => $id,

            ":nome" => $nome,

            ":email" => $email,

            ":telefone" => $telefone,

            ":curso" => $curso,

            ":idade" => $idade

        ]);

    }

    public function excluir(int $id): bool {

        $sql = "DELETE FROM alunos WHERE id = :id";

        $stmt = $this->pdo->prepare($sql);

        return $stmt->execute([

            ":id" => $id

        ]);

    }

}
```

Observe que a classe `Aluno` reúne os métodos responsáveis pela manipulação dos dados.

### 22.4. Criando o controlador

Arquivo `controllers/AlunoController.php`:

php

```php
<?php

class AlunoController {

    private Aluno $aluno;

    public function __construct(Aluno $aluno) {

        $this->aluno = $aluno;

    }

    public function listar(): array {

        return $this->aluno->listar();

    }

    public function cadastrar(
        string $nome,
        string $email,
        string $telefone,
        string $curso,
        int $idade
    ): bool {

        return $this->aluno->cadastrar(
            $nome,
            $email,
            $telefone,
            $curso,
            $idade
        );

    }

    public function editar(
        int $id,
        string $nome,
        string $email,
        string $telefone,
        string $curso,
        int $idade
    ): bool {

        return $this->aluno->atualizar(
            $id,
            $nome,
            $email,
            $telefone,
            $curso,
            $idade
        );

    }

    public function excluir(int $id): bool {

        return $this->aluno->excluir($id);

    }

}
```

O controlador faz a comunicação entre as solicitações da aplicação e a classe responsável pelos dados.

### 22.5. Criando o arquivo principal

Arquivo `index.php`:

php

```php
<?php

require_once "config/Database.php";

require_once "models/Aluno.php";

require_once "controllers/AlunoController.php";

$db = new Database();

$pdo = $db->conectar();

$model = new Aluno($pdo);

$controller = new AlunoController($model);

$alunos = $controller->listar();

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">

    <title>Sistema Escolar POO</title>

</head>

<body>

    <h1>Gerenciamento de Alunos</h1>

    <a href="views/cadastrar.php">
        Novo Aluno
    </a>

    <table border="1" cellpadding="10">

        <tr>

            <th>ID</th>

            <th>Nome</th>

            <th>E-mail</th>

            <th>Curso</th>

            <th>Idade</th>

        </tr>

        <?php foreach ($alunos as $aluno): ?>

        <tr>

            <td><?= $aluno["id"] ?></td>

            <td>
                <?= htmlspecialchars($aluno["nome"], ENT_QUOTES, "UTF-8") ?>
            </td>

            <td>
                <?= htmlspecialchars($aluno["email"], ENT_QUOTES, "UTF-8") ?>
            </td>

            <td>
                <?= htmlspecialchars($aluno["curso"], ENT_QUOTES, "UTF-8") ?>
            </td>

            <td><?= $aluno["idade"] ?></td>

        </tr>

        <?php endforeach; ?>

    </table>

</body>

</html>
```

O arquivo principal estabelece a conexão, instancia as classes e solicita a listagem dos alunos.

Esse exemplo demonstra a organização inicial em objetos. Para completar o CRUD, os formulários e controladores de cadastro, edição e exclusão também devem ser conectados, com validação de dados, autenticação e proteção CSRF.

## 23\. Boas práticas de programação orientada a objetos

Ao desenvolver sistemas PHP utilizando POO, procure seguir estas recomendações:

1. Utilize nomes claros para classes e métodos.
2. Prefira propriedades privadas quando o acesso direto não for necessário.
3. Utilize construtores para inicializar objetos.
4. Evite classes com responsabilidades excessivas.
5. Reaproveite código por meio de métodos e composição.
6. Utilize interfaces quando precisar definir contratos.
7. Utilize tratamento de exceções.
8. Organize classes utilizando namespaces.
9. Utilize Composer para gerenciar dependências.
10. Mantenha a lógica de negócio separada da apresentação.

## 24\. Exercícios práticos

### Exercício 1 – Classe Pessoa

Crie uma classe chamada `Pessoa` com:

- Nome.
- Idade.
- Cidade.

Crie um método para apresentar as informações.

### Exercício 2 – Classe Produto

Crie uma classe chamada `Produto` com:

- Nome.
- Preço.
- Quantidade.

Crie métodos para calcular o valor total do estoque.

### Exercício 3 – Classe Calculadora

Desenvolva uma classe com métodos para:

- Somar.
- Subtrair.
- Multiplicar.
- Dividir.

### Exercício 4 – Classe Aluno

Crie uma classe `Aluno` contendo:

- Nome.
- Matrícula.
- Curso.
- Nota.

Crie métodos para calcular a situação do aluno.

### Exercício 5 – Encapsulamento

Crie uma classe `ContaBancaria` com saldo privado.

Implemente métodos para:

- Depositar.
- Sacar.
- Consultar saldo.

Impeça saques com valor inválido ou superior ao saldo disponível.

### Exercício 6 – Herança

Crie uma classe `Pessoa` e duas classes derivadas:

- Aluno.
- Professor.

Cada classe deverá possuir características específicas.

### Exercício 7 – Polimorfismo

Crie uma classe abstrata `Animal` e implemente as classes:

- Cachorro.
- Gato.
- Cavalo.

Cada classe deverá possuir seu próprio método para emitir sons.

### Exercício 8 – Interfaces

Crie uma interface chamada `Pagamento`.

Implemente as classes:

- PagamentoCartao.
- PagamentoPix.
- PagamentoBoleto.

### Exercício 9 – Sistema de funcionários

Desenvolva um sistema orientado a objetos para cadastrar e consultar funcionários.

### Exercício 10 – CRUD com POO

Reescreva um sistema CRUD desenvolvido anteriormente utilizando classes, métodos, encapsulamento e conexão PDO.

## 25\. Projeto final: Sistema de Gerenciamento Escolar com POO

Desenvolva uma aplicação completa utilizando os conceitos estudados.

### Funcionalidades obrigatórias

- Cadastro de alunos.
- Listagem de alunos.
- Edição de alunos.
- Exclusão de alunos.
- Cadastro de professores.
- Cadastro de cursos.
- Cadastro de disciplinas.
- Consulta de informações.
- Pesquisa de registros.

### Requisitos técnicos

- Programação Orientada a Objetos.
- Classes e objetos.
- Construtores.
- Encapsulamento.
- Herança.
- Polimorfismo.
- Interfaces.
- Classes abstratas.
- PDO.
- MySQL.
- HTML5.
- CSS3.
- Validação de formulários.
- Proteção CSRF.
- Organização de arquivos.

### Desafio adicional

Organize o sistema utilizando o padrão MVC e Composer.

O projeto deverá apresentar uma arquitetura organizada, separando modelos, controladores e visualizações.

## 26\. Conclusão

A Programação Orientada a Objetos é um dos conhecimentos fundamentais para o desenvolvimento de aplicações modernas com PHP.

Por meio de classes e objetos, podemos organizar melhor o código, reutilizar funcionalidades e desenvolver sistemas mais fáceis de manter.

Nesta apostila, estudamos os principais conceitos da POO:

- Classes e objetos.
- Atributos e métodos.
- Construtores.
- Encapsulamento.
- Getters e Setters.
- Herança.
- Polimorfismo.
- Abstração.
- Interfaces.
- Métodos estáticos.
- Constantes.
- Exceções.
- Tipagem.
- Namespaces.
- Composer.

Também iniciamos a construção de um sistema escolar utilizando PHP orientado a objetos e MySQL.

Dominar esses conceitos representa um passo importante para evoluir do desenvolvimento procedural para a construção de aplicações profissionais.

## 27\. Referências e materiais de apoio

- Manual oficial do PHP: [https://www.php.net/manual/pt\_BR/](<https://www.php.net/manual/pt_BR/>)
- Classes e objetos: [https://www.php.net/manual/pt\_BR/language.oop5.php](<https://www.php.net/manual/pt_BR/language.oop5.php>)
- Herança: [https://www.php.net/manual/pt\_BR/language.oop5.inheritance.php](<https://www.php.net/manual/pt_BR/language.oop5.inheritance.php>)
- Interfaces: [https://www.php.net/manual/pt\_BR/language.oop5.interfaces.php](<https://www.php.net/manual/pt_BR/language.oop5.interfaces.php>)
- Traits: [https://www.php.net/manual/pt\_BR/language.oop5.traits.php](<https://www.php.net/manual/pt_BR/language.oop5.traits.php>)
- Namespaces: [https://www.php.net/manual/pt\_BR/language.namespaces.php](<https://www.php.net/manual/pt_BR/language.namespaces.php>)
- Composer: [https://getcomposer.org/doc/](<https://getcomposer.org/doc/>)

**Fim da apostila — Programação Orientada a Objetos (POO) em PHP.**

## Próxima passos

Depois de estudar POO, recomendo avançar para Arquitetura MVC com PHP e MySQL.

Nela, vamos aprender a separar um sistema em três componentes:

- Model: responsável pelos dados e regras de negócio.
- View: responsável pela interface apresentada ao usuário.
- Controller: responsável por receber e coordenar as solicitações.