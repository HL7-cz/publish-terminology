# Allergy Intolerance Category (CZ supplement value set) - HL7 Czech Terminology Implementation Guide v0.3.0

## ValueSet: Allergy Intolerance Category (CZ supplement value set) 

 
Category of an identified substance associated with allergies or intolerances. 

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
  "id" : "allergy-intolerance-category-cz",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/valueset-supplement",
    "valueCanonical" : "https://hl7.cz/terminology/CodeSystem/allergy-intolerance-category-cz"
  }],
  "url" : "https://hl7.cz/terminology/ValueSet/allergy-intolerance-category-cz",
  "version" : "1.0.0",
  "name" : "AllergyIntoleranceCategory",
  "title" : "Allergy Intolerance Category (CZ supplement value set)",
  "status" : "active",
  "experimental" : false,
  "date" : "2025-12-12T16:18:06.331637Z",
  "publisher" : "HL7 Czech Republic",
  "contact" : [{
    "name" : "HL7 Czech Republic",
    "telecom" : [{
      "system" : "url",
      "value" : "https://www.hl7.cz/"
    }]
  }],
  "description" : "Category of an identified substance associated with allergies or intolerances.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CZ",
      "display" : "Czechia"
    }]
  }],
  "compose" : {
    "include" : [{
      "system" : "http://hl7.org/fhir/allergy-intolerance-category",
      "version" : "4.0.1"
    }]
  }
}

```
