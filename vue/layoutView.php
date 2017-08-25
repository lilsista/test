<?php include "globals/header.php"; ?>
  	<div class="section">
      <div class="section-block section-block-1"></div>
      <div class="section-block section-block-2"></div>
      <div class="container">
        <?php include('globals/fil-ariane.php');?>
        <div class="section-logo">
          <a href="index.php"><img src="<?=ROOT_WEB.DIR_IMG?>/logo.png" alt="logo" oncontextmenu="return false" ondrag="return false" onmousedown="return false"></a>
        </div>
        <?php include $view; ?>
      </div>
      <div class="section-block section-block-3"></div>
      <div class="section-block section-block-4"></div>
    </div>
  	
    <?php include 'globals/footer.php'; ?>