<?php
if(!isset($_GET['nome_produto'])){
    header("Location: index.php");
    exit;
}

$nome = "%".trim($_GET['nome_produto'])."%";
 
$dbh = new PDO('mysql:host=localhost;dbname=ttloja_tec', 'root', '');
 
$sth = $dbh->prepare('SELECT * FROM `produtos` WHERE `nome` LIKE :nome');
$sth->bindParam(':nome', $nome, PDO::PARAM_STR);
$sth->execute();
 
$resultados = $sth->fetchAll(PDO::FETCH_ASSOC);

echo "<pre>";
print_r($resultados);
?>
