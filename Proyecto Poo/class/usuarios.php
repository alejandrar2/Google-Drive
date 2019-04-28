<?php
  class usuario{
  	    private $codigoUsuario;
  	    private $codigoPersona;
		private $correo1; 
		private $correo2;
		private $contra1;
		private $contra2;
		
		 public function __construct(
		$codigoUsuario,
		$codigoPersona,
    	$correo1,
    	$correo2,
    	$contra1,
    	$contra2
    ){
		$this->codigoUsuario = $codigoUsuario;
		$this->codigoPersona =$codigoPersona;
		$this->correo1 = $correo1;
		$this->correo2 = $correo2;
        $this->contra1 = $contra1;
        $this->contra2 = $dato2;
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

		 
        public function getcorreo1()
        {
                return $this->correo1;
        }

        
      
        public function setcorreo1($correo1)
        {
                $this->correo1 = $correo1;

                return $this;
        }
         public function getcorreo2()
        {
                return $this->correo2;
        }

        
        
        public function setcorreo2($correo2)
        {
                $this->correo2 = $correo2;

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
        $personas = json_decode(file_get_contents("../data/personas.json"),true);
                
        $t["codigoTarjeta"]=($personas[count($personas)-1]["codigoUsuario"])+1;
        $t["codigoUsuario"]=$this->codigoUsuario;
        $t["correo1"]=$this->correo1;
        $t["correo2"]=$this->correo2;
        $t["contra1"]=$this->contra1;
        $t["contra2"]=$this->contra2;
                
        $personas[] = $t;
        $archivo = fopen("../data/personas.json","w");
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