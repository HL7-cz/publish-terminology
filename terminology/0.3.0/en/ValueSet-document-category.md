# Kategorie dokumentů - HL7 Czech Terminology Implementation Guide v0.3.0

## ValueSet: Kategorie dokumentů 

 
Kategorie dokumentů pro vyhledávání 

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
  "id" : "document-category",
  "language" : "cs",
  "url" : "https://ncez.mzcr.cz/terminology/ValueSet/document-category",
  "version" : "1.0.0",
  "name" : "DocumentCategory",
  "title" : "Kategorie dokumentů",
  "status" : "active",
  "experimental" : false,
  "date" : "2025-11-19T14:36:29.065962Z",
  "publisher" : "HL7 Czech Republic",
  "contact" : [{
    "name" : "HL7 Czech Republic",
    "telecom" : [{
      "system" : "url",
      "value" : "https://www.hl7.cz/"
    }]
  }],
  "description" : "Kategorie dokumentů pro vyhledávání",
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
        "code" : "107904-5",
        "display" : "Administrativní záznamy"
      },
      {
        "code" : "18682-5",
        "display" : "Záznamy zdravotnické záchranné služby"
      },
      {
        "code" : "11503-0",
        "display" : "Lékařské záznamy"
      },
      {
        "code" : "34746-8",
        "display" : "Ošetřovatelské záznamy"
      },
      {
        "code" : "11502-2",
        "display" : "Laboratorní nálezy"
      },
      {
        "code" : "85430-7",
        "display" : "Nálezy zobrazovacího komplementu"
      },
      {
        "code" : "57133-1",
        "display" : "Žádanky"
      }]
    }]
  }
}

```
