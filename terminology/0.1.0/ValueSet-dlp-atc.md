# Český číselník ATC skupin - HL7 Czech Terminology Implementation Guide v0.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Český číselník ATC skupin**

## ValueSet: Český číselník ATC skupin 

| | | |
| :--- | :--- | :--- |
| *Official URL*:https://sukl.cz/terminology/ValueSet/dlp-atc | *Version*:0.1.0 | |
| *Standards status:*[Trial-use](http://hl7.org/fhir/R4/versions.html#std-process) | [Maturity Level](http://hl7.org/fhir/versions.html#maturity): 2 | *Computable Name*:DLP_atc |

 
Value set of DLP ATC 

 **References** 

* Included into [AllergenWithExceptions](ValueSet-AllergenWithExceptions.md)

### Logical Definition (CLD)

Language: cs

* Include all codes defined in [`https://sukl.cz/terminology/CodeSystem/dlp-atc`](CodeSystem-dlp-atc.md)version 📦0.1.0

 

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
  "id" : "dlp-atc",
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
  "url" : "https://sukl.cz/terminology/ValueSet/dlp-atc",
  "version" : "0.1.0",
  "name" : "DLP_atc",
  "title" : "Český číselník ATC skupin",
  "status" : "active",
  "experimental" : false,
  "date" : "2025-01-17",
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
  "description" : "Value set of DLP ATC",
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
        "system" : "https://sukl.cz/terminology/CodeSystem/dlp-atc"
      }
    ]
  }
}

```
