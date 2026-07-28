# Český číselník ATC skupin - HL7 Czech Terminology Implementation Guide v0.3.0

## ValueSet: Český číselník ATC skupin 

 
Value set of DLP ATC 

 **References** 

* Included into [AllergenWithExceptions](ValueSet-AllergenWithExceptions.md)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "dlp-atc",
  "language" : "cs",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-fmm",
    "valueInteger" : 2
  },
  {
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
    "valueCode" : "trial-use"
  }],
  "url" : "https://sukl.cz/terminology/ValueSet/dlp-atc",
  "version" : "1.0.0",
  "name" : "DLP_atc",
  "title" : "Český číselník ATC skupin",
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
  "description" : "Value set of DLP ATC",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CZ",
      "display" : "Czechia"
    }]
  }],
  "compose" : {
    "include" : [{
      "system" : "https://sukl.cz/terminology/CodeSystem/dlp-atc"
    }]
  }
}

```
