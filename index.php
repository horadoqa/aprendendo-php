
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conheça o PHP - Linguagem de Programação</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            background: #f4f4f9;
            color: #333;
            line-height: 1.6;
        }

        header {
            background: #24234b;
            color: white;
            padding: 20px 8%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
        }

        header h1 {
            color: #a9a7e8;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin-left: 20px;
            font-weight: bold;
        }

        nav a:hover {
            color: #a9a7e8;
        }

        .banner {
            background: linear-gradient(135deg, #24234b, #6564a8);
            color: white;
            text-align: center;
            padding: 100px 20px;
        }

        .banner h2 {
            font-size: 42px;
            margin-bottom: 15px;
        }

        .banner p {
            font-size: 19px;
            margin-bottom: 25px;
        }

        .botao {
            display: inline-block;
            background: #a9a7e8;
            color: #24234b;
            padding: 12px 25px;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
        }

        .botao:hover {
            background: white;
        }

        section {
            padding: 60px 8%;
        }

        section h2 {
            text-align: center;
            color: #24234b;
            margin-bottom: 30px;
            font-size: 30px;
        }

        .sobre {
            text-align: center;
            max-width: 900px;
            margin: auto;
        }

        .cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 25px;
        }

        .card {
            background: white;
            padding: 25px;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0 3px 10px #00000015;
            transition: 0.3s;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card h3 {
            color: #5554a0;
            margin-bottom: 12px;
        }

        .codigo {
            background: #20202b;
            color: #a9e6b1;
            padding: 25px;
            border-radius: 10px;
            max-width: 700px;
            margin: auto;
            overflow-x: auto;
        }

        .codigo pre {
            font-size: 15px;
        }

        .exemplo {
            background: #e9e9f5;
            text-align: center;
        }

        footer {
            background: #24234b;
            color: white;
            text-align: center;
            padding: 25px;
        }

        @media (max-width: 600px) {
            header {
                flex-direction: column;
                gap: 15px;
            }

            nav a {
                display: inline-block;
                margin: 5px;
            }

            .banner h2 {
                font-size: 30px;
            }

            section {
                padding: 40px 5%;
            }
        }
    </style>
</head>

<body>

    <!-- Cabeçalho -->
    <header>
        <h1>PHP</h1>

        <nav>
            <a href="#inicio">Início</a>
            <a href="#sobre">Sobre</a>
            <a href="#vantagens">Vantagens</a>
            <a href="#exemplo">Exemplo</a>
        </nav>
    </header>

    <!-- Apresentação -->
    <div class="banner" id="inicio">
        <h2>Bem-vindo ao mundo do PHP!</h2>

        <p>
            Uma linguagem poderosa para desenvolver
            aplicações e sites dinâmicos.
        </p>

        <a href="#sobre" class="botao">Saiba mais</a>
    </div>

    <!-- Sobre o PHP -->
    <section id="sobre">
        <h2>O que é PHP?</h2>

        <div class="sobre">
            <p>
                PHP é uma linguagem de programação de código aberto,
                muito utilizada no desenvolvimento web.
                Seu principal objetivo é permitir a criação de páginas
                dinâmicas, sistemas web e aplicações conectadas a bancos
                de dados.
            </p>

            <br>

            <p>
                O PHP é executado no servidor e pode gerar conteúdos
                HTML que são enviados ao navegador do usuário.
                É uma linguagem fácil de aprender e bastante utilizada
                no mercado de desenvolvimento.
            </p>
        </div>
    </section>

    <!-- Vantagens -->
    <section id="vantagens">
        <h2>Principais vantagens do PHP</h2>

        <div class="cards">

            <div class="card">
                <h3>Gratuito</h3>
                <p>
                    É uma linguagem de código aberto,
                    que pode ser utilizada gratuitamente.
                </p>
            </div>

            <div class="card">
                <h3>Fácil de aprender</h3>
                <p>
                    Possui sintaxe simples e permite
                    desenvolver projetos rapidamente.
                </p>
            </div>

            <div class="card">
                <h3>Banco de Dados</h3>
                <p>
                    Permite integração com MySQL,
                    PostgreSQL e outros bancos de dados.
                </p>
            </div>

            <div class="card">
                <h3>Versátil</h3>
                <p>
                    Pode ser utilizado em sites,
                    sistemas administrativos e APIs.
                </p>
            </div>

        </div>
    </section>

    <!-- Exemplo de código -->
    <section class="exemplo" id="exemplo">
        <h2>Exemplo de código PHP</h2>

        <p>Veja como é simples escrever seu primeiro código:</p>

        <br>

        <div class="codigo">
            <pre>
&lt;?php

    $nome = "Mundo";

    echo "Olá, " . $nome . "!";

?&gt;
            </pre>
        </div>

        <br>

        <p>
            Resultado:
            <strong>Olá, Mundo!</strong>
        </p>
    </section>

    <!-- Rodapé -->
    <footer>
        <p>
            &copy; <?php echo date("Y"); ?> - Apresentação sobre PHP
        </p>

        <p>Desenvolvido com HTML, CSS e PHP.</p>
    </footer>

</body>
</html>
