# Typy laboratorních dokumentů - HL7 Czech Terminology Implementation Guide v0.3.0

## ValueSet: Typy laboratorních dokumentů 

 
Číselník typů laboratorních dokumentů. 

 **References** 

* Included into [SearchDocumentTypes](ValueSet-search-document-types.md)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "lab-document-types",
  "language" : "cs",
  "url" : "https://ncez.mzcr.cz/terminology/ValueSet/lab-document-types",
  "version" : "1.0.0",
  "name" : "LabDocumentTypes",
  "title" : "Typy laboratorních dokumentů",
  "status" : "active",
  "experimental" : false,
  "date" : "2025-11-19T13:46:00.42162Z",
  "publisher" : "HL7 Czech Republic",
  "contact" : [{
    "name" : "HL7 Czech Republic",
    "telecom" : [{
      "system" : "url",
      "value" : "https://www.hl7.cz/"
    }]
  }],
  "description" : "Číselník typů laboratorních dokumentů.",
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
      "system" : "http://loinc.org",
      "concept" : [{
        "code" : "18716-1",
        "display" : "Laboratorní zpráva alergologická"
      },
      {
        "code" : "18717-9",
        "display" : "Laboratorní zpráva transfůzní"
      },
      {
        "code" : "18719-5",
        "display" : "Laboratorní zpráva biochemická"
      },
      {
        "code" : "18722-9",
        "display" : "Laboratorní zpráva reprodukční"
      },
      {
        "code" : "18723-7",
        "display" : "Laboratorní zpráva hematologická"
      },
      {
        "code" : "18725-2",
        "display" : "Laboratorní zpráva mikrobiologická"
      },
      {
        "code" : "18728-6",
        "display" : "Laboratorní zpráva toxikologická"
      },
      {
        "code" : "26436-6",
        "display" : "Laboratorní zpráva"
      }]
    }]
  }
}

```
