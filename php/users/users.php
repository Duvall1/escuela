<?php
	include "conexion.php";
	/**
	 * 
	 */
	class users
	{
		private $conn;
		private $link;
		function __construct()
		{
			$this->conn  = new conexion();
			$this->link  = $this->conn->conectar();
		}
	
		public function getUser()
		{
			$query  = "SELECT * FROM usuario";
			$result = mysqli_query($this->link, $query);
			$data   = array();	
			while ($data[] = mysqli_fetch_assoc($result));
			array_pop($data);
			return $data;	
		}

		public function newUser($data)
		{
			$query  = "INSERT INTO usuario(nombres, usuario, pass, correo) VALUES('".$data['nombre']."','".$data['usuario']."', '".$data['pass']."','".$data['usuario']."')";
			$result = mysqli_query($this->link, $query);
			if (mysqli_affected_rows($this->link) > 0){
				return true;
			}else {
				return false;
			}
		}

				public function camUser($data1, $tip)
		{
			if ($tip == 'administrador') {
				$query  = "UPDATE usuario SET tipo_usu = 'corriente' WHERE id_usuario = '".$data1."'";
			}
			else{
				$query  = "UPDATE usuario SET tipo_usu = 'administrador' WHERE id_usuario = '".$data1."'";
			}
			
			$result = mysqli_query($this->link, $query);
			if (mysqli_affected_rows($this->link) > 0){
				return true;
			}else {
				return false;
			}
		}

		public function getUserById($id)
		{
				
				$query  = "SELECT * FROM usuario WHERE id_usuario = " .$id;
				$result = mysqli_query($this->link, $query);
				$data   = array();
  				while ($data[] = mysqli_fetch_assoc($result));
  				array_pop($data);
				return $data;	
			
		}
		
		public function setEditUser($data){
			session_start();
			copy($ruta, $destino);
				$query  = "UPDATE usuario SET nombres = '".$data['nombre']."', apellidos = '".$data['apellido']."', cedula = '".$data['cedula']."',usuario = '".$data['usuario']."', pass = '".$data['pass']."' WHERE id_usuario = '".$_SESSION['id_usuario']."' ";
				$result = mysqli_query($this->link, $query);
				if ($result) {
					return true;
				}else{
					return false;
				}
			
		}
		
		public function deleteUser($id=NULL){
			if (!empty($id)) {
				$query = "DELETE FROM usuarios WHERE id =" .$id;
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
						$_SESSION['id_usuario'] = $integrantes['id_usuario'];
						$_SESSION['usuario'] = $integrantes['usuario'];
						$_SESSION['pass'] = $integrantes['pass'];
						$_SESSION['tipo_usu'] = $integrantes['tipo_usu'];
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