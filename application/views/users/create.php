<!DOCTYPE html>
<html lang="zh-TW">
<head>
	<meta charset="UTF-8">
	<meta name="robots" content="all">
	<meta name="viewport" content="width = device-width">
	<link rel = "stylesheet" type = "text/css" href = "<?php echo base_url('public/assets/all.css'); ?>" media="all">
	<link rel = "stylesheet" type = "text/css" href = "<?php echo base_url('public/assets/login.css'); ?>" media="all">

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
		<a class="site-logo" href="<?php echo site_url(); ?>">
			<img src="<?php echo base_url('public/images/logo.png'); ?>" alt="Chatbot文章上架-logo">
			<h1>Chatbot文章上架</h1>
		</a>

<div class="wrap">
  <?php echo validation_errors(); ?>
	<?php echo form_open('sessions/creating') ?>
  <div class="data">
    <label for="name">名稱</label>
      <input type="input" name="name" /><br />
  </div>
		<div class="data">
			<label for="email">帳號</label>
		    <input type="input" name="email" /><br />
		</div>
		<div class="data">
		    <label for="password">密碼</label>
		    <input type="password" name="password" /><br />
		</div>
		<div class="confirm">
	    <input type="submit" name="submit" value="登入" />
	    </div>
	</form>
</div>
