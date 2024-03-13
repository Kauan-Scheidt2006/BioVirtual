-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 06/03/2024 às 21:10
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `biovirtual`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `canals`
--

CREATE TABLE `canals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `usuario_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `canals`
--

INSERT INTO `canals` (`id`, `titulo`, `descricao`, `usuario_id`, `created_at`, `updated_at`) VALUES
(1, 'Experiências', 'Destinado aos Usuários poderem compartilhar suas experiências, com objetivos como enriquecer seu aprendizado e melhorações por parte dos autores', 1, NULL, NULL),
(2, 'Estudos', 'Destinado aos Usuários poderem compartilhar os conhecimentos vistos e aprofundar-se em detalhes', 1, NULL, NULL),
(5, 'Curiosidades', 'Dentro deste canal os alunos podem descobrir novas curiosidades de conteúdos vistos e sobre a R.V', 1, '2024-03-06 22:50:16', '2024-03-06 22:50:16');

-- --------------------------------------------------------

--
-- Estrutura para tabela `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `mensagems`
--

CREATE TABLE `mensagems` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `mensagem` varchar(255) NOT NULL,
  `usuario_id` bigint(20) UNSIGNED NOT NULL,
  `canal_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `mensagems`
--

INSERT INTO `mensagems` (`id`, `titulo`, `mensagem`, `usuario_id`, `canal_id`, `created_at`, `updated_at`) VALUES
(11, 'Enriquecedor!!!', 'A R.V ajudou a enriquecer viabilizando uma diversidade de conhecimento meu', 1, 1, '2024-03-06 22:55:53', '2024-03-06 22:55:53'),
(12, 'Experiência Única', 'tive oportunidades únicas de aprender', 1, 1, '2024-03-06 22:57:27', '2024-03-06 22:57:27'),
(13, 'estudei mt', 'Eu pude estudar de uma forma maravilhosa visualizando oq minha professora passou a tarde inteira', 1, 2, '2024-03-06 22:58:01', '2024-03-06 22:58:01'),
(14, 'continuem', 'Continuem criando conteúdos de estudos q me ajudem assim!!!!!!', 1, 2, '2024-03-06 22:58:46', '2024-03-06 22:58:46'),
(15, 'aprendi mt', 'vi mts curiosidades e entendi melhor', 1, 5, '2024-03-06 23:00:56', '2024-03-06 23:00:56'),
(16, 'diversificado', 'conteúdo diversificado e salvou mt', 1, 5, '2024-03-06 23:04:05', '2024-03-06 23:04:05');

-- --------------------------------------------------------

--
-- Estrutura para tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(9, '2013_02_28_110146_create_nivels_table', 1),
(10, '2014_10_12_000000_create_users_table', 1),
(11, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(12, '2019_08_19_000000_create_failed_jobs_table', 1),
(13, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(14, '2024_02_28_111459_create_canals_table', 1),
(15, '2024_02_28_111815_create_mensagems_table', 1),
(16, '2024_02_28_112230_create_noticias_table', 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `nivels`
--

CREATE TABLE `nivels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nivel` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `nivels`
--

INSERT INTO `nivels` (`id`, `nivel`, `created_at`, `updated_at`) VALUES
(1, 'Administrador', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `noticias`
--

CREATE TABLE `noticias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `noticia` varchar(255) NOT NULL,
  `usuario_id` bigint(20) UNSIGNED NOT NULL,
  `canal_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nome` varchar(255) NOT NULL,
  `apelido` varchar(255) NOT NULL,
  `nivel_id` bigint(20) UNSIGNED DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `users`
--

INSERT INTO `users` (`id`, `nome`, `apelido`, `nivel_id`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Kauan Scheidt', 'kauan', 1, '123@k', NULL, '$2y$12$RUDYo.HNslBJU6a.ifqPA.d44fBcRnen7mrvdxx.zlI17qzW0ROg.', 'x1z5A90Kv7TahSWVaEsAEFWDV9zfZ1W5hnBxeAEfc4288F8XJQJX9HFhb4Bp', '2024-02-28 14:43:26', '2024-02-28 22:55:14'),
(2, 'Nicole Rezena', 'Nicole', 1, 'nicolerezena2017@gmail.com', NULL, '$2y$12$RxbGzdsrWrC0yzX.vQxZCeRqwlC5cKbI3KAh1bjSLu45V1oO7TF4q', 'LM1R0fDDkDB5IVNR3F3ULUG4TBASCdsF3Go1WXfBbGViumVKaE3dSd8yx8lY', '2024-02-28 22:01:04', '2024-02-29 13:50:46'),
(3, 'teste', 'teste', 1, 'teste@t', NULL, '$2y$12$tVdq0E7/fItqh/2sfT0YauaBw6L6xCx0LtJWj5wni9CqBMsyqTYvm', NULL, '2024-02-29 13:36:57', '2024-02-29 18:58:56');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `canals`
--
ALTER TABLE `canals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `canals_usuario_id_foreign` (`usuario_id`);

--
-- Índices de tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Índices de tabela `mensagems`
--
ALTER TABLE `mensagems`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mensagems_usuario_id_foreign` (`usuario_id`),
  ADD KEY `mensagems_canal_id_foreign` (`canal_id`);

--
-- Índices de tabela `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `nivels`
--
ALTER TABLE `nivels`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `noticias_usuario_id_foreign` (`usuario_id`),
  ADD KEY `noticias_canal_id_foreign` (`canal_id`);

--
-- Índices de tabela `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Índices de tabela `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Índices de tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_nivel_id_foreign` (`nivel_id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `canals`
--
ALTER TABLE `canals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `mensagems`
--
ALTER TABLE `mensagems`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `nivels`
--
ALTER TABLE `nivels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de tabela `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `canals`
--
ALTER TABLE `canals`
  ADD CONSTRAINT `canals_usuario_id_foreign` FOREIGN KEY (`usuario_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrições para tabelas `mensagems`
--
ALTER TABLE `mensagems`
  ADD CONSTRAINT `mensagems_canal_id_foreign` FOREIGN KEY (`canal_id`) REFERENCES `canals` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `mensagems_usuario_id_foreign` FOREIGN KEY (`usuario_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrições para tabelas `noticias`
--
ALTER TABLE `noticias`
  ADD CONSTRAINT `noticias_canal_id_foreign` FOREIGN KEY (`canal_id`) REFERENCES `canals` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `noticias_usuario_id_foreign` FOREIGN KEY (`usuario_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrições para tabelas `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_nivel_id_foreign` FOREIGN KEY (`nivel_id`) REFERENCES `nivels` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
