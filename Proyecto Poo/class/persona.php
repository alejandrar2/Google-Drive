<?php
  class persona{
  	    private $codigoUsuario;
		private $nombre; 
		private $apellido;
		
		 public function __construct(
    	$nombre,
    	$apellido,
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



	 public function getnombre()
        {
                return $this->nombre;
        }

     
        public function setnombre($apellido)
        {
                $this->apellido = $apellido;

                return $this;
        }
         public function getnombre()
        {
                return $this->apellido;
        }
         public function agregar()
        {
               
        }
         public function buscar()
        {
               
        }
        public function obtenerUltimo()
        {
               
        }


        


}
?>