# Contact and Relationship (CZ) - HL7 Czech Terminology Implementation Guide v0.2.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Contact and Relationship (CZ)**

## ValueSet: Contact and Relationship (CZ) 

| | |
| :--- | :--- |
| *Official URL*:https://hl7.cz/terminology/ValueSet/contact-and-relationship-cz | *Version*:0.2.0 |
| Active as of 2025-04-03 | *Computable Name*:Hl7vsContactAndRelationshipCz100 |

 
Číselník vztahů a rolí kontaktních osob k pacientovi. Číselník zahrnuje dva samostatné číselníky: relationship a contact role. 

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
  "id" : "contact-and-relationship-cz",
  "language" : "cs",
  "url" : "https://hl7.cz/terminology/ValueSet/contact-and-relationship-cz",
  "version" : "0.2.0",
  "name" : "Hl7vsContactAndRelationshipCz100",
  "title" : "Contact and Relationship (CZ)",
  "status" : "active",
  "experimental" : false,
  "date" : "2025-04-03T08:40:10.799745Z",
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
  "description" : "Číselník vztahů a rolí kontaktních osob k pacientovi. Číselník zahrnuje dva samostatné číselníky: relationship a contact role.",
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
        "valueSet" : ["https://hl7.cz/terminology/ValueSet/contactrole-cz"]
      },
      {
        "valueSet" : [
          "https://hl7.cz/terminology/ValueSet/personal-relationship-cz"
        ]
      }
    ]
  }
}

```
