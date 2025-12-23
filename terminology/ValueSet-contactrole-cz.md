# Contact Role (CZ) - HL7 Czech Terminology Implementation Guide v0.2.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Contact Role (CZ)**

## ValueSet: Contact Role (CZ) 

| | |
| :--- | :--- |
| *Official URL*:https://hl7.cz/terminology/ValueSet/contactrole-cz | *Version*:0.2.0 |
| Draft as of 2025-04-03 | *Computable Name*:Hl7vs_contactrole_cz |
| **Copyright/Legal**: HL7 International | |

 
Číselník rolí kontaktních osob ve vztahu k pacientovi. (Concepts specifying role of contact person.) 

 **References** 

* Included into [Hl7vsContactAndRelationshipCz100](ValueSet-contact-and-relationship-cz.md)

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
  "id" : "contactrole-cz",
  "language" : "cs",
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/valueset-supplement",
      "valueCanonical" : "https://hl7.cz/terminology/CodeSystem/v2-0131-cz"
    }
  ],
  "url" : "https://hl7.cz/terminology/ValueSet/contactrole-cz",
  "version" : "0.2.0",
  "name" : "Hl7vs_contactrole_cz",
  "title" : "Contact Role (CZ)",
  "status" : "draft",
  "experimental" : false,
  "date" : "2025-04-03T08:19:42.070148Z",
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
  "description" : "Číselník rolí kontaktních osob ve vztahu k pacientovi. (Concepts specifying role of contact person.)",
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
  "copyright" : "HL7 International",
  "compose" : {
    "include" : [
      {
        "system" : "http://terminology.hl7.org/CodeSystem/v2-0131",
        "version" : "3.0.0"
      }
    ],
    "exclude" : [
      {
        "system" : "http://terminology.hl7.org/CodeSystem/v2-0131",
        "version" : "3.0.0",
        "concept" : [
          {
            "code" : "O"
          },
          {
            "code" : "BP"
          },
          {
            "code" : "EP"
          },
          {
            "code" : "PR"
          },
          {
            "code" : "CP"
          }
        ]
      }
    ]
  }
}

```
