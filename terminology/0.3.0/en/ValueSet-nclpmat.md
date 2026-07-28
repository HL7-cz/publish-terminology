# Číselník NCLPMAT - HL7 Czech Terminology Implementation Guide v0.3.0

## ValueSet: Číselník NCLPMAT 

 
Číselník laboratorních materiálů NČLP 

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
  "id" : "nclpmat",
  "language" : "cs",
  "url" : "https://ncez.mzcr.cz/terminology/ValueSet/nclpmat",
  "version" : "1.0.0",
  "name" : "NCLPMatVs",
  "title" : "Číselník NCLPMAT",
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
  "description" : "Číselník laboratorních materiálů NČLP",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CZ",
      "display" : "Czechia"
    }]
  }],
  "compose" : {
    "include" : [{
      "system" : "https://ncez.mzcr.cz/nclp/CodeSystem/nclpmat"
    }]
  }
}

```
