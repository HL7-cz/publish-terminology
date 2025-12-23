# Kódový systém MKN-10 - HL7 Czech Terminology Implementation Guide v0.2.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Kódový systém MKN-10**

## CodeSystem: Kódový systém MKN-10 

| | |
| :--- | :--- |
| *Official URL*:https://uzis.cz/terminology/CodeSystem/mkn-10 | *Version*:0.2.0 |
| Active as of 1980-01-01 | *Computable Name*:MKN10_5 |
| *Other Identifiers:*OID:1.2.203.24341.11.2.1 | |

 
Národní systém pro kódování diagnóz a zdravotních problémů. 

 This Code system is referenced in the content logical definition of the following value sets: 

* [ConditionVS](ValueSet-condition-cz.md)
* [Mkn105](ValueSet-mkn-10.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "mkn-10",
  "language" : "cs",
  "url" : "https://uzis.cz/terminology/CodeSystem/mkn-10",
  "identifier" : [
    {
      "system" : "urn:ietf:rfc:3986",
      "value" : "urn:oid:1.2.203.24341.11.2.1"
    }
  ],
  "version" : "0.2.0",
  "name" : "MKN10_5",
  "title" : "Kódový systém MKN-10",
  "status" : "active",
  "experimental" : false,
  "date" : "1980-01-01",
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
  "description" : "Národní systém pro kódování diagnóz a zdravotních problémů.",
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
  "caseSensitive" : true,
  "content" : "not-present"
}

```
