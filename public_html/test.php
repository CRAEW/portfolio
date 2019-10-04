<?php

try {
    // $data_file = new PDO('mysql:host=www.wendyvancraen.portfolio.be;dbname=wendyvancraen','root','09wendy82');

    $data_file = new PDO('mysql:host=127.0.0.1;dbname=wendyvancraen','root','09wendy82');

} catch (PDOException $e) {
    die($e->getMessage());
}

$statement = $data_file->prepare('select * from portfolio');
$statement->execute();



var_dump($statement->fetchAll());