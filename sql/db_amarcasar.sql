-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 07-Maio-2019 às 06:57
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_amarcasar`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_addresses_save` (`pidaddress` INT(11), `pidperson` INT(11), `pdesaddress` VARCHAR(128), `pdesnumber` VARCHAR(16), `pdescomplement` VARCHAR(32), `pdescity` VARCHAR(32), `pdesstate` VARCHAR(32), `pdescountry` VARCHAR(32), `pdeszipcode` CHAR(8), `pdesdistrict` VARCHAR(32))  BEGIN

	IF pidaddress > 0 THEN
		
		UPDATE tb_addresses
        SET
			idperson = pidperson,
            desaddress = pdesaddress,
            desnumber = pdesnumber,
            descomplement = pdescomplement,
            descity = pdescity,
            desstate = pdesstate,
            descountry = pdescountry,
            deszipcode = pdeszipcode, 
            desdistrict = pdesdistrict
		WHERE idaddress = pidaddress;
        
    ELSE
		
		INSERT INTO tb_addresses (idperson, desaddress, desnumber, descomplement, descity, desstate, descountry, deszipcode, desdistrict)
        VALUES(pidperson, pdesaddress, pdesnumber, pdescomplement, pdescity, pdesstate, pdescountry, pdeszipcode, pdesdistrict);
        
        SET pidaddress = LAST_INSERT_ID();
        
    END IF;
    
    SELECT * FROM tb_addresses WHERE idaddress = pidaddress;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_bestfriends_update` (`pidbestfriend` INT(11), `piduser` INT(11), `pinstatus` TINYINT, `pinposition` TINYINT, `pdesbestfriend` VARCHAR(128), `pdesdescription` TEXT, `pdesphoto` VARCHAR(256), `pdesextension` VARCHAR(4))  BEGIN
	
	IF pidbestfriend > 0 THEN
		
		UPDATE tb_bestfriends
        SET           
			instatus = pinstatus,
			inposition = pinposition,
			desbestfriend = pdesbestfriend,
			desdescription = pdesdescription,
			desphoto = pdesphoto,
            desextension = pdesextension
		WHERE idbestfriend = pidbestfriend;
        
    ELSE
    
		INSERT INTO tb_bestfriends (iduser,
                instatus,
                inposition,
                desbestfriend,
                desdescription,
                desphoto,
                desextension)
        VALUES(piduser,
                pinstatus,
                pinposition,
                pdesbestfriend,
                pdesdescription,
                pdesphoto,
                pdesextension);
		
		SET pidbestfriend = LAST_INSERT_ID();
        
    END IF;
    
    SELECT * 
    FROM tb_bestfriends a
    INNER JOIN tb_users d 
    ON d.iduser = a.iduser
    WHERE idbestfriend = pidbestfriend;
    
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_carts_save` (`pidcart` INT, `pdessessionid` VARCHAR(64), `piduser` INT, `pinstatus` TINYINT, `pdeszipcode` CHAR(8))  BEGIN

	IF pidcart > 0 THEN
		
		UPDATE tb_carts
        SET
			dessessionid = pdessessionid,
            iduser = piduser,
            instatus = pinstatus,
            deszipcode = pdeszipcode
		WHERE idcart = pidcart;
        
    ELSE
		
		INSERT INTO tb_carts (dessessionid, iduser, instatus, deszipcode)
        VALUES(pdessessionid, piduser, pinstatus, pdeszipcode);
        
        SET pidcart = LAST_INSERT_ID();
        
    END IF;
    
    SELECT * FROM tb_carts WHERE idcart = pidcart;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_categories_save` (`pidcategory` INT, `pdescategory` VARCHAR(64))  BEGIN
	
	IF pidcategory > 0 THEN
		
		UPDATE tb_categories
        SET descategory = pdescategory
        WHERE idcategory = pidcategory;
        
    ELSE
		
		INSERT INTO tb_categories (descategory) VALUES(pdescategory);
        
        SET pidcategory = LAST_INSERT_ID();
        
    END IF;
    
    SELECT * FROM tb_categories WHERE idcategory = pidcategory;
    
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_customstyle_update` (`pidcustomstyle` INT(11), `piduser` INT(11), `pidtemplate` INT(11), `pdesbanner` VARCHAR(256), `pdescolorheader` VARCHAR(10), `pdescolorheadertext` VARCHAR(10), `pdescolorheaderhover` VARCHAR(10), `pdescolorfooter` VARCHAR(10), `pdescolorfootertext` VARCHAR(10), `pdescolorfooterhover` VARCHAR(10), `pdescolorh1` VARCHAR(10), `pdesfontfamilyh1` VARCHAR(64), `pdesfontsizeh1` VARCHAR(10), `pdescolorh2` VARCHAR(10), `pdesfontfamilyh2` VARCHAR(64), `pdesfontsizeh2` VARCHAR(10), `pdescolorh3` VARCHAR(10), `pdesfontfamilyh3` VARCHAR(64), `pdesfontsizeh3` VARCHAR(10), `pdescolortext` VARCHAR(10), `pdesfontfamilytext` VARCHAR(64), `pdesfontsizetext` VARCHAR(10))  BEGIN
    
    IF pidcustomstyle > 0 THEN
        
        UPDATE tb_customstyle
        SET
            idtemplate = pidtemplate,
            desbanner = pdesbanner,
            descolorheader = pdescolorheader,
            descolorheadertext = pdescolorheadertext,
            descolorheaderhover = pdescolorheaderhover,
            descolorfooter = pdescolorfooter,
            descolorfootertext = pdescolorfootertext,
            descolorfooterhover = pdescolorfooterhover,
            descolorh1 = pdescolorh1,
            desfontfamilyh1 = pdesfontfamilyh1,
            desfontsizeh1 = pdesfontsizeh1,
            descolorh2 = pdescolorh2,
            desfontfamilyh2 = pdesfontfamilyh2,
            desfontsizeh2 = pdesfontsizeh2,
            descolorh3 = pdescolorh3,
            desfontfamilyh3 = pdesfontfamilyh3,
            desfontsizeh3 = pdesfontsizeh3,
            descolortext = pdescolortext,
            desfontfamilytext = pdesfontfamilytext,
            desfontsizetext = pdesfontsizetext
        WHERE iduser = piduser;
        
    ELSE
    
        INSERT INTO tb_stories (iduser,
                idtemplate,
                desbanner,
                descolorheader,
                descolorheadertext,
                descolorheaderhover,
                descolorfooter,
                descolorfootertext,
                descolorfooterhover,
                descolorh1,
                desfontfamilyh1,
                desfontsizeh1,
                descolorh2,
                desfontfamilyh2,
                desfontsizeh2,
                descolorh3,
                desfontfamilyh3,
                desfontsizeh3,
                descolortext,
                desfontfamilytext,
                desfontsizetext)
        VALUES(piduser,
                pidtemplate,
                pdesbanner,
                pdescolorheader,
                pdescolorheadertext,
                pdescolorheaderhover,
                pdescolorfooter,
                pdescolorfootertext,
                pdescolorfooterhover,
                pdescolorh1,
                pdesfontfamilyh1,
                pdesfontsizeh1,
                pdescolorh2,
                pdesfontfamilyh2,
                pdesfontsizeh2,
                pdescolorh3,
                pdesfontfamilyh3,
                pdesfontsizeh3,
                pdescolortext,
                pdesfontfamilytext,
                pdesfontsizetext);
        
        SET pidcustomstyle = LAST_INSERT_ID();
        
    END IF;
    
    SELECT * 
    FROM tb_customstyle a
    INNER JOIN tb_users d ON d.iduser = a.iduser
    WHERE idcustomstyle = pidcustomstyle;
    
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_events_update` (`pidevent` INT(11), `piduser` INT(11), `pinstatus` TINYINT, `pdesevent` VARCHAR(128), `pdesdescription` TEXT, `pdeslocation` VARCHAR(128), `pnrphone` BIGINT(20), `pdesphoto` VARCHAR(256), `pdtevent` DATETIME)  BEGIN
	
	IF pidevent > 0 THEN
		
		UPDATE tb_events
        SET           
			instatus = pinstatus,
			desevent = pdesevent,
			desdescription = pdesdescription,
			deslocation = pdeslocation,
            nrphone = pnrphone,
			desphoto = pdesphoto,
			dtevent = pdtevent
		WHERE idevent = pidevent;
        
    ELSE
    
		INSERT INTO tb_events (iduser,
			instatus,
			desevent,
			desdescription,
			deslocation,
            nrphone,
			desphoto,
			dtevent)
        VALUES(piduser,
			pinstatus,
			pdesevent,
			pdesdescription,
			pdeslocation,
            pnrphone,
			pdesphoto,
			pdtevent);
		
		SET pidevent = LAST_INSERT_ID();
        
    END IF;
    
    SELECT * 
    FROM tb_events a
    INNER JOIN tb_users d 
    ON d.iduser = a.iduser
    WHERE idevent = pidevent;
    
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_imagesupdate_save` (`pidimage` INT(11), `piduser` INT(11), `pinstatus` TINYINT, `pinposition` TINYINT, `pdesimage` VARCHAR(128), `pdesdescription` TEXT, `pdesphoto_0` VARCHAR(256), `pdesphoto_1` VARCHAR(256))  BEGIN
    
    IF pidimage > 0 THEN
        
        UPDATE tb_images
        SET           
            instatus = pinstatus,
            inposition = pinposition,
            desimage = pdesimage,
            desdescription = pdesdescription,
            desphoto_0 = pdesphoto_0,
            desphoto_1 = pdesphoto_1
        WHERE idimage = pidimage;
        
    ELSE
    
        INSERT INTO tb_images (iduser,
                instatus,
                inposition,
                desimage,
                desdescription,
                desphoto_0,
                desphoto_1)
        VALUES(piduser,
                pinstatus,
                pinposition,
                pdesimage,
                pdesdescription,
                pdesphoto_0,
                pdesphoto_1);
        
        SET pidimage = LAST_INSERT_ID();
        
    END IF;
    
    SELECT * 
    FROM tb_images a
    INNER JOIN tb_users d 
    ON d.iduser = a.iduser
    WHERE idimage = pidimage;
    
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_messagesupdate_save` (`pidmessage` INT(11), `piduser` INT(11), `pinstatus` TINYINT, `pdesmessage` VARCHAR(128), `pdesemail` VARCHAR(128), `pdesdescription` TEXT, `pdesreply` TEXT, `pdtmessage` DATETIME, `pdtreply` DATETIME)  BEGIN
    
    IF pidmessage > 0 THEN
        
        UPDATE tb_messages
        SET           
            instatus = pinstatus,
            desmessage = pdesmessage,
            desemail = pdesemail,
            desdescription = pdesdescription,
            desreply = pdesreply,
            dtmessage = pdtmessage,
            dtreply = pdtreply
        WHERE idmessage = pidmessage;
        
    ELSE
    
        INSERT INTO tb_messages (iduser,
                instatus,
                desmessage,
                desemail,
                desdescription,
                desreply,
                dtmessage,
                dtreply)
        VALUES(piduser,
                pinstatus,
                pdesmessage,
                pdesemail,
                pdesdescription,
                pdesreply,
                pdtmessage,
                pdtreply);
        
        SET pidmessage = LAST_INSERT_ID();
        
    END IF;
    
    SELECT * 
    FROM tb_messages a
    INNER JOIN tb_users d 
    ON d.iduser = a.iduser
    WHERE idmessage = pidmessage;
    
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_orders_save` (`pidorder` INT, `pidcart` INT(11), `piduser` INT(11), `pidstatus` INT(11), `pidaddress` INT(11), `pvltotal` DECIMAL(10,2))  BEGIN
	
	IF pidorder > 0 THEN
		
		UPDATE tb_orders
        SET
			idcart = pidcart,
            iduser = piduser,
            idstatus = pidstatus,
            idaddress = pidaddress,
            vltotal = pvltotal
		WHERE idorder = pidorder;
        
    ELSE
    
		INSERT INTO tb_orders (idcart, iduser, idstatus, idaddress, vltotal)
        VALUES(pidcart, piduser, pidstatus, pidaddress, pvltotal);
		
		SET pidorder = LAST_INSERT_ID();
        
    END IF;
    
    SELECT * 
    FROM tb_orders a
    INNER JOIN tb_ordersstatus b USING(idstatus)
    INNER JOIN tb_carts c USING(idcart)
    INNER JOIN tb_users d ON d.iduser = a.iduser
    INNER JOIN tb_addresses e USING(idaddress)
    WHERE idorder = pidorder;
    
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_products_update` (`pidproduct` INT(11), `piduser` INT(11), `pinbought` TINYINT, `pincategory` TINYINT, `pdesproduct` VARCHAR(64), `pvlprice` DECIMAL(10,2), `pvlwidth` DECIMAL(10,2), `pvlheight` DECIMAL(10,2), `pvllength` DECIMAL(10,2), `pvlweight` DECIMAL(10,2), `pdesphoto` VARCHAR(256), `pdesextension` VARCHAR(4))  BEGIN
    
    IF pidproduct > 0 THEN
        
        UPDATE tb_products
        SET 
            inbought = pinbought,
            incategory = pincategory,
            desproduct = pdesproduct,
            vlprice = pvlprice,
            vlwidth = pvlwidth,
            vlheight = pvlheight,
            vllength = pvllength,
            vlweight = pvlweight,
            desphoto = pdesphoto,
            desextension = pdesextension
        WHERE idproduct = pidproduct;
        
    ELSE
        
        INSERT INTO tb_products (iduser, inbought, incategory, desproduct, vlprice, vlwidth, vlheight, vllength, vlweight, desphoto, desextension) 
        VALUES(piduser, pinbought, pincategory, pdesproduct, pvlprice, pvlwidth, pvlheight, pvllength, pvlweight, pdesphoto, pdesextension);
        
        SET pidproduct = LAST_INSERT_ID();
        
    END IF;
    
    SELECT * FROM tb_products a
    INNER JOIN tb_users d
    ON d.iduser = a.iduser
    WHERE idproduct = pidproduct;
    
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_rsvpupdate_save` (`pidrsvp` INT(11), `piduser` INT(11), `pdesname` VARCHAR(128), `pdesemail` VARCHAR(128), `pnrphone` BIGINT(20), `pinstatus` TINYINT, `pinconfirmed` TINYINT, `pinmaxadults` TINYINT, `pinadultsconfirmed` TINYINT, `pinmaxchildren` TINYINT, `pinchildrenconfirmed` TINYINT, `pdtconfirmed` DATETIME)  BEGIN
	
	IF pidrsvp > 0 THEN
		
		UPDATE tb_rsvp
        SET           
			desname = pdesname,
			desemail = pdesemail,
			nrphone = pnrphone,
			instatus = pinstatus,
			inconfirmed = pinconfirmed,
			inmaxadults = pinmaxadults,
			inadultsconfirmed = pinadultsconfirmed,
			inmaxchildren = pinmaxchildren,
			inchildrenconfirmed = pinchildrenconfirmed,
			dtconfirmed = pdtconfirmed
		WHERE idrsvp = pidrsvp;
        
    ELSE
    
		INSERT INTO tb_rsvp (iduser,
                desname,
                desemail,
                nrphone,
                instatus,
                inconfirmed,
                inmaxadults,
                inadultsconfirmed,
                inmaxchildren,
                inchildrenconfirmed,
                dtconfirmed)
        VALUES(piduser,
                pdesname,
                pdesemail,
                pnrphone,
                pinstatus,
                pinconfirmed,
                pinmaxadults,
                pinadultsconfirmed,
                pinmaxchildren,
                pinchildrenconfirmed,
                pdtconfirmed);
		
		SET pidrsvp = LAST_INSERT_ID();
        
    END IF;
    
    SELECT * 
    FROM tb_rsvp a
    INNER JOIN tb_users d 
    ON d.iduser = a.iduser
    WHERE idrsvp = pidrsvp;
    
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_stakeholdersupdate_save` (`pidstakeholder` INT(11), `piduser` INT(11), `pinstatus` TINYINT, `pinposition` TINYINT, `pdesstakeholder` VARCHAR(128), `pdesdescription` TEXT, `pdescategory` VARCHAR(128), `pdeslocation` VARCHAR(128), `pdesemail` VARCHAR(128), `pdessite` VARCHAR(128), `pnrphone` BIGINT(20))  BEGIN
    
    IF pidstakeholder > 0 THEN
        
        UPDATE tb_stakeholders
        SET           
            instatus = pinstatus,
            inposition = pinposition,
            desstakeholder = pdesstakeholder,
            desdescription = pdesdescription,
            descategory = pdescategory,
            deslocation = pdeslocation,
            desemail = pdesemail,
            dessite = pdessite,
            nrphone = pnrphone
        WHERE idstakeholder = pidstakeholder;
        
    ELSE
    
        INSERT INTO tb_stakeholders (iduser,
                instatus,
                inposition,
                desstakeholder,
                desdescription,
                descategory,
                deslocation,
                desemail,
                dessite,
                nrphone)
        VALUES(piduser,
                pinstatus,
                pinposition,
                pdesstakeholder,
                pdesdescription,
                pdescategory,
                pdeslocation,
                pdesemail,
                pdessite,
                pnrphone);
        
        SET pidstakeholder = LAST_INSERT_ID();
        
    END IF;
    
    SELECT * 
    FROM tb_stakeholders a
    INNER JOIN tb_users d 
    ON d.iduser = a.iduser
    WHERE idstakeholder = pidstakeholder;
    
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_userspasswordsrecoveries_create` (`piduser` INT, `pdesip` VARCHAR(45))  BEGIN
	
	INSERT INTO tb_userspasswordsrecoveries (iduser, desip)
    VALUES(piduser, pdesip);
    
    SELECT * FROM tb_userspasswordsrecoveries
    WHERE idrecovery = LAST_INSERT_ID();
    
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_usersupdate_save` (`piduser` INT, `pdesperson` VARCHAR(64), `pdeslogin` VARCHAR(64), `pdespassword` VARCHAR(256), `pdesurl` VARCHAR(128), `pdescpf` VARCHAR(14), `pinadmin` TINYINT, `pinstatus` TINYINT, `pinplan` INT, `pdtbirthday` DATETIME, `pdtplanbegin` DATETIME, `pdtplanend` DATETIME, `pdesemail` VARCHAR(128), `pnrphone` BIGINT, `pdesphoto` VARCHAR(256), `pdesextension` VARCHAR(4))  BEGIN
	
    DECLARE vidperson INT;
    
	SELECT idperson INTO vidperson
    FROM tb_users
    WHERE iduser = piduser;
    
    UPDATE tb_persons
    SET 
		desperson = pdesperson,
        desemail = pdesemail,
        nrphone = pnrphone,
        desphoto = pdesphoto,
        desextension = pdesextension
        
	WHERE idperson = vidperson;
    
    UPDATE tb_users
    SET
		deslogin = pdeslogin,
        despassword = pdespassword,
        desurl = pdesurl,
        descpf = pdescpf,
        inadmin = pinadmin,
        instatus = pinstatus,
        inplan = pinplan,
        dtbirthday = pdtbirthday,
        dtplanbegin = pdtplanbegin,
        dtplanend = pdtplanend
	
	WHERE iduser = piduser;
    
    SELECT * FROM tb_users a INNER JOIN tb_persons b USING(idperson) WHERE a.iduser = piduser;
    
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_users_delete` (`piduser` INT)  BEGIN
    
    DECLARE vidperson INT;
    
    SET FOREIGN_KEY_CHECKS = 0;
	
	SELECT idperson INTO vidperson
    FROM tb_users
    WHERE iduser = piduser;
	
    DELETE FROM tb_addresses WHERE idperson = vidperson;
    DELETE FROM tb_addresses WHERE idaddress IN(SELECT idaddress FROM tb_orders WHERE iduser = piduser);
	DELETE FROM tb_persons WHERE idperson = vidperson;
    
    DELETE FROM tb_userslogs WHERE iduser = piduser;
    DELETE FROM tb_userspasswordsrecoveries WHERE iduser = piduser;
    DELETE FROM tb_orders WHERE iduser = piduser;
    DELETE FROM tb_cartsproducts WHERE idcart IN(SELECT idcart FROM tb_carts WHERE iduser = piduser);
    DELETE FROM tb_carts WHERE iduser = piduser;
    DELETE FROM tb_users WHERE iduser = piduser;

    DELETE FROM tb_bestfriends WHERE iduser = piduser;
    DELETE FROM tb_customstyle WHERE iduser = piduser;
    DELETE FROM tb_events WHERE iduser = piduser;
    DELETE FROM tb_gifts WHERE iduser = piduser;
    DELETE FROM tb_images WHERE iduser = piduser;
    DELETE FROM tb_messages WHERE iduser = piduser;
    DELETE FROM tb_rsvp WHERE iduser = piduser;
    DELETE FROM tb_stakeholders WHERE iduser = piduser;
    DELETE FROM tb_stories WHERE iduser = piduser;
    DELETE FROM tb_videos WHERE iduser = piduser;
    DELETE FROM tb_albuns WHERE iduser = piduser;
    DELETE FROM tb_menus WHERE iduser = piduser;
    DELETE FROM tb_parties WHERE iduser = piduser;
    DELETE FROM tb_initialpages WHERE iduser = piduser;
    DELETE FROM tb_consorts WHERE iduser = piduser;
    DELETE FROM tb_weddings WHERE iduser = piduser;

    
    SET FOREIGN_KEY_CHECKS = 1;
    
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_users_save` (`pdesperson` VARCHAR(64), `pdeslogin` VARCHAR(64), `pdespassword` VARCHAR(256), `pdesurl` VARCHAR(128), `pdescpf` VARCHAR(14), `pinadmin` TINYINT, `pinstatus` TINYINT, `pinplan` INT, `pdtbirthday` DATETIME, `pdtplanbegin` DATETIME, `pdtplanend` DATETIME, `pdesemail` VARCHAR(128), `pnrphone` BIGINT, `pdesphoto` VARCHAR(256), `pdesextension` VARCHAR(4))  BEGIN
	
    DECLARE vidperson INT;
    
	INSERT INTO tb_persons (desperson, desemail, nrphone, desphoto, desextension)
    VALUES(pdesperson, pdesemail, pnrphone, pdesphoto, pdesextension);
    
    SET vidperson = LAST_INSERT_ID();
    
    INSERT INTO tb_users (idperson, deslogin, despassword, desurl, descpf, inadmin, instatus, inplan, dtbirthday, dtplanbegin, dtplanend)
    VALUES(vidperson, pdeslogin, pdespassword, pdesurl, pdescpf, pinadmin, pinstatus, pinplan, pdtbirthday, pdtplanbegin, pdtplanend);
    
    SELECT * FROM tb_users a INNER JOIN tb_persons b USING(idperson) WHERE a.iduser = LAST_INSERT_ID();
    
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_videosupdate_save` (`pidvideo` INT(11), `piduser` INT(11), `pinstatus` TINYINT, `pinposition` TINYINT, `pdesvideo` VARCHAR(128), `pdesdescription` TEXT, `pdesthumbnail` VARCHAR(256), `pdesurl` VARCHAR(128))  BEGIN
	
	IF pidvideo > 0 THEN
		
		UPDATE tb_videos
        SET           
			instatus = pinstatus,
			inposition = pinposition,
			desvideo = pdesvideo,
			desdescription = pdesdescription,
			desthumbnail = pdesthumbnail,
			desurl = pdesurl
		WHERE idvideo = pidvideo;
        
    ELSE
    
		INSERT INTO tb_videos (iduser,
                instatus,
                inposition,
                desvideo,
                desdescription,
                desthumbnail,
                desurl)
        VALUES(piduser,
                pinstatus,
                pinposition,
                pdesvideo,
                pdesdescription,
                pdesthumbnail,
                pdesurl);
		
		SET pidvideo = LAST_INSERT_ID();
        
    END IF;
    
    SELECT * 
    FROM tb_videos a
    INNER JOIN tb_users d 
    ON d.iduser = a.iduser
    WHERE idvideo = pidvideo;
    
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_weddings_update` (`pidwedding` INT(11), `piduser` INT(11), `pdesweddingdescription` TEXT, `pdesweddinglocation` VARCHAR(128), `pdesweddingphoto` VARCHAR(256), `pdtwedding` DATETIME)  BEGIN
    
    IF pidwedding > 0 THEN
        
        UPDATE tb_weddings
        SET
            desweddingdescription = pdesweddingdescription,
            desweddinglocation = pdesweddinglocation,
            desweddingphoto = pdesweddingphoto,
            dtwedding = pdtwedding
        WHERE iduser = piduser;
        
    ELSE
    
        INSERT INTO tb_weddings (iduser,
                desweddingdescription,
                desweddinglocation,
                desweddingphoto,
                dtwedding)
        VALUES(piduser,
                pdesweddingdescription,
                pdesweddinglocation,
                pdesweddingphoto,
                pdtwedding);
        
        SET pidwedding = LAST_INSERT_ID();
        
    END IF;
    
    SELECT * 
    FROM tb_weddings a
    INNER JOIN tb_users d ON d.iduser = a.iduser
    WHERE idwedding = pidwedding;
    
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_addresses`
--

CREATE TABLE `tb_addresses` (
  `idaddress` int(11) NOT NULL,
  `idperson` int(11) NOT NULL,
  `desaddress` varchar(128) NOT NULL,
  `desnumber` varchar(16) NOT NULL,
  `descomplement` varchar(32) DEFAULT NULL,
  `descity` varchar(32) NOT NULL,
  `desstate` varchar(32) NOT NULL,
  `descountry` varchar(32) NOT NULL,
  `deszipcode` char(8) NOT NULL,
  `desdistrict` varchar(32) NOT NULL,
  `dtregister` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_addresses`
--

INSERT INTO `tb_addresses` (`idaddress`, `idperson`, `desaddress`, `desnumber`, `descomplement`, `descity`, `desstate`, `descountry`, `deszipcode`, `desdistrict`, `dtregister`) VALUES
(11, 11, 'Rua Espirito Santo', '1757', 'de 1641/1642 a 1829/1830', 'Belo Horizonte', 'MG', 'Brasil', '30160037', 'Lourdes', '2019-04-24 17:04:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_albuns`
--

CREATE TABLE `tb_albuns` (
  `idimage` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `instatus` tinyint(4) NOT NULL DEFAULT '1',
  `inposition` tinyint(4) DEFAULT NULL,
  `incategory` tinyint(4) DEFAULT NULL,
  `inphotosize` int(11) DEFAULT NULL,
  `desimage` varchar(128) DEFAULT NULL,
  `desdescription` text,
  `descategory` varchar(128) DEFAULT NULL,
  `desphoto` varchar(256) DEFAULT NULL,
  `desextension` varchar(4) DEFAULT NULL,
  `dtregister` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_albuns`
--

INSERT INTO `tb_albuns` (`idimage`, `iduser`, `instatus`, `inposition`, `incategory`, `inphotosize`, `desimage`, `desdescription`, `descategory`, `desphoto`, `desextension`, `dtregister`) VALUES
(14, 11, 0, 11, NULL, NULL, 'Minha 1', 'Minha 1', NULL, NULL, NULL, '2019-04-28 01:14:55'),
(15, 11, 0, 2, NULL, NULL, 'Foto 2', 'foto2', NULL, NULL, NULL, '2019-04-28 17:27:13');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_bestfriends`
--

CREATE TABLE `tb_bestfriends` (
  `idbestfriend` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `instatus` tinyint(4) NOT NULL DEFAULT '1',
  `inposition` tinyint(4) DEFAULT NULL,
  `desbestfriend` varchar(128) NOT NULL,
  `desdescription` text,
  `desphoto` varchar(256) DEFAULT NULL,
  `desextension` varchar(4) DEFAULT NULL,
  `dtregister` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_bestfriends`
--

INSERT INTO `tb_bestfriends` (`idbestfriend`, `iduser`, `instatus`, `inposition`, `desbestfriend`, `desdescription`, `desphoto`, `desextension`, `dtregister`) VALUES
(422, 11, 1, 2, 'MAIS UM', 'Nos2 conhecemos h? 2 anos enos apaixonamos e hoje finalmente chegou o grande dia de consumar a uni?o', '1122422.png', 'png', '2019-05-04 21:47:23');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_carts`
--

CREATE TABLE `tb_carts` (
  `idcart` int(11) NOT NULL,
  `dessessionid` varchar(64) NOT NULL,
  `iduser` int(11) NOT NULL,
  `instatus` tinyint(4) DEFAULT '0',
  `deszipcode` char(8) DEFAULT NULL,
  `dtregister` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_carts`
--

INSERT INTO `tb_carts` (`idcart`, `dessessionid`, `iduser`, `instatus`, `deszipcode`, `dtregister`) VALUES
(7, 'edt7d6j5lq9neocf2853e5qdaj', 0, 0, NULL, '2019-04-24 17:02:46'),
(8, '91okb882m4td7kg5u9a69anb1h', 0, 0, NULL, '2019-04-24 18:38:48'),
(9, 'rb2qm8at3nkhsg65mgveh2o4b6', 0, 0, NULL, '2019-04-25 04:59:37'),
(10, '8lgal72v6jm4j83k0mrc64nhtd', 0, 0, NULL, '2019-04-25 13:01:50'),
(11, '673u3b00i22ttm6svdj3kr5nfg', 0, 0, NULL, '2019-04-26 12:45:49'),
(12, 'hhq12n9cicqm48hanvk8dgltd2', 0, 0, NULL, '2019-04-26 20:25:32'),
(13, 'vpqgks8grptvlm5ecuo2pr4kif', 0, 0, NULL, '2019-04-27 19:18:59'),
(14, '60daaofkc52dakupsfpipgfass', 0, 0, NULL, '2019-04-28 00:30:33'),
(15, 'pjn1fage4f77u0a2edmaaengfe', 0, 0, NULL, '2019-04-28 13:23:51'),
(16, '42rtb4dhdipkiqjep1ogauc9mo', 0, 0, NULL, '2019-04-28 15:35:39'),
(17, 'o6acqors9gt7pa2pqbgsl807cp', 0, 0, NULL, '2019-04-28 18:32:28'),
(18, 'bfo2u75nuv50jhaidr5ctqfe3g', 0, 0, NULL, '2019-04-28 18:47:24'),
(19, '7fl6dssmtjhns6hnq2cnb2jvks', 0, 0, NULL, '2019-04-28 19:18:39'),
(20, 't5352nms7jmtt2uca4a29boesl', 0, 0, NULL, '2019-04-29 17:35:14'),
(21, 'mh625nnid97c23rpuhsljktmp5', 0, 0, NULL, '2019-04-30 13:29:09'),
(22, 'g59jdf58j85enulqrp47smvmh1', 0, 0, NULL, '2019-04-30 13:53:06'),
(23, 'b45c60g3u9u97220e5gflpnqn0', 0, 0, NULL, '2019-04-30 14:02:34'),
(24, 'cfb3si46vl70gapcfkpqtbs2h4', 0, 0, NULL, '2019-05-02 20:34:35'),
(25, 's0gt8umsa3sjofrpbebglg080d', 0, 0, NULL, '2019-05-04 01:35:32'),
(26, 'br155kdib7vfjb619irkvdnijo', 0, 0, NULL, '2019-05-04 13:02:26'),
(27, 'jl5tu52cev88k3n83rfnbc1nqv', 0, 0, NULL, '2019-05-04 15:03:20'),
(28, 'mtg97v0jv78sj5ieus57a6mnhc', 11, 0, '30160037', '2019-05-05 01:31:20'),
(29, 'v1tbpuc3qdgdh02n07rkkd7fke', 11, 0, NULL, '2019-05-05 22:57:34'),
(30, 'v1tbpuc3qdgdh02n07rkkd7fke', 11, 0, NULL, '2019-05-05 22:57:34'),
(31, 'v1tbpuc3qdgdh02n07rkkd7fke', 11, 0, NULL, '2019-05-05 22:57:34'),
(32, 'v1tbpuc3qdgdh02n07rkkd7fke', 11, 0, NULL, '2019-05-05 22:57:35'),
(33, 'v1tbpuc3qdgdh02n07rkkd7fke', 11, 0, NULL, '2019-05-05 22:57:35'),
(34, 'v1tbpuc3qdgdh02n07rkkd7fke', 11, 0, NULL, '2019-05-05 22:57:50'),
(35, 'v1tbpuc3qdgdh02n07rkkd7fke', 11, 0, NULL, '2019-05-05 22:57:50'),
(36, 'v1tbpuc3qdgdh02n07rkkd7fke', 11, 0, NULL, '2019-05-05 22:58:07'),
(37, 'v1tbpuc3qdgdh02n07rkkd7fke', 11, 0, NULL, '2019-05-05 22:58:07'),
(38, 'v1tbpuc3qdgdh02n07rkkd7fke', 11, 0, NULL, '2019-05-05 22:58:07'),
(39, 'v1tbpuc3qdgdh02n07rkkd7fke', 11, 0, NULL, '2019-05-05 22:58:08'),
(40, 'v1tbpuc3qdgdh02n07rkkd7fke', 11, 0, NULL, '2019-05-05 22:58:08'),
(41, 'v1tbpuc3qdgdh02n07rkkd7fke', 11, 0, NULL, '2019-05-05 22:58:42'),
(42, 'v1tbpuc3qdgdh02n07rkkd7fke', 11, 0, NULL, '2019-05-05 22:58:42'),
(43, 'v1tbpuc3qdgdh02n07rkkd7fke', 11, 0, NULL, '2019-05-05 22:58:42'),
(44, 'v1tbpuc3qdgdh02n07rkkd7fke', 11, 0, NULL, '2019-05-05 22:58:42'),
(45, 'v1tbpuc3qdgdh02n07rkkd7fke', 11, 0, NULL, '2019-05-05 22:58:42'),
(46, 'v1tbpuc3qdgdh02n07rkkd7fke', 11, 0, NULL, '2019-05-05 23:00:26'),
(47, 'v1tbpuc3qdgdh02n07rkkd7fke', 11, 0, NULL, '2019-05-05 23:00:26'),
(48, 'v1tbpuc3qdgdh02n07rkkd7fke', 11, 0, NULL, '2019-05-05 23:00:26'),
(49, 'v1tbpuc3qdgdh02n07rkkd7fke', 11, 0, NULL, '2019-05-05 23:00:26'),
(50, 'v1tbpuc3qdgdh02n07rkkd7fke', 11, 0, NULL, '2019-05-05 23:00:26'),
(51, 'v1tbpuc3qdgdh02n07rkkd7fke', 11, 0, NULL, '2019-05-05 23:00:41'),
(52, 'v1tbpuc3qdgdh02n07rkkd7fke', 11, 0, NULL, '2019-05-05 23:00:41'),
(53, 'v1tbpuc3qdgdh02n07rkkd7fke', 11, 0, NULL, '2019-05-05 23:00:41'),
(54, 'v1tbpuc3qdgdh02n07rkkd7fke', 11, 0, NULL, '2019-05-05 23:00:41'),
(55, 'v1tbpuc3qdgdh02n07rkkd7fke', 11, 0, NULL, '2019-05-05 23:00:41'),
(56, '67952jktlmp3o3il1seb4qe74c', 11, 0, NULL, '2019-05-06 00:19:47'),
(57, 'k0m3pvviln4ce9go5jivnup82k', 11, 0, NULL, '2019-05-06 00:48:04'),
(58, 'unhsrk3oa3vvr2i45rmc67m8if', 11, 0, NULL, '2019-05-06 00:48:06'),
(59, 'iql2m4iiuj0u6f7bch8b17ov47', 11, 0, NULL, '2019-05-06 00:48:53'),
(60, 'f3nhipfvasr330eepsj4nl0sk4', 13, 0, NULL, '2019-05-06 01:10:16'),
(61, 'fib6ebsphtp2drpkn75ojklj6v', 11, 0, NULL, '2019-05-06 01:13:07'),
(62, 'qcvvmg1busjte2k5oup6li8pk4', 11, 0, NULL, '2019-05-06 12:52:30'),
(63, 'nrbanfqo9h0vkga4irc27d8r6a', 11, 0, NULL, '2019-05-06 12:59:33'),
(64, 'nrbanfqo9h0vkga4irc27d8r6a', 11, 0, NULL, '2019-05-06 13:03:17'),
(65, 'nrbanfqo9h0vkga4irc27d8r6a', 11, 0, NULL, '2019-05-06 13:23:52'),
(66, 'b669or8lnlr2j86uo0jtb2a932', 11, 0, NULL, '2019-05-06 13:26:12'),
(67, 'okci19i3gj96rln8kk73oqu5hu', 11, 0, NULL, '2019-05-06 13:28:44'),
(68, 'iactefvlv4b0di0gduficnivmb', 11, 0, NULL, '2019-05-06 13:37:03'),
(69, 'ut2oie15cmg1cfke5toksoc1ds', 11, 0, NULL, '2019-05-06 20:04:02'),
(70, 'go2fs0dgpfsvrp1ipft213vfu1', 11, 0, NULL, '2019-05-06 20:49:03'),
(71, 'hi9gffa4r0v1d5qeovhnjbeape', 11, 0, NULL, '2019-05-06 20:49:04'),
(72, 'nhj6q3vbp8hpb29us957vkb7is', 11, 0, NULL, '2019-05-06 20:49:36'),
(73, 'iug6v8t5ip2vncvedu68poqk7f', 11, 0, NULL, '2019-05-06 20:49:37'),
(74, 'j6q2eq4q7cuchenh5d8d6rsb5g', 11, 0, NULL, '2019-05-06 20:50:11'),
(75, 'f7pr1aott92hcopn8pbcc2uttc', 11, 0, NULL, '2019-05-06 20:51:01'),
(76, 'mbq39oqn0905ujla05lbn4afhf', 11, 0, NULL, '2019-05-06 20:51:02'),
(77, '4j8tb1le1458c01u8aqnc2qh8q', 11, 0, NULL, '2019-05-06 20:52:19'),
(78, 'jov2c3ei78cuo70qarje3sre16', 11, 0, NULL, '2019-05-06 21:03:44'),
(79, '1dc319t988j7igfqo8h93dsmcv', 11, 0, NULL, '2019-05-06 21:03:44'),
(80, 'jl8fgee2ptlpfh68c78p729ldo', 11, 0, NULL, '2019-05-06 21:15:07'),
(81, 'gcrplfbv4apk41h3dmrjp16pts', 11, 0, NULL, '2019-05-06 21:15:08'),
(82, '5eidcap0s3gi4vteq97giub3qo', 11, 0, NULL, '2019-05-06 21:15:44'),
(83, '7u2a6f8d06bfcdk3cqmvgcobf6', 11, 0, NULL, '2019-05-06 21:15:44'),
(84, 'bja8uujinbk6l9g9eqp3jefshj', 11, 0, NULL, '2019-05-06 21:36:17'),
(85, 'in3g3b13f86ifqj34o3kg12gtn', 11, 0, NULL, '2019-05-06 21:36:18'),
(86, 'h028qvm4hdub9kg58ulcs8r2ro', 11, 0, NULL, '2019-05-06 21:36:53'),
(87, '8kqktfsrdpfn9npf7phuffuu97', 11, 0, NULL, '2019-05-06 21:46:16'),
(88, 'crcop1pau1ajukg3d00qa0fk22', 11, 0, NULL, '2019-05-06 21:46:16'),
(89, 'm1d5lpkh7uj5eh98jsqoe43ih1', 11, 0, NULL, '2019-05-06 21:52:21'),
(90, 'kdbel6pncbt42ipemvm0mao6dn', 11, 0, NULL, '2019-05-06 21:52:22'),
(91, '7gn52cfq9br27j7971jt16d6a9', 11, 0, NULL, '2019-05-06 21:53:00'),
(92, 'og4tir7mbn8cevuvl4qe4oq7h0', 11, 0, NULL, '2019-05-06 21:53:00'),
(93, 'q0qgjqt1tpnrr9msjlonvl8v4j', 11, 0, NULL, '2019-05-06 22:16:10'),
(94, 'j71o3pmh9tg07rto9kqbh4th5s', 11, 0, NULL, '2019-05-06 22:16:10'),
(95, 'qt5c3ghag2t6jcvkcgmhoa07hv', 11, 0, NULL, '2019-05-06 22:17:05'),
(96, 'ha4gpoq17d1ufdl7qptpkiib4f', 11, 0, NULL, '2019-05-06 22:17:05'),
(97, '8hmp3eo1urt3q3pfgte7n1k2rf', 11, 0, NULL, '2019-05-06 22:17:46'),
(98, 'e44smfqtni6lji5vtlbqu7frmk', 11, 0, NULL, '2019-05-06 22:21:05'),
(99, '0nj226p7niqhlmanbd3hv447jg', 11, 0, NULL, '2019-05-06 22:21:05'),
(100, '3uel5jh31c18o28frc564hj6te', 11, 0, NULL, '2019-05-06 22:23:39'),
(101, 'ohmmqq5cjbq3k2m6pj2c5j0585', 11, 0, NULL, '2019-05-06 22:27:01'),
(102, 'uqiquc1ehmfv0thho0dgp9t29p', 11, 0, NULL, '2019-05-06 22:27:01'),
(103, '5t30cs33goevi28h4oi2h9gi9a', 11, 0, NULL, '2019-05-06 22:28:59'),
(104, 'ra9p0a7dk6nefg2bl11kifchv9', 11, 0, NULL, '2019-05-06 22:28:59'),
(105, 'n4ouu0snuu853i0evq3o4dlfgd', 11, 0, NULL, '2019-05-06 22:32:43'),
(106, 'rld7rue0u84avonu118lhoh0ur', 11, 0, NULL, '2019-05-06 22:34:38'),
(107, 'cp3if8h8pglut4jcneqdeu8l7d', 11, 0, NULL, '2019-05-06 22:34:38'),
(108, 'n62le25eibq65091s388ff9ru5', 11, 0, NULL, '2019-05-06 22:37:16'),
(109, '6bbnsnpgbg28bbhfqe79ktq45i', 11, 0, NULL, '2019-05-06 22:38:00'),
(110, 'dmsfev51f1cav47ah19926jp47', 11, 0, NULL, '2019-05-06 22:38:01'),
(111, 'sb0sb7j3sha88t811q315nh08m', 11, 0, NULL, '2019-05-06 22:40:26'),
(112, 'hnd9on9gq9riuac0q3egcedh2t', 11, 0, NULL, '2019-05-06 22:40:50'),
(113, 'b8kv1p6vmgqj5ccpvri414rfdb', 11, 0, NULL, '2019-05-06 22:41:05'),
(114, 'aeijpllcr54779afmtf2credsh', 11, 0, NULL, '2019-05-06 22:41:16'),
(115, '1b9usapdpnnuqireo474ktnvhf', 11, 0, NULL, '2019-05-06 22:41:16'),
(116, 'gch3l7rgafhlodi15q90f8fo1f', 11, 0, NULL, '2019-05-06 22:42:45'),
(117, 'stgp78tloo132905ls8vnmql4h', 11, 0, NULL, '2019-05-06 22:43:28'),
(118, 'cltkds9mgv9ke8pl6ccjkmsm7h', 11, 0, NULL, '2019-05-06 23:59:34'),
(119, 'kjho2h4blefsi35c8fn65eatkc', 11, 0, NULL, '2019-05-07 00:24:10'),
(120, 'uscb54d62m1qv4ogdvng790ebr', 11, 0, NULL, '2019-05-07 00:24:23'),
(121, 'mtg97v0jv78sj5ieus57a6mnhc', 11, 0, NULL, '2019-05-07 00:24:24'),
(122, '9hh72a6ihjg3dhtdke85o57b1n', 11, 0, NULL, '2019-05-07 00:29:10'),
(123, 'ud5mqp55l6889i78asfhjpdmqr', 11, 0, NULL, '2019-05-07 00:29:48'),
(124, 'nb6ceqofa9mans40rdugt65pti', 11, 0, NULL, '2019-05-07 00:29:48'),
(125, 'ad0g8dk7cj8d84f46v7cv2vd93', 11, 0, NULL, '2019-05-07 00:39:11'),
(126, 'ojd6g939no2ltn155geahiuo2a', 11, 0, NULL, '2019-05-07 00:41:26'),
(127, 'lb1qvrn37ljav0tco5ttljspq5', 11, 0, NULL, '2019-05-07 00:41:28'),
(128, '8u7ogge96q2a573e7sq29193ss', 11, 0, NULL, '2019-05-07 00:43:04'),
(129, 'cgdqhfvggvphbs6ltorff8qq0a', 11, 0, NULL, '2019-05-07 00:43:04'),
(130, 'cqqdkd44p4ilkdr6dnkjie2p8q', 11, 0, NULL, '2019-05-07 00:51:15'),
(131, 'su7am63848lk5ua0r52a07f80a', 11, 0, NULL, '2019-05-07 00:51:15'),
(132, 'njfu5v5i0o0v07s13asturuh5m', 11, 0, NULL, '2019-05-07 00:52:17'),
(133, '13mn9mhdl06jaoal2hip04tsoi', 11, 0, NULL, '2019-05-07 00:52:18'),
(134, 's5knbldf69hr9b3sttgrbbkf1r', 11, 0, NULL, '2019-05-07 00:52:58'),
(135, 'u293qr8ugnkmgsli4hf0u277h1', 11, 0, NULL, '2019-05-07 00:53:34'),
(136, 'fi4gbfim1kiii0imc8hj506o58', 11, 0, NULL, '2019-05-07 00:53:34'),
(137, 'f4i8koo2sbdt9h3i46cfg1ab8h', 11, 0, NULL, '2019-05-07 00:54:04'),
(138, 'sr4fukb5s4r42j1pu2npnfn003', 11, 0, NULL, '2019-05-07 00:54:06'),
(139, 'cfcdgfokpe2uh85vur3uant5d3', 11, 0, NULL, '2019-05-07 00:54:42'),
(140, 'mfv7l5p1n8rsr05gi5bfhb70n3', 11, 0, NULL, '2019-05-07 01:01:18'),
(141, 'dvhikh21u8rjr8fn6d249kaj6r', 11, 0, NULL, '2019-05-07 01:35:38'),
(142, 'vpv2ccncf2u3nlegonbftd6grq', 11, 0, NULL, '2019-05-07 01:35:38'),
(143, 'vpv2ccncf2u3nlegonbftd6grq', 13, 0, NULL, '2019-05-07 01:42:21'),
(144, 'q8db26jobsg7tt911vit8g247v', 11, 0, NULL, '2019-05-07 02:03:24'),
(145, '9nsvc290eu6g3bn9didmolfd56', 11, 0, NULL, '2019-05-07 02:03:24'),
(146, '9nsvc290eu6g3bn9didmolfd56', 13, 0, NULL, '2019-05-07 02:03:34'),
(147, '51nn28euno3vi1uffv7u22mogv', 11, 0, NULL, '2019-05-07 02:04:04'),
(148, '51nn28euno3vi1uffv7u22mogv', 13, 0, NULL, '2019-05-07 02:05:59'),
(149, 'gn4ja8gg870qj9g34hejbtq1vs', 13, 0, NULL, '2019-05-07 02:06:40'),
(151, '7v6u6fglt76ib27am5ppjphn53', 11, 0, NULL, '2019-05-07 02:20:40'),
(152, '4q9g4lnipq49tsg05akqikd722', 11, 0, NULL, '2019-05-07 02:28:23'),
(153, 'plb7tvkdltufuueruqajknehkq', 11, 0, NULL, '2019-05-07 02:37:47'),
(154, 'rp2p9923t9jjjkig9h1q6he50t', 11, 0, '30160037', '2019-05-07 02:37:47'),
(155, '8292bmhugu3u0sm7p3oofh65o0', 11, 0, NULL, '2019-05-07 03:21:42');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_cartsproducts`
--

CREATE TABLE `tb_cartsproducts` (
  `idcartproduct` int(11) NOT NULL,
  `idcart` int(11) NOT NULL,
  `idproduct` int(11) NOT NULL,
  `dtremoved` datetime DEFAULT NULL,
  `dtregister` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_cartsproducts`
--

INSERT INTO `tb_cartsproducts` (`idcartproduct`, `idcart`, `idproduct`, `dtremoved`, `dtregister`) VALUES
(120, 151, 97, NULL, '2019-05-07 02:22:13'),
(121, 151, 97, NULL, '2019-05-07 02:22:43'),
(123, 152, 103, NULL, '2019-05-07 02:28:27'),
(124, 153, 98, NULL, '2019-05-07 02:37:47'),
(125, 154, 98, NULL, '2019-05-07 02:37:47'),
(126, 154, 97, NULL, '2019-05-07 02:44:06'),
(127, 155, 98, NULL, '2019-05-07 03:21:42'),
(128, 155, 98, NULL, '2019-05-07 03:47:03');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_categories`
--

CREATE TABLE `tb_categories` (
  `idcategory` int(11) NOT NULL,
  `descategory` varchar(32) NOT NULL,
  `dtregister` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_categories`
--

INSERT INTO `tb_categories` (`idcategory`, `descategory`, `dtregister`) VALUES
(1, 'Android', '2017-09-21 15:18:08'),
(2, 'IOS', '2017-09-21 15:18:15'),
(3, 'Samsung', '2017-09-21 15:19:14');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_consorts`
--

CREATE TABLE `tb_consorts` (
  `idconsort` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `desconsort` varchar(128) DEFAULT NULL,
  `desconsortemail` varchar(128) DEFAULT NULL,
  `desconsortphoto` varchar(256) DEFAULT NULL,
  `dtregister` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_customstyle`
--

CREATE TABLE `tb_customstyle` (
  `idcustomstyle` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `idtemplate` int(11) NOT NULL DEFAULT '1',
  `desbanner` varchar(256) DEFAULT NULL,
  `descolorheader` varchar(10) DEFAULT NULL,
  `descolorheadertext` varchar(10) DEFAULT NULL,
  `descolorheaderhover` varchar(10) DEFAULT NULL,
  `descolorfooter` varchar(10) DEFAULT NULL,
  `descolorfootertext` varchar(10) DEFAULT NULL,
  `descolorfooterhover` varchar(10) DEFAULT NULL,
  `descolorh1` varchar(10) DEFAULT NULL,
  `desfontfamilyh1` varchar(64) DEFAULT NULL,
  `desfontsizeh1` varchar(10) DEFAULT NULL,
  `descolorh2` varchar(10) DEFAULT NULL,
  `desfontfamilyh2` varchar(64) DEFAULT NULL,
  `desfontsizeh2` varchar(10) DEFAULT NULL,
  `descolorh3` varchar(10) DEFAULT NULL,
  `desfontfamilyh3` varchar(64) DEFAULT NULL,
  `desfontsizeh3` varchar(10) DEFAULT NULL,
  `descolortext` varchar(10) DEFAULT NULL,
  `desfontfamilytext` varchar(64) DEFAULT NULL,
  `desfontsizetext` varchar(10) DEFAULT NULL,
  `dtregister` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_customstyle`
--

INSERT INTO `tb_customstyle` (`idcustomstyle`, `iduser`, `idtemplate`, `desbanner`, `descolorheader`, `descolorheadertext`, `descolorheaderhover`, `descolorfooter`, `descolorfootertext`, `descolorfooterhover`, `descolorh1`, `desfontfamilyh1`, `desfontsizeh1`, `descolorh2`, `desfontfamilyh2`, `desfontsizeh2`, `descolorh3`, `desfontfamilyh3`, `desfontsizeh3`, `descolortext`, `desfontfamilytext`, `desfontsizetext`, `dtregister`) VALUES
(14, 11, 1, '', '#666667', '#666667', '#666667', '#666667', '#666667', '#666667', '#666667', 'Arial2', '32', '#666667', 'Arial2', '32', '#666667', 'Arial2', '32', '#666667', 'Arial2', '32', '2019-04-25 13:15:56'),
(15, 13, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-05-05 02:56:30');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_events`
--

CREATE TABLE `tb_events` (
  `idevent` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `instatus` tinyint(4) NOT NULL DEFAULT '1',
  `desevent` varchar(128) COLLATE utf8_czech_ci NOT NULL,
  `desdescription` text COLLATE utf8_czech_ci,
  `deslocation` varchar(128) COLLATE utf8_czech_ci NOT NULL,
  `nrphone` bigint(20) DEFAULT NULL,
  `desphoto` varchar(256) COLLATE utf8_czech_ci DEFAULT NULL,
  `dtevent` datetime NOT NULL,
  `dtregister` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

--
-- Extraindo dados da tabela `tb_events`
--

INSERT INTO `tb_events` (`idevent`, `iduser`, `instatus`, `desevent`, `desdescription`, `deslocation`, `nrphone`, `desphoto`, `dtevent`, `dtregister`) VALUES
(35, 11, 0, '0000000000000000000', '0000000000', '00000000000', 984050127, NULL, '2019-08-02 12:00:00', '2019-05-01 00:20:40'),
(37, 11, 1, '12121212121', '12121212121', '12121212121', 12184050125, NULL, '0000-00-00 00:00:00', '2019-05-01 00:21:56'),
(38, 11, 2, 'my event', 'Nos3 conhecemos há 2 anos enos apaixonamos e hoje finalmente chegou o grande dia de consumar a união', 'desevent', 31984050127, NULL, '2020-02-02 12:30:00', '2019-05-01 00:28:32'),
(39, 11, 1, 'my event', 'Descrição teste000000000', 'Avenida2 Afonso Pena, 2000000000', 31999887766, NULL, '2017-06-06 18:00:00', '2019-05-01 01:45:06');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_gifts`
--

CREATE TABLE `tb_gifts` (
  `idgift` int(11) NOT NULL,
  `desgift` varchar(128) NOT NULL,
  `incategory` tinyint(4) DEFAULT NULL,
  `vlprice` decimal(10,2) NOT NULL,
  `desphoto` varchar(256) DEFAULT NULL,
  `desextension` varchar(4) DEFAULT NULL,
  `dtregister` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_gifts`
--

INSERT INTO `tb_gifts` (`idgift`, `desgift`, `incategory`, `vlprice`, `desphoto`, `desextension`, `dtregister`) VALUES
(1, 'Adega', 11, '1000.00', '1.jpg', 'jpg', '2019-05-03 01:27:00'),
(2, 'Adega climatizada', 11, '2000.00', '2.jpg', 'jpg', '2019-05-03 01:27:00'),
(3, 'Cachaça Artesanal', 11, '200.00', '3.jpg', 'jpg', '2019-05-03 01:27:00'),
(4, 'Cerveja Artesanal', 11, '150.00', '4.jpg', 'jpg', '2019-05-03 01:27:00'),
(5, 'Champagne', 11, '700.00', '5.jpg', 'jpg', '2019-05-03 01:27:00'),
(6, 'Champanheira de Prata', 11, '1500.00', '6.jpg', 'jpg', '2019-05-03 01:27:00'),
(7, 'Espumante', 11, '500.00', '7.jpg', 'jpg', '2019-05-03 01:27:00'),
(8, 'Kit Caipirinha', 11, '100.00', '8.jpg', 'jpg', '2019-05-03 01:27:00'),
(9, 'Licor', 11, '250.00', '9.jpg', 'jpg', '2019-05-03 01:27:00'),
(10, 'Tonel', 11, '900.00', '10.jpg', 'jpg', '2019-05-03 01:27:00'),
(11, 'Vinho Argentino', 11, '350.00', '11.jpg', 'jpg', '2019-05-03 01:27:00'),
(12, 'Vinho Chileno', 11, '300.00', '12.jpg', 'jpg', '2019-05-03 01:27:00'),
(13, 'Vinho Português', 11, '400.00', '13.jpg', 'jpg', '2019-05-03 01:27:00'),
(14, 'Whisky Black Label', 11, '800.00', '14.jpg', 'jpg', '2019-05-03 01:27:00'),
(15, 'Whisky Red Label', 11, '600.00', '15.jpg', 'jpg', '2019-05-03 01:27:00'),
(16, 'Cama King Size', 12, '100.00', '16.jpg', 'jpg', '2019-05-03 01:27:00'),
(17, 'Edredom Casal', 12, '300.00', '17.jpg', 'jpg', '2019-05-03 01:27:00'),
(18, 'Jacuzzi', 12, '1500.00', '18.jpg', 'jpg', '2019-05-03 01:27:00'),
(19, 'Aparelho de Fondue', 13, '600.00', '19.jpg', 'jpg', '2019-05-03 01:27:00'),
(20, 'Baixelas de Prata', 13, '1500.00', '20.jpg', 'jpg', '2019-05-03 01:27:00'),
(21, 'Churrasqueira', 13, '900.00', '21.jpg', 'jpg', '2019-05-03 01:27:00'),
(22, 'Cozinha Completa', 13, '2000.00', '22.jpg', 'jpg', '2019-05-03 01:27:00'),
(23, 'Rechaud', 13, '300.00', '26.jpg', 'jpg', '2019-05-03 01:27:00'),
(24, 'Taças de Cristal', 13, '500.00', '27.jpg', 'jpg', '2019-05-03 01:27:00'),
(25, 'Ar-Condicionado', 14, '1000.00', '28.jpg', 'jpg', '2019-05-03 01:27:00'),
(26, 'Aspirador de Pó', 14, '300.00', '29.jpg', 'jpg', '2019-05-03 01:27:00'),
(27, 'Cafeteira', 14, '200.00', '30.jpg', 'jpg', '2019-05-03 01:27:00'),
(28, 'Cafeteira Expresso', 14, '450.00', '31.jpg', 'jpg', '2019-05-03 01:27:00'),
(29, 'Fogão', 14, '800.00', '32.jpg', 'jpg', '2019-05-03 01:27:00'),
(30, 'Freezer', 14, '1400.00', '33.png', 'png', '2019-05-03 01:27:00'),
(31, 'Frigobar', 14, '1800.00', '34.jpg', 'jpg', '2019-05-03 01:27:00'),
(32, 'Juicer', 14, '250.00', '35.jpg', 'jpg', '2019-05-03 01:27:00'),
(33, 'Lava-Louças', 14, '1200.00', '36.jpg', 'jpg', '2019-05-03 01:27:00'),
(34, 'Lavadora', 14, '1600.00', '37.jpg', 'jpg', '2019-05-03 01:27:00'),
(35, 'Liquididicador', 14, '100.00', '38.jpg', 'jpg', '2019-05-03 01:27:00'),
(36, 'Microondas', 14, '500.00', '39.png', 'png', '2019-05-03 01:27:00'),
(37, 'Panela Elétrica', 14, '350.00', '40.png', 'png', '2019-05-03 01:27:00'),
(38, 'Panificadora Doméstica', 14, '700.00', '41.jpg', 'jpg', '2019-05-03 01:27:00'),
(39, 'Pipoqueira', 14, '150.00', '42.jpg', 'jpg', '2019-05-03 01:27:00'),
(40, 'Refrigerador Frost Free', 14, '2000.00', '43.jpg', 'jpg', '2019-05-03 01:27:00'),
(41, 'Blu-Ray 3D', 15, '500.00', '44.jpg', 'jpg', '2019-05-03 01:27:00'),
(42, 'Câmera Profissional', 15, '800.00', '45.jpg', 'jpg', '2019-05-03 01:27:00'),
(43, 'Celular', 15, '1100.00', '46.jpg', 'jpg', '2019-05-03 01:27:00'),
(44, 'Climatizador', 15, '600.00', '47.png', 'png', '2019-05-03 01:27:00'),
(45, 'Drone', 15, '1300.00', '48.jpg', 'jpg', '2019-05-03 01:27:00'),
(46, 'DVD Player Portátil', 15, '250.00', '49.jpg', 'jpg', '2019-05-03 01:27:00'),
(47, 'Home Teather', 15, '1600.00', '50.jpg', 'jpg', '2019-05-03 01:27:00'),
(48, 'Impressora', 15, '400.00', '51.jpg', 'jpg', '2019-05-03 01:27:00'),
(49, 'Impressora 3D', 15, '900.00', '52.jpg', 'jpg', '2019-05-03 01:27:00'),
(50, 'iPod', 15, '450.00', '53.jpg', 'jpg', '2019-05-03 01:27:00'),
(51, 'Micro System MP3', 15, '200.00', '54.jpg', 'jpg', '2019-05-03 01:27:00'),
(52, 'MP3 Player', 15, '150.00', '55.jpg', 'jpg', '2019-05-03 01:27:00'),
(53, 'MP5 Player', 15, '300.00', '56.jpg', 'jpg', '2019-05-03 01:27:00'),
(54, 'Notebook', 15, '1200.00', '57.jpg', 'jpg', '2019-05-03 01:27:00'),
(55, 'Playstation 4', 15, '900.00', '58.jpg', 'jpg', '2019-05-03 01:27:00'),
(56, 'Smart TV LED', 15, '2000.00', '59.jpg', 'jpg', '2019-05-03 01:27:00'),
(57, 'Toca-discos de Vinil', 15, '350.00', '60.jpg', 'jpg', '2019-05-03 01:27:00'),
(58, 'TV 4K', 15, '1800.00', '61.jpg', 'jpg', '2019-05-03 01:27:00'),
(59, 'TV de Plasma', 15, '1500.00', '62.jpg', 'jpg', '2019-05-03 01:27:00'),
(60, 'TV Tela Plana', 15, '700.00', '63.png', 'png', '2019-05-03 01:27:00'),
(61, 'Ventilador', 15, '100.00', '64.jpg', 'jpg', '2019-05-03 01:27:00'),
(62, 'Xbox 360 Arcade', 15, '1000.00', '65.jpg', 'jpg', '2019-05-03 01:27:00'),
(63, 'Diárias do Hotel', 16, '1700.00', '66.jpg', 'jpg', '2019-05-03 01:27:00'),
(64, 'Ingressos para o Cirque Du Soleil', 16, '800.00', '67.jpg', 'jpg', '2019-05-03 01:27:00'),
(65, 'Ingressos para Show', 16, '400.00', '68.jpg', 'jpg', '2019-05-03 01:27:00'),
(66, 'Ingressos pra assistir seu time favorito na Europa', 16, '1400.00', '69.jpg', 'jpg', '2019-05-03 01:27:00'),
(67, 'Jantar romântico', 16, '350.00', '70.jpg', 'jpg', '2019-05-03 01:27:00'),
(68, 'Malas para viajar', 16, '900.00', '71.jpg', 'jpg', '2019-05-03 01:27:00'),
(69, 'Mergulho com os golfinhos', 16, '150.00', '72.jpg', 'jpg', '2019-05-03 01:27:00'),
(70, 'Mergulho nas cachoeiras', 16, '200.00', '73.jpg', 'jpg', '2019-05-03 01:27:00'),
(71, 'Passagens áreas', 16, '2000.00', '74.jpg', 'jpg', '2019-05-03 01:27:00'),
(72, 'Passeio de helicóptero', 16, '700.00', '75.jpg', 'jpg', '2019-05-03 01:27:00'),
(73, 'Passeio de Jet Ski', 16, '500.00', '76.jpg', 'jpg', '2019-05-03 01:27:00'),
(74, 'Passeio de Lancha', 16, '250.00', '77.jpg', 'jpg', '2019-05-03 01:27:00'),
(75, 'Passeio de limousine', 16, '600.00', '78.jpg', 'jpg', '2019-05-03 01:27:00'),
(76, 'Passeio Ecológico', 16, '100.00', '79.jpg', 'jpg', '2019-05-03 01:27:00'),
(77, 'Snorkeling com as tartarugas', 16, '300.00', '80.jpg', 'jpg', '2019-05-03 01:27:00'),
(78, 'Uma semana de Cruzeiro marítimo', 16, '1500.00', '81.jpg', 'jpg', '2019-05-03 01:27:00'),
(79, 'Viagem a Fernando de Noronha', 16, '1100.00', '82.jpg', 'jpg', '2019-05-03 01:27:00'),
(80, 'Viagem para Argentina', 16, '1000.00', '83.jpg', 'jpg', '2019-05-03 01:27:00'),
(81, 'Viagem para Europa', 16, '1900.00', '84.jpg', 'jpg', '2019-05-03 01:27:00'),
(82, 'Viagem para Nova York', 16, '1800.00', '85.jpg', 'jpg', '2019-05-03 01:27:00'),
(83, 'Viagem pela Amazônia', 16, '1200.00', '86.jpg', 'jpg', '2019-05-03 01:27:00'),
(84, 'Viagem pela América Latina', 16, '1600.00', '87.jpg', 'jpg', '2019-05-03 01:27:00'),
(85, 'Visita às praias do Nordeste', 16, '1300.00', '88.jpg', 'jpg', '2019-05-03 01:27:00'),
(86, 'Cadeiras', 17, '100.00', '89.jpg', 'jpg', '2019-05-03 01:27:00'),
(87, 'Closet', 17, '2000.00', '90.jpg', 'jpg', '2019-05-03 01:27:00'),
(88, 'Mesa de Jantar', 17, '400.00', '91.jpg', 'jpg', '2019-05-03 01:27:00'),
(89, 'Mesa de sinuca', 17, '1000.00', '92.jpg', 'jpg', '2019-05-03 01:27:00'),
(90, 'Mesa escritório', 17, '800.00', '93.jpg', 'jpg', '2019-05-03 01:27:00'),
(91, 'Poltrona', 17, '300.00', '94.jpg', 'jpg', '2019-05-03 01:27:00'),
(92, 'Rack', 17, '200.00', '95.jpg', 'jpg', '2019-05-03 01:27:00'),
(93, 'Sapateira', 17, '500.00', '96.jpg', 'jpg', '2019-05-03 01:27:00'),
(94, 'Sofá', 17, '1500.00', '97.jpg', 'jpg', '2019-05-03 01:27:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_initialpages`
--

CREATE TABLE `tb_initialpages` (
  `idinitialpage` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `inparty` tinyint(4) DEFAULT NULL,
  `inbestfriends` tinyint(4) DEFAULT NULL,
  `instore` tinyint(4) DEFAULT NULL,
  `inalbum` tinyint(4) DEFAULT NULL,
  `dtregister` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_menus`
--

CREATE TABLE `tb_menus` (
  `idmenu` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `inwedding` tinyint(4) DEFAULT NULL,
  `inparty` tinyint(4) DEFAULT NULL,
  `inbestfriends` tinyint(4) DEFAULT NULL,
  `inrsvp` tinyint(4) DEFAULT NULL,
  `inmessages` tinyint(4) DEFAULT NULL,
  `instore` tinyint(4) DEFAULT NULL,
  `inevents` tinyint(4) DEFAULT NULL,
  `inalbum` tinyint(4) DEFAULT NULL,
  `invideos` tinyint(4) DEFAULT NULL,
  `instakeholders` tinyint(4) DEFAULT NULL,
  `dtregister` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_messages`
--

CREATE TABLE `tb_messages` (
  `idmessage` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `instatus` tinyint(4) NOT NULL DEFAULT '0',
  `desmessage` varchar(128) NOT NULL,
  `desemail` varchar(128) DEFAULT NULL,
  `desdescription` text NOT NULL,
  `desreply` text,
  `dtmessage` datetime NOT NULL,
  `dtreply` datetime DEFAULT NULL,
  `dtregister` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_messages`
--

INSERT INTO `tb_messages` (`idmessage`, `iduser`, `instatus`, `desmessage`, `desemail`, `desdescription`, `desreply`, `dtmessage`, `dtreply`, `dtregister`) VALUES
(13, 11, 0, 'Pedro Coimbra', 'coimbra@gmail.com', 'Felicitações amigo! Tudo de bom', 'Obrigado!!! fique com Deus vc e tio XXXxxx', '2019-12-25 23:59:59', '2020-02-24 18:25:00', '2019-04-27 16:25:56');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_orders`
--

CREATE TABLE `tb_orders` (
  `idorder` int(11) NOT NULL,
  `idcart` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `idstatus` int(11) NOT NULL,
  `idaddress` int(11) NOT NULL,
  `vltotal` decimal(10,2) NOT NULL,
  `dtregister` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_orders`
--

INSERT INTO `tb_orders` (`idorder`, `idcart`, `iduser`, `idstatus`, `idaddress`, `vltotal`, `dtregister`) VALUES
(3, 7, 11, 1, 11, '3618.16', '2019-04-24 17:04:01');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_ordersstatus`
--

CREATE TABLE `tb_ordersstatus` (
  `idstatus` int(11) NOT NULL,
  `desstatus` varchar(32) NOT NULL,
  `dtregister` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_ordersstatus`
--

INSERT INTO `tb_ordersstatus` (`idstatus`, `desstatus`, `dtregister`) VALUES
(1, 'Aguardando pagamento', '2017-09-29 14:49:51'),
(2, 'Em análise', '2017-09-29 14:49:51'),
(3, 'Paga', '2017-09-29 14:49:51'),
(4, 'Disponível', '2017-09-29 14:49:51'),
(5, 'Em disputa', '2017-09-29 14:49:51'),
(6, 'Devolvida', '2017-09-29 14:49:51'),
(7, 'Cancelada', '2017-09-29 14:49:51');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_parties`
--

CREATE TABLE `tb_parties` (
  `idparty` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `instatus` tinyint(4) DEFAULT NULL,
  `despartydescription` text,
  `despartylocation` varchar(128) DEFAULT NULL,
  `despartyphoto` varchar(256) DEFAULT NULL,
  `dtparty` datetime DEFAULT NULL,
  `dtregister` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_persons`
--

CREATE TABLE `tb_persons` (
  `idperson` int(11) NOT NULL,
  `desperson` varchar(128) NOT NULL,
  `desemail` varchar(128) DEFAULT NULL,
  `nrphone` bigint(20) DEFAULT NULL,
  `desphoto` varchar(256) DEFAULT NULL,
  `desextension` varchar(4) DEFAULT NULL,
  `dtregister` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_persons`
--

INSERT INTO `tb_persons` (`idperson`, `desperson`, `desemail`, `nrphone`, `desphoto`, `desextension`, `dtregister`) VALUES
(11, 'Jose Paulo de Carvalho', 'paulowebphp@gmail.com', 31984050000, '', '', '2019-04-24 16:59:04'),
(12, 'Paulo de Carvalho', 'pwsecvendas@gmail.com', 31984050125, NULL, NULL, '2019-05-02 20:28:12');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_products`
--

CREATE TABLE `tb_products` (
  `idproduct` int(11) NOT NULL,
  `iduser` int(11) DEFAULT NULL,
  `inbought` tinyint(4) DEFAULT NULL,
  `incategory` tinyint(4) DEFAULT NULL,
  `desproduct` varchar(64) NOT NULL,
  `vlprice` decimal(10,2) DEFAULT NULL,
  `vlwidth` decimal(10,2) DEFAULT NULL,
  `vlheight` decimal(10,2) DEFAULT NULL,
  `vllength` decimal(10,2) DEFAULT NULL,
  `vlweight` decimal(10,2) DEFAULT NULL,
  `desphoto` varchar(256) DEFAULT NULL,
  `desextension` varchar(4) DEFAULT NULL,
  `dtregister` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_products`
--

INSERT INTO `tb_products` (`idproduct`, `iduser`, `inbought`, `incategory`, `desproduct`, `vlprice`, `vlwidth`, `vlheight`, `vllength`, `vlweight`, `desphoto`, `desextension`, `dtregister`) VALUES
(95, 11, 0, 15, 'Passeio de Jet Ski', '2500.00', NULL, NULL, NULL, NULL, '111195.jpg', 'jpg', '2019-05-05 00:37:35'),
(96, 11, NULL, 11, 'Adega', '1000.00', NULL, NULL, NULL, NULL, '111196.jpg', 'jpg', '2019-05-05 02:53:39'),
(97, 11, NULL, 11, 'Cacha?a Artesanal', '200.00', NULL, NULL, NULL, NULL, '111197.jpg', 'jpg', '2019-05-05 02:53:43'),
(98, 11, NULL, 11, 'Champanheira de Prata', '1500.00', NULL, NULL, NULL, NULL, '111198.jpg', 'jpg', '2019-05-05 02:53:47'),
(99, 13, NULL, 11, 'Adega', '1000.00', NULL, NULL, NULL, NULL, '131199.jpg', 'jpg', '2019-05-05 02:54:10'),
(100, 13, NULL, 11, 'Adega climatizada', '2000.00', NULL, NULL, NULL, NULL, '1311100.jpg', 'jpg', '2019-05-05 02:54:14'),
(101, 13, NULL, 11, 'Tonel', '900.00', NULL, NULL, NULL, NULL, '1311101.jpg', 'jpg', '2019-05-05 02:54:21'),
(102, 13, NULL, 11, 'Licor', '250.00', NULL, NULL, NULL, NULL, '1311102.jpg', 'jpg', '2019-05-05 02:54:28'),
(103, 11, NULL, 14, 'Ar-Condicionado', '1000.00', NULL, NULL, NULL, NULL, '1111103.jpg', 'jpg', '2019-05-07 00:57:24'),
(104, 13, NULL, 11, 'Cacha?a Artesanal', '200.00', NULL, NULL, NULL, NULL, '1311104.jpg', 'jpg', '2019-05-07 00:58:36');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_productscategories`
--

CREATE TABLE `tb_productscategories` (
  `idcategory` int(11) NOT NULL,
  `idproduct` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_rsvp`
--

CREATE TABLE `tb_rsvp` (
  `idrsvp` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `desname` varchar(128) NOT NULL,
  `desemail` varchar(128) DEFAULT NULL,
  `nrphone` bigint(20) DEFAULT NULL,
  `instatus` tinyint(4) NOT NULL DEFAULT '0',
  `inconfirmed` tinyint(4) DEFAULT NULL,
  `inmaxadults` tinyint(4) DEFAULT NULL,
  `inadultsconfirmed` tinyint(4) DEFAULT NULL,
  `inmaxchildren` tinyint(4) DEFAULT NULL,
  `inchildrenconfirmed` tinyint(4) DEFAULT NULL,
  `dtconfirmed` datetime DEFAULT NULL,
  `dtregister` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_rsvp`
--

INSERT INTO `tb_rsvp` (`idrsvp`, `iduser`, `desname`, `desemail`, `nrphone`, `instatus`, `inconfirmed`, `inmaxadults`, `inadultsconfirmed`, `inmaxchildren`, `inchildrenconfirmed`, `dtconfirmed`, `dtregister`) VALUES
(11, 11, '24João24 Vicente Dornas', '242424@hotmail.com', 24998882424, 2, 0, 24, NULL, 24, NULL, NULL, '2019-04-27 14:45:32'),
(12, 11, 'Mais um ', 'paulo@gmail.com', 31984050129, 1, NULL, 1, NULL, 10, NULL, NULL, '2019-04-27 15:00:55'),
(13, 11, 'Maria do Rosário', 'rosario@rosario.com', 29888887777, 0, NULL, 10, NULL, 1, NULL, NULL, '2019-04-27 15:01:06'),
(15, 11, '55555555555555', '55555555555555', 12123451234, 5, NULL, 15, NULL, 5, NULL, NULL, '2019-05-01 01:19:04');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_stakeholders`
--

CREATE TABLE `tb_stakeholders` (
  `idstakeholder` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `instatus` tinyint(4) NOT NULL DEFAULT '1',
  `inposition` tinyint(4) DEFAULT NULL,
  `desstakeholder` varchar(128) NOT NULL,
  `desdescription` text,
  `descategory` varchar(128) DEFAULT NULL,
  `deslocation` varchar(128) DEFAULT NULL,
  `desemail` varchar(128) NOT NULL,
  `dessite` varchar(128) NOT NULL,
  `nrphone` bigint(20) DEFAULT NULL,
  `dtregister` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_stakeholders`
--

INSERT INTO `tb_stakeholders` (`idstakeholder`, `iduser`, `instatus`, `inposition`, `desstakeholder`, `desdescription`, `descategory`, `deslocation`, `desemail`, `dessite`, `nrphone`, `dtregister`) VALUES
(11, 11, 2, 2, 'Junior Fotografo', 'Esse2 cara é fera, adoro seus cortes de cabelo', '2', 'Avenida Sergipe, 190', 'junior2@junior.junior', 'http://www.youtube2.com', 21999998888, '2019-04-26 23:51:09'),
(12, 11, 1, 2, 'Mais um', 'Nos 2 conhecemos há 2 anos enos apaixonamos e hoje finalmente chegou o grande dia de consumar a união', '2', '', 'rosario@rosario.com', 'http://www.youtube2.com', 31984050126, '2019-05-01 01:11:52'),
(13, 11, 7, 1, 'Mais um', 'Descrição teste', '2', '', 'rosario@rosario.com', 'http://www.youtube2.com', 31984050129, '2019-05-01 01:47:16');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_users`
--

CREATE TABLE `tb_users` (
  `iduser` int(11) NOT NULL,
  `idperson` int(11) NOT NULL,
  `deslogin` varchar(64) NOT NULL,
  `despassword` varchar(256) NOT NULL,
  `inadmin` tinyint(4) NOT NULL DEFAULT '0',
  `instatus` tinyint(4) NOT NULL DEFAULT '0',
  `inplan` int(3) NOT NULL DEFAULT '0',
  `desurl` varchar(128) DEFAULT NULL,
  `descpf` varchar(14) DEFAULT NULL,
  `dtbirthday` datetime DEFAULT NULL,
  `dtplanbegin` datetime DEFAULT NULL,
  `dtplanend` datetime DEFAULT NULL,
  `dtregister` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_users`
--

INSERT INTO `tb_users` (`iduser`, `idperson`, `deslogin`, `despassword`, `inadmin`, `instatus`, `inplan`, `desurl`, `descpf`, `dtbirthday`, `dtplanbegin`, `dtplanend`, `dtregister`) VALUES
(11, 11, 'paulowebphp@gmail.com', '$2y$12$jYbcHfoWsKGtdWfB7EVgnu73w/ophUt8xY3GpK.9X7KIEp108zdK.', 1, 1, 312, 'paulowebphp', '01224202686', '1980-02-23 16:30:00', NULL, '0000-00-00 00:00:00', '2019-04-24 17:00:33'),
(13, 12, 'pwsecvendas@gmail.com', '$2y$12$jYbcHfoWsKGtdWfB7EVgnu73w/ophUt8xY3GpK.9X7KIEp108zdK.', 1, 1, 312, 'pwsecvendas', NULL, '1981-02-25 18:30:00', NULL, NULL, '2019-05-02 20:29:22');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_userslogs`
--

CREATE TABLE `tb_userslogs` (
  `idlog` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `deslog` varchar(128) NOT NULL,
  `desip` varchar(45) NOT NULL,
  `desuseragent` varchar(128) NOT NULL,
  `dessessionid` varchar(64) NOT NULL,
  `desurl` varchar(128) NOT NULL,
  `dtregister` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_userspasswordsrecoveries`
--

CREATE TABLE `tb_userspasswordsrecoveries` (
  `idrecovery` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `desip` varchar(45) NOT NULL,
  `dtrecovery` datetime DEFAULT NULL,
  `dtregister` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_videos`
--

CREATE TABLE `tb_videos` (
  `idvideo` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `instatus` tinyint(4) NOT NULL DEFAULT '1',
  `inposition` tinyint(4) DEFAULT NULL,
  `desvideo` varchar(128) DEFAULT NULL,
  `desdescription` text,
  `desthumbnail` varchar(256) DEFAULT NULL,
  `desurl` varchar(128) NOT NULL,
  `dtregister` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_videos`
--

INSERT INTO `tb_videos` (`idvideo`, `iduser`, `instatus`, `inposition`, `desvideo`, `desdescription`, `desthumbnail`, `desurl`, `dtregister`) VALUES
(11, 11, 2, 12, 'Vide2o da despedida de solteiro', 'Vid2eo engraçadissimo sobre a despedida de solteiro que fizemos no Stadt Jever', '', 'http://www.yo2utube.com', '2019-04-27 19:17:09'),
(12, 11, 7, 1, 'Video 1111', 'video 1111 descr', NULL, 'paulowebphp2', '2019-05-01 01:18:43');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_weddings`
--

CREATE TABLE `tb_weddings` (
  `idwedding` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `desweddingdescription` text,
  `desweddinglocation` varchar(128) DEFAULT NULL,
  `desweddingphoto` varchar(256) DEFAULT NULL,
  `dtwedding` datetime DEFAULT NULL,
  `dtregister` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_weddings`
--

INSERT INTO `tb_weddings` (`idwedding`, `iduser`, `desweddingdescription`, `desweddinglocation`, `desweddingphoto`, `dtwedding`, `dtregister`) VALUES
(11, 11, 'Casamento vai bombar', 'Igreja de Boa Lourdes', NULL, '2019-08-30 12:30:00', '2019-04-24 18:53:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_addresses`
--
ALTER TABLE `tb_addresses`
  ADD PRIMARY KEY (`idaddress`),
  ADD KEY `fk_addresses_persons_idx` (`idperson`);

--
-- Indexes for table `tb_albuns`
--
ALTER TABLE `tb_albuns`
  ADD PRIMARY KEY (`idimage`),
  ADD KEY `fk_images_users_idx` (`iduser`);

--
-- Indexes for table `tb_bestfriends`
--
ALTER TABLE `tb_bestfriends`
  ADD PRIMARY KEY (`idbestfriend`),
  ADD KEY `fk_bestfriends_users_idx` (`iduser`);

--
-- Indexes for table `tb_carts`
--
ALTER TABLE `tb_carts`
  ADD PRIMARY KEY (`idcart`),
  ADD KEY `FK_carts_users_idx` (`iduser`);

--
-- Indexes for table `tb_cartsproducts`
--
ALTER TABLE `tb_cartsproducts`
  ADD PRIMARY KEY (`idcartproduct`);

--
-- Indexes for table `tb_categories`
--
ALTER TABLE `tb_categories`
  ADD PRIMARY KEY (`idcategory`);

--
-- Indexes for table `tb_consorts`
--
ALTER TABLE `tb_consorts`
  ADD PRIMARY KEY (`idconsort`);

--
-- Indexes for table `tb_customstyle`
--
ALTER TABLE `tb_customstyle`
  ADD PRIMARY KEY (`idcustomstyle`);

--
-- Indexes for table `tb_events`
--
ALTER TABLE `tb_events`
  ADD PRIMARY KEY (`idevent`),
  ADD KEY `fk_events_users_idx` (`iduser`);

--
-- Indexes for table `tb_gifts`
--
ALTER TABLE `tb_gifts`
  ADD PRIMARY KEY (`idgift`);

--
-- Indexes for table `tb_initialpages`
--
ALTER TABLE `tb_initialpages`
  ADD PRIMARY KEY (`idinitialpage`);

--
-- Indexes for table `tb_menus`
--
ALTER TABLE `tb_menus`
  ADD PRIMARY KEY (`idmenu`);

--
-- Indexes for table `tb_messages`
--
ALTER TABLE `tb_messages`
  ADD PRIMARY KEY (`idmessage`),
  ADD KEY `fk_messages_users_idx` (`iduser`);

--
-- Indexes for table `tb_orders`
--
ALTER TABLE `tb_orders`
  ADD PRIMARY KEY (`idorder`),
  ADD KEY `FK_orders_users_idx` (`iduser`),
  ADD KEY `fk_orders_ordersstatus_idx` (`idstatus`),
  ADD KEY `fk_orders_carts_idx` (`idcart`),
  ADD KEY `fk_orders_addresses_idx` (`idaddress`);

--
-- Indexes for table `tb_ordersstatus`
--
ALTER TABLE `tb_ordersstatus`
  ADD PRIMARY KEY (`idstatus`);

--
-- Indexes for table `tb_parties`
--
ALTER TABLE `tb_parties`
  ADD PRIMARY KEY (`idparty`);

--
-- Indexes for table `tb_persons`
--
ALTER TABLE `tb_persons`
  ADD PRIMARY KEY (`idperson`);

--
-- Indexes for table `tb_products`
--
ALTER TABLE `tb_products`
  ADD PRIMARY KEY (`idproduct`);

--
-- Indexes for table `tb_productscategories`
--
ALTER TABLE `tb_productscategories`
  ADD PRIMARY KEY (`idcategory`,`idproduct`),
  ADD KEY `fk_productscategories_products_idx` (`idproduct`);

--
-- Indexes for table `tb_rsvp`
--
ALTER TABLE `tb_rsvp`
  ADD PRIMARY KEY (`idrsvp`),
  ADD KEY `fk_rsvp_users_idx` (`iduser`);

--
-- Indexes for table `tb_stakeholders`
--
ALTER TABLE `tb_stakeholders`
  ADD PRIMARY KEY (`idstakeholder`),
  ADD KEY `fk_stakeholders_users_idx` (`iduser`);

--
-- Indexes for table `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`iduser`),
  ADD KEY `FK_users_persons_idx` (`idperson`);

--
-- Indexes for table `tb_userslogs`
--
ALTER TABLE `tb_userslogs`
  ADD PRIMARY KEY (`idlog`),
  ADD KEY `fk_userslogs_users_idx` (`iduser`);

--
-- Indexes for table `tb_userspasswordsrecoveries`
--
ALTER TABLE `tb_userspasswordsrecoveries`
  ADD PRIMARY KEY (`idrecovery`),
  ADD KEY `fk_userspasswordsrecoveries_users_idx` (`iduser`);

--
-- Indexes for table `tb_videos`
--
ALTER TABLE `tb_videos`
  ADD PRIMARY KEY (`idvideo`),
  ADD KEY `fk_videos_users_idx` (`iduser`);

--
-- Indexes for table `tb_weddings`
--
ALTER TABLE `tb_weddings`
  ADD PRIMARY KEY (`idwedding`),
  ADD KEY `fk_weddings_users_idx` (`iduser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_addresses`
--
ALTER TABLE `tb_addresses`
  MODIFY `idaddress` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tb_albuns`
--
ALTER TABLE `tb_albuns`
  MODIFY `idimage` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tb_bestfriends`
--
ALTER TABLE `tb_bestfriends`
  MODIFY `idbestfriend` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=423;

--
-- AUTO_INCREMENT for table `tb_carts`
--
ALTER TABLE `tb_carts`
  MODIFY `idcart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=156;

--
-- AUTO_INCREMENT for table `tb_cartsproducts`
--
ALTER TABLE `tb_cartsproducts`
  MODIFY `idcartproduct` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;

--
-- AUTO_INCREMENT for table `tb_categories`
--
ALTER TABLE `tb_categories`
  MODIFY `idcategory` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_consorts`
--
ALTER TABLE `tb_consorts`
  MODIFY `idconsort` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_customstyle`
--
ALTER TABLE `tb_customstyle`
  MODIFY `idcustomstyle` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tb_events`
--
ALTER TABLE `tb_events`
  MODIFY `idevent` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `tb_gifts`
--
ALTER TABLE `tb_gifts`
  MODIFY `idgift` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT for table `tb_menus`
--
ALTER TABLE `tb_menus`
  MODIFY `idmenu` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_messages`
--
ALTER TABLE `tb_messages`
  MODIFY `idmessage` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tb_orders`
--
ALTER TABLE `tb_orders`
  MODIFY `idorder` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_ordersstatus`
--
ALTER TABLE `tb_ordersstatus`
  MODIFY `idstatus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_parties`
--
ALTER TABLE `tb_parties`
  MODIFY `idparty` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_persons`
--
ALTER TABLE `tb_persons`
  MODIFY `idperson` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_products`
--
ALTER TABLE `tb_products`
  MODIFY `idproduct` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT for table `tb_rsvp`
--
ALTER TABLE `tb_rsvp`
  MODIFY `idrsvp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tb_stakeholders`
--
ALTER TABLE `tb_stakeholders`
  MODIFY `idstakeholder` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tb_userslogs`
--
ALTER TABLE `tb_userslogs`
  MODIFY `idlog` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_userspasswordsrecoveries`
--
ALTER TABLE `tb_userspasswordsrecoveries`
  MODIFY `idrecovery` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_videos`
--
ALTER TABLE `tb_videos`
  MODIFY `idvideo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_weddings`
--
ALTER TABLE `tb_weddings`
  MODIFY `idwedding` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `tb_addresses`
--
ALTER TABLE `tb_addresses`
  ADD CONSTRAINT `fk_addresses_persons` FOREIGN KEY (`idperson`) REFERENCES `tb_persons` (`idperson`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `tb_albuns`
--
ALTER TABLE `tb_albuns`
  ADD CONSTRAINT `fk_images_users` FOREIGN KEY (`iduser`) REFERENCES `tb_users` (`iduser`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `tb_bestfriends`
--
ALTER TABLE `tb_bestfriends`
  ADD CONSTRAINT `fk_bestfriends_users` FOREIGN KEY (`iduser`) REFERENCES `tb_users` (`iduser`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `tb_events`
--
ALTER TABLE `tb_events`
  ADD CONSTRAINT `fk_events_users` FOREIGN KEY (`iduser`) REFERENCES `tb_users` (`iduser`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `tb_messages`
--
ALTER TABLE `tb_messages`
  ADD CONSTRAINT `fk_messages_users` FOREIGN KEY (`iduser`) REFERENCES `tb_users` (`iduser`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `tb_orders`
--
ALTER TABLE `tb_orders`
  ADD CONSTRAINT `fk_orders_addresses` FOREIGN KEY (`idaddress`) REFERENCES `tb_addresses` (`idaddress`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_orders_carts` FOREIGN KEY (`idcart`) REFERENCES `tb_carts` (`idcart`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_orders_ordersstatus` FOREIGN KEY (`idstatus`) REFERENCES `tb_ordersstatus` (`idstatus`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_orders_users` FOREIGN KEY (`iduser`) REFERENCES `tb_users` (`iduser`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `tb_productscategories`
--
ALTER TABLE `tb_productscategories`
  ADD CONSTRAINT `fk_productscategories_categories` FOREIGN KEY (`idcategory`) REFERENCES `tb_categories` (`idcategory`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_productscategories_products` FOREIGN KEY (`idproduct`) REFERENCES `tb_products` (`idproduct`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `tb_rsvp`
--
ALTER TABLE `tb_rsvp`
  ADD CONSTRAINT `fk_rsvp_users` FOREIGN KEY (`iduser`) REFERENCES `tb_users` (`iduser`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `tb_stakeholders`
--
ALTER TABLE `tb_stakeholders`
  ADD CONSTRAINT `fk_stakeholders_users` FOREIGN KEY (`iduser`) REFERENCES `tb_users` (`iduser`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `tb_users`
--
ALTER TABLE `tb_users`
  ADD CONSTRAINT `fk_users_persons` FOREIGN KEY (`idperson`) REFERENCES `tb_persons` (`idperson`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `tb_userslogs`
--
ALTER TABLE `tb_userslogs`
  ADD CONSTRAINT `fk_userslogs_users` FOREIGN KEY (`iduser`) REFERENCES `tb_users` (`iduser`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `tb_userspasswordsrecoveries`
--
ALTER TABLE `tb_userspasswordsrecoveries`
  ADD CONSTRAINT `fk_userspasswordsrecoveries_users` FOREIGN KEY (`iduser`) REFERENCES `tb_users` (`iduser`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `tb_videos`
--
ALTER TABLE `tb_videos`
  ADD CONSTRAINT `fk_videos_users` FOREIGN KEY (`iduser`) REFERENCES `tb_users` (`iduser`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `tb_weddings`
--
ALTER TABLE `tb_weddings`
  ADD CONSTRAINT `fk_weddings_users` FOREIGN KEY (`iduser`) REFERENCES `tb_users` (`iduser`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
