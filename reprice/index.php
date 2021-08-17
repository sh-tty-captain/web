<!DOCTYPE html>

<html lang="en">
  <?php include "blocks/head.php"; ?>
  <?php include "blocks/main_content.php"; ?>

  <body>
    <?php include "blocks/navigation.php"; ?>

    <main>
      <?php include "blocks/actual_info.php"; ?>

      <?php echo $doc_body; ?>
    </main>

    <!-- Custom Select CSS -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script>
    <script src="http://gregfranko.com/jquery.selectBoxIt.js/js/jquery.selectBoxIt.min.js"></script>

    <script>
      $(function() {
        //Calls the selectBoxIt method on your HTML select box.
        $("select").selectBoxIt();
      });
    </script>
  </body>
</html>
