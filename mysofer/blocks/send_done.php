<?php
ob_start();
?>

<?php include ("navigation.php");?>

  <div class="content contactSection flexbox">
    <div class="contactBlock">
      <h4>Хей, спасибо, <?= htmlspecialchars($_GET['name']) ?>!</h4>

      <p>Я получила письмо и обязательно отвечу на него, как только будет свободная минутка.
        <br>
         А пока можно ещё прогуляться: три, два, один ... и вас перекинет в самое <a href="/">начало</a>.</p>
    </div>
  </div>

<?php
$doc_body = ob_get_clean();
?>