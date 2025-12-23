# Body Structure Qualifier - HL7 Czech Terminology Implementation Guide v0.2.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Body Structure Qualifier**

## ValueSet: Body Structure Qualifier 

| | | |
| :--- | :--- | :--- |
| *Official URL*:https://ncez.mzcr.cz/terminology/ValueSet/cz-sitequalifier | *Version*:0.2.0 | |
| *Standards status:*[Trial-use](http://hl7.org/fhir/R4/versions.html#std-process) | [Maturity Level](http://hl7.org/fhir/versions.html#maturity): 2 | *Computable Name*:CZ_SiteQualifier |
| **Copyright/Legal**: This value set includes content from SNOMED CT, which is copyright © 2002+ International Health Terminology Standards Development Organisation (IHTSDO), and distributed by agreement between IHTSDO and HL7. Implementer use of SNOMED CT is not covered by this agreement | | |

 
Body Structure site qualifier. It indicates the body site qualifier from which a specimen is collected. (based on SNOMED CT) 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

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
  "id" : "cz-sitequalifier",
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
  "url" : "https://ncez.mzcr.cz/terminology/ValueSet/cz-sitequalifier",
  "version" : "0.2.0",
  "name" : "CZ_SiteQualifier",
  "title" : "Body Structure Qualifier",
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
  "description" : "Body Structure site qualifier. It indicates the body site qualifier from which a specimen is collected. (based on SNOMED CT)",
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
            "code" : "7771000",
            "display" : "levý"
          },
          {
            "code" : "24028007",
            "display" : "pravý"
          },
          {
            "code" : "51440002",
            "display" : "laterálně"
          },
          {
            "code" : "46053002",
            "display" : "distálně"
          },
          {
            "code" : "255554000",
            "display" : "dorzálně"
          },
          {
            "code" : "261183002",
            "display" : "horní"
          },
          {
            "code" : "261122009",
            "display" : "dolní"
          },
          {
            "code" : "255561001",
            "display" : "mediální"
          },
          {
            "code" : "49370004",
            "display" : "laterální"
          },
          {
            "code" : "264217000",
            "display" : "superioriní"
          },
          {
            "code" : "261089000",
            "display" : "inferiorní"
          },
          {
            "code" : "255551008",
            "display" : "posteriorní"
          },
          {
            "code" : "351726001",
            "display" : "pod"
          },
          {
            "code" : "352730000",
            "display" : "nad"
          },
          {
            "code" : "40415009",
            "display" : "proximální"
          },
          {
            "code" : "255549009",
            "display" : "anteriorní"
          },
          {
            "code" : "26283006",
            "display" : "povrchový"
          },
          {
            "code" : "795002",
            "display" : "hloboký"
          },
          {
            "code" : "57195005",
            "display" : "bazální"
          },
          {
            "code" : "3583002",
            "display" : "kaudální"
          },
          {
            "code" : "66787007",
            "display" : "cefalický"
          },
          {
            "code" : "255481003",
            "display" : "levý horní kvadrant"
          },
          {
            "code" : "255497008",
            "display" : "pravý horní kvadrant"
          },
          {
            "code" : "255480002",
            "display" : "levý dolní kvadrant"
          },
          {
            "code" : "255495000",
            "display" : "pravý dolní kvadrant"
          }
        ]
      }
    ]
  }
}

```
