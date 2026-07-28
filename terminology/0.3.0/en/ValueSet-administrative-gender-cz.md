# Gender for administrative purposes - HL7 Czech Terminology Implementation Guide v0.3.0

## ValueSet: Gender for administrative purposes 

 
Pohlaví pro administrativní účely. (Gender for administrative purposes) 

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
  "id" : "administrative-gender-cz",
  "language" : "cs",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/valueset-supplement",
    "valueCanonical" : "https://hl7.cz/terminology/CodeSystem/administrative-gender-cz|4.0.1"
  }],
  "url" : "https://hl7.cz/terminology/ValueSet/administrative-gender-cz",
  "version" : "1.0.0",
  "name" : "AdministrativeGenderCzVs",
  "title" : "Gender for administrative purposes",
  "status" : "active",
  "experimental" : false,
  "date" : "2022-12-26",
  "publisher" : "HL7 Czech Republic",
  "contact" : [{
    "name" : "HL7 Czech Republic",
    "telecom" : [{
      "system" : "url",
      "value" : "https://www.hl7.cz/"
    }]
  }],
  "description" : "Pohlaví pro administrativní účely. (Gender for administrative purposes)",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CZ",
      "display" : "Czechia"
    }]
  }],
  "compose" : {
    "include" : [{
      "system" : "http://hl7.org/fhir/administrative-gender",
      "version" : "4.0.1"
    }]
  }
}

```
