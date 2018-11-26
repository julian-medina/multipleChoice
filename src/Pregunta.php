<?php
namespace multipleChoice;
use Symfony\Component\Yaml\Yaml;
class Pregunta {
    protected $numero;
    protected $descripcion;
    protected $respuestas;
    protected $respuestas_correctas;
    protected $respuestas_incorrectas;
    protected $ocultar_opcion_todas_las_anteriores=false;
    protected $ocultar_opcion_ninguna_de_las_anteriores=false;
    protected $texto_ninguna_de_las_anteriores = "Ninguna de las anteriores";
    protected $todas = false;
    protected $ninguna = false;

    public function __construct($info, $num){
        $this->numero = $num;
        $this->descripcion=$info["descripcion"];
        $this->respuestas_correctas = $info["respuestas_correctas"];
        $this->respuestas_incorrectas = $info["respuestas_incorrectas"];
        if(isset($info["ocultar_opcion_todas_las_anteriores"])){
            $this->ocultar_opcion_todas_las_anteriores = $info["ocultar_opcion_todas_las_anteriores"];
        }
        if(isset($info["ocultar_opcion_ninguna_de_las_anteriores"])){
            $this->ocultar_opcion_ninguna_de_las_anteriores = $info["ocultar_opcion_ninguna_de_las_anteriores"];
        }
        if(isset($info["texto_ninguna_de_las_anteriores"])){
            $this->texto_ninguna_de_las_anteriores = $info["texto_ninguna_de_las_anteriores"];
        }
        if( count($this->respuestas_incorrectas) == 0) $this->todas = true;
        if( count($this->respuestas_correctas) == 0) $this->ninguna = true;
        $this->crearPackRepuestas();
    }

    public function crearPackRepuestas(){
        $this->respuestas = array_merge($this->respuestas_correctas, $this->respuestas_incorrectas);
        shuffle($this->respuestas);
    }

    public function getRespuestas(){
        return $this->respuestas;
    }

    public function getCantRespuestas(){
        return count($this->respuestas);
    }

    public function getNumero(){
        return $this->numero;
    }

    public function getDescripcion(){
        return $this->descripcion;
    }

    public function getRespCorrectas(){
        return $this->respuestas_correctas;
    }

    public function getRespIncorrectas(){
        return $this->respuestas_incorrectas;
    }

}