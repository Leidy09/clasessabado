
--Leidy Rios 
--ADSI 1354951

--1.
DELIMITER $$
CREATE PROCEDURE HistoryAutopartes(
code INT, 
name_old VARCHAR(45), 
name_new VARCHAR(45),
trans VARCHAR(45))
BEGIN
	INSERT INTO autopartes_audit VALUES(
		NULL,
		code,
		name_old,
		name_new,
		CURRENT_TIMESTAMP(),
		CURRENT_USER(),
		trans);
END $$
DELIMITER ;

--2.
DELIMITER $$
CREATE PROCEDURE HistoryProveedores(
code INT, 
name_old VARCHAR(45), 
name_new VARCHAR(45),
trans VARCHAR(45))
BEGIN
	INSERT INTO proveedores_audit VALUES(
		NULL,
		code,
		name_old,
		name_new,
		CURRENT_TIMESTAMP(),
		CURRENT_USER(),
		trans);
END $$
DELIMITER ;

--3.
DELIMITER $$
CREATE PROCEDURE HistorySuministros(
code INT,
autopartes_codigo INT,
proveedores_id INT,
price_old INT, 
price_new INT,
trans VARCHAR(45))
BEGIN
	INSERT INTO proveedores_audit VALUES(
		NULL,
		code,
		autopartes_codigo,
		proveedores_id,
		price_old,
		price_new,
		CURRENT_TIMESTAMP(),
		CURRENT_USER(),
		trans);
END $$
DELIMITER ;


-- TRIGGERS

--AUTOPARTES
DELIMITER $$
CREATE TRIGGER AutopartesInsert AFTER INSERT ON autopartes FOR EACH ROW
	CALL HistoryAutopartes (new.codigo, null, new.nombre, 'insercion')
$$
DELIMITER ;

DELIMITER $$
CREATE TRIGGER AutopartesActualizar AFTER UPDATE ON autopartes FOR EACH ROW
	CALL HistorycoAutopartes (new.codigo, old.nombre, new.nombre, 'actualizacion')
$$
DELIMITER ;

DELIMITER $$
CREATE TRIGGER AutopartesBorrar AFTER DELETE ON autopartes FOR EACH ROW
	CALL HistoryAutopartes (old.codigo, old.nombre, NULL, 'Eliminacion')
$$
DELIMITER ;
-- /AUTOPARTES


-- PROVEEDORES
DELIMITER $$
CREATE TRIGGER ProveedoresInsertar AFTER INSERT ON proveedores FOR EACH ROW
	CALL HistoryProveedores (new.id, null, new.nombre, 'insercion')
$$
DELIMITER ;

DELIMITER $$
CREATE TRIGGER ProveedoresActualizar AFTER UPDATE ON proveedores FOR EACH ROW
	CALL HistoryProveedores (new.id, old.nombre, new.nombre, 'actualizacion')
$$
DELIMITER ;

DELIMITER $$
CREATE TRIGGER ProveedoresBorrar AFTER DELETE ON proveedores FOR EACH ROW
	CALL HistoryProveedores (old.id, old.nombre, NULL, 'Eliminacion')
$$
DELIMITER ;
