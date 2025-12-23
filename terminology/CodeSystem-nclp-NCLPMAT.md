# NCLPMAT - HL7 Czech Terminology Implementation Guide v0.2.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **NCLPMAT**

## CodeSystem: NCLPMAT 

| | |
| :--- | :--- |
| *Official URL*:https://ncez.mzcr.cz/nclp/CodeSystem/nclpmat | *Version*:0.2.0 |
| Active as of 2025-01-17 | *Computable Name*:NCLPMAT |

 
NCLP - Číselník materiálů pro laboratoře. 

 This Code system is referenced in the content logical definition of the following value sets: 

* [NCLPMatVs](ValueSet-nclpmat.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "nclp-NCLPMAT",
  "language" : "cs",
  "url" : "https://ncez.mzcr.cz/nclp/CodeSystem/nclpmat",
  "version" : "0.2.0",
  "name" : "NCLPMAT",
  "title" : "NCLPMAT",
  "status" : "active",
  "experimental" : false,
  "date" : "2025-01-17",
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
  "description" : "NCLP - Číselník materiálů pro laboratoře.",
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
  "count" : 151,
  "property" : [
    {
      "code" : "klic",
      "type" : "string"
    },
    {
      "code" : "kod",
      "type" : "string"
    },
    {
      "code" : "kodl",
      "type" : "string"
    },
    {
      "code" : "n24",
      "type" : "string"
    },
    {
      "code" : "n32",
      "type" : "string"
    },
    {
      "code" : "n32l",
      "type" : "string"
    },
    {
      "code" : "n55",
      "type" : "string"
    },
    {
      "code" : "n55l",
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
      "code" : "poradi",
      "type" : "string"
    }
  ],
  "concept" : [
    {
      "code" : "ADRC",
      "display" : "Kůra nadledvin",
      "property" : [
        {
          "code" : "klic",
          "valueString" : "ADRC"
        },
        {
          "code" : "kod",
          "valueString" : "ADRC"
        },
        {
          "code" : "kodl",
          "valueString" : "ADRC"
        },
        {
          "code" : "n24",
          "valueString" : "Kůra nadledvin"
        },
        {
          "code" : "n32",
          "valueString" : "Kůra nadledvin"
        },
        {
          "code" : "n32l",
          "valueString" : "Kůra nadledvin"
        },
        {
          "code" : "n55",
          "valueString" : "Kůra nadledvin"
        },
        {
          "code" : "n55l",
          "valueString" : "Kůra nadledvin"
        },
        {
          "code" : "plati_od",
          "valueDateTime" : "2000-01-01T00:00:00Z"
        },
        {
          "code" : "poradi",
          "valueString" : "159000"
        }
      ]
    },
    {
      "code" : "AIR",
      "display" : "Vzduch",
      "property" : [
        {
          "code" : "klic",
          "valueString" : "AIR"
        },
        {
          "code" : "kod",
          "valueString" : "AIR"
        },
        {
          "code" : "kodl",
          "valueString" : "AIR"
        },
        {
          "code" : "n24",
          "valueString" : "Vzduch"
        },
        {
          "code" : "n32",
          "valueString" : "Vzduch"
        },
        {
          "code" : "n32l",
          "valueString" : "Vzduch"
        },
        {
          "code" : "n55",
          "valueString" : "Vzduch"
        },
        {
          "code" : "n55l",
          "valueString" : "Vzduch"
        },
        {
          "code" : "plati_od",
          "valueDateTime" : "2000-01-01T00:00:00Z"
        },
        {
          "code" : "poradi",
          "valueString" : "125000"
        }
      ]
    },
    {
      "code" : "AIREXP",
      "display" : "Vzduch (vydechovaný)",
      "property" : [
        {
          "code" : "klic",
          "valueString" : "AIREXP"
        },
        {
          "code" : "kod",
          "valueString" : "AIREXP"
        },
        {
          "code" : "kodl",
          "valueString" : "AIREXP"
        },
        {
          "code" : "n24",
          "valueString" : "Vzduch(expir.)"
        },
        {
          "code" : "n32",
          "valueString" : "Vzduch(expir.)"
        },
        {
          "code" : "n32l",
          "valueString" : "Vzduch(expir.)"
        },
        {
          "code" : "n55",
          "valueString" : "Vzduch (vydechovaný)"
        },
        {
          "code" : "n55l",
          "valueString" : "Vzduch (vydechovaný)"
        },
        {
          "code" : "plati_od",
          "valueDateTime" : "2000-01-01T00:00:00Z"
        },
        {
          "code" : "poradi",
          "valueString" : "126000"
        }
      ]
    },
    {
      "code" : "AIRINSP",
      "display" : "Vzduch (vdechovaný)",
      "property" : [
        {
          "code" : "klic",
          "valueString" : "AIRINSP"
        },
        {
          "code" : "kod",
          "valueString" : "AIRINSP"
        },
        {
          "code" : "kodl",
          "valueString" : "AIRINSP"
        },
        {
          "code" : "n24",
          "valueString" : "Vzduch(inspir.)"
        },
        {
          "code" : "n32",
          "valueString" : "Vzduch(inspir.)"
        },
        {
          "code" : "n32l",
          "valueString" : "Vzduch(inspir.)"
        },
        {
          "code" : "n55",
          "valueString" : "Vzduch (vdechovaný)"
        },
        {
          "code" : "n55l",
          "valueString" : "Vzduch (vdechovaný)"
        },
        {
          "code" : "plati_od",
          "valueDateTime" : "2000-01-01T00:00:00Z"
        },
        {
          "code" : "poradi",
          "valueString" : "127000"
        }
      ]
    },
    {
      "code" : "AIRRESPS",
      "display" : "Vzduch (respirační systém)",
      "property" : [
        {
          "code" : "klic",
          "valueString" : "AIRRESPS"
        },
        {
          "code" : "kod",
          "valueString" : "AIRRESPS"
        },
        {
          "code" : "kodl",
          "valueString" : "AIRRESPS"
        },
        {
          "code" : "n24",
          "valueString" : "Vzduch(resp. syst.)"
        },
        {
          "code" : "n32",
          "valueString" : "Vzduch(resp. systém)"
        },
        {
          "code" : "n32l",
          "valueString" : "Vzduch(resp. systém)"
        },
        {
          "code" : "n55",
          "valueString" : "Vzduch (respirační systém)"
        },
        {
          "code" : "n55l",
          "valueString" : "Vzduch (respirační systém)"
        },
        {
          "code" : "plati_od",
          "valueDateTime" : "2000-01-01T00:00:00Z"
        },
        {
          "code" : "poradi",
          "valueString" : "128000"
        }
      ]
    },
    {
      "code" : "ALV",
      "display" : "Alveol",
      "property" : [
        {
          "code" : "klic",
          "valueString" : "ALV"
        },
        {
          "code" : "kod",
          "valueString" : "ALV"
        },
        {
          "code" : "kodl",
          "valueString" : "ALV"
        },
        {
          "code" : "n24",
          "valueString" : "Alveol"
        },
        {
          "code" : "n32",
          "valueString" : "Alveol"
        },
        {
          "code" : "n32l",
          "valueString" : "Alveol"
        },
        {
          "code" : "n55",
          "valueString" : "Alveol"
        },
        {
          "code" : "n55l",
          "valueString" : "Alveol"
        },
        {
          "code" : "plati_od",
          "valueDateTime" : "2000-01-01T00:00:00Z"
        },
        {
          "code" : "poradi",
          "valueString" : "129000"
        }
      ]
    },
    {
      "code" : "AMF",
      "display" : "Amniová tekutina",
      "property" : [
        {
          "code" : "klic",
          "valueString" : "AMF"
        },
        {
          "code" : "kod",
          "valueString" : "AMF"
        },
        {
          "code" : "kodl",
          "valueString" : "AMF"
        },
        {
          "code" : "n24",
          "valueString" : "Amniová tekutina"
        },
        {
          "code" : "n32",
          "valueString" : "Amniová tekutina"
        },
        {
          "code" : "n32l",
          "valueString" : "Amniová tekutina"
        },
        {
          "code" : "n55",
          "valueString" : "Amniová tekutina"
        },
        {
          "code" : "n55l",
          "valueString" : "Amniová tekutina"
        },
        {
          "code" : "plati_od",
          "valueDateTime" : "2000-01-01T00:00:00Z"
        },
        {
          "code" : "poradi",
          "valueString" : "110000"
        }
      ]
    },
    {
      "code" : "B",
      "display" : "Krev",
      "property" : [
        {
          "code" : "klic",
          "valueString" : "B"
        },
        {
          "code" : "kod",
          "valueString" : "B"
        },
        {
          "code" : "kodl",
          "valueString" : "B"
        },
        {
          "code" : "n24",
          "valueString" : "B"
        },
        {
          "code" : "n32",
          "valueString" : "B"
        },
        {
          "code" : "n32l",
          "valueString" : "B"
        },
        {
          "code" : "n55",
          "valueString" : "Krev"
        },
        {
          "code" : "n55l",
          "valueString" : "Krev"
        },
        {
          "code" : "plati_od",
          "valueDateTime" : "2000-01-01T00:00:00Z"
        },
        {
          "code" : "poradi",
          "valueString" : "010100"
        }
      ]
    },
    {
      "code" : "B(A)",
      "display" : "Krev arteriální",
      "property" : [
        {
          "code" : "klic",
          "valueString" : "B(A)"
        },
        {
          "code" : "kod",
          "valueString" : "B(A)"
        },
        {
          "code" : "kodl",
          "valueString" : "B(A)"
        },
        {
          "code" : "n24",
          "valueString" : "B(a)"
        },
        {
          "code" : "n32",
          "valueString" : "B(a)"
        },
        {
          "code" : "n32l",
          "valueString" : "B(a)"
        },
        {
          "code" : "n55",
          "valueString" : "Krev arteriální"
        },
        {
          "code" : "n55l",
          "valueString" : "Krev arteriální"
        },
        {
          "code" : "plati_od",
          "valueDateTime" : "2000-01-01T00:00:00Z"
        },
        {
          "code" : "poradi",
          "valueString" : "010101"
        }
      ]
    },
    {
      "code" : "B(A;UMB)",
      "display" : "Krev pupečníková arteriální",
      "property" : [
        {
          "code" : "klic",
          "valueString" : "B(A;UMB)"
        },
        {
          "code" : "kod",
          "valueString" : "B(A;UMB)"
        },
        {
          "code" : "kodl",
          "valueString" : "B(A;UMB)"
        },
        {
          "code" : "n24",
          "valueString" : "B(a;pupečník)"
        },
        {
          "code" : "n32",
          "valueString" : "B(a;pupečník)"
        },
        {
          "code" : "n32l",
          "valueString" : "B(a;pupečník)"
        },
        {
          "code" : "n55",
          "valueString" : "Krev pupečníková arteriální"
        },
        {
          "code" : "n55l",
          "valueString" : "Krev pupečníková arteriální"
        },
        {
          "code" : "plati_od",
          "valueDateTime" : "2000-01-01T00:00:00Z"
        },
        {
          "code" : "poradi",
          "valueString" : "010711"
        }
      ]
    },
    {
      "code" : "B(C)",
      "display" : "Krev kapilární",
      "property" : [
        {
          "code" : "klic",
          "valueString" : "B(C)"
        },
        {
          "code" : "kod",
          "valueString" : "B(C)"
        },
        {
          "code" : "kodl",
          "valueString" : "B(C)"
        },
        {
          "code" : "n24",
          "valueString" : "B(kap.)"
        },
        {
          "code" : "n32",
          "valueString" : "B(kap.)"
        },
        {
          "code" : "n32l",
          "valueString" : "B(kap.)"
        },
        {
          "code" : "n55",
          "valueString" : "Krev kapilární"
        },
        {
          "code" : "n55l",
          "valueString" : "Krev kapilární"
        },
        {
          "code" : "plati_od",
          "valueDateTime" : "2000-01-01T00:00:00Z"
        },
        {
          "code" : "poradi",
          "valueString" : "010201"
        }
      ]
    },
    {
      "code" : "B(C;EAL)",
      "display" : "Krev kapilární (odběr z ušního lalůčku)",
      "property" : [
        {
          "code" : "klic",
          "valueString" : "B(C;EAL)"
        },
        {
          "code" : "kod",
          "valueString" : "B(C;EAL)"
        },
        {
          "code" : "kodl",
          "valueString" : "B(C;EAL)"
        },
        {
          "code" : "n24",
          "valueString" : "B(kap.;ucho)"
        },
        {
          "code" : "n32",
          "valueString" : "B(kap.;ušní lalůček)"
        },
        {
          "code" : "n32l",
          "valueString" : "B(kap.;ušní lalůček)"
        },
        {
          "code" : "n55",
          "valueString" : "Krev kapilární (odběr z ušního lalůčku)"
        },
        {
          "code" : "n55l",
          "valueString" : "Krev kapilární (odběr z ušního lalůčku)"
        },
        {
          "code" : "plati_od",
          "valueDateTime" : "2000-01-01T00:00:00Z"
        },
        {
          "code" : "poradi",
          "valueString" : "010211"
        }
      ]
    },
    {
      "code" : "B(C;FNG)",
      "display" : "Krev kapilární (odběr z prstu)",
      "property" : [
        {
          "code" : "klic",
          "valueString" : "B(C;FNG)"
        },
        {
          "code" : "kod",
          "valueString" : "B(C;FNG)"
        },
        {
          "code" : "kodl",
          "valueString" : "B(C;FNG)"
        },
        {
          "code" : "n24",
          "valueString" : "B(kap.;prst)"
        },
        {
          "code" : "n32",
          "valueString" : "B(kap.;prst)"
        },
        {
          "code" : "n32l",
          "valueString" : "B(kap.;prst)"
        },
        {
          "code" : "n55",
          "valueString" : "Krev kapilární (odběr z prstu)"
        },
        {
          "code" : "n55l",
          "valueString" : "Krev kapilární (odběr z prstu)"
        },
        {
          "code" : "plati_od",
          "valueDateTime" : "2000-01-01T00:00:00Z"
        },
        {
          "code" : "poradi",
          "valueString" : "010221"
        }
      ]
    },
    {
      "code" : "B(CIT)",
      "display" : "Krev (Citrát)",
      "property" : [
        {
          "code" : "klic",
          "valueString" : "B(CIT)"
        },
        {
          "code" : "kod",
          "valueString" : "B(CIT)"
        },
        {
          "code" : "kodl",
          "valueString" : "B(CIT)"
        },
        {
          "code" : "n24",
          "valueString" : "B(CIT)"
        },
        {
          "code" : "n32",
          "valueString" : "B(CIT)"
        },
        {
          "code" : "n32l",
          "valueString" : "B(CIT)"
        },
        {
          "code" : "n55",
          "valueString" : "Krev (Citrát)"
        },
        {
          "code" : "n55l",
          "valueString" : "Krev (Citrát)"
        },
        {
          "code" : "plati_od",
          "valueDateTime" : "2022-12-11T00:00:00Z"
        },
        {
          "code" : "poradi",
          "valueString" : "010941"
        }
      ]
    },
    {
      "code" : "B(N)",
      "display" : "Krev nativní",
      "property" : [
        {
          "code" : "klic",
          "valueString" : "B(N)"
        },
        {
          "code" : "kod",
          "valueString" : "B(N)"
        },
        {
          "code" : "kodl",
          "valueString" : "B(N)"
        },
        {
          "code" : "n24",
          "valueString" : "B(nativní)"
        },
        {
          "code" : "n32",
          "valueString" : "B(nativní)"
        },
        {
          "code" : "n32l",
          "valueString" : "B(nativní)"
        },
        {
          "code" : "n55",
          "valueString" : "Krev nativní"
        },
        {
          "code" : "n55l",
          "valueString" : "Krev nativní"
        },
        {
          "code" : "plati_od",
          "valueDateTime" : "2000-01-01T00:00:00Z"
        },
        {
          "code" : "poradi",
          "valueString" : "010901"
        }
      ]
    },
    {
      "code" : "B(T)",
      "display" : "Krev (TromboExact)",
      "property" : [
        {
          "code" : "klic",
          "valueString" : "B(T)"
        },
        {
          "code" : "kod",
          "valueString" : "B(T)"
        },
        {
          "code" : "kodl",
          "valueString" : "B(T)"
        },
        {
          "code" : "n24",
          "valueString" : "B(T)"
        },
        {
          "code" : "n32",
          "valueString" : "B(T)"
        },
        {
          "code" : "n32l",
          "valueString" : "B(T)"
        },
        {
          "code" : "n55",
          "valueString" : "Krev (TromboExact)"
        },
        {
          "code" : "n55l",
          "valueString" : "Krev (TromboExact)"
        },
        {
          "code" : "plati_od",
          "valueDateTime" : "2000-01-01T00:00:00Z"
        },
        {
          "code" : "poradi",
          "valueString" : "010931"
        }
      ]
    },
    {
      "code" : "B(UMB)",
      "display" : "Krev pupečníková",
      "property" : [
        {
          "code" : "klic",
          "valueString" : "B(UMB)"
        },
        {
          "code" : "kod",
          "valueString" : "B(UMB)"
        },
        {
          "code" : "kodl",
          "valueString" : "B(UMB)"
        },
        {
          "code" : "n24",
          "valueString" : "B(pupečník)"
        },
        {
          "code" : "n32",
          "valueString" : "B(pupečník)"
        },
        {
          "code" : "n32l",
          "valueString" : "B(pupečník)"
        },
        {
          "code" : "n55",
          "valueString" : "Krev pupečníková"
        },
        {
          "code" : "n55l",
          "valueString" : "Krev pupečníková"
        },
        {
          "code" : "plati_od",
          "valueDateTime" : "2000-01-01T00:00:00Z"
        },
        {
          "code" : "poradi",
          "valueString" : "010701"
        }
      ]
    },
    {
      "code" : "B(V)",
      "display" : "Krev venózní",
      "property" : [
        {
          "code" : "klic",
          "valueString" : "B(V)"
        },
        {
          "code" : "kod",
          "valueString" : "B(V)"
        },
        {
          "code" : "kodl",
          "valueString" : "B(V)"
        },
        {
          "code" : "n24",
          "valueString" : "B(v)"
        },
        {
          "code" : "n32",
          "valueString" : "B(v)"
        },
        {
          "code" : "n32l",
          "valueString" : "B(v)"
        },
        {
          "code" : "n55",
          "valueString" : "Krev venózní"
        },
        {
          "code" : "n55l",
          "valueString" : "Krev venózní"
        },
        {
          "code" : "plati_od",
          "valueDateTime" : "2000-01-01T00:00:00Z"
        },
        {
          "code" : "poradi",
          "valueString" : "010301"
        }
      ]
    },
    {
      "code" : "B(V;CNT)",
      "display" : "Krev venózní (centrální)",
      "property" : [
        {
          "code" : "klic",
          "valueString" : "B(V;CNT)"
        },
        {
          "code" : "kod",
          "valueString" : "B(V;CNT)"
        },
        {
          "code" : "kodl",
          "valueString" : "B(V;CNT)"
        },
        {
          "code" : "n24",
          "valueString" : "B(v;cent.)"
        },
        {
          "code" : "n32",
          "valueString" : "B(v;centrální)"
        },
        {
          "code" : "n32l",
          "valueString" : "B(v;centrální)"
        },
        {
          "code" : "n55",
          "valueString" : "Krev venózní (centrální)"
        },
        {
          "code" : "n55l",
          "valueString" : "Krev venózní (centrální)"
        },
        {
          "code" : "plati_od",
          "valueDateTime" : "2000-01-01T00:00:00Z"
        },
        {
          "code" : "poradi",
          "valueString" : "010311"
        }
      ]
    },
    {
      "code" : "B(V;MXD)",
      "display" : "Krev venózní (smíšená)",
      "property" : [
        {
          "code" : "klic",
          "valueString" : "B(V;MXD)"
        },
        {
          "code" : "kod",
          "valueString" : "B(V;MXD)"
        },
        {
          "code" : "kodl",
          "valueString" : "B(V;MXD)"
        },
        {
          "code" : "n24",
          "valueString" : "B(v;smíš.)"
        },
        {
          "code" : "n32",
          "valueString" : "B(v;smíšená)"
        },
        {
          "code" : "n32l",
          "valueString" : "B(v;smíšená)"
        },
        {
          "code" : "n55",
          "valueString" : "Krev venózní (smíšená)"
        },
        {
          "code" : "n55l",
          "valueString" : "Krev venózní (smíšená)"
        },
        {
          "code" : "plati_od",
          "valueDateTime" : "2000-01-01T00:00:00Z"
        },
        {
          "code" : "poradi",
          "valueString" : "010321"
        }
      ]
    },
    {
      "code" : "B(V;UMB)",
      "display" : "Krev pupečníková žilní",
      "property" : [
        {
          "code" : "klic",
          "valueString" : "B(V;UMB)"
        },
        {
          "code" : "kod",
          "valueString" : "B(V;UMB)"
        },
        {
          "code" : "kodl",
          "valueString" : "B(V;UMB)"
        },
        {
          "code" : "n24",
          "valueString" : "B(v;pupečník)"
        },
        {
          "code" : "n32",
          "valueString" : "B(v;pupečník)"
        },
        {
          "code" : "n32l",
          "valueString" : "B(v;pupečník)"
        },
        {
          "code" : "n55",
          "valueString" : "Krev pupečníková žilní"
        },
        {
          "code" : "n55l",
          "valueString" : "Krev pupečníková žilní"
        },
        {
          "code" : "plati_od",
          "valueDateTime" : "2000-01-01T00:00:00Z"
        },
        {
          "code" : "poradi",
          "valueString" : "010731"
        }
      ]
    },
    {
      "code" : "BAFTOX",
      "display" : "Krev (za oxygenátorem)",
      "property" : [
        {
          "code" : "klic",
          "valueString" : "BAFTOX"
        },
        {
          "code" : "kod",
          "valueString" : "BAFTOX"
        },
        {
          "code" : "kodl",
          "valueString" : "BAFTOX"
        },
        {
          "code" : "n24",
          "valueString" : "Krev (za oxygenátorem)"
        },
        {
          "code" : "n32",
          "valueString" : "Krev (za oxygenátorem)"
        },
        {
          "code" : "n32l",
          "valueString" : "Krev (za oxygenátorem)"
        },
        {
          "code" : "n55",
          "valueString" : "Krev (za oxygenátorem)"
        },
        {
          "code" : "n55l",
          "valueString" : "Krev (za oxygenátorem)"
        },
        {
          "code" : "plati_od",
          "valueDateTime" : "2000-01-01T00:00:00Z"
        },
        {
          "code" : "poradi",
          "valueString" : "010975"
        }
      ]
    },
    {
      "code" : "BASO",
      "display" : "Basofily",
      "property" : [
        {
          "code" : "klic",
          "valueString" : "BASO"
        },
        {
          "code" : "kod",
          "valueString" : "BASO"
        },
        {
          "code" : "kodl",
          "valueString" : "BASO"
        },
        {
          "code" : "n24",
          "valueString" : "Basofily"
        },
        {
          "code" : "n32",
          "valueString" : "Basofily"
        },
        {
          "code" : "n32l",
          "valueString" : "Basofily"
        },
        {
          "code" : "n55",
          "valueString" : "Basofily"
        },
        {
          "code" : "n55l",
          "valueString" : "Basofily"
        },
        {
          "code" : "plati_od",
          "valueDateTime" : "2000-01-01T00:00:00Z"
        },
        {
          "code" : "poradi",
          "valueString" : "072000"
        }
      ]
    },
    {
      "code" : "BBEFOX",
      "display" : "Krev (před oxygenátorem)",
      "property" : [
        {
          "code" : "klic",
          "valueString" : "BBEFOX"
        },
        {
          "code" : "kod",
          "valueString" : "BBEFOX"
        },
        {
          "code" : "kodl",
          "valueString" : "BBEFOX"
        },
        {
          "code" : "n24",
          "valueString" : "Krev (před oxygenátorem)"
        },
        {
          "code" : "n32",
          "valueString" : "Krev (před oxygenátorem)"
        },
        {
          "code" : "n32l",
          "valueString" : "Krev (před oxygenátorem)"
        },
        {
          "code" : "n55",
          "valueString" : "Krev (před oxygenátorem)"
        },
        {
          "code" : "n55l",
          "valueString" : "Krev (před oxygenátorem)"
        },
        {
          "code" : "plati_od",
          "valueDateTime" : "2000-01-01T00:00:00Z"
        },
        {
          "code" : "poradi",
          "valueString" : "010971"
        }
      ]
    },
    {
      "code" : "BEARD",
      "display" : "Vous",
      "property" : [
        {
          "code" : "klic",
          "valueString" : "BEARD"
        },
        {
          "code" : "kod",
          "valueString" : "BEARD"
        },
        {
          "code" : "kodl",
          "valueString" : "BEARD"
        },
        {
          "code" : "n24",
          "valueString" : "Vous"
        },
        {
          "code" : "n32",
          "valueString" : "Vous"
        },
        {
          "code" : "n32l",
          "valueString" : "Vous"
        },
        {
          "code" : "n55",
          "valueString" : "Vous"
        },
        {
          "code" : "n55l",
          "valueString" : "Vous"
        },
        {
          "code" : "plati_od",
          "valueDateTime" : "2000-01-01T00:00:00Z"
        },
        {
          "code" : "poradi",
          "valueString" : "184100"
        }
      ]
    },
    {
      "code" : "BIOP",
      "display" : "Tkáň získaná biopsií (obecně)",
      "property" : [
        {
          "code" : "klic",
          "valueString" : "BIOP"
        },
        {
          "code" : "kod",
          "valueString" : "BIOP"
        },
        {
          "code" : "kodl",
          "valueString" : "BIOP"
        },
        {
          "code" : "n24",
          "valueString" : "Tkáň(biopsie)"
        },
        {
          "code" : "n32",
          "valueString" : "Tkáň(biopsie)"
        },
        {
          "code" : "n32l",
          "valueString" : "Tkáň(biopsie)"
        },
        {
          "code" : "n55",
          "valueString" : "Tkáň získaná biopsií (obecně)"
        },
        {
          "code" : "n55l",
          "valueString" : "Tkáň získaná biopsií (obecně)"
        },
        {
          "code" : "plati_od",
          "valueDateTime" : "2000-01-01T00:00:00Z"
        },
        {
          "code" : "poradi",
          "valueString" : "130000"
        }
      ]
    },
    {
      "code" : "BM",
      "display" : "Kostní dřeň",
      "property" : [
        {
          "code" : "klic",
          "valueString" : "BM"
        },
        {
          "code" : "kod",
          "valueString" : "BM"
        },
        {
          "code" : "kodl",
          "valueString" : "BM"
        },
        {
          "code" : "n24",
          "valueString" : "Kostní dřeň"
        },
        {
          "code" : "n32",
          "valueString" : "Kostní dřeň"
        },
        {
          "code" : "n32l",
          "valueString" : "Kostní dřeň"
        },
        {
          "code" : "n55",
          "valueString" : "Kostní dřeň"
        },
        {
          "code" : "n55l",
          "valueString" : "Kostní dřeň"
        },
        {
          "code" : "plati_od",
          "valueDateTime" : "2000-01-01T00:00:00Z"
        },
        {
          "code" : "poradi",
          "valueString" : "161000"
        }
      ]
    },
    {
      "code" : "BM(ST)",
      "display" : "Kostní dřen ze sterna",
      "property" : [
        {
          "code" : "klic",
          "valueString" : "BM(ST)"
        },
        {
          "code" : "kod",
          "valueString" : "BM(ST)"
        },
        {
          "code" : "kodl",
          "valueString" : "BM(ST)"
        },
        {
          "code" : "n24",
          "valueString" : "Kostní dřeň(sternum)"
        },
        {
          "code" : "n32",
          "valueString" : "Kostní dřeň (sternum)"
        },
        {
          "code" : "n32l",
          "valueString" : "Kostní dřeň (sternum)"
        },
        {
          "code" : "n55",
          "valueString" : "Kostní dřen ze sterna"
        },
        {
          "code" : "n55l",
          "valueString" : "Kostní dřen ze sterna"
        },
        {
          "code" : "plati_od",
          "valueDateTime" : "2000-01-01T00:00:00Z"
        },
        {
          "code" : "poradi",
          "valueString" : "162000"
        }
      ]
    },
    {
      "code" : "BONE",
      "display" : "Kost",
      "property" : [
        {
          "code" : "klic",
          "valueString" : "BONE"
        },
        {
          "code" : "kod",
          "valueString" : "BONE"
        },
        {
          "code" : "kodl",
          "valueString" : "BONE"
        },
        {
          "code" : "n24",
          "valueString" : "Kost"
        },
        {
          "code" : "n32",
          "valueString" : "Kost"
        },
        {
          "code" : "n32l",
          "valueString" : "Kost"
        },
        {
          "code" : "n55",
          "valueString" : "Kost"
        },
        {
          "code" : "n55l",
          "valueString" : "Kost"
        },
        {
          "code" : "plati_od",
          "valueDateTime" : "2000-01-01T00:00:00Z"
        },
        {
          "code" : "poradi",
          "valueString" : "160000"
        }
      ]
    },
    {
      "code" : "BONE(BI)",
      "display" : "Tkáň kosti získaná biopsií",
      "property" : [
        {
          "code" : "klic",
          "valueString" : "BONE(BI)"
        },
        {
          "code" : "kod",
          "valueString" : "BONE(BI)"
        },
        {
          "code" : "kodl",
          "valueString" : "BONE(BI)"
        },
        {
          "code" : "n24",
          "valueString" : "Kost(biopsie)"
        },
        {
          "code" : "n32",
          "valueString" : "Kost(biopsie)"
        },
        {
          "code" : "n32l",
          "valueString" : "Kost(biopsie)"
        },
        {
          "code" : "n55",
          "valueString" : "Tkáň kosti získaná biopsií"
        },
        {
          "code" : "n55l",
          "valueString" : "Tkáň kosti získaná biopsií"
        },
        {
          "code" : "plati_od",
          "valueDateTime" : "2000-01-01T00:00:00Z"
        },
        {
          "code" : "poradi",
          "valueString" : "131000"
        }
      ]
    },
    {
      "code" : "CAL",
      "display" : "Kámen (obecně)",
      "property" : [
        {
          "code" : "klic",
          "valueString" : "CAL"
        },
        {
          "code" : "kod",
          "valueString" : "CAL"
        },
        {
          "code" : "kodl",
          "valueString" : "CAL"
        },
        {
          "code" : "n24",
          "valueString" : "Konkrement"
        },
        {
          "code" : "n32",
          "valueString" : "Konkrement"
        },
        {
          "code" : "n32l",
          "valueString" : "Konkrement"
        },
        {
          "code" : "n55",
          "valueString" : "Kámen (obecně)"
        },
        {
          "code" : "n55l",
          "valueString" : "Kámen (obecně)"
        },
        {
          "code" : "plati_od",
          "valueDateTime" : "2000-01-01T00:00:00Z"
        },
        {
          "code" : "poradi",
          "valueString" : "153000"
        }
      ]
    },
    {
      "code" : "CAL(GB)",
      "display" : "Žlučový konkrement",
      "property" : [
        {
          "code" : "klic",
          "valueString" : "CAL(GB)"
        },
        {
          "code" : "kod",
          "valueString" : "CAL(GB)"
        },
        {
          "code" : "kodl",
          "valueString" : "CAL(GB)"
        },
        {
          "code" : "n24",
          "valueString" : "Konkrement (žlučový)"
        },
        {
          "code" : "n32",
          "valueString" : "Konkrement (žlučový)"
        },
        {
          "code" : "n32l",
          "valueString" : "Konkrement (žlučový)"
        },
        {
          "code" : "n55",
          "valueString" : "Žlučový konkrement"
        },
        {
          "code" : "n55l",
          "valueString" : "Žlučový konkrement"
        },
        {
          "code" : "plati_od",
          "valueDateTime" : "2000-01-01T00:00:00Z"
        },
        {
          "code" : "poradi",
          "valueString" : "156000"
        }
      ]
    },
    {
      "code" : "CAL(PR)",
      "display" : "Prostatický konkrement",
      "property" : [
        {
          "code" : "klic",
          "valueString" : "CAL(PR)"
        },
        {
          "code" : "kod",
          "valueString" : "CAL(PR)"
        },
        {
          "code" : "kodl",
          "valueString" : "CAL(PR)"
        },
        {
          "code" : "n24",
          "valueString" : "Konkrement (prostata)"
        },
        {
          "code" : "n32",
          "valueString" : "Konkrement (prostata)"
        },
        {
          "code" : "n32l",
          "valueString" : "Konkrement (prostata)"
        },
        {
          "code" : "n55",
          "valueString" : "Prostatický konkrement"
        },
        {
          "code" : "n55l",
          "valueString" : "Prostatický konkrement"
        },
        {
          "code" : "plati_od",
          "valueDateTime" : "2000-01-01T00:00:00Z"
        },
        {
          "code" : "poradi",
          "valueString" : "157000"
        }
      ]
    },
    {
      "code" : "CAL(SAL)",
      "display" : "Slinný konkrement",
      "property" : [
        {
          "code" : "klic",
          "valueString" : "CAL(SAL)"
        },
        {
          "code" : "kod",
          "valueString" : "CAL(SAL)"
        },
        {
          "code" : "kodl",
          "valueString" : "CAL(SAL)"
        },
        {
          "code" : "n24",
          "valueString" : "Konkrement (slinný)"
        },
        {
          "code" : "n32",
          "valueString" : "Konkrement (slinný)"
        },
        {
          "code" : "n32l",
          "valueString" : "Konkrement (slinný)"
        },
        {
          "code" : "n55",
          "valueString" : "Slinný konkrement"
        },
        {
          "code" : "n55l",
          "valueString" : "Slinný konkrement"
        },
        {
          "code" : "plati_od",
          "valueDateTime" : "2000-01-01T00:00:00Z"
        },
        {
          "code" : "poradi",
          "valueString" : "155000"
        }
      ]
    },
    {
      "code" : "CAL(U)",
      "display" : "Močový kámen",
      "property" : [
        {
          "code" : "klic",
          "valueString" : "CAL(U)"
        },
        {
          "code" : "kod",
          "valueString" : "CAL(U)"
        },
        {
          "code" : "kodl",
          "valueString" : "CAL(U)"
        },
        {
          "code" : "n24",
          "valueString" : "Konkrement(močový)"
        },
        {
          "code" : "n32",
          "valueString" : "Konkrement (močový)"
        },
        {
          "code" : "n32l",
          "valueString" : "Konkrement (močový)"
        },
        {
          "code" : "n55",
          "valueString" : "Močový kámen"
        },
        {
          "code" : "n55l",
          "valueString" : "Močový kámen"
        },
        {
          "code" : "plati_od",
          "valueDateTime" : "2000-01-01T00:00:00Z"
        },
        {
          "code" : "poradi",
          "valueString" : "154000"
        }
      ]
    },
    {
      "code" : "CARTIL",
      "display" : "Chrupavka",
      "property" : [
        {
          "code" : "klic",
          "valueString" : "CARTIL"
        },
        {
          "code" : "kod",
          "valueString" : "CARTIL"
        },
        {
          "code" : "kodl",
          "valueString" : "CARTIL"
        },
        {
          "code" : "n24",
          "valueString" : "Chrupavka"
        },
        {
          "code" : "n32",
          "valueString" : "Chrupavka"
        },
        {
          "code" : "n32l",
          "valueString" : "Chrupavka"
        },
        {
          "code" : "n55",
          "valueString" : "Chrupavka"
        },
        {
          "code" : "n55l",
          "valueString" : "Chrupavka"
        },
        {
          "code" : "plati_od",
          "valueDateTime" : "2000-01-01T00:00:00Z"
        },
        {
          "code" : "poradi",
          "valueString" : "171000"
        }
      ]
    },
    {
      "code" : "CCSUP",
      "display" : "Supernatant buněčných kultur",
      "property" : [
        {
          "code" : "klic",
          "valueString" : "CCSUP"
        },
        {
          "code" : "kod",
          "valueString" : "CCSUP"
        },
        {
          "code" : "kodl",
          "valueString" : "CCSUP"
        },
        {
          "code" : "n24",
          "valueString" : "Supernatant buň. kultur"
        },
        {
          "code" : "n32",
          "valueString" : "Supernatant buněčných kultur"
        },
        {
          "code" : "n32l",
          "valueString" : "Supernatant buněčných kultur"
        },
        {
          "code" : "n55",
          "valueString" : "Supernatant buněčných kultur"
        },
        {
          "code" : "n55l",
          "valueString" : "Supernatant buněčných kultur"
        },
        {
          "code" : "plati_od",
          "valueDateTime" : "2000-01-01T00:00:00Z"
        },
        {
          "code" : "poradi",
          "valueString" : "189000"
        }
      ]
    },
    {
      "code" : "CEREB",
      "display" : "Mozek",
      "property" : [
        {
          "code" : "klic",
          "valueString" : "CEREB"
        },
        {
          "code" : "kod",
          "valueString" : "CEREB"
        },
        {
          "code" : "kodl",
          "valueString" : "CEREB"
        },
        {
          "code" : "n24",
          "valueString" : "Mozek"
        },
        {
          "code" : "n32",
          "valueString" : "Mozek"
        },
        {
          "code" : "n32l",
          "valueString" : "Mozek"
        },
        {
          "code" : "n55",
          "valueString" : "Mozek"
        },
        {
          "code" : "n55l",
          "valueString" : "Mozek"
        },
        {
          "code" : "plati_od",
          "valueDateTime" : "2000-01-01T00:00:00Z"
        },
        {
          "code" : "poradi",
          "valueString" : "167000"
        }
      ]
    },
    {
      "code" : "CERVMUC",
      "display" : "Cervikální hlen",
      "property" : [
        {
          "code" : "klic",
          "valueString" : "CERVMUC"
        },
        {
          "code" : "kod",
          "valueString" : "CERVMUC"
        },
        {
          "code" : "kodl",
          "valueString" : "CERVMUC"
        },
        {
          "code" : "n24",
          "valueString" : "Cervikální hlen"
        },
        {
          "code" : "n32",
          "valueString" : "Cervikální hlen"
        },
        {
          "code" : "n32l",
          "valueString" : "Cervikální hlen"
        },
        {
          "code" : "n55",
          "valueString" : "Cervikální hlen"
        },
        {
          "code" : "n55l",
          "valueString" : "Cervikální hlen"
        },
        {
          "code" : "plati_od",
          "valueDateTime" : "2000-01-01T00:00:00Z"
        },
        {
          "code" : "poradi",
          "valueString" : "147000"
        }
      ]
    },
    {
      "code" : "CERVPOOL",
      "display" : "Cervikální pool",
      "property" : [
        {
          "code" : "klic",
          "valueString" : "CERVPOOL"
        },
        {
          "code" : "kod",
          "valueString" : "CERVPOOL"
        },
        {
          "code" : "kodl",
          "valueString" : "CERVPOOL"
        },
        {
          "code" : "n24",
          "valueString" : "Cervikální pool"
        },
        {
          "code" : "n32",
          "valueString" : "Cervikální pool"
        },
        {
          "code" : "n32l",
          "valueString" : "Cervikální pool"
        },
        {
          "code" : "n55",
          "valueString" : "Cervikální pool"
        },
        {
          "code" : "n55l",
          "valueString" : "Cervikální pool"
        },
        {
          "code" : "plati_od",
          "valueDateTime" : "2000-01-01T00:00:00Z"
        },
        {
          "code" : "poradi",
          "valueString" : "146000"
        }
      ]
    },
    {
      "code" : "CORD",
      "display" : "Pupečník",
      "property" : [
        {
          "code" : "klic",
          "valueString" : "CORD"
        },
        {
          "code" : "kod",
          "valueString" : "CORD"
        },
        {
          "code" : "kodl",
          "valueString" : "CORD"
        },
        {
          "code" : "n24",
          "valueString" : "Pupečník"
        },
        {
          "code" : "n32",
          "valueString" : "Pupečník"
        },
        {
          "code" : "n32l",
          "valueString" : "Pupečník"
        },
        {
          "code" : "n55",
          "valueString" : "Pupečník"
        },
        {
          "code" : "n55l",
          "valueString" : "Pupečník"
        },
        {
          "code" : "plati_od",
          "valueDateTime" : "2000-01-01T00:00:00Z"
        },
        {
          "code" : "poradi",
          "valueString" : "165000"
        }
      ]
    },
    {
      "code" : "CSF",
      "display" : "Likvor",
      "property" : [
        {
          "code" : "klic",
          "valueString" : "CSF"
        },
        {
          "code" : "kod",
          "valueString" : "CSF"
        },
        {
          "code" : "kodl",
          "valueString" : "CSF"
        },
        {
          "code" : "n24",
          "valueString" : "Likvor"
        },
        {
          "code" : "n32",
          "valueString" : "Likvor"
        },
        {
          "code" : "n32l",
          "valueString" : "Likvor"
        },
        {
          "code" : "n55",
          "valueString" : "Likvor"
        },
        {
          "code" : "n55l",
          "valueString" : "Likvor"
        },
        {
          "code" : "plati_od",
          "valueDateTime" : "2000-01-01T00:00:00Z"
        },
        {
          "code" : "poradi",
          "valueString" : "087000"
        }
      ]
    },
    {
      "code" : "CYTOS",
      "display" : "Cytosol",
      "property" : [
        {
          "code" : "klic",
          "valueString" : "CYTOS"
        },
        {
          "code" : "kod",
          "valueString" : "CYTOS"
        },
        {
          "code" : "kodl",
          "valueString" : "CYTOS"
        },
        {
          "code" : "n24",
          "valueString" : "Cytosol"
        },
        {
          "code" : "n32",
          "valueString" : "Cytosol"
        },
        {
          "code" : "n32l",
          "valueString" : "Cytosol"
        },
        {
          "code" : "n55",
          "valueString" : "Cytosol"
        },
        {
          "code" : "n55l",
          "valueString" : "Cytosol"
        },
        {
          "code" : "plati_od",
          "valueDateTime" : "2000-01-01T00:00:00Z"
        },
        {
          "code" : "poradi",
          "valueString" : "112000"
        }
      ]
    },
    {
      "code" : "DNA",
      "display" : "DNA",
      "property" : [
        {
          "code" : "klic",
          "valueString" : "DNA"
        },
        {
          "code" : "kod",
          "valueString" : "DNA"
        },
        {
          "code" : "kodl",
          "valueString" : "DNA"
        },
        {
          "code" : "n24",
          "valueString" : "DNA"
        },
        {
          "code" : "n32",
          "valueString" : "DNA"
        },
        {
          "code" : "n32l",
          "valueString" : "DNA"
        },
        {
          "code" : "n55",
          "valueString" : "DNA"
        },
        {
          "code" : "n55l",
          "valueString" : "DNA"
        },
        {
          "code" : "plati_od",
          "valueDateTime" : "2000-01-01T00:00:00Z"
        },
        {
          "code" : "poradi",
          "valueString" : "035555"
        }
      ]
    },
    {
      "code" : "DREN",
      "display" : "Drén",
      "property" : [
        {
          "code" : "klic",
          "valueString" : "DREN"
        },
        {
          "code" : "kod",
          "valueString" : "DREN"
        },
        {
          "code" : "kodl",
          "valueString" : "DREN"
        },
        {
          "code" : "n24",
          "valueString" : "Drén"
        },
        {
          "code" : "n32",
          "valueString" : "Drén"
        },
        {
          "code" : "n32l",
          "valueString" : "Drén"
        },
        {
          "code" : "n55",
          "valueString" : "Drén"
        },
        {
          "code" : "n55l",
          "valueString" : "Drén"
        },
        {
          "code" : "plati_od",
          "valueDateTime" : "2000-01-01T00:00:00Z"
        },
        {
          "code" : "poradi",
          "valueString" : "700500"
        }
      ]
    },
    {
      "code" : "DUF",
      "display" : "Duodenální tekutina",
      "property" : [
        {
          "code" : "klic",
          "valueString" : "DUF"
        },
        {
          "code" : "kod",
          "valueString" : "DUF"
        },
        {
          "code" : "kodl",
          "valueString" : "DUF"
        },
        {
          "code" : "n24",
          "valueString" : "Duod. tekutina"
        },
        {
          "code" : "n32",
          "valueString" : "Duodenální tekutina"
        },
        {
          "code" : "n32l",
          "valueString" : "Duodenální tekutina"
        },
        {
          "code" : "n55",
          "valueString" : "Duodenální tekutina"
        },
        {
          "code" : "n55l",
          "valueString" : "Duodenální tekutina"
        },
        {
          "code" : "plati_od",
          "valueDateTime" : "2000-01-01T00:00:00Z"
        },
        {
          "code" : "poradi",
          "valueString" : "095000"
        }
      ]
    },
    {
      "code" : "DUOD(BI)",
      "display" : "Tkáň duodena získaná biopsií",
      "property" : [
        {
          "code" : "klic",
          "valueString" : "DUOD(BI)"
        },
        {
          "code" : "kod",
          "valueString" : "DUOD(BI)"
        },
        {
          "code" : "kodl",
          "valueString" : "DUOD(BI)"
        },
        {
          "code" : "n24",
          "valueString" : "Duodenum(biopsie)"
        },
        {
          "code" : "n32",
          "valueString" : "Duodenum(biopsie)"
        },
        {
          "code" : "n32l",
          "valueString" : "Duodenum(biopsie)"
        },
        {
          "code" : "n55",
          "valueString" : "Tkáň duodena získaná biopsií"
        },
        {
          "code" : "n55l",
          "valueString" : "Tkáň duodena získaná biopsií"
        },
        {
          "code" : "plati_od",
          "valueDateTime" : "2000-01-01T00:00:00Z"
        },
        {
          "code" : "poradi",
          "valueString" : "137000"
        }
      ]
    },
    {
      "code" : "ELECT",
      "display" : "Elektroda",
      "property" : [
        {
          "code" : "klic",
          "valueString" : "ELECT"
        },
        {
          "code" : "kod",
          "valueString" : "ELECT"
        },
        {
          "code" : "kodl",
          "valueString" : "ELECT"
        },
        {
          "code" : "n24",
          "valueString" : "Elektroda"
        },
        {
          "code" : "n32",
          "valueString" : "Elektroda"
        },
        {
          "code" : "n32l",
          "valueString" : "Elektroda"
        },
        {
          "code" : "n55",
          "valueString" : "Elektroda"
        },
        {
          "code" : "n55l",
          "valueString" : "Elektroda"
        },
        {
          "code" : "plati_od",
          "valueDateTime" : "2000-01-01T00:00:00Z"
        },
        {
          "code" : "poradi",
          "valueString" : "400300"
        }
      ]
    },
    {
      "code" : "ENDCERVP",
      "display" : "Endocervikální pool",
      "property" : [
        {
          "code" : "klic",
          "valueString" : "ENDCERVP"
        },
        {
          "code" : "kod",
          "valueString" : "ENDCERVP"
        },
        {
          "code" : "kodl",
          "valueString" : "ENDCERVP"
        },
        {
          "code" : "n24",
          "valueString" : "Endocervikální pool"
        },
        {
          "code" : "n32",
          "valueString" : "Endocervikální pool"
        },
        {
          "code" : "n32l",
          "valueString" : "Endocervikální pool"
        },
        {
          "code" : "n55",
          "valueString" : "Endocervikální pool"
        },
        {
          "code" : "n55l",
          "valueString" : "Endocervikální pool"
        },
        {
          "code" : "plati_od",
          "valueDateTime" : "2000-01-01T00:00:00Z"
        },
        {
          "code" : "poradi",
          "valueString" : "148000"
        }
      ]
    },
    {
      "code" : "EOS",
      "display" : "Eosinofily",
      "property" : [
        {
          "code" : "klic",
          "valueString" : "EOS"
        },
        {
          "code" : "kod",
          "valueString" : "EOS"
        },
        {
          "code" : "kodl",
          "valueString" : "EOS"
        },
        {
          "code" : "n24",
          "valueString" : "Eosinofily"
        },
        {
          "code" : "n32",
          "valueString" : "Eosinofily"
        },
        {
          "code" : "n32l",
          "valueString" : "Eosinofily"
        },
        {
          "code" : "n55",
          "valueString" : "Eosinofily"
        },
        {
          "code" : "n55l",
          "valueString" : "Eosinofily"
        },
        {
          "code" : "plati_od",
          "valueDateTime" : "2000-01-01T00:00:00Z"
        },
        {
          "code" : "poradi",
          "valueString" : "049000"
        }
      ]
    },
    {
      "code" : "ERBL",
      "display" : "Erytroblasty",
      "property" : [
        {
          "code" : "klic",
          "valueString" : "ERBL"
        },
        {
          "code" : "kod",
          "valueString" : "ERBL"
        },
        {
          "code" : "kodl",
          "valueString" : "ERBL"
        },
        {
          "code" : "n24",
          "valueString" : "Erytroblasty"
        },
        {
          "code" : "n32",
          "valueString" : "Erytroblasty"
        },
        {
          "code" : "n32l",
          "valueString" : "Erytroblasty"
        },
        {
          "code" : "n55",
          "valueString" : "Erytroblasty"
        },
        {
          "code" : "n55l",
          "valueString" : "Erytroblasty"
        },
        {
          "code" : "plati_od",
          "valueDateTime" : "2000-01-01T00:00:00Z"
        },
        {
          "code" : "poradi",
          "valueString" : "044501"
        }
      ]
    },
    {
      "code" : "ERC",
      "display" : "Erytrocyty",
      "property" : [
        {
          "code" : "klic",
          "valueString" : "ERC"
        },
        {
          "code" : "kod",
          "valueString" : "ERC"
        },
        {
          "code" : "kodl",
          "valueString" : "ERC"
        },
        {
          "code" : "n24",
          "valueString" : "Erytrocyty"
        },
        {
          "code" : "n32",
          "valueString" : "Erytrocyty"
        },
        {
          "code" : "n32l",
          "valueString" : "Erytrocyty"
        },
        {
          "code" : "n55",
          "valueString" : "Erytrocyty"
        },
        {
          "code" : "n55l",
          "valueString" : "Erytrocyty"
        },
        {
          "code" : "plati_od",
          "valueDateTime" : "2000-01-01T00:00:00Z"
        },
        {
          "code" : "poradi",
          "valueString" : "045000"
        }
      ]
    },
    {
      "code" : "EX",
      "display" : "Sputum",
      "property" : [
        {
          "code" : "klic",
          "valueString" : "EX"
        },
        {
          "code" : "kod",
          "valueString" : "EX"
        },
        {
          "code" : "kodl",
          "valueString" : "EX"
        },
        {
          "code" : "n24",
          "valueString" : "Sputum"
        },
        {
          "code" : "n32",
          "valueString" : "Sputum"
        },
        {
          "code" : "n32l",
          "valueString" : "Sputum"
        },
        {
          "code" : "n55",
          "valueString" : "Sputum"
        },
        {
          "code" : "n55l",
          "valueString" : "Sputum"
        },
        {
          "code" : "plati_od",
          "valueDateTime" : "2000-01-01T00:00:00Z"
        },
        {
          "code" : "poradi",
          "valueString" : "098000"
        }
      ]
    },
    {
      "code" : "EXOCERVP",
      "display" : "Exocervikální pool",
      "property" : [
        {
          "code" : "klic",
          "valueString" : "EXOCERVP"
        },
        {
          "code" : "kod",
          "valueString" : "EXOCERVP"
        },
        {
          "code" : "kodl",
          "valueString" : "EXOCERVP"
        },
        {
          "code" : "n24",
          "valueString" : "Exocervikální pool"
        },
        {
          "code" : "n32",
          "valueString" : "Exocervikální pool"
        },
        {
          "code" : "n32l",
          "valueString" : "Exocervikální pool"
        },
        {
          "code" : "n55",
          "valueString" : "Exocervikální pool"
        },
        {
          "code" : "n55l",
          "valueString" : "Exocervikální pool"
        },
        {
          "code" : "plati_od",
          "valueDateTime" : "2000-01-01T00:00:00Z"
        },
        {
          "code" : "poradi",
          "valueString" : "149000"
        }
      ]
    },
    {
      "code" : "EXTENVIR",
      "display" : "Materiál z vnějšího prostředí",
      "property" : [
        {
          "code" : "klic",
          "valueString" : "EXTENVIR"
        },
        {
          "code" : "kod",
          "valueString" : "EXTENVIR"
        },
        {
          "code" : "kodl",
          "valueString" : "EXTENVIR"
        },
        {
          "code" : "n24",
          "valueString" : "Mat. vnějšího prostředí"
        },
        {
          "code" : "n32",
          "valueString" : "Materiál vnějšího prostředí"
        },
        {
          "code" : "n32l",
          "valueString" : "Materiál vnějšího prostředí"
        },
        {
          "code" : "n55",
          "valueString" : "Materiál z vnějšího prostředí"
        },
        {
          "code" : "n55l",
          "valueString" : "Materiál z vnějšího prostředí"
        },
        {
          "code" : "plati_od",
          "valueDateTime" : "2000-01-01T00:00:00Z"
        },
        {
          "code" : "poradi",
          "valueString" : "200000"
        }
      ]
    },
    {
      "code" : "F",
      "display" : "Stolice",
      "property" : [
        {
          "code" : "klic",
          "valueString" : "F"
        },
        {
          "code" : "kod",
          "valueString" : "F"
        },
        {
          "code" : "kodl",
          "valueString" : "F"
        },
        {
          "code" : "n24",
          "valueString" : "Stolice"
        },
        {
          "code" : "n32",
          "valueString" : "Stolice"
        },
        {
          "code" : "n32l",
          "valueString" : "Stolice"
        },
        {
          "code" : "n55",
          "valueString" : "Stolice"
        },
        {
          "code" : "n55l",
          "valueString" : "Stolice"
        },
        {
          "code" : "plati_od",
          "valueDateTime" : "2000-01-01T00:00:00Z"
        },
        {
          "code" : "poradi",
          "valueString" : "090000"
        }
      ]
    },
    {
      "code" : "FASCIA",
      "display" : "Fascie",
      "property" : [
        {
          "code" : "klic",
          "valueString" : "FASCIA"
        },
        {
          "code" : "kod",
          "valueString" : "FASCIA"
        },
        {
          "code" : "kodl",
          "valueString" : "FASCIA"
        },
        {
          "code" : "n24",
          "valueString" : "Fascie"
        },
        {
          "code" : "n32",
          "valueString" : "Fascie"
        },
        {
          "code" : "n32l",
          "valueString" : "Fascie"
        },
        {
          "code" : "n55",
          "valueString" : "Fascie"
        },
        {
          "code" : "n55l",
          "valueString" : "Fascie"
        },
        {
          "code" : "plati_od",
          "valueDateTime" : "2000-01-01T00:00:00Z"
        },
        {
          "code" : "poradi",
          "valueString" : "170000"
        }
      ]
    },
    {
      "code" : "FLPAT",
      "display" : "Patologická tekutina",
      "property" : [
        {
          "code" : "klic",
          "valueString" : "FLPAT"
        },
        {
          "code" : "kod",
          "valueString" : "FLPAT"
        },
        {
          "code" : "kodl",
          "valueString" : "FLPAT"
        },
        {
          "code" : "n24",
          "valueString" : "Patologická tekutina"
        },
        {
          "code" : "n32",
          "valueString" : "Patologická tekutina"
        },
        {
          "code" : "n32l",
          "valueString" : "Patologická tekutina"
        },
        {
          "code" : "n55",
          "valueString" : "Patologická tekutina"
        },
        {
          "code" : "n55l",
          "valueString" : "Patologická tekutina"
        },
        {
          "code" : "plati_od",
          "valueDateTime" : "2000-01-01T00:00:00Z"
        },
        {
          "code" : "poradi",
          "valueString" : "700600"
        }
      ]
    },
    {
      "code" : "FOREBODY",
      "display" : "Cizí těleso",
      "property" : [
        {
          "code" : "klic",
          "valueString" : "FOREBODY"
        },
        {
          "code" : "kod",
          "valueString" : "FOREBODY"
        },
        {
          "code" : "kodl",
          "valueString" : "FOREBODY"
        },
        {
          "code" : "n24",
          "valueString" : "Cizí těleso"
        },
        {
          "code" : "n32",
          "valueString" : "Cizí těleso"
        },
        {
          "code" : "n32l",
          "valueString" : "Cizí těleso"
        },
        {
          "code" : "n55",
          "valueString" : "Cizí těleso"
        },
        {
          "code" : "n55l",
          "valueString" : "Cizí těleso"
        },
        {
          "code" : "plati_od",
          "valueDateTime" : "2000-01-01T00:00:00Z"
        },
        {
          "code" : "poradi",
          "valueString" : "199000"
        }
      ]
    },
    {
      "code" : "GALL",
      "display" : "Žluč",
      "property" : [
        {
          "code" : "klic",
          "valueString" : "GALL"
        },
        {
          "code" : "kod",
          "valueString" : "GALL"
        },
        {
          "code" : "kodl",
          "valueString" : "GALL"
        },
        {
          "code" : "n24",
          "valueString" : "Žluč"
        },
        {
          "code" : "n32",
          "valueString" : "Žluč"
        },
        {
          "code" : "n32l",
          "valueString" : "Žluč"
        },
        {
          "code" : "n55",
          "valueString" : "Žluč"
        },
        {
          "code" : "n55l",
          "valueString" : "Žluč"
        },
        {
          "code" : "plati_od",
          "valueDateTime" : "2000-01-01T00:00:00Z"
        },
        {
          "code" : "poradi",
          "valueString" : "099000"
        }
      ]
    },
    {
      "code" : "GIT(BI)",
      "display" : "Tkáň gastrointestinálního traktu získaná biopsií",
      "property" : [
        {
          "code" : "klic",
          "valueString" : "GIT(BI)"
        },
        {
          "code" : "kod",
          "valueString" : "GIT(BI)"
        },
        {
          "code" : "kodl",
          "valueString" : "GIT(BI)"
        },
        {
          "code" : "n24",
          "valueString" : "Tkáň GIT(biopsie)"
        },
        {
          "code" : "n32",
          "valueString" : "Tkáň GIT(biopsie)"
        },
        {
          "code" : "n32l",
          "valueString" : "Tkáň GIT(biopsie)"
        },
        {
          "code" : "n55",
          "valueString" : "Tkáň gastrointestinálního traktu získaná biopsií"
        },
        {
          "code" : "n55l",
          "valueString" : "Tkáň gastrointestinálního traktu získaná biopsií"
        },
        {
          "code" : "plati_od",
          "valueDateTime" : "2000-01-01T00:00:00Z"
        },
        {
          "code" : "poradi",
          "valueString" : "135000"
        }
      ]
    },
    {
      "code" : "GRAN",
      "display" : "Granulocyty",
      "property" : [
        {
          "code" : "klic",
          "valueString" : "GRAN"
        },
        {
          "code" : "kod",
          "valueString" : "GRAN"
        },
        {
          "code" : "kodl",
          "valueString" : "GRAN"
        },
        {
          "code" : "n24",
          "valueString" : "Granulocyty"
        },
        {
          "code" : "n32",
          "valueString" : "Granulocyty"
        },
        {
          "code" : "n32l",
          "valueString" : "Granulocyty"
        },
        {
          "code" : "n55",
          "valueString" : "Granulocyty"
        },
        {
          "code" : "n55l",
          "valueString" : "Granulocyty"
        },
        {
          "code" : "plati_od",
          "valueDateTime" : "2000-01-01T00:00:00Z"
        },
        {
          "code" : "poradi",
          "valueString" : "050100"
        }
      ]
    },
    {
      "code" : "HAIR",
      "display" : "Vlas",
      "property" : [
        {
          "code" : "klic",
          "valueString" : "HAIR"
        },
        {
          "code" : "kod",
          "valueString" : "HAIR"
        },
        {
          "code" : "kodl",
          "valueString" : "HAIR"
        },
        {
          "code" : "n24",
          "valueString" : "Vlas"
        },
        {
          "code" : "n32",
          "valueString" : "Vlas"
        },
        {
          "code" : "n32l",
          "valueString" : "Vlas"
        },
        {
          "code" : "n55",
          "valueString" : "Vlas"
        },
        {
          "code" : "n55l",
          "valueString" : "Vlas"
        },
        {
          "code" : "plati_od",
          "valueDateTime" : "2000-01-01T00:00:00Z"
        },
        {
          "code" : "poradi",
          "valueString" : "184000"
        }
      ]
    },
    {
      "code" : "HB",
      "display" : "Hemoglobin",
      "property" : [
        {
          "code" : "klic",
          "valueString" : "HB"
        },
        {
          "code" : "kod",
          "valueString" : "HB"
        },
        {
          "code" : "kodl",
          "valueString" : "HB"
        },
        {
          "code" : "n24",
          "valueString" : "Hb"
        },
        {
          "code" : "n32",
          "valueString" : "Hemoglobin"
        },
        {
          "code" : "n32l",
          "valueString" : "Hemoglobin"
        },
        {
          "code" : "n55",
          "valueString" : "Hemoglobin"
        },
        {
          "code" : "n55l",
          "valueString" : "Hemoglobin"
        },
        {
          "code" : "plati_od",
          "valueDateTime" : "2000-01-01T00:00:00Z"
        },
        {
          "code" : "poradi",
          "valueString" : "021000"
        }
      ]
    },
    {
      "code" : "HEMAT",
      "display" : "Hematom",
      "property" : [
        {
          "code" : "klic",
          "valueString" : "HEMAT"
        },
        {
          "code" : "kod",
          "valueString" : "HEMAT"
        },
        {
          "code" : "kodl",
          "valueString" : "HEMAT"
        },
        {
          "code" : "n24",
          "valueString" : "Hematom"
        },
        {
          "code" : "n32",
          "valueString" : "Hematom"
        },
        {
          "code" : "n32l",
          "valueString" : "Hematom"
        },
        {
          "code" : "n55",
          "valueString" : "Hematom"
        },
        {
          "code" : "n55l",
          "valueString" : "Hematom"
        },
        {
          "code" : "plati_od",
          "valueDateTime" : "2000-01-01T00:00:00Z"
        },
        {
          "code" : "poradi",
          "valueString" : "151000"
        }
      ]
    },
    {
      "code" : "IMPERIAN",
      "display" : "Otisk perianálních řas",
      "property" : [
        {
          "code" : "klic",
          "valueString" : "IMPERIAN"
        },
        {
          "code" : "kod",
          "valueString" : "IMPERIAN"
        },
        {
          "code" : "kodl",
          "valueString" : "IMPERIAN"
        },
        {
          "code" : "n24",
          "valueString" : "Otisk perianálních řas"
        },
        {
          "code" : "n32",
          "valueString" : "Otisk perianálních řas"
        },
        {
          "code" : "n32l",
          "valueString" : "Otisk perianálních řas"
        },
        {
          "code" : "n55",
          "valueString" : "Otisk perianálních řas"
        },
        {
          "code" : "n55l",
          "valueString" : "Otisk perianálních řas"
        },
        {
          "code" : "plati_od",
          "valueDateTime" : "2000-01-01T00:00:00Z"
        },
        {
          "code" : "poradi",
          "valueString" : "350255"
        }
      ]
    },
    {
      "code" : "IMPLAN",
      "display" : "Implantát umělý",
      "property" : [
        {
          "code" : "klic",
          "valueString" : "IMPLAN"
        },
        {
          "code" : "kod",
          "valueString" : "IMPLAN"
        },
        {
          "code" : "kodl",
          "valueString" : "IMPLAN"
        },
        {
          "code" : "n24",
          "valueString" : "Implantát umělý"
        },
        {
          "code" : "n32",
          "valueString" : "Implantát umělý"
        },
        {
          "code" : "n32l",
          "valueString" : "Implantát umělý"
        },
        {
          "code" : "n55",
          "valueString" : "Implantát umělý"
        },
        {
          "code" : "n55l",
          "valueString" : "Implantát umělý"
        },
        {
          "code" : "plati_od",
          "valueDateTime" : "2000-01-01T00:00:00Z"
        },
        {
          "code" : "poradi",
          "valueString" : "198000"
        }
      ]
    },
    {
      "code" : "IMPLTIS",
      "display" : "Implantát tkáňový",
      "property" : [
        {
          "code" : "klic",
          "valueString" : "IMPLTIS"
        },
        {
          "code" : "kod",
          "valueString" : "IMPLTIS"
        },
        {
          "code" : "kodl",
          "valueString" : "IMPLTIS"
        },
        {
          "code" : "n24",
          "valueString" : "Implantát tkáňový"
        },
        {
          "code" : "n32",
          "valueString" : "Implantát tkáňový"
        },
        {
          "code" : "n32l",
          "valueString" : "Implantát tkáňový"
        },
        {
          "code" : "n55",
          "valueString" : "Implantát tkáňový"
        },
        {
          "code" : "n55l",
          "valueString" : "Implantát tkáňový"
        },
        {
          "code" : "plati_od",
          "valueDateTime" : "2000-01-01T00:00:00Z"
        },
        {
          "code" : "poradi",
          "valueString" : "193000"
        }
      ]
    },
    {
      "code" : "INF",
      "display" : "Infusát",
      "property" : [
        {
          "code" : "klic",
          "valueString" : "INF"
        },
        {
          "code" : "kod",
          "valueString" : "INF"
        },
        {
          "code" : "kodl",
          "valueString" : "INF"
        },
        {
          "code" : "n24",
          "valueString" : "Infusát"
        },
        {
          "code" : "n32",
          "valueString" : "Infusát"
        },
        {
          "code" : "n32l",
          "valueString" : "Infusát"
        },
        {
          "code" : "n55",
          "valueString" : "Infusát"
        },
        {
          "code" : "n55l",
          "valueString" : "Infusát"
        },
        {
          "code" : "plati_od",
          "valueDateTime" : "2000-01-01T00:00:00Z"
        },
        {
          "code" : "poradi",
          "valueString" : "115000"
        }
      ]
    },
    {
      "code" : "INTE(BI)",
      "display" : "Tkáň střeva získaná biopsií",
      "property" : [
        {
          "code" : "klic",
          "valueString" : "INTE(BI)"
        },
        {
          "code" : "kod",
          "valueString" : "INTE(BI)"
        },
        {
          "code" : "kodl",
          "valueString" : "INTE(BI)"
        },
        {
          "code" : "n24",
          "valueString" : "Střevo(biopsie)"
        },
        {
          "code" : "n32",
          "valueString" : "Střevo(biopsie)"
        },
        {
          "code" : "n32l",
          "valueString" : "Střevo(biopsie)"
        },
        {
          "code" : "n55",
          "valueString" : "Tkáň střeva získaná biopsií"
        },
        {
          "code" : "n55l",
          "valueString" : "Tkáň střeva získaná biopsií"
        },
        {
          "code" : "plati_od",
          "valueDateTime" : "2000-01-01T00:00:00Z"
        },
        {
          "code" : "poradi",
          "valueString" : "138000"
        }
      ]
    },
    {
      "code" : "INTEST",
      "display" : "Střevo",
      "property" : [
        {
          "code" : "klic",
          "valueString" : "INTEST"
        },
        {
          "code" : "kod",
          "valueString" : "INTEST"
        },
        {
          "code" : "kodl",
          "valueString" : "INTEST"
        },
        {
          "code" : "n24",
          "valueString" : "Střevo"
        },
        {
          "code" : "n32",
          "valueString" : "Střevo"
        },
        {
          "code" : "n32l",
          "valueString" : "Střevo"
        },
        {
          "code" : "n55",
          "valueString" : "Střevo"
        },
        {
          "code" : "n55l",
          "valueString" : "Střevo"
        },
        {
          "code" : "plati_od",
          "valueDateTime" : "2000-01-01T00:00:00Z"
        },
        {
          "code" : "poradi",
          "valueString" : "175000"
        }
      ]
    },
    {
      "code" : "INTF",
      "display" : "Střevní tekutina",
      "property" : [
        {
          "code" : "klic",
          "valueString" : "INTF"
        },
        {
          "code" : "kod",
          "valueString" : "INTF"
        },
        {
          "code" : "kodl",
          "valueString" : "INTF"
        },
        {
          "code" : "n24",
          "valueString" : "Střevní tekutina"
        },
        {
          "code" : "n32",
          "valueString" : "Střevní tekutina"
        },
        {
          "code" : "n32l",
          "valueString" : "Střevní tekutina"
        },
        {
          "code" : "n55",
          "valueString" : "Střevní tekutina"
        },
        {
          "code" : "n55l",
          "valueString" : "Střevní tekutina"
        },
        {
          "code" : "plati_od",
          "valueDateTime" : "2000-01-01T00:00:00Z"
        },
        {
          "code" : "poradi",
          "valueString" : "097000"
        }
      ]
    },
    {
      "code" : "IUBODY",
      "display" : "Intreuterinní tělísko",
      "property" : [
        {
          "code" : "klic",
          "valueString" : "IUBODY"
        },
        {
          "code" : "kod",
          "valueString" : "IUBODY"
        },
        {
          "code" : "kodl",
          "valueString" : "IUBODY"
        },
        {
          "code" : "n24",
          "valueString" : "Intreuterinní tělísko"
        },
        {
          "code" : "n32",
          "valueString" : "Intreuterinní tělísko"
        },
        {
          "code" : "n32l",
          "valueString" : "Intreuterinní tělísko"
        },
        {
          "code" : "n55",
          "valueString" : "Intreuterinní tělísko"
        },
        {
          "code" : "n55l",
          "valueString" : "Intreuterinní tělísko"
        },
        {
          "code" : "plati_od",
          "valueDateTime" : "2000-01-01T00:00:00Z"
        },
        {
          "code" : "poradi",
          "valueString" : "350600"
        }
      ]
    },
    {
      "code" : "JEJUN",
      "display" : "Jejunum",
      "property" : [
        {
          "code" : "klic",
          "valueString" : "JEJUN"
        },
        {
          "code" : "kod",
          "valueString" : "JEJUN"
        },
        {
          "code" : "kodl",
          "valueString" : "JEJUN"
        },
        {
          "code" : "n24",
          "valueString" : "Jejunum"
        },
        {
          "code" : "n32",
          "valueString" : "Jejunum"
        },
        {
          "code" : "n32l",
          "valueString" : "Jejunum"
        },
        {
          "code" : "n55",
          "valueString" : "Jejunum"
        },
        {
          "code" : "n55l",
          "valueString" : "Jejunum"
        },
        {
          "code" : "plati_od",
          "valueDateTime" : "2000-01-01T00:00:00Z"
        },
        {
          "code" : "poradi",
          "valueString" : "176000"
        }
      ]
    },
    {
      "code" : "JOF",
      "display" : "Kloubní tekutina",
      "property" : [
        {
          "code" : "klic",
          "valueString" : "JOF"
        },
        {
          "code" : "kod",
          "valueString" : "JOF"
        },
        {
          "code" : "kodl",
          "valueString" : "JOF"
        },
        {
          "code" : "n24",
          "valueString" : "Kloubní tekutina"
        },
        {
          "code" : "n32",
          "valueString" : "Kloubní tekutina"
        },
        {
          "code" : "n32l",
          "valueString" : "Kloubní tekutina"
        },
        {
          "code" : "n55",
          "valueString" : "Kloubní tekutina"
        },
        {
          "code" : "n55l",
          "valueString" : "Kloubní tekutina"
        },
        {
          "code" : "plati_od",
          "valueDateTime" : "2000-01-01T00:00:00Z"
        },
        {
          "code" : "poradi",
          "valueString" : "113000"
        }
      ]
    },
    {
      "code" : "KIDN",
      "display" : "Ledviny",
      "property" : [
        {
          "code" : "klic",
          "valueString" : "KIDN"
        },
        {
          "code" : "kod",
          "valueString" : "KIDN"
        },
        {
          "code" : "kodl",
          "valueString" : "KIDN"
        },
        {
          "code" : "n24",
          "valueString" : "Ledviny"
        },
        {
          "code" : "n32",
          "valueString" : "Ledviny"
        },
        {
          "code" : "n32l",
          "valueString" : "Ledviny"
        },
        {
          "code" : "n55",
          "valueString" : "Ledviny"
        },
        {
          "code" : "n55l",
          "valueString" : "Ledviny"
        },
        {
          "code" : "plati_od",
          "valueDateTime" : "2000-01-01T00:00:00Z"
        },
        {
          "code" : "poradi",
          "valueString" : "177000"
        }
      ]
    },
    {
      "code" : "KIDN(CF)",
      "display" : "Tekutina cysty (ledviny)",
      "property" : [
        {
          "code" : "klic",
          "valueString" : "KIDN(CF)"
        },
        {
          "code" : "kod",
          "valueString" : "KIDN(CF)"
        },
        {
          "code" : "kodl",
          "valueString" : "KIDN(CF)"
        },
        {
          "code" : "n24",
          "valueString" : "Tekutina cysty(ledviny)"
        },
        {
          "code" : "n32",
          "valueString" : "Tekutina cysty(ledviny)"
        },
        {
          "code" : "n32l",
          "valueString" : "Tekutina cysty(ledviny)"
        },
        {
          "code" : "n55",
          "valueString" : "Tekutina cysty (ledviny)"
        },
        {
          "code" : "n55l",
          "valueString" : "Tekutina cysty (ledviny)"
        },
        {
          "code" : "plati_od",
          "valueDateTime" : "2000-01-01T00:00:00Z"
        },
        {
          "code" : "poradi",
          "valueString" : "119000"
        }
      ]
    },
    {
      "code" : "LIV",
      "display" : "Játra",
      "property" : [
        {
          "code" : "klic",
          "valueString" : "LIV"
        },
        {
          "code" : "kod",
          "valueString" : "LIV"
        },
        {
          "code" : "kodl",
          "valueString" : "LIV"
        },
        {
          "code" : "n24",
          "valueString" : "Játra"
        },
        {
          "code" : "n32",
          "valueString" : "Játra"
        },
        {
          "code" : "n32l",
          "valueString" : "Játra"
        },
        {
          "code" : "n55",
          "valueString" : "Játra"
        },
        {
          "code" : "n55l",
          "valueString" : "Játra"
        },
        {
          "code" : "plati_od",
          "valueDateTime" : "2000-01-01T00:00:00Z"
        },
        {
          "code" : "poradi",
          "valueString" : "179000"
        }
      ]
    },
    {
      "code" : "LIV(BI)",
      "display" : "Tkáň jater získaná biopsií",
      "property" : [
        {
          "code" : "klic",
          "valueString" : "LIV(BI)"
        },
        {
          "code" : "kod",
          "valueString" : "LIV(BI)"
        },
        {
          "code" : "kodl",
          "valueString" : "LIV(BI)"
        },
        {
          "code" : "n24",
          "valueString" : "Játra(biopsie)"
        },
        {
          "code" : "n32",
          "valueString" : "Játra(biopsie)"
        },
        {
          "code" : "n32l",
          "valueString" : "Játra(biopsie)"
        },
        {
          "code" : "n55",
          "valueString" : "Tkáň jater získaná biopsií"
        },
        {
          "code" : "n55l",
          "valueString" : "Tkáň jater získaná biopsií"
        },
        {
          "code" : "plati_od",
          "valueDateTime" : "2000-01-01T00:00:00Z"
        },
        {
          "code" : "poradi",
          "valueString" : "132000"
        }
      ]
    },
    {
      "code" : "LKC",
      "display" : "Leukocyty",
      "property" : [
        {
          "code" : "klic",
          "valueString" : "LKC"
        },
        {
          "code" : "kod",
          "valueString" : "LKC"
        },
        {
          "code" : "kodl",
          "valueString" : "LKC"
        },
        {
          "code" : "n24",
          "valueString" : "Leukocyty"
        },
        {
          "code" : "n32",
          "valueString" : "Leukocyty"
        },
        {
          "code" : "n32l",
          "valueString" : "Leukocyty"
        },
        {
          "code" : "n55",
          "valueString" : "Leukocyty"
        },
        {
          "code" : "n55l",
          "valueString" : "Leukocyty"
        },
        {
          "code" : "plati_od",
          "valueDateTime" : "2000-01-01T00:00:00Z"
        },
        {
          "code" : "poradi",
          "valueString" : "051000"
        }
      ]
    },
    {
      "code" : "LYM",
      "display" : "Lymfocyty",
      "property" : [
        {
          "code" : "klic",
          "valueString" : "LYM"
        },
        {
          "code" : "kod",
          "valueString" : "LYM"
        },
        {
          "code" : "kodl",
          "valueString" : "LYM"
        },
        {
          "code" : "n24",
          "valueString" : "Lymfocyty"
        },
        {
          "code" : "n32",
          "valueString" : "Lymfocyty"
        },
        {
          "code" : "n32l",
          "valueString" : "Lymfocyty"
        },
        {
          "code" : "n55",
          "valueString" : "Lymfocyty"
        },
        {
          "code" : "n55l",
          "valueString" : "Lymfocyty"
        },
        {
          "code" : "plati_od",
          "valueDateTime" : "2000-01-01T00:00:00Z"
        },
        {
          "code" : "poradi",
          "valueString" : "055000"
        }
      ]
    },
    {
      "code" : "LYMPHNOD",
      "display" : "Lymfatická uzlina",
      "property" : [
        {
          "code" : "klic",
          "valueString" : "LYMPHNOD"
        },
        {
          "code" : "kod",
          "valueString" : "LYMPHNOD"
        },
        {
          "code" : "kodl",
          "valueString" : "LYMPHNOD"
        },
        {
          "code" : "n24",
          "valueString" : "Lymfatická uzlina"
        },
        {
          "code" : "n32",
          "valueString" : "Lymfatická uzlina"
        },
        {
          "code" : "n32l",
          "valueString" : "Lymfatická uzlina"
        },
        {
          "code" : "n55",
          "valueString" : "Lymfatická uzlina"
        },
        {
          "code" : "n55l",
          "valueString" : "Lymfatická uzlina"
        },
        {
          "code" : "plati_od",
          "valueDateTime" : "2000-01-01T00:00:00Z"
        },
        {
          "code" : "poradi",
          "valueString" : "181000"
        }
      ]
    },
    {
      "code" : "MAMM(BI)",
      "display" : "Tkáň z mammy získaná biopsií",
      "property" : [
        {
          "code" : "klic",
          "valueString" : "MAMM(BI)"
        },
        {
          "code" : "kod",
          "valueString" : "MAMM(BI)"
        },
        {
          "code" : "kodl",
          "valueString" : "MAMM(BI)"
        },
        {
          "code" : "n24",
          "valueString" : "Mamma(biopsie)"
        },
        {
          "code" : "n32",
          "valueString" : "Mamma(biopsie)"
        },
        {
          "code" : "n32l",
          "valueString" : "Mamma(biopsie)"
        },
        {
          "code" : "n55",
          "valueString" : "Tkáň z mammy získaná biopsií"
        },
        {
          "code" : "n55l",
          "valueString" : "Tkáň z mammy získaná biopsií"
        },
        {
          "code" : "plati_od",
          "valueDateTime" : "2000-01-01T00:00:00Z"
        },
        {
          "code" : "poradi",
          "valueString" : "134000"
        }
      ]
    },
    {
      "code" : "MENIN",
      "display" : "Meningy",
      "property" : [
        {
          "code" : "klic",
          "valueString" : "MENIN"
        },
        {
          "code" : "kod",
          "valueString" : "MENIN"
        },
        {
          "code" : "kodl",
          "valueString" : "MENIN"
        },
        {
          "code" : "n24",
          "valueString" : "Meningy"
        },
        {
          "code" : "n32",
          "valueString" : "Meningy"
        },
        {
          "code" : "n32l",
          "valueString" : "Meningy"
        },
        {
          "code" : "n55",
          "valueString" : "Meningy"
        },
        {
          "code" : "n55l",
          "valueString" : "Meningy"
        },
        {
          "code" : "plati_od",
          "valueDateTime" : "2000-01-01T00:00:00Z"
        },
        {
          "code" : "poradi",
          "valueString" : "169000"
        }
      ]
    },
    {
      "code" : "MILK(H)",
      "display" : "Mléko (mateřské)",
      "property" : [
        {
          "code" : "klic",
          "valueString" : "MILK(H)"
        },
        {
          "code" : "kod",
          "valueString" : "MILK(H)"
        },
        {
          "code" : "kodl",
          "valueString" : "MILK(H)"
        },
        {
          "code" : "n24",
          "valueString" : "Mléko (mateřské)"
        },
        {
          "code" : "n32",
          "valueString" : "Mléko (mateřské)"
        },
        {
          "code" : "n32l",
          "valueString" : "Mléko (mateřské)"
        },
        {
          "code" : "n55",
          "valueString" : "Mléko (mateřské)"
        },
        {
          "code" : "n55l",
          "valueString" : "Mléko (mateřské)"
        },
        {
          "code" : "plati_od",
          "valueDateTime" : "2000-01-01T00:00:00Z"
        },
        {
          "code" : "poradi",
          "valueString" : "124000"
        }
      ]
    },
    {
      "code" : "MONO",
      "display" : "Monocyty",
      "property" : [
        {
          "code" : "klic",
          "valueString" : "MONO"
        },
        {
          "code" : "kod",
          "valueString" : "MONO"
        },
        {
          "code" : "kodl",
          "valueString" : "MONO"
        },
        {
          "code" : "n24",
          "valueString" : "Monocyty"
        },
        {
          "code" : "n32",
          "valueString" : "Monocyty"
        },
        {
          "code" : "n32l",
          "valueString" : "Monocyty"
        },
        {
          "code" : "n55",
          "valueString" : "Monocyty"
        },
        {
          "code" : "n55l",
          "valueString" : "Monocyty"
        },
        {
          "code" : "plati_od",
          "valueDateTime" : "2000-01-01T00:00:00Z"
        },
        {
          "code" : "poradi",
          "valueString" : "073500"
        }
      ]
    },
    {
      "code" : "MU",
      "display" : "Odpad močí za čas 1 minuty",
      "property" : [
        {
          "code" : "klic",
          "valueString" : "MU"
        },
        {
          "code" : "kod",
          "valueString" : "MU"
        },
        {
          "code" : "kodl",
          "valueString" : "MU"
        },
        {
          "code" : "n24",
          "valueString" : "mU"
        },
        {
          "code" : "n32",
          "valueString" : "Moč za minutu"
        },
        {
          "code" : "n32l",
          "valueString" : "Moč za minutu"
        },
        {
          "code" : "n55",
          "valueString" : "Odpad močí za čas 1 minuty"
        },
        {
          "code" : "n55l",
          "valueString" : "Odpad močí za čas 1 minuty"
        },
        {
          "code" : "plati_od",
          "valueDateTime" : "2000-01-01T00:00:00Z"
        },
        {
          "code" : "poradi",
          "valueString" : "084130"
        }
      ]
    },
    {
      "code" : "MU(OVN)",
      "display" : "Odpad močí z nočního sběru za čas 1 minuty",
      "property" : [
        {
          "code" : "klic",
          "valueString" : "MU(OVN)"
        },
        {
          "code" : "kod",
          "valueString" : "MU(OVN)"
        },
        {
          "code" : "kodl",
          "valueString" : "MU(OVN)"
        },
        {
          "code" : "n24",
          "valueString" : "mU(OVN)"
        },
        {
          "code" : "n32",
          "valueString" : "Moč (noční sběr) za minutu"
        },
        {
          "code" : "n32l",
          "valueString" : "Moč (noční sběr) za minutu"
        },
        {
          "code" : "n55",
          "valueString" : "Odpad močí z nočního sběru za čas 1 minuty"
        },
        {
          "code" : "n55l",
          "valueString" : "Odpad močí z nočního sběru za čas 1 minuty"
        },
        {
          "code" : "plati_od",
          "valueDateTime" : "2021-12-04T00:00:00Z"
        },
        {
          "code" : "poradi",
          "valueString" : "084160"
        }
      ]
    },
    {
      "code" : "MUCOSA",
      "display" : "Sliznice",
      "property" : [
        {
          "code" : "klic",
          "valueString" : "MUCOSA"
        },
        {
          "code" : "kod",
          "valueString" : "MUCOSA"
        },
        {
          "code" : "kodl",
          "valueString" : "MUCOSA"
        },
        {
          "code" : "n24",
          "valueString" : "Sliznice"
        },
        {
          "code" : "n32",
          "valueString" : "Sliznice"
        },
        {
          "code" : "n32l",
          "valueString" : "Sliznice"
        },
        {
          "code" : "n55",
          "valueString" : "Sliznice"
        },
        {
          "code" : "n55l",
          "valueString" : "Sliznice"
        },
        {
          "code" : "plati_od",
          "valueDateTime" : "2000-01-01T00:00:00Z"
        },
        {
          "code" : "poradi",
          "valueString" : "190000"
        }
      ]
    },
    {
      "code" : "MUSCLE",
      "display" : "Sval",
      "property" : [
        {
          "code" : "klic",
          "valueString" : "MUSCLE"
        },
        {
          "code" : "kod",
          "valueString" : "MUSCLE"
        },
        {
          "code" : "kodl",
          "valueString" : "MUSCLE"
        },
        {
          "code" : "n24",
          "valueString" : "Sval"
        },
        {
          "code" : "n32",
          "valueString" : "Sval"
        },
        {
          "code" : "n32l",
          "valueString" : "Sval"
        },
        {
          "code" : "n55",
          "valueString" : "Sval"
        },
        {
          "code" : "n55l",
          "valueString" : "Sval"
        },
        {
          "code" : "plati_od",
          "valueDateTime" : "2000-01-01T00:00:00Z"
        },
        {
          "code" : "poradi",
          "valueString" : "172000"
        }
      ]
    },
    {
      "code" : "NAIL",
      "display" : "Nehet",
      "property" : [
        {
          "code" : "klic",
          "valueString" : "NAIL"
        },
        {
          "code" : "kod",
          "valueString" : "NAIL"
        },
        {
          "code" : "kodl",
          "valueString" : "NAIL"
        },
        {
          "code" : "n24",
          "valueString" : "Nehet"
        },
        {
          "code" : "n32",
          "valueString" : "Nehet"
        },
        {
          "code" : "n32l",
          "valueString" : "Nehet"
        },
        {
          "code" : "n55",
          "valueString" : "Nehet"
        },
        {
          "code" : "n55l",
          "valueString" : "Nehet"
        },
        {
          "code" : "plati_od",
          "valueDateTime" : "2000-01-01T00:00:00Z"
        },
        {
          "code" : "poradi",
          "valueString" : "185000"
        }
      ]
    },
    {
      "code" : "NEUT",
      "display" : "Neutrofily",
      "property" : [
        {
          "code" : "klic",
          "valueString" : "NEUT"
        },
        {
          "code" : "kod",
          "valueString" : "NEUT"
        },
        {
          "code" : "kodl",
          "valueString" : "NEUT"
        },
        {
          "code" : "n24",
          "valueString" : "Neutrofily"
        },
        {
          "code" : "n32",
          "valueString" : "Neutrofily"
        },
        {
          "code" : "n32l",
          "valueString" : "Neutrofily"
        },
        {
          "code" : "n55",
          "valueString" : "Neutrofily"
        },
        {
          "code" : "n55l",
          "valueString" : "Neutrofily"
        },
        {
          "code" : "plati_od",
          "valueDateTime" : "2000-01-01T00:00:00Z"
        },
        {
          "code" : "poradi",
          "valueString" : "074000"
        }
      ]
    },
    {
      "code" : "OTHF",
      "display" : "Jiné tekutiny",
      "property" : [
        {
          "code" : "klic",
          "valueString" : "OTHF"
        },
        {
          "code" : "kod",
          "valueString" : "OTHF"
        },
        {
          "code" : "kodl",
          "valueString" : "OTHF"
        },
        {
          "code" : "n24",
          "valueString" : "Jiné tekutiny"
        },
        {
          "code" : "n32",
          "valueString" : "Jiné tekutiny"
        },
        {
          "code" : "n32l",
          "valueString" : "Jiné tekutiny"
        },
        {
          "code" : "n55",
          "valueString" : "Jiné tekutiny"
        },
        {
          "code" : "n55l",
          "valueString" : "Jiné tekutiny"
        },
        {
          "code" : "plati_od",
          "valueDateTime" : "2000-01-01T00:00:00Z"
        },
        {
          "code" : "poradi",
          "valueString" : "120000"
        }
      ]
    },
    {
      "code" : "PANC(CF)",
      "display" : "Tekutina cysty (pankreas)",
      "property" : [
        {
          "code" : "klic",
          "valueString" : "PANC(CF)"
        },
        {
          "code" : "kod",
          "valueString" : "PANC(CF)"
        },
        {
          "code" : "kodl",
          "valueString" : "PANC(CF)"
        },
        {
          "code" : "n24",
          "valueString" : "Tekutina cysty(pankreas)"
        },
        {
          "code" : "n32",
          "valueString" : "Tekutina cysty(pankreas)"
        },
        {
          "code" : "n32l",
          "valueString" : "Tekutina cysty(pankreas)"
        },
        {
          "code" : "n55",
          "valueString" : "Tekutina cysty (pankreas)"
        },
        {
          "code" : "n55l",
          "valueString" : "Tekutina cysty (pankreas)"
        },
        {
          "code" : "plati_od",
          "valueDateTime" : "2000-01-01T00:00:00Z"
        },
        {
          "code" : "poradi",
          "valueString" : "118000"
        }
      ]
    },
    {
      "code" : "PANCR",
      "display" : "Pankreas",
      "property" : [
        {
          "code" : "klic",
          "valueString" : "PANCR"
        },
        {
          "code" : "kod",
          "valueString" : "PANCR"
        },
        {
          "code" : "kodl",
          "valueString" : "PANCR"
        },
        {
          "code" : "n24",
          "valueString" : "Pankreas"
        },
        {
          "code" : "n32",
          "valueString" : "Pankreas"
        },
        {
          "code" : "n32l",
          "valueString" : "Pankreas"
        },
        {
          "code" : "n55",
          "valueString" : "Pankreas"
        },
        {
          "code" : "n55l",
          "valueString" : "Pankreas"
        },
        {
          "code" : "plati_od",
          "valueDateTime" : "2000-01-01T00:00:00Z"
        },
        {
          "code" : "poradi",
          "valueString" : "182000"
        }
      ]
    },
    {
      "code" : "PANF",
      "display" : "Pankreatická tekutina",
      "property" : [
        {
          "code" : "klic",
          "valueString" : "PANF"
        },
        {
          "code" : "kod",
          "valueString" : "PANF"
        },
        {
          "code" : "kodl",
          "valueString" : "PANF"
        },
        {
          "code" : "n24",
          "valueString" : "Pankreat. tekutina"
        },
        {
          "code" : "n32",
          "valueString" : "Pankreatická tekutina"
        },
        {
          "code" : "n32l",
          "valueString" : "Pankreatická tekutina"
        },
        {
          "code" : "n55",
          "valueString" : "Pankreatická tekutina"
        },
        {
          "code" : "n55l",
          "valueString" : "Pankreatická tekutina"
        },
        {
          "code" : "plati_od",
          "valueDateTime" : "2000-01-01T00:00:00Z"
        },
        {
          "code" : "poradi",
          "valueString" : "100000"
        }
      ]
    },
    {
      "code" : "PCF",
      "display" : "Perikardiální tekutina",
      "property" : [
        {
          "code" : "klic",
          "valueString" : "PCF"
        },
        {
          "code" : "kod",
          "valueString" : "PCF"
        },
        {
          "code" : "kodl",
          "valueString" : "PCF"
        },
        {
          "code" : "n24",
          "valueString" : "Perikard. tekutina"
        },
        {
          "code" : "n32",
          "valueString" : "Perikardiální tekutina"
        },
        {
          "code" : "n32l",
          "valueString" : "Perikardiální tekutina"
        },
        {
          "code" : "n55",
          "valueString" : "Perikardiální tekutina"
        },
        {
          "code" : "n55l",
          "valueString" : "Perikardiální tekutina"
        },
        {
          "code" : "plati_od",
          "valueDateTime" : "2000-01-01T00:00:00Z"
        },
        {
          "code" : "poradi",
          "valueString" : "105000"
        }
      ]
    },
    {
      "code" : "PITGL",
      "display" : "Hypofýza",
      "property" : [
        {
          "code" : "klic",
          "valueString" : "PITGL"
        },
        {
          "code" : "kod",
          "valueString" : "PITGL"
        },
        {
          "code" : "kodl",
          "valueString" : "PITGL"
        },
        {
          "code" : "n24",
          "valueString" : "Hypofýza"
        },
        {
          "code" : "n32",
          "valueString" : "Hypofýza"
        },
        {
          "code" : "n32l",
          "valueString" : "Hypofýza"
        },
        {
          "code" : "n55",
          "valueString" : "Hypofýza"
        },
        {
          "code" : "n55l",
          "valueString" : "Hypofýza"
        },
        {
          "code" : "plati_od",
          "valueDateTime" : "2000-01-01T00:00:00Z"
        },
        {
          "code" : "poradi",
          "valueString" : "168000"
        }
      ]
    },
    {
      "code" : "PLACEN",
      "display" : "Placenta",
      "property" : [
        {
          "code" : "klic",
          "valueString" : "PLACEN"
        },
        {
          "code" : "kod",
          "valueString" : "PLACEN"
        },
        {
          "code" : "kodl",
          "valueString" : "PLACEN"
        },
        {
          "code" : "n24",
          "valueString" : "Placenta"
        },
        {
          "code" : "n32",
          "valueString" : "Placenta"
        },
        {
          "code" : "n32l",
          "valueString" : "Placenta"
        },
        {
          "code" : "n55",
          "valueString" : "Placenta"
        },
        {
          "code" : "n55l",
          "valueString" : "Placenta"
        },
        {
          "code" : "plati_od",
          "valueDateTime" : "2000-01-01T00:00:00Z"
        },
        {
          "code" : "poradi",
          "valueString" : "163000"
        }
      ]
    },
    {
      "code" : "PLF",
      "display" : "Pleurální tekutina",
      "property" : [
        {
          "code" : "klic",
          "valueString" : "PLF"
        },
        {
          "code" : "kod",
          "valueString" : "PLF"
        },
        {
          "code" : "kodl",
          "valueString" : "PLF"
        },
        {
          "code" : "n24",
          "valueString" : "Pleurální tekutina"
        },
        {
          "code" : "n32",
          "valueString" : "Pleurální tekutina"
        },
        {
          "code" : "n32l",
          "valueString" : "Pleurální tekutina"
        },
        {
          "code" : "n55",
          "valueString" : "Pleurální tekutina"
        },
        {
          "code" : "n55l",
          "valueString" : "Pleurální tekutina"
        },
        {
          "code" : "plati_od",
          "valueDateTime" : "2000-01-01T00:00:00Z"
        },
        {
          "code" : "poradi",
          "valueString" : "104000"
        }
      ]
    },
    {
      "code" : "PLT",
      "display" : "Trombocyty",
      "property" : [
        {
          "code" : "klic",
          "valueString" : "PLT"
        },
        {
          "code" : "kod",
          "valueString" : "PLT"
        },
        {
          "code" : "kodl",
          "valueString" : "PLT"
        },
        {
          "code" : "n24",
          "valueString" : "Trombocyty"
        },
        {
          "code" : "n32",
          "valueString" : "Trombocyty"
        },
        {
          "code" : "n32l",
          "valueString" : "Trombocyty"
        },
        {
          "code" : "n55",
          "valueString" : "Trombocyty"
        },
        {
          "code" : "n55l",
          "valueString" : "Trombocyty"
        },
        {
          "code" : "plati_od",
          "valueDateTime" : "2000-01-01T00:00:00Z"
        },
        {
          "code" : "poradi",
          "valueString" : "082000"
        }
      ]
    },
    {
      "code" : "PRD(PT)",
      "display" : "Dialyzát peritoneální (z pacienta)",
      "property" : [
        {
          "code" : "klic",
          "valueString" : "PRD(PT)"
        },
        {
          "code" : "kod",
          "valueString" : "PRD(PT)"
        },
        {
          "code" : "kodl",
          "valueString" : "PRD(PT)"
        },
        {
          "code" : "n24",
          "valueString" : "Perit. dialyzát(Pt)"
        },
        {
          "code" : "n32",
          "valueString" : "Dialyzát perit. (Pt)"
        },
        {
          "code" : "n32l",
          "valueString" : "Dialyzát perit. (Pt)"
        },
        {
          "code" : "n55",
          "valueString" : "Dialyzát peritoneální (z pacienta)"
        },
        {
          "code" : "n55l",
          "valueString" : "Dialyzát peritoneální (z pacienta)"
        },
        {
          "code" : "plati_od",
          "valueDateTime" : "2000-01-01T00:00:00Z"
        },
        {
          "code" : "poradi",
          "valueString" : "121000"
        }
      ]
    },
    {
      "code" : "PRF",
      "display" : "Peritoneální tekutina",
      "property" : [
        {
          "code" : "klic",
          "valueString" : "PRF"
        },
        {
          "code" : "kod",
          "valueString" : "PRF"
        },
        {
          "code" : "kodl",
          "valueString" : "PRF"
        },
        {
          "code" : "n24",
          "valueString" : "Periton. tekutina"
        },
        {
          "code" : "n32",
          "valueString" : "Peritoneální tekutina"
        },
        {
          "code" : "n32l",
          "valueString" : "Peritoneální tekutina"
        },
        {
          "code" : "n55",
          "valueString" : "Peritoneální tekutina"
        },
        {
          "code" : "n55l",
          "valueString" : "Peritoneální tekutina"
        },
        {
          "code" : "plati_od",
          "valueDateTime" : "2000-01-01T00:00:00Z"
        },
        {
          "code" : "poradi",
          "valueString" : "101000"
        }
      ]
    },
    {
      "code" : "PT",
      "display" : "Pacient",
      "property" : [
        {
          "code" : "klic",
          "valueString" : "PT"
        },
        {
          "code" : "kod",
          "valueString" : "PT"
        },
        {
          "code" : "kodl",
          "valueString" : "PT"
        },
        {
          "code" : "n24",
          "valueString" : "Pt"
        },
        {
          "code" : "n32",
          "valueString" : "Pt"
        },
        {
          "code" : "n32l",
          "valueString" : "Pt"
        },
        {
          "code" : "n55",
          "valueString" : "Pacient"
        },
        {
          "code" : "n55l",
          "valueString" : "Pacient"
        },
        {
          "code" : "plati_od",
          "valueDateTime" : "2000-01-01T00:00:00Z"
        },
        {
          "code" : "poradi",
          "valueString" : "001000"
        }
      ]
    },
    {
      "code" : "PT(BA)",
      "display" : "Pacient (bilance)",
      "property" : [
        {
          "code" : "klic",
          "valueString" : "PT(BA)"
        },
        {
          "code" : "kod",
          "valueString" : "PT(BA)"
        },
        {
          "code" : "kodl",
          "valueString" : "PT(BA)"
        },
        {
          "code" : "n24",
          "valueString" : "Pt(bilance)"
        },
        {
          "code" : "n32",
          "valueString" : "Pt(bilance)"
        },
        {
          "code" : "n32l",
          "valueString" : "Pt(bilance)"
        },
        {
          "code" : "n55",
          "valueString" : "Pacient (bilance)"
        },
        {
          "code" : "n55l",
          "valueString" : "Pacient (bilance)"
        },
        {
          "code" : "plati_od",
          "valueDateTime" : "2000-01-01T00:00:00Z"
        },
        {
          "code" : "poradi",
          "valueString" : "237002"
        }
      ]
    },
    {
      "code" : "PT(CSS)",
      "display" : "Pacient (cerebrospinální systém)",
      "property" : [
        {
          "code" : "klic",
          "valueString" : "PT(CSS)"
        },
        {
          "code" : "kod",
          "valueString" : "PT(CSS)"
        },
        {
          "code" : "kodl",
          "valueString" : "PT(CSS)"
        },
        {
          "code" : "n24",
          "valueString" : "Pt(CSS)"
        },
        {
          "code" : "n32",
          "valueString" : "Pt(cereb. syst.)"
        },
        {
          "code" : "n32l",
          "valueString" : "Pt(cereb. syst.)"
        },
        {
          "code" : "n55",
          "valueString" : "Pacient (cerebrospinální systém)"
        },
        {
          "code" : "n55l",
          "valueString" : "Pacient (cerebrospinální systém)"
        },
        {
          "code" : "plati_od",
          "valueDateTime" : "2000-01-01T00:00:00Z"
        },
        {
          "code" : "poradi",
          "valueString" : "001050"
        }
      ]
    },
    {
      "code" : "PT(GAST)",
      "display" : "Pacient (žaludek)",
      "property" : [
        {
          "code" : "klic",
          "valueString" : "PT(GAST)"
        },
        {
          "code" : "kod",
          "valueString" : "PT(GAST)"
        },
        {
          "code" : "kodl",
          "valueString" : "PT(GAST)"
        },
        {
          "code" : "n24",
          "valueString" : "Pt(žaludek)"
        },
        {
          "code" : "n32",
          "valueString" : "Pt(žaludek)"
        },
        {
          "code" : "n32l",
          "valueString" : "Pt(žaludek)"
        },
        {
          "code" : "n55",
          "valueString" : "Pacient (žaludek)"
        },
        {
          "code" : "n55l",
          "valueString" : "Pacient (žaludek)"
        },
        {
          "code" : "plati_od",
          "valueDateTime" : "2000-01-01T00:00:00Z"
        },
        {
          "code" : "poradi",
          "valueString" : "001091"
        }
      ]
    },
    {
      "code" : "PT(INTE)",
      "display" : "Pacient (tenké střevo)",
      "property" : [
        {
          "code" : "klic",
          "valueString" : "PT(INTE)"
        },
        {
          "code" : "kod",
          "valueString" : "PT(INTE)"
        },
        {
          "code" : "kodl",
          "valueString" : "PT(INTE)"
        },
        {
          "code" : "n24",
          "valueString" : "Pt(střevo)"
        },
        {
          "code" : "n32",
          "valueString" : "Pt(střevo)"
        },
        {
          "code" : "n32l",
          "valueString" : "Pt(střevo)"
        },
        {
          "code" : "n55",
          "valueString" : "Pacient (tenké střevo)"
        },
        {
          "code" : "n55l",
          "valueString" : "Pacient (tenké střevo)"
        },
        {
          "code" : "plati_od",
          "valueDateTime" : "2000-01-01T00:00:00Z"
        },
        {
          "code" : "poradi",
          "valueString" : "001095"
        }
      ]
    },
    {
      "code" : "PT(KIDN)",
      "display" : "Pacient (ledviny)",
      "property" : [
        {
          "code" : "klic",
          "valueString" : "PT(KIDN)"
        },
        {
          "code" : "kod",
          "valueString" : "PT(KIDN)"
        },
        {
          "code" : "kodl",
          "valueString" : "PT(KIDN)"
        },
        {
          "code" : "n24",
          "valueString" : "Pt(ledviny)"
        },
        {
          "code" : "n32",
          "valueString" : "Pt(ledviny)"
        },
        {
          "code" : "n32l",
          "valueString" : "Pt(ledviny)"
        },
        {
          "code" : "n55",
          "valueString" : "Pacient (ledviny)"
        },
        {
          "code" : "n55l",
          "valueString" : "Pacient (ledviny)"
        },
        {
          "code" : "plati_od",
          "valueDateTime" : "2000-01-01T00:00:00Z"
        },
        {
          "code" : "poradi",
          "valueString" : "001040"
        }
      ]
    },
    {
      "code" : "PT(LIV)",
      "display" : "Pacient (játra)",
      "property" : [
        {
          "code" : "klic",
          "valueString" : "PT(LIV)"
        },
        {
          "code" : "kod",
          "valueString" : "PT(LIV)"
        },
        {
          "code" : "kodl",
          "valueString" : "PT(LIV)"
        },
        {
          "code" : "n24",
          "valueString" : "Pt(játra)"
        },
        {
          "code" : "n32",
          "valueString" : "Pt(játra)"
        },
        {
          "code" : "n32l",
          "valueString" : "Pt(játra)"
        },
        {
          "code" : "n55",
          "valueString" : "Pacient (játra)"
        },
        {
          "code" : "n55l",
          "valueString" : "Pacient (játra)"
        },
        {
          "code" : "plati_od",
          "valueDateTime" : "2000-01-01T00:00:00Z"
        },
        {
          "code" : "poradi",
          "valueString" : "001098"
        }
      ]
    },
    {
      "code" : "PT(PANC)",
      "display" : "Pacient (pankreas)",
      "property" : [
        {
          "code" : "klic",
          "valueString" : "PT(PANC)"
        },
        {
          "code" : "kod",
          "valueString" : "PT(PANC)"
        },
        {
          "code" : "kodl",
          "valueString" : "PT(PANC)"
        },
        {
          "code" : "n24",
          "valueString" : "Pt(pankreas)"
        },
        {
          "code" : "n32",
          "valueString" : "Pt(pankreas)"
        },
        {
          "code" : "n32l",
          "valueString" : "Pt(pankreas)"
        },
        {
          "code" : "n55",
          "valueString" : "Pacient (pankreas)"
        },
        {
          "code" : "n55l",
          "valueString" : "Pacient (pankreas)"
        },
        {
          "code" : "plati_od",
          "valueDateTime" : "2000-01-01T00:00:00Z"
        },
        {
          "code" : "poradi",
          "valueString" : "001093"
        }
      ]
    },
    {
      "code" : "PT(PRD)",
      "display" : "Pacient (dialyzát)",
      "property" : [
        {
          "code" : "klic",
          "valueString" : "PT(PRD)"
        },
        {
          "code" : "kod",
          "valueString" : "PT(PRD)"
        },
        {
          "code" : "kodl",
          "valueString" : "PT(PRD)"
        },
        {
          "code" : "n24",
          "valueString" : "Pt(PRD)"
        },
        {
          "code" : "n32",
          "valueString" : "Pt(dialyzát)"
        },
        {
          "code" : "n32l",
          "valueString" : "Pt(dialyzát)"
        },
        {
          "code" : "n55",
          "valueString" : "Pacient (dialyzát)"
        },
        {
          "code" : "n55l",
          "valueString" : "Pacient (dialyzát)"
        },
        {
          "code" : "plati_od",
          "valueDateTime" : "2021-12-05T00:00:00Z"
        },
        {
          "code" : "poradi",
          "valueString" : "001070"
        }
      ]
    },
    {
      "code" : "PT(PULM)",
      "display" : "Pacient (plíce)",
      "property" : [
        {
          "code" : "klic",
          "valueString" : "PT(PULM)"
        },
        {
          "code" : "kod",
          "valueString" : "PT(PULM)"
        },
        {
          "code" : "kodl",
          "valueString" : "PT(PULM)"
        },
        {
          "code" : "n24",
          "valueString" : "Pt(plíce)"
        },
        {
          "code" : "n32",
          "valueString" : "Pt(plíce)"
        },
        {
          "code" : "n32l",
          "valueString" : "Pt(plíce)"
        },
        {
          "code" : "n55",
          "valueString" : "Pacient (plíce)"
        },
        {
          "code" : "n55l",
          "valueString" : "Pacient (plíce)"
        },
        {
          "code" : "plati_od",
          "valueDateTime" : "2000-01-01T00:00:00Z"
        },
        {
          "code" : "poradi",
          "valueString" : "001080"
        }
      ]
    },
    {
      "code" : "PT(UTR)",
      "display" : "Pacient (močový trakt)",
      "property" : [
        {
          "code" : "klic",
          "valueString" : "PT(UTR)"
        },
        {
          "code" : "kod",
          "valueString" : "PT(UTR)"
        },
        {
          "code" : "kodl",
          "valueString" : "PT(UTR)"
        },
        {
          "code" : "n24",
          "valueString" : "Pt(močový trakt)"
        },
        {
          "code" : "n32",
          "valueString" : "Pt(močový trakt)"
        },
        {
          "code" : "n32l",
          "valueString" : "Pt(močový trakt)"
        },
        {
          "code" : "n55",
          "valueString" : "Pacient (močový trakt)"
        },
        {
          "code" : "n55l",
          "valueString" : "Pacient (močový trakt)"
        },
        {
          "code" : "plati_od",
          "valueDateTime" : "2000-01-01T00:00:00Z"
        },
        {
          "code" : "poradi",
          "valueString" : "001060"
        }
      ]
    },
    {
      "code" : "PUS",
      "display" : "Hnis",
      "property" : [
        {
          "code" : "klic",
          "valueString" : "PUS"
        },
        {
          "code" : "kod",
          "valueString" : "PUS"
        },
        {
          "code" : "kodl",
          "valueString" : "PUS"
        },
        {
          "code" : "n24",
          "valueString" : "Hnis"
        },
        {
          "code" : "n32",
          "valueString" : "Hnis"
        },
        {
          "code" : "n32l",
          "valueString" : "Hnis"
        },
        {
          "code" : "n55",
          "valueString" : "Hnis"
        },
        {
          "code" : "n55l",
          "valueString" : "Hnis"
        },
        {
          "code" : "plati_od",
          "valueDateTime" : "2000-01-01T00:00:00Z"
        },
        {
          "code" : "poradi",
          "valueString" : "150000"
        }
      ]
    },
    {
      "code" : "RECT(BI)",
      "display" : "Tkáň rekta získaná biopsií",
      "property" : [
        {
          "code" : "klic",
          "valueString" : "RECT(BI)"
        },
        {
          "code" : "kod",
          "valueString" : "RECT(BI)"
        },
        {
          "code" : "kodl",
          "valueString" : "RECT(BI)"
        },
        {
          "code" : "n24",
          "valueString" : "Rektum(biopsie)"
        },
        {
          "code" : "n32",
          "valueString" : "Rektum(biopsie)"
        },
        {
          "code" : "n32l",
          "valueString" : "Rektum(biopsie)"
        },
        {
          "code" : "n55",
          "valueString" : "Tkáň rekta získaná biopsií"
        },
        {
          "code" : "n55l",
          "valueString" : "Tkáň rekta získaná biopsií"
        },
        {
          "code" : "plati_od",
          "valueDateTime" : "2000-01-01T00:00:00Z"
        },
        {
          "code" : "poradi",
          "valueString" : "133000"
        }
      ]
    },
    {
      "code" : "RETC",
      "display" : "Retikulární buňky",
      "property" : [
        {
          "code" : "klic",
          "valueString" : "RETC"
        },
        {
          "code" : "kod",
          "valueString" : "RETC"
        },
        {
          "code" : "kodl",
          "valueString" : "RETC"
        },
        {
          "code" : "n24",
          "valueString" : "Retikulární buňky"
        },
        {
          "code" : "n32",
          "valueString" : "Retikulární buňky"
        },
        {
          "code" : "n32l",
          "valueString" : "Retikulární buňky"
        },
        {
          "code" : "n55",
          "valueString" : "Retikulární buňky"
        },
        {
          "code" : "n55l",
          "valueString" : "Retikulární buňky"
        },
        {
          "code" : "plati_od",
          "valueDateTime" : "2000-01-01T00:00:00Z"
        },
        {
          "code" : "poradi",
          "valueString" : "044550"
        }
      ]
    },
    {
      "code" : "RNA",
      "display" : "RNA",
      "property" : [
        {
          "code" : "klic",
          "valueString" : "RNA"
        },
        {
          "code" : "kod",
          "valueString" : "RNA"
        },
        {
          "code" : "kodl",
          "valueString" : "RNA"
        },
        {
          "code" : "n24",
          "valueString" : "RNA"
        },
        {
          "code" : "n32",
          "valueString" : "RNA"
        },
        {
          "code" : "n32l",
          "valueString" : "RNA"
        },
        {
          "code" : "n55",
          "valueString" : "RNA"
        },
        {
          "code" : "n55l",
          "valueString" : "RNA"
        },
        {
          "code" : "plati_od",
          "valueDateTime" : "2000-01-01T00:00:00Z"
        },
        {
          "code" : "poradi",
          "valueString" : "035550"
        }
      ]
    },
    {
      "code" : "RTC",
      "display" : "Retikulocyty",
      "property" : [
        {
          "code" : "klic",
          "valueString" : "RTC"
        },
        {
          "code" : "kod",
          "valueString" : "RTC"
        },
        {
          "code" : "kodl",
          "valueString" : "RTC"
        },
        {
          "code" : "n24",
          "valueString" : "Retikulocyty"
        },
        {
          "code" : "n32",
          "valueString" : "Retikulocyty"
        },
        {
          "code" : "n32l",
          "valueString" : "Retikulocyty"
        },
        {
          "code" : "n55",
          "valueString" : "Retikulocyty"
        },
        {
          "code" : "n55l",
          "valueString" : "Retikulocyty"
        },
        {
          "code" : "plati_od",
          "valueDateTime" : "2000-01-01T00:00:00Z"
        },
        {
          "code" : "poradi",
          "valueString" : "044556"
        }
      ]
    },
    {
      "code" : "SAL",
      "display" : "Sliny",
      "property" : [
        {
          "code" : "klic",
          "valueString" : "SAL"
        },
        {
          "code" : "kod",
          "valueString" : "SAL"
        },
        {
          "code" : "kodl",
          "valueString" : "SAL"
        },
        {
          "code" : "n24",
          "valueString" : "Sliny"
        },
        {
          "code" : "n32",
          "valueString" : "Sliny"
        },
        {
          "code" : "n32l",
          "valueString" : "Sliny"
        },
        {
          "code" : "n55",
          "valueString" : "Sliny"
        },
        {
          "code" : "n55l",
          "valueString" : "Sliny"
        },
        {
          "code" : "plati_od",
          "valueDateTime" : "2000-01-01T00:00:00Z"
        },
        {
          "code" : "poradi",
          "valueString" : "092000"
        }
      ]
    },
    {
      "code" : "SCNAS",
      "display" : "Sekret (nos)",
      "property" : [
        {
          "code" : "klic",
          "valueString" : "SCNAS"
        },
        {
          "code" : "kod",
          "valueString" : "SCNAS"
        },
        {
          "code" : "kodl",
          "valueString" : "SCNAS"
        },
        {
          "code" : "n24",
          "valueString" : "Sekret (nos)"
        },
        {
          "code" : "n32",
          "valueString" : "Sekret (nos)"
        },
        {
          "code" : "n32l",
          "valueString" : "Sekret (nos)"
        },
        {
          "code" : "n55",
          "valueString" : "Sekret (nos)"
        },
        {
          "code" : "n55l",
          "valueString" : "Sekret (nos)"
        },
        {
          "code" : "plati_od",
          "valueDateTime" : "2000-01-01T00:00:00Z"
        },
        {
          "code" : "poradi",
          "valueString" : "116500"
        }
      ]
    },
    {
      "code" : "SCR",
      "display" : "Sekret",
      "property" : [
        {
          "code" : "klic",
          "valueString" : "SCR"
        },
        {
          "code" : "kod",
          "valueString" : "SCR"
        },
        {
          "code" : "kodl",
          "valueString" : "SCR"
        },
        {
          "code" : "n24",
          "valueString" : "Sekret"
        },
        {
          "code" : "n32",
          "valueString" : "Sekret"
        },
        {
          "code" : "n32l",
          "valueString" : "Sekret"
        },
        {
          "code" : "n55",
          "valueString" : "Sekret"
        },
        {
          "code" : "n55l",
          "valueString" : "Sekret"
        },
        {
          "code" : "plati_od",
          "valueDateTime" : "2000-01-01T00:00:00Z"
        },
        {
          "code" : "poradi",
          "valueString" : "116000"
        }
      ]
    },
    {
      "code" : "SEMEN",
      "display" : "Ejakulát",
      "property" : [
        {
          "code" : "klic",
          "valueString" : "SEMEN"
        },
        {
          "code" : "kod",
          "valueString" : "SEMEN"
        },
        {
          "code" : "kodl",
          "valueString" : "SEMEN"
        },
        {
          "code" : "n24",
          "valueString" : "Ejakulát"
        },
        {
          "code" : "n32",
          "valueString" : "Ejakulát"
        },
        {
          "code" : "n32l",
          "valueString" : "Ejakulát"
        },
        {
          "code" : "n55",
          "valueString" : "Ejakulát"
        },
        {
          "code" : "n55l",
          "valueString" : "Ejakulát"
        },
        {
          "code" : "plati_od",
          "valueDateTime" : "2000-01-01T00:00:00Z"
        },
        {
          "code" : "poradi",
          "valueString" : "139000"
        }
      ]
    },
    {
      "code" : "SKIN",
      "display" : "Kůže",
      "property" : [
        {
          "code" : "klic",
          "valueString" : "SKIN"
        },
        {
          "code" : "kod",
          "valueString" : "SKIN"
        },
        {
          "code" : "kodl",
          "valueString" : "SKIN"
        },
        {
          "code" : "n24",
          "valueString" : "Kůže"
        },
        {
          "code" : "n32",
          "valueString" : "Kůže"
        },
        {
          "code" : "n32l",
          "valueString" : "Kůže"
        },
        {
          "code" : "n55",
          "valueString" : "Kůže"
        },
        {
          "code" : "n55l",
          "valueString" : "Kůže"
        },
        {
          "code" : "plati_od",
          "valueDateTime" : "2000-01-01T00:00:00Z"
        },
        {
          "code" : "poradi",
          "valueString" : "186000"
        }
      ]
    },
    {
      "code" : "SPCKARD",
      "display" : "Kanyla, katetr, elektroda, chlopeň",
      "property" : [
        {
          "code" : "klic",
          "valueString" : "SPCKARD"
        },
        {
          "code" : "kod",
          "valueString" : "SPCKARD"
        },
        {
          "code" : "kodl",
          "valueString" : "SPCKARD"
        },
        {
          "code" : "n24",
          "valueString" : "Kanyla,elektroda,chlopeň"
        },
        {
          "code" : "n32",
          "valueString" : "Kanyla, kat., elektroda, chlopeň"
        },
        {
          "code" : "n32l",
          "valueString" : "Kanyla, kat., elektroda, chlopeň"
        },
        {
          "code" : "n55",
          "valueString" : "Kanyla, katetr, elektroda, chlopeň"
        },
        {
          "code" : "n55l",
          "valueString" : "Kanyla, katetr, elektroda, chlopeň"
        },
        {
          "code" : "plati_od",
          "valueDateTime" : "2000-01-01T00:00:00Z"
        },
        {
          "code" : "poradi",
          "valueString" : "700000"
        }
      ]
    },
    {
      "code" : "SPCOFT",
      "display" : "Vzorek z oka",
      "property" : [
        {
          "code" : "klic",
          "valueString" : "SPCOFT"
        },
        {
          "code" : "kod",
          "valueString" : "SPCOFT"
        },
        {
          "code" : "kodl",
          "valueString" : "SPCOFT"
        },
        {
          "code" : "n24",
          "valueString" : "Vzorek z oka"
        },
        {
          "code" : "n32",
          "valueString" : "Vzorek z oka"
        },
        {
          "code" : "n32l",
          "valueString" : "Vzorek z oka"
        },
        {
          "code" : "n55",
          "valueString" : "Vzorek z oka"
        },
        {
          "code" : "n55l",
          "valueString" : "Vzorek z oka"
        },
        {
          "code" : "plati_od",
          "valueDateTime" : "2000-01-01T00:00:00Z"
        },
        {
          "code" : "poradi",
          "valueString" : "600700"
        }
      ]
    },
    {
      "code" : "SPCORL",
      "display" : "Vzorek z oboru ORL",
      "property" : [
        {
          "code" : "klic",
          "valueString" : "SPCORL"
        },
        {
          "code" : "kod",
          "valueString" : "SPCORL"
        },
        {
          "code" : "kodl",
          "valueString" : "SPCORL"
        },
        {
          "code" : "n24",
          "valueString" : "Vzorek z oboru ORL"
        },
        {
          "code" : "n32",
          "valueString" : "Vzorek z oboru ORL"
        },
        {
          "code" : "n32l",
          "valueString" : "Vzorek z oboru ORL"
        },
        {
          "code" : "n55",
          "valueString" : "Vzorek z oboru ORL"
        },
        {
          "code" : "n55l",
          "valueString" : "Vzorek z oboru ORL"
        },
        {
          "code" : "plati_od",
          "valueDateTime" : "2000-01-01T00:00:00Z"
        },
        {
          "code" : "poradi",
          "valueString" : "600200"
        }
      ]
    },
    {
      "code" : "SPCORT",
      "display" : "Vzorek z pohybového aparátu",
      "property" : [
        {
          "code" : "klic",
          "valueString" : "SPCORT"
        },
        {
          "code" : "kod",
          "valueString" : "SPCORT"
        },
        {
          "code" : "kodl",
          "valueString" : "SPCORT"
        },
        {
          "code" : "n24",
          "valueString" : "Vzorek z pohyb. aparátu"
        },
        {
          "code" : "n32",
          "valueString" : "Vzorek z pohybového aparátu"
        },
        {
          "code" : "n32l",
          "valueString" : "Vzorek z pohybového aparátu"
        },
        {
          "code" : "n55",
          "valueString" : "Vzorek z pohybového aparátu"
        },
        {
          "code" : "n55l",
          "valueString" : "Vzorek z pohybového aparátu"
        },
        {
          "code" : "plati_od",
          "valueDateTime" : "2000-01-01T00:00:00Z"
        },
        {
          "code" : "poradi",
          "valueString" : "600500"
        }
      ]
    },
    {
      "code" : "SPCPART",
      "display" : "Vzorek z oboru porodnictví",
      "property" : [
        {
          "code" : "klic",
          "valueString" : "SPCPART"
        },
        {
          "code" : "kod",
          "valueString" : "SPCPART"
        },
        {
          "code" : "kodl",
          "valueString" : "SPCPART"
        },
        {
          "code" : "n24",
          "valueString" : "Vzorek - porodnictví"
        },
        {
          "code" : "n32",
          "valueString" : "Vzorek z oboru porodnictví"
        },
        {
          "code" : "n32l",
          "valueString" : "Vzorek z oboru porodnictví"
        },
        {
          "code" : "n55",
          "valueString" : "Vzorek z oboru porodnictví"
        },
        {
          "code" : "n55l",
          "valueString" : "Vzorek z oboru porodnictví"
        },
        {
          "code" : "plati_od",
          "valueDateTime" : "2000-01-01T00:00:00Z"
        },
        {
          "code" : "poradi",
          "valueString" : "600400"
        }
      ]
    },
    {
      "code" : "SPCRESP",
      "display" : "Vzorek z dolních cest dýchacích",
      "property" : [
        {
          "code" : "klic",
          "valueString" : "SPCRESP"
        },
        {
          "code" : "kod",
          "valueString" : "SPCRESP"
        },
        {
          "code" : "kodl",
          "valueString" : "SPCRESP"
        },
        {
          "code" : "n24",
          "valueString" : "Vzorek z dol. cest dých."
        },
        {
          "code" : "n32",
          "valueString" : "Vzorek z dol. cest dýchacích"
        },
        {
          "code" : "n32l",
          "valueString" : "Vzorek z dol. cest dýchacích"
        },
        {
          "code" : "n55",
          "valueString" : "Vzorek z dolních cest dýchacích"
        },
        {
          "code" : "n55l",
          "valueString" : "Vzorek z dolních cest dýchacích"
        },
        {
          "code" : "plati_od",
          "valueDateTime" : "2000-01-01T00:00:00Z"
        },
        {
          "code" : "poradi",
          "valueString" : "600100"
        }
      ]
    },
    {
      "code" : "SPCURO",
      "display" : "Vzorek z urogenitálu",
      "property" : [
        {
          "code" : "klic",
          "valueString" : "SPCURO"
        },
        {
          "code" : "kod",
          "valueString" : "SPCURO"
        },
        {
          "code" : "kodl",
          "valueString" : "SPCURO"
        },
        {
          "code" : "n24",
          "valueString" : "Vzorek z urogenitálu"
        },
        {
          "code" : "n32",
          "valueString" : "Vzorek z urogenitálu"
        },
        {
          "code" : "n32l",
          "valueString" : "Vzorek z urogenitálu"
        },
        {
          "code" : "n55",
          "valueString" : "Vzorek z urogenitálu"
        },
        {
          "code" : "n55l",
          "valueString" : "Vzorek z urogenitálu"
        },
        {
          "code" : "plati_od",
          "valueDateTime" : "2000-01-01T00:00:00Z"
        },
        {
          "code" : "poradi",
          "valueString" : "600300"
        }
      ]
    },
    {
      "code" : "SPCVUL",
      "display" : "Vzorek z léze",
      "property" : [
        {
          "code" : "klic",
          "valueString" : "SPCVUL"
        },
        {
          "code" : "kod",
          "valueString" : "SPCVUL"
        },
        {
          "code" : "kodl",
          "valueString" : "SPCVUL"
        },
        {
          "code" : "n24",
          "valueString" : "Vzorek z léze"
        },
        {
          "code" : "n32",
          "valueString" : "Vzorek z léze"
        },
        {
          "code" : "n32l",
          "valueString" : "Vzorek z léze"
        },
        {
          "code" : "n55",
          "valueString" : "Vzorek z léze"
        },
        {
          "code" : "n55l",
          "valueString" : "Vzorek z léze"
        },
        {
          "code" : "plati_od",
          "valueDateTime" : "2000-01-01T00:00:00Z"
        },
        {
          "code" : "poradi",
          "valueString" : "600600"
        }
      ]
    },
    {
      "code" : "SPLEEN",
      "display" : "Slezina",
      "property" : [
        {
          "code" : "klic",
          "valueString" : "SPLEEN"
        },
        {
          "code" : "kod",
          "valueString" : "SPLEEN"
        },
        {
          "code" : "kodl",
          "valueString" : "SPLEEN"
        },
        {
          "code" : "n24",
          "valueString" : "Slezina"
        },
        {
          "code" : "n32",
          "valueString" : "Slezina"
        },
        {
          "code" : "n32l",
          "valueString" : "Slezina"
        },
        {
          "code" : "n55",
          "valueString" : "Slezina"
        },
        {
          "code" : "n55l",
          "valueString" : "Slezina"
        },
        {
          "code" : "plati_od",
          "valueDateTime" : "2000-01-01T00:00:00Z"
        },
        {
          "code" : "poradi",
          "valueString" : "173000"
        }
      ]
    },
    {
      "code" : "STF",
      "display" : "Žaludeční tekutina",
      "property" : [
        {
          "code" : "klic",
          "valueString" : "STF"
        },
        {
          "code" : "kod",
          "valueString" : "STF"
        },
        {
          "code" : "kodl",
          "valueString" : "STF"
        },
        {
          "code" : "n24",
          "valueString" : "Žaludeční tekut."
        },
        {
          "code" : "n32",
          "valueString" : "Žaludeční tekutina"
        },
        {
          "code" : "n32l",
          "valueString" : "Žaludeční tekutina"
        },
        {
          "code" : "n55",
          "valueString" : "Žaludeční tekutina"
        },
        {
          "code" : "n55l",
          "valueString" : "Žaludeční tekutina"
        },
        {
          "code" : "plati_od",
          "valueDateTime" : "2000-01-01T00:00:00Z"
        },
        {
          "code" : "poradi",
          "valueString" : "093000"
        }
      ]
    },
    {
      "code" : "STOM(BI)",
      "display" : "Tkáň žaludku získaná biopsií",
      "property" : [
        {
          "code" : "klic",
          "valueString" : "STOM(BI)"
        },
        {
          "code" : "kod",
          "valueString" : "STOM(BI)"
        },
        {
          "code" : "kodl",
          "valueString" : "STOM(BI)"
        },
        {
          "code" : "n24",
          "valueString" : "Žaludek(biopsie)"
        },
        {
          "code" : "n32",
          "valueString" : "Žaludek(biopsie)"
        },
        {
          "code" : "n32l",
          "valueString" : "Žaludek(biopsie)"
        },
        {
          "code" : "n55",
          "valueString" : "Tkáň žaludku získaná biopsií"
        },
        {
          "code" : "n55l",
          "valueString" : "Tkáň žaludku získaná biopsií"
        },
        {
          "code" : "plati_od",
          "valueDateTime" : "2000-01-01T00:00:00Z"
        },
        {
          "code" : "poradi",
          "valueString" : "136000"
        }
      ]
    },
    {
      "code" : "STOMACH",
      "display" : "Žaludek",
      "property" : [
        {
          "code" : "klic",
          "valueString" : "STOMACH"
        },
        {
          "code" : "kod",
          "valueString" : "STOMACH"
        },
        {
          "code" : "kodl",
          "valueString" : "STOMACH"
        },
        {
          "code" : "n24",
          "valueString" : "Žaludek"
        },
        {
          "code" : "n32",
          "valueString" : "Žaludek"
        },
        {
          "code" : "n32l",
          "valueString" : "Žaludek"
        },
        {
          "code" : "n55",
          "valueString" : "Žaludek"
        },
        {
          "code" : "n55l",
          "valueString" : "Žaludek"
        },
        {
          "code" : "plati_od",
          "valueDateTime" : "2000-01-01T00:00:00Z"
        },
        {
          "code" : "poradi",
          "valueString" : "174000"
        }
      ]
    },
    {
      "code" : "SW",
      "display" : "Pot",
      "property" : [
        {
          "code" : "klic",
          "valueString" : "SW"
        },
        {
          "code" : "kod",
          "valueString" : "SW"
        },
        {
          "code" : "kodl",
          "valueString" : "SW"
        },
        {
          "code" : "n24",
          "valueString" : "Pot"
        },
        {
          "code" : "n32",
          "valueString" : "Pot"
        },
        {
          "code" : "n32l",
          "valueString" : "Pot"
        },
        {
          "code" : "n55",
          "valueString" : "Pot"
        },
        {
          "code" : "n55l",
          "valueString" : "Pot"
        },
        {
          "code" : "plati_od",
          "valueDateTime" : "2000-01-01T00:00:00Z"
        },
        {
          "code" : "poradi",
          "valueString" : "088000"
        }
      ]
    },
    {
      "code" : "TEAR",
      "display" : "Slzy",
      "property" : [
        {
          "code" : "klic",
          "valueString" : "TEAR"
        },
        {
          "code" : "kod",
          "valueString" : "TEAR"
        },
        {
          "code" : "kodl",
          "valueString" : "TEAR"
        },
        {
          "code" : "n24",
          "valueString" : "Slzy"
        },
        {
          "code" : "n32",
          "valueString" : "Slzy"
        },
        {
          "code" : "n32l",
          "valueString" : "Slzy"
        },
        {
          "code" : "n55",
          "valueString" : "Slzy"
        },
        {
          "code" : "n55l",
          "valueString" : "Slzy"
        },
        {
          "code" : "plati_od",
          "valueDateTime" : "2000-01-01T00:00:00Z"
        },
        {
          "code" : "poradi",
          "valueString" : "114000"
        }
      ]
    },
    {
      "code" : "TISSUE",
      "display" : "Tkáň",
      "property" : [
        {
          "code" : "klic",
          "valueString" : "TISSUE"
        },
        {
          "code" : "kod",
          "valueString" : "TISSUE"
        },
        {
          "code" : "kodl",
          "valueString" : "TISSUE"
        },
        {
          "code" : "n24",
          "valueString" : "Tkáň"
        },
        {
          "code" : "n32",
          "valueString" : "Tkáň"
        },
        {
          "code" : "n32l",
          "valueString" : "Tkáň"
        },
        {
          "code" : "n55",
          "valueString" : "Tkáň"
        },
        {
          "code" : "n55l",
          "valueString" : "Tkáň"
        },
        {
          "code" : "plati_od",
          "valueDateTime" : "2000-01-01T00:00:00Z"
        },
        {
          "code" : "poradi",
          "valueString" : "158000"
        }
      ]
    },
    {
      "code" : "TRANSPL",
      "display" : "Transplantát",
      "property" : [
        {
          "code" : "klic",
          "valueString" : "TRANSPL"
        },
        {
          "code" : "kod",
          "valueString" : "TRANSPL"
        },
        {
          "code" : "kodl",
          "valueString" : "TRANSPL"
        },
        {
          "code" : "n24",
          "valueString" : "Transplantát"
        },
        {
          "code" : "n32",
          "valueString" : "Transplantát"
        },
        {
          "code" : "n32l",
          "valueString" : "Transplantát"
        },
        {
          "code" : "n55",
          "valueString" : "Transplantát"
        },
        {
          "code" : "n55l",
          "valueString" : "Transplantát"
        },
        {
          "code" : "plati_od",
          "valueDateTime" : "2000-01-01T00:00:00Z"
        },
        {
          "code" : "poradi",
          "valueString" : "192000"
        }
      ]
    },
    {
      "code" : "TROMB",
      "display" : "Trombus",
      "property" : [
        {
          "code" : "klic",
          "valueString" : "TROMB"
        },
        {
          "code" : "kod",
          "valueString" : "TROMB"
        },
        {
          "code" : "kodl",
          "valueString" : "TROMB"
        },
        {
          "code" : "n24",
          "valueString" : "Trombus"
        },
        {
          "code" : "n32",
          "valueString" : "Trombus"
        },
        {
          "code" : "n32l",
          "valueString" : "Trombus"
        },
        {
          "code" : "n55",
          "valueString" : "Trombus"
        },
        {
          "code" : "n55l",
          "valueString" : "Trombus"
        },
        {
          "code" : "plati_od",
          "valueDateTime" : "2000-01-01T00:00:00Z"
        },
        {
          "code" : "poradi",
          "valueString" : "152000"
        }
      ]
    },
    {
      "code" : "U",
      "display" : "Moč",
      "property" : [
        {
          "code" : "klic",
          "valueString" : "U"
        },
        {
          "code" : "kod",
          "valueString" : "U"
        },
        {
          "code" : "kodl",
          "valueString" : "U"
        },
        {
          "code" : "n24",
          "valueString" : "U"
        },
        {
          "code" : "n32",
          "valueString" : "U"
        },
        {
          "code" : "n32l",
          "valueString" : "U"
        },
        {
          "code" : "n55",
          "valueString" : "Moč"
        },
        {
          "code" : "n55l",
          "valueString" : "Moč"
        },
        {
          "code" : "plati_od",
          "valueDateTime" : "2000-01-01T00:00:00Z"
        },
        {
          "code" : "poradi",
          "valueString" : "084000"
        }
      ]
    },
    {
      "code" : "U(OVN)",
      "display" : "Moč (noční sběr)",
      "property" : [
        {
          "code" : "klic",
          "valueString" : "U(OVN)"
        },
        {
          "code" : "kod",
          "valueString" : "U(OVN)"
        },
        {
          "code" : "kodl",
          "valueString" : "U(OVN)"
        },
        {
          "code" : "n24",
          "valueString" : "U (noční sběr)"
        },
        {
          "code" : "n32",
          "valueString" : "U (noční sběr)"
        },
        {
          "code" : "n32l",
          "valueString" : "U (noční sběr)"
        },
        {
          "code" : "n55",
          "valueString" : "Moč (noční sběr)"
        },
        {
          "code" : "n55l",
          "valueString" : "Moč (noční sběr)"
        },
        {
          "code" : "plati_od",
          "valueDateTime" : "2021-12-04T00:00:00Z"
        },
        {
          "code" : "poradi",
          "valueString" : "084010"
        }
      ]
    },
    {
      "code" : "U(RND)",
      "display" : "Moč (náhodný vzorek)",
      "property" : [
        {
          "code" : "klic",
          "valueString" : "U(RND)"
        },
        {
          "code" : "kod",
          "valueString" : "U(RND)"
        },
        {
          "code" : "kodl",
          "valueString" : "U(RND)"
        },
        {
          "code" : "n24",
          "valueString" : "Moč (náhodný vzorek)"
        },
        {
          "code" : "n32",
          "valueString" : "Moč (náhodný vzorek)"
        },
        {
          "code" : "n32l",
          "valueString" : "Moč (náhodný vzorek)"
        },
        {
          "code" : "n55",
          "valueString" : "Moč (náhodný vzorek)"
        },
        {
          "code" : "n55l",
          "valueString" : "Moč (náhodný vzorek)"
        },
        {
          "code" : "plati_od",
          "valueDateTime" : "2000-01-01T00:00:00Z"
        },
        {
          "code" : "poradi",
          "valueString" : "084050"
        }
      ]
    },
    {
      "code" : "UNSF",
      "display" : "Tekutina blíže nespecifikovaná",
      "property" : [
        {
          "code" : "klic",
          "valueString" : "UNSF"
        },
        {
          "code" : "kod",
          "valueString" : "UNSF"
        },
        {
          "code" : "kodl",
          "valueString" : "UNSF"
        },
        {
          "code" : "n24",
          "valueString" : "Nesp. tekutina"
        },
        {
          "code" : "n32",
          "valueString" : "Nespecifikovaná tekutina"
        },
        {
          "code" : "n32l",
          "valueString" : "Nespecifikovaná tekutina"
        },
        {
          "code" : "n55",
          "valueString" : "Tekutina blíže nespecifikovaná"
        },
        {
          "code" : "n55l",
          "valueString" : "Tekutina blíže nespecifikovaná"
        },
        {
          "code" : "plati_od",
          "valueDateTime" : "2000-01-01T00:00:00Z"
        },
        {
          "code" : "poradi",
          "valueString" : "106000"
        }
      ]
    },
    {
      "code" : "UNSFDR",
      "display" : "Tekutina blíže nespecifikovaná, získaná drénem",
      "property" : [
        {
          "code" : "klic",
          "valueString" : "UNSFDR"
        },
        {
          "code" : "kod",
          "valueString" : "UNSFDR"
        },
        {
          "code" : "kodl",
          "valueString" : "UNSFDR"
        },
        {
          "code" : "n24",
          "valueString" : "Nesp.tekut. (Drén)"
        },
        {
          "code" : "n32",
          "valueString" : "Nespecif. tekutina (Drén)"
        },
        {
          "code" : "n32l",
          "valueString" : "Nespecif. tekutina (Drén)"
        },
        {
          "code" : "n55",
          "valueString" : "Tekutina blíže nespecifikovaná, získaná drénem"
        },
        {
          "code" : "n55l",
          "valueString" : "Tekutina blíže nespecifikovaná, získaná drénem"
        },
        {
          "code" : "plati_od",
          "valueDateTime" : "2000-01-01T00:00:00Z"
        },
        {
          "code" : "poradi",
          "valueString" : "108000"
        }
      ]
    },
    {
      "code" : "UNSFP",
      "display" : "Tekutina blíže nespecifikovaná, získaná punkcí",
      "property" : [
        {
          "code" : "klic",
          "valueString" : "UNSFP"
        },
        {
          "code" : "kod",
          "valueString" : "UNSFP"
        },
        {
          "code" : "kodl",
          "valueString" : "UNSFP"
        },
        {
          "code" : "n24",
          "valueString" : "Nesp.tekut.(Punkce)"
        },
        {
          "code" : "n32",
          "valueString" : "Nespecif. tekutina(Punkce)"
        },
        {
          "code" : "n32l",
          "valueString" : "Nespecif. tekutina(Punkce)"
        },
        {
          "code" : "n55",
          "valueString" : "Tekutina blíže nespecifikovaná, získaná punkcí"
        },
        {
          "code" : "n55l",
          "valueString" : "Tekutina blíže nespecifikovaná, získaná punkcí"
        },
        {
          "code" : "plati_od",
          "valueDateTime" : "2000-01-01T00:00:00Z"
        },
        {
          "code" : "poradi",
          "valueString" : "107000"
        }
      ]
    },
    {
      "code" : "UNSFS",
      "display" : "Tekutina blíže nespecifikovaná, získaná sondou",
      "property" : [
        {
          "code" : "klic",
          "valueString" : "UNSFS"
        },
        {
          "code" : "kod",
          "valueString" : "UNSFS"
        },
        {
          "code" : "kodl",
          "valueString" : "UNSFS"
        },
        {
          "code" : "n24",
          "valueString" : "Nesp. tekut.(Sonda)"
        },
        {
          "code" : "n32",
          "valueString" : "Nespecif. tekutina(Sonda)"
        },
        {
          "code" : "n32l",
          "valueString" : "Nespecif. tekutina(Sonda)"
        },
        {
          "code" : "n55",
          "valueString" : "Tekutina blíže nespecifikovaná, získaná sondou"
        },
        {
          "code" : "n55l",
          "valueString" : "Tekutina blíže nespecifikovaná, získaná sondou"
        },
        {
          "code" : "plati_od",
          "valueDateTime" : "2000-01-01T00:00:00Z"
        },
        {
          "code" : "poradi",
          "valueString" : "109500"
        }
      ]
    },
    {
      "code" : "VAGBLOOD",
      "display" : "Krev (vaginální)",
      "property" : [
        {
          "code" : "klic",
          "valueString" : "VAGBLOOD"
        },
        {
          "code" : "kod",
          "valueString" : "VAGBLOOD"
        },
        {
          "code" : "kodl",
          "valueString" : "VAGBLOOD"
        },
        {
          "code" : "n24",
          "valueString" : "Krev (vaginální)"
        },
        {
          "code" : "n32",
          "valueString" : "Krev (vaginální)"
        },
        {
          "code" : "n32l",
          "valueString" : "Krev (vaginální)"
        },
        {
          "code" : "n55",
          "valueString" : "Krev (vaginální)"
        },
        {
          "code" : "n55l",
          "valueString" : "Krev (vaginální)"
        },
        {
          "code" : "plati_od",
          "valueDateTime" : "2000-01-01T00:00:00Z"
        },
        {
          "code" : "poradi",
          "valueString" : "010601"
        }
      ]
    },
    {
      "code" : "VAGCERPO",
      "display" : "Pool vaginálního cervixu",
      "property" : [
        {
          "code" : "klic",
          "valueString" : "VAGCERPO"
        },
        {
          "code" : "kod",
          "valueString" : "VAGCERPO"
        },
        {
          "code" : "kodl",
          "valueString" : "VAGCERPO"
        },
        {
          "code" : "n24",
          "valueString" : "Pool vaginál. cervixu"
        },
        {
          "code" : "n32",
          "valueString" : "Pool vaginálního cervixu"
        },
        {
          "code" : "n32l",
          "valueString" : "Pool vaginálního cervixu"
        },
        {
          "code" : "n55",
          "valueString" : "Pool vaginálního cervixu"
        },
        {
          "code" : "n55l",
          "valueString" : "Pool vaginálního cervixu"
        },
        {
          "code" : "plati_od",
          "valueDateTime" : "2000-01-01T00:00:00Z"
        },
        {
          "code" : "poradi",
          "valueString" : "143000"
        }
      ]
    },
    {
      "code" : "VAGCONT",
      "display" : "Vaginální obsah",
      "property" : [
        {
          "code" : "klic",
          "valueString" : "VAGCONT"
        },
        {
          "code" : "kod",
          "valueString" : "VAGCONT"
        },
        {
          "code" : "kodl",
          "valueString" : "VAGCONT"
        },
        {
          "code" : "n24",
          "valueString" : "Vaginální obsah"
        },
        {
          "code" : "n32",
          "valueString" : "Vaginální obsah"
        },
        {
          "code" : "n32l",
          "valueString" : "Vaginální obsah"
        },
        {
          "code" : "n55",
          "valueString" : "Vaginální obsah"
        },
        {
          "code" : "n55l",
          "valueString" : "Vaginální obsah"
        },
        {
          "code" : "plati_od",
          "valueDateTime" : "2000-01-01T00:00:00Z"
        },
        {
          "code" : "poradi",
          "valueString" : "142000"
        }
      ]
    }
  ]
}

```
