<?php

namespace multipleChoice;

use PHPUnit\Framework\TestCase;
use Symfony\Component\Yaml\Yaml;
class PreguntaTests extends TestCase 
{
    public function testFunciones(){
        $archivo='preguntas.yml';
        $preguntasyml = Yaml::parseFile($archivo);
        $preguntaarmada = new Pregunta ($preguntasyml['preguntas'][9],1);
        $this->assertTrue(isset($preguntasyml));
        $this->assertTrue(isset($preguntaarmada));
        $this->assertNotEquals($preguntaarmada->getRespuestas(),
        "'imagen.bmp'
        'imagen.jpg'
        'imagen.gif'
        'imagen.png'");
        $this->assertEquals($preguntaarmada->getNumero(),1);
        $this->assertEquals($preguntaarmada->getCantRespuestas(),4);
        $this->assertNotEquals($preguntaarmada->getDescripcion(),FALSE);
        $this->assertNotEquals($preguntaarmada->getRespCorrectas(),FALSE);
        $this->assertNotEquals($preguntaarmada->getRespIncorrectas(),FALSE);
    }
}