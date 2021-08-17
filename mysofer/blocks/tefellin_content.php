<?php
ob_start();
?>

  <div class="content__filters single">
    <h2>Filters</h2>

    <ul class="tefillin">
      <?php include ("filters_tefillin.php");?>
    </ul>
  </div>

  <div class="content__main">
    <h1>Tefillin</h1>

    <div class="category flexbox">
      <div class="category__item">
        <a href="">
          <img src="../resources/images/category/tefillin/set.png" alt="Tefillin Set">
        </a>

        <h2><a href="">Tefillin Set</a></h2>
      </div>

      <div class="category__item">
        <a href="">
          <img src="../resources/images/category/tefillin/repair.png" alt="Tefillin Repair">
        </a>

        <h2><a href="">Tefillin Repair</a></h2>
      </div>

      <div class="category__item">
        <a href="">
          <img src="../resources/images/category/tefillin/bags.png" alt="Tefillin Bags">
        </a>

        <h2><a href="">Tefillin Bags</a></h2>
      </div>

      <div class="category__item">
        <a href="">
          <img src="../resources/images/category/tefillin/accessories.png" alt="Tefillin Accessories">
        </a>

        <h2><a href="">Tefillin Accessories</a></h2>
      </div>
    </div>

    <p class="description_category">Sofer Soferous Tefilin Tefillin Mezuzah Mezzuza Jewish Torah Sifrei Torah Sefer Torah Mezuzah Sofer Soferous Tefilin Tefillin Mezuzah Mezuza Jewish Torah Sifrei Torah Sefer Torah Sofer Soferous Tefilin Tefillin Mezuzah Mezzuza Jewish Torah Sifrei Torah Sefer Torah</p>
  </div>

<?php
$doc_body = ob_get_clean();
?>