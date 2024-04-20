<?php
$config = require('config.php');
$db = new Database($config['database']);

$heading = 'Welcome!!!';

$posts = $db->query('select * from posts')->findAll();



require "views/index.view.php";