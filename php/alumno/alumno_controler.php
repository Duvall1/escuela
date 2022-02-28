<?php
	include "alumno.php";

	$alumno = new alumno;
	if (isset($_POST['crear'])) {
		if ($alumno->newAlumno($_POST) ) {
			header('location: ../../lista_alumno.php?page=new&success=true');
		}
		else{
			header('location: ../../lista_alumno.php?page=new&error=true');
		}
	}

	if (isset($_POST['editar'])) {
		if ($users->setEditUser($_POST)) {
			header('location: ../../perfil/editar_usuario.php?page=edit&id=' .$_POST['id']. 'success=true');
		}
		else{
			header('location: ../../perfil/editar_usuario.php?page=edit&id=' .$_POST['id']. 'error=true');
		}
	}
	if (isset($_POST['validar'])) {
		if ($users->validarUser($_POST)) {
			header('location: ../../inicio.php?page=validar&id=' .$_POST['id']. 'success=true');
		}
		else{
			header('location: ../../?page=validar&id=' .$_POST['id']. 'error=true');
		}
	}

	if (isset($_GET['delete'])) {
		if ($alumno->deleteUser($_GET['delete'])) {
			header('location: ../../lista_alumno.php?page=delete&id=' .$_GET['delete']. 'success=true');
		}
		else{
			header('location: ../../lista_alumno.php?page=delete&id=' .$_GET['delete']. 'success=false');
		}
	}

?>