//incluir o requerir
include("conectar.php"); //si no encuentra el archivo, no para el programa
require("conectar.php"); //si no encuentra el archivo, el programa para


INSERT INTO `ProgramacionWeb`.`clientes`
(
`apellido`,
`nombre`,
`mail`,
`edad`)
VALUES                         
(

{apellido: napoli },
<{nombre: juan }>,
<{mail: napolijuan@gmail.com}>,
<{edad: 30}>
);

DELETE FROM `ProgramacionWeb`.`clientes`
WHERE <{where_condition}>;


UPDATE `ProgramacionWeb`.`clientes`
SET
`id_clientes` = {id_clientes: },
`apellido` = {apellido: },
`nombre` = {nombre: },
`mail` = {mail: },
`edad` = {edad: 0}
WHERE <{where_condition}>;

