<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<link rel="shortcut icon" href="img/Desktop2.png" type="image/png">
	<link rel="stylesheet" href="css/armygames.css">
	<link rel="stylesheet" href="css/media-armygames.css">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-2.2.4.js"></script>
	<title>CYBERPATRIOT</title>
</head>
<body>
    <script type="text/javascript">

    $(function(){
        $('.preloader_bg, .preloader_content').fadeIn(0);
	    $("body").css("overflow", "hidden");
        $(window).load(function(){
            $('.preloader_bg').delay(250).fadeOut(100);
            $('.preloader_content').delay(250).fadeOut(150);
		    $("header img").addClass("anilogo");
		    $("body").css("overflow", "auto");
        });
    	
    });

    let vh = window.innerHeight * 0.01;
	document.documentElement.style.setProperty('--vh', `${vh}px`);

    window.addEventListener('resize', () => {
	  let vh = window.innerHeight * 0.01;
	  document.documentElement.style.setProperty('--vh', `${vh}px`);
	});
    </script>
    <div class="preloader_bg"></div>
    <div class="preloader_content">
    	<div class="loader"></div>
    </div>

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