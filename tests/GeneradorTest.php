<?php

namespace multipleChoice;

use PHPUnit\Framework\TestCase;

class GeneradorTests extends TestCase 
{
    public function testGenerarArchivo(){
        $archivo='preguntas.yml';
        $diezpreg='diezpreguntas.yml';
        $ejemplo=new Generador($archivo);
        $ejemplo2=new Generador($diezpreg);
        $this->assertTrue(isset($archivo));
        $this->assertTrue(isset($diezpreg));
        $this->assertTrue(isset($ejemplo));
        $this->assertTrue(isset($ejemplo2));
        $this->assertEquals(25,$ejemplo->cantidadPreguntas());
        $this->assertNotEquals(10,$ejemplo->cantidadPreguntas());
        $this->assertEquals(10,$ejemplo2->cantidadPreguntas());
        $this->assertNotEquals(25,$ejemplo2->cantidadPreguntas());
        $this->assertNotEquals(FALSE,$ejemplo2->listaPreguntas());
    }
}
