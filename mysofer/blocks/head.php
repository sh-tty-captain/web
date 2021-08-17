<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

  <?php include "title.php"; ?>
  <title><? echo $title ?></title>

  <link rel="icon" href="/resources/images/favicon.png" type="image/x-icon" />

  <link rel="stylesheet" href="/resources/css/style.css">

  <link rel="stylesheet" href="/resources/assets/OwlCarousel/dist/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="/resources/assets/OwlCarousel/dist/assets/owl.theme.default.min.css">

  <script src="https://kit.fontawesome.com/777026ae9b.js" crossorigin="anonymous"></script>

  <script type="text/javascript">
    function slowScroll(id) {
      var offset = 0;
      $('html, body').animate({
        scrollTop: $(id).offset().top - offset
      }, 1000);
      return false;
    }
  </script>
</head>