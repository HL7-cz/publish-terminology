# Číselník NahradyZaZdravotniPeci - HL7 Czech Terminology Implementation Guide v0.3.0

## ValueSet: Číselník NahradyZaZdravotniPeci 

 
Číselník obsahující koncepty z kódového systému NahradyZaZdravotniPeci. Číselník použitý v NRHOSP 

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
  "id" : "nzis-nahradyzazdravotnipeci",
  "language" : "cs",
  "url" : "https://uzis.cz/terminology/ValueSet/nzis-nahradyzazdravotnipeci",
  "version" : "1.0.0",
  "name" : "NahradyZaZdravotniPeci",
  "title" : "Číselník NahradyZaZdravotniPeci",
  "status" : "active",
  "experimental" : false,
  "date" : "2026-02-11T11:59:29.782157Z",
  "publisher" : "HL7 Czech Republic",
  "contact" : [{
    "name" : "HL7 Czech Republic",
    "telecom" : [{
      "system" : "url",
      "value" : "https://www.hl7.cz/"
    }]
  }],
  "description" : "Číselník obsahující koncepty z kódového systému NahradyZaZdravotniPeci. Číselník použitý v NRHOSP",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CZ",
      "display" : "Czechia"
    }]
  }],
  "compose" : {
    "include" : [{
      "system" : "https://uzis.cz/terminology/CodeSystem/nzis-NahradyZaZdravotniPeci"
    }]
  }
}

```
