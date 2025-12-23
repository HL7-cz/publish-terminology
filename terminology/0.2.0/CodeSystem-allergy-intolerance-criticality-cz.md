# AllergyIntoleranceCriticality (CZ supplement) - HL7 Czech Terminology Implementation Guide v0.2.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **AllergyIntoleranceCriticality (CZ supplement)**

## CodeSystem: AllergyIntoleranceCriticality (CZ supplement) 

| | |
| :--- | :--- |
| *Official URL*:https://hl7.cz/terminology/CodeSystem/allergy-intolerance-criticality-cz | *Version*:0.2.0 |
| Active as of 2025-12-15 | *Computable Name*:AllergyIntoleranceCriticality |

 
AllergyIntoleranceCriticality CZ Code system supplement 

 This Code system is referenced in the content logical definition of the following value sets: 

* [AllergyIntoleranceCriticality](ValueSet-allergy-intolerance-criticality-cz.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "allergy-intolerance-criticality-cz",
  "url" : "https://hl7.cz/terminology/CodeSystem/allergy-intolerance-criticality-cz",
  "version" : "0.2.0",
  "name" : "AllergyIntoleranceCriticality",
  "title" : "AllergyIntoleranceCriticality (CZ supplement)",
  "status" : "active",
  "experimental" : false,
  "date" : "2025-12-15T12:06:46.649344Z",
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
  "description" : "AllergyIntoleranceCriticality CZ Code system supplement",
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
  "supplements" : "http://hl7.org/fhir/allergy-intolerance-criticality",
  "concept" : [
    {
      "code" : "high",
      "display" : "vysoké riziko",
      "definition" : "V nejhorším případě je výsledek budoucí expozice hodnocen jako život ohrožující nebo s vysokým rizikem selhání orgánového systému.",
      "designation" : [
        {
          "language" : "en",
          "use" : {
            "code" : "definition"
          },
          "value" : "Worst case result of a future exposure is assessed to be life-threatening or having high potential for organ system failure."
        },
        {
          "language" : "en",
          "use" : {
            "code" : "display"
          },
          "value" : "High Risk"
        }
      ]
    },
    {
      "code" : "low",
      "display" : "nízké riziko",
      "definition" : "Nejhorší možný výsledek budoucí expozice není hodnocen jako život ohrožující ani jako vysoce pravděpodobný selhání orgánového systému.",
      "designation" : [
        {
          "language" : "en",
          "use" : {
            "code" : "definition"
          },
          "value" : "Worst case result of a future exposure is not assessed to be life-threatening or having high potential for organ system failure."
        },
        {
          "language" : "en",
          "use" : {
            "code" : "display"
          },
          "value" : "Low Risk"
        }
      ]
    },
    {
      "code" : "unable-to-assess",
      "display" : "riziko nelze posoudit",
      "definition" : "Není možné odhadnout nejhorší možný výsledek budoucí expozice.",
      "designation" : [
        {
          "language" : "en",
          "use" : {
            "code" : "definition"
          },
          "value" : "Unable to assess the worst case result of a future exposure."
        },
        {
          "language" : "en",
          "use" : {
            "code" : "display"
          },
          "value" : "Unable to Assess Risk"
        }
      ]
    }
  ]
}

```
