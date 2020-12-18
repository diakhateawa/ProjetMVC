<?php
require_once 'db.php';
function addDepartement($nom, $idR)
{
    $sql = "INSERT INTO departement VALUES (NULL, '$nom', $idR)";

    $conn = getConnexion();

    return $conn->exec($sql);
}
function listeDepartement()
{
    $sql = "SELECT * FROM departement";

    $conn = getConnexion();

    return $conn->query($sql);
}