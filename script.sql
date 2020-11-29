-- Database: formationFormateur
--

-- --------------------------------------------------------

--
-- Table structure for table PARTIEA__CADEAUX
--

CREATE TABLE PARTIEA__CADEAUX (
  idCadeau int(11) NOT NULL,
  descriptionCadeau varchar(50) NOT NULL,
  prixCadeau int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table PARTIEA__CADEAUX
--

INSERT INTO PARTIEA__CADEAUX (idCadeau, descriptionCadeau, prixCadeau) VALUES
(1, 'PS5', 499),
(2, 'trottinette', 20);

-- --------------------------------------------------------

--
-- Table structure for table PARTIEA__ENFANTS
--

CREATE TABLE PARTIEA__ENFANTS (
  idEnfant int(11) NOT NULL,
  nomEnfant varchar(50) NOT NULL,
  prenomEnfant varchar(50) NOT NULL,
  ageEnfant int(11) NOT NULL,
  villeEnfant varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table PARTIEA__ENFANTS
--

INSERT INTO PARTIEA__ENFANTS (idEnfant, nomEnfant, prenomEnfant, ageEnfant, villeEnfant) VALUES
(1, 'Dupont', 'Marcel', 9, 'Poitiers');

-- --------------------------------------------------------

--
-- Table structure for table PARTIEB__CADEAUX
--

CREATE TABLE PARTIEB__CADEAUX (
  idCadeau int(11) NOT NULL,
  descriptionCadeau varchar(50) NOT NULL,
  prixCadeau int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table PARTIEB__CADEAUX
--

INSERT INTO PARTIEB__CADEAUX (idCadeau, descriptionCadeau, prixCadeau) VALUES
(1, 'PS5', 500);

-- --------------------------------------------------------

--
-- Table structure for table PARTIEB__ENFANTS
--

CREATE TABLE PARTIEB__ENFANTS (
  idEnfant int(11) NOT NULL,
  nomEnfant varchar(50) NOT NULL,
  prenomEnfant varchar(50) NOT NULL,
  ageEnfant int(11) NOT NULL,
  villeEnfant varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table PARTIEB__ENFANTS
--

INSERT INTO PARTIEB__ENFANTS (idEnfant, nomEnfant, prenomEnfant, ageEnfant, villeEnfant) VALUES
(1, 'JEAN', 'Jacques', 12, 'Paris'),


--
-- Indexes for dumped tables
--

--
-- Indexes for table PARTIEA__CADEAUX
--
ALTER TABLE PARTIEA__CADEAUX ADD PRIMARY KEY (idCadeau);

--
-- Indexes for table PARTIEA__ENFANTS
--
ALTER TABLE PARTIEA__ENFANTS
  ADD PRIMARY KEY (idEnfant);

--
-- Indexes for table PARTIEB__CADEAUX
--
ALTER TABLE PARTIEB__CADEAUX
  ADD PRIMARY KEY (idCadeau);

--
-- Indexes for table PARTIEB__ENFANTS
--
ALTER TABLE PARTIEB__ENFANTS
  ADD PRIMARY KEY (idEnfant);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table PARTIEA__CADEAUX
--
ALTER TABLE PARTIEA__CADEAUX
  MODIFY idCadeau int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table PARTIEA__ENFANTS
--
ALTER TABLE PARTIEA__ENFANTS
  MODIFY idEnfant int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table PARTIEB__CADEAUX
--
ALTER TABLE PARTIEB__CADEAUX
  MODIFY idCadeau int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table PARTIEB__ENFANTS
--
ALTER TABLE PARTIEB__ENFANTS
  MODIFY idEnfant int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
