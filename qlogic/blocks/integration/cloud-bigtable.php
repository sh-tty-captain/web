<?php
ob_start();
?>

  <section id="overview">
    <div class="content">
      <div class="overview flexbox">
        <div class="image">
          <h2>Overview</h2>

          <img src="/resources/images/svg/bigtable_page.svg" alt="Overview">
        </div>

        <div class="description">
          <p>As described by Google, Google Cloud Bigtable is a fully managed, scalable NoSQL database service for
            large analytical and operational workloads. In fact, Cloud Bigtable is the same database that powers
            Google Search, Gmail, and Analytics. It is setup to:</p>

          <ul>
            <li>handle requests and big data quickly</li>
            <li>scale with your organization’s growth</li>
            <li>leverage with machine learning applications</li>
            <li>integrate with other Google Cloud services</li>
          </ul>

          <p>While its competitors include products like Amazon DynamoDB and MongoDB, companies choose Bigtable for
            several reasons.</p>

          <p>Not only does it integrate with Google Cloud tools, but it also easily integrates with big data tools
            like Hadoop, Dataflow, and Dataproc. Its performance is unmatched, and it is typically acquired at a lower cost than competitors.</p>
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

      <p>How might you use Bigtable for your business? Google themselves have outlined use cases such as using
        historical data to recognize potential fraud patterns in financial transactions or aggregating customer
        behavior data from multiple sources to better understand how to target them and increase sales.</p>

      <p><span>Twitter and Cloud Bigtable</span> <br>
        One specific use case can be seen with Twitter, a well-known social media platform that has grown rapidly,
        leading to the need to capture a large amount of data. They were initially using Hadoop file systems to store
        their data across thousands of different servers.</p>

      <p>
        In 2018, they began to use Google Cloud products and were able to use Bigtable as a step in their process to
        successfully capture increasing high amounts of data. Using Cloud Bigtable along with BigQuery allowed
        Twitter to significantly decrease latency.</p>
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

          <p>At Qlogic, we have deep experience:</p>

          <ul>
            <li>working directly with Google by contributing to development, documentation, and code samples</li>
            <li>leveraging Google Cloud Bigtable to save our clients time</li>
            <li>understanding clients’ unique data storage needs</li>
            <li>integrate with other Google Cloud services</li>
          </ul>

          <p>Let us help you capture your data efficiently and effectively!</p>
        </div>

        <div class="image_border">
          <img src="/resources/images/integration/help_bigtable.png" alt="Let Qlogic Help">
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