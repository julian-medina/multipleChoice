<?php

namespace multipleChoice;

use PHPUnit\Framework\TestCase;
use Symfony\Component\Yaml\Yaml;
class PreguntaTests extends TestCase 
{
    public function testFunciones(){
        $pregunta = Yaml::parse("descripcion: ¿Para una imagen de 500 x 500 pixeles con 180 colores diferentes guarado en distintos formatos, que archivo es el más espacio en disco ocupa?
        respuestas_correctas:
          - 'imagen.bmp'
        respuestas_incorrectas:
          - 'imagen.jpg'
          - 'imagen.gif'
          - 'imagen.png'
        ocultar_opcion_todas_las_anteriores: true
        ocultar_opcion_ninguna_de_las_anteriores: true");
        $preguntaarmada = new Pregunta ($pregunta,1);
        $this->assertTrue(isset($pregunta));
        $this->assertTrue(isset($preguntaarmada));
        $this->assertNotEquals($preguntaarmada->getRespuestas(),
        "'imagen.bmp'
        'imagen.jpg'
        'imagen.gif'
        'imagen.png'");
        $this->assertEquals($preguntaarmada->getNumero(),1);
        $this->assertEquals($preguntaarmada->getCantRespuestas(),4);
        $this->assertEquals($preguntaarmada->getDescripcion(),"¿Para una imagen de 500 x 500 pixeles con 180 colores diferentes guarado en distintos formatos, que archivo es el más espacio en disco ocupa?");
        $this->assertEquals($preguntaarmada->getRespCorrectas(),"'imagen.bmp'");
        $this->assertEquals($preguntaarmada->getRespIncorrectas(),
        "'imagen.jpg'
        'imagen.gif'
        'imagen.png'");
    }
}