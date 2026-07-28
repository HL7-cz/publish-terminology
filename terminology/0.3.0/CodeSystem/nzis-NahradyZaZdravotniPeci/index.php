<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://hl7.cz/terminology/0.3.0/CodeSystem-nzis-NahradyZaZdravotniPeci.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://hl7.cz/terminology/0.3.0/CodeSystem-nzis-NahradyZaZdravotniPeci.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://hl7.cz/terminology/0.3.0/CodeSystem-nzis-NahradyZaZdravotniPeci.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://hl7.cz/terminology/0.3.0/CodeSystem-nzis-NahradyZaZdravotniPeci.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://hl7.cz/terminology/0.3.0/CodeSystem-nzis-NahradyZaZdravotniPeci.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://hl7.cz/terminology/0.3.0/CodeSystem-nzis-NahradyZaZdravotniPeci.html');
else 
  Redirect('https://hl7.cz/terminology/0.3.0/CodeSystem-nzis-NahradyZaZdravotniPeci.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
