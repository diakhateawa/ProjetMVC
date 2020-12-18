<?php
namespace libs\system;


class Model
{
    //entityManager besoin fichier bootstrap qui est das la racine
    protected $entityManager;
    public function __construct()
    {
        require_once "./bootstrap.php";
        $this->entityManager = $entityManager;
    }
}
?>