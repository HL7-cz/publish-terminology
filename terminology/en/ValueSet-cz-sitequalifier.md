# Body Structure Qualifier - HL7 Czech Terminology Implementation Guide v0.3.0

## ValueSet: Body Structure Qualifier 

 
Body Structure site qualifier. It indicates the body site qualifier from which a specimen is collected. (based on SNOMED CT) 

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
  "id" : "cz-sitequalifier",
  "language" : "cs",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-fmm",
    "valueInteger" : 2
  },
  {
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
    "valueCode" : "trial-use"
  }],
  "url" : "https://ncez.mzcr.cz/terminology/ValueSet/cz-sitequalifier",
  "version" : "1.0.0",
  "name" : "CZ_SiteQualifier",
  "title" : "Body Structure Qualifier",
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
  "description" : "Body Structure site qualifier. It indicates the body site qualifier from which a specimen is collected. (based on SNOMED CT)",
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
        "code" : "7771000"
      },
      {
        "code" : "24028007"
      },
      {
        "code" : "51440002"
      },
      {
        "code" : "46053002"
      },
      {
        "code" : "255554000"
      },
      {
        "code" : "261183002"
      },
      {
        "code" : "261122009"
      },
      {
        "code" : "255561001"
      },
      {
        "code" : "49370004"
      },
      {
        "code" : "264217000"
      },
      {
        "code" : "261089000"
      },
      {
        "code" : "255551008"
      },
      {
        "code" : "351726001"
      },
      {
        "code" : "352730000"
      },
      {
        "code" : "40415009"
      },
      {
        "code" : "255549009"
      },
      {
        "code" : "26283006"
      },
      {
        "code" : "795002"
      },
      {
        "code" : "57195005"
      },
      {
        "code" : "3583002"
      },
      {
        "code" : "66787007"
      },
      {
        "code" : "255481003"
      },
      {
        "code" : "255497008"
      },
      {
        "code" : "255480002"
      },
      {
        "code" : "255495000"
      }]
    }]
  }
}

```
