-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 08/08/2025 às 02:31
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `projeto biblioteca`
--
CREATE DATABASE IF NOT EXISTS `projeto biblioteca` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `projeto biblioteca`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `categoria`
--

CREATE TABLE `categoria` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `descricao` text DEFAULT NULL,
  `criado_em` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `emprestimos`
--

CREATE TABLE `emprestimos` (
  `id` int(11) NOT NULL,
  `id_livro` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `data_emprestimo` date NOT NULL,
  `data_devolucao` date DEFAULT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `livros`
--

CREATE TABLE `livros` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `autor` varchar(255) NOT NULL,
  `descricao` text NOT NULL,
  `Instituicao` varchar(50) NOT NULL,
  `Ano` int(11) NOT NULL,
  `Edicao` varchar(10) NOT NULL,
  `Paginas` int(11) NOT NULL,
  `Tipo` varchar(15) NOT NULL,
  `Formato` varchar(100) NOT NULL,
  `Licenca` varchar(100) NOT NULL,
  `foto` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `livros`
--

INSERT INTO `livros` (`id`, `titulo`, `autor`, `descricao`, `Instituicao`, `Ano`, `Edicao`, `Paginas`, `Tipo`, `Formato`, `Licenca`, `foto`) VALUES
(3, 'A Arte da Guerra', 'Sun Tzu', '\r\nFilósofo que se tornou general cujo nome individual era Wu, nasceu no Estado de Ch’i na China, próximo de 500 a.C., em um auge das ciências militares e legislativas daquele país. Sun Tzu escreveu a “Arte da Guerra”.\r\nA Arte da Guerra de Sun Tzu é um clássico da estratégia militar que oferece ensinamentos aplicáveis tanto em contextos de guerra quanto em situações cotidianas. A importância da estratégia na guerra é vital para o Estado e deve ser bem manejada, a vitória depende de cinco fatores: doutrina, tempo, terreno, comando e disciplina. Os princípios da Guerra se baseia no engano sendo crucial conhecer o inimigo e a si mesmo para vencer com táticas e manobras utilizando ataques diretos e indiretos para confundir o inimigo.\r\n', 'Cultura Brasil', 2010, '058', 100, 'Digital', 'pdf', 'Domínio Público', 'https://m.media-amazon.com/images/I/71FMCr5Z9rL.jpg'),
(4, 'O Pequeno Príncipe', 'Antoine de Saint', '\r\nPublicado pela primeira vez em 1942 nos Estados Unidos e, três anos mais tarde, na França, O pequeno príncipe tornou-se obra de apelo universal, um clássico moderno traduzido para mais de oitenta idiomas.\r\nSuas páginas abrigam valiosas lições sobre a solidão, a amizade, o tempo, a vida e a morte, compartilhadas conosco por meio do pequeno habitante do asteroide B 612. Apesar de escrito e narrado por um adulto, O pequeno príncipe se dirige, desde suas primeiras linhas, às crianças.\r\nÉ, na verdade, uma ode à infância, uma delicada viagem a esse planeta que aos poucos abandonamos, vivendo em prol das nossas vaidades, vícios, obrigações, números e demais coisas “sérias e importantes”.\r\nDeixe-se conquistar pela fábula atemporal de Antoine de Saint-Exupéry e acompanhe o pequeno príncipe em sua jornada rumo ao nosso planeta. Lembre-se apenas de fechar um pouco os olhos e abrir bem o coração.\r\nPois o essencial, como nos têm ensinado o pequeno príncipe e sua amiga raposa, por mais de setenta anos, é invisível aos olhos.\r\n', 'Virtual Books', 1943, '1ª Edição', 120, 'Livro Digital', 'pdf', 'Domínio Público', 'https://m.media-amazon.com/images/I/61NHEYzP6kL._UF1000,1000_QL80_.jpg'),
(5, 'A Bela e a Fera', 'Gabrielle Suzanne', 'A Bela e a Fera é um conto de fadas clássico sobre uma jovem chamada Bela que se oferece para viver no lugar de seu pai como prisioneira de uma fera em um castelo encantado. A fera, outrora um príncipe vaidoso, busca o amor verdadeiro para quebrar a maldição que a transformou em fera e reverter o feitiço sobre o castelo e seus habitantes. Bela, inicialmente com medo, começa a conhecer a Fera e a perceber sua bondade interior, desafiando os preconceitos sobre a aparência e aprendendo a amar a Fera por quem ela é. \r\n', 'LTY', 2020, '1° edição', 150, 'livro digital', '.pdf', 'gratuita', 'https://m.media-amazon.com/images/I/718bxXoq9gL._UF1000,1000_QL80_.jpg'),
(6, 'A Divina Comédia', 'Dante Alighieri', 'A divina comédia é a obra-prima do escritor italiano Dante Alighieri. Ela foi escrita no início do século XIV e faz parte do humanismo. Nessa narrativa em versos, Dante utiliza decassílabos e introduz na literatura a terza rima: o primeiro verso rima com o terceiro, ao passo que o segundo rima com o primeiro e o terceiro versos da próxima estrofe.\r\n\r\n', 'eBoocksBrasil', 123, '1º edição', 696, 'Literatura', 'pdf', 'Dominio Publico', 'https://m.media-amazon.com/images/I/91zj0WZtIYL.jpg'),
(7, 'O Banqueiro Anarquista', 'Fernando Pessoa', 'O conto se desenvolve como um diálogo entre o narrador e um amigo, um banqueiro que se declara anarquista. O narrador, surpreso com a afirmação, questiona o banqueiro sobre como essa posição é possível, dado o contexto de capitalismo e sistema financeiro que o banqueiro representa. ', '', 1922, '1° edição', 60, 'Literatura', 'pdf', 'Dominio Publico', 'https://m.media-amazon.com/images/I/81F5kICVjnL._AC_UL320_.jpg'),
(8, 'A Hipótese do amor', 'Ali Hazelwood e Thaís Britto', 'A trama de A hipótese do amor gira em torno de Olive Smith, uma estudante de PhD em Biologia que, para convencer sua melhor amiga Anh de que superou uma paixonite, beija impulsivamente o primeiro homem que encontra no corredor. Infelizmente, esse homem acaba sendo Adam Carlsen, um jovem professor renomado e temido por sua personalidade difícil e críticas impiedosas.\r\n\r\nDepois desse encontro constrangedor, Olive propõe um acordo inusitado: fingir um relacionamento que beneficiaria ambos. Para ela, a farsa provaria a Anh que está seguindo em frente romanticamente. Para Adam, significaria convencer a administração da universidade de que está estável em Stanford e não planeja aceitar ofertas de outras instituições.', 'eBoocksBrasil', 45, '2º edição', 34, 'Romance', 'pdf', 'eBooksBrasil', 'https://m.media-amazon.com/images/I/71fPFgNoQ0L._SY342_.jpg'),
(9, 'A Cabana', 'William P. Young', 'A Cabana é um romance de ficção cristã que conta a história de Mackenzie Allen Phillips, um homem devastado pelo desaparecimento de sua filha mais nova, Missy. Anos depois da tragédia, ele recebe um misterioso bilhete supostamente enviado por Deus, convidando-o a retornar à cabana onde evidências do crime foram encontradas. Lá, Mack inicia uma jornada espiritual transformadora que desafia suas crenças sobre fé, dor, perdão e amor divino.', 'Editora Arqueiro (edição brasileira)', 2008, '1ª edição ', 240, 'Romance/Ficção ', 'Digital (eBook)', 'Direitos autorais reservados', 'https://a-static.mlcdn.com.br/1500x1500/livro-a-cabana/magazineluiza/222773800/a67d216021a3efbc04fa312d7a936848.jpg'),
(11, 'Alice País Maravilhas', 'Lewis Carroll', 'Charles Lutwidge Dodgson mais conhecido como CARROLL, LEWIS, seu nome está inscrito na história da literatura mundial por ser o autor de Alice no País das Maravilhas, o mais estranho e fascinante livro para crianças jamais escrito. Alice no País das Maravilhas é um clássico da literatura infantil escrito por Lewis Carroll. A história segue as aventuras de Alice, uma menina curiosa que cai em uma toca de coelho e entra em um mundo fantástico cheio de criaturas peculiares e situações absurdas. Aqui está um resumo dos principais pontos do livro: Alice segue um coelho branco e cai em uma toca, entrando em um mundo mágico. Alice encontra personagens estranhos como o Chapeleiro Maluco, a Lebre de Março e o Gato de Cheshire, cada um com suas próprias excentricidades. Alice experimenta mudanças de tamanho ao beber poções e comer bolos, o que a coloca em situações inusitadas. Alice participa de um jogo de croqué com a temperamental Rainha de Copas, que constantemente ordena a decapitação de seus súditos. Alice é chamada como testemunha em um julgamento absurdo, onde a lógica é distorcida e as regras são arbitrárias. No final, Alice acorda e percebe que suas aventuras no País das Maravilhas foram apenas um sonho.', 'eBooks Brasil', 2002, '1ª Edição', 125, 'Livro Digital', '.pdf', 'Domínio Público', 'https://m.media-amazon.com/images/I/91A88pW0+CL._UF1000,1000_QL80_.jpg');

-- --------------------------------------------------------

--
-- Estrutura para tabela `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `token_recuperacao` varchar(255) NOT NULL,
  `data_criacao` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `autor` varchar(255) NOT NULL,
  `descricao` text DEFAULT NULL,
  `instituicao` varchar(255) DEFAULT NULL,
  `ano` int(11) DEFAULT NULL,
  `edicao` varchar(50) DEFAULT NULL,
  `paginas` int(11) DEFAULT NULL,
  `tipo` varchar(100) DEFAULT NULL,
  `formato` varchar(100) DEFAULT NULL,
  `licenca` varchar(100) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telefone` varchar(15) DEFAULT NULL,
  `endereco` varchar(255) DEFAULT NULL,
  `cpf` char(14) DEFAULT NULL,
  `senha_hash` varchar(255) NOT NULL,
  `data_criacao` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `telefone`, `endereco`, `cpf`, `senha_hash`, `data_criacao`) VALUES
(1, 'Roselene Aparecida da Silva Yokoyama', 'roselene_31@hotmail.com', '19971194760', NULL, '32562019890', '79093183Ro.*', '2025-06-17 23:30:15'),
(2, 'Marcelo Yokoyama', 'marceloyokyama@gmail.com', '19971194770', NULL, '32369535865', '123456*', '2025-07-23 23:22:46'),
(4, 'Roselene Aparecida ', 'rose@gmail', '1934080550', NULL, '12345678978', '789789', '2025-08-01 23:08:38'),
(5, 'Matheus Bruno', 'matheus@gmail', '1996325874', NULL, '90902001987', '232323', '2025-08-01 23:22:26'),
(6, 'Jose Assumpção', 'jose.assumpcao@gmail.com', '12998753692', NULL, '11235625802', '$2y$10$l75Bw9xpGYyhIOBMpz1vcut9W8ArDQhcWEQet0CTYmTH0HVyyRtOG', '2025-08-06 01:13:47'),
(10, 'joao', 'joao@gmail.com', '19998756897', NULL, '12345678925', '202cb962ac59075b964b07152d234b70', '2025-08-06 23:07:56');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `emprestimos`
--
ALTER TABLE `emprestimos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_livro` (`id_livro`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Índices de tabela `livros`
--
ALTER TABLE `livros`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `cpf` (`cpf`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `emprestimos`
--
ALTER TABLE `emprestimos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `livros`
--
ALTER TABLE `livros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `emprestimos`
--
ALTER TABLE `emprestimos`
  ADD CONSTRAINT `emprestimos_ibfk_1` FOREIGN KEY (`id_livro`) REFERENCES `livros` (`id`),
  ADD CONSTRAINT `emprestimos_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
