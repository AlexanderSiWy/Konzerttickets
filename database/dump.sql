SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


CREATE DATABASE kurseictbz_30712;
USE kurseictbz_30712;


CREATE TABLE konzert (
  `id` int(11) NOT NULL,
  `artist` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO konzert (`id`, `artist`) VALUES
(1, 'The Beatles'),
(2, 'Elvis Presley'),
(3, 'Michael Jackson'),
(4, 'Madonna'),
(5, 'Elton John'),
(6, 'ABBA'),
(7, 'Led Zeppelin'),
(8, 'Pink Floyd'),
(9, 'Mariah Carey'),
(10, 'Céline Dion'),
(11, 'AC/DC'),
(12, 'Whitney Houston'),
(13, 'Queen'),
(14, 'The Rolling Stones'),
(15, 'Rihanna'),
(16, 'Taylor Swift'),
(17, 'Eminem'),
(18, 'Garth Brooks'),
(19, 'Eagles'),
(20, 'U2'),
(21, 'Billy Joel'),
(22, 'Phil Collins'),
(23, 'Aerosmith'),
(24, 'Frank Sinatra'),
(25, 'Barbra Streisand'),
(26, 'Bon Jovi'),
(27, 'Genesis'),
(28, 'Donna Summer'),
(29, 'Neil Diamond'),
(30, 'Kanye West'),
(31, 'Bruce Springsteen'),
(32, 'Bee Gees'),
(33, 'Julio Iglesias'),
(34, 'Dire Straits'),
(35, 'Lady Gaga'),
(36, 'Metallica'),
(37, 'Bruno Mars'),
(38, 'Jay Z'),
(39, 'Rod Stewart'),
(40, 'Britney Spears'),
(41, 'Fleetwood Mac'),
(42, 'George Strait'),
(43, 'Backstreet Boys'),
(44, 'Guns N’ Roses'),
(45, 'Prince'),
(46, 'Paul McCartney'),
(47, 'Kenny Rogers'),
(48, 'Janet Jackson'),
(49, 'Chicago'),
(50, 'The Carpenters'),
(51, 'Bob Dylan'),
(52, 'George Michael'),
(53, 'Bryan Adams'),
(54, 'Def Leppard'),
(55, 'Cher'),
(56, 'Lionel Richie'),
(57, 'Olivia Newton-John'),
(58, 'Stevie Wonder'),
(59, 'Tina Turner'),
(60, 'Kiss'),
(61, 'The Who'),
(62, 'Barry White'),
(63, 'Katy Perry'),
(64, 'Santana'),
(65, 'Earth, Wind & Fire'),
(66, 'Beyoncé'),
(67, 'Shania Twain'),
(68, 'R.E.M.'),
(69, 'B’z'),
(70, 'Coldplay'),
(71, 'Van Halen'),
(72, 'Red Hot Chili Peppers'),
(73, 'The Doors'),
(74, 'Barry Manilow'),
(75, 'Johnny Hallyday'),
(76, 'The Black Eyed Peas'),
(77, 'Journey'),
(78, 'Kenny G'),
(79, 'Enya'),
(80, 'Green Day'),
(81, 'Tupac Shakur'),
(82, 'Nirvana'),
(83, 'The Police'),
(84, 'Bob Marley'),
(85, 'Depeche Mode'),
(86, 'Aretha Franklin');

ALTER TABLE konzert
  ADD PRIMARY KEY (`id`);

ALTER TABLE konzert
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;


CREATE TABLE verkauf(
id integer PRIMARY KEY AUTO_INCREMENT,
personId integer,
konzertId integer,
treuebonusId integer,
zahlungsstatus boolean,
datum date
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE person(
    id integer PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255),
    mail VARCHAR(255),
    tel VARCHAR(15)
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE treuebonus(
  id INTEGER PRIMARY KEY AUTO_INCREMENT,
  rabatt INTEGER,
  zahlungsfrist INTEGER
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO treuebonus (rabatt, zahlungsfrist) VALUES (0,30),(5,20),(10,15),(15,10);

ALTER TABLE verkauf
ADD FOREIGN KEY (personId) REFERENCES person(id);

ALTER TABLE verkauf
ADD FOREIGN KEY (konzertId) REFERENCES konzert(id);

ALTER TABLE verkauf
ADD FOREIGN KEY (treuebonusId) REFERENCES treuebonus(id);
