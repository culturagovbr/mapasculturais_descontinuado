# Criando _issues_

Para criar _issues_ no repositório, siga os seguintes passos:
- Verifique se já não foi criado algo relatando o mesmo problema na página de _issues_
- Dê um nome (em português) para sua _issue_ que não seja muito grande. Só indique o problema.
- Na descrição da _issue_, relate o ocorrido e explique como chegar ao erro.

## Exemplo de uma _issue_

### _Operação_ não permitida em página _x_

Quando loga-se como administrador e tenta-se realizar o percurso _y_, há uma mensagem
de erro que impede a operação por parte do administrador.

# Criando _pull requests_

Caso você acredite que tenha terminado sua contribuição, você pode criar um _pull request_. Para isso, segue-se, geralmente, os seguintes passos:
- Verifique se já não há um _pull request_ com a mesma contribuição.
- Crie _pull requests_ atômicos. Ou seja, em um _pull request_ resolva apenas um problema ou problemas relacionados. Não resolva várias _issues_ diferentes com um único _pull request_. Isso dificulta a revisão e o _rollback_, caso seja necessário.
- No campo de nome do _pull request_, coloque o efeito prático da sua contribuição.
- No campo de descrição, escreva em linhas gerais o que seu código está fazendo e como está sendo feito, mas sem entrar em detalhes técnicos demais! Os revisores estão lá para isso.
- Fique atento ao seu _pull request_ depois de abri-lo. Os revisores podem comentar no mesmo para tirar dúvidas ou pedir mudanças, de forma que você possa refiná-lo.

Depois desses passos, seu _pull request_ pode ser integrado e você pode contribuir em outras _issues_.

## Exemplo de um _pull request_  

### Adiciona alternativa de ambiente de desenvolvimento com docker-compose

Cria um Dockerfile e um docker-compose para fazer _build_ de containers utilizando diferentes containers para a aplicação e banco de dados.
