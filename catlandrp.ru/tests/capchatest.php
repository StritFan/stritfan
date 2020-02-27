<html>
	<head>
		<link rel="shortcut icon" href="images/icon.png">
		<title>CatLand RP - Приватный Майнкрафт Сервер</title>
		<link rel="stylesheet" href="style.css">
		<script src="scripts.js"></script>
		<meta charset="utf-8">
		<header>
			<img src="images/icon.png" width="90" height="90" alt="Логотип" align="left">
			<div>
				🐱 CATLANDRP.RU: Тест ReCaptcha
				<nav class="nav">
					<a href="index.php" class="pagelink">🎮 Начать играть</a>
					| <a href="https://www.donationalerts.com/r/alexp_yt" class="pagelink" target="_blank">🏧 Поддержать Проект</a>
					| <a href="about.html" class="pagelink">💬 О нас</a>
					| <a href="agreement.html" class="pagelink">📄 Пользовательское Соглашение</a>
					| <a href="faq.html" class="pagelink">💭 FAQ</a>
					| <a href="https://vk.com/catlandrpofficial" class="pagelink" target="_blank">📝 Блог</a>
					| <a href="passtoport.html" class="pagelink">🔒 PassToPort™</a>
				</nav>
			</div>
		</header></br>
	</head>
	<body>
	<form method="post">
		<script src="https://www.google.com/recaptcha/api.js"></script>
		<div class="g-recaptcha" data-sitekey="6LfhK7gUAAAAAM7IImK0cpMV_s5R7mivXI6HnmuB" align="center"></div>
		<input type="submit" name="submit_btn" id="center">
	</form>
	<p class="smallheadline" id="center">
	<?php
		if($_POST['submit_btn']){
			$response=$_POST['g-recaptcha-response'];

			if(!$response){
				echo "Заполните капчу!";
			}
			else{
				$url='https://www.google.com/recaptcha/api/siteverify';
				$secretkey='6LfhK7gUAAAAAAVIA5hzAfMTnx-NPhW3S7PT6Avc';
				$ip=$_SERVER['REMOTE_ADDR'];

				$query=$url.'?secret='.$secretkey.'&response='.$response.'&remoteip='.$ip;
				$answer=json_decode(file_get_contents($query));

				$answer_success=$answer->success;

				if($answer_success){
					exit('Капча пройдена!');
				}
			}
		}
	?>
	</p>
	</body>
</html>