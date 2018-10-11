<?php
$host   =   'mysql:host=localhost;dbname=Quran';
$user   =   'root';
$pass   =   'root';
$utf    =   [PDO::MYSQL_ATTR_INIT_COMMAND    =>  'SET NAMES utf8'];
try {
    $con    =   new PDO($host,$user,$pass,$utf);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $ex) {
    die();
}
    $stmt   =   $con->query('SELECT `imlai` FROM `Quran` ORDER BY RAND() LIMIT 1');
    $fd     =   $stmt->fetch();
    echo $fd['imlai'];