CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_weddingsupdate_save`(
pidwedding INT(11),
piduser INT(11),
pdesconsortname VARCHAR(128),
pdtwedding DATETIME,
pdesweddinglocation VARCHAR(128),
pdesweddingdescription TEXT,
pdtparty DATETIME,
pdespartylocation VARCHAR(128),
pdespartydescription TEXT
)
BEGIN
	
	IF pidwedding > 0 THEN
		
		UPDATE tb_weddings
        SET
			desconsortname = pdesconsortname,
            dtwedding = pdtwedding,
            desweddinglocation = pdesweddinglocation,
            desweddingdescription = pdesweddingdescription,
            dtparty = pdtparty,
            despartylocation = pdespartylocation,
            despartydescription = pdespartydescription
		WHERE iduser = piduser;
        
    ELSE
    
		INSERT INTO tb_weddings (iduser, desconsortname, dtwedding, desweddinglocation, dtparty, despartylocation, despartydescription)
        VALUES(piduser, pdesconsortname, pdtwedding, pdesweddinglocation, pdtparty, pdespartylocation, pdespartydescription);
		
		SET pidwedding = LAST_INSERT_ID();
        
    END IF;
    
    SELECT * 
    FROM tb_weddings a
    INNER JOIN tb_users d ON d.iduser = a.iduser
    WHERE idwedding = pidwedding;
    
END