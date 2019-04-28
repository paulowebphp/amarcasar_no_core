CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_imagesupdate_save`(
pidimage int(11),
piduser int(11),
pinstatus tinyint,
pinposition tinyint,
pdestitle varchar(128),
pdesdescription text,
pdesphoto varchar(256),
pdesthumbnail varchar(256)
)
BEGIN
    
    IF pidimage > 0 THEN
        
        UPDATE tb_images
        SET           
            instatus = pinstatus,
            inposition = pinposition,
            destitle = pdestitle,
            desdescription = pdesdescription,
            desphoto = pdesphoto,
            desthumbnail = pdesthumbnail
        WHERE idimage = pidimage;
        
    ELSE
    
        INSERT INTO tb_images (iduser,
                instatus,
                inposition,
                destitle,
                desdescription,
                desphoto,
                desthumbnail)
        VALUES(piduser,
                pinstatus,
                pinposition,
                pdestitle,
                pdesdescription,
                pdesphoto,
                pdesthumbnail);
        
        SET pidimage = LAST_INSERT_ID();
        
    END IF;
    
    SELECT * 
    FROM tb_images a
    INNER JOIN tb_users d 
    ON d.iduser = a.iduser
    WHERE idimage = pidimage;
    
END