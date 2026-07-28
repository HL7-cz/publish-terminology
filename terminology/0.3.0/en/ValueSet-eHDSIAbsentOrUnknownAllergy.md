# eHDSI Absent Or Unknown Allergy - HL7 Czech Terminology Implementation Guide v0.3.0

## ValueSet: eHDSI Absent Or Unknown Allergy 

 
The Value set is used to encode absent or unknown medical allergies. 

 **References** 

* Included into [AllergenWithExceptions](ValueSet-AllergenWithExceptions.md)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "eHDSIAbsentOrUnknownAllergy",
  "language" : "cs",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/valueset-supplement",
    "valueCanonical" : "https://ncez.mzcr.cz/terminology/CodeSystem/absent-unknown-uv-ips-cz"
  }],
  "url" : "https://ncez.mzcr.cz/terminology/ValueSet/eHDSIAbsentOrUnknownAllergy",
  "identifier" : [{
    "system" : "urn:ietf:rfc:3986",
    "value" : "urn:oid:1.3.6.1.4.1.12559.11.10.1.3.1.42.47"
  }],
  "version" : "0.0.1",
  "name" : "EHDSIAbsentOrUnknownAllergy",
  "title" : "eHDSI Absent Or Unknown Allergy",
  "status" : "active",
  "experimental" : false,
  "date" : "2026-07-27T16:44:21+02:00",
  "publisher" : "HL7 Czech Republic",
  "contact" : [{
    "name" : "HL7 Czech Republic",
    "telecom" : [{
      "system" : "url",
      "value" : "https://www.hl7.cz/"
    }]
  }],
  "description" : "The Value set is used to encode absent or unknown medical allergies.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CZ",
      "display" : "Czechia"
    }]
  }],
  "compose" : {
    "include" : [{
      "system" : "http://hl7.org/fhir/uv/ips/CodeSystem/absent-unknown-uv-ips",
      "version" : "1.1.0",
      "concept" : [{
        "code" : "no-allergy-info"
      },
      {
        "code" : "no-known-allergies"
      },
      {
        "code" : "no-known-medication-allergies"
      },
      {
        "code" : "no-known-environmental-allergies"
      },
      {
        "code" : "no-known-food-allergies"
      }]
    }]
  }
}

```
