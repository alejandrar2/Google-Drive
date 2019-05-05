<?php
  class Carpeta{
		private $codigoCarpeta; 
        private $carpeta;
		private $codigoUsuario;
        private $nombre;
        private $fecha;

		

	public function __construct(
        $codigoCarpeta,
        $carpeta,
        $codigoUsuario,    	
        $nombre,
        $fecha
    
    ){
		   $this->codigocarpeta = $codigoCarpeta;
		   $this->carpeta = $carpeta;
           $this->codigoUsuario = $codigoUsuario;
           $this->nombre = $nombre;
           $this->fecha = $fecha;
         
		 }
		 
        public function getcodigoCarpeta()
        {
                return $this->codigoCarpeta;
        }

         
        public function setcodigoCarpeta($codigoCarpeta)
        {
                $this->codigoCarpeta = $codigoCarpeta;

                return $this;
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

         public function getnombre()
        {
                return $this->nombre;
        }

        
       
        public function setnombre($nombre)
        {
                $this->nombre = $nombre;

                return $this;
        }

         public function getfecha()
        {
                return $this->fecha;
        }

        

        public function setfecha($fecha)
        {
                $this->fecha = $fecha;

                return $this;
        }

        public static function obtener($carpeta, $usuario){
            $carpetas = json_decode(file_get_contents("../data/carpeta.json"),true);
            $tem = array();
            $con=0;

            for ($i=0; $i < count($carpetas); $i++) { 
                if ($carpetas[$i]["CodigoUsuario"]==$usuario && $carpetas[$i]["carpeta"]==$carpeta ) {
                   $tem[$con]=$carpetas[$i];
                   $con++;
                }
            }
            return json_encode($tem);
        }

        
        public function agregarCarpeta(){
                $carpetas = json_decode(file_get_contents("../data/carpeta.json"),true);

                $t["codigoCarpeta"]=( $carpetas[count($carpetas)-1]["codigoCarpeta"] )+1;;
                $t["carpeta"]=$this->carpeta;
                $t["CodigoUsuario"]=$this->codigoUsuario;
                $t["nombre"]=$this->nombre;
                $t["fecha"]=$this->fecha;
                
                $carpetas[] = $t;
                $archivo = fopen("../data/carpeta.json","w");
                fwrite($archivo, json_encode($carpetas));  

        }

        public static function obtenerId($nombreCarpeta, $codigoUsuario){
            $carpetas = json_decode(file_get_contents("../data/carpeta.json"),true);

            for ($i=0; $i < count($carpetas); $i++) { 
                if ($carpetas[$i]["CodigoUsuario"]==$codigoUsuario && $carpetas[$i]["nombre"]==$nombreCarpeta ) {
                   return $carpetas[$i]["codigoCarpeta"];
                }
            }
            
        }

       

}
?>