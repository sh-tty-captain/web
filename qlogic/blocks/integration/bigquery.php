<?php
ob_start();
?>

  <section id="overview">
    <div class="content">
      <div class="overview flexbox">
        <div class="image">
          <h2>Overview</h2>

          <img src="/resources/images/svg/bigquery_page.svg" alt="Overview">
        </div>

        <div class="description">
          <p>Google Cloud BigQuery is a cloud data warehouse solution that does not require a server and is scalable
            for different business needs. Some of its many benefits include:</p>

          <ul>
            <li>scalability for organizations that need to increase capacity</li>
            <li>a cost-effective solution</li>
            <li>exceptionally fast data analysis skills</li>
            <li>platform that offers security</li>
          </ul>

          <p>Cloud BigQuery competitors include Amazon Redshift, Hadoop, and Snowflake; however, Cloud BigQuery is
            noted as having an easy process to load large amounts of data, and high performance.</p>
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

      <p>With Cloud BigQuery, you could migrate from an in-house, older data warehouse solution or from another cloud
        solution.</p>

      <p><span>The Home Depot and Cloud BigQuery</span> <br>
      </p>

      <p>The Home Depot needs to track information about so many things, including product availability, shipping,
        and skills customers care about learning. They were able to implement the Cloud BigQuery solution to analyze
        several petabytes of data and provide the necessary product information for stocking in-store and online.</p>
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

          <p>What makes our team especially qualified? Qlogic is experienced with Google Cloud Products and has been
            able to:</p>

          <ul>
            <li>contribute to development, documentation, and code samples for Cloud BigQuery</li>
            <li>recommend and implement ways for you to store and analyze big data</li>
            <li>change technology setup with ease</li>
          </ul>
        </div>

        <div class="image_border">
          <img src="/resources/images/integration/help_bigquery.png" alt="Let Qlogic Help">
        </div>
      </div>
    </div>
  </section>

  <section id="bottom_info">
    <div class="clip">
      <img src="/resources/images/clip_bottom.svg" alt="Bottom Clip">
    </div>

    <div class="content">
      <button onclick="window.location.href='../../get-in-touch';">Learn More</button>
    </div>
  </section>

<?php
$doc_body = ob_get_clean();
?>