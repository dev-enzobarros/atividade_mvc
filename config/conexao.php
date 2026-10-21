<?php

$conn = mysqli_connect(
    "localhost",
    "root",
    "",
    "nagens_mvc"
);

if (!$conn) {
    die("Erro ao conectar ao banco de dados.");
}

mysqli_set_charset($conn, "utf8mb4");

?>