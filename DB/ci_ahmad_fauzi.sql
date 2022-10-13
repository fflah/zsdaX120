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
  `catatan_pemohon` text,
  PRIMARY KEY (`id_formulir`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `formulir_pemohon`
--

LOCK TABLES `formulir_pemohon` WRITE;
/*!40000 ALTER TABLE `formulir_pemohon` DISABLE KEYS */;
INSERT INTO `formulir_pemohon` VALUES (3,'Penambahan kapasitas Produksi','1231/31/1/D/2022/JKTB','26a62e0389793ba6267072ea0d1d8139.pdf','PT Tunang Agung Jaya','8071821-21371214','f735cb6b502c5ccc8109f1a3236e02c4.pdf','192103121-21931314-21','27200870763132daad4f076db7bfff6b.pdf','25113-INDUSTRI KONSTRUKSI BERAT SIAP PASANG DARI BAJA UNTUK BANGUNAN',1,'diproses','koordinator','2022-10-09 11:04:36',NULL,'1',NULL),(4,'Penambahan kapasitas Produksi','1231/2131/31/2022','a14dae504ecdba0fdc1666b7ed9208a8.pdf','Budi Hartanto','131/44343/2121/11','a11337ff5c4bb2bfbcd8796118189d3a.pdf','213131-21424-2323','5818c6a7e1c3fd29c7a08b535ff03c20.pdf','25120-INDUSTRI TANGKI, TANDON AIR DAN WADAH DARI LOGAM',1,'selesai','done','2022-10-09 19:23:19','true','1',NULL),(5,'Penambahan kapasitas Produksi','1231/2131/31/2022','a14dae504ecdba0fdc1666b7ed9208a8.pdf','PT Sejahtera Abadi','131/44343/2121/11','a11337ff5c4bb2bfbcd8796118189d3a.pdf','213131-21424-2323','5818c6a7e1c3fd29c7a08b535ff03c20.pdf','25120-INDUSTRI TANGKI, TANDON AIR DAN WADAH DARI LOGAM',1,'selesai','done','2022-10-09 19:23:19','false','1','<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit delectus ipsa reprehenderit provident non quibusdam molestiae veritatis qui iste quos. Exercitationem libero illum eius ducimus autem, doloremque laudantium iusto qui.</p><div><div>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit delectus ipsa reprehenderit provident non quibusdam molestiae veritatis qui iste quos. Exercitationem libero illum eius ducimus autem, doloremque laudantium iusto qui.</div></div><div><div>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit delectus ipsa reprehenderit provident non quibusdam molestiae veritatis qui iste quos. Exercitationem libero illum eius ducimus autem, doloremque laudantium iusto qui.</div></div><div><br></div>'),(6,'Penambahan kapasitas Produksi','21212/212/121/231/AS','6a90eda2a05c257ff8816d5379c5cee5.pdf','Agus Suteno','2121-2131A-213','0e7933d65ec453416fda3c1f744d7abc.pdf','1212-42-35-31','93d41450919c231125a6039f76c86582.pdf','25113-INDUSTRI KONSTRUKSI BERAT SIAP PASANG DARI BAJA UNTUK BANGUNAN',2,'diproses','sub_koordinator','2022-10-10 16:44:45','true','1','<p>silakan update foto produk dengan foto dengan kualitas yang lebih HD</p>'),(7,'Penambahan kapasitas Produksi','21212121214343','350a7c4a5323f062172ef6a08a070536.pdf','PT Buhaya Andata','2121021212121-13','142d3ff05809c6a54a9455aeef3e3460.pdf','1212456576','5e1cc39ea961d83a9975628f8bfc718a.pdf','25113-INDUSTRI KONSTRUKSI BERAT SIAP PASANG DARI BAJA UNTUK BANGUNAN',1,'selesai','done','2022-10-11 21:35:28','false','1','<p>silakan dipebaiki</p>'),(8,'Keperluan penelitian dan mengembangan ilmu pengetahuan','7219810219','b14b50d32604d1b274bd1f09511d5a61.pdf','PT Berkah Mandiri','21343565787','68e60dcb31a95bc7d7073b8aabb05055.pdf','213454678766','ad7204882fe708aea2083f599c1e2544.pdf','28160-INDUSTRI ALAT PENGANGKAT DAN PEMINDAH',1,'selesai','done','2022-10-11 22:16:45','true','1',NULL),(9,'Modernisasi produk atau mesin','312345657686867','c2f635a0926b51b5418a6b95cc918189.pdf','PT Abadi Jaya Beton','213245346655','14ffe1b012d9774891701293b6bbdc0b.pdf','212456457562','0422380537508e765cf0ab4a79265336.pdf','28221-INDUSTRI MESIN DAN PERKAKAS MESIN UNTUK PENGERJAAN LOGAM',1,'selesai','done','2022-10-11 22:22:44','true','1',NULL);
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
  `hs_code` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
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
  `nama_produk_sebelum` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `jumlah_produk_sebelum` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `nilai_produk_sebelum` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `nama_produk_sesudah` varchar(255) DEFAULT NULL,
  `jumlah_produk_sesudah` varchar(255) DEFAULT NULL,
  `nilai_produk_sesudah` varchar(255) DEFAULT NULL,
  `penyerapan_tenaga_kerja` varchar(255) NOT NULL,
  `formulir_pemohon_id` int NOT NULL,
  `dokumen_spesifikasi` varchar(255) DEFAULT NULL,
  `dokumen_surat_asosiasi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `status` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `keterangan` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  PRIMARY KEY (`id_produk`),
  KEY `formulir_pemohon_id` (`formulir_pemohon_id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `formulir_produk`
--

LOCK TABLES `formulir_produk` WRITE;
/*!40000 ALTER TABLE `formulir_produk` DISABLE KEYS */;
INSERT INTO `formulir_produk` VALUES (13,'Enduro #S','Sumantray','7308.90.99','Melakukan filter terhdapat besi yang terkandung didalam tahan','35 silinder bawah dan atas','90000000000','30','7c065124192c81b13994a6fb2f10e6f5.png','9','Andorra','Ambalau - Buru Selatan','Siberia','Kredit bank','Antara Mas Abadi','9','90000000000','Klx Hua Dihulak','12111135657','12111135657','40',3,'69af7ec615e0c8f2da03eab78b942974.pdf',NULL,'Disetujui',NULL),(14,'Bubut','Yamaha','7308.90.99','Membubut Logam Berat','Silinder 3.6','9000000','3','c3380935833548e97e876629288911fa.png','5','Afrika Selatan','Atapupu - Belu','Sumeria','Kredit bank','Super Bubut Andalan','4','9000000000','Klx Hua Dihulak','12111135657','12111135657','30',4,'8c00af70fdd365209260081aacd21dac.pdf',NULL,'Disetujui',NULL),(16,'Bubut W','Sumantray Juha',NULL,'sasa','Silinder 3.6 5','1000000','21','010f773ec17acd2a37bd86f07770f9d9.pdf','21','Afrika Selatan','Atapupu - Belu','sasa','Tunai','sasa','21','1000000','Klx Hua Dihulak','12111135657','12111135657','12',3,'bff213f43c974e70f0d2809e56797dd7.pdf','9b14156721cf4d9edd67d25ee832038e.pdf','Disetujui',NULL),(17,'Bubut DW#','Hujalikoo','8481.10.19','sasa','Silinder 3.6 67','10000003','21','d55cf04657e19d13a41488e1f49cf318.pdf','21','Afrika Selatan','Tanjung Uban/Teluk Sasah - Kepulauan Riau','sasa','Kredit bank','sasa','32','10000003','Klx Hua Dihulak','21','12111135657','21',3,'99481a788e6218dd67e16d17ce50b342.pdf',NULL,'Disetujui',NULL),(18,'Eularye Engne 301','Euliayr','8481.10.19','Untuk Melakukan pengalian tanah liat dengan kedalaman lebih dari 1000m','Silinder oup power double','900000','90','9efcbc889dadea43d33a60d00827c884.pdf','21','Afrika Selatan','Adaut - Maluku Tenggara Barat','Sinar buya','Tunai','Engine 301','900','90009090','Klx Hua Dihulak','21','12111135657','80',5,'def2a334a3ecca17eb1c4a6925d1fa55.pdf',NULL,'Disetujui',NULL),(19,'Enduro Kit Aline','Juyat Engine Go','7308.90.99','Untuk Meranik Besi Pancang Tambang','Katub 2.ml','90000000','3','464c76cce9baaac40d91ec16867c3697.pdf','21313','Afrika Selatan','Atapupu - Belu','Simuy','Kredit bank','Hindaru','21','2100000','Klx Hua Dihulak','22','12111135657','2333',6,'b6cc89e67e339483fb62dddd46e10dfe.pdf',NULL,NULL,NULL),(20,'Bubut Kit Turbo','Super Hujalikoo','7308.90.99','3222','121','2121','212121','1b079f73510acf403de2bfa1b2a0c188.pdf','2121','Afrika Selatan','Air Buaya - Buru','212','Kredit bank','212','12121','2121','Klx Hua Dihulak','2121','12111135657','2121',3,'d4835e69412c4e5adbee3e04ad985112.pdf',NULL,'Disetujui',NULL),(21,'Enduro Anjuko Hulik','Jupytart','7308.90.99','Untuk mengurangi emisi mesin di pabrik','Silinder lipat pada setiap keping pin','900000000000','12','ec7f71c766a485e10521fcf1abf400f8.pdf','12','Afrika Selatan','Air Buaya - Buru','Semarang','Kredit bank','Klx Huaj','12','1222222222','Klx Hua Dihulak','32','12111135657','2121',7,'c08c13bbc7100d3c465cdfee20dad656.pdf',NULL,'Ditolak','tidak sesuai'),(22,'Enduro Jaya Baja','Honda','8481.10.22','Untuk mengandalikan polusi di area tambang','silinder 5','780000000','32','9bc80752e5bd3de3de76dca28966e291.pdf','32','Afganistan','Air Buaya - Buru','Solo','Kredit bank','Yohaya hulai','21','2000000000000','Hulajuua gulaie','32','2900000000','213',8,'6a5d2e163c7f129ddbccbfd814d58da3.pdf',NULL,'Disetujui','oke saya'),(23,'Jugah Jugok','Honda','8701.10.19','Menjaga suspendi mesin','Bot up lending upper','1324354657687','21','e9c5c53e11101a67d426d086b6c6863e.pdf','12','Albania','Ambalau - Buru Selatan','Seloang','Kredit bank','Jugan julan','21','23456789','Julahu Gulang','21','2123456789','2134',9,'b5fffb49cfdb1cb8a2c109bac53fb89d.pdf',NULL,'Disetujui','oke '),(25,'212','121','8481.10.19','sasasas','sasa','2121','212121','0e1b978e39e031beac6a30b3306451ae.pdf','2121','Albania','Atapupu - Belu','2121','Kredit bank','2121','2121','2121','2121','2121','2121','2121',3,'76fb76b9973b9284b84db93438c58bf9.pdf','02d5f319a808b955d6d110529609a91d.pdf',NULL,NULL),(26,'sasas','asa','121212121','2121','2121','2121','2121','ae36eaf05928939d23bbde5014e6c507.pdf','2121','Afrika Selatan','Air Buaya - Buru','2121','Kredit bank','2121','2121','21212','1212','1212','121','2121',3,'9eca5d0f31344d37bbc279e50f33334d.pdf',NULL,NULL,NULL);
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
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tr_move_state`
--

LOCK TABLES `tr_move_state` WRITE;
/*!40000 ALTER TABLE `tr_move_state` DISABLE KEYS */;
INSERT INTO `tr_move_state` VALUES (1,3,'<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit delectus ipsa reprehenderit provident non quibusdam molestiae veritatis qui iste quos. Exercitationem libero illum eius ducimus autem, doloremque laudantium iusto qui.<br></p>','2022-10-09 15:36:08',20,16),(2,3,'<p><span style=\"color: rgb(136, 138, 141); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 15.2px;\">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit delectus ipsa reprehenderit provident non quibusdam molestiae veritatis qui iste quos. Exercitationem libero illum eius ducimus autem, doloremque laudantium iusto qui.</span><br></p>','2022-10-09 15:37:09',18,12),(3,3,'<p><span style=\"color: rgb(136, 138, 141); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 15.2px;\">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit delectus ipsa reprehenderit provident non quibusdam molestiae veritatis qui iste quos. Exercitationem libero illum eius ducimus autem, doloremque laudantium iusto qui.</span><br></p>','2022-10-09 15:37:55',13,25),(4,3,'<p><span style=\"color: rgb(136, 138, 141); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 15.2px;\">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit delectus ipsa reprehenderit provident non quibusdam molestiae veritatis qui iste quos. Exercitationem libero illum eius ducimus autem, doloremque laudantium iusto qui.</span><br></p>','2022-10-09 15:41:47',23,NULL),(5,3,'<p>ssasa</p>','2022-10-09 15:42:23',13,0),(6,3,'<p>asasa</p>','2022-10-09 15:42:39',18,0),(7,3,'<p>Sudah ok</p>','2022-10-09 15:53:23',20,0),(8,4,'<p>Mohon untuk diproses segera!</p>','2022-10-09 19:27:13',20,16),(9,4,'<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit delectus ipsa reprehenderit provident non quibusdam molestiae veritatis qui iste quos. Exercitationem libero illum eius ducimus autem, doloremque laudantium iusto qui.<br></p>','2022-10-09 19:28:31',19,12),(10,4,'<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit delectus ipsa reprehenderit provident non quibusdam molestiae veritatis qui iste quos. Exercitationem libero illum eius ducimus autem, doloremque laudantium iusto qui.<br></p>','2022-10-09 19:29:02',14,25),(11,4,'<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit delectus ipsa reprehenderit provident non quibusdam molestiae veritatis qui iste quos. Exercitationem libero illum eius ducimus autem, doloremque laudantium iusto qui.<br></p>','2022-10-09 19:29:52',23,NULL),(12,4,'<p>saya okee</p>','2022-10-09 19:30:19',14,0),(13,4,'<p>okeee</p>','2022-10-09 19:30:41',19,0),(14,4,'','2022-10-09 19:31:20',20,0),(15,5,'<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit delectus ipsa reprehenderit provident non quibusdam molestiae veritatis qui iste quos. Exercitationem libero illum eius ducimus autem, doloremque laudantium iusto qui.</p><div><br></div>','2022-10-10 10:46:53',20,16),(16,5,'<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit delectus ipsa reprehenderit provident non quibusdam molestiae veritatis qui iste quos. Exercitationem libero illum eius ducimus autem, doloremque laudantium iusto qui.</p><div><br></div>','2022-10-10 10:47:05',19,12),(17,5,'<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit delectus ipsa reprehenderit provident non quibusdam molestiae veritatis qui iste quos. Exercitationem libero illum eius ducimus autem, doloremque laudantium iusto qui.</p><div><br></div>','2022-10-10 10:47:15',12,25),(18,5,'<p>sasa</p>','2022-10-10 11:33:58',25,NULL),(19,5,'<p>sasasa</p>','2022-10-10 11:35:08',25,NULL),(20,5,'<p>sasas</p>','2022-10-10 11:35:38',25,NULL),(21,5,'<p>sasa</p>','2022-10-10 11:37:29',25,NULL),(22,5,'','2022-10-10 11:55:52',25,NULL),(23,5,'','2022-10-10 11:56:30',25,NULL),(24,5,'','2022-10-10 11:56:38',25,NULL),(25,5,'','2022-10-10 11:56:41',25,NULL),(26,5,'','2022-10-10 11:56:48',25,NULL),(27,5,'','2022-10-10 11:56:52',25,NULL),(28,5,'<p>sasasa</p>','2022-10-10 12:03:46',25,NULL),(29,5,'<p>sasa</p>','2022-10-10 12:04:25',25,NULL),(30,5,'<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit delectus ipsa reprehenderit provident non quibusdam molestiae veritatis qui iste quos. Exercitationem libero illum eius ducimus autem, doloremque laudantium iusto qui.</p><div><br></div>','2022-10-10 12:05:06',25,NULL),(31,5,'<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit delectus ipsa reprehenderit provident non quibusdam molestiae veritatis qui iste quos. Exercitationem libero illum eius ducimus autem, doloremque laudantium iusto qui.</p><div><br></div>','2022-10-10 12:05:16',25,NULL),(32,5,'<p>oke</p>','2022-10-10 12:18:24',12,0),(33,5,'<p>oke</p>','2022-10-10 12:18:35',19,0),(34,5,'<p>saya tolaqq</p>','2022-10-10 12:28:58',20,0),(35,6,'<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit delectus ipsa reprehenderit provident non quibusdam molestiae veritatis qui iste quos. Exercitationem libero illum eius ducimus autem, doloremque laudantium iusto qui.</p><div><br></div>','2022-10-10 16:47:27',20,17),(36,6,'<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit delectus ipsa reprehenderit provident non quibusdam molestiae veritatis qui iste quos. Exercitationem libero illum eius ducimus autem, doloremque laudantium iusto qui.</p><div><br></div>','2022-10-10 16:47:40',16,13),(37,6,'<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit delectus ipsa reprehenderit provident non quibusdam molestiae veritatis qui iste quos. Exercitationem libero illum eius ducimus autem, doloremque laudantium iusto qui.</p><div><br style=\"color: rgb(136, 138, 141); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 15.2px;\"></div>','2022-10-10 16:48:19',13,15),(38,6,'<p>oke saya acc, dengan syarat</p>','2022-10-10 16:49:34',23,NULL),(39,6,'<p>okee</p>','2022-10-10 16:49:55',13,0),(40,6,'<p>oke</p>','2022-10-10 16:50:11',16,0),(41,6,'<p>saya setujui</p>','2022-10-10 16:50:26',20,0),(42,7,'<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id amet nisi inventore, vero ipsum eum nobis quae ea quod rem blanditiis eos odit distinctio, magnam nostrum delectus quia dolorem quas.<br></p>','2022-10-11 21:43:11',20,16),(43,7,'<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id amet nisi inventore, vero ipsum eum nobis quae ea quod rem blanditiis eos odit distinctio, magnam nostrum delectus quia dolorem quas.<br></p>','2022-10-11 21:44:03',19,12),(44,7,'<p><span style=\"color: rgb(136, 138, 141); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 15.2px;\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Id amet nisi inventore, vero ipsum eum nobis quae ea quod rem blanditiis eos odit distinctio, magnam nostrum delectus quia dolorem quas.</span><br></p>','2022-10-11 21:44:56',14,23),(45,7,'<p>tidak sesuai</p>','2022-10-11 21:46:20',27,NULL),(46,7,'<p>saya tolak juga</p>','2022-10-11 21:46:35',14,0),(47,7,'<p>saya tolak juga<br></p>','2022-10-11 21:46:40',19,0),(48,7,'<p>saya tolak juga<br></p>','2022-10-11 21:47:53',20,0),(49,8,'<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id amet nisi inventore, vero ipsum eum nobis quae ea quod rem blanditiis eos odit distinctio, magnam nostrum delectus quia dolorem quas.<br></p>','2022-10-11 22:18:45',20,18),(50,8,'<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id amet nisi inventore, vero ipsum eum nobis quae ea quod rem blanditiis eos odit distinctio, magnam nostrum delectus quia dolorem quas.<br></p>','2022-10-11 22:18:59',19,14),(51,8,'<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id amet nisi inventore, vero ipsum eum nobis quae ea quod rem blanditiis eos odit distinctio, magnam nostrum delectus quia dolorem quas.<br></p>','2022-10-11 22:19:08',14,26),(52,8,'<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id amet nisi inventore, vero ipsum eum nobis quae ea quod rem blanditiis eos odit distinctio, magnam nostrum delectus quia dolorem quas.<br></p>','2022-10-11 22:19:26',27,NULL),(53,8,'<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id amet nisi inventore, vero ipsum eum nobis quae ea quod rem blanditiis eos odit distinctio, magnam nostrum delectus quia dolorem quas.<br></p>','2022-10-11 22:19:40',14,0),(54,8,'<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id amet nisi inventore, vero ipsum eum nobis quae ea quod rem blanditiis eos odit distinctio, magnam nostrum delectus quia dolorem quas.<br></p>','2022-10-11 22:20:07',19,0),(55,8,'<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id amet nisi inventore, vero ipsum eum nobis quae ea quod rem blanditiis eos odit distinctio, magnam nostrum delectus quia dolorem quas.<br></p>','2022-10-11 22:20:15',20,0),(56,8,'<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id amet nisi inventore, vero ipsum eum nobis quae ea quod rem blanditiis eos odit distinctio, magnam nostrum delectus quia dolorem quas.<br></p>','2022-10-11 22:21:39',20,0),(57,9,'<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id amet nisi inventore, vero ipsum eum nobis quae ea quod rem blanditiis eos odit distinctio, magnam nostrum delectus quia dolorem quas.<br></p>','2022-10-11 22:24:09',20,18),(58,9,'<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id amet nisi inventore, vero ipsum eum nobis quae ea quod rem blanditiis eos odit distinctio, magnam nostrum delectus quia dolorem quas.<br></p>','2022-10-11 22:24:22',19,13),(59,9,'<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id amet nisi inventore, vero ipsum eum nobis quae ea quod rem blanditiis eos odit distinctio, magnam nostrum delectus quia dolorem quas.<br></p>','2022-10-11 22:24:33',14,23),(60,9,'<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id amet nisi inventore, vero ipsum eum nobis quae ea quod rem blanditiis eos odit distinctio, magnam nostrum delectus quia dolorem quas.<br></p>','2022-10-11 22:24:50',27,NULL),(61,9,'<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id amet nisi inventore, vero ipsum eum nobis quae ea quod rem blanditiis eos odit distinctio, magnam nostrum delectus quia dolorem quas.<br></p>','2022-10-11 22:24:56',14,0),(62,9,'<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id amet nisi inventore, vero ipsum eum nobis quae ea quod rem blanditiis eos odit distinctio, magnam nostrum delectus quia dolorem quas.<br></p>','2022-10-11 22:25:04',19,0),(63,9,'<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id amet nisi inventore, vero ipsum eum nobis quae ea quod rem blanditiis eos odit distinctio, magnam nostrum delectus quia dolorem quas.<br></p>','2022-10-11 22:25:14',20,0);
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

-- Dump completed on 2022-10-13 20:25:25
