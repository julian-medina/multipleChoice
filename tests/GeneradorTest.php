<?php

namespace multipleChoice;

use PHPUnit\Framework\TestCase;

class GeneradorTests extends TestCase 
{
    public function testGenerarArchivo(){
        $archivo='preguntas.yml';
        $diezpreg='diezpreguntas.yml';
        $ejemplo=new Generador($archivo);
        $this->assertTrue(isset($archivo));
        $this->assertTrue(isset($diezpreg));
        $this->assertTrue(isset($ejemplo));
        $this->assertTrue(isset($ejemplo2));
        $this->assertEquals(25,$ejemplo->cantidadPreguntas());
        $this->assertNotEquals(10,$ejemplo->cantidadPreguntas());
    }
}
