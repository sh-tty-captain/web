<?php
$name = $_GET['name'];

switch($_SERVER['REQUEST_URI']) {
  case '/'                                              : $title = "We’re the Google Cloud Service Experts"; break;
  case '/about-us/'                                     : $title = "About Us"; break;
  case '/get-in-touch/'                                 : $title = "Contact Us"; break;
  case '/select-a-service/'                             : $title = "Select a Service"; break;
  case '/cloud-integration/cloud-bigtable/'             : $title = "Google Cloud Bigtable"; break;
  case '/cloud-integration/spanner/'                    : $title = "Google Cloud Spanner"; break;
  case '/cloud-integration/automl/'                     : $title = "Google Cloud AutoML"; break;
  case '/cloud-integration/datastore/'                  : $title = "Google Cloud Datastore"; break;
  case '/cloud-integration/firestore/'                  : $title = "Google Cloud Firestore"; break;
  case '/cloud-integration/bigquery/'                   : $title = "Google Cloud BigQuery"; break;
  case '/cloud-integration/google-cloud-storage/'       : $title = "Google Cloud Storage"; break;
  case '/cloud-integration/google-dataflow/'            : $title = "Google Cloud Dataflow"; break;
  case '/cloud-integration/pubsub/'                     : $title = "Google C loud Pub/Sub"; break;
}
?>