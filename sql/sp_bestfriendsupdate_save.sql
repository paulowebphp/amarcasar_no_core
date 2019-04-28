CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_bestfriendsupdate_save`(
pidbestfriend int(11),
piduser int(11),
pinstatus tinyint,
pinposition tinyint,
pdestitle varchar(128),
pdesdescription text,
pdesphoto varchar(256),
pdesthumbnail varchar(256)
)
BEGIN
	
	IF pidbestfriend > 0 THEN
		
		UPDATE tb_bestfriends
        SET           
			instatus = pinstatus,
			inposition = pinposition,
			destitle = pdestitle,
			desdescription = pdesdescription,
			desphoto = pdesphoto,
			desthumbnail = pdesthumbnail
		WHERE idbestfriend = pidbestfriend;
        
    ELSE
    
		INSERT INTO tb_bestfriends (iduser,
                instatus,
                inposition,
                destitle,
                desdescription,
                desphoto,
                desthumbnail)
        VALUES(piduser,
                pinstatus,
                inposition,
                destitle,
                desdescription,
                pdesphoto,
                pdesthumbnail);
		
		SET pidbestfriend = LAST_INSERT_ID();
        
    END IF;
    
    SELECT * 
    FROM tb_bestfriends a
    INNER JOIN tb_users d 
    ON d.iduser = a.iduser
    WHERE idbestfriend = pidbestfriend;
    
END