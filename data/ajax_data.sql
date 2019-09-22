-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Gegenereerd op: 25 apr 2019 om 10:32
-- Serverversie: 10.1.38-MariaDB
-- PHP-versie: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wetenschap`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `posts`
--

CREATE TABLE `posts` (
  `id` int(8) NOT NULL,
  `titel` varchar(255) COLLATE utf8_general_ci NOT NULL,
  `omschrijving` mediumtext COLLATE utf8_general_ci NOT NULL,
  `datum` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `posts`
--

INSERT INTO `posts` (`id`, `titel`, `omschrijving`, `datum`) VALUES
(18, 'Ontdek de ruimte met André Kuipers', 'Astronaut André Kuipers en journalist Sander Koenen nemen je mee op een waanzinnige reis door de ruimte. Naar een wereld waar ‘boven’ en ‘onder’ niet bestaan. Een wereld waar je kunt hardlopen op de muur en fietsen zonder zadel. En waar water niet in druppels naar beneden valt, maar zweeft in bollen om je heen! Onderweg ontdek je van alles over de fascinerende wereld van wetenschap en techniek. En over hoe bijzonder onze eigen planeet aarde is. Heb je na de ruimtereis nog een brandende vraag aan André Kuipers? Aan het eind van de voorstelling beantwoordt Nederlands enige astronaut vragen van kinderen in het publiek.', '2019-04-25'),
(19, 'Expeditie Moendoes', 'Een team wetenschappers uit allerlei vakgebieden wordt er samen met jou vanaf de aarde op uit gestuurd. Jullie missie: de zoektocht naar een planeet waar mensen kunnen wonen. Tijdens de missie stuit het team op een onbekende planeet, met intelligente bewoners die hun planeet Moendoes noemen. Jullie gaan op onderzoek uit: hoe zit het hier met de zwaartekracht, en met de seizoenen? Zijn de lokale dieren gevaarlijk? Expeditie Moendoes is een spannend spel waarin jullie een onbekende planeet in kaart brengen. Daarvoor moet je informatie verzamelen, gegevens uitwisselen en conclusies publiceren: kortom, te werk gaan als een team wetenschappers!', '2019-04-25'),
(20, 'Geleid jij stroom?!\r\n', 'Onderzoek het met de bliksembol van NEMO. Pas op dat je je medebezoekers niet onder stroom zet!\r\n\r\nBio: NEMO Science Museum in een Amsterdam is een futuristisch wetenschapsmuseum waar nieuwsgierige bezoekers kunnen doen, zien en beleven. \r\n\r\nDit programmaonderdeel is aangedragen door de VSC, de sectororganisatie van wetenschapsmusea en science centers.', '2019-04-26'),
(21, 'Hoe werkt de Bernouilliblower?\r\n', 'En: hoe kunnen vliegtuigen vliegen? Bij NEMO kun je alles aanraken en zelf onderzoeken hoe natuurkundige fenomenen werken.\r\n\r\nBio: NEMO Science Museum in een Amsterdam is een futuristisch wetenschapsmuseum waar nieuwsgierige bezoekers kunnen doen, zien en beleven. \r\n\r\nDit programmaonderdeel is aangedragen door de VSC, de sectororganisatie van wetenschapsmusea en science centers.\r\n', '2019-04-26'),
(22, 'Een Da-Vincibrug bouwen', 'Kun jij een grote brug bouwen zonder ook maar één bout, schroef of spijker te gebruiken? En er ook nog zelf overheen lopen? Bij De Ontdekfabriek kun je het experiment uitvoeren!\r\n\r\nBio: De Ontdekfabriek in Eindhoven ga je op ontdekkingstocht en beleef je de meest leerzame avonturen, door te spelen, bouwen en te testen.\r\n', '2019-04-27'),
(23, 'Wereldvoedselspel: Fruit voor iedereen!\r\n', 'Het Werelsdvoedselspel een middel om discussie rond het wereldvoedselvraagstuk op gang te brengen in de klas. Het spel is disciplinair en kan dus vanuit verschillende schoolvakken gespeeld worden en aan het niveau van de klas aangepast worden. Daarom is het geschikt voor zowel (bovenbouw) PO als alle klassen van het VO. \"\r\n\r\nBio: Het Wereldvoedselspel is oorspronkelijk een idee van The World Food Prize Youth Education Team.  Wageningen University & Research heeft het naar Nederland gehaald en aangepast.', '2019-04-24'),
(24, 'Blue Energy: Wek energie op uit water!\r\n', 'Bij het mengen van zoet rivierwater en zout zeewater komt enorm veel energie vrij: Blue Energy (blauwe energie). Onze opstelling simuleert de installaties van Wetsus zoals deze op de afsluitdijk staan en waar gekeken wordt op welke schaal huishoudens van blauwe energie kunnen worden voorzien. \r\n\r\nBio: Blue Energy is een opstelling van Wageningen University & Research', '2019-04-24'),
(25, 'De Warrige Wetenschappers\r\n', 'De Warrige Wetenschappers zijn klunzige maar ijverige wetenschappers die ter plekke allerlei onderzoekjes doen in hun eigen gebouwde laboratorium. Het hoeft niet in 1 keer goed te gaan, juist niet. Dat is in de wetenschap zo maar ook in het echte leven. Een echte uitvinder faalt namelijk eerst 100 keer voordat hij die ene briljante ontdekking doet. Kun jij de Warrige Wetenschappers helpen om tot een geniale uitvinding te komen? \r\n\r\nBio: De Warrige wetenschappers is een act van de Sky Pirate Collective.\r\n', '2019-04-28'),
(26, 'Stel jouw vraag aan Quest Junior\r\n', 'Waarop wil jij een antwoord van de wetenschap? Quest Junior zamelt op Expeditie Next vragen in en gaat voor je op zoek naar antwoorden. Misschien komt jouw vraag wel in het magazine!\r\n\r\nBio: Quest Junior is een wetenschapstijdschrift voor nieuwsgierige kinderen over natuur, wetenschap, maatschappij en nog veel meer!\r\n\r\nDit programmaonderdeel is aangedragen door de VSC, de sectororganisatie van wetenschapsmusea en science centers', '2019-04-29'),
(27, 'Moeten arme mensen gratis zonnepanelen krijgen?\r\n', 'Museon stelt je moeilijke vragen, waar iedereen zijn eigen mening over heeft. Deze expo over de Duurzame Ontwikkelings Doelen van de Verenigde Naties zet je aan het denken!\r\n\r\nBio: Het Museon in Den Haag wil bezoekers inspireren om de wereld van cultuur en wetenschap te ontdekken. \r\n\r\nDit programmaonderdeel is aangedragen door de VSC, de sectororganisatie van wetenschapsmusea en science centers.\r\n', '2019-04-24'),
(28, 'Reizend Natuurlab Naturalis\r\n', 'Onder je voeten, in de grond, leven het hele jaar door veel insecten en andere kriebeldieren. Kom langs bij ons pop up-Naturalis en ontdek zelf wat er onder je voeten leeft\r\n\r\nBio: Naturalis Biodiversity Center vertoont de rijke biodiversiteit die aanwezig is op de aarde en leert haar bezoekers alles over de natuur. \r\n\r\nDit programmaonderdeel is aangedragen door de VSC, de sectororganisatie van wetenschapsmusea en science centers.', '2019-04-19');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
