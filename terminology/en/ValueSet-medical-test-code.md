# Medical Test Result Code - HL7 Czech Terminology Implementation Guide v0.3.0

## ValueSet: Medical Test Result Code 

 
Medical test result codes. List of Medical test result codes containing LOINC, NCLP and Snomed CT. 

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
  "id" : "medical-test-code",
  "language" : "cs",
  "url" : "https://ncez.mzcr.cz/terminology/ValueSet/medical-test-code",
  "version" : "1.0.0",
  "name" : "MedicalTestCodeVs",
  "title" : "Medical Test Result Code",
  "status" : "active",
  "experimental" : false,
  "date" : "2026-01-01",
  "publisher" : "HL7 Czech Republic",
  "contact" : [{
    "name" : "HL7 Czech Republic",
    "telecom" : [{
      "system" : "url",
      "value" : "https://www.hl7.cz/"
    }]
  }],
  "description" : "Medical test result codes. List of Medical test result codes containing LOINC, NCLP and Snomed CT.",
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
      "system" : "https://ncez.mzcr.cz/nclp/CodeSystem/nclppol"
    },
    {
      "system" : "http://snomed.info/sct",
      "filter" : [{
        "property" : "concept",
        "op" : "is-a",
        "value" : "363787002"
      }]
    }]
  }
}

```
