<?php
	include "maestro.php";

	$maestro = new maestro;
	if (isset($_POST['crear'])) {
		if ($maestro->newMaestro($_POST) ) {
			header('location: ../../registro_maestro.php?page=new&success=true');
		}
		else{
			header('location: ../../registro_maestro.php?page=new&error=true');
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
		if ($maestro->deleteMaestro($_GET['id'])) {
			header('location: ../../lista_maestro.php?page=delete&id=' .$_GET['id']. 'success=true');
		}
		else{
			header('location: ../../solicitudes.php?page=delete&id=' .$_GET['id']. 'success=false');
		}
	}


?>