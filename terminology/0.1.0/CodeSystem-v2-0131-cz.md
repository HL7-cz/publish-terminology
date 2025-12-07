# Contact Role (CZ supplement) - HL7 Czech Terminology Implementation Guide v0.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Contact Role (CZ supplement)**

## CodeSystem: Contact Role (CZ supplement) 

| | |
| :--- | :--- |
| *Official URL*:https://hl7.cz/terminology/CodeSystem/v2-0131-cz | *Version*:0.1.0 |
| Draft as of 2025-03-03 | *Computable Name*:ContactRole2Cz |

 
Role kontaktní osoby. FHIR Code system definition for HL7 v2 table 0131 (Contact Role). 

 This Code system is referenced in the content logical definition of the following value sets: 

* [Hl7vs_contactrole_cz](ValueSet-contactrole-cz.md)

Language: cs

**Properties**

**This code system defines the following properties for its concepts**

**Concepts**

This code system supplement `https://hl7.cz/terminology/CodeSystem/v2-0131-cz` defines displays and properties on the following codes:



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "v2-0131-cz",
  "language" : "cs",
  "url" : "https://hl7.cz/terminology/CodeSystem/v2-0131-cz",
  "version" : "0.1.0",
  "name" : "ContactRole2Cz",
  "title" : "Contact Role (CZ supplement)",
  "status" : "draft",
  "experimental" : false,
  "date" : "2025-03-03T10:36:45.465879Z",
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
  "description" : "Role kontaktní osoby. FHIR Code system definition for HL7 v2 table 0131 (Contact Role).",
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
  "content" : "supplement",
  "supplements" : "http://terminology.hl7.org/CodeSystem/v2-0131",
  "property" : [
    {
      "code" : "notSelectable",
      "uri" : "http://hl7.org/fhir/concept-properties#notSelectable",
      "description" : "Not Selectable",
      "type" : "boolean"
    }
  ],
  "concept" : [
    {
      "code" : "C",
      "display" : "emergentní kontakt",
      "definition" : "Emergentní kontakt",
      "designation" : [
        {
          "language" : "en",
          "use" : {
            "code" : "definition"
          },
          "value" : "Emergency Contact"
        },
        {
          "language" : "en",
          "use" : {
            "code" : "display"
          },
          "value" : "Emergency Contact"
        }
      ]
    },
    {
      "code" : "E",
      "display" : "zaměstnavatel",
      "definition" : "Zaměstnavatel",
      "designation" : [
        {
          "language" : "en",
          "use" : {
            "code" : "definition"
          },
          "value" : "Employer"
        },
        {
          "language" : "en",
          "use" : {
            "code" : "display"
          },
          "value" : "Employer"
        }
      ]
    },
    {
      "code" : "F",
      "display" : "federální orgán",
      "definition" : "Federální orgán",
      "designation" : [
        {
          "language" : "en",
          "use" : {
            "code" : "definition"
          },
          "value" : "Federal Agency"
        },
        {
          "language" : "en",
          "use" : {
            "code" : "display"
          },
          "value" : "Federal Agency"
        }
      ],
      "property" : [
        {
          "code" : "notSelectable",
          "valueBoolean" : true
        }
      ]
    },
    {
      "code" : "I",
      "display" : "pojišťovna",
      "definition" : "Pojišťovna",
      "designation" : [
        {
          "language" : "en",
          "use" : {
            "code" : "definition"
          },
          "value" : "Insurance Company"
        },
        {
          "language" : "en",
          "use" : {
            "code" : "display"
          },
          "value" : "Insurance Company"
        }
      ]
    },
    {
      "code" : "N",
      "display" : "příbuzný",
      "definition" : "Příbuzný",
      "designation" : [
        {
          "language" : "en",
          "use" : {
            "code" : "definition"
          },
          "value" : "Next-of-Kin"
        },
        {
          "language" : "en",
          "use" : {
            "code" : "display"
          },
          "value" : "Next-of-Kin"
        }
      ]
    },
    {
      "code" : "O",
      "display" : "ostatní",
      "definition" : "Ostatní",
      "designation" : [
        {
          "language" : "en",
          "use" : {
            "code" : "definition"
          },
          "value" : "Other"
        },
        {
          "language" : "en",
          "use" : {
            "code" : "display"
          },
          "value" : "Other"
        }
      ]
    },
    {
      "code" : "S",
      "display" : "státní orgán",
      "definition" : "Státní orgán",
      "designation" : [
        {
          "language" : "en",
          "use" : {
            "code" : "definition"
          },
          "value" : "State Agency"
        },
        {
          "language" : "en",
          "use" : {
            "code" : "display"
          },
          "value" : "State Agency"
        }
      ]
    },
    {
      "code" : "U",
      "display" : "neznámý",
      "definition" : "Neznámý",
      "designation" : [
        {
          "language" : "en",
          "use" : {
            "code" : "definition"
          },
          "value" : "Unknown"
        },
        {
          "language" : "en",
          "use" : {
            "code" : "display"
          },
          "value" : "Unknown"
        }
      ]
    }
  ]
}

```
