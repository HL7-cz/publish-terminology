# Absent a Unknown Data - IPS - HL7 Czech Terminology Implementation Guide v0.2.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Absent a Unknown Data - IPS**

## CodeSystem: Absent a Unknown Data - IPS 

| | |
| :--- | :--- |
| *Official URL*:https://ncez.mzcr.cz/terminology/CodeSystem/absent-unknown-uv-ips-cz | *Version*:0.2.0 |
| Active as of 2025-11-26 | *Computable Name*:AbsentAndUnknownDataUvIps |

 
Kódový systém pro označení nepřítomnosti nebo neznalosti údajů. Doplněk kódového systému hl7-IPS (International patient Summary). 

 This Code system is referenced in the content logical definition of the following value sets: 

* [EHDSIAbsentOrUnknownAllergyCZ](ValueSet-eHDSIAbsentOrUnknownAllergy-cz.md)
* [EHDSIAbsentOrUnknownDeviceCZ](ValueSet-eHDSIAbsentOrUnknownDevice-cz.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "absent-unknown-uv-ips-cz",
  "language" : "cs",
  "url" : "https://ncez.mzcr.cz/terminology/CodeSystem/absent-unknown-uv-ips-cz",
  "version" : "0.2.0",
  "name" : "AbsentAndUnknownDataUvIps",
  "title" : "Absent a Unknown Data - IPS",
  "status" : "active",
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
  "content" : "supplement",
  "supplements" : "http://hl7.org/fhir/uv/ips/CodeSystem/absent-unknown-uv-ips|1.1.0",
  "concept" : [
    {
      "code" : "no-allergy-info",
      "display" : "žádné informace o alergiích",
      "definition" : "Nejsou známy žádné informace o alergiích pacienta."
    },
    {
      "code" : "no-device-info",
      "display" : "žádné informace o používaných zdravotnických prostředcích a implantátech",
      "definition" : "Nejsou k dispozici žádné informace o implantátech nebo externích zdravotnických prostředcích používaných pacientem."
    },
    {
      "code" : "no-immunization-info",
      "display" : "žádné informace o očkování",
      "definition" : "Historie očkování není známa."
    },
    {
      "code" : "no-known-allergies",
      "display" : "žádné známé alergie",
      "definition" : "Nejsou známy žádné alergie pacienta."
    },
    {
      "code" : "no-known-devices",
      "display" : "žádné implantáty ani jiné zdravotnické prostředky",
      "definition" : "Nejsou známy žádné významné implantáty či externí zdravotnické prostředky které pacient používá. To znamená, že pacient žádné zdravotnické prostředky nepoužívá nebo že nejsou pro účel tohoto záznamu relevantní."
    },
    {
      "code" : "no-known-environmental-allergies",
      "display" : "žádné známé alergie na vnější prostředí",
      "definition" : "Pacient nemá žádné známé alergie na vnější prostředí."
    },
    {
      "code" : "no-known-food-allergies",
      "display" : "žádné známé alergie na potraviny",
      "definition" : "Pacient nemá žádné známé alergie na potraviny."
    },
    {
      "code" : "no-known-immunizations",
      "display" : "žádné známé očkování",
      "definition" : "Historie očkování neobsahuje žádné záznamy. To znamená, že pacient buď nebyl v minulosti očkován nebo údaje o provedeném očkování nejsou pro účely tohoto záznamu relevantní."
    },
    {
      "code" : "no-known-medication-allergies",
      "display" : "žádné známé alergie na léky",
      "definition" : "Pacient nemá žádné známé alergie na léky."
    },
    {
      "code" : "no-known-medications",
      "display" : "žádná známá medikace",
      "definition" : "Žádná známá medikace. To znamená, že pacient buď nemá žádnou medikaci, či medikace není pro účely tohoto záznamu relevantní."
    },
    {
      "code" : "no-known-problems",
      "display" : "žádné známé zdravotní problémy",
      "definition" : "Pacient nemá žádné známé zdravotní problémy či onemocnění, která by byla relevantní pro účely tohoto záznamu."
    },
    {
      "code" : "no-known-procedures",
      "display" : "žádné provedené výkony",
      "definition" : "Pacientovy nebyly provedeny žádné zdravotní výkony relevantní pro účely tohoto záznamu."
    },
    {
      "code" : "no-medication-info",
      "display" : "žádné informace o medikaci",
      "definition" : "Nejsou k dispozici žádné informace o medikaci či o podávání léků pacientovi."
    },
    {
      "code" : "no-problem-info",
      "display" : "žádné informace o zdravotních problémech",
      "definition" : "Nejsou k dispozici žádné informace o zdravotních problémech či onemocněních pacienta."
    },
    {
      "code" : "no-procedure-info",
      "display" : "žádné informace o provedených výkonech",
      "definition" : "Nejsou k dispozici žádné informace o provedených výkonech."
    }
  ]
}

```
