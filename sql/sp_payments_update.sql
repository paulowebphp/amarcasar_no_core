CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_payments_update`(
`pidpayment` INT(11), 
`piduser` INT(11), 
`pidorder` INT(11),
`pdescustomercode` VARCHAR(22), 
`pdescardcode` VARCHAR(22), 
`pdesordercode` VARCHAR(22), 
`pdespaymentcode` VARCHAR(22), 
`pdesname` VARCHAR(128), 
`pdesholdername` VARCHAR(64), 
`pdesemail` VARCHAR(128),
`pintypedocument` TINYINT(4),
`pdesdocument` VARCHAR(14), 
`pdesholderdocument` VARCHAR(14), 
`pnrphone` BIGINT(20), 
`pnrholderphone` BIGINT(20),
`pdtbirth` DATE,
`pdtholderbirth` DATE
)
BEGIN

	IF pidpayment > 0 THEN
		
		UPDATE tb_payments
        SET

            descustomercode = pdescustomercode,
            descardcode = pdescardcode,
            desordercode = pdesordercode,
            despaymentcode = pdespaymentcode,
            desname = pdesname,
            desholdername = pdesholdername,
            desemail = pdesemail,
            intypedocument = pintypedocument,
            desdocument = pdesdocument,
            desholderdocument = pdesholderdocument,
            nrphone = pnrphone,
            nrholderphone = pnrholderphone,
            dtbirth = pdtbirth, 
            dtholderbirth = pdtholderbirth
		WHERE idpayment = pidpayment;
        
    ELSE
		
		INSERT INTO tb_payments (iduser,
				idorder,
	            descustomercode,
	            descardcode,
	            desordercode,
	            despaymentcode,
	            desname,
	            desholdername,
	            desemail,
	            intypedocument,
	            desdocument,
	            desholderdocument,
	            nrphone,
	            nrholderphone,
	            dtbirth,
	            dtholderbirth)
        VALUES(piduser,
				pidorder,
	            pdescustomercode,
	            pdescardcode,
	            pdesordercode,
	            pdespaymentcode,
	            pdesname,
	            pdesholdername,
	            pdesemail,
	            pintypedocument,
	            pdesdocument,
	            pdesholderdocument,
	            pnrphone,
	            pnrholderphone,
	            pdtbirth,
	            pdtholderbirth);
        
        SET pidpayment = LAST_INSERT_ID();
        
    END IF;

    SELECT * 
    FROM tb_payments a
    INNER JOIN tb_users d 
    ON d.iduser = a.iduser
    WHERE idpayment = pidpayment;

END