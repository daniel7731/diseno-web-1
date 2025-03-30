<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $nombre = $_GET["nombre"];
    $comentario = $_GET["comentario"];

    echo "Nombre: " . $nombre . "<br>";
    echo "Comentario: " . $comentario;
}
?>