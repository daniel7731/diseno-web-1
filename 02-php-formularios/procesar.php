<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $comentario = $_POST["comentario"];

    echo "Nombre: " . $nombre . "<br>";
    echo "Comentario: " . $comentario;
}
?>