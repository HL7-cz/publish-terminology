# AllergyIntoleranceCriticality (CZ supplement value set) - HL7 Czech Terminology Implementation Guide v0.3.0

## ValueSet: AllergyIntoleranceCriticality (CZ supplement value set) 

 
Estimate of the potential clinical harm, or seriousness, of a reaction to an identified substance. 

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
  "id" : "allergy-intolerance-criticality-cz",
  "language" : "cs",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/valueset-supplement",
    "valueCanonical" : "https://hl7.cz/terminology/CodeSystem/allergy-intolerance-criticality-cz"
  }],
  "url" : "https://hl7.cz/terminology/ValueSet/allergy-intolerance-criticality-cz",
  "version" : "1.0.0",
  "name" : "AllergyIntoleranceCriticality",
  "title" : "AllergyIntoleranceCriticality (CZ supplement value set)",
  "status" : "active",
  "experimental" : false,
  "date" : "2025-12-15T12:08:45.155576Z",
  "publisher" : "HL7 Czech Republic",
  "contact" : [{
    "name" : "HL7 Czech Republic",
    "telecom" : [{
      "system" : "url",
      "value" : "https://www.hl7.cz/"
    }]
  }],
  "description" : "Estimate of the potential clinical harm, or seriousness, of a reaction to an identified substance.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CZ",
      "display" : "Czechia"
    }]
  }],
  "compose" : {
    "include" : [{
      "system" : "http://hl7.org/fhir/allergy-intolerance-criticality",
      "version" : "4.0.1"
    }]
  }
}

```
