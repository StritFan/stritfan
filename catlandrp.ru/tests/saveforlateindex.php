<!DOCTYPE html>
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
				🐱 CATLANDRP.RU: Главная Страница
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
		<p class="headline" id="center">Покупка прохода на <a href="https://vk.com/catlandrpofficial">сервер CatLand RP</a>:</p></br>
	</head>
	<body>
		<p class="smallheadline" id="center">Ваш Игровой Псевдоним (Ник):</p>
		<div id="center">
			<input required placeholder="Ник-Нейм" class="textbox" name="nick">
				<a class="attention">*</a>
			</input>
		</div></br>
		
		<p class="smallheadline" id="center">Ваша учётная запись Discord:</p>
		<div id="center">
			<input required placeholder="Ваш Discord" class="textbox" name="discord">
				<a class="attention">*</a>
			</input>
		</div></br>
		
		<p class="smallheadline" id="center">Ваш e-mail:</p>
		<div id="center">
			<input required placeholder="Ваш E-mail" class="textbox" name="email">
				<a class="attention">*</a>
			</input>
		</div></br>
			
		<p class="smallheadline" id="center">О себе (1-3 предложения):</p>
		<div id="center">
			<input placeholder="Ваше Описание" class="textbox" name="about">
				<a class="attention">*</a></input>
			</input>
		</div></br>
		<p class="smallheadline" id="center">Пользовательское соглашение:</p></br>
		<div class="smallheadline" id="center">
			<input type="checkbox">Я подтверждаю, что прочитал(а) <a href="agreement.html" target="_blank">настоящее пользовательское соглашение</a> и полностью соглашаюсь с ним 
				<a class="attention">*</a>
			</input>
		</div></br>
		
		<p class="smallheadline" id="center">Пройдите капчу: <a class="attention">*</a></p></br>
		<script src="https://www.google.com/recaptcha/api.js"></script>
		<div class="g-recaptcha" data-sitekey="6LfhK7gUAAAAAM7IImK0cpMV_s5R7mivXI6HnmuB" align="center"></div>
		
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

		<p class="smallheadline" id="center"><a class="attention">*</a> - Обязательное поле</p></br>
		
		<p class="smallheadline" id="center">Выберите способ оплаты:</p>
		<p class="smallheadline" id="center"><big>Сумма: 15₽</big></p>
		<p class="smallheadline" id="center">(~5,73₴, ~0,48Br или ~88,62₸)</p></br>
		<form class="smallheadline" id="center" method="POST" action="https://money.yandex.ru/quickpay/confirm.xml">
			<input type="hidden" name="receiver" value="410015502409692">
			<input type="hidden" name="formcomment" value="CatLand RP: Проход на Серер">
			<input type="hidden" name="short-dest" value="CatLand RP: Проход на Серер">
			<input type="hidden" name="label" value="$order_id">
			<input type="hidden" name="quickpay-form" value="donate">
			<input type="hidden" name="targets" value="Транзакиция">
			<input type="hidden" name="sum" value="15" data-type="number">
			<input type="hidden" name="comment" value=<?php echo("Ты кот"); ?>>>
			<input type="hidden" name="need-fio" value="false">
			<input type="hidden" name="need-email" value="false">
			<input type="hidden" name="need-phone" value="false">
			<input type="hidden" name="need-address" value="false">
			<label>
				<input type="radio" name="paymentType" value="PC">Яндекс.Деньгами
			</label>
			<label>
				<input type="radio" name="paymentType" value="AC">Банковской картой
			</label>
			<label>
				<input type="radio" name="paymentType" value="MC">Балансом Мобильного
			</label></br>
			</br>
			<input align="center" type="submit" value="Купить!">
		</form>
		<br></br>
		<footer align="bottom">
			CatLand RP © 2018-2019
			<a href="https://vk.com/catlandrpofficial"><img src="images/VK.png" width="25" height="25" alt="ВКонтакте" align="right" class="image"></a>
		</footer>
	</body>
</html>