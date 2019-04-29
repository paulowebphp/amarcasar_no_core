CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_videosupdate_save`(
pidvideo int(11),
piduser int(11),
pinstatus tinyint,
pinposition tinyint,
pdesvideo varchar(128),
pdesdescription text,
pdesthumbnail varchar(256),
pdesurl varchar(128)
)
BEGIN
	
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
    
END