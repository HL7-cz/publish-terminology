# Všechny typy dokumentů - HL7 Czech Terminology Implementation Guide v0.3.0

## ValueSet: Všechny typy dokumentů 

 
Typy dokumentů zejména pro účely vyhledávání. 

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
  "id" : "search-document-types",
  "language" : "cs",
  "url" : "https://ncez.mzcr.cz/terminology/ValueSet/search-document-types",
  "version" : "1.0.0",
  "name" : "SearchDocumentTypes",
  "title" : "Všechny typy dokumentů",
  "status" : "active",
  "experimental" : false,
  "date" : "2025-11-19T19:22:51.629952Z",
  "publisher" : "HL7 Czech Republic",
  "contact" : [{
    "name" : "HL7 Czech Republic",
    "telecom" : [{
      "system" : "url",
      "value" : "https://www.hl7.cz/"
    }]
  }],
  "description" : "Typy dokumentů zejména pro účely vyhledávání.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CZ",
      "display" : "Czechia"
    }]
  }],
  "copyright" : "This material contains content from LOINC (http://loinc.org). LOINC is copyright © 1995-2020, Regenstrief Institute, Inc. and the Logical Observation Identifiers Names and Codes (LOINC) Committee and is available at no cost under the license at http://loinc.org/license. LOINC® is a registered United States trademark of Regenstrief Institute, Inc",
  "compose" : {
    "include" : [{
      "valueSet" : ["https://ncez.mzcr.cz/terminology/ValueSet/imaging-document-types"]
    },
    {
      "valueSet" : ["https://ncez.mzcr.cz/terminology/ValueSet/nursing-document-type"]
    },
    {
      "valueSet" : ["https://ncez.mzcr.cz/terminology/ValueSet/referralorder-types"]
    },
    {
      "valueSet" : ["https://ncez.mzcr.cz/terminology/ValueSet/lab-document-types"]
    },
    {
      "valueSet" : ["https://ncez.mzcr.cz/terminology/ValueSet/medical-document-type"]
    }]
  }
}

```
