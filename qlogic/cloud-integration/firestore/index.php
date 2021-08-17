<!DOCTYPE html>

<html lang="en">
<?php include "../../blocks/head.php"; ?>
<?php include "../../blocks/integration/firestore.php"; ?>

<body>
<?php include "../../blocks/navigation.php";?>

<main class="inner">
  <section class="head firestore integration inner_head">
    <?php include "../../blocks/breadcrumbs.php" ;?>
    <?php include "../../blocks/top.php"; ?>
  </section>

  <?php echo $doc_body; ?>
</main>

<?php include "../../blocks/footer.php"; ?>
</body>
</html>