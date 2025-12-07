# Medical Device with exceptions - HL7 Czech Terminology Implementation Guide v0.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Medical Device with exceptions**

## ValueSet: Medical Device with exceptions 

| | | |
| :--- | :--- | :--- |
| *Official URL*:https://ncez.mzcr.cz/terminology/ValueSet/MedicalDeviceWithExceptions | *Version*:0.1.0 | |
| *Standards status:*[Draft](http://hl7.org/fhir/R4/versions.html#std-process) | [Maturity Level](http://hl7.org/fhir/versions.html#maturity): 1 | *Computable Name*:MedicalDeviceWithExceptionsVS |
| **Copyright/Legal**: This value set includes content from SNOMED CT, which is copyright © 2002+ International Health Terminology Standards Development Organisation (IHTSDO), and distributed by agreement between IHTSDO and HL7. Implementer use of SNOMED CT is not covered by this agreement | | |

 
The Value Set is used for coding implanted and external medical devices and equipment. It also includes exceptional values. 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

This value set includes codes based on the following rules:

* Import all the codes that are contained in [Medical Device](ValueSet-medical-device.md)
* Import all the codes that are contained in [eHDSI Absent Or Unknown Device](ValueSet-eHDSIAbsentOrUnknownDevice-cz.md)
* Import all the codes that are contained in [eHDSI Exceptional Value](ValueSet-eHDSIExceptionalValue-cz.md)

 

### Expansion

Expansion from tx.hl7europe.eu based on:

* [codesystem Absent and Unknown Data - IPS v1.1.0 (CodeSystem)](http://hl7.org/fhir/uv/ips/STU1.1/CodeSystem-absent-unknown-uv-ips.html)
* SNOMED CT 11000279109 edition 27-Jan 2025
* [codesystem NullFlavor v3.0.0 (CodeSystem)](http://terminology.hl7.org/7.0.0/CodeSystem-v3-NullFlavor.html)
* [supplement Absent a Unknown Data - IPS v0.1.0 (CodeSystem)](CodeSystem-absent-unknown-uv-ips-cz.md)
* [valueset eHDSI Absent Or Unknown Device v0.1.0 (ValueSet)](ValueSet-eHDSIAbsentOrUnknownDevice-cz.md)
* [valueset eHDSI Exceptional Value v0.1.0 (ValueSet)](ValueSet-eHDSIExceptionalValue-cz.md)
* [valueset Medical Device v0.1.0 (ValueSet)](ValueSet-medical-device.md)

This value set has >1000 codes in it. In order to keep the publication size manageable, only a selection (1000 codes) of the whole set of codes is shown

-------

 Explanation of the columns that may appear on this page: 

| | |
| :--- | :--- |
| Level | A few code lists that FHIR defines are hierarchical - each code is assigned a level. In this scheme, some codes are under other codes, and imply that the code they are under also applies |
| System | The source of the definition of the code (when the value set draws in codes defined elsewhere) |
| Code | The code (used as the code in the resource instance) |
| Display | The display (used in the*display*element of a[Coding](http://hl7.org/fhir/R4/datatypes.html#Coding)). If there is no display, implementers should not simply display the code, but map the concept into their application |
| Definition | An explanation of the meaning of the concept |
| Comments | Additional notes about how to use the code |



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "MedicalDeviceWithExceptions",
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-fmm",
      "valueInteger" : 1
    },
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
      "valueCode" : "draft"
    }
  ],
  "url" : "https://ncez.mzcr.cz/terminology/ValueSet/MedicalDeviceWithExceptions",
  "version" : "0.1.0",
  "name" : "MedicalDeviceWithExceptionsVS",
  "title" : "Medical Device with exceptions",
  "status" : "active",
  "experimental" : false,
  "date" : "2024-01-01",
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
  "description" : "The Value Set is used for coding implanted and external medical devices and equipment.\nIt also includes exceptional values.",
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
  "copyright" : "This value set includes content from SNOMED CT, which is copyright © 2002+ International Health Terminology Standards Development Organisation (IHTSDO), and distributed by agreement between IHTSDO and HL7. Implementer use of SNOMED CT is not covered by this agreement",
  "compose" : {
    "include" : [
      {
        "valueSet" : ["https://ncez.mzcr.cz/terminology/ValueSet/medical-device"]
      },
      {
        "valueSet" : [
          "https://ncez.mzcr.cz/terminology/ValueSet/eHDSIAbsentOrUnknownDevice-cz"
        ]
      },
      {
        "valueSet" : [
          "https://ncez.mzcr.cz/terminology/ValueSet/eHDSIExceptionalValue-cz"
        ]
      }
    ]
  }
}

```
