CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_eventsupdate_save`(
pidevent int(11),
piduser int(11),
pinstatus tinyint,
pdestitle varchar(128),
pdesdescription text,
pdeslocation varchar(128),
pdesphoto varchar(256),
pdesthumbnail varchar(256),
pdesphoto2 varchar(256),
pdesthumbnail2 varchar(256),
pdesphoto3 varchar(256),
pdesthumbnail3 varchar(256),
pdesphoto4 varchar(256),
pdesthumbnail4 varchar(256),
pdesphoto5 varchar(256),
pdesthumbnail5 varchar(256),
pnrphone bigint(20),
pdtevent datetime
)
BEGIN
	
	IF pidevent > 0 THEN
		
		UPDATE tb_events
        SET           
			instatus = pinstatus,
			destitle = pdestitle,
			desdescription = pdesdescription,
			deslocation = pdeslocation,
			desphoto = pdesphoto,
			desthumbnail = pdesthumbnail,
			desphoto2 = pdesphoto2,
			desthumbnail2 = pdesthumbnail2,
			desphoto3 = pdesphoto3,
			desthumbnail3 = pdesthumbnail3,
			desphoto4 = pdesphoto4,
			desthumbnail4 = pdesthumbnail4,
			desphoto5 = pdesphoto5,
			desthumbnail5 = pdesthumbnail5,
			nrphone = pnrphone,
			dtevent = pdtevent
		WHERE idevent = pidevent;
        
    ELSE
    
		INSERT INTO tb_events (iduser,
			instatus,
			destitle,
			desdescription,
			deslocation,
			desphoto,
			desthumbnail,
			desphoto2,
			desthumbnail2,
			desphoto3,
			desthumbnail3,
			desphoto4,
			desthumbnail4,
			desphoto5,
			desthumbnail5,
			nrphone,
			dtevent)
        VALUES(piduser,
			pinstatus,
			pdestitle,
			pdesdescription,
			pdeslocation,
			pdesphoto,
			pdesthumbnail,
			pdesphoto2,
			pdesthumbnail2,
			pdesphoto3,
			pdesthumbnail3,
			pdesphoto4,
			pdesthumbnail4,
			pdesphoto5,
			pdesthumbnail5,
			pnrphone,
			pdtevent);
		
		SET pidevent = LAST_INSERT_ID();
        
    END IF;
    
    SELECT * 
    FROM tb_events a
    INNER JOIN tb_users d 
    ON d.iduser = a.iduser
    WHERE idevent = pidevent;
    
END