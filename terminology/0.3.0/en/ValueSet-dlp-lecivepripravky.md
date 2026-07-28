# Léčivé přípravky - HL7 Czech Terminology Implementation Guide v0.3.0

## ValueSet: Léčivé přípravky 

 
Číselník léčivých přípravků dle DLP. 

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
  "url" : "https://sukl.cz/terminology/ValueSet/dlp-lecivepripravky",
  "version" : "1.0.0",
  "name" : "DLP_lecivepripravky",
  "title" : "Léčivé přípravky",
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
  "description" : "Číselník léčivých přípravků dle DLP.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CZ",
      "display" : "Czechia"
    }]
  }],
  "compose" : {
    "include" : [{
      "system" : "https://sukl.cz/terminology/CodeSystem/dlp-lecivepripravky"
    }]
  }
}

```
