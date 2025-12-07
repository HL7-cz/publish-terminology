# Role code (CZ) - HL7 Czech Terminology Implementation Guide v0.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Role code (CZ)**

## ValueSet: Role code (CZ) 

| | |
| :--- | :--- |
| *Official URL*:https://hl7.cz/terminology/ValueSet/personal-relationship-cz | *Version*:0.1.0 |
| Active as of 2025-03-03 | *Computable Name*:PersonalRelationshipCzVS |
| *Other Identifiers:*OID:1.2.203.24341.11.1.8 | |
| **Copyright/Legal**: HL7 | |

 
Vztah kontaktní osoby k subjektu. (Relationship between subject and contact person.) 

 **References** 

* Included into [Hl7vsContactAndRelationshipCz100](ValueSet-contact-and-relationship-cz.md)

### Logical Definition (CLD)

 

### Expansion

Expansion from tx.fhir.org based on:

* [codesystem RoleCode v3.0.0 (CodeSystem)](http://terminology.hl7.org/7.0.0/CodeSystem-v3-RoleCode.html)
* [supplement RoleCode (CZ Supplement) v0.1.0 (CodeSystem)](CodeSystem-v3-RoleCode-cz.md)

This value set contains 55 concepts

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
  "id" : "personal-relationship-cz",
  "language" : "cs",
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/valueset-supplement",
      "valueCanonical" : "https://hl7.cz/terminology/CodeSystem/v3-RoleCode-cz"
    }
  ],
  "url" : "https://hl7.cz/terminology/ValueSet/personal-relationship-cz",
  "identifier" : [
    {
      "system" : "urn:ietf:rfc:3986",
      "value" : "urn:oid:1.2.203.24341.11.1.8"
    }
  ],
  "version" : "0.1.0",
  "name" : "PersonalRelationshipCzVS",
  "title" : "Role code (CZ)",
  "status" : "active",
  "experimental" : false,
  "date" : "2025-03-03T12:31:40.515581Z",
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
  "description" : "Vztah kontaktní osoby k subjektu. (Relationship between subject and contact person.)",
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
  "copyright" : "HL7",
  "compose" : {
    "include" : [
      {
        "system" : "http://terminology.hl7.org/CodeSystem/v3-RoleCode",
        "version" : "3.0.0",
        "concept" : [
          {
            "code" : "NOK"
          },
          {
            "code" : "FAMMEMB"
          },
          {
            "code" : "FRND"
          },
          {
            "code" : "NBOR"
          },
          {
            "code" : "DAUFOST"
          },
          {
            "code" : "AUNT"
          },
          {
            "code" : "GRNDSON"
          },
          {
            "code" : "GRMTH"
          },
          {
            "code" : "DOMPART"
          },
          {
            "code" : "DAUADOPT"
          },
          {
            "code" : "SONINLAW"
          },
          {
            "code" : "NIENEPH"
          },
          {
            "code" : "UNCLE"
          },
          {
            "code" : "GGRFTH"
          },
          {
            "code" : "BROINLAW"
          },
          {
            "code" : "CHLDFOST"
          },
          {
            "code" : "DAUC"
          },
          {
            "code" : "SONC"
          },
          {
            "code" : "STPCHLD"
          },
          {
            "code" : "DAUINLAW"
          },
          {
            "code" : "COUSN"
          },
          {
            "code" : "SON"
          },
          {
            "code" : "SPS"
          },
          {
            "code" : "CHLDADOPT"
          },
          {
            "code" : "NCHILD"
          },
          {
            "code" : "SIGOTHR"
          },
          {
            "code" : "GGRMTH"
          },
          {
            "code" : "MTH"
          },
          {
            "code" : "MTHINLAW"
          },
          {
            "code" : "BRO"
          },
          {
            "code" : "HUSB"
          },
          {
            "code" : "PRN"
          },
          {
            "code" : "SIB"
          },
          {
            "code" : "NIECE"
          },
          {
            "code" : "FTH"
          },
          {
            "code" : "FTHINLAW"
          },
          {
            "code" : "STPSON"
          },
          {
            "code" : "SONFOST"
          },
          {
            "code" : "GGRPRN"
          },
          {
            "code" : "GRNDCHILD"
          },
          {
            "code" : "EXT"
          },
          {
            "code" : "SISINLAW"
          },
          {
            "code" : "WIFE"
          },
          {
            "code" : "DAU"
          },
          {
            "code" : "GRPRN"
          },
          {
            "code" : "CHILD"
          },
          {
            "code" : "GRNDDAU"
          },
          {
            "code" : "GRFTH"
          },
          {
            "code" : "PRNINLAW"
          },
          {
            "code" : "ROOM"
          },
          {
            "code" : "CHLDINLAW"
          },
          {
            "code" : "SONADOPT"
          },
          {
            "code" : "STPDAU"
          },
          {
            "code" : "NEPHEW"
          },
          {
            "code" : "SIS"
          }
        ]
      }
    ]
  }
}

```
