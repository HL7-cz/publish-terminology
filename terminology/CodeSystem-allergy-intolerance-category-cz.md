# Allergy Intolerance Category (CZ supplement) - HL7 Czech Terminology Implementation Guide v0.2.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Allergy Intolerance Category (CZ supplement)**

## CodeSystem: Allergy Intolerance Category (CZ supplement) 

| | |
| :--- | :--- |
| *Official URL*:https://hl7.cz/terminology/CodeSystem/allergy-intolerance-category-cz | *Version*:0.2.0 |
| Active as of 2025-12-12 | *Computable Name*:AllergyIntoleranceCategory |

 
Allergy Intolerance Category (CZ Code system supplement) 

 This Code system is referenced in the content logical definition of the following value sets: 

* [AllergyIntoleranceCategory](ValueSet-allergy-intolerance-category-cz.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "allergy-intolerance-category-cz",
  "url" : "https://hl7.cz/terminology/CodeSystem/allergy-intolerance-category-cz",
  "version" : "0.2.0",
  "name" : "AllergyIntoleranceCategory",
  "title" : "Allergy Intolerance Category (CZ supplement)",
  "status" : "active",
  "experimental" : false,
  "date" : "2025-12-12T16:17:42.700644Z",
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
  "description" : "Allergy Intolerance Category (CZ Code system supplement)",
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
  "supplements" : "http://hl7.org/fhir/allergy-intolerance-category",
  "concept" : [
    {
      "code" : "biologic",
      "display" : "biologický",
      "definition" : "Přípravek syntetizovaný z živých organismů nebo jejich produktů, zejména lidských nebo živočišných bílkovin, jako jsou hormony nebo antitoxiny, který se používá jako diagnostické, preventivní nebo terapeutické činidlo. Mezi biologické léky patří například: vakcíny; alergenní extrakty, které se používají jak k diagnostice, tak k léčbě (například alergenové injekce); genové terapie; buněčné terapie. Existují i jiné biologické produkty, jako jsou tkáně, které obvykle nejsou spojovány s alergiemi.",
      "designation" : [
        {
          "language" : "en",
          "use" : {
            "code" : "definition"
          },
          "value" : "A preparation that is synthesized from living organisms or their products, especially a human or animal protein, such as a hormone or antitoxin, that is used as a diagnostic, preventive, or therapeutic agent. Examples of biologic medications include: vaccines; allergenic extracts, which are used for both diagnosis and treatment (for example, allergy shots); gene therapies; cellular therapies.  There are other biologic products, such as tissues, which are not typically associated with allergies."
        },
        {
          "language" : "en",
          "use" : {
            "code" : "display"
          },
          "value" : "Biologic"
        }
      ]
    },
    {
      "code" : "environment",
      "display" : "prostředí",
      "definition" : "Jakékoli látky, které se vyskytují v životním prostředí, včetně látek, které dosud nebyly klasifikovány jako potraviny, léky nebo biologické látky.",
      "designation" : [
        {
          "language" : "en",
          "use" : {
            "code" : "definition"
          },
          "value" : "Any substances that are encountered in the environment, including any substance not already classified as food, medication, or biologic."
        },
        {
          "language" : "en",
          "use" : {
            "code" : "display"
          },
          "value" : "Environment"
        }
      ]
    },
    {
      "code" : "food",
      "display" : "potravina",
      "definition" : "Jakákoli látka konzumovaná za účelem výživové podpory organismu.",
      "designation" : [
        {
          "language" : "en",
          "use" : {
            "code" : "definition"
          },
          "value" : "Any substance consumed to provide nutritional support for the body."
        },
        {
          "language" : "en",
          "use" : {
            "code" : "display"
          },
          "value" : "Food"
        }
      ]
    },
    {
      "code" : "medication",
      "display" : "léčivo",
      "definition" : "Látky podávané za účelem dosažení fyziologického účinku.",
      "designation" : [
        {
          "language" : "en",
          "use" : {
            "code" : "definition"
          },
          "value" : "Substances administered to achieve a physiological effect."
        },
        {
          "language" : "en",
          "use" : {
            "code" : "display"
          },
          "value" : "Medication"
        }
      ]
    }
  ]
}

```
