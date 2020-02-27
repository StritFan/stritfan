<?php
	$nick = $_GET['nick'];
	$discord = str_replace("`", "#", $_GET['ds']);
	$email = $_GET['email'];
	$sex = $_GET['sex'];
	$password = $_GET['pass'];

	$key = $_COOKIE["yandexmoneykey"];
	$argkey = $_GET['key'];

	if($nick == null || $discord == null || $email == null || $sex == null || $password == null) {
		header( "Location: 411.html" );
		exit();
	}

	if(isset($_COOKIE["yandexmoneykey"]) && $argkey == $key){
		$connection = mysqli_connect('144.76.227.146', 'admin', '4T9a4M0p', 'players');
		header_remove();

		if($connection == false){
			$error = mysqli_connect_error();
			exit("Не удалось подключится к Базе Данных по причине:</br>".$error);
		}

		mysqli_query($connection, "INSERT INTO `data` (`nickname`, `regdate`, `sex`, `email`, `discord`, `pass`) VALUES ('$nick', '".date('Y-m-d H:i:s')."', '$sex', '$email', '$discord', '$password')");
		mysqli_close($connection);

		unset($_COOKIE['yandexmoneykey']);

		header( "Location: success.html" );
	}
	else {
		header( "Location: 424.html" );
	}
?>