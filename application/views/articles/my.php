<!DOCTYPE html>
<html lang="zh-TW">
<head>
	<meta charset="UTF-8">
	<meta name="robots" content="all">
	<meta name="viewport" content="width = device-width">
	<link rel = "stylesheet" type = "text/css" href = "<?php echo base_url('public/assets/all.css'); ?>" media="all">
	<link rel = "stylesheet" type = "text/css" href = "<?php echo base_url('public/assets/manage.css'); ?>" media="all">

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

		<div id="push"> <a href="#"><img src="<?php echo base_url('public/images/btnOpen.png'); ?>" alt=""></a> </div>
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
	      <li ><a href="#" id="close"><img src="<?php echo base_url('public/images/btnClose.png'); ?>" alt="Close"></a></li>
	      	<li class="header-nav-item"><a href="<?php echo site_url(); ?>">首頁</a></li>
	      	<li class="header-nav-item"><a href="/chatbots/">統計分析</a></li>
	      	<li class="header-nav-item"><a href="/article/">搜尋</a></li>
	      </ul>
	    </div>
	    <!--function-->
	    <div class="lang-nav" id="nav">
	    	<ul>
          <?php if ($this->session->userdata('user')): ?>
						<?php if (isset($_SESSION['user']['is_admin']) && ($_SESSION['user']['is_admin']==true)): ?>
	            <li><a href="<?php echo site_url('admin/users'); ?>">會員管理</a></li>
	    				<li><a href="<?php echo site_url('admin/articles'); ?>">文章管理</a></li>
	          <?php endif; ?>
            <li><a href="<?php echo site_url('articles/my'); ?>">我的文章</a></li>
            <li><a href="<?php echo site_url('articles/create'); ?>">上傳文章</a></li>
            <li><a href="<?php echo site_url('sign_out') ?>">登出</a></li>
          <?php else: ?>
            <li><a href="<?php echo site_url('sign_in') ?>">登入</a></li>
            <li><a href="<?php echo site_url('sign_up') ?>">註冊</a></li>
          <?php endif; ?>
	    	</ul>
	    </div>
	</div>
</div>



<div class="manage_wrap">
	<p>我的文章</p>
	<table column="5">
    <thead>
      <tr>
        <th>標題</th>
        <th>瀏覽次數</th>
        <th>建立時間</th>
        <th colspan="3">#</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($articles as $article): ?>
        <tr>
         	<td><?php echo $article['title'] ?></td>
          <td><?php echo $article['views'] ?></td>
          <td><?php echo $article['created_at'] ?></td>
         	<td>
            <a href="<?php echo site_url('articles/'.$article['id']) ?>">閱讀</a>
            <a href="<?php echo site_url('articles/'.$article['id'].'/edit') ?>">修改</a>
            <a href="<?php echo site_url('articles/'.$article['id'].'/destroy') ?>">刪除</a>
          </td>
       	</tr>
      <?php endforeach; ?>
    </tbody>
	</table>
</div>
