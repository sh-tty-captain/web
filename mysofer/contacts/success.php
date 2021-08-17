<!DOCTYPE html>

<html lang="en">
  <?php include "../blocks/send_done.php"; ?>
  <?php include "../blocks/head.php"; ?>

  <body>
    <?php echo $doc_body; ?>

    <!--Переадресация на главную страницу сайта, через 3 секунды-->
    <script language="JavaScript" type="text/javascript">
        function changeurl(){eval(self.location="https://superpeace.ru/");}
        window.setTimeout("changeurl();",10000);
    </script>
  </body>
</html>