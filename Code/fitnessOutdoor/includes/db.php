<?php

try {

    $db = new PDO(
        'mysql:host=localhost;dbname=swfach','root','gott123',
        array(
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        )
    );

} catch (Exception $e) {
    die('Datenbankfehler!');
}