<?php
$url = "ftp://test.com/";
$curl = curl_init($url);
curl_setopt($curl, CURLOPT_NOBODY, true);
$result = curl_exec($curl);
if ($result !== false)
{
  $statusCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);  
  if ($statusCode == 404)
  {
    echo "URL Not Exists";
  }
  else
  {
     echo "URL Exists";
  }
}
else
{
  echo "URL not Exists";
}
?>