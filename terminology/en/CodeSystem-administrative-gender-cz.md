# Administrative Gender (CZ supplement) - HL7 Czech Terminology Implementation Guide v0.3.0

## CodeSystem: Administrative Gender (CZ supplement) 

 
Pohlaví osoby používané pro administrativní účely. The gender of a person used for administrative purposes. 

This Code system is referenced in the definition of the following value sets:

* [AdministrativeGenderCzVs](ValueSet-administrative-gender-cz.md)

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "administrative-gender-cz",
  "language" : "cs",
  "url" : "https://hl7.cz/terminology/CodeSystem/administrative-gender-cz",
  "version" : "4.0.1",
  "name" : "AdministrativeGenderCz",
  "title" : "Administrative Gender (CZ supplement)",
  "status" : "active",
  "experimental" : false,
  "date" : "2025-03-10T09:50:30.338711Z",
  "publisher" : "HL7 Czech Republic",
  "contact" : [{
    "name" : "HL7 Czech Republic",
    "telecom" : [{
      "system" : "url",
      "value" : "https://www.hl7.cz/"
    }]
  }],
  "description" : "Pohlaví osoby používané pro administrativní účely. The gender of a person used for administrative purposes.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CZ",
      "display" : "Czechia"
    }]
  }],
  "content" : "supplement",
  "supplements" : "http://hl7.org/fhir/administrative-gender|4.0.1",
  "concept" : [{
    "code" : "female",
    "display" : "žena",
    "definition" : "Žena",
    "designation" : [{
      "language" : "cs",
      "value" : "žena"
    }]
  },
  {
    "code" : "male",
    "display" : "muž",
    "definition" : "Muž",
    "designation" : [{
      "language" : "cs",
      "value" : "muž"
    }]
  },
  {
    "code" : "other",
    "display" : "jiné",
    "definition" : "Jiné",
    "designation" : [{
      "language" : "cs",
      "value" : "jiné"
    }]
  },
  {
    "code" : "unknown",
    "display" : "neznámé",
    "definition" : "Neznámé",
    "designation" : [{
      "language" : "cs",
      "value" : "neznámé"
    }]
  }]
}

```
