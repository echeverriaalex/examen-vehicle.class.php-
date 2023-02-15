<?php 
    namespace config;

    use Config\Request as Request;

    class Router
    {
        public static function Route(Request $request)
        {
            /*
            echo "<br>ACA EN EL ROUTER  ";
            echo "<br> LA REQUEST ---> ";
            var_dump($request);
            */

            $controllerName = $request->getcontroller();
            //echo "<br> control name ---> $controllerName";

            $methodName = $request->getmethod();
            //echo "<br> methodname ---> $methodName";

            $methodParameters = $request->getparameters();
            //echo "<br> method parameter ---> ";
            //var_dump($methodParameters);

            $controllerClassName = "controllers\\". $controllerName;
            //echo "<br> control class name ---> ";
            //var_dump($controllerClassName);

            $controller = new $controllerClassName;
            /*
            echo "<br> el controller final es ---> ";
            var_dump($controller);
            echo "<br>";

            echo "<br> PARAMETERS  ---> ";
            var_dump($methodParameters);
            echo "<br><br>";
            */
            if(!isset($methodParameters))
                call_user_func(array($controller, $methodName));
            else
                call_user_func_array(array($controller, $methodName), $methodParameters);
        }
    }
?>