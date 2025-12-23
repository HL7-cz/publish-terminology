# Codesystem of Health Insurance Companies - HL7 Czech Terminology Implementation Guide v0.2.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Codesystem of Health Insurance Companies**

## CodeSystem: Codesystem of Health Insurance Companies 

| | | |
| :--- | :--- | :--- |
| *Official URL*:https://ncez.mzcr.cz/terminology/CodeSystem/healthInsuranceCompanyCode | *Version*:0.2.0 | |
| *Standards status:*[Trial-use](http://hl7.org/fhir/R4/versions.html#std-process) | [Maturity Level](http://hl7.org/fhir/versions.html#maturity): 2 | *Computable Name*:CS_HealthInsuranceCompanyCode |

 
National codes of health insurance companies. 

 This Code system is referenced in the content logical definition of the following value sets: 

* [HealthInsuranceCompanyCode](ValueSet-healthInsuranceCompanyCode.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "healthInsuranceCompanyCode",
  "language" : "cs",
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-fmm",
      "valueInteger" : 2
    },
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
      "valueCode" : "trial-use"
    }
  ],
  "url" : "https://ncez.mzcr.cz/terminology/CodeSystem/healthInsuranceCompanyCode",
  "version" : "0.2.0",
  "name" : "CS_HealthInsuranceCompanyCode",
  "title" : "Codesystem of Health Insurance Companies",
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
  "description" : "National codes of health insurance companies.",
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
  "count" : 32,
  "concept" : [
    {
      "code" : "111",
      "display" : "Všeobecná zdravotní pojišťovna ČR"
    },
    {
      "code" : "201",
      "display" : "Vojenská zdravotní pojišťovna ČR"
    },
    {
      "code" : "202",
      "display" : "Hornická zaměstnanecká zdrav.pojišťovna"
    },
    {
      "code" : "203",
      "display" : "GRÁL-Železniční zdravotní pojišťovna"
    },
    {
      "code" : "204",
      "display" : "Pojišťovna GARANT-HOSPITAL"
    },
    {
      "code" : "205",
      "display" : "Česká průmyslová zdravotní pojišťovna"
    },
    {
      "code" : "206",
      "display" : "Moravská zdravotní pojišťovna"
    },
    {
      "code" : "207",
      "display" : "Obor.zdravot.poj.zam.bank,pojiš. a stav."
    },
    {
      "code" : "208",
      "display" : "Zaměstnanecká zdravotní pojišťov.ATLAS"
    },
    {
      "code" : "209",
      "display" : "Zaměstnanecká pojišťovna ŠKODA"
    },
    {
      "code" : "210",
      "display" : "Zdravotní pokladna škodováků"
    },
    {
      "code" : "211",
      "display" : "Zdravotní pojišťovna minister.vnitra ČR"
    },
    {
      "code" : "212",
      "display" : "STAZPO - Stavební zdravotní pojišťovna"
    },
    {
      "code" : "213",
      "display" : "Revírní bratrská pokladna, zdravot.poj."
    },
    {
      "code" : "214",
      "display" : "Regionální zdravotní pojišťovna REZAPO"
    },
    {
      "code" : "215",
      "display" : "IMPULS-Moravskoslezská zdravotní pojišť."
    },
    {
      "code" : "216",
      "display" : "Sdruž.dopr.a zem.-podnik.zdr.poj.SALVUS"
    },
    {
      "code" : "217",
      "display" : "Zdravotní pojišťovna METAL-ALIANCE"
    },
    {
      "code" : "218",
      "display" : "Zdravotní pojišťovna CRYSTAL"
    },
    {
      "code" : "219",
      "display" : "Prostějovská zdravotní pojišťovna"
    },
    {
      "code" : "220",
      "display" : "Zaměstnanecká zdravot.pojišťovna PRIMA"
    },
    {
      "code" : "221",
      "display" : "Mendlova zdravotní pojišťovna"
    },
    {
      "code" : "222",
      "display" : "Česká národní zdravotní pojišťovna"
    },
    {
      "code" : "223",
      "display" : "Zemědělsko-potravinářská zdrav.pojišť."
    },
    {
      "code" : "224",
      "display" : "Zaměstnanecká zdravotní pojišťovna RADIX"
    },
    {
      "code" : "225",
      "display" : "Zdravotní pojišťovna SPORT"
    },
    {
      "code" : "226",
      "display" : "Zdrav.pojišť.chemie,zdravot. a farmacie"
    },
    {
      "code" : "227",
      "display" : "Zdravotní pojišťovna AGEL"
    },
    {
      "code" : "228",
      "display" : "Zdravotní pojišťovna Média"
    },
    {
      "code" : "333",
      "display" : "Všeobecná zdravotní pojišťovna - pojištění cizinců"
    },
    {
      "code" : "800",
      "display" : "Vládní stipendista - hradí MZ ČR"
    },
    {
      "code" : "000",
      "display" : "Bez smlouvy se zdravotní pojišťovnou"
    }
  ]
}

```
