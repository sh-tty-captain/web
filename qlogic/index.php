<!DOCTYPE html>

<html lang="en">
  <?php include "blocks/head.php"; ?>
  <?php include "blocks/main_content.php"; ?>

  <body>
    <?php include "blocks/navigation.php";?>

    <main>
      <section class="head main_page">
        <?php include "blocks/breadcrumbs.php"; ?>
        <?php include "blocks/top.php"; ?>
      </section>

      <?php echo $doc_body; ?>
    </main>

    <?php include "blocks/footer.php"; ?>
  </body>
</html>