# Biblioteca Virtual — Navegantes do Conhecimento

Projeto Integrador do Curso Técnico em Informática.

## Descrição

A **Biblioteca Virtual** é uma plataforma web desenvolvida para promover a inclusão literária e o acesso ao conhecimento para pessoas de todas as idades. O objetivo é unir gerações por meio da leitura de livros digitais, incentivando o aprendizado, a troca de experiências e o desenvolvimento pessoal.

## Funcionalidades

- Cadastro e login de usuários
- Listagem de livros disponíveis
- Visualização de detalhes dos livros
- Página inicial com curiosidades e informações sobre o projeto
- Página de contato e links para redes sociais

## Estrutura do Projeto

```
/
├── cabecalho.php
├── conexao.php
├── estilo.css
├── imagens/
├── index.php
├── livros.php
├── paginainicial.php
├── paginasemlogin.php
├── rodape.php
└── sistema/
    ├── cadastrar.php
    ├── criarconta.php
    ├── login.php
    ├── logout.php
    └── validar.php
```

## Como Executar

1. Clone ou copie o projeto para o diretório do seu servidor web (ex: `htdocs` no XAMPP).
2. Configure o banco de dados MySQL conforme as informações em `conexao.php`.
3. Certifique-se de que o servidor web e o MySQL estão ativos.
4. Acesse `index.php` pelo navegador.

## Banco de Dados

O projeto utiliza MySQL. Crie um banco de dados chamado `projeto biblioteca` e uma tabela `usuarios` com os seguintes campos:

- `id` (int, auto_increment, primary key)
- `nome` (varchar)
- `email` (varchar)
- `telefone` (varchar)
- `cpf` (varchar)
- `senha_hash` (varchar)

E uma tabela `livros` para os livros disponíveis.

## Tecnologias Utilizadas

- PHP
- MySQL
- HTML5 & CSS3
- Bootstrap 5

## Autoras

- Estudantes do Curso Técnico em Informática

---

**"Navegantes do Conhecimento

