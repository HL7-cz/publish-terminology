# eHDSI Exceptional Value - HL7 Czech Terminology Implementation Guide v0.2.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **eHDSI Exceptional Value**

## ValueSet: eHDSI Exceptional Value 

| | | |
| :--- | :--- | :--- |
| *Official URL*:https://ncez.mzcr.cz/terminology/ValueSet/eHDSIExceptionalValue-cz | *Version*:0.2.0 | |
| *Standards status:*[Draft](http://hl7.org/fhir/R4/versions.html#std-process) | [Maturity Level](http://hl7.org/fhir/versions.html#maturity): 1 | *Computable Name*:EHDSIExceptionalValueCZ |
| *Other Identifiers:*OID:1.3.6.1.4.1.12559.11.10.1.3.1.42.81 | | |

 
The Value Set is used to code exceptional values for the required binding in FHIR IGs 

 **References** 

* Included into [AllergenWithExceptions](ValueSet-AllergenWithExceptions.md)
* Included into [MedicalDeviceWithExceptionsVS](ValueSet-MedicalDeviceWithExceptions.md)

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
  "id" : "eHDSIExceptionalValue-cz",
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
  "url" : "https://ncez.mzcr.cz/terminology/ValueSet/eHDSIExceptionalValue-cz",
  "identifier" : [
    {
      "system" : "urn:ietf:rfc:3986",
      "value" : "urn:oid:1.3.6.1.4.1.12559.11.10.1.3.1.42.81"
    }
  ],
  "version" : "0.2.0",
  "name" : "EHDSIExceptionalValueCZ",
  "title" : "eHDSI Exceptional Value",
  "status" : "active",
  "experimental" : false,
  "date" : "2025-12-23T18:27:27+01:00",
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
  "description" : "The Value Set is used to code exceptional values for the required binding in FHIR IGs",
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
        "system" : "http://terminology.hl7.org/CodeSystem/v3-NullFlavor",
        "version" : "3.0.0",
        "concept" : [
          {
            "code" : "OTH",
            "display" : "jinak"
          },
          {
            "code" : "UNC",
            "display" : "nekódováno"
          },
          {
            "code" : "UNK",
            "display" : "není známo"
          }
        ]
      }
    ]
  }
}

```
