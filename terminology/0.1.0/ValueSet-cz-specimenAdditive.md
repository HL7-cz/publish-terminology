# Specimen Additive - HL7 Czech Terminology Implementation Guide v0.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Specimen Additive**

## ValueSet: Specimen Additive 

| | | |
| :--- | :--- | :--- |
| *Official URL*:https://ncez.mzcr.cz/terminology/ValueSet/cz-specimenAdditive | *Version*:0.1.0 | |
| *Standards status:*[Trial-use](http://hl7.org/fhir/R4/versions.html#std-process) | [Maturity Level](http://hl7.org/fhir/versions.html#maturity): 2 | *Computable Name*:CZ_SpecimenAdditive |
| **Copyright/Legal**: This value set includes content from SNOMED CT, which is copyright © 2002+ International Health Terminology Standards Development Organisation (IHTSDO), and distributed by agreement between IHTSDO and HL7. Implementer use of SNOMED CT is not covered by this agreement | | |

 
List of the specimen additives. Additives are commonly added to the vacutainer tubes to preserve the specimen for analysis 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

Expansion from tx.hl7europe.eu based on SNOMED CT 11000279109 edition 27-Jan 2025

This value set contains 19 concepts

-------

 Explanation of the columns that may appear on this page: 

| | |
| :--- | :--- |
| Level | A few code lists that FHIR defines are hierarchical - each code is assigned a level. In this scheme, some codes are under other codes, and imply that the code they are under also applies |
| System | The source of the definition of the code (when the value set draws in codes defined elsewhere) |
| Code | The code (used as the code in the resource instance) |
| Display | The display (used in the*display*element of a[Coding](http://hl7.org/fhir/R4/datatypes.html#Coding)). If there is no display, implementers should not simply display the code, but map the concept into their application |
| Definition | An explanation of the meaning of the concept |
| Comments | Additional notes about how to use the code |



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "cz-specimenAdditive",
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-fmm",
      "valueInteger" : 2
    },
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
      "valueCode" : "trial-use"
    }
  ],
  "url" : "https://ncez.mzcr.cz/terminology/ValueSet/cz-specimenAdditive",
  "version" : "0.1.0",
  "name" : "CZ_SpecimenAdditive",
  "title" : "Specimen Additive",
  "status" : "active",
  "experimental" : false,
  "date" : "2024-01-01",
  "publisher" : "HL7 Czech Republic",
  "contact" : [
    {
      "name" : "HL7 Czech Republic",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.hl7.cz/"
        }
      ]
    }
  ],
  "description" : "List of the specimen additives. Additives are commonly added to the vacutainer tubes to preserve the specimen for analysis",
  "jurisdiction" : [
    {
      "coding" : [
        {
          "system" : "urn:iso:std:iso:3166",
          "code" : "CZ",
          "display" : "Czechia"
        }
      ]
    }
  ],
  "copyright" : "This value set includes content from SNOMED CT, which is copyright © 2002+ International Health Terminology Standards Development Organisation (IHTSDO), and distributed by agreement between IHTSDO and HL7. Implementer use of SNOMED CT is not covered by this agreement",
  "compose" : {
    "include" : [
      {
        "system" : "http://snomed.info/sct",
        "concept" : [
          {
            "code" : "1259913003",
            "display" : "Heparin ammonium"
          },
          {
            "code" : "386961008",
            "display" : "Aprotinin"
          },
          {
            "code" : "29725000",
            "display" : "Heparin calcium"
          },
          {
            "code" : "21611007",
            "display" : "Boric acid"
          },
          {
            "code" : "30531001",
            "display" : "Calcium oxalate"
          },
          {
            "code" : "69519002",
            "display" : "Edetic acid"
          },
          {
            "code" : "372628006",
            "display" : "Edetate"
          },
          {
            "code" : "27763000",
            "display" : "Hydrochloric acid"
          },
          {
            "code" : "414407009",
            "display" : "Hirudin"
          },
          {
            "code" : "1256100007",
            "display" : "Edetate dipotassium"
          },
          {
            "code" : "1256101006",
            "display" : "Edetate tripotassium"
          },
          {
            "code" : "1256102004",
            "display" : "Heparin lithium"
          },
          {
            "code" : "387418006",
            "display" : "Edetate disodium"
          },
          {
            "code" : "412546005",
            "display" : "Sodium citrate"
          },
          {
            "code" : "50045009",
            "display" : "Heparin sodium"
          },
          {
            "code" : "6910009",
            "display" : "Sodium fluoride"
          },
          {
            "code" : "50306007",
            "display" : "Sodium tetraborate"
          },
          {
            "code" : "387168006",
            "display" : "Mannitol"
          },
          {
            "code" : "115281000146102",
            "display" : "Sodium formate"
          }
        ]
      }
    ]
  }
}

```
