# Types of species - HL7 Czech Terminology Implementation Guide v0.3.0

## ValueSet: Types of species 

 
Types of animal species for non-human subjects 

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
  "id" : "cz-lab-species-type",
  "language" : "cs",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-fmm",
    "valueInteger" : 2
  },
  {
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
    "valueCode" : "trial-use"
  }],
  "url" : "https://ncez.mzcr.cz/terminology/ValueSet/cz-lab-species-type",
  "version" : "1.0.0",
  "name" : "CZ_LabSpeciesType",
  "title" : "Types of species",
  "status" : "active",
  "experimental" : false,
  "date" : "2026-07-01",
  "publisher" : "HL7 Czech Republic",
  "contact" : [{
    "name" : "HL7 Czech Republic",
    "telecom" : [{
      "system" : "url",
      "value" : "https://www.hl7.cz/"
    }]
  }],
  "description" : "Types of animal species for non-human subjects",
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
      "system" : "http://snomed.info/sct",
      "concept" : [{
        "code" : "425134008"
      },
      {
        "code" : "125097000"
      },
      {
        "code" : "47290002"
      },
      {
        "code" : "448771007"
      },
      {
        "code" : "396620009"
      },
      {
        "code" : "107246009"
      },
      {
        "code" : "85626006"
      },
      {
        "code" : "28482008"
      },
      {
        "code" : "448169003"
      },
      {
        "code" : "392390005"
      },
      {
        "code" : "106831000"
      },
      {
        "code" : "90580008"
      },
      {
        "code" : "125099002"
      },
      {
        "code" : "396524007"
      },
      {
        "code" : "132950000"
      },
      {
        "code" : "107101001"
      },
      {
        "code" : "34618005"
      },
      {
        "code" : "388445009"
      },
      {
        "code" : "125076001"
      },
      {
        "code" : "371564000"
      },
      {
        "code" : "15778005"
      },
      {
        "code" : "331171000009105"
      }]
    }]
  }
}

```
