# OdbornostVZP - HL7 Czech Terminology Implementation Guide v0.3.0

## CodeSystem: OdbornostVZP 

 
Kódový systém smluvních odborností poskytovatele (VZP) 

This Code system is referenced in the definition of the following value sets:

* [OdbornostVZP](ValueSet-nzis-odbornostvzp.md)

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "nzis-OdbornostVZP",
  "language" : "cs",
  "url" : "https://uzis.cz/terminology/CodeSystem/OdbornostVZP",
  "version" : "1.0.0",
  "name" : "CS_OdbornostVZP",
  "title" : "OdbornostVZP",
  "status" : "active",
  "experimental" : false,
  "date" : "2026-07-27T16:55:21+02:00",
  "publisher" : "HL7 Czech Republic",
  "contact" : [{
    "name" : "HL7 Czech Republic",
    "telecom" : [{
      "system" : "url",
      "value" : "https://www.hl7.cz/"
    }]
  }],
  "description" : "Kódový systém smluvních odborností poskytovatele (VZP)",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CZ",
      "display" : "Czechia"
    }]
  }],
  "caseSensitive" : true,
  "content" : "complete",
  "count" : 347,
  "property" : [{
    "code" : "hospitalizace",
    "type" : "boolean"
  },
  {
    "code" : "kategorie",
    "type" : "string"
  },
  {
    "code" : "kod",
    "type" : "string"
  },
  {
    "code" : "nazev",
    "type" : "string"
  },
  {
    "code" : "plati_do",
    "type" : "dateTime"
  },
  {
    "code" : "plati_od",
    "type" : "dateTime"
  },
  {
    "code" : "popis",
    "type" : "string"
  },
  {
    "code" : "poradi",
    "type" : "string"
  },
  {
    "code" : "trida",
    "type" : "string"
  },
  {
    "code" : "typ",
    "type" : "string"
  }],
  "concept" : [{
    "code" : "001",
    "display" : "PL dospělí",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : false
    },
    {
      "code" : "kategorie",
      "valueString" : "Interní obory"
    },
    {
      "code" : "kod",
      "valueString" : "001"
    },
    {
      "code" : "nazev",
      "valueString" : "PL dospělí"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracoviště praktického lékaře pro dospělé"
    },
    {
      "code" : "trida",
      "valueString" : "PL dospělí"
    },
    {
      "code" : "typ",
      "valueString" : "Ambulantní péče"
    }]
  },
  {
    "code" : "002",
    "display" : "PL děti a dorost",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : false
    },
    {
      "code" : "kategorie",
      "valueString" : "Interní obory"
    },
    {
      "code" : "kod",
      "valueString" : "002"
    },
    {
      "code" : "nazev",
      "valueString" : "PL děti a dorost"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracoviště praktického lékaře pro děti a dorost"
    },
    {
      "code" : "trida",
      "valueString" : "PL děti a dorost"
    },
    {
      "code" : "typ",
      "valueString" : "Ambulantní péče"
    }]
  },
  {
    "code" : "003",
    "display" : "LSPP",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : false
    },
    {
      "code" : "kategorie",
      "valueString" : "Interní obory"
    },
    {
      "code" : "kod",
      "valueString" : "003"
    },
    {
      "code" : "nazev",
      "valueString" : "LSPP"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracoviště LSPP"
    },
    {
      "code" : "trida",
      "valueString" : "LSPP"
    },
    {
      "code" : "typ",
      "valueString" : "Ambulantní péče"
    }]
  },
  {
    "code" : "004",
    "display" : "zvláštní ambulantní péče",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Interní obory"
    },
    {
      "code" : "kod",
      "valueString" : "004"
    },
    {
      "code" : "nazev",
      "valueString" : "zvláštní ambulantní péče"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracoviště zvláštní ambulantní péče v ZZ ústavní péče"
    },
    {
      "code" : "trida",
      "valueString" : "sociální lůžka"
    },
    {
      "code" : "typ",
      "valueString" : "Dlouhodobá péče"
    }]
  },
  {
    "code" : "014",
    "display" : "stomatologie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : false
    },
    {
      "code" : "kategorie",
      "valueString" : "Chirurgické obory"
    },
    {
      "code" : "kod",
      "valueString" : "014"
    },
    {
      "code" : "nazev",
      "valueString" : "stomatologie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracoviště praktického zubního lékaře"
    },
    {
      "code" : "trida",
      "valueString" : "stomatologie"
    },
    {
      "code" : "typ",
      "valueString" : "Ambulantní péče"
    }]
  },
  {
    "code" : "015",
    "display" : "čelistní ortopedie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : false
    },
    {
      "code" : "kategorie",
      "valueString" : "Chirurgické obory"
    },
    {
      "code" : "kod",
      "valueString" : "015"
    },
    {
      "code" : "nazev",
      "valueString" : "čelistní ortopedie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracoviště čelistní ortopedie"
    },
    {
      "code" : "trida",
      "valueString" : "čelistní ortopedie"
    },
    {
      "code" : "typ",
      "valueString" : "Ambulantní péče"
    }]
  },
  {
    "code" : "017",
    "display" : "čelistní ortopedie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : false
    },
    {
      "code" : "kategorie",
      "valueString" : "Chirurgické obory"
    },
    {
      "code" : "kod",
      "valueString" : "017"
    },
    {
      "code" : "nazev",
      "valueString" : "čelistní ortopedie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracoviště čelistní ortopedie"
    },
    {
      "code" : "trida",
      "valueString" : "čelistní ortopedie"
    },
    {
      "code" : "typ",
      "valueString" : "Ambulantní péče"
    }]
  },
  {
    "code" : "019",
    "display" : "stomatologická LSPP",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : false
    },
    {
      "code" : "kategorie",
      "valueString" : "Chirurgické obory"
    },
    {
      "code" : "kod",
      "valueString" : "019"
    },
    {
      "code" : "nazev",
      "valueString" : "stomatologická LSPP"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracoviště stomatologické LSPP"
    },
    {
      "code" : "trida",
      "valueString" : "stomatologická LSPP"
    },
    {
      "code" : "typ",
      "valueString" : "Ambulantní péče"
    }]
  },
  {
    "code" : "091",
    "display" : "péče o dárce krvetvornýc",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : false
    },
    {
      "code" : "kategorie",
      "valueString" : "Interní obory"
    },
    {
      "code" : "kod",
      "valueString" : "091"
    },
    {
      "code" : "nazev",
      "valueString" : "péče o dárce krvetvornýc"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracoviště péče o dárce krvetvorných buněk"
    },
    {
      "code" : "trida",
      "valueString" : "péče o dárce krvetvorných buněk"
    },
    {
      "code" : "typ",
      "valueString" : "Ambulantní péče"
    }]
  },
  {
    "code" : "101",
    "display" : "interní lékařství",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : false
    },
    {
      "code" : "kategorie",
      "valueString" : "Interní obory"
    },
    {
      "code" : "kod",
      "valueString" : "101"
    },
    {
      "code" : "nazev",
      "valueString" : "interní lékařství"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracoviště interního lékařství"
    },
    {
      "code" : "trida",
      "valueString" : "interní lékařství"
    },
    {
      "code" : "typ",
      "valueString" : "Ambulantní péče"
    }]
  },
  {
    "code" : "102",
    "display" : "angiologie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : false
    },
    {
      "code" : "kategorie",
      "valueString" : "Interní obory"
    },
    {
      "code" : "kod",
      "valueString" : "102"
    },
    {
      "code" : "nazev",
      "valueString" : "angiologie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracoviště angiologie"
    },
    {
      "code" : "trida",
      "valueString" : "angiologie"
    },
    {
      "code" : "typ",
      "valueString" : "Ambulantní péče"
    }]
  },
  {
    "code" : "103",
    "display" : "diabetologie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : false
    },
    {
      "code" : "kategorie",
      "valueString" : "Interní obory"
    },
    {
      "code" : "kod",
      "valueString" : "103"
    },
    {
      "code" : "nazev",
      "valueString" : "diabetologie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracoviště diabetologie"
    },
    {
      "code" : "trida",
      "valueString" : "diabetologie"
    },
    {
      "code" : "typ",
      "valueString" : "Ambulantní péče"
    }]
  },
  {
    "code" : "104",
    "display" : "endokrinologie (mimo lab",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : false
    },
    {
      "code" : "kategorie",
      "valueString" : "Interní obory"
    },
    {
      "code" : "kod",
      "valueString" : "104"
    },
    {
      "code" : "nazev",
      "valueString" : "endokrinologie (mimo lab"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracoviště endokrinologie (mimo laboratorní činnosti)"
    },
    {
      "code" : "trida",
      "valueString" : "endokrinologie (mimo laboratoř)"
    },
    {
      "code" : "typ",
      "valueString" : "Ambulantní péče"
    }]
  },
  {
    "code" : "105",
    "display" : "gastroenterologie a hepa",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : false
    },
    {
      "code" : "kategorie",
      "valueString" : "Interní obory"
    },
    {
      "code" : "kod",
      "valueString" : "105"
    },
    {
      "code" : "nazev",
      "valueString" : "gastroenterologie a hepa"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracoviště gastroenterologie a hepatologie"
    },
    {
      "code" : "trida",
      "valueString" : "gastroenterologie a hepatologie"
    },
    {
      "code" : "typ",
      "valueString" : "Ambulantní péče"
    }]
  },
  {
    "code" : "106",
    "display" : "geriatrie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : false
    },
    {
      "code" : "kategorie",
      "valueString" : "Interní obory"
    },
    {
      "code" : "kod",
      "valueString" : "106"
    },
    {
      "code" : "nazev",
      "valueString" : "geriatrie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracoviště geriatrie"
    },
    {
      "code" : "trida",
      "valueString" : "geriatrie"
    },
    {
      "code" : "typ",
      "valueString" : "Ambulantní péče"
    }]
  },
  {
    "code" : "107",
    "display" : "kardiologie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : false
    },
    {
      "code" : "kategorie",
      "valueString" : "Interní obory"
    },
    {
      "code" : "kod",
      "valueString" : "107"
    },
    {
      "code" : "nazev",
      "valueString" : "kardiologie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracoviště kardiologie"
    },
    {
      "code" : "trida",
      "valueString" : "kardiologie"
    },
    {
      "code" : "typ",
      "valueString" : "Ambulantní péče"
    }]
  },
  {
    "code" : "108",
    "display" : "nefrologie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : false
    },
    {
      "code" : "kategorie",
      "valueString" : "Interní obory"
    },
    {
      "code" : "kod",
      "valueString" : "108"
    },
    {
      "code" : "nazev",
      "valueString" : "nefrologie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracoviště nefrologie"
    },
    {
      "code" : "trida",
      "valueString" : "nefrologie"
    },
    {
      "code" : "typ",
      "valueString" : "Ambulantní péče"
    }]
  },
  {
    "code" : "109",
    "display" : "revmatologie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : false
    },
    {
      "code" : "kategorie",
      "valueString" : "Interní obory"
    },
    {
      "code" : "kod",
      "valueString" : "109"
    },
    {
      "code" : "nazev",
      "valueString" : "revmatologie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracoviště revmatologie"
    },
    {
      "code" : "trida",
      "valueString" : "revmatologie"
    },
    {
      "code" : "typ",
      "valueString" : "Ambulantní péče"
    }]
  },
  {
    "code" : "128",
    "display" : "hemodialýza",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : false
    },
    {
      "code" : "kategorie",
      "valueString" : "Interní obory"
    },
    {
      "code" : "kod",
      "valueString" : "128"
    },
    {
      "code" : "nazev",
      "valueString" : "hemodialýza"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracoviště hemodialýzy"
    },
    {
      "code" : "trida",
      "valueString" : "hemodialýza"
    },
    {
      "code" : "typ",
      "valueString" : "Ambulantní péče"
    }]
  },
  {
    "code" : "1F1",
    "display" : "std.interní",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Interní obory"
    },
    {
      "code" : "kod",
      "valueString" : "1F1"
    },
    {
      "code" : "nazev",
      "valueString" : "std.interní"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracoviště standardní ústavní lůžkové péče interní - F typu"
    },
    {
      "code" : "trida",
      "valueString" : "interní lékařství"
    },
    {
      "code" : "typ",
      "valueString" : "Standardní péče"
    }]
  },
  {
    "code" : "1F2",
    "display" : "std.kardiologie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Interní obory"
    },
    {
      "code" : "kod",
      "valueString" : "1F2"
    },
    {
      "code" : "nazev",
      "valueString" : "std.kardiologie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracoviště standard. úst. lůžk. péče kardiologické  - F typu"
    },
    {
      "code" : "trida",
      "valueString" : "angiologie"
    },
    {
      "code" : "typ",
      "valueString" : "Standardní péče"
    }]
  },
  {
    "code" : "1F3",
    "display" : "std.diabetologie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Interní obory"
    },
    {
      "code" : "kod",
      "valueString" : "1F3"
    },
    {
      "code" : "nazev",
      "valueString" : "std.diabetologie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracoviště standard. úst. lůžk. péče diabetologické - F typu"
    },
    {
      "code" : "trida",
      "valueString" : "diabetologie"
    },
    {
      "code" : "typ",
      "valueString" : "Standardní péče"
    }]
  },
  {
    "code" : "1F4",
    "display" : "std.endokrinologie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Interní obory"
    },
    {
      "code" : "kod",
      "valueString" : "1F4"
    },
    {
      "code" : "nazev",
      "valueString" : "std.endokrinologie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracoviště stand. úst. lůžk. péče endokrinologické - F typu"
    },
    {
      "code" : "trida",
      "valueString" : "endokrinologie (mimo laboratoř)"
    },
    {
      "code" : "typ",
      "valueString" : "Standardní péče"
    }]
  },
  {
    "code" : "1F5",
    "display" : "std.gastroent. a hepatol",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Interní obory"
    },
    {
      "code" : "kod",
      "valueString" : "1F5"
    },
    {
      "code" : "nazev",
      "valueString" : "std.gastroent. a hepatol"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Prac. stand. úst. lůžk. péče gastroent. a hepatol. - F typu"
    },
    {
      "code" : "trida",
      "valueString" : "gastroenterologie a hepatologie"
    },
    {
      "code" : "typ",
      "valueString" : "Standardní péče"
    }]
  },
  {
    "code" : "1F6",
    "display" : "std.geriatrie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Interní obory"
    },
    {
      "code" : "kod",
      "valueString" : "1F6"
    },
    {
      "code" : "nazev",
      "valueString" : "std.geriatrie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracoviště standardní ústav. lůžk. péče geriatrické - F typu"
    },
    {
      "code" : "trida",
      "valueString" : "geriatrie"
    },
    {
      "code" : "typ",
      "valueString" : "Standardní péče"
    }]
  },
  {
    "code" : "1F7",
    "display" : "std.kardiologie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Interní obory"
    },
    {
      "code" : "kod",
      "valueString" : "1F7"
    },
    {
      "code" : "nazev",
      "valueString" : "std.kardiologie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracoviště standard. úst. lůžk. péče kardiologické  - F typu"
    },
    {
      "code" : "trida",
      "valueString" : "kardiologie"
    },
    {
      "code" : "typ",
      "valueString" : "Standardní péče"
    }]
  },
  {
    "code" : "1F8",
    "display" : "std.nefrologie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Interní obory"
    },
    {
      "code" : "kod",
      "valueString" : "1F8"
    },
    {
      "code" : "nazev",
      "valueString" : "std.nefrologie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracoviště standard. ústav. lůžk. péče nefrologické - F typu"
    },
    {
      "code" : "trida",
      "valueString" : "nefrologie"
    },
    {
      "code" : "typ",
      "valueString" : "Standardní péče"
    }]
  },
  {
    "code" : "1F9",
    "display" : "std.revmatologie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Interní obory"
    },
    {
      "code" : "kod",
      "valueString" : "1F9"
    },
    {
      "code" : "nazev",
      "valueString" : "std.revmatologie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracoviště standard. úst. lůžk. péče revmatologické - F typu"
    },
    {
      "code" : "trida",
      "valueString" : "revmatologie"
    },
    {
      "code" : "typ",
      "valueString" : "Standardní péče"
    }]
  },
  {
    "code" : "1H1",
    "display" : "std.interní",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Interní obory"
    },
    {
      "code" : "kod",
      "valueString" : "1H1"
    },
    {
      "code" : "nazev",
      "valueString" : "std.interní"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracoviště standardní ústavní lůžk. péče interní - H typu"
    },
    {
      "code" : "trida",
      "valueString" : "interní lékařství"
    },
    {
      "code" : "typ",
      "valueString" : "Standardní péče"
    }]
  },
  {
    "code" : "1H3",
    "display" : "std.diabetologie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Interní obory"
    },
    {
      "code" : "kod",
      "valueString" : "1H3"
    },
    {
      "code" : "nazev",
      "valueString" : "std.diabetologie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracoviště standard. úst. lůžk. péče diabetologické - H typu"
    },
    {
      "code" : "trida",
      "valueString" : "diabetologie"
    },
    {
      "code" : "typ",
      "valueString" : "Standardní péče"
    }]
  },
  {
    "code" : "1H4",
    "display" : "std.endokrinologie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Interní obory"
    },
    {
      "code" : "kod",
      "valueString" : "1H4"
    },
    {
      "code" : "nazev",
      "valueString" : "std.endokrinologie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracoviště stand. úst. lůžk. péče endokrinologické - H typu"
    },
    {
      "code" : "trida",
      "valueString" : "endokrinologie (mimo laboratoř)"
    },
    {
      "code" : "typ",
      "valueString" : "Standardní péče"
    }]
  },
  {
    "code" : "1H5",
    "display" : "std.gastroent. a hepatol",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Interní obory"
    },
    {
      "code" : "kod",
      "valueString" : "1H5"
    },
    {
      "code" : "nazev",
      "valueString" : "std.gastroent. a hepatol"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Prac. stand. úst. lůžk. péče gastroent. a hepatol. - H typu"
    },
    {
      "code" : "trida",
      "valueString" : "gastroenterologie a hepatologie"
    },
    {
      "code" : "typ",
      "valueString" : "Standardní péče"
    }]
  },
  {
    "code" : "1H6",
    "display" : "std.geriatrie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Interní obory"
    },
    {
      "code" : "kod",
      "valueString" : "1H6"
    },
    {
      "code" : "nazev",
      "valueString" : "std.geriatrie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracoviště standardní ústav. lůžk. péče geriatrické - H typu"
    },
    {
      "code" : "trida",
      "valueString" : "geriatrie"
    },
    {
      "code" : "typ",
      "valueString" : "Standardní péče"
    }]
  },
  {
    "code" : "1H7",
    "display" : "std.kardiologie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Interní obory"
    },
    {
      "code" : "kod",
      "valueString" : "1H7"
    },
    {
      "code" : "nazev",
      "valueString" : "std.kardiologie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracoviště standard. úst. lůžk. péče kardiologické - H typu"
    },
    {
      "code" : "trida",
      "valueString" : "kardiologie"
    },
    {
      "code" : "typ",
      "valueString" : "Standardní péče"
    }]
  },
  {
    "code" : "1H8",
    "display" : "std.nefrologie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Interní obory"
    },
    {
      "code" : "kod",
      "valueString" : "1H8"
    },
    {
      "code" : "nazev",
      "valueString" : "std.nefrologie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracoviště standardní ústav. lůžk.péče nefrologické - H typu"
    },
    {
      "code" : "trida",
      "valueString" : "nefrologie"
    },
    {
      "code" : "typ",
      "valueString" : "Standardní péče"
    }]
  },
  {
    "code" : "1H9",
    "display" : "std.revmatologie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Interní obory"
    },
    {
      "code" : "kod",
      "valueString" : "1H9"
    },
    {
      "code" : "nazev",
      "valueString" : "std.revmatologie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracoviště standard. úst. lůžk. péče revmatologické - H typu"
    },
    {
      "code" : "trida",
      "valueString" : "revmatologie"
    },
    {
      "code" : "typ",
      "valueString" : "Standardní péče"
    }]
  },
  {
    "code" : "1I1",
    "display" : "JIP interní",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Interní obory"
    },
    {
      "code" : "kod",
      "valueString" : "1I1"
    },
    {
      "code" : "nazev",
      "valueString" : "JIP interní"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Prac. resusc. a intenziv. ústavní lůž. péče interní - I typu"
    },
    {
      "code" : "trida",
      "valueString" : "interní lékařství"
    },
    {
      "code" : "typ",
      "valueString" : "Intenzivní péče"
    }]
  },
  {
    "code" : "1I3",
    "display" : "JIP diabetologie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Interní obory"
    },
    {
      "code" : "kod",
      "valueString" : "1I3"
    },
    {
      "code" : "nazev",
      "valueString" : "JIP diabetologie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracoviště intenzivní ústavní lůž.péče diabetolog.- I typu"
    },
    {
      "code" : "trida",
      "valueString" : "diabetologie"
    },
    {
      "code" : "typ",
      "valueString" : "Intenzivní péče"
    }]
  },
  {
    "code" : "1I5",
    "display" : "JIP hepatologie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Interní obory"
    },
    {
      "code" : "kod",
      "valueString" : "1I5"
    },
    {
      "code" : "nazev",
      "valueString" : "JIP hepatologie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracoviště intenzivní ústavní lůž. péče hepatolog. - I typu"
    },
    {
      "code" : "trida",
      "valueString" : "gastroenterologie a hepatologie"
    },
    {
      "code" : "typ",
      "valueString" : "Intenzivní péče"
    }]
  },
  {
    "code" : "1I6",
    "display" : "JIP geriatrie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Interní obory"
    },
    {
      "code" : "kod",
      "valueString" : "1I6"
    },
    {
      "code" : "nazev",
      "valueString" : "JIP geriatrie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracov.resusc. a intenziv.úst. lůž. péče geriatric. - I typu"
    },
    {
      "code" : "trida",
      "valueString" : "geriatrie"
    },
    {
      "code" : "typ",
      "valueString" : "Intenzivní péče"
    }]
  },
  {
    "code" : "1I7",
    "display" : "JIP kardiologie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Interní obory"
    },
    {
      "code" : "kod",
      "valueString" : "1I7"
    },
    {
      "code" : "nazev",
      "valueString" : "JIP kardiologie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracov.resusc.a intenziv.úst. lůž. péče kardiologic.- I typu"
    },
    {
      "code" : "trida",
      "valueString" : "kardiologie"
    },
    {
      "code" : "typ",
      "valueString" : "Intenzivní péče"
    }]
  },
  {
    "code" : "1I8",
    "display" : "JIP nefrologie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Interní obory"
    },
    {
      "code" : "kod",
      "valueString" : "1I8"
    },
    {
      "code" : "nazev",
      "valueString" : "JIP nefrologie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracoviště intenziv. úst. lůž. péče nefrologic. - I typu"
    },
    {
      "code" : "trida",
      "valueString" : "nefrologie"
    },
    {
      "code" : "typ",
      "valueString" : "Intenzivní péče"
    }]
  },
  {
    "code" : "1T1",
    "display" : "JIP interní",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Interní obory"
    },
    {
      "code" : "kod",
      "valueString" : "1T1"
    },
    {
      "code" : "nazev",
      "valueString" : "JIP interní"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracov. resusc. a intenziv. úst. lůž. péče interní - T typu"
    },
    {
      "code" : "trida",
      "valueString" : "interní lékařství"
    },
    {
      "code" : "typ",
      "valueString" : "Intenzivní péče"
    }]
  },
  {
    "code" : "1T3",
    "display" : "JIP diabetologie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Interní obory"
    },
    {
      "code" : "kod",
      "valueString" : "1T3"
    },
    {
      "code" : "nazev",
      "valueString" : "JIP diabetologie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracoviště intenziv. ústav. lůž. péče  diabetolog. - T typu"
    },
    {
      "code" : "trida",
      "valueString" : "diabetologie"
    },
    {
      "code" : "typ",
      "valueString" : "Intenzivní péče"
    }]
  },
  {
    "code" : "1T5",
    "display" : "JIP hepatologie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Interní obory"
    },
    {
      "code" : "kod",
      "valueString" : "1T5"
    },
    {
      "code" : "nazev",
      "valueString" : "JIP hepatologie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracoviště intenziv. ústavní lůž. péče  hepatolog. - T typu"
    },
    {
      "code" : "trida",
      "valueString" : "gastroenterologie a hepatologie"
    },
    {
      "code" : "typ",
      "valueString" : "Intenzivní péče"
    }]
  },
  {
    "code" : "1T6",
    "display" : "JIP geriatrie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Interní obory"
    },
    {
      "code" : "kod",
      "valueString" : "1T6"
    },
    {
      "code" : "nazev",
      "valueString" : "JIP geriatrie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracov. resusc.a intenziv.úst.lůž. péče geriatric. - T typu"
    },
    {
      "code" : "trida",
      "valueString" : "geriatrie"
    },
    {
      "code" : "typ",
      "valueString" : "Intenzivní péče"
    }]
  },
  {
    "code" : "1T7",
    "display" : "JIP kardiologie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Interní obory"
    },
    {
      "code" : "kod",
      "valueString" : "1T7"
    },
    {
      "code" : "nazev",
      "valueString" : "JIP kardiologie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracov. resusc.a intenziv.ústav.lůž. péče kardiolog.- T typu"
    },
    {
      "code" : "trida",
      "valueString" : "kardiologie"
    },
    {
      "code" : "typ",
      "valueString" : "Intenzivní péče"
    }]
  },
  {
    "code" : "1T8",
    "display" : "JIP nefrologie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Interní obory"
    },
    {
      "code" : "kod",
      "valueString" : "1T8"
    },
    {
      "code" : "nazev",
      "valueString" : "JIP nefrologie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracoviště intenziv. úst. lůž. péče nefrologic. - T typu"
    },
    {
      "code" : "trida",
      "valueString" : "nefrologie"
    },
    {
      "code" : "typ",
      "valueString" : "Intenzivní péče"
    }]
  },
  {
    "code" : "1U1",
    "display" : "dlhd.interní",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Interní obory"
    },
    {
      "code" : "kod",
      "valueString" : "1U1"
    },
    {
      "code" : "nazev",
      "valueString" : "dlhd.interní"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracoviště dlouhodobé (chronické) interní lůž.péče - U typu"
    },
    {
      "code" : "trida",
      "valueString" : "interní lékařství"
    },
    {
      "code" : "typ",
      "valueString" : "Dlouhodobá péče"
    }]
  },
  {
    "code" : "1U6",
    "display" : "dlhd.geriatrie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Interní obory"
    },
    {
      "code" : "kod",
      "valueString" : "1U6"
    },
    {
      "code" : "nazev",
      "valueString" : "dlhd.geriatrie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracov. dlouhodobé (chronické) geriatrické lůž.péče - U typu"
    },
    {
      "code" : "trida",
      "valueString" : "geriatrie"
    },
    {
      "code" : "typ",
      "valueString" : "Dlouhodobá péče"
    }]
  },
  {
    "code" : "1U9",
    "display" : "dlhd.revmatologie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Interní obory"
    },
    {
      "code" : "kod",
      "valueString" : "1U9"
    },
    {
      "code" : "nazev",
      "valueString" : "dlhd.revmatologie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracov.dlouhodobé (chronické) revmatolog. lůž. péče - U typu"
    },
    {
      "code" : "trida",
      "valueString" : "revmatologie"
    },
    {
      "code" : "typ",
      "valueString" : "Dlouhodobá péče"
    }]
  },
  {
    "code" : "201",
    "display" : "fyziatrie a rehabilitace",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : false
    },
    {
      "code" : "kategorie",
      "valueString" : "Interní obory"
    },
    {
      "code" : "kod",
      "valueString" : "201"
    },
    {
      "code" : "nazev",
      "valueString" : "fyziatrie a rehabilitace"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracoviště fyziatrie a rehabilitačního lékařství"
    },
    {
      "code" : "trida",
      "valueString" : "fyziatrie a rehabilitace"
    },
    {
      "code" : "typ",
      "valueString" : "Ambulantní péče"
    }]
  },
  {
    "code" : "202",
    "display" : "klinická hematologie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : false
    },
    {
      "code" : "kategorie",
      "valueString" : "Interní obory"
    },
    {
      "code" : "kod",
      "valueString" : "202"
    },
    {
      "code" : "nazev",
      "valueString" : "klinická hematologie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracoviště klinické hematologie"
    },
    {
      "code" : "trida",
      "valueString" : "klinická hematologie"
    },
    {
      "code" : "typ",
      "valueString" : "Ambulantní péče"
    }]
  },
  {
    "code" : "203",
    "display" : "přenosné nemoci",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : false
    },
    {
      "code" : "kategorie",
      "valueString" : "Interní obory"
    },
    {
      "code" : "kod",
      "valueString" : "203"
    },
    {
      "code" : "nazev",
      "valueString" : "přenosné nemoci"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracoviště přenosných nemocí"
    },
    {
      "code" : "trida",
      "valueString" : "přenosné nemoci"
    },
    {
      "code" : "typ",
      "valueString" : "Ambulantní péče"
    }]
  },
  {
    "code" : "204",
    "display" : "tělovýchovné lékařství",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : false
    },
    {
      "code" : "kategorie",
      "valueString" : "Interní obory"
    },
    {
      "code" : "kod",
      "valueString" : "204"
    },
    {
      "code" : "nazev",
      "valueString" : "tělovýchovné lékařství"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracoviště tělovýchovného lékařství"
    },
    {
      "code" : "trida",
      "valueString" : "tělovýchovné lékařství"
    },
    {
      "code" : "typ",
      "valueString" : "Ambulantní péče"
    }]
  },
  {
    "code" : "205",
    "display" : "TRN a pneumologie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : false
    },
    {
      "code" : "kategorie",
      "valueString" : "Interní obory"
    },
    {
      "code" : "kod",
      "valueString" : "205"
    },
    {
      "code" : "nazev",
      "valueString" : "TRN a pneumologie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracoviště tuberkulózy a respiračních nemocí"
    },
    {
      "code" : "trida",
      "valueString" : "TRN a pneumologie"
    },
    {
      "code" : "typ",
      "valueString" : "Ambulantní péče"
    }]
  },
  {
    "code" : "206",
    "display" : "klinická farmakologie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : false
    },
    {
      "code" : "kategorie",
      "valueString" : "Interní obory"
    },
    {
      "code" : "kod",
      "valueString" : "206"
    },
    {
      "code" : "nazev",
      "valueString" : "klinická farmakologie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracoviště klinické farmakologie (mimo laboratorní činnosti)"
    },
    {
      "code" : "trida",
      "valueString" : "klinická farmakologie"
    },
    {
      "code" : "typ",
      "valueString" : "Ambulantní péče"
    }]
  },
  {
    "code" : "207",
    "display" : "imunologie a alergologie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : false
    },
    {
      "code" : "kategorie",
      "valueString" : "Interní obory"
    },
    {
      "code" : "kod",
      "valueString" : "207"
    },
    {
      "code" : "nazev",
      "valueString" : "imunologie a alergologie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracoviště alergologie a klinické imunologie"
    },
    {
      "code" : "trida",
      "valueString" : "imunologie a alergologie"
    },
    {
      "code" : "typ",
      "valueString" : "Ambulantní péče"
    }]
  },
  {
    "code" : "208",
    "display" : "lékařská genetiky",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : false
    },
    {
      "code" : "kategorie",
      "valueString" : "Interní obory"
    },
    {
      "code" : "kod",
      "valueString" : "208"
    },
    {
      "code" : "nazev",
      "valueString" : "lékařská genetiky"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracoviště lékařské genetiky"
    },
    {
      "code" : "trida",
      "valueString" : "lékařská genetiky"
    },
    {
      "code" : "typ",
      "valueString" : "Ambulantní péče"
    }]
  },
  {
    "code" : "209",
    "display" : "neurologie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : false
    },
    {
      "code" : "kategorie",
      "valueString" : "Interní obory"
    },
    {
      "code" : "kod",
      "valueString" : "209"
    },
    {
      "code" : "nazev",
      "valueString" : "neurologie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracoviště neurologie"
    },
    {
      "code" : "trida",
      "valueString" : "neurologie"
    },
    {
      "code" : "typ",
      "valueString" : "Ambulantní péče"
    }]
  },
  {
    "code" : "222",
    "display" : "transfúzní služba",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : false
    },
    {
      "code" : "kategorie",
      "valueString" : "Jiné"
    },
    {
      "code" : "kod",
      "valueString" : "222"
    },
    {
      "code" : "nazev",
      "valueString" : "transfúzní služba"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracoviště transfúzní služby"
    },
    {
      "code" : "trida",
      "valueString" : "transfúzní služba"
    },
    {
      "code" : "typ",
      "valueString" : "Laboratoře"
    }]
  },
  {
    "code" : "2F1",
    "display" : "std.rehabilitace",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Interní obory"
    },
    {
      "code" : "kod",
      "valueString" : "2F1"
    },
    {
      "code" : "nazev",
      "valueString" : "std.rehabilitace"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracov. standardní ústav. lůž. péče rehabilitační - F typu"
    },
    {
      "code" : "trida",
      "valueString" : "fyziatrie a rehabilitace"
    },
    {
      "code" : "typ",
      "valueString" : "Standardní péče"
    }]
  },
  {
    "code" : "2F2",
    "display" : "std.klinická hematologie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Interní obory"
    },
    {
      "code" : "kod",
      "valueString" : "2F2"
    },
    {
      "code" : "nazev",
      "valueString" : "std.klinická hematologie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracov. standard.úst.lůž. péče klinické hematologie - F typu"
    },
    {
      "code" : "trida",
      "valueString" : "klinická hematologie"
    },
    {
      "code" : "typ",
      "valueString" : "Standardní péče"
    }]
  },
  {
    "code" : "2F3",
    "display" : "std.přenosné nemoci",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Interní obory"
    },
    {
      "code" : "kod",
      "valueString" : "2F3"
    },
    {
      "code" : "nazev",
      "valueString" : "std.přenosné nemoci"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracov. standard. úst. lůž. péče přenosných nemocí - F typu"
    },
    {
      "code" : "trida",
      "valueString" : "přenosné nemoci"
    },
    {
      "code" : "typ",
      "valueString" : "Standardní péče"
    }]
  },
  {
    "code" : "2F5",
    "display" : "std.TRN a pneumologie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Interní obory"
    },
    {
      "code" : "kod",
      "valueString" : "2F5"
    },
    {
      "code" : "nazev",
      "valueString" : "std.TRN a pneumologie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracov. standard. ústav. lůž. péče TRN a pneumolog. - F typu"
    },
    {
      "code" : "trida",
      "valueString" : "TRN a pneumologie"
    },
    {
      "code" : "typ",
      "valueString" : "Standardní péče"
    }]
  },
  {
    "code" : "2F6",
    "display" : "std.klinická farmakologi",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Interní obory"
    },
    {
      "code" : "kod",
      "valueString" : "2F6"
    },
    {
      "code" : "nazev",
      "valueString" : "std.klinická farmakologi"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracov. standard.úst.lůž.péče klinické farmakologie - F typu"
    },
    {
      "code" : "trida",
      "valueString" : "klinická farmakologie"
    },
    {
      "code" : "typ",
      "valueString" : "Standardní péče"
    }]
  },
  {
    "code" : "2F7",
    "display" : "std.imunologie a alergol",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Interní obory"
    },
    {
      "code" : "kod",
      "valueString" : "2F7"
    },
    {
      "code" : "nazev",
      "valueString" : "std.imunologie a alergol"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Prac.stand.úst.lůžk.péče klin.imunolog.a alergolog. - F typu"
    },
    {
      "code" : "trida",
      "valueString" : "imunologie a alergologie"
    },
    {
      "code" : "typ",
      "valueString" : "Standardní péče"
    }]
  },
  {
    "code" : "2F9",
    "display" : "std.neurologie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Interní obory"
    },
    {
      "code" : "kod",
      "valueString" : "2F9"
    },
    {
      "code" : "nazev",
      "valueString" : "std.neurologie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracov. standardní ústavní lůžk. péče neurologické - F typu"
    },
    {
      "code" : "trida",
      "valueString" : "neurologie"
    },
    {
      "code" : "typ",
      "valueString" : "Standardní péče"
    }]
  },
  {
    "code" : "2H1",
    "display" : "std.rehabilitace",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Interní obory"
    },
    {
      "code" : "kod",
      "valueString" : "2H1"
    },
    {
      "code" : "nazev",
      "valueString" : "std.rehabilitace"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracov. standardní ústavní lůžk. péče rehabilitační - H typu"
    },
    {
      "code" : "trida",
      "valueString" : "fyziatrie a rehabilitace"
    },
    {
      "code" : "typ",
      "valueString" : "Standardní péče"
    }]
  },
  {
    "code" : "2H2",
    "display" : "std.klinická hematologie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Interní obory"
    },
    {
      "code" : "kod",
      "valueString" : "2H2"
    },
    {
      "code" : "nazev",
      "valueString" : "std.klinická hematologie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Prac.standard.ústav.lůžk. péče klinické hematologie - H typu"
    },
    {
      "code" : "trida",
      "valueString" : "klinická hematologie"
    },
    {
      "code" : "typ",
      "valueString" : "Standardní péče"
    }]
  },
  {
    "code" : "2H3",
    "display" : "std.přenosné nemoci",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Interní obory"
    },
    {
      "code" : "kod",
      "valueString" : "2H3"
    },
    {
      "code" : "nazev",
      "valueString" : "std.přenosné nemoci"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracov. standard. úst. lůž. péče přenosných nemocí - H typu"
    },
    {
      "code" : "trida",
      "valueString" : "přenosné nemoci"
    },
    {
      "code" : "typ",
      "valueString" : "Standardní péče"
    }]
  },
  {
    "code" : "2H5",
    "display" : "std.TRN a pneumologie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Interní obory"
    },
    {
      "code" : "kod",
      "valueString" : "2H5"
    },
    {
      "code" : "nazev",
      "valueString" : "std.TRN a pneumologie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracov. standard.ústav. lůžk. péče TRN a pneumolog. - H typu"
    },
    {
      "code" : "trida",
      "valueString" : "TRN a pneumologie"
    },
    {
      "code" : "typ",
      "valueString" : "Standardní péče"
    }]
  },
  {
    "code" : "2H7",
    "display" : "std.imunologie a alergol",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Interní obory"
    },
    {
      "code" : "kod",
      "valueString" : "2H7"
    },
    {
      "code" : "nazev",
      "valueString" : "std.imunologie a alergol"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Prac. stand.úst.lůž.péče klin.imunolog.a alergolog. - H typu"
    },
    {
      "code" : "trida",
      "valueString" : "imunologie a alergologie"
    },
    {
      "code" : "typ",
      "valueString" : "Standardní péče"
    }]
  },
  {
    "code" : "2H9",
    "display" : "std.neurologie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Interní obory"
    },
    {
      "code" : "kod",
      "valueString" : "2H9"
    },
    {
      "code" : "nazev",
      "valueString" : "std.neurologie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracov.standardní ústavní lůžkové péče neurologické - H typu"
    },
    {
      "code" : "trida",
      "valueString" : "neurologie"
    },
    {
      "code" : "typ",
      "valueString" : "Standardní péče"
    }]
  },
  {
    "code" : "2I2",
    "display" : "JIP klinická hematologie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Interní obory"
    },
    {
      "code" : "kod",
      "valueString" : "2I2"
    },
    {
      "code" : "nazev",
      "valueString" : "JIP klinická hematologie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Prac. resusc. a intenz. úst.lůž.péče klin.hematolog.- I typu"
    },
    {
      "code" : "trida",
      "valueString" : "klinická hematologie"
    },
    {
      "code" : "typ",
      "valueString" : "Intenzivní péče"
    }]
  },
  {
    "code" : "2I3",
    "display" : "JIP přenosné nemoci",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Interní obory"
    },
    {
      "code" : "kod",
      "valueString" : "2I3"
    },
    {
      "code" : "nazev",
      "valueString" : "JIP přenosné nemoci"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Prac. resusc. a intenz. úst. lůž.péče přenos.nemocí - I typu"
    },
    {
      "code" : "trida",
      "valueString" : "přenosné nemoci"
    },
    {
      "code" : "typ",
      "valueString" : "Intenzivní péče"
    }]
  },
  {
    "code" : "2I5",
    "display" : "JIP TRN a pneumologie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Interní obory"
    },
    {
      "code" : "kod",
      "valueString" : "2I5"
    },
    {
      "code" : "nazev",
      "valueString" : "JIP TRN a pneumologie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Prac.resusc. a intenz.úst.lůž.péče TRN a pneumolog. - I typu"
    },
    {
      "code" : "trida",
      "valueString" : "TRN a pneumologie"
    },
    {
      "code" : "typ",
      "valueString" : "Intenzivní péče"
    }]
  },
  {
    "code" : "2I9",
    "display" : "JIP neurologie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Interní obory"
    },
    {
      "code" : "kod",
      "valueString" : "2I9"
    },
    {
      "code" : "nazev",
      "valueString" : "JIP neurologie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracov. resusc. a intenz.úst.lůž. péče neurologické - I typu"
    },
    {
      "code" : "trida",
      "valueString" : "neurologie"
    },
    {
      "code" : "typ",
      "valueString" : "Intenzivní péče"
    }]
  },
  {
    "code" : "2S1",
    "display" : "spinální rehabilitační j",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Interní obory"
    },
    {
      "code" : "kod",
      "valueString" : "2S1"
    },
    {
      "code" : "nazev",
      "valueString" : "spinální rehabilitační j"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Prac. poskyt.péči na spinálních rehabil.jednotkách"
    },
    {
      "code" : "trida",
      "valueString" : "spinální rehabilitační jednotka"
    },
    {
      "code" : "typ",
      "valueString" : "Standardní péče"
    }]
  },
  {
    "code" : "2T2",
    "display" : "JIP klinická hematologie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Interní obory"
    },
    {
      "code" : "kod",
      "valueString" : "2T2"
    },
    {
      "code" : "nazev",
      "valueString" : "JIP klinická hematologie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Prac. resusc. a intenz. úst.lůž.péče klin.hematolog.- T typu"
    },
    {
      "code" : "trida",
      "valueString" : "klinická hematologie"
    },
    {
      "code" : "typ",
      "valueString" : "Intenzivní péče"
    }]
  },
  {
    "code" : "2T3",
    "display" : "JIP přenosné nemoci",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Interní obory"
    },
    {
      "code" : "kod",
      "valueString" : "2T3"
    },
    {
      "code" : "nazev",
      "valueString" : "JIP přenosné nemoci"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Prac. resusc. a intenz. úst. lůž.péče přenos.nemocí - T typu"
    },
    {
      "code" : "trida",
      "valueString" : "přenosné nemoci"
    },
    {
      "code" : "typ",
      "valueString" : "Intenzivní péče"
    }]
  },
  {
    "code" : "2T5",
    "display" : "JIP TRN a pneumologie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Interní obory"
    },
    {
      "code" : "kod",
      "valueString" : "2T5"
    },
    {
      "code" : "nazev",
      "valueString" : "JIP TRN a pneumologie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Prac.resusc. a intenz.úst.lůž.péče TRN a pneumolog. - T typu"
    },
    {
      "code" : "trida",
      "valueString" : "TRN a pneumologie"
    },
    {
      "code" : "typ",
      "valueString" : "Intenzivní péče"
    }]
  },
  {
    "code" : "2T9",
    "display" : "JIP neurologie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Interní obory"
    },
    {
      "code" : "kod",
      "valueString" : "2T9"
    },
    {
      "code" : "nazev",
      "valueString" : "JIP neurologie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Prac. resusc. a intenz. úst. lůž. péče neurologické - T typu"
    },
    {
      "code" : "trida",
      "valueString" : "neurologie"
    },
    {
      "code" : "typ",
      "valueString" : "Intenzivní péče"
    }]
  },
  {
    "code" : "2U1",
    "display" : "dlhd.rehabilitace",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Interní obory"
    },
    {
      "code" : "kod",
      "valueString" : "2U1"
    },
    {
      "code" : "nazev",
      "valueString" : "dlhd.rehabilitace"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracov. dlouhodobé ústav. lůž. rehabilitační péče - U typu"
    },
    {
      "code" : "trida",
      "valueString" : "fyziatrie a rehabilitace"
    },
    {
      "code" : "typ",
      "valueString" : "Dlouhodobá péče"
    }]
  },
  {
    "code" : "2U5",
    "display" : "dlhd.TRN a pneumologie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Interní obory"
    },
    {
      "code" : "kod",
      "valueString" : "2U5"
    },
    {
      "code" : "nazev",
      "valueString" : "dlhd.TRN a pneumologie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracov. dlouhodobé ústav.lůž.TRN a pneumolog.péče - U typu"
    },
    {
      "code" : "trida",
      "valueString" : "TRN a pneumologie"
    },
    {
      "code" : "typ",
      "valueString" : "Dlouhodobá péče"
    }]
  },
  {
    "code" : "2U9",
    "display" : "dlhd.neurologie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Interní obory"
    },
    {
      "code" : "kod",
      "valueString" : "2U9"
    },
    {
      "code" : "nazev",
      "valueString" : "dlhd.neurologie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracov. dlouhodobé (chronické) úst.neurolog. péče - U typu"
    },
    {
      "code" : "trida",
      "valueString" : "neurologie"
    },
    {
      "code" : "typ",
      "valueString" : "Dlouhodobá péče"
    }]
  },
  {
    "code" : "301",
    "display" : "pediatrie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : false
    },
    {
      "code" : "kategorie",
      "valueString" : "Interní obory"
    },
    {
      "code" : "kod",
      "valueString" : "301"
    },
    {
      "code" : "nazev",
      "valueString" : "pediatrie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracoviště pediatrie"
    },
    {
      "code" : "trida",
      "valueString" : "pediatrie"
    },
    {
      "code" : "typ",
      "valueString" : "Ambulantní péče"
    }]
  },
  {
    "code" : "302",
    "display" : "dětská kardiologie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : false
    },
    {
      "code" : "kategorie",
      "valueString" : "Interní obory"
    },
    {
      "code" : "kod",
      "valueString" : "302"
    },
    {
      "code" : "nazev",
      "valueString" : "dětská kardiologie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracoviště dětské kardiologie"
    },
    {
      "code" : "trida",
      "valueString" : "dětská kardiologie"
    },
    {
      "code" : "typ",
      "valueString" : "Ambulantní péče"
    }]
  },
  {
    "code" : "303",
    "display" : "dorostové lékařství",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : false
    },
    {
      "code" : "kategorie",
      "valueString" : "Interní obory"
    },
    {
      "code" : "kod",
      "valueString" : "303"
    },
    {
      "code" : "nazev",
      "valueString" : "dorostové lékařství"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracoviště dorostového lékařství"
    },
    {
      "code" : "trida",
      "valueString" : "dorostové lékařství"
    },
    {
      "code" : "typ",
      "valueString" : "Ambulantní péče"
    }]
  },
  {
    "code" : "304",
    "display" : "neonatologie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : false
    },
    {
      "code" : "kategorie",
      "valueString" : "Interní obory"
    },
    {
      "code" : "kod",
      "valueString" : "304"
    },
    {
      "code" : "nazev",
      "valueString" : "neonatologie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracoviště neonatologie"
    },
    {
      "code" : "trida",
      "valueString" : "neonatologie"
    },
    {
      "code" : "typ",
      "valueString" : "Ambulantní péče"
    }]
  },
  {
    "code" : "305",
    "display" : "psychiatrie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : false
    },
    {
      "code" : "kategorie",
      "valueString" : "Psychiatrie"
    },
    {
      "code" : "kod",
      "valueString" : "305"
    },
    {
      "code" : "nazev",
      "valueString" : "psychiatrie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracoviště psychiatrie"
    },
    {
      "code" : "trida",
      "valueString" : "psychiatrie"
    },
    {
      "code" : "typ",
      "valueString" : "Ambulantní péče"
    }]
  },
  {
    "code" : "306",
    "display" : "dětská psychiatrie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : false
    },
    {
      "code" : "kategorie",
      "valueString" : "Psychiatrie"
    },
    {
      "code" : "kod",
      "valueString" : "306"
    },
    {
      "code" : "nazev",
      "valueString" : "dětská psychiatrie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracoviště dětské psychiatrie"
    },
    {
      "code" : "trida",
      "valueString" : "dětská psychiatrie"
    },
    {
      "code" : "typ",
      "valueString" : "Ambulantní péče"
    }]
  },
  {
    "code" : "307",
    "display" : "gerontopsychiatrie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : false
    },
    {
      "code" : "kategorie",
      "valueString" : "Psychiatrie"
    },
    {
      "code" : "kod",
      "valueString" : "307"
    },
    {
      "code" : "nazev",
      "valueString" : "gerontopsychiatrie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracoviště gerontopsychiatrie"
    },
    {
      "code" : "trida",
      "valueString" : "gerontopsychiatrie"
    },
    {
      "code" : "typ",
      "valueString" : "Ambulantní péče"
    }]
  },
  {
    "code" : "308",
    "display" : "alkoholismus a toxikoman",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : false
    },
    {
      "code" : "kategorie",
      "valueString" : "Psychiatrie"
    },
    {
      "code" : "kod",
      "valueString" : "308"
    },
    {
      "code" : "nazev",
      "valueString" : "alkoholismus a toxikoman"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracoviště léčby alkoholismu a jiných toxikomanií"
    },
    {
      "code" : "trida",
      "valueString" : "alkoholismus a toxikomanie"
    },
    {
      "code" : "typ",
      "valueString" : "Ambulantní péče"
    }]
  },
  {
    "code" : "309",
    "display" : "sexuologie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : false
    },
    {
      "code" : "kategorie",
      "valueString" : "Psychiatrie"
    },
    {
      "code" : "kod",
      "valueString" : "309"
    },
    {
      "code" : "nazev",
      "valueString" : "sexuologie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracoviště sexuologie"
    },
    {
      "code" : "trida",
      "valueString" : "sexuologie"
    },
    {
      "code" : "typ",
      "valueString" : "Ambulantní péče"
    }]
  },
  {
    "code" : "3F1",
    "display" : "std.pediatrie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Interní obory"
    },
    {
      "code" : "kod",
      "valueString" : "3F1"
    },
    {
      "code" : "nazev",
      "valueString" : "std.pediatrie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracov. standardní ústavní lůžkové péče pediatrické - F typu"
    },
    {
      "code" : "trida",
      "valueString" : "pediatrie"
    },
    {
      "code" : "typ",
      "valueString" : "Standardní péče"
    }]
  },
  {
    "code" : "3F2",
    "display" : "std.dětská kardiologie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Interní obory"
    },
    {
      "code" : "kod",
      "valueString" : "3F2"
    },
    {
      "code" : "nazev",
      "valueString" : "std.dětská kardiologie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracov. standard. úst. lůž. péče dětské kardiologie - F typu"
    },
    {
      "code" : "trida",
      "valueString" : "dětská kardiologie"
    },
    {
      "code" : "typ",
      "valueString" : "Standardní péče"
    }]
  },
  {
    "code" : "3F3",
    "display" : "std.dorostové lékařství",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Interní obory"
    },
    {
      "code" : "kod",
      "valueString" : "3F3"
    },
    {
      "code" : "nazev",
      "valueString" : "std.dorostové lékařství"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Prac. standard.úst.lůžk. péče dorostového lékařství - F typu"
    },
    {
      "code" : "trida",
      "valueString" : "dorostové lékařství"
    },
    {
      "code" : "typ",
      "valueString" : "Standardní péče"
    }]
  },
  {
    "code" : "3F4",
    "display" : "std.neonatologie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Interní obory"
    },
    {
      "code" : "kod",
      "valueString" : "3F4"
    },
    {
      "code" : "nazev",
      "valueString" : "std.neonatologie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracov. standard. úst. lůžk. péče o novorozence - F typu"
    },
    {
      "code" : "trida",
      "valueString" : "neonatologie"
    },
    {
      "code" : "typ",
      "valueString" : "Standardní péče"
    }]
  },
  {
    "code" : "3F5",
    "display" : "std.psychiatrie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Psychiatrie"
    },
    {
      "code" : "kod",
      "valueString" : "3F5"
    },
    {
      "code" : "nazev",
      "valueString" : "std.psychiatrie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracov. standard. úst. lůž. péče psychiatrické - F typu"
    },
    {
      "code" : "trida",
      "valueString" : "psychiatrie"
    },
    {
      "code" : "typ",
      "valueString" : "Standardní péče"
    }]
  },
  {
    "code" : "3F6",
    "display" : "std.dětská psychiatrie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Psychiatrie"
    },
    {
      "code" : "kod",
      "valueString" : "3F6"
    },
    {
      "code" : "nazev",
      "valueString" : "std.dětská psychiatrie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Prac. standard. úst. lůž. péče dětské psychiatrie - F typu"
    },
    {
      "code" : "trida",
      "valueString" : "dětská psychiatrie"
    },
    {
      "code" : "typ",
      "valueString" : "Standardní péče"
    }]
  },
  {
    "code" : "3F7",
    "display" : "std.gerontopsychiatrie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Psychiatrie"
    },
    {
      "code" : "kod",
      "valueString" : "3F7"
    },
    {
      "code" : "nazev",
      "valueString" : "std.gerontopsychiatrie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Prac. standard. úst. lůž. péče gerontopsychiatric. - F typu"
    },
    {
      "code" : "trida",
      "valueString" : "gerontopsychiatrie"
    },
    {
      "code" : "typ",
      "valueString" : "Standardní péče"
    }]
  },
  {
    "code" : "3H1",
    "display" : "std.pediatrie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Interní obory"
    },
    {
      "code" : "kod",
      "valueString" : "3H1"
    },
    {
      "code" : "nazev",
      "valueString" : "std.pediatrie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracov. standard. úst. lůž. péče pediatrické - H typu"
    },
    {
      "code" : "trida",
      "valueString" : "pediatrie"
    },
    {
      "code" : "typ",
      "valueString" : "Standardní péče"
    }]
  },
  {
    "code" : "3H2",
    "display" : "std.dětská kardiologie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Interní obory"
    },
    {
      "code" : "kod",
      "valueString" : "3H2"
    },
    {
      "code" : "nazev",
      "valueString" : "std.dětská kardiologie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracov. standard. úst. lůž. péče dětské kardiologie - H typu"
    },
    {
      "code" : "trida",
      "valueString" : "dětská kardiologie"
    },
    {
      "code" : "typ",
      "valueString" : "Standardní péče"
    }]
  },
  {
    "code" : "3H3",
    "display" : "std.dorostové lékařství",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Interní obory"
    },
    {
      "code" : "kod",
      "valueString" : "3H3"
    },
    {
      "code" : "nazev",
      "valueString" : "std.dorostové lékařství"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Prac.standard. úst. lůž. péče dorostového lékařství - H typu"
    },
    {
      "code" : "trida",
      "valueString" : "dorostové lékařství"
    },
    {
      "code" : "typ",
      "valueString" : "Standardní péče"
    }]
  },
  {
    "code" : "3H4",
    "display" : "std.neonatologie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Interní obory"
    },
    {
      "code" : "kod",
      "valueString" : "3H4"
    },
    {
      "code" : "nazev",
      "valueString" : "std.neonatologie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracov. standard. úst. lůž. péče o novorozence - H typu"
    },
    {
      "code" : "trida",
      "valueString" : "neonatologie"
    },
    {
      "code" : "typ",
      "valueString" : "Standardní péče"
    }]
  },
  {
    "code" : "3H5",
    "display" : "std.psychiatrie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Psychiatrie"
    },
    {
      "code" : "kod",
      "valueString" : "3H5"
    },
    {
      "code" : "nazev",
      "valueString" : "std.psychiatrie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracov. standard. ústav. lůžk. péče psychiatrické - H typu"
    },
    {
      "code" : "trida",
      "valueString" : "psychiatrie"
    },
    {
      "code" : "typ",
      "valueString" : "Standardní péče"
    }]
  },
  {
    "code" : "3H6",
    "display" : "std.dětské psychiatrie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Psychiatrie"
    },
    {
      "code" : "kod",
      "valueString" : "3H6"
    },
    {
      "code" : "nazev",
      "valueString" : "std.dětské psychiatrie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracov. standard. úst. lůž. péče dětské psychiatrie - H typu"
    },
    {
      "code" : "trida",
      "valueString" : "dětská psychiatrie"
    },
    {
      "code" : "typ",
      "valueString" : "Standardní péče"
    }]
  },
  {
    "code" : "3H7",
    "display" : "std.gerontopsychiatrie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Psychiatrie"
    },
    {
      "code" : "kod",
      "valueString" : "3H7"
    },
    {
      "code" : "nazev",
      "valueString" : "std.gerontopsychiatrie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracov.standard. úst. lůž. péče gerontopsychiatric. - H typu"
    },
    {
      "code" : "trida",
      "valueString" : "gerontopsychiatrie"
    },
    {
      "code" : "typ",
      "valueString" : "Standardní péče"
    }]
  },
  {
    "code" : "3I1",
    "display" : "JIP pediatrie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Interní obory"
    },
    {
      "code" : "kod",
      "valueString" : "3I1"
    },
    {
      "code" : "nazev",
      "valueString" : "JIP pediatrie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracov.resusc. a intenz. úst. lůž. péče pediatrické - I typu"
    },
    {
      "code" : "trida",
      "valueString" : "pediatrie"
    },
    {
      "code" : "typ",
      "valueString" : "Intenzivní péče"
    }]
  },
  {
    "code" : "3I2",
    "display" : "JIP dětská kardiologie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Interní obory"
    },
    {
      "code" : "kod",
      "valueString" : "3I2"
    },
    {
      "code" : "nazev",
      "valueString" : "JIP dětská kardiologie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Prac. resusc.a intenz.úst.lůž.péče dětské kardiolog - I typu"
    },
    {
      "code" : "trida",
      "valueString" : "dětská kardiologie"
    },
    {
      "code" : "typ",
      "valueString" : "Intenzivní péče"
    }]
  },
  {
    "code" : "3I4",
    "display" : "JIP neonatologie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Interní obory"
    },
    {
      "code" : "kod",
      "valueString" : "3I4"
    },
    {
      "code" : "nazev",
      "valueString" : "JIP neonatologie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Prac.resuscit.a intenziv. ústav.lůž. péče neonatol. - I typu"
    },
    {
      "code" : "trida",
      "valueString" : "neonatologie"
    },
    {
      "code" : "typ",
      "valueString" : "Intenzivní péče"
    }]
  },
  {
    "code" : "3I5",
    "display" : "JIP psychiatrie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Psychiatrie"
    },
    {
      "code" : "kod",
      "valueString" : "3I5"
    },
    {
      "code" : "nazev",
      "valueString" : "JIP psychiatrie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Prac.resusc. a intenz. úst. lůž. péče psychiatrické - I typu"
    },
    {
      "code" : "trida",
      "valueString" : "psychiatrie"
    },
    {
      "code" : "typ",
      "valueString" : "Intenzivní péče"
    }]
  },
  {
    "code" : "3I6",
    "display" : "JIP dětská psychiatrie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Psychiatrie"
    },
    {
      "code" : "kod",
      "valueString" : "3I6"
    },
    {
      "code" : "nazev",
      "valueString" : "JIP dětská psychiatrie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Prac. resusc. a intenz. úst. lůž. péče dět.psychiatr. I typu"
    },
    {
      "code" : "trida",
      "valueString" : "dětská psychiatrie"
    },
    {
      "code" : "typ",
      "valueString" : "Intenzivní péče"
    }]
  },
  {
    "code" : "3T1",
    "display" : "JIP pediatrie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Interní obory"
    },
    {
      "code" : "kod",
      "valueString" : "3T1"
    },
    {
      "code" : "nazev",
      "valueString" : "JIP pediatrie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Prac. resusc. a intenz. úst. lůž. péče pediatrické - T typu"
    },
    {
      "code" : "trida",
      "valueString" : "pediatrie"
    },
    {
      "code" : "typ",
      "valueString" : "Intenzivní péče"
    }]
  },
  {
    "code" : "3T2",
    "display" : "JIP dětská kardiologie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Interní obory"
    },
    {
      "code" : "kod",
      "valueString" : "3T2"
    },
    {
      "code" : "nazev",
      "valueString" : "JIP dětská kardiologie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Prac.resusc. a intenz.úst.lůž.péče dětské kardiolog - T typu"
    },
    {
      "code" : "trida",
      "valueString" : "dětská kardiologie"
    },
    {
      "code" : "typ",
      "valueString" : "Intenzivní péče"
    }]
  },
  {
    "code" : "3T4",
    "display" : "JIP neonatologie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Interní obory"
    },
    {
      "code" : "kod",
      "valueString" : "3T4"
    },
    {
      "code" : "nazev",
      "valueString" : "JIP neonatologie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Prac. resusc. a intenz. úst. lůž. péče neonatol. - T typu"
    },
    {
      "code" : "trida",
      "valueString" : "neonatologie"
    },
    {
      "code" : "typ",
      "valueString" : "Intenzivní péče"
    }]
  },
  {
    "code" : "3T5",
    "display" : "JIP psychiatrie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Psychiatrie"
    },
    {
      "code" : "kod",
      "valueString" : "3T5"
    },
    {
      "code" : "nazev",
      "valueString" : "JIP psychiatrie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Prac.resusc. a intenz. úst. lůž. péče psychiatrické - T typu"
    },
    {
      "code" : "trida",
      "valueString" : "psychiatrie"
    },
    {
      "code" : "typ",
      "valueString" : "Intenzivní péče"
    }]
  },
  {
    "code" : "3T6",
    "display" : "JIP dětská psychiatrie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Psychiatrie"
    },
    {
      "code" : "kod",
      "valueString" : "3T6"
    },
    {
      "code" : "nazev",
      "valueString" : "JIP dětská psychiatrie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Prac. resusc. a intenz. úst.lůž.péče dět.psychiatr. - T typu"
    },
    {
      "code" : "trida",
      "valueString" : "dětská psychiatrie"
    },
    {
      "code" : "typ",
      "valueString" : "Intenzivní péče"
    }]
  },
  {
    "code" : "3U1",
    "display" : "dlhd.pediatrie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Interní obory"
    },
    {
      "code" : "kod",
      "valueString" : "3U1"
    },
    {
      "code" : "nazev",
      "valueString" : "dlhd.pediatrie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Prac.dlouhodobé (chronic.) úst.lůž.péče pediatrické - U typu"
    },
    {
      "code" : "trida",
      "valueString" : "pediatrie"
    },
    {
      "code" : "typ",
      "valueString" : "Dlouhodobá péče"
    }]
  },
  {
    "code" : "3U5",
    "display" : "dlhd.psychiatrie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Psychiatrie"
    },
    {
      "code" : "kod",
      "valueString" : "3U5"
    },
    {
      "code" : "nazev",
      "valueString" : "dlhd.psychiatrie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Prac. dlouhodobé (chronic.) úst.lůž.péče psychiatr. - U typu"
    },
    {
      "code" : "trida",
      "valueString" : "psychiatrie"
    },
    {
      "code" : "typ",
      "valueString" : "Dlouhodobá péče"
    }]
  },
  {
    "code" : "3U6",
    "display" : "dlhd.dětská psychiatrie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Psychiatrie"
    },
    {
      "code" : "kod",
      "valueString" : "3U6"
    },
    {
      "code" : "nazev",
      "valueString" : "dlhd.dětská psychiatrie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Prac. dlouhod.(chronic.) úst.lůž.péče dět.psychiatr.- U typu"
    },
    {
      "code" : "trida",
      "valueString" : "dětská psychiatrie"
    },
    {
      "code" : "typ",
      "valueString" : "Dlouhodobá péče"
    }]
  },
  {
    "code" : "3U7",
    "display" : "dlhd.gerontopsychiatrie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Psychiatrie"
    },
    {
      "code" : "kod",
      "valueString" : "3U7"
    },
    {
      "code" : "nazev",
      "valueString" : "dlhd.gerontopsychiatrie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Prac.dlouhod.(chronic.)úst.lůž.péče gerontopsychiatr.-U typu"
    },
    {
      "code" : "trida",
      "valueString" : "gerontopsychiatrie"
    },
    {
      "code" : "typ",
      "valueString" : "Dlouhodobá péče"
    }]
  },
  {
    "code" : "3U8",
    "display" : "dlhd.alkoholismus a toxi",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Psychiatrie"
    },
    {
      "code" : "kod",
      "valueString" : "3U8"
    },
    {
      "code" : "nazev",
      "valueString" : "dlhd.alkoholismus a toxi"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Prac. dlouhod.(chronic.) léčba alkohol.a j. toxikom. -U typu"
    },
    {
      "code" : "trida",
      "valueString" : "alkoholismus a toxikomanie"
    },
    {
      "code" : "typ",
      "valueString" : "Dlouhodobá péče"
    }]
  },
  {
    "code" : "3U9",
    "display" : "dlhd.sexuologie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Psychiatrie"
    },
    {
      "code" : "kod",
      "valueString" : "3U9"
    },
    {
      "code" : "nazev",
      "valueString" : "dlhd.sexuologie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Prac. dlouhodobé (chronic.) úst.lůž.péče sexuolog. - U typu"
    },
    {
      "code" : "trida",
      "valueString" : "sexuologie"
    },
    {
      "code" : "typ",
      "valueString" : "Dlouhodobá péče"
    }]
  },
  {
    "code" : "401",
    "display" : "pracovní lékařství",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : false
    },
    {
      "code" : "kategorie",
      "valueString" : "Interní obory"
    },
    {
      "code" : "kod",
      "valueString" : "401"
    },
    {
      "code" : "nazev",
      "valueString" : "pracovní lékařství"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracoviště pracovního lékařství"
    },
    {
      "code" : "trida",
      "valueString" : "pracovní lékařství"
    },
    {
      "code" : "typ",
      "valueString" : "Ambulantní péče"
    }]
  },
  {
    "code" : "402",
    "display" : "onkologie (bez radiotera",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : false
    },
    {
      "code" : "kategorie",
      "valueString" : "Interní obory"
    },
    {
      "code" : "kod",
      "valueString" : "402"
    },
    {
      "code" : "nazev",
      "valueString" : "onkologie (bez radiotera"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracoviště klinické onkologie (bez radiační onkologie)"
    },
    {
      "code" : "trida",
      "valueString" : "onkologie (bez radioterapie)"
    },
    {
      "code" : "typ",
      "valueString" : "Ambulantní péče"
    }]
  },
  {
    "code" : "403",
    "display" : "radioterapie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : false
    },
    {
      "code" : "kategorie",
      "valueString" : "Interní obory"
    },
    {
      "code" : "kod",
      "valueString" : "403"
    },
    {
      "code" : "nazev",
      "valueString" : "radioterapie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracoviště radioterapie a radiační onkologie"
    },
    {
      "code" : "trida",
      "valueString" : "radioterapie"
    },
    {
      "code" : "typ",
      "valueString" : "Ambulantní péče"
    }]
  },
  {
    "code" : "404",
    "display" : "dermatovenerologie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : false
    },
    {
      "code" : "kategorie",
      "valueString" : "Chirurgické obory"
    },
    {
      "code" : "kod",
      "valueString" : "404"
    },
    {
      "code" : "nazev",
      "valueString" : "dermatovenerologie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracoviště dermatovenerologie"
    },
    {
      "code" : "trida",
      "valueString" : "dermatovenerologie"
    },
    {
      "code" : "typ",
      "valueString" : "Ambulantní péče"
    }]
  },
  {
    "code" : "405",
    "display" : "dětská dermatologie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : false
    },
    {
      "code" : "kategorie",
      "valueString" : "Chirurgické obory"
    },
    {
      "code" : "kod",
      "valueString" : "405"
    },
    {
      "code" : "nazev",
      "valueString" : "dětská dermatologie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracoviště dětské dermatologie"
    },
    {
      "code" : "trida",
      "valueString" : "dětská dermatologie"
    },
    {
      "code" : "typ",
      "valueString" : "Ambulantní péče"
    }]
  },
  {
    "code" : "406",
    "display" : "korektivní dermatologie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : false
    },
    {
      "code" : "kategorie",
      "valueString" : "Chirurgické obory"
    },
    {
      "code" : "kod",
      "valueString" : "406"
    },
    {
      "code" : "nazev",
      "valueString" : "korektivní dermatologie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracoviště korektivní dermatologie"
    },
    {
      "code" : "trida",
      "valueString" : "korektivní dermatologie"
    },
    {
      "code" : "typ",
      "valueString" : "Ambulantní péče"
    }]
  },
  {
    "code" : "407",
    "display" : "nukleární medicína",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : false
    },
    {
      "code" : "kategorie",
      "valueString" : "Jiné"
    },
    {
      "code" : "kod",
      "valueString" : "407"
    },
    {
      "code" : "nazev",
      "valueString" : "nukleární medicína"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracoviště nukleární medicíny"
    },
    {
      "code" : "trida",
      "valueString" : "nukleární medicína"
    },
    {
      "code" : "typ",
      "valueString" : "Zobrazovací metody"
    }]
  },
  {
    "code" : "409",
    "display" : "dětská neurologie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : false
    },
    {
      "code" : "kategorie",
      "valueString" : "Interní obory"
    },
    {
      "code" : "kod",
      "valueString" : "409"
    },
    {
      "code" : "nazev",
      "valueString" : "dětská neurologie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracoviště dětské neurologie"
    },
    {
      "code" : "trida",
      "valueString" : "dětská neurologie"
    },
    {
      "code" : "typ",
      "valueString" : "Ambulantní péče"
    }]
  },
  {
    "code" : "4F1",
    "display" : "std.nemoci z povolání",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Interní obory"
    },
    {
      "code" : "kod",
      "valueString" : "4F1"
    },
    {
      "code" : "nazev",
      "valueString" : "std.nemoci z povolání"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracov. standard. úst. lůž. péče nemocí z povolání - F typu"
    },
    {
      "code" : "trida",
      "valueString" : "pracovní lékařství"
    },
    {
      "code" : "typ",
      "valueString" : "Standardní péče"
    }]
  },
  {
    "code" : "4F2",
    "display" : "std.onkologie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Interní obory"
    },
    {
      "code" : "kod",
      "valueString" : "4F2"
    },
    {
      "code" : "nazev",
      "valueString" : "std.onkologie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracov. standard. úst. lůž. péče onkologické - F typu"
    },
    {
      "code" : "trida",
      "valueString" : "onkologie (bez radioterapie)"
    },
    {
      "code" : "typ",
      "valueString" : "Standardní péče"
    }]
  },
  {
    "code" : "4F3",
    "display" : "std.radioterapeutie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Interní obory"
    },
    {
      "code" : "kod",
      "valueString" : "4F3"
    },
    {
      "code" : "nazev",
      "valueString" : "std.radioterapeutie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracov. standard. úst. lůž. péče radioterapeutické - F typu"
    },
    {
      "code" : "trida",
      "valueString" : "radioterapie"
    },
    {
      "code" : "typ",
      "valueString" : "Standardní péče"
    }]
  },
  {
    "code" : "4F4",
    "display" : "std.dermatovenerologie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Chirurgické obory"
    },
    {
      "code" : "kod",
      "valueString" : "4F4"
    },
    {
      "code" : "nazev",
      "valueString" : "std.dermatovenerologie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracov. standard. úst.lůž.péče dermatovenerologické - F typu"
    },
    {
      "code" : "trida",
      "valueString" : "dermatovenerologie"
    },
    {
      "code" : "typ",
      "valueString" : "Standardní péče"
    }]
  },
  {
    "code" : "4F5",
    "display" : "std.dětská dermatologie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Chirurgické obory"
    },
    {
      "code" : "kod",
      "valueString" : "4F5"
    },
    {
      "code" : "nazev",
      "valueString" : "std.dětská dermatologie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracov. standard. úst.lůž. péče dětské dermatologie - F typu"
    },
    {
      "code" : "trida",
      "valueString" : "dětská dermatologie"
    },
    {
      "code" : "typ",
      "valueString" : "Standardní péče"
    }]
  },
  {
    "code" : "4F7",
    "display" : "std.nukleární medicína",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Interní obory"
    },
    {
      "code" : "kod",
      "valueString" : "4F7"
    },
    {
      "code" : "nazev",
      "valueString" : "std.nukleární medicína"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracov. standard. úst. lůž. péče nukleární medicíny - F typu"
    },
    {
      "code" : "trida",
      "valueString" : "nukleární medicína"
    },
    {
      "code" : "typ",
      "valueString" : "Standardní péče"
    }]
  },
  {
    "code" : "4F9",
    "display" : "std.dětská neurologie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Interní obory"
    },
    {
      "code" : "kod",
      "valueString" : "4F9"
    },
    {
      "code" : "nazev",
      "valueString" : "std.dětská neurologie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracov. standard. úst. lůž. péče dětské neurologie - F typu"
    },
    {
      "code" : "trida",
      "valueString" : "dětská neurologie"
    },
    {
      "code" : "typ",
      "valueString" : "Standardní péče"
    }]
  },
  {
    "code" : "4H1",
    "display" : "std.nemoci z povolání",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Interní obory"
    },
    {
      "code" : "kod",
      "valueString" : "4H1"
    },
    {
      "code" : "nazev",
      "valueString" : "std.nemoci z povolání"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracov. standard. úst. lůž. péče nemocí z povolání - H typu"
    },
    {
      "code" : "trida",
      "valueString" : "pracovní lékařství"
    },
    {
      "code" : "typ",
      "valueString" : "Standardní péče"
    }]
  },
  {
    "code" : "4H2",
    "display" : "std.onkologie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Interní obory"
    },
    {
      "code" : "kod",
      "valueString" : "4H2"
    },
    {
      "code" : "nazev",
      "valueString" : "std.onkologie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracov. standardní ústavní lůžkové péče onkologické - H typu"
    },
    {
      "code" : "trida",
      "valueString" : "onkologie (bez radioterapie)"
    },
    {
      "code" : "typ",
      "valueString" : "Standardní péče"
    }]
  },
  {
    "code" : "4H3",
    "display" : "std.radioterapie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Interní obory"
    },
    {
      "code" : "kod",
      "valueString" : "4H3"
    },
    {
      "code" : "nazev",
      "valueString" : "std.radioterapie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracov. standard. úst. lůž. péče radioterapeutické - H typu"
    },
    {
      "code" : "trida",
      "valueString" : "radioterapie"
    },
    {
      "code" : "typ",
      "valueString" : "Standardní péče"
    }]
  },
  {
    "code" : "4H4",
    "display" : "std.dermatovenerologie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Chirurgické obory"
    },
    {
      "code" : "kod",
      "valueString" : "4H4"
    },
    {
      "code" : "nazev",
      "valueString" : "std.dermatovenerologie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Prac. standard. úst. lůž. péče dermatovenerologické - H typu"
    },
    {
      "code" : "trida",
      "valueString" : "dermatovenerologie"
    },
    {
      "code" : "typ",
      "valueString" : "Standardní péče"
    }]
  },
  {
    "code" : "4H5",
    "display" : "std.dětská dermatologie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Chirurgické obory"
    },
    {
      "code" : "kod",
      "valueString" : "4H5"
    },
    {
      "code" : "nazev",
      "valueString" : "std.dětská dermatologie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracov.standard. úst. lůž. péče dětské dermatologie - H typu"
    },
    {
      "code" : "trida",
      "valueString" : "dětská dermatologie"
    },
    {
      "code" : "typ",
      "valueString" : "Standardní péče"
    }]
  },
  {
    "code" : "4H7",
    "display" : "std.nukleární medicína",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Interní obory"
    },
    {
      "code" : "kod",
      "valueString" : "4H7"
    },
    {
      "code" : "nazev",
      "valueString" : "std.nukleární medicína"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracov. standard. úst. lůž. péče nukleární medicíny - H typu"
    },
    {
      "code" : "trida",
      "valueString" : "nukleární medicína"
    },
    {
      "code" : "typ",
      "valueString" : "Standardní péče"
    }]
  },
  {
    "code" : "4H9",
    "display" : "std.dětská neurologie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Interní obory"
    },
    {
      "code" : "kod",
      "valueString" : "4H9"
    },
    {
      "code" : "nazev",
      "valueString" : "std.dětská neurologie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracov. standard. úst. lůž. péče dětské neurologie - H typu"
    },
    {
      "code" : "trida",
      "valueString" : "dětská neurologie"
    },
    {
      "code" : "typ",
      "valueString" : "Standardní péče"
    }]
  },
  {
    "code" : "4I2",
    "display" : "JIP onkologie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Interní obory"
    },
    {
      "code" : "kod",
      "valueString" : "4I2"
    },
    {
      "code" : "nazev",
      "valueString" : "JIP onkologie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracov. resusc. a intenz. úst. lůž.péče onkologické - I typu"
    },
    {
      "code" : "trida",
      "valueString" : "onkologie (bez radioterapie)"
    },
    {
      "code" : "typ",
      "valueString" : "Intenzivní péče"
    }]
  },
  {
    "code" : "4I3",
    "display" : "JIP radioterapie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Chirurgické obory"
    },
    {
      "code" : "kod",
      "valueString" : "4I3"
    },
    {
      "code" : "nazev",
      "valueString" : "JIP radioterapie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracov.resusc. a intenz. úst. lůž. péče radioterap. - I typu"
    },
    {
      "code" : "trida",
      "valueString" : "radioterapie"
    },
    {
      "code" : "typ",
      "valueString" : "Intenzivní péče"
    }]
  },
  {
    "code" : "4I9",
    "display" : "JIP dětská neurologie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Interní obory"
    },
    {
      "code" : "kod",
      "valueString" : "4I9"
    },
    {
      "code" : "nazev",
      "valueString" : "JIP dětská neurologie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracov.resusc. a intenz.úst.lůž.péče dětské neurol. - I typu"
    },
    {
      "code" : "trida",
      "valueString" : "dětská neurologie"
    },
    {
      "code" : "typ",
      "valueString" : "Intenzivní péče"
    }]
  },
  {
    "code" : "4T2",
    "display" : "JIP onkologie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Interní obory"
    },
    {
      "code" : "kod",
      "valueString" : "4T2"
    },
    {
      "code" : "nazev",
      "valueString" : "JIP onkologie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracov. resusc. a intenz. úst. lůž.péče onkologické - T typu"
    },
    {
      "code" : "trida",
      "valueString" : "onkologie (bez radioterapie)"
    },
    {
      "code" : "typ",
      "valueString" : "Intenzivní péče"
    }]
  },
  {
    "code" : "4T3",
    "display" : "JIP radioterapie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Interní obory"
    },
    {
      "code" : "kod",
      "valueString" : "4T3"
    },
    {
      "code" : "nazev",
      "valueString" : "JIP radioterapie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracov.resusc. a intenz. úst. lůž. péče radioterap. - T typu"
    },
    {
      "code" : "trida",
      "valueString" : "radioterapie"
    },
    {
      "code" : "typ",
      "valueString" : "Intenzivní péče"
    }]
  },
  {
    "code" : "4T9",
    "display" : "JIP dětské neurologie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Interní obory"
    },
    {
      "code" : "kod",
      "valueString" : "4T9"
    },
    {
      "code" : "nazev",
      "valueString" : "JIP dětské neurologie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Prac. resusc. a intenz. úst.lůž.péče dětské neurol. - T typu"
    },
    {
      "code" : "trida",
      "valueString" : "dětská neurologie"
    },
    {
      "code" : "typ",
      "valueString" : "Intenzivní péče"
    }]
  },
  {
    "code" : "4U5",
    "display" : "dlhd.dětská dermatologie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Chirurgické obory"
    },
    {
      "code" : "kod",
      "valueString" : "4U5"
    },
    {
      "code" : "nazev",
      "valueString" : "dlhd.dětská dermatologie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Prac.dlouhod.(chronic.) úst.lůž.péče dětské dermatol.-U typu"
    },
    {
      "code" : "trida",
      "valueString" : "dětská dermatologie"
    },
    {
      "code" : "typ",
      "valueString" : "Dlouhodobá péče"
    }]
  },
  {
    "code" : "4U9",
    "display" : "dlhd.dětská neurologie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Interní obory"
    },
    {
      "code" : "kod",
      "valueString" : "4U9"
    },
    {
      "code" : "nazev",
      "valueString" : "dlhd.dětská neurologie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Prac.dlouhod.(chronic.) úst.lůž.péče dětské neurolog.-U typu"
    },
    {
      "code" : "trida",
      "valueString" : "dětská neurologie"
    },
    {
      "code" : "typ",
      "valueString" : "Dlouhodobá péče"
    }]
  },
  {
    "code" : "501",
    "display" : "chirurgie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : false
    },
    {
      "code" : "kategorie",
      "valueString" : "Chirurgické obory"
    },
    {
      "code" : "kod",
      "valueString" : "501"
    },
    {
      "code" : "nazev",
      "valueString" : "chirurgie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracoviště chirurgie"
    },
    {
      "code" : "trida",
      "valueString" : "chirurgie"
    },
    {
      "code" : "typ",
      "valueString" : "Ambulantní péče"
    }]
  },
  {
    "code" : "502",
    "display" : "dětská chirurgie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : false
    },
    {
      "code" : "kategorie",
      "valueString" : "Chirurgické obory"
    },
    {
      "code" : "kod",
      "valueString" : "502"
    },
    {
      "code" : "nazev",
      "valueString" : "dětská chirurgie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracoviště dětské chirurgie"
    },
    {
      "code" : "trida",
      "valueString" : "dětská chirurgie"
    },
    {
      "code" : "typ",
      "valueString" : "Ambulantní péče"
    }]
  },
  {
    "code" : "503",
    "display" : "úrazová chirurgie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : false
    },
    {
      "code" : "kategorie",
      "valueString" : "Chirurgické obory"
    },
    {
      "code" : "kod",
      "valueString" : "503"
    },
    {
      "code" : "nazev",
      "valueString" : "úrazová chirurgie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracoviště úrazové chirurgie"
    },
    {
      "code" : "trida",
      "valueString" : "úrazová chirurgie"
    },
    {
      "code" : "typ",
      "valueString" : "Ambulantní péče"
    }]
  },
  {
    "code" : "504",
    "display" : "cévní chirurgie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : false
    },
    {
      "code" : "kategorie",
      "valueString" : "Chirurgické obory"
    },
    {
      "code" : "kod",
      "valueString" : "504"
    },
    {
      "code" : "nazev",
      "valueString" : "cévní chirurgie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracoviště cévní chirurgie"
    },
    {
      "code" : "trida",
      "valueString" : "cévní chirurgie"
    },
    {
      "code" : "typ",
      "valueString" : "Ambulantní péče"
    }]
  },
  {
    "code" : "505",
    "display" : "kardiochirurgie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : false
    },
    {
      "code" : "kategorie",
      "valueString" : "Chirurgické obory"
    },
    {
      "code" : "kod",
      "valueString" : "505"
    },
    {
      "code" : "nazev",
      "valueString" : "kardiochirurgie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracoviště kardiochirurgie"
    },
    {
      "code" : "trida",
      "valueString" : "kardiochirurgie"
    },
    {
      "code" : "typ",
      "valueString" : "Ambulantní péče"
    }]
  },
  {
    "code" : "506",
    "display" : "neurochirurgie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : false
    },
    {
      "code" : "kategorie",
      "valueString" : "Chirurgické obory"
    },
    {
      "code" : "kod",
      "valueString" : "506"
    },
    {
      "code" : "nazev",
      "valueString" : "neurochirurgie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracoviště neurochirurgie"
    },
    {
      "code" : "trida",
      "valueString" : "neurochirurgie"
    },
    {
      "code" : "typ",
      "valueString" : "Ambulantní péče"
    }]
  },
  {
    "code" : "507",
    "display" : "hrudní chirurgie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : false
    },
    {
      "code" : "kategorie",
      "valueString" : "Chirurgické obory"
    },
    {
      "code" : "kod",
      "valueString" : "507"
    },
    {
      "code" : "nazev",
      "valueString" : "hrudní chirurgie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracoviště hrudní chirurgie"
    },
    {
      "code" : "trida",
      "valueString" : "hrudní chirurgie"
    },
    {
      "code" : "typ",
      "valueString" : "Ambulantní péče"
    }]
  },
  {
    "code" : "5F1",
    "display" : "std.chirurgie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Chirurgické obory"
    },
    {
      "code" : "kod",
      "valueString" : "5F1"
    },
    {
      "code" : "nazev",
      "valueString" : "std.chirurgie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracov. standard. úst. lůž. péče chirurgické - F typu"
    },
    {
      "code" : "trida",
      "valueString" : "chirurgie"
    },
    {
      "code" : "typ",
      "valueString" : "Standardní péče"
    }]
  },
  {
    "code" : "5F2",
    "display" : "std.dětská chirurgie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Chirurgické obory"
    },
    {
      "code" : "kod",
      "valueString" : "5F2"
    },
    {
      "code" : "nazev",
      "valueString" : "std.dětská chirurgie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracov. standard. úst. lůž. péče dětské chirurgie - F typu"
    },
    {
      "code" : "trida",
      "valueString" : "dětská chirurgie"
    },
    {
      "code" : "typ",
      "valueString" : "Standardní péče"
    }]
  },
  {
    "code" : "5F3",
    "display" : "std.úrazová chirurgie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Chirurgické obory"
    },
    {
      "code" : "kod",
      "valueString" : "5F3"
    },
    {
      "code" : "nazev",
      "valueString" : "std.úrazová chirurgie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracov. standard. úst. lůž. péče úrazové chirurgie - F typu"
    },
    {
      "code" : "trida",
      "valueString" : "úrazová chirurgie"
    },
    {
      "code" : "typ",
      "valueString" : "Standardní péče"
    }]
  },
  {
    "code" : "5F4",
    "display" : "std.cévní chirurgie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Chirurgické obory"
    },
    {
      "code" : "kod",
      "valueString" : "5F4"
    },
    {
      "code" : "nazev",
      "valueString" : "std.cévní chirurgie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracov. standard. úst. lůž. péče cévní chirurgie - F typu"
    },
    {
      "code" : "trida",
      "valueString" : "cévní chirurgie"
    },
    {
      "code" : "typ",
      "valueString" : "Standardní péče"
    }]
  },
  {
    "code" : "5F5",
    "display" : "std.kardiochirurgie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Chirurgické obory"
    },
    {
      "code" : "kod",
      "valueString" : "5F5"
    },
    {
      "code" : "nazev",
      "valueString" : "std.kardiochirurgie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracov. standard. úst. lůž. péče kardiochirurgické - F typu"
    },
    {
      "code" : "trida",
      "valueString" : "kardiochirurgie"
    },
    {
      "code" : "typ",
      "valueString" : "Standardní péče"
    }]
  },
  {
    "code" : "5F6",
    "display" : "std.neurochirurgie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Chirurgické obory"
    },
    {
      "code" : "kod",
      "valueString" : "5F6"
    },
    {
      "code" : "nazev",
      "valueString" : "std.neurochirurgie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracov. standard. úst. lůž. péče neurochirurgické - F typu"
    },
    {
      "code" : "trida",
      "valueString" : "neurochirurgie"
    },
    {
      "code" : "typ",
      "valueString" : "Standardní péče"
    }]
  },
  {
    "code" : "5F7",
    "display" : "std.hrudní chirurgie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Chirurgické obory"
    },
    {
      "code" : "kod",
      "valueString" : "5F7"
    },
    {
      "code" : "nazev",
      "valueString" : "std.hrudní chirurgie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracov. standard. úst. lůž. péče hrudní chirurgie - F typu"
    },
    {
      "code" : "trida",
      "valueString" : "hrudní chirurgie"
    },
    {
      "code" : "typ",
      "valueString" : "Standardní péče"
    }]
  },
  {
    "code" : "5H1",
    "display" : "std.chirurgie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Chirurgické obory"
    },
    {
      "code" : "kod",
      "valueString" : "5H1"
    },
    {
      "code" : "nazev",
      "valueString" : "std.chirurgie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracov. standard. úst. lůž. péče chirurgické - H typu"
    },
    {
      "code" : "trida",
      "valueString" : "chirurgie"
    },
    {
      "code" : "typ",
      "valueString" : "Standardní péče"
    }]
  },
  {
    "code" : "5H2",
    "display" : "std.dětská chirurgie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Chirurgické obory"
    },
    {
      "code" : "kod",
      "valueString" : "5H2"
    },
    {
      "code" : "nazev",
      "valueString" : "std.dětská chirurgie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracov. standard. úst. lůž. péče dětské chirurgie - H typu"
    },
    {
      "code" : "trida",
      "valueString" : "dětská chirurgie"
    },
    {
      "code" : "typ",
      "valueString" : "Standardní péče"
    }]
  },
  {
    "code" : "5H3",
    "display" : "std.úrazová chirurgie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Chirurgické obory"
    },
    {
      "code" : "kod",
      "valueString" : "5H3"
    },
    {
      "code" : "nazev",
      "valueString" : "std.úrazová chirurgie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracov. standard. úst. lůž. péče úrazové chirurgie - H typu"
    },
    {
      "code" : "trida",
      "valueString" : "úrazová chirurgie"
    },
    {
      "code" : "typ",
      "valueString" : "Standardní péče"
    }]
  },
  {
    "code" : "5H4",
    "display" : "std.cévní chirurgie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Chirurgické obory"
    },
    {
      "code" : "kod",
      "valueString" : "5H4"
    },
    {
      "code" : "nazev",
      "valueString" : "std.cévní chirurgie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracov. standard. úst. lůž. péče cévní chirurgie - H typu"
    },
    {
      "code" : "trida",
      "valueString" : "cévní chirurgie"
    },
    {
      "code" : "typ",
      "valueString" : "Standardní péče"
    }]
  },
  {
    "code" : "5H5",
    "display" : "std.kardiochirurgie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Chirurgické obory"
    },
    {
      "code" : "kod",
      "valueString" : "5H5"
    },
    {
      "code" : "nazev",
      "valueString" : "std.kardiochirurgie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracov. standard. úst. lůž. péče kardiochirurgické - H typu"
    },
    {
      "code" : "trida",
      "valueString" : "kardiochirurgie"
    },
    {
      "code" : "typ",
      "valueString" : "Standardní péče"
    }]
  },
  {
    "code" : "5H6",
    "display" : "std.neurochirurgie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Chirurgické obory"
    },
    {
      "code" : "kod",
      "valueString" : "5H6"
    },
    {
      "code" : "nazev",
      "valueString" : "std.neurochirurgie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracov. standard. úst. lůž. péče neurochirurgické - H typu"
    },
    {
      "code" : "trida",
      "valueString" : "neurochirurgie"
    },
    {
      "code" : "typ",
      "valueString" : "Standardní péče"
    }]
  },
  {
    "code" : "5H7",
    "display" : "std.hrudní chirurgie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Chirurgické obory"
    },
    {
      "code" : "kod",
      "valueString" : "5H7"
    },
    {
      "code" : "nazev",
      "valueString" : "std.hrudní chirurgie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracov. standard. úst. lůž. péče hrudní chirurgie - H typu"
    },
    {
      "code" : "trida",
      "valueString" : "hrudní chirurgie"
    },
    {
      "code" : "typ",
      "valueString" : "Standardní péče"
    }]
  },
  {
    "code" : "5I1",
    "display" : "JIP chirurgie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Chirurgické obory"
    },
    {
      "code" : "kod",
      "valueString" : "5I1"
    },
    {
      "code" : "nazev",
      "valueString" : "JIP chirurgie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracov. resusc. a intenz. úst. lůž.péče chirurgické - I typu"
    },
    {
      "code" : "trida",
      "valueString" : "chirurgie"
    },
    {
      "code" : "typ",
      "valueString" : "Intenzivní péče"
    }]
  },
  {
    "code" : "5I2",
    "display" : "JIP dětská chirurgie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Chirurgické obory"
    },
    {
      "code" : "kod",
      "valueString" : "5I2"
    },
    {
      "code" : "nazev",
      "valueString" : "JIP dětská chirurgie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Prac. resusc. a intenz. úst.lůž. péče dět.chirurgie - I typu"
    },
    {
      "code" : "trida",
      "valueString" : "dětská chirurgie"
    },
    {
      "code" : "typ",
      "valueString" : "Intenzivní péče"
    }]
  },
  {
    "code" : "5I3",
    "display" : "JIP úrazová chirur.",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Chirurgické obory"
    },
    {
      "code" : "kod",
      "valueString" : "5I3"
    },
    {
      "code" : "nazev",
      "valueString" : "JIP úrazová chirur."
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracov. resusc. a intenz.úst.lůž.péče úraz. chirur. - I typu"
    },
    {
      "code" : "trida",
      "valueString" : "úrazová chirurgie"
    },
    {
      "code" : "typ",
      "valueString" : "Intenzivní péče"
    }]
  },
  {
    "code" : "5I4",
    "display" : "JIP cévní chirurgie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Chirurgické obory"
    },
    {
      "code" : "kod",
      "valueString" : "5I4"
    },
    {
      "code" : "nazev",
      "valueString" : "JIP cévní chirurgie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Prac.resusc. a intenz. úst. lůž.péče cévní chirurgie- I typu"
    },
    {
      "code" : "trida",
      "valueString" : "cévní chirurgie"
    },
    {
      "code" : "typ",
      "valueString" : "Intenzivní péče"
    }]
  },
  {
    "code" : "5I5",
    "display" : "JIP kardiochirurgie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Chirurgické obory"
    },
    {
      "code" : "kod",
      "valueString" : "5I5"
    },
    {
      "code" : "nazev",
      "valueString" : "JIP kardiochirurgie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracov.resusc. a intenz. úst. lůž. péče kardiochir. - I typu"
    },
    {
      "code" : "trida",
      "valueString" : "kardiochirurgie"
    },
    {
      "code" : "typ",
      "valueString" : "Intenzivní péče"
    }]
  },
  {
    "code" : "5I6",
    "display" : "JIP neurochirurgie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Chirurgické obory"
    },
    {
      "code" : "kod",
      "valueString" : "5I6"
    },
    {
      "code" : "nazev",
      "valueString" : "JIP neurochirurgie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracov. resusc. a intenz. úst. lůž. péče neurochir. - I typu"
    },
    {
      "code" : "trida",
      "valueString" : "neurochirurgie"
    },
    {
      "code" : "typ",
      "valueString" : "Intenzivní péče"
    }]
  },
  {
    "code" : "5I7",
    "display" : "JIP hrudní chirurgie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Chirurgické obory"
    },
    {
      "code" : "kod",
      "valueString" : "5I7"
    },
    {
      "code" : "nazev",
      "valueString" : "JIP hrudní chirurgie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Prac. resusc. a intenz. úst. lůž. péče hrudní chir. - I typu"
    },
    {
      "code" : "trida",
      "valueString" : "hrudní chirurgie"
    },
    {
      "code" : "typ",
      "valueString" : "Intenzivní péče"
    }]
  },
  {
    "code" : "5J1",
    "display" : "jednodenní chirurgie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Chirurgické obory"
    },
    {
      "code" : "kod",
      "valueString" : "5J1"
    },
    {
      "code" : "nazev",
      "valueString" : "jednodenní chirurgie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracoviště jednodenní péče v oboru chirurgie"
    },
    {
      "code" : "trida",
      "valueString" : "chirurgie"
    },
    {
      "code" : "typ",
      "valueString" : "Standardní péče"
    }]
  },
  {
    "code" : "5R1",
    "display" : "sál chirurgie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Chirurgické obory"
    },
    {
      "code" : "kod",
      "valueString" : "5R1"
    },
    {
      "code" : "nazev",
      "valueString" : "sál chirurgie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracoviště-operační sály chirurgie"
    },
    {
      "code" : "trida",
      "valueString" : "chirurgie"
    },
    {
      "code" : "typ",
      "valueString" : "Operační sály a sterilizace"
    }]
  },
  {
    "code" : "5R2",
    "display" : "sál dětská chirurgie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Chirurgické obory"
    },
    {
      "code" : "kod",
      "valueString" : "5R2"
    },
    {
      "code" : "nazev",
      "valueString" : "sál dětská chirurgie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracoviště-operační sály dětské chirurgie"
    },
    {
      "code" : "trida",
      "valueString" : "dětská chirurgie"
    },
    {
      "code" : "typ",
      "valueString" : "Operační sály a sterilizace"
    }]
  },
  {
    "code" : "5R3",
    "display" : "sál úrazová chirurgie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Chirurgické obory"
    },
    {
      "code" : "kod",
      "valueString" : "5R3"
    },
    {
      "code" : "nazev",
      "valueString" : "sál úrazová chirurgie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracoviště-operační sály úrazové chirurgie"
    },
    {
      "code" : "trida",
      "valueString" : "úrazová chirurgie"
    },
    {
      "code" : "typ",
      "valueString" : "Operační sály a sterilizace"
    }]
  },
  {
    "code" : "5R4",
    "display" : "sál cévní chirurgie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Chirurgické obory"
    },
    {
      "code" : "kod",
      "valueString" : "5R4"
    },
    {
      "code" : "nazev",
      "valueString" : "sál cévní chirurgie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracoviště-operační sály cévní chirurgie"
    },
    {
      "code" : "trida",
      "valueString" : "cévní chirurgie"
    },
    {
      "code" : "typ",
      "valueString" : "Operační sály a sterilizace"
    }]
  },
  {
    "code" : "5R5",
    "display" : "sál kardiochirurgie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Chirurgické obory"
    },
    {
      "code" : "kod",
      "valueString" : "5R5"
    },
    {
      "code" : "nazev",
      "valueString" : "sál kardiochirurgie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracoviště-operační sály kardiochirurgie"
    },
    {
      "code" : "trida",
      "valueString" : "kardiochirurgie"
    },
    {
      "code" : "typ",
      "valueString" : "Operační sály a sterilizace"
    }]
  },
  {
    "code" : "5R6",
    "display" : "sál neurochirurgie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Chirurgické obory"
    },
    {
      "code" : "kod",
      "valueString" : "5R6"
    },
    {
      "code" : "nazev",
      "valueString" : "sál neurochirurgie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracoviště-operační sály neurochirurgie"
    },
    {
      "code" : "trida",
      "valueString" : "neurochirurgie"
    },
    {
      "code" : "typ",
      "valueString" : "Operační sály a sterilizace"
    }]
  },
  {
    "code" : "5R7",
    "display" : "sál hrudní chirurgie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Chirurgické obory"
    },
    {
      "code" : "kod",
      "valueString" : "5R7"
    },
    {
      "code" : "nazev",
      "valueString" : "sál hrudní chirurgie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracoviště-operační sály hrudní chirurgie"
    },
    {
      "code" : "trida",
      "valueString" : "hrudní chirurgie"
    },
    {
      "code" : "typ",
      "valueString" : "Operační sály a sterilizace"
    }]
  },
  {
    "code" : "5S1",
    "display" : "hrudní chirurgie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Chirurgické obory"
    },
    {
      "code" : "kod",
      "valueString" : "5S1"
    },
    {
      "code" : "nazev",
      "valueString" : "hrudní chirurgie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracoviště-hrudní chirurgie"
    },
    {
      "code" : "trida",
      "valueString" : "hrudní chirurgie"
    },
    {
      "code" : "typ",
      "valueString" : "Standardní péče"
    }]
  },
  {
    "code" : "5S9",
    "display" : "spinální jednotka",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Chirurgické obory"
    },
    {
      "code" : "kod",
      "valueString" : "5S9"
    },
    {
      "code" : "nazev",
      "valueString" : "spinální jednotka"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracov. poskytující péči na spinálních jednotkách"
    },
    {
      "code" : "trida",
      "valueString" : "spinální jednotka"
    },
    {
      "code" : "typ",
      "valueString" : "Standardní péče"
    }]
  },
  {
    "code" : "5T1",
    "display" : "JIP chirurgie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Chirurgické obory"
    },
    {
      "code" : "kod",
      "valueString" : "5T1"
    },
    {
      "code" : "nazev",
      "valueString" : "JIP chirurgie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracov.resusc. a intenz. úst. lůž. péče chirurgické - T typu"
    },
    {
      "code" : "trida",
      "valueString" : "chirurgie"
    },
    {
      "code" : "typ",
      "valueString" : "Intenzivní péče"
    }]
  },
  {
    "code" : "5T2",
    "display" : "JIP dětská chirurgie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Chirurgické obory"
    },
    {
      "code" : "kod",
      "valueString" : "5T2"
    },
    {
      "code" : "nazev",
      "valueString" : "JIP dětská chirurgie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Prac.resusc. a intenz. úst. lůž. péče dět.chirurgie - T typu"
    },
    {
      "code" : "trida",
      "valueString" : "dětská chirurgie"
    },
    {
      "code" : "typ",
      "valueString" : "Intenzivní péče"
    }]
  },
  {
    "code" : "5T3",
    "display" : "JIP úrazová chirur.",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Chirurgické obory"
    },
    {
      "code" : "kod",
      "valueString" : "5T3"
    },
    {
      "code" : "nazev",
      "valueString" : "JIP úrazová chirur."
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracov. resusc. a intenz.úst.lůž.péče úraz. chirur. - T typu"
    },
    {
      "code" : "trida",
      "valueString" : "úrazová chirurgie"
    },
    {
      "code" : "typ",
      "valueString" : "Intenzivní péče"
    }]
  },
  {
    "code" : "5T4",
    "display" : "JIP cévní chirurgie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Chirurgické obory"
    },
    {
      "code" : "kod",
      "valueString" : "5T4"
    },
    {
      "code" : "nazev",
      "valueString" : "JIP cévní chirurgie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Prac.resusc. a intenz. úst. lůž.péče cévní chirurgie- T typu"
    },
    {
      "code" : "trida",
      "valueString" : "cévní chirurgie"
    },
    {
      "code" : "typ",
      "valueString" : "Intenzivní péče"
    }]
  },
  {
    "code" : "5T5",
    "display" : "JIP kardiochirurgie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Chirurgické obory"
    },
    {
      "code" : "kod",
      "valueString" : "5T5"
    },
    {
      "code" : "nazev",
      "valueString" : "JIP kardiochirurgie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracov.resusc. a intenz. úst. lůž. péče kardiochir. - T typu"
    },
    {
      "code" : "trida",
      "valueString" : "kardiochirurgie"
    },
    {
      "code" : "typ",
      "valueString" : "Intenzivní péče"
    }]
  },
  {
    "code" : "5T6",
    "display" : "JIP neurochirurgie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Chirurgické obory"
    },
    {
      "code" : "kod",
      "valueString" : "5T6"
    },
    {
      "code" : "nazev",
      "valueString" : "JIP neurochirurgie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracov. resusc. a intenz. úst. lůž. péče neurochir. - T typu"
    },
    {
      "code" : "trida",
      "valueString" : "neurochirurgie"
    },
    {
      "code" : "typ",
      "valueString" : "Intenzivní péče"
    }]
  },
  {
    "code" : "5T7",
    "display" : "JIP hrudní chirurgie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Chirurgické obory"
    },
    {
      "code" : "kod",
      "valueString" : "5T7"
    },
    {
      "code" : "nazev",
      "valueString" : "JIP hrudní chirurgie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracov. resusc. a intenz. úst. lůž.péče hrudní chir.- T typu"
    },
    {
      "code" : "trida",
      "valueString" : "hrudní chirurgie"
    },
    {
      "code" : "typ",
      "valueString" : "Intenzivní péče"
    }]
  },
  {
    "code" : "601",
    "display" : "plastická chirurgie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : false
    },
    {
      "code" : "kategorie",
      "valueString" : "Chirurgické obory"
    },
    {
      "code" : "kod",
      "valueString" : "601"
    },
    {
      "code" : "nazev",
      "valueString" : "plastická chirurgie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracoviště plastické chirurgie"
    },
    {
      "code" : "trida",
      "valueString" : "plastická chirurgie"
    },
    {
      "code" : "typ",
      "valueString" : "Ambulantní péče"
    }]
  },
  {
    "code" : "602",
    "display" : "popáleninová medicína",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : false
    },
    {
      "code" : "kategorie",
      "valueString" : "Chirurgické obory"
    },
    {
      "code" : "kod",
      "valueString" : "602"
    },
    {
      "code" : "nazev",
      "valueString" : "popáleninová medicína"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracoviště popáleninové medicíny"
    },
    {
      "code" : "trida",
      "valueString" : "popáleninová medicína"
    },
    {
      "code" : "typ",
      "valueString" : "Ambulantní péče"
    }]
  },
  {
    "code" : "603",
    "display" : "gynekologie a porodnictv",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : false
    },
    {
      "code" : "kategorie",
      "valueString" : "Chirurgické obory"
    },
    {
      "code" : "kod",
      "valueString" : "603"
    },
    {
      "code" : "nazev",
      "valueString" : "gynekologie a porodnictv"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracoviště gynekologie a porodnictví"
    },
    {
      "code" : "trida",
      "valueString" : "gynekologie a porodnictví"
    },
    {
      "code" : "typ",
      "valueString" : "Ambulantní péče"
    }]
  },
  {
    "code" : "604",
    "display" : "dětská gynekologie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : false
    },
    {
      "code" : "kategorie",
      "valueString" : "Chirurgické obory"
    },
    {
      "code" : "kod",
      "valueString" : "604"
    },
    {
      "code" : "nazev",
      "valueString" : "dětská gynekologie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracoviště dětské gynekologie"
    },
    {
      "code" : "trida",
      "valueString" : "dětská gynekologie"
    },
    {
      "code" : "typ",
      "valueString" : "Ambulantní péče"
    }]
  },
  {
    "code" : "605",
    "display" : "čelistní a obličejová ch",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : false
    },
    {
      "code" : "kategorie",
      "valueString" : "Chirurgické obory"
    },
    {
      "code" : "kod",
      "valueString" : "605"
    },
    {
      "code" : "nazev",
      "valueString" : "čelistní a obličejová ch"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracoviště čelistní a obličejové chirurgie"
    },
    {
      "code" : "trida",
      "valueString" : "čelistní a obličejová chirurgie"
    },
    {
      "code" : "typ",
      "valueString" : "Ambulantní péče"
    }]
  },
  {
    "code" : "606",
    "display" : "ortopedie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : false
    },
    {
      "code" : "kategorie",
      "valueString" : "Chirurgické obory"
    },
    {
      "code" : "kod",
      "valueString" : "606"
    },
    {
      "code" : "nazev",
      "valueString" : "ortopedie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracoviště ortopedie"
    },
    {
      "code" : "trida",
      "valueString" : "ortopedie"
    },
    {
      "code" : "typ",
      "valueString" : "Ambulantní péče"
    }]
  },
  {
    "code" : "607",
    "display" : "ortopedická protetika",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : false
    },
    {
      "code" : "kategorie",
      "valueString" : "Chirurgické obory"
    },
    {
      "code" : "kod",
      "valueString" : "607"
    },
    {
      "code" : "nazev",
      "valueString" : "ortopedická protetika"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracoviště ortopedické protetiky"
    },
    {
      "code" : "trida",
      "valueString" : "ortopedická protetika"
    },
    {
      "code" : "typ",
      "valueString" : "Ambulantní péče"
    }]
  },
  {
    "code" : "613",
    "display" : "asistovaná reprodukce",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : false
    },
    {
      "code" : "kategorie",
      "valueString" : "Chirurgické obory"
    },
    {
      "code" : "kod",
      "valueString" : "613"
    },
    {
      "code" : "nazev",
      "valueString" : "asistovaná reprodukce"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracoviště akreditovaného centra asistované reprodukce"
    },
    {
      "code" : "trida",
      "valueString" : "asistovaná reprodukce"
    },
    {
      "code" : "typ",
      "valueString" : "Ambulantní péče"
    }]
  },
  {
    "code" : "6F1",
    "display" : "std.plastická chirurgie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Chirurgické obory"
    },
    {
      "code" : "kod",
      "valueString" : "6F1"
    },
    {
      "code" : "nazev",
      "valueString" : "std.plastická chirurgie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracov. standard. úst. lůž.péče plastické chirurgie - F typu"
    },
    {
      "code" : "trida",
      "valueString" : "plastická chirurgie"
    },
    {
      "code" : "typ",
      "valueString" : "Standardní péče"
    }]
  },
  {
    "code" : "6F2",
    "display" : "std.popáleninová medicín",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Chirurgické obory"
    },
    {
      "code" : "kod",
      "valueString" : "6F2"
    },
    {
      "code" : "nazev",
      "valueString" : "std.popáleninová medicín"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Prac. standard. úst. lůž.péče popáleninové medicíny - F typu"
    },
    {
      "code" : "trida",
      "valueString" : "popáleninová medicína"
    },
    {
      "code" : "typ",
      "valueString" : "Standardní péče"
    }]
  },
  {
    "code" : "6F3",
    "display" : "std.gynekologie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Chirurgické obory"
    },
    {
      "code" : "kod",
      "valueString" : "6F3"
    },
    {
      "code" : "nazev",
      "valueString" : "std.gynekologie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracov. standard. úst. lůž. péče gynekologické - F typu"
    },
    {
      "code" : "trida",
      "valueString" : "gynekologie a porodnictví"
    },
    {
      "code" : "typ",
      "valueString" : "Standardní péče"
    }]
  },
  {
    "code" : "6F4",
    "display" : "std.dětská gynekologie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Chirurgické obory"
    },
    {
      "code" : "kod",
      "valueString" : "6F4"
    },
    {
      "code" : "nazev",
      "valueString" : "std.dětská gynekologie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracov. standard. úst. lůž. péče dětské gynekologie - F typu"
    },
    {
      "code" : "trida",
      "valueString" : "dětská gynekologie"
    },
    {
      "code" : "typ",
      "valueString" : "Standardní péče"
    }]
  },
  {
    "code" : "6F5",
    "display" : "std.stomatochirurgie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Chirurgické obory"
    },
    {
      "code" : "kod",
      "valueString" : "6F5"
    },
    {
      "code" : "nazev",
      "valueString" : "std.stomatochirurgie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Prac.stand.úst.lůž.péče stomatochir.a čelist.ortop. - F typu"
    },
    {
      "code" : "trida",
      "valueString" : "čelistní a obličejová chirurgie"
    },
    {
      "code" : "typ",
      "valueString" : "Standardní péče"
    }]
  },
  {
    "code" : "6F6",
    "display" : "std.ortopedie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Chirurgické obory"
    },
    {
      "code" : "kod",
      "valueString" : "6F6"
    },
    {
      "code" : "nazev",
      "valueString" : "std.ortopedie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracov. standardní ústavní lůž. péče ortopedické - F typu"
    },
    {
      "code" : "trida",
      "valueString" : "ortopedie"
    },
    {
      "code" : "typ",
      "valueString" : "Standardní péče"
    }]
  },
  {
    "code" : "6F7",
    "display" : "std.ortopedická protetik",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Chirurgické obory"
    },
    {
      "code" : "kod",
      "valueString" : "6F7"
    },
    {
      "code" : "nazev",
      "valueString" : "std.ortopedická protetik"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Prac.standard. úst. lůž. péče ortopedické protetiky - F typu"
    },
    {
      "code" : "trida",
      "valueString" : "ortopedická protetika"
    },
    {
      "code" : "typ",
      "valueString" : "Standardní péče"
    }]
  },
  {
    "code" : "6H1",
    "display" : "std.plastická chirurgie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Chirurgické obory"
    },
    {
      "code" : "kod",
      "valueString" : "6H1"
    },
    {
      "code" : "nazev",
      "valueString" : "std.plastická chirurgie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Prac. standard. úst. lůž. péče plastické chirurgie - H typu"
    },
    {
      "code" : "trida",
      "valueString" : "plastická chirurgie"
    },
    {
      "code" : "typ",
      "valueString" : "Standardní péče"
    }]
  },
  {
    "code" : "6H2",
    "display" : "std.popáleninová medicín",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Chirurgické obory"
    },
    {
      "code" : "kod",
      "valueString" : "6H2"
    },
    {
      "code" : "nazev",
      "valueString" : "std.popáleninová medicín"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Prac.standard. úst. lůž. péče popáleninové medicíny - H typu"
    },
    {
      "code" : "trida",
      "valueString" : "popáleninová medicína"
    },
    {
      "code" : "typ",
      "valueString" : "Standardní péče"
    }]
  },
  {
    "code" : "6H3",
    "display" : "std.gynekologie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Chirurgické obory"
    },
    {
      "code" : "kod",
      "valueString" : "6H3"
    },
    {
      "code" : "nazev",
      "valueString" : "std.gynekologie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracov. standard. úst. lůž. péče gynekologické - H typu"
    },
    {
      "code" : "trida",
      "valueString" : "gynekologie a porodnictví"
    },
    {
      "code" : "typ",
      "valueString" : "Standardní péče"
    }]
  },
  {
    "code" : "6H4",
    "display" : "std.dětská gynekologie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Chirurgické obory"
    },
    {
      "code" : "kod",
      "valueString" : "6H4"
    },
    {
      "code" : "nazev",
      "valueString" : "std.dětská gynekologie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracov. standard. úst. lůž. péče dětské gynekologie - H typu"
    },
    {
      "code" : "trida",
      "valueString" : "dětská gynekologie"
    },
    {
      "code" : "typ",
      "valueString" : "Standardní péče"
    }]
  },
  {
    "code" : "6H6",
    "display" : "std.ortopedie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Chirurgické obory"
    },
    {
      "code" : "kod",
      "valueString" : "6H6"
    },
    {
      "code" : "nazev",
      "valueString" : "std.ortopedie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracov. standardní ústavní lůžkové péče ortopedické - H typu"
    },
    {
      "code" : "trida",
      "valueString" : "ortopedie"
    },
    {
      "code" : "typ",
      "valueString" : "Standardní péče"
    }]
  },
  {
    "code" : "6H7",
    "display" : "std.ortopedická protetik",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Chirurgické obory"
    },
    {
      "code" : "kod",
      "valueString" : "6H7"
    },
    {
      "code" : "nazev",
      "valueString" : "std.ortopedická protetik"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Prac.standard. úst. lůž. péče ortopedické protetiky - H typu"
    },
    {
      "code" : "trida",
      "valueString" : "ortopedická protetika"
    },
    {
      "code" : "typ",
      "valueString" : "Standardní péče"
    }]
  },
  {
    "code" : "6I1",
    "display" : "JIP plastická chirurgie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Chirurgické obory"
    },
    {
      "code" : "kod",
      "valueString" : "6I1"
    },
    {
      "code" : "nazev",
      "valueString" : "JIP plastická chirurgie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Prac. resusc. a intenz.úst.lůž.péče plastic.chirur. - I typu"
    },
    {
      "code" : "trida",
      "valueString" : "plastická chirurgie"
    },
    {
      "code" : "typ",
      "valueString" : "Intenzivní péče"
    }]
  },
  {
    "code" : "6I2",
    "display" : "JIP popáleninová medicín",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Chirurgické obory"
    },
    {
      "code" : "kod",
      "valueString" : "6I2"
    },
    {
      "code" : "nazev",
      "valueString" : "JIP popáleninová medicín"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Prac.resusc. a intenz.úst.lůž.péče popálen.medicín. - I typu"
    },
    {
      "code" : "trida",
      "valueString" : "popáleninová medicína"
    },
    {
      "code" : "typ",
      "valueString" : "Intenzivní péče"
    }]
  },
  {
    "code" : "6I3",
    "display" : "JIP gynekologie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Chirurgické obory"
    },
    {
      "code" : "kod",
      "valueString" : "6I3"
    },
    {
      "code" : "nazev",
      "valueString" : "JIP gynekologie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Prac. resusc. a intenz. úst.lůž. péče gynekologické - I typu"
    },
    {
      "code" : "trida",
      "valueString" : "gynekologie a porodnictví"
    },
    {
      "code" : "typ",
      "valueString" : "Intenzivní péče"
    }]
  },
  {
    "code" : "6I4",
    "display" : "JIP dětská gynekologie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Chirurgické obory"
    },
    {
      "code" : "kod",
      "valueString" : "6I4"
    },
    {
      "code" : "nazev",
      "valueString" : "JIP dětská gynekologie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Prac.resusc. a intenz.úst.lůž. péče dětské gynekol. - I typu"
    },
    {
      "code" : "trida",
      "valueString" : "dětská gynekologie"
    },
    {
      "code" : "typ",
      "valueString" : "Intenzivní péče"
    }]
  },
  {
    "code" : "6I5",
    "display" : "JIP stomatochirurgie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Chirurgické obory"
    },
    {
      "code" : "kod",
      "valueString" : "6I5"
    },
    {
      "code" : "nazev",
      "valueString" : "JIP stomatochirurgie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Prac. intenz.úst.lůž. péče stomatoch.a čelis.ortop.-I typu"
    },
    {
      "code" : "trida",
      "valueString" : "čelistní a obličejová chirurgie"
    },
    {
      "code" : "typ",
      "valueString" : "Intenzivní péče"
    }]
  },
  {
    "code" : "6I6",
    "display" : "JIP ortopedie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Chirurgické obory"
    },
    {
      "code" : "kod",
      "valueString" : "6I6"
    },
    {
      "code" : "nazev",
      "valueString" : "JIP ortopedie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Prac. resusc. a intenz. úst. lůž. péče ortopedické - I typu"
    },
    {
      "code" : "trida",
      "valueString" : "ortopedie"
    },
    {
      "code" : "typ",
      "valueString" : "Intenzivní péče"
    }]
  },
  {
    "code" : "6J1",
    "display" : "jednodenní plastická chi",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Chirurgické obory"
    },
    {
      "code" : "kod",
      "valueString" : "6J1"
    },
    {
      "code" : "nazev",
      "valueString" : "jednodenní plastická chi"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracoviště jednodenní péče v oboru plastické chirurgie"
    },
    {
      "code" : "trida",
      "valueString" : "plastická chirurgie"
    },
    {
      "code" : "typ",
      "valueString" : "Standardní péče"
    }]
  },
  {
    "code" : "6J3",
    "display" : "jednodenní gynekologie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Chirurgické obory"
    },
    {
      "code" : "kod",
      "valueString" : "6J3"
    },
    {
      "code" : "nazev",
      "valueString" : "jednodenní gynekologie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracoviště jednodenní péče v oboru gynekologie"
    },
    {
      "code" : "trida",
      "valueString" : "gynekologie a porodnictví"
    },
    {
      "code" : "typ",
      "valueString" : "Standardní péče"
    }]
  },
  {
    "code" : "6J6",
    "display" : "jednodenní ortopedie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Chirurgické obory"
    },
    {
      "code" : "kod",
      "valueString" : "6J6"
    },
    {
      "code" : "nazev",
      "valueString" : "jednodenní ortopedie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracoviště jednodenní péče v oboru ortopedie"
    },
    {
      "code" : "trida",
      "valueString" : "ortopedie"
    },
    {
      "code" : "typ",
      "valueString" : "Standardní péče"
    }]
  },
  {
    "code" : "6P3",
    "display" : "intermediár porodnictví",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Chirurgické obory"
    },
    {
      "code" : "kod",
      "valueString" : "6P3"
    },
    {
      "code" : "nazev",
      "valueString" : "intermediár porodnictví"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracoviště intenz. a intermediární úst.lůž. porodnické péče"
    },
    {
      "code" : "trida",
      "valueString" : "intermediár porodnictví"
    },
    {
      "code" : "typ",
      "valueString" : "Intenzivní péče"
    }]
  },
  {
    "code" : "6R1",
    "display" : "sál plastická chirurgie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Chirurgické obory"
    },
    {
      "code" : "kod",
      "valueString" : "6R1"
    },
    {
      "code" : "nazev",
      "valueString" : "sál plastická chirurgie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracovište-operační sály plastické chirurgie"
    },
    {
      "code" : "trida",
      "valueString" : "plastická chirurgie"
    },
    {
      "code" : "typ",
      "valueString" : "Operační sály a sterilizace"
    }]
  },
  {
    "code" : "6R2",
    "display" : "sál popáleninová medicín",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Chirurgické obory"
    },
    {
      "code" : "kod",
      "valueString" : "6R2"
    },
    {
      "code" : "nazev",
      "valueString" : "sál popáleninová medicín"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracovište-operační sály popáleninové medicíny"
    },
    {
      "code" : "trida",
      "valueString" : "popáleninová medicína"
    },
    {
      "code" : "typ",
      "valueString" : "Operační sály a sterilizace"
    }]
  },
  {
    "code" : "6R3",
    "display" : "sál gynekologie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Chirurgické obory"
    },
    {
      "code" : "kod",
      "valueString" : "6R3"
    },
    {
      "code" : "nazev",
      "valueString" : "sál gynekologie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracovište-operační sály gynekologie"
    },
    {
      "code" : "trida",
      "valueString" : "gynekologie a porodnictví"
    },
    {
      "code" : "typ",
      "valueString" : "Operační sály a sterilizace"
    }]
  },
  {
    "code" : "6R4",
    "display" : "sál dětská gynekologie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Chirurgické obory"
    },
    {
      "code" : "kod",
      "valueString" : "6R4"
    },
    {
      "code" : "nazev",
      "valueString" : "sál dětská gynekologie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracovište-operační sály dětské gynekologie"
    },
    {
      "code" : "trida",
      "valueString" : "dětská gynekologie"
    },
    {
      "code" : "typ",
      "valueString" : "Operační sály a sterilizace"
    }]
  },
  {
    "code" : "6R5",
    "display" : "sál stomatochirurgie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Chirurgické obory"
    },
    {
      "code" : "kod",
      "valueString" : "6R5"
    },
    {
      "code" : "nazev",
      "valueString" : "sál stomatochirurgie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracovište-operační sály stomatochirurgie a čelist.ortopedie"
    },
    {
      "code" : "trida",
      "valueString" : "čelistní a obličejová chirurgie"
    },
    {
      "code" : "typ",
      "valueString" : "Operační sály a sterilizace"
    }]
  },
  {
    "code" : "6R6",
    "display" : "sál ortopedie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Chirurgické obory"
    },
    {
      "code" : "kod",
      "valueString" : "6R6"
    },
    {
      "code" : "nazev",
      "valueString" : "sál ortopedie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracovište-operační sály ortopedie"
    },
    {
      "code" : "trida",
      "valueString" : "ortopedie"
    },
    {
      "code" : "typ",
      "valueString" : "Operační sály a sterilizace"
    }]
  },
  {
    "code" : "6T1",
    "display" : "JIP plastická chirurgie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Chirurgické obory"
    },
    {
      "code" : "kod",
      "valueString" : "6T1"
    },
    {
      "code" : "nazev",
      "valueString" : "JIP plastická chirurgie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Prac.resusc. a intenz. úst.lůž.péče plastic.chirur. - T typu"
    },
    {
      "code" : "trida",
      "valueString" : "plastická chirurgie"
    },
    {
      "code" : "typ",
      "valueString" : "Intenzivní péče"
    }]
  },
  {
    "code" : "6T2",
    "display" : "JIP popáleninová medicín",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Chirurgické obory"
    },
    {
      "code" : "kod",
      "valueString" : "6T2"
    },
    {
      "code" : "nazev",
      "valueString" : "JIP popáleninová medicín"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Prac.resusc. a intenz.úst.lůž.péče popálen.medicín. - T typu"
    },
    {
      "code" : "trida",
      "valueString" : "popáleninová medicína"
    },
    {
      "code" : "typ",
      "valueString" : "Intenzivní péče"
    }]
  },
  {
    "code" : "6T3",
    "display" : "JIP gynekologie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Chirurgické obory"
    },
    {
      "code" : "kod",
      "valueString" : "6T3"
    },
    {
      "code" : "nazev",
      "valueString" : "JIP gynekologie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Prac. resusc. a intenz. úst.lůž. péče gynekologické - T typu"
    },
    {
      "code" : "trida",
      "valueString" : "gynekologie a porodnictví"
    },
    {
      "code" : "typ",
      "valueString" : "Intenzivní péče"
    }]
  },
  {
    "code" : "6T4",
    "display" : "JIP dětská gynekologie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Chirurgické obory"
    },
    {
      "code" : "kod",
      "valueString" : "6T4"
    },
    {
      "code" : "nazev",
      "valueString" : "JIP dětská gynekologie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Prac.resusc. a intenz. úst.lůž.péče dětské gynekol. - T typu"
    },
    {
      "code" : "trida",
      "valueString" : "dětská gynekologie"
    },
    {
      "code" : "typ",
      "valueString" : "Intenzivní péče"
    }]
  },
  {
    "code" : "6T5",
    "display" : "JIP stomatochirurgie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Chirurgické obory"
    },
    {
      "code" : "kod",
      "valueString" : "6T5"
    },
    {
      "code" : "nazev",
      "valueString" : "JIP stomatochirurgie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Prac. res.a inten.úst.lůž.péče stomatoch.a čelis.ortop.-T t."
    },
    {
      "code" : "trida",
      "valueString" : "čelistní a obličejová chirurgie"
    },
    {
      "code" : "typ",
      "valueString" : "Intenzivní péče"
    }]
  },
  {
    "code" : "6T6",
    "display" : "JIP ortopedie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Chirurgické obory"
    },
    {
      "code" : "kod",
      "valueString" : "6T6"
    },
    {
      "code" : "nazev",
      "valueString" : "JIP ortopedie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracov. resusc. a intenz. úst.lůž. péče ortopedické - T typu"
    },
    {
      "code" : "trida",
      "valueString" : "ortopedie"
    },
    {
      "code" : "typ",
      "valueString" : "Intenzivní péče"
    }]
  },
  {
    "code" : "701",
    "display" : "otorinolaryngologie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : false
    },
    {
      "code" : "kategorie",
      "valueString" : "Chirurgické obory"
    },
    {
      "code" : "kod",
      "valueString" : "701"
    },
    {
      "code" : "nazev",
      "valueString" : "otorinolaryngologie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracoviště otorinolaryngologie"
    },
    {
      "code" : "trida",
      "valueString" : "otorinolaryngologie"
    },
    {
      "code" : "typ",
      "valueString" : "Ambulantní péče"
    }]
  },
  {
    "code" : "702",
    "display" : "foniatrie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : false
    },
    {
      "code" : "kategorie",
      "valueString" : "Chirurgické obory"
    },
    {
      "code" : "kod",
      "valueString" : "702"
    },
    {
      "code" : "nazev",
      "valueString" : "foniatrie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracoviště foniatrie"
    },
    {
      "code" : "trida",
      "valueString" : "foniatrie"
    },
    {
      "code" : "typ",
      "valueString" : "Ambulantní péče"
    }]
  },
  {
    "code" : "703",
    "display" : "audiologie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : false
    },
    {
      "code" : "kategorie",
      "valueString" : "Chirurgické obory"
    },
    {
      "code" : "kod",
      "valueString" : "703"
    },
    {
      "code" : "nazev",
      "valueString" : "audiologie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracoviště audiologie"
    },
    {
      "code" : "trida",
      "valueString" : "audiologie"
    },
    {
      "code" : "typ",
      "valueString" : "Ambulantní péče"
    }]
  },
  {
    "code" : "704",
    "display" : "dětská otorinolaryngolog",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : false
    },
    {
      "code" : "kategorie",
      "valueString" : "Chirurgické obory"
    },
    {
      "code" : "kod",
      "valueString" : "704"
    },
    {
      "code" : "nazev",
      "valueString" : "dětská otorinolaryngolog"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracoviště dětské otorinolaryngologie"
    },
    {
      "code" : "trida",
      "valueString" : "dětská otorinolaryngologie"
    },
    {
      "code" : "typ",
      "valueString" : "Ambulantní péče"
    }]
  },
  {
    "code" : "705",
    "display" : "oftalmologie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : false
    },
    {
      "code" : "kategorie",
      "valueString" : "Chirurgické obory"
    },
    {
      "code" : "kod",
      "valueString" : "705"
    },
    {
      "code" : "nazev",
      "valueString" : "oftalmologie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracoviště oftalmologie"
    },
    {
      "code" : "trida",
      "valueString" : "oftalmologie"
    },
    {
      "code" : "typ",
      "valueString" : "Ambulantní péče"
    }]
  },
  {
    "code" : "706",
    "display" : "urologie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : false
    },
    {
      "code" : "kategorie",
      "valueString" : "Chirurgické obory"
    },
    {
      "code" : "kod",
      "valueString" : "706"
    },
    {
      "code" : "nazev",
      "valueString" : "urologie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracoviště urologie"
    },
    {
      "code" : "trida",
      "valueString" : "urologie"
    },
    {
      "code" : "typ",
      "valueString" : "Ambulantní péče"
    }]
  },
  {
    "code" : "707",
    "display" : "dětská urologie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : false
    },
    {
      "code" : "kategorie",
      "valueString" : "Chirurgické obory"
    },
    {
      "code" : "kod",
      "valueString" : "707"
    },
    {
      "code" : "nazev",
      "valueString" : "dětská urologie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracoviště dětské urologie"
    },
    {
      "code" : "trida",
      "valueString" : "dětská urologie"
    },
    {
      "code" : "typ",
      "valueString" : "Ambulantní péče"
    }]
  },
  {
    "code" : "708",
    "display" : "anesteziologie-resuscita",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : false
    },
    {
      "code" : "kategorie",
      "valueString" : "Chirurgické obory"
    },
    {
      "code" : "kod",
      "valueString" : "708"
    },
    {
      "code" : "nazev",
      "valueString" : "anesteziologie-resuscita"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracoviště anesteziologicko - resuscitační"
    },
    {
      "code" : "trida",
      "valueString" : "anesteziologie-resuscitace"
    },
    {
      "code" : "typ",
      "valueString" : "Ambulantní péče"
    }]
  },
  {
    "code" : "709",
    "display" : "zdravotnická záchranná s",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : false
    },
    {
      "code" : "kategorie",
      "valueString" : "Chirurgické obory"
    },
    {
      "code" : "kod",
      "valueString" : "709"
    },
    {
      "code" : "nazev",
      "valueString" : "zdravotnická záchranná s"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracoviště zdravotnické záchranné služby (RZP+RLP)"
    },
    {
      "code" : "trida",
      "valueString" : "zdravotnická záchranná služba"
    },
    {
      "code" : "typ",
      "valueString" : "Ambulantní péče"
    }]
  },
  {
    "code" : "7D8",
    "display" : "dlhd.intenzivní péče",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Chirurgické obory"
    },
    {
      "code" : "kod",
      "valueString" : "7D8"
    },
    {
      "code" : "nazev",
      "valueString" : "dlhd.intenzivní péče"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracoviště dlouhodobé intenzivní péče (DIP)"
    },
    {
      "code" : "trida",
      "valueString" : "anesteziologie-resuscitace"
    },
    {
      "code" : "typ",
      "valueString" : "Dlouhodobá péče"
    }]
  },
  {
    "code" : "7F1",
    "display" : "std.ORL",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Chirurgické obory"
    },
    {
      "code" : "kod",
      "valueString" : "7F1"
    },
    {
      "code" : "nazev",
      "valueString" : "std.ORL"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracoviště standardní ústavní lůžkové péče ORL - F typu"
    },
    {
      "code" : "trida",
      "valueString" : "otorinolaryngologie"
    },
    {
      "code" : "typ",
      "valueString" : "Standardní péče"
    }]
  },
  {
    "code" : "7F2",
    "display" : "std.foniatrie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Chirurgické obory"
    },
    {
      "code" : "kod",
      "valueString" : "7F2"
    },
    {
      "code" : "nazev",
      "valueString" : "std.foniatrie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracov. standardní ústavní lůžkové péče foniatrické - F typu"
    },
    {
      "code" : "trida",
      "valueString" : "foniatrie"
    },
    {
      "code" : "typ",
      "valueString" : "Standardní péče"
    }]
  },
  {
    "code" : "7F4",
    "display" : "std.dětská ORL",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Chirurgické obory"
    },
    {
      "code" : "kod",
      "valueString" : "7F4"
    },
    {
      "code" : "nazev",
      "valueString" : "std.dětská ORL"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracov. standardní ústavní lůžkové péče dětské ORL - F typu"
    },
    {
      "code" : "trida",
      "valueString" : "dětská otorinolaryngologie"
    },
    {
      "code" : "typ",
      "valueString" : "Standardní péče"
    }]
  },
  {
    "code" : "7F5",
    "display" : "std.oftalmologie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Chirurgické obory"
    },
    {
      "code" : "kod",
      "valueString" : "7F5"
    },
    {
      "code" : "nazev",
      "valueString" : "std.oftalmologie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Prac. standard. ústavní lůžkové péče oftalmologické - F typu"
    },
    {
      "code" : "trida",
      "valueString" : "oftalmologie"
    },
    {
      "code" : "typ",
      "valueString" : "Standardní péče"
    }]
  },
  {
    "code" : "7F6",
    "display" : "std.urologie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Chirurgické obory"
    },
    {
      "code" : "kod",
      "valueString" : "7F6"
    },
    {
      "code" : "nazev",
      "valueString" : "std.urologie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracov. standardní ústavní lůžkové péče urologické - F typu"
    },
    {
      "code" : "trida",
      "valueString" : "urologie"
    },
    {
      "code" : "typ",
      "valueString" : "Standardní péče"
    }]
  },
  {
    "code" : "7F7",
    "display" : "std.dětská urologie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Chirurgické obory"
    },
    {
      "code" : "kod",
      "valueString" : "7F7"
    },
    {
      "code" : "nazev",
      "valueString" : "std.dětská urologie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Prac. standard. ústav. lůžkové péče dětské urologie - F typu"
    },
    {
      "code" : "trida",
      "valueString" : "dětská urologie"
    },
    {
      "code" : "typ",
      "valueString" : "Standardní péče"
    }]
  },
  {
    "code" : "7H1",
    "display" : "std.ORL",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Chirurgické obory"
    },
    {
      "code" : "kod",
      "valueString" : "7H1"
    },
    {
      "code" : "nazev",
      "valueString" : "std.ORL"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracov. standardní ústavní lůžkové péče ORL - H typu"
    },
    {
      "code" : "trida",
      "valueString" : "otorinolaryngologie"
    },
    {
      "code" : "typ",
      "valueString" : "Standardní péče"
    }]
  },
  {
    "code" : "7H2",
    "display" : "std.foniatrie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Chirurgické obory"
    },
    {
      "code" : "kod",
      "valueString" : "7H2"
    },
    {
      "code" : "nazev",
      "valueString" : "std.foniatrie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracov. standardní ústavní lůžkové péče foniatrické - H typu"
    },
    {
      "code" : "trida",
      "valueString" : "foniatrie"
    },
    {
      "code" : "typ",
      "valueString" : "Standardní péče"
    }]
  },
  {
    "code" : "7H4",
    "display" : "std.dětské ORL",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Chirurgické obory"
    },
    {
      "code" : "kod",
      "valueString" : "7H4"
    },
    {
      "code" : "nazev",
      "valueString" : "std.dětské ORL"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracov. standardní ústavní lůžkové péče dětské ORL - H typu"
    },
    {
      "code" : "trida",
      "valueString" : "dětská otorinolaryngologie"
    },
    {
      "code" : "typ",
      "valueString" : "Standardní péče"
    }]
  },
  {
    "code" : "7H5",
    "display" : "std.oftalmologie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Chirurgické obory"
    },
    {
      "code" : "kod",
      "valueString" : "7H5"
    },
    {
      "code" : "nazev",
      "valueString" : "std.oftalmologie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Prac. standard. ústavní lůžkové péče oftalmologické - H typu"
    },
    {
      "code" : "trida",
      "valueString" : "oftalmologie"
    },
    {
      "code" : "typ",
      "valueString" : "Standardní péče"
    }]
  },
  {
    "code" : "7H6",
    "display" : "std.urologie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Chirurgické obory"
    },
    {
      "code" : "kod",
      "valueString" : "7H6"
    },
    {
      "code" : "nazev",
      "valueString" : "std.urologie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracov. standardní ústavní lůžkové péče urologické - H typu"
    },
    {
      "code" : "trida",
      "valueString" : "urologie"
    },
    {
      "code" : "typ",
      "valueString" : "Standardní péče"
    }]
  },
  {
    "code" : "7H7",
    "display" : "std.dětská urologie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Chirurgické obory"
    },
    {
      "code" : "kod",
      "valueString" : "7H7"
    },
    {
      "code" : "nazev",
      "valueString" : "std.dětská urologie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracov. standard. ústav. lůž. péče dětské urologie - H typu"
    },
    {
      "code" : "trida",
      "valueString" : "dětská urologie"
    },
    {
      "code" : "typ",
      "valueString" : "Standardní péče"
    }]
  },
  {
    "code" : "7I1",
    "display" : "JIP lůžková péče ORL",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Chirurgické obory"
    },
    {
      "code" : "kod",
      "valueString" : "7I1"
    },
    {
      "code" : "nazev",
      "valueString" : "JIP lůžková péče ORL"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracov. resusc. a intenz. ústav. lůžkové péče ORL - I typu"
    },
    {
      "code" : "trida",
      "valueString" : "otorinolaryngologie"
    },
    {
      "code" : "typ",
      "valueString" : "Intenzivní péče"
    }]
  },
  {
    "code" : "7I4",
    "display" : "JIP dětská ORL",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Chirurgické obory"
    },
    {
      "code" : "kod",
      "valueString" : "7I4"
    },
    {
      "code" : "nazev",
      "valueString" : "JIP dětská ORL"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracov. resusc. a intenz. úst. lůž. péče dětské ORL - I typu"
    },
    {
      "code" : "trida",
      "valueString" : "dětská otorinolaryngologie"
    },
    {
      "code" : "typ",
      "valueString" : "Intenzivní péče"
    }]
  },
  {
    "code" : "7I6",
    "display" : "JIP urologie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Chirurgické obory"
    },
    {
      "code" : "kod",
      "valueString" : "7I6"
    },
    {
      "code" : "nazev",
      "valueString" : "JIP urologie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracov.resusc. a intenz. ústav. lůž.péče urologické - I typu"
    },
    {
      "code" : "trida",
      "valueString" : "urologie"
    },
    {
      "code" : "typ",
      "valueString" : "Intenzivní péče"
    }]
  },
  {
    "code" : "7I7",
    "display" : "JIP dětská urologie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Chirurgické obory"
    },
    {
      "code" : "kod",
      "valueString" : "7I7"
    },
    {
      "code" : "nazev",
      "valueString" : "JIP dětská urologie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracov.resusc. a intenz. úst. lůž.péče dět.urologie - I typu"
    },
    {
      "code" : "trida",
      "valueString" : "dětská urologie"
    },
    {
      "code" : "typ",
      "valueString" : "Intenzivní péče"
    }]
  },
  {
    "code" : "7I8",
    "display" : "ARO",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Chirurgické obory"
    },
    {
      "code" : "kod",
      "valueString" : "7I8"
    },
    {
      "code" : "nazev",
      "valueString" : "ARO"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracov. resuscitační ústavní lůžkové péče - ARO - I typu"
    },
    {
      "code" : "trida",
      "valueString" : "anesteziologie-resuscitace"
    },
    {
      "code" : "typ",
      "valueString" : "Intenzivní péče"
    }]
  },
  {
    "code" : "7J1",
    "display" : "jednodenní ORL",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Chirurgické obory"
    },
    {
      "code" : "kod",
      "valueString" : "7J1"
    },
    {
      "code" : "nazev",
      "valueString" : "jednodenní ORL"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracoviště jednodenní péče v oboru ORL"
    },
    {
      "code" : "trida",
      "valueString" : "otorinolaryngologie"
    },
    {
      "code" : "typ",
      "valueString" : "Standardní péče"
    }]
  },
  {
    "code" : "7J6",
    "display" : "jednodenní urologie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Chirurgické obory"
    },
    {
      "code" : "kod",
      "valueString" : "7J6"
    },
    {
      "code" : "nazev",
      "valueString" : "jednodenní urologie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracoviště jednodenní péče v oboru urologie"
    },
    {
      "code" : "trida",
      "valueString" : "urologie"
    },
    {
      "code" : "typ",
      "valueString" : "Standardní péče"
    }]
  },
  {
    "code" : "7R1",
    "display" : "sál ORL",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Chirurgické obory"
    },
    {
      "code" : "kod",
      "valueString" : "7R1"
    },
    {
      "code" : "nazev",
      "valueString" : "sál ORL"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracoviště-operační sály ORL"
    },
    {
      "code" : "trida",
      "valueString" : "otorinolaryngologie"
    },
    {
      "code" : "typ",
      "valueString" : "Operační sály a sterilizace"
    }]
  },
  {
    "code" : "7R5",
    "display" : "sál oftalmologie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Chirurgické obory"
    },
    {
      "code" : "kod",
      "valueString" : "7R5"
    },
    {
      "code" : "nazev",
      "valueString" : "sál oftalmologie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracoviště-operační sály oftalmologie"
    },
    {
      "code" : "trida",
      "valueString" : "oftalmologie"
    },
    {
      "code" : "typ",
      "valueString" : "Operační sály a sterilizace"
    }]
  },
  {
    "code" : "7R6",
    "display" : "sál urologie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Chirurgické obory"
    },
    {
      "code" : "kod",
      "valueString" : "7R6"
    },
    {
      "code" : "nazev",
      "valueString" : "sál urologie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracoviště-operační sály urologie"
    },
    {
      "code" : "trida",
      "valueString" : "urologie"
    },
    {
      "code" : "typ",
      "valueString" : "Operační sály a sterilizace"
    }]
  },
  {
    "code" : "7R7",
    "display" : "sál dětská urologie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Chirurgické obory"
    },
    {
      "code" : "kod",
      "valueString" : "7R7"
    },
    {
      "code" : "nazev",
      "valueString" : "sál dětská urologie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracoviště-operační sály dětské urologie"
    },
    {
      "code" : "trida",
      "valueString" : "dětská urologie"
    },
    {
      "code" : "typ",
      "valueString" : "Operační sály a sterilizace"
    }]
  },
  {
    "code" : "7T1",
    "display" : "JIP ORL",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Chirurgické obory"
    },
    {
      "code" : "kod",
      "valueString" : "7T1"
    },
    {
      "code" : "nazev",
      "valueString" : "JIP ORL"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracov. resusc. a intenz. ústav. lůžkové péče ORL - T typu"
    },
    {
      "code" : "trida",
      "valueString" : "otorinolaryngologie"
    },
    {
      "code" : "typ",
      "valueString" : "Intenzivní péče"
    }]
  },
  {
    "code" : "7T4",
    "display" : "JIP dětská ORL",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Chirurgické obory"
    },
    {
      "code" : "kod",
      "valueString" : "7T4"
    },
    {
      "code" : "nazev",
      "valueString" : "JIP dětská ORL"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracov. resusc. a intenz. úst. lůž. péče dětské ORL - T typu"
    },
    {
      "code" : "trida",
      "valueString" : "dětská otorinolaryngologie"
    },
    {
      "code" : "typ",
      "valueString" : "Intenzivní péče"
    }]
  },
  {
    "code" : "7T6",
    "display" : "JIP urologie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Chirurgické obory"
    },
    {
      "code" : "kod",
      "valueString" : "7T6"
    },
    {
      "code" : "nazev",
      "valueString" : "JIP urologie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracov. resusc. a intenz. úst. lůž. péče urologické - T typu"
    },
    {
      "code" : "trida",
      "valueString" : "urologie"
    },
    {
      "code" : "typ",
      "valueString" : "Intenzivní péče"
    }]
  },
  {
    "code" : "7T7",
    "display" : "JIP dětská urologie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Chirurgické obory"
    },
    {
      "code" : "kod",
      "valueString" : "7T7"
    },
    {
      "code" : "nazev",
      "valueString" : "JIP dětská urologie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracov.resusc. a intenz. úst. lůž.péče dět.urologie - T typu"
    },
    {
      "code" : "trida",
      "valueString" : "dětská urologie"
    },
    {
      "code" : "typ",
      "valueString" : "Intenzivní péče"
    }]
  },
  {
    "code" : "7T8",
    "display" : "ARO",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Chirurgické obory"
    },
    {
      "code" : "kod",
      "valueString" : "7T8"
    },
    {
      "code" : "nazev",
      "valueString" : "ARO"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracov. resuscitační ústavní lůžkové péče - ARO - T typu"
    },
    {
      "code" : "trida",
      "valueString" : "anesteziologie-resuscitace"
    },
    {
      "code" : "typ",
      "valueString" : "Intenzivní péče"
    }]
  },
  {
    "code" : "7U4",
    "display" : "dlhd.dětská ORL",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Chirurgické obory"
    },
    {
      "code" : "kod",
      "valueString" : "7U4"
    },
    {
      "code" : "nazev",
      "valueString" : "dlhd.dětská ORL"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracov. dlouhod. (chronic.) úst.lůž.péče dětské ORL - U typu"
    },
    {
      "code" : "trida",
      "valueString" : "dětská otorinolaryngologie"
    },
    {
      "code" : "typ",
      "valueString" : "Dlouhodobá péče"
    }]
  },
  {
    "code" : "7U5",
    "display" : "dlhd.oftalmologie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Chirurgické obory"
    },
    {
      "code" : "kod",
      "valueString" : "7U5"
    },
    {
      "code" : "nazev",
      "valueString" : "dlhd.oftalmologie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracov. dlouhod.(chronic.) úst.lůž.péče oftalmolog. - U typu"
    },
    {
      "code" : "trida",
      "valueString" : "oftalmologie"
    },
    {
      "code" : "typ",
      "valueString" : "Dlouhodobá péče"
    }]
  },
  {
    "code" : "7U8",
    "display" : "dlhd.intenzivní oš.péče",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Chirurgické obory"
    },
    {
      "code" : "kod",
      "valueString" : "7U8"
    },
    {
      "code" : "nazev",
      "valueString" : "dlhd.intenzivní oš.péče"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracoviště dlouhodobé intenzivní ošetřovatelské péče (DIOP)"
    },
    {
      "code" : "trida",
      "valueString" : "anesteziologie-resuscitace"
    },
    {
      "code" : "typ",
      "valueString" : "Dlouhodobá péče"
    }]
  },
  {
    "code" : "801",
    "display" : "biochemie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : false
    },
    {
      "code" : "kategorie",
      "valueString" : "Jiné"
    },
    {
      "code" : "kod",
      "valueString" : "801"
    },
    {
      "code" : "nazev",
      "valueString" : "biochemie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracoviště klinické biochemie"
    },
    {
      "code" : "trida",
      "valueString" : "biochemie"
    },
    {
      "code" : "typ",
      "valueString" : "Laboratoře"
    }]
  },
  {
    "code" : "802",
    "display" : "mikrobiologie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : false
    },
    {
      "code" : "kategorie",
      "valueString" : "Jiné"
    },
    {
      "code" : "kod",
      "valueString" : "802"
    },
    {
      "code" : "nazev",
      "valueString" : "mikrobiologie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracoviště lékařské mikrobiologie"
    },
    {
      "code" : "trida",
      "valueString" : "mikrobiologie"
    },
    {
      "code" : "typ",
      "valueString" : "Laboratoře"
    }]
  },
  {
    "code" : "803",
    "display" : "bakteriologie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : false
    },
    {
      "code" : "kategorie",
      "valueString" : "Jiné"
    },
    {
      "code" : "kod",
      "valueString" : "803"
    },
    {
      "code" : "nazev",
      "valueString" : "bakteriologie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracoviště lékařské bakteriologie"
    },
    {
      "code" : "trida",
      "valueString" : "bakteriologie"
    },
    {
      "code" : "typ",
      "valueString" : "Laboratoře"
    }]
  },
  {
    "code" : "804",
    "display" : "parazitologie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : false
    },
    {
      "code" : "kategorie",
      "valueString" : "Jiné"
    },
    {
      "code" : "kod",
      "valueString" : "804"
    },
    {
      "code" : "nazev",
      "valueString" : "parazitologie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracoviště lékařské parazitologie"
    },
    {
      "code" : "trida",
      "valueString" : "parazitologie"
    },
    {
      "code" : "typ",
      "valueString" : "Laboratoře"
    }]
  },
  {
    "code" : "805",
    "display" : "virologie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : false
    },
    {
      "code" : "kategorie",
      "valueString" : "Jiné"
    },
    {
      "code" : "kod",
      "valueString" : "805"
    },
    {
      "code" : "nazev",
      "valueString" : "virologie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracoviště lékařské virologie"
    },
    {
      "code" : "trida",
      "valueString" : "virologie"
    },
    {
      "code" : "typ",
      "valueString" : "Laboratoře"
    }]
  },
  {
    "code" : "806",
    "display" : "screeningu nádoru prsu",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : false
    },
    {
      "code" : "kategorie",
      "valueString" : "Jiné"
    },
    {
      "code" : "kod",
      "valueString" : "806"
    },
    {
      "code" : "nazev",
      "valueString" : "screeningu nádoru prsu"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracoviště s osvědčením pro provádění screeningu nádoru prsu"
    },
    {
      "code" : "trida",
      "valueString" : "screeningu nádoru prsu"
    },
    {
      "code" : "typ",
      "valueString" : "Laboratoře"
    }]
  },
  {
    "code" : "807",
    "display" : "patologická anatomie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : false
    },
    {
      "code" : "kategorie",
      "valueString" : "Jiné"
    },
    {
      "code" : "kod",
      "valueString" : "807"
    },
    {
      "code" : "nazev",
      "valueString" : "patologická anatomie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracoviště patologické anatomie"
    },
    {
      "code" : "trida",
      "valueString" : "patologická anatomie"
    },
    {
      "code" : "typ",
      "valueString" : "Laboratoře"
    }]
  },
  {
    "code" : "808",
    "display" : "patologická anatomie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : false
    },
    {
      "code" : "kategorie",
      "valueString" : "Jiné"
    },
    {
      "code" : "kod",
      "valueString" : "808"
    },
    {
      "code" : "nazev",
      "valueString" : "patologická anatomie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracoviště patologické anatomie"
    },
    {
      "code" : "trida",
      "valueString" : "patologická anatomie"
    },
    {
      "code" : "typ",
      "valueString" : "Laboratoře"
    }]
  },
  {
    "code" : "809",
    "display" : "radiodiagnostika",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : false
    },
    {
      "code" : "kategorie",
      "valueString" : "Jiné"
    },
    {
      "code" : "kod",
      "valueString" : "809"
    },
    {
      "code" : "nazev",
      "valueString" : "radiodiagnostika"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracoviště radiodiagnostiky"
    },
    {
      "code" : "trida",
      "valueString" : "radiodiagnostika"
    },
    {
      "code" : "typ",
      "valueString" : "Zobrazovací metody"
    }]
  },
  {
    "code" : "810",
    "display" : "magnetická rezonance",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : false
    },
    {
      "code" : "kategorie",
      "valueString" : "Jiné"
    },
    {
      "code" : "kod",
      "valueString" : "810"
    },
    {
      "code" : "nazev",
      "valueString" : "magnetická rezonance"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracoviště magnetické rezonance"
    },
    {
      "code" : "trida",
      "valueString" : "magnetická rezonance"
    },
    {
      "code" : "typ",
      "valueString" : "Zobrazovací metody"
    }]
  },
  {
    "code" : "812",
    "display" : "jiný laboratorní obor",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : false
    },
    {
      "code" : "kategorie",
      "valueString" : "Jiné"
    },
    {
      "code" : "kod",
      "valueString" : "812"
    },
    {
      "code" : "nazev",
      "valueString" : "jiný laboratorní obor"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracoviště jiného laboratorního oboru"
    },
    {
      "code" : "trida",
      "valueString" : "jiný laboratorní obor"
    },
    {
      "code" : "typ",
      "valueString" : "Laboratoře"
    }]
  },
  {
    "code" : "813",
    "display" : "Lab.alergologie a imunol",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : false
    },
    {
      "code" : "kategorie",
      "valueString" : "Jiné"
    },
    {
      "code" : "kod",
      "valueString" : "813"
    },
    {
      "code" : "nazev",
      "valueString" : "Lab.alergologie a imunol"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Laboratoř alergologická a imunologická"
    },
    {
      "code" : "trida",
      "valueString" : "Lab.alergologie a imunologie"
    },
    {
      "code" : "typ",
      "valueString" : "Laboratoře"
    }]
  },
  {
    "code" : "814",
    "display" : "Lab.toxikologie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : false
    },
    {
      "code" : "kategorie",
      "valueString" : "Jiné"
    },
    {
      "code" : "kod",
      "valueString" : "814"
    },
    {
      "code" : "nazev",
      "valueString" : "Lab.toxikologie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Laboratoř toxikologická"
    },
    {
      "code" : "trida",
      "valueString" : "Lab.toxikologie"
    },
    {
      "code" : "typ",
      "valueString" : "Laboratoře"
    }]
  },
  {
    "code" : "815",
    "display" : "Lab.nukleární mediciny",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : false
    },
    {
      "code" : "kategorie",
      "valueString" : "Jiné"
    },
    {
      "code" : "kod",
      "valueString" : "815"
    },
    {
      "code" : "nazev",
      "valueString" : "Lab.nukleární mediciny"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Laboratoř nukleární mediciny"
    },
    {
      "code" : "trida",
      "valueString" : "Lab.nukleární mediciny"
    },
    {
      "code" : "typ",
      "valueString" : "Laboratoře"
    }]
  },
  {
    "code" : "816",
    "display" : "Lab.lékařské genetiky",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : false
    },
    {
      "code" : "kategorie",
      "valueString" : "Jiné"
    },
    {
      "code" : "kod",
      "valueString" : "816"
    },
    {
      "code" : "nazev",
      "valueString" : "Lab.lékařské genetiky"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Laboratoř lékařské genetiky"
    },
    {
      "code" : "trida",
      "valueString" : "Lab.lékařské genetiky"
    },
    {
      "code" : "typ",
      "valueString" : "Laboratoře"
    }]
  },
  {
    "code" : "817",
    "display" : "Lab.klinické cytologie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : false
    },
    {
      "code" : "kategorie",
      "valueString" : "Jiné"
    },
    {
      "code" : "kod",
      "valueString" : "817"
    },
    {
      "code" : "nazev",
      "valueString" : "Lab.klinické cytologie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Laboratoř klinické cytologie"
    },
    {
      "code" : "trida",
      "valueString" : "Lab.klinické cytologie"
    },
    {
      "code" : "typ",
      "valueString" : "Laboratoře"
    }]
  },
  {
    "code" : "818",
    "display" : "Lab.hematologie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : false
    },
    {
      "code" : "kategorie",
      "valueString" : "Jiné"
    },
    {
      "code" : "kod",
      "valueString" : "818"
    },
    {
      "code" : "nazev",
      "valueString" : "Lab.hematologie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Laboratoř hematologická"
    },
    {
      "code" : "trida",
      "valueString" : "Lab.hematologie"
    },
    {
      "code" : "typ",
      "valueString" : "Laboratoře"
    }]
  },
  {
    "code" : "820",
    "display" : "Lab.pro karcinom děložní",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : false
    },
    {
      "code" : "kategorie",
      "valueString" : "Jiné"
    },
    {
      "code" : "kod",
      "valueString" : "820"
    },
    {
      "code" : "nazev",
      "valueString" : "Lab.pro karcinom děložní"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Laboratoř provádějící screening karcinomu děložního hrdla"
    },
    {
      "code" : "trida",
      "valueString" : "Lab.pro karcinom děložního hrdla"
    },
    {
      "code" : "typ",
      "valueString" : "Laboratoře"
    }]
  },
  {
    "code" : "822",
    "display" : "Lab.mykologie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : false
    },
    {
      "code" : "kategorie",
      "valueString" : "Jiné"
    },
    {
      "code" : "kod",
      "valueString" : "822"
    },
    {
      "code" : "nazev",
      "valueString" : "Lab.mykologie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Laboratoř mykologická"
    },
    {
      "code" : "trida",
      "valueString" : "Lab.mykologie"
    },
    {
      "code" : "typ",
      "valueString" : "Laboratoře"
    }]
  },
  {
    "code" : "823",
    "display" : "patologická anatomie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : false
    },
    {
      "code" : "kategorie",
      "valueString" : "Jiné"
    },
    {
      "code" : "kod",
      "valueString" : "823"
    },
    {
      "code" : "nazev",
      "valueString" : "patologická anatomie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracoviště patologické anatomie"
    },
    {
      "code" : "trida",
      "valueString" : "patologická anatomie"
    },
    {
      "code" : "typ",
      "valueString" : "Laboratoře"
    }]
  },
  {
    "code" : "881",
    "display" : "biochemie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : false
    },
    {
      "code" : "kategorie",
      "valueString" : "Jiné"
    },
    {
      "code" : "kod",
      "valueString" : "881"
    },
    {
      "code" : "nazev",
      "valueString" : "biochemie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracoviště klinické biochemie"
    },
    {
      "code" : "trida",
      "valueString" : "biochemie"
    },
    {
      "code" : "typ",
      "valueString" : "Laboratoře"
    }]
  },
  {
    "code" : "901",
    "display" : "klinická psychologie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : false
    },
    {
      "code" : "kategorie",
      "valueString" : "Psychiatrie"
    },
    {
      "code" : "kod",
      "valueString" : "901"
    },
    {
      "code" : "nazev",
      "valueString" : "klinická psychologie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracoviště klinické psychologie"
    },
    {
      "code" : "trida",
      "valueString" : "klinická psychologie"
    },
    {
      "code" : "typ",
      "valueString" : "Nelékařská péče"
    }]
  },
  {
    "code" : "902",
    "display" : "fyzioterapeuti",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : false
    },
    {
      "code" : "kategorie",
      "valueString" : "Interní obory"
    },
    {
      "code" : "kod",
      "valueString" : "902"
    },
    {
      "code" : "nazev",
      "valueString" : "fyzioterapeuti"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Samostatné pracoviště fyzioterapeutů"
    },
    {
      "code" : "trida",
      "valueString" : "fyzioterapeuti"
    },
    {
      "code" : "typ",
      "valueString" : "Nelékařská péče"
    }]
  },
  {
    "code" : "903",
    "display" : "klinická logopedie",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : false
    },
    {
      "code" : "kategorie",
      "valueString" : "Psychiatrie"
    },
    {
      "code" : "kod",
      "valueString" : "903"
    },
    {
      "code" : "nazev",
      "valueString" : "klinická logopedie"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracoviště klinické logopedie"
    },
    {
      "code" : "trida",
      "valueString" : "klinická logopedie"
    },
    {
      "code" : "typ",
      "valueString" : "Nelékařská péče"
    }]
  },
  {
    "code" : "904",
    "display" : "jiní zdrav. pracovníci (",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : false
    },
    {
      "code" : "kategorie",
      "valueString" : "Jiné"
    },
    {
      "code" : "kod",
      "valueString" : "904"
    },
    {
      "code" : "nazev",
      "valueString" : "jiní zdrav. pracovníci ("
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Samostatné prac. jiných zdrav. pracovníků - vysokoškoláků"
    },
    {
      "code" : "trida",
      "valueString" : "jiní zdrav. pracovníci (VŠ)"
    },
    {
      "code" : "typ",
      "valueString" : "Nelékařská péče"
    }]
  },
  {
    "code" : "913",
    "display" : "sociální lůžka",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : false
    },
    {
      "code" : "kategorie",
      "valueString" : "Interní obory"
    },
    {
      "code" : "kod",
      "valueString" : "913"
    },
    {
      "code" : "nazev",
      "valueString" : "sociální lůžka"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Prac.ošetřovat. a rehabilit.péče v pobyt.zaříz.sociál.služeb"
    },
    {
      "code" : "trida",
      "valueString" : "sociální lůžka"
    },
    {
      "code" : "typ",
      "valueString" : "Nelékařská péče"
    }]
  },
  {
    "code" : "914",
    "display" : "psychiatrické sestry",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : false
    },
    {
      "code" : "kategorie",
      "valueString" : "Psychiatrie"
    },
    {
      "code" : "kod",
      "valueString" : "914"
    },
    {
      "code" : "nazev",
      "valueString" : "psychiatrické sestry"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Samostatné pracoviště psychiatrických sester"
    },
    {
      "code" : "trida",
      "valueString" : "psychiatrické sestry"
    },
    {
      "code" : "typ",
      "valueString" : "Nelékařská péče"
    }]
  },
  {
    "code" : "916",
    "display" : "nutriční terapeuti",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : false
    },
    {
      "code" : "kategorie",
      "valueString" : "Jiné"
    },
    {
      "code" : "kod",
      "valueString" : "916"
    },
    {
      "code" : "nazev",
      "valueString" : "nutriční terapeuti"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracoviště nutričních terapeutů"
    },
    {
      "code" : "trida",
      "valueString" : "nutriční terapeuti"
    },
    {
      "code" : "typ",
      "valueString" : "Nelékařská péče"
    }]
  },
  {
    "code" : "917",
    "display" : "ergoterapeuti",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : false
    },
    {
      "code" : "kategorie",
      "valueString" : "Psychiatrie"
    },
    {
      "code" : "kod",
      "valueString" : "917"
    },
    {
      "code" : "nazev",
      "valueString" : "ergoterapeuti"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Samostatné pracoviště ergoterapeutů"
    },
    {
      "code" : "trida",
      "valueString" : "ergoterapeuti"
    },
    {
      "code" : "typ",
      "valueString" : "Nelékařská péče"
    }]
  },
  {
    "code" : "918",
    "display" : "rehabilitační pracovníci",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : false
    },
    {
      "code" : "kategorie",
      "valueString" : "Interní obory"
    },
    {
      "code" : "kod",
      "valueString" : "918"
    },
    {
      "code" : "nazev",
      "valueString" : "rehabilitační pracovníci"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Samostatné prac. rehabilit. pracovníků - absolventů SZŠ"
    },
    {
      "code" : "trida",
      "valueString" : "rehabilitační pracovníci (SZŠ)"
    },
    {
      "code" : "typ",
      "valueString" : "Nelékařská péče"
    }]
  },
  {
    "code" : "921",
    "display" : "porodní asistentky",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : false
    },
    {
      "code" : "kategorie",
      "valueString" : "Chirurgické obory"
    },
    {
      "code" : "kod",
      "valueString" : "921"
    },
    {
      "code" : "nazev",
      "valueString" : "porodní asistentky"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Samostatné pracoviště porodních asistentek"
    },
    {
      "code" : "trida",
      "valueString" : "porodní asistentky"
    },
    {
      "code" : "typ",
      "valueString" : "Nelékařská péče"
    }]
  },
  {
    "code" : "925",
    "display" : "domácí péče (SZP)",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : false
    },
    {
      "code" : "kategorie",
      "valueString" : "Interní obory"
    },
    {
      "code" : "kod",
      "valueString" : "925"
    },
    {
      "code" : "nazev",
      "valueString" : "domácí péče (SZP)"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracoviště domácí péče - SZP"
    },
    {
      "code" : "trida",
      "valueString" : "domácí péče (SZP)"
    },
    {
      "code" : "typ",
      "valueString" : "Nelékařská péče"
    }]
  },
  {
    "code" : "927",
    "display" : "ortoptické sestry",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : false
    },
    {
      "code" : "kategorie",
      "valueString" : "Chirurgické obory"
    },
    {
      "code" : "kod",
      "valueString" : "927"
    },
    {
      "code" : "nazev",
      "valueString" : "ortoptické sestry"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Samostatné prac. ortoptických sester"
    },
    {
      "code" : "trida",
      "valueString" : "ortoptické sestry"
    },
    {
      "code" : "typ",
      "valueString" : "Nelékařská péče"
    }]
  },
  {
    "code" : "989",
    "display" : "doprava",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : false
    },
    {
      "code" : "kategorie",
      "valueString" : "Nezdravotnické"
    },
    {
      "code" : "kod",
      "valueString" : "989"
    },
    {
      "code" : "nazev",
      "valueString" : "doprava"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracoviště dopravy raněných, nemocných a rodiček"
    },
    {
      "code" : "trida",
      "valueString" : "doprava"
    },
    {
      "code" : "typ",
      "valueString" : "Nezdravotnické pracoviště"
    }]
  },
  {
    "code" : "994",
    "display" : "indikace komplementu (ko",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : false
    },
    {
      "code" : "kategorie",
      "valueString" : "Nezdravotnické"
    },
    {
      "code" : "kod",
      "valueString" : "994"
    },
    {
      "code" : "nazev",
      "valueString" : "indikace komplementu (ko"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Odb.pouze pro indik.péče komplementu (lékař.zaměstn.koj.úst)"
    },
    {
      "code" : "trida",
      "valueString" : "indikace komplementu (koj.úst.)"
    },
    {
      "code" : "typ",
      "valueString" : "Nezdravotnické pracoviště"
    }]
  },
  {
    "code" : "995",
    "display" : "indikace dopravy zpět",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : false
    },
    {
      "code" : "kategorie",
      "valueString" : "Nezdravotnické"
    },
    {
      "code" : "kod",
      "valueString" : "995"
    },
    {
      "code" : "nazev",
      "valueString" : "indikace dopravy zpět"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Odbornost pouze pro indikaci dopravy zpět do místa bydliště"
    },
    {
      "code" : "trida",
      "valueString" : "indikace dopravy zpět"
    },
    {
      "code" : "typ",
      "valueString" : "Nezdravotnické pracoviště"
    }]
  },
  {
    "code" : "996",
    "display" : "úhrada cestovného pacien",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : false
    },
    {
      "code" : "kategorie",
      "valueString" : "Nezdravotnické"
    },
    {
      "code" : "kod",
      "valueString" : "996"
    },
    {
      "code" : "nazev",
      "valueString" : "úhrada cestovného pacien"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Odbornost pouze pro úhradu cestovného pacientům"
    },
    {
      "code" : "trida",
      "valueString" : "úhrada cestovného pacientům"
    },
    {
      "code" : "typ",
      "valueString" : "Nezdravotnické pracoviště"
    }]
  },
  {
    "code" : "999",
    "display" : "výzkumná laboratoř",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : false
    },
    {
      "code" : "kategorie",
      "valueString" : "Jiné"
    },
    {
      "code" : "kod",
      "valueString" : "999"
    },
    {
      "code" : "nazev",
      "valueString" : "výzkumná laboratoř"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Výzkumná laboratoř"
    },
    {
      "code" : "trida",
      "valueString" : "výzkumná laboratoř"
    },
    {
      "code" : "typ",
      "valueString" : "Laboratoře"
    }]
  },
  {
    "code" : "9F8",
    "display" : "std.neúplná péče",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Interní obory"
    },
    {
      "code" : "kod",
      "valueString" : "9F8"
    },
    {
      "code" : "nazev",
      "valueString" : "std.neúplná péče"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracoviště neúplné ústavní péče - F typu"
    },
    {
      "code" : "trida",
      "valueString" : "neúplná péče"
    },
    {
      "code" : "typ",
      "valueString" : "Standardní péče"
    }]
  },
  {
    "code" : "9F9",
    "display" : "std.ošetřovatelství",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Interní obory"
    },
    {
      "code" : "kod",
      "valueString" : "9F9"
    },
    {
      "code" : "nazev",
      "valueString" : "std.ošetřovatelství"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracov. ústavní péče na ošetřovatelském lůžku - F typu"
    },
    {
      "code" : "trida",
      "valueString" : "hospic"
    },
    {
      "code" : "typ",
      "valueString" : "Dlouhodobá péče"
    }]
  },
  {
    "code" : "9H8",
    "display" : "std.neúplná péče",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Interní obory"
    },
    {
      "code" : "kod",
      "valueString" : "9H8"
    },
    {
      "code" : "nazev",
      "valueString" : "std.neúplná péče"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracoviště neúplné ústavní péče - H typu"
    },
    {
      "code" : "trida",
      "valueString" : "neúplná péče"
    },
    {
      "code" : "typ",
      "valueString" : "Standardní péče"
    }]
  },
  {
    "code" : "9H9",
    "display" : "std.ošetřovatelství",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Interní obory"
    },
    {
      "code" : "kod",
      "valueString" : "9H9"
    },
    {
      "code" : "nazev",
      "valueString" : "std.ošetřovatelství"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracov. ústavní péče na ošetřovatelském lůžku - H typu"
    },
    {
      "code" : "trida",
      "valueString" : "hospic"
    },
    {
      "code" : "typ",
      "valueString" : "Dlouhodobá péče"
    }]
  },
  {
    "code" : "9U7",
    "display" : "LDN",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Interní obory"
    },
    {
      "code" : "kod",
      "valueString" : "9U7"
    },
    {
      "code" : "nazev",
      "valueString" : "LDN"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracov. ústavní následné péče v LDN"
    },
    {
      "code" : "trida",
      "valueString" : "LDN"
    },
    {
      "code" : "typ",
      "valueString" : "Dlouhodobá péče"
    }]
  },
  {
    "code" : "9U9",
    "display" : "hospic",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Interní obory"
    },
    {
      "code" : "kod",
      "valueString" : "9U9"
    },
    {
      "code" : "nazev",
      "valueString" : "hospic"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracov. ústavní následné ošetřovatelské péče v hospici"
    },
    {
      "code" : "trida",
      "valueString" : "hospic"
    },
    {
      "code" : "typ",
      "valueString" : "Dlouhodobá péče"
    }]
  },
  {
    "code" : "?",
    "display" : "neznámé",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : false
    },
    {
      "code" : "kategorie",
      "valueString" : "Neznámé"
    },
    {
      "code" : "kod",
      "valueString" : "?"
    },
    {
      "code" : "nazev",
      "valueString" : "neznámé"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Neznámé"
    },
    {
      "code" : "trida",
      "valueString" : "neznámé"
    },
    {
      "code" : "typ",
      "valueString" : "Neznámá péče"
    }]
  },
  {
    "code" : "CENT",
    "display" : "centrální příjem",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : false
    },
    {
      "code" : "kategorie",
      "valueString" : "Interní obory"
    },
    {
      "code" : "kod",
      "valueString" : "CENT"
    },
    {
      "code" : "nazev",
      "valueString" : "centrální příjem"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Centrální příjem"
    },
    {
      "code" : "trida",
      "valueString" : "centrální příjem"
    },
    {
      "code" : "typ",
      "valueString" : "Ambulantní péče"
    }]
  },
  {
    "code" : "DETC",
    "display" : "dětské centrum",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Interní obory"
    },
    {
      "code" : "kod",
      "valueString" : "DETC"
    },
    {
      "code" : "nazev",
      "valueString" : "dětské centrum"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Dětské centrum"
    },
    {
      "code" : "trida",
      "valueString" : "dětské centrum"
    },
    {
      "code" : "typ",
      "valueString" : "Dlouhodobá péče"
    }]
  },
  {
    "code" : "DOSP",
    "display" : "dospávací pokoj",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Chirurgické obory"
    },
    {
      "code" : "kod",
      "valueString" : "DOSP"
    },
    {
      "code" : "nazev",
      "valueString" : "dospávací pokoj"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Dospávací pokoj"
    },
    {
      "code" : "trida",
      "valueString" : "dospávací pokoj"
    },
    {
      "code" : "typ",
      "valueString" : "Intenzivní péče"
    }]
  },
  {
    "code" : "JINE",
    "display" : "jiné zdravotnické pracov",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : false
    },
    {
      "code" : "kategorie",
      "valueString" : "Jiné"
    },
    {
      "code" : "kod",
      "valueString" : "JINE"
    },
    {
      "code" : "nazev",
      "valueString" : "jiné zdravotnické pracov"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Jiné zdravotnické pracoviště"
    },
    {
      "code" : "trida",
      "valueString" : "jiné zdravotnické pracoviště"
    },
    {
      "code" : "typ",
      "valueString" : "Jiná péče"
    }]
  },
  {
    "code" : "LABO",
    "display" : "laboratoře",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : false
    },
    {
      "code" : "kategorie",
      "valueString" : "Jiné"
    },
    {
      "code" : "kod",
      "valueString" : "LABO"
    },
    {
      "code" : "nazev",
      "valueString" : "laboratoře"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Laboratoře"
    },
    {
      "code" : "trida",
      "valueString" : "laboratoře"
    },
    {
      "code" : "typ",
      "valueString" : "Laboratoře"
    }]
  },
  {
    "code" : "MIMO",
    "display" : "místo mimo areál",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : false
    },
    {
      "code" : "kategorie",
      "valueString" : "Nezdravotnické"
    },
    {
      "code" : "kod",
      "valueString" : "MIMO"
    },
    {
      "code" : "nazev",
      "valueString" : "místo mimo areál"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Místo mimo areál"
    },
    {
      "code" : "trida",
      "valueString" : "místo mimo areál"
    },
    {
      "code" : "typ",
      "valueString" : "Místo mimo areál"
    }]
  },
  {
    "code" : "NEZD",
    "display" : "nezdravotnické pracovišt",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : false
    },
    {
      "code" : "kategorie",
      "valueString" : "Nezdravotnické"
    },
    {
      "code" : "kod",
      "valueString" : "NEZD"
    },
    {
      "code" : "nazev",
      "valueString" : "nezdravotnické pracovišt"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Nezdravotnické pracoviště"
    },
    {
      "code" : "trida",
      "valueString" : "nezdravotnické pracoviště"
    },
    {
      "code" : "typ",
      "valueString" : "Nezdravotnické pracoviště"
    }]
  },
  {
    "code" : "NEZN",
    "display" : "neznámé",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : false
    },
    {
      "code" : "kategorie",
      "valueString" : "Neznámé"
    },
    {
      "code" : "kod",
      "valueString" : "NEZN"
    },
    {
      "code" : "nazev",
      "valueString" : "neznámé"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Neznámé"
    },
    {
      "code" : "trida",
      "valueString" : "neznámé"
    },
    {
      "code" : "typ",
      "valueString" : "Neznámá péče"
    }]
  },
  {
    "code" : "NLEK",
    "display" : "nelékaři",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : false
    },
    {
      "code" : "kategorie",
      "valueString" : "Jiné"
    },
    {
      "code" : "kod",
      "valueString" : "NLEK"
    },
    {
      "code" : "nazev",
      "valueString" : "nelékaři"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracoviště nelékařských pracovníků"
    },
    {
      "code" : "trida",
      "valueString" : "nelékaři"
    },
    {
      "code" : "typ",
      "valueString" : "Nelékařská péče"
    }]
  },
  {
    "code" : "NUTR",
    "display" : "nutriční terapeuti",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : false
    },
    {
      "code" : "kategorie",
      "valueString" : "Jiné"
    },
    {
      "code" : "kod",
      "valueString" : "NUTR"
    },
    {
      "code" : "nazev",
      "valueString" : "nutriční terapeuti"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracoviště nutričních terapeutů"
    },
    {
      "code" : "trida",
      "valueString" : "nutriční terapeuti"
    },
    {
      "code" : "typ",
      "valueString" : "Nelékařská péče"
    }]
  },
  {
    "code" : "OPER",
    "display" : "centrální operační sály",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Chirurgické obory"
    },
    {
      "code" : "kod",
      "valueString" : "OPER"
    },
    {
      "code" : "nazev",
      "valueString" : "centrální operační sály"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Centrální operační sály"
    },
    {
      "code" : "trida",
      "valueString" : "centrální operační sály"
    },
    {
      "code" : "typ",
      "valueString" : "Operační sály a sterilizace"
    }]
  },
  {
    "code" : "PHAR",
    "display" : "lékárna",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : false
    },
    {
      "code" : "kategorie",
      "valueString" : "Jiné"
    },
    {
      "code" : "kod",
      "valueString" : "PHAR"
    },
    {
      "code" : "nazev",
      "valueString" : "lékárna"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Lékárna"
    },
    {
      "code" : "trida",
      "valueString" : "lékárna"
    },
    {
      "code" : "typ",
      "valueString" : "Lékárna"
    }]
  },
  {
    "code" : "SANI",
    "display" : "sanitáři",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : false
    },
    {
      "code" : "kategorie",
      "valueString" : "Jiné"
    },
    {
      "code" : "kod",
      "valueString" : "SANI"
    },
    {
      "code" : "nazev",
      "valueString" : "sanitáři"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Pracoviště sanitářů"
    },
    {
      "code" : "trida",
      "valueString" : "sanitáři"
    },
    {
      "code" : "typ",
      "valueString" : "Nelékařská péče"
    }]
  },
  {
    "code" : "SOCI",
    "display" : "sociální lůžka",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Interní obory"
    },
    {
      "code" : "kod",
      "valueString" : "SOCI"
    },
    {
      "code" : "nazev",
      "valueString" : "sociální lůžka"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Sociální lůžka"
    },
    {
      "code" : "trida",
      "valueString" : "sociální lůžka"
    },
    {
      "code" : "typ",
      "valueString" : "Dlouhodobá péče"
    }]
  },
  {
    "code" : "SPOL",
    "display" : "společné prostory odděle",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : false
    },
    {
      "code" : "kategorie",
      "valueString" : "Nezdravotnické"
    },
    {
      "code" : "kod",
      "valueString" : "SPOL"
    },
    {
      "code" : "nazev",
      "valueString" : "společné prostory odděle"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Společné prostory oddělení"
    },
    {
      "code" : "trida",
      "valueString" : "společné prostory oddělení"
    },
    {
      "code" : "typ",
      "valueString" : "Nezdravotnické pracoviště"
    }]
  },
  {
    "code" : "STER",
    "display" : "sterilizace",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : true
    },
    {
      "code" : "kategorie",
      "valueString" : "Chirurgické obory"
    },
    {
      "code" : "kod",
      "valueString" : "STER"
    },
    {
      "code" : "nazev",
      "valueString" : "sterilizace"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Sterilizace"
    },
    {
      "code" : "trida",
      "valueString" : "sterilizace"
    },
    {
      "code" : "typ",
      "valueString" : "Operační sály a sterilizace"
    }]
  },
  {
    "code" : "VERE",
    "display" : "veřejné místo",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : false
    },
    {
      "code" : "kategorie",
      "valueString" : "Nezdravotnické"
    },
    {
      "code" : "kod",
      "valueString" : "VERE"
    },
    {
      "code" : "nazev",
      "valueString" : "veřejné místo"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Veřejné místo"
    },
    {
      "code" : "trida",
      "valueString" : "veřejné místo"
    },
    {
      "code" : "typ",
      "valueString" : "Nezdravotnické pracoviště"
    }]
  },
  {
    "code" : "X",
    "display" : "jiné",
    "property" : [{
      "code" : "hospitalizace",
      "valueBoolean" : false
    },
    {
      "code" : "kategorie",
      "valueString" : "Jiné"
    },
    {
      "code" : "kod",
      "valueString" : "X"
    },
    {
      "code" : "nazev",
      "valueString" : "jiné"
    },
    {
      "code" : "plati_od",
      "valueDateTime" : "2015-01-01T00:00:00Z"
    },
    {
      "code" : "popis",
      "valueString" : "Jiné"
    },
    {
      "code" : "trida",
      "valueString" : "jiné"
    },
    {
      "code" : "typ",
      "valueString" : "Jiná péče"
    }]
  }]
}

```
