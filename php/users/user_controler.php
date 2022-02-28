<?php
	include "users.php";

	$users = new users;
	if (isset($_POST['crear'])) {
		if ($users->newUser($_POST) ) {
			header('location: ../../index.php?page=new&success=true');
		}
		else{
			header('location: ../../index.php?page=new&error=true');
		}
	}

	if (isset($_POST['editar'])) {
		if ($users->setEditUser($_POST)) {
			header('location: ../../edit_u.php?page=edit&id=' .$_POST['id']. 'success=true');
		}
		else{
			header('location: ../../edit_u.php?page=edit&id=' .$_POST['id']. 'error=true');
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

	if (isset($_POST['delete'])) {
		if ($users->deleteUser($_POST)) {
			header('location: ../../perfil/inicio.php?page=delete&id=' .$_POST['id']. 'success=true');
		}
		else{
			header('location: ../../perfil/inicio.php?page=delete&id=' .$_POST['id']. 'success=true');
		}
	}
	if (isset($_GET['cam_tip'])) {
		if ($users->camUser($_GET['id'], $_GET['tip'])) {
			header('location: ../../lista_maestro.php?page=delete&id=' .$_GET['id']. 'success=true');
		}
		else{
			header('location: ../../lista_maestro.php?page=delete&id=' .$_GET['id']. 'success=false');
		}
	}
?>