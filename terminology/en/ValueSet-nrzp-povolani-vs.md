# Occupation of healthcare practitioner (CZ) - HL7 Czech Terminology Implementation Guide v0.3.0

## ValueSet: Occupation of healthcare practitioner (CZ) 

 
Povolání zdravotnických pracovníků dle registru NRZP. (Occupation of health practitioner registered in the national register of health practitioners (NRZP).) 

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
  "id" : "nrzp-povolani-vs",
  "language" : "cs",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-fmm",
    "valueInteger" : 2
  },
  {
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
    "valueCode" : "trial-use"
  }],
  "url" : "https://ncez.mzcr.cz/terminology/ValueSet/nrzp-povolani-vs",
  "version" : "1.0.0",
  "name" : "NRZP_PovolaniVS",
  "title" : "Occupation of healthcare practitioner (CZ)",
  "status" : "active",
  "experimental" : false,
  "date" : "2024-01-01",
  "publisher" : "HL7 Czech Republic",
  "contact" : [{
    "name" : "HL7 Czech Republic",
    "telecom" : [{
      "system" : "url",
      "value" : "https://www.hl7.cz/"
    }]
  }],
  "description" : "Povolání zdravotnických pracovníků dle registru NRZP. (Occupation of health practitioner registered in the national register of health practitioners (NRZP).)",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CZ",
      "display" : "Czechia"
    }]
  }],
  "compose" : {
    "include" : [{
      "system" : "https://ncez.mzcr.cz/terminology/CodeSystem/nrzp-povolani"
    }]
  }
}

```
