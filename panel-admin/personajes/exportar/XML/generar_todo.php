<?php

require("./../../../../comprovacion/compro_logeado_a.php");

$xml = new XMLWriter();
$xml->openMemory();
$xml->setIndent(true);
$xml->setIndentString('	'); 
$xml->startDocument('1.0', 'UTF-8');

$instruccion = "select * from personajes where 1";
$resultado = mysqli_query($con, $instruccion);

$xml->startElement("tft");
    while($fila = $resultado->fetch_assoc()) {
        $xml->startElement("personajes");
        $nombre = $fila["nombre"];
        $combo = $fila["combo"];
        $origen = $fila["origen"];
        $precio = $fila["precio"];
        $xml->writeElement("Nombre", $nombre);
        $xml->writeElement("Combo", $combo);
        $xml->writeElement("Origen", $origen);
        $xml->writeElement("Precio", $precio);
        $xml->endElement();
    }
$xml->endElement();

$content = $xml->outputMemory();
ob_end_clean();
ob_start();
header('Content-Type: application/xml; charset=UTF-8');
header('Content-Encoding: UTF-8');
header("Content-Disposition: attachment;filename=ejemplo.xml");
header('Expires: 0');
header('Pragma: cache');
header('Cache-Control: private');
echo $content;
?>