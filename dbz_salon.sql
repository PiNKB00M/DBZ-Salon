SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

-- Database: `dbz_salon`

CREATE TABLE `admin` (
  `AdminID` int(11) NOT NULL,
  `adminpassword` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`AdminID`, `adminpassword`) VALUES
(1, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `bookapp`
--

CREATE TABLE `bookapp` (
  `AppoID` int(11) NOT NULL,
  `Date` date NOT NULL,
  `Time` time NOT NULL,
  `customerID` int(11) NOT NULL,
  `StyID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookapp`
--

INSERT INTO `bookapp` (`AppoID`, `Date`, `Time`, `customerID`, `StyID`) VALUES
(1, '2022-04-24', '13:00:00', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `stylist`
--

CREATE TABLE `stylist` (
  `StylistID` int(11) NOT NULL,
  `Stylistname` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `ContactNumber` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `services` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stylist`
--

INSERT INTO `stylist` (`StylistID`, `Stylistname`, `email`, `Address`, `ContactNumber`, `Password`, `services`) VALUES
(1, 'Xianrui Z', 'xz@mc.com', 'Clarkston', '0123456789', 'xz123', 'Haircut');
(1, 'Parker B', 'pb@mc.com', 'Parker', '1234567890', 'pb123', 'Color');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `UserID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `ContactNumber` varchar(40) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`UserID`, `Name`, `Address`, `ContactNumber`, `Email`, `Password`) VALUES
(1, 'Dominic D', 'Dominic', '1357924680', 'dd@mc.com', '87b1f62d552fd91a6f069e2d94628f4e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY `AdminID` (`AdminID`);

--
-- Indexes for table `bookapp`
--
ALTER TABLE `bookapp`
  ADD PRIMARY KEY (`AppoID`),
  ADD UNIQUE KEY `Time` (`Time`),
  ADD KEY `customertoapp` (`customerID`),
  ADD KEY `stytocustomer` (`StyID`);

--
-- Indexes for table `stylist`
--
ALTER TABLE `stylist`
  ADD PRIMARY KEY (`StylistID`);

--
-- Indexes for table `customers`
--

ALTER TABLE `customers`
  ADD PRIMARY KEY (`UserID`);

-- ALTER TABLE `donor`
--   ADD PRIMARY KEY (`donarID`);
COMMIT;

