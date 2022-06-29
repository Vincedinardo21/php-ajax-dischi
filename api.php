<?php
// Restituisco i dati sottoforma di JSon
include_once "database.php";

header('Content-Type: application/json');

echo json_encode($dischi);