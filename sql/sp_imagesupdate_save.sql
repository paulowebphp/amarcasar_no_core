CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_imagesupdate_save`(
pidimage int(11),
piduser int(11),
pinstatus tinyint,
pinposition tinyint,
pdesimage varchar(128),
pdesdescription text,
pdesphoto_0 varchar(256),
pdesphoto_1 varchar(256)
)
BEGIN
    
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
    
END