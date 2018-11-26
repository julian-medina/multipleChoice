<?php

namespace multipleChoice;
use Symfony\Component\Yaml\Yaml;
class Generador{
    protected $listaPreguntas;
    public function __construct($archivo){
        $preguntasyml = Yaml::parseFile($archivo);
        $arraypreguntas = $preguntasyml['preguntas'];
        shuffle($arraypreguntas);
        for($i = 0; $i < sizeof($arraypreguntas); $i++){
            $this->listaPreguntas[$i] = new Pregunta($arraypreguntas[$i], $i+1);
        }
    }

    public function cantidadPreguntas(){
        return count($this->listaPreguntas);
    }
    
    public function preguntas(){
        return $this->listaPreguntas;
    }
}
