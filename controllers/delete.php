<?php

$config = require('config.php');
$db = new Database($config['database']);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $postIdToDelete = $_POST['id'];
    $db->query('DELETE FROM posts` WHERE id = :id', ['id' => $postIdToDelete ]);


}
