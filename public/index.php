<?php
echo "teste";
  
$hostname='127.0.0.1';
$port = '3306';
$username='root';
$password='secret';

try {
    $dbh = new PDO("mysql:host=$hostname;port=$port;",$username,$password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
    echo 'Conectou.';
}catch(PDOException $e){
    	echo $e->getMessage();
}
