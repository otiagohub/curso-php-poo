# Repositório com os arquivos criados ao longo do curso PHP com Programação Orientada à Objetos

Os arquivos estão separados por `branches` conforme o que foi abordado em cada aula.

Navegue pelo menu `branches` para acessar o material desejado.

---

## Branch 11_composer-autoload

Assuntos estudados:

- Composer: gerenciador de dependências para PHP; aqui utilizamos apenas seu autoload
- Configuração do autoload no composer.json
- PSR-4: relação de entre namespaces e diretórios para o autoload
- Mapeamento do namespace App\ para a pasta src/
- Geração do autoload com composer dump-autoload
- Carregamento do autoload na index.php usando um único require_once para vendor/autoload.php
- Criação da classe Saudacao para testar o autoload
- composer install: instalação das dependências e geração dos arquivos de autoload.

---

## Branch 10_namespaces

Assuntos estudados:

- Reorganização dos arquivos em pastas dentro de src
- Declaração do espaço de nomes com namespace
- Nome completo de um tipo: App\Pedidos\Pedido
- Importação de nomes com use para utilizar nomes simples
- Criação de apelidos com use... as
- use importa nomes; require_once carrega arquivos

---

## Branch 09_enumeracoes

Assuntos estudados:

- Enumerações com um conjunto definido de casos usando case
- Casos associados a valores do tipo string
- Acesso a um caso com StatusPedido::AguardandoPagamento
- Enumeração como tipo de propriedade, parâmetro e retorno
- Acesso ao texto do caso com ->value

---

## Branch 08_recursos-estaticos

Assuntos estudados:

- Propriedades estáticas
- Métodos estáticos
- Acesso a recursos estáticos com ::
- Acesso aos recursos da própria classe com self
- Diferença entre recursos do objeto e recursos da classe

---

## Branch 07_traits

Assuntos estudados:

- Trait RegistraLog para reutilização de comportamento
- Uso de traits nas classes com use
- Reutilização do método registrarLog() sem duplicar sua implementação
- Diferença entre o contrato da interface e a implementação fornecida pela trait

---

## Branch 06_interfaces

Assuntos estudados:

- Interface Notificador como contrato de comportamento
- Definição do método enviar(string $mensagem): string na interface
- Implementação da interface com implements em NotificadorEmail e NotificadorSMS
- Implementação do método enviar() em cada classe
- Polimorfismo: a mesma chamada a enviar() utiliza a implementação de cada classe

---

## Branch 05_classes-abstratas-e-polimorfismo

Assuntos estudados:

- Classe abstrata: Conteudo
- Método abstrato: getDescricao()
- Impossibilidade de instanciar diretamente uma classe abstrata
- Implementação do método abstrato pelas classes filhas Filme e Serie
- Polimorfismo: a mesma chamada a getDescricao() utliza a implementação de cada classe.
- Tratamento uniforme de objetos Filme e Serie em um único array e foreach.

---

## Branch 04_heranca

Assuntos estudados:

- Classe-pai (superclasse): Conteudo
- Classe-filha (subclasse): Filme e Serie
- Herança utilizando extends
- Herança com propriedades e métodos
- Visibilidade protected nas classes pai e acessando pela filha
- Construtor da classe pai usando parent::__construct()
- Propriedades e métodos específicos nas classes filhas

---

## Branch 03_construtor

Assuntos estudados:

- Finalidade do construtor (usando o método __construct)
- Parâmetros/argumentos no construtor
- Passagem de dados/valores ao instanciar um objeto usando operador new
- Construtor para dados iniciais e setters para alterações posteriores
- Parâmetro opcional (com valor padrão)
  
---

## Branch 02_visibilidade-e-encapsulamento

Assuntos estudados:

- Visibilidade: public, private e protected
- Encapsulamento
- Getters e Setters
- Validação no setter do ano

---

## Branch 01_classes-objetos-propriedades-metodos

Assuntos estudados:

- Classes e objetos
- Propriedades e métodos
- Tipos de dados
- Estrutura de repetição
- Estrutura condicionais
            
