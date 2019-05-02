<?php
  class Archivo{
		private $codigoArchivo;
        private $codigoUsuario; 
        private $codigoCartpeta;
		private $extencion;
        private $nombre;
        private $fecha;

		
		 public function __construct(
    	$codigoArchivo,
        $codigoUsuario
        $codigoCarpeta,
    	$extencion,
        $nombre,
        $fecha
    
    ){
		   $this->codigoArchivo = $codigoArchivo;
           $this->codigoCarpeta = $codigoCarpeta;
		   $this->extencion = $extencion;
           $this->nombre = $nombre;
           $this->fecha = $fecha;
         
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
         public function getcodigoCarpeta()
        {
                return $this->codigoArchivo;
        }

         
        public function setcodigoCarpeta($codigoCarpeta)
        {
                $this->codigoArchivo = $codigoArchivo;

                return $this;
        }

         public function getextencion()
        {
                return $this->extencion;
        }

        
       
        public function setextencion($extencion)
        {
                $this->extencion = $extencion;

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

        public function guardarArchivo(){
                $archivos = json_decode(file_get_contents("../data/archivo.json"),true);
                
                $t["codigoArchivo"]=( $archivos[count($archivos)-1]["codigoArchivo"] )+1;
                $t["codigoUsuario"]=$this->codigoUsuario;
                $t["codigoCarpeta"]=$this->codigoCarpeta;
                $t["extencion"]=$this->extencion;
                $t["nombre"]=$this->nombre;
                $t["fecha"]=$this->fecha;
                
                $archivos[] = $t;
                $arc = fopen("../data/archivo.json","w");
                fwrite($arc, json_encode($archivos));
        }

        public static function obtenerArchivo(){
           return file_get_contents("../data/archivo.json" );
        }



    }
?>