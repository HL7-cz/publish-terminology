# Číselník VZP - smluvní odbornost pracovišť - HL7 Czech Terminology Implementation Guide v0.3.0

## ValueSet: Číselník VZP - smluvní odbornost pracovišť 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "vzp-smluvni-odbornost",
  "language" : "cs",
  "url" : "https://ncez.mzcr.cz/terminology/ValueSet/vzp-smluvni-odbornost",
  "version" : "770",
  "name" : "VZPSmluvniOdbornost",
  "title" : "Číselník VZP - smluvní odbornost pracovišť",
  "status" : "active",
  "experimental" : false,
  "date" : "2026-07-27T08:52:28.170257Z",
  "publisher" : "HL7 Czech Republic",
  "contact" : [{
    "name" : "HL7 Czech Republic",
    "telecom" : [{
      "system" : "url",
      "value" : "https://www.hl7.cz/"
    }]
  }],
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CZ",
      "display" : "Czechia"
    }]
  }],
  "compose" : {
    "include" : [{
      "system" : "https://ncez.mzcr.cz/terminology/CodeSystem/vzp-smluvni-odbornost",
      "version" : "770"
    }]
  }
}

```
