CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_rsvpupdate_save`(
pidrsvp int(11),
piduser int(11),
pdesname varchar(128),
pdesemail varchar(128),
pnrphone bigint(20),
pinstatus tinyint,
pinconfirmed tinyint,
pinmaxadults tinyint,
pinadultsconfirmed tinyint,
pinmaxchildren tinyint,
pinchildrenconfirmed tinyint,
pdtconfirmed datetime
)
BEGIN
	
	IF pidrsvp > 0 THEN
		
		UPDATE tb_rsvp
        SET           
			desname = pdesname,
			desemail = pdesemail,
			nrphone = pnrphone,
			instatus = pinstatus,
			inconfirmed = pinconfirmed,
			inmaxadults = pinmaxadults,
			inadultsconfirmed = pinadultsconfirmed,
			inmaxchildren = pinmaxchildren,
			inchildrenconfirmed = pinchildrenconfirmed,
			dtconfirmed = pdtconfirmed
		WHERE idrsvp = pidrsvp;
        
    ELSE
    
		INSERT INTO tb_rsvp (iduser,
                desname,
                desemail,
                nrphone,
                instatus,
                inconfirmed,
                inmaxadults,
                inadultsconfirmed,
                inmaxchildren,
                inchildrenconfirmed,
                dtconfirmed)
        VALUES(piduser,
                pdesname,
                pdesemail,
                pnrphone,
                pinstatus,
                pinconfirmed,
                pinmaxadults,
                pinadultsconfirmed,
                pinmaxchildren,
                pinchildrenconfirmed,
                pdtconfirmed);
		
		SET pidrsvp = LAST_INSERT_ID();
        
    END IF;
    
    SELECT * 
    FROM tb_rsvp a
    INNER JOIN tb_users d 
    ON d.iduser = a.iduser
    WHERE idrsvp = pidrsvp;
    
END