# Sistema de Gestão de Diaristas

This project is being rewritten in [Vue 3](https://github.com/reizen-desu/Vue-Gestao-de-Diaristas) for the frontend and Laravel for the backend.
Este projecto está sendo reescrito em [Vue 3](https://github.com/reizen-desu/Vue-Gestao-de-Diaristas) para o frontend e Laravel para o backend.

## Sobre o projecto

O SGD é um sistema que possibilitará a gestão de diaristas. O sistema (no momento) irá se focar mais no utilizador diarista, onde poderá se cadastrar e publicar anúncios de acordo com a sua especialidade.

Um outro utilizador (visitante) poderá percorrer a lista de diaristas e caso tenha interesse, notificar a diarista caso pretenda se comunicar mais a fundo.

## Tecnologias usadas

- PHP
- HTML5
- CSS3
  - Bootstrap 5

## Guia de Inicialização


### Pré-requisitos

> Uma versão actualizada do Xampp (ou equivalente) ou alternativamente:

- PHP 8.1+.
- Apache 2.4+
- phpMyAdmin 5.1+

### Instalação

1. Clonar ou baixar o projecto.
2. Criar uma pasta na `sgd` no directório `htdocs` do XAMPP e extrair o conteúdo do ficheiro baixado dentro da pasta `sgd`.
3. Iniciar o Apache e o MySQL no XAMPP e ir ate a interface do phpMyAdmin `localhost/phpmyadmin` (no navegador) e adicionar a base de dados com o nome `sgd`.
4. Importar o ficheiro `sgd.sql` ou copiar o conteúdo e executar no ambiente SQL do sgd.
5. Finalmente executar o projecto com o nome que criamos a nossa pasta: `localhost/sgd` (no navegador).

## Estrutura do directório do projecto

| Directório   | Descrição                                        |
| ------------ | ------------------------------------------------ |
| `assets`     | Ficheiros multimédia e código JS e CSS           |
| `model`      | Ficheiros de conexão com a base de dados         |
| `controller` | Irá processar os dados inseridos pelo utilizador |
| `view`       | Páginas que o utilizador poderá observar         |
