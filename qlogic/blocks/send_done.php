<?php
ob_start();
?>

  <section id="success">
    <div class="content">
      <h4>Hi <?= htmlspecialchars($_GET['name']) ?>,</h4>

      <p>We appreciate you contacting us. One of our colleagues will get back in touch with you soon!</p>

      <p>Have a great day!</p>
    </div>
  </section>

  <section id="back" class="gray">
    <div class="content">
      <button onclick="window.location.href='/';">Back to Home Page</button>
    </div>
  </section>

<?php
$doc_body = ob_get_clean();
?>