<?php 
    namespace config;
	
    class Autoload {
        
        public static function Start() {
            spl_autoload_register(function($className)
			{
                //echo "<br>EN EL Autoload";
                /* esto era la original
                $classPath = strtolower(str_replace("\\", "/", ROOT.$className).".class.php");
                */
                //echo "<br>classname ---> $className";

                $classPath = ucwords(str_replace("\\", "/", ROOT.$className).".class.php");
                //echo "<br>classpath ---> $classPath";                
                
				include_once($classPath);
                //echo "<br>FIN del Autoload <br>";
			});
        }
    }
?>