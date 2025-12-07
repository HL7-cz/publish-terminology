# Mime types permissible for logo attachment - HL7 Czech Terminology Implementation Guide v0.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Mime types permissible for logo attachment**

## ValueSet: Mime types permissible for logo attachment 

| | |
| :--- | :--- |
| *Official URL*:https://hl7.cz/terminology/ValueSet/cz-logo-mime-types | *Version*:0.1.0 |
| Active as of 2022-12-26 | *Computable Name*:CZ_LogoMimeTypesVs |

 
Mime types for logo attachment. It is used in OrganizationLogo extension to restrict the mime type of the logo image. 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

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
  "id" : "cz-logo-mime-types",
  "language" : "cs",
  "url" : "https://hl7.cz/terminology/ValueSet/cz-logo-mime-types",
  "version" : "0.1.0",
  "name" : "CZ_LogoMimeTypesVs",
  "title" : "Mime types permissible for logo attachment",
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
  "description" : "Mime types for logo attachment. It is used in OrganizationLogo extension to restrict the mime type of the logo image.",
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
        "system" : "urn:ietf:bcp:13",
        "concept" : [
          {
            "code" : "image/png",
            "display" : "PNG image"
          },
          {
            "code" : "image/jpeg",
            "display" : "JPEG image"
          },
          {
            "code" : "image/gif",
            "display" : "GIF image"
          },
          {
            "code" : "image/svg+xml",
            "display" : "SVG image"
          }
        ]
      }
    ]
  }
}

```
