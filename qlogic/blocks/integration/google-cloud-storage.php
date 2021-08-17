<?php
ob_start();
?>

  <section id="overview">
    <div class="content">
      <div class="overview flexbox">
        <div class="image">
          <h2>Overview</h2>

          <img src="/resources/images/svg/storage_page.svg" alt="Overview">
        </div>

        <div class="description">
          <p>Google Cloud Storage, an object storage solution and part of the Google Cloud suite of products, can be
            used by companies and developers. As Google describes it, Cloud Storage can provide:</p>

          <ul>
            <li>security for your data against outage</li>
            <li>deliver content and back up data</li>
            <li>help you customize both how and where you store your data</li>
            <li>Object Lifestyle Management, managing costs and performance</li>
          </ul>

          <p>Some clients consider alternatives such as Google Drive, Firebase, and Amazon Glacier. However, Cloud
            Storage’s scalability, ease of use, and consistency.</p>
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

      <p>Cloud Storage can be used in different ways, whether it be for storing movies and images, data backups,
        analytics, or machine learning.</p>

      <p><span>The Broad Institute and Cloud Storage</span> <br>
        The Broad Institute, an organization that studies the human genome to better understand diseases and
        contribute to research on cures, decided to switch from their own computers and storage to leverage Cloud
        Storage instead.</p>

      <p>After implementing the Google Cloud solution, The Broad Institute was able to view billions of base pairs of
        genetic material, ensure security of human genome data, and analyze the genome data 400% faster than before.</p>
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

          <p>The team at Qlogic is experienced with Google Cloud Storage and supporting our clients with the tool. We have:</p>

          <ul>
            <li>contributed to development, documentation, and code samples for Google Cloud products, including Cloud
              Storage</li>
            <li>helped clients find the right storage solution for their needs</li>
            <li>improved businesses’ storage performance and security</li>
          </ul>

          <p></p>
        </div>

        <div class="image_border">
          <img src="/resources/images/integration/help_storage.png" alt="Let Qlogic Help">
        </div>
      </div>
    </div>
  </section>

  <section id="bottom_info">
    <div class="clip">
      <img src="/resources/images/clip_bottom.svg" alt="Bottom Clip">
    </div>

    <div class="content">
      <button onclick="window.location.href='../../get-in-touch';">Contact Us Today</button>
    </div>
  </section>

<?php
$doc_body = ob_get_clean();
?>