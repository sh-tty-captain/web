<!DOCTYPE html>

<html lang="en">
  <?php include "../blocks/head.php"; ?>
  <?php include "../blocks/about_content.php"; ?>

  <body>
    <?php include "../blocks/navigation.php";?>

    <main class="inner">
      <section class="head about_us inner_head">
        <?php include "../blocks/breadcrumbs.php" ;?>
        <?php include "../blocks/top.php"; ?>
      </section>

      <?php echo $doc_body; ?>
    </main>

    <?php include "../blocks/footer.php"; ?>
  </body>
</html>