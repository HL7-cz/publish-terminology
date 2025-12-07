# Drzar (CZ) - HL7 Czech Terminology Implementation Guide v0.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Drzar (CZ)**

## ValueSet: Drzar (CZ) 

| | | |
| :--- | :--- | :--- |
| *Official URL*:https://ncez.mzcr.cz/terminology/ValueSet/drzar | *Version*:0.1.0 | |
| *Standards status:*[Trial-use](http://hl7.org/fhir/R4/versions.html#std-process) | [Maturity Level](http://hl7.org/fhir/versions.html#maturity): 2 | *Computable Name*:Drzar |
| *Other Identifiers:*OID:1.2.203.24341.11.1.7 | | |

 
Číselník druhů zdravotnických zařízení. (Type of healthcare provider facility.) 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

Language: cs

* Include all codes defined in [`https://ncez.mzcr.cz/terminology/CodeSystem/drzar`](CodeSystem-drzar.md)version 📦0.1.0

 

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
  "id" : "drzar",
  "language" : "cs",
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-fmm",
      "valueInteger" : 2
    },
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
      "valueCode" : "trial-use"
    }
  ],
  "url" : "https://ncez.mzcr.cz/terminology/ValueSet/drzar",
  "identifier" : [
    {
      "system" : "urn:ietf:rfc:3986",
      "value" : "urn:oid:1.2.203.24341.11.1.7"
    }
  ],
  "version" : "0.1.0",
  "name" : "Drzar",
  "title" : "Drzar (CZ)",
  "status" : "active",
  "experimental" : false,
  "date" : "2022-12-26",
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
  "description" : "Číselník druhů zdravotnických zařízení. (Type of healthcare provider facility.)",
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
        "system" : "https://ncez.mzcr.cz/terminology/CodeSystem/drzar"
      }
    ]
  }
}

```
