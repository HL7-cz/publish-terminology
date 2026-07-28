# Coverage SelfPay Codes (CZ supplement) - HL7 Czech Terminology Implementation Guide v0.3.0

## CodeSystem: Coverage SelfPay Codes (CZ supplement) 

 
This code system supplements Coverage SelfPay. 

This Code system is referenced in the definition of the following value sets:

* [CZ_CoverageType](ValueSet-cz-coverage-type.md)

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "coverage-selfpay-cz",
  "language" : "cs",
  "url" : "https://hl7.cz/terminology/CodeSystem/coverage-selfpay-cz",
  "version" : "4.0.1",
  "name" : "CoverageSelfPayCodesCZ",
  "title" : "Coverage SelfPay Codes (CZ supplement)",
  "status" : "active",
  "experimental" : false,
  "date" : "2025-11-15T18:33:02.789168Z",
  "publisher" : "HL7 Czech Republic",
  "contact" : [{
    "name" : "HL7 Czech Republic",
    "telecom" : [{
      "system" : "url",
      "value" : "https://www.hl7.cz/"
    }]
  }],
  "description" : "This code system supplements Coverage SelfPay.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CZ",
      "display" : "Czechia"
    }]
  }],
  "content" : "supplement",
  "supplements" : "http://terminology.hl7.org/CodeSystem/coverage-selfpay|1.0.1",
  "concept" : [{
    "code" : "pay",
    "display" : "samoplátce",
    "definition" : "An individual or organization is paying directly for goods and services."
  }]
}

```
