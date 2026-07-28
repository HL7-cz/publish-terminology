# Drzar (CZ) - HL7 Czech Terminology Implementation Guide v0.3.0

## ValueSet: Drzar (CZ) 

 
Číselník druhů zdravotnických zařízení. (Type of healthcare provider facility.) 

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
  "id" : "drzar",
  "language" : "cs",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-fmm",
    "valueInteger" : 2
  },
  {
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
    "valueCode" : "trial-use"
  }],
  "url" : "https://ncez.mzcr.cz/terminology/ValueSet/drzar",
  "identifier" : [{
    "system" : "urn:ietf:rfc:3986",
    "value" : "urn:oid:1.2.203.24341.11.1.7"
  }],
  "version" : "1.0.0",
  "name" : "Drzar",
  "title" : "Drzar (CZ)",
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
  "description" : "Číselník druhů zdravotnických zařízení. (Type of healthcare provider facility.)",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CZ",
      "display" : "Czechia"
    }]
  }],
  "compose" : {
    "include" : [{
      "system" : "https://ncez.mzcr.cz/terminology/CodeSystem/drzar"
    }]
  }
}

```
