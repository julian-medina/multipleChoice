<?php

namespace multipleChoice;

use PHPUnit\Framework\TestCase;

class GeneradorTests extends TestCase 
{
    public function generarArchivoTests(){
        $archivo='/preguntas.yml';
        $ejemplo=new Generador($archivo);
        $this->assertTrue(isset($archivo));
        $this->assertTrue(isset($ejemplo));
    }
}
