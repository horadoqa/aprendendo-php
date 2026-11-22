# Testes Manuais e Automatizados

Você pode implementar testes manuais e automatizados no seu projeto PHP. Os dois são importantes, mas possuem objetivos diferentes.

Neste projeto de apresentação sobre PHP, podemos trabalhar com as duas abordagens.

## 1. Testes manuais

São testes realizados por uma pessoa, que acessa o sistema e verifica se tudo funciona como esperado.

Exemplos para sua página:

| Teste | Procedimento | Resultado esperado |
| --- | --- | --- |
| Abertura da página | Acessar `index.php` | Página carregada |
| Menu Início | Clicar em Início | Direcionar ao início |
| Menu Sobre | Clicar em Sobre | Exibir seção Sobre |
| Menu Vantagens | Clicar em Vantagens | Exibir vantagens |
| Responsividade | Abrir no celular | Layout adaptado |
| Rodapé | Verificar o ano | Ano atual exibido |

Você pode documentar esses testes em um checklist ou planilha.

## 2. Testes automatizados

São testes executados por ferramentas e códigos que verificam automaticamente se as funcionalidades estão funcionando.

No PHP, podemos utilizar o PHPUnit.

Por exemplo, sua página possui esta funcionalidade:

```php
<?php
echo date("Y");
?>
```

Podemos separar essa funcionalidade em uma classe:

src/Data.php

```php
<?php

namespace App;

class Data
{
    public function obterAnoAtual(): int
    {
        return (int) date("Y");
    }
}
```

E criar um teste:

tests/DataTest.php


```php
<?php

namespace Tests;

use App\Data;
use PHPUnit\Framework\TestCase;

class DataTest extends TestCase
{
    public function testObterAnoAtual(): void
    {
        $data = new Data();

        $this->assertEquals(
            (int) date("Y"),
            $data->obterAnoAtual()
        );
    }
}
```

O PHPUnit executará esse teste e verificará se a função retorna o ano atual.

## 3. Comparação entre os testes

| Característica | Manual | Automatizado |
| --- | --- | --- |
| Execução | Pessoa | Ferramenta |
| Verificação visual | Sim | Com ferramentas específicas |
| Velocidade | Mais lenta | Mais rápida |
| Repetição | Manual | Automática |
| Identificação de erros | Sim | Sim |
| Integração com GitHub Actions | Indireta | Sim |

## 4. Como os dois trabalham juntos?

## Estratégia de testes do projeto

Testes manuais

- Navegação entre seções.
- Aparência e cores.
- Responsividade.
- Experiência do usuário.

Testes automatizados

- Validação das funções PHP.
- Verificação de retornos.
- Testes de regras de negócio.
- Execução pelo PHPUnit.

GitHub Actions

Integração contínuaExecuta os testes automatizados a cada alteração enviada ao repositório.

## 5. Uma sugestão para seu projeto

Eu organizaria o projeto com três categorias de testes:

1. Testes funcionais manuais: verificam se a página funciona corretamente para o usuário.
2. Testes unitários automatizados: verificam individualmente as funções PHP com PHPUnit.
3. Testes de interface automatizados: verificam navegação, elementos HTML e comportamento visual usando ferramentas como Playwright.

Assim, você terá uma pequena estrutura de qualidade de software (QA), além do desenvolvimento PHP.

Uma observação: PHPUnit não substitui os testes manuais nem é destinado a validar diretamente a aparência da página. Cada tipo de teste tem sua responsabilidade.
