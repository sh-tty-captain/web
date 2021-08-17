<!DOCTYPE html>

<html lang="en">
<?php
  $title = "Thank You for getting in touch!";
  $description = "Your email was sent successfully.";
?>

<?php include "../blocks/head.php"; ?>
<?php include "../blocks/send_done.php"; ?>

<body>
<?php include "../blocks/navigation.php";?>

<main class="inner">
  <section class="head contacts success_send inner_head">
    <?php include "../blocks/breadcrumbs.php" ;?>
    <?php include "../blocks/top.php"; ?>
  </section>

  <?php echo $doc_body; ?>
</main>

<?php include "../blocks/footer.php"; ?>


<!--Переадресация на главную страницу сайта, через 3 секунды
<script language="JavaScript" type="text/javascript">
    function changeurl(){eval(self.location="/");}
    window.setTimeout("changeurl();",10000);
</script>-->
</body>
</html>