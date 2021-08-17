<?php
switch($_SERVER['REQUEST_URI']) {
  case '/'                                              : $description  = "Integration service and support from the team that helped develop and currently maintain the Google Client product suite."; break;
  case '/about-us/'                                     : $description = "We are a global team of experienced engineers and marketing professionals."; break;
  case '/get-in-touch/'                                 : $description = "Professional Support."; break;
  case '/select-a-service/'                             : $description = "<dl class=\"dropdown\"><dt><a><span>Choose a service for integration ↴</span></a></dt><dd><ul><li class=\"custom\"><a class=\"default\">Choose a service for integration ↴</a></li><li><a href=\"/cloud-integration/cloud-bigtable\">Google Cloud Bigtable</a></li><li><a href=\"/cloud-integration/spanner\">Google Cloud Spanner</a></li><li><a href=\"/cloud-integration/datastore\">Google Cloud Datastore</a></li><li><a href=\"/cloud-integration/google-cloud-storage\">Google Cloud Storage</a></li><li><a href=\"/cloud-integration/firestore\">Google Cloud Firestore</a></li><li><a href=\"/cloud-integration/pubsub\">Google Cloud Pub/Sub</a></li><li><a href=\"/cloud-integration/bigquery\">Google Cloud BigQuery</a></li><li><a href=\"/cloud-integration/automl\">Google Cloud AutoML</a></li><li><a href=\"/cloud-integration/google-dataflow\">Google Cloud Dataflow</a></li></ul></dd></dl>"; break;
  case '/cloud-integration/cloud-bigtable/'             : $description = "A fully managed, scalable NoSQL database service for large analytical and operational workloads."; break;
  case '/cloud-integration/spanner/'                    : $description = "A fully managed relational database that is consistent with unlimited scale."; break;
  case '/cloud-integration/automl/'                     : $description = "A suite of machine learning products that enables developers with limited machine learning expertise to train high-quality models specific to their business need."; break;
  case '/cloud-integration/datastore/'                  : $description = "A highly scalable NoSQL database for your applications."; break;
  case '/cloud-integration/firestore/'                  : $description = "A document database for developers that is serverless and fully managed."; break;
  case '/cloud-integration/google-cloud-storage/'       : $description = "An object storage solution and part of the Google Cloud suite of products, can be used by companies and developers."; break;
  case '/cloud-integration/google-dataflow/'            : $description = "A data processing service that does not require a server."; break;
  case '/cloud-integration/pubsub/'                     : $description = "An asynchronous messaging service that decouples services that produce events from services that process events."; break;
  case '/cloud-integration/bigquery/'                   : $description = "A cloud data warehouse solution that does not require a server and is scalable for different business needs."; break;
 }
?>

<?php
switch($_SERVER['REQUEST_URI']) {
  case '/'                                              : $button  = "<button onclick=\"window.location.href='select-a-service';\">Select a service</button>"; break;
}
?>
