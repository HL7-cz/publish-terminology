# Číselník typů úhrady - HL7 Czech Terminology Implementation Guide v0.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Číselník typů úhrady**

## ValueSet: Číselník typů úhrady 

| | |
| :--- | :--- |
| *Official URL*:https://ncez.mzcr.cz/terminology/ValueSet/cz-coverage-type | *Version*:0.1.0 |
| Active as of 2025-01-01 | *Computable Name*:CZ_CoverageType |

 
Číselník typů úhrady zdravotní péče. 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

Expansion from tx.fhir.org based on:

* [codesystem Coverage SelfPay Codes v1.0.1 (CodeSystem)](http://terminology.hl7.org/7.0.0/CodeSystem-coverage-selfpay.html)
* [codesystem ActCode v9.0.0 (CodeSystem)](http://terminology.hl7.org/7.0.0/CodeSystem-v3-ActCode.html)
* [supplement Coverage SelfPay Codes (CZ supplement) v0.1.0 (CodeSystem)](CodeSystem-coverage-selfpay-cz.md)
* [supplement v3 Code System ActCode v0.1.0 (CodeSystem)](CodeSystem-v3-ActCode-cz.md)

This value set contains 2 concepts

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
  "id" : "cz-coverage-type",
  "language" : "cs",
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/valueset-supplement",
      "valueCanonical" : "https://hl7.cz/terminology/CodeSystem/coverage-selfpay-cz"
    },
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/valueset-supplement",
      "valueCanonical" : "https://hl7.cz/terminology/CodeSystem/v3-ActCode-cz"
    }
  ],
  "url" : "https://ncez.mzcr.cz/terminology/ValueSet/cz-coverage-type",
  "version" : "0.1.0",
  "name" : "CZ_CoverageType",
  "title" : "Číselník typů úhrady",
  "status" : "active",
  "experimental" : false,
  "date" : "2025-01-01",
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
  "description" : "Číselník typů úhrady zdravotní péče.",
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
        "system" : "http://terminology.hl7.org/CodeSystem/v3-ActCode",
        "concept" : [
          {
            "code" : "HIP",
            "display" : "zdravotní pojištění"
          }
        ]
      },
      {
        "system" : "http://terminology.hl7.org/CodeSystem/coverage-selfpay",
        "concept" : [
          {
            "code" : "pay",
            "display" : "samoplátce"
          }
        ]
      }
    ]
  }
}

```
