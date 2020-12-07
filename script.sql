--
-- Table structure for table `PARTIEA__CADEAUX`
--

CREATE TABLE `PARTIEA__CADEAUX` (
  `idCadeau` int(11) NOT NULL,
  `descriptionCadeau` varchar(50) NOT NULL,
  `prixCadeau` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `PARTIEA__CADEAUX`
--

INSERT INTO `PARTIEA__CADEAUX` (`idCadeau`, `descriptionCadeau`, `prixCadeau`) VALUES
(1, 'PS5', 499),
(2, 'trottinette', 20),
(3, 'orange', 2);

-- --------------------------------------------------------

--
-- Table structure for table `PARTIEA__ENFANTS`
--

CREATE TABLE `PARTIEA__ENFANTS` (
  `idEnfant` int(11) NOT NULL,
  `nomEnfant` varchar(50) NOT NULL,
  `prenomEnfant` varchar(50) NOT NULL,
  `ageEnfant` int(11) NOT NULL,
  `villeEnfant` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `PARTIEA__ENFANTS`
--

INSERT INTO `PARTIEA__ENFANTS` (`idEnfant`, `nomEnfant`, `prenomEnfant`, `ageEnfant`, `villeEnfant`) VALUES
(6, 'Petit', 'Tom', 9, 'Poitiers'),
(7, 'Bodin', 'Marcel', 10, 'Marseille'),
(8, 'Jean', 'Paul', 8, 'Poitiers');

-- --------------------------------------------------------

--
-- Table structure for table `PARTIEB__CADEAUX`
--

CREATE TABLE `PARTIEB__CADEAUX` (
  `idCadeau` int(11) NOT NULL,
  `descriptionCadeau` varchar(50) NOT NULL,
  `prixCadeau` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `PARTIEB__ENFANTS`
--

CREATE TABLE `PARTIEB__ENFANTS` (
  `idEnfant` int(11) NOT NULL,
  `nomEnfant` varchar(50) NOT NULL,
  `prenomEnfant` varchar(50) NOT NULL,
  `ageEnfant` int(11) NOT NULL,
  `villeEnfant` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `PARTIEC__CADEAUX`
--

CREATE TABLE `PARTIEC__CADEAUX` (
  `idCadeau` int(11) NOT NULL,
  `descriptionCadeau` varchar(50) NOT NULL,
  `prixCadeau` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `PARTIEC__CADEAUX`
--

INSERT INTO `PARTIEC__CADEAUX` (`idCadeau`, `descriptionCadeau`, `prixCadeau`) VALUES
(1, 'PS5', 499),
(2, 'ballon', 10),
(3, 'trottinette', 55),
(4, 'dinette', 45);

-- --------------------------------------------------------

--
-- Table structure for table `PARTIEC__ENFANTS`
--

CREATE TABLE `PARTIEC__ENFANTS` (
  `idEnfant` int(11) NOT NULL,
  `nomEnfant` varchar(50) NOT NULL,
  `prenomEnfant` varchar(50) NOT NULL,
  `ageEnfant` int(11) NOT NULL,
  `villeEnfant` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `PARTIED__CADEAUX`
--

CREATE TABLE `PARTIED__CADEAUX` (
  `idCadeau` int(11) NOT NULL,
  `descriptionCadeau` varchar(50) NOT NULL,
  `prixCadeau` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `PARTIED__ENFANTS`
--

CREATE TABLE `PARTIED__ENFANTS` (
  `idEnfant` int(11) NOT NULL,
  `nomEnfant` varchar(50) NOT NULL,
  `prenomEnfant` varchar(50) NOT NULL,
  `ageEnfant` int(11) NOT NULL,
  `villeEnfant` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `PARTIED__ENFANTS`
--

INSERT INTO `PARTIED__ENFANTS` (`idEnfant`, `nomEnfant`, `prenomEnfant`, `ageEnfant`, `villeEnfant`) VALUES
(1, 'Dupont', 'Martin', 10, 'Poitiers'),
(2, 'Dubois', 'Adam', 8, 'Poitiers');

-- --------------------------------------------------------

--
-- Table structure for table `PARTIEE__CADEAUX`
--

CREATE TABLE `PARTIEE__CADEAUX` (
  `idCadeau` int(11) NOT NULL,
  `descriptionCadeau` varchar(50) NOT NULL,
  `prixCadeau` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `PARTIEE__ENFANTS`
--

CREATE TABLE `PARTIEE__ENFANTS` (
  `idEnfant` int(11) NOT NULL,
  `nomEnfant` varchar(50) NOT NULL,
  `prenomEnfant` varchar(50) NOT NULL,
  `ageEnfant` int(11) NOT NULL,
  `villeEnfant` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `PARTIEE__LUTINS`
--

CREATE TABLE `PARTIEE__LUTINS` (
  `idLutin` int(11) NOT NULL,
  `nomLutin` varchar(50) NOT NULL,
  `equipeLutin` varchar(50) NOT NULL,
  `mdpLutin` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `PARTIEE__LUTINS`
--

INSERT INTO `PARTIEE__LUTINS` (`idLutin`, `nomLutin`, `equipeLutin`, `mdpLutin`) VALUES
(1, 'Floop', 'Magic', 'MDP'),
(2, 'Buddy', 'Magic', 'mdp');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `PARTIEA__CADEAUX`
--
ALTER TABLE `PARTIEA__CADEAUX`
  ADD PRIMARY KEY (`idCadeau`);

--
-- Indexes for table `PARTIEA__ENFANTS`
--
ALTER TABLE `PARTIEA__ENFANTS`
  ADD PRIMARY KEY (`idEnfant`);

--
-- Indexes for table `PARTIEB__CADEAUX`
--
ALTER TABLE `PARTIEB__CADEAUX`
  ADD PRIMARY KEY (`idCadeau`);

--
-- Indexes for table `PARTIEB__ENFANTS`
--
ALTER TABLE `PARTIEB__ENFANTS`
  ADD PRIMARY KEY (`idEnfant`);

--
-- Indexes for table `PARTIEC__CADEAUX`
--
ALTER TABLE `PARTIEC__CADEAUX`
  ADD PRIMARY KEY (`idCadeau`);

--
-- Indexes for table `PARTIEC__ENFANTS`
--
ALTER TABLE `PARTIEC__ENFANTS`
  ADD PRIMARY KEY (`idEnfant`);

--
-- Indexes for table `PARTIED__CADEAUX`
--
ALTER TABLE `PARTIED__CADEAUX`
  ADD PRIMARY KEY (`idCadeau`);

--
-- Indexes for table `PARTIED__ENFANTS`
--
ALTER TABLE `PARTIED__ENFANTS`
  ADD PRIMARY KEY (`idEnfant`);

--
-- Indexes for table `PARTIEE__CADEAUX`
--
ALTER TABLE `PARTIEE__CADEAUX`
  ADD PRIMARY KEY (`idCadeau`);

--
-- Indexes for table `PARTIEE__ENFANTS`
--
ALTER TABLE `PARTIEE__ENFANTS`
  ADD PRIMARY KEY (`idEnfant`);

--
-- Indexes for table `PARTIEE__LUTINS`
--
ALTER TABLE `PARTIEE__LUTINS`
  ADD PRIMARY KEY (`idLutin`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `PARTIEA__CADEAUX`
--
ALTER TABLE `PARTIEA__CADEAUX`
  MODIFY `idCadeau` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `PARTIEA__ENFANTS`
--
ALTER TABLE `PARTIEA__ENFANTS`
  MODIFY `idEnfant` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `PARTIEB__CADEAUX`
--
ALTER TABLE `PARTIEB__CADEAUX`
  MODIFY `idCadeau` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `PARTIEB__ENFANTS`
--
ALTER TABLE `PARTIEB__ENFANTS`
  MODIFY `idEnfant` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `PARTIEC__CADEAUX`
--
ALTER TABLE `PARTIEC__CADEAUX`
  MODIFY `idCadeau` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `PARTIEC__ENFANTS`
--
ALTER TABLE `PARTIEC__ENFANTS`
  MODIFY `idEnfant` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `PARTIED__CADEAUX`
--
ALTER TABLE `PARTIED__CADEAUX`
  MODIFY `idCadeau` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `PARTIED__ENFANTS`
--
ALTER TABLE `PARTIED__ENFANTS`
  MODIFY `idEnfant` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `PARTIEE__CADEAUX`
--
ALTER TABLE `PARTIEE__CADEAUX`
  MODIFY `idCadeau` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `PARTIEE__ENFANTS`
--
ALTER TABLE `PARTIEE__ENFANTS`
  MODIFY `idEnfant` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `PARTIEE__LUTINS`
--
ALTER TABLE `PARTIEE__LUTINS`
  MODIFY `idLutin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
