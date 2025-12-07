# Registering Provider Service Type (CZ) - HL7 Czech Terminology Implementation Guide v0.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Registering Provider Service Type (CZ)**

## ValueSet: Registering Provider Service Type (CZ) 

| | | |
| :--- | :--- | :--- |
| *Official URL*:https://ncez.mzcr.cz/terminology/ValueSet/registering-provider-service-type-cz | *Version*:0.1.0 | |
| *Standards status:*[Trial-use](http://hl7.org/fhir/R4/versions.html#std-process) | [Maturity Level](http://hl7.org/fhir/versions.html#maturity): 2 | *Computable Name*:RegisteringProviderServiceTypeCz |
| *Other Identifiers:*OID:1.2.203.24341.11.1.10 | | |
| **Copyright/Legal**: This value set includes content from SNOMED CT, which is copyright © 2002+ International Health Terminology Standards Development Organisation (IHTSDO), and distributed by agreement between IHTSDO and HL7. Implementer use of SNOMED CT is not covered by this agreement | | |

 
Typ registrujícího lékaře. (Registering healthcare provider service type value set.) 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

Expansion from tx.hl7europe.eu based on SNOMED CT 11000279109 edition 27-Jan 2025

This value set contains 3 concepts

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
  "id" : "registering-provider-service-type-cz",
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
  "url" : "https://ncez.mzcr.cz/terminology/ValueSet/registering-provider-service-type-cz",
  "identifier" : [
    {
      "system" : "urn:ietf:rfc:3986",
      "value" : "urn:oid:1.2.203.24341.11.1.10"
    }
  ],
  "version" : "0.1.0",
  "name" : "RegisteringProviderServiceTypeCz",
  "title" : "Registering Provider Service Type (CZ)",
  "status" : "active",
  "experimental" : false,
  "date" : "2025-03-10T12:47:28.893239Z",
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
  "description" : "Typ registrujícího lékaře. (Registering healthcare provider service type value set.)",
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
  "copyright" : "This value set includes content from SNOMED CT, which is copyright © 2002+ International Health Terminology Standards Development Organisation (IHTSDO), and distributed by agreement between IHTSDO and HL7. Implementer use of SNOMED CT is not covered by this agreement",
  "compose" : {
    "include" : [
      {
        "system" : "http://snomed.info/sct",
        "concept" : [
          {
            "code" : "310061009",
            "display" : "gynekologické služby"
          },
          {
            "code" : "700232004",
            "display" : "všeobecné lékařské služby"
          },
          {
            "code" : "722176000",
            "display" : "stomatologické služby"
          }
        ]
      }
    ]
  }
}

```
