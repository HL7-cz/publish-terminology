# ATC CZ - HL7 Czech Terminology Implementation Guide v0.3.0

## CodeSystem: ATC CZ 

 
Czech national version of the Anatomical Therapeutical Chemical (ATC) code system. 

This Code system is referenced in the definition of the following value sets:

* [DLP_atc](ValueSet-dlp-atc.md)

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "dlp-atc",
  "language" : "cs",
  "url" : "https://sukl.cz/terminology/CodeSystem/dlp-atc",
  "version" : "1.0.0",
  "name" : "CS_DLP_atc",
  "title" : "ATC CZ",
  "status" : "active",
  "experimental" : false,
  "date" : "2026-07-27T16:44:21+02:00",
  "publisher" : "HL7 Czech Republic",
  "contact" : [{
    "name" : "HL7 Czech Republic",
    "telecom" : [{
      "system" : "url",
      "value" : "https://www.hl7.cz/"
    }]
  }],
  "description" : "Czech national version of the Anatomical Therapeutical Chemical (ATC) code system.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CZ",
      "display" : "Czechia"
    }]
  }],
  "caseSensitive" : true,
  "hierarchyMeaning" : "grouped-by",
  "content" : "not-present"
}

```
