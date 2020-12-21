<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>CYBERPATRIOT</title>
  	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>	
<?php
$connect = mysqli_connect(localhost , root , "");
$select_db = mysqli_select_db($connect,'php1');
$select = mysqli_query($connect,'SELECT * FROM phptable');
while ($result = mysqli_fetch_array($select)){
  $a= $result[id];
};

$to = "magen.sakha@gmail.com";
$name= $_POST['name'];
$subject = "Показания номер ". $a;
$message = '
<html>
<head>
<title>HTML email</title>
</head>
<body style="background:#283593;color:#64b5f6;padding:30px ; border-radius:40px">
<h1>ФИО:  '.$name. '</h1>
<h1>Адрес:  '. $_POST['address']. '</h1>
<h1>Показания:  '. $_POST['someshet']. '</h1>
<h1>Номер телефона:  '. $_POST['phone']. '</h1>
<h1>Почта:  '. $_POST['mail']. '</h1>
</body>
</html>
';
// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

mail($to,$subject,$message,$headers);

$sql = "UPDATE phptable SET id = $a + 1 ";
$connect->query($sql);
$connect->close();
?>
</body>
</html>