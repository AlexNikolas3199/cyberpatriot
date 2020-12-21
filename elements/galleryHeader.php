<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<link rel="shortcut icon" href="img/Desktop2.png" type="image/png">
	<link rel="stylesheet" href="css/armygames.css">
	<link rel="stylesheet" href="css/media-armygames.css">
	<link rel="stylesheet" href="css/lightbox.min.css">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<script src="js/lightbox-plus-jquery.min.js"></script>
	<title>CYBERPATRIOT</title>
</head>
<body>
	<input type="checkbox" class="navbtn" name="" checked="сhecked">
	<span class="icon"></span>
	<input type="checkbox" class="mailbtn" name="">
	<div class="givequest">
		<i class="fa fa-comments" aria-hidden="true"></i>
		<i class="fa fa-times" aria-hidden="true"></i>
	</div>

	<form  action="mail.php" method="POST">
		<h1>Задать вопрос</h1>
       		<div class="important">
				<h3>* - Обязательно к заполнению</h3>
			</div>
		<div class="mailbox">
				<h3>Ваше ФИО *</h3>
				<input name="name" placeholder="Оконешников Иван Иванович" required type="text">
		</div>
		<div class="mailbox">
				<h3>номер телефона *</h3>
				<input name="phone" type="text">
		</div>
		<div class="mailbox">
				<h3>Почта *</h3>
				<input name="mail" type="text">
		</div>
		<div class="mailbox">
				<h3>Сообщение</h3>
				<textarea name="someshet"></textarea>
		</div>
			<input type="submit" value="ОТПРАВИТЬ">
	        <address>cyberyakutia@mail.ru</address>
	 </form>