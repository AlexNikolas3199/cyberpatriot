<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset=UTF-8/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="img/Desktop2.png" type="image/png">
<link rel="stylesheet" href="css/armygames.css">
<link rel="stylesheet" href="css/media-armygames.css">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <title>CYBERPATRIOT</title>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="js/jQuizler.js"></script>

<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/jQuizler.css" />

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
</script>
<script type="text/javascript">
var questions = [
    {
        type: "choose",
        question: "Вопрос 1. Когда началась Великая Отечественная война? ",
        answers: [
            "8 мая 1941 года",
            "22 июня 1941 года",
            "11 августа 1941 года"
        ],
        correct: [2]
    },
    {
        type: "choose",
        question: "<h3>KDE, GNOME, Xfce - это названия...</h3>",
        answers: [
            "Оболочек операционной системы Linux",
            "Графических редакторов",
            "Браузеров",
			"Сред разработки",
			"Операционных систем"
        ],
        correct: [1]
    },
	{
        type: "choose",
        question: "<h3>FAT32, Ext2, NTFS - это...</h3>",
        answers: [
            "Названия различных операционных систем",
            "Названия различных файловых систем",
            "Виды кодировки файлов",
			"Расширения файлов"
        ],
        correct: [2]
    },
	{
        type: "choose",
        question: "<h3>Папка, которая выступает в качестве вершины файловой структуры?</h3>",
        answers: [
            "Корневая папка",
            "Начальная папка",
            "Стартовая папка"
        ],
        correct: [1]
    },
	{
        type: "choose",
        question: "<h3>Jpg, gif, png, tiff - это...</h3>",
        answers: [
            "Названия различных файловых систем",
            "Расширения графических файлов",
            "Расширения текстовых файлов"
        ],
        correct: [2]
    },
	{
        type: "choose",
        question: "<h3>Какой фирмой выпускается операционная система MacOS?</h3>",
        answers: [
            "Apple",
            "IBM",
            "HP",
			"Acer"
        ],
        correct: [1]
    },
	{
        type: "choose",
        question: "<h3>Исторически первая операционная система семейства Windows?</h3>",
        answers: [
            "Windows 3.0",
            "Windows 3.1",
            "Windows NT",
			"Windows 95"
        ],
        correct: [3]
    },
	{
        type: "choose",
        question: "<h3>Дистрибутив Ubuntu имеет в качестве графической рабочей среды...</h3>",
        answers: [
            "KDE",
            "Gnome",
            "Xfce",
			"lxde"
        ],
        correct: [2]
    },
	{
        type: "choose",
        question: "<h3>Каково принципиальное отличие Linux от Windows?</h3>",
        answers: [
            "Простота использования",
            "Наличие нескольких графических оболочек",
			"Открытость кода операционной системы",
			"Широкая известность и популярность"
        ],
        correct: [3]
    },
	{
        type: "choose",
        question: "<h3>Windows 3.1 - это?</h3>",
        answers: [
            "Исторически первая операционная система Microsoft",
            "Одна из оболочек операционной системы MS DOS",
            "Среда программирования",
			"Текстовый редактор"
        ],
        correct: [2]
    },
	{
        type: "choose",
        question: "<h3>Как зовут создателя операционной системы Linux?</h3>",
        answers: [
            "Билл Гейтс",
            "Эндрю Таненбаум",
            "Пол Аллен",
			"Линус Торвальдс"
        ],
        correct: [4]
    },
	{
        type: "choose",
        question: "<h3>Логически связанная совокупность данных или программ, для размещения которой во внешней памяти выделяется определенная область?</h3>",
        answers: [
            "Файл",
            "Папка",
            "Документ",
			"Раздел"
        ],
        correct: [1]
    },
	{
        type: "choose",
        question: "<h3>Одна из транзитных частей операционных систем?</h3>",
        answers: [
            "Ядро",
            "Драйверы устройств",
            "Прикладные программы",
			"Системный загрузчик"
        ],
        correct: [4]
    },
    {
        type: "choose",
        question: "<h3>Google, FireFox ,Opera - это названия...</h3>",
        answers: [
            "Оболочек операционной системы Linux",
            "Графических редакторов",
            "Браузеров",
            "Сред разработки"
        ],
        correct: [3]
    }
];

$("document").ready(function(){
    $("#jQuizler").jQuizler(questions);
});

</script>
</head>
<body>
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
            <address>cyberpatriot@gmail.com</address>
     </form>

    <nav>
        <a href="index.php"><img src="img/Desktop2.png" alt=""></a>
        <a href="index.php#tournament">О проекте «Киберпатриот»</a>
        <div class="linkgames">
            <p>киберспортивные мероприятия</p>
            <ul>
                <li><a href="index.php#section1">CS:GO</a></li>
                <li><a href="index.php#section2">WoT</a></li>
                <li><a href="index.php#section3">лазертаг</a></li>
                <li><a href="index.php#section4">лагерь</a></li>
            </ul>
        </div>
        <a href="#">тест по истории вов</a>
        <a href="aboutus.php">О нас</a>
        <a href="news.php">Новости</a>
        <a href="photoreport.php">пресс-центр</a>
    </nav>
    <div class="testbox">

        <div id="jQuizler" class="main-quiz-holder">
            <h3>тест по истории Великой отечественной войны</h3>
    		<p><img src="img/Desktop2.png" /></p>
            <button class="btn btn-large">Начать тест</button>
        </div>

    </div>