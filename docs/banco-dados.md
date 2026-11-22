# BANCO DE DADOS MYSQL COM PHP

## Fundamentos, criação de bancos de dados, comandos SQL, conexão e manipulação de dados

### 1\. Introdução aos Bancos de Dados

Um banco de dados é um sistema organizado para armazenar, consultar, atualizar e excluir informações.

Os bancos de dados são utilizados em praticamente todos os sistemas informatizados.

Exemplos:

- Sistemas escolares.
- Sistemas bancários.
- Sistemas comerciais.
- Lojas virtuais.
- Sistemas hospitalares.
- Sistemas de gerenciamento de estoque.
- Sistemas de cadastro de funcionários.
- Plataformas de ensino.

Imagine um sistema escolar que precisa armazenar informações sobre alunos, professores, cursos, disciplinas e notas.

Em vez de guardar todas essas informações em arquivos separados, podemos utilizar um banco de dados para organizar e relacionar os registros.

### 2\. O que é MySQL?

O MySQL é um Sistema Gerenciador de Banco de Dados Relacional (SGBDR).

Ele utiliza a linguagem SQL (Structured Query Language) para criar, consultar e manipular informações.

Principais características:

- Armazenamento estruturado de informações.
- Organização dos dados em tabelas.
- Relacionamento entre tabelas.
- Controle de usuários e permissões.
- Suporte a transações.
- Integração com PHP.
- Utilização em aplicações web.

### 3\. O que é SQL?

SQL significa Structured Query Language, ou Linguagem de Consulta Estruturada.

É a linguagem utilizada para interagir com bancos de dados relacionais.

Os principais comandos SQL são:

| Comando | Finalidade |
| --- | --- |
| CREATE | Criar bancos de dados e tabelas |
| INSERT | Inserir registros |
| SELECT | Consultar registros |
| UPDATE | Atualizar registros |
| DELETE | Excluir registros |
| ALTER | Modificar estruturas |
| DROP | Excluir estruturas |
| TRUNCATE | Remover todos os registros de uma tabela |

### 4\. Instalando o ambiente de desenvolvimento

Para desenvolver aplicações PHP com MySQL, precisamos de um ambiente que disponibilize um servidor web, PHP e o banco de dados.

Algumas ferramentas utilizadas são:

- XAMPP.
- WampServer.
- Laragon.
- Docker.
- Servidor Linux com Apache ou Nginx e MySQL.

O XAMPP é uma opção bastante utilizada por iniciantes, pois reúne componentes necessários para desenvolver aplicações localmente.

Após a instalação, normalmente teremos:

- Apache: servidor web.
- PHP: linguagem de programação.
- MySQL ou MariaDB: servidor de banco de dados.
- phpMyAdmin: ferramenta de administração do banco de dados.

**Observação:** algumas distribuições do XAMPP utilizam MariaDB no lugar do MySQL. Ambos são sistemas relacionais compatíveis com muitos comandos SQL, mas existem diferenças entre eles.

### 5\. Acessando o phpMyAdmin

O phpMyAdmin é uma ferramenta web utilizada para administrar bancos de dados MySQL e MariaDB.

Com ele, podemos:

- Criar bancos de dados.
- Criar tabelas.
- Inserir informações.
- Consultar registros.
- Atualizar informações.
- Excluir registros.
- Executar comandos SQL.

Em um ambiente local, o acesso geralmente é feito por:

text

```text
http://localhost/phpmyadmin
```

### 6\. Criando um Banco de Dados

Para criar um banco de dados, utilizamos o comando `CREATE DATABASE`.

**Sintaxe:**

sql

```sql
CREATE DATABASE nome_do_banco;
```

**Exemplo:**

sql

```sql
CREATE DATABASE escola;
```

Nesse exemplo, criamos um banco de dados chamado `escola`.

Também podemos definir a codificação de caracteres:

sql

```sql
CREATE DATABASE escola
CHARACTER SET utf8mb4
COLLATE utf8mb4_unicode_ci;
```

A codificação `utf8mb4` permite armazenar caracteres especiais, acentos e diversos símbolos.

Para selecionar o banco de dados:

sql

```sql
USE escola;
```

### 7\. Criando uma Tabela

As tabelas são utilizadas para organizar os dados dentro de um banco de dados.

Uma tabela é composta por colunas e registros.

Exemplo de tabela de alunos:

| id | nome | email | idade |
| --- | --- | --- | --- |
| 1 | Carlos | carlos@email.com | 20 |
| 2 | Maria | maria@email.com | 22 |
| 3 | João | joao@email.com | 19 |

Para criar a tabela, utilizamos `CREATE TABLE`.

**Exemplo:**

sql

```sql
CREATE TABLE alunos (

    id INT AUTO_INCREMENT PRIMARY KEY,

    nome VARCHAR(100) NOT NULL,

    email VARCHAR(150) NOT NULL,

    idade INT,

    data_cadastro TIMESTAMP DEFAULT CURRENT_TIMESTAMP

);
```

Explicação:

- `id`: identificador do aluno.
- `INT`: tipo de dado inteiro.
- `AUTO_INCREMENT`: gera automaticamente o identificador.
- `PRIMARY KEY`: define a chave primária.
- `VARCHAR(100)`: armazena textos de até 100 caracteres.
- `NOT NULL`: impede valores nulos.
- `TIMESTAMP`: armazena informações de data e hora.

### 8\. Principais Tipos de Dados do MySQL

O MySQL oferece diferentes tipos de dados.

| Tipo | Finalidade | Exemplo |
| --- | --- | --- |
| INT | Números inteiros | 100 |
| BIGINT | Inteiros maiores | 1000000 |
| DECIMAL | Valores decimais exatos | 150.75 |
| FLOAT | Números aproximados | 12.5 |
| VARCHAR | Textos de tamanho variável | Maria |
| TEXT | Textos maiores | Descrição |
| DATE | Datas | 2026-11-22 |
| DATETIME | Data e hora | 2026-11-22 10:30:00 |
| TIMESTAMP | Data e hora com características próprias | Data de cadastro |
| BOOLEAN | Valor lógico, representado por TINYINT | 1 |

**Importante:** para valores monetários, prefira `DECIMAL`, pois oferece precisão decimal adequada para operações financeiras.

### 9\. Inserindo Dados com INSERT

Para inserir registros em uma tabela, utilizamos o comando `INSERT INTO`.

**Sintaxe:**

sql

```sql
INSERT INTO nome_tabela (campo1, campo2)
VALUES (valor1, valor2);
```

**Exemplo:**

sql

```sql
INSERT INTO alunos (nome, email, idade)
VALUES ('Carlos', 'carlos@email.com', 20);
```

Inserindo vários registros:

sql

```sql
INSERT INTO alunos (nome, email, idade)
VALUES
('Maria', 'maria@email.com', 22),
('João', 'joao@email.com', 19),
('Ana', 'ana@email.com', 21);
```

### 10\. Consultando Dados com SELECT

O comando `SELECT` permite consultar informações armazenadas no banco de dados.

**Consultar todos os registros:**

sql

```sql
SELECT * FROM alunos;
```

**Consultar campos específicos:**

sql

```sql
SELECT nome, email
FROM alunos;
```

**Consultar um registro pelo identificador:**

sql

```sql
SELECT *
FROM alunos
WHERE id = 1;
```

**Consultar alunos com idade superior a 18 anos:**

sql

```sql
SELECT *
FROM alunos
WHERE idade > 18;
```

### 11\. Utilizando WHERE

O comando `WHERE` permite estabelecer condições nas consultas.

Exemplos:

sql

```sql
SELECT * FROM alunos
WHERE idade = 20;
```

sql

```sql
SELECT * FROM alunos
WHERE idade >= 18;
```

sql

```sql
SELECT * FROM alunos
WHERE nome = 'Maria';
```

Também podemos combinar condições.

**Operador AND:**

sql

```sql
SELECT *
FROM alunos
WHERE idade >= 18 AND idade <= 25;
```

**Operador OR:**

sql

```sql
SELECT *
FROM alunos
WHERE nome = 'Maria' OR nome = 'Carlos';
```

### 12\. Utilizando ORDER BY

O comando `ORDER BY` permite ordenar os registros.

**Ordem crescente:**

sql

```sql
SELECT *
FROM alunos
ORDER BY nome ASC;
```

**Ordem decrescente:**

sql

```sql
SELECT *
FROM alunos
ORDER BY idade DESC;
```

### 13\. Utilizando LIMIT

O comando `LIMIT` permite limitar a quantidade de registros retornados.

**Exemplo:**

sql

```sql
SELECT *
FROM alunos
LIMIT 5;
```

Esse comando retorna no máximo cinco registros.

Também podemos utilizar paginação:

sql

```sql
SELECT *
FROM alunos
LIMIT 10 OFFSET 10;
```

Nesse exemplo, são ignorados os dez primeiros registros e apresentados os dez seguintes, conforme a ordenação utilizada.

### 14\. Atualizando Dados com UPDATE

Para modificar informações, utilizamos `UPDATE`.

**Sintaxe:**

sql

```sql
UPDATE tabela
SET campo = valor
WHERE condição;
```

**Exemplo:**

sql

```sql
UPDATE alunos
SET idade = 23
WHERE id = 1;
```

Esse comando modifica a idade do aluno identificado pelo número 1.

**Atenção:** sempre utilize condições adequadas em comandos UPDATE. Sem `WHERE`, todos os registros da tabela poderão ser atualizados.

### 15\. Excluindo Dados com DELETE

Para excluir registros, utilizamos `DELETE`.

**Exemplo:**

sql

```sql
DELETE FROM alunos
WHERE id = 3;
```

Esse comando exclui o aluno cujo identificador é 3.

**Atenção:** sem `WHERE`, todos os registros da tabela serão excluídos.

### 16\. Relacionamentos entre Tabelas

Em bancos de dados relacionais, podemos estabelecer relacionamentos entre tabelas.

Imagine um sistema escolar com duas tabelas:

**Tabela cursos**

| id | nome |
| --- | --- |
| 1 | Informática |
| 2 | Administração |

**Tabela alunos**

| id | nome | curso\_id |
| --- | --- | --- |
| 1 | Carlos | 1 |
| 2 | Maria | 2 |
| 3 | João | 1 |

Nesse exemplo, `curso_id` identifica o curso de cada aluno.

Para criar as tabelas:

sql

```sql
CREATE TABLE cursos (

    id INT AUTO_INCREMENT PRIMARY KEY,

    nome VARCHAR(100) NOT NULL

);

CREATE TABLE alunos (

    id INT AUTO_INCREMENT PRIMARY KEY,

    nome VARCHAR(100) NOT NULL,

    curso_id INT,

    FOREIGN KEY (curso_id)
    REFERENCES cursos(id)

);
```

A chave estrangeira permite estabelecer a relação entre as tabelas.

### 17\. Utilizando INNER JOIN

O `INNER JOIN` permite consultar informações relacionadas entre duas ou mais tabelas.

**Exemplo:**

sql

```sql
SELECT
    alunos.nome AS aluno,
    cursos.nome AS curso

FROM alunos

INNER JOIN cursos
ON alunos.curso_id = cursos.id;
```

Resultado esperado:

| aluno | curso |
| --- | --- |
| Carlos | Informática |
| Maria | Administração |
| João | Informática |

O relacionamento permite consultar informações armazenadas em tabelas diferentes.

### 18\. O que é PHP com MySQL?

PHP com MySQL é a integração entre a linguagem PHP e um sistema gerenciador de banco de dados.

Essa integração permite desenvolver aplicações que armazenam e recuperam informações permanentemente.

Exemplos:

- Cadastro de clientes.
- Cadastro de produtos.
- Sistema de login.
- Gerenciamento de funcionários.
- Controle de estoque.
- Sistemas escolares.

O PHP pode comunicar-se com o MySQL principalmente por meio de PDO ou MySQLi.

### 19\. O que é PDO?

PDO significa PHP Data Objects.

É uma extensão do PHP que oferece uma interface para trabalhar com diferentes sistemas de banco de dados.

Principais vantagens:

- Interface padronizada.
- Suporte a consultas preparadas.
- Tratamento de exceções.
- Suporte a transações.
- Integração com MySQL e outros bancos compatíveis.

Nesta apostila, utilizaremos PDO por ser uma excelente opção para aprender a desenvolver aplicações PHP com banco de dados.

### 20\. Conectando PHP ao MySQL com PDO

Para conectar PHP ao MySQL, utilizamos a classe `PDO`.

**Exemplo: arquivo****`conexao.php`**

php

```php
<?php

$host = "localhost";

$banco = "escola";

$usuario = "root";

$senha = "";

try {

    $pdo = new PDO(
        "mysql:host=$host;dbname=$banco;charset=utf8mb4",
        $usuario,
        $senha
    );

    $pdo->setAttribute(
        PDO::ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION
    );

    echo "Conexão realizada com sucesso!";

} catch (PDOException $e) {

    error_log($e->getMessage());

    exit("Não foi possível conectar ao banco de dados.");

}

?>
```

Explicação:

- `$host`: endereço do servidor.
- `$banco`: nome do banco de dados.
- `$usuario`: usuário do banco.
- `$senha`: senha do banco.
- `new PDO()`: cria a conexão.
- `PDO::ATTR_ERRMODE`: configura o tratamento de erros.
- `PDO::ERRMODE_EXCEPTION`: permite tratar erros por exceções.

Em ambientes de produção, utilize credenciais protegidas e não apresente mensagens internas de erro aos usuários.

### 21\. Criando uma Estrutura de Pastas

Para organizar um projeto PHP com MySQL, podemos utilizar a seguinte estrutura:

text

```text
sistema/
│
├── config/
│   └── conexao.php
│
├── alunos/
│   ├── cadastrar.php
│   ├── listar.php
│   ├── editar.php
│   └── excluir.php
│
└── index.php
```

Essa organização facilita a manutenção e a separação das responsabilidades.

### 22\. Inserindo Dados com PHP e PDO

Agora vamos inserir informações no banco de dados utilizando PHP.

**Arquivo:****`cadastrar.php`**

php

```php
<?php

require_once "../config/conexao.php";

$nome = "Carlos";

$email = "carlos@email.com";

$idade = 20;

$sql = "INSERT INTO alunos (nome, email, idade)
        VALUES (:nome, :email, :idade)";

$stmt = $pdo->prepare($sql);

$stmt->execute([
    ":nome" => $nome,
    ":email" => $email,
    ":idade" => $idade
]);

echo "Aluno cadastrado com sucesso!";

?>
```

Nesse exemplo, utilizamos `prepare()` e `execute()` para executar uma consulta preparada.

Essa técnica ajuda a prevenir SQL Injection.

### 23\. Consultando Dados com PHP e PDO

Para recuperar informações, utilizamos `SELECT`.

**Arquivo:****`listar.php`**

php

```php
<?php

require_once "../config/conexao.php";

$sql = "SELECT * FROM alunos ORDER BY nome";

$stmt = $pdo->query($sql);

$alunos = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($alunos as $aluno) {

    echo "ID: " . $aluno["id"] . "<br>";

    echo "Nome: " .
        htmlspecialchars($aluno["nome"], ENT_QUOTES, "UTF-8")
        . "<br>";

    echo "E-mail: " .
        htmlspecialchars($aluno["email"], ENT_QUOTES, "UTF-8")
        . "<br>";

    echo "Idade: " . $aluno["idade"] . "<hr>";

}

?>
```

Explicação:

- `query()`: executa uma consulta SQL.
- `fetchAll()`: recupera os registros.
- `PDO::FETCH_ASSOC`: retorna os resultados como arrays associativos.
- `foreach`: percorre os registros.

### 24\. Consultando um Registro Específico

Podemos utilizar parâmetros para consultar um aluno pelo identificador.

**Exemplo:**

php

```php
<?php

require_once "../config/conexao.php";

$id = 1;

$sql = "SELECT * FROM alunos WHERE id = :id";

$stmt = $pdo->prepare($sql);

$stmt->execute([
    ":id" => $id
]);

$aluno = $stmt->fetch(PDO::FETCH_ASSOC);

if ($aluno) {

    echo "Nome: " .
        htmlspecialchars($aluno["nome"], ENT_QUOTES, "UTF-8");

} else {

    echo "Aluno não encontrado.";

}

?>
```

### 25\. Atualizando Dados com PHP e PDO

Para atualizar informações, utilizamos o comando SQL `UPDATE`.

**Arquivo:****`editar.php`**

php

```php
<?php

require_once "../config/conexao.php";

$id = 1;

$nome = "Carlos Silva";

$email = "carlos.silva@email.com";

$idade = 21;

$sql = "UPDATE alunos
        SET nome = :nome,
            email = :email,
            idade = :idade
        WHERE id = :id";

$stmt = $pdo->prepare($sql);

$stmt->execute([
    ":nome" => $nome,
    ":email" => $email,
    ":idade" => $idade,
    ":id" => $id
]);

echo "Registro atualizado com sucesso!";

?>
```

### 26\. Excluindo Dados com PHP e PDO

Para excluir um registro, utilizamos o comando SQL `DELETE`.

**Arquivo:****`excluir.php`**

php

```php
<?php

require_once "../config/conexao.php";

$id = 1;

$sql = "DELETE FROM alunos WHERE id = :id";

$stmt = $pdo->prepare($sql);

$stmt->execute([
    ":id" => $id
]);

if ($stmt->rowCount() > 0) {

    echo "Aluno excluído com sucesso!";

} else {

    echo "Nenhum registro foi excluído.";

}

?>
```

Em aplicações reais, o identificador deve ser validado e a exclusão deve ser realizada mediante uma ação autorizada do usuário.

### 27\. Criando um Formulário HTML Integrado ao MySQL

Agora vamos integrar os formulários HTML com PHP e MySQL.

**Arquivo:****`formulario.php`**

php

```php
<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">

    <title>Cadastro de Alunos</title>

</head>

<body>

    <h1>Cadastro de Alunos</h1>

    <form action="salvar.php" method="POST">

        <label>Nome:</label>

        <input type="text" name="nome" required>

        <br><br>

        <label>E-mail:</label>

        <input type="email" name="email" required>

        <br><br>

        <label>Idade:</label>

        <input type="number" name="idade" min="1" required>

        <br><br>

        <button type="submit">Cadastrar</button>

    </form>

</body>

</html>
```

**Arquivo:****`salvar.php`**

php

```php
<?php

require_once "../config/conexao.php";

if ($_SERVER["REQUEST_METHOD"] !== "POST") {

    http_response_code(405);

    exit("Método não permitido.");

}

$nome = trim($_POST["nome"] ?? "");

$email = trim($_POST["email"] ?? "");

$idade = filter_input(
    INPUT_POST,
    "idade",
    FILTER_VALIDATE_INT
);

if ($nome === "" || mb_strlen($nome, "UTF-8") > 100) {

    exit("Nome inválido.");

}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

    exit("E-mail inválido.");

}

if ($idade === false || $idade === null || $idade < 1 || $idade > 120) {

    exit("Idade inválida.");

}

$sql = "INSERT INTO alunos (nome, email, idade)
        VALUES (:nome, :email, :idade)";

$stmt = $pdo->prepare($sql);

$stmt->execute([
    ":nome" => $nome,
    ":email" => $email,
    ":idade" => $idade
]);

echo "Aluno cadastrado com sucesso!";

?>
```

Nesse exemplo, os dados preenchidos pelo usuário são enviados ao servidor e armazenados no banco de dados.

### 28\. Tratamento de Erros com PDO

Durante o desenvolvimento, podem ocorrer erros relacionados à conexão, comandos SQL e integridade dos dados.

Podemos utilizar `try` e `catch` para tratar essas situações.

**Exemplo:**

php

```php
<?php

try {

    $sql = "SELECT * FROM alunos";

    $stmt = $pdo->query($sql);

    $alunos = $stmt->fetchAll(PDO::FETCH_ASSOC);

} catch (PDOException $e) {

    error_log($e->getMessage());

    echo "Ocorreu um erro ao consultar os alunos.";

}

?>
```

É recomendável registrar os erros técnicos em logs e apresentar mensagens genéricas ao usuário.

### 29\. Prevenindo SQL Injection

SQL Injection é uma vulnerabilidade que pode ocorrer quando informações fornecidas pelo usuário são inseridas diretamente em comandos SQL.

**Exemplo inseguro:**

php

```php
<?php

$id = $_GET["id"];

$sql = "SELECT * FROM alunos WHERE id = $id";

$resultado = $pdo->query($sql);

?>
```

Esse exemplo não é seguro porque utiliza diretamente um dado recebido do navegador.

**Exemplo seguro:**

php

```php
<?php

$id = filter_input(INPUT_GET, "id", FILTER_VALIDATE_INT);

if ($id === false || $id === null) {

    exit("Identificador inválido.");

}

$sql = "SELECT * FROM alunos WHERE id = :id";

$stmt = $pdo->prepare($sql);

$stmt->execute([
    ":id" => $id
]);

$aluno = $stmt->fetch(PDO::FETCH_ASSOC);

?>
```

A utilização de consultas preparadas separa os comandos SQL dos valores enviados pelo usuário.

### 30\. Utilizando COUNT, SUM, AVG, MIN e MAX

O MySQL oferece funções de agregação que permitem realizar cálculos sobre os registros.

| Função | Finalidade |
| --- | --- |
| COUNT() | Conta registros |
| SUM() | Calcula a soma |
| AVG() | Calcula a média |
| MIN() | Retorna o menor valor |
| MAX() | Retorna o maior valor |

**Contando alunos:**

sql

```sql
SELECT COUNT(*) AS total_alunos
FROM alunos;
```

**Calculando a média de idade:**

sql

```sql
SELECT AVG(idade) AS media_idade
FROM alunos;
```

**Identificando a menor idade:**

sql

```sql
SELECT MIN(idade) AS menor_idade
FROM alunos;
```

**Identificando a maior idade:**

sql

```sql
SELECT MAX(idade) AS maior_idade
FROM alunos;
```

**Somando valores:**

Imagine uma tabela de produtos com uma coluna `preco`.

sql

```sql
SELECT SUM(preco) AS total
FROM produtos;
```

### 31\. Utilizando LIKE

O operador `LIKE` permite pesquisar informações utilizando padrões de texto.

**Pesquisar nomes que começam com M:**

sql

```sql
SELECT *
FROM alunos
WHERE nome LIKE 'M%';
```

**Pesquisar nomes que terminam com A:**

sql

```sql
SELECT *
FROM alunos
WHERE nome LIKE '%a';
```

**Pesquisar nomes que contêm a palavra Carlos:**

sql

```sql
SELECT *
FROM alunos
WHERE nome LIKE '%Carlos%';
```

### 32\. Utilizando DISTINCT

O comando `DISTINCT` permite apresentar valores sem repetições.

**Exemplo:**

sql

```sql
SELECT DISTINCT idade
FROM alunos;
```

Esse comando apresenta as idades diferentes existentes na tabela.

### 33\. Utilizando Transações com PDO

As transações permitem executar várias operações como uma única unidade lógica.

São importantes quando precisamos garantir a consistência dos dados.

Os principais métodos são:

- `beginTransaction()`: inicia uma transação.
- `commit()`: confirma as alterações.
- `rollBack()`: desfaz as alterações ainda não confirmadas.

**Exemplo:**

php

```php
<?php

try {

    $pdo->beginTransaction();

    $stmt = $pdo->prepare(
        "INSERT INTO alunos (nome, email, idade)
         VALUES (:nome, :email, :idade)"
    );

    $stmt->execute([
        ":nome" => "Ana",
        ":email" => "ana@email.com",
        ":idade" => 22
    ]);

    // Outras operações relacionadas podem ser executadas aqui.

    $pdo->commit();

    echo "Operação concluída com sucesso!";

} catch (PDOException $e) {

    if ($pdo->inTransaction()) {

        $pdo->rollBack();

    }

    error_log($e->getMessage());

    echo "Não foi possível concluir a operação.";

}

?>
```

As transações dependem de tabelas e mecanismos de armazenamento que ofereçam suporte, como InnoDB.

### 34\. Criando uma Tabela de Produtos

Vamos criar uma tabela para armazenar produtos de uma loja.

sql

```sql
CREATE TABLE produtos (

    id INT AUTO_INCREMENT PRIMARY KEY,

    nome VARCHAR(150) NOT NULL,

    descricao TEXT,

    preco DECIMAL(10,2) NOT NULL,

    quantidade INT NOT NULL DEFAULT 0,

    data_cadastro TIMESTAMP DEFAULT CURRENT_TIMESTAMP

);
```

Inserindo produtos:

sql

```sql
INSERT INTO produtos
(nome, descricao, preco, quantidade)
VALUES
('Notebook', 'Notebook para estudos', 2500.00, 10),
('Mouse', 'Mouse sem fio', 80.00, 30),
('Teclado', 'Teclado USB', 120.00, 15);
```

Consultando os produtos:

sql

```sql
SELECT * FROM produtos;
```

### 35\. Criando uma Pesquisa de Produtos com PHP

Podemos utilizar PHP para pesquisar produtos cadastrados.

**Arquivo:****`pesquisar.php`**

php

```php
<?php

require_once "../config/conexao.php";

$pesquisa = trim($_GET["pesquisa"] ?? "");

$sql = "SELECT * FROM produtos
        WHERE nome LIKE :pesquisa
        ORDER BY nome";

$stmt = $pdo->prepare($sql);

$stmt->execute([
    ":pesquisa" => "%" . $pesquisa . "%"
]);

$produtos = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">

    <title>Pesquisar Produtos</title>

</head>

<body>

    <h1>Pesquisar Produtos</h1>

    <form method="GET">

        <input
            type="text"
            name="pesquisa"
            placeholder="Digite o nome do produto"
        >

        <button type="submit">Pesquisar</button>

    </form>

    <?php foreach ($produtos as $produto): ?>

        <h3>
            <?= htmlspecialchars($produto["nome"], ENT_QUOTES, "UTF-8") ?>
        </h3>

        <p>
            Preço: R$
            <?= number_format((float) $produto["preco"], 2, ",", ".") ?>
        </p>

        <hr>

    <?php endforeach; ?>

</body>

</html>
```

### 36\. Boas Práticas ao Trabalhar com MySQL e PHP

1. Utilizar PDO ou MySQLi para conectar ao banco de dados.
2. Utilizar consultas preparadas.
3. Validar os dados recebidos dos formulários.
4. Utilizar chaves primárias.
5. Criar relacionamentos corretamente.
6. Definir tipos de dados adequados.
7. Utilizar `utf8mb4`.
8. Proteger as credenciais do banco de dados.
9. Não apresentar erros internos aos usuários.
10. Criar cópias de segurança regularmente.
11. Utilizar transações quando necessário.
12. Aplicar permissões adequadas aos usuários do banco.
13. Evitar utilizar `SELECT *` em consultas de produção quando não for necessário.
14. Utilizar índices para melhorar consultas frequentes.
15. Separar a conexão com o banco de dados do restante da aplicação.

### 37\. Exercícios Práticos

**Exercício 1 – Criando um banco de dados**

Crie um banco de dados chamado `loja`.

**Exercício 2 – Criando uma tabela**

Crie uma tabela chamada `clientes` com os campos:

- id.
- nome.
- email.
- telefone.
- endereço.

**Exercício 3 – Inserindo registros**

Insira cinco clientes na tabela utilizando `INSERT`.

**Exercício 4 – Consultando registros**

Apresente todos os clientes cadastrados utilizando `SELECT`.

**Exercício 5 – Filtrando informações**

Pesquise clientes pelo nome utilizando `WHERE`.

**Exercício 6 – Atualizando registros**

Atualize o telefone de um cliente utilizando `UPDATE`.

**Exercício 7 – Excluindo registros**

Exclua um cliente utilizando `DELETE`.

**Exercício 8 – Conexão PHP e MySQL**

Desenvolva um arquivo PHP para conectar ao banco de dados utilizando PDO.

**Exercício 9 – Cadastro de clientes**

Crie um formulário HTML que permita cadastrar clientes no MySQL.

**Exercício 10 – Pesquisa de produtos**

Crie uma página PHP que permita pesquisar produtos pelo nome.

**Exercício 11 – Relacionamento entre tabelas**

Crie as tabelas `alunos` e `cursos` e estabeleça um relacionamento entre elas.

**Exercício 12 – Relatório de alunos**

Utilize `COUNT()`, `AVG()`, `MIN()` e `MAX()` para produzir um relatório sobre os alunos.

### 38\. Projeto Prático: Sistema de Gerenciamento de Alunos

Desenvolva um sistema de gerenciamento de alunos utilizando PHP, MySQL e PDO.

**Requisitos funcionais:**

1. Criar um banco de dados chamado `escola`.
2. Criar a tabela `alunos`.
3. Criar a tabela `cursos`.
4. Estabelecer relacionamento entre alunos e cursos.
5. Desenvolver formulário de cadastro.
6. Armazenar os dados no MySQL.
7. Listar todos os alunos.
8. Consultar um aluno específico.
9. Atualizar informações de alunos.
10. Excluir registros.
11. Pesquisar alunos pelo nome.
12. Apresentar mensagens de sucesso e erro.

**Requisitos técnicos:**

- Utilizar PHP.
- Utilizar MySQL.
- Utilizar PDO.
- Utilizar HTML.
- Utilizar consultas preparadas.
- Validar os dados recebidos.
- Organizar os arquivos do projeto.
- Proteger as informações armazenadas.

**Desafio adicional:**

Implemente um sistema de autenticação com sessões, permitindo que somente usuários autenticados possam gerenciar os alunos.

### 39\. Conclusão

O MySQL é uma ferramenta fundamental para o desenvolvimento de aplicações que precisam armazenar e organizar informações.

A integração entre PHP e MySQL permite construir sistemas dinâmicos, capazes de cadastrar, consultar, atualizar e excluir dados.

Ao longo desta apostila, estudamos os fundamentos dos bancos de dados relacionais, os principais comandos SQL, a criação de tabelas, os relacionamentos, a conexão com PDO e a manipulação de registros.

O domínio desses conceitos é essencial para avançar no desenvolvimento de sistemas profissionais utilizando PHP.

### 40\. Referências e Materiais de Apoio

- Manual oficial do PHP: [https://www.php.net/manual/pt\_BR/](<https://www.php.net/manual/pt_BR/>)
- PDO no PHP: [https://www.php.net/manual/pt\_BR/book.pdo.php](<https://www.php.net/manual/pt_BR/book.pdo.php>)
- PDO e MySQL: [https://www.php.net/manual/pt\_BR/ref.pdo-mysql.php](<https://www.php.net/manual/pt_BR/ref.pdo-mysql.php>)
- Manual oficial do MySQL: [https://dev.mysql.com/doc/](<https://dev.mysql.com/doc/>)
- Tutorial SQL: [https://www.w3schools.com/sql/](<https://www.w3schools.com/sql/>)
- phpMyAdmin: [https://www.phpmyadmin.net/](<https://www.phpmyadmin.net/>)
- OWASP SQL Injection Prevention: [https://cheatsheetseries.owasp.org/cheatsheets/SQL\_Injection\_Prevention\_Cheat\_Sheet.html](<https://cheatsheetseries.owasp.org/cheatsheets/SQL_Injection_Prevention_Cheat_Sheet.html>)

**Fim da apostila — Banco de Dados MySQL com PHP.**

## Próxima etapa da aprendizagem

Depois desta apostila, recomendo seguir para conteúdos mais práticos:

1. CRUD completo com PHP e MySQL.
2. Programação Orientada a Objetos (POO) em PHP.
3. Arquitetura MVC com PHP.
4. Sistema de autenticação e autorização.
5. Upload e gerenciamento de arquivos.
6. Desenvolvimento de sistemas web completos.
