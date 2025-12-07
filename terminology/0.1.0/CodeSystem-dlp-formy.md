# DLP formy - HL7 Czech Terminology Implementation Guide v0.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **DLP formy**

## CodeSystem: DLP formy 

| | |
| :--- | :--- |
| *Official URL*:https://sukl.cz/terminology/CodeSystem/dlp-formy | *Version*:0.1.0 |
| Active as of 2025-07-31 | *Computable Name*:CS_DLP_formy |

 
Lékové formy dle DLP. 

 This Code system is referenced in the content logical definition of the following value sets: 

* [DLP_formy](ValueSet-dlp-formy.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "dlp-formy",
  "language" : "cs",
  "url" : "https://sukl.cz/terminology/CodeSystem/dlp-formy",
  "version" : "0.1.0",
  "name" : "CS_DLP_formy",
  "title" : "DLP formy",
  "status" : "active",
  "experimental" : false,
  "date" : "2025-07-31T19:26:26.67951Z",
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
  "description" : "Lékové formy dle DLP.",
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
  "caseSensitive" : false,
  "content" : "complete",
  "count" : 636,
  "property" : [
    {
      "code" : "FORMA",
      "type" : "string"
    },
    {
      "code" : "JE_KONOPI",
      "type" : "string"
    },
    {
      "code" : "KOD_EDQM",
      "type" : "Coding"
    },
    {
      "code" : "NAZEV",
      "type" : "string"
    },
    {
      "code" : "NAZEV_EN",
      "type" : "string"
    },
    {
      "code" : "NAZEV_LAT",
      "type" : "string"
    },
    {
      "code" : "definition",
      "description" : "Definition",
      "type" : "string"
    }
  ],
  "concept" : [
    {
      "code" : "ADT BAL",
      "display" : "Přísada do koupele",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "ADT BAL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10501000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Přísada do koupele"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Bath additive"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Additivum pro balneo"
        }
      ]
    },
    {
      "code" : "AUR CRM",
      "display" : "Ušní krém",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "AUR CRM"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10701000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Ušní krém"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Ear cream"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Cremor auricularis"
        }
      ]
    },
    {
      "code" : "AUR GEL",
      "display" : "Ušní gel",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "AUR GEL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10702000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Ušní gel"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Ear gel"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Gelatum auriculare"
        }
      ]
    },
    {
      "code" : "AUR GTT EML",
      "display" : "Ušní kapky, emulze",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "AUR GTT EML"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10706000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Ušní kapky, emulze"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Ear drops, emulsion"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Otoguttae in emulsione"
        }
      ]
    },
    {
      "code" : "AUR GTT PLQ SUS",
      "display" : "Ušní kapky, prášek a rozpouštědlo pro suspenzi",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "AUR GTT PLQ SUS"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10707000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Ušní kapky, prášek a rozpouštědlo pro suspenzi"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Ear drops, powder and solvent for suspension"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Pulvis et liquefactorium pro otoguttis in suspensione"
        }
      ]
    },
    {
      "code" : "AUR GTT PSU",
      "display" : "Ušní kapky, prášek pro suspenzi",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "AUR GTT PSU"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "13006000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Ušní kapky, prášek pro suspenzi"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Ear drops, powder for suspension"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Pulvis pro otoguttis in suspensione"
        }
      ]
    },
    {
      "code" : "AUR GTT SOL",
      "display" : "Ušní kapky, roztok",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "AUR GTT SOL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10704000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Ušní kapky, roztok"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Ear drops, solution"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Otoguttae in solutione"
        }
      ]
    },
    {
      "code" : "AUR GTT SOL MDC",
      "display" : "Ušní kapky, roztok v jednodávkovém obalu",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "AUR GTT SOL MDC"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50017200"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Ušní kapky, roztok v jednodávkovém obalu"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Ear drops, solution in single-dose container"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Otoguttae in solutione in vase monodosali"
        }
      ]
    },
    {
      "code" : "AUR GTT SUS",
      "display" : "Ušní kapky, suspenze",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "AUR GTT SUS"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10705000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Ušní kapky, suspenze"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Ear drops, suspension"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Otoguttae in suspensione"
        }
      ]
    },
    {
      "code" : "AUR GTT SUS MDC",
      "display" : "Ušní kapky, suspenze v jednodávkovém obalu",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "AUR GTT SUS MDC"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50017550"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Ušní kapky, suspenze v jednodávkovém obalu"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Ear drops, suspension in single-dose container"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Otoguttae in suspensione in vase monodosali"
        }
      ]
    },
    {
      "code" : "AUR LOT EML",
      "display" : "Ušní výplach, emulze",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "AUR LOT EML"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10713000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Ušní výplach, emulze"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Ear wash, emulsion"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Lotio auricularis in emulsione"
        }
      ]
    },
    {
      "code" : "AUR LOT SOL",
      "display" : "Ušní výplach, roztok",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "AUR LOT SOL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10712000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Ušní výplach, roztok"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Ear wash, solution"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Lotio auricularis in solutione"
        }
      ]
    },
    {
      "code" : "AUR PLV ADS",
      "display" : "Ušní zásyp",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "AUR PLV ADS"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10708000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Ušní zásyp"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Ear powder"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Pulvis adspersorius auricularis"
        }
      ]
    },
    {
      "code" : "AUR SPR EML",
      "display" : "Ušní sprej, emulze",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "AUR SPR EML"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10711000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Ušní sprej, emulze"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Ear spray, emulsion"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Emulsio pro aerodispersione auriculari"
        }
      ]
    },
    {
      "code" : "AUR SPR SOL",
      "display" : "Ušní sprej, roztok",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "AUR SPR SOL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10709000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Ušní sprej, roztok"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Ear spray, solution"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Solutio pro aerodispersione auriculari"
        }
      ]
    },
    {
      "code" : "AUR SPR SUS",
      "display" : "Ušní sprej, suspenze",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "AUR SPR SUS"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10710000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Ušní sprej, suspenze"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Ear spray, suspension"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Suspensio pro aerodispersione auriculari"
        }
      ]
    },
    {
      "code" : "AUR STL",
      "display" : "Ušní tyčinka",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "AUR STL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10715000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Ušní tyčinka"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Ear stick"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Stylus auricularis"
        }
      ]
    },
    {
      "code" : "AUR TMP",
      "display" : "Ušní tampon",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "AUR TMP"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10714000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Ušní tampon"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Ear tampon"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Tamponum auriculare"
        }
      ]
    },
    {
      "code" : "AUR UNG",
      "display" : "Ušní mast",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "AUR UNG"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10703000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Ušní mast"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Ear ointment"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Unguentum auriculare"
        }
      ]
    },
    {
      "code" : "AUR/NAS GTT SUS",
      "display" : "Ušní/nosní kapky, suspenze",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "AUR/NAS GTT SUS"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50020200"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Ušní/nosní kapky, suspenze"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Ear/nasal drops, suspension"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Oto/rhinoguttae in suspensione"
        }
      ]
    },
    {
      "code" : "AUR/OPH GTT SOL",
      "display" : "Ušní/oční kapky, roztok",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "AUR/OPH GTT SOL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50018000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Ušní/oční kapky, roztok"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Ear/eye drops, solution"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Oto/oculoguttae in solutione"
        }
      ]
    },
    {
      "code" : "AUR/OPH GTT SUS",
      "display" : "Ušní/oční kapky, suspenze",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "AUR/OPH GTT SUS"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50018500"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Ušní/oční kapky, suspenze"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Ear/eye drops, suspension"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Oto/oculoguttae in suspensione"
        }
      ]
    },
    {
      "code" : "AUR/OPH UNG",
      "display" : "Ušní/oční mast",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "AUR/OPH UNG"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50019000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Ušní/oční mast"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Ear/eye ointment"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Unguentum auriculare/ophthalmicum"
        }
      ]
    },
    {
      "code" : "AUR/OPH/NAS GTT SOL",
      "display" : "Ušní/oční/nosní kapky, roztok",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "AUR/OPH/NAS GTT SOL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50019500"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Ušní/oční/nosní kapky, roztok"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Ear/eye/nasal drops, solution"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Oto/oculo/rhinoguttae in solutione"
        }
      ]
    },
    {
      "code" : "BUC FLM",
      "display" : "Bukální film",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "BUC FLM"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10314011"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Bukální film"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Buccal film"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Lamina buccalis"
        }
      ]
    },
    {
      "code" : "BUC TBL ADH",
      "display" : "Mukoadhezivní bukální tableta",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "BUC TBL ADH"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10319000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Mukoadhezivní bukální tableta"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Muco-adhesive buccal tablet"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Tabuletta buccalis mucoadhesiva"
        }
      ]
    },
    {
      "code" : "BUC TBL NOB",
      "display" : "Bukální tableta",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "BUC TBL NOB"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10320000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Bukální tableta"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Buccal tablet"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Tabuletta buccalis"
        }
      ]
    },
    {
      "code" : "CDP SOL",
      "display" : "Roztok pro kardioplegii",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "CDP SOL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "11209500"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Roztok pro kardioplegii"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Solution for cardioplegia"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Solutio pro cardioplegia"
        }
      ]
    },
    {
      "code" : "CDP SOL/SOL CNS ORG",
      "display" : "Roztok pro kardioplegii/konzervování orgánů",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "CDP SOL/SOL CNS ORG"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "13107000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Roztok pro kardioplegii/konzervování orgánů"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Solution for cardioplegia/organ preservation"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Solutio pro cardioplegia/conservatione organorum"
        }
      ]
    },
    {
      "code" : "CNC GGR",
      "display" : "Koncentrát pro kloktadlo",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "CNC GGR"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10302000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Koncentrát pro kloktadlo"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Concentrate for gargle"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Concentratum pro gargarismate"
        }
      ]
    },
    {
      "code" : "CNC SOL NEB",
      "display" : "Koncentrát pro roztok k rozprašování",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "CNC SOL NEB"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "13002000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Koncentrát pro roztok k rozprašování"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Concentrate for nebuliser solution"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Concentratum pro solutione ad nebulisationem"
        }
      ]
    },
    {
      "code" : "CPS AMY",
      "display" : "Škrobová tobolka",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "CPS AMY"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10209000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Škrobová tobolka"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Cachet"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Capsula amylacea"
        }
      ]
    },
    {
      "code" : "CPS DUR",
      "display" : "Tvrdá tobolka",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "CPS DUR"
        },
        {
          "code" : "JE_KONOPI",
          "valueString" : "A"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10210000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Tvrdá tobolka"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Capsule, hard"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Capsula dura"
        }
      ]
    },
    {
      "code" : "CPS DUR MRL",
      "display" : "Tvrdá tobolka s řízeným uvolňováním",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "CPS DUR MRL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10217000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Tvrdá tobolka s řízeným uvolňováním"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Modified-release capsule, hard"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Capsula dura cum liberatione modificata"
        }
      ]
    },
    {
      "code" : "CPS DUR OPE",
      "display" : "Tvrdá tobolka k otevření",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "CPS DUR OPE"
        },
        {
          "code" : "NAZEV",
          "valueString" : "Tvrdá tobolka k otevření"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Capsule, hard for opening"
        }
      ]
    },
    {
      "code" : "CPS DUR+TBL NOB",
      "display" : "Tvrdá tobolka + tableta",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "CPS DUR+TBL NOB"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "14013000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Tvrdá tobolka + tableta"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Capsule, hard  + tablet"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Capsula dura et tabuletta"
        }
      ]
    },
    {
      "code" : "CPS ETD",
      "display" : "Enterosolventní tvrdá tobolka",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "CPS ETD"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10212000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Enterosolventní tvrdá tobolka"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Gastro-resistant capsule, hard"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Capsula enterosolvens dura"
        }
      ]
    },
    {
      "code" : "CPS ETM",
      "display" : "Enterosolventní měkká tobolka",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "CPS ETM"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10213000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Enterosolventní měkká tobolka"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Gastro-resistant capsule, soft"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Capsula enterosolvens mollis"
        }
      ]
    },
    {
      "code" : "CPS MDM",
      "display" : "Žvýkací měkká tobolka",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "CPS MDM"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10214000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Žvýkací měkká tobolka"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Chewable capsule, soft"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Capsula manducabilis mollis"
        }
      ]
    },
    {
      "code" : "CPS MOL",
      "display" : "Měkká tobolka",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "CPS MOL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10211000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Měkká tobolka"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Capsule, soft"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Capsula mollis"
        }
      ]
    },
    {
      "code" : "CPS MOL MRL",
      "display" : "Měkká tobolka s řízeným uvolňováním",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "CPS MOL MRL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10218000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Měkká tobolka s řízeným uvolňováním"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Modified-release capsule, soft"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Capsula mollis cum liberatione modificata"
        }
      ]
    },
    {
      "code" : "CPS MOL+TBL NOB",
      "display" : "Měkká tobolka + tableta",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "CPS MOL+TBL NOB"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "14012000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Měkká tobolka + tableta"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Capsule, soft  +  tablet"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Capsula mollis et tabuletta"
        }
      ]
    },
    {
      "code" : "CPS PML",
      "display" : "Měkká tobolka s prodlouženým uvolňováním",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "CPS PML"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10216000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Měkká tobolka s prodlouženým uvolňováním"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Prolonged-release capsule, soft"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Capsula mollis cum liberatione prolongata"
        }
      ]
    },
    {
      "code" : "CPS PRO",
      "display" : "Tvrdá tobolka s prodlouženým uvolňováním",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "CPS PRO"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10215000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Tvrdá tobolka s prodlouženým uvolňováním"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Prolonged-release capsule, hard"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Capsula dura cum liberatione prolongata"
        }
      ]
    },
    {
      "code" : "CRM",
      "display" : "Krém",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "CRM"
        },
        {
          "code" : "JE_KONOPI",
          "valueString" : "A"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10502000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Krém"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Cream"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Cremor cutaneus"
        }
      ]
    },
    {
      "code" : "CRM+VAG CPS MOL",
      "display" : "Krém + měkká vaginální tobolka",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "CRM+VAG CPS MOL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "14009000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Krém + měkká vaginální tobolka"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Cream + vaginal capsule, soft"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Cremor et capsula vaginalis mollis"
        }
      ]
    },
    {
      "code" : "CRM+VAG GLB",
      "display" : "Krém + vaginální kulička",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "CRM+VAG GLB"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "14001000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Krém + vaginální kulička"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Cream + pessary"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Cremor et globulus vaginalis"
        }
      ]
    },
    {
      "code" : "CRM+VAG TBL NOB",
      "display" : "Krém + vaginální tableta",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "CRM+VAG TBL NOB"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "14010000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Krém + vaginální tableta"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Cream + vaginal tablet"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Cremor et tabuletta vaginalis"
        }
      ]
    },
    {
      "code" : "CTP",
      "display" : "Kataplazma",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "CTP"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10522000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Kataplazma"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Poultice"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Cataplasma"
        }
      ]
    },
    {
      "code" : "DIS NEB",
      "display" : "Disperze k rozprašování",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "DIS NEB"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "13129000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Disperze k rozprašování"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Nebuliser dispersion"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Dispersio ad nebulisationem"
        }
      ]
    },
    {
      "code" : "DNT CMN",
      "display" : "Zubní cement",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "DNT CMN"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10401500"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Zubní cement"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Dental cement"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Cementum dentale"
        }
      ]
    },
    {
      "code" : "DNT EML",
      "display" : "Dentální emulze",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "DNT EML"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10408000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Dentální emulze"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Dental emulsion"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Emulsio dentalis"
        }
      ]
    },
    {
      "code" : "DNT GEL",
      "display" : "Dentální gel",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "DNT GEL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10402000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Dentální gel"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Dental gel"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Gelatum dentale"
        }
      ]
    },
    {
      "code" : "DNT LAC",
      "display" : "Zubní lak",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "DNT LAC"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "12101000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Zubní lak"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Denture lacquer"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Lacca dentalis"
        }
      ]
    },
    {
      "code" : "DNT PLQ GEL",
      "display" : "Prášek a rozpouštědlo pro dentální gel",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "DNT PLQ GEL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50071000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Prášek a rozpouštědlo pro dentální gel"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Powder and solvent for dental gel"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Pulvis et liquefactorium pro gelato dentali"
        }
      ]
    },
    {
      "code" : "DNT PLV",
      "display" : "Dentální prášek",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "DNT PLV"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10405000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Dentální prášek"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Dental powder"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Pulvis dentalis"
        }
      ]
    },
    {
      "code" : "DNT PLV CMN",
      "display" : "Prášek pro zubní cement",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "DNT PLV CMN"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10413000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Prášek pro zubní cement"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Powder for dental cement"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Pulvis pro cemento dentali"
        }
      ]
    },
    {
      "code" : "DNT PLV GEL",
      "display" : "Prášek pro dentální gel",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "DNT PLV GEL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "13022000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Prášek pro dentální gel"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Powder for dental gel"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Pulvis pro gelato dentali"
        }
      ]
    },
    {
      "code" : "DNT PLV SOL",
      "display" : "Prášek pro dentální roztok",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "DNT PLV SOL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50049270"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Prášek pro dentální roztok"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Powder for dental solution"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Pulvis pro solutione dentali"
        }
      ]
    },
    {
      "code" : "DNT PSL CMN",
      "display" : "Prášek a roztok pro zubní cement",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "DNT PSL CMN"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10412000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Prášek a roztok pro zubní cement"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Powder and solution for dental cement"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Pulvis et solutio pro cemento dentali"
        }
      ]
    },
    {
      "code" : "DNT PST",
      "display" : "Zubní pasta",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "DNT PST"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10409000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Zubní pasta"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Toothpaste"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Pasta stomatologica"
        }
      ]
    },
    {
      "code" : "DNT PST MED",
      "display" : "Dentální pasta",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "DNT PST MED"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50017000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Dentální pasta"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Dental paste"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Pasta dentalis"
        }
      ]
    },
    {
      "code" : "DNT SOL",
      "display" : "Dentální roztok",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "DNT SOL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10406000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Dentální roztok"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Dental solution"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Solutio dentalis"
        }
      ]
    },
    {
      "code" : "DNT SOL CMN",
      "display" : "Roztok pro zubní cement",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "DNT SOL CMN"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10414000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Roztok pro zubní cement"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Solution for dental cement"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Solutio pro cemento dentali"
        }
      ]
    },
    {
      "code" : "DNT STL",
      "display" : "Dentální tyčinka",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "DNT STL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10403000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Dentální tyčinka"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Dental stick"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Stylus dentalis"
        }
      ]
    },
    {
      "code" : "DNT SUS",
      "display" : "Dentální suspenze",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "DNT SUS"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10407000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Dentální suspenze"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Dental suspension"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Suspensio dentalis"
        }
      ]
    },
    {
      "code" : "DRM CNC EML",
      "display" : "Koncentrát pro kožní emulzi",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "DRM CNC EML"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "13162000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Koncentrát pro kožní emulzi"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Concentrate for cutaneous emulsion"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Concentratum pro emulsione cutanea"
        }
      ]
    },
    {
      "code" : "DRM CNC SOL",
      "display" : "Koncentrát pro kožní roztok",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "DRM CNC SOL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10514000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Koncentrát pro kožní roztok"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Concentrate for cutaneous solution"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Concentratum pro solutione cutaneo"
        }
      ]
    },
    {
      "code" : "DRM CSL LQF",
      "display" : "Koncentrát a rozpouštědlo pro kožní roztok",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "DRM CSL LQF"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50003000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Koncentrát a rozpouštědlo pro kožní roztok"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Concentrate and solvent for cutaneous solution"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Concentratum et liquefactorium pro solutione cutaneo"
        }
      ]
    },
    {
      "code" : "DRM EML",
      "display" : "Kožní emulze",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "DRM EML"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10516000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Kožní emulze"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Cutaneous emulsion"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Emulsio cutanea"
        }
      ]
    },
    {
      "code" : "DRM EMP",
      "display" : "Kožní náplast",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "DRM EMP"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10517500"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Kožní náplast"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Cutaneous patch"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Emplastrum cutaneum"
        }
      ]
    },
    {
      "code" : "DRM LAC",
      "display" : "Kožní lak",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "DRM LAC"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10520000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Kožní lak"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Collodion"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Lacca cutanea"
        }
      ]
    },
    {
      "code" : "DRM LIQ",
      "display" : "Kožní tekutina",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "DRM LIQ"
        },
        {
          "code" : "JE_KONOPI",
          "valueString" : "A"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10512000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Kožní tekutina"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Cutaneous liquid"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Liquidum cutaneum"
        }
      ]
    },
    {
      "code" : "DRM PLQ SOL",
      "display" : "Prášek a rozpouštědlo pro kožní roztok",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "DRM PLQ SOL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50044000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Prášek a rozpouštědlo pro kožní roztok"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Powder and solvent for cutaneous solution"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Pulvis et liquefactorium pro solutione cutaneo"
        }
      ]
    },
    {
      "code" : "DRM PLV ADS",
      "display" : "Kožní zásyp",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "DRM PLV ADS"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10517000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Kožní zásyp"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Cutaneous powder"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Pulvis adspersorius"
        }
      ]
    },
    {
      "code" : "DRM PLV SOL",
      "display" : "Prášek pro kožní roztok",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "DRM PLV SOL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10514500"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Prášek pro kožní roztok"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Powder for cutaneous solution"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Pulvis pro solutione cutaneo"
        }
      ]
    },
    {
      "code" : "DRM PST",
      "display" : "Kožní pasta",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "DRM PST"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10505000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Kožní pasta"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Cutaneous paste"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Pasta cutanea"
        }
      ]
    },
    {
      "code" : "DRM PTC PSO",
      "display" : "Prášek pro roztok pro kožní prick test",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "DRM PTC PSO"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "13032000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Prášek pro roztok pro kožní prick test"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Powder for solution for skin-prick test"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Pulvis pro solutione pro prick-testo cutaneo"
        }
      ]
    },
    {
      "code" : "DRM PTC SOL",
      "display" : "Roztok pro kožní prick test",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "DRM PTC SOL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10548000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Roztok pro kožní prick test"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Solution for skin-prick test"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Solutio pro prick-testo cutaneo"
        }
      ]
    },
    {
      "code" : "DRM SOL",
      "display" : "Kožní roztok",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "DRM SOL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10513000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Kožní roztok"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Cutaneous solution"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Solutio cutanea"
        }
      ]
    },
    {
      "code" : "DRM SOL MDC",
      "display" : "Kožní roztok v jednodávkovém obalu",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "DRM SOL MDC"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "13103000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Kožní roztok v jednodávkovém obalu"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Cutaneous solution in single-dose container"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Solutio cutanea in vase monodosali"
        }
      ]
    },
    {
      "code" : "DRM SOL+SPO MED",
      "display" : "Kožní roztok + léčivá hubka",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "DRM SOL+SPO MED"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "14002000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Kožní roztok + léčivá hubka"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Cutaneous solution + medicated sponge"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Solutio cutanea et spongiola medicinalis"
        }
      ]
    },
    {
      "code" : "DRM SOL/ORM CNC SOL",
      "display" : "Kožní roztok/koncentrát pro orální roztok",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "DRM SOL/ORM CNC SOL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50015450"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Kožní roztok/koncentrát pro orální roztok"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Cutaneous solution/concentrate for oromucosal solution"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Solutio cutanea/concentratum pro solutione oromucosali"
        }
      ]
    },
    {
      "code" : "DRM SPM",
      "display" : "Kožní pěna",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "DRM SPM"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10507000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Kožní pěna"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Cutaneous foam"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Spuma cutanea"
        }
      ]
    },
    {
      "code" : "DRM SPR CML",
      "display" : "Koncentrát pro kožní sprej, emulze",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "DRM SPR CML"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50009000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Koncentrát pro kožní sprej, emulze"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Concentrate for cutaneous spray, emulsion"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Concentratum pro aerodispersione cutaneo in emulsione"
        }
      ]
    },
    {
      "code" : "DRM SPR EML",
      "display" : "Kožní sprej, emulze",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "DRM SPR EML"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50015500"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Kožní sprej, emulze"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Cutaneous spray, emulsion"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Emulsio pro aerodispersione cutaneo"
        }
      ]
    },
    {
      "code" : "DRM SPR PLV",
      "display" : "Kožní sprej, prášek",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "DRM SPR PLV"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10511000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Kožní sprej, prášek"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Cutaneous spray, powder"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Pulvis adspersorius pro aerodispersione"
        }
      ]
    },
    {
      "code" : "DRM SPR SOL",
      "display" : "Kožní sprej, roztok",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "DRM SPR SOL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10509000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Kožní sprej, roztok"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Cutaneous spray, solution"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Solutio pro aerodispersione cutaneo"
        }
      ]
    },
    {
      "code" : "DRM SPR SUS",
      "display" : "Kožní sprej, suspenze",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "DRM SPR SUS"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10510000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Kožní sprej, suspenze"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Cutaneous spray, suspension"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Suspensio pro aerodispersione cutaneo"
        }
      ]
    },
    {
      "code" : "DRM SPR UNG",
      "display" : "Kožní sprej, mast",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "DRM SPR UNG"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50016000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Kožní sprej, mast"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Cutaneous spray, ointment"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Unguentum pro aerodispersione cutaneo"
        }
      ]
    },
    {
      "code" : "DRM STC SOL",
      "display" : "Roztok pro kožní scratch test",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "DRM STC SOL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10549000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Roztok pro kožní scratch test"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Solution for skin-scratch test"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Solutio pro scratch-testo cutaneo"
        }
      ]
    },
    {
      "code" : "DRM STL",
      "display" : "Kožní tyčinka",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "DRM STL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10523000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Kožní tyčinka"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Cutaneous stick"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Stylus cutaneus"
        }
      ]
    },
    {
      "code" : "DRM SUS",
      "display" : "Kožní suspenze",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "DRM SUS"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10515000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Kožní suspenze"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Cutaneous suspension"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Suspensio cutanea"
        }
      ]
    },
    {
      "code" : "DRM TBL SOL",
      "display" : "Tableta pro kožní roztok",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "DRM TBL SOL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "13066000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Tableta pro kožní roztok"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Tablet for cutaneous solution"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Tabuletta pro solutione cutaneo"
        }
      ]
    },
    {
      "code" : "DRM TMP IPR",
      "display" : "Impregnovaný kožní tampon",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "DRM TMP IPR"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "13145000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Impregnovaný kožní tampon"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Impregnated cutaneous swab"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Tamponum cutaneum impraegnatum"
        }
      ]
    },
    {
      "code" : "DRM/NAS UNG",
      "display" : "Kožní/nosní mast",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "DRM/NAS UNG"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50015200"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Kožní/nosní mast"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Cutaneous/nasal ointment"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Unguentum cutaneum/nasale"
        }
      ]
    },
    {
      "code" : "DRM/ORM SOL",
      "display" : "Kožní/orální roztok",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "DRM/ORM SOL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "13140000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Kožní/orální roztok"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Cutaneous/oromucosal solution"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Solutio cutanea/oromucosalis"
        }
      ]
    },
    {
      "code" : "EML NEB",
      "display" : "Emulze k rozprašování",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "EML NEB"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "11105000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Emulze k rozprašování"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Nebuliser emulsion"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Emulsio ad nebulisationem"
        }
      ]
    },
    {
      "code" : "EMP MED",
      "display" : "Léčivá náplast",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "EMP MED"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10506000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Léčivá náplast"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Medicated plaster"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Emplastrum medicinalis"
        }
      ]
    },
    {
      "code" : "EMP PRV",
      "display" : "Náplast pro provokační test",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "EMP PRV"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10550000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Náplast pro provokační test"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Plaster for provocation test"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Emplastrum pro testo provocante"
        }
      ]
    },
    {
      "code" : "ENC GEL",
      "display" : "Endocervikální gel",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "ENC GEL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "11701000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Endocervikální gel"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Endocervical gel"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Gelatum endocervicale"
        }
      ]
    },
    {
      "code" : "ENC PLQ GEL",
      "display" : "Prášek a rozpouštědlo pro endocervikální gel",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "ENC PLQ GEL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "11702000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Prášek a rozpouštědlo pro endocervikální gel"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Powder and solvent for endocervical gel"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Pulvis et liquefactorium pro gelato endocervicali"
        }
      ]
    },
    {
      "code" : "ENC PLV GEL",
      "display" : "Prášek pro endocervikální gel",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "ENC PLV GEL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "13024000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Prášek pro endocervikální gel"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Powder for endocervical gel"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Pulvis pro gelato endocervicali"
        }
      ]
    },
    {
      "code" : "ENS IRR SUS",
      "display" : "Suspenze k výplachu paranazálních dutin",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "ENS IRR SUS"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50022000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Suspenze k výplachu paranazálních dutin"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Endosinusial wash, suspension"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Suspensio pro lotione endosinusiali"
        }
      ]
    },
    {
      "code" : "ENS PLQ SOL",
      "display" : "Prášek a rozpouštědlo pro roztok k výplachu paranazálních dutin",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "ENS PLQ SOL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50045000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Prášek a rozpouštědlo pro roztok k výplachu paranazálních dutin"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Powder and solvent for endosinusial solution"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Pulvis et liquefactorium pro solutione endosinusiali"
        }
      ]
    },
    {
      "code" : "ENS PLV SOL",
      "display" : "Prášek pro roztok k výplachu paranazálních dutin",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "ENS PLV SOL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "13025000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Prášek pro roztok k výplachu paranazálních dutin"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Powder for endosinusial solution"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Pulvis pro solutione endosinusiali"
        }
      ]
    },
    {
      "code" : "ENS SOL",
      "display" : "Roztok k výplachu paranazálních dutin",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "ENS SOL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "13041000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Roztok k výplachu paranazálních dutin"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Endosinusial solution"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Solutio endosinusialis"
        }
      ]
    },
    {
      "code" : "EPL PLQ SOL",
      "display" : "Prášek a rozpouštědlo pro epilezionální roztok",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "EPL PLQ SOL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50045500"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Prášek a rozpouštědlo pro epilezionální roztok"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Powder and solvent for epilesional solution"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Pulvis et liquefactorium pro solutione epilaesionali"
        }
      ]
    },
    {
      "code" : "EPL PLV SOL",
      "display" : "Prášek pro epilezionální roztok",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "EPL PLV SOL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50049300"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Prášek pro epilezionální roztok"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Powder for epilesional solution"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Pulvis pro solutione epilaesionali"
        }
      ]
    },
    {
      "code" : "EPL SOL",
      "display" : "Epilezionální roztok",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "EPL SOL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "13042000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Epilezionální roztok"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Epilesional solution"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Solutio epilaesionalis"
        }
      ]
    },
    {
      "code" : "ETP ISL PLQ SOL",
      "display" : "Endotracheopulmonální instilace, prášek a rozpouštědlo pro roztok",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "ETP ISL PLQ SOL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "11604000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Endotracheopulmonální instilace, prášek a rozpouštědlo pro roztok"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Endotracheopulmonary instillation, powder and solvent for solution"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Pulvis et liquefactorium pro solutione ad instillationem endotracheopulmonalem"
        }
      ]
    },
    {
      "code" : "ETP ISL PLQ SUS",
      "display" : "Endotracheopulmonální instilace, prášek a rozpouštědlo pro suspenzi",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "ETP ISL PLQ SUS"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "11605000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Endotracheopulmonální instilace, prášek a rozpouštědlo pro suspenzi"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Endotracheopulmonary instillation, powder and solvent for suspension"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Pulvis et liquefactorium pro suspensione ad instillationem endotracheopulmonalem"
        }
      ]
    },
    {
      "code" : "ETP ISL PSO",
      "display" : "Endotracheopulmonální instilace, prášek pro roztok",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "ETP ISL PSO"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "11602000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Endotracheopulmonální instilace, prášek pro roztok"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Endotracheopulmonary instillation, powder for solution"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Pulvis pro solutione ad instillationem endotracheopulmonalem"
        }
      ]
    },
    {
      "code" : "ETP ISL PSU",
      "display" : "Endotracheopulmonální instilace, prášek pro suspenzi",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "ETP ISL PSU"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "13009000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Endotracheopulmonální instilace, prášek pro suspenzi"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Endotracheopulmonary instillation, powder for suspension"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Pulvis pro suspensione ad instillationem endotracheopulmonalem"
        }
      ]
    },
    {
      "code" : "ETP ISL SOL",
      "display" : "Roztok k endotracheopulmonální instilaci",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "ETP ISL SOL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "11601000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Roztok k endotracheopulmonální instilaci"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Endotracheopulmonary instillation, solution"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Solutio ad instillationem endotracheopulmonalem"
        }
      ]
    },
    {
      "code" : "ETP ISL SUS",
      "display" : "Suspenze k endotracheopulmonální instilaci",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "ETP ISL SUS"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "11603000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Suspenze k endotracheopulmonální instilaci"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Endotracheopulmonary instillation, suspension"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Suspensio ad instillationem endotracheopulmonalem"
        }
      ]
    },
    {
      "code" : "FIL MED",
      "display" : "Léčivé vlákno",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "FIL MED"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "12130000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Léčivé vlákno"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Medicated thread"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Filum medicinale"
        }
      ]
    },
    {
      "code" : "GAS CRS",
      "display" : "Medicinální plyn, stlačený",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "GAS CRS"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "12301000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Medicinální plyn, stlačený"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Medicinal gas, compressed"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Gasum medicinale compressum"
        }
      ]
    },
    {
      "code" : "GAS CRY",
      "display" : "Medicinální plyn, kryogenní",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "GAS CRY"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "12302000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Medicinální plyn, kryogenní"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Medicinal gas, cryogenic"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Gasum medicinale cryogenum"
        }
      ]
    },
    {
      "code" : "GAS LIQ",
      "display" : "Medicinální plyn, zkapalněný",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "GAS LIQ"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "12303000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Medicinální plyn, zkapalněný"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Medicinal gas, liquefied"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Gasum medicinale liquefactum"
        }
      ]
    },
    {
      "code" : "GEL",
      "display" : "Gel",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "GEL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10503000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Gel"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Gel"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Gelatum cutaneum"
        }
      ]
    },
    {
      "code" : "GEL GEL",
      "display" : "Gel pro přípravu gelu",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "GEL GEL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "13014000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Gel pro přípravu gelu"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Gel for gel"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Gelatum pro gelato"
        }
      ]
    },
    {
      "code" : "GEL PSS",
      "display" : "Gel v tlakovém obalu",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "GEL PSS"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50026400"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Gel v tlakovém obalu"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Gel in pressurised container"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Gelatum in vase cum pressu"
        }
      ]
    },
    {
      "code" : "GEL SCC",
      "display" : "Gel v sáčku",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "GEL SCC"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "13069000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Gel v sáčku"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Gel in sachet"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Gelatum in sacullo"
        }
      ]
    },
    {
      "code" : "GGR",
      "display" : "Kloktadlo",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "GGR"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10301000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Kloktadlo"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Gargle"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Gargarisma"
        }
      ]
    },
    {
      "code" : "GGR/GNG AQA",
      "display" : "Kloktadlo/ústní výplach",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "GGR/GNG AQA"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50024000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Kloktadlo/ústní výplach"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Gargle/mouth wash"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Gargarisma/aqua gingivalis"
        }
      ]
    },
    {
      "code" : "GGR/NAS LOT",
      "display" : "Kloktadlo/nosní výplach",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "GGR/NAS LOT"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50024500"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Kloktadlo/nosní výplach"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Gargle/nasal wash"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Gargarisma/lotio nasalis"
        }
      ]
    },
    {
      "code" : "GKU",
      "display" : "Tkáňové lepidlo",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "GKU"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "12115000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Tkáňové lepidlo"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Sealant"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Glutinum telae vivae"
        }
      ]
    },
    {
      "code" : "GKU PLV",
      "display" : "Tkáňové lepidlo, prášek",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "GKU PLV"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "12115200"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Tkáňové lepidlo, prášek"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Sealant powder"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Glutino telae vivae, pulvis"
        }
      ]
    },
    {
      "code" : "GLB",
      "display" : "Perorální globule",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "GLB"
        },
        {
          "code" : "NAZEV",
          "valueString" : "Perorální globule"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Oral globule"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Globulus perorales"
        }
      ]
    },
    {
      "code" : "GNG AQA",
      "display" : "Roztok pro ústní výplach",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "GNG AQA"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10310000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Roztok pro ústní výplach"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Mouthwash"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Aqua gingivalis"
        }
      ]
    },
    {
      "code" : "GNG GEL",
      "display" : "Gel na dásně",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "GNG GEL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10315000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Gel na dásně"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Gingival gel"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Gelatum gingivale"
        }
      ]
    },
    {
      "code" : "GNG PLQ GEL",
      "display" : "Prášek a rozpouštědlo pro gel na dásně",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "GNG PLQ GEL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50046000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Prášek a rozpouštědlo pro gel na dásně"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Powder and solvent for gingival gel"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Pulvis et liquefactorium pro gelato gingivali"
        }
      ]
    },
    {
      "code" : "GNG PLV AQA",
      "display" : "Ústní výplach, prášek pro roztok",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "GNG PLV AQA"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50036050"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Ústní výplach, prášek pro roztok"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Mouthwash, powder for solution"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Pulvis pro aqua gingivali"
        }
      ]
    },
    {
      "code" : "GNG PLV GEL",
      "display" : "Prášek pro gel na dásně",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "GNG PLV GEL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "13026000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Prášek pro gel na dásně"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Powder for gingival gel"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Pulvis pro gelato gingivali"
        }
      ]
    },
    {
      "code" : "GNG PST",
      "display" : "Pasta na dásně",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "GNG PST"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10316000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Pasta na dásně"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Gingival paste"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Pasta gingivalis"
        }
      ]
    },
    {
      "code" : "GNG SOL",
      "display" : "Roztok na dásně",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "GNG SOL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10312000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Roztok na dásně"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Gingival solution"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Solutio gingivalis"
        }
      ]
    },
    {
      "code" : "GNG TBL AQA",
      "display" : "Ústní výplach, tableta pro roztok",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "GNG TBL AQA"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10311000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Ústní výplach, tableta pro roztok"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Mouthwash, tablet for solution"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Tabuletta pro aqua gingivali"
        }
      ]
    },
    {
      "code" : "GRA",
      "display" : "Granule",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "GRA"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10204000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Granule"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Granules"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Granula"
        }
      ]
    },
    {
      "code" : "GRA CPS OPE",
      "display" : "Granule v tobolce k otevření",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "GRA CPS OPE"
        },
        {
          "code" : "NAZEV",
          "valueString" : "Granule v tobolce k otevření"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Granules in capsules for opening"
        }
      ]
    },
    {
      "code" : "GRA EFF",
      "display" : "Šumivé granule",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "GRA EFF"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10205000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Šumivé granule"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Effervescent granules"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Granula effervescentia"
        }
      ]
    },
    {
      "code" : "GRA EFF+TBL ENT",
      "display" : "Šumivé granule + enterosolventní tableta",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "GRA EFF+TBL ENT"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "14016000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Šumivé granule + enterosolventní tableta"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Effervescent granules + gastro-resistant tablet"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Granula effervescentia et tabuletta enterosolvens"
        }
      ]
    },
    {
      "code" : "GRA EFF+TBL FLM",
      "display" : "Šumivé granule + potahovaná tableta",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "GRA EFF+TBL FLM"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "14006000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Šumivé granule + potahovaná tableta"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Effervescent granules + film-coated tablet"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Granula effervescentia et tabuletta filmo obducta"
        }
      ]
    },
    {
      "code" : "GRA ENP",
      "display" : "Enterosolventní granule s prodlouženým uvolňováním",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "GRA ENP"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50026250"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Enterosolventní granule s prodlouženým uvolňováním"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Gastro-resistant prolonged release granules"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Granula enterosolventia cum liberatione prolongata"
        }
      ]
    },
    {
      "code" : "GRA ENT",
      "display" : "Enterosolventní granule",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "GRA ENT"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10206000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Enterosolventní granule"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Gastro-resistant granules"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Granula enterosolventia"
        }
      ]
    },
    {
      "code" : "GRA FLM",
      "display" : "Potahované granule",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "GRA FLM"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "13046000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Potahované granule"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Film-coated granules"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Granula film obducta"
        }
      ]
    },
    {
      "code" : "GRA FLM MDC",
      "display" : "Potahované granule v jednodávkovém obalu",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "GRA FLM MDC"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "13155000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Potahované granule v jednodávkovém obalu"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Film-coated granules in single-dose container"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Granula film obducta in vase monodosali"
        }
      ]
    },
    {
      "code" : "GRA FLM SCC",
      "display" : "Potahované granule v sáčku",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "GRA FLM SCC"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "13195000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Potahované granule v sáčku"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Film-coated granules in sachet"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Granula film obducta in sacculo"
        }
      ]
    },
    {
      "code" : "GRA MDC",
      "display" : "Granule v jednodávkovém obalu",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "GRA MDC"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "13090000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Granule v jednodávkovém obalu"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Granules in single-dose container"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Granula in vase monodosali"
        }
      ]
    },
    {
      "code" : "GRA MRL",
      "display" : "Granule s řízeným uvolňováním",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "GRA MRL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10208000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Granule s řízeným uvolňováním"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Modified-release granules"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Granula cum liberatione modificata"
        }
      ]
    },
    {
      "code" : "GRA OBD",
      "display" : "Obalené granule",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "GRA OBD"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "13046000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Obalené granule"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Coated granules"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Granula obducta"
        }
      ]
    },
    {
      "code" : "GRA OBD SCC",
      "display" : "Obalené granule v sáčku",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "GRA OBD SCC"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50001250"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Obalené granule v sáčku"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Coated granules in sachet"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Granula obducta in sacullo"
        }
      ]
    },
    {
      "code" : "GRA PRO",
      "display" : "Granule s prodlouženým uvolňováním",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "GRA PRO"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10207000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Granule s prodlouženým uvolňováním"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Prolonged-release granules"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Granula cum liberatione prolongata"
        }
      ]
    },
    {
      "code" : "GRA PRO SCC",
      "display" : "Granule s prodlouženým uvolňováním v sáčku",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "GRA PRO SCC"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50056200"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Granule s prodlouženým uvolňováním v sáčku"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Prolonged-release granules in sachet"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Granula cum liberatione prolongata in sacullo"
        }
      ]
    },
    {
      "code" : "GRA SCC",
      "display" : "Granule v sáčku",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "GRA SCC"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50029550"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Granule v sáčku"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Granules in sachet"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Granula in sacullo"
        }
      ]
    },
    {
      "code" : "GRA SIR",
      "display" : "Granule pro sirup",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "GRA SIR"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10119000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Granule pro sirup"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Granules for syrup"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Granula pro sirupo"
        }
      ]
    },
    {
      "code" : "GST EML",
      "display" : "Gastroenterální emulze",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "GST EML"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "12111000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Gastroenterální emulze"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Gastroenteral emulsion"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Emulsio gastroenteralis"
        }
      ]
    },
    {
      "code" : "GST SOL",
      "display" : "Gastroenterální roztok",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "GST SOL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "12108000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Gastroenterální roztok"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Gastroenteral solution"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Solutio gastroenteralis"
        }
      ]
    },
    {
      "code" : "GST SUS",
      "display" : "Gastroenterální suspenze",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "GST SUS"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "12110000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Gastroenterální suspenze"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Gastroenteral suspension"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Suspensio gastroenteralis"
        }
      ]
    },
    {
      "code" : "GUM MND",
      "display" : "Léčivá žvýkací guma",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "GUM MND"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10229000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Léčivá žvýkací guma"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Medicated chewing-gum"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Gummi manducabile medicinale"
        }
      ]
    },
    {
      "code" : "HDF SOL",
      "display" : "Roztok pro hemodiafiltraci",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "HDF SOL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "11403000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Roztok pro hemodiafiltraci"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Solution for haemodiafiltration"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Solutio pro haemodiafiltratione"
        }
      ]
    },
    {
      "code" : "HFL SOL",
      "display" : "Roztok pro hemofiltraci",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "HFL SOL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "11402000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Roztok pro hemofiltraci"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Solution for haemofiltration"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Solutio pro haemofiltratione"
        }
      ]
    },
    {
      "code" : "HFL/HMD/HDF SOL",
      "display" : "Roztok pro hemofiltraci, hemodialýzu a hemodiafiltraci",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "HFL/HMD/HDF SOL"
        },
        {
          "code" : "NAZEV",
          "valueString" : "Roztok pro hemofiltraci, hemodialýzu a hemodiafiltraci"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Solution for /hemofiltration/haemodialysis/haemodiafiltration"
        }
      ]
    },
    {
      "code" : "HIR MED",
      "display" : "Pijavka lékařská",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "HIR MED"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "13115000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Pijavka lékařská"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Medicinal leech"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Hirudo medicinalis"
        }
      ]
    },
    {
      "code" : "HMD CNC SOL",
      "display" : "Koncentrát pro roztok k hemodialýze",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "HMD CNC SOL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "11405000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Koncentrát pro roztok k hemodialýze"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Concentrate for solution for haemodialysis"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Concentratum pro solutione ad haemodialysim"
        }
      ]
    },
    {
      "code" : "HMD PCC SOL",
      "display" : "Prášek pro koncentrát pro roztok k hemodialýze",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "HMD PCC SOL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50049200"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Prášek pro koncentrát pro roztok k hemodialýze"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Powder for concentrate for solution for haemodialysis"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Pulvis pro concentrato pro solutione ad haemodialysim"
        }
      ]
    },
    {
      "code" : "HMD SOL",
      "display" : "Roztok pro hemodialýzu",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "HMD SOL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "11404000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Roztok pro hemodialýzu"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Solution for haemodialysis"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Solutio pro haemodialysi"
        }
      ]
    },
    {
      "code" : "HMD/HFL SOL",
      "display" : "Roztok pro hemodialýzu/hemofiltraci",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "HMD/HFL SOL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50057000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Roztok pro hemodialýzu/hemofiltraci"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Solution for haemodialysis/haemofiltration"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Solutio pro haemodialysi/haemofiltratio­ne"
        }
      ]
    },
    {
      "code" : "ICM IMP",
      "display" : "Implantát do přední oční komory",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "ICM IMP"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "13190000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Implantát do přední oční komory"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Intracameral implant"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Implantatum intracamerale"
        }
      ]
    },
    {
      "code" : "ICM IMP APL",
      "display" : "Implantát do přední oční komory v aplikátoru",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "ICM IMP APL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "13192000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Implantát do přední oční komory v aplikátoru"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Intracameral implant in applicator"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Implantatum intracamerale in instrumento ad applicationem"
        }
      ]
    },
    {
      "code" : "IMP",
      "display" : "Implantát",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "IMP"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "11301000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Implantát"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Implant"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Implantatum"
        }
      ]
    },
    {
      "code" : "IMP CAT",
      "display" : "Implantační řetězec",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "IMP CAT"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "11303000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Implantační řetězec"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Implantation chain"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Catena implantabilis"
        }
      ]
    },
    {
      "code" : "IMP GEL",
      "display" : "Implantační gel",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "IMP GEL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "13186000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Implantační gel"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Implantation gel"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Gelatum implantabile"
        }
      ]
    },
    {
      "code" : "IMP GEL DIS",
      "display" : "Disperze pro implantační gel",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "IMP GEL DIS"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "13187000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Disperze pro implantační gel"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Dispersion for implantation gel"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Dispersio pro gelato implantabili"
        }
      ]
    },
    {
      "code" : "IMP GEL DSS",
      "display" : "Disperze a roztok pro implantační gel",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "IMP GEL DSS"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "13189000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Disperze a roztok pro implantační gel"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Dispersion and solution for implantation gel"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Dispersio et solutio pro gelato implantabili"
        }
      ]
    },
    {
      "code" : "IMP GEL SOL",
      "display" : "Roztok pro implantační gel",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "IMP GEL SOL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "13188000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Roztok pro implantační gel"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Solution for implantation gel"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Solutio pro gelato implantabili"
        }
      ]
    },
    {
      "code" : "IMP ISP",
      "display" : "Implantát v předplněné injekční stříkačce",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "IMP ISP"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50029750"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Implantát v předplněné injekční stříkačce"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Implant in pre-filled syringe"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Implantatum in syringa praeimpleta"
        }
      ]
    },
    {
      "code" : "IMP MTX",
      "display" : "Implantační matrice",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "IMP MTX"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "11303300"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Implantační matrice"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Implantation matrix"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Matrix implantabilis"
        }
      ]
    },
    {
      "code" : "IMP MTX MTX",
      "display" : "Nosič pro implantační matrici",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "IMP MTX MTX"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "13018000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Nosič pro implantační matrici"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Matrix for implantation matrix"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Matrix pro matrice implantabili"
        }
      ]
    },
    {
      "code" : "IMP PLM MTX",
      "display" : "Prášek, rozpouštědlo a nosič pro implantační matrici",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "IMP PLM MTX"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50055350"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Prášek, rozpouštědlo a nosič pro implantační matrici"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Powder, solvent and matrix for implantation matrix"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Pulvis, liquefactorium et matrix pro matrix implantabili"
        }
      ]
    },
    {
      "code" : "IMP PLQ PST",
      "display" : "Prášek a rozpouštědlo pro implantační pastu",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "IMP PLQ PST"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "11304000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Prášek a rozpouštědlo pro implantační pastu"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Powder and solvent for implantation paste"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Pulvis et liquefactorium pro pasta implantabili"
        }
      ]
    },
    {
      "code" : "IMP PLV MTX",
      "display" : "Prášek pro implantační matrici",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "IMP PLV MTX"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "13027000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Prášek pro implantační matrici"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Powder for implantation matrix"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Pulvis pro matrice implantabili"
        }
      ]
    },
    {
      "code" : "IMP PLV PST",
      "display" : "Prášek pro implantační pastu",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "IMP PLV PST"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "13028000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Prášek pro implantační pastu"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Powder for implantation paste"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Pulvis pro pasta implantabili"
        }
      ]
    },
    {
      "code" : "IMP PLV SUS",
      "display" : "Prášek pro implantační suspenzi",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "IMP PLV SUS"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50049500"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Prášek pro implantační suspenzi"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Powder for implantation suspension"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Pulvis pro suspensione implantabili"
        }
      ]
    },
    {
      "code" : "IMP PST",
      "display" : "Implantační pasta",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "IMP PST"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "13043000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Implantační pasta"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Implantation paste"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Pasta implantabilis"
        }
      ]
    },
    {
      "code" : "IMP SUS",
      "display" : "Implantační suspenze",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "IMP SUS"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "11303500"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Implantační suspenze"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Implantation suspension"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Suspensio implantabilis"
        }
      ]
    },
    {
      "code" : "IMP TBL",
      "display" : "Implantační tableta",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "IMP TBL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "11302000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Implantační tableta"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Implantation tablet"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Tabuletta implantabilis"
        }
      ]
    },
    {
      "code" : "INF CNC DIS",
      "display" : "Koncentrát pro infuzní disperzi",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "INF CNC DIS"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50009300"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Koncentrát pro infuzní disperzi"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Concentrate for dispersion for infusion"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Concentratum pro dispersione infundibili"
        }
      ]
    },
    {
      "code" : "INF CNC EML",
      "display" : "Koncentrát pro infuzní emulzi",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "INF CNC EML"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50009500"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Koncentrát pro infuzní emulzi"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Concentrate for emulsion for infusion"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Concentratum pro emulsione  infundibili"
        }
      ]
    },
    {
      "code" : "INF CNC SOL",
      "display" : "Koncentrát pro infuzní roztok",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "INF CNC SOL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "11213000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Koncentrát pro infuzní roztok"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Concentrate for solution for infusion"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Concentratum pro solutione infundibili"
        }
      ]
    },
    {
      "code" : "INF CSC SOL",
      "display" : "Koncentrát pro koncentrát pro infuzní roztok",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "INF CSC SOL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "13001000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Koncentrát pro koncentrát pro infuzní roztok"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Concentrate for concentrate for solution for infusion"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Concentratum pro concentrato pro solutione infundibili"
        }
      ]
    },
    {
      "code" : "INF CSL LQC",
      "display" : "Koncentrát a rozpouštědlo koncentrátu pro infuzní roztok",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "INF CSL LQC"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50002000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Koncentrát a rozpouštědlo koncentrátu pro infuzní roztok"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Concentrate and solvent for concentrate for solution for infusion"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Concentratum et liquefactorium concentrati pro solutione infundibili"
        }
      ]
    },
    {
      "code" : "INF CSL LQF",
      "display" : "Koncentrát a rozpouštědlo pro infuzní roztok",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "INF CSL LQF"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50006000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Koncentrát a rozpouštědlo pro infuzní roztok"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Concentrate and solvent for solution for infusion"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Concentratum et liquefactorium pro solutione infundibili"
        }
      ]
    },
    {
      "code" : "INF DCN DIS",
      "display" : "Disperze pro koncentrát pro infuzní disperzi",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "INF DCN DIS"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "13005000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Disperze pro koncentrát pro infuzní disperzi"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Dispersion for concentrate for dispersion for infusion"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Dispersio pro concentrato pro dispersione infundibili"
        }
      ]
    },
    {
      "code" : "INF DIS",
      "display" : "Infuzní disperze",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "INF DIS"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50017500"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Infuzní disperze"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Dispersion for infusion"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Dispersio infundibilis"
        }
      ]
    },
    {
      "code" : "INF DSP LQC DIS",
      "display" : "Disperze, prášek a rozpouštědlo koncentrátu pro infuzní disperzi",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "INF DSP LQC DIS"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "13170000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Disperze, prášek a rozpouštědlo koncentrátu pro infuzní disperzi"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Dispersion, powder and solvent for concentrate for dispersion for infusion"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Dispersio, pulvis et liquefactorium concentrati pro dispersione infundibili"
        }
      ]
    },
    {
      "code" : "INF EML",
      "display" : "Infuzní emulze",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "INF EML"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "11211000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Infuzní emulze"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Emulsion for infusion"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Emulsio infundibilis"
        }
      ]
    },
    {
      "code" : "INF EML APS",
      "display" : "Infuzní emulze v aplikačním systému",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "INF EML APS"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "13095000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Infuzní emulze v aplikačním systému"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Emulsion for infusion in administration system"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Emulsio infundibilis in systemate ad applicationem"
        }
      ]
    },
    {
      "code" : "INF GAS DIS",
      "display" : "Plyn pro infuzní disperzi",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "INF GAS DIS"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "13012000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Plyn pro infuzní disperzi"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Gas for dispersion for infusion"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Gasum pro dispersione infundibili"
        }
      ]
    },
    {
      "code" : "INF LQF SOL",
      "display" : "Rozpouštědlo pro infuzní roztok",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "INF LQF SOL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50076000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Rozpouštědlo pro infuzní roztok"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Solvent for solution for infusion"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Liquefactorium pro solutione infundibili"
        }
      ]
    },
    {
      "code" : "INF PCC DIS",
      "display" : "Prášek pro koncentrát pro infuzní disperzi",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "INF PCC DIS"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50048750"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Prášek pro koncentrát pro infuzní disperzi"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Powder for concentrate for dispersion for infusion"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Pulvis pro concentrato pro dispersione infundibili"
        }
      ]
    },
    {
      "code" : "INF PCS SOL",
      "display" : "Prášek pro koncentrát a roztok pro infuzní roztok",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "INF PCS SOL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "13062000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Prášek pro koncentrát a roztok pro infuzní roztok"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Powder for concentrate and solution for solution for infusion"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Pulvis pro concentrato et solutio pro solutione infundibili"
        }
      ]
    },
    {
      "code" : "INF PLQ CSL",
      "display" : "Prášek a rozpouštědlo pro koncentrát pro infuzní roztok",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "INF PLQ CSL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50042000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Prášek a rozpouštědlo pro koncentrát pro infuzní roztok"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Powder and solvent for concentrate for solution for infusion"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Pulvis et liquefactorium pro concentrato pro solutione infundibili"
        }
      ]
    },
    {
      "code" : "INF PLV CSL",
      "display" : "Prášek pro koncentrát pro infuzní roztok",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "INF PLV CSL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50043000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Prášek pro koncentrát pro infuzní roztok"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Powder for concentrate for solution for infusion"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Pulvis pro concentrato pro solutione infundibili"
        }
      ]
    },
    {
      "code" : "INF PLV DIS",
      "display" : "Prášek pro infuzní disperzi",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "INF PLV DIS"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "11211500"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Prášek pro infuzní disperzi"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Powder for dispersion for infusion"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Pulvis pro dispersione infundibili"
        }
      ]
    },
    {
      "code" : "INF PLV SOL",
      "display" : "Prášek pro infuzní roztok",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "INF PLV SOL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "11212000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Prášek pro infuzní roztok"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Powder for solution for infusion"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Pulvis pro solutione infundibili"
        }
      ]
    },
    {
      "code" : "INF PLV SUS",
      "display" : "Prášek pro infuzní suspenzi",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "INF PLV SUS"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "11206000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Prášek pro infuzní suspenzi"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Powder for suspension for infusion"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Pulvis pro suspensione infundibili"
        }
      ]
    },
    {
      "code" : "INF PSO LQF",
      "display" : "Prášek a rozpouštědlo pro infuzní roztok",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "INF PSO LQF"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "11214000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Prášek a rozpouštědlo pro infuzní roztok"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Powder and solvent for solution for infusion"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Pulvis et liquefactorium pro solutione infundibili"
        }
      ]
    },
    {
      "code" : "INF RAD KIT",
      "display" : "Kit pro radiofarmakum pro infuzi",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "INF RAD KIT"
        },
        {
          "code" : "NAZEV",
          "valueString" : "Kit pro radiofarmakum pro infuzi"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Kit for radiopharmaceutical preparations for infusion"
        }
      ]
    },
    {
      "code" : "INF SOL",
      "display" : "Infuzní roztok",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "INF SOL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "11210000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Infuzní roztok"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Solution for infusion"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Solutio infundibilis"
        }
      ]
    },
    {
      "code" : "INF SOL APS",
      "display" : "Infuzní roztok v aplikačním systému",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "INF SOL APS"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "11210500"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Infuzní roztok v aplikačním systému"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Solution for infusion in administration system"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Solutio infundibilis in systemate ad applicationem"
        }
      ]
    },
    {
      "code" : "INF SOL ISP",
      "display" : "Infuzní roztok v předplněné injekční stříkačce",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "INF SOL ISP"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50058500"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Infuzní roztok v předplněné injekční stříkačce"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Solution for infusion in pre-filled syringe"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Solutio infundibilis in syringa praeimpleta"
        }
      ]
    },
    {
      "code" : "INF SOL SOL",
      "display" : "Roztok pro infuzní roztok",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "INF SOL SOL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "13061000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Roztok pro infuzní roztok"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Solution for solution for infusion"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Solutio pro solutione infundibili"
        }
      ]
    },
    {
      "code" : "INF SOL ZVL",
      "display" : "Infuzní roztok v zásobní vložce",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "INF SOL ZVL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "13122000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Infuzní roztok v zásobní vložce"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Solution for infusion in cartridge"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Solutio infundibilis in explemento"
        }
      ]
    },
    {
      "code" : "INF/POR SOL",
      "display" : "Infuzní/perorální roztok",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "INF/POR SOL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50058000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Infuzní/perorální roztok"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Solution for infusion/oral solution"
        }
      ]
    },
    {
      "code" : "INH CPS VAP",
      "display" : "Tobolka k inhalaci parou",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "INH CPS VAP"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "11113000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Tobolka k inhalaci parou"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Inhalation vapour, capsule"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Capsula ad inhalationem vapore paratam"
        }
      ]
    },
    {
      "code" : "INH EML PSS",
      "display" : "Emulze k inhalaci v tlakovém obalu",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "INH EML PSS"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "11108000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Emulze k inhalaci v tlakovém obalu"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Pressurised inhalation, emulsion"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Emulsio ad inhalationem in vase cum pressu"
        }
      ]
    },
    {
      "code" : "INH EML VAP",
      "display" : "Emulze k inhalaci parou",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "INH EML VAP"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50032000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Emulze k inhalaci parou"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Inhalation vapour, emulsion"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Emulsio ad inhalationem vapore paratam"
        }
      ]
    },
    {
      "code" : "INH LIQ",
      "display" : "Tekutina k inhalaci",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "INH LIQ"
        },
        {
          "code" : "NAZEV",
          "valueString" : "Tekutina k inhalaci"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Inhalation liquid"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Liquidum ad inhalationem"
        }
      ]
    },
    {
      "code" : "INH LIQ VAP",
      "display" : "Tekutina k inhalaci parou",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "INH LIQ VAP"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "11117000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Tekutina k inhalaci parou"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Inhalation vapour, liquid"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Liquidum ad inhalationem vapore paratam"
        }
      ]
    },
    {
      "code" : "INH PLG VAP",
      "display" : "Impregnovaná vložka k inhalaci parou",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "INH PLG VAP"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50033100"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Impregnovaná vložka k inhalaci parou"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Inhalation vapour, impregnated plug"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Explementum impregnatum ad inhalationem vapore paratam"
        }
      ]
    },
    {
      "code" : "INH PLV",
      "display" : "Prášek k inhalaci",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "INH PLV"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "11109000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Prášek k inhalaci"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Inhalation powder"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Pulvis ad inhalationem"
        }
      ]
    },
    {
      "code" : "INH PLV CPS DUR",
      "display" : "Prášek k inhalaci v tvrdé tobolce",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "INH PLV CPS DUR"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "11110000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Prášek k inhalaci v tvrdé tobolce"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Inhalation powder, hard capsule"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Pulvis ad inhalationem in capsula dura"
        }
      ]
    },
    {
      "code" : "INH PLV DOS",
      "display" : "Dávkovaný prášek k inhalaci",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "INH PLV DOS"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "11111000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Dávkovaný prášek k inhalaci"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Inhalation powder, pre-dispensed"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Pulvis ad inhalationem in dosibus"
        }
      ]
    },
    {
      "code" : "INH PLV VAP",
      "display" : "Prášek k inhalaci parou",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "INH PLV VAP"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "11112000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Prášek k inhalaci parou"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Inhalation vapour, powder"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Pulvis ad inhalationem vapore paratam"
        }
      ]
    },
    {
      "code" : "INH SOL",
      "display" : "Roztok k inhalaci",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "INH SOL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50081000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Roztok k inhalaci"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Inhalation solution"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Solutio ad inhalationem"
        }
      ]
    },
    {
      "code" : "INH SOL PSS",
      "display" : "Roztok k inhalaci v tlakovém obalu",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "INH SOL PSS"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "11106000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Roztok k inhalaci v tlakovém obalu"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Pressurised inhalation, solution"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Solutio ad inhalationem in vase cum pressu"
        }
      ]
    },
    {
      "code" : "INH SOL VAP",
      "display" : "Roztok k inhalaci parou",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "INH SOL VAP"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "11114000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Roztok k inhalaci parou"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Inhalation vapour, solution"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Solutio ad inhalationem vapore paratam"
        }
      ]
    },
    {
      "code" : "INH SUS PSS",
      "display" : "Suspenze k inhalaci v tlakovém obalu",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "INH SUS PSS"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "11107000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Suspenze k inhalaci v tlakovém obalu"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Pressurised inhalation, suspension"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Suspensio ad inhalationem in vase cum pressu"
        }
      ]
    },
    {
      "code" : "INH TBL EFF VAP",
      "display" : "Šumivá tableta k inhalaci parou",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "INH TBL EFF VAP"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50031000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Šumivá tableta k inhalaci parou"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Inhalation vapour, effervescent tablet"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Tabuletta effervescens ad inhalationem vapore paratam"
        }
      ]
    },
    {
      "code" : "INH TBL PLV",
      "display" : "Prášek k inhalaci, tableta",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "INH TBL PLV"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50030000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Prášek k inhalaci, tableta"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Inhalation powder, tablet"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Pulvis ad inhalationem in tabuletta"
        }
      ]
    },
    {
      "code" : "INH TBL VAP",
      "display" : "Tableta k inhalaci parou",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "INH TBL VAP"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "11115000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Tableta k inhalaci parou"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Inhalation vapour, tablet"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Tabuletta ad inhalationem vapore paratam"
        }
      ]
    },
    {
      "code" : "INH TMP VAP",
      "display" : "Impregnovaný tampon k inhalaci parou",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "INH TMP VAP"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50033000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Impregnovaný tampon k inhalaci parou"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Inhalation vapour, impregnated pad"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Tamponum impregnatum ad inhalationem vapore paratam"
        }
      ]
    },
    {
      "code" : "INH UNG VAP",
      "display" : "Mast k inhalaci parou",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "INH UNG VAP"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "11116000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Mast k inhalaci parou"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Inhalation vapour, ointment"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Unguentum ad inhalationem vapore paratam"
        }
      ]
    },
    {
      "code" : "INJ CLQ DIS",
      "display" : "Koncentrát a rozpouštědlo pro injekční disperzi",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "INJ CLQ DIS"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "13143000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Koncentrát a rozpouštědlo pro injekční disperzi"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Concentrate and solvent for dispersion for injection"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Concentratum et liquefactorium pro dispersione iniectabili"
        }
      ]
    },
    {
      "code" : "INJ CML LQF",
      "display" : "Koncentrát a rozpouštědlo pro injekční emulzi",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "INJ CML LQF"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "13153000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Koncentrát a rozpouštědlo pro injekční emulzi"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Concentrate and solvent for emulsion for injection"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Concentratum et liquefactorium pro emulsione iniectabili"
        }
      ]
    },
    {
      "code" : "INJ CNC DIS",
      "display" : "Koncentrát pro injekční disperzi",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "INJ CNC DIS"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "13139000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Koncentrát pro injekční disperzi"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Concentrate for dispersion for injection"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Concentratum pro dispersione iniectabilli"
        }
      ]
    },
    {
      "code" : "INJ CNC EML",
      "display" : "Koncentrát pro injekční emulzi",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "INJ CNC EML"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "13152000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Koncentrát pro injekční emulzi"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Concentrate for emulsion for injection"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Concentratum pro emulsione iniectabili"
        }
      ]
    },
    {
      "code" : "INJ CNC SOL",
      "display" : "Koncentrát pro injekční roztok",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "INJ CNC SOL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "11209000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Koncentrát pro injekční roztok"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Concentrate for solution for injection"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Concentratum pro solutione iniectabili"
        }
      ]
    },
    {
      "code" : "INJ CNC SUS",
      "display" : "Koncentrát pro injekční suspenzi",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "INJ CNC SUS"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "13004000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Koncentrát pro injekční suspenzi"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Concentrate for suspension for injection"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Concentratum pro suspensione iniectabili"
        }
      ]
    },
    {
      "code" : "INJ CSL LQF",
      "display" : "Koncentrát a rozpouštědlo pro injekční roztok",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "INJ CSL LQF"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50007000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Koncentrát a rozpouštědlo pro injekční roztok"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Concentrate and solvent for solution for injection"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Concentratum et liquefactorium pro solutione iniectabili"
        }
      ]
    },
    {
      "code" : "INJ CSS LQF",
      "display" : "Koncentrát a rozpouštědlo pro injekční suspenzi",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "INJ CSS LQF"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50008000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Koncentrát a rozpouštědlo pro injekční suspenzi"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Concentrate and solvent for suspension for injection"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Concentratum et liquefactorium pro suspensione iniectabili"
        }
      ]
    },
    {
      "code" : "INJ DIS",
      "display" : "Injekční disperze",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "INJ DIS"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50077000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Injekční disperze"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Dispersion for injection"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Dispersio iniectabilis"
        }
      ]
    },
    {
      "code" : "INJ DIS ISP",
      "display" : "Injekční disperze v předplněné injekční stříkačce",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "INJ DIS ISP"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "13161000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Injekční disperze v předplněné injekční stříkačce"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Dispersion for injection in pre-filled syringe"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Dispersio iniectabilis in syringa praeimpleta"
        }
      ]
    },
    {
      "code" : "INJ DIS PRO",
      "display" : "Injekční disperze s prodlouženým uvolňováním",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "INJ DIS PRO"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "13126000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Injekční disperze s prodlouženým uvolňováním"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Prolonged-release dispersion for injection"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Dispersio cum liberatione prolongata pro iniectione"
        }
      ]
    },
    {
      "code" : "INJ EML",
      "display" : "Injekční emulze",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "INJ EML"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "11203000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Injekční emulze"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Emulsion for injection"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Emulsio iniectabilis"
        }
      ]
    },
    {
      "code" : "INJ EML EML",
      "display" : "Emulze pro injekční emulzi",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "INJ EML EML"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "13008000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Emulze pro injekční emulzi"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Emulsion for emulsion for injection"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Emulsio pro emulsione iniectabili"
        }
      ]
    },
    {
      "code" : "INJ EML SUS",
      "display" : "Emulze pro injekční suspenzi",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "INJ EML SUS"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "13091000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Emulze pro injekční suspenzi"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Emulsion for suspension for injection"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Emulsio pro suspensione iniectabili"
        }
      ]
    },
    {
      "code" : "INJ EMO EML",
      "display" : "Roztok a emulze pro injekční emulzi",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "INJ EMO EML"
        },
        {
          "code" : "NAZEV",
          "valueString" : "Roztok a emulze pro injekční emulzi"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Solution and emulsion for emulsion for injection"
        }
      ]
    },
    {
      "code" : "INJ EMS EML",
      "display" : "Emulze a suspenze pro injekční emulzi",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "INJ EMS EML"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50021500"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Emulze a suspenze pro injekční emulzi"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Emulsion and suspension for emulsion for injection"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Emulsio et suspensio pro emulsione iniectabili"
        }
      ]
    },
    {
      "code" : "INJ GAS DIS",
      "display" : "Plyn pro injekční disperzi",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "INJ GAS DIS"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "13013000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Plyn pro injekční disperzi"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Gas for dispersion for injection"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Gasum pro dispersione iniectabili"
        }
      ]
    },
    {
      "code" : "INJ GEL",
      "display" : "Injekční gel",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "INJ GEL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "11204000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Injekční gel"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Gel for injection"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Gelatum iniectabile"
        }
      ]
    },
    {
      "code" : "INJ GRA SUS",
      "display" : "Granule pro injekční suspenzi",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "INJ GRA SUS"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "13048000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Granule pro injekční suspenzi"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Granules for suspension for injection"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Granula pro suspensione iniectabili"
        }
      ]
    },
    {
      "code" : "INJ GRL SUS",
      "display" : "Granule a rozpouštědlo pro injekční suspenzi",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "INJ GRL SUS"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50027000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Granule a rozpouštědlo pro injekční suspenzi"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Granules and solvent for suspension for injection"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Granula et liquefactorium pro suspensione iniectabili"
        }
      ]
    },
    {
      "code" : "INJ PLQ DIS",
      "display" : "Prášek a rozpouštědlo pro injekční disperzi",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "INJ PLQ DIS"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50044500"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Prášek a rozpouštědlo pro injekční disperzi"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Powder and solvent for dispersion for injection"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Pulvis et liquefactorium pro dispersione iniectabili"
        }
      ]
    },
    {
      "code" : "INJ PLQ EML",
      "display" : "Prášek a rozpouštědlo pro injekční emulzi",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "INJ PLQ EML"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50044700"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Prášek a rozpouštědlo pro injekční emulzi"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Powder and solvent for emulsion for injection"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Pulvis et liquefactorium pro emulsione iniectabili"
        }
      ]
    },
    {
      "code" : "INJ PLQ SOL ISP",
      "display" : "Prášek a rozpouštědlo pro injekční roztok v předplněné injekční stříkačce",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "INJ PLQ SOL ISP"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50048250"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Prášek a rozpouštědlo pro injekční roztok v předplněné injekční stříkačce"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Powder and solvent for solution for injection in prefilled syringe"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Pulvis et liquefactorium pro solutione iniectabili in syringa praeimpleta"
        }
      ]
    },
    {
      "code" : "INJ PLQ SOL PEP",
      "display" : "Prášek a rozpouštědlo pro injekční roztok v předplněném peru",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "INJ PLQ SOL PEP"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50048150"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Prášek a rozpouštědlo pro injekční roztok v předplněném peru"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Powder and solvent for solution for injection in prefilled pen"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Pulvis et liquefactorium pro solutione iniectabili in stilo praeimpleto"
        }
      ]
    },
    {
      "code" : "INJ PLQ SOL VIA",
      "display" : "Prášek a rozpouštědlo pro injekční roztok v injekční lahvičce",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "INJ PLQ SOL VIA"
        },
        {
          "code" : "NAZEV",
          "valueString" : "Prášek a rozpouštědlo pro injekční roztok v injekční lahvičce"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Powder and solvent for solution for injection in vial"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Pulvis et liquefactorium pro solutione iniectabili in"
        }
      ]
    },
    {
      "code" : "INJ PLQ SOL ZVL",
      "display" : "Prášek a rozpouštědlo pro injekční roztok v zásobní vložce",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "INJ PLQ SOL ZVL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50048050"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Prášek a rozpouštědlo pro injekční roztok v zásobní vložce"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Powder and solvent for solution for injection in cartridge"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Pulvis et liquefactorium pro solutione iniectabili in explemento"
        }
      ]
    },
    {
      "code" : "INJ PLQ SOL/DRM PTC SOL",
      "display" : "Prášek a rozpouštědlo pro injekční roztok/roztok pro kožní prick test",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "INJ PLQ SOL/DRM PTC SOL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50048270"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Prášek a rozpouštědlo pro injekční roztok/roztok pro kožní prick test"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Powder and solvent for solution for injection/skin-prick test"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Pulvis et liquefactorium pro solutione iniectabili/solutione pro prick-testo cutaneo"
        }
      ]
    },
    {
      "code" : "INJ PLQ SUR ISP",
      "display" : "Prášek a rozpouštědlo pro injekční suspenzi s prodlouženým uvolňováním v předplněné injekční stříkačce",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "INJ PLQ SUR ISP"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "13057000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Prášek a rozpouštědlo pro injekční suspenzi s prodlouženým uvolňováním v předplněné injekční stříkačce"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Powder and solvent for prolonged-release suspension for injection in pre-filled syringe"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Pulvis et liquefactorium pro suspensione iniectabili cum liberatione prolongata in syringa praeimpleta"
        }
      ]
    },
    {
      "code" : "INJ PLQ SUR PEP",
      "display" : "Prášek a rozpouštědlo pro injekční suspenzi s prodlouženým uvolňováním v předplněném peru",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "INJ PLQ SUR PEP"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50048010"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Prášek a rozpouštědlo pro injekční suspenzi s prodlouženým uvolňováním v předplněném peru"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Powder and solvent for prolonged-release suspension for injection in pre-filled pen"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Pulvis et liquefactorium pro suspensione iniectabili cum liberatione prolongata in stilo praeimpleto"
        }
      ]
    },
    {
      "code" : "INJ PLQ SUS CVD",
      "display" : "Prášek a rozpouštědlo pro injekční suspenzi ve vícedávkovém obalu",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "INJ PLQ SUS CVD"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "13108000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Prášek a rozpouštědlo pro injekční suspenzi ve vícedávkovém obalu"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Powder and solvent for suspension for injection in multidose container"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Pulvis et liquefactorium pro suspensione iniectabili in vase multidosali"
        }
      ]
    },
    {
      "code" : "INJ PLQ SUS ISP",
      "display" : "Prášek a rozpouštědlo pro injekční suspenzi v předplněné injekční stříkačce",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "INJ PLQ SUS ISP"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50048300"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Prášek a rozpouštědlo pro injekční suspenzi v předplněné injekční stříkačce"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Powder and solvent for suspension for injection in prefilled syringe"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Pulvis et liquefactorium pro suspensione iniectabili in syringa praeimpleta"
        }
      ]
    },
    {
      "code" : "INJ PLQ SUS PRO",
      "display" : "Prášek a rozpouštědlo pro injekční suspenzi s prodlouženým uvolňováním",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "INJ PLQ SUS PRO"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50048000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Prášek a rozpouštědlo pro injekční suspenzi s prodlouženým uvolňováním"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Powder and solvent for prolonged-release suspension for injection"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Pulvis et liquefactorium pro suspensione iniectabili cum liberatione prolongata"
        }
      ]
    },
    {
      "code" : "INJ PLS SUS",
      "display" : "Prášek a suspenze pro injekční suspenzi",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "INJ PLS SUS"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50048500"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Prášek a suspenze pro injekční suspenzi"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Powder and suspension for suspension for injection"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Pulvis et suspensio pro suspensione iniectabili"
        }
      ]
    },
    {
      "code" : "INJ PLV DIS",
      "display" : "Prášek pro injekční disperzi",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "INJ PLV DIS"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "13023000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Prášek pro injekční disperzi"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Powder for dispersion for injection"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Pulvis pro dispersione iniectabili"
        }
      ]
    },
    {
      "code" : "INJ PLV EML",
      "display" : "Prášek pro injekční emulzi",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "INJ PLV EML"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "13040000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Prášek pro injekční emulzi"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Powder for emulsion for injection"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Pulvis pro emulsione iniectabili"
        }
      ]
    },
    {
      "code" : "INJ PLV SOL",
      "display" : "Prášek pro injekční roztok",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "INJ PLV SOL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "11205000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Prášek pro injekční roztok"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Powder for solution for injection"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Pulvis pro solutione iniectabili"
        }
      ]
    },
    {
      "code" : "INJ PLV SOL/DRM PTC SOL",
      "display" : "Prášek pro injekční roztok/roztok pro kožní prick test",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "INJ PLV SOL/DRM PTC SOL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "13052000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Prášek pro injekční roztok/roztok pro kožní prick test"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Powder for solution for injection/skin-prick test"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Pulvis pro solutione iniectabili/solutione pro prick-testo cutaneo"
        }
      ]
    },
    {
      "code" : "INJ PLV SOL/SOL NEB",
      "display" : "Prášek pro injekční roztok/roztok k rozprašování",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "INJ PLV SOL/SOL NEB"
        },
        {
          "code" : "NAZEV",
          "valueString" : "Prášek pro injekční roztok/roztok k rozprašování"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Powder for solution for injection/nebuliser solution"
        }
      ]
    },
    {
      "code" : "INJ PLV SUS",
      "display" : "Prášek pro injekční suspenzi",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "INJ PLV SUS"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "11206000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Prášek pro injekční suspenzi"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Powder for suspension for injection"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Pulvis pro suspensione iniectabili"
        }
      ]
    },
    {
      "code" : "INJ PSL SOL",
      "display" : "Prášek a roztok pro injekční roztok",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "INJ PSL SOL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50041500"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Prášek a roztok pro injekční roztok"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Powder and solution for solution for injection"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Pulvis et solutio pro solutione iniectabili"
        }
      ]
    },
    {
      "code" : "INJ PSL SUS",
      "display" : "Prášek a roztok pro injekční suspenzi",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "INJ PSL SUS"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "13121000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Prášek a roztok pro injekční suspenzi"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Powder and solution for suspension for injection"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Pulvis et solutio pro suspensione iniectabili"
        }
      ]
    },
    {
      "code" : "INJ PSO LQF",
      "display" : "Prášek a rozpouštědlo pro injekční roztok",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "INJ PSO LQF"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "11207000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Prášek a rozpouštědlo pro injekční roztok"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Powder and solvent for solution for injection"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Pulvis et liquefactorium pro solutione iniectabili"
        }
      ]
    },
    {
      "code" : "INJ PSU LQF",
      "display" : "Prášek a rozpouštědlo pro injekční suspenzi",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "INJ PSU LQF"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "11208000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Prášek a rozpouštědlo pro injekční suspenzi"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Powder and solvent for suspension for injection"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Pulvis et liquefactorium pro suspensione iniectabili"
        }
      ]
    },
    {
      "code" : "INJ PSU PRO",
      "display" : "Prášek pro injekční suspenzi s prodlouženým uvolňováním",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "INJ PSU PRO"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "11208400"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Prášek pro injekční suspenzi s prodlouženým uvolňováním"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Powder for prolonged-release suspension for injection"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Pulvis pro suspensione iniectabili cum liberatione prolongata"
        }
      ]
    },
    {
      "code" : "INJ SLO SUS ISP",
      "display" : "Roztok a suspenze pro injekční suspenzi v předplněné injekční stříkačce",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "INJ SLO SUS ISP"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50056600"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Roztok a suspenze pro injekční suspenzi v  předplněné injekční stříkačce"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Solution and suspension for suspension for injection in pre-filled syringe"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Solutio et suspensio pro  suspensione iniectabili in syringa praeimpleta"
        }
      ]
    },
    {
      "code" : "INJ SOL",
      "display" : "Injekční roztok",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "INJ SOL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "11201000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Injekční roztok"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Solution for injection"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Solutio iniectabilis"
        }
      ]
    },
    {
      "code" : "INJ SOL APS",
      "display" : "Injekční roztok v aplikačním systému",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "INJ SOL APS"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "13053000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Injekční roztok v aplikačním systému"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Solution for injection in administration system"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Solutio iniectabilis in systemate ad applicationem"
        }
      ]
    },
    {
      "code" : "INJ SOL CVD",
      "display" : "Injekční roztok ve vícedávkovém obalu",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "INJ SOL CVD"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "13109000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Injekční roztok ve vícedávkovém obalu"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Solution for injection in multidose container"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Solutio iniectabilis in vase multidosali"
        }
      ]
    },
    {
      "code" : "INJ SOL ISP",
      "display" : "Injekční roztok v předplněné injekční stříkačce",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "INJ SOL ISP"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50060300"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Injekční roztok v předplněné injekční stříkačce"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Solution for injection in pre-filled syringe"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Solutio iniectabilis in syringa praeimpleta"
        }
      ]
    },
    {
      "code" : "INJ SOL PEP",
      "display" : "Injekční roztok v předplněném peru",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "INJ SOL PEP"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50060200"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Injekční roztok v předplněném peru"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Solution for injection in pre-filled pen"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Solutio iniectabilis in stilo praeimpleto"
        }
      ]
    },
    {
      "code" : "INJ SOL PFI",
      "display" : "Injekční roztok v předplněném injektoru",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "INJ SOL PFI"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "13068000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Injekční roztok v předplněném injektoru"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Solution for injection in pre-filled injector"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Solutio iniectabilis in  instrumento ad applicationem praeimpleto"
        }
      ]
    },
    {
      "code" : "INJ SOL PRO",
      "display" : "Injekční roztok s prodlouženým uvolňováním",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "INJ SOL PRO"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "13076000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Injekční roztok s prodlouženým uvolňováním"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Prolonged-release solution for injection"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Solutio cum liberatione prolongata pro iniectione"
        }
      ]
    },
    {
      "code" : "INJ SOL PRO PEP",
      "display" : "Injekční roztok s prodlouženým uvolňováním v předplněném peru",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "INJ SOL PRO PEP"
        },
        {
          "code" : "NAZEV",
          "valueString" : "Injekční roztok s prodlouženým uvolňováním v předplněném peru"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Prolonged-release solution for injection in pre-filled pen"
        }
      ]
    },
    {
      "code" : "INJ SOL SOL",
      "display" : "Roztok pro injekční roztok",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "INJ SOL SOL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "13033000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Roztok pro injekční roztok"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Solution for solution for injection"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Solutio pro solutione iniectabili"
        }
      ]
    },
    {
      "code" : "INJ SOL SUS",
      "display" : "Roztok pro injekční suspenzi",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "INJ SOL SUS"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "13047000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Roztok pro injekční suspenzi"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Solution for suspension for injection"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Solutio pro suspensione iniectabili"
        }
      ]
    },
    {
      "code" : "INJ SOL TDP",
      "display" : "Injekční roztok v tlakovém injektoru",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "INJ SOL TDP"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50060150"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Injekční roztok v tlakovém injektoru"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Solution for injection in needle-free injector"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Solutio iniectabilis in instrumento ad applicationem pressionem"
        }
      ]
    },
    {
      "code" : "INJ SOL VIA",
      "display" : "Injekční roztok v injekční lahvičce",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "INJ SOL VIA"
        },
        {
          "code" : "NAZEV",
          "valueString" : "Injekční roztok v injekční lahvičce"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Solution for injection in vial"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Solutio iniectabilis in"
        }
      ]
    },
    {
      "code" : "INJ SOL ZDD",
      "display" : "Injekční roztok v zásobní vložce pro dávkovací zařízení",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "INJ SOL ZDD"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "13071000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Injekční roztok v zásobní vložce pro dávkovací zařízení"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Solution for injection in dose-dispenser cartridge"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Solutio iniectabilis in explemento pro instrumento ad applicationem in dosibus"
        }
      ]
    },
    {
      "code" : "INJ SOL ZVL",
      "display" : "Injekční roztok v zásobní vložce",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "INJ SOL ZVL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50060100"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Injekční roztok v zásobní vložce"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Solution for injection in cartridge"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Solutio iniectabilis in explemento"
        }
      ]
    },
    {
      "code" : "INJ SOL/DRM PTC SOL",
      "display" : "Injekční roztok/roztok pro kožní prick test",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "INJ SOL/DRM PTC SOL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "13051000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Injekční roztok/roztok pro kožní prick test"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Solution for injection/skin-prick test"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Solutio iniectabilis/solutio pro prick-testo cutaneo"
        }
      ]
    },
    {
      "code" : "INJ SOL/INF CNC SOL",
      "display" : "Injekční roztok/koncenrát pro infuzní roztok",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "INJ SOL/INF CNC SOL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50059000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Injekční roztok/koncenrát pro infuzní roztok"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Solution for injection/Concentrate for solution for infusion"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Solutio iniectabilis/concentratum pro solutione infundibili"
        }
      ]
    },
    {
      "code" : "INJ SOL/SOL NEB",
      "display" : "Injekční roztok/roztok k rozprašování",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "INJ SOL/SOL NEB"
        },
        {
          "code" : "NAZEV",
          "valueString" : "Injekční roztok/roztok k rozprašování"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Solution for injection/nebuliser solution"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Solutio iniectabilis/solutio ad nebulisationem"
        }
      ]
    },
    {
      "code" : "INJ SUS",
      "display" : "Injekční suspenze",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "INJ SUS"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "11202000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Injekční suspenze"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Suspension for injection"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Suspensio iniectabilis"
        }
      ]
    },
    {
      "code" : "INJ SUS CVD",
      "display" : "Injekční suspenze ve vícedávkovém obalu",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "INJ SUS CVD"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "13110000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Injekční suspenze ve vícedávkovém obalu"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Suspension for injection in multidose container"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Suspensio iniectabilis in vase multidosali"
        }
      ]
    },
    {
      "code" : "INJ SUS EML",
      "display" : "Suspenze pro injekční emulzi",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "INJ SUS EML"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "13036000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Suspenze pro injekční emulzi"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Suspension for emulsion for injection"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Suspensio pro emulsione iniectabili"
        }
      ]
    },
    {
      "code" : "INJ SUS ISP",
      "display" : "Injekční suspenze v předplněné injekční stříkačce",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "INJ SUS ISP"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50063300"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Injekční suspenze v předplněné injekční stříkačce"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Suspension for injection in pre-filled syringe"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Suspensio iniectabilis in syringa praeimpleta"
        }
      ]
    },
    {
      "code" : "INJ SUS PEP",
      "display" : "Injekční suspenze v předplněném peru",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "INJ SUS PEP"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50063200"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Injekční suspenze v předplněném peru"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Suspension for injection in pre-filled pen"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Suspensio iniectabilis in stilo praeimpleto"
        }
      ]
    },
    {
      "code" : "INJ SUS PFI",
      "display" : "Injekční suspenze v předplněném injektoru",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "INJ SUS PFI"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "13064000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Injekční suspenze v předplněném injektoru"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Suspension for injection in pre-filled injector"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Suspensio iniectabilis in  instrumento ad applicationem praeimpleto"
        }
      ]
    },
    {
      "code" : "INJ SUS PRO",
      "display" : "Injekční suspenze s prodlouženým uvolňováním",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "INJ SUS PRO"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "11208500"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Injekční suspenze s prodlouženým uvolňováním"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Prolonged-release suspension for injection"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Suspensio cum liberatione prolongata pro iniectione"
        }
      ]
    },
    {
      "code" : "INJ SUS PRO ISP",
      "display" : "Injekční suspenze s prodlouženým uvolňováním v předplněné injekční stříkačce",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "INJ SUS PRO ISP"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50056250"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Injekční suspenze s prodlouženým uvolňováním v předplněné injekční stříkačce"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Prolonged-release suspension for injection in pre-filled syringe"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Suspensio cum liberatione prolongata pro iniectione in syringa praeimpleta"
        }
      ]
    },
    {
      "code" : "INJ SUS PRO PEP",
      "display" : "Injekční suspenze s prodlouženým uvolňováním v předplněném peru",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "INJ SUS PRO PEP"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "13112000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Injekční suspenze s prodlouženým uvolňováním v předplněném peru"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Prolonged-release suspension for injection in pre-filled pen"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Suspensio cum liberatione prolongata pro iniectione in stilo praeimpleto"
        }
      ]
    },
    {
      "code" : "INJ SUS SUS",
      "display" : "Suspenze pro injekční suspenzi",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "INJ SUS SUS"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "13039000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Suspenze pro injekční suspenzi"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Suspension for suspension for injection"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Suspensio pro suspensione iniectabili"
        }
      ]
    },
    {
      "code" : "INJ SUS VIA",
      "display" : "Injekční suspenze v injekční lahvičce",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "INJ SUS VIA"
        },
        {
          "code" : "NAZEV",
          "valueString" : "Injekční suspenze v injekční lahvičce"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Suspension for injection in vial"
        }
      ]
    },
    {
      "code" : "INJ SUS ZVL",
      "display" : "Injekční suspenze v zásobní vložce",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "INJ SUS ZVL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50063100"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Injekční suspenze v zásobní vložce"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Suspension for injection in cartridge"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Suspensio iniectabilis in explemento"
        }
      ]
    },
    {
      "code" : "INJ/INF CNC SOL",
      "display" : "Koncentrát pro injekční/infuzní roztok",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "INJ/INF CNC SOL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50079000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Koncentrát pro injekční/infuzní roztok"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Concentrate for solution for injection/infusion"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Concentratum pro solutione  iniectabili/infundibili"
        }
      ]
    },
    {
      "code" : "INJ/INF CSL LQF",
      "display" : "Koncentrát a rozpouštědlo pro injekční/infuzní roztok",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "INJ/INF CSL LQF"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50007500"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Koncentrát a rozpouštědlo pro injekční/infuzní roztok"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Concentrate and solvent for solution for injection/infusion"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Concentratum et liquefactorium pro solutione iniectabili/infundibili"
        }
      ]
    },
    {
      "code" : "INJ/INF DIS",
      "display" : "Injekční/infuzní disperze",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "INJ/INF DIS"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "13049000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Injekční/infuzní disperze"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Dispersion for injection/infusion"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Dispersio iniectabilis/infundibilis"
        }
      ]
    },
    {
      "code" : "INJ/INF EML",
      "display" : "Injekční/infuzní emulze",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "INJ/INF EML"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50021000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Injekční/infuzní emulze"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Emulsion for injection/infusion"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Emulsio iniectabilis/infundibilis"
        }
      ]
    },
    {
      "code" : "INJ/INF EML ISP",
      "display" : "Injekční/infuzní emulze v předplněné injekční stříkačce",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "INJ/INF EML ISP"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50021250"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Injekční/infuzní emulze v předplněné injekční stříkačce"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Emulsion for injection/infusion in pre-filled syringe"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Emulsio iniectabilis/infundibilis in syringa praeimpleta"
        }
      ]
    },
    {
      "code" : "INJ/INF GAQ DIS",
      "display" : "Plyn a rozpouštědlo pro injekční/infuzní disperzi",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "INJ/INF GAQ DIS"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50078000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Plyn a rozpouštědlo pro injekční/infuzní disperzi"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Gas and solvent for dispersion for injection/infusion"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Gasum et liquefactorium pro dispersione iniectabili/infundibili"
        }
      ]
    },
    {
      "code" : "INJ/INF GAS DIS",
      "display" : "Plyn pro injekční/infuzní disperzi",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "INJ/INF GAS DIS"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "13050000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Plyn pro injekční/infuzní disperzi"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Gas for dispersion for injection/infusion"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Gasum pro dispersione iniectabili/infundibili"
        }
      ]
    },
    {
      "code" : "INJ/INF PLV CSL",
      "display" : "Prášek pro koncentrát pro injekční/infuzní roztok",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "INJ/INF PLV CSL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50049250"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Prášek pro koncentrát pro injekční/infuzní roztok"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Powder for concentrate for solution for injection/infusion"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Pulvis pro concentrato pro solutione iniectabili seu infundibili"
        }
      ]
    },
    {
      "code" : "INJ/INF PLV SOL",
      "display" : "Prášek pro injekční/infuzní roztok",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "INJ/INF PLV SOL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50053500"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Prášek pro injekční/infuzní roztok"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Powder for solution for injection/infusion"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Pulvis pro solutione iniectabili/infundibili"
        }
      ]
    },
    {
      "code" : "INJ/INF PLV SOL/SOL NEB",
      "display" : "Prášek pro injekční/infuzní roztok/roztok k rozprašování",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "INJ/INF PLV SOL/SOL NEB"
        },
        {
          "code" : "NAZEV",
          "valueString" : "Prášek pro injekční/infuzní roztok/roztok k rozprašování"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Powder for solution for injection/infusion/nebuliser solution"
        }
      ]
    },
    {
      "code" : "INJ/INF PSO LQF",
      "display" : "Prášek a rozpouštědlo pro injekční/infuzní roztok",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "INJ/INF PSO LQF"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50080000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Prášek a rozpouštědlo pro injekční/infuzní roztok"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Powder and solvent for solution for injection/infusion"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Pulvis et liquefactorium pro solutione iniectabili/infundibili"
        }
      ]
    },
    {
      "code" : "INJ/INF SOL",
      "display" : "Injekční/infuzní roztok",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "INJ/INF SOL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50060000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Injekční/infuzní roztok"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Solution for injection/infusion"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Solutio iniectabilis seu infundibilis"
        }
      ]
    },
    {
      "code" : "INJ/INF SOL ISP",
      "display" : "Injekční/infuzní roztok v předplněné injekční stříkačce",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "INJ/INF SOL ISP"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50060500"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Injekční/infuzní roztok v předplněné injekční stříkačce"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Solution for injection/infusion in pre-filled syringe"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Solutio iniectabilis/infundibilis in syringa praeimpleta"
        }
      ]
    },
    {
      "code" : "INJ/INF/IVS PLV SOL",
      "display" : "Prášek pro injekční/infuzní nebo intravezikální roztok",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "INJ/INF/IVS PLV SOL"
        },
        {
          "code" : "NAZEV",
          "valueString" : "Prášek pro injekční/infuzní nebo intravezikální roztok"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Powder for solution for injection/infusion/intravesical solution"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Pulvis pro solutione iniectabili/infundibili/intravesicali"
        }
      ]
    },
    {
      "code" : "INJ/INF/POR PSO LQF",
      "display" : "Prášek a rozpouštědlo pro injekční/infuzní roztok/perorální roztok",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "INJ/INF/POR PSO LQF"
        },
        {
          "code" : "NAZEV",
          "valueString" : "Prášek a rozpouštědlo pro injekční/infuzní roztok/perorální roztok"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Powder and solvent for solution for injection/infusion/oral solution"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Pulvis et liquefactorium pro solutione iniectabili/infundibili/perorali"
        }
      ]
    },
    {
      "code" : "INJ/INF/RCT SOL",
      "display" : "Injekční/infuzní/rektální roztok",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "INJ/INF/RCT SOL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50060700"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Injekční/infuzní/rektální roztok"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Solution for injection/infusion/rectal solution"
        }
      ]
    },
    {
      "code" : "INJ/POR SOL",
      "display" : "Injekční/perorální roztok",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "INJ/POR SOL"
        },
        {
          "code" : "NAZEV",
          "valueString" : "Injekční/perorální roztok"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Solution for injection/oral"
        }
      ]
    },
    {
      "code" : "INT GEL",
      "display" : "Intestinální gel",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "INT GEL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "12120000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Intestinální gel"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Intestinal gel"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Gelatum intestinale"
        }
      ]
    },
    {
      "code" : "IOC IRR CSL",
      "display" : "Koncentrát pro roztok k nitroočnímu výplachu",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "IOC IRR CSL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10600500"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Koncentrát pro roztok k nitroočnímu výplachu"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Concentrate for solution for intraocular irrigation"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Concentratum pro solutione ad irrigationem intraoculari"
        }
      ]
    },
    {
      "code" : "IOC IRR LQS",
      "display" : "Rozpouštědlo pro roztok k nitroočnímu výplachu",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "IOC IRR LQS"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50074000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Rozpouštědlo pro roztok k nitroočnímu výplachu"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Solvent for solution for intraocular irrigation"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Liquefactorium pro solutione ad irrigationem intraoculari"
        }
      ]
    },
    {
      "code" : "IOC IRR PSO",
      "display" : "Prášek pro roztok k nitroočnímu výplachu",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "IOC IRR PSO"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50073000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Prášek pro roztok k nitroočnímu výplachu"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Powder for solution for intraocular irrigation"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Pulvis pro solutione ad irrigationem intraoculari"
        }
      ]
    },
    {
      "code" : "IOC IRR SOL",
      "display" : "Roztok k nitroočnímu výplachu",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "IOC IRR SOL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50073500"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Roztok k nitroočnímu výplachu"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Solution for intraocular irrigation"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Solutio ad irrigationem intraoculari"
        }
      ]
    },
    {
      "code" : "IOC ISL PLQ SOL",
      "display" : "Prášek a rozpouštědlo pro roztok k nitrooční instilaci",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "IOC ISL PLQ SOL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50047000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Prášek a rozpouštědlo pro roztok k nitrooční instilaci"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Powder and solvent for instillation solution for intraocular use"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Pulvis et liquefactorium pro solutione ad instilationem intraoculari"
        }
      ]
    },
    {
      "code" : "IOC ISL PSO",
      "display" : "Prášek pro roztok k nitrooční instilaci",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "IOC ISL PSO"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "13029000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Prášek pro roztok k nitrooční instilaci"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Powder for intraocular instillation solution"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Pulvis pro solutione ad instilationem intraoculari"
        }
      ]
    },
    {
      "code" : "IOC ISL SOL",
      "display" : "Roztok k nitrooční instilaci",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "IOC ISL SOL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "13044000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Roztok k nitrooční instilaci"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Intraocular instillation solution"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Solutio ad instilationem intraoculari"
        }
      ]
    },
    {
      "code" : "IPT SOL",
      "display" : "Intraperitoneální roztok",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "IPT SOL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "12111500"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Intraperitoneální roztok"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Intraperitoneal solution"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Solutio intraperitonealis"
        }
      ]
    },
    {
      "code" : "IUT GEL",
      "display" : "Intrauterinní gel",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "IUT GEL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "13113000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Intrauterinní gel"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Intrauterine gel"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Gelatum intrauterinum"
        }
      ]
    },
    {
      "code" : "IUT INS",
      "display" : "Intrauterinní inzert",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "IUT INS"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "11901000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Intrauterinní inzert"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Intrauterine delivery system"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Insertum intrauterinum"
        }
      ]
    },
    {
      "code" : "IUT SPM",
      "display" : "Intrauterinní pěna",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "IUT SPM"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50033300"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Intrauterinní pěna"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Intrauterine foam"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Spuma intrauterina"
        }
      ]
    },
    {
      "code" : "IVI IMP",
      "display" : "Intravitreální implantát",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "IVI IMP"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "13191000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Intravitreální implantát"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Intravitreal implant"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Implantatum intravitreale"
        }
      ]
    },
    {
      "code" : "IVI IMP APL",
      "display" : "Intravitreální implantát v aplikátoru",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "IVI IMP APL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50033500"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Intravitreální implantát v aplikátoru"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Intravitreal implant in applicator"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Implantatum intravitreale in instrumento ad applicationem"
        }
      ]
    },
    {
      "code" : "IVS CLQ SOL",
      "display" : "Koncentrát a rozpouštědlo pro intravezikální roztok",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "IVS CLQ SOL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "13144000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Koncentrát a rozpouštědlo pro intravezikální roztok"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Concentrate and solvent for intravesical solution"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Concentratum et liquefactorium pro solutione intravesicali"
        }
      ]
    },
    {
      "code" : "IVS CNC SOL",
      "display" : "Koncentrát pro intravezikální roztok",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "IVS CNC SOL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50009750"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Koncentrát pro intravezikální roztok"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Concentrate for intravesical solution"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Concentratum pro solutione intravesicali"
        }
      ]
    },
    {
      "code" : "IVS PCC SUS",
      "display" : "Prášek pro koncentrát pro intravezikální suspenzi",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "IVS PCC SUS"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50049100"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Prášek pro koncentrát pro intravezikální suspenzi"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Powder for concentrate for intravesical suspension"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Pulvis pro concentrato pro suspensione intravesicali"
        }
      ]
    },
    {
      "code" : "IVS PLQ SOL",
      "display" : "Prášek a rozpouštědlo pro intravezikální roztok",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "IVS PLQ SOL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50047500"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Prášek a rozpouštědlo pro intravezikální roztok"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Powder and solvent for intravesical solution"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Pulvis et liquefactorium pro solutione intravesicali"
        }
      ]
    },
    {
      "code" : "IVS PLQ SUS",
      "display" : "Prášek a rozpouštědlo pro intravezikální suspenzi",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "IVS PLQ SUS"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50047600"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Prášek a rozpouštědlo pro intravezikální suspenzi"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Powder and solvent for intravesical suspension"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Pulvis et liquefactorium pro suspensione intravesicali"
        }
      ]
    },
    {
      "code" : "IVS PLV SOL",
      "display" : "Prášek pro intravezikální roztok",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "IVS PLV SOL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50050000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Prášek pro intravezikální roztok"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Powder for intravesical solution"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Pulvis pro solutione intravesicali"
        }
      ]
    },
    {
      "code" : "IVS PLV SOL/INJ SOL",
      "display" : "Prášek pro intravezikální roztok/injekční roztok",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "IVS PLV SOL/INJ SOL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50050500"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Prášek pro intravezikální roztok/injekční roztok"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Powder for intravesical solution/solution for injection"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Pulvis pro solutione intravesicali/solutione iniectabili"
        }
      ]
    },
    {
      "code" : "IVS PLV SUS",
      "display" : "Prášek pro intravezikální suspenzi",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "IVS PLV SUS"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50051000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Prášek pro intravezikální suspenzi"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Powder for intravesical suspension"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Pulvis pro suspensione ad usum intravesicalem"
        }
      ]
    },
    {
      "code" : "IVS SOL",
      "display" : "Intravezikální roztok",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "IVS SOL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "11502500"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Intravezikální roztok"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Intravesical solution"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Solutio intravesicalis"
        }
      ]
    },
    {
      "code" : "IVS SOL/INJ SOL",
      "display" : "Intravezikální roztok/injekční roztok",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "IVS SOL/INJ SOL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50033400"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Intravezikální roztok/injekční roztok"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Intravesical solution/solution for injection"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Solutio intravesicalis/solutio iniectabilis"
        }
      ]
    },
    {
      "code" : "IVS SUS",
      "display" : "Intravezikální suspenze",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "IVS SUS"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "13045000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Intravezikální suspenze"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Intravesical suspension"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Suspensio intravesicalis"
        }
      ]
    },
    {
      "code" : "LAC UGC",
      "display" : "Léčivý lak na nehty",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "LAC UGC"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10521000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Léčivý lak na nehty"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Medicated nail lacquer"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Lacca unguicularis medicinalis"
        }
      ]
    },
    {
      "code" : "LAR MED",
      "display" : "Medicinální larvy",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "LAR MED"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "13124000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Medicinální larvy"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Medicinal larvae"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Larvae medicinales"
        }
      ]
    },
    {
      "code" : "LIG IPR",
      "display" : "Impregnovaný obvaz",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "LIG IPR"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10525000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Impregnovaný obvaz"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Impregnated dressing"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Ligamentum impraegnatum"
        }
      ]
    },
    {
      "code" : "LQF",
      "display" : "Rozpouštědlo pro ...",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "LQF"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "13035000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Rozpouštědlo pro ..."
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Solvent for ..."
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Liquefactorium pro ..."
        }
      ]
    },
    {
      "code" : "LRP SOL",
      "display" : "Laryngofaryngeální roztok",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "LRP SOL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "13016000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Laryngofaryngeální roztok"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Laryngopharyngeal solution"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Solutio laryngopharyn­gealis"
        }
      ]
    },
    {
      "code" : "LRP SPR SOL",
      "display" : "Laryngofaryngeální sprej, roztok",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "LRP SPR SOL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "13017000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Laryngofaryngeální sprej, roztok"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Laryngopharyngeal spray, solution"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Solutio aerodispersione laryngopharyn­geali"
        }
      ]
    },
    {
      "code" : "MTX GKU",
      "display" : "Matrice pro tkáňové lepidlo",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "MTX GKU"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "12115100"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Matrice pro tkáňové lepidlo"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Sealant matrix"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Matrix pro glutino telae vivae"
        }
      ]
    },
    {
      "code" : "NAS CRM",
      "display" : "Nosní krém",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "NAS CRM"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10801000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Nosní krém"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Nasal cream"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Cremor nasalis"
        }
      ]
    },
    {
      "code" : "NAS GEL",
      "display" : "Nosní gel",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "NAS GEL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10802000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Nosní gel"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Nasal gel"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Gelatum nasale"
        }
      ]
    },
    {
      "code" : "NAS GTT EML",
      "display" : "Nosní kapky, emulze",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "NAS GTT EML"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10806000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Nosní kapky, emulze"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Nasal drops, emulsion"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Rhinoguttae in emulsione"
        }
      ]
    },
    {
      "code" : "NAS GTT PLQ SOL",
      "display" : "Nosní kapky, prášek a rozpouštědlo pro roztok",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "NAS GTT PLQ SOL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50047650"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Nosní kapky, prášek a rozpouštědlo pro roztok"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Nasal drops, powder and solvent for solution"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Pulvis et liquefactorium pro rhinoguttis in solutione"
        }
      ]
    },
    {
      "code" : "NAS GTT PSO",
      "display" : "Nosní kapky, prášek pro roztok",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "NAS GTT PSO"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "13020000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Nosní kapky, prášek pro roztok"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Nasal drops, powder for solution"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Pulvis pro rhinoguttis in solutione"
        }
      ]
    },
    {
      "code" : "NAS GTT SOL",
      "display" : "Nosní kapky, roztok",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "NAS GTT SOL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10804000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Nosní kapky, roztok"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Nasal drops, solution"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Rhinoguttae in solutione"
        }
      ]
    },
    {
      "code" : "NAS GTT SOL MDC",
      "display" : "Nosní kapky, roztok v jednodávkovém obalu",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "NAS GTT SOL MDC"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50036200"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Nosní kapky, roztok v jednodávkovém obalu"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Nasal drops, solution in single-dose container"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Rhinoguttae in solutione in vase monodosali"
        }
      ]
    },
    {
      "code" : "NAS GTT SUS",
      "display" : "Nosní kapky, suspenze",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "NAS GTT SUS"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10805000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Nosní kapky, suspenze"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Nasal drops, suspension"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Rhinoguttae in suspensione"
        }
      ]
    },
    {
      "code" : "NAS LOT",
      "display" : "Nosní výplach",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "NAS LOT"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10811000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Nosní výplach"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Nasal wash"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Lotio nasalis"
        }
      ]
    },
    {
      "code" : "NAS PLV ADS",
      "display" : "Nosní zásyp",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "NAS PLV ADS"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10807000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Nosní zásyp"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Nasal powder"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Pulvis adspersorius nasalis"
        }
      ]
    },
    {
      "code" : "NAS PLV ADS MDC",
      "display" : "Nosní zásyp v jednodávkovém obalu",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "NAS PLV ADS MDC"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "13120000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Nosní zásyp v jednodávkovém obalu"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Nasal powder in single-dose container"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Pulvis adspersorius nasalis in vase monodosali"
        }
      ]
    },
    {
      "code" : "NAS SPR EML",
      "display" : "Nosní sprej, emulze",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "NAS SPR EML"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10810000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Nosní sprej, emulze"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Nasal spray, emulsion"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Emulsio pro aerodispersione nasali"
        }
      ]
    },
    {
      "code" : "NAS SPR PSO",
      "display" : "Nosní sprej, prášek pro roztok",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "NAS SPR PSO"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50037100"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Nosní sprej, prášek pro roztok"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Nasal spray, powder for solution"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Pulvis pro solutione pro aerodispersione nasali"
        }
      ]
    },
    {
      "code" : "NAS SPR SOL",
      "display" : "Nosní sprej, roztok",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "NAS SPR SOL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10808000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Nosní sprej, roztok"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Nasal spray, solution"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Solutio pro aerodispersione nasali"
        }
      ]
    },
    {
      "code" : "NAS SPR SOL MDC",
      "display" : "Nosní sprej, roztok v jednodávkovém obalu",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "NAS SPR SOL MDC"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50037250"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Nosní sprej, roztok v jednodávkovém obalu"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Nasal spray, solution in single-dose container"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Aerodispersio nasalis, solutio in vase monodosali"
        }
      ]
    },
    {
      "code" : "NAS SPR SOL/ORM SOL",
      "display" : "Nosní sprej, roztok/orální roztok",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "NAS SPR SOL/ORM SOL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50037400"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Nosní sprej, roztok/orální roztok"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Nasal spray, solution/oromucosal solution"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Aerodispersio nasalis, solutio/solutio oromucosalis"
        }
      ]
    },
    {
      "code" : "NAS SPR SUS",
      "display" : "Nosní sprej, suspenze",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "NAS SPR SUS"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10809000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Nosní sprej, suspenze"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Nasal spray, suspension"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Suspensio pro aerodispersione nasali"
        }
      ]
    },
    {
      "code" : "NAS STL",
      "display" : "Nosní tyčinka",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "NAS STL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10812000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Nosní tyčinka"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Nasal stick"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Stylus nasalis"
        }
      ]
    },
    {
      "code" : "NAS UNG",
      "display" : "Nosní mast",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "NAS UNG"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10803000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Nosní mast"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Nasal ointment"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Unguentum nasale"
        }
      ]
    },
    {
      "code" : "NAS/ORM SOL",
      "display" : "Nosní/orální roztok",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "NAS/ORM SOL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50036500"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Nosní/orální roztok"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Nasal/oromucosal solution"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Solutio nasalis/oromucosalis"
        }
      ]
    },
    {
      "code" : "NAS/ORM SPR SOL",
      "display" : "Nosní/orální sprej, roztok",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "NAS/ORM SPR SOL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50036700"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Nosní/orální sprej, roztok"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Nasal/oromucosal spray, solution"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Aerodispersio nasalis/oromucosalis, solutio"
        }
      ]
    },
    {
      "code" : "OPH AQA",
      "display" : "Oční voda",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "OPH AQA"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10610000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Oční voda"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Eye lotion"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Aqua ophthalmica"
        }
      ]
    },
    {
      "code" : "OPH AQA LQF",
      "display" : "Oční voda, rozpouštědlo pro rekonstituci",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "OPH AQA LQF"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10611000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Oční voda, rozpouštědlo pro rekonstituci"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Eye lotion, solvent for reconstitution"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Liquefactorium pro aqua ophthalmica"
        }
      ]
    },
    {
      "code" : "OPH CRM",
      "display" : "Oční krém",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "OPH CRM"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10601000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Oční krém"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Eye cream"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Cremor ophthalmicus"
        }
      ]
    },
    {
      "code" : "OPH GEL",
      "display" : "Oční gel",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "OPH GEL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10602000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Oční gel"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Eye gel"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Gelatum ophthalmicum"
        }
      ]
    },
    {
      "code" : "OPH GEL MDC",
      "display" : "Oční gel v jednodávkovém obalu",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "OPH GEL MDC"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50023300"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Oční gel v jednodávkovém obalu"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Eye gel in single-dose container"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Gelatum ophthalmicum in vase monodosali"
        }
      ]
    },
    {
      "code" : "OPH GTT EML",
      "display" : "Oční kapky, emulze",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "OPH GTT EML"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10604500"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Oční kapky, emulze"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Eye drops, emulsion"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Oculoguttae in emulsione"
        }
      ]
    },
    {
      "code" : "OPH GTT EML MDC",
      "display" : "Oční kapky, emulze v jednodávkovém obalu",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "OPH GTT EML MDC"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "13104000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Oční kapky, emulze v jednodávkovém obalu"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Eye drops, emulsion in single-dose container"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Oculoguttae in emulsione in vase monodosali"
        }
      ]
    },
    {
      "code" : "OPH GTT LQF",
      "display" : "Oční kapky, rozpouštědlo pro rekonstituci",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "OPH GTT LQF"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10608000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Oční kapky, rozpouštědlo pro rekonstituci"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Eye drops, solvent for reconstitution"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Liquefactorium pro oculoguttis"
        }
      ]
    },
    {
      "code" : "OPH GTT PLQ SOL",
      "display" : "Oční kapky, prášek a rozpouštědlo pro roztok",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "OPH GTT PLQ SOL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10606000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Oční kapky, prášek a rozpouštědlo pro roztok"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Eye drops, powder and solvent for solution"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Pulvis et liquefactorium pro solutione ophthalmica"
        }
      ]
    },
    {
      "code" : "OPH GTT PLQ SUS",
      "display" : "Oční kapky, prášek a rozpouštědlo pro suspenzi",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "OPH GTT PLQ SUS"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10607000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Oční kapky, prášek a rozpouštědlo pro suspenzi"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Eye drops, powder and solvent for suspension"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Pulvis et liquefactorium pro suspensione ophthalmica"
        }
      ]
    },
    {
      "code" : "OPH GTT PLV SUS",
      "display" : "Oční kapky, prášek pro suspenzi",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "OPH GTT PLV SUS"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "13011000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Oční kapky, prášek pro suspenzi"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Eye drops, powder for suspension"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Pulvis pro suspensione ophthalmica"
        }
      ]
    },
    {
      "code" : "OPH GTT PSO",
      "display" : "Oční kapky, prášek pro roztok",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "OPH GTT PSO"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "13010000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Oční kapky, prášek pro roztok"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Eye drops, powder for solution"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Pulvis pro solutione ophthalmica"
        }
      ]
    },
    {
      "code" : "OPH GTT SOL",
      "display" : "Oční kapky, roztok",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "OPH GTT SOL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10604000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Oční kapky, roztok"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Eye drops, solution"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Oculoguttae in solutione"
        }
      ]
    },
    {
      "code" : "OPH GTT SOL MDC",
      "display" : "Oční kapky, roztok v jednodávkovém obalu",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "OPH GTT SOL MDC"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50023000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Oční kapky, roztok v jednodávkovém obalu"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Eye drops, solution in single-dose container"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Oculoguttae in solutione in vase monodosali"
        }
      ]
    },
    {
      "code" : "OPH GTT SOL PRO",
      "display" : "Oční kapky, roztok s prodlouženým uvolňováním",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "OPH GTT SOL PRO"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "13159000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Oční kapky, roztok s prodlouženým uvolňováním"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Eye drops, prolonged-release solution"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Oculoguttae in solutione cum liberatione prolongata"
        }
      ]
    },
    {
      "code" : "OPH GTT SOL PRO MDC",
      "display" : "Oční kapky, roztok s prodlouženým uvolňováním v jednodávkovém obalu",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "OPH GTT SOL PRO MDC"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50022500"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Oční kapky, roztok s prodlouženým uvolňováním v jednodávkovém obalu"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Eye drops, prolonged-release solution in single-dose container"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Oculoguttae in solutione cum liberatione prolongata in vase monodosali"
        }
      ]
    },
    {
      "code" : "OPH GTT SOL+NAS SPR SOL",
      "display" : "Oční kapky, roztok+nosní sprej, roztok",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "OPH GTT SOL+NAS SPR SOL"
        },
        {
          "code" : "NAZEV",
          "valueString" : "Oční kapky, roztok+nosní sprej, roztok"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Eye drops, solution+nasal spray, solution"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Oculoguttae in solutione+Solutio pro aerodispersione nasali"
        }
      ]
    },
    {
      "code" : "OPH GTT SOL+OPH UNG",
      "display" : "Oční kapky, roztok + oční mast",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "OPH GTT SOL+OPH UNG"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "14017000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Oční kapky, roztok + oční mast"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Eye drops, solution + eye ointment"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Oculoguttae in solutione et unguentum ophthalmicum"
        }
      ]
    },
    {
      "code" : "OPH GTT SUS",
      "display" : "Oční kapky, suspenze",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "OPH GTT SUS"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10605000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Oční kapky, suspenze"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Eye drops, suspension"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Oculoguttae in suspensione"
        }
      ]
    },
    {
      "code" : "OPH GTT SUS MDC",
      "display" : "Oční kapky, suspenze v jednodávkovém obalu",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "OPH GTT SUS MDC"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50023100"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Oční kapky, suspenze v jednodávkovém obalu"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Eye drops, suspension in single-dose container"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Oculoguttae in suspensione in vase monodosali"
        }
      ]
    },
    {
      "code" : "OPH INS",
      "display" : "Oční inzert",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "OPH INS"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10612000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Oční inzert"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Ophthalmic insert"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Oculoinsertum"
        }
      ]
    },
    {
      "code" : "OPH STR",
      "display" : "Oční proužek",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "OPH STR"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10613000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Oční proužek"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Ophthalmic strip"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Lineola ophthalmica"
        }
      ]
    },
    {
      "code" : "OPH UNG",
      "display" : "Oční mast",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "OPH UNG"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10603000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Oční mast"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Eye ointment"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Unguentum ophthalmicum"
        }
      ]
    },
    {
      "code" : "OPH UNG MDC",
      "display" : "Oční mast v jednodávkovém obalu",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "OPH UNG MDC"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50023400"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Oční mast v jednodávkovém obalu"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Eye ointment in single-dose container"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Unguentum ophthalmicum in vase monodosali"
        }
      ]
    },
    {
      "code" : "OPH/NAS GTT SOL",
      "display" : "Oční/nosní kapky, roztok",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "OPH/NAS GTT SOL"
        },
        {
          "code" : "NAZEV",
          "valueString" : "Oční/nosní kapky, roztok"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Eye/nasal drops, solution"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Oculoguttae/rhinoguttae in solutione"
        }
      ]
    },
    {
      "code" : "ORM CNC SOL",
      "display" : "Koncentrát pro orální roztok",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "ORM CNC SOL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "13003000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Koncentrát pro orální roztok"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Concentrate for oromucosal solution"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Concentratum pro solutione oromucosali"
        }
      ]
    },
    {
      "code" : "ORM CPS",
      "display" : "Orální tobolka",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "ORM CPS"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10317000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Orální tobolka"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Oromucosal capsule"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Capsula oromucosalis"
        }
      ]
    },
    {
      "code" : "ORM CRM",
      "display" : "Orální krém",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "ORM CRM"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10314010"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Orální krém"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Oromucosal cream"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Cremor oromucosalis"
        }
      ]
    },
    {
      "code" : "ORM EMP",
      "display" : "Orální náplast",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "ORM EMP"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50039000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Orální náplast"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Oromucosal patch"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Emplastrum oromucosale"
        }
      ]
    },
    {
      "code" : "ORM FLM",
      "display" : "Orální film",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "ORM FLM"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "13149000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Orální film"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Oromucosal film"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Lamina oromucosalis"
        }
      ]
    },
    {
      "code" : "ORM GEL",
      "display" : "Orální gel",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "ORM GEL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10313000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Orální gel"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Oromucosal gel"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Gelatum oromucosale"
        }
      ]
    },
    {
      "code" : "ORM GTT EML",
      "display" : "Orální kapky, emulze",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "ORM GTT EML"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "13167000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Orální kapky, emulze"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Oromucosal drops, emulsion"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Guttae oromucosales in emulsione"
        }
      ]
    },
    {
      "code" : "ORM GTT SOL",
      "display" : "Orální kapky, roztok",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "ORM GTT SOL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "13168000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Orální kapky, roztok"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Oromucosal drops, solution"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Guttae oromucosales  in solutione"
        }
      ]
    },
    {
      "code" : "ORM GTT SUS",
      "display" : "Orální kapky, suspenze",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "ORM GTT SUS"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "13169000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Orální kapky, suspenze"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Oromucosal drops, suspension"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Guttae oromucosales in suspensione"
        }
      ]
    },
    {
      "code" : "ORM POH",
      "display" : "Orální váček",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "ORM POH"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "13141000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Orální váček"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Oromucosal pouch"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Sacculus oromucosalis"
        }
      ]
    },
    {
      "code" : "ORM PST",
      "display" : "Orální pasta",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "ORM PST"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10314000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Orální pasta"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Oromucosal paste"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Pasta oromucosalis"
        }
      ]
    },
    {
      "code" : "ORM SOL",
      "display" : "Orální roztok",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "ORM SOL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10305000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Orální roztok"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Oromucosal solution"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Solutio oromucosalis"
        }
      ]
    },
    {
      "code" : "ORM SPR EML",
      "display" : "Orální sprej, emulze",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "ORM SPR EML"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10308100"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Orální sprej, emulze"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Oromucosal spray, emulsion"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Emulsio pro aerodispersione oromucosali"
        }
      ]
    },
    {
      "code" : "ORM SPR SOL",
      "display" : "Orální sprej, roztok",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "ORM SPR SOL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10308200"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Orální sprej, roztok"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Oromucosal spray, solution"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Solutio pro aerodispersione oromucosali"
        }
      ]
    },
    {
      "code" : "ORM SPR SUS",
      "display" : "Orální sprej, suspenze",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "ORM SPR SUS"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10308300"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Orální sprej, suspenze"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Oromucosal spray, suspension"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Suspensio pro aerodispersione oromucosali"
        }
      ]
    },
    {
      "code" : "ORM SUS",
      "display" : "Orální suspenze",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "ORM SUS"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10306000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Orální suspenze"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Oromucosal suspension"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Suspensio oromucosalis"
        }
      ]
    },
    {
      "code" : "ORM UNG",
      "display" : "Orální mast",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "ORM UNG"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10314005"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Orální mast"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Oromucosal ointment"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Unguentum oromucosale"
        }
      ]
    },
    {
      "code" : "ORM/LRP SOL",
      "display" : "Orální/laryngofaryngeální roztok",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "ORM/LRP SOL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50039500"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Orální/laryngofaryngeální roztok"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Oromucosal/laryngopharyngeal solution"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Solutio oromucosalis/laryngopharyn­gealis"
        }
      ]
    },
    {
      "code" : "ORM/LRP SPR SOL",
      "display" : "Orální/laryngofaryngeální roztok/sprej, roztok",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "ORM/LRP SPR SOL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50040500"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Orální/laryngofaryngeální roztok/sprej, roztok"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Oromucosal/laryngopharyngeal solution/spray, solution"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Solutio pro solutione aerodispersione oromucosali/laryngopharyn­geali"
        }
      ]
    },
    {
      "code" : "PAR LQF",
      "display" : "Rozpouštědlo pro parenterální použití",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "PAR LQF"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "11216000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Rozpouštědlo pro parenterální použití"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Solvent for parenteral use"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Liquefactorium ad usum parenteralem"
        }
      ]
    },
    {
      "code" : "PAS",
      "display" : "Pastilka",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "PAS"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10321000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Pastilka"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Lozenge"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Pastillus"
        }
      ]
    },
    {
      "code" : "PAS CMP",
      "display" : "Lisovaná pastilka",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "PAS CMP"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10322000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Lisovaná pastilka"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Compressed lozenge"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Pastillus compressus"
        }
      ]
    },
    {
      "code" : "PAS MOL",
      "display" : "Měkká pastilka",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "PAS MOL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10323000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Měkká pastilka"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Pastille"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Pastillus mollis"
        }
      ]
    },
    {
      "code" : "PDN GEL",
      "display" : "Periodontální gel",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "PDN GEL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10410000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Periodontální gel"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Periodontal gel"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Gelatum periodontale"
        }
      ]
    },
    {
      "code" : "PDN INS",
      "display" : "Periodontální inzert",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "PDN INS"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10411000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Periodontální inzert"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Periodontal insert"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Insertum periodontale"
        }
      ]
    },
    {
      "code" : "PDN PLV",
      "display" : "Periodontální prášek",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "PDN PLV"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10401000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Periodontální prášek"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Periodontal powder"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Pulvis periodontalis"
        }
      ]
    },
    {
      "code" : "PIL",
      "display" : "Pilule",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "PIL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10231000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Pilule"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Pillules"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Pilulae"
        }
      ]
    },
    {
      "code" : "PIL MDC",
      "display" : "Pilule v jednodávkovém obalu",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "PIL MDC"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50041000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Pilule v jednodávkovém obalu"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Pillules in single-dose container"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Pilulae in vase monodosali"
        }
      ]
    },
    {
      "code" : "PLG IPR",
      "display" : "Impregnovaná vložka",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "PLG IPR"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "12117500"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Impregnovaná vložka"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Impregnated plug"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Explementum impraegnatum"
        }
      ]
    },
    {
      "code" : "PLQ GKU",
      "display" : "Prášek a rozpouštědlo pro tkáňové lepidlo",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "PLQ GKU"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "12116000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Prášek a rozpouštědlo pro tkáňové lepidlo"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Powder and solvent for sealant"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Pulvis et liquefactorium pro glutino telae vivae"
        }
      ]
    },
    {
      "code" : "PLQ SIR",
      "display" : "Prášek a rozpouštědlo pro sirup",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "PLQ SIR"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10115500"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Prášek a rozpouštědlo pro sirup"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Powder and solvent for syrup"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Pulvis et liquefactorium pro sirupo"
        }
      ]
    },
    {
      "code" : "PLQ SOL NEB",
      "display" : "Prášek a rozpouštědlo pro roztok k rozprašování",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "PLQ SOL NEB"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50047700"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Prášek a rozpouštědlo pro roztok k rozprašování"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Powder and solvent for nebuliser solution"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Pulvis et liquefactorium pro solutio ad nebulisationem"
        }
      ]
    },
    {
      "code" : "PLV EFF",
      "display" : "Šumivý prášek",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "PLV EFF"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10203000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Šumivý prášek"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Effervescent powder"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Pulvis effervescens"
        }
      ]
    },
    {
      "code" : "PLV GEL",
      "display" : "Prášek pro přípravu gelu",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "PLV GEL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "13021000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Prášek pro přípravu gelu"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Powder for gel"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Pulvis pro gelato"
        }
      ]
    },
    {
      "code" : "PLV GGR",
      "display" : "Kloktadlo, prášek pro roztok",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "PLV GGR"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10303000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Kloktadlo, prášek pro roztok"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Gargle, powder for solution"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Pulvis pro gargarismate"
        }
      ]
    },
    {
      "code" : "PLV GKU",
      "display" : "Prášek pro tkáňové lepidlo",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "PLV GKU"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "13031000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Prášek pro tkáňové lepidlo"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Powder for sealant"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Pulvis pro glutino telae vivae"
        }
      ]
    },
    {
      "code" : "PLV SIR",
      "display" : "Prášek pro sirup",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "PLV SIR"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10118000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Prášek pro sirup"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Powder for syrup"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Pulvis pro sirupo"
        }
      ]
    },
    {
      "code" : "PLV SOL ION",
      "display" : "Prášek pro roztok pro iontoforézu",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "PLV SOL ION"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10518500"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Prášek pro roztok pro iontoforézu"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Powder for solution for iontophoresis"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Pulvis pro solutione pro iontophoresi"
        }
      ]
    },
    {
      "code" : "PLV SOL NEB",
      "display" : "Prášek pro roztok k rozprašování",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "PLV SOL NEB"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "11104000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Prášek pro roztok k rozprašování"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Powder for nebuliser solution"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Pulvis pro solutione ad nebulisationem"
        }
      ]
    },
    {
      "code" : "PLV SUS NEB",
      "display" : "Prášek pro suspenzi k rozprašování",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "PLV SUS NEB"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "11103000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Prášek pro suspenzi k rozprašování"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Powder for nebuliser suspension"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Pulvis pro suspensione ad nebulisationem"
        }
      ]
    },
    {
      "code" : "POR CNC SOL",
      "display" : "Koncentrát pro perorální roztok",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "POR CNC SOL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50010000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Koncentrát pro perorální roztok"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Concentrate for oral solution"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Concentratum pro solutione perorali"
        }
      ]
    },
    {
      "code" : "POR CNC SUS",
      "display" : "Koncentrát pro perorální suspenzi",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "POR CNC SUS"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10100500"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Koncentrát pro perorální suspenzi"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Concentrate for oral suspension"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Concentratum pro suspensione perorali"
        }
      ]
    },
    {
      "code" : "POR CSL LQF",
      "display" : "Koncentrát a rozpouštědlo pro perorální roztok",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "POR CSL LQF"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "13160000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Koncentrát a rozpouštědlo pro perorální roztok"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Concentrate and solvent for oral solution"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Concentratum et liquefactorium pro solutione perorali"
        }
      ]
    },
    {
      "code" : "POR EML",
      "display" : "Perorální emulze",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "POR EML"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10107000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Perorální emulze"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Oral emulsion"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Emulsio peroralis"
        }
      ]
    },
    {
      "code" : "POR EML SCC",
      "display" : "Perorální emulze v sáčku",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "POR EML SCC"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50037600"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Perorální emulze v sáčku"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Oral emulsion in sachet"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Emulsio peroralis in sacullo"
        }
      ]
    },
    {
      "code" : "POR FLM DIS",
      "display" : "Film dispergovatelný v ústech",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "POR FLM DIS"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10236100"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Film dispergovatelný v ústech"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Orodispersible film"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Lamina pro orodispersione"
        }
      ]
    },
    {
      "code" : "POR GEL",
      "display" : "Perorální gel",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "POR GEL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10108000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Perorální gel"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Oral gel"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Gelatum perorale"
        }
      ]
    },
    {
      "code" : "POR GRA SOL",
      "display" : "Granule pro perorální roztok",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "POR GRA SOL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10112000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Granule pro perorální roztok"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Granules for oral solution"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Granula pro solutione perorali"
        }
      ]
    },
    {
      "code" : "POR GRA SOL SCC",
      "display" : "Granule pro perorální roztok v sáčku",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "POR GRA SOL SCC"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50029170"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Granule pro perorální roztok v sáčku"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Granules for oral solution in sachet"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Granula pro solutione perorali in sacullo"
        }
      ]
    },
    {
      "code" : "POR GRA SUS",
      "display" : "Granule pro perorální suspenzi",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "POR GRA SUS"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10113000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Granule pro perorální suspenzi"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Granules for oral suspension"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Granula pro suspensione perorali"
        }
      ]
    },
    {
      "code" : "POR GRA SUS SCC",
      "display" : "Granule pro perorální suspenzi v sáčku",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "POR GRA SUS SCC"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50029200"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Granule pro perorální suspenzi v sáčku"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Granules for oral suspension in sachet"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Granula pro suspensione perorali in sacullo"
        }
      ]
    },
    {
      "code" : "POR GRL SUS",
      "display" : "Granule a rozpouštědlo pro perorální suspenzi",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "POR GRL SUS"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50026500"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Granule a rozpouštědlo pro perorální suspenzi"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Granules and solvent for oral suspension"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Granula et liquefactorium pro suspensione perorali"
        }
      ]
    },
    {
      "code" : "POR GSU EFF",
      "display" : "Šumivé granule pro perorální suspenzi",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "POR GSU EFF"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "13007000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Šumivé granule pro perorální suspenzi"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Effervescent granules for oral suspension"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Granula effervescentia pro suspensione perorali"
        }
      ]
    },
    {
      "code" : "POR GSU ENT",
      "display" : "Granule pro enterosolventní perorální suspenzi",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "POR GSU ENT"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50026000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Granule pro enterosolventní perorální suspenzi"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Granules for gastro-resistant oral suspension"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Granula pro suspensione enterosolventi perorali"
        }
      ]
    },
    {
      "code" : "POR GSU ENT SCC",
      "display" : "Granule pro enterosolventní perorální suspenzi v sáčku",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "POR GSU ENT SCC"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50026150"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Granule pro enterosolventní perorální suspenzi v sáčku"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Granules for gastro-resistant oral suspension in sachet"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Granula pro suspensione enterosolventi perorali in sacullo"
        }
      ]
    },
    {
      "code" : "POR GSU MRL",
      "display" : "Granule pro perorální suspenzi s řízeným uvolňováním",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "POR GSU MRL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50036000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Granule pro perorální suspenzi s řízeným uvolňováním"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Granules for modified-release oral suspension"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Granula pro suspensione perorali cum liberatione modificata"
        }
      ]
    },
    {
      "code" : "POR GSU PRO",
      "display" : "Granule pro perorální suspenzi s prodlouženým uvolňováním",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "POR GSU PRO"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50056000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Granule pro perorální suspenzi s prodlouženým uvolňováním"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Granules for prolonged-release oral suspension"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Granula pro suspensione perorali cum liberatione prolongata"
        }
      ]
    },
    {
      "code" : "POR GSU PRO SCC",
      "display" : "Granule pro perorální suspenzi s prodlouženým uvolňováním v sáčku",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "POR GSU PRO SCC"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50056150"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Granule pro perorální suspenzi s prodlouženým uvolňováním v sáčku"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Granules for prolonged-release oral suspension in sachet"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Granula pro suspensione perorali cum liberatione prolongata in sacullo"
        }
      ]
    },
    {
      "code" : "POR GTT EML",
      "display" : "Perorální kapky, emulze",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "POR GTT EML"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10103000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Perorální kapky, emulze"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Oral drops, emulsion"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Guttae perorales in emulsione"
        }
      ]
    },
    {
      "code" : "POR GTT GSO",
      "display" : "Perorální kapky, granule pro roztok",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "POR GTT GSO"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50037500"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Perorální kapky, granule pro roztok"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Oral drops, granules for solution"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Guttae perorales, granula pro solutione"
        }
      ]
    },
    {
      "code" : "POR GTT LIQ",
      "display" : "Perorální kapky, tekutina",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "POR GTT LIQ"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50037750"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Perorální kapky, tekutina"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Oral drops, liquid"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Guttae perorales, liquidum"
        }
      ]
    },
    {
      "code" : "POR GTT PSU",
      "display" : "Perorální kapky, prášek pro suspenzi",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "POR GTT PSU"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50082000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Perorální kapky, prášek pro suspenzi"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Oral drops, powder for suspension"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Pulvis pro guttis peroralibus in suspensione"
        }
      ]
    },
    {
      "code" : "POR GTT SOL",
      "display" : "Perorální kapky, roztok",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "POR GTT SOL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10101000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Perorální kapky, roztok"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Oral drops, solution"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Guttae perorales in solutione"
        }
      ]
    },
    {
      "code" : "POR GTT SUS",
      "display" : "Perorální kapky, suspenze",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "POR GTT SUS"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10102000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Perorální kapky, suspenze"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Oral drops, suspension"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Guttae perorales in suspensione"
        }
      ]
    },
    {
      "code" : "POR LIQ",
      "display" : "Perorální tekutina",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "POR LIQ"
        },
        {
          "code" : "JE_KONOPI",
          "valueString" : "A"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10104000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Perorální tekutina"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Oral liquid"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Liquidum perorale"
        }
      ]
    },
    {
      "code" : "POR LYO",
      "display" : "Perorální lyofilizát",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "POR LYO"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10224000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Perorální lyofilizát"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Oral lyophilisate"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Lyophilisatum perorale"
        }
      ]
    },
    {
      "code" : "POR MTR HER",
      "display" : "Perorální rostlinný materiál",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "POR MTR HER"
        },
        {
          "code" : "JE_KONOPI",
          "valueString" : "A"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "13106000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Perorální rostlinný materiál"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Oral herbal material"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Herbarum materia peroralis"
        }
      ]
    },
    {
      "code" : "POR OLE",
      "display" : "Perorální olej",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "POR OLE"
        },
        {
          "code" : "NAZEV",
          "valueString" : "Perorální olej"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Oral oil"
        }
      ]
    },
    {
      "code" : "POR PAS MOL",
      "display" : "Perorální měkká pastilka",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "POR PAS MOL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10230000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Perorální měkká pastilka"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Oral gum"
        }
      ]
    },
    {
      "code" : "POR PEV SUS",
      "display" : "Prášek a šumivý prášek pro perorální suspenzi",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "POR PEV SUS"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "13171000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Prášek a šumivý prášek pro perorální suspenzi"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Powder and effervescent powder for oral suspension"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Pulvis et pulvis effervescens pro suspensione perorali"
        }
      ]
    },
    {
      "code" : "POR PLQ SOL",
      "display" : "Prášek a rozpouštědlo pro perorální roztok",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "POR PLQ SOL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10114000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Prášek a rozpouštědlo pro perorální roztok"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Powder and solvent for oral solution"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Pulvis et liquefactorium pro solutione perorali"
        }
      ]
    },
    {
      "code" : "POR PLQ SUS",
      "display" : "Prášek a rozpouštědlo pro perorální suspenzi",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "POR PLQ SUS"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10115000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Prášek a rozpouštědlo pro perorální suspenzi"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Powder and solvent for oral suspension"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Pulvis et liquefactorium pro suspensione perorali"
        }
      ]
    },
    {
      "code" : "POR PLV",
      "display" : "Perorální prášek",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "POR PLV"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10201000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Perorální prášek"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Oral powder"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Pulvis peroralis"
        }
      ]
    },
    {
      "code" : "POR PLV CPS OPE",
      "display" : "Perorální prášek v tobolkách pro otevření",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "POR PLV CPS OPE"
        },
        {
          "code" : "NAZEV",
          "valueString" : "Perorální prášek v tobolkách pro otevření"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Oral powder in capsules for opening"
        }
      ]
    },
    {
      "code" : "POR PLV MDC",
      "display" : "Perorální prášek v jednodávkovém obalu",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "POR PLV MDC"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "13130000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Perorální prášek v jednodávkovém obalu"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Oral powder in single-dose container"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Pulvis peroralis in vase monodosali"
        }
      ]
    },
    {
      "code" : "POR PLV SCC",
      "display" : "Perorální prášek v sáčku",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "POR PLV SCC"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50037800"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Perorální prášek v sáčku"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Oral powder in sachet"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Pulvis peroralis in sacullo"
        }
      ]
    },
    {
      "code" : "POR PLV SOL",
      "display" : "Prášek pro perorální roztok",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "POR PLV SOL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10110000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Prášek pro perorální roztok"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Powder for oral solution"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Pulvis pro solutione perorali"
        }
      ]
    },
    {
      "code" : "POR PLV SOL SCC",
      "display" : "Prášek pro perorální roztok v sáčku",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "POR PLV SOL SCC"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50052500"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Prášek pro perorální roztok v sáčku"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Powder for oral solution in sachet"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Pulvis pro solutione perorali in sacullo"
        }
      ]
    },
    {
      "code" : "POR PLV SUS",
      "display" : "Prášek pro perorální suspenzi",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "POR PLV SUS"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10111000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Prášek pro perorální suspenzi"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Powder for oral suspension"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Pulvis pro suspensione perorali"
        }
      ]
    },
    {
      "code" : "POR PLV SUS SCC",
      "display" : "Prášek pro perorální suspenzi v sáčku",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "POR PLV SUS SCC"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "13147000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Prášek pro perorální suspenzi v sáčku"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Powder for oral suspension in sachet"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Pulvis pro suspensione perorali in sacculo"
        }
      ]
    },
    {
      "code" : "POR PNQ SUS",
      "display" : "Prášek a rozpouštědlo pro enterosolventní perorální suspenzi",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "POR PNQ SUS"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "13138000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Prášek a rozpouštědlo pro enterosolventní perorální suspenzi"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Powder and solvent for gastro-resistant oral suspension"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Pulvis et liquefactorium pro suspensione enterosolventi perorali"
        }
      ]
    },
    {
      "code" : "POR PST",
      "display" : "Perorální pasta",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "POR PST"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10109000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Perorální pasta"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Oral paste"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Pasta peroralis"
        }
      ]
    },
    {
      "code" : "POR PST SCC",
      "display" : "Perorální pasta v sáčku",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "POR PST SCC"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50037700"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Perorální pasta v sáčku"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Oral paste in sachet"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Pasta peroralis in sacullo"
        }
      ]
    },
    {
      "code" : "POR PSU ENT",
      "display" : "Prášek pro enterosolventní perorální suspenzi",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "POR PSU ENT"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "13136000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Prášek pro enterosolventní perorální suspenzi"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Powder for gastro-resistant oral suspension"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Pulvis pro suspensione enterosolventi perorali"
        }
      ]
    },
    {
      "code" : "POR PSU PRO",
      "display" : "Prášek pro perorální suspenzi s prodlouženým uvolňováním",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "POR PSU PRO"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "13176000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Prášek pro perorální suspenzi s prodlouženým uvolňováním"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Powder for prolonged-release oral suspension"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Pulvis pro suspensione perorali cum liberatione prolongata"
        }
      ]
    },
    {
      "code" : "POR PTB SOL",
      "display" : "Prášek a tableta pro perorální roztok",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "POR PTB SOL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "13172000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Prášek a tableta pro perorální roztok"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Powder and tablet for oral solution"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Pulvis et tabuletta pro solutione perorali"
        }
      ]
    },
    {
      "code" : "POR SEG SUS",
      "display" : "Šumivé granule a suspenze pro perorální suspenzi",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "POR SEG SUS"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50062000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Šumivé granule a suspenze pro perorální suspenzi"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Effervescent granules and suspension for oral suspension"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Granula effervescentia et suspensio pro suspensione perorali"
        }
      ]
    },
    {
      "code" : "POR SEP SUS",
      "display" : "Suspenze a šumivý prášek pro perorální suspenzi",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "POR SEP SUS"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "13173000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Suspenze a šumivý prášek pro perorální suspenzi"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Suspension and effervescent powder for oral suspension"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Suspensio et pulvis effervescens pro suspensione perorali"
        }
      ]
    },
    {
      "code" : "POR SGE SUS",
      "display" : "Suspenze a šumivé granule pro perorální suspenzi",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "POR SGE SUS"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50062000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Suspenze a šumivé granule pro perorální suspenzi"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Suspension and effervescent granules for oral suspension"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Suspensio et granula effervescentia pro suspensione perorali"
        }
      ]
    },
    {
      "code" : "POR SOL",
      "display" : "Perorální roztok",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "POR SOL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10105000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Perorální roztok"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Oral solution"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Solutio peroralis"
        }
      ]
    },
    {
      "code" : "POR SOL CVI",
      "display" : "Perorální roztok ve vícedávkovém obalu s dávkovací pumpou",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "POR SOL CVI"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "13146000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Perorální roztok ve vícedávkovém obalu s dávkovací pumpou"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Oral solution in multidose container with metering pump"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Solutio peroralis in vase multidosali cum antlia pro applicationem in dossibus"
        }
      ]
    },
    {
      "code" : "POR SOL MDC",
      "display" : "Perorální roztok v jednodávkovém obalu",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "POR SOL MDC"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50038650"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Perorální roztok v jednodávkovém obalu"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Oral solution in single-dose container"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Solutio peroralis in vase monodosali"
        }
      ]
    },
    {
      "code" : "POR SOL SCC",
      "display" : "Perorální roztok v sáčku",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "POR SOL SCC"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50038600"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Perorální roztok v sáčku"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Oral solution in sachet"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Solutio peroralis in sacullo"
        }
      ]
    },
    {
      "code" : "POR SOL/CNC SOL NEB",
      "display" : "Perorální roztok/koncentrát pro roztok k rozprašování",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "POR SOL/CNC SOL NEB"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50038500"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Perorální roztok/koncentrát pro roztok k rozprašování"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Oral solution/concentrate for nebuliser solution"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Solutio peroralis/concentratum pro solutio ad nebulisationem"
        }
      ]
    },
    {
      "code" : "POR SOL/DRM SOL",
      "display" : "Perorální/kožní roztok",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "POR SOL/DRM SOL"
        },
        {
          "code" : "NAZEV",
          "valueString" : "Perorální/kožní roztok"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Oral/cutaneous solution"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Solutio peroralis/cutaneous"
        }
      ]
    },
    {
      "code" : "POR SOL/INH SOL",
      "display" : "Perorální roztok/roztok k inhalaci",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "POR SOL/INH SOL"
        },
        {
          "code" : "NAZEV",
          "valueString" : "Perorální roztok/roztok k inhalaci"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Oral/inhalation solution"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Solutio peroralis/ad inhalationem"
        }
      ]
    },
    {
      "code" : "POR SUS",
      "display" : "Perorální suspenze",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "POR SUS"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10106000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Perorální suspenze"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Oral suspension"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Suspensio peroralis"
        }
      ]
    },
    {
      "code" : "POR SUS ENT",
      "display" : "Enterosolventní perorální suspenze",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "POR SUS ENT"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "13133000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Enterosolventní perorální suspenze"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Gastro-resistant oral suspension"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Suspensio peroralis enterosolvens"
        }
      ]
    },
    {
      "code" : "POR SUS MRL",
      "display" : "Perorální suspenze s řízeným uvolňováním",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "POR SUS MRL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "13135000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Perorální suspenze s řízeným uvolňováním"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Modified-release oral suspension"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Suspensio peroralis cum liberatione modificata"
        }
      ]
    },
    {
      "code" : "POR SUS PPE",
      "display" : "Šumivý prášek a prášek pro perorální suspenzi",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "POR SUS PPE"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "13119000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Šumivý prášek a prášek pro perorální suspenzi"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Effervescent powder and powder for oral suspension"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Pulvis effervescens et pulvis pro suspensione perorali"
        }
      ]
    },
    {
      "code" : "POR SUS PPL",
      "display" : "Perorální suspenze v předplněném aplikátoru pro perorální podání",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "POR SUS PPL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "13075000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Perorální suspenze v předplněném aplikátoru pro perorální podání"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Oral suspension in pre-filled oral applicator"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Suspensio peroralis in instrumento ad applicationem praeimpleto ad usum peroralem"
        }
      ]
    },
    {
      "code" : "POR SUS PRO",
      "display" : "Perorální suspenze s prodlouženým uvolňováním",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "POR SUS PRO"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "13134000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Perorální suspenze s prodlouženým uvolňováním"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Prolonged-release oral suspension"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Suspensio peroralis cum liberatione prolongata"
        }
      ]
    },
    {
      "code" : "POR SUS PSE",
      "display" : "Šumivý prášek a suspenze pro perorální suspenzi",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "POR SUS PSE"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "13150000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Šumivý prášek a suspenze pro perorální suspenzi"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Effervescent powder and suspension for oral suspension"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Pulvis effervescens et suspensio pro suspensione perorali"
        }
      ]
    },
    {
      "code" : "POR SUS SCC",
      "display" : "Perorální suspenze v sáčku",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "POR SUS SCC"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50038700"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Perorální suspenze v sáčku"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Oral suspension in sachet"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Suspensio peroralis in sacullo"
        }
      ]
    },
    {
      "code" : "POR SUS SUS",
      "display" : "Suspenze pro perorální suspenzi",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "POR SUS SUS"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "13037000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Suspenze pro perorální suspenzi"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Suspension for oral suspension"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Suspensio pro suspensione perorali"
        }
      ]
    },
    {
      "code" : "POR SUS TUB",
      "display" : "Perorální suspenze v tubě",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "POR SUS TUB"
        },
        {
          "code" : "NAZEV",
          "valueString" : "Perorální suspenze v tubě"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Oral suspension in tube"
        }
      ]
    },
    {
      "code" : "POR TBL DIS",
      "display" : "Tableta dispergovatelná v ústech",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "POR TBL DIS"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10223000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Tableta dispergovatelná v ústech"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Orodispersible tablet"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Tabuletta pro orodispersione"
        }
      ]
    },
    {
      "code" : "POR TBP SOL",
      "display" : "Tableta a prášek pro perorální roztok",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "POR TBP SOL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50065000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Tableta a prášek pro perorální roztok"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Tablet and powder for oral solution"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Tabuletta et pulvis pro solutione perorali"
        }
      ]
    },
    {
      "code" : "POR/ORM/DRM SOL",
      "display" : "Perorální/orální/kožní roztok",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "POR/ORM/DRM SOL"
        },
        {
          "code" : "NAZEV",
          "valueString" : "Perorální/orální/kožní roztok"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Oral/oromucosal/cutaneous solution"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Solutio peroralis/oromucosales/cutaneous"
        }
      ]
    },
    {
      "code" : "POR/RCT CNC SOL",
      "display" : "Koncentrát pro perorální/rektální roztok",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "POR/RCT CNC SOL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50011000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Koncentrát pro perorální/rektální roztok"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Concentrate for oral/rectal solution"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Concentratum pro solutione perorali/rectali"
        }
      ]
    },
    {
      "code" : "POR/RCT GRA SUS",
      "display" : "Granule pro perorální/rektální suspenzi",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "POR/RCT GRA SUS"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50029150"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Granule pro perorální/rektální suspenzi"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Granules for oral/rectal suspension"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Granula pro suspensione perorali/rectali"
        }
      ]
    },
    {
      "code" : "POR/RCT PLV SUS",
      "display" : "Prášek pro perorální/rektální suspenzi",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "POR/RCT PLV SUS"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50052000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Prášek pro perorální/rektální suspenzi"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Powder for oral/rectal suspension"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Pulvis pro suspensione perorali seu rectali"
        }
      ]
    },
    {
      "code" : "POR/RCT PLV SUS SCC",
      "display" : "Prášek pro perorální/rektální suspenzi v sáčku",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "POR/RCT PLV SUS SCC"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "13060000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Prášek pro perorální/rektální suspenzi v sáčku"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Powder for oral/rectal suspension in sachet"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Pulvis pro suspensione perorali seu rectali in sacullo"
        }
      ]
    },
    {
      "code" : "POR/RCT SOL",
      "display" : "Perorální/rektální roztok",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "POR/RCT SOL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50037900"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Perorální/rektální roztok"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Oral/rectal solution"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Solutio peroralis/rectalis"
        }
      ]
    },
    {
      "code" : "POR/RCT SUS",
      "display" : "Perorální/rektální suspenze",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "POR/RCT SUS"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50038000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Perorální/rektální suspenze"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Oral/rectal suspension"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Suspensio peroralis/rectalis"
        }
      ]
    },
    {
      "code" : "PRG GEL",
      "display" : "Prášek a gel pro přípravu gelu",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "PRG GEL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50041200"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Prášek a gel pro přípravu gelu"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Powder and gel for gel"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Pulvis et gelatum pro gelato"
        }
      ]
    },
    {
      "code" : "PRN CNC SOL",
      "display" : "Koncentrát pro roztok k peritoneální dialýze",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "PRN CNC SOL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50013250"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Koncentrát pro roztok k peritoneální dialýze"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Concentrate for solution for peritoneal dialysis"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Concentratum pro solutione ad dialysim peritonealem"
        }
      ]
    },
    {
      "code" : "PRN SOL",
      "display" : "Roztok pro peritoneální dialýzu",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "PRN SOL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "11401000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Roztok pro peritoneální dialýzu"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Solution for peritoneal dialysis"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Solutio pro dialysi peritoneali"
        }
      ]
    },
    {
      "code" : "PRV PLQ SOL",
      "display" : "Prášek a rozpouštědlo pro roztok pro provokační test",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "PRV PLQ SOL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "13185000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Prášek a rozpouštědlo pro roztok pro provokační test"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Powder and solvent for solution for provocation test"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Pulvis et liquefactorium pro solutione pro testo provocanti"
        }
      ]
    },
    {
      "code" : "PRV PSO",
      "display" : "Prášek pro roztok pro provokační test",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "PRV PSO"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "13184000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Prášek pro roztok pro provokační test"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Powder for solution for provocation test"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Pulvis pro solutione pro testo provocanti"
        }
      ]
    },
    {
      "code" : "PRV SOL",
      "display" : "Roztok pro provokační test",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "PRV SOL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "12131000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Roztok pro provokační test"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Solution for provocation test"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Solutio pro testo provocanti"
        }
      ]
    },
    {
      "code" : "RAD GEN",
      "display" : "Radionuklidový generátor",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "RAD GEN"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "12106000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Radionuklidový generátor"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Radionuclide generator"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Generator pro elutione radionucleidi"
        }
      ]
    },
    {
      "code" : "RAD KIT",
      "display" : "Kit pro radiofarmakum",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "RAD KIT"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "12107000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Kit pro radiofarmakum"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Kit for radiopharmaceutical preparation"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Compositio pro radiopharmaco"
        }
      ]
    },
    {
      "code" : "RAD PRE",
      "display" : "Prekurzor radiofarmaka",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "RAD PRE"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "12105000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Prekurzor radiofarmaka"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Radiopharmaceutical precursor"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Praecursor radiopharmaci"
        }
      ]
    },
    {
      "code" : "RAD PRE SOL",
      "display" : "Prekurzor radiofarmaka, roztok",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "RAD PRE SOL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50056500"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Prekurzor radiofarmaka, roztok"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Radiopharmaceutical precursor, solution"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Praecursor radiopharmaci in solutione"
        }
      ]
    },
    {
      "code" : "RCT CNC SOL",
      "display" : "Koncentrát pro rektální roztok",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "RCT CNC SOL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "11008000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Koncentrát pro rektální roztok"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Concentrate for rectal solution"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Concentratum pro solutione rectali"
        }
      ]
    },
    {
      "code" : "RCT CPS",
      "display" : "Rektální tobolka",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "RCT CPS"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "11014000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Rektální tobolka"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Rectal capsule"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Capsula rectalis"
        }
      ]
    },
    {
      "code" : "RCT CRM",
      "display" : "Rektální krém",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "RCT CRM"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "11001000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Rektální krém"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Rectal cream"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Cremor rectalis"
        }
      ]
    },
    {
      "code" : "RCT EML",
      "display" : "Rektální emulze",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "RCT EML"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "11007000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Rektální emulze"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Rectal emulsion"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Emulsio rectalis"
        }
      ]
    },
    {
      "code" : "RCT GEL",
      "display" : "Rektální gel",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "RCT GEL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "11002000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Rektální gel"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Rectal gel"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Gelatum rectale"
        }
      ]
    },
    {
      "code" : "RCT GRA SUS",
      "display" : "Granule pro rektální suspenzi",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "RCT GRA SUS"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "13015000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Granule pro rektální suspenzi"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Granules for rectal suspension"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Granula pro suspensione rectali"
        }
      ]
    },
    {
      "code" : "RCT PLV SOL",
      "display" : "Prášek pro rektální roztok",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "RCT PLV SOL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "11009000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Prášek pro rektální roztok"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Powder for rectal solution"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Pulvis pro solutione rectali"
        }
      ]
    },
    {
      "code" : "RCT PLV SUS",
      "display" : "Prášek pro rektální suspenzi",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "RCT PLV SUS"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "11010000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Prášek pro rektální suspenzi"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Powder for rectal suspension"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Pulvis pro suspensione rectali"
        }
      ]
    },
    {
      "code" : "RCT SOL",
      "display" : "Rektální roztok",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "RCT SOL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "11005000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Rektální roztok"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Rectal solution"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Solutio rectalis"
        }
      ]
    },
    {
      "code" : "RCT SPM",
      "display" : "Rektální pěna",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "RCT SPM"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "11004000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Rektální pěna"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Rectal foam"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Spuma rectalis"
        }
      ]
    },
    {
      "code" : "RCT SUS",
      "display" : "Rektální suspenze",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "RCT SUS"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "11006000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Rektální suspenze"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Rectal suspension"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Suspensio rectalis"
        }
      ]
    },
    {
      "code" : "RCT TBL SOL",
      "display" : "Tableta pro rektální roztok",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "RCT TBL SOL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "11011000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Tableta pro rektální roztok"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Tablet for rectal solution"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Tabuletta pro solutione rectali"
        }
      ]
    },
    {
      "code" : "RCT TBL SUS",
      "display" : "Tableta pro rektální suspenzi",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "RCT TBL SUS"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "11012000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Tableta pro rektální suspenzi"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Tablet for rectal suspension"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Tabuletta pro suspensione rectali"
        }
      ]
    },
    {
      "code" : "RCT TLQ SUS",
      "display" : "Tableta a rozpouštědlo pro rektální suspenzi",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "RCT TLQ SUS"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50064000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Tableta a rozpouštědlo pro rektální suspenzi"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Tablet and solvent for rectal suspension"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Tabuletta et liquefactorium pro suspensione rectali"
        }
      ]
    },
    {
      "code" : "RCT TMP",
      "display" : "Rektální tampon",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "RCT TMP"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "11015000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Rektální tampon"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Rectal tampon"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Tamponum rectale"
        }
      ]
    },
    {
      "code" : "RCT UNG",
      "display" : "Rektální mast",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "RCT UNG"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "11003000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Rektální  mast"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Rectal ointment"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Unguentum rectale"
        }
      ]
    },
    {
      "code" : "SAT",
      "display" : "Šampon",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "SAT"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10508000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Šampon"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Shampoo"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Saponatum"
        }
      ]
    },
    {
      "code" : "SIR",
      "display" : "Sirup",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "SIR"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10117000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Sirup"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Syrup"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Sirupus"
        }
      ]
    },
    {
      "code" : "SIR SCC",
      "display" : "Sirup v sáčku",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "SIR SCC"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "13094000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Sirup v sáčku"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Syrup in sachet"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Sirupus in sacullo"
        }
      ]
    },
    {
      "code" : "SLG FLM",
      "display" : "Sublingvální film",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "SLG FLM"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10317500"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Sublingvální film"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Sublingual film"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Lamina sublingualis"
        }
      ]
    },
    {
      "code" : "SLG LYO",
      "display" : "Sublingvální lyofilizát",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "SLG LYO"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "13127000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Sublingvální lyofilizát"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Sublingual lyophilisate"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Lyophilisatum sublingualis"
        }
      ]
    },
    {
      "code" : "SLG PLV",
      "display" : "Sublingvální prášek",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "SLG PLV"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "13105000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Sublingvální prášek"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Sublingual powder"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Pulvis sublingualis"
        }
      ]
    },
    {
      "code" : "SLG SOL",
      "display" : "Sublingvální roztok",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "SLG SOL"
        },
        {
          "code" : "NAZEV",
          "valueString" : "Sublingvální roztok"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Sublingual solution"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Solutio sublinguali"
        }
      ]
    },
    {
      "code" : "SLG SPR EML",
      "display" : "Sublingvální sprej, emulze",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "SLG SPR EML"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10309100"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Sublingvální sprej, emulze"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Sublingual spray, emulsion"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Emulsio pro aerodispersione sublinguali"
        }
      ]
    },
    {
      "code" : "SLG SPR SOL",
      "display" : "Sublingvální sprej, roztok",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "SLG SPR SOL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10309200"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Sublingvální sprej, roztok"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Sublingual spray, solution"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Solutio pro aerodispersione sublinguali"
        }
      ]
    },
    {
      "code" : "SLG SPR SUS",
      "display" : "Sublingvální sprej, suspenze",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "SLG SPR SUS"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10309300"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Sublingvální sprej, suspenze"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Sublingual spray, suspension"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Suspensio pro aerodispersione sublinguali"
        }
      ]
    },
    {
      "code" : "SLG TBL NOB",
      "display" : "Sublingvální tableta",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "SLG TBL NOB"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10318000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Sublingvální tableta"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Sublingual tablet"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Tabuletta sublingualis"
        }
      ]
    },
    {
      "code" : "SOL ACC SNG",
      "display" : "Antikoagulační a konzervační roztok pro krev",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "SOL ACC SNG"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "12102000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Antikoagulační a konzervační roztok pro krev"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Anticoagulant and preservative solution for blood"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Solutio anticoagulans et sanguinem conservans"
        }
      ]
    },
    {
      "code" : "SOL CNS ORG",
      "display" : "Roztok na konzervování orgánů",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "SOL CNS ORG"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "12112000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Roztok na konzervování orgánů"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Solution for organ preservation"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Solutio pro conservatione organorum"
        }
      ]
    },
    {
      "code" : "SOL GKU",
      "display" : "Roztok pro tkáňové lepidlo",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "SOL GKU"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50061500"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Roztok pro tkáňové lepidlo"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Solution for sealant"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Solutio pro glutino telae vivae"
        }
      ]
    },
    {
      "code" : "SOL ION",
      "display" : "Roztok pro iontoforézu",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "SOL ION"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10518000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Roztok pro iontoforézu"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Solution for iontophoresis"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Solutio pro iontoforesi"
        }
      ]
    },
    {
      "code" : "SOL IRR",
      "display" : "Roztok na výplach",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "SOL IRR"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "12113000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Roztok na výplach"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Irrigation solution"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Solutio pro irrigatione"
        }
      ]
    },
    {
      "code" : "SOL IRR SCH",
      "display" : "Roztok na výplach žaludku",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "SOL IRR SCH"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "12114000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Roztok na výplach žaludku"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Stomach irrigation"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Solutio pro irrigatione stomachi"
        }
      ]
    },
    {
      "code" : "SOL MOD SNF",
      "display" : "Roztok pro úpravu krevní frakce",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "SOL MOD SNF"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "12103000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Roztok pro úpravu krevní frakce"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Solution for blood fraction modification"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Solutio pro modificatione fractionis sanguinis"
        }
      ]
    },
    {
      "code" : "SOL NEB",
      "display" : "Roztok k rozprašování",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "SOL NEB"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "11101000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Roztok k rozprašování"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Nebuliser solution"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Solutio ad nebulisationem"
        }
      ]
    },
    {
      "code" : "SOL PRO VLN",
      "display" : "Roztok na ránu s prodlouženým uvolňováním",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "SOL PRO VLN"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "13128000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Roztok na ránu s prodlouženým uvolňováním"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Prolonged-release wound solution"
        }
      ]
    },
    {
      "code" : "SPC",
      "display" : "Léčivý čaj",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "SPC"
        },
        {
          "code" : "JE_KONOPI",
          "valueString" : "A"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10122000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Léčivý čaj"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Herbal tea"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Species"
        }
      ]
    },
    {
      "code" : "SPC SCC",
      "display" : "Léčivý čaj v nálevovém sáčku",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "SPC SCC"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50029700"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Léčivý čaj v nálevovém sáčku"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Herbal tea in bag"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Species in sacculo"
        }
      ]
    },
    {
      "code" : "SPC SOL",
      "display" : "Instantní léčivý čaj",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "SPC SOL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10202000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Instantní léčivý čaj"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Instant herbal tea"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Species solubilis"
        }
      ]
    },
    {
      "code" : "SPO MED",
      "display" : "Léčivá hubka",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "SPO MED"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "12119000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Léčivá hubka"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Medicated sponge"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Spongiola medicinalis"
        }
      ]
    },
    {
      "code" : "SPR CNC EML",
      "display" : "Koncentrát pro sprej, emulze",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "SPR CNC EML"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50013500"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Koncentrát pro sprej, emulze"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Concentrate for spray emulsion"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Concentratum pro aerodispersione in emulsione"
        }
      ]
    },
    {
      "code" : "SPR SLO",
      "display" : "Suspenze a roztok pro sprej",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "SPR SLO"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50062500"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Suspenze a roztok pro sprej"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Suspension and solution for spray"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Suspensio et solutio pro aerodispersione"
        }
      ]
    },
    {
      "code" : "STL VLN",
      "display" : "Tyčinka na ránu",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "STL VLN"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "12104000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Tyčinka na ránu"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Wound stick"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Stylus ad vulnerem"
        }
      ]
    },
    {
      "code" : "STV",
      "display" : "Náhrada živé tkáně",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "STV"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "12118000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Náhrada živé tkáně"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Living tissue equivalent"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Substitutio telae vivae"
        }
      ]
    },
    {
      "code" : "SUG GEL",
      "display" : "Suspenze a gel pro přípravu gelu",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "SUG GEL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "13166000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Suspenze a gel pro přípravu gelu"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Suspension and gel for gel"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Suspensio et gelatum pro gelato"
        }
      ]
    },
    {
      "code" : "SUP",
      "display" : "Čípek",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "SUP"
        },
        {
          "code" : "JE_KONOPI",
          "valueString" : "A"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "11013000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Čípek"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Suppository"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Suppositorium"
        }
      ]
    },
    {
      "code" : "SUS GEL",
      "display" : "Suspenze pro přípravu gelu",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "SUS GEL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "13165000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Suspenze pro přípravu gelu"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Suspension for gel"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Suspensio pro gelato"
        }
      ]
    },
    {
      "code" : "SUS NEB",
      "display" : "Suspenze k rozprašování",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "SUS NEB"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "11102000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Suspenze k rozprašování"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Nebuliser suspension"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Suspensio ad nebulisationem"
        }
      ]
    },
    {
      "code" : "TBL EFF",
      "display" : "Šumivá tableta",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "TBL EFF"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10222000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Šumivá tableta"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Effervescent tablet"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Tabuletta effervescens"
        }
      ]
    },
    {
      "code" : "TBL EFF+TBL FLM",
      "display" : "Šumivá tableta + potahovaná tableta",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "TBL EFF+TBL FLM"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "14007000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Šumivá tableta + potahovaná tableta"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Effervescent tablet + film-coated tablet"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Tabuletta effervescens et tabuletta filmo obducta"
        }
      ]
    },
    {
      "code" : "TBL ENT",
      "display" : "Enterosolventní tableta",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "TBL ENT"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10225000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Enterosolventní tableta"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Gastro-resistant tablet"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Tabuletta enterosolvens"
        }
      ]
    },
    {
      "code" : "TBL ENT+RCT SUS",
      "display" : "Enterosolventní tableta + rektální suspenze",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "TBL ENT+RCT SUS"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "14003000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Enterosolventní tableta + rektální suspenze"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Gastro-resistant tablet + rectal suspension"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Tabuletta enterosolvens et suspensio rectalis"
        }
      ]
    },
    {
      "code" : "TBL FLM",
      "display" : "Potahovaná tableta",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "TBL FLM"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10221000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Potahovaná tableta"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Film-coated tablet"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Tabuletta filmo obducta"
        }
      ]
    },
    {
      "code" : "TBL FLM SCC",
      "display" : "Potahovaná tableta v sáčku",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "TBL FLM SCC"
        },
        {
          "code" : "NAZEV",
          "valueString" : "Potahovaná tableta v sáčku"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Film-coated tablet in sachet"
        }
      ]
    },
    {
      "code" : "TBL FLM+GRA ENT SCC",
      "display" : "Potahovaná tableta a enterosolventní granule v sáčku",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "TBL FLM+GRA ENT SCC"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50023700"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Potahovaná tableta a enterosolventní granule v sáčku"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Film-coated tablet and gastro-resistant granules in sachet"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Tabuletta filmo obducta et granula enterosolventia in sacullo"
        }
      ]
    },
    {
      "code" : "TBL FLM+TBL NOB",
      "display" : "Potahovaná tableta + tableta",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "TBL FLM+TBL NOB"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "14014000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Potahovaná tableta + tableta"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Film-coated tablet + tablet"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Tabuletta filmo obducta et tabuletta"
        }
      ]
    },
    {
      "code" : "TBL FLM+VAG GLB",
      "display" : "Potahovaná tableta + vaginální kulička",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "TBL FLM+VAG GLB"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "14011000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Potahovaná tableta + vaginální kulička"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Film-coated tablet  + pessary"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Tabuletta filmo obducta et globulus vaginalis"
        }
      ]
    },
    {
      "code" : "TBL GGR",
      "display" : "Kloktadlo, tableta pro roztok",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "TBL GGR"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10304000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Kloktadlo, tableta pro roztok"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Gargle, tablet for solution"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Tabuletta pro gargarismate"
        }
      ]
    },
    {
      "code" : "TBL MND",
      "display" : "Žvýkací tableta",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "TBL MND"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10228000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Žvýkací tableta"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Chewable tablet"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Tabuletta manducabilis"
        }
      ]
    },
    {
      "code" : "TBL MND PRO",
      "display" : "Žvýkací tableta s prodlouženým uvolňováním",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "TBL MND PRO"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "13175000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Žvýkací tableta s prodlouženým uvolňováním"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Prolonged-release chewable tablet"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Tabuletta manducabilis cum liberatione prolongata"
        }
      ]
    },
    {
      "code" : "TBL MND/SUS",
      "display" : "Žvýkací/dispergovatelná tableta",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "TBL MND/SUS"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50001000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Žvýkací/dispergovatelná tableta"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Chewable/dispersible tablet"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Tabuletta manducabilis/dispersibilis"
        }
      ]
    },
    {
      "code" : "TBL MRL",
      "display" : "Tableta s řízeným uvolňováním",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "TBL MRL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10227000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Tableta s řízeným uvolňováním"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Modified-release tablet"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Tabuletta cum liberatione modificata"
        }
      ]
    },
    {
      "code" : "TBL NOB",
      "display" : "Tableta",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "TBL NOB"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10219000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Tableta"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Tablet"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Tabuletta"
        }
      ]
    },
    {
      "code" : "TBL NOB+VAG TBL NOB",
      "display" : "Tableta+vaginální tableta",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "TBL NOB+VAG TBL NOB"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "14008000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Tableta+vaginální tableta"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Tablet+vaginal tablet"
        }
      ]
    },
    {
      "code" : "TBL OBD",
      "display" : "Obalená tableta",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "TBL OBD"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10220000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Obalená tableta"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Coated tablet"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Tabuletta obducta"
        }
      ]
    },
    {
      "code" : "TBL PRO",
      "display" : "Tableta s prodlouženým uvolňováním",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "TBL PRO"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10226000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Tableta s prodlouženým uvolňováním"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Prolonged-release tablet"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Tabuletta cum liberatione prolongata"
        }
      ]
    },
    {
      "code" : "TBL SNS",
      "display" : "Tableta se senzorem",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "TBL SNS"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "13118000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Tableta se senzorem"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Tablet with sensor"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Tabuletta cum proprioreceptor"
        }
      ]
    },
    {
      "code" : "TBL SOL",
      "display" : "Rozpustná tableta",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "TBL SOL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10120000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Rozpustná tableta"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Soluble tablet"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Tabuletta pro solutione perorali"
        }
      ]
    },
    {
      "code" : "TBL SUS",
      "display" : "Dispergovatelná tableta",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "TBL SUS"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10121000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Dispergovatelná tableta"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Dispersible tablet"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Tabuletta pro dispersione"
        }
      ]
    },
    {
      "code" : "TBL SUS DSD",
      "display" : "Dispergovatelné tablety pro dávkovací zařízení",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "TBL SUS DSD"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10121500"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Dispergovatelné tablety pro dávkovací zařízení"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Dispersible tablets for dose dispenser"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Tabulettae pro dispersione pro instrumento ad applicationem in dosibus"
        }
      ]
    },
    {
      "code" : "TDR EMP",
      "display" : "Transdermální náplast",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "TDR EMP"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10519000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Transdermální náplast"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Transdermal patch"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Emplastrum transcutaneum"
        }
      ]
    },
    {
      "code" : "TDR GEL",
      "display" : "Transdermální gel",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "TDR GEL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10546250"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Transdermální gel"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Transdermal gel"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Gelatum transcutaneum"
        }
      ]
    },
    {
      "code" : "TDR GEL SCC",
      "display" : "Transdermální gel v sáčku",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "TDR GEL SCC"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "13137000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Transdermální gel v sáčku"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Transdermal gel in sachet"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Gelatum transcutaneum in sacullo"
        }
      ]
    },
    {
      "code" : "TDR SOL",
      "display" : "Transdermální roztok",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "TDR SOL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10546400"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Transdermální roztok"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Transdermal solution"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Solutio transcutanea"
        }
      ]
    },
    {
      "code" : "TDR SPR SOL",
      "display" : "Transdermální sprej, roztok",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "TDR SPR SOL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10546500"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Transdermální sprej, roztok"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Transdermal spray, solution"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Solutio pro aerodispersione transcutanea"
        }
      ]
    },
    {
      "code" : "TDR SYS",
      "display" : "Transdermální systém",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "TDR SYS"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10547000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Transdermální systém"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Transdermal system"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Systema transcutaneum"
        }
      ]
    },
    {
      "code" : "TDR UNG",
      "display" : "Transdermální mast",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "TDR UNG"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "13102000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Transdermální mast"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Transdermal ointment"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Unguentum transcutaneum"
        }
      ]
    },
    {
      "code" : "TMP IPR",
      "display" : "Impregnovaný tampon",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "TMP IPR"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "12117000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Impregnovaný tampon"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Impregnated pad"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Tamponum impregnatum"
        }
      ]
    },
    {
      "code" : "UNG",
      "display" : "Mast",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "UNG"
        },
        {
          "code" : "JE_KONOPI",
          "valueString" : "A"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10504000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Mast"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Ointment"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Unguentum cutaneum"
        }
      ]
    },
    {
      "code" : "UNG+VAG TBL NOB",
      "display" : "Mast + vaginální tableta",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "UNG+VAG TBL NOB"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "14015000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Mast + vaginální tableta"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Ointment + vaginal tablet"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Unguentum et tabuletta vaginalis"
        }
      ]
    },
    {
      "code" : "UNG/INH UNG VAP",
      "display" : "Mast/mast k inhalaci parou",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "UNG/INH UNG VAP"
        },
        {
          "code" : "NAZEV",
          "valueString" : "Mast/mast k inhalaci parou"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Ointment/inhalation vapour, ointment"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Unguentum cutaneum/Unguentum ad inhalationem vapore paratam"
        }
      ]
    },
    {
      "code" : "URT EML",
      "display" : "Uretrální emulze",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "URT EML"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "13077000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Uretrální emulze"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Urethral emulsion"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Emulsio urethralis"
        }
      ]
    },
    {
      "code" : "URT GEL",
      "display" : "Uretrální gel",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "URT GEL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "11504000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Uretrální gel"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Urethral gel"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Gelatum urethrale"
        }
      ]
    },
    {
      "code" : "URT STL",
      "display" : "Uretrální tyčinka",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "URT STL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "11505000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Uretrální tyčinka"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Urethral stick"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Stylus urethralis"
        }
      ]
    },
    {
      "code" : "URT UNG",
      "display" : "Uretrální mast",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "URT UNG"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "13123000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Uretrální mast"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Urethral ointment"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Unguentum urethrale"
        }
      ]
    },
    {
      "code" : "VAG CPS DUR",
      "display" : "Tvrdá vaginální tobolka",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "VAG CPS DUR"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10910000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Tvrdá vaginální tobolka"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Vaginal capsule, hard"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Capsula vaginalis dura"
        }
      ]
    },
    {
      "code" : "VAG CPS MOL",
      "display" : "Měkká vaginální tobolka",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "VAG CPS MOL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10911000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Měkká vaginální tobolka"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Vaginal capsule, soft"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Capsula vaginalis mollis"
        }
      ]
    },
    {
      "code" : "VAG CPS MOL+VAG CRM",
      "display" : "Měkká vaginální tobolka + vaginální krém",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "VAG CPS MOL+VAG CRM"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "14004000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Měkká vaginální tobolka + vaginální krém"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Vaginal capsule, soft + vaginal cream"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Capsula vaginalis mollis et cremor vaginalis"
        }
      ]
    },
    {
      "code" : "VAG CRM",
      "display" : "Vaginální krém",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "VAG CRM"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10901000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Vaginální krém"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Vaginal cream"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Cremor vaginalis"
        }
      ]
    },
    {
      "code" : "VAG CRM+VAG TBL NOB",
      "display" : "Vaginální krém + vaginální tableta",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "VAG CRM+VAG TBL NOB"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "14005000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Vaginální krém + vaginální tableta"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Vaginal cream + vaginal tablet"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Cremor vaginalis et tabuletta vaginali"
        }
      ]
    },
    {
      "code" : "VAG EML",
      "display" : "Vaginální emulze",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "VAG EML"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10907000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Vaginální emulze"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Vaginal emulsion"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Emulsio vaginalis"
        }
      ]
    },
    {
      "code" : "VAG GEL",
      "display" : "Vaginální gel",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "VAG GEL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10902000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Vaginální gel"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Vaginal gel"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Gelatum vaginale"
        }
      ]
    },
    {
      "code" : "VAG GLB",
      "display" : "Vaginální kulička",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "VAG GLB"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10909000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Vaginální kulička"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Pessary"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Globulus vaginalis"
        }
      ]
    },
    {
      "code" : "VAG GLB PRO",
      "display" : "Vaginální kulička s prodlouženým uvolňováním",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "VAG GLB PRO"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "13148000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Vaginální kulička s prodlouženým uvolňováním"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Prolonged-release pessary"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Globulus vaginalis cum liberatione prolongata"
        }
      ]
    },
    {
      "code" : "VAG GRA SOL",
      "display" : "Granule pro vaginální roztok",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "VAG GRA SOL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "50029500"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Granule pro vaginální roztok"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Granules for vaginal solution"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Granula pro solutione vaginali"
        }
      ]
    },
    {
      "code" : "VAG INS",
      "display" : "Vaginální inzert",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "VAG INS"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10915000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Vaginální inzert"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Vaginal delivery system"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Insertum vaginale"
        }
      ]
    },
    {
      "code" : "VAG PLV SOL",
      "display" : "Prášek pro vaginální roztok",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "VAG PLV SOL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "13111000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Prášek pro vaginální roztok"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Powder for vaginal solution"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Pulvis pro solutione vaginali"
        }
      ]
    },
    {
      "code" : "VAG SOL",
      "display" : "Vaginální roztok",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "VAG SOL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10905000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Vaginální roztok"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Vaginal solution"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Solutio vaginalis"
        }
      ]
    },
    {
      "code" : "VAG SPM",
      "display" : "Vaginální pěna",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "VAG SPM"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10904000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Vaginální pěna"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Vaginal foam"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Spuma vaginalis"
        }
      ]
    },
    {
      "code" : "VAG SUP",
      "display" : "Vaginální čípek",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "VAG SUP"
        },
        {
          "code" : "NAZEV",
          "valueString" : "Vaginální čípek"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Vaginal suppository"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Suppositorium vaginale"
        }
      ]
    },
    {
      "code" : "VAG SUS",
      "display" : "Vaginální suspenze",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "VAG SUS"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10906000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Vaginální suspenze"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Vaginal suspension"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Suspensio vaginalis"
        }
      ]
    },
    {
      "code" : "VAG TBL EFF",
      "display" : "Šumivá vaginální tableta",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "VAG TBL EFF"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10913000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Šumivá vaginální tableta"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Effervescent vaginal tablet"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Tabuletta vaginalis effervescens"
        }
      ]
    },
    {
      "code" : "VAG TBL NOB",
      "display" : "Vaginální tableta",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "VAG TBL NOB"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10912000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Vaginální tableta"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Vaginal tablet"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Tabuletta vaginalis"
        }
      ]
    },
    {
      "code" : "VAG TBL SOL",
      "display" : "Tableta pro vaginální roztok",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "VAG TBL SOL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10908000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Tableta pro vaginální roztok"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Tablet for vaginal solution"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Tabuletta pro solutione vaginali"
        }
      ]
    },
    {
      "code" : "VAG TMP MED",
      "display" : "Léčivý vaginální tampon",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "VAG TMP MED"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10914000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Léčivý vaginální tampon"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Medicated vaginal tampon"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Tamponum vaginale medicinale"
        }
      ]
    },
    {
      "code" : "VAG UNG",
      "display" : "Vaginální mast",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "VAG UNG"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "10903000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Vaginální mast"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Vaginal ointment"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Unguentum vaginale"
        }
      ]
    },
    {
      "code" : "VSC IRR PSO",
      "display" : "Prášek pro roztok k výplachu močového měchýře",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "VSC IRR PSO"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "11503000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Prášek pro roztok k výplachu močového měchýře"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Powder for bladder irrigation"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Pulvis pro solutione ad irrigationem vesicae urinariae"
        }
      ]
    },
    {
      "code" : "VSC IRR SOL",
      "display" : "Roztok k výplachu močového měchýře",
      "property" : [
        {
          "code" : "FORMA",
          "valueString" : "VSC IRR SOL"
        },
        {
          "code" : "KOD_EDQM",
          "valueCoding" : {
            "system" : "http://standardterms.edqm.eu",
            "code" : "11502000"
          }
        },
        {
          "code" : "NAZEV",
          "valueString" : "Roztok k výplachu močového měchýře"
        },
        {
          "code" : "NAZEV_EN",
          "valueString" : "Bladder irrigation"
        },
        {
          "code" : "NAZEV_LAT",
          "valueString" : "Solutio pro irrigatione vesicae urinariae"
        }
      ]
    }
  ]
}

```
