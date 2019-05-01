CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_weddings_update`(
pidwedding INT(11),
piduser INT(11),
pdesweddingdescription TEXT,
pdesweddinglocation VARCHAR(128),
pdesweddingphoto VARCHAR(256),
pdtwedding DATETIME
)
BEGIN
    
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
    
END