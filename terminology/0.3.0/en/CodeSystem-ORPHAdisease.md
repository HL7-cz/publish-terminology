# ORPHA vzácná onemocnění - HL7 Czech Terminology Implementation Guide v0.3.0

## CodeSystem: ORPHA vzácná onemocnění 

 
Nomenklatura vzácných onemocnění ORPHAcode, která je nezbytná pro zlepšení viditelnosti vzácných onemocnění ve zdravotnických a výzkumných informačních systémech. 

This Code system is referenced in the definition of the following value sets:

* [ConditionVS](ValueSet-condition-cz.md)
* [OrphanetRareDiseasesVs](ValueSet-orphanet-rare-diseases.md)

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ORPHAdisease",
  "language" : "cs",
  "url" : "https://www.orpha.net",
  "identifier" : [{
    "system" : "urn:ietf:rfc:3986",
    "value" : "urn:oid:1.3.6.1.4.1.12559.11.10.1.3.1.44.5"
  }],
  "version" : "2026",
  "name" : "ORPHADisease",
  "title" : "ORPHA vzácná onemocnění",
  "status" : "draft",
  "experimental" : false,
  "date" : "2026-04-16T12:39:37.905826Z",
  "publisher" : "HL7 Czech Republic",
  "contact" : [{
    "name" : "HL7 Czech Republic",
    "telecom" : [{
      "system" : "url",
      "value" : "https://www.hl7.cz/"
    }]
  }],
  "description" : "Nomenklatura vzácných onemocnění ORPHAcode, která je nezbytná pro zlepšení viditelnosti vzácných onemocnění ve zdravotnických a výzkumných informačních systémech.",
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
