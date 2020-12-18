<?php
require_once '../model/regiondb.php';
require_once '../model/db.php';

    extract($_POST);
    $result = addRegion($nomR);

    header("location:regions");
?>
