# Všechny typy dokumentů - HL7 Czech Terminology Implementation Guide v0.2.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Všechny typy dokumentů**

## ValueSet: Všechny typy dokumentů 

| | |
| :--- | :--- |
| *Official URL*:https://ncez.mzcr.cz/terminology/ValueSet/search-document-types | *Version*:0.2.0 |
| Draft as of 2025-11-19 | *Computable Name*:SearchDocumentTypes |
| **Copyright/Legal**: This material contains content from LOINC (http://loinc.org). LOINC is copyright © 1995-2020, Regenstrief Institute, Inc. and the Logical Observation Identifiers Names and Codes (LOINC) Committee and is available at no cost under the license at http://loinc.org/license. LOINC® is a registered United States trademark of Regenstrief Institute, Inc | |

 
Typy dokumentů zejména pro účely vyhledávání. 

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
  "id" : "search-document-types",
  "language" : "cs",
  "url" : "https://ncez.mzcr.cz/terminology/ValueSet/search-document-types",
  "version" : "0.2.0",
  "name" : "SearchDocumentTypes",
  "title" : "Všechny typy dokumentů",
  "status" : "draft",
  "experimental" : false,
  "date" : "2025-11-19T19:22:51.629952Z",
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
  "description" : "Typy dokumentů zejména pro účely vyhledávání.",
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
        "valueSet" : [
          "https://ncez.mzcr.cz/terminology/ValueSet/imaging-document-types"
        ]
      },
      {
        "valueSet" : [
          "https://ncez.mzcr.cz/terminology/ValueSet/nursing-document-type"
        ]
      },
      {
        "valueSet" : [
          "https://ncez.mzcr.cz/terminology/ValueSet/referralorder-types"
        ]
      },
      {
        "valueSet" : [
          "https://ncez.mzcr.cz/terminology/ValueSet/lab-document-types"
        ]
      },
      {
        "valueSet" : [
          "https://ncez.mzcr.cz/terminology/ValueSet/medical-document-type"
        ]
      }
    ]
  }
}

```
