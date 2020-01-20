SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;


CREATE TABLE `admin` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
);

CREATE TABLE `guest` (
 `numbr` int(11) NOT NULL,
 `guestname` varchar(255) NOT NULL,
 `guestemail` varchar(255) NOT NULL,
 `guestelephone` int(11),
 `adults`int(11),
 `children` int(11),
 `checkin` varchar(255) NOT NULL,
 `checkout` varchar(255) NOT NULL,
 `comments`varchar(255) NOT NULL
);


INSERT INTO `admin` (`username`,`password`) VALUES
('admin01', 'admin01');

INSERT INTO `guest` (`numbr`,`guestname`,`guestemail`, `guestelephone`,`adults`,`children`,`checkin`,`comments`,`checkout`) VALUES
('1','','','','','','','','');

ALTER TABLE `guest`
  ADD PRIMARY KEY (`numbr`);
  
  ALTER TABLE `guest`
  MODIFY `numbr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;


