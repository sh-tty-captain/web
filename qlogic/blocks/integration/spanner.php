<?php
ob_start();
?>

  <section id="overview">
    <div class="content">
      <div class="overview flexbox">
        <div class="image">
          <h2>Overview</h2>

          <img src="/resources/images/svg/spanner_page.svg" alt="Overview">
        </div>

        <div class="description">
          <p>Google denotes that Google Cloud Spanner is fully managed relational database that is consistent with
            unlimited scale. Benefits include the ability to:</p>

          <ul>
            <li>deliver expected relational features, such as the ability to leverage SQL</li>
            <li>integrate with other Google Cloud services</li>
            <li>alleviate downtime concerns</li>
            <li>provide automatic sharding, making it easy to scale your database</li>
          </ul>

          <p>Oracle and PostgreSQL are some alternatives that clients consider. However, Google Spanner has proven to
            be a better option because it integrates with Google Cloud tools and has excellent scalability and consistency.</p>
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

      <p>Cloud Spanner is noted as being best for large (over a terabyte or two) database applications. Here is a
        real-life example of how it helped an established company scale.</p>

      <p><span>L.L. Bean and Cloud Spanner</span> <br>
        As an over 100-year-old company, L.L. Bean needed to reassess long-standing  IT systems (most of which had
        been physically on site) and come up with an efficient, affordable solution.</p>

      <p>Google Cloud was able to help the company handle large amounts of information (such as inventory data) and
        provide the ability to scale when needed (for example, during the holiday rush), testing capacity in advance
        of peak seasons.</p>
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
            <li>working directly with Google by contributing to development, documentation, and code samples for
              Google Cloud products</li>
            <li>determining the right technology solution for your needs</li>
            <li>using Google Cloud Spanner and other Google products to save you time</li>
          </ul>
        </div>

        <div class="image_border">
          <img src="/resources/images/integration/help_spanner.png" alt="Let Qlogic Help">
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