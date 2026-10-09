# Repositório com os arquivos criados ao longo do curso PHP com Programação Orientada à Objetos

Os arquivos estão separados por `branches` conforme o que foi abordado em cada aula.

Navegue pelo menu `branches` para acessar o material desejado.

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
            
