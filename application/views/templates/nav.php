<?php if ($this->session->userdata('user')): ?>
  <a href="<?php echo site_url('sign_out') ?>">登出</a>
<?php else: ?>
  <a href="<?php echo site_url('sign_in') ?>">登入</a>
<?php endif; ?>
