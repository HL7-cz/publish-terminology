# Administrative Gender (CZ supplement) - HL7 Czech Terminology Implementation Guide v0.2.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Administrative Gender (CZ supplement)**

## CodeSystem: Administrative Gender (CZ supplement) 

| | |
| :--- | :--- |
| *Official URL*:https://hl7.cz/terminology/CodeSystem/administrative-gender-cz | *Version*:0.2.0 |
| Draft as of 2025-03-10 | *Computable Name*:AdministrativeGenderCz |

 
Pohlaví osoby používané pro administrativní účely. The gender of a person used for administrative purposes. 

 This Code system is referenced in the content logical definition of the following value sets: 

* [AdministrativeGenderCzVs](ValueSet-administrative-gender-cz.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "administrative-gender-cz",
  "language" : "cs",
  "url" : "https://hl7.cz/terminology/CodeSystem/administrative-gender-cz",
  "version" : "0.2.0",
  "name" : "AdministrativeGenderCz",
  "title" : "Administrative Gender (CZ supplement)",
  "status" : "draft",
  "experimental" : false,
  "date" : "2025-03-10T09:50:30.338711Z",
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
  "description" : "Pohlaví osoby používané pro administrativní účely. The gender of a person used for administrative purposes.",
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
  "supplements" : "http://hl7.org/fhir/administrative-gender|4.0.1",
  "concept" : [
    {
      "code" : "female",
      "display" : "žena",
      "definition" : "Žena",
      "designation" : [
        {
          "language" : "en",
          "use" : {
            "code" : "display"
          },
          "value" : "Female"
        }
      ]
    },
    {
      "code" : "male",
      "display" : "muž",
      "definition" : "Muž",
      "designation" : [
        {
          "language" : "en",
          "use" : {
            "code" : "display"
          },
          "value" : "Male"
        }
      ]
    },
    {
      "code" : "other",
      "display" : "jiné",
      "definition" : "Jiné",
      "designation" : [
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
      "code" : "unknown",
      "display" : "neznámé",
      "definition" : "Neznámé",
      "designation" : [
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
