<?php 
    namespace controllers;

    use daos\VehicleDAO as VehicleDAO;

    class Vehicles{

        private $vehicleDAO;
        
        public function __construct()
        {
            //echo "<br>constructor";
            $this->vehicleDAO = new VehicleDAO();
            //echo "<br>dao inicado";
        }

        public function index(){
            //echo "<br>Index del control se viene la vista";
            //echo FRONT_ROOT;
            require_once(VIEWS."vehicles\add.php");
        }

        public function Add($marca=null, $modelo=null, $patente=null, $anio=null, $motor=null, $color=null){

            /*
            echo "<br> Aca llamo al dao";
            echo "<br> marca --> $marca";
            echo "<br> modelo --> $modelo";
            echo "<br> patente --> $patente";
            echo "<br> anio --> $anio";
            echo "<br> motor --> $motor";
            echo "<br> color --> $color";
            */
            $this->vehicleDAO->add($marca, $modelo, $patente, $anio, $motor, $color);
            //require_once(VIEWS."vehicles\add.php");
            echo "<script> alert('Vehiculo registrado exitosamente.'); </script>";
            $this->index();
        }
       
    }


?>