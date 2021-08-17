<?php
ob_start();
?>

  <section id="description">
    <div class="content">
      <p>Or learn more about the top Google Cloud categories.</p>
    </div>
  </section>

  <section id="storage" class="gray">
    <div class="content categories">
      <div class="categories__block flexbox">
        <div class="image">
          <h2><span>Google</span><br>Data Storage</h2>

          <img src="/resources/images/services/storage.png" alt="Google Data Storage">
        </div>

        <div class="description">
          <p>Google Data Storage serves a myriad of purposes. Top reasons for integration include:</p>

          <ul>
            <li>Data backup and archiving</li>
            <li>Content storage and library</li>
            <li>Lifecycle management (deletion triggers)</li>
            <li>Data security and encryption</li>
            <li>Repository for analytics or audit</li>
          </ul>

          <p>Whether you need to optimize response time or secure storage for your historical data, the Google Data
            Storage suite can be molded to meet your needs.</p>

          <button onclick="window.location.href='../cloud-integration/google-cloud-storage';">Learn more</button>
        </div>
      </div>
    </div>
  </section>

  <section id="analytics">
    <div class="clip">
      <img src="/resources/images/clip_bottom_gray.svg" alt="Bottom Clip">
    </div>

    <div class="content categories">
      <div class="categories__block flexbox">
        <div class="image">
          <h2><span>Google</span><br>Data Analytics</h2>

          <img src="/resources/images/services/analytics.png" alt="Google Data Analytics">
        </div>

        <div class="description">
          <p>Google Analytics products are a marketer’s best friend. Perform in-depth analysis with ease. Products include:</p>

          <ul>
            <li>Google Analytics</li>
            <li>Google Search Console</li>
            <li>Google Ads</li>
            <li>Google Data Studio</li>
          </ul>

          <p>You can dig deep into your analytics with Google 360 integration or increase your advertising ROI by
            implementing Google Optimize into your software solutions.</p>

          <button onclick="window.location.href='../get-in-touch';">Learn more</button>
        </div>
      </div>
    </div>
  </section>

  <section id="machine" class="gray">
    <div class="clip">
      <img src="/resources/images/clip_top_gray.svg" alt="Top Clip">
    </div>

    <div class="content categories">
      <div class="categories__block flexbox">
        <div class="image">
          <h2><span>Google</span><br>Machine Learning</h2>

          <img src="/resources/images/services/machine.png" alt="Google Machine Learning">
        </div>

        <div class="description">
          <p>Google Machine Learning (ML) and Artificial Intelligence (AI) make mundane tasks much more simple. Many
            businesses are investing in ML and AI because of the recognizable benefits.</p>

          <p>Google ML allows for custom modules, plug-and-play AI building blocks and works with data of any size.</p>

          <p>Add ML cloud services as a part of your business’ overall ecosystem, including your website, your
            applications and more.</p>

          <button onclick="window.location.href='../cloud-integration/automl';">Learn more</button>
        </div>
      </div>
    </div>
  </section>

<?php
$doc_body = ob_get_clean();
?>