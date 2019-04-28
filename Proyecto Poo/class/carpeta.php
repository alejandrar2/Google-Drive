<?php
  class usuario{
		private $codigoCarpeta; 
		private $codigoArchivo;
		private $codigoUsuario;
    private $nombre;
    private $fecha;

		
		 public function __construct(
    	$codigoCarpeta,
    	$codigoArchivo,
    	$codigoUsuario,
      $nombre,
      $fecha
    
    ){
		       $this->codigocarpeta = $codigoCarpeta;
		       $this->codigoarchivo = $codigoArchivo;
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

         public function getcodigoArchivo()
        {
                return $this->codigoArchivo;
        }

        
       
        public function setcodigoArchivo($codigoArchivo)
        {
                $this->codigoArchivo = $codigoArchivo;

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

 }
?>