CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_stakeholdersupdate_save`(
pidstakeholder int(11),
piduser int(11),
pinstatus tinyint,
pinposition tinyint,
pdesstakeholder varchar(128),
pdescategory varchar(128),
pdeslocation varchar(128),
pdessite varchar(128),
pdesemail varchar(128),
pdesdescription text,
pdesphoto varchar(128),
pdesthumbnail varchar(128),
pnrphone bigint(20)
)
BEGIN
	
	IF pidstakeholder > 0 THEN
		
		UPDATE tb_stakeholders
        SET           
			instatus = pinstatus,
			inposition = pinposition,
			desstakeholder = pdesstakeholder,
			descategory = pdescategory,
			deslocation = pdeslocation,
			dessite = pdessite,
			desemail = pdesemail,
			desdescription = pdesdescription,
			desphoto = pdesphoto,
			desthumbnail = pdesthumbnail,
			nrphone = pnrphone
		WHERE idstakeholder = pidstakeholder;
        
    ELSE
    
		INSERT INTO tb_stakeholders (iduser,
                instatus,
                inposition,
                desstakeholder,
                descategory,
                deslocation,
                dessite,
                desemail,
                desdescription,
                desphoto,
                desthumbnail,
                nrphone)
        VALUES(piduser,
                pinstatus,
                pinposition,
                pdesstakeholder,
                pdescategory,
                pdeslocation,
                pdessite,
                pdesemail,
                pdesdescription,
                pdesphoto,
                pdesthumbnail,
                pnrphone);
		
		SET pidstakeholder = LAST_INSERT_ID();
        
    END IF;
    
    SELECT * 
    FROM tb_stakeholders a
    INNER JOIN tb_users d 
    ON d.iduser = a.iduser
    WHERE idstakeholder = pidstakeholder;
    
END