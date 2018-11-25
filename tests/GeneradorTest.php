<?php
namespace multipleChoice;
use PHPUnit\Framework\TestCase;

class generadorTests extends TestCase 
{
    public function(){
        $archivo='/preguntas.yml';
        $ejemplo=new Generador($archivo);
        this->assertEquals(0,0);
    }
}
