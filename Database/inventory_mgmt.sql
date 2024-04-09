

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";



-- CREATE TABLE `tbl_user` (
--   `id` int(11) NOT NULL,
--   `name` varchar(100) NOT NULL,
--   `username` varchar(100) NOT NULL,
--   `password` varchar(100) NOT NULL
-- ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


-- ALTER TABLE `tbl_user`
--   ADD PRIMARY KEY (`id`);


-- ALTER TABLE `tbl_user`
--   -- MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--   MODIFY `id` AUTO_INCREMENT PRIMARY KEY,


CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE `tbl_user` AUTO_INCREMENT = 1;

CREATE TABLE `inventory_data` (
  `serial_no` int(11) NOT NULL,
  `purchase_date` date DEFAULT NULL,
  `Inventory_Description` varchar(500) DEFAULT NULL,
  `labrotary` varchar(50) DEFAULT NULL,
  `Purchase_Price` int(11) DEFAULT NULL,
  `dsr_number` varchar(70) DEFAULT NULL,
  `Assistant_Confirmed` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


CREATE TABLE `manage_invent` (
  `serial_no` int(11) NOT NULL,
  `Inventory_Description` varchar(100) NOT NULL,
  `Purchase_Price` varchar(100) NOT NULL,
  `Move_To_Laboratory` varchar(100) NOT NULL,
  `Status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


CREATE TABLE `scanned_inventory` (
  `labrotary` varchar(50) DEFAULT NULL,
  `Inventory_Description` varchar(500) DEFAULT NULL,
  `Qr_image` mediumblob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
COMMIT;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `manage_invent`
--
ALTER TABLE `manage_invent`
  ADD PRIMARY KEY (`serial_no`);
COMMIT;

COMMIT;
COMMIT;

COMMIT;

