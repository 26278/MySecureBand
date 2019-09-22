DROP TABLE IF EXISTS `evenementen`;
CREATE TABLE `evenementen` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `naam` varchar(64) DEFAULT NULL,
  `datum` date DEFAULT NULL,
  `tijd` time DEFAULT NULL,
  `prijs` decimal(5,2) DEFAULT 0.00,
  `info` text DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `huisjes`;
CREATE TABLE `huisjes` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `naam` varchar(64) DEFAULT NULL,
  `beschrijving` text DEFAULT NULL,
  `foto` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

INSERT INTO `evenementen` (`id`, `naam`, `datum`, `tijd`, `prijs`, `info`) VALUES ('1', 'BBQ op het plein', '2019-07-25', '18:00:00', '10.00', 'Gezellig BBQ-en met zijn allen op het centrale plein. Breng eigen vlees of vis mee en we gooien het op de grill!'),
('2', 'Spoorzoeken in het bos', '2019-07-26', '09:00:00', '0.00', 'Met een groep kinderen gaan we het bos in sporen te zoeken van wilde dieren. Niet voor bangerikken.'),
('3', 'Bingo', '2019-08-01', '20:00:00', '5.00', 'De jaarlijkse camping bingo met gigantische prijzen en grote winstkansen. Komt allen!'),
('4', 'Rommelmarkt', '2019-08-03', '09:00:00', '0.00', 'Haal alles wat je niet meer nodig hebt uit je huis, tent of bungalow en verkoop het aan iemand die het een tweede leven wil geven.'),
('5', 'Yoga', '2019-07-28', '10:00:00', '2.50', 'Rekken en strekken in de morgenzon. Ook voor beginners.'),
('6', 'Braziliaanse avond', '2019-08-04', '19:00:00', '15.00', 'Swingen op latino beats onder begeleiding van dans instructeur Gianluca Mortalez, Wereldkampioen Salsa dansen 1978, 1986 en 1988 ');

INSERT INTO `huisjes` (`id`, `naam`, `beschrijving`, `foto`) VALUES ('1', 'Comfort Chalet (2p)', 'Wilt u er even gezellig met z\'n tweetjes tussen uit voor een vakantie aan het IJsselmeer? Boek dan ons 2 persoons comfort chalet!\n\nCirca 38 m2.\nWoonkamer met modern interieur v.v. zithoek met een flatscreen tv, dvd-speler, hifiset en gratis internet\nOpen keuken met vaatwasser, oven+magnetron, of combi-magnetron.\nBadkamer met douche, toilet en wastafel\nSlaapkamer met twee boxspring bedden\nGemeubileerd zonneterras\nCentrale verwarming', 'chalet-1.jpg'),
('2', 'Comfort Chalet (4p)', 'Voor een gezellige vakantie in Noord-Holland kunnen wij u onze 4 persoons comfort Chalet zeker aanraden. Voorzien van alle faciliteiten en comfort zal het u aan niks ontbreken!\n\nOppervlakte circa 38 m2\nWoonkamer met een modern interieur v.v. zithoek met een flatscreen tv, dvd-speler, hifiset en gratis internet\nOpen keuken met combi-magnetron\nBadkamer met douche, toilet en wastafel\n2 slaapkamers: 1 met twee boxspring bedden en 1 met een hoog/laag slaper of stapelbed (in verband met de indeling van de bedden kan in de slaapkamers géén campingbedje bijgeplaatst worden)\nSchuifpui of openslaande deur naar naar gemeubileerd zonneterras\nCentrale verwarming\n', 'chalet-2.jpg'),
('3', 'Standaard bungalow (4p)', 'Met de 4 persoons standaard bungalow beschikt u over een mooie accommodatie voor 4 personen. Ideaal voor een ontspannen vakantie op ons park.\n\nOppervlakte circa 52 m2\nVrijstaande of half-vrijstaande bungalow\nWoonkamer v.v. zithoek met een flatscreen tv, dvd-speler, hifiset, gratis internet en open haard\nOpen keuken met magnetron\nBadkamer met douche, toilet en wastafel\n2 slaapkamers: één met 2 bedden en één met een stapelbed\nOpenslaande deuren naar gemeubileerd zonneterras\nCentrale verwarming.', 'bungalow-1.jpg'),
('4', 'Comfort Bungalow (2p)', 'Voor een ontspannen vakantie met zijn tweetjes zult u zich gelijk thuis voelen in de 2 persoons comfort plus bungalow.\n\nOppervlakte  circa 52m2\nVrijstaande of half-vrijstaande woning\nWoonkamer met een modern interieur v.v. zithoek met een flatscreen tv, dvd-speler, hifiset, gratis internet en open haard\nOpen keuken met combi-magnetron, senseo apparaat en vaatwasser\nBadkamer met douche, toilet, wastafel\nEén slaapkamer met 2 boxspringbedden\nOpenslaande deuren naar gemeubileerd zonneterras\nCentrale verwarming\nMet infraroodsauna', 'bungalow-2.jpg');
