# Mime types permissible for logo attachment - HL7 Czech Terminology Implementation Guide v0.3.0

## ValueSet: Mime types permissible for logo attachment 

 
Mime types for logo attachment. It is used in OrganizationLogo extension to restrict the mime type of the logo image. 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "cz-logo-mime-types",
  "language" : "cs",
  "url" : "https://hl7.cz/terminology/ValueSet/cz-logo-mime-types",
  "version" : "1.0.0",
  "name" : "CZ_LogoMimeTypesVs",
  "title" : "Mime types permissible for logo attachment",
  "status" : "active",
  "experimental" : false,
  "date" : "2022-12-26",
  "publisher" : "HL7 Czech Republic",
  "contact" : [{
    "name" : "HL7 Czech Republic",
    "telecom" : [{
      "system" : "url",
      "value" : "https://www.hl7.cz/"
    }]
  }],
  "description" : "Mime types for logo attachment. It is used in OrganizationLogo extension to restrict the mime type of the logo image.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CZ",
      "display" : "Czechia"
    }]
  }],
  "compose" : {
    "include" : [{
      "system" : "urn:ietf:bcp:13",
      "concept" : [{
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
      }]
    }]
  }
}

```
