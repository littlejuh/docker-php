<?php
$hostname='db';
$username='root';
$password='secret';

try {
    $dbh = new PDO("mysql:host=$hostname;",$username,$password); 
    echo 'Olá, conseguimos conectar! :)';
}catch(PDOException $e){
    echo $e->getMessage();
}
