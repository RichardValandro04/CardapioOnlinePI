-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 28-Jun-2024 às 23:14
-- Versão do servidor: 8.0.36
-- versão do PHP: 8.1.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cardapioonline`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `doces`
--

CREATE TABLE `doces` (
  `pk_id_doce` int NOT NULL,
  `nome_sabor` varchar(256) COLLATE utf32_unicode_ci NOT NULL,
  `valor_dezena` float NOT NULL,
  `link_foto` varchar(256) COLLATE utf32_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `endereco`
--

CREATE TABLE `endereco` (
  `pk_id_endereco` int NOT NULL,
  `fk_id_usuario` int NOT NULL,
  `cep` int NOT NULL,
  `numero_casa` int NOT NULL,
  `complemento` varchar(60) COLLATE utf32_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `itembolo`
--

CREATE TABLE `itembolo` (
  `pk_id_item_bolo` int NOT NULL,
  `fk_id_pedido` int NOT NULL,
  `fk_id_recheio` int NOT NULL,
  `fk_id_tamanho_bolo` int NOT NULL,
  `fk_id_massa` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `itemdoce`
--

CREATE TABLE `itemdoce` (
  `fk_id_pedido` int NOT NULL,
  `fk_id_doce` int NOT NULL,
  `quantidade` int NOT NULL,
  `valortotal` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedidos`
--

CREATE TABLE `pedidos` (
  `pk_id_pedido` int NOT NULL,
  `data_entrega` date NOT NULL,
  `hora_entrega` time NOT NULL,
  `valortotal_pedido` float NOT NULL,
  `fk_id_usuario` int NOT NULL,
  `fk_id_endereco` int NOT NULL,
  `metodo_entrega` tinyint(1) NOT NULL,
  `situacao` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `recheiosbolo`
--

CREATE TABLE `recheiosbolo` (
  `pk_ìd_recheio` int NOT NULL,
  `nome_recheio` varchar(256) COLLATE utf32_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `recheiosescolhidos`
--

CREATE TABLE `recheiosescolhidos` (
  `fk_id_item_bolo` int NOT NULL,
  `fk_id_recheio` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `saboresmassa`
--

CREATE TABLE `saboresmassa` (
  `pk_id_massa` int NOT NULL,
  `nome_sabor` varchar(256) COLLATE utf32_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tamanhosbolo`
--

CREATE TABLE `tamanhosbolo` (
  `pk_id_tamanho_bolo` int NOT NULL,
  `quantidade_fatias` int NOT NULL,
  `valor` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `pk_id_usuario` int NOT NULL,
  `nome` varchar(256) COLLATE utf32_unicode_ci NOT NULL,
  `email` varchar(256) COLLATE utf32_unicode_ci NOT NULL,
  `cpf` varchar(256) COLLATE utf32_unicode_ci NOT NULL,
  `telefone` varchar(256) COLLATE utf32_unicode_ci NOT NULL,
  `senha` varchar(256) COLLATE utf32_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `doces`
--
ALTER TABLE `doces`
  ADD PRIMARY KEY (`pk_id_doce`);

--
-- Índices para tabela `endereco`
--
ALTER TABLE `endereco`
  ADD PRIMARY KEY (`pk_id_endereco`),
  ADD KEY `fk_id_usuario_endereco` (`fk_id_usuario`);

--
-- Índices para tabela `itembolo`
--
ALTER TABLE `itembolo`
  ADD PRIMARY KEY (`pk_id_item_bolo`),
  ADD KEY `fk_id_massa_itembolo` (`fk_id_massa`),
  ADD KEY `fk_id_pedido_itembolo` (`fk_id_pedido`),
  ADD KEY `fk_id_recheio_itembolo` (`fk_id_recheio`),
  ADD KEY `fk_id_tamanho_bolo_itembolo` (`fk_id_tamanho_bolo`);

--
-- Índices para tabela `itemdoce`
--
ALTER TABLE `itemdoce`
  ADD KEY `fk_id_doce_itemdoce` (`fk_id_doce`),
  ADD KEY `fk_id_pedido_itemdoce` (`fk_id_pedido`);

--
-- Índices para tabela `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`pk_id_pedido`),
  ADD KEY `fk_id_endereco_pedidos` (`fk_id_endereco`),
  ADD KEY `fk_id_usuario_pedidos` (`fk_id_usuario`);

--
-- Índices para tabela `recheiosbolo`
--
ALTER TABLE `recheiosbolo`
  ADD PRIMARY KEY (`pk_ìd_recheio`);

--
-- Índices para tabela `recheiosescolhidos`
--
ALTER TABLE `recheiosescolhidos`
  ADD KEY `fk_id_item_bolo_escolhidos` (`fk_id_item_bolo`),
  ADD KEY `fk_id_recheio_escolhidos` (`fk_id_recheio`);

--
-- Índices para tabela `saboresmassa`
--
ALTER TABLE `saboresmassa`
  ADD PRIMARY KEY (`pk_id_massa`);

--
-- Índices para tabela `tamanhosbolo`
--
ALTER TABLE `tamanhosbolo`
  ADD PRIMARY KEY (`pk_id_tamanho_bolo`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`pk_id_usuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `doces`
--
ALTER TABLE `doces`
  MODIFY `pk_id_doce` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `endereco`
--
ALTER TABLE `endereco`
  MODIFY `pk_id_endereco` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `itembolo`
--
ALTER TABLE `itembolo`
  MODIFY `pk_id_item_bolo` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `pk_id_pedido` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `recheiosbolo`
--
ALTER TABLE `recheiosbolo`
  MODIFY `pk_ìd_recheio` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `saboresmassa`
--
ALTER TABLE `saboresmassa`
  MODIFY `pk_id_massa` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tamanhosbolo`
--
ALTER TABLE `tamanhosbolo`
  MODIFY `pk_id_tamanho_bolo` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `pk_id_usuario` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `endereco`
--
ALTER TABLE `endereco`
  ADD CONSTRAINT `fk_id_usuario_endereco` FOREIGN KEY (`fk_id_usuario`) REFERENCES `usuarios` (`pk_id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `itembolo`
--
ALTER TABLE `itembolo`
  ADD CONSTRAINT `fk_id_massa_itembolo` FOREIGN KEY (`fk_id_massa`) REFERENCES `saboresmassa` (`pk_id_massa`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_id_pedido_itembolo` FOREIGN KEY (`fk_id_pedido`) REFERENCES `pedidos` (`pk_id_pedido`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_id_recheio_itembolo` FOREIGN KEY (`fk_id_recheio`) REFERENCES `recheiosbolo` (`pk_ìd_recheio`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_id_tamanho_bolo_itembolo` FOREIGN KEY (`fk_id_tamanho_bolo`) REFERENCES `tamanhosbolo` (`pk_id_tamanho_bolo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `itemdoce`
--
ALTER TABLE `itemdoce`
  ADD CONSTRAINT `fk_id_doce_itemdoce` FOREIGN KEY (`fk_id_doce`) REFERENCES `doces` (`pk_id_doce`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_id_pedido_itemdoce` FOREIGN KEY (`fk_id_pedido`) REFERENCES `pedidos` (`pk_id_pedido`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `pedidos`
--
ALTER TABLE `pedidos`
  ADD CONSTRAINT `fk_id_endereco_pedidos` FOREIGN KEY (`fk_id_endereco`) REFERENCES `endereco` (`pk_id_endereco`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_id_usuario_pedidos` FOREIGN KEY (`fk_id_usuario`) REFERENCES `usuarios` (`pk_id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `recheiosescolhidos`
--
ALTER TABLE `recheiosescolhidos`
  ADD CONSTRAINT `fk_id_item_bolo_escolhidos` FOREIGN KEY (`fk_id_item_bolo`) REFERENCES `itembolo` (`pk_id_item_bolo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_id_recheio_escolhidos` FOREIGN KEY (`fk_id_recheio`) REFERENCES `recheiosbolo` (`pk_ìd_recheio`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
