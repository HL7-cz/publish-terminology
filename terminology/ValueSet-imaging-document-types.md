# Typy dokumentů obrazového komplementu - HL7 Czech Terminology Implementation Guide v0.2.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Typy dokumentů obrazového komplementu**

## ValueSet: Typy dokumentů obrazového komplementu 

| | |
| :--- | :--- |
| *Official URL*:https://ncez.mzcr.cz/terminology/ValueSet/imaging-document-types | *Version*:0.2.0 |
| Active as of 2025-11-19 | *Computable Name*:ImagingDocumentTypes |
| **Copyright/Legal**: This material contains content from LOINC (http://loinc.org). LOINC is copyright © 1995-2020, Regenstrief Institute, Inc. and the Logical Observation Identifiers Names and Codes (LOINC) Committee and is available at no cost under the license at http://loinc.org/license. LOINC® is a registered United States trademark of Regenstrief Institute, Inc | |

 
Typy dokumentů obrazového komplementu 

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
  "id" : "imaging-document-types",
  "language" : "cs",
  "url" : "https://ncez.mzcr.cz/terminology/ValueSet/imaging-document-types",
  "version" : "0.2.0",
  "name" : "ImagingDocumentTypes",
  "title" : "Typy dokumentů obrazového komplementu",
  "status" : "active",
  "experimental" : false,
  "date" : "2025-11-19T17:50:08.889549Z",
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
  "description" : "Typy dokumentů obrazového komplementu",
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
        "filter" : [
          {
            "property" : "CLASS",
            "op" : "=",
            "value" : "LP29684-5"
          },
          {
            "property" : "SCALE_TYP",
            "op" : "=",
            "value" : "LP32888-7"
          },
          {
            "property" : "STATUS",
            "op" : "=",
            "value" : "ACTIVE"
          }
        ]
      },
      {
        "system" : "http://loinc.org",
        "concept" : [
          {
            "code" : "41806-1",
            "display" : "CT břicha"
          },
          {
            "code" : "24627-2",
            "display" : "CT hrudníku"
          },
          {
            "code" : "24690-0",
            "display" : "CT končetiny"
          },
          {
            "code" : "25043-1",
            "display" : "CT-řízená aspirace tekutin"
          },
          {
            "code" : "25044-9",
            "display" : "CT-řízená biopsie"
          },
          {
            "code" : "24725-4",
            "display" : "CT hlavy"
          },
          {
            "code" : "24866-6",
            "display" : "CT pánve s IV kontrastem"
          },
          {
            "code" : "106848-5",
            "display" : "CT páteře"
          },
          {
            "code" : "24932-6",
            "display" : "CT krční páteře"
          },
          {
            "code" : "24963-1",
            "display" : "CT bederní páteře"
          },
          {
            "code" : "24978-9",
            "display" : "CT hrudní páteře"
          },
          {
            "code" : "25045-6",
            "display" : "CT neupřesněné oblasti těla"
          },
          {
            "code" : "18748-4",
            "display" : "Zobrazovací vyšetření"
          },
          {
            "code" : "25069-6",
            "display" : "RF-řízená biopsie – lokalita neupřesněna"
          },
          {
            "code" : "24605-8",
            "display" : "Diagnostická mamografie"
          },
          {
            "code" : "24606-6",
            "display" : "Screeningová mamografie"
          },
          {
            "code" : "24590-2",
            "display" : "MR mozku"
          },
          {
            "code" : "25056-3",
            "display" : "MR neupřesněné oblasti těla"
          },
          {
            "code" : "24556-3",
            "display" : "MR břicha"
          },
          {
            "code" : "24629-8",
            "display" : "MR hrudníku"
          },
          {
            "code" : "24707-2",
            "display" : "MR nohy"
          },
          {
            "code" : "24710-6",
            "display" : "MR předloktí"
          },
          {
            "code" : "24720-5",
            "display" : "MR ruky"
          },
          {
            "code" : "28576-7",
            "display" : "MR kloubu"
          },
          {
            "code" : "24872-4",
            "display" : "MR pánve a kyčle"
          },
          {
            "code" : "24935-9",
            "display" : "MR krční páteře"
          },
          {
            "code" : "24968-0",
            "display" : "MR bederní páteře"
          },
          {
            "code" : "42698-1",
            "display" : "MR krční, hrudní a bederní páteře"
          },
          {
            "code" : "24980-5",
            "display" : "MR hrudní páteře"
          },
          {
            "code" : "24888-0",
            "display" : "NM plicního systému – ventilace a perfuze s Xe-133 IH a s Tc-99m MAA IV"
          },
          {
            "code" : "30695-1",
            "display" : "NM štítné žlázy – projekce"
          },
          {
            "code" : "44136-0",
            "display" : "PET neupřesněné tělové oblasti"
          },
          {
            "code" : "25059-7",
            "display" : "UZ vedení biopsie neupřesněné tělové oblasti"
          },
          {
            "code" : "24558-9",
            "display" : "UZ břicha"
          },
          {
            "code" : "24601-7",
            "display" : "UZ prsu"
          },
          {
            "code" : "24731-2",
            "display" : "UZ hlavy"
          },
          {
            "code" : "28614-6",
            "display" : "UZ jater"
          },
          {
            "code" : "24842-7",
            "display" : "UZ krku"
          },
          {
            "code" : "24869-0",
            "display" : "UZ pánve"
          },
          {
            "code" : "25061-3",
            "display" : "UZ neupřesněné tělové oblasti"
          },
          {
            "code" : "24541-5",
            "display" : "RTG hlezna – projekce"
          },
          {
            "code" : "24676-9",
            "display" : "RTG lokte – projekce"
          },
          {
            "code" : "24704-9",
            "display" : "RTG femuru (stehenní kosti) – projekce"
          },
          {
            "code" : "24709-8",
            "display" : "RTG nohy – projekce"
          },
          {
            "code" : "28582-5",
            "display" : "RTG ruky – projekce"
          },
          {
            "code" : "28564-3",
            "display" : "RTG lebky – projekce"
          },
          {
            "code" : "24762-7",
            "display" : "RTG kyčle – projekce"
          },
          {
            "code" : "28567-6",
            "display" : "RTG humeru (pažní kosti) – projekce"
          },
          {
            "code" : "28565-0",
            "display" : "RTG kolene – projekce"
          },
          {
            "code" : "28561-9",
            "display" : "RTG pánve – projekce"
          },
          {
            "code" : "24891-4",
            "display" : "RTG předloktí (radius + ulna) – projekce"
          },
          {
            "code" : "24909-4",
            "display" : "RTG ramene – projekce"
          },
          {
            "code" : "24946-6",
            "display" : "RTG krční páteře – projekce"
          },
          {
            "code" : "24972-2",
            "display" : "RTG bederní páteře – projekce"
          },
          {
            "code" : "24983-9",
            "display" : "RTG hrudní páteře – projekce"
          },
          {
            "code" : "25011-8",
            "display" : "RTG bérce (tibia + fibula) – projekce"
          },
          {
            "code" : "18782-3",
            "display" : "Popis nálezu zobrazovacího vyšetření (narrativní)"
          },
          {
            "code" : "24619-9",
            "display" : "RTG zápěstí – projekce"
          }
        ]
      }
    ]
  }
}

```
