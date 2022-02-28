<?php
	include "conexion.php";
	/**
	 * 
	 */
	class maestro
	{
		private $conn;
		private $link;
		function __construct()
		{
			$this->conn  = new conexions();
			$this->link  = $this->conn->conectar();
		}
	
		public function getMaestro()
		{
			$query  = "SELECT * FROM maestro";
			$result = mysqli_query($this->link, $query);
			$data   = array();	
			while ($data[] = mysqli_fetch_assoc($result));
			array_pop($data);
			return $data;	
		}

		public function newMaestro($data)
		{
			$query  = "INSERT INTO maestro(nombre, apellido, cedula, correo, telefono, especialidad) VALUES('".$data['nombre']."','".$data['apellido']."', '".$data['cedula']."', '".$data['correo']."', '".$data['telefono']."', '".$data['especialidad']."')";
			$result = mysqli_query($this->link, $query);
			if (mysqli_affected_rows($this->link) > 0){
				return true;
			}else {
				return false;
			}
		}

		public function getUserById($id=NULL)
		{
			
				$query  = "SELECT * FROM usuario WHERE id =" .$_SESSION['id'];
				$result = mysqli_query($this->link, $query);
				$data   = array();
  				while ($data[] = mysqli_fetch_assoc($result));
  				array_pop($data);
				return $data;	
			
		}
		
		public function setEditUser($data){
			$foto 	= $_FILES['imagen']['name'];
			$ruta 	= $_FILES['imagen']['tmp_name'];
			$destino= "imagen/" .$foto;
			copy($ruta, $destino);
				$query  = "UPDATE usuario SET nombres = '".$data['nombre']."', apellidos = '".$data['apellido']."', cedula = '".$data['cedula']."', nacimiento = '".$data['nacimiento']."', usuario = '".$data['usuario']."', pass = '".$data['pass']."', imagen_us = '".$destino."' ";
				$result = mysqli_query($this->link, $query);
				if ($result) {
					return true;
				}else{
					return false;
				}
			
		}
		
		public function deleteMaestro($id=NULL){
			if (!empty($id)) {
				$query = "DELETE FROM maestro WHERE id_maestro =" .$id;
				$result = mysqli_query($this->link, $query);
				if (mysqli_affected_rows($this->link)>0) {
					return true;
				}else{
					return false;
				}
			}
		}
		public function getEstadisticaByN()
		{
			$query  = "SELECT * FROM curso";
			$result = mysqli_query($this->link, $query);
			$data   = array();	
			while ($data[] = mysqli_fetch_assoc($result));
			array_pop($data);
			return $data;	
		}
		public function getEstadistica()
		{
			$query  = "SELECT SUM(est_v) AS suma, maestro, ano FROM curso GROUP BY (maestro)";
			$result = mysqli_query($this->link, $query);
			$data   = array();	
			while ($data[] = mysqli_fetch_assoc($result));
			array_pop($data);
			rsort($data);
			return $data;	
		}	
			public function getEstadisticaByInteg()
		{
			$query  = "SELECT maestro FROM curso";
			$result = mysqli_query($this->link, $query);
			$data   = array();	
			while ($data[] = mysqli_fetch_assoc($result));
			array_pop($data);
			rsort($data);
			return $data;	
		}
		public function getMaestroEst()
		{
			$query  = "SELECT SUM(est_v) AS est, ano FROM curso GROUP BY maestro";
			$result = mysqli_query($this->link, $query);
			$data   = array();	
			while ($data[] = mysqli_fetch_assoc($result));
			array_pop($data);
			return $data;	
		}
		public function validarUser($data){
			$query = "SELECT * FROM usuario WHERE usuario = '".$data['usuario']."'";
			$result = mysqli_query($this->link, $query);
			if ($result) {
				if (mysqli_num_rows($result) > 0) {
					$integrantes = mysqli_fetch_array($result, MYSQLI_ASSOC);
					if ($integrantes['pass'] == $data['pass']) {
						@session_start();
						$_SESSION['id_usuario'] = $integrantes['id'];
						$_SESSION['usuario'] = $integrantes['usuario'];
						$_SESSION['pass'] = $integrantes['pass'];
						mysqli_close($this->link);
						return true;
					}
					else{
						return false;
					}
					
				}
			}
		}

	}
	
?>