<!DOCTYPE html>
<html lang="zh-TW">
<head>
	<meta charset="UTF-8">
	<meta name="robots" content="all">
	<meta name="viewport" content="width = device-width">
	<link rel = "stylesheet" type = "text/css" href = "http://localhost:8888/chatbot/css/all.css" media="all">
	<link rel = "stylesheet" type = "text/css" href = "http://localhost:8888/chatbot/css/article.css" media="all">

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
	<!--[if lt IE 9]-->
　　 <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
　	<!--[endif]-->
	<title>Chatbot文章上架</title>
</head>

<body class="corporate">

<!--header-->
<div class="header" id="header">
<div class="header-main">
	<!--logo-->
	<a class="site-logo" href="http://localhost:8888/chatbot/index.php/home/">
		<img src="http://localhost:8888/chatbot/img/logo.png" alt="Chatbot文章上架-logo">
		<h1>Chatbot文章上架</h1>
	</a>

	<div id="push"> <a href="#"><img src="http://localhost:8888/chatbot/img/btnOpen.png" alt=""></a> </div>
	<script>
		$(document).ready(function () {
			$('#push, #close').click(function () {
				var $navigacia = $('.header-nav, .lang-nav') ,
				val = $navigacia.css('right');
				console.log("val = ",val);
				if ($navigacia.css('right')=== '-300px') {
					val='0px';
				}else{
					val='-300px';
				}
				$navigacia.animate({
					right: val
				}, 300)
			});
		});
	</script>

	<!--navigation-->
    <div class="header-nav" id="nav">
      <ul>	
      <li ><a href="#" id="close"><img src="http://localhost:8888/chatbot/img/btnClose.png" alt="Close"></a></li>
      	<li class="header-nav-item"><a href="http://localhost:8888/chatbot/index.php/home/">首頁</a></li>	
      	<li class="header-nav-item"><a href="/chatbots/">統計分析</a></li>
      	<li class="header-nav-item"><a href="/article/">搜尋</a></li>
      </ul>
    </div>
    <!--function-->
    <div class="lang-nav" id="nav">
    	<ul>
    		<li><a href="">facebook登入</a></li>
    		<li><a href="">我的頁面</a></li>	
    		<li><a href="http://localhost:8888/chatbot/index.php/home/upload">上傳文章</a></li>	
    	</ul>
    </div>
</div>
</div>
