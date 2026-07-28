# Číselník ORPHAcode vzácná onemocnění - HL7 Czech Terminology Implementation Guide v0.3.0

## ValueSet: Číselník ORPHAcode vzácná onemocnění 

 
Číselník vzácných onemocnění ORPHACode 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

No Expansion for this valueset (Unsupported Code System Version)

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "orphanet-rare-diseases",
  "language" : "cs",
  "url" : "https://ncez.mzcr.cz/terminology/ValueSet/orphanet-rare-diseases",
  "version" : "1.0.0",
  "name" : "OrphanetRareDiseasesVs",
  "title" : "Číselník ORPHAcode vzácná onemocnění",
  "status" : "active",
  "experimental" : false,
  "date" : "2026-04-16T13:28:36.879248Z",
  "publisher" : "HL7 Czech Republic",
  "contact" : [{
    "name" : "HL7 Czech Republic",
    "telecom" : [{
      "system" : "url",
      "value" : "https://www.hl7.cz/"
    }]
  }],
  "description" : "Číselník vzácných onemocnění ORPHACode",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CZ",
      "display" : "Czechia"
    }]
  }],
  "compose" : {
    "include" : [{
      "system" : "https://www.orpha.net",
      "version" : "2024-07"
    }]
  }
}

```
