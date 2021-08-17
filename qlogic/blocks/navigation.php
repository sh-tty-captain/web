<?php $url = $_SERVER["REQUEST_URI"]; ?>

<nav>
  <div class="content flexbox">
    <div class="logo">
      <a href="/"><img src="/resources/images/svg/logo_white.svg" alt="Qlogic Consultants" class="deafult_logo"></a>
      <a href="/"><img src="/resources/images/svg/logo.svg" alt="Qlogic Consultants" class="fixed_logo"></a>
    </div>

    <div class="nav flexbox">
      <i class="fas fa-bars"></i>

      <ul class="flexbox">
        <li class="dropdown_menu" <?php if ($url == "/cloud-integration/") {echo 'class="active"';}?>>
          <a>Cloud Integration</a>

          <ul class="submenu">
            <li><a href="/cloud-integration/cloud-bigtable" <?php if ($url == "/cloud-integration/cloud-bigtable/") {echo 'class="active"';}?>>Google Cloud Bigtable</a></li>
            <li><a href="/cloud-integration/spanner" <?php if ($url == "/cloud-integration/spanner/") {echo 'class="active"';}?>>Google Cloud Spanner</a></li>
            <li><a href="/cloud-integration/datastore" <?php if ($url == "/cloud-integration/datastore/") {echo 'class="active"';}?>>Google Cloud Datastore</a></li>
            <li><a href="/cloud-integration/google-cloud-storage" <?php if ($url == "/cloud-integration/google-cloud-storage/") {echo 'class="active"';}?>>Google Cloud Storage</a></li>
            <li><a href="/cloud-integration/firestore" <?php if ($url == "/cloud-integration/firestore/") {echo 'class="active"';}?>>Google Cloud Firestore</a></li>
            <li><a href="/cloud-integration/pubsub" <?php if ($url == "/cloud-integration/pubsub/") {echo 'class="active"';}?>>Google Cloud Pub/Sub</a></li>
            <li><a href="/cloud-integration/bigquery" <?php if ($url == "/cloud-integration/bigquery/") {echo 'class="active"';}?>>Google Cloud BigQuery</a></li>
            <li><a href="/cloud-integration/automl" <?php if ($url == "/cloud-integration/automl/") {echo 'class="active"';}?>>Google Cloud AutoML</a></li>
            <li><a href="/cloud-integration/google-dataflow" <?php if ($url == "/cloud-integration/google-dataflow/") {echo 'class="active"';}?>>Google Cloud Dataflow</a></li>
          </ul>
        </li>

        <li <?php if ($url == "/select-a-service/") {echo 'class="active"';}?>><a href="/select-a-service">Select a Service</a></li>

        <li <?php if ($url == "/about-us/") {echo 'class="active"';}?>><a href="/about-us">About Us</a></li>

        <li <?php if ($url == "/get-in-touch/") {echo 'class="active"';}?>><a href="/get-in-touch">Get In Touch</a></li>
      </ul>
    </div>
  </div>
</nav>