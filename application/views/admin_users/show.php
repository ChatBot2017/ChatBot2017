<h1><?php echo $user['name'] ?></h1>
<p>email: <?php echo $user['email'] ?></p>
<p>password: <?php echo $user['password'] ?></p>
<p>建立帳號時間: <?php echo $user['created_at'] ?></p>
<p>上次登入時間: <?php echo $user['updated_at'] ?></p>
<?php if (empty($user['is_admin'])) {
    $admin = "否";
} else {
      $admin = "是";
  } ?>
<p>是否是管理員: <?php echo $admin ?></p>
