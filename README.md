# Exercício 02: Locadora de Equipamentos

*Nesta atividade você irá integrar conceitos de orientação a objetos, enumerações, namespaces, autoload com Composer e tratamento de exceções.*

## Cenário

Uma locadora oferece equipamentos como notebooks, projetores e câmeras. Um cliente pode alugar um equipamento por determinada quantidade de dias. O valor total da locação corresponde ao preço da diária multiplicado pela quantidade de dias.

Um equipamento associado a uma locação ativa não pode ser alugado novamente. Quando uma locação é finalizada, o equipamento deve voltar a ficar disponível.

Sua tarefa é desenvolver as classes necessárias para representar esse cenário e apresentar os equipamentos e as locações em uma página web.

Os dados devem ser criados diretamente no código e permanecer em memória durante a execução. Não é necessário desenvolver formulários, persistência de dados ou funcionalidades adicionais.

## Classes a desenvolver

### Equipamento

Crie a classe `Equipamento`, no namespace `App\Equipamentos`, para representar os equipamentos disponíveis na locadora.

A classe deve:

- Encapsular o nome do equipamento, o valor da diária e sua disponibilidade.
- Receber os dados necessários pelo construtor.
- Inicializar os novos equipamentos como disponíveis.
- Disponibilizar os comportamentos necessários para consultar suas informações e controlar sua disponibilidade.

Os dados internos do equipamento não devem ser acessados ou alterados diretamente pela página ou pela classe `Locacao`. Para consultar informações e controlar a disponibilidade, utilize os métodos disponibilizados pela própria classe `Equipamento`.

### StatusLocacao

Crie a enumeração `StatusLocacao`, no namespace `App\Locacoes`, com somente dois estados:

- `Ativa`
- `Finalizada`

Utilize essa enumeração para representar o estado de cada locação. Uma locação válida começa ativa e, quando finalizada, passa a ter o estado correspondente.

### Locacao

Crie a classe `Locacao`, no namespace `App\Locacoes`, para representar uma locação realizada por um cliente.

A classe deve:

- Encapsular o nome do cliente, o equipamento alugado, a quantidade de dias e o status.
- Receber os dados necessários pelo construtor.
- Manter uma referência ao objeto `Equipamento` associado à locação.
- Iniciar uma locação válida com o status `Ativa` e tornar o equipamento indisponível.
- Calcular o valor total da locação a partir da diária e da quantidade de dias.
- Permitir consultar as informações necessárias para a apresentação dos dados.
- Permitir finalizar uma locação, atualizando seu status e tornando o equipamento disponível novamente.

Antes de iniciar uma locação, verifique se o equipamento está disponível. Caso esteja ocupado, a operação deve lançar uma exceção da classe padrão `\Exception`, com uma mensagem clara em português.

A tentativa de locação inválida não deve alterar o estado do equipamento nem impedir a continuidade da página.

Não é necessário criar regras de multas, atrasos, cancelamentos ou devoluções parciais.

## Namespaces e Composer

Organize as classes utilizando namespaces e autoload PSR-4, com o mapeamento `App\` para a pasta `src/`.

A estrutura do projeto deve seguir esta organização:

- `src/Equipamentos/Equipamento.php`
- `src/Locacoes/Locacao.php`
- `src/Locacoes/StatusLocacao.php`

Crie o arquivo `composer.json` com o mapeamento PSR-4 necessário e configure o carregamento automático das classes. Não é necessário instalar dependências externas: o Composer será utilizado somente para o autoload.

No `index.php`, carregue o autoload do Composer e utilize as classes necessárias para criar os objetos e apresentar os dados.

## Demonstração na página

Complete o `index.php` para que a página apresente os equipamentos e as locações de acordo com os requisitos a seguir.

- Crie pelo menos três equipamentos, com nomes e valores de diária diferentes.
- Apresente todos os equipamentos em cards, mostrando o nome, o valor da diária e a disponibilidade atual.
- Crie pelo menos duas locações válidas, utilizando equipamentos diferentes.
- Reúna as locações válidas em um único array e utilize um único `foreach` para gerar seus cards.
- Apresente, em cada locação, o nome do cliente, o equipamento, a quantidade de dias, o valor total e o status.
- Realize uma tentativa de alugar novamente um equipamento que já esteja ocupado por uma locação ativa.
- Utilize `try/catch` para capturar a exceção e `getMessage()` para obter sua mensagem.
- Exiba a mensagem de erro somente quando houver uma mensagem a apresentar.
- Finalize uma locação válida e demonstre que seu status foi atualizado e que o equipamento voltou a ficar disponível.

Mantenha os valores numéricos durante os cálculos. Formate os valores monetários somente na exibição, utilizando `R$`, duas casas decimais, vírgula decimal e ponto para separar os milhares. Você pode utilizar `number_format()`.

A apresentação deve refletir o estado final dos objetos após as operações realizadas. Uma locação finalizada deve continuar aparecendo na lista de locações, com seu status atualizado.

## Roteiro de conferência

Utilize os itens abaixo para verificar o funcionamento do sistema após concluir a implementação.

1. Os equipamentos são criados inicialmente como disponíveis.
2. As locações válidas calculam corretamente o total, multiplicando o valor da diária pela quantidade de dias.
3. Os equipamentos associados às locações ativas ficam indisponíveis.
4. Uma tentativa de alugar um equipamento ocupado gera uma exceção, cuja mensagem é apresentada na página.
5. A tentativa inválida não altera a disponibilidade do equipamento nem impede a exibição das demais informações.
6. Ao finalizar uma locação, seu status passa para `Finalizada` e o equipamento correspondente volta a ficar disponível.
7. O autoload do Composer funciona e as classes são carregadas por seus namespaces.
8. A página apresenta os equipamentos e as locações em cards, sem duplicar os cards utilizados como modelos no HTML.

## Restrições

Utilize os conteúdos estudados nos Assuntos 01 a 12 e os fundamentos procedurais já conhecidos, aplicando os recursos necessários para resolver o problema de forma simples e organizada.

A princípio, não é necessário utilizar interfaces, traits, membros estáticos, constantes de classe, herança ou outros recursos de POO apenas para acrescentar complexidade à solução. Também não é necessário utilizar recursos do Assunto 13, como `final`, promoção de propriedades, `readonly`, Property Hooks e Attributes. Priorize os recursos que já foram estudados e que fazem sentido para o problema proposto.

O HTML e o CSS da página já estão preparados. Preserve a estrutura visual fornecida e implemente a lógica PHP necessária para apresentar os dados dinamicamente. Faça alterações no Front-End somente quando forem necessárias para o funcionamento da solução.

## Conceitos praticados

- Classes, objetos, propriedades, métodos e encapsulamento.
- Construtores e relacionamento entre objetos.
- Enumerações.
- Namespaces.
- Composer e autoload PSR-4.
- Exceções padrão com `throw`, `try/catch` e `getMessage()`.
- Arrays, laços de repetição e apresentação dinâmica com PHP.

## Como executar

Após criar o `composer.json` e organizar as classes, abra o terminal na pasta do exercício e execute:

```bash
composer dump-autoload
```

Em seguida, inicie o servidor embutido do PHP:

```bash
php -S localhost:8080
```

Abra `http://localhost:8080` no navegador.

*Observação: se a porta 8080 já estiver em uso, substitua-a por outra porta disponível nos dois comandos: no comando do servidor e no endereço acessado pelo navegador.*