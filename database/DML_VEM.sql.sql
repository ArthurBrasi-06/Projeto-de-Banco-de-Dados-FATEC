-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 13/11/2025 às 21:19
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `ddl.vem.sql`
--

--
-- Despejando dados para a tabela `evento`
--

INSERT INTO `evento` (`id_evento`, `id_usuario`, `nome_evento`) VALUES
(1010, 1, 'Evento Atualizado'),
(1011, 2, 'FestaCollege'),
(1012, 3, 'Sertanejo'),
(1013, 4, 'BoraDançar'),
(2025, 1, 'Evento Demonstracao');

--
-- Despejando dados para a tabela `pagina_do_evento`
--

INSERT INTO `pagina_do_evento` (`id_evento`, `peculiaridades`, `dados_hora`, `localizacao`) VALUES
(1010, 'Permitido para maiores de 12 anos', '2025-12-10 21:00:00', 'Rua José Frontes - Itupeva, 11'),
(1011, 'Permitido para maiores de 18 anos', '2025-11-26 00:00:00', 'Rua Braguinha Silva - Morato, 27'),
(1012, 'Permitido para maiores de 18 anos', '2025-11-30 15:00:00', 'Rua Nordelino Teixeira - Campo Belo, 11'),
(1013, 'Permitido para maiores de 12 anos', '2025-12-05 13:00:00', 'Rua Falcão Pontes - Maracatú, 130'),
(2025, 'Teste', '2025-11-13 04:27:27', 'Rua Teste, 123');

--
-- Despejando dados para a tabela `questionario`
--

INSERT INTO `questionario` (`id_questionario`, `id_evento`, `organizadores`, `comparacao`) VALUES
(2000, 1010, 'Leo, Vivi', '50 Pessoas'),
(2001, 1011, 'Lucas, Sérgio', '40 Pessoas'),
(2002, 1012, 'Amanda, Liz', '60 Pessoas'),
(2003, 1013, 'Bruna, Ronaldo', '20 Pessoas');

--
-- Despejando dados para a tabela `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nome`, `email`) VALUES
(1, 'Jefferson', 'jeff@gmail.com'),
(2, 'Alice', 'aline@gmail.com'),
(3, 'Mike', 'mike@gmail.com'),
(4, 'Sonder', 'sonder@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
