<?php
  class Carpeta{
		private $codigoCarpeta; 
		private $codigoUsuario;
        private $nombre;
        private $fecha;

		
<<<<<<< HEAD
	public function __construct(
        $codigoCarpeta,
    	$codigoArchivo,
=======
		 public function __construct(
    	$codigoCarpeta,
>>>>>>> 48ab91cdae7fc74468e6682e3fe96f38e385dac4
    	$codigoUsuario,
        $nombre,
        $fecha
    
    ){
		   $this->codigocarpeta = $codigoCarpeta;
<<<<<<< HEAD
		   $this->codigoarchivo = $codigoArchivo;
=======
>>>>>>> 48ab91cdae7fc74468e6682e3fe96f38e385dac4
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

        
         */ 
        public function setfecha($fecha)
        {
                $this->fecha = $fecha;

                return $this;
        }

        public static function obtenerId($carpeta){
            $carpetas = json_decode(file_get-contents("../data/carpeta.json"),true);

            for ($i=0; $i < count($carpetas); $i++) { 
                # code...
                if ($carpetas[$i]["nombre"]==$carpeta) {
                    return $i;
                }
            }

    }

 }
?>