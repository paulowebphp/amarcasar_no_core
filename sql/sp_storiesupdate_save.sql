CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_storiesupdate_save`(
pidstory INT(11),
piduser INT(11),
pinstatus TINYINT,
pinposition TINYINT,
pdesstory VARCHAR(128),
pdesdescription TEXT,
pdesphoto VARCHAR(256),
pdesthumbnail VARCHAR(256),
pdesphoto2 VARCHAR(256),
pdesthumbnail2 VARCHAR(256),
pdesphoto3 VARCHAR(256),
pdesthumbnail3 VARCHAR(256),
pdesphoto4 VARCHAR(256),
pdesthumbnail4 VARCHAR(256),
pdesphoto5 VARCHAR(256),
pdesthumbnail5 VARCHAR(256)
)
BEGIN
	
	IF pidstory > 0 THEN
		
		UPDATE tb_stories
        SET
			instatus = pinstatus,
            inposition = pinposition,
            desstory = pdesstory,
            desdescription = pdesdescription,
            desphoto = pdesphoto,
            desthumbnail = pdesthumbnail,
            desphoto2 = pdesphoto2,
            desthumbnail2 = pdesthumbnail2,
            desphoto3 = pdesphoto3,
            desthumbnail3 = pdesthumbnail3,
            desphoto4 = pdesphoto4,
            desthumbnail4 = pdesthumbnail4,
            desphoto5 = pdesphoto5,
            desthumbnail5 = pdesthumbnail5
		WHERE iduser = piduser;
        
    ELSE
    
		INSERT INTO tb_stories (iduser, instatus, inposition, desstory, desdescription, desphoto, desthumbnail,desphoto2, desthumbnail2, desphoto3, desthumbnail3, desphoto4, desthumbnail4, desphoto5, desthumbnail5)
        VALUES(piduser, pinstatus, pinposition, pdesstory, pdesdescription, pdesphoto, pdesthumbnail, pdesphoto2, pdesthumbnail2, pdesphoto3, pdesthumbnail3, pdesphoto4, pdesthumbnail4, pdesphoto5, pdesthumbnail5);
		
		SET pidstory = LAST_INSERT_ID();
        
    END IF;
    
    SELECT * 
    FROM tb_stories a
    INNER JOIN tb_users d ON d.iduser = a.iduser
    WHERE idstory = pidstory;
    
END