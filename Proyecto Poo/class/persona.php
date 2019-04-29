<?php
  class persona{
  	    private $codigoUsuario;
		private $nombre; 
		private $apellido;
		
		 public function __construct(
        $codigoUsuario,
    	$nombre,
    	$apellido
    ){     $this->codigoUsuario = $codigoUsuario;
           $this->nombre = $nombre;
           $this->apellido = $apellido;
	 }
	  public function getcodigoUsuario()
        {
                return $this->codigoUsuario;
        }

        
       
        public function setcodigoUsuario($codigoUsuario)
        {
                $this->codigoUsuario = $codigoUsuario;

                return $this;
        }

     
        public function setnombre($apellido)
        {
                $this->apellido = $apellido;

                return $this;
        }

         public function getnombre()
        {
                return $this->nombre;
        }
        
        
    public function guardarPersona(){

        $personas = json_decode(file_get_contents("../data/persona.json"),true);
                
        $t["codigoPersona"]=($personas[count($personas)-1]["codigoPersona"])+1;
        $t["nombre"]=$this->nombre;
        $t["apellido"]=$this->apellido;
                
        $personas[] = $t;
        $archivo = fopen("../data/persona.json","w");
        fwrite($archivo, json_encode($personas)."\n");
    }

    public function obtenerUltimo(){
        $personas = json_decode(file_get_contents("../data/persona.json"),true);
        return count($personas);


    }
}

?>