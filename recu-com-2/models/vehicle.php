<?php namespace models;

class Vehicle {

    private $marca;
    private $modelo;
    private $patente;
    private $anio;
    private $motor;
    private $color;

    public function getMarca() {
        return $this->marca;
    }
    public function setMarca($value) {
        $this->marca = $value;
    }
    public function getModelo() {
        return $this->modelo;
    }
    public function setModelo($value) {
        $this->modelo = $value;
    }
    public function getPatente() {
        return $this->patente;
    }
    public function setPatente($value) {
        $this->patente = $value;
    }
    public function getAnio() {
        return $this->anio;
    }
    public function setAnio($value) {
        $this->anio = $value;
    }
    public function getMotor() {
        return $this->motor;
    }
    public function setMotor($value) {
        $this->motor = $value;
    }
    public function getColor() {
        return $this->color;
    }
    public function setColor($value) {
        $this->color = $value;
    }

}