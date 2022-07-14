<?php
require_once './loginDetail.php';

try {
    $pdo=new PDO($attr,$usrNme,$pwd,$opts);
} catch (PDOException $exc) {
    throw new PDOException();
}


function querySql1($sql){
    global $pdo;
   // $pdo->exec($sql);
    return $pdo->query($sql);
    
}
function createRec($sql){
    global $pdo;
    $pdo->exec($sql);
    echo "<script>alert('successfilly added');</script>";
}



?>



