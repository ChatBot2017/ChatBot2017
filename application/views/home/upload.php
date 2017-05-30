<!DOCTYPE html>
<html lang="zh-TW">
<head>
	<meta charset="UTF-8">
	<meta name="robots" content="all">
	<meta name="viewport" content="width = device-width">
	<link rel = "stylesheet" type = "text/css" href = "http://localhost:8888/chatbot/css/all.css" media="all">
	<link rel = "stylesheet" type = "text/css" href = "http://localhost:8888/chatbot/css/upload.css" media="all">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
	<!--[if lt IE 9]-->
　　 <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
　	<!--[endif]-->
	<title>Chatbot文章上傳</title>
</head>

<body class="corporate">

<!--header-->
<div class="header" id="header">
<div class="header-main">
	<!--logo-->
	<a class="site-logo" href="index.html">
		<img src="http://localhost:8888/chatbot/img/logo.png" alt="Chatbot文章上架-logo">
		<h1>Chatbot文章上傳</h1>
	</a>
    
</div>
</div>

<!--editor-->
<div class="editor-wrap">
	<form>
		<div class="data">
			<label for="upload-title">主標題</label><br/>
			<input type="text" name="" id="upload-title">
		</div>
		<div class="data">
			<label for="upload-url">超連結</label><br/>
			<input type="url" name="" id="upload-url">
		</div>
		<div class="data">
			<label for="upload-tag">標籤分類</label><br/>
			<input type="text" name="" id="pload-tag">
		</div>
		<div class="data">
			<label for="upload-intro">文章內容</label><br/>
			<input type="text" name="" id="upload-intro">
		<div class="data">
			<label for="upload-photo">圖片上傳(上傳的圖片用在首頁文章列表中的文章縮圖)</label><br/>
			<input type="file" name="" id="upload-photo">
		</div>
		<div class="confirm">
			<ul>
				<li><a href="#">取消</a></li>
				<li><a href="#">確認</a></li>
			</ul>
		</div>
	</form>
</div>
