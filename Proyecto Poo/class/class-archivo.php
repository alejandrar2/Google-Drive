<?php
  class Archivo{
		private $codigoArchivo;
        private $codigoUsuario; 
        private $codigoCartpeta;
		private $extencion;
        private $nombre;
        private $ruta;
        private $fecha;
        


		
		 public function __construct(
    	$codigoArchivo,
        $codigoCarpeta,
        $codigoUsuario,
        $nombre,
        $extencion,
        $ruta,
        $fecha
        
    
    ){
		   $this->codigoArchivo = $codigoArchivo;
           $this->codigoCarpeta = $codigoCarpeta;
           $this->codigoUsuario = $codigoUsuario;
           $this->nombre = $nombre;
		   $this->extencion = $extencion;
           $this->ruta = $ruta;
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
                $t["codigoCarpeta"]=$this->codigoCarpeta;
                $t["codigoUsuario"]=$this->codigoUsuario;
                $t["nombre"]=$this->nombre;
                $t["extencion"]=$this->extencion;
                $t["ruta"]=$this->ruta;
                $t["fecha"]=$this->fecha;

                
                $archivos[] = $t;
                $arc = fopen("../data/archivo.json","w");
                fwrite($arc, json_encode($archivos));
        }

        public static function obtenerArchivos($nombreCarpeta, $usuario){
            $archivos = json_decode(file_get_contents("../data/archivo.json"),true);
            include_once 'class-carpeta.php';

            $idCarpeta = Carpeta::obtenerId($nombreCarpeta,1);

            $tem = array();
            $con=0;
        
            for ($i=0; $i < count($archivos); $i++) { 
                if ($archivos[$i]["codigoUsuario"]==$usuario && $archivos[$i]["codigoCarpeta"]==$idCarpeta) {
                   $tem[$con]=$archivos[$i];
                   $con++;
                }
            }
            return json_encode($tem);
        }


    }



    
?>