<?php
ob_start();
?>

  <section id="overview">
    <div class="content">
      <div class="overview flexbox">
        <div class="image">
          <h2>Overview</h2>

          <img src="/resources/images/svg/firestore_page.svg" alt="Overview">
        </div>

        <div class="description">
          <p>Google Cloud Firestore, part of Google’s Firebase platform, is a document database for developers that
            is serverless and fully managed (according to Google). Cloud Firestore provides benefits such as:</p>

          <ul>
            <li>being able to leverage for mobile, web, and IoT apps</li>
            <li>the ability to scale, as with other Google Cloud products</li>
            <li>data security that businesses can trust</li>
            <li>offline mode and live synchronizations</li>
          </ul>

          <p>Some of Cloud Firestore’s competitors include MongoDB and Amazon DynamoDB, but Firestore has been noted
            to be easy to use and fast. There are also other Google Cloud products that could be useful, depending on
            the scenario.</p>
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

      <p>Cloud Firestore helps developers who would like to build offline apps and the ability to synch data multiple
        apps. A student team was able to leverage the tool to help Alzheimer’s patients.</p>

      <p><span>Alzheimer’s and Cloud Firestore</span> <br>
        A group of students at the University of Arizona wanted to make an impact by creating an app that would help
        track Alzheimer’s patients, who sometimes did to get lost or off-track due to the forgetfulness and confusion
        . The student group was able to leverage Cloud Firestore for syncing data to the prototype app such as the
        patient’s location, heart rate, and number of steps.</p>
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

          <p>The team at Qlogic is experienced with Google Cloud Firestore. We are able to support our clients well
            because we have:</p>

          <ul>
            <li>contributed to development, documentation, and code samples for Cloud Firestore</li>
            <li>helped clients find the right Google Cloud solution for their needs</li>
            <li>leveraged our deep expertise to create the most efficient technical setup</li>
          </ul>
        </div>

        <div class="image_border">
          <img src="/resources/images/integration/help_firestore.png" alt="Let Qlogic Help">
        </div>
      </div>
    </div>
  </section>

  <section id="bottom_info">
    <div class="clip">
      <img src="/resources/images/clip_bottom.svg" alt="Bottom Clip">
    </div>

    <div class="content">
      <button onclick="window.location.href='../../get-in-touch';">Get in Touch</button>
    </div>
  </section>

<?php
$doc_body = ob_get_clean();
?>