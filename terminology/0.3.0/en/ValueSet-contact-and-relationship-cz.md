# Contact and Relationship (CZ) - HL7 Czech Terminology Implementation Guide v0.3.0

## ValueSet: Contact and Relationship (CZ) 

 
Číselník vztahů a rolí kontaktních osob k pacientovi. Číselník zahrnuje dva samostatné číselníky: relationship a contact role. 

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
  "id" : "contact-and-relationship-cz",
  "language" : "cs",
  "url" : "https://hl7.cz/terminology/ValueSet/contact-and-relationship-cz",
  "version" : "1.0.0",
  "name" : "Hl7vsContactAndRelationshipCz100",
  "title" : "Contact and Relationship (CZ)",
  "status" : "active",
  "experimental" : false,
  "date" : "2025-04-03T08:40:10.799745Z",
  "publisher" : "HL7 Czech Republic",
  "contact" : [{
    "name" : "HL7 Czech Republic",
    "telecom" : [{
      "system" : "url",
      "value" : "https://www.hl7.cz/"
    }]
  }],
  "description" : "Číselník vztahů a rolí kontaktních osob k pacientovi. Číselník zahrnuje dva samostatné číselníky: relationship a contact role.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CZ",
      "display" : "Czechia"
    }]
  }],
  "compose" : {
    "include" : [{
      "valueSet" : ["https://hl7.cz/terminology/ValueSet/contactrole-cz"]
    },
    {
      "valueSet" : ["https://hl7.cz/terminology/ValueSet/personal-relationship-cz"]
    }]
  }
}

```
