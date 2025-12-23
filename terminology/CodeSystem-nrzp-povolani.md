# NRZP - Czech health professional occupation - HL7 Czech Terminology Implementation Guide v0.2.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **NRZP - Czech health professional occupation**

## CodeSystem: NRZP - Czech health professional occupation 

| | |
| :--- | :--- |
| *Official URL*:https://ncez.mzcr.cz/terminology/CodeSystem/nrzp-povolani | *Version*:0.2.0 |
| Active as of 1980-01-01 | *Computable Name*:NRZP_Povolani |
| *Other Identifiers:*OID:1.2.203.24341.11.2.10.2.1 | |

 
Czech national code system for health professional occupation used in the national registry of healthcare practicioners. 

 This Code system is referenced in the content logical definition of the following value sets: 

* [NRZP_PovolaniVS](ValueSet-nrzp-povolani-vs.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "nrzp-povolani",
  "language" : "cs",
  "url" : "https://ncez.mzcr.cz/terminology/CodeSystem/nrzp-povolani",
  "identifier" : [
    {
      "system" : "urn:ietf:rfc:3986",
      "value" : "urn:oid:1.2.203.24341.11.2.10.2.1"
    }
  ],
  "version" : "0.2.0",
  "name" : "NRZP_Povolani",
  "title" : "NRZP - Czech health professional occupation",
  "status" : "active",
  "experimental" : false,
  "date" : "1980-01-01",
  "publisher" : "HL7 Czech Republic",
  "contact" : [
    {
      "name" : "HL7 Czech Republic",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.hl7.cz/"
        }
      ]
    }
  ],
  "description" : "Czech national code system for health professional occupation used in the national registry of healthcare practicioners.",
  "jurisdiction" : [
    {
      "coding" : [
        {
          "system" : "urn:iso:std:iso:3166",
          "code" : "CZ",
          "display" : "Czechia"
        }
      ]
    }
  ],
  "caseSensitive" : true,
  "content" : "complete",
  "count" : 53,
  "concept" : [
    {
      "code" : "L1",
      "display" : "Lékař po absolvování odborné způsobilosti (L1)"
    },
    {
      "code" : "L2",
      "display" : "Lékař po absolvování základního kmene (L2)"
    },
    {
      "code" : "L3",
      "display" : "Lékař po absolvování specializačního vzdělání (L3)"
    },
    {
      "code" : "Z00",
      "display" : "Zubní lékař"
    },
    {
      "code" : "F00",
      "display" : "Farmaceut"
    },
    {
      "code" : "NL01",
      "display" : "Všeobecná sestra"
    },
    {
      "code" : "NL013",
      "display" : "Dětská sestra"
    },
    {
      "code" : "NL02",
      "display" : "Porodní asistentka"
    },
    {
      "code" : "NL03",
      "display" : "Ergoterapeut"
    },
    {
      "code" : "NL04",
      "display" : "Radiologický asistent"
    },
    {
      "code" : "NL05",
      "display" : "Zdravotní laborant"
    },
    {
      "code" : "NL06",
      "display" : "Zdravotně-sociální pracovník"
    },
    {
      "code" : "NL07",
      "display" : "Optometrista"
    },
    {
      "code" : "NL08",
      "display" : "Ortoptista"
    },
    {
      "code" : "NL09",
      "display" : "Asistent ochrany a podpory veřejného zdraví"
    },
    {
      "code" : "NL10",
      "display" : "Ortotik-protetik"
    },
    {
      "code" : "NL11",
      "display" : "Nutriční terapeut"
    },
    {
      "code" : "NL12",
      "display" : "Zubní technik"
    },
    {
      "code" : "NL13",
      "display" : "Dentální hygienistka"
    },
    {
      "code" : "NL14",
      "display" : "Zdravotnický záchranář"
    },
    {
      "code" : "NL15",
      "display" : "Farmaceutický asistent"
    },
    {
      "code" : "NL16",
      "display" : "Biomedicínský technik"
    },
    {
      "code" : "NL24",
      "display" : "Radiologický fyzik"
    },
    {
      "code" : "NL19",
      "display" : "Adiktolog"
    },
    {
      "code" : "NL20",
      "display" : "Psycholog ve zdravotnictví"
    },
    {
      "code" : "NL21",
      "display" : "Logoped ve zdravotnictví"
    },
    {
      "code" : "NL22",
      "display" : "Zrakový terapeut"
    },
    {
      "code" : "NL23",
      "display" : "Fyzioterapeut"
    },
    {
      "code" : "NL18",
      "display" : "Radiologický technik"
    },
    {
      "code" : "NL25",
      "display" : "Odborný pracovník v laboratorních metodách a v přípravě léčivých přípravků"
    },
    {
      "code" : "NL26",
      "display" : "Biomedicínský inženýr"
    },
    {
      "code" : "NL27",
      "display" : "Odborný pracovník v ochraně a podpoře veřejného zdraví"
    },
    {
      "code" : "NL28",
      "display" : "Praktická sestra"
    },
    {
      "code" : "NL29",
      "display" : "Behaviorální analytik"
    },
    {
      "code" : "NL31",
      "display" : "Specialista tradiční čínské medicíny"
    },
    {
      "code" : "NL30",
      "display" : "Terapeut tradiční čínské medicíny"
    },
    {
      "code" : "NL60",
      "display" : "Asistent behaviorálního analytika"
    },
    {
      "code" : "NL61",
      "display" : "Behaviorální technik"
    },
    {
      "code" : "NL63",
      "display" : "Laboratorní asistent"
    },
    {
      "code" : "NL64",
      "display" : "Ortoticko-protetický technik"
    },
    {
      "code" : "NL65",
      "display" : "Nutriční asistent"
    },
    {
      "code" : "NL66",
      "display" : "Asistent zubního technika"
    },
    {
      "code" : "NL68",
      "display" : "Řidič vozidla zdravotnické záchranné služby"
    },
    {
      "code" : "NL69",
      "display" : "Ošetřovatel"
    },
    {
      "code" : "NL70",
      "display" : "Masér ve zdravotnictví, nevidomý a slabozraký masér ve zdravotnictví"
    },
    {
      "code" : "NL73",
      "display" : "Zubní instrumentářka"
    },
    {
      "code" : "NL74",
      "display" : "Řidič zdravotnické dopravní služby"
    },
    {
      "code" : "NL75",
      "display" : "Autoptický laborant"
    },
    {
      "code" : "NL76",
      "display" : "Sanitář"
    },
    {
      "code" : "L00",
      "display" : "Lékař"
    },
    {
      "code" : "LA",
      "display" : "Lékař po absolvování studijního oboru v anglickém jazyce"
    },
    {
      "code" : "FA",
      "display" : "Farmaceut po absolvování studijního oboru v anglickém jazyce"
    },
    {
      "code" : "ZA",
      "display" : "Zubní lékař po absolvování studijního oboru v anglickém jazyce"
    }
  ]
}

```
