<?php

$conn = new PDO("mysql:
host=localhost;
dbname=dbphp7",
"root",
""
);


$stmt = $conn->prepare("INSERT INTO tb_usuarios(des_login,des_senha) VALUES (:LOGIN,:PASSWORD)");

$login = "Pelola";
$password = "24";

$stmt->bindParam(":LOGIN",$login);
$stmt->bindParam(":PASSWORD",$password);

$stmt->execute();

echo "Inserido OK!";



?>