<?php

try {
    $cnx = new PDO('mysql:host=localhost;dbname=iteam_todos_gr2', 'root', '');
} catch (Exception $e) {
    echo "Error : " . $e->getMessage() . "<br/>";
    die();
}
