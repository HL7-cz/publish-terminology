# Typy laboratorních dokumentů - HL7 Czech Terminology Implementation Guide v0.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Typy laboratorních dokumentů**

## ValueSet: Typy laboratorních dokumentů 

| | |
| :--- | :--- |
| *Official URL*:https://ncez.mzcr.cz/terminology/ValueSet/lab-document-types | *Version*:0.1.0 |
| Draft as of 2025-11-19 | *Computable Name*:LabDocumentTypes |
| **Copyright/Legal**: This material contains content from LOINC (http://loinc.org). LOINC is copyright © 1995-2020, Regenstrief Institute, Inc. and the Logical Observation Identifiers Names and Codes (LOINC) Committee and is available at no cost under the license at http://loinc.org/license. LOINC® is a registered United States trademark of Regenstrief Institute, Inc | |

 
Číselník typů laboratorních dokumentů. 

 **References** 

* Included into [SearchDocumentTypes](ValueSet-search-document-types.md)

### Logical Definition (CLD)

 

### Expansion

Expansion from tx.fhir.org based on Loinc v2.81

This value set contains 8 concepts

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
  "id" : "lab-document-types",
  "language" : "cs",
  "url" : "https://ncez.mzcr.cz/terminology/ValueSet/lab-document-types",
  "version" : "0.1.0",
  "name" : "LabDocumentTypes",
  "title" : "Typy laboratorních dokumentů",
  "status" : "draft",
  "experimental" : false,
  "date" : "2025-11-19T13:46:00.42162Z",
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
  "description" : "Číselník typů laboratorních dokumentů.",
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
            "code" : "18716-1",
            "display" : "Laboratorní zpráva alergologická"
          },
          {
            "code" : "18717-9",
            "display" : "Laboratorní zpráva transfůzní"
          },
          {
            "code" : "18719-5",
            "display" : "Laboratorní zpráva biochemická"
          },
          {
            "code" : "18722-9",
            "display" : "Laboratorní zpráva reprodukční"
          },
          {
            "code" : "18723-7",
            "display" : "Laboratorní zpráva hematologická"
          },
          {
            "code" : "18725-2",
            "display" : "Laboratorní zpráva mikrobiologická"
          },
          {
            "code" : "18728-6",
            "display" : "Laboratorní zpráva toxikologická"
          },
          {
            "code" : "26436-6",
            "display" : "Laboratorní zpráva"
          }
        ]
      }
    ]
  }
}

```
