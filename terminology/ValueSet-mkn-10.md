# Mkn10_5 - HL7 Czech Terminology Implementation Guide v0.2.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Mkn10_5**

## ValueSet: Mkn10_5 

| | |
| :--- | :--- |
| *Official URL*:https://uzis.cz/terminology/ValueSet/mkn-10 | *Version*:0.2.0 |
| Active as of 2025-12-07 | *Computable Name*:Mkn105 |

 
Číselník obsahující koncepty z kódového systému Mkn10_5. Ciselnik pouzity v HOSP, NRROD, NRNAR, NRVV, NRPOT, NRU, NSHNU, NRPATV, RIP 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

No Expansion for this valueset (not supported by Publication Tooling)

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
  "id" : "mkn-10",
  "language" : "cs",
  "url" : "https://uzis.cz/terminology/ValueSet/mkn-10",
  "version" : "0.2.0",
  "name" : "Mkn105",
  "title" : "Mkn10_5",
  "status" : "active",
  "experimental" : false,
  "date" : "2025-12-07T21:43:29.076594Z",
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
  "description" : "Číselník obsahující koncepty z kódového systému Mkn10_5. Ciselnik pouzity v HOSP, NRROD, NRNAR, NRVV, NRPOT, NRU, NSHNU, NRPATV, RIP",
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
        "system" : "https://uzis.cz/terminology/CodeSystem/mkn-10"
      }
    ]
  }
}

```
