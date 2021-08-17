<?php include "description.php"; ?>

<div class="content">
  <div class="info">
    <h1><?php echo $title ?></h1>

    <p><?php echo $description ?></p>

    <?php echo $button ?>


    <ul>
      <li><?= breadcrumbs(' › ') ?></li>
    </ul>
  </div>
</div>
