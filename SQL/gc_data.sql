CREATE TABLE `clientes_GR` (
    `id` int AUTO_INCREMENT NOT NULL ,
    `nombre` var  NOT NULL ,
    `apellido` var  NOT NULL ,
    `cedula` int  NOT NULL ,
    `direccion` var  NOT NULL ,
    `provincia` var  NOT NULL ,
    `ciudad` var  NOT NULL ,
    `referencia` var  NOT NULL ,
    `celular` int  NOT NULL ,
    `telefono` int  NOT NULL ,
    `correo` var  NOT NULL ,
    `referecia` var  NOT NULL ,
    PRIMARY KEY (
        `id`
    )
);

CREATE TABLE `cargas_Gr` (
    `id` int AUTO_INCREMENT NOT NULL ,
    `tracking` var  NOT NULL ,
    `origen` var  NOT NULL ,
    `detalle` var  NOT NULL ,
    `peso` int  NOT NULL ,
    `unidad` var  NOT NULL ,
    `largo` int  NOT NULL ,
    `ancho` int  NOT NULL ,
    `alto` int  NOT NULL ,
    `tipo` var  NOT NULL ,
    `factura` var  NOT NULL ,
    `valorTotal` int  NOT NULL ,
    `impuestos` int  NOT NULL ,
    `envio` int  NOT NULL ,
    `id_cliente` int  NOT NULL ,
    PRIMARY KEY (
        `id`
    )
);

CREATE TABLE `detalle_cargas` (
    `id` int AUTO_INCREMENT NOT NULL ,
    `tracking` var  NOT NULL ,
    `detalle` var  NOT NULL ,
    `cantidad` var  NOT NULL ,
    `valorUnitario` int  NOT NULL ,
    `id_carga` int  NOT NULL ,
    PRIMARY KEY (
        `id`
    )
);

CREATE TABLE `instruccion_cargas` (
    `id` int AUTO_INCREMENT NOT NULL ,
    `detalle` var  NOT NULL ,
    `fechaEmbarque` date  NOT NULL ,
    `fraccionamiento` var  NOT NULL ,
    `tipoEmbarque` var  NOT NULL ,
    `paquetesGenerados` var  NOT NULL ,
    `fechaArribo` date  NOT NULL ,
    `estado` var  NOT NULL ,
    `consginatario` var  NOT NULL ,
    `cedula` var  NOT NULL ,
    `id_cargas` int  NOT NULL ,
    PRIMARY KEY (
        `id`
    )
);

CREATE TABLE `fraccinamiento_cargas` (
    `id` int AUTO_INCREMENT NOT NULL ,
    `peso` int  NOT NULL ,
    `tracking` var  NOT NULL ,
    `observacion` var  NOT NULL ,
    `valor` int  NOT NULL ,
    `id_instruccion` int  NOT NULL ,
    PRIMARY KEY (
        `id`
    )
);

CREATE TABLE `update_cargas` (
    `id` int AUTO_INCREMENT NOT NULL ,
    `fecha` date  NOT NULL ,
    `estado` var  NOT NULL ,
    `reponsable` var  NOT NULL ,
    `observacion` var  NOT NULL ,
    `feedCleinte` var  NOT NULL ,
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