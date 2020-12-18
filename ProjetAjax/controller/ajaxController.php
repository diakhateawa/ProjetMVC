<?php
require_once '../../model/regiondb.php';
$regions = listeRegion()->fetchAll();
$page = @$_GET['page']; 
switch($page){
    case 'regions':
        echo json_encode($regions);
    break;
    echo json_encode(['msg'=>'page non disponible']);
    case 'departements':
        echo json_encode($departements);
    break;
    default:
    echo json_encode(['msg'=>'page non disponible']);
}
?>