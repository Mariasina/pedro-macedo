-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 28-Nov-2022 às 19:12
-- Versão do servidor: 10.4.25-MariaDB
-- versão do PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `pedro_macedo`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `empresa`
--

CREATE TABLE `empresa` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `proprietarios` varchar(100) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `telefone` varchar(100) NOT NULL,
  `comentario` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `empresa`
--

INSERT INTO `empresa` (`id`, `nome`, `proprietarios`, `endereco`, `telefone`, `comentario`) VALUES
(1, 'Colégio Estadual Pedro Macedo', 'Maria Carolina', 'Av. Rep. Argentina, 2376 - Portão, Curitiba - PR', '(41) 3345-3993', 'Trabalho multidiciplinar que foi criado visando atingir melhor qualidade ao acessar o portal do colé'),
(2, '', 'Emyli Caroline', '', '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `perfil_usuario`
--

CREATE TABLE `perfil_usuario` (
  `cod` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `perfil_usuario`
--

INSERT INTO `perfil_usuario` (`cod`, `nome`) VALUES
(1, 'Administrador'),
(2, 'Moderador');

-- --------------------------------------------------------

--
-- Estrutura da tabela `publicacao`
--

CREATE TABLE `publicacao` (
  `cod` int(11) NOT NULL,
  `titulo` varchar(500) NOT NULL,
  `descricao` varchar(10000) NOT NULL,
  `imagem` varchar(200) NOT NULL,
  `data` varchar(100) NOT NULL,
  `hora` varchar(100) NOT NULL,
  `usuario_cod` int(11) NOT NULL,
  `pagina` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `publicacao`
--

INSERT INTO `publicacao` (`cod`, `titulo`, `descricao`, `imagem`, `data`, `hora`, `usuario_cod`, `pagina`) VALUES
(1, 'ENSINO FUNDAMENTAL', 'Do 6º ao 9º ano do Ensino Fundamental.<br>\r\nAnual<br>\r\nDuração: 4 anos<br>\r\nTurno: Tarde<br>\r\n<br>\r\n<center><strong>DOCUMENTOS OBRIGATÓRIOS PARA MATRÍCULA ESCOLAR NA REDE ESTADUAL DE ENSINO</strong></center>\r\n<br>\r\n\r\n- Certidão de Nascimento<br>\r\n- Carteira de Identidade<br>\r\n- 1 Foto 3x4<br>\r\n- Fatura da concessionária de energia elétrica atualizada (máximo de 03 meses). Quando a fatura não estiver em nome do responsável pelo aluno, apresentar conjuntamente, outro comprovante de endereço em nome da mãe/pai/responsável pelo aluno.<br>\r\n- Histórico Escolar ou Declaração de Escolaridade da Instituição de origem.<br>\r\n                                                ', '', '28/11/2022', '02:07', 1, 2),
(2, 'ENSINO MÉDIO', 'Do 1º ao 3º ano.<br>\r\nAnual<br>\r\nDuração: 3 anos<br>\r\nTurnos:  Manhã, Tarde e Noite<br>\r\n<br>\r\n<center><b>DOCUMENTOS OBRIGATÓRIOS PARA MATRÍCULA ESCOLAR NA REDE ESTADUAL DE ENSINO</b></center>\r\n<br>\r\n- Certidão de Nascimento<br>\r\n- Carteira de Identidade - RG<br>\r\n- Cadastro de Pessoa Física - CPF (para alunos da Educação Profissional)<br>\r\n- Fatura da concessionária de energia elétrica atualizada (máximo de 03 meses). Quando a fatura não estiver em nome do responsável pelo aluno, apresentar conjuntamente, outro comprovante de endereço em nome da mãe/pai/responsável pelo aluno.<br>\r\n- Histórico Escolar ou Declaração de Escolaridade da Instituição de origem.<br>\r\n<br>\r\n<center><b>ENSINO MÉDIO INTEGRADO</b></center>\r\n<br>\r\n• INFORMÁTICA INTEGRADO<br>\r\n<br>\r\nA reestruturação Curricular do Curso Técnico em Informática visa o aperfeiçoamento na concepção de uma formação técnica que articule trabalho, cultura, ciência e tecnologia como princípios que sintetizem todo o processo formativo.<br>\r\nO uso da informática disseminou-se nos últimos anos, criando a necessidade de profissionais de diversos níveis com capacidades para criar, especificar e manter funcionando sistemas computacionais de tamanhos e características variadas. Profissionais de nível técnico na área de informática são importantes na disseminação e popularização da mesma.\r\n<br>\r\nRequisito: Ter cursado 8ª série ou 9º ano.<br>\r\nAnual<br>\r\nDuração: 4 anos (Ensino Médio + Técnico em Informática)<br>\r\nTurno: Manhã, Tarde e Noite<br>\r\n<br>\r\n<a href=\"http://www.ctapedromacedo.seed.pr.gov.br/redeescola/escolas/9/690/142/arquivos/File/PlanodeCurso/InformaticaIntegrado.pdf\">Clique aqui</a> para ter acesso ao Plano de Curso\r\n<br><br>\r\n• SECRETARIADO INTEGRADO<br>\r\n<br>\r\nO Curso Técnico em Secretariado vem ao encontro da necessidade da formação do Técnico numa perspectiva de totalidade e constitui-se numa atividade com crescente exigência de qualificação.<br>\r\nA organização dos conhecimentos, no Curso Técnico em Secretariado, enfatiza o resgate da formação humana onde o aluno, como sujeito histórico, produz sua existência pelo enfrentamento consciente da realidade dada, produzindo valores de uso, conhecimentos e cultura por sua ação criativa.\r\n<br>\r\nRequisito: Ter cursado 8ª série ou 9º ano.<br>\r\nAnual<br>\r\nDuração: 4 anos (Ensino Médio + Técnico em Secretariado)<br>\r\nTurno: Manhã<br>                        ', '', '28/11/2022', '02:25', 1, 3),
(3, '', '<b>SECRETARIADO:</b>\r\n<br>\r\nA reestruturação Curricular do Curso Técnico em Secretariado visa o aperfeiçoamento na concepção de uma formação técnica que articule trabalho, cultura, ciência e tecnologia como princípios que sintetizem todo o processo formativo.<br>\r\nO Curso Técnico em Secretariado vem ao encontro da necessidade da formação do Técnico numa perspectiva de totalidade e constitui-se numa atividade com crescente exigência de qualificação. A organização dos conhecimentos, no Curso Técnico em Secretariado, enfatiza o resgate da formação humana onde o aluno, como sujeito histórico, produz sua existência pelo enfrentamento consciente da realidade dada, produzindo valores de uso, conhecimentos e cultura por sua ação criativa.<br>\r\nDuração: 12 meses – 2 semestres.<br>', '', '28/11/2022', '02:44', 1, 4),
(4, '', '<b>INFORMÁTICA:</b>\r\n<br>\r\nA área de informática está no quotidiano do trabalho em todos os setores econômicos e presente em várias etapas do processo produtivo, do comércio e dos serviços exercendo a condição de base para o perfeito funcionamento do sistema. Por outro lado, a informática está presente no cotidiano de todas as pessoas. Assim é uma área que demanda permanente atualização e apresenta uma crescente exigência de trabalhadores qualificados. O uso da informática disseminou-se nos últimos anos, criando a necessidade de profissionais de diversos níveis com capacidades para criar, especificar e manter funcionando sistemas computacionais de tamanhos e características variadas. Profissionais de nível técnico na área de informática são importantes na disseminação e popularização da mesma.<br>\r\nUma parcela da população jovem que concluiu o ensino médio e que não escolheu ou logrou continuar seus estudos a nível superior e que pretende ingressar no mundo do trabalho com uma capacitação que lhe amplie as possibilidades tem no curso técnico subsequente a oportunidade de fazê-lo em tempo reduzido.<br>\r\nDuração: 18 meses - 3 semestres<br><br>\r\n                ', '../img/uploads/img_638449efd6493.jpg', '28/11/2022', '02:41', 1, 4),
(5, '', '<b>ADMINISTRAÇÃO:</b>\r\n<br>\r\nO Curso Técnico em Administração vem ao encontro da necessidade da formação do Técnico numa perspectiva de totalidade e constitui-se numa atividade com crescente exigência de qualificação.<br>\r\nA organização dos conhecimentos, no Curso Técnico em Administração, enfatiza o resgate da formação humana onde o aluno, como sujeito histórico, produz sua existência pelo enfrentamento consciente da realidade dada, produzindo valores de uso, conhecimentos e cultura por sua ação criativa.<br>\r\nDuração: 18 meses – 3 semestres<br>', '', '28/11/2022', '02:53', 1, 4),
(6, '', '<b>SEGURANÇA DO TRABALHO:</b>\r\n<br>\r\nO Curso Técnico em Segurança do Trabalho vem ao encontro da necessidade da formação do Técnico numa perspectiva de totalidade, o que significa recuperar a importância de trabalhar com os alunos os fundamentos científicos-tecnológicos presentes nas disciplinas da Formação Específica, evitando a compartimentalização na construção do conhecimento.<br>\r\nA proposta encaminha para uma formação onde a teoria e prática possibilitam aos alunos compreenderem a realidade para além de sua aparência onde os conteúdos não têm fins em si mesmos porque se constituem em sínteses da apropriação histórica da realidade material e social pelo homem.\r\nA organização dos conhecimentos, no Curso Técnico em Segurança do Trabalho enfatiza o resgate da formação humana onde o aluno, como sujeito histórico, produz sua existência pelo enfrentamento consciente da realidade dada, produzindo valores de uso, conhecimentos e cultura por sua ação criativa.<br>\r\nDuração: 18 meses – 3 Semestres<br>', '', '28/11/2022', '02:54', 1, 4),
(7, 'PROFISSIONALIZANTES', '<center><b>ENSINO TÉCNICO SUBSEQUENTE OU INTEGRADO AO ENSINO MÉDIO</b></center>', '', '28/11/2022', '02:49', 1, 4),
(15, 'Cursos de Aprimoramento:', ' • Curso de Aprimoramento em Língua Espanhola <br>\r\n• Curso de Aprimoramento em Língua Inglesa <br>\r\n• Curso de Aprimoramento em Língua Italiana   <br>     ', '', '28/11/2022', '14:22', 1, 5),
(16, 'Cursos Ofertados Pelo CELEM:', '• Curso Básico de Língua Alemã– Professora Elisete Antoniuk <br>\r\n• Curso Básico de Língua Espanhola – Professora Alinne Britez<br>\r\n• Curso Básico de Língua Inglesa – Professora Maria Cristina Pereira <br>\r\n• Curso Básico de Língua Italiana – Professora Sônia Terezinha Dalpissol Pereira <br>\r\n• Curso Básico de Língua Japonesa – Professora Nair Noriko Tanita <BR>', '', '28/11/2022', '14:24', 1, 5),
(17, 'Objetivos:', '• Tornar acessível ao aluno da escola pública à aquisição de outros idiomas objetivando auxiliar a construção da cidadania inclusive a globalizada; <br>\r\n• Viabilizar o acesso ao mercado de trabalho; <br>\r\n• Vislumbrar a aquisição de novos conhecimentos; <br>\r\n• Intermediar a aprendizagem do discente no tocante aos processos comunicativos, gramaticais e interpretativos dos idiomas a partir de atividades que explorem a conversação, a escrita e a leitura de diversos tipos de textos; <br>\r\n• Abordar aspectos culturais de outros países. <br>\r\n', '', '28/11/2022', '14:25', 1, 5),
(18, 'Pressupostos Teóricos', 'À convite de alguns professores com caráter informal, no ano de 2004, iniciaram-se aulas de Língua Espanhola e Inglesa ministrada pelas professoras voluntárias Rita Machoski e Tânia Lecink Marques. Após a constatação da competência e comprometimento do trabalho das citadas professoras, deram-se início ao processo de requisição de instalação do CELEM junto à SEED pela professora Joceli Teixeira Stella. <br> <br>\r\n\r\nO Centro de Línguas Estrangeiras Modernas – CELEM funciona oficialmente no Colégio Estadual Pedro Macedo, desde fevereiro de 2005, obedecendo a Resolução 2137/2004 e destinam-se a alunos, funcionários e professores da escola, bem como membros da comunidade escolar, atendendo cerca de quatrocentos e setenta e cinco alunos em turnos regulares e intermediários. <br> <br>\r\n\r\nA aprendizagem de Línguas é importante para o desenvolvimento psicopedagógico do ser humano, bem como para compreensão de valores sociais e aquisição de conhecimentos sobre outras culturas.\r\n\r\n', '', '28/11/2022', '14:26', 1, 5),
(19, 'CELEM - Centro de Línguas Estrangeiras Modernas', '', '', '28/11/2022', '14:27', 1, 5),
(20, 'Direção:', '<b> DIRETOR GERAL PROFESSOR : </b> <br>\r\nJOSÉ MARCOS DE PAULA <br>\r\n\r\n<b> DIRETORES AUXILIARES PROFESSORES: </b> <br>\r\nMARCIA  GODOY LEPCA <br>\r\nMARCIO LUIS HASSLER\r\n\r\n        ', '', '28/11/2022', '14:30', 1, 6),
(21, 'Secretaria:', '<b>Responsável:</b> <br>\r\nRaquel Kobarg <br> <br>\r\n\r\n', '', '28/11/2022', '14:32', 1, 7),
(22, '', '', '../img/uploads/img_6384f1c99951a.jpg', '28/11/2022', '14:37', 1, 10),
(23, '', '', '../img/uploads/img_6384f1d62f611.jfif', '28/11/2022', '14:37', 1, 10),
(24, '', '', '../img/uploads/img_6384f1df6a4c1.jpg', '28/11/2022', '14:37', 1, 10),
(25, '', '', '../img/uploads/img_6384f1e95ad17.jfif', '28/11/2022', '14:37', 1, 10),
(26, '', '', '../img/uploads/img_6384f1f1b0bfb.jfif', '28/11/2022', '14:37', 1, 10),
(27, '', '', '../img/uploads/img_6384f1fdf3874.jfif', '28/11/2022', '14:38', 1, 10),
(28, 'Fotos do Colégio ', '', '', '28/11/2022', '14:38', 1, 10),
(29, 'Atenção! Turmas do Informática Apresentam o TMD Essa Semana!', 'A turma do 4º Ano de Informática está se formando esse ano e as apresentações estão acontecendo no salão nobre. <br>\r\nCom a ajuda da coordenadora de curso Audlei Duarte Lecheta a turma de 2019 começa a encerrar mais uma fase de suas vidas. Agora iremos torcer para os mais recentes técnicos em informática terem um ótimo futuro pela frente! <br>\r\nObrigada turma de 2019! Vocês são nota 10!', '../img/uploads/img_6384f53fdf0cf.jpg', '28/11/2022', '14:51', 1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `cod` int(11) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `senha` varchar(45) NOT NULL,
  `pendencia` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `perfil_cod` int(11) NOT NULL,
  `id_empresa` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`cod`, `nome`, `email`, `senha`, `pendencia`, `status`, `perfil_cod`, `id_empresa`) VALUES
(1, 'admin', 'admin@gmail.com', '202cb962ac59075b964b07152d234b70', 0, 0, 1, 0),
(2, 'mari', 'mari@gmail.com', '202cb962ac59075b964b07152d234b70', 0, 0, 2, 0),
(3, 'emy', 'emyli@gmail.com', '202cb962ac59075b964b07152d234b70', 1, 0, 2, 0),
(4, 'rafael', 'rafa@gmail.com', '202cb962ac59075b964b07152d234b70', 0, 0, 2, 0);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `perfil_usuario`
--
ALTER TABLE `perfil_usuario`
  ADD PRIMARY KEY (`cod`);

--
-- Índices para tabela `publicacao`
--
ALTER TABLE `publicacao`
  ADD PRIMARY KEY (`cod`),
  ADD KEY `fk_usuario_cod` (`usuario_cod`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`cod`),
  ADD KEY `fk_perfil` (`perfil_cod`),
  ADD KEY `fk_empresa_id` (`id_empresa`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `empresa`
--
ALTER TABLE `empresa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `perfil_usuario`
--
ALTER TABLE `perfil_usuario`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `publicacao`
--
ALTER TABLE `publicacao`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
