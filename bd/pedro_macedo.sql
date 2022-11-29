-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 29-Nov-2022 às 06:47
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

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
(2, 'ENSINO MÉDIO', 'Do 1º ao 3º ano.<br>\r\nAnual<br>\r\nDuração: 3 anos<br>\r\nTurnos:  Manhã, Tarde e Noite<br>\r\n<br>\r\n<center><b>DOCUMENTOS OBRIGATÓRIOS PARA MATRÍCULA ESCOLAR NA REDE ESTADUAL DE ENSINO</b></center>\r\n<br>\r\n- Certidão de Nascimento<br>\r\n- Carteira de Identidade - RG<br>\r\n- Cadastro de Pessoa Física - CPF (para alunos da Educação Profissional)<br>\r\n- Fatura da concessionária de energia elétrica atualizada (máximo de 03 meses). Quando a fatura não estiver em nome do responsável pelo aluno, apresentar conjuntamente, outro comprovante de endereço em nome da mãe/pai/responsável pelo aluno.<br>\r\n- Histórico Escolar ou Declaração de Escolaridade da Instituição de origem.<br>\r\n<br>\r\n<center><b>ENSINO MÉDIO INTEGRADO</b></center>\r\n<br>\r\n• INFORMÁTICA INTEGRADO<br>\r\n<br>\r\nA reestruturação Curricular do Curso Técnico em Informática visa o aperfeiçoamento na concepção de uma formação técnica que articule trabalho, cultura, ciência e tecnologia como princípios que sintetizem todo o processo formativo.<br>\r\nO uso da informática disseminou-se nos últimos anos, criando a necessidade de profissionais de diversos níveis com capacidades para criar, especificar e manter funcionando sistemas computacionais de tamanhos e características variadas. Profissionais de nível técnico na área de informática são importantes na disseminação e popularização da mesma.\r\n<br>\r\nRequisito: Ter cursado 8ª série ou 9º ano.<br>\r\nAnual<br>\r\nDuração: 4 anos (Ensino Médio + Técnico em Informática)<br>\r\nTurno: Manhã, Tarde e Noite<br>\r\n<br>\r\n<a href=\"http://www.ctapedromacedo.seed.pr.gov.br/redeescola/escolas/9/690/142/arquivos/File/PlanodeCurso/InformaticaIntegrado.pdf\">Clique aqui</a> para ter acesso ao Plano de Curso\r\n<br><br>\r\n• SECRETARIADO INTEGRADO<br>\r\n<br>\r\nO Curso Técnico em Secretariado vem ao encontro da necessidade da formação do Técnico numa perspectiva de totalidade e constitui-se numa atividade com crescente exigência de qualificação.<br>\r\nA organização dos conhecimentos, no Curso Técnico em Secretariado, enfatiza o resgate da formação humana onde o aluno, como sujeito histórico, produz sua existência pelo enfrentamento consciente da realidade dada, produzindo valores de uso, conhecimentos e cultura por sua ação criativa.\r\n<br>\r\nRequisito: Ter cursado 8ª série ou 9º ano.<br>\r\nAnual<br>\r\nDuração: 4 anos (Ensino Médio + Técnico em Secretariado)<br>\r\nTurno: Manhã<br>                        ', '', '28/11/2022', '02:25', 1, 3),
(3, '', '<b>SECRETARIADO:</b>\r\n<br>\r\nA reestruturação Curricular do Curso Técnico em Secretariado visa o aperfeiçoamento na concepção de uma formação técnica que articule trabalho, cultura, ciência e tecnologia como princípios que sintetizem todo o processo formativo.<br>\r\nO Curso Técnico em Secretariado vem ao encontro da necessidade da formação do Técnico numa perspectiva de totalidade e constitui-se numa atividade com crescente exigência de qualificação. A organização dos conhecimentos, no Curso Técnico em Secretariado, enfatiza o resgate da formação humana onde o aluno, como sujeito histórico, produz sua existência pelo enfrentamento consciente da realidade dada, produzindo valores de uso, conhecimentos e cultura por sua ação criativa.<br>\r\nDuração: 12 meses – 2 semestres.<br><br>\r\n<a href=\"www.educadores.diaadia.pr.gov.br/arquivos/File/educacao_profissional/secretariado_subsequente.pdf\">  Matriz Curricular</a>', '', '28/11/2022', '02:44', 1, 4),
(4, '', '<b>INFORMÁTICA:</b>\r\n<br>\r\nA área de informática está no quotidiano do trabalho em todos os setores econômicos e presente em várias etapas do processo produtivo, do comércio e dos serviços exercendo a condição de base para o perfeito funcionamento do sistema. Por outro lado, a informática está presente no cotidiano de todas as pessoas. Assim é uma área que demanda permanente atualização e apresenta uma crescente exigência de trabalhadores qualificados. O uso da informática disseminou-se nos últimos anos, criando a necessidade de profissionais de diversos níveis com capacidades para criar, especificar e manter funcionando sistemas computacionais de tamanhos e características variadas. Profissionais de nível técnico na área de informática são importantes na disseminação e popularização da mesma.<br>\r\nUma parcela da população jovem que concluiu o ensino médio e que não escolheu ou logrou continuar seus estudos a nível superior e que pretende ingressar no mundo do trabalho com uma capacitação que lhe amplie as possibilidades tem no curso técnico subsequente a oportunidade de fazê-lo em tempo reduzido.<br>\r\nDuração: 18 meses - 3 semestres<br><br>\r\n<a href=\"redeescola/escolas/9/690/142/arquivos/Image/subINFO.JPG\">Matriz Curricular</a><br>\r\n<a href=\"redeescola/escolas/9/690/142/arquivos/File/PlanodeCurso/InformaticaIntegrado.pdf\">Plano de Curso<a/>\r\n                                ', '../img/uploads/img_638449efd6493.jpg', '28/11/2022', '02:41', 1, 4),
(5, '', '            <b>ADMINISTRAÇÃO:</b>\r\n<br>\r\nO Curso Técnico em Administração vem ao encontro da necessidade da formação do Técnico numa perspectiva de totalidade e constitui-se numa atividade com crescente exigência de qualificação.<br>\r\nA organização dos conhecimentos, no Curso Técnico em Administração, enfatiza o resgate da formação humana onde o aluno, como sujeito histórico, produz sua existência pelo enfrentamento consciente da realidade dada, produzindo valores de uso, conhecimentos e cultura por sua ação criativa.<br>\r\nDuração: 18 meses – 3 semestres<br><br>\r\n<a href=\"redeescola/escolas/9/690/142/arquivos/Image/subadm02.JPG\">Matriz Curricular</a><br>\r\n<a href=\"/redeescola/escolas/9/690/142/arquivos/File/PlanodeCurso/AdministracaoSubsequente.pdf\">Plano de curso</a>        ', '', '28/11/2022', '02:53', 1, 4),
(6, '', '                        <b>SEGURANÇA DO TRABALHO:</b>\r\n<br>\r\nO Curso Técnico em Segurança do Trabalho vem ao encontro da necessidade da formação do Técnico numa perspectiva de totalidade, o que significa recuperar a importância de trabalhar com os alunos os fundamentos científicos-tecnológicos presentes nas disciplinas da Formação Específica, evitando a compartimentalização na construção do conhecimento.<br>\r\nA proposta encaminha para uma formação onde a teoria e prática possibilitam aos alunos compreenderem a realidade para além de sua aparência onde os conteúdos não têm fins em si mesmos porque se constituem em sínteses da apropriação histórica da realidade material e social pelo homem.\r\nA organização dos conhecimentos, no Curso Técnico em Segurança do Trabalho enfatiza o resgate da formação humana onde o aluno, como sujeito histórico, produz sua existência pelo enfrentamento consciente da realidade dada, produzindo valores de uso, conhecimentos e cultura por sua ação criativa.<br>\r\nDuração: 18 meses – 3 Semestres<br><br>     \r\n\r\n<a href=\"cpmprofessores.blogspot.com/2021/08/matriz-curricular-curso-tecnico-em.html/\">Matriz Curricular</a><br>\r\n\r\n<a href=\"www.gestaoescolar.diaadia.pr.gov.br/arquivos/File/estudos_planejamento/fevereiro_2020/seguranca/curso_tecnico_em_seguranca_trabalho_subsequente.pdf\">Plano de Curso</a><br>                ', '', '28/11/2022', '02:54', 1, 4),
(7, 'PROFISSIONALIZANTES', '<center><b>ENSINO TÉCNICO SUBSEQUENTE OU INTEGRADO AO ENSINO MÉDIO</b></center>', '', '28/11/2022', '02:49', 1, 4),
(13, 'ENSINO FUNDAMENTAL', 'Do 6º ao 9º ano do Ensino Fundamental.<br>\r\nAnual<br>\r\nDuração: 4 anos<br>\r\nTurno: Tarde<br>\r\n<br>\r\n<center><b>DOCUMENTOS OBRIGATÓRIOS PARA MATRÍCULA ESCOLAR NA REDE ESTADUAL DE ENSINO</b></center>\r\n<br>\r\n- Certidão de Nascimento<br>\r\n- Carteira de Identidade<br>\r\n- 1 Foto 3x4<br>\r\n- Fatura da concessionária de energia elétrica atualizada (máximo de 03 meses). Quando a fatura não estiver em nome do responsável pelo aluno, apresentar conjuntamente, outro comprovante de endereço em nome da mãe/pai/responsável pelo aluno.\r\n- Histórico Escolar ou Declaração de Escolaridade da Instituição de origem.', '', '29/11/2022', '00:05', 1, 2),
(14, '', '<b>CURSOS DE APRIMORAMENTO:</b>\r\n<br>\r\n- Curso de Aprimoramento em Língua Espanhola<br>\r\n- Curso de Aprimoramento em Língua Inglesa<br>\r\n- Curso de Aprimoramento em Língua Italiana<br>', '', '29/11/2022', '01:03', 1, 5),
(15, '', '<b>CURSOS OFERTADOS PELO CELEM:</b>\r\n<br>\r\n- Curso Básico de Língua Alemã– Professora Elisete Antoniuk<br>\r\n- Curso Básico de Língua Espanhola – Professora Alinne Britez<br>\r\n- Curso Básico de Língua Inglesa – Professora Maria Cristina Pereira<br>\r\n- Curso Básico de Língua Italiana – Professora Sônia Terezinha Dalpissol Pereira<br>\r\n- Curso Básico de Língua Japonesa – Professora Nair Noriko Tanita<br>', '', '29/11/2022', '01:04', 1, 5),
(16, '', '            <b>OBJETIVOS</b>\r\n<br>\r\n- Tornar acessível ao aluno da escola pública à aquisição de outros idiomas objetivando auxiliar a construção da cidadania inclusive a globalizada;<br>\r\n- Viabilizar o acesso ao mercado de trabalho;<br>\r\n- Vislumbrar a aquisição de novos conhecimentos;<br>\r\n- Intermediar a aprendizagem do discente no tocante aos processos comunicativos, gramaticais e interpretativos dos idiomas a partir de atividades que explorem a conversação, a escrita e a leitura de diversos tipos de textos;<br>\r\n- Abordar aspectos culturais de outros países.<br>\r\n        ', '', '29/11/2022', '01:07', 1, 5),
(17, '', '<b>PRESSUPOSTOS TEÓRICOS</b><br>\r\nÀ convite de alguns professores com caráter informal, no ano de 2004, iniciaram-se aulas de Língua Espanhola e Inglesa ministrada pelas professoras voluntárias Rita Machoski e Tânia Lecink Marques. Após a constatação da competência e comprometimento do trabalho das citadas professoras, deram-se início ao processo de requisição de instalação do CELEM junto à SEED pela professora Joceli Teixeira Stella.<br>\r\n<br>\r\nO Centro de Línguas Estrangeiras Modernas – CELEM funciona oficialmente no Colégio Estadual Pedro Macedo, desde fevereiro de 2005, obedecendo a Resolução 2137/2004 e destinam-se a alunos, funcionários e professores da escola, bem como membros da comunidade escolar, atendendo cerca de quatrocentos e setenta e cinco alunos em turnos regulares e intermediários.<br>\r\n<br>\r\nA aprendizagem de Línguas é importante para o desenvolvimento psicopedagógico do ser humano, bem como para compreensão de valores sociais e aquisição de conhecimentos sobre outras culturas.<br>\r\n        ', '', '29/11/2022', '01:09', 1, 5),
(18, 'CELEM', '<center><b>Centro de Línguas Estrangeiras Modernas</b></center>', '', '29/11/2022', '01:11', 1, 5),
(19, 'DIREÇÃO', '<b>DIRETOR GERAL PROFESSOR: </b><br>\r\nJOSÉ MARCOS DE PAULA<br>\r\n<br>\r\n<b>DIRETORES AUXILIARES PROFESSORES:</b><br>\r\nMARCIA  GODOY LEPCA<br>\r\nMARCIO LUIS HASSLER<br>\r\n\r\n                ', '', '29/11/2022', '01:14', 1, 6),
(20, 'SECRETARIA', '', '../img/uploads/img_63858780b30fb.jpg', '29/11/2022', '01:16', 1, 7),
(21, '<a href=\"http://cpmprofessores.blogspot.com/\">EQUIPE MULDISCIPLINAR</a>', '', '', '29/11/2022', '01:18', 1, 8),
(22, 'ESPAÇO DO PROFESSOR', 'Já estão disponíveis as wikis para facilitar a comunicação entre os professores.<br>\r\nSão elas:<br>\r\n<br>\r\n<a href=\"http://ef-pm.wikispaces.com\"><b>- Ensino fundamental</b></a><br>\r\n<br>\r\n<a href=\"http://em-pm.wikispaces.com\"><b>- Ensino médio</b></a><br>\r\n<br>\r\n<a href=\"http://info-pm.wikispaces.com\"><b>- Técnico Informática</b></a><br>\r\n<br>\r\n<a href=\"http://sec-pm.wikispaces.com\"><b>- Técnico Secretariado</b></a><br>\r\n<br>\r\nUtilizem, criem, discutam.', '', '29/11/2022', '01:25', 1, 9),
(24, '', '', '../img/uploads/img_63858a6c5c613.jpg', '29/11/2022', '01:28', 1, 10),
(25, '', '', '../img/uploads/img_63858a8600763.jpg', '29/11/2022', '01:28', 1, 10),
(26, '', '', '../img/uploads/img_63858ac92745c.jpg', '29/11/2022', '01:30', 1, 10),
(27, '', '', '../img/uploads/img_63858af1ce06b.jpg', '29/11/2022', '01:30', 1, 10),
(28, '', '', '../img/uploads/img_63858b033e293.jpg', '29/11/2022', '01:30', 1, 10),
(29, '', '', '../img/uploads/img_63858b35ba724.jpg', '29/11/2022', '01:31', 1, 10),
(32, '', '', '../img/uploads/img_63858c0aa89dd.jpg', '29/11/2022', '01:35', 1, 11),
(33, '', '', '../img/uploads/img_63858c1e5d794.jpg', '29/11/2022', '01:35', 1, 11),
(34, 'NOSSOS PROFESSORES DE 2015', '<b>Queridos Professores e Nossa Direção Escolar</b>        ', '', '29/11/2022', '01:36', 1, 11),
(35, '', '<b>ENSINO TÉCNICO SUBSEQUENTE</b><br>\r\n<br>\r\n<a href=\"https://drive.google.com/file/d/11DuSwIVOWHVocjlFBPoVPYst1gnh6Pc0/view\">PDF</a>', '', '29/11/2022', '01:41', 1, 14),
(36, '', '<b>ENSINO FUNDAMENTAL, MÉDIO E MÉDIO INTEGRADO</b><br>\r\n<br>\r\n<a href=\"\"https://drive.google.com/file/d/11DuSwIVOWHVocjlFBPoVPYst1gnh6Pc0/view>PDF</a>', '', '29/11/2022', '01:43', 1, 14),
(37, 'CALENDÁRIOS 2022 COLÉGIO ESTADUAL PEDRO MACEDO', '', '', '29/11/2022', '01:43', 1, 14),
(38, 'MATERIAL PRA 6º ANOS', 'Segue o modelo de capa de trabalho para ser utilizado com os 6ºs anos.<br>\r\n<br>\r\nComo utilizar:<br>\r\nClique no link e salve o arquivo. (como a imagem abaixo)<br>\r\nPreencha os campos respectivos e imprima.<br>\r\n<br>', '../img/uploads/img_63858ed17b7b4.png', '29/11/2022', '01:47', 1, 15),
(39, 'ACERVO DA BIBLIOTECA CPM', 'Consulte <a href=\"https://drive.google.com/file/d/1yYuR85ic9HFW9Cf8lHw-JGrmsoVjEf3W/view\">aqui</a> o acervo da biblioteca do Colégio Pedro Macedo, atualizada por último em julho de 2021.', '../img/uploads/img_63858f9da4d06.jpg', '29/11/2022', '01:50', 1, 16),
(40, 'TERMO DE RESPONSABILIDADE - PARA RETORNO ÀS AULAS', 'Baixe o termo de responsabilidade <a href=\"https://cpmprofessores.blogspot.com/2021/09/termo-de-responsabilidade-para-retorno.html\">aqui</a>.', '../img/uploads/img_63859066454a5.jpg', '29/11/2022', '01:53', 1, 1),
(41, '<b>REMATRÍCULA, MATRÍCULA E CEVE 2022</b>', '<br>Clique <a href=\"https://www.areadoaluno.seed.pr.gov.br/servicosaoaluno/pages/publico/login.jsf;jsessionid=SkCaR1L1yPtbIattzj9AMZR4Sp47n3MSdFdx357W.sseed75003?dswid=9649\">aqui</a> para acessar a área do aluno.<br>\r\n<br>\r\nO Cadastro para Espera de Vaga Escolar (CEVE) estará disponível na própria Instituição de Ensino a partir do dia <b>07/01/2022</b>!<br>           ', '../img/uploads/img_638592486b490.jpg', '29/11/2022', '02:02', 1, 1),
(42, '<b>🚨 FORMULÁRIOS PARA INSCRIÇÃO NOS CURSOS TÉCNICOS 2022 🚨</b>', '<br><b>O CE Pedro Macedo informa que as inscrições para Cursos Técnicos Subsequentes ao Ensino Médio terão as inscrições prorrogadas até o dia 17/12/2021.</b><br><br>\r\n- Para quem já concluiu ou irá concluir o 3º ano do ensino Médio em dezembro/2021:<br>\r\n<br>\r\n(atenção:   * se você é concluinte do 3º ano o formulário exigirá o upload do Histórico Escolar digitalizado;<br>\r\n\r\n                   * se você concluirá o 3º ano em dezembro/2021 você poderá fazer o upload dos boletins ou fichas individuais do 1º ao 3º anos digitalizados).<br><br>\r\n\r\n📍Curso Técnico em Administração Subsequente (Duração de 1 ano e meio) Noite.<br>\r\n<br>\r\n📍Curso Técnico em Segurança do Trabalho Subsequente (Duração de 1 ano e meio) Noite.<br>\r\n<br><br>\r\nPreencha todos os formulários disponíveis no link abaixo (tenha em mãos todos os documentos originais para um correto preenchimento dos dados):\r\n<a href=\"https://forms.gle/JQH2Somvi7yHJQ5y8\">ACESSE AQUI</a>                        ', '', '29/11/2022', '02:07', 1, 1),
(43, '<b>INSCRIÇÕES PARA CURSOS TÉCNICOS 2023</b>', '<br><a href=\"https://docs.google.com/forms/d/e/1FAIpQLSfYBIesZvy3mPwfpfIPGI6Q2fPHdey_097oRdPbs5C1-4H9Jg/viewform\">Clique aqui para se inscrever</a>        ', '../img/uploads/img_638594807d788.jpg', '29/11/2022', '02:11', 1, 1);

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
(2, 'mari', 'mari@gmail.com', '202cb962ac59075b964b07152d234b70', 0, 0, 2, 0);

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
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
