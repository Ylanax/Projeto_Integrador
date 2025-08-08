# Biblioteca Virtual — Navegantes do Conhecimento

Projeto Integrador do Curso Técnico em Informática.

## Descrição

A **Biblioteca Virtual — Navegantes do Conhecimento** é uma plataforma web criada para democratizar o acesso à leitura e ao conhecimento, promovendo a inclusão literária para pessoas de todas as idades. O projeto visa unir gerações por meio de livros digitais, incentivando o aprendizado, a troca de experiências e o desenvolvimento pessoal.

## Funcionalidades

- Cadastro e autenticação de usuários
- Listagem e pesquisa de livros disponíveis
- Visualização de detalhes dos livros
- Página inicial com informações e curiosidades sobre o projeto
- Página de contato e links para redes sociais
- Interface responsiva para diferentes dispositivos

## Estrutura do Projeto

```
/
├── cabecalho.php           # Cabeçalho comum das páginas
├── conexao.php             # Conexão com o banco de dados MySQL
├── estilo.css              # Estilos personalizados
├── imagens/                # Imagens utilizadas no site
├── index.php               # Página inicial
├── livros.php              # Listagem de livros
├── paginainicial.php       # Página inicial alternativa
├── paginasemlogin.php      # Página para usuários não autenticados
├── rodape.php              # Rodapé comum das páginas
└── sistema/
    ├── cadastrar.php       # Cadastro de novos usuários
    ├── criarconta.php      # Formulário de criação de conta
    ├── login.php           # Autenticação de usuários
    ├── logout.php          # Encerramento de sessão
    └── validar.php         # Validação de dados de login
```

## Como Executar

1. Clone ou copie o projeto para o diretório do seu servidor web (exemplo: `htdocs` no XAMPP).
2. Crie um banco de dados MySQL chamado `projeto biblioteca`.
3. Importe as tabelas necessárias (veja a seção Banco de Dados).
4. Configure as credenciais do banco de dados em `conexao.php`.
5. Certifique-se de que o Apache e o MySQL estejam ativos.
6. Acesse `index.php` pelo navegador.

## Banco de Dados

O projeto utiliza MySQL. Crie as seguintes tabelas:

**Tabela `usuarios`:**
- `id` (int, auto_increment, primary key)
- `nome` (varchar)
- `email` (varchar)
- `telefone` (varchar)
- `cpf` (varchar)
- `senha_hash` (varchar)

**Tabela `livros`:**
- `id` (int, auto_increment, primary key)
- `titulo` (varchar)
- `autor` (varchar)
- `descricao` (text)
- `arquivo` (varchar) — caminho do arquivo digital do livro

Adapte os campos conforme a necessidade do seu projeto.

## Tecnologias Utilizadas

- PHP 7+
- MySQL
- HTML5 & CSS3
- Bootstrap 5

## Contribuição

Sinta-se à vontade para sugerir melhorias ou reportar problemas. Pull requests são bem-vindos!

## Autoras

- Estudantes do Curso Técnico em Informática

---

**"Navegantes do Conhecimento — Unindo Gerações pela Leitura"**

