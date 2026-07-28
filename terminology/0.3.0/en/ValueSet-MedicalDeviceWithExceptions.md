# Medical Device with exceptions - HL7 Czech Terminology Implementation Guide v0.3.0

## ValueSet: Medical Device with exceptions 

 
The Value Set is used for coding implanted and external medical devices and equipment. It also includes exceptional values. 

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
  "id" : "MedicalDeviceWithExceptions",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-fmm",
    "valueInteger" : 2
  },
  {
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
    "valueCode" : "trial-use"
  }],
  "url" : "https://ncez.mzcr.cz/terminology/ValueSet/MedicalDeviceWithExceptions",
  "version" : "1.0.0",
  "name" : "MedicalDeviceWithExceptionsVS",
  "title" : "Medical Device with exceptions",
  "status" : "active",
  "experimental" : false,
  "date" : "2024-01-01",
  "publisher" : "HL7 Czech Republic",
  "contact" : [{
    "name" : "HL7 Czech Republic",
    "telecom" : [{
      "system" : "url",
      "value" : "https://www.hl7.cz/"
    }]
  }],
  "description" : "The Value Set is used for coding implanted and external medical devices and equipment.\nIt also includes exceptional values.",
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
      "valueSet" : ["https://ncez.mzcr.cz/terminology/ValueSet/medical-device"]
    },
    {
      "valueSet" : ["https://ncez.mzcr.cz/terminology/ValueSet/eHDSIAbsentOrUnknownDevice"]
    },
    {
      "valueSet" : ["https://ncez.mzcr.cz/terminology/ValueSet/eHDSIExceptionalValue"]
    }]
  }
}

```
