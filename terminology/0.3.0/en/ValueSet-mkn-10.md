# Mkn10_5 - HL7 Czech Terminology Implementation Guide v0.3.0

## ValueSet: Mkn10_5 

 
Číselník obsahující koncepty z kódového systému Mkn10_5. Ciselnik pouzity v HOSP, NRROD, NRNAR, NRVV, NRPOT, NRU, NSHNU, NRPATV, RIP 

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
  "id" : "mkn-10",
  "language" : "cs",
  "url" : "https://uzis.cz/terminology/ValueSet/mkn-10",
  "version" : "0.1.2",
  "name" : "Mkn105",
  "title" : "Mkn10_5",
  "status" : "active",
  "experimental" : false,
  "date" : "2025-12-07T21:43:29.076594Z",
  "publisher" : "HL7 Czech Republic",
  "contact" : [{
    "name" : "HL7 Czech Republic",
    "telecom" : [{
      "system" : "url",
      "value" : "https://www.hl7.cz/"
    }]
  }],
  "description" : "Číselník obsahující koncepty z kódového systému Mkn10_5. Ciselnik pouzity v HOSP, NRROD, NRNAR, NRVV, NRPOT, NRU, NSHNU, NRPATV, RIP",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CZ",
      "display" : "Czechia"
    }]
  }],
  "compose" : {
    "include" : [{
      "system" : "https://uzis.cz/terminology/CodeSystem/mkn-10"
    }]
  }
}

```
