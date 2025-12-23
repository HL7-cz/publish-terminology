# eHDSI Agent or Allergen With Exceptions - HL7 Czech Terminology Implementation Guide v0.2.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **eHDSI Agent or Allergen With Exceptions**

## ValueSet: eHDSI Agent or Allergen With Exceptions 

| | | |
| :--- | :--- | :--- |
| *Official URL*:https://ncez.mzcr.cz/terminology/ValueSet/AllergenWithExceptions | *Version*:0.2.0 | |
| *Standards status:*[Trial-use](http://hl7.org/fhir/R4/versions.html#std-process) | [Maturity Level](http://hl7.org/fhir/versions.html#maturity): 2 | *Computable Name*:AllergenWithExceptions |
| **Copyright/Legal**: This value set includes content from SNOMED CT, which is copyright © 2002+ International Health Terminology Standards Development Organisation (IHTSDO), and distributed by agreement between IHTSDO and HL7. Implementer use of SNOMED CT is not covered by this agreement | | |

 
The Value Set is used for coding s specific allergen or other agent/substance (drug, food, chemical agent, etc.) to which the patient has an adverse reaction propensity. It is defined as the union of: (a) eHDSIAllergenNoDrug (b) DLP_lecivePripravky (c) DLP_ATC (d) eHDSIAbsentOrUnknownAllergy (e) eHDSIExceptionalValue 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

No Expansion for this valueset (not supported by Publication Tooling)

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
  "id" : "AllergenWithExceptions",
  "language" : "cs",
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
  "url" : "https://ncez.mzcr.cz/terminology/ValueSet/AllergenWithExceptions",
  "version" : "0.2.0",
  "name" : "AllergenWithExceptions",
  "title" : "eHDSI Agent or Allergen With Exceptions",
  "status" : "active",
  "experimental" : false,
  "date" : "2025-11-01",
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
  "description" : "The Value Set is used for coding s specific allergen or other agent/substance (drug, food, chemical agent, etc.) to which the patient has an adverse reaction propensity.\nIt is defined as the union of:\n(a) eHDSIAllergenNoDrug\n(b) DLP_lecivePripravky\n(c) DLP_ATC\n(d) eHDSIAbsentOrUnknownAllergy\n(e) eHDSIExceptionalValue",
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
        "valueSet" : [
          "https://ncez.mzcr.cz/terminology/ValueSet/eHDSIAllergenNoDrug-cz"
        ]
      },
      {
        "valueSet" : ["https://sukl.cz/terminology/ValueSet/dlp-lecivepripravky"]
      },
      {
        "valueSet" : ["https://sukl.cz/terminology/ValueSet/dlp-atc"]
      },
      {
        "valueSet" : [
          "https://ncez.mzcr.cz/terminology/ValueSet/eHDSIAbsentOrUnknownAllergy-cz"
        ]
      },
      {
        "valueSet" : [
          "https://ncez.mzcr.cz/terminology/ValueSet/eHDSIExceptionalValue-cz"
        ]
      }
    ]
  }
}

```
