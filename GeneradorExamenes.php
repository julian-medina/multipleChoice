
   class Generador {
    protected $listaPreguntas;
    
	public function __construct($file){
        $pregs_text = Yaml::parseFile($file);;
        $pregs = $pregs_text['preguntas'];
        shuffle($pregs);
        for($i = 0; $i < 10; $i++){
            $this->listaPreguntas[$i] = new Pregunta($pregs[$i], $i+1);
        }
    }
   
   public function getCantPreguntas(){
        return count($this->listaPreguntas);
    }
    public function getListaPreguntas(){
        return $this->listaPreguntas;
    }
}
