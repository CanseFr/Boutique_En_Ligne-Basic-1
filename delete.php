<?php

    include_once("main.php");

    if(!empty($_GET["id"])){
            // var_dump($_GET["id"]);
        $query = "DELETE FROM client WHERE idclient=:id";
        $objstmt = $pdo->prepare($query);
        $objstmt->execute(["id" => $_GET["id"]]);
        $objstmt->closeCursor();
        header("Location:clients.php");
        }
 
?>