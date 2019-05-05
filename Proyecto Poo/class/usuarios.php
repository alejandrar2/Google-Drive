<?php
  class usuario{
  	    private $codigoUsuario;
  	    private $codigoPersona;
		private $correo;
		private $contra1;
		private $contra2;
		private $tipo;

		 public function __construct(
		$codigoUsuario,
		$codigoPersona,
    	$correo,
    	$contra1,
    	$contra2,
        $tipo
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
        $t["codigoPersona"]=$this->codigoPersona;
        $t["correo"]=$this->correo;
        $t["contra1"]=$this->contra1;
        $t["contra2"]=$this->contra2;
        $t["tipo"]=1;

                
        $personas[] = $t;
        $archivo = fopen("../data/usuario.json","w");
        fwrite($archivo, json_encode($personas));
    }

     public function guardarAdministrador(){
        $personas = json_decode(file_get_contents("../data/usuario.json"),true);
                
        $t["codigoUsuario"]=($personas[count($personas)-1]["codigoUsuario"])+1;
        $t["codigoPersona"]=$this->codigoPersona;
        $t["correo"]=$this->correo;
        $t["contra1"]=$this->contra1;
        $t["contra2"]=$this->contra2;
        $t["tipo"]=2;

                
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
    
    public static function validarCorreo($correo){
        $usuario = json_decode(file_get_contents("../data/usuario.json"),true);

        for($i=0; $i < count($usuario); $i++){
            if($usuario[$i]["correo"] == $correo){
                return true;
            }
        }
        return null;
    }

    public static function validarContrasenia($contrasenia){
        $usuarios = json_decode(file_get_contents("../data/usuario.json"),true);

        for($i=0; $i < count($usuarios); $i++){
            if($usuarios[$i]["contra1"]==$contrasenia){
                return true;
            }
        }
        return false;
    }

    public static function obtenerUsuario($contrasenia){
            $usuarios = json_decode(file_get_contents("../data/usuario.json"),true);

            for ($i=0; $i < count($usuarios); $i++) { 
                if ($usuarios[$i]["contra1"] == $contrasenia){
                    return $usuarios[$i]["codigoUsuario"];
                }
            }
            return null;
    } 



  }
?>