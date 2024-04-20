<?php
$config = require('config.php');
$db = new Database($config['database']);

$heading = 'Welcome!!!';

$posts = $db->query('select * from posts')->findAll();



if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $errors = [];

    if (strlen($_POST['body']) === 0) {
        $errors['body'] = 'A body is required';
    }

    if (strlen($_POST['title']) === 0) {
        $errors['body'] = 'A title is required.';
    }

    if (empty($errors)) {
        $db->query('INSERT INTO posts(body, title) VALUES(:body, :title)', [
            'body' => $_POST['body'],
            'title' => $_POST['title']
        ]);
    }
}
require "views/index.view.php";