<?php


	$user_autenticado = false;

	// usuario sistema temporario teste 
	$usuarios_app = array(
		array('email' => 'teste@adm.com', 'senha' => '123'),
		array('email' => 'usuario@teste.com', 'senha' => '123'),
	);


	foreach($usuarios_app as $user){
		
		if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha'])
		{
			$user_autenticado = true;
		} 

	}

	if($user_autenticado)
	{
		// autenticado
		echo "autenticado";
	} else {
		// não autenticado
		header('Location: index.php?login=erro');
	}
		

?>