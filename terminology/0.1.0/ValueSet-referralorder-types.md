# Typy žádanek - HL7 Czech Terminology Implementation Guide v0.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Typy žádanek**

## ValueSet: Typy žádanek 

| | |
| :--- | :--- |
| *Official URL*:https://ncez.mzcr.cz/terminology/ValueSet/referralorder-types | *Version*:0.1.0 |
| Draft as of 2025-11-19 | *Computable Name*:ReferralorderTypes |
| **Copyright/Legal**: This material contains content from LOINC (http://loinc.org). LOINC is copyright © 1995-2020, Regenstrief Institute, Inc. and the Logical Observation Identifiers Names and Codes (LOINC) Committee and is available at no cost under the license at http://loinc.org/license. LOINC® is a registered United States trademark of Regenstrief Institute, Inc | |

 
Číselník typů žádanek 

 **References** 

* Included into [SearchDocumentTypes](ValueSet-search-document-types.md)

### Logical Definition (CLD)

 

### Expansion

Expansion from tx.fhir.org, tx.hl7europe.eu based on:

* Loinc v2.81
* SNOMED CT 11000279109 edition 27-Jan 2025

This value set contains 4 concepts

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
  "id" : "referralorder-types",
  "language" : "cs",
  "url" : "https://ncez.mzcr.cz/terminology/ValueSet/referralorder-types",
  "version" : "0.1.0",
  "name" : "ReferralorderTypes",
  "title" : "Typy žádanek",
  "status" : "draft",
  "experimental" : false,
  "date" : "2025-11-19T15:26:54.549507Z",
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
  "description" : "Číselník typů žádanek",
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
  "copyright" : "This material contains content from LOINC (http://loinc.org). LOINC is copyright © 1995-2020, Regenstrief Institute, Inc. and the Logical Observation Identifiers Names and Codes (LOINC) Committee and is available at no cost under the license at http://loinc.org/license. LOINC® is a registered United States trademark of Regenstrief Institute, Inc",
  "compose" : {
    "include" : [
      {
        "system" : "http://loinc.org",
        "concept" : [
          {
            "code" : "57133-1",
            "display" : "Žádanka o vyšetření"
          },
          {
            "code" : "57830-2",
            "display" : "Žádanka o hospitalizaci"
          }
        ]
      },
      {
        "system" : "http://snomed.info/sct",
        "concept" : [
          {
            "code" : "721965002",
            "display" : "Žádanka o laboratorní vyšetření"
          },
          {
            "code" : "721964003",
            "display" : "Žádanka o zobrazovací vyšetření"
          }
        ]
      }
    ]
  }
}

```
