<?php
ob_start();
?>

  <section id="overview">
    <div class="content">
      <div class="overview flexbox">
        <div class="image">
          <h2>Overview</h2>

          <img src="/resources/images/svg/dataflow_page.svg" alt="Overview">
        </div>

        <div class="description">
          <p>Google Cloud Dataflow is a data processing service that does not require a server. Cloud Dataflow helps
            organizations in multiple ways, including:</p>

          <ul>
            <li>fast streaming pipeline for better data analytics speed</li>
            <li>less need for resource management and overhead given that it is serverless</li>
            <li>cost-efficient options</li>
            <li>AI capabilities</li>
          </ul>

          <p>One main alternative for Cloud Dataflow is Apache Spark, but Cloud Dataflow is fully managed and has
            autoscaling capabilities.</p>

          <p>The Apache Beam programming model, according to Google, “simplifies the mechanics of large-scale data
            processing. Using one of the Apache Beam SDKs, you build a program that defines the pipeline. Then, one
            of Apache Beam's supported distributed processing backends, such as Dataflow, executes the pipeline.” At
            Qlogic, we are experts in integration with services like this as well as Cloud Dataflow.</p>
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

      <p>Cloud Dataflow can be used to organize data, making it more useful for businesses. It can also be used in
        combination with other products from Google Cloud’s AI platform for analytics, such as predictive analytics
        using data to detect fraud.</p>

      <p><span>Unity and Cloud Dataflow</span> <br>
        Unity, a company that provides tools for game developers as well as relevant in-game ads, was looking for a
        way to have a single place to gather, organize, and transform data into a useful state that would provide
        insights and product ideas to contribute to scaling and avoid having data in silos. Additionally, their data
        was unstructured and depended on daily ETLs, with several different technology solutions that had to be
        maintained due to multiple acquisitions.</p>

      <p>In the end, Unity was able to use Cloud Dataflow along with other GCP products to structure data from
        multiple places into one and create consistency, latency, and compliance with their data.</p>
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

          <p>Qlogic is the right team to help you with your technological needs because we are experts who have
            experience with:</p>

          <ul>
            <li>Contributing to development, documentation, and code samples for Cloud Dataflow</li>
            <li>Clean up and optimize your legacy data platforms and structure</li>
          </ul>
        </div>

        <div class="image_border">
          <img src="/resources/images/integration/help_dataflow.png" alt="Let Qlogic Help">
        </div>
      </div>
    </div>
  </section>

  <section id="bottom_info">
    <div class="clip">
      <img src="/resources/images/clip_bottom.svg" alt="Bottom Clip">
    </div>

    <div class="content">
      <button onclick="window.location.href='../../get-in-touch';">Request a Consultation</button>
    </div>
  </section>

<?php
$doc_body = ob_get_clean();
?>