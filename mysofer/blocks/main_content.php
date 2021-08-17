<?php
ob_start();
?>

  <div class="content__filters">
  <h2>Filters</h2>

  <ul>
    <p>Select products:</p>

    <li>
      <a href="#" class="filter">Torah Scrolls</a>

      <ul class="torah-scrolls">
        <?php include ("filters_torah_scrolls.php");?>
      </ul>
    </li>

    <li>
      <a href="#" class="filter">Tefillin</a>

      <ul class="tefillin">
        <?php include ("filters_tefillin.php");?>
      </ul>
    </li>

    <li>
      <a href="#" class="filter">Mezuzahs</a>

      <ul class="mezuzahs">
        <?php include ("filters_mezuzahs.php");?>
      </ul>
    </li>

    <li class="no-arrow"><a href="#" class="filter">Megillah Scrolls</a></li>

    <li class="no-arrow"><a href="#" class="filter">Talis and Tefillin Bags</a></li>
  </ul>
</div>

  <div class="content__main">
  <h1>Torah Scrolls</h1>

  <div class="category flexbox torah">
    <div class="category__item">
      <a href="../torah-scrolls">
        <img src="../resources/images/category/torah_scrolls.png" alt="Torah Scrolls">
      </a>

      <h2><a href="">Torah Scrolls</a></h2>
    </div>

    <div class="category__item">
      <a href="">
        <img src="../resources/images/category/torah_restorations.png" alt="Torah Restorations">
      </a>

      <h2><a href="">Torah Restorations</a></h2>
    </div>

    <div class="category__item">
      <a href="">
        <img src="../resources/images/category/torah_computer_check.png" alt="Computer Check">
      </a>

      <h2><a href="">Computer Check</a></h2>
    </div>

    <div class="category__item">
      <a href="">
        <img src="../resources/images/category/torah_mantels.png" alt="Torah Mantels">
      </a>

      <h2><a href="">Torah Mantels</a></h2>
    </div>

    <div class="category__item">
      <a href="">
        <img src="../resources/images/category/torah_rollers.png" alt="Torah Rollers">
      </a>

      <h2><a href="">Torah Rollers</a></h2>
    </div>

    <div class="category__item">
      <a href="">
        <img src="../resources/images/category/torah_cases.png" alt="Torah Cases">
      </a>

      <h2><a href="">Torah Cases</a></h2>
    </div>

    <div class="category__item">
      <a href="">
        <img src="../resources/images/category/paroches.png" alt="Paroches">
      </a>

      <h2><a href="">Paroches</a></h2>
    </div>

    <div class="category__item">
      <a href="">
        <img src="../resources/images/category/bima_covers.png" alt="Bima Covers">
      </a>

      <h2><a href="">Bima Covers</a></h2>
    </div>

    <div class="category__item">
      <a href="">
        <img src="../resources/images/category/torah_crowns.png" alt="Torah Crowns">
      </a>

      <h2><a href="">Torah Crowns</a></h2>
    </div>
  </div>

  <!-- Temporarily unnecessary blocks.
  <h1>Purim Specials</h1>

  <div class="category flexbox">
    <div class="category__item">
      <a href="">
        <img src="../resources/images/category/megillah.png" alt="Megillah">
      </a>

      <h2><a href="">Megillah</a></h2>
    </div>

    <div class="category__item">
      <a href="">
        <img src="../resources/images/category/megillah_cases.png" alt="Megillah Cases">
      </a>

      <h2><a href="">Megillah Cases</a></h2>
    </div>
  </div>
  -->

    <p class="description_category">Sofer Soferous Tefilin Tefillin Mezuzah Mezzuza Jewish Torah Sifrei Torah Sefer
      Torah Mezuzah Sofer Soferous Tefilin Tefillin Mezuzah Mezuza Jewish Torah Sifrei Torah Sefer Torah Sofer
      Soferous Tefilin Tefillin Mezuzah Mezzuza Jewish Torah Sifrei Torah Sefer Torah</p>
</div>

<?php
$doc_body = ob_get_clean();
?>