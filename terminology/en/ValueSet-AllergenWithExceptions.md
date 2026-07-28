# eHDSI Agent or Allergen With Exceptions - HL7 Czech Terminology Implementation Guide v0.3.0

## ValueSet: eHDSI Agent or Allergen With Exceptions 

 
The Value Set is used for coding s specific allergen or other agent/substance (drug, food, chemical agent, etc.) to which the patient has an adverse reaction propensity. It is defined as the union of: (a) eHDSIAllergenNoDrug (b) DLP_lecivePripravky (c) DLP_ATC (d) eHDSIAbsentOrUnknownAllergy (e) eHDSIExceptionalValue 

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
  "id" : "AllergenWithExceptions",
  "language" : "cs",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-fmm",
    "valueInteger" : 2
  },
  {
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
    "valueCode" : "trial-use"
  }],
  "url" : "https://ncez.mzcr.cz/terminology/ValueSet/AllergenWithExceptions",
  "version" : "1.0.0",
  "name" : "AllergenWithExceptions",
  "title" : "eHDSI Agent or Allergen With Exceptions",
  "status" : "active",
  "experimental" : false,
  "date" : "2025-11-01",
  "publisher" : "HL7 Czech Republic",
  "contact" : [{
    "name" : "HL7 Czech Republic",
    "telecom" : [{
      "system" : "url",
      "value" : "https://www.hl7.cz/"
    }]
  }],
  "description" : "The Value Set is used for coding s specific allergen or other agent/substance (drug, food, chemical agent, etc.) to which the patient has an adverse reaction propensity.\nIt is defined as the union of:\n(a) eHDSIAllergenNoDrug\n(b) DLP_lecivePripravky\n(c) DLP_ATC\n(d) eHDSIAbsentOrUnknownAllergy\n(e) eHDSIExceptionalValue",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CZ",
      "display" : "Czechia"
    }]
  }],
  "copyright" : "This value set includes content from SNOMED CT, which is copyright © 2002+ International Health Terminology Standards Development Organisation (IHTSDO), and distributed by agreement between IHTSDO and HL7. Implementer use of SNOMED CT is not covered by this agreement",
  "compose" : {
    "include" : [{
      "valueSet" : ["https://ncez.mzcr.cz/terminology/ValueSet/eHDSIAllergenNoDrug"]
    },
    {
      "valueSet" : ["https://sukl.cz/terminology/ValueSet/dlp-lecivepripravky"]
    },
    {
      "valueSet" : ["https://sukl.cz/terminology/ValueSet/dlp-atc"]
    },
    {
      "valueSet" : ["https://ncez.mzcr.cz/terminology/ValueSet/eHDSIAbsentOrUnknownAllergy"]
    },
    {
      "valueSet" : ["https://ncez.mzcr.cz/terminology/ValueSet/eHDSIExceptionalValue"]
    }]
  }
}

```
