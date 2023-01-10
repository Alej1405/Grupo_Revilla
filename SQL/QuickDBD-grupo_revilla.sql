-- Exported from QuickDBD: https://www.quickdatabasediagrams.com/
-- Link to schema: https://app.quickdatabasediagrams.com/#/d/53lKpi
-- NOTE! If you have used non-SQL datatypes in your design, you will have to change these here.

-- Modify this code to update the DB schema diagram.
-- To reset the sample schema, replace everything with
-- two dots ('..' - without quotes).

CREATE TABLE `usuarios` (
    `id` int AUTO_INCREMENT NOT NULL ,
    `cedula` varchar(10)  NOT NULL ,
    `nombre` varchar(150)  NOT NULL ,
    `nombre2` varchar(150)  NOT NULL ,
    `apellidoP` varchar(150)  NOT NULL ,
    `apellidoM` varchar(150)  NOT NULL ,
    `fechaNacimiento` varchar(150)  NOT NULL ,
    `telefono` varchar(10)  NOT NULL ,
    `celular` varchar(10)  NOT NULL ,
    PRIMARY KEY (
        `id`
    )
);

CREATE TABLE `direccion` (
    `id` int AUTO_INCREMENT NOT NULL ,
    `provincia` varchar(150)  NOT NULL ,
    `cuidad` varchar(150)  NOT NULL ,
    `direccion` varchar(200)  NOT NULL ,
    `referencia` varchar(150)  NOT NULL ,
    `numeroCasa` varchar(10)  NOT NULL ,
    `id_usuario` int AUTO_INCREMENT NOT NULL ,
    PRIMARY KEY (
        `id`
    )
);

CREATE TABLE `referenciasP` (
    `id` int AUTO_INCREMENT NOT NULL ,
    `nombre` varchar(150)  NOT NULL ,
    `apellido` varchar(150)  NOT NULL ,
    `contacto` varchar(11)  NOT NULL ,
    `relacion` varchar(100)  NOT NULL ,
    `id_usuario` int AUTO_INCREMENT NOT NULL ,
    PRIMARY KEY (
        `id`
    )
);

CREATE TABLE `referenciasL` (
    `id` int AUTO_INCREMENT NOT NULL ,
    `nombre` varchar(150)  NOT NULL ,
    `apellido` varchar(150)  NOT NULL ,
    `contacto` varchar(11)  NOT NULL ,
    `empresa` varchar(20)  NOT NULL ,
    `cargo` varchar(20)  NOT NULL ,
    `id_usuario` int AUTO_INCREMENT NOT NULL ,
    PRIMARY KEY (
        `id`
    )
);

CREATE TABLE `experienciaL` (
    `id` int AUTO_INCREMENT NOT NULL ,
    `lugar` varchar(150)  NOT NULL ,
    `cargo` varchar(200)  NOT NULL ,
    `tiempo` varchar(10)  NOT NULL ,
    `motivoSalida` varchar(250)  NOT NULL ,
    `id_usuario` int AUTO_INCREMENT NOT NULL ,
    PRIMARY KEY (
        `id`
    )
);

CREATE TABLE `formacionA` (
    `id` int AUTO_INCREMENT NOT NULL ,
    `titulo` varchar(100)  NOT NULL ,
    `institucion` varchar(150)  NOT NULL ,
    `tiempoEstudios` varchar(150)  NOT NULL ,
    `id_usuario` int AUTO_INCREMENT NOT NULL ,
    PRIMARY KEY (
        `id`
    )
);

CREATE TABLE `ingreso` (
    `id` int AUTO_INCREMENT NOT NULL ,
    `empresa` varchar(150)  NOT NULL ,
    `jefeInmediato` varchar(150)  NOT NULL ,
    `cargo` varchar(150)  NOT NULL ,
    `oficina` varchar(10)  NOT NULL ,
    `horaIngreso` varchar(20)  NOT NULL ,
    `horaSalida` varchar(20)  NOT NULL ,
    `timpoLounch` varchar(20)  NOT NULL ,
    `salario` varchar(20)  NOT NULL ,
    `bonificaciones` varchar(20)  NOT NULL ,
    `metasMensuales` varchar(20)  NOT NULL ,
    `fechaIngreso` date  NOT NULL ,
    `id_usuario` int AUTO_INCREMENT NOT NULL ,
    PRIMARY KEY (
        `id`
    )
);

ALTER TABLE `direccion` ADD CONSTRAINT `fk_direccion_id_usuario` FOREIGN KEY(`id_usuario`)
REFERENCES `usuarios` (`id`);

ALTER TABLE `referenciasP` ADD CONSTRAINT `fk_referenciasP_id_usuario` FOREIGN KEY(`id_usuario`)
REFERENCES `usuarios` (`id`);

ALTER TABLE `referenciasL` ADD CONSTRAINT `fk_referenciasL_id_usuario` FOREIGN KEY(`id_usuario`)
REFERENCES `usuarios` (`id`);

ALTER TABLE `experienciaL` ADD CONSTRAINT `fk_experienciaL_id_usuario` FOREIGN KEY(`id_usuario`)
REFERENCES `usuarios` (`id`);

ALTER TABLE `formacionA` ADD CONSTRAINT `fk_formacionA_id_usuario` FOREIGN KEY(`id_usuario`)
REFERENCES `usuarios` (`id`);

ALTER TABLE `ingreso` ADD CONSTRAINT `fk_ingreso_id_usuario` FOREIGN KEY(`id_usuario`)
REFERENCES `usuarios` (`id`);

