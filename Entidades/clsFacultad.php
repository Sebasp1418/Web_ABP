<?php 
	class clsFacultad{
		//atributos 
		private $intId;
		private $strDescripcion;

		//Constructor
		public function ClsFacultad(int $intId=null,string $strDescripcion){
        	$this->intId=$intId;
			$this->strDescripcion=$strDescripcion;
		}

		//propiedades
		public function getId
		{
			return $this->intId;
		}
		public function setId($intId)
		{
			$this->intId=$intId;
		}
		public function getDescripcion
		{
			return $this->strDescripcion;
		}
		public function setDescripcion($strDescripcion)
		{
			$this->strDescripcion=$strDescripcion;
		}
	}
 ?>