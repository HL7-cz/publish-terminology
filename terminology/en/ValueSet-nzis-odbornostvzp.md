# Číselník OdbornostVZP - HL7 Czech Terminology Implementation Guide v0.3.0

## ValueSet: Číselník OdbornostVZP 

 
Číselník obsahující koncepty z kódového systému OdbornostVZP. Číselník použitý v elektronických žádankách a NSHNU. 

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
  "id" : "nzis-odbornostvzp",
  "language" : "cs",
  "url" : "https://uzis.cz/terminology/ValueSet/OdbornostVZP",
  "version" : "1.0.0",
  "name" : "OdbornostVZP",
  "title" : "Číselník OdbornostVZP",
  "status" : "active",
  "experimental" : false,
  "date" : "2026-07-27T16:55:21+02:00",
  "publisher" : "HL7 Czech Republic",
  "contact" : [{
    "name" : "HL7 Czech Republic",
    "telecom" : [{
      "system" : "url",
      "value" : "https://www.hl7.cz/"
    }]
  }],
  "description" : "Číselník obsahující koncepty z kódového systému OdbornostVZP. Číselník použitý v elektronických žádankách a NSHNU.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CZ",
      "display" : "Czechia"
    }]
  }],
  "compose" : {
    "include" : [{
      "system" : "https://uzis.cz/terminology/CodeSystem/OdbornostVZP",
      "version" : "1.0.0"
    }]
  }
}

```
