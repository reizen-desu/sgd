# Sistema de Gestão de Diaristas

---

`Autor: Reizen Iunus Bezerra dos Santos`

---

## Contextualização

> Diarista - que ou quem tem seu salário calculado por dia. - _Dicio_

Já é costume ter uma empregada doméstica, e algumas até dormiam nas casas onde trabalhavam. Ela fazia vários tipos de atividades: limpeza, lavar roupa, cozinhar, cuidar das crianças e assim por diante.

Com o passar do tempo, as coisas foram mudando e os empregos foram ficando cada vez mais especializados. É claro, ainda existem as empregadas domésticas, que fazem as tarefas diárias e recebem um salário mensal, mas muita gente tem optado por contratar profissionais especializados para a realização de serviços mais específicos por períodos curtos.

Por exemplo, para cuidar das crianças, contrata-se uma babá por determinado período do dia. E muitos outros serviços dependendo da necessidade que se pretende.

---

## Problema

As diaristas são consideradas trabalhadoras autônomas e trabalham esporadicamente, não possuindo os direitos trabalhistas que as empregadas domésticas têm (INSS, férias, etc).

Há vezes que precisamos de alguém para contractar para fazer algum trabalho no fim de semana ou até mesmo um trabalho rotineiro. Mas na maioria das vezes não temos onde encontrar, ou por vezes queremos alguém que tenha uma especialidade em específico.

Por vezes recorremos à recomendações de amigas mas nem sempre eles tem quem recomendar, daí que o website se tornará útil.

---

## Objectivos

O sistema tem como objectivo tornar fácil a procura de uma diarista. Durante o registo será possível registar como contractante ou contratado.

Nessa perspectiva, como alguém que procura uma diarista (contratante), ela irá se cadastrar e poderá:

- Publicar anúncios de procura
- Dizer o tipo de serviço que quer ou uma especialidade em específico (cozinheira, faxineira, babá, etc)
- Deixar uma avaliação à diaristas previamente contratadas
- Definir a localização

Na perspectiva do contracto, temos a **diarista**, que depois de se cadastrar, poderá também:

- Se candidatar para anúncios publicados
- Registar dados de contacto, endereço e mais outras informações relevantes.
- Definir o estado (se está disponível para solicitação ou não)

Cada usuário deve possuir um único e pessoal:

- Código de identificação - _usuário_
- Código de autenticação - _password_

---

## Ferramentas

|                                  |                                                                                                 |
| -------------------------------: | ----------------------------------------------------------------------------------------------- |
|                   **Linguagens** |                                                                                                 |
|                        Front-end | HTML5, CSS3 (Bootstrap5), Javascript                                                            |
|                         Back-end | PHP, MySQL                                                                                      |
|                             <br> |                                                                                                 |
|                       **Editor** | Visual Studio Code                                                                              |
|              **Chrome DevTools** | Para testagem de layout em diferentes tamanhos de tela<br>e diagonosticar problemas rapidamente |
|                       **Github** | Baseado em Git, para o versionamento e para a<br>hospedagem do projecto                         |
| [Obsidian](https://obsidian.md/) | Para a elaboração da documentação e outros guias de ajuda do sistema                            |

---

## Requisitos Funcionais e Não funcionais

### Requisitos Funcionais

- No cadastro, temos dois níveis para tal:
  1.  **Diarista**, que ao criar nova conta, vai poder...
      - Registar informações pessoais como nome, data de nascimento, sexo
      - Registar informações de contacto e residência
      - Registar suas especialidades e uma curta descrição
      - Escolher se quer tornar o perfil público ou não
  2.  **Visitante**, que ao criar nova conta, poderá
      - Visualizar perfis de diaristas
      - Dar "gosto" nos perfis
- Entrar nas contas efectuadas no cadastro
- Registar informações de registro para visitantes procurando uma diarista
- Consulta de dados do diarista pelo usuário visitante

---

### Requisitos não-funcionais

- O sistema deve ser responsivo
- O sistema se conecta com o banco de dados MySQL
- O sistema pode correr em qualquer navegador

---

## Segurança

No quesito segurança, usei... md5 para o hash de senhas, para que em leaks de base de dados, os dados do usuários sensíveis não sejam visíveis.

- Para a **encriptação das senhas** (hash) durante o registro usei a função `md5` do PHP.
  - Hashing nas senhas para caso a base de dados caia nas mãos erradas, ele não saberá as senhas.
- Em relação a SQL injection, usei o PDO com prepared statements.
- Para ataques Cross-Site Scripting (XSS), há risco que possa conter código malicioso. Por isso, é necessário escapar dados do formulário usando a função `htmlspecialchars()` do PHP antes de apresentar na tela, de modo que qualquer tag HTML que ele contenha não execute.
  - Por exemplo, depois de escapar caracteres especiais da string `<script>alert("XSS")</script>` ele se torna `&lt;script&ht;aler("XSS")&lt;/script&gt;` que claramente não é executado pelo navegador.

---
