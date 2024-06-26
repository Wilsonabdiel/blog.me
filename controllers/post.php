<?php

$config = require('config.php');
$db = new Database($config['database']);

$heading = 'Post';

$post = $db->query('select * from posts where id = :id', ['id' => $_GET['id']])->findOrFail();



if ($_SERVER['REQUEST_METHOD'] === 'POST') {


    $postIdToDelete = $_GET['id'];

    $db->query('DELETE FROM posts WHERE id = :id', ['id' => $postIdToDelete]);

    header('Location: /blog.me/');
    exit;
}


require "views/post.view.php";