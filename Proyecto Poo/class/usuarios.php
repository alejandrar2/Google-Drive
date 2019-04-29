<?php
  class usuario{
  	    private $codigoUsuario;
  	    private $codigoPersona;
		private $correo;
		private $contra1;
		private $contra2;
		
		 public function __construct(
		$codigoUsuario,
		$codigoPersona,
    	$correo,
    	$contra1,
    	$contra2
    ){
		$this->codigoUsuario = $codigoUsuario;
		$this->codigoPersona =$codigoPersona;
		$this->correo = $correo;
        $this->contra1 = $contra1;
        $this->contra2 = $contra2;
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
        public function getcodigoPersona()
        {
                return $this->codigoPersona;
        }

        
     
        public function setcodigoPersona($codigoPersona)
        {
                $this->codigoPersona = $codigoPersona;

                return $this;
        }

		 
        public function getcorreo()
        {
                return $this->correo;
        }

        
      
        public function setcorreo($correo)
        {
                $this->correo = $correo;

                return $this;
        }
        
        public function getcontra1()
        {
                return $this->contra1;
        }

        public function setcontra1($contra1)
        {
                $this->contra1 = $contra1;

                return $this;
        }
        public function getcontra2()
        {
                return $this->contra2;
        }

        public function setcontra2($contra2)
        {
                $this->contra2 = $contra2;

                return $this;
        }
        
        public function guardarUsuario(){
        $personas = json_decode(file_get_contents("../data/usuario.json"),true);
                
        $t["codigoUsuario"]=($personas[count($personas)-1]["codigoUsuario"])+1;
        $t["codigoUsuario"]=$this->codigoUsuario;
        $t["correo1"]=$this->correo;
        $t["contra1"]=$this->contra1;
        $t["contra2"]=$this->contra2;
                
        $personas[] = $t;
        $archivo = fopen("../data/usuario.json","w");
        fwrite($archivo, json_encode($personas));
    }
               
        
    public function buscar($codigo){
               
    }
         
    public function validarcontra($contra1, $contra2){
        if ($contra1==$contra2) {
            return true;
        }else{
            return false;
        }
    }



  }
?>