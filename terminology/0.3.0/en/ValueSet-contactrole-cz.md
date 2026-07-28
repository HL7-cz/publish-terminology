# Contact Role (CZ) - HL7 Czech Terminology Implementation Guide v0.3.0

## ValueSet: Contact Role (CZ) 

 
Číselník rolí kontaktních osob ve vztahu k pacientovi. (Concepts specifying role of contact person.) 

 **References** 

* Included into [Hl7vsContactAndRelationshipCz100](ValueSet-contact-and-relationship-cz.md)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "contactrole-cz",
  "language" : "cs",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/valueset-supplement",
    "valueCanonical" : "https://hl7.cz/terminology/CodeSystem/v2-0131-cz"
  }],
  "url" : "https://hl7.cz/terminology/ValueSet/contactrole-cz",
  "version" : "1.0.0",
  "name" : "Hl7vs_contactrole_cz",
  "title" : "Contact Role (CZ)",
  "status" : "active",
  "experimental" : false,
  "date" : "2025-04-03T08:19:42.070148Z",
  "publisher" : "HL7 Czech Republic",
  "contact" : [{
    "name" : "HL7 Czech Republic",
    "telecom" : [{
      "system" : "url",
      "value" : "https://www.hl7.cz/"
    }]
  }],
  "description" : "Číselník rolí kontaktních osob ve vztahu k pacientovi. (Concepts specifying role of contact person.)",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CZ",
      "display" : "Czechia"
    }]
  }],
  "copyright" : "HL7 International",
  "compose" : {
    "include" : [{
      "system" : "http://terminology.hl7.org/CodeSystem/v2-0131",
      "version" : "3.0.0"
    }],
    "exclude" : [{
      "system" : "http://terminology.hl7.org/CodeSystem/v2-0131",
      "version" : "3.0.0",
      "concept" : [{
        "code" : "O"
      },
      {
        "code" : "BP"
      },
      {
        "code" : "EP"
      },
      {
        "code" : "PR"
      },
      {
        "code" : "CP"
      }]
    }]
  }
}

```
