<?php

//$conn = new mysqli("localhost", "root", "", "pizzaria");
$conn = new mysqli("localhost", "worl7587_black_foods", "63940624**", "worl7587_black_foods");
$fuso = new DateTimeZone('America/Sao_Paulo');
$data = new DateTime();
$data->setTimezone($fuso);
$dataatual =  $data->format('d-m-Y H:i:s');
$whatsapp = "5511978271382"
?>
