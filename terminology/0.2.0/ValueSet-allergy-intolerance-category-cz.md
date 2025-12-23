# Allergy Intolerance Category (CZ supplement) - HL7 Czech Terminology Implementation Guide v0.2.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Allergy Intolerance Category (CZ supplement)**

## ValueSet: Allergy Intolerance Category (CZ supplement) 

| | |
| :--- | :--- |
| *Official URL*:https://hl7.cz/terminology/ValueSet/allergy-intolerance-category-cz | *Version*:0.2.0 |
| Active as of 2025-12-12 | *Computable Name*:AllergyIntoleranceCategory |

 
Category of an identified substance associated with allergies or intolerances. 

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
  "id" : "allergy-intolerance-category-cz",
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/valueset-supplement",
      "valueCanonical" : "https://hl7.cz/terminology/CodeSystem/allergy-intolerance-category-cz"
    }
  ],
  "url" : "https://hl7.cz/terminology/ValueSet/allergy-intolerance-category-cz",
  "version" : "0.2.0",
  "name" : "AllergyIntoleranceCategory",
  "title" : "Allergy Intolerance Category (CZ supplement)",
  "status" : "active",
  "experimental" : false,
  "date" : "2025-12-12T16:18:06.331637Z",
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
  "description" : "Category of an identified substance associated with allergies or intolerances.",
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
        "system" : "http://hl7.org/fhir/allergy-intolerance-category",
        "version" : "4.0.1"
      }
    ]
  }
}

```
