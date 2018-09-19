<?php 
	class clsAsignatura{
		// atributos 
		private $intMateriaId;
		private $StrCodigo;
		private $strDescripcion;
		private $intPrograma;
		private $strActivo;

		//Constructor 
		public function ClsAsignatura(int $intMateriaId=null,string $StrCodigo,int $intPrograma$,string $strActivo){
			$this->intMateriaId=$intMateriaId;
			$this->StrCodigo=$StrCodigo;
			$this->strDescripcion=$strDescripcion;
			$this->intPrograma=$intPrograma;
			$this->strActivo=$strActivo;
		}

		//propiedades
		public function getMateriaId
		{
			return $this->intMateriaId;
		}
		public function setMateriaId($intMateriaId)
		{
			$this->intMateriaId=$intMateriaId;
		}
		public function getCodigo
		{
			return $this->StrCodigo;
		}
		public function setCodigo($StrCodigo)
		{
			$this->StrCodigo=$StrCodigo;
		}
		public function getDescripcion
		{
			return $this->strDescripcion;
		}
		public function setDescripcion($strDescripcion)
		{
			$this->strDescripcion=$strDescripcion;
		}
		public function getPrograma
		{
			return $this->intPrograma;
		}
		public function setPrograma($intPrograma)
		{
			$this->intPrograma=$intPrograma;
		}
		public function getActivo
		{
			return $this->strActivo;
		}
		public function setActivo($strActivo)
		{
			$this->strActivo=$strActivo;
		}




	}
 ?>
