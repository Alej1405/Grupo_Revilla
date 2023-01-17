-- Exported from QuickDBD: https://www.quickdatabasediagrams.com/
-- NOTE! If you have used non-SQL datatypes in your design, you will have to change these here.


CREATE TABLE `clientes_GR` (
    `id` int AUTO_INCREMENT NOT NULL ,
    `nombre` varchar(150)  NOT NULL ,
    `apellido` varchar(150)  NOT NULL ,
    `cedula` int(10)  NOT NULL ,
    `direccion` varchar(250)  NOT NULL ,
    `provincia` varchar(150)  NOT NULL ,
    `ciudad` varchar(150)  NOT NULL ,
    `referencia` varchar(250)  NOT NULL ,
    `celular` int(10)  NOT NULL ,
    `telefono` int(10)  NOT NULL ,
    `correo` varchar(250)  NOT NULL ,
    `referecia` varchar(250)  NOT NULL ,
    PRIMARY KEY (
        `id`
    )
);

CREATE TABLE `cargas_Gr` (
    `id` int AUTO_INCREMENT NOT NULL ,
    `tracking` varchar(350)  NOT NULL ,
    `origen` varchar(150)  NOT NULL ,
    `detalle` varchar(450)  NOT NULL ,
    `peso` int(10)  NOT NULL ,
    `unidad` varchar(100)  NOT NULL ,
    `largo` int(10)  NOT NULL ,
    `ancho` int(10)  NOT NULL ,
    `alto` int(10)  NOT NULL ,
    `tipo` varchar(150)  NOT NULL ,
    `factura` varchar(150)  NOT NULL ,
    `valorTotal` int(20)  NOT NULL ,
    `impuestos` int(20)  NOT NULL ,
    `envio` int(20)  NOT NULL ,
    `id_cliente` int  NOT NULL ,
    PRIMARY KEY (
        `id`
    )
);

CREATE TABLE `detalle_cargas` (
    `id` int AUTO_INCREMENT NOT NULL ,
    `tracking` varchar(350)  NOT NULL ,
    `detalle` varchar(450)  NOT NULL ,
    `cantidad` varchar(20)  NOT NULL ,
    `valorUnitario` int(20)  NOT NULL ,
    `id_carga` int  NOT NULL ,
    PRIMARY KEY (
        `id`
    )
);

CREATE TABLE `instruccion_cargas` (
    `id` int AUTO_INCREMENT NOT NULL ,
    `detalle` varchar(150)  NOT NULL ,
    `fechaEmbarque` date  NOT NULL ,
    `fraccionamiento` varchar(50)  NOT NULL ,
    `tipoEmbarque` varchar(150)  NOT NULL ,
    `paquetesGenerados` var  NOT NULL ,
    `fechaArribo` date  NOT NULL ,
    `estado` varchar(120)  NOT NULL ,
    `consginatario` varchar(350)  NOT NULL ,
    `cedula` varchar(10)  NOT NULL ,
    `id_cargas` int  NOT NULL ,
    PRIMARY KEY (
        `id`
    )
);

CREATE TABLE `fraccinamiento_cargas` (
    `id` int AUTO_INCREMENT NOT NULL ,
    `peso` int(10)  NOT NULL ,
    `tracking` varchar(350)  NOT NULL ,
    `observacion` varchar(450)  NOT NULL ,
    `valor` int(10)  NOT NULL ,
    `id_instruccion` int  NOT NULL ,
    PRIMARY KEY (
        `id`
    )
);

CREATE TABLE `update_cargas` (
    `id` int AUTO_INCREMENT NOT NULL ,
    `fecha` date  NOT NULL ,
    `estado` varchar(100)  NOT NULL ,
    `reponsable` varchar(150)  NOT NULL ,
    `observacion` varchar(450)  NOT NULL ,
    `feedCleinte` varchar(300)  NOT NULL ,
    `id_cargas` int  NOT NULL ,
    PRIMARY KEY (
        `id`
    )
);

ALTER TABLE `cargas_Gr` ADD CONSTRAINT `fk_cargas_Gr_id_cliente` FOREIGN KEY(`id_cliente`)
REFERENCES `clientes_GR` (`id`);

ALTER TABLE `detalle_cargas` ADD CONSTRAINT `fk_detalle_cargas_id_carga` FOREIGN KEY(`id_carga`)
REFERENCES `cargas_Gr` (`id`);

ALTER TABLE `instruccion_cargas` ADD CONSTRAINT `fk_instruccion_cargas_id_cargas` FOREIGN KEY(`id_cargas`)
REFERENCES `cargas_Gr` (`id`);

ALTER TABLE `fraccinamiento_cargas` ADD CONSTRAINT `fk_fraccinamiento_cargas_id_instruccion` FOREIGN KEY(`id_instruccion`)
REFERENCES `instruccion_cargas` (`id`);

ALTER TABLE `update_cargas` ADD CONSTRAINT `fk_update_cargas_id_cargas` FOREIGN KEY(`id_cargas`)
REFERENCES `cargas_Gr` (`id`);

