-- MySQL dump 10.13  Distrib 8.0.30, for Linux (x86_64)
--
-- Host: localhost    Database: ci_ahmad_fauzi
-- ------------------------------------------------------
-- Server version	8.0.30-0ubuntu0.20.04.2

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `formulir_pemohon`
--

DROP TABLE IF EXISTS `formulir_pemohon`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `formulir_pemohon` (
  `id_formulir` int NOT NULL AUTO_INCREMENT,
  `alasan_permohonan` varchar(255) NOT NULL,
  `nomor_surat_permohonan` varchar(255) NOT NULL,
  `dokumen_surat_permohonan` varchar(255) NOT NULL,
  `nama_pemohon` varchar(255) NOT NULL,
  `nomor_izin_usaha_industri` varchar(255) NOT NULL,
  `dokumen_izin_usaha` varchar(255) NOT NULL,
  `nomor_induk_berusaha` varchar(255) NOT NULL,
  `dokumen_induk_berusaha` varchar(255) NOT NULL,
  `KBLI` varchar(255) NOT NULL,
  `user_id` int NOT NULL,
  `status` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT 'diajukan',
  `state_access` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT 'dirjen',
  `date_created` datetime DEFAULT CURRENT_TIMESTAMP,
  `acc_dirjen` varchar(100) DEFAULT NULL,
  `step_lapor_atasan` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_formulir`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `formulir_pemohon`
--

LOCK TABLES `formulir_pemohon` WRITE;
/*!40000 ALTER TABLE `formulir_pemohon` DISABLE KEYS */;
INSERT INTO `formulir_pemohon` VALUES (3,'Penambahan kapasitas Produksi','1231/31/1/D/2022/JKTB','26a62e0389793ba6267072ea0d1d8139.pdf','PT Tunang Agung Jaya','8071821-21371214','f735cb6b502c5ccc8109f1a3236e02c4.pdf','192103121-21931314-21','27200870763132daad4f076db7bfff6b.pdf','25113-INDUSTRI KONSTRUKSI BERAT SIAP PASANG DARI BAJA UNTUK BANGUNAN',1,'selesai','done','2022-10-09 11:04:36','true','1'),(4,'Penambahan kapasitas Produksi','1231/2131/31/2022','a14dae504ecdba0fdc1666b7ed9208a8.pdf','Budi Hartanto','131/44343/2121/11','a11337ff5c4bb2bfbcd8796118189d3a.pdf','213131-21424-2323','5818c6a7e1c3fd29c7a08b535ff03c20.pdf','25120-INDUSTRI TANGKI, TANDON AIR DAN WADAH DARI LOGAM',1,'selesai','done','2022-10-09 19:23:19','true','1');
/*!40000 ALTER TABLE `formulir_pemohon` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `formulir_produk`
--

DROP TABLE IF EXISTS `formulir_produk`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `formulir_produk` (
  `id_produk` int NOT NULL AUTO_INCREMENT,
  `nama_mesin` varchar(255) NOT NULL,
  `merek_mesin` varchar(255) NOT NULL,
  `hs_code` varchar(255) NOT NULL,
  `kegunaan` varchar(255) NOT NULL,
  `spesifikasi` varchar(255) NOT NULL,
  `nilai_mesin` varchar(255) NOT NULL,
  `umur_teknis_mesin` varchar(255) NOT NULL,
  `foto_mesin` varchar(255) NOT NULL,
  `jumlah_mesin` varchar(255) NOT NULL,
  `asal_negara` varchar(255) NOT NULL,
  `pelabuhan_bongkar` varchar(255) NOT NULL,
  `pelabuhan_muat` varchar(255) NOT NULL,
  `sumber_pembiayaan` varchar(255) NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `jumlah_produk` varchar(255) NOT NULL,
  `nilai_produk` varchar(255) NOT NULL,
  `penyerapan_tenaga_kerja` varchar(255) NOT NULL,
  `formulir_pemohon_id` int NOT NULL,
  `dokumen_spesifikasi` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_produk`),
  KEY `formulir_pemohon_id` (`formulir_pemohon_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `formulir_produk`
--

LOCK TABLES `formulir_produk` WRITE;
/*!40000 ALTER TABLE `formulir_produk` DISABLE KEYS */;
INSERT INTO `formulir_produk` VALUES (4,'Zsasa','sasa','7308.90.99','asa','sasa','sasa','sasa','0238c437501aaf1c2105c9351b1797e2.pdf','sasa','Afganistan','Adaut - Maluku Tenggara Barat','sasa','Tunai','sasa','sasa','sasa','sasa',1,'02f1f385d132cd806ea1d437baeb2984.pdf'),(5,'Zsasa','sasa','7308.90.99','asa','sasa','sasa','sasa','6e028a16b720617d91a4345c06e7b48f.pdf','sasa','Afganistan','Adaut - Maluku Tenggara Barat','sasa','Tunai','sasa','sasa','sasa','sasa',1,'ef06311026e7dca16692284c0211b778.pdf'),(11,'asa','sasa','8481.10.19','sasa','sasa','sas','asasa','3a8a3760ee96e591f838c1469312b0bd.pdf','sasa','Afrika Selatan','Atapupu - Belu','sas','Tunai','sasa','sasa','sasasasa','sasasa',2,'12a2f126a6ff491fb88a16678d14f3f0.pdf'),(12,'sasa','sasa','8481.10.19','sasa','sasa','sasa','sasa','4e27603acb264f6d4b52c4ccaf92cdfc.pdf','sasa','Afrika Selatan','Atapupu - Belu','sasa','Kredit bank','sasa','sasa','sasa','sasa',2,'c4a3eb134419c4742db0403addda2310.pdf'),(13,'Enduro #S','Sumantray','7308.90.99','Melakukan filter terhdapat besi yang terkandung didalam tahan','35 silinder bawah dan atas','90000000000','30 Tahun','7c065124192c81b13994a6fb2f10e6f5.png','9','Andorra','Ambalau - Buru Selatan','Siberia','Kredit bank','Antara Mas Abadi','9','900000000','40',3,'69af7ec615e0c8f2da03eab78b942974.pdf'),(14,'Bubut','Yamaha','7308.90.99','Membubut Logam Berat','Silinder 3.6','9000000','3 Tahun','c3380935833548e97e876629288911fa.png','5','Afrika Selatan','Atapupu - Belu','Sumeria','Kredit bank','Super Bubut Andalan','4','9000000000','30',4,'8c00af70fdd365209260081aacd21dac.pdf');
/*!40000 ALTER TABLE `formulir_produk` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lembaga`
--

DROP TABLE IF EXISTS `lembaga`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `lembaga` (
  `id_lembaga` varchar(255) NOT NULL,
  `nama_lembaga` varchar(255) NOT NULL,
  `alamat_lembaga` varchar(255) NOT NULL,
  `nilai_investasi` bigint DEFAULT NULL,
  `npwp` varchar(100) DEFAULT NULL,
  `jumlah_pekerja` int DEFAULT NULL,
  PRIMARY KEY (`id_lembaga`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lembaga`
--

LOCK TABLES `lembaga` WRITE;
/*!40000 ALTER TABLE `lembaga` DISABLE KEYS */;
INSERT INTO `lembaga` VALUES ('agung_1','PT Agung Jaya','Jl. Jirolupat No. 34 Klepu, Nagamas, Trenggalek',10000000000,'09.254.295.4-308.000',204),('averroes_1','PT Averroes Makmur','Jl. Lurus No.1 Mentok, Jakan, Banyurip',54000000000,'09.254.234.4-123.000',300),('berdikari_1','CV Berdikari Kelathi','Jl. Langgarnom No.1 Wedi, Pelasa',9006500000,'09.254.288.4-124.000',205),('bintang_1','CV Bintang Surya Gemilang ','Jl. Trubus No. 22 Gonilan, Kartasasminta',7650000000,'09.254.227.4-305.000',210),('budi_1','PT Budi Waskita Unggul','Jl. Napak Tilas No. 9 Prambanan, Harjosuko',12387600000,'09.254.293.4-388.000',345),('diriet_1','Direktur IET','Kementerian Perindustrian',0,'0',0),('dirimatap_1','Direktur IMATAP','Kementerian Perindustrian',0,'0',0),('dirjen_1','Direktur Jenderal','Kementerian Perindustrian',0,'0',0),('dirlogam_1','Direktur Logam','Kementerian Perindustrian',0,'0',0),('dirmesin_1','Direktur Mesin','Kementerian Perindustrian',0,'0',0),('gangsal_1','PT Gangsal Setunggal','Jl. Sumberejo No. 3 Kebonarum, Tegalan',3450000000,'09.254.285.4-368.000',190),('iet_1','Verifikator IET','Kementerian Perindustrian',0,'0',0),('imatap_1','Verifikator IMATAP','Kementerian Perindustrian',0,'0',0),('jetis_1','PT Jetis Club Machine','Jl. Kenaiban No. 99 Tulung, Gunungetan',8760000000,'09.254.299.4-332.000',204),('logam_1','Verifikator Logam','Kementerian Perindustrian',0,'0',0),('mesin_1','Verifikator Mesin','Kementerian Perindustrian',0,'0',0),('pusat_1','Verifikator Pusat','Kementerian Perindustrian',0,'0',0),('raydar_1','PT Raydar Motors','Jl. Gedangsari No.23 Bayat, Trenggono',5000000000,'09.254.333.4-323.000',400),('setiawan_1','CV Setiawan Jaya','Jl. Ammarsari No.303 Juwiring, Gununglor',987000000,'09.254.464.4-223.000',109),('umbulharjo_1','PT Umbulharjo Sakti','Jl. Langgarkidoel No. 19 Gantiwarna, Beku',4560000000,'09.254.234.4-322.000',105);
/*!40000 ALTER TABLE `lembaga` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tr_move_state`
--

DROP TABLE IF EXISTS `tr_move_state`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tr_move_state` (
  `id_state` int NOT NULL AUTO_INCREMENT,
  `formulir_pemohon_id` int NOT NULL,
  `note` text NOT NULL,
  `date_move` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `actor` int DEFAULT NULL,
  `disposisi` int DEFAULT NULL,
  PRIMARY KEY (`id_state`),
  KEY `formulir_pemohon_id` (`formulir_pemohon_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tr_move_state`
--

LOCK TABLES `tr_move_state` WRITE;
/*!40000 ALTER TABLE `tr_move_state` DISABLE KEYS */;
INSERT INTO `tr_move_state` VALUES (1,3,'<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit delectus ipsa reprehenderit provident non quibusdam molestiae veritatis qui iste quos. Exercitationem libero illum eius ducimus autem, doloremque laudantium iusto qui.<br></p>','2022-10-09 15:36:08',20,16),(2,3,'<p><span style=\"color: rgb(136, 138, 141); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 15.2px;\">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit delectus ipsa reprehenderit provident non quibusdam molestiae veritatis qui iste quos. Exercitationem libero illum eius ducimus autem, doloremque laudantium iusto qui.</span><br></p>','2022-10-09 15:37:09',18,12),(3,3,'<p><span style=\"color: rgb(136, 138, 141); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 15.2px;\">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit delectus ipsa reprehenderit provident non quibusdam molestiae veritatis qui iste quos. Exercitationem libero illum eius ducimus autem, doloremque laudantium iusto qui.</span><br></p>','2022-10-09 15:37:55',13,25),(4,3,'<p><span style=\"color: rgb(136, 138, 141); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 15.2px;\">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit delectus ipsa reprehenderit provident non quibusdam molestiae veritatis qui iste quos. Exercitationem libero illum eius ducimus autem, doloremque laudantium iusto qui.</span><br></p>','2022-10-09 15:41:47',23,NULL),(5,3,'<p>ssasa</p>','2022-10-09 15:42:23',13,0),(6,3,'<p>asasa</p>','2022-10-09 15:42:39',18,0),(7,3,'<p>Sudah ok</p>','2022-10-09 15:53:23',20,0),(8,4,'<p>Mohon untuk diproses segera!</p>','2022-10-09 19:27:13',20,16),(9,4,'<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit delectus ipsa reprehenderit provident non quibusdam molestiae veritatis qui iste quos. Exercitationem libero illum eius ducimus autem, doloremque laudantium iusto qui.<br></p>','2022-10-09 19:28:31',19,12),(10,4,'<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit delectus ipsa reprehenderit provident non quibusdam molestiae veritatis qui iste quos. Exercitationem libero illum eius ducimus autem, doloremque laudantium iusto qui.<br></p>','2022-10-09 19:29:02',14,25),(11,4,'<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit delectus ipsa reprehenderit provident non quibusdam molestiae veritatis qui iste quos. Exercitationem libero illum eius ducimus autem, doloremque laudantium iusto qui.<br></p>','2022-10-09 19:29:52',23,NULL),(12,4,'<p>saya okee</p>','2022-10-09 19:30:19',14,0),(13,4,'<p>okeee</p>','2022-10-09 19:30:41',19,0),(14,4,'','2022-10-09 19:31:20',20,0);
/*!40000 ALTER TABLE `tr_move_state` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id_user` int NOT NULL AUTO_INCREMENT,
  `id_lembaga` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level_user` varchar(20) NOT NULL,
  `nama_user` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_user`),
  KEY `id_lembaga` (`id_lembaga`),
  CONSTRAINT `users_ibfk_1` FOREIGN KEY (`id_lembaga`) REFERENCES `lembaga` (`id_lembaga`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'agung_1','agungjaya','$2y$10$suRlncZZKDTfH9bjwYhyXef1QISuvdftqF12e9v/agrkGmnSnWaia','pemohon','PT Agung Jaya'),(2,'averroes_1','averroesmakmur','$2y$10$suRlncZZKDTfH9bjwYhyXef1QISuvdftqF12e9v/agrkGmnSnWaia','pemohon','PT Averroes Makmur'),(3,'raydar_1','raydarmotors','$2y$10$suRlncZZKDTfH9bjwYhyXef1QISuvdftqF12e9v/agrkGmnSnWaia','pemohon','PT Raydar Motors\r\n'),(4,'setiawan_1','setiawanjaya','$2y$10$suRlncZZKDTfH9bjwYhyXef1QISuvdftqF12e9v/agrkGmnSnWaia','pemohon','CV Setiawan Jaya\r\n'),(5,'jetis_1','jetisclubmachine','$2y$10$suRlncZZKDTfH9bjwYhyXef1QISuvdftqF12e9v/agrkGmnSnWaia','pemohon','PT Jetis Club Machine'),(6,'bintang_1','bintangsuryagemilang','$2y$10$suRlncZZKDTfH9bjwYhyXef1QISuvdftqF12e9v/agrkGmnSnWaia','pemohon','CV Bintang Surya Gemilang '),(7,'gangsal_1','gangsalsetunggal','$2y$10$suRlncZZKDTfH9bjwYhyXef1QISuvdftqF12e9v/agrkGmnSnWaia','pemohon','PT Gangsal Setunggal\r\n'),(8,'budi_1','budiwaskitaunggul','$2y$10$suRlncZZKDTfH9bjwYhyXef1QISuvdftqF12e9v/agrkGmnSnWaia','pemohon','PT Budi Waskita Unggul\r\n'),(9,'umbulharjo_1','umbulharjosakti','$2y$10$suRlncZZKDTfH9bjwYhyXef1QISuvdftqF12e9v/agrkGmnSnWaia','pemohon','PT Umbulharjo Sakti\r\n'),(10,'berdikari_1','berdikarikelathi','$2y$10$suRlncZZKDTfH9bjwYhyXef1QISuvdftqF12e9v/agrkGmnSnWaia','pemohon','CV Berdikari Kelathi\r\n'),(11,'pusat_1','pusat','$2y$10$suRlncZZKDTfH9bjwYhyXef1QISuvdftqF12e9v/agrkGmnSnWaia','sub_koordinator','Verifikator Pusat\r\n'),(12,'imatap_1','imatap','$2y$10$suRlncZZKDTfH9bjwYhyXef1QISuvdftqF12e9v/agrkGmnSnWaia','koordinator','Koordinator IMPAMP\r\n'),(13,'logam_1','logam','$2y$10$suRlncZZKDTfH9bjwYhyXef1QISuvdftqF12e9v/agrkGmnSnWaia','koordinator','Koordinator IMPLAK\r\n'),(14,'mesin_1','mesin','$2y$10$suRlncZZKDTfH9bjwYhyXef1QISuvdftqF12e9v/agrkGmnSnWaia','koordinator','Koordinator IPPABPL\r\n'),(15,'iet_1','iet','$2y$10$suRlncZZKDTfH9bjwYhyXef1QISuvdftqF12e9v/agrkGmnSnWaia','sub_koordinator','Verifikator IET\r\n'),(16,'dirimatap_1','dirimatap','$2y$10$suRlncZZKDTfH9bjwYhyXef1QISuvdftqF12e9v/agrkGmnSnWaia','direktur','Direktur IMATAP\r\n'),(17,'dirlogam_1','dirlogam','$2y$10$suRlncZZKDTfH9bjwYhyXef1QISuvdftqF12e9v/agrkGmnSnWaia','direktur','Direktur Logam'),(18,'dirmesin_1','dirmesin','$2y$10$suRlncZZKDTfH9bjwYhyXef1QISuvdftqF12e9v/agrkGmnSnWaia','direktur','Direktur Mesin\r\n'),(19,'diriet_1','diriet','$2y$10$suRlncZZKDTfH9bjwYhyXef1QISuvdftqF12e9v/agrkGmnSnWaia','direktur','Direktur IET\r\n'),(20,'dirjen_1','dirjenilmate','$2y$10$suRlncZZKDTfH9bjwYhyXef1QISuvdftqF12e9v/agrkGmnSnWaia','dirjen','Direktur Jenderal\r\n'),(23,NULL,'mesinperkakas','$2y$10$suRlncZZKDTfH9bjwYhyXef1QISuvdftqF12e9v/agrkGmnSnWaia','sub_koordinator','Sub Koordinator Mesin Perkakas\r\n'),(24,NULL,'mesinpertanian','$2y$10$suRlncZZKDTfH9bjwYhyXef1QISuvdftqF12e9v/agrkGmnSnWaia','sub_koordinator','Sub Koordinator Mesin Pertanian\r\n'),(25,NULL,'alatberat','$2y$10$suRlncZZKDTfH9bjwYhyXef1QISuvdftqF12e9v/agrkGmnSnWaia','sub_koordinator','Sub Koordinator Alat Berat'),(26,NULL,'alatpabrik','$2y$10$suRlncZZKDTfH9bjwYhyXef1QISuvdftqF12e9v/agrkGmnSnWaia','sub_koordinator','Sub Koordinator Alat Pabrik'),(27,NULL,'alatlistrik','$2y$10$suRlncZZKDTfH9bjwYhyXef1QISuvdftqF12e9v/agrkGmnSnWaia','sub_koordinator','Sub Koordinator Alat Listrik'),(28,NULL,'alatkesehatan','$2y$10$suRlncZZKDTfH9bjwYhyXef1QISuvdftqF12e9v/agrkGmnSnWaia','sub_koordinator','Sub Koordinator Alat Kesehatan');
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

-- Dump completed on 2022-10-09 20:20:22
