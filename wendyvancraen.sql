-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Gegenereerd op: 08 okt 2019 om 11:18
-- Serverversie: 5.7.27-0ubuntu0.18.04.1
-- PHP-versie: 7.2.19-0ubuntu0.18.04.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wendyvancraen`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `skills` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `category` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `github` varchar(225) NOT NULL,
  `image` varchar(225) NOT NULL,
  `alt_txt` text NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `portfolio`
--

INSERT INTO `portfolio` (`id`, `title`, `skills`, `description`, `category`, `url`, `github`, `image`, `alt_txt`, `created_on`) VALUES
(1, 'Curriculum Vitae', 'HTML, CSS', 'Create a website that looks exactly like your pdf version of your curriculum vitae.', 'website', 'https://craew.github.io/learning-HTML-CSS/projects/02_curriculum-vitae-pdf/', 'https://github.com/CRAEW/learning-HTML-CSS/tree/master/projects/02_curriculum-vitae-pdf', 'images/curriculum-vitae.png', 'link to curriculum vitae website', '2019-10-08 07:56:30'),
(2, 'Random Quote Generator', 'HTML, CSS, JS, API', 'Connect to an API and display the result in a beautiful design.', 'API', 'https://craew.github.io/Random-Quote-Generator/', 'https://github.com/CRAEW/Random-Quote-Generator', 'images/random-quote-generator.png', 'link to Random Quote Generator website', '2019-10-08 07:56:30'),
(3, 'Pokedex', 'HTML, CSS, JS,API', 'Design a Pokedex with CSS only.\nConnect with an API and display the Pokemons and info on the screens.\nAdd some functionality to some of the buttons.\nSidenote: Not completely finished. Still some bugs in it.', 'API', 'https://craew.github.io/js-pokedex/', 'https://github.com/CRAEW/js-pokedex', 'images/pokedex.png', 'link to Pokedex website', '2019-10-08 07:56:30'),
(4, 'Star Wars Crawl', 'HTML, CSS', 'Create the Star Wars Crawl, but only use CSS.\n**WARNING**\nStar Wars music will start playing immediately. Make sure to check that your sound is on mute or is on a comfortable level.', 'website', 'https://craew.github.io/StarWarsCrawl/', 'https://github.com/CRAEW/StarWarsCrawl', 'images/starwars-crawl.png', 'link to Star Wars Crawl website', '2019-10-08 07:56:30');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
