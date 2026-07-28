# Specimen Additive - HL7 Czech Terminology Implementation Guide v0.3.0

## ValueSet: Specimen Additive 

 
List of the specimen additives. Additives are commonly added to the vacutainer tubes to preserve the specimen for analysis 

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
  "id" : "cz-specimenAdditive",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-fmm",
    "valueInteger" : 2
  },
  {
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
    "valueCode" : "trial-use"
  }],
  "url" : "https://ncez.mzcr.cz/terminology/ValueSet/cz-specimenAdditive",
  "version" : "1.0.0",
  "name" : "CZ_SpecimenAdditive",
  "title" : "Specimen Additive",
  "status" : "active",
  "experimental" : false,
  "date" : "2024-01-01",
  "publisher" : "HL7 Czech Republic",
  "contact" : [{
    "name" : "HL7 Czech Republic",
    "telecom" : [{
      "system" : "url",
      "value" : "https://www.hl7.cz/"
    }]
  }],
  "description" : "List of the specimen additives. Additives are commonly added to the vacutainer tubes to preserve the specimen for analysis",
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
        "code" : "1259913003"
      },
      {
        "code" : "386961008"
      },
      {
        "code" : "29725000"
      },
      {
        "code" : "21611007"
      },
      {
        "code" : "30531001"
      },
      {
        "code" : "69519002"
      },
      {
        "code" : "372628006"
      },
      {
        "code" : "27763000"
      },
      {
        "code" : "414407009"
      },
      {
        "code" : "1256100007"
      },
      {
        "code" : "1256101006"
      },
      {
        "code" : "1256102004"
      },
      {
        "code" : "387418006"
      },
      {
        "code" : "412546005"
      },
      {
        "code" : "50045009"
      },
      {
        "code" : "6910009"
      },
      {
        "code" : "50306007"
      },
      {
        "code" : "387168006"
      },
      {
        "code" : "115281000146102"
      }]
    }]
  }
}

```
