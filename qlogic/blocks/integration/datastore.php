<?php
ob_start();
?>

  <section id="overview">
    <div class="content">
      <div class="overview flexbox">
        <div class="image">
          <h2>Overview</h2>

          <img src="/resources/images/svg/datastore_page.svg" alt="Overview">
        </div>

        <div class="description">
          <p>According to Google, Google denotes that Google Cloud Datastore a “highly scalable NoSQL database for
            your applications”. Datastore could help you by:</p>

          <ul>
            <li>providing high availability</li>
            <li>integrating with other Google Cloud services</li>
            <li>allowing options for automatic scaling</li>
            <li>incorporating multiple types of data</li>
          </ul>

          <p>Some alternatives clients sometimes consider are DynamoDB, MongoDB, and Redis. However, Cloud Datastore
            .</p>
        </div>
      </div>
    </div>
  </section>

  <section id="cases" class="gray">
    <div class="clip">
      <img src="/resources/images/clip_top_gray.svg" alt="Bottom Clip">
    </div>

    <div class="content">
      <h2>Use Cases</h2>

      <p>How could Cloud Datastore benefit your business? If you are looking to be able to use SQL-like queries, OLTP
        (Online Transactional Processing), and/or achieve atomicity, consistency, isolation, and durability (ACID)
        compliance, then Google Cloud Datastore could be the right solution for you.</p>
    </div>
  </section>

  <section id="help">
    <div class="clip">
      <img src="/resources/images/clip_bottom_gray.svg" alt="Bottom Clip">
    </div>

    <div class="content">
      <div class="help flexbox">
        <div class="help__description">
          <h2 class="border">Let Qlogic Help</h2>

          <p>At Qlogic, we are experts at:</p>

          <ul>
            <li>contributing to development, documentation, and code samples for Google Cloud products</li>
            <li>using Google Cloud Datastore and other Google products to help you scale and organize your data</li>
            <li>implementing Google Cloud Datastore</li>
            <li>determining the best Google Cloud tools for your business</li>
          </ul>
        </div>

        <div class="image_border">
          <img src="/resources/images/integration/help_datastore.png" alt="Let Qlogic Help">
        </div>
      </div>
    </div>
  </section>

  <section id="bottom_info">
    <div class="clip">
      <img src="/resources/images/clip_bottom.svg" alt="Bottom Clip">
    </div>

    <div class="content">
      <button onclick="window.location.href='../../get-in-touch';">Schedule a Discovery Call</button>
    </div>
  </section>

<?php
$doc_body = ob_get_clean();
?>