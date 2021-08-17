<?php
ob_start();
?>

<section id="about">
  <div class="clip">
    <img src="/resources/images/clip_top.svg" alt="Top Clip">
  </div>

  <div class="content about">
    <h2>Save an average of</h2>

    <div class="about__description">
      <div class="top flexbox">
        <div class="top__left flexbox">
          <img src="/resources/images/svg/precent.svg" alt="60%">

          <p>on operational expenses
            by outsourcing your IT
            services. Google Cloud
            integration can be done
            in less time and save you
            money when you call the
            experts!</p>
        </div>

        <div class="top__right">
          <img src="/resources/images/main_google.png" alt="Google">
        </div>
      </div>

      <div class="bottom flexbox">
        <div class="bottom__description">
          <p>Qlogic Consulting leads the charge in cloud
            integration services. We’ve worked with large
            enterprises in many industries, including being
            among the original developers of the Google
            Cloud products. Our best in class team has years
            of experience with cloud integration and
            developing custom tools as well.</p>

          <button onclick="window.location.href='get-in-touch';">Request a Consultation</button>
        </div>

        <div class="image_border">
          <img src="/resources/images/main_about.png" alt="About">
        </div>
      </div>
    </div>
  </div>
</section>

<section id="integrate">
  <div class="clip">
    <img src="/resources/images/clip_bottom.svg" alt="Bottom Clip">
  </div>

  <div class="content">
    <h2>We Integrate Business Systems
      with Many of the Top Google Tools Available</h2>

    <div class="google_logo flexbox">
      <div class="google_logo__row vFlexbox">
        <div class="logo_block">
          <a href="/cloud-integration/bigquery"><img src="/resources/images/svg/query.svg" alt="Google Big Query"
                                                     class="link_logo"></a>
        </div>

        <div class="logo_block">
          <a href="/cloud-integration/google-dataflow"><img src="/resources/images/svg/dataflow.svg" alt="Google Cloud Dataflow"
                                                          class="link_logo"></a>
        </div>
      </div>

      <div class="google_logo__row vFlexbox flex-center">
        <div class="logo_block">
          <a href="/cloud-integration/firestore"><img src="/resources/images/svg/firebase.svg" alt="Firebase"
                                                    class="link_logo"></a>
        </div>

        <div class="logo_block">
          <img src="/resources/images/svg/sql.svg" alt="Google Cloud SQL">
        </div>
      </div>

      <div class="google_logo__row vFlexbox">
        <div class="logo_block">
          <a href="/cloud-integration/cloud-bigtable"><img src="/resources/images/svg/bigtable.svg" alt="Google Cloud Bigtable"
                                                           class="link_logo"></a>
        </div>

        <div class="logo_block">
          <img src="/resources/images/svg/marketing_platform.svg" alt="Google Marketing Platform">
        </div>
      </div>
    </div>

    <p>(… and so many more!)</p>

    <button>Get Started</button>
  </div>
</section>

<?php
$doc_body = ob_get_clean();
?>