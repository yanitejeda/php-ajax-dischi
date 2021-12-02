<?php
require "../components/element.php";

header("Content-Type: application/json");

//echo json_encode($response);

echo json_encode([
    "page"=>1,
    "dati" => $response
]);