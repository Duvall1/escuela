<?php
	include "unidad.php";

	$unidad = new unidad;
	if (isset($_POST['crear'])) {
		if ($unidad->newUnidad($_POST) ) {
			header('location: ../../lista_actividades.php?page=new&success=true');
		}
		else{
			header('location: ../../lista_actividades.php?page=new&error=true');
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
		if ($unidad->deleteUnidad($_GET['id'])) {
			header('location: ../../lista_actividades.php?page=delete&id=' .$_GET['id']. 'success=true');
		}
		else{
			header('location: ../../lista_actividades.php?page=delete&id=' .$_POST['id']. 'success=true');
		}
	}

?>