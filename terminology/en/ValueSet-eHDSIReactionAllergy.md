# eHDSI Reaction Allergy - HL7 Czech Terminology Implementation Guide v0.3.0

## ValueSet: eHDSI Reaction Allergy 

 
Value Set is used to encode clinical manifestation of the allergic reaction. 

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
  "id" : "eHDSIReactionAllergy",
  "language" : "cs",
  "url" : "https://ncez.mzcr.cz/terminology/ValueSet/eHDSIReactionAllergy",
  "identifier" : [{
    "system" : "urn:ietf:rfc:3986",
    "value" : "urn:oid:1.3.6.1.4.1.12559.11.10.1.3.1.42.11"
  }],
  "version" : "0.0.1",
  "name" : "eHDSIReactionAllergy",
  "title" : "eHDSI Reaction Allergy",
  "status" : "active",
  "experimental" : false,
  "date" : "2025-12-19T11:53:30.209384Z",
  "publisher" : "HL7 Czech Republic",
  "contact" : [{
    "name" : "HL7 Czech Republic",
    "telecom" : [{
      "system" : "url",
      "value" : "https://www.hl7.cz/"
    }]
  }],
  "description" : "Value Set is used to encode clinical manifestation of the allergic reaction.",
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
        "code" : "2129002"
      },
      {
        "code" : "22649008"
      },
      {
        "code" : "24079001"
      },
      {
        "code" : "31996006"
      },
      {
        "code" : "35001004"
      },
      {
        "code" : "39579001"
      },
      {
        "code" : "44416002"
      },
      {
        "code" : "49727002"
      },
      {
        "code" : "62315008"
      },
      {
        "code" : "64144002"
      },
      {
        "code" : "70076002"
      },
      {
        "code" : "74776002"
      },
      {
        "code" : "79893008"
      },
      {
        "code" : "81950002"
      },
      {
        "code" : "90128006"
      },
      {
        "code" : "126485001"
      },
      {
        "code" : "191306005"
      },
      {
        "code" : "195951007"
      },
      {
        "code" : "247441003"
      },
      {
        "code" : "247470007"
      },
      {
        "code" : "247471006"
      },
      {
        "code" : "247472004"
      },
      {
        "code" : "267036007"
      },
      {
        "code" : "271756005"
      },
      {
        "code" : "271757001"
      },
      {
        "code" : "271759003"
      },
      {
        "code" : "271807003"
      },
      {
        "code" : "276444007"
      },
      {
        "code" : "281239006"
      },
      {
        "code" : "373932008"
      },
      {
        "code" : "386789004"
      },
      {
        "code" : "402407004"
      },
      {
        "code" : "410430005"
      },
      {
        "code" : "418290006"
      },
      {
        "code" : "418363000"
      },
      {
        "code" : "422400008"
      },
      {
        "code" : "432807008"
      },
      {
        "code" : "444827008"
      },
      {
        "code" : "768962006"
      },
      {
        "code" : "4386001"
      },
      {
        "code" : "9826008"
      },
      {
        "code" : "43116000"
      },
      {
        "code" : "51599000"
      },
      {
        "code" : "73442001"
      },
      {
        "code" : "76067001"
      },
      {
        "code" : "91175000"
      },
      {
        "code" : "162290004"
      },
      {
        "code" : "271811009"
      },
      {
        "code" : "271825005"
      },
      {
        "code" : "421262002"
      },
      {
        "code" : "702809001"
      },
      {
        "code" : "781682005"
      },
      {
        "code" : "23924001"
      },
      {
        "code" : "41291007"
      },
      {
        "code" : "60555002"
      },
      {
        "code" : "230145002"
      },
      {
        "code" : "399992009"
      },
      {
        "code" : "422587007"
      },
      {
        "code" : "7231009"
      },
      {
        "code" : "40275004"
      },
      {
        "code" : "195967001"
      },
      {
        "code" : "279333002"
      },
      {
        "code" : "698247007"
      }]
    }]
  }
}

```
