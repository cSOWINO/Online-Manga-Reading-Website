<?php 
try{
    $dsn = "mysql: dbname=id21670590_mangadub; host=localhost";
    $user = "id21670590_chirag";
    $pswd = "Vasava.S.Chirag007";

    $conn = new PDO($dsn, $user, $pswd);

    $conn->query("USE id21670590_mangadub");
}
catch(PDOException $e){
    die("Error Connecting: ".$e->getMessage());
}
?>