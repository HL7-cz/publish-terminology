# Gender for administrative purposes - HL7 Czech Terminology Implementation Guide v0.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Gender for administrative purposes**

## ValueSet: Gender for administrative purposes 

| | |
| :--- | :--- |
| *Official URL*:https://hl7.cz/terminology/ValueSet/administrative-gender-cz | *Version*:0.1.0 |
| Active as of 2022-12-26 | *Computable Name*:AdministrativeGenderCzVs |

 
Pohlaví pro administrativní účely. (Gender for administrative purposes) 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

Language: cs

This ValueSet requires the Code system Supplement [Administrative Gender (CZ supplement)](CodeSystem-administrative-gender-cz.md).

* Include all codes defined in [`http://hl7.org/fhir/administrative-gender`](http://hl7.org/fhir/R4/codesystem-administrative-gender.html)version 📍4.0.1

 

### Expansion

Expansion from tx.fhir.org based on:

* [codesystem AdministrativeGender v4.0.1 (CodeSystem)](http://hl7.org/fhir/R4/codesystem-administrative-gender.html)
* [supplement Administrative Gender (CZ supplement) v0.1.0 (CodeSystem)](CodeSystem-administrative-gender-cz.md)

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
  "id" : "administrative-gender-cz",
  "language" : "cs",
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/valueset-supplement",
      "valueCanonical" : "https://hl7.cz/terminology/CodeSystem/administrative-gender-cz"
    }
  ],
  "url" : "https://hl7.cz/terminology/ValueSet/administrative-gender-cz",
  "version" : "0.1.0",
  "name" : "AdministrativeGenderCzVs",
  "title" : "Gender for administrative purposes",
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
  "description" : "Pohlaví pro administrativní účely. (Gender for administrative purposes)",
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
        "system" : "http://hl7.org/fhir/administrative-gender",
        "version" : "4.0.1"
      }
    ]
  }
}

```
