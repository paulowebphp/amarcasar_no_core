CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_payments_update`(
`pidpayment` INT(11), 
`piduser` INT(11), 
`pidcart` INT(11),
`pdescustomercode` VARCHAR(22), 
`pdescardcode` VARCHAR(22), 
`pdesordercode` VARCHAR(22), 
`pdesname` VARCHAR(128), 
`pdesholdername` VARCHAR(64), 
`pdesemail` VARCHAR(128), 
`pdescpf` VARCHAR(14), 
`pdesholdercpf` VARCHAR(14), 
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
            desname = pdesname,
            desholdername = pdesholdername,
            desemail = pdesemail,
            descpf = pdescpf,
            desholdercpf = pdesholdercpf,
            nrphone = pnrphone,
            nrholderphone = pnrholderphone,
            dtbirth = pdtbirth, 
            dtholderbirth = pdtholderbirth
		WHERE idpayment = pidpayment;
        
    ELSE
		
		INSERT INTO tb_payments (iduser,
				idcart,
	            descustomercode,
	            descardcode,
	            desordercode,
	            desname,
	            desholdername,
	            desemail,
	            descpf,
	            desholdercpf,
	            nrphone,
	            nrholderphone,
	            dtbirth,
	            dtholderbirth)
        VALUES(piduser,
				pidcart,
	            pdescustomercode,
	            pdescardcode,
	            pdesordercode,
	            pdesname,
	            pdesholdername,
	            pdesemail,
	            pdescpf,
	            pdesholdercpf,
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