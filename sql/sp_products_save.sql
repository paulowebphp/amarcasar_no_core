CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_products_update`(
pidproduct int(11),
piduser int(11),
pinbought tinyint,
pincategory tinyint,
pdesproduct varchar(64),
pvlprice decimal(10,2),
pvlwidth decimal(10,2),
pvlheight decimal(10,2),
pvllength decimal(10,2),
pvlweight decimal(10,2),
pdesphoto varchar(256),
pdesextension varchar(4)
)
BEGIN
    
    IF pidproduct > 0 THEN
        
        UPDATE tb_products
        SET 
            inbought = pinbought,
            incategory = pincategory,
            desproduct = pdesproduct,
            vlprice = pvlprice,
            vlwidth = pvlwidth,
            vlheight = pvlheight,
            vllength = pvllength,
            vlweight = pvlweight,
            desphoto = pdesphoto,
            desextension = pdesextension
        WHERE idproduct = pidproduct;
        
    ELSE
        
        INSERT INTO tb_products (iduser, inbought, incategory, desproduct, vlprice, vlwidth, vlheight, vllength, vlweight, desphoto, desextension) 
        VALUES(piduser, pinbought, pincategory, pdesproduct, pvlprice, pvlwidth, pvlheight, pvllength, pvlweight, pdesphoto, pdesextension);
        
        SET pidproduct = LAST_INSERT_ID();
        
    END IF;
    
    SELECT * FROM tb_products a
    INNER JOIN tb_users d
    ON d.iduser = a.iduser
    WHERE idproduct = pidproduct;
    
END