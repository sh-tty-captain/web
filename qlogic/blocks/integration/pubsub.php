<?php
ob_start();
?>

  <section id="overview">
    <div class="content">
      <div class="overview flexbox">
        <div class="image">
          <h2>Overview</h2>

          <img src="/resources/images/svg/pubsub_page.svg" alt="Overview">
        </div>

        <div class="description">
          <p>According to Google, Google Cloud Pub/Sub is “an asynchronous messaging service that decouples services
            that produce events from services that process events”. The middleware helps organizations in multiple
            ways, including:</p>

          <ul>
            <li>ability to store and deliver messages between different applications</li>
            <li>offering consistency and high availability</li>
            <li>scalability</li>
            <li>lower cost option via Pub/Sub Lite</li>
          </ul>

          <p>Products like Apache Kafka, RabbitMQ, and SocketIO are mentioned as competitors, but Cloud Pub/Sub has
            been noted as easy to use and includes advanced features and automation.</p>
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

      <p>Cloud Pub/Sub can be used for situations such as collecting and streamlining data for analytics.</p>

      <p><span>Sky and Cloud Pub/Sub</span> <br>
        Sky, a European telecommunications and media company providing streaming and other TV services. As part of
        its work to serve customers, it must collect data from its TV boxes. Their existing solution was creating
        bottlenecks at certain points in the data being collected and analyzed, but they were able to scale and
        improve the use of data by implementing Cloud Pub/Sub to capture the data and decrease instances of data loss
        . Cloud Pub/Sub coupled with other GCP products provided the right, scalable solution for Sky.</p>
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

          <p>The team at Qlogic is experienced with Google Cloud Pub/Sub, as with other GCP products. We are experts
            who can help you implement the right solution because we:</p>

          <ul>
            <li>match technology needs with business goals</li>
            <li>contribute to development, documentation, and code samples for Cloud Pub/Sub</li>
            <li>find products that are the best fit for our clients’ specific scenarios</li>
          </ul>
        </div>

        <div class="image_border">
          <img src="/resources/images/integration/help_pubsub.png" alt="Let Qlogic Help">
        </div>
      </div>
    </div>
  </section>

  <section id="bottom_info">
    <div class="clip">
      <img src="/resources/images/clip_bottom.svg" alt="Bottom Clip">
    </div>

    <div class="content">
      <button onclick="window.location.href='../../get-in-touch';">Schedule a Call</button>
    </div>
  </section>

<?php
$doc_body = ob_get_clean();
?>