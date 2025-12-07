# Specimen Container - HL7 Czech Terminology Implementation Guide v0.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Specimen Container**

## ValueSet: Specimen Container 

| | |
| :--- | :--- |
| *Official URL*:https://ncez.mzcr.cz/terminology/ValueSet/cz-specimencontainer | *Version*:0.1.0 |
| Active as of 2024-01-01 | *Computable Name*:CZ_SpecimenContainer |
| **Copyright/Legal**: This value set includes content from SNOMED CT, which is copyright © 2002+ International Health Terminology Standards Development Organisation (IHTSDO), and distributed by agreement between IHTSDO and HL7. Implementer use of SNOMED CT is not covered by this agreement | |

 
List of the containers commonly used to collect specimens (e.g. urine, blood,..). 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

* Include codes from[`http://snomed.info/sct`](http://www.snomed.org/)version Not Stated (use latest from terminology server) where concept is-a 706041008 (Device for body fluid and tissue collection/transfer/processing (physical object))

 

### Expansion

Expansion from tx.hl7europe.eu based on SNOMED CT 11000279109 edition 27-Jan 2025

This value set expansion contains 124 concepts.

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
  "id" : "cz-specimencontainer",
  "url" : "https://ncez.mzcr.cz/terminology/ValueSet/cz-specimencontainer",
  "version" : "0.1.0",
  "name" : "CZ_SpecimenContainer",
  "title" : "Specimen Container",
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
  "description" : "List of the containers commonly used to collect specimens (e.g. urine, blood,..).",
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
        "filter" : [
          {
            "property" : "concept",
            "op" : "is-a",
            "value" : "706041008"
          }
        ]
      }
    ]
  }
}

```
