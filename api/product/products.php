<?php
$pdo = new PDO("mysql:host=localhost;dbname=informations",'root','');

$query = 'SELECT * FROM products ';
if(isset($_GET['name'])){
    $query .= 'WHERE name LIKE "%'.$GET['name'].'%"';
}

if(isset($_GET['brand'])){
    $query .= 'WHERE brand LIKE "%'.$GET['brand'].'%"';
}

if(isset($_GET['limit'])){
    $query .= ' LIMIT '.$_GET['limit'];
}


$products = $pdo->prepare($query);

$products->execute();

$data = $products->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($data);

