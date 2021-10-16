<?php

$link = mysqli_connect('localhost', 'root', '');
if (!$link) {
   echo "erro";
}
echo 'Conexão bem sucedida';
mysqli_close($link);
?>