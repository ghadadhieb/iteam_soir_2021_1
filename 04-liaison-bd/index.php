<?php
require('./dbconnect.php');
$query = $cnx->query("SELECT * FROM todos");
$data = $query->fetchAll();
include('./index.phtml');
