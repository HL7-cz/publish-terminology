# Allergy Intolerance Category (CZ supplement) - HL7 Czech Terminology Implementation Guide v0.3.0

## CodeSystem: Allergy Intolerance Category (CZ supplement) 

 
Allergy Intolerance Category (CZ Code system supplement) 

This Code system is referenced in the definition of the following value sets:

* [AllergyIntoleranceCategory](ValueSet-allergy-intolerance-category-cz.md)

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "allergy-intolerance-category-cz",
  "url" : "https://hl7.cz/terminology/CodeSystem/allergy-intolerance-category-cz",
  "version" : "4.0.1",
  "name" : "AllergyIntoleranceCategoryCz",
  "title" : "Allergy Intolerance Category (CZ supplement)",
  "status" : "active",
  "experimental" : false,
  "date" : "2025-12-12T16:17:42.700644Z",
  "publisher" : "HL7 Czech Republic",
  "contact" : [{
    "name" : "HL7 Czech Republic",
    "telecom" : [{
      "system" : "url",
      "value" : "https://www.hl7.cz/"
    }]
  }],
  "description" : "Allergy Intolerance Category (CZ Code system supplement)",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CZ",
      "display" : "Czechia"
    }]
  }],
  "content" : "supplement",
  "supplements" : "http://hl7.org/fhir/allergy-intolerance-category",
  "concept" : [{
    "code" : "biologic",
    "display" : "biologický",
    "definition" : "Přípravek syntetizovaný z živých organismů nebo jejich produktů, zejména lidských nebo živočišných bílkovin, jako jsou hormony nebo antitoxiny, který se používá jako diagnostické, preventivní nebo terapeutické činidlo. Mezi biologické léky patří například: vakcíny; alergenní extrakty, které se používají jak k diagnostice, tak k léčbě (například alergenové injekce); genové terapie; buněčné terapie. Existují i jiné biologické produkty, jako jsou tkáně, které obvykle nejsou spojovány s alergiemi."
  },
  {
    "code" : "environment",
    "display" : "prostředí",
    "definition" : "Jakékoli látky, které se vyskytují v životním prostředí, včetně látek, které dosud nebyly klasifikovány jako potraviny, léky nebo biologické látky."
  },
  {
    "code" : "food",
    "display" : "potravina",
    "definition" : "Jakákoli látka konzumovaná za účelem výživové podpory organismu."
  },
  {
    "code" : "medication",
    "display" : "léčivo",
    "definition" : "Látky podávané za účelem dosažení fyziologického účinku."
  }]
}

```
