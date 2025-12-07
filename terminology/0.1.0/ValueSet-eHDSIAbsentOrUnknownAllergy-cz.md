# eHDSI Absent Or Unknown Allergy - HL7 Czech Terminology Implementation Guide v0.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **eHDSI Absent Or Unknown Allergy**

## ValueSet: eHDSI Absent Or Unknown Allergy 

| | | |
| :--- | :--- | :--- |
| *Official URL*:https://ncez.mzcr.cz/terminology/ValueSet/eHDSIAbsentOrUnknownAllergy-cz | *Version*:0.1.0 | |
| *Standards status:*[Draft](http://hl7.org/fhir/R4/versions.html#std-process) | [Maturity Level](http://hl7.org/fhir/versions.html#maturity): 1 | *Computable Name*:EHDSIAbsentOrUnknownAllergyCZ |
| *Other Identifiers:*OID:1.3.6.1.4.1.12559.11.10.1.3.1.42.47 | | |

 
The Value set is used to encode absent or unknown medical allergies. 

 **References** 

* Included into [AllergenWithExceptions](ValueSet-AllergenWithExceptions.md)

### Logical Definition (CLD)

 

### Expansion

This value set contains 5 concepts

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
  "id" : "eHDSIAbsentOrUnknownAllergy-cz",
  "language" : "cs",
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-fmm",
      "valueInteger" : 1
    },
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
      "valueCode" : "draft"
    }
  ],
  "url" : "https://ncez.mzcr.cz/terminology/ValueSet/eHDSIAbsentOrUnknownAllergy-cz",
  "identifier" : [
    {
      "system" : "urn:ietf:rfc:3986",
      "value" : "urn:oid:1.3.6.1.4.1.12559.11.10.1.3.1.42.47"
    }
  ],
  "version" : "0.1.0",
  "name" : "EHDSIAbsentOrUnknownAllergyCZ",
  "title" : "eHDSI Absent Or Unknown Allergy",
  "status" : "draft",
  "experimental" : false,
  "date" : "2025-12-02T17:10:03+01:00",
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
  "description" : "The Value set is used to encode absent or unknown medical allergies.",
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
  "compose" : {
    "include" : [
      {
        "system" : "http://hl7.org/fhir/uv/ips/CodeSystem/absent-unknown-uv-ips",
        "version" : "1.1.0",
        "concept" : [
          {
            "code" : "no-allergy-info",
            "display" : "žádné informace o alergiích"
          },
          {
            "code" : "no-known-allergies",
            "display" : "žádné známé alergie"
          },
          {
            "code" : "no-known-medication-allergies",
            "display" : "žádné známé alergie na léky"
          },
          {
            "code" : "no-known-environmental-allergies",
            "display" : "žádné známé alergie na vnější prostředí"
          },
          {
            "code" : "no-known-food-allergies",
            "display" : "žádné známé alergie na potraviny"
          }
        ]
      }
    ]
  }
}

```
