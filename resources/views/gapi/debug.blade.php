<h1> Google API PHP CLIENT </h1>

 require_once 'google-api-php-client/autoload.php'; // or wherever autoload.php is located

  $client = new Google_Client();
  $client->setApplicationName("Client_Library_Examples");
  $client->setDeveloperKey("YOUR_APP_KEY");

  $service = new Google_Service_Books($client);
  $optParams = array('filter' => 'free-ebooks');
  $results = $service->volumes->listVolumes('Henry David Thoreau', $optParams);

  foreach ($results as $item) {
    echo $item['volumeInfo']['title'], "<br /> \n";
  }