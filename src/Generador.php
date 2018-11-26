<?php

namespace multipleChoice;
use Symfony\Component\Yaml\Yaml;
class Generador{
    protected $listaPreguntas;
    public function __construct($archivo){
        $pregs_text = Yaml::parseFile($archivo);;
        $pregs = $pregs_text['preguntas'];
        shuffle($pregs);
        for($i = 0; $i < $this->cantidadPreguntas(); $i++){
            $this->listaPreguntas[$i] = new Pregunta($pregs[$i], $i+1);
        }
    }

    public function cantidadPreguntas(){
        return count($this->listaPreguntas);
    }
    
    public function preguntas(){
        return $this->listaPreguntas;
    }
}
