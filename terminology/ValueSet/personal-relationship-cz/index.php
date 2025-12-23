<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://hl7.cz/terminology/0.2.0/ValueSet-personal-relationship-cz.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://hl7.cz/terminology/0.2.0/ValueSet-personal-relationship-cz.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://hl7.cz/terminology/0.2.0/ValueSet-personal-relationship-cz.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://hl7.cz/terminology/0.2.0/ValueSet-personal-relationship-cz.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://hl7.cz/terminology/0.2.0/ValueSet-personal-relationship-cz.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://hl7.cz/terminology/0.2.0/ValueSet-personal-relationship-cz.html');
else 
  Redirect('https://hl7.cz/terminology/0.2.0/ValueSet-personal-relationship-cz.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
