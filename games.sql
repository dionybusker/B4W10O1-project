-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 02 jul 2020 om 15:12
-- Serverversie: 10.4.11-MariaDB
-- PHP-versie: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `b4w10o1-project`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `games`
--

CREATE TABLE `games` (
  `game_id` int(11) NOT NULL,
  `game_name` varchar(255) NOT NULL,
  `developer` varchar(255) NOT NULL,
  `publisher` varchar(255) NOT NULL,
  `releasedate` varchar(10) NOT NULL,
  `platform_id` int(11) NOT NULL,
  `description` text NOT NULL,
  `genre_id` int(11) NOT NULL,
  `total_spots` int(3) NOT NULL,
  `media_id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `first_slide` varchar(255) NOT NULL,
  `second_slide` varchar(255) NOT NULL,
  `third_slide` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `games`
--

INSERT INTO `games` (`game_id`, `game_name`, `developer`, `publisher`, `releasedate`, `platform_id`, `description`, `genre_id`, `total_spots`, `media_id`, `img`, `link`, `first_slide`, `second_slide`, `third_slide`) VALUES
(1, 'Call of Duty Warzone', 'Infinity ward, Raven Software', 'Activision', '10-03-2020', 2, 'Call of Duty: Warzone is a free-to-play battle royale video game released on March 10, 2020, for Xbox One, PlayStation 4, and Microsoft Windows. The game is a part of the 2019 title Call of Duty: Modern Warfare but does not require purchase of it. Warzone was developed by Infinity Ward and Raven Software and published by Activision. Warzone allows online multiplayer combat among 150 players set in the fictional city of Verdansk, which is loosely based on Donetsk city in Eastern Ukraine, on day 96 of Operation: Rapid Sunder. The game features both cross-platform play and cross-platform progression between both games.\r\n\r\nThe game features three main modes: Plunder, Realism and Battle Royale. Warzone introduces a new in-game currency system called \"Cash\" which is used at \"Buy Stations\" in and around Verdansk. \"Loadout\" drops are an example of where Cash can be traded for limited access to players\' custom classes (which are shared with Modern Warfare\'s standard modes). Players may also use Cash to purchase items such as \"killstreaks\" and gas masks. At launch, Warzone only offered Trios, a squad capacity of three players. However, in free post launch content updates, Solos, Duos and Quads have all been added to the game.', 2, 0, 1, 'callofduty.jpg', 'https://www.youtube.com/embed/Ac0V1uEnhwA', '1-1.jpg', '1-2.jpg', '1-3.jpg'),
(2, 'DuckGame', 'Landon Podbielski', 'Adult Swim, Cartoon Interactive group,Inc', '13-05-2014', 4, 'Duck Game is a 2D action video game that features shooting and platforming mechanics. The game has a single-player arcade mode where the user can complete challenges to get tickets, which can be used to unlock in-game hats and game modifiers (such as Moon gravity or explosive props), as well as local or online multiplayer with up to three other players. Duck Game has a simple premise: players die in one hit, and last player standing wins the round. The game features a simple control scheme: beyond basic movement controls, the player can pick up/throw a weapon, use their equipped weapon, strafe (walk backwards), quack, and trip. The complexity in the game comes from the large variety of weapons players use and environments players compete in.\r\n\r\nDuck Game has several unique elements, including multiple hats, a quack button, and a ragdoll button.', 1, 4, 2, 'duckgame.jpg', 'https://www.youtube.com/embed/jiSMnQUhLA0', '2-1.jpg', '2-2.jpg', '2-3.jpg'),
(3, 'Fifa 20', 'EA', 'EA', '10-09-2019', 2, 'FIFA 20 is a football simulation video game published by Electronic Arts as part of the FIFA series. It is the 27th installment in the FIFA series, and was released on 27 September 2019 for Microsoft Windows, PlayStation 4, Xbox One, and Nintendo Switch. A Stadia version is due in 2020.\r\n\r\nReal Madrid winger Eden Hazard was named the new cover star of the Regular Edition, with Liverpool defender Virgil van Dijk on the cover of the Champions Edition. Former Juventus and Real Madrid midfielder Zinedine Zidane was later named as the cover star for the Ultimate Edition.', 6, 16, 3, 'fifa20.jpg', 'https://www.youtube.com/embed/vgQNOIhRsV4', '3-1.jpg', '3-2.jpg', '3-3.jpg'),
(4, 'League of Legends', 'Riot Games', 'Riot Games', '27-10-2009', 1, 'League of Legends (LoL) is a multiplayer online battle arena video game developed and published by Riot Games for Microsoft Windows and macOS. Inspired by the Warcraft III: The Frozen Throne mod Defense of the Ancients, the game follows a freemium model and is supported by microtransactions. In League of Legends, players assume the role of a \"champion\" with unique abilities and battle against a team of other player- or computer-controlled champions. The goal is usually to destroy the opposing team\'s \"Nexus\", a structure that lies at the heart of a base protected by defensive structures, although other distinct game modes exist as well with varying objectives, rules, and maps. Each League of Legends match is discrete, with all champions starting off relatively weak but increasing in strength by accumulating items and experience over the course of the game. Champions span a variety of roles and blend a variety of fantasy tropes, such as sword and sorcery, steampunk, and Lovecraftian horror. Although the discrete nature of each match prohibits an overarching narrative in-game, the various champions make up a large and ever-evolving fictional universe developed by Riot Games through short stories, comics, cinematics, and books.', 3, 10, 4, 'leagueoflegends.jpg', 'https://www.youtube.com/embed/7O21Z6vgtmY', '4-1.jpg', '4-2.jpg', '4-3.jpg'),
(5, 'Mario Kart', 'Nintendo', 'nintendo', '29-05-2014', 4, 'Mario Kart is a series of go-kart-style racing video games developed and published by Nintendo as spin-offs from its trademark Super Mario series. The first in the series, Super Mario Kart, was launched in 1992 on the Super Nintendo Entertainment System to critical and commercial success.', 4, 8, 5, 'mariokart.jpg', 'https://www.youtube.com/embed/tKlRN2YpxRE', '5-1.jpg', '5-2.jpg', '5-3.jpg'),
(6, 'Overwatch', 'Blizzard Entertainment', 'Blizzard Entertainment', '24-05-2016', 2, 'Overwatch is a team-based multiplayer first-person shooter developed and published by Blizzard Entertainment. Described as a \"hero shooter\", Overwatch assigns players into two teams of six, with each player selecting from a roster of over 30 characters, known as \"heroes\", each with a unique style of play that is divided into three general roles that fit their purpose. Players on a team work together to secure and defend control points on a map or escort a payload across the map in a limited amount of time. Players gain cosmetic rewards that do not affect gameplay, such as character skins and victory poses, as they play the game. The game was initially launched with only casual play, but a competitive ranked mode, various \'arcade\' game modes, and a player-customizable server browser were added after release. Additionally, Blizzard has added new characters, maps, and game modes post-release, all free of charge, with the only additional cost to players being optional loot boxes to earn cosmetic items.', 2, 12, 6, 'overwatch.jpg', 'https://www.youtube.com/embed/dushZybUYnM', '6-1.jpg', '6-2.jpg', '6-3.jpg'),
(7, 'Rocket League', 'Psyonix, Panic Button Games', 'Psyonix, Panic Button Games', '07-07-2018', 1, 'Rocket League is a vehicular soccer video game developed and published by Psyonix. The game was first released for Microsoft Windows and PlayStation 4 in July 2015, with ports for Xbox One and Nintendo Switch being released later on. In June 2016, 505 Games began distributing a physical retail version for PlayStation 4 and Xbox One, with Warner Bros. Interactive Entertainment taking over those duties by the end of 2017. Versions for macOS and Linux were also released in 2016, but support for their online services were dropped in 2020.\r\n\r\nDescribed as \"soccer, but with rocket-powered cars\", Rocket League has up to eight players assigned to each of the two teams, using rocket-powered vehicles to hit a ball into their opponent\'s goal and score points over the course of a match. The game includes single-player and multiplayer modes which can be played both locally and online, including cross-platform play between all versions. Later updates for the game enabled the ability to modify core rules and added new game modes, including ones based on ice hockey and basketball.', 1, 14, 7, 'rocketleague.jpg', 'https://www.youtube.com/embed/Vawwy2eu5sA', '7-1.jpg', '7-2.jpg', '7-3.jpg'),
(8, 'Super Smash Bros', 'Nintendo', 'Nintendo', '07-12-2018', 4, 'Super Smash Bros. Ultimate is a 2018 crossover fighting game developed by Bandai Namco Studios and Sora Ltd. and published by Nintendo for the Nintendo Switch. It is the fifth installment in the Super Smash Bros. series, succeeding Super Smash Bros. for Nintendo 3DS and Wii U. The game follows the series\' traditional style of gameplay: controlling one of the various characters, players must use differing attacks to weaken their opponents and knock them out of an arena. It features a wide variety of game modes, including a campaign for single-player and multiplayer versus modes. Ultimate features over 80 playable fighters, including everyone from all previous Super Smash Bros. games, alongside several newcomers. The roster ranges from Nintendo mascots to characters from third-party franchises, with the game being supported with post-release downloadable content that adds more.', 1, 4, 8, 'supersmash.jpg', 'https://www.youtube.com/embed/WShCN-AYHqA', '8-1.jpg', '8-2.jpg', '8-3.jpg'),
(9, 'StarCraft', 'Blizzard Entertainment', 'Blizzard Entertainment', '31-03-1988', 1, 'StarCraft is a military science fiction media franchise created by Chris Metzen and James Phinney and owned by Blizzard Entertainment. The series, set in the beginning of the 26th century, centers on a galactic struggle for dominance among four species—the adaptable and mobile Terrans, the ever-evolving insectoid Zerg, the powerfully enigmatic Protoss, and the godlike Xel\'Naga creator race—in a distant part of the Milky Way galaxy known as the Koprulu Sector. The series debuted with the video game StarCraft in 1998. It has grown to include a number of other games as well as eight novelizations, two Amazing Stories articles, a board game, and other licensed merchandise such as collectible statues and toys.', 5, 8, 9, 'starcraft.jpg', 'https://www.youtube.com/embed/H4Z6Rmbtk1k', '9-1.jpg', '9-2.jpg', '9-3.jpg'),
(10, 'Gears of War', 'Epic Games', 'Xbox Games Studio', '07-11-2006', 3, 'Gears of War, or simply known as Gears, is a video game franchise created by Epic Games, developed and managed by The Coalition, and owned and published by Xbox Game Studios. The series focuses on the conflict between humanity, the subterranean reptilian hominids known as the Locust Horde, and their mutated counterparts, the Lambent. The franchise consists of six third-person shooter video games, which has also been supplemented by a comic book series and five novels.', 7, 8, 10, 'gearsofwar.jpg', 'https://www.youtube.com/embed/wy8LRlS1SCc', '10-1.jpg', '10-2.jpg', '10-3.jpg'),
(11, 'Street Fighter', 'Capcom', 'Capcom', '30-08-1987', 1, 'Street Fighter is a fighting video game franchise developed and published by Capcom. The first game in the series was released in 1987, followed by five other main series games, various spin-offs and crossovers, and numerous appearances in various other media. Its best-selling 1991 release Street Fighter II is credited with establishing many of the conventions of the one-on-one fighting genre. Street Fighter is one of the highest-grossing video game franchises of all time and serves as one of Capcom\'s flagship series with total sales of 44 million units worldwide as of December 31, 2019.', 1, 16, 11, 'streetfighter.jpg', 'https://www.youtube.com/embed/rr9bKSWH3iQ', '11-1.jpg', '11-2.jpg', '11-3.jpg'),
(12, 'Marvel vs Capcom', 'Capcom', 'Capcom', '23-01-1998', 1, 'Marvel vs. Capcom is a series of crossover fighting games developed and published by Capcom, featuring characters from their own video game franchises and comic book series published by Marvel Comics. The series originated as coin-operated arcade games, though later releases would be specifically developed for home consoles, handhelds, and personal computers.\r\n\r\nIts gameplay borrows heavily from Capcom\'s previous Marvel-licensed fighting games X-Men: Children of the Atom and Marvel Super Heroes; however, instead of focusing on single combat, the games incorporated tag team battles. Players form teams of two or three characters and, controlling one fighter at a time, attempt to damage and knock out their opponents. Players can switch out their characters during the match, allowing team members to replenish their health and prolong their ability to fight. The series\' gameplay is also distinguished from other fighting game franchises due to its character assist mechanics and emphasis on aerial combat.', 1, 16, 12, 'marvelvscapcom.jpg', 'https://www.youtube.com/embed/COwN5HsObfw', '12-1.jpg', '12-2.jpg', '12-3.jpg'),
(13, 'Mortal Kombat X', 'NetherRealm Studios', 'NetherRealm Studios', '07-04-2015', 2, 'Mortal Kombat X is a fighting video game developed by NetherRealm Studios and published by Warner Bros. Interactive Entertainment. Running on the Unreal Engine 3, it is the tenth main installment in the Mortal Kombat video game series and a sequel to the 2011 game Mortal Kombat. It was released on April 14, 2015 for PlayStation 4, Xbox One, and Microsoft Windows. NetherRealm Studios\' mobile team developed a version for iOS and Android devices. High Voltage Software developed the PC version of the game, with Polish studio QLOC taking over the work on it shortly after the release of Kombat Pack 1.\r\n\r\nLike previous Mortal Kombat games, Mortal Kombat X\'s gameplay consists of two players, or one player and the CPU, fighting against each other with their selected character, using a large, varied array of character-specific attacks. The game contains several modes, such as a story mode, which takes place twenty-five years after the previous Mortal Kombat game, several \'Tower\' modes, which feature dynamically changing challenges, numerous online modes, and the \'Krypt\', a mode played in a first person perspective, where players explore the areas unlocking a variety of in-game items.', 1, 16, 13, 'mortalkombat.jpg', 'https://www.youtube.com/embed/jSi2LDkyKmI', '13-1.jpg', '13-2.jpg', '13-3.jpg'),
(14, 'Gran Turismo Sport', 'Polyphony Digital', 'Polyphony Digital', '17-10-2017', 2, 'Gran Turismo Sport is a racing video game developed by Polyphony Digital and published by Sony Interactive Entertainment for the PlayStation 4. It was released on October 17 in North America, October 18 in Europe, and October 19, 2017 in Japan, and is the 13th game in the Gran Turismo series, the seventh game in the main series, and the first and only game in the series to be released for the PlayStation 4.\r\n\r\nOne of Gran Turismo Sport\'s main focuses is competitive online racing, supported by the international governing body of motorsport, the Fédération Internationale de l\'Automobile (FIA), and serving as the platform for the FIA-Certified Gran Turismo Championships. The game launched with 168 cars and 29 tracks, but free game updates have brought the count to 324 cars and 82 track configurations as of December 2019. The free updates also added a more traditional single-player campaign mode to the game.', 4, 4, 14, 'granturismo.jpg', 'https://www.youtube.com/embed/moDdHXpxWrw', '14-1.jpg', '14-2.jpg', '14-3.jpg'),
(15, 'Heroes of the Storm', 'Blizzard Entertainment', 'Blizzard Entertainment', '02-06-2015', 1, 'Heroes of the Storm is a crossover multiplayer online battle arena video game developed and published by Blizzard Entertainment and released on June 2, 2015, for Microsoft Windows and macOS. The game features various characters from Blizzard\'s franchises as playable heroes, as well as different battlegrounds based on Warcraft, Diablo, StarCraft, and Overwatch universes. The game is free-to-play, based on freemium business model, and is supported by microtransactions which can be used to purchase heroes, visual alterations for the heroes in the game, mounts, and other cosmetic elements. Blizzard does not call the game a \"multiplayer online battle arena\" or an \"action real-time strategy\" because they feel it is something different with a broader playstyle; they refer to it as an online \"hero brawler\".', 3, 16, 15, 'heroesofthestorm.jpg', 'https://www.youtube.com/embed/0ecv0bT9DEo', '15-1.jpg', '15-2.jpg', '15-3.jpg'),
(16, 'Battleflied V', 'EA', 'EA', '04-09-2018', 2, 'Battlefield V is a first-person shooter video game developed by EA DICE and published by Electronic Arts. Battlefield V is the sixteenth installment in the Battlefield series. It was released worldwide for Microsoft Windows, PlayStation 4, and Xbox One on November 20, 2018. Those who pre-ordered the Deluxe Edition of the game were granted early access to the game on November 15, 2018, and Origin Access Premium subscribers on PC received access to the game on November 9, 2018. The game is based on World War II and is a thematic continuation of its World War I based precursor Battlefield 1.\r\n\r\nPre-release reception of the game was mixed, with the announcement trailer causing backlash from some fans of the series for the degree of historical inaccuracy regarding the game\'s depictions of female soldiers. Upon release, Battlefield V received generally favourable reviews from critics, being praised for its gameplay, firestorm mode and design but criticized for its shortage of content at launch and lack of innovation. The game sold 7.3 million copies by the end of 2018 but was a commercial disappointment for Electronic Arts.', 2, 150, 16, 'battlefield.jpg', 'https://www.youtube.com/embed/fb1MR85XFOc', '16-1.jpg', '16-2.jpg', '16-3.jpg'),
(17, 'Team Fortress 2', 'Valve', 'Valve', '10-10-2007', 1, 'Team Fortress 2 is a multiplayer first-person shooter video game developed and published by Valve. It is the sequel to the 1996 Team Fortress mod for Quake and its 1999 remake, Team Fortress Classic. It was released in October 2007 as part of The Orange Box video game bundle for Microsoft Windows and the Xbox 360. A PlayStation 3 version followed in December 2007 when The Orange Box was ported to the system. Later in development, the game was released as a standalone title for Windows in April 2008, and was updated to support Mac OS X in June 2010 and Linux in February 2013. It is distributed online through Valve\'s digital retailer Steam, with Electronic Arts handling all physical and console ports of the game.', 2, 150, 17, 'teamfortress2.jpg', 'https://www.youtube.com/embed/N7ZafWA2jd8', '17-1.jpg', '17-2.jpg', '17-3.jpg'),
(18, 'Halo Infinite', '343 Industries, Skybox labs', 'Xbox Games Studio', '2020', 3, 'Halo Infinite is an upcoming first-person shooter video game co-developed by 343 Industries and SkyBox Labs, published by Xbox Game Studios for Microsoft Windows, Xbox One and Xbox Series X. The game is set to be released as a launch title for Xbox Series X in late 2020 and is the sixth main entry of the Halo series, and the fourteenth game overall. It continues the story of the Master Chief as the third chapter of the \"Reclaimer Saga\", following Halo 5: Guardians.', 2, 150, 18, 'halo.jpg', 'https://www.youtube.com/embed/MBb88gLmJZY', '18-1.jpg', '18-2.jpg', '18-3.jpg');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`game_id`),
  ADD KEY `platform_id` (`platform_id`,`genre_id`,`media_id`),
  ADD KEY `genre_id` (`genre_id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `games`
--
ALTER TABLE `games`
  MODIFY `game_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `games`
--
ALTER TABLE `games`
  ADD CONSTRAINT `games_ibfk_1` FOREIGN KEY (`platform_id`) REFERENCES `platforms` (`platform_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `games_ibfk_2` FOREIGN KEY (`genre_id`) REFERENCES `genres` (`genre_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
