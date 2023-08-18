-- MariaDB dump 10.19  Distrib 10.4.28-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: atresnasite
-- ------------------------------------------------------
-- Server version	10.4.28-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `analisis_pengunjung`
--

DROP TABLE IF EXISTS `analisis_pengunjung`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `analisis_pengunjung` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(50) NOT NULL,
  `user_agent` text NOT NULL,
  `url` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `analisis_pengunjung`
--

LOCK TABLES `analisis_pengunjung` WRITE;
/*!40000 ALTER TABLE `analisis_pengunjung` DISABLE KEYS */;
INSERT INTO `analisis_pengunjung` VALUES (1,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36','http://localhost:8000','2023-08-14 08:05:29','2023-08-14 08:05:29'),(2,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36','http://localhost:8000','2023-02-14 08:33:59','2023-08-14 08:33:59'),(3,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36','http://localhost:8000','2023-08-14 08:35:39','2023-08-14 08:35:39'),(4,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36','http://localhost:8000/produk','2023-08-14 08:35:46','2023-08-14 08:35:46'),(5,'127.02.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36','http://localhost:8000/servis','2023-03-14 08:35:52','2023-08-14 08:35:52'),(6,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36','http://localhost:8000/news','2023-03-14 08:36:17','2023-08-14 08:36:17'),(7,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36','http://localhost:8000/tentang-kami','2023-08-14 08:36:22','2023-08-14 08:36:22'),(8,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36','http://localhost:8000/tentang-kami','2023-08-14 08:44:14','2023-08-14 08:44:14'),(9,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36','http://localhost:8000/tentang-kami','2023-08-14 08:44:22','2023-08-14 08:44:22'),(10,'127.2.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36','http://localhost:8000/tentang-kami','2023-01-14 08:45:19','2023-08-14 08:45:19'),(11,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36','http://localhost:8000/tentang-kami','2023-01-14 08:50:10','2023-08-14 08:50:10'),(12,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36','http://localhost:8000/tentang-kami','2023-01-14 09:07:41','2023-08-14 09:07:41'),(13,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36','http://localhost:8000/tentang-kami','2023-08-14 09:26:18','2023-08-14 09:26:18'),(14,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36','http://localhost:8000/produk','2023-08-14 09:26:20','2023-08-14 09:26:20'),(15,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36','http://localhost:8000/produk','2023-04-14 09:32:59','2023-08-14 09:32:59'),(16,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36','http://localhost:8000/produk','2023-04-14 09:35:05','2023-08-14 09:35:05'),(17,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36','http://localhost:8000/produk','2023-08-14 09:35:08','2023-08-14 09:35:08'),(18,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36','http://localhost:8000','2023-08-15 06:52:50','2023-08-15 06:52:50'),(19,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36','http://localhost:8000/produk','2023-05-15 06:52:59','2023-08-15 06:52:59'),(20,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36','http://localhost:8000/servis','2023-05-15 06:53:03','2023-08-15 06:53:03'),(21,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36','http://localhost:8000/news','2023-08-15 06:53:07','2023-08-15 06:53:07'),(22,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36','http://localhost:8000/tentang-kami','2023-05-15 06:53:11','2023-08-15 06:53:11'),(23,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36','http://localhost:8000/tentang-kami','2023-08-15 06:55:20','2023-08-15 06:55:20'),(24,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36','http://localhost:8000/tentang-kami','2023-05-15 06:55:30','2023-08-15 06:55:30'),(25,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36','http://localhost:8000/tentang-kami','2023-08-15 06:56:03','2023-08-15 06:56:03'),(26,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36','http://localhost:8000/tentang-kami','2023-05-15 06:58:18','2023-08-15 06:58:18'),(27,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36','http://localhost:8000/tentang-kami','2023-05-15 06:58:47','2023-08-15 06:58:47'),(28,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36','http://localhost:8000/tentang-kami','2023-05-15 07:06:05','2023-08-15 07:06:05'),(29,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36','http://localhost:8000/tentang-kami','2023-05-15 07:06:21','2023-08-15 07:06:21'),(30,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36','http://localhost:8000/produk','2023-08-15 07:06:58','2023-08-15 07:06:58'),(31,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36','http://localhost:8000/produk','2023-08-15 07:07:01','2023-08-15 07:07:01'),(32,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36','http://localhost:8000/produk','2023-08-15 07:07:04','2023-08-15 07:07:04'),(33,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36','http://localhost:8000/produk','2023-08-15 07:08:01','2023-08-15 07:08:01'),(34,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36','http://localhost:8000/produk','2023-08-15 07:15:35','2023-08-15 07:15:35'),(35,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36','http://localhost:8000/produk','2023-08-15 07:15:39','2023-08-15 07:15:39'),(36,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36','http://localhost:8000/produk','2023-08-15 07:17:49','2023-08-15 07:17:49'),(37,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36','http://localhost:8000/produk','2023-08-15 07:18:08','2023-08-15 07:18:08'),(38,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36','http://localhost:8000','2023-08-15 07:19:41','2023-08-15 07:19:41'),(39,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36','http://localhost:8000','2023-08-15 07:52:38','2023-08-15 07:52:38'),(40,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36','http://localhost:8000','2023-08-15 08:34:07','2023-08-15 08:34:07'),(41,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36','http://localhost:8000','2023-08-15 08:38:22','2023-08-15 08:38:22'),(42,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36','http://localhost:8000','2023-08-17 05:50:14','2023-08-17 05:50:14'),(43,'127.0.0.1','Mozilla/5.0 (iPhone; CPU iPhone OS 14_0 like Mac OS X) AppleWebKit/603.1.30 (KHTML, like Gecko) Version/12.0.0 Mobile/15A5370a Safari/602.1','http://localhost:8000','2023-08-17 05:50:38','2023-08-17 05:50:38'),(44,'127.0.0.1','Mozilla/5.0 (iPhone; CPU iPhone OS 14_0 like Mac OS X) AppleWebKit/603.1.30 (KHTML, like Gecko) Version/12.0.0 Mobile/15A5370a Safari/602.1','http://localhost:8000','2023-08-17 05:51:13','2023-08-17 05:51:13'),(45,'127.0.0.1','Mozilla/5.0 (iPhone; CPU iPhone OS 14_0 like Mac OS X) AppleWebKit/603.1.30 (KHTML, like Gecko) Version/12.0.0 Mobile/15A5370a Safari/602.1','http://localhost:8000','2023-08-17 05:51:32','2023-08-17 05:51:32'),(46,'127.0.0.1','Mozilla/5.0 (iPhone; CPU iPhone OS 14_0 like Mac OS X) AppleWebKit/603.1.30 (KHTML, like Gecko) Version/12.0.0 Mobile/15A5370a Safari/602.1','http://localhost:8000','2023-08-17 05:51:38','2023-08-17 05:51:38'),(47,'127.0.0.1','Mozilla/5.0 (iPhone; CPU iPhone OS 14_0 like Mac OS X) AppleWebKit/603.1.30 (KHTML, like Gecko) Version/12.0.0 Mobile/15A5370a Safari/602.1','http://localhost:8000','2023-08-17 05:51:38','2023-08-17 05:51:38'),(48,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36','http://localhost:8000','2023-08-17 20:59:14','2023-08-17 20:59:14');
/*!40000 ALTER TABLE `analisis_pengunjung` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `blog_news`
--

DROP TABLE IF EXISTS `blog_news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `blog_news` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `blog_news_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blog_news`
--

LOCK TABLES `blog_news` WRITE;
/*!40000 ALTER TABLE `blog_news` DISABLE KEYS */;
INSERT INTO `blog_news` VALUES (1,'Our Info','our-info','1690695584-blog-news.jpeg','Isi Content','2023-07-29 22:39:44','2023-07-29 22:39:44'),(2,'Our Love And Dta a','our-love-and-dta-a','1690695598-blog-news.jpeg','Isi Content','2023-07-29 22:39:58','2023-07-29 22:39:58');
/*!40000 ALTER TABLE `blog_news` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `brand_produk`
--

DROP TABLE IF EXISTS `brand_produk`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `brand_produk` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama_brand` varchar(255) NOT NULL,
  `slugs` varchar(255) NOT NULL,
  `deskripsi_brand` text DEFAULT NULL,
  `gambar_brand` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `brand_produk_slugs_unique` (`slugs`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `brand_produk`
--

LOCK TABLES `brand_produk` WRITE;
/*!40000 ALTER TABLE `brand_produk` DISABLE KEYS */;
INSERT INTO `brand_produk` VALUES (1,'brand produk 1 just update','brand-produk-1-just-update','brand produk deskripsi_brand','1688198710-brand-produk-1-just-update.png',NULL,'2023-07-01 01:05:10');
/*!40000 ALTER TABLE `brand_produk` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `company_info`
--

DROP TABLE IF EXISTS `company_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `company_info` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `company_name` varchar(255) NOT NULL,
  `company_address` text NOT NULL,
  `company_slogan` varchar(255) DEFAULT NULL,
  `company_logo` text NOT NULL,
  `company_phone` text NOT NULL,
  `company_phone1` text DEFAULT NULL,
  `company_email` text NOT NULL,
  `company_npwp` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `company_info`
--

LOCK TABLES `company_info` WRITE;
/*!40000 ALTER TABLE `company_info` DISABLE KEYS */;
INSERT INTO `company_info` VALUES (1,'CV. Mata Air Mutiara tes','Jl. Maju No.1 Tidak Mundur, Kec. Sukses, Kab. Berhasil, 12201','Total Solution For Your Digital Company','1690105740-cv-mata-air-mutiara.png','08557456858','08557456858','support@atresna.com','27.2312.34123.131',NULL,'2023-08-14 00:28:10');
/*!40000 ALTER TABLE `company_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `customers`
--

DROP TABLE IF EXISTS `customers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `customers` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `customer_name` varchar(255) NOT NULL,
  `customer_slug` varchar(255) NOT NULL,
  `customer_logo` varchar(255) DEFAULT NULL,
  `customer_address` varchar(255) DEFAULT NULL,
  `customer_link` varchar(255) DEFAULT NULL,
  `customer_job_desc` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customers`
--

LOCK TABLES `customers` WRITE;
/*!40000 ALTER TABLE `customers` DISABLE KEYS */;
INSERT INTO `customers` VALUES (2,'Baru ku sadari','baru-ku-sadari','1688912747-baru-ku-sadari.png','Baru ku sadari',NULL,'Baru ku sadari','2023-07-09 07:08:14','2023-07-09 07:25:47');
/*!40000 ALTER TABLE `customers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `images_produk`
--

DROP TABLE IF EXISTS `images_produk`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `images_produk` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_produk` bigint(20) unsigned NOT NULL,
  `gambar_produk` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `images_produk`
--

LOCK TABLES `images_produk` WRITE;
/*!40000 ALTER TABLE `images_produk` DISABLE KEYS */;
INSERT INTO `images_produk` VALUES (9,3,'1688568374-again.268150-P5HM2W-787-02.png',NULL,NULL),(10,3,'1688568374-again.app_icon.png',NULL,NULL),(11,3,'1688568596-again.40314d7dc3388d238a870a04c9934fb4.jpg',NULL,NULL),(12,3,'1688568596-again.pexels-photo-2421374.jpeg',NULL,NULL),(13,4,'1688568820-tes-produk-baru.3891940.png',NULL,NULL),(14,4,'1688568820-tes-produk-baru.pexels-picography-4458.jpg',NULL,NULL),(15,5,'1688570127-tes-produk.3891940.png',NULL,NULL),(16,5,'1688570127-tes-produk.5995355.png',NULL,NULL),(17,7,'1688570525-update-saja-lah-ya.EDI-MK3-800x600.jpg',NULL,NULL);
/*!40000 ALTER TABLE `images_produk` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kategori_produk`
--

DROP TABLE IF EXISTS `kategori_produk`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kategori_produk` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(255) NOT NULL,
  `slugs` varchar(255) NOT NULL,
  `deskripsi_kategori` text DEFAULT NULL,
  `gambar_produk` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `kategori_produk_slugs_unique` (`slugs`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kategori_produk`
--

LOCK TABLES `kategori_produk` WRITE;
/*!40000 ALTER TABLE `kategori_produk` DISABLE KEYS */;
INSERT INTO `kategori_produk` VALUES (45,'Bersepeda','bersepeda','Bersepeda update','1688190467-bersepeda-update.png','2023-06-21 08:34:54','2023-06-30 22:49:08');
/*!40000 ALTER TABLE `kategori_produk` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_reset_tokens_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2019_12_14_000001_create_personal_access_tokens_table',1),(5,'2023_05_17_155307_create_kategori_produks_table',1),(6,'2023_05_17_155309_create_brand_produks_table',1),(7,'2023_05_17_155323_create_produks_table',1),(8,'2023_05_17_155349_create_images_produks_table',1),(9,'2023_07_05_161605_create_servis_table',2),(12,'2023_07_09_034538_create_company_infos_table',3),(13,'2023_07_09_035227_create_customers_table',3),(15,'2023_07_10_132823_create_static_pages_table',4),(16,'2023_07_12_094321_create_blog_news_table',5),(17,'2023_07_13_094050_create_sosmeds_table',5),(18,'2023_07_14_014539_add_avatar_to_user',5),(19,'2023_07_15_153943_create_sliders_table',6),(20,'2023_07_16_135114_add_row_company_slogan',7),(21,'2023_07_23_101359_create_panel_utamas_table',8),(22,'2023_08_14_064027_create_analisis_pengunjungs_table',9),(23,'2023_08_14_064622_add_table_routenam_analisis_pengunjung',9);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `panel_utama`
--

DROP TABLE IF EXISTS `panel_utama`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `panel_utama` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `panel_utama`
--

LOCK TABLES `panel_utama` WRITE;
/*!40000 ALTER TABLE `panel_utama` DISABLE KEYS */;
INSERT INTO `panel_utama` VALUES (1,'tes create panel','1690109272-tes-create-panel-update.png','Tes create panel','2023-07-23 03:39:58','2023-08-13 09:50:08'),(3,'Tes lagi lagi','1690112297-tes-lagi-lagi.png','Tes lagi lagi','2023-07-23 04:38:17','2023-07-23 04:38:17');
/*!40000 ALTER TABLE `panel_utama` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_reset_tokens`
--

LOCK TABLES `password_reset_tokens` WRITE;
/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `produks`
--

DROP TABLE IF EXISTS `produks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `produks` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama_produk` varchar(255) NOT NULL,
  `slugs` varchar(255) NOT NULL,
  `satuan_produk` varchar(255) NOT NULL,
  `kondisi_produk` varchar(255) NOT NULL,
  `id_kategori` bigint(20) unsigned NOT NULL,
  `id_brand` bigint(20) unsigned NOT NULL,
  `harga_produk` double DEFAULT NULL,
  `on_stok` tinyint(1) NOT NULL DEFAULT 1,
  `stok_produk` int(11) NOT NULL,
  `deskripsi_produk` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `produks_slugs_unique` (`slugs`),
  KEY `produks_id_kategori_foreign` (`id_kategori`),
  KEY `produks_id_brand_foreign` (`id_brand`),
  CONSTRAINT `produks_id_brand_foreign` FOREIGN KEY (`id_brand`) REFERENCES `brand_produk` (`id`) ON DELETE CASCADE,
  CONSTRAINT `produks_id_kategori_foreign` FOREIGN KEY (`id_kategori`) REFERENCES `kategori_produk` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `produks`
--

LOCK TABLES `produks` WRITE;
/*!40000 ALTER TABLE `produks` DISABLE KEYS */;
INSERT INTO `produks` VALUES (5,'Tes Produk','tes-produk','BOX','NEW',45,1,120003913,1,120,'daskashoidhoiasndsad','2023-07-05 08:15:27','2023-07-05 08:15:27'),(7,'Update Saja lah ya','update-saja-lah-ya','LOT','SECOND',45,1,12312112,1,2112,'idih','2023-07-05 08:22:04','2023-07-05 08:22:04');
/*!40000 ALTER TABLE `produks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `servis`
--

DROP TABLE IF EXISTS `servis`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `servis` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `judul_servis` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `gambar_servis` varchar(255) NOT NULL,
  `deskripsi_servis` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `servis_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `servis`
--

LOCK TABLES `servis` WRITE;
/*!40000 ALTER TABLE `servis` DISABLE KEYS */;
INSERT INTO `servis` VALUES (1,'Tes Create A Servuces update','tes-create-a-servuces-update','1688872661-cxampptmpphp6ea4tmp.png','<h1>Hi There</h1>\r\n<p>Konesepnya seperti ini saja update</p>','2023-07-08 20:02:50','2023-07-08 20:17:41');
/*!40000 ALTER TABLE `servis` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sliders`
--

DROP TABLE IF EXISTS `sliders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sliders` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `slider_title` varchar(100) DEFAULT NULL,
  `slider_desc` varchar(255) DEFAULT NULL,
  `slider_image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sliders`
--

LOCK TABLES `sliders` WRITE;
/*!40000 ALTER TABLE `sliders` DISABLE KEYS */;
INSERT INTO `sliders` VALUES (1,'Kualitas Terbaik','Slider Utama','1690106067-sliders.png','2023-07-15 09:19:37','2023-07-23 02:54:27');
/*!40000 ALTER TABLE `sliders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sosmed`
--

DROP TABLE IF EXISTS `sosmed`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sosmed` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `link` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sosmed`
--

LOCK TABLES `sosmed` WRITE;
/*!40000 ALTER TABLE `sosmed` DISABLE KEYS */;
INSERT INTO `sosmed` VALUES (1,'Facebook','https://www.facebook.com/','1690696601-facebook.png','2023-07-29 22:56:41','2023-07-29 22:56:41'),(2,'Instagram','https://instagram.com/','1690696617-instagram.png','2023-07-29 22:56:57','2023-07-29 22:56:57'),(3,'Linkedin','https://linkedin.com/','1690696637-linkedin.png','2023-07-29 22:57:17','2023-07-29 22:57:17'),(4,'WhatsApp','https://web.whatsapp.com/','1690696661-whatsapp.png','2023-07-29 22:57:41','2023-07-29 22:57:41');
/*!40000 ALTER TABLE `sosmed` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `static_pages`
--

DROP TABLE IF EXISTS `static_pages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `static_pages` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `type` enum('main-konten','konten') NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `static_pages_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `static_pages`
--

LOCK TABLES `static_pages` WRITE;
/*!40000 ALTER TABLE `static_pages` DISABLE KEYS */;
INSERT INTO `static_pages` VALUES (1,'Tes','tes','1690695540-tes.jpg','main-konten','Isi Content','2023-07-29 22:37:35','2023-07-29 22:39:00'),(2,'Produk Pages','produk-pages','1690818468-produk-pages.jpg','konten','Isi Content','2023-07-31 08:36:11','2023-08-13 08:23:07'),(3,'Servis Pages','servis-pages','1691934943-servis-pages.jpg','konten','<p>Servis Pages</p>','2023-08-13 06:55:44','2023-08-13 08:22:57'),(4,'News And Update','news-and-update','1691937090-news-and-update.jpg','konten','<p>News And Update&nbsp;</p>','2023-08-13 07:31:30','2023-08-13 07:31:30'),(5,'Tentang Kami','tentang-kami','1691940241-tentang-kami.png','main-konten','Isi Content','2023-08-13 08:24:01','2023-08-13 08:24:01');
/*!40000 ALTER TABLE `static_pages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `profile` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Admin Atresna','1689433999-admin-atresna.png','admin@atresna.com',NULL,'$2y$10$4UQmFwDlS5rjqz4U8APn0.PEanqNL1uUTWRjf4fqPgCCkI8ngbqUG',NULL,NULL,'2023-07-15 08:20:09');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-08-18 11:00:10
