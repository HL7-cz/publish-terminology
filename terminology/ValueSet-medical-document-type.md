# Typy lékařské dokumentace - HL7 Czech Terminology Implementation Guide v0.2.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Typy lékařské dokumentace**

## ValueSet: Typy lékařské dokumentace 

| | |
| :--- | :--- |
| *Official URL*:https://ncez.mzcr.cz/terminology/ValueSet/medical-document-type | *Version*:0.2.0 |
| Draft as of 2025-11-19 | *Computable Name*:MedicalDocumentType |
| **Copyright/Legal**: This material contains content from LOINC (http://loinc.org). LOINC is copyright © 1995-2020, Regenstrief Institute, Inc. and the Logical Observation Identifiers Names and Codes (LOINC) Committee and is available at no cost under the license at http://loinc.org/license. LOINC® is a registered United States trademark of Regenstrief Institute, Inc | |

 
Číselník typů medicínských dokumentů. 

 **References** 

* Included into [SearchDocumentTypes](ValueSet-search-document-types.md)

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
  "id" : "medical-document-type",
  "language" : "cs",
  "url" : "https://ncez.mzcr.cz/terminology/ValueSet/medical-document-type",
  "version" : "0.2.0",
  "name" : "MedicalDocumentType",
  "title" : "Typy lékařské dokumentace",
  "status" : "draft",
  "experimental" : false,
  "date" : "2025-11-19T19:13:45.314486Z",
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
  "description" : "Číselník typů medicínských dokumentů.",
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
            "code" : "18842-5",
            "display" : "Propouštěcí zpráva"
          },
          {
            "code" : "11488-4",
            "display" : "Konsiliární zpráva"
          },
          {
            "code" : "11506-3",
            "display" : "Průběžná zpráva"
          },
          {
            "code" : "67851-6",
            "display" : "Vstupní vyšetření"
          },
          {
            "code" : "11504-8",
            "display" : "Operační protokol"
          },
          {
            "code" : "60591-5",
            "display" : "Pacientský souhrn"
          },
          {
            "code" : "67781-5",
            "display" : "Zpráva o vyšetření či ošetření"
          },
          {
            "code" : "34133-9",
            "display" : "Souhrn poskytnuté péče"
          },
          {
            "code" : "51848-0",
            "display" : "Lékařský posudek"
          },
          {
            "code" : "67796-3",
            "display" : "Záznam o výjezdu"
          },
          {
            "code" : "18743-5",
            "display" : "Pitevní protokol"
          },
          {
            "code" : "34748-4",
            "display" : "Zpráva o telekonzultaci"
          },
          {
            "code" : "74207-2",
            "display" : "Souhrn pre-hospitalizační péče"
          }
        ]
      }
    ]
  }
}

```
