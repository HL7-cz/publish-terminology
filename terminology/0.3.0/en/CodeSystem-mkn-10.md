# Kódový systém MKN-10 - HL7 Czech Terminology Implementation Guide v0.3.0

## CodeSystem: Kódový systém MKN-10 

 
Národní systém pro kódování diagnóz a zdravotních problémů odvozený od ICD-10 WHO. 

This Code system is referenced in the definition of the following value sets:

* [ConditionVS](ValueSet-condition-cz.md)
* [Mkn105](ValueSet-mkn-10.md)

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "mkn-10",
  "language" : "cs",
  "url" : "https://uzis.cz/terminology/CodeSystem/mkn-10",
  "identifier" : [{
    "system" : "urn:ietf:rfc:3986",
    "value" : "urn:oid:1.2.203.24341.11.2.1"
  }],
  "version" : "2025-01",
  "name" : "MKN10_5",
  "title" : "Kódový systém MKN-10",
  "status" : "active",
  "experimental" : false,
  "date" : "2025-12-22T17:42:13.32582Z",
  "publisher" : "HL7 Czech Republic",
  "contact" : [{
    "name" : "HL7 Czech Republic",
    "telecom" : [{
      "system" : "url",
      "value" : "https://www.hl7.cz/"
    }]
  }],
  "description" : "Národní systém pro kódování diagnóz a zdravotních problémů odvozený od ICD-10 WHO.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CZ",
      "display" : "Czechia"
    }]
  }],
  "caseSensitive" : false,
  "hierarchyMeaning" : "is-a",
  "content" : "not-present"
}

```
