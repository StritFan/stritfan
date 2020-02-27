<?php
	$connection = mysqli_connect("144.76.227.146", 'root', '4T9a4M0p', 'players');

	if($connection == false){
		exit("Не удалось подключится к Базе Данных по причине:</br>".mysqli_connect_error());
	}

	echo "Соединение с Базой Данных прошло успешно!</br>";

	$result = mysqli_query($connection, "SELECT * FROM `data`");

	while ( ($record = mysqli_fetch_assoc($result))){
		print_r($record);
		echo "</br>";
	}

	mysqli_close($connection);
	echo "Закрытие соединения с Базой Данных прошло успешно!";
?>
