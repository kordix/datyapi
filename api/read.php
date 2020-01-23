<?php
require_once 'db.php';

//REPLACE
$sth = $dbh->prepare("SELECT * FROM daty");
$sth->execute();

class dummy {

}

$rows = $sth->fetchAll(PDO::FETCH_CLASS, "dummy");

echo json_encode($rows);




 ?>


