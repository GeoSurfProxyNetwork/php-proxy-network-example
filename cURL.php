PHP. cURL
// PHP cURL proxy example
// http://www.geosurf.com/resources/residential-ips-integration-guide

// Our gateway’s hosthname + port, check your dashboard for full gateways list
$gs_proxy_addr = “gw1.geosurf.io:8081”;

// Target URL
$url = “http://www.example.com”;

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_PROXY, $gs_proxy_addr);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HEADER, 1);
$curl_scraped_page = curl_exec($ch);
curl_close($ch);
