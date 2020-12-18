<?php
require_once '../model/departementdb.php';
require_once '../model/regiondb.php';
require_once '../model/db.php';

    extract($_POST);
    $result = addDepartement($nomD, $idR);
    if($result !=0)
    { 
        updateRegion($idR, $nomR);
    }

    header("location:departements");
?>
