<?php
ob_start();
?>

  <section id="about_us">
    <div class="content">
      <h2>Who We Are</h2>

      <p>We are a leading IT consultancy and product development company, headquartered in New York City. Over the
        past two years, our team has grown from seven engineers to a team of over 50 on two continents.</p>
    </div>
  </section>

  <section id="process" class="gray">
    <div class="content flexbox">
      <div class="content__left">
        <h2>Our Process</h2>

        <p>We are known for our customer-centric approach to development. We believe that the process of
          implementing new business technology should be a collaborative, fluid and seamless enterprise.</p>

        <p>During discovery, your project requirements will be analyzed by a member of our project management team,
          who will oversee the workflow of the entire process from conception to design to completion. Once your
          needs have been defined, the Project Manager will put together a dedicated team with the expertise to
          deliver a custom solution to achieve your organization’s desired outcome. From there, the Project Manager
          will be your liaison throughout the entire lifecycle.</p>

        <p>Whether the project is a Quickbooks integration, a mobile app, or a complete business platform overhaul,
          we maintain constant communication with your team throughout implementation.</p>
      </div>

      <div class="content__right">
        <div class="image_border">
          <img src="/resources/images/about/our_process.png" alt="Our Process">
        </div>
      </div>
    </div>
  </section>

  <section id="technologies">
    <div class="clip">
      <img src="/resources/images/clip_bottom_gray.svg" alt="Bottom Clip">
    </div>

    <div class="content">
      <p>Flexible</p>

      <p>Agile</p>

      <p>Cutting-edge</p>

      <p class="white">technologies</p>
    </div>
  </section>

  <section id="we_do" class="gray">
    <div class="clip">
      <img src="/resources/images/clip_top_gray.svg" alt="Top Clip">
    </div>

    <div class="content">
      <h2 class="border">What we do:</h2>

      <div class="services flexbox">
        <div class="services__block">
          <h3>Cloud Integration</h3>

          <div class="info">
            <div class="info__image">
              <img src="/resources/images/about/cloud_integration.png" alt="Cloud Integration">
            </div>

            <p>We integrate business systems with cloud-based technologies, such as Oracle, Microsoft, SAP, Amazon
              Warehouse (AWS) and Google BigQ Query.</p>
          </div>
        </div>

        <div class="services__block">
          <h3>App creation and Analytics</h3>

          <div class="info">
            <div class="info__image">
              <img src="/resources/images/about/app_creation.png" alt="App creation and Analytics">
            </div>

            <p>We develop mobile-based, web-based and cloud-based applications for businesses from startups to
              well-established enterprises. We offer comprehensive SEO, analytics and marketing to help ensure the
              products’ success.</p>
          </div>
        </div>

        <div class="services__block">
          <h3>Integrated workplace</h3>

          <div class="info">
            <div class="info__image">
              <img src="/resources/images/about/integrated.png" alt="Integrated workplace">
            </div>

            <p>We streamline workflows with technologies like distribution center software, inventory management
              systems, warehouse control systems, project management software and more.</p>
          </div>
        </div>

        <div class="services__block">
          <h3>Security, privacy, data Management</h3>

          <div class="info">
            <div class="info__image">
              <img src="/resources/images/about/security.png" alt="Security, privacy, data Management">
            </div>

            <p>We help CIOs and IT executives develop advanced solutions in security, compliance and data management.
              We tackle complex security and privacy issues and implement tailored application and data management
              structures to intelligently scale growing organizations.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

<?php
$doc_body = ob_get_clean();
?>