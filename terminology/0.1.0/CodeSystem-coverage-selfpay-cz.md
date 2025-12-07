# Coverage SelfPay Codes (CZ supplement) - HL7 Czech Terminology Implementation Guide v0.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Coverage SelfPay Codes (CZ supplement)**

## CodeSystem: Coverage SelfPay Codes (CZ supplement) 

| | |
| :--- | :--- |
| *Official URL*:https://hl7.cz/terminology/CodeSystem/coverage-selfpay-cz | *Version*:0.1.0 |
| Draft as of 2025-11-15 | *Computable Name*:CoverageSelfPayCodesCZ |

 
This code system supplements Coverage SelfPay. 

 This Code system is referenced in the content logical definition of the following value sets: 

* [CZ_CoverageType](ValueSet-cz-coverage-type.md)

Language: cs

This code system supplement `https://hl7.cz/terminology/CodeSystem/coverage-selfpay-cz` defines displays on the following code:



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "coverage-selfpay-cz",
  "language" : "cs",
  "url" : "https://hl7.cz/terminology/CodeSystem/coverage-selfpay-cz",
  "version" : "0.1.0",
  "name" : "CoverageSelfPayCodesCZ",
  "title" : "Coverage SelfPay Codes (CZ supplement)",
  "status" : "draft",
  "experimental" : false,
  "date" : "2025-11-15T18:33:02.789168Z",
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
  "description" : "This code system supplements Coverage SelfPay.",
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
  "supplements" : "http://terminology.hl7.org/CodeSystem/coverage-selfpay",
  "concept" : [
    {
      "code" : "pay",
      "display" : "samoplátce",
      "definition" : "An individual or organization is paying directly for goods and services.",
      "designation" : [
        {
          "language" : "en",
          "use" : {
            "code" : "display"
          },
          "value" : "Pay"
        }
      ]
    }
  ]
}

```
