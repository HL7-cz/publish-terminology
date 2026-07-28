# Registering Provider Service Type (CZ) - HL7 Czech Terminology Implementation Guide v0.3.0

## ValueSet: Registering Provider Service Type (CZ) 

 
Typ registrujícího lékaře. (Registering healthcare provider service type value set.) 

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
  "id" : "registering-provider-service-type-cz",
  "language" : "cs",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-fmm",
    "valueInteger" : 2
  },
  {
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
    "valueCode" : "trial-use"
  }],
  "url" : "https://ncez.mzcr.cz/terminology/ValueSet/registering-provider-service-type-cz",
  "identifier" : [{
    "system" : "urn:ietf:rfc:3986",
    "value" : "urn:oid:1.2.203.24341.11.1.10"
  }],
  "version" : "1.0.0",
  "name" : "RegisteringProviderServiceTypeCz",
  "title" : "Registering Provider Service Type (CZ)",
  "status" : "active",
  "experimental" : false,
  "date" : "2025-03-10T12:47:28.893239Z",
  "publisher" : "HL7 Czech Republic",
  "contact" : [{
    "name" : "HL7 Czech Republic",
    "telecom" : [{
      "system" : "url",
      "value" : "https://www.hl7.cz/"
    }]
  }],
  "description" : "Typ registrujícího lékaře. (Registering healthcare provider service type value set.)",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CZ",
      "display" : "Czechia"
    }]
  }],
  "copyright" : "This value set includes content from SNOMED CT, which is copyright © 2002+ International Health Terminology Standards Development Organisation (IHTSDO), and distributed by agreement between IHTSDO and HL7. Implementer use of SNOMED CT is not covered by this agreement",
  "compose" : {
    "include" : [{
      "system" : "http://snomed.info/sct",
      "concept" : [{
        "code" : "310061009"
      },
      {
        "code" : "700232004"
      },
      {
        "code" : "722176000"
      }]
    }]
  }
}

```
