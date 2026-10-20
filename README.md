# Exercício 01: Sistema de Funcionários (SOLUCIONADO)

*Nesta atividade você irá praticar o desenvolvimento de classes, propriedades, métodos, encapsulamento, herança e polimorfismo.*

## Cenário

Uma empresa precisa apresentar os salários de sua equipe. Alguns funcionários são CLT e recebem salário-base e bônus; outros são PJ e recebem pelas horas trabalhadas.

Sua tarefa é representar esses funcionários com classes e exibir seus salários em uma única lista. 

## Classes a desenvolver

### Funcionario

Crie uma classe abstrata que represente os dados comuns aos dois tipos:

- nome encapsulado;
- construtor para receber o nome;
- métodos de acesso necessários, incluindo a leitura do nome;
- método abstrato `calcularSalario(): float`.

Não coloque nesta classe dados que pertençam somente a CLT ou PJ. Ela não deve ser instanciada diretamente.

### FuncionarioCLT

Esta classe deve herdar de `Funcionario`, encapsular `salarioBase` e `bonus` e receber os dados iniciais pelo construtor, reaproveitando o construtor da classe pai.

Implemente `calcularSalario()` com a regra:

**salário-base + bônus**

### FuncionarioPJ

Esta classe deve herdar de `Funcionario`, encapsular `horasTrabalhadas` e `valorHora` e receber os dados iniciais pelo construtor, reaproveitando o construtor da classe pai.

Implemente `calcularSalario()` com a regra:

**horas trabalhadas × valor da hora**

## Requisitos

- Desenvolva as três classes nos arquivos de `src/`.
- Carregue-as manualmente no `index.php` com `require_once`, respeitando suas dependências.
- Crie pelo menos quatro funcionários, incluindo os dois tipos.
- Guarde todos os objetos em um único array chamado `$funcionarios`.
- Use um único `foreach` para repetir o card HTML fornecido.
- Mostre o nome e o salário de cada funcionário utilizando seus métodos.
- Chame `calcularSalario()` da mesma forma para todos os objetos.
- Não separe os funcionários em arrays ou loops por tipo e não use `instanceof` ou condições para escolher o cálculo.
- Mantenha os valores numéricos durante os cálculos. Formate apenas na exibição, com `R$`, duas casas decimais, vírgula decimal e ponto de milhar. Você pode utilizar `number_format()`.
- Crie os dados diretamente no código e mantenha-os em memória.

Use somente os conteúdos dos Assuntos 01 a 05 e os fundamentos procedurais já conhecidos. Não utilize interfaces, traits, membros estáticos, constantes de classe, enums, namespaces, Composer, autoload, exceções, final, promoção de propriedades, readonly, Property Hooks e Attributes. Não utilize banco de dados, arquivos de dados, sessões, cookies ou APIs.

## Dados sugeridos para conferência

Você pode utilizar os dados abaixo ou escolher outros valores válidos.

| Nome | Tipo | Dados para o cálculo | Salário esperado |
| --- | --- | --- | --- |
| Geddy Lee | CLT | Salário-base: 3000; bônus: 500 | R$ 3.500,00 |
| Alex Lifeson | PJ | Horas: 160; valor da hora: 50 | R$ 8.000,00 |
| Neil Peart | CLT | Salário-base: 4200; bônus: 300 | R$ 4.500,00 |
| Anika Nilles | PJ | Horas: 120; valor da hora: 65 | R$ 7.800,00 |

## Resultado esperado

Ao concluir, a página deve apresentar pelo menos quatro cards, cada um com nome e salário correto. A mesma chamada a `calcularSalario()` deve produzir o resultado adequado para CLT e PJ, sem que o código de exibição precise identificar o tipo do funcionário.

O HTML e o CSS já estão preparados. O card inicialmente vazio é o modelo para a repetição; complete somente os trechos PHP indicados pelos **PARA FAZER**. Os arquivos de classes começam apenas com comentários para que você desenvolva suas definições.

## Conceitos praticados

- Classes, objetos, propriedades e métodos.
- Tipagem, visibilidade e encapsulamento.
- Construtores.
- Herança.
- Classes abstratas e métodos abstratos.
- Polimorfismo.

## Como executar

No terminal, entre na pasta do exercício e execute:

```bash
php -S localhost:PORTA
```
*Obs: troque PORTA pelo número de uma porta porta válida para seu servidor, como 80 ou 8080 ou outra qualquer que não esteja em uso.*

Abra `http://localhost:PORTA` no navegador. 

Antes da implementação, a página exibe a estrutura visual com um card sem dados.
