<!DOCTYPE html>

<html lang="en">
  <?php include "../../blocks/head.php"; ?>

  <?php include("../../blocks/navigation.php");?>
  <?php include "../../blocks/torah_sefer_scrolls_content.php"; ?>

  <body>
    <section id="main" class="inner">
      <div class="section">
        <div class="content_full flexbox">
          <div class="section__left">
            <?php include("../../blocks/nav_left.php");?>
          </div>

          <div class="section__right">
            <div class="content flexbox">
              <?php echo $doc_body; ?>
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php include "../../blocks/footer.php"; ?>
  </body>
</html>