<?php
    namespace daos;

    use PDOException;

    class VehicleDAO{

        private $connection;
        private $tableName = "Vehicle";

        public function add($marca, $modelo, $patente, $anio, $motor, $color){
            try{
                $query = "insert into $this->tableName (marca, modelo, patente, anio, motor, color) values (:marca, :modelo, :patente, :anio, :motor, :color);";
                $this->connection = Connection::GetInstance();
                $parameters['marca'] = $marca;
                $parameters['modelo'] = $modelo;
                $parameters['patente'] = $patente;
                $parameters['anio'] = $anio;
                $parameters['motor'] = $motor;
                $parameters['color'] = $color;
                $this->connection->ExecuteNonQuery($query, $parameters);
            }
            catch(PDOException $ex){
                echo "<br> Error al agragar";
                throw $ex;
            }
        }
    }
?>