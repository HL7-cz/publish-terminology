# AllergyIntoleranceCriticality (CZ supplement) - HL7 Czech Terminology Implementation Guide v0.3.0

## CodeSystem: AllergyIntoleranceCriticality (CZ supplement) 

 
AllergyIntoleranceCriticality CZ Code system supplement 

This Code system is referenced in the definition of the following value sets:

* [AllergyIntoleranceCriticality](ValueSet-allergy-intolerance-criticality-cz.md)

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "allergy-intolerance-criticality-cz",
  "url" : "https://hl7.cz/terminology/CodeSystem/allergy-intolerance-criticality-cz",
  "version" : "4.0.1",
  "name" : "AllergyIntoleranceCriticalityCz",
  "title" : "AllergyIntoleranceCriticality (CZ supplement)",
  "status" : "active",
  "experimental" : false,
  "date" : "2025-12-15T12:06:46.649344Z",
  "publisher" : "HL7 Czech Republic",
  "contact" : [{
    "name" : "HL7 Czech Republic",
    "telecom" : [{
      "system" : "url",
      "value" : "https://www.hl7.cz/"
    }]
  }],
  "description" : "AllergyIntoleranceCriticality CZ Code system supplement",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CZ",
      "display" : "Czechia"
    }]
  }],
  "content" : "supplement",
  "supplements" : "http://hl7.org/fhir/allergy-intolerance-criticality",
  "concept" : [{
    "code" : "high",
    "display" : "vysoké riziko",
    "definition" : "V nejhorším případě je výsledek budoucí expozice hodnocen jako život ohrožující nebo s vysokým rizikem selhání orgánového systému."
  },
  {
    "code" : "low",
    "display" : "nízké riziko",
    "definition" : "Nejhorší možný výsledek budoucí expozice není hodnocen jako život ohrožující ani jako vysoce pravděpodobný selhání orgánového systému."
  },
  {
    "code" : "unable-to-assess",
    "display" : "riziko nelze posoudit",
    "definition" : "Není možné odhadnout nejhorší možný výsledek budoucí expozice."
  }]
}

```
