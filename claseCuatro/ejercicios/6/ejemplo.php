<?php
// Este archivo ya trae la funcionalidades que necesitamos para descargar la primer imagen de google imagenes

// Debemos descargarlo desde
https://razaoinfo.dl.sourceforge.net/project/simplehtmldom/simple_html_dom.php
require("simple_html_dom.php");
// Este es el termino que debemos buscar , el color lo obtendremo
$color="rojo";
// Esta parte no la modificaremos, la usaremos asi como esta para obtener la imagen
$search_keyword="color ".$color;
$search_keyword=str_replace(' ','+',$search_keyword);
$newhtml
=file_get_html("https://www.google.com/search?q=".$search_keyword."&tbm=isch");
$result_image_source = $newhtml->find('img', 0)->src;
echo '<img src="'.$result_image_source.'">';
// FIN - Esta parte no la modificaremos, la usaremos asi como esta para obtener la imagen
?>