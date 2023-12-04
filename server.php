<?php 
//importa nell'index
$fileContent=file_get_contents(__DIR__ ."/data/db.json");

//decodifica file content
$lista = json_decode($fileContent,true);
header("Content-Type: application/json");
echo json_encode($lista);
?>