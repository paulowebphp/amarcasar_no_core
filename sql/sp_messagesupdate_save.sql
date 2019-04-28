CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_messagesupdate_save`(
pidmessage int(11),
piduser int(11),
pinstatus tinyint,
pdestitle varchar(128),
pdesemail varchar(128),
pdesdescription text,
pdesreply text,
pdtmessage datetime,
pdtreply datetime
)
BEGIN
    
    IF pidmessage > 0 THEN
        
        UPDATE tb_messages
        SET           
            instatus = pinstatus,
            destitle = pdestitle,
            desemail = pdesemail,
            desdescription = pdesdescription,
            desreply = pdesreply,
            dtmessage = pdtmessage,
            dtreply = pdtreply
        WHERE idmessage = pidmessage;
        
    ELSE
    
        INSERT INTO tb_messages (iduser,
                instatus,
                destitle,
                desemail,
                desdescription,
                desreply,
                dtmessage,
                dtreply)
        VALUES(piduser,
                pinstatus,
                pdestitle,
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
    
END