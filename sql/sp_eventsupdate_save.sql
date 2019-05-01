CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_eventsupdate_save`(
pidevent int(11),
piduser int(11),
pinstatus tinyint,
pdesevent varchar(128),
pdesdescription text,
pdeslocation varchar(128),
pnrphone bigint(20),
pdesphoto varchar(256),
pdtevent datetime
)
BEGIN
	
	IF pidevent > 0 THEN
		
		UPDATE tb_events
        SET           
			instatus = pinstatus,
			desevent = pdesevent,
			desdescription = pdesdescription,
			deslocation = pdeslocation,
            nrphone = pnrphone,
			desphoto = pdesphoto,
			dtevent = pdtevent
		WHERE idevent = pidevent;
        
    ELSE
    
		INSERT INTO tb_events (iduser,
			instatus,
			desevent,
			desdescription,
			deslocation,
            nrphone,
			desphoto,
			dtevent)
        VALUES(piduser,
			pinstatus,
			pdesevent,
			pdesdescription,
			pdeslocation,
            pnrphone,
			pdesphoto,
			pdtevent);
		
		SET pidevent = LAST_INSERT_ID();
        
    END IF;
    
    SELECT * 
    FROM tb_events a
    INNER JOIN tb_users d 
    ON d.iduser = a.iduser
    WHERE idevent = pidevent;
    
END