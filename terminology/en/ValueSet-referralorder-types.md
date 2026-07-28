# Typy žádanek - HL7 Czech Terminology Implementation Guide v0.3.0

## ValueSet: Typy žádanek 

 
Číselník typů žádanek 

 **References** 

* Included into [SearchDocumentTypes](ValueSet-search-document-types.md)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "referralorder-types",
  "language" : "cs",
  "url" : "https://ncez.mzcr.cz/terminology/ValueSet/referralorder-types",
  "version" : "1.0.0",
  "name" : "ReferralorderTypes",
  "title" : "Typy žádanek",
  "status" : "active",
  "experimental" : false,
  "date" : "2025-11-19T15:26:54.549507Z",
  "publisher" : "HL7 Czech Republic",
  "contact" : [{
    "name" : "HL7 Czech Republic",
    "telecom" : [{
      "system" : "url",
      "value" : "https://www.hl7.cz/"
    }]
  }],
  "description" : "Číselník typů žádanek",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CZ",
      "display" : "Czechia"
    }]
  }],
  "copyright" : "This value set includes content from SNOMED CT and LOINC.\n\nSNOMED CT is copyright © 2002+ International Health Terminology Standards Development Organisation (IHTSDO), and distributed by agreement between IHTSDO and HL7. Implementer use of SNOMED CT is not covered by this agreement\n\nLOINC is copyright © 1995-2020, Regenstrief Institute, Inc. and the Logical Observation Identifiers Names and Codes (LOINC) Committee and is available at no cost under the license at http://loinc.org/license. LOINC® is a registered United States trademark of Regenstrief Institute, Inc",
  "compose" : {
    "include" : [{
      "system" : "http://loinc.org",
      "concept" : [{
        "code" : "57133-1",
        "display" : "žádanka o vyšetření"
      },
      {
        "code" : "57830-2",
        "display" : "žádanka o hospitalizaci"
      },
      {
        "code" : "57154-7",
        "display" : "žádanka o fyzioterapii"
      }]
    },
    {
      "system" : "http://snomed.info/sct",
      "concept" : [{
        "code" : "721965002",
        "display" : "žádanka o laboratorní vyšetření"
      },
      {
        "code" : "721964003",
        "display" : "žádanka o zobrazovací vyšetření"
      }]
    }]
  }
}

```
