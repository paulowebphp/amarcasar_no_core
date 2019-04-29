CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_customstyle_update`(
pidcustomstyle int(11),
piduser int(11),
pidtemplate int(11),
pdesbanner varchar(256),
pdescolorheader varchar(10),
pdescolorheadertext varchar(10),
pdescolorheaderhover varchar(10),
pdescolorfooter varchar(10),
pdescolorfootertext varchar(10),
pdescolorfooterhover varchar(10),
pdescolorh1 varchar(10),
pdesfontfamilyh1 varchar(64),
pdesfontsizeh1 varchar(10),
pdescolorh2 varchar(10),
pdesfontfamilyh2 varchar(64),
pdesfontsizeh2 varchar(10),
pdescolorh3 varchar(10),
pdesfontfamilyh3 varchar(64),
pdesfontsizeh3 varchar(10),
pdescolortext varchar(10),
pdesfontfamilytext varchar(64),
pdesfontsizetext varchar(10)
)
BEGIN
	
	IF pidcustomstyle > 0 THEN
		
		UPDATE tb_customstyle
        SET
			idtemplate = pidtemplate,
			desbanner = pdesbanner,
			descolorheader = pdescolorheader,
			descolorheadertext = pdescolorheadertext,
			descolorheaderhover = pdescolorheaderhover,
			descolorfooter = pdescolorfooter,
			descolorfootertext = pdescolorfootertext,
			descolorfooterhover = pdescolorfooterhover,
			descolorh1 = pdescolorh1,
			desfontfamilyh1 = pdesfontfamilyh1,
			desfontsizeh1 = pdesfontsizeh1,
			descolorh2 = pdescolorh2,
			desfontfamilyh2 = pdesfontfamilyh2,
			desfontsizeh2 = pdesfontsizeh2,
			descolorh3 = pdescolorh3,
			desfontfamilyh3 = pdesfontfamilyh3,
			desfontsizeh3 = pdesfontsizeh3,
			descolortext = pdescolortext,
			desfontfamilytext = pdesfontfamilytext,
			desfontsizetext = pdesfontsizetext
		WHERE iduser = piduser;
        
    ELSE
    
		INSERT INTO tb_stories (iduser,
                idtemplate,
                desbanner,
                descolorheader,
                descolorheadertext,
                descolorheaderhover,
                descolorfooter,
                descolorfootertext,
                descolorfooterhover,
                descolorh1,
                desfontfamilyh1,
                desfontsizeh1,
                descolorh2,
                desfontfamilyh2,
                desfontsizeh2,
                descolorh3,
                desfontfamilyh3,
                desfontsizeh3,
                descolortext,
                desfontfamilytext,
                desfontsizetext)
        VALUES(piduser,
                pidtemplate,
                pdesbanner,
                pdescolorheader,
                pdescolorheadertext,
                pdescolorheaderhover,
                pdescolorfooter,
                pdescolorfootertext,
                pdescolorfooterhover,
                pdescolorh1,
                pdesfontfamilyh1,
                pdesfontsizeh1,
                pdescolorh2,
                pdesfontfamilyh2,
                pdesfontsizeh2,
                pdescolorh3,
                pdesfontfamilyh3,
                pdesfontsizeh3,
                pdescolortext,
                pdesfontfamilytext,
                pdesfontsizetext);
		
		SET pidcustomstyle = LAST_INSERT_ID();
        
    END IF;
    
    SELECT * 
    FROM tb_customstyle a
    INNER JOIN tb_users d ON d.iduser = a.iduser
    WHERE idcustomstyle = pidcustomstyle;
    
END