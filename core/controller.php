<?php
	include 'conexion.php';
	$pdo = new Conexion();

	if($_SERVER['REQUEST_METHOD'] == 'GET'){
		$cmd = 'SELECT name, password FROM userlist WHERE email =:email';
		$sql = $pdo->prepare($cmd);

		$sql->bindValue(':email', $_GET['email'], PDO::PARAM_STR);
		$sql->execute();
		$sql->setFetchMode(PDO::FETCH_OBJ);

		$data 		= $sql->fetch();
		$response	= array(
			'success' => FALSE
		);

		if($data){
			if (password_verify($_GET['password'], $data->password)){
				session_start();
				$_SESSION['login'] 		= TRUE;
				$_SESSION['userName'] 	= $data->name;

				$response = array(
					'success' => TRUE
				);
			}
		}

		header('HTTP/1.1 200 OK');
		exit(json_encode($response));
	}

	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$options = [
		    'cost' => 12
		];
		$hashPass = password_hash($_POST['password'], PASSWORD_BCRYPT, $options);

		$cmd = '
			INSERT INTO userlist
				(name, email, password) 
			VALUES
				(:name, :email, :password)
		';
		$sql = $pdo->prepare($cmd);

		$sql->bindValue(':name', $_POST['name'], PDO::PARAM_STR);
		$sql->bindValue(':email', $_POST['email'], PDO::PARAM_STR);
		$sql->bindValue(':password', $hashPass, PDO::PARAM_STR);

		$sql->execute();

		$response = array(
			'success' => FALSE
		);

		if ($pdo->lastInsertId()){
			$response = array(
				'success' => TRUE
			);
		}

		header('HTTP/1.1 200 OK');
		exit(json_encode($response));
	}