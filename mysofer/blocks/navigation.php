<?php $url = $_SERVER["REQUEST_URI"]; ?>
<?php include ("breadcrumbs.php");?>

<div class="section head">
  <div class="content_full flexbox">
    <div class="section__left">
      <a href="/" class="logo">
        <img src="/resources/images/logo.png" alt="MySofer">
      </a>

      <h4 class="logo_adress">353 Kingston Ave, Brooklyn, NY,<br>11213-4331</h4>
    </div>

    <div class="section__right">
      <div class="header">
        <div class="content flexbox">
          <div class="search">
              <?php include "search_form.php"; ?>
          </div>

          <div class="navigation">
            <ul>
              <li><a href="/" <?php if ($url == "/") {echo 'class="active"';}?>>Home</a></li>

              <li><a href="/about" <?php if ($url == "/about/") {echo 'class="active"';}?>>About Us</a></li>

              <li><a href="/contacts" <?php if ($url == "/contacts/") {echo 'class="active"';}?>>Contacts</a></li>
            </ul>
          </div>

          <div class="adress">
            <p class="location">353 Kingston Ave, Brooklyn, NY, 11213-4331</p>
            <p class="phone"><a href="+17186131111">+1 (718) 613-1111</a></p>
          </div>
        </div>
      </div>

      <div class="nav-category">
        <div class="content flexbox">
          <div class="nav-category__item">
            <a href="/torah-scrolls">
              <img src="/resources/images/nav_category/torah_scrolls.png" alt="Torah Scrolls">
            </a>

            <ul>
              <li>
                Torah Scrolls

                <ul>
                  <li><a href="/torah-scrolls/torah-sefer-scrolls">Torah Scrolls</a></li>

                  <li><a href="">Torah Scroll Restoration</a></li>

                  <li><a href="">Computer Check</a></li>

                  <li><a href="">Torah Mantels</a></li>

                  <li><a href="">Scroll Rollers</a></li>

                  <li><a href="">Torah Cases</a></li>

                  <li><a href="">Torah Crowns</a></li>
                </ul>
              </li>
            </ul>
          </div>

          <div class="nav-category__item">
            <a href="/tefillin">
              <img src="/resources/images/nav_category/teffilin.png" alt="Tefillin">
            </a>

            <ul>
              <li>
                Tefillin

                <ul>
                  <li><a href="">Tefillin Set</a></li>

                  <li><a href="">Tefillin Service</a></li>

                  <li><a href="">Tefillin Bags</a></li>

                  <li><a href="">Tefillin Accessories</a></li>
                </ul>
              </li>
            </ul>
          </div>

          <div class="nav-category__item">
            <a href="/mezuzahs">
              <img src="/resources/images/nav_category/mezuzahs.png" alt="Mezuzahs">
            </a>

            <ul>
              <li>
                Mezuzahs

                <ul>
                  <li><a href="/mezuzahs/mezuzah-parchments">Mezuzahs Parchments</a></li>

                  <li><a href="/mezuzahs/mezuzah-cases">Mezuzahs Cases</a></li>

                  <li><a href="">Mezuzahs Checking</a></li>
                </ul>
              </li>
            </ul>
          </div>

          <div class="nav-category__item">
            <a href="">
              <img src="/resources/images/nav_category/megillah_scrolls.png" alt="Megillah Scrolls">
            </a>

            <ul>
              <li>
                Megillah Scrolls
              </li>
            </ul>
          </div>

          <div class="nav-category__item">
            <a href="">
              <img src="/resources/images/nav_category/talis_and_tefillin_bags.png" alt="Talis and Tefilin Bags">
            </a>

            <ul>
              <li>
                Talis and Tefillin Bags
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="nav-category mobile">
      <div class="content flexbox">
        <div class="nav-category__item">
          <a href="/torah-scrolls">
            <img src="/resources/images/nav_category/torah_scrolls.png" alt="Torah Scrolls">
          </a>

          <ul>
            <li>
              Torah Scrolls

              <ul>
                <li><a href="/torah-scrolls/torah-sefer-scrolls">Torah Scrolls</a></li>

                <li><a href="">Torah Scroll Restoration</a></li>

                <li><a href="">Computer Check</a></li>

                <li><a href="">Torah Mantels</a></li>

                <li><a href="">Scroll Rollers</a></li>

                <li><a href="">Torah Cases</a></li>

                <li><a href="">Torah Crowns</a></li>
              </ul>
            </li>
          </ul>
        </div>

        <div class="nav-category__item">
          <a href="/tefillin">
            <img src="/resources/images/nav_category/teffilin.png" alt="Tefillin">
          </a>

          <ul>
            <li>
              Tefillin

              <ul>
                <li><a href="">Tefillin Set</a></li>

                <li><a href="">Tefillin Service</a></li>

                <li><a href="">Tefillin Bags</a></li>

                <li><a href="">Tefillin Accessories</a></li>
              </ul>
            </li>
          </ul>
        </div>

        <div class="nav-category__item">
          <a href="/mezuzahs">
            <img src="/resources/images/nav_category/mezuzahs.png" alt="Mezuzahs">
          </a>

          <ul>
            <li>
              Mezuzahs

              <ul>
                <li><a href="">Mezuzahs Parchments</a></li>

                <li><a href="">Mezuzahs Cases</a></li>

                <li><a href="">Mezuzahs Checking</a></li>
              </ul>
            </li>
          </ul>
        </div>

        <div class="nav-category__item">
          <a href="">
            <img src="/resources/images/nav_category/megillah_scrolls.png" alt="Megillah Scrolls">
          </a>

          <ul>
            <li>
              Megillah Scrolls
            </li>
          </ul>
        </div>

        <div class="nav-category__item">
          <a href="">
            <img src="/resources/images/nav_category/talis_and_tefillin_bags.png" alt="Talis and Tefilin Bags">
          </a>

          <ul>
            <li>
              Talis and Tefillin Bags
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="section breadcrumbs">
  <div class="content_full flexbox">
    <div class="section__left">
    </div>

    <div class="section__right">
      <div class="content">
        <ul>
          <li><?= breadcrumbs(' › ') ?></li>
        </ul>
      </div>
    </div>
  </div>
</div>