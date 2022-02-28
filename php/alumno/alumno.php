<?php
	include "conexion.php";
	/**
	 * 
	 */
	class alumno
	{
		private $conn;
		private $link;
		function __construct()
		{
			$this->conn  = new conexion();
			$this->link  = $this->conn->conectar();
		}
	
		public function getAlumno()
		{
			$query  = "SELECT * FROM alumnos";
			$result = mysqli_query($this->link, $query);
			$data   = array();	
			while ($data[] = mysqli_fetch_assoc($result));
			array_pop($data);
			return $data;	
		}

		public function newAlumno($data)
		{
			$query  = "INSERT INTO alumnos(nombres, apellidos, cedula,  tlf, nacimiento,curso,  nombre_rep, discapacidad) VALUES('".$data['nombre']."','".$data['apellido']."', '".$data['cedula']."',  '".$data['tlf']."', '".$data['nacimiento']."','".$data['grado']."', '".$data['nombre_rep']."', '".$data['discapacidad']."' )";
			$result = mysqli_query($this->link, $query);
			if (mysqli_affected_rows($this->link) > 0){
				return true;
			}else {
				return false;
			}
		}
		public function getEstadisticaByN()
		{
			$query  = "SELECT * FROM alumnos";
			$result = mysqli_query($this->link, $query);
			$data   = array();	
			while ($data[] = mysqli_fetch_assoc($result));
			array_pop($data);
			return $data;	
		}
		public function getEstadistica()
		{
			$query  = "SELECT SUM(est_p) AS suma, curso FROM alumnos GROUP BY (curso)";
			$result = mysqli_query($this->link, $query);
			$data   = array();	
			while ($data[] = mysqli_fetch_assoc($result));
			array_pop($data);
			rsort($data);
			return $data;	
		}	
		public function getUserById($id=NULL)
		{
			
				$query  = "SELECT * FROM alumnos WHERE id_alumno =" .$id;
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
		
		public function deleteUser($id){
		
				$query = "DELETE FROM alumnos WHERE id_alumno =" .$id;
				$result = mysqli_query($this->link, $query);
				if (mysqli_affected_rows($this->link)>0) {
					return true;
				}else{
					return false;
				
			}
		}
		public function getAlumnoEst()
		{
			$query  = "SELECT SUM(est_p) AS est, curso FROM alumnos GROUP BY curso";
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