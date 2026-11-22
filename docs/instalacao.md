# APOSTILA: INSTALAÇÃO E CONFIGURAÇÃO DO PHP NO WINDOWS E LINUX

Material didático Instalação passo a passo

Esta apostila apresenta orientações para instalar, configurar e testar o PHP nos sistemas operacionais Windows e Linux.

O objetivo é preparar o ambiente de desenvolvimento para trabalhar com PHP, HTML, CSS, MySQL e construir aplicações web, incluindo os projetos CRUD e sistemas orientados a objetos estudados nas apostilas anteriores.

Ao finalizar, o aluno será capaz de:

- Instalar o PHP no Windows.
- Instalar o PHP no Linux.
- Configurar as variáveis de ambiente.
- Configurar o arquivo `php.ini`.
- Instalar e configurar o servidor Apache.
- Instalar extensões do PHP.
- Verificar a versão instalada.
- Executar arquivos PHP pelo terminal.
- Executar aplicações PHP no navegador.
- Preparar um ambiente de desenvolvimento com MySQL.


## 1\. Introdução

PHP é uma linguagem de programação muito utilizada no desenvolvimento de aplicações web.

Para desenvolver projetos PHP, precisamos instalar e configurar um ambiente de desenvolvimento adequado.

Esse ambiente pode ser preparado tanto no Windows quanto no Linux.

Nesta apostila, aprenderemos duas formas de preparar o ambiente:

- Instalação do PHP no Windows.
- Instalação do PHP no Linux.

Também aprenderemos a utilizar o Apache, configurar o MySQL e executar nossos primeiros programas PHP.

## 2\. O que precisamos instalar?

Para desenvolver aplicações PHP, podemos utilizar os seguintes programas:

| Programa | Finalidade |
| --- | --- |
| PHP | Interpretar e executar códigos PHP |
| Apache | Servidor web |
| MySQL | Sistema de gerenciamento de banco de dados |
| phpMyAdmin | Administrar bancos de dados |
| Visual Studio Code | Editor de código |
| Composer | Gerenciador de dependências PHP |
| Navegador | Acessar aplicações web |

### 2.1. Entendendo como funciona o ambiente

Quando desenvolvemos uma aplicação PHP, o navegador envia uma solicitação ao servidor web.

O Apache recebe essa solicitação e encaminha o arquivo PHP para ser interpretado pelo PHP.

Depois, o servidor devolve o resultado ao navegador.

Fluxo de funcionamento:

text

```text
USUÁRIO
   |
   v
NAVEGADOR
   |
   v
SERVIDOR APACHE
   |
   v
INTERPRETADOR PHP
   |
   v
BANCO DE DADOS MYSQL
   |
   v
RESULTADO HTML
   |
   v
NAVEGADOR
```

É importante compreender que o navegador não executa diretamente o código PHP. O processamento acontece no servidor.

## 3\. Instalação do PHP no Windows

Existem diferentes maneiras de instalar PHP no Windows.

Podemos utilizar:

1. Instalação manual do PHP.
2. XAMPP.
3. Outros ambientes de desenvolvimento.

Para iniciantes, recomendamos o XAMPP, pois ele reúne PHP, Apache, MySQL/MariaDB e phpMyAdmin em um único pacote.

Também aprenderemos a instalação manual, que permite compreender melhor a configuração do PHP.

## 4\. Método 1: Instalando PHP com XAMPP no Windows

### 4.1. O que é XAMPP?

XAMPP é um pacote que reúne ferramentas necessárias para desenvolver aplicações web localmente.

Ele inclui:

- Apache.
- PHP.
- MariaDB.
- phpMyAdmin.
- Outras ferramentas auxiliares.

### 4.2. Baixando o XAMPP

Acesse o site oficial:

https://www.apachefriends.org/

Passo a passo:

1. Abra o navegador.
2. Acesse o site do Apache Friends.
3. Entre na seção de downloads.
4. Escolha a versão compatível com seu Windows.
5. Faça o download do instalador.

### 4.3. Instalando o XAMPP

Depois de baixar o instalador:

1. Localize o arquivo baixado.
2. Execute o instalador.
3. Autorize a execução, se necessário.
4. Selecione os componentes Apache, MySQL, PHP e phpMyAdmin.
5. Escolha a pasta de instalação.

Recomendamos utilizar:

text

```text
C:\xampp
```

6. Clique em Next até concluir a instalação.
7. Finalize o processo.

### 4.4. Iniciando o Apache e o MySQL

Depois da instalação:

1. Abra o XAMPP Control Panel.
2. Localize Apache.
3. Clique em Start.
4. Localize MySQL.
5. Clique em Start.

Se os serviços iniciarem corretamente, estarão disponíveis para utilização.

### 4.5. Testando a instalação

Abra o navegador e digite:

text

```text
http://localhost
```

Se a página inicial do XAMPP aparecer, o Apache está funcionando.

Para acessar o phpMyAdmin:

text

```text
http://localhost/phpmyadmin
```

### 4.6. Localizando a pasta dos projetos

No XAMPP, os projetos PHP devem ser armazenados dentro da pasta:

text

```text
C:\xampp\htdocs
```

Crie uma pasta chamada:

text

```text
meu_projeto
```

O caminho completo será:

text

```text
C:\xampp\htdocs\meu_projeto
```

## 5\. Criando o primeiro programa PHP no Windows

Abra o Visual Studio Code ou outro editor de código.

Crie um arquivo chamado:

text

```text
index.php
```

Digite o seguinte código:

php

```php
<?php

echo "Olá! PHP instalado com sucesso!";

?>
```

Salve o arquivo dentro de:

text

```text
C:\xampp\htdocs\meu_projeto
```

Agora abra o navegador e acesse:

text

```text
http://localhost/meu_projeto/
```

Resultado esperado:

text

```text
Olá! PHP instalado com sucesso!
```

Parabéns\! Você executou seu primeiro programa PHP no Windows.

## 6\. Método 2: Instalação manual do PHP no Windows

Também podemos instalar o PHP sem utilizar o XAMPP.

Esse método permite configurar o interpretador separadamente.

### 6.1. Acessando o site oficial

Acesse:

https://windows.php.net/download/

Escolha uma versão estável e com suporte.

Para computadores modernos, geralmente utilizamos a versão x64.

Existem dois tipos principais de pacotes:

- Thread Safe (TS): indicado para configurações como Apache com PHP carregado como módulo.
- Non Thread Safe (NTS): indicado para FastCGI e execução pela linha de comando.

Se o objetivo inicial for apenas executar PHP pelo terminal, a versão NTS é uma opção adequada.

### 6.2. Baixando o PHP

1. Acesse o site oficial.
2. Escolha a versão desejada.
3. Selecione a arquitetura x64, quando aplicável.
4. Escolha o pacote ZIP apropriado.
5. Faça o download.

O PHP para Windows pode exigir o Microsoft Visual C++ Redistributable compatível com a versão baixada.

### 6.3. Extraindo os arquivos

Após o download:

1. Localize o arquivo ZIP.
2. Extraia seu conteúdo.
3. Crie uma pasta chamada PHP na unidade C.
4. Coloque os arquivos extraídos nessa pasta.

Estrutura:

text

```text
C:\
  |
  +-- PHP\
       |
       +-- php.exe
       |
       +-- php.ini-development
       |
       +-- php.ini-production
       |
       +-- ext\
       |
       +-- extras\
```

### 6.4. Configurando o arquivo php.ini

O arquivo `php.ini` contém configurações importantes do PHP.

Na pasta de instalação, encontraremos normalmente dois modelos:

- `php.ini-development`
- `php.ini-production`

Para criar o arquivo de configuração:

1. Copie `php.ini-development`.
2. Cole uma cópia na mesma pasta.
3. Renomeie para `php.ini`.

Agora abra o arquivo utilizando o Visual Studio Code.

Localize:

ini

```ini
;extension_dir = "ext"
```

Modifique para:

ini

```ini
extension_dir = "ext"
```

Também podemos habilitar algumas extensões necessárias para trabalhar com bancos de dados:

ini

```ini
extension=mysqli

extension=pdo_mysql

extension=mbstring

extension=openssl

extension=curl

extension=fileinfo

extension=gd

extension=zip
```

A disponibilidade de cada extensão depende do pacote instalado.

Salve as alterações.

### 6.5. Configurando a variável de ambiente PATH

Para executar o PHP em qualquer diretório do terminal, precisamos adicionar sua pasta à variável de ambiente PATH.

Passo a passo:

1. Abra o menu Iniciar.
2. Pesquise por Variáveis de Ambiente.
3. Selecione Editar as variáveis de ambiente do sistema.
4. Clique em Variáveis de Ambiente.
5. Localize a variável Path.
6. Clique em Editar.
7. Clique em Novo.
8. Adicione:

text

```text
C:\PHP
```

9. Confirme as alterações.
10. Feche e abra novamente o terminal.

### 6.6. Testando a instalação manual

Abra o Prompt de Comando ou PowerShell.

Digite:

bash

```bash
php -v
```

Se estiver tudo correto, será apresentada a versão instalada do PHP.

Para verificar o caminho do executável:

bash

```bash
where php
```

Para listar as extensões habilitadas:

bash

```bash
php -m
```

### 6.7. Verificando o arquivo de configuração

Execute:

bash

```bash
php --ini
```

Esse comando apresenta informações sobre o arquivo `php.ini` carregado.

É muito importante verificar se o PHP está utilizando o arquivo de configuração que acabamos de criar.

## 7\. Executando PHP no servidor embutido do Windows

O PHP possui um servidor web embutido, que pode ser utilizado para desenvolvimento e testes locais.

Não precisamos instalar Apache para realizar esse teste.

Crie uma pasta:

text

```text
C:\projetos\php
```

Dentro dela, crie um arquivo chamado `index.php`:

php

```php
<?php

echo "<h1>Meu primeiro servidor PHP!</h1>";

echo "<p>Ambiente funcionando.</p>";

?>
```

Abra o terminal dentro da pasta e execute:

bash

```bash
php -S localhost:8000
```

Agora abra o navegador:

text

```text
http://localhost:8000
```

O servidor PHP apresentará o resultado do arquivo.

Para interromper o servidor, pressione:

text

```text
CTRL + C
```

Observação: o servidor embutido é destinado ao desenvolvimento e não deve ser utilizado como servidor de produção.

## 8\. Instalação do PHP no Linux

Agora vamos aprender a instalar o PHP em sistemas Linux.

O procedimento pode variar conforme a distribuição utilizada.

Nesta apostila, trabalharemos principalmente com Ubuntu e Debian, apresentando também comandos para Fedora.

No Linux, a instalação normalmente é realizada pelo gerenciador de pacotes da distribuição.

## 9\. Instalação do PHP no Ubuntu e Debian

### 9.1. Abrindo o terminal

Primeiramente, abra o terminal do Linux.

Podemos utilizar o atalho:

text

```text
CTRL + ALT + T
```

### 9.2. Atualizando os pacotes

Antes de instalar o PHP, atualize a lista de pacotes:

bash

```bash
sudo apt update
```

Esse comando atualiza as informações dos repositórios disponíveis.

Também podemos atualizar os pacotes instalados:

bash

```bash
sudo apt upgrade
```

### 9.3. Instalando o PHP

Execute:

bash

```bash
sudo apt install php
```

O sistema fará o download e a instalação dos pacotes necessários.

### 9.4. Verificando a instalação

Depois de concluir a instalação, execute:

bash

```bash
php -v
```

O terminal deverá apresentar a versão instalada.

### 9.5. Instalando extensões adicionais

Para desenvolver sistemas utilizando PHP e MySQL, recomendamos instalar algumas extensões.

Execute:

bash

```bash
sudo apt install php-cli php-common php-mysql php-curl php-mbstring php-xml php-zip php-gd
```

Explicação:

| Pacote | Finalidade |
| --- | --- |
| php-cli | Executar PHP no terminal |
| php-common | Componentes comuns |
| php-mysql | Comunicação com MySQL |
| php-curl | Requisições HTTP |
| php-mbstring | Manipulação de textos |
| php-xml | Processamento XML |
| php-zip | Manipulação de arquivos ZIP |
| php-gd | Manipulação de imagens |

### 9.6. Verificando as extensões

Execute:

bash

```bash
php -m
```

O comando apresentará as extensões habilitadas.

Para verificar especificamente a extensão PDO MySQL:

bash

```bash
php -m | grep pdo_mysql
```

Se o resultado apresentar `pdo_mysql`, a extensão está disponível.

## 10\. Instalando Apache no Ubuntu e Debian

Para executar aplicações PHP pelo navegador utilizando Apache, precisamos instalar e configurar o servidor web.

Execute:

bash

```bash
sudo apt install apache2
```

Depois, inicie o serviço:

bash

```bash
sudo systemctl start apache2
```

Para iniciar automaticamente junto com o sistema:

bash

```bash
sudo systemctl enable apache2
```

Verifique o funcionamento:

bash

```bash
sudo systemctl status apache2
```

Abra o navegador e acesse:

text

```text
http://localhost
```

Se aparecer a página padrão do Apache, o servidor está funcionando.

### 10.1. Instalando o módulo PHP para Apache

Em Ubuntu e Debian, podemos instalar o módulo correspondente à versão disponibilizada pela distribuição:

bash

```bash
sudo apt install libapache2-mod-php
```

Depois, reinicie o Apache:

bash

```bash
sudo systemctl restart apache2
```

Agora o servidor Apache poderá processar arquivos PHP por meio desse módulo.

## 11\. Criando o primeiro projeto PHP no Linux

No Ubuntu e Debian, a pasta padrão do Apache normalmente é:

text

```text
/var/www/html
```

Vamos criar um arquivo:

bash

```bash
sudo nano /var/www/html/index.php
```

Digite:

php

```php
<?php

echo "<h1>PHP instalado no Linux!</h1>";

echo "<p>Meu ambiente está funcionando.</p>";

?>
```

Para salvar no Nano:

1. Pressione CTRL + O.
2. Pressione ENTER.
3. Pressione CTRL + X.

Agora acesse:

text

```text
http://localhost/index.php
```

O navegador deverá apresentar a mensagem:

text

```text
PHP instalado no Linux!

Meu ambiente está funcionando.
```

## 12\. Instalação do PHP no Fedora Linux

No Fedora, utilizamos o gerenciador de pacotes DNF.

Abra o terminal e execute:

### 12.1. Atualizando o sistema

bash

```bash
sudo dnf upgrade --refresh
```

### 12.2. Instalando o PHP

bash

```bash
sudo dnf install php
```

### 12.3. Instalando extensões

bash

```bash
sudo dnf install php-cli php-mysqlnd php-mbstring php-xml php-gd php-curl php-zip
```

### 12.4. Verificando a instalação

bash

```bash
php -v
```

Para verificar as extensões:

bash

```bash
php -m
```

### 12.5. Instalando o Apache

bash

```bash
sudo dnf install httpd
```

Inicie o serviço:

bash

```bash
sudo systemctl start httpd
```

Configure a inicialização automática:

bash

```bash
sudo systemctl enable httpd
```

Verifique o status:

bash

```bash
sudo systemctl status httpd
```

Acesse:

text

```text
http://localhost
```

Para processar PHP pelo Apache, instale e configure os componentes de integração compatíveis com a versão do PHP e do servidor disponibilizados pelo Fedora. Consulte a documentação da distribuição antes de alterar a configuração do servidor.

## 13\. Configurando o PHP no Linux

O PHP utiliza o arquivo `php.ini` para armazenar suas configurações.

Em distribuições Linux, sua localização depende da instalação e da forma de execução.

Para descobrir o caminho utilizado pelo PHP no terminal:

bash

```bash
php --ini
```

Em instalações Ubuntu e Debian, um caminho comum é:

text

```text
/etc/php/versao/cli/php.ini
```

Para o Apache com módulo PHP:

text

```text
/etc/php/versao/apache2/php.ini
```

Substitua `versao` pela versão instalada.

### 13.1. Configurando extensões

Abra o arquivo de configuração:

bash

```bash
sudo nano /etc/php/versao/cli/php.ini
```

Localize a configuração de extensões e faça as alterações necessárias.

Após instalar uma extensão por meio do gerenciador de pacotes, normalmente não é necessário adicionar manualmente sua linha ao arquivo.

Para conferir as extensões:

bash

```bash
php -m
```

### 13.2. Reiniciando o Apache

Depois de alterar as configurações do PHP utilizado pelo Apache, reinicie o servidor:

bash

```bash
sudo systemctl restart apache2
```

No Fedora, quando estiver utilizando Apache:

bash

```bash
sudo systemctl restart httpd
```

## 14\. Instalando o MySQL no Windows e Linux

Como vamos desenvolver sistemas que utilizam bancos de dados, precisamos também preparar o MySQL.

### 14.1. No Windows

Se estiver utilizando XAMPP, o serviço de banco de dados já estará incluído no pacote.

Basta iniciar o serviço MySQL no painel de controle.

Acesse:

text

```text
http://localhost/phpmyadmin
```

### 14.2. No Ubuntu e Debian

Execute:

bash

```bash
sudo apt install mysql-server
```

Inicie o serviço:

bash

```bash
sudo systemctl start mysql
```

Configure a inicialização automática:

bash

```bash
sudo systemctl enable mysql
```

Verifique:

bash

```bash
sudo systemctl status mysql
```

Para acessar o MySQL:

bash

```bash
sudo mysql
```

### 14.3. Testando a conexão PHP com MySQL

Crie um arquivo chamado `teste_mysql.php`:

php

```php
<?php

$host = "localhost";

$banco = "sistema_crud";

$usuario = "root";

$senha = "";

try {

    $pdo = new PDO(
        "mysql:host=$host;dbname=$banco;charset=utf8mb4",
        $usuario,
        $senha
    );

    echo "Conexão com MySQL realizada!";

} catch (PDOException $e) {

    echo "Erro na conexão com o banco.";

}

?>
```

Observação: esse exemplo pressupõe que o banco já existe e que as credenciais são válidas. Em sistemas reais, utilize um usuário próprio do banco com permissões limitadas, em vez de utilizar root.

## 15\. Instalando o Visual Studio Code

O Visual Studio Code é um editor de código muito utilizado por desenvolvedores PHP.

Site oficial:

https://code.visualstudio.com/

### 15.1. Instalação no Windows

1. Acesse o site.
2. Clique em Download for Windows.
3. Execute o instalador.
4. Siga as instruções.
5. Abra o editor.

### 15.2. Instalação no Linux

No Ubuntu e Debian, uma possibilidade é instalar o pacote oficial disponibilizado pela Microsoft.

Acesse:

https://code.visualstudio.com/docs/setup/linux

Siga as instruções correspondentes à sua distribuição.

### 15.3. Extensões recomendadas

No Visual Studio Code, podemos instalar extensões que facilitam o desenvolvimento PHP.

Algumas sugestões:

- PHP Intelephense.
- PHP Debug.
- Prettier.
- SQLTools.
- DotENV.

Essas ferramentas ajudam na escrita, organização, depuração e manutenção dos códigos.

## 16\. Instalando o Composer

Composer é um gerenciador de dependências utilizado em projetos PHP.

Ele permite instalar bibliotecas, organizar pacotes e configurar o carregamento automático de classes.

Site oficial:

https://getcomposer.org/

### 16.1. Instalando no Windows

1. Acesse o site oficial.
2. Baixe o instalador Composer-Setup.exe.
3. Execute o instalador.
4. Informe o caminho do PHP, caso seja solicitado.
5. Conclua a instalação.

Abra o terminal e execute:

bash

```bash
composer -V
```

### 16.2. Instalando no Linux

Em distribuições baseadas em Debian e Ubuntu, podemos instalar o pacote disponibilizado pelos repositórios:

bash

```bash
sudo apt install composer
```

Verifique:

bash

```bash
composer -V
```

Para ambientes profissionais, consulte também as instruções oficiais de instalação e verificação de integridade do Composer.

## 17\. Diferenças entre PHP no Windows e Linux

| Característica | Windows | Linux |
| --- | --- | --- |
| Instalação | ZIP, XAMPP ou pacotes | Gerenciador de pacotes |
| Terminal | CMD ou PowerShell | Terminal Bash |
| Variável PATH | Configuração do Windows | PATH do sistema |
| Servidor web | Apache ou IIS | Apache ou Nginx |
| Configuração | php.ini | php.ini |
| Pasta comum dos projetos | htdocs | /var/www/html |
| Gerenciador de pacotes | Instaladores e ferramentas | APT, DNF, entre outros |

Embora existam diferenças na instalação, a linguagem PHP funciona de maneira semelhante nos dois sistemas.

## 18\. Comandos importantes do PHP

Durante o desenvolvimento, utilizaremos frequentemente os seguintes comandos:

| Comando | Função |
| --- | --- |
| php -v | Exibe a versão do PHP |
| php -m | Lista as extensões |
| php --ini | Mostra os arquivos de configuração |
| php -i | Exibe informações de configuração |
| php arquivo.php | Executa um arquivo PHP |
| php -S localhost:8000 | Inicia servidor local de desenvolvimento |
| composer -V | Exibe a versão do Composer |

## 19\. Problemas comuns durante a instalação

### Problema 1 – PHP não é reconhecido no terminal

Mensagem:

text

```text
'php' não é reconhecido como um comando interno
```

Possível solução:

- Verifique se o PHP foi instalado.
- Confira a localização do arquivo php.exe.
- Verifique a variável PATH.
- Feche e abra novamente o terminal.

### Problema 2 – Apache não inicia no Windows

Possíveis causas:

- Porta 80 ocupada.
- Outro servidor utilizando a mesma porta.
- Problemas na configuração do Apache.

Solução:

- Verifique os serviços que utilizam a porta.
- Consulte os arquivos de log do Apache.
- Ajuste a configuração de portas, se necessário.

### Problema 3 – Apache não inicia no Linux

Verifique:

bash

```bash
sudo systemctl status apache2
```

Consulte os logs:

bash

```bash
sudo journalctl -u apache2
```

No Fedora, utilize o serviço `httpd`.

### Problema 4 – Extensão PDO MySQL não encontrada

Verifique:

bash

```bash
php -m
```

No Ubuntu e Debian, instale:

bash

```bash
sudo apt install php-mysql
```

No Windows, verifique se a extensão `pdo_mysql` está habilitada no `php.ini`.

### Problema 5 – O código PHP aparece como texto no navegador

Isso pode indicar que o servidor web não está processando os arquivos PHP.

Verifique:

- Se o PHP está instalado.
- Se o Apache está em execução.
- Se o módulo ou a integração PHP está configurada.
- Se o arquivo possui a extensão `.php`.
- Se você está acessando o projeto por meio do servidor, e não abrindo o arquivo diretamente.

### Problema 6 – Erro de conexão com MySQL

Verifique:

- Se o MySQL está em execução.
- Se o banco existe.
- Se o usuário e a senha estão corretos.
- Se a extensão PDO MySQL está habilitada.
- Se o nome do banco está correto.

## 20\. Projeto prático: Testando o ambiente PHP

Agora vamos realizar um exercício para confirmar que o ambiente está funcionando.

Crie um arquivo chamado:

text

```text
ambiente.php
```

Adicione o seguinte código:

php

```php
<?php

echo "<h1>Ambiente PHP funcionando!</h1>";

echo "<hr>";

echo "<h2>Informações do sistema</h2>";

echo "Versão do PHP: " . PHP_VERSION;

echo "<br>";

echo "Sistema operacional: " . PHP_OS;

echo "<br>";

echo "Data atual: " . date("d/m/Y");

echo "<br>";

echo "Hora atual: " . date("H:i:s");

?>
```

Execute o arquivo pelo servidor web.

Se todas as informações forem apresentadas corretamente, o PHP está funcionando.

Outra possibilidade é verificar a configuração completa utilizando:

php

```php
<?php

phpinfo();

?>
```

A função `phpinfo()` apresenta informações detalhadas sobre o PHP e suas extensões.

**Atenção:** utilize essa página somente em ambiente local de desenvolvimento. Não deixe informações completas de configuração expostas publicamente em um servidor de produção.

## 21\. Exercícios práticos

### Exercício 1 – Instalação no Windows

Instale o XAMPP e configure Apache e MySQL.

Apresente uma captura de tela mostrando os serviços em execução.

### Exercício 2 – Instalação manual

Instale o PHP manualmente no Windows e configure a variável PATH.

Execute o comando:

bash

```bash
php -v
```

### Exercício 3 – Instalação no Linux

Instale o PHP no Ubuntu ou Debian utilizando o terminal.

Apresente os comandos utilizados.

### Exercício 4 – Primeiro programa

Crie um arquivo PHP que apresente:

- Nome do aluno.
- Curso.
- Instituição.
- Data atual.

### Exercício 5 – Servidor embutido

Execute um projeto PHP utilizando:

bash

```bash
php -S localhost:8000
```

Acesse a aplicação pelo navegador.

### Exercício 6 – Extensões

Liste as extensões habilitadas no PHP.

Identifique as extensões PDO, PDO MySQL, OpenSSL e MBString.

### Exercício 7 – MySQL

Instale o MySQL e crie um banco de dados chamado:

sql

```sql
CREATE DATABASE escola;
```

### Exercício 8 – Conexão com banco de dados

Crie um programa PHP utilizando PDO para estabelecer conexão com o banco `escola`.

### Exercício 9 – Composer

Instale o Composer e verifique sua versão.

### Exercício 10 – Comparação entre sistemas

Descreva as principais diferenças entre a instalação do PHP no Windows e no Linux.

## 22\. Projeto final: Preparação de um ambiente profissional PHP

Desenvolva um ambiente de desenvolvimento completo contendo:

- PHP.
- Apache.
- MySQL.
- phpMyAdmin.
- Visual Studio Code.
- Composer.

Depois, crie uma aplicação PHP que permita:

1. Cadastrar alunos.
2. Listar alunos.
3. Editar informações.
4. Excluir registros.
5. Consultar dados no MySQL.

O projeto deverá ser executado localmente e apresentar conexão funcional com o banco de dados.

## 23\. Recomendações de segurança

Ao configurar um ambiente PHP, devemos observar algumas boas práticas:

1. Utilize versões do PHP que recebam atualizações de segurança.
2. Baixe programas de sites oficiais.
3. Não exponha informações sensíveis do php.ini.
4. Não utilize o usuário root do MySQL em aplicações públicas.
5. Utilize senhas fortes.
6. Mantenha Apache, PHP e MySQL atualizados.
7. Desative a exibição de erros detalhados em produção.
8. Utilize HTTPS em aplicações publicadas.
9. Restrinja permissões de arquivos e pastas.
10. Faça cópias de segurança dos bancos de dados.

## 24\. Conclusão

A instalação e configuração do PHP representam o primeiro passo para o desenvolvimento de aplicações web.

Nesta apostila, aprendemos a preparar ambientes de desenvolvimento nos sistemas Windows e Linux.

Estudamos a instalação do PHP, configuração do php.ini, variáveis de ambiente, instalação do Apache, MySQL, Composer e Visual Studio Code.

Também executamos nossos primeiros programas PHP e aprendemos a identificar e solucionar problemas comuns.

Com o ambiente configurado, estamos preparados para desenvolver aplicações utilizando PHP, MySQL e Programação Orientada a Objetos.

## 25\. Referências e materiais de apoio

- PHP oficial: https://www.php.net/
- Downloads do PHP: [https://www.php.net/downloads.php](<https://www.php.net/downloads.php>)
- PHP para Windows: https://windows.php.net/download/
- Manual de instalação do PHP: [https://www.php.net/manual/pt\_BR/install.php](<https://www.php.net/manual/pt_BR/install.php>)
- XAMPP: https://www.apachefriends.org/
- Apache: https://httpd.apache.org/
- MySQL: https://dev.mysql.com/doc/
- phpMyAdmin: https://www.phpmyadmin.net/
- Visual Studio Code: https://code.visualstudio.com/
- Composer: https://getcomposer.org/
- Ubuntu: https://ubuntu.com/

