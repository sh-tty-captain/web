<?php
ob_start();
?>

  <section id="overview">
    <div class="content">
      <div class="overview flexbox">
        <div class="image">
          <h2>Overview</h2>

          <img src="/resources/images/svg/automl_page.svg" alt="Overview">
        </div>

        <div class="description">
          <p>Google Cloud AutoML, according to Google, is “a suite of machine learning products that enables
            developers with limited machine learning expertise to train high-quality models specific to their
            business needs”. AutoML provides benefits such as:</p>

          <ul>
            <li>easy to use interface, even for those not experienced with machine learning</li>
            <li>fast performance and accurate predictions</li>
            <li>research backed technology</li>
            <li>strong training data to help model accuracy</li>
          </ul>

          <p>Other auto machine learning products include AutoKeras, DataRobot, and dotData. As mentioned though,
            companies can get up and running with Cloud AutoML without deep experience and get to results.</p>
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

      <p>Cloud AutoML can be used to build models to help make predictions for different business needs and scenarios
        . Here is one example from a product company looking to compete with larger companies in its market.</p>

      <p><span>California Design Den and Cloud AutoML</span> <br>
        California Design Den, a small to medium e-commerce business that sells bedding products, needed to determine
        how to carry the right inventory in a way that would be available to customers in a timely fashion based on
        their preferences. Migrating to the Google Cloud Platform and leveraging Cloud AutoML, the company was able
        to get a much better understanding of how to manage and plan their inventory without having to hire a team of
        data science experts and get data on individual product performance.</p>
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
            <li>contribute to development, documentation, and code samples for Cloud AutoML</li>
            <li>help you set up the technology to model different business scenarios</li>
            <li>integrate your machine learning tool with other technology for an overall solution</li>
          </ul>
        </div>

        <div class="image_border">
          <img src="/resources/images/integration/help_automl.png" alt="Let Qlogic Help">
        </div>
      </div>
    </div>
  </section>

  <section id="bottom_info">
    <div class="clip">
      <img src="/resources/images/clip_bottom.svg" alt="Bottom Clip">
    </div>

    <div class="content">
      <button onclick="window.location.href='../../get-in-touch';">Get Started Today</button>
    </div>
  </section>

<?php
$doc_body = ob_get_clean();
?>