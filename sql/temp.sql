CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_imagesupdate_save`(
pidimage int(11),
piduser int(11),
pimastatus tinyint,
pimaposition tinyint,
pimatitle varchar(128),
pimadescription text,
pimaphoto varchar(256),
pimathumbnail varchar(256)
)
BEGIN
    
    IF pidimage > 0 THEN
        
        UPDATE tb_images
        SET           
            imastatus = pimastatus,
            imaposition = pimaposition,
            imatitle = pimatitle,
            imadescription = pimadescription,
            imaphoto = pimaphoto,
            imathumbnail = pimathumbnail
        WHERE idimage = pidimage;
        
    ELSE
    
        INSERT INTO tb_images (iduser,
                imastatus,
                imaposition,
                imatitle,
                imadescription,
                imaphoto,
                imathumbnail)
        VALUES(piduser,
                pimastatus,
                pimaposition,
                pimatitle,
                pimadescription,
                pimaphoto,
                pimathumbnail);
        
        SET pidimage = LAST_INSERT_ID();
        
    END IF;
    
    SELECT * 
    FROM tb_images a
    INNER JOIN tb_users d 
    ON d.iduser = a.iduser
    WHERE idimage = pidimage;
    
END