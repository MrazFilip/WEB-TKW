<?php

$server = 'zwa.toad.cz/adminer/localhost/';
$dbName = 'mrazfili';
$userName = 'mrazfili';
$passwd = 'webove aplikace';
$params = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

$conn = new PDO('mysql:host=' . $server . ';dbname=' . $dbName, $userName, $passwd, $params);

$conn->query('SET NAMES utf8');