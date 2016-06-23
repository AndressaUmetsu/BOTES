DELIMITER 
$$
	CREATE TRIGGER capacidadeInvalida
	BEFORE UPDATE 
	ON modelos
	FOR EACH ROW 
	BEGIN
		DELETE FROM modelos WHERE modelos.capacidade <= 0;
	END
$$
DELIMITER ;

DELIMITER 
$$
	CREATE TRIGGER salarioInvalido
	BEFORE UPDATE 
	ON empregados
	FOR EACH ROW 
	BEGIN
		DELETE FROM empregados WHERE empregados.salario < 880.00;
	END
$$
DELIMITER ;

DELIMITER 
$$
	CREATE TRIGGER qtdAvioesInsert 
	AFTER INSERT 
	ON avioes
	FOR EACH ROW
	BEGIN
		UPDATE aeroportos SET quantidadeAvioes = quantidadeAvioes + 1
	END
DELIMITER ;

DELIMITER 
$$
	CREATE TRIGGER qtdAvioesDelete 
	AFTER DELETE
	ON avioes
	FOR EACH ROW
	BEGIN
	    UPDATE aeroportos SET quantidadeAvioes = quantidadeAvioes - 1
	END$$
DELIMITER ;
 

-- Exemplo  http://www.techonthenet.com/mysql/triggers/before_delete.php

/*DELIMITER //

CREATE TRIGGER contacts_fter_update
AFTER UPDATE
   ON contacts FOR EACH ROW

BEGIN

   DECLARE vUser varchar(50);

   -- Find username of person performing the INSERT into table
   SELECT USER() INTO vUser;

   -- Insert record into audit table
   INSERT INTO contacts_audit
   ( contact_id,
     updated_date,
     updated_by)
   VALUES
   ( NEW.contact_id,
     SYSDATE(),
     vUser );

END; //

DELIMITER ;

DELIMITER //

CREATE TRIGGER contacts_before_delete
BEFORE DELETE
   ON contacts FOR EACH ROW

BEGIN

   DECLARE vUser varchar(50);

   -- Find username of person performing the DELETE into table
   SELECT USER() INTO vUser;

   -- Insert record into audit table
   INSERT INTO contacts_audit
   ( contact_id,
     deleted_date,
     deleted_by)
   VALUES
   ( OLD.contact_id,
     SYSDATE(),
     vUser );

END; //

DELIMITER ;



CREATE TABLE contacts
( contact_id INT(11) NOT NULL AUTO_INCREMENT,
  last_name VARCHAR(30) NOT NULL,
  first_name VARCHAR(25),
  birthday DATE,
  created_date DATE,
  created_by VARCHAR(30),
  CONSTRAINT contacts_pk PRIMARY KEY (contact_id)
);

*/