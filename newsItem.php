<?php
	include("elements/news_db.php");
	$id = $_GET["id"];
	$title = get_product_title($id);
	$url1 = get_img_url1($id);
	$url2 = get_img_url2($id);
	$text1 = get_text1($id);
	$text2 = get_text2($id);
	require("elements/header.php");
	require("elements/nav1.php");
	require("elements/newsItemContent.php");
	require("elements/footer.php");
?>