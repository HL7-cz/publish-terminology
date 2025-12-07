# v3 Code System ActCode - HL7 Czech Terminology Implementation Guide v0.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **v3 Code System ActCode**

## CodeSystem: v3 Code System ActCode 

| | |
| :--- | :--- |
| *Official URL*:https://hl7.cz/terminology/CodeSystem/v3-ActCode-cz | *Version*:0.1.0 |
| Draft as of 2025-11-15 | *Computable Name*:v3-ActCode |

 
This code system supplements v3 ActCode. 

 This Code system is referenced in the content logical definition of the following value sets: 

* [CZ_CoverageType](ValueSet-cz-coverage-type.md)

Language: cs

**Properties**

**This code system defines the following properties for its concepts**

**Concepts**

This code system supplement `https://hl7.cz/terminology/CodeSystem/v3-ActCode-cz` defines displays and properties on the following code:



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "v3-ActCode-cz",
  "language" : "cs",
  "url" : "https://hl7.cz/terminology/CodeSystem/v3-ActCode-cz",
  "version" : "0.1.0",
  "name" : "v3-ActCode",
  "title" : "v3 Code System ActCode",
  "status" : "draft",
  "experimental" : false,
  "date" : "2025-11-15T18:54:22.337815Z",
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
  "description" : "This code system supplements v3 ActCode.",
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
  "supplements" : "http://terminology.hl7.org/CodeSystem/v3-ActCode",
  "property" : [
    {
      "code" : "child",
      "uri" : "http://hl7.org/fhir/concept-properties#child",
      "description" : "Child",
      "type" : "code"
    },
    {
      "code" : "deprecationDate",
      "uri" : "http://hl7.org/fhir/concept-properties#deprecationDate",
      "description" : "Deprecation Date",
      "type" : "dateTime"
    },
    {
      "code" : "notSelectable",
      "uri" : "http://hl7.org/fhir/concept-properties#notSelectable",
      "description" : "Not Selectable",
      "type" : "boolean"
    },
    {
      "code" : "status",
      "uri" : "http://hl7.org/fhir/concept-properties#status",
      "description" : "Status",
      "type" : "code"
    }
  ],
  "concept" : [
    {
      "code" : "HIP",
      "display" : "zdravotní pojištění",
      "designation" : [
        {
          "language" : "en",
          "use" : {
            "code" : "definition"
          },
          "value" : "Definition: A health insurance policy that covers healthcare benefits by protecting covered parties from medical expenses arising from health conditions, sickness, or accidental injury as well as preventive care. Health insurance policies explicitly exclude coverage for losses insured under a disability policy, workers' compensation program, liability insurance (including automobile insurance); or for medical expenses, coverage for on-site medical clinics or for limited dental or vision benefits when these are provided under a separate policy.\r\n\n                        \n                           Discussion: Health insurance policies are offered by health insurance plans that typically reimburse providers for covered services on a fee-for-service basis, that is, a fee that is the allowable amount that a provider may charge.  This is in contrast to managed care plans, which typically prepay providers a per-member/per-month amount or capitation as reimbursement for all covered services rendered.  Health insurance plans include indemnity and healthcare services plans."
        },
        {
          "language" : "en",
          "use" : {
            "code" : "display"
          },
          "value" : "health insurance plan policy"
        }
      ],
      "property" : [
        {
          "code" : "status",
          "valueCode" : "draft"
        }
      ]
    }
  ]
}

```
