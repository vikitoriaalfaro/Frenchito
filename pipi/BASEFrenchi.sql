-- MySQL dump 10.13  Distrib 8.0.39, for Linux (x86_64)
--
-- Host: 127.0.0.1    Database: Frenchi
-- ------------------------------------------------------
-- Server version	8.0.39-0ubuntu0.22.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `Productos`
--

DROP TABLE IF EXISTS `Productos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Productos` (
  `codigo` int NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `tipo_ds` varchar(45) DEFAULT NULL,
  `precio` float DEFAULT NULL,
  `imagen` varchar(100) DEFAULT NULL,
  `calificacion` float DEFAULT NULL,
  `tipo_comida` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Productos`
--

LOCK TABLES `Productos` WRITE;
/*!40000 ALTER TABLE `Productos` DISABLE KEYS */;
INSERT INTO `Productos` VALUES (1,'Café au Lait',NULL,NULL,1000,'Imagenes/cafeaulait.jpeg',4,'Bebida'),(2,'Espresso',NULL,'Caliente',1000,'Imagenes/espresso.jpeg',5,'Bebida'),(3,'Capuccino',NULL,'Caliente',1500,'Imagenes/capuccino.jpeg',4,'Bebida'),(4,'Cremé Brûlée',NULL,'Frío',1500,'Imagenes/creme.jpeg',5,'Bebida'),(5,'Té de Hierbas',NULL,'Caliente',1000,'Imagenes/te.jpeg',3,'Bebida'),(6,'Chocolate Caliente',NULL,'Caliente',1500,'Imagenes/chocolate.jpg',5,'Bebida'),(7,'Café Negro',NULL,'Caliente',1000,'Imagenes/cafeaulait.jpeg',4,'Bebida'),(8,'Café Vienés',NULL,'Frío',1200,'Imagenes/vienes.jpeg',4,'Bebida'),(9,'Latte Macchiato',NULL,'Caliente',1200,'Imagenes/macch.jpeg',5,'Bebida'),(10,'Frappé de Café',NULL,'Frío',2000,'Imagenes/frappe.jpg',5,'Bebida'),(11,'Leche de Almendras','Agregala a cualquiera de tus bebidas!',NULL,500,'Imagenes/leche.jpeg',NULL,'Bebida'),(13,'Croissant','Pastelito hojaldrado y ligero, perfecto para acompañar el café.','Dulce',700,'Imagenes/croissant.png',4,'Comida'),(14,'Pain au Chocolat','Croissant relleno de chocolate.','Dulce',1000,'Imagenes/pain.webp',5,'Patisserie'),(15,'Macarons(3 unidades)','Delicados dulces de merengue con relleno de crema, en variados sabores.','Dulce',1000,'Imagenes/maca.jpeg',4,'Comida'),(16,'Crepes Dulces',' Finas crepes rellenas de frutas, chocolate o crema, un dulce versátil.','Dulce',2500,'Imagenes/crepes.jpeg',4,'Comida'),(17,'Tarte Tatin','Tarta de manzana caramelizada, servida al revés, deliciosa y reconfortante.','Dulce',1500,'Imagenes/tatin.jpeg',4,'Comida'),(18,'Madeleins(3 unidades)','Pequeños bizcochos esponjosos con forma de ostras, ideales para el té.','Dulce',1500,'Imagenes/made.jpeg',4,'Comida'),(19,'Clafoutis de cereza','Pastel rústico con cerezas, suave y lleno de sabor.','Dulce',1500,'Imagenes/claf.jpeg',4,'Comida'),(20,'Chausson aux Pommes',' Pastelito de manzana hojaldrado, dulce y jugoso.','Dulce',2000,'Imagenes/chau.jpeg',4,'Comida'),(21,'Éclair de chocolate','Pastelito alargado relleno de crema y cubierto de chocolate.','Dulce',1800,'Imagenes/eclair.jpeg',4,'Comida'),(22,'Lemon Pie','Tarta de base crujiente con un relleno ácido y cremoso de limón.','Dulce',2000,'Imagenes/lemon.jpg',5,'Comida'),(23,'Profiteroles (3 unidades)','Bolitas de masa choux rellenas de crema y cubiertas de chocolate.','Dulce',1500,'Imagenes/pro.jpeg',4,'Comida'),(24,'Flan Parisien','Flan suave y cremoso, un clásico de la repostería francesa.','Dulce',2000,'Imagenes/flan.jpeg',4,'Comida'),(25,'Soufflé de chocolate','Ligero y aireado, este soufflé es un sueño de chocolate.','Dulce',2200,'Imagenes/souffle.jpeg',4,'Comida'),(26,'Galette des Rois','Pastel de hojaldre con almendra, tradicional en Epifanía.','Dulce',2000,'Imagenes/galettedesrois.jpeg',4,'Comida'),(27,'Crème Caramel',' Postre de caramelo suave y cremoso, irresistible.','Dulce',2000,'Imagenes/caramel.jpeg',4,'Comida'),(28,'Tarta de Frutas','Colorida tarta cubierta de frutas frescas.','Dulce',1800,'Imagenes/tarta.jpeg',4,'Comida'),(29,'Quiche Lorraine','Tarta salada con una base de masa quebrada, rellena de huevos, crema, bacon y queso.','Salado',3200,'Imagenes/quiche.jpeg',5,'Comida'),(30,'Croque Monsieur','Sándwich caliente de jamón y queso gratinado, servido con una ligera ensalada.','Salado',3800,'Imagenes/croque.jpeg',5,'Comida'),(32,'Tartiflette','Plato reconfortante de patatas, cebolla, bacon y queso reblochon, horneado hasta dorar.','Salado',3500,'Imagenes/tartiflette.jpeg',5,'Comida'),(33,'Soupe à l\'Oignon','Sopa de cebolla gratinada con queso, servida caliente y cubierta de pan tostado.','Salado',3500,'Imagenes/soupe.jpeg',5,'Comida'),(35,'Galllete de Sarrasin','Crepe de trigo sarraceno rellena de ingredientes salados como jamón, queso y huevo.','Salado',3200,'Imagenes/galettesarrasin.jpeg',5,'Comida'),(37,'Pâté en Croûte','Terrina de carne envuelta en masa, servida con mostaza y encurtidos.','Salado',3500,'Imagenes/pate.jpeg',5,'Comida'),(38,'Chèvre Chaud','Ensalada de queso de cabra caliente sobre tostadas, acompañada de hojas verdes y nueces.','Salado',3200,'Imagenes/chevre.jpeg',5,'Comida'),(40,'Croque Monsieur + Capuccino + Jugo','Sandwich de jamón y queso con una ensalada, jugo (exprimido de naranja, limonada) y un Espresso',NULL,4200,'Imagenes/combo1.jpg',4,'Combo'),(41,'Creppes Dulces + Frappé de Café','Crepes rellenas de frutas, chocolate y crema, licuado de café y leche con chocolate y crema',NULL,4000,'Imagenes/combo2.jpeg',4,'Combo'),(42,'Croissant + Chocolate Caliente','Pastelito hojaldrado y ligero, acompañado por un chocolate caliente',NULL,2000,'Imagenes/combo3.jpg',4,'Combo'),(43,'Avocado Toast + Latte + Jugo + 3 Profiteroles','Tostadas con palta y queso, un latte, un jugo (exprimido de naranja, limonada) y tres profiteroles',NULL,6500,'Imagenes/combo4.jpg',4,'Combo'),(44,'Ensalada Nicoise + Jugo + Soufflé','Ensalada de atún, aceitunas..., jugo (exprimido de naranja, limonada) y un souffle de chocolate.',NULL,6500,'Imagenes/combo5.jpg',4,'Combo');
/*!40000 ALTER TABLE `Productos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Usuario`
--

DROP TABLE IF EXISTS `Usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Usuario` (
  `mailusuario` varchar(45) NOT NULL,
  `password` varchar(45) DEFAULT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `direccion` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`mailusuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Usuario`
--

LOCK TABLES `Usuario` WRITE;
/*!40000 ALTER TABLE `Usuario` DISABLE KEYS */;
INSERT INTO `Usuario` VALUES ('abyyyychusita@gmail.com','555','abyamaanico','jamiccca'),('albanofazzito@gmail.com','messi','advincula','El Cielo'),('albanofazzito2@gmail.com','messi','advincula','El Cielo'),('delfilinaresita@gmail.com','555','nubesita','Jose Leon Cabezon 9999'),('holii@gmail.com','1254','vikisita','Amamama 2343'),('holiiii@gmail.com','1254','vikisita','Amamama 2343'),('lampara23naranj@gmail.com','clave','tito.juanc','Crisólogo Larralde 1935 14A'),('seleneferolet@gmail.com','1235','Selene','av mosconi 2222'),('seleneferoleto@gmail.com','1234','',''),('victoriaalfarofernandez@gmail.com','dyuyuyuyuy','vikusita','QUEEEEEEEEEEEEEEEEEEEEEEESO');
/*!40000 ALTER TABLE `Usuario` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-10-30 11:50:14
