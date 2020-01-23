<?php
require_once('db.php');
require_once('handlerequest.php');

//REPLACE
$sth = $dbh->prepare('INSERT INTO daty(date,opis) VALUES (?,?)');

if ($sth->execute([$date, $opis]) == false) {
    echo 'error';
  }

  header('Location: /');


?>