CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_bestfriends_update`(
pidbestfriend int(11),
piduser int(11),
pinstatus tinyint,
pinposition tinyint,
pdesbestfriend varchar(128),
pdesdescription text,
pdesphoto varchar(256)
)
BEGIN
	
	IF pidbestfriend > 0 THEN
		
		UPDATE tb_bestfriends
        SET           
			instatus = pinstatus,
			inposition = pinposition,
			desbestfriend = pdesbestfriend,
			desdescription = pdesdescription,
			desphoto = pdesphoto
		WHERE idbestfriend = pidbestfriend;
        
    ELSE
    
		INSERT INTO tb_bestfriends (iduser,
                instatus,
                inposition,
                desbestfriend,
                desdescription,
                desphoto)
        VALUES(piduser,
                pinstatus,
                pinposition,
                pdesbestfriend,
                pdesdescription,
                pdesphoto);
		
		SET pidbestfriend = LAST_INSERT_ID();
        
    END IF;
    
    SELECT * 
    FROM tb_bestfriends a
    INNER JOIN tb_users d 
    ON d.iduser = a.iduser
    WHERE idbestfriend = pidbestfriend;
    
END