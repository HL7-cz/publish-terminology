# Číselník typů úhrady - HL7 Czech Terminology Implementation Guide v0.3.0

## ValueSet: Číselník typů úhrady 

 
Číselník typů úhrady zdravotní péče. 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "cz-coverage-type",
  "language" : "cs",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/valueset-supplement",
    "valueCanonical" : "https://hl7.cz/terminology/CodeSystem/coverage-selfpay-cz"
  },
  {
    "url" : "http://hl7.org/fhir/StructureDefinition/valueset-supplement",
    "valueCanonical" : "https://hl7.cz/terminology/CodeSystem/v3-ActCode-cz"
  }],
  "url" : "https://ncez.mzcr.cz/terminology/ValueSet/cz-coverage-type",
  "version" : "1.0.0",
  "name" : "CZ_CoverageType",
  "title" : "Číselník typů úhrady",
  "status" : "active",
  "experimental" : false,
  "date" : "2025-01-01",
  "publisher" : "HL7 Czech Republic",
  "contact" : [{
    "name" : "HL7 Czech Republic",
    "telecom" : [{
      "system" : "url",
      "value" : "https://www.hl7.cz/"
    }]
  }],
  "description" : "Číselník typů úhrady zdravotní péče.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CZ",
      "display" : "Czechia"
    }]
  }],
  "compose" : {
    "include" : [{
      "system" : "http://terminology.hl7.org/CodeSystem/v3-ActCode",
      "version" : "11.0.0",
      "concept" : [{
        "code" : "HIP",
        "display" : "zdravotní pojištění"
      }]
    },
    {
      "system" : "http://terminology.hl7.org/CodeSystem/coverage-selfpay",
      "version" : "1.0.1",
      "concept" : [{
        "code" : "pay",
        "display" : "samoplátce"
      }]
    }]
  }
}

```
