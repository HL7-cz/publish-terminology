# Condition Value Set - HL7 Czech Terminology Implementation Guide v0.3.0

## ValueSet: Condition Value Set 

 
Condition value set includes selected codes from national and recommended EU code systems for health conditions (MKN-10, SNOMED CT and Orphacodes). 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

No Expansion for this valueset (Unknown Code System)

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "condition-cz",
  "language" : "cs",
  "url" : "https://ncez.mzcr.cz/terminology/ValueSet/condition-cz",
  "version" : "1.0.0",
  "name" : "ConditionVS",
  "title" : "Condition Value Set",
  "status" : "active",
  "experimental" : false,
  "date" : "2025-11-01",
  "publisher" : "HL7 Czech Republic",
  "contact" : [{
    "name" : "HL7 Czech Republic",
    "telecom" : [{
      "system" : "url",
      "value" : "https://www.hl7.cz/"
    }]
  }],
  "description" : "Condition value set includes selected codes from national and recommended EU code systems for health conditions (MKN-10, SNOMED CT and Orphacodes).",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CZ",
      "display" : "Czechia"
    }]
  }],
  "copyright" : "This value set includes content from SNOMED CT, which is copyright © 2002+ International Health Terminology Standards Development Organisation (IHTSDO), and distributed by agreement between IHTSDO and HL7. Implementer use of SNOMED CT is not covered by this agreement",
  "compose" : {
    "include" : [{
      "system" : "https://uzis.cz/terminology/CodeSystem/mkn-10"
    },
    {
      "system" : "https://www.orpha.net"
    },
    {
      "system" : "http://snomed.info/sct",
      "filter" : [{
        "property" : "concept",
        "op" : "is-a",
        "value" : "404684003"
      }]
    }]
  }
}

```
