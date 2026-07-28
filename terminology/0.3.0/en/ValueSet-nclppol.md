# NCLPPOL Value Set - HL7 Czech Terminology Implementation Guide v0.3.0

## ValueSet: NCLPPOL Value Set 

 
Číselník obsahující koncepty z kódového systému NCLPPOL. Národní číselník laboratorních položek 

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
  "id" : "nclppol",
  "language" : "cs",
  "url" : "https://ncez.mzcr.cz/nclp/ValueSet/nclppol",
  "version" : "02.97.01",
  "name" : "NCLPPOL",
  "title" : "NCLPPOL Value Set",
  "status" : "draft",
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
  "description" : "Číselník obsahující koncepty z kódového systému NCLPPOL. Národní číselník laboratorních položek",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CZ",
      "display" : "Czechia"
    }]
  }],
  "compose" : {
    "include" : [{
      "system" : "https://ncez.mzcr.cz/nclp/CodeSystem/nclppol",
      "version" : "02.97.01"
    }]
  }
}

```
