<?php
$id = $_GET['id'];

$data = json_decode(file_get_contents("../data/channels.json"), true);

$data = array_filter($data, function ($c) use ($id) {
    return $c['id'] != $id;
});

file_put_contents("../data/channels.json", json_encode(array_values($data), JSON_PRETTY_PRINT));

header("Location: index.php");