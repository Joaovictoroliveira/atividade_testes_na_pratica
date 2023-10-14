# PHPUnit

## Conhecendo o PHPUnit

- Framework de testes unitários, criado por Sebastian Bergmann.
- Pertencente a família xUnit de frameworks de testes, que apresenta outras ferramentas de testes como (cppUnit - C++, VBUnit - Visual Basic, NUnit - .Net e JUnit - Java), onde estrutura e funcionalidades derivam do SUnit da Smalltalk.

## Escrevendo os testes (convenções)

- Os testes devem estar em uma classe classTest, como por exemplo uma classe OperationsTest é onde ficarão os testes da classe Operations.
- classTest herdará na maioria das vezes de PHPUnit\Framework\TestCase.
- Os testes são métodos públicos que são nomeados test*. Exemplo: testSum().
- Dentro dos métodos de teste são usadas assertions, que são métodos do PHPUnit que servem para validar que o valor de um teste é o valor esperado.
