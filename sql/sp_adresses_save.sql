CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_addresses_save`(`pidaddress` INT(11), `piduser` INT(11), `pidcart` INT(11), `pdesaddress` VARCHAR(128), `pdesholderaddress` VARCHAR(128), `pdesnumber` VARCHAR(16), `pdesholdernumber` VARCHAR(16), `pdescomplement` VARCHAR(32), `pdesholdercomplement` VARCHAR(32), `pdescity` VARCHAR(32), `pdesholdercity` VARCHAR(32), `pdesstate` VARCHAR(32), `pdesholderstate` VARCHAR(32), `pdescountry` VARCHAR(32), `pdesholdercountry` VARCHAR(32), `pdeszipcode` CHAR(8), `pdesholderzipcode` CHAR(8), `pdesdistrict` VARCHAR(32), `pdesholderdistrict` VARCHAR(32))
BEGIN

	IF pidaddress > 0 THEN
		
		UPDATE tb_addresses
        SET

            desaddress = pdesaddress,
            desholderaddress = pdesholderaddress,
            desnumber = pdesnumber,
            desholdernumber = pdesholdernumber,
            descomplement = pdescomplement,
            desholdercomplement = pdesholdercomplement,
            descity = pdescity,
            desholdercity = pdesholdercity,
            desstate = pdesstate,
            desholderstate = pdesholderstate,
            descountry = pdescountry,
            desholdercountry = pdesholdercountry,
            deszipcode = pdeszipcode, 
            desholderzipcode = pdesholderzipcode, 
            desdistrict = pdesdistrict,
            desholderdistrict = pdesholderdistrict
		WHERE idaddress = pidaddress;
        
    ELSE
		
		INSERT INTO tb_addresses (iduser, idcart, desaddress, desholderaddress, desnumber, desholdernumber, descomplement, desholdercomplement, descity, desholdercity, desstate, desholderstate, descountry, deszipcode, desdistrict, desholderdistrict)
        VALUES(piduser, pidcart, pdesaddress, pdesholderaddress, pdesnumber, pdesholdernumber, pdescomplement, pdesholdercomplement, pdescity, pdesholdercity, pdesstate, pdesholderstate, pdescountry, pdeszipcode, pdesdistrict, pdesholderdistrict);
        
        SET pidaddress = LAST_INSERT_ID();
        
    END IF;

    SELECT * 
    FROM tb_addresses a
    INNER JOIN tb_users d 
    ON d.iduser = a.iduser
    WHERE idaddress = pidaddress;

END