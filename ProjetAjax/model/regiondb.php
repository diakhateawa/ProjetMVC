<?php
require_once 'db.php';
function addRegion($nom)
{
    $sql = "INSERT INTO region VALUES (NULL, '$nom')";

    $conn = getConnexion();

    return $conn->exec($sql);
}
function updateRegion($idR, $nomR)
{
    $sql = "UPDATE region SET nomR= '$nomR',  WHERE idR = $idR";

    $conn = getConnexion();

    return $conn->exec($sql);
}


function listeRegion()
{
    $sql = "SELECT * FROM region";

    $conn = getConnexion();

    return $conn->query($sql);
}