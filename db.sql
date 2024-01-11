CREATE DATABASE `utm_maker` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

CREATE TABLE `utm_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `campaignSource` varchar(255) NOT NULL,
  `campaignMedium` varchar(255) NOT NULL,
  `campaignName` varchar(255) DEFAULT NULL,
  `sourcePlatform` varchar(255) DEFAULT NULL,
  `campaignTerm` varchar(255) DEFAULT NULL,
  `campaignContent` varchar(255) DEFAULT NULL,
  `campaignId` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `userIp` varchar(255) DEFAULT NULL,
  `userLocation` varchar(255) DEFAULT NULL,
  `creationDate` datetime DEFAULT current_timestamp(),
  `endUrl` text DEFAULT NULL,
  `siteUrl` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4;
