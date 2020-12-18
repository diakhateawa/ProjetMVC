<?php

namespace libs\system;

class View
{
    public function __construct()
    {
        
    }

    public function load()
    {
        //compter le nombre de paramettre passer é l'appele
        $num = func_num_args();

        //recuperer les valeurs des paramettre
        $agrgs = func_get_args();
      
          switch ($num){
              case 1:
                $file ="src/view/".$agrgs[0].".php";
                if(file_exists($file))
                {
                    require_once $file;
                }else
                {
                    die($file."n'existe pas comme vue");
                }
              
            break;
              case 2:
                $file ="src/view/".$agrgs[0].".php";
                if(file_exists($file))
                {
                    $data = $agrgs[1];
                    require_once $file;
                }else{
                    die($file."n'existe pas comme vue");
                }
                
              break;
              /*default:
              # code*/
          }
    }
}
?>