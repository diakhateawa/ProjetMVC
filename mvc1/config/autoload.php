<?php
   
    class Autoloader
    {
      
        
        static function register()
        {
        spl_autoload_register(array(__CLASS__, "Autoload"));
        }

        static function autoload($class)
        {
            //echo str_replace("\\", "/",$class);
          
            if(file_exists("src/model/".$class.".php"))
            {
            require_once "src/model/".$class.".php";
            } else 
            if(file_exists("src/controller/".$class.".php"))
            {
            require_once "src/controller/".$class.".php";
            }
             else
             if(file_exists(str_replace("\\", "/",$class.".php")))
             {
                 require_once str_replace("\\", "/",$class.".php");

             }else{
                 die("Merci d'utiliser le mot USE SUIVI DE".$class);
             }

            //namespace
            

        }

        
    }
    Autoloader::register()
?>