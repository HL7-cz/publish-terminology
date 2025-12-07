# Absent a Unknown Data - IPS - HL7 Czech Terminology Implementation Guide v0.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Absent a Unknown Data - IPS**

## CodeSystem: Absent a Unknown Data - IPS 

| | |
| :--- | :--- |
| *Official URL*:https://ncez.mzcr.cz/terminology/CodeSystem/absent-unknown-uv-ips-cz | *Version*:0.1.0 |
| Draft as of 2025-11-26 | *Computable Name*:AbsentAndUnknownDataUvIps |

 
Kódový systém pro označení nepřítomnosti nebo neznalosti údajů. Doplněk kódového systému hl7-IPS (International patient Summary). 

 This Code system is referenced in the content logical definition of the following value sets: 

* This CodeSystem Supplement is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

Language: cs

This code system supplement `https://ncez.mzcr.cz/terminology/CodeSystem/absent-unknown-uv-ips-cz` defines displays on the following codes:

**Additional Language Displays**



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "absent-unknown-uv-ips-cz",
  "language" : "cs",
  "url" : "https://ncez.mzcr.cz/terminology/CodeSystem/absent-unknown-uv-ips-cz",
  "version" : "0.1.0",
  "name" : "AbsentAndUnknownDataUvIps",
  "title" : "Absent a Unknown Data - IPS",
  "status" : "draft",
  "experimental" : false,
  "date" : "2025-11-26T13:38:57.738896Z",
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
  "description" : "Kódový systém pro označení nepřítomnosti nebo neznalosti údajů. Doplněk kódového systému hl7-IPS (International patient Summary).",
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
  "hierarchyMeaning" : "is-a",
  "content" : "supplement",
  "supplements" : "http://hl7.org/fhir/uv/ips/CodeSystem/absent-unknown-uv-ips|1.1.0",
  "concept" : [
    {
      "code" : "no-allergy-info",
      "display" : "žádné informace o alergiích",
      "definition" : "Nejsou známy žádné informace o alergiích pacienta.",
      "designation" : [
        {
          "language" : "en",
          "use" : {
            "code" : "definition"
          },
          "value" : "There is no information available regarding the subject's allergy conditions."
        },
        {
          "language" : "en",
          "use" : {
            "code" : "display"
          },
          "value" : "No information about allergies"
        },
        {
          "language" : "it-IT",
          "use" : {
            "code" : "display"
          },
          "value" : "Nessuna informazione sulle allergie"
        }
      ]
    },
    {
      "code" : "no-device-info",
      "display" : "žádné informace o používaných zdravotnických prostředcích a implantátech",
      "definition" : "Nejsou k dispozici žádné informace o implantátech nebo externích zdravotnických prostředcích používaných pacientem.",
      "designation" : [
        {
          "language" : "en",
          "use" : {
            "code" : "definition"
          },
          "value" : "There is no information available regarding implanted or external devices for the subject."
        },
        {
          "language" : "en",
          "use" : {
            "code" : "display"
          },
          "value" : "No information about devices"
        },
        {
          "language" : "it-IT",
          "use" : {
            "code" : "display"
          },
          "value" : "Nessuna informazione sui dispositivi medici"
        }
      ]
    },
    {
      "code" : "no-immunization-info",
      "display" : "žádné informace o očkování",
      "definition" : "Historie očkování není známa.",
      "designation" : [
        {
          "language" : "en",
          "use" : {
            "code" : "definition"
          },
          "value" : "The subject's history of previous immunizations is not known."
        },
        {
          "language" : "en",
          "use" : {
            "code" : "display"
          },
          "value" : "No information about immunizations"
        },
        {
          "language" : "it-IT",
          "use" : {
            "code" : "display"
          },
          "value" : "Nessuna informazione sulle vaccinazioni"
        }
      ]
    },
    {
      "code" : "no-known-allergies",
      "display" : "žádné známé alergie",
      "definition" : "Nejsou známy žádné alergie pacienta.",
      "designation" : [
        {
          "language" : "en",
          "use" : {
            "code" : "definition"
          },
          "value" : "The subject has no known allergy conditions."
        },
        {
          "language" : "en",
          "use" : {
            "code" : "display"
          },
          "value" : "No known allergies"
        },
        {
          "language" : "it-IT",
          "use" : {
            "code" : "display"
          },
          "value" : "Nessuna allergia nota"
        }
      ]
    },
    {
      "code" : "no-known-devices",
      "display" : "žádné implantáty ani jiné zdravotnické prostředky",
      "definition" : "Nejsou známy žádné významné implantáty či externí zdravotnické prostředky které pacient používá. To znamená, že pacient žádné zdravotnické prostředky nepoužívá nebo že nejsou pro účel tohoto záznamu relevantní.",
      "designation" : [
        {
          "language" : "en",
          "use" : {
            "code" : "definition"
          },
          "value" : "There are no devices known to be implanted in or used by the subject that have to be reported in this record. This can mean either that there are none known, or that those known are not relevant for the purpose of this record."
        },
        {
          "language" : "en",
          "use" : {
            "code" : "display"
          },
          "value" : "No known devices in use"
        },
        {
          "language" : "it-IT",
          "use" : {
            "code" : "display"
          },
          "value" : "Non sono noti dispositivi medici in uso"
        }
      ]
    },
    {
      "code" : "no-known-immunizations",
      "display" : "žádné známé očkování",
      "definition" : "Historie očkování neobsahuje žádné záznamy. To znamená, že pacient buď nebyl v minulosti očkován nebo údaje o provedeném očkování nejsou pro účely tohoto záznamu relevantní.",
      "designation" : [
        {
          "language" : "en",
          "use" : {
            "code" : "definition"
          },
          "value" : "There is no history of previous immunizations for the subject that have to be reported in this record. This can mean either that there are none known, or that those known are not relevant for the purpose of this record."
        },
        {
          "language" : "en",
          "use" : {
            "code" : "display"
          },
          "value" : "No known immunizations"
        },
        {
          "language" : "it-IT",
          "use" : {
            "code" : "display"
          },
          "value" : "Nessuna vaccinazione nota"
        }
      ]
    },
    {
      "code" : "no-known-medications",
      "display" : "žádná známá medikace",
      "definition" : "Žádná známá medikace. To znamená, že pacient buď nemá žádnou medikaci, či medikace není pro účely tohoto záznamu relevantní.",
      "designation" : [
        {
          "language" : "en",
          "use" : {
            "code" : "definition"
          },
          "value" : "There are no medications for the subject that have to be reported in this record. This can mean either that there are none known, or that those known are not relevant for the purpose of this record."
        },
        {
          "language" : "en",
          "use" : {
            "code" : "display"
          },
          "value" : "No known medications"
        },
        {
          "language" : "it-IT",
          "use" : {
            "code" : "display"
          },
          "value" : "Nessuna terapia farmacologica nota"
        }
      ]
    },
    {
      "code" : "no-known-problems",
      "display" : "žádné známé zdravotní problémy",
      "definition" : "Pacient nemá žádné známé zdravotní problémy či onemocnění, která by byla relevantní pro účely tohoto záznamu.",
      "designation" : [
        {
          "language" : "en",
          "use" : {
            "code" : "definition"
          },
          "value" : "The subject is not known to have any health problems or disabilities that have to be reported in this record. This can mean either that there are none known, or that those known are not relevant for the purpose of this record."
        },
        {
          "language" : "en",
          "use" : {
            "code" : "display"
          },
          "value" : "No known problems"
        },
        {
          "language" : "it-IT",
          "use" : {
            "code" : "display"
          },
          "value" : "Nessun problema o disabilità rilevante nota"
        }
      ]
    },
    {
      "code" : "no-known-procedures",
      "display" : "žádné provedené výkony",
      "definition" : "Pacientovy nebyly provedeny žádné zdravotní výkony relevantní pro účely tohoto záznamu.",
      "designation" : [
        {
          "language" : "en",
          "use" : {
            "code" : "definition"
          },
          "value" : "The subject has no history of procedures that have to be reported in this record. This can mean either that there are none known, or that those known are not relevant for the purpose of this record."
        },
        {
          "language" : "en",
          "use" : {
            "code" : "display"
          },
          "value" : "No known procedures"
        },
        {
          "language" : "it-IT",
          "use" : {
            "code" : "display"
          },
          "value" : "Nessuna procedure pregressa rilevante nota"
        }
      ]
    },
    {
      "code" : "no-medication-info",
      "display" : "žádné informace o medikaci",
      "definition" : "Nejsou k dispozici žádné informace o medikaci či o podávání léků pacientovi.",
      "designation" : [
        {
          "language" : "en",
          "use" : {
            "code" : "definition"
          },
          "value" : "There is no information available about the subject's medication use or administration."
        },
        {
          "language" : "en",
          "use" : {
            "code" : "display"
          },
          "value" : "No information about medications"
        },
        {
          "language" : "it-IT",
          "use" : {
            "code" : "display"
          },
          "value" : "Nessuna informazione disponibile su terapie farmacologiche"
        }
      ]
    },
    {
      "code" : "no-problem-info",
      "display" : "žádné informace o zdravotních problémech",
      "definition" : "Nejsou k dispozici žádné informace o zdravotních problémech či onemocněních pacienta.",
      "designation" : [
        {
          "language" : "en",
          "use" : {
            "code" : "definition"
          },
          "value" : "There is no information available about the subject's health problems or disabilities."
        },
        {
          "language" : "en",
          "use" : {
            "code" : "display"
          },
          "value" : "No information about problems"
        },
        {
          "language" : "it-IT",
          "use" : {
            "code" : "display"
          },
          "value" : "Nessuna informazione disponibile su problemi o disabilità"
        }
      ]
    },
    {
      "code" : "no-procedure-info",
      "display" : "žádné informace o provedených výkonech",
      "definition" : "Nejsou k dispozici žádné informace o provedených výkonech.",
      "designation" : [
        {
          "language" : "en",
          "use" : {
            "code" : "definition"
          },
          "value" : "There is no information available about the subject's past history of procedures."
        },
        {
          "language" : "en",
          "use" : {
            "code" : "display"
          },
          "value" : "No information about past history of procedures"
        },
        {
          "language" : "it-IT",
          "use" : {
            "code" : "display"
          },
          "value" : "Nessuna informazione disponibile su procedure pregresse"
        }
      ]
    }
  ]
}

```
