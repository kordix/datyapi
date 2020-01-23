<?php
$id=$_POST['id'];
require_once('db.php');
require_once('handlerequest.php');

//replace
$sth = $dbh->prepare("UPDATE daty SET date=?,opis=? WHERE id=?");

//replace
if($sth->execute([$date, $opis, $id]) ==false ){
      echo 'nie udało się';
    }


header('Location: /index.php');
?>



<a href="/">główna</a>
