# DLP Lecive pripravky - HL7 Czech Terminology Implementation Guide v0.3.0

## CodeSystem: DLP Lecive pripravky 

 
DLP Lecive pripravky - Czech national registry of the pharmaceutical products. 

This Code system is referenced in the definition of the following value sets:

* [DLP_lecivepripravky](ValueSet-dlp-lecivepripravky.md)

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "dlp-lecivepripravky",
  "language" : "cs",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-fmm",
    "valueInteger" : 2
  },
  {
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
    "valueCode" : "trial-use"
  }],
  "url" : "https://sukl.cz/terminology/CodeSystem/dlp-lecivepripravky",
  "identifier" : [{
    "system" : "urn:ietf:rfc:3986"
  }],
  "version" : "1.0.0",
  "name" : "CS_DLP_lecivepripravky",
  "title" : "DLP Lecive pripravky",
  "status" : "active",
  "experimental" : false,
  "date" : "2025-01-17",
  "publisher" : "HL7 Czech Republic",
  "contact" : [{
    "name" : "HL7 Czech Republic",
    "telecom" : [{
      "system" : "url",
      "value" : "https://www.hl7.cz/"
    }]
  }],
  "description" : "DLP Lecive pripravky - Czech national registry of the pharmaceutical products.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CZ",
      "display" : "Czechia"
    }]
  }],
  "caseSensitive" : true,
  "content" : "not-present"
}

```
