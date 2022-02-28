<?php
	include "conexion.php";
	/**
	 * 
	 */
	class unidad
	{
		private $conn;
		private $link;
		function __construct()
		{
			$this->conn  = new conexion();
			$this->link  = $this->conn->conectar();
		}
	
		public function getUnidad()
		{
			$query  = "SELECT * FROM unidad_c";
			$result = mysqli_query($this->link, $query);
			$data   = array();	
			while ($data[] = mysqli_fetch_assoc($result));
			array_pop($data);
			return $data;	
		}

		public function newUnidad($data)
		{
			$query  = "INSERT INTO unidad_c(unidad_nom,fecha_inicio,fecha_entrega,descripcion,ponderacion,materia_p,maestro) VALUES('".$data['unidad_c']."','".$data['fecha_i']."', '".$data['fecha_e']."', '".$data['descripcion']."', '".$data['ponderacion']."', '".$data['materia_pert']."', '".$data['maestro']."')";
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
		
		public function deleteUnidad($id=NULL){
			if (!empty($id)) {
				$query = "DELETE FROM unidad_c WHERE id_unidad = " .$id;
				$result = mysqli_query($this->link, $query);
				if (mysqli_affected_rows($this->link)>0) {
					return true;
				}else{
					return false;
				}
			}
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