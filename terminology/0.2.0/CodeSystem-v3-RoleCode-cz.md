# RoleCode (CZ Supplement) - HL7 Czech Terminology Implementation Guide v0.2.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **RoleCode (CZ Supplement)**

## CodeSystem: RoleCode (CZ Supplement) 

| | |
| :--- | :--- |
| *Official URL*:https://hl7.cz/terminology/CodeSystem/v3-RoleCode-cz | *Version*:0.2.0 |
| Draft as of 2025-02-09 | *Computable Name*:RoleCodeCz |

 
Český doplněk kódového systému v3-RoleCode, který je souborem kódů blíže specifikujících druh Role; obsahuje specifické klasifikační kódy pro další upřesnění kódů RoleClass. A Czech supplement to the v3-RoleCode code system which is a set of codes further specifying the kind of Role; specific classification codes for further qualifying RoleClass codes. 

 This Code system is referenced in the content logical definition of the following value sets: 

* [PersonalRelationshipCzVS](ValueSet-personal-relationship-cz.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "v3-RoleCode-cz",
  "language" : "cs",
  "url" : "https://hl7.cz/terminology/CodeSystem/v3-RoleCode-cz",
  "version" : "0.2.0",
  "name" : "RoleCodeCz",
  "title" : "RoleCode (CZ Supplement)",
  "status" : "draft",
  "experimental" : false,
  "date" : "2025-02-09T10:38:00.271394Z",
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
  "description" : "Český doplněk kódového systému v3-RoleCode, který je souborem kódů blíže specifikujících druh Role; obsahuje specifické klasifikační kódy pro další upřesnění kódů RoleClass. A Czech supplement to the v3-RoleCode code system which is a set of codes further specifying the kind of Role; specific classification codes for further qualifying RoleClass codes.",
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
  "supplements" : "http://terminology.hl7.org/CodeSystem/v3-RoleCode|3.0.0",
  "property" : [
    {
      "code" : "notSelectable",
      "uri" : "http://hl7.org/fhir/concept-properties#notSelectable",
      "description" : "Not Selectable",
      "type" : "boolean"
    },
    {
      "code" : "rim-ClassifiesClassCode",
      "uri" : "http://terminology.hl7.org/CodeSystem/utg-concept-properties#rim-ClassifiesClassCode",
      "description" : "The child code is a classification of the particular class group identified by the 'classCode' in a RIM class as the parent code.  Used only in RIM backbone classes to link the code and classCode values.",
      "type" : "Coding"
    },
    {
      "code" : "subsumedBy",
      "uri" : "http://hl7.org/fhir/concept-properties#parent",
      "description" : "The concept code of a parent concept",
      "type" : "code"
    },
    {
      "code" : "synonymCode",
      "uri" : "http://hl7.org/fhir/concept-properties#synonym",
      "description" : "An additional concept code that was also attributed to a concept",
      "type" : "code"
    }
  ],
  "concept" : [
    {
      "code" : "AUNT",
      "display" : "teta",
      "definition" : "Sestra matky nebo otce dotčené osoby.",
      "designation" : [
        {
          "language" : "en",
          "use" : {
            "code" : "definition"
          },
          "value" : "The player of the role is a sister of the scoping person's mother or father."
        },
        {
          "language" : "en",
          "use" : {
            "code" : "display"
          },
          "value" : "aunt"
        }
      ],
      "property" : [
        {
          "code" : "subsumedBy",
          "valueCode" : "EXT"
        }
      ]
    },
    {
      "code" : "BRO",
      "display" : "bratr",
      "definition" : "Muž, který sdílí jednoho nebo oba společné rodiče s dotčenou osobou.",
      "designation" : [
        {
          "language" : "en",
          "use" : {
            "code" : "definition"
          },
          "value" : "The player of the role is a male sharing one or both parents in common with the scoping entity."
        },
        {
          "language" : "en",
          "use" : {
            "code" : "display"
          },
          "value" : "brother"
        }
      ],
      "property" : [
        {
          "code" : "subsumedBy",
          "valueCode" : "SIB"
        }
      ]
    },
    {
      "code" : "BROINLAW",
      "display" : "švagr",
      "definition" : "(1) bratr manžela nebo manželky dotčené osoby, nebo (2) manžel sestry dotčené osoby, nebo (3) manžel sestry manžela nebo manželky dotčené osoby.",
      "designation" : [
        {
          "language" : "en",
          "use" : {
            "code" : "definition"
          },
          "value" : "The player of the role is: (1) a brother of the scoping person's spouse, or (2) the husband of the scoping person's sister, or (3) the husband of a sister of the scoping person's spouse."
        },
        {
          "language" : "en",
          "use" : {
            "code" : "display"
          },
          "value" : "brother-in-law"
        }
      ],
      "property" : [
        {
          "code" : "subsumedBy",
          "valueCode" : "SIBINLAW"
        }
      ]
    },
    {
      "code" : "CHILD",
      "display" : "dítě",
      "definition" : "Dítě dotčené osoby.",
      "designation" : [
        {
          "language" : "en",
          "use" : {
            "code" : "definition"
          },
          "value" : "The player of the role is a child of the scoping entity."
        },
        {
          "language" : "en",
          "use" : {
            "code" : "display"
          },
          "value" : "child"
        }
      ],
      "property" : [
        {
          "code" : "subsumedBy",
          "valueCode" : "FAMMEMB"
        }
      ]
    },
    {
      "code" : "CHLDADOPT",
      "display" : "osvojené dítě",
      "definition" : "Dítě dotčené osoby, které bylo přijato do rodiny prostřednictvím právních prostředků a vychováváno dotčenou osobou (rodičem) jako vlastní dítě.",
      "designation" : [
        {
          "language" : "en",
          "use" : {
            "code" : "definition"
          },
          "value" : "The player of the role is a child taken into a family through legal means and raised by the scoping person (parent) as his or her own child."
        },
        {
          "language" : "en",
          "use" : {
            "code" : "display"
          },
          "value" : "adopted child"
        }
      ],
      "property" : [
        {
          "code" : "subsumedBy",
          "valueCode" : "CHILD"
        }
      ]
    },
    {
      "code" : "CHLDFOST",
      "display" : "dítě v náhradní péči (kromě osvojení)",
      "definition" : "Dítě dotčené osoby, které přijímá rodičovskou péči a výchovu od dotčené osoby (rodiče), ale není s ním nebo s ní spojeno právními nebo pokrevními vazbami.",
      "designation" : [
        {
          "language" : "en",
          "use" : {
            "code" : "definition"
          },
          "value" : "The player of the role is a child receiving parental care and nurture from the scoping person (parent) but not related to him or her through legal or blood ties."
        },
        {
          "language" : "en",
          "use" : {
            "code" : "display"
          },
          "value" : "foster child"
        }
      ],
      "property" : [
        {
          "code" : "subsumedBy",
          "valueCode" : "CHILD"
        }
      ]
    },
    {
      "code" : "CHLDINLAW",
      "display" : "zeť/snacha",
      "definition" : "Manžel nebo manželka dítěte dotčené osoby.",
      "designation" : [
        {
          "language" : "en",
          "use" : {
            "code" : "definition"
          },
          "value" : "The player of the role is the spouse of scoping person's child."
        },
        {
          "language" : "en",
          "use" : {
            "code" : "display"
          },
          "value" : "child-in-law"
        }
      ],
      "property" : [
        {
          "code" : "subsumedBy",
          "valueCode" : "INLAW"
        }
      ]
    },
    {
      "code" : "COUSN",
      "display" : "sestřenice/bratranec",
      "definition" : "Příbuzný dotčené osoby, který pochází ze společného předka, jako je prarodič, po dvou nebo více krocích v rodové linii.",
      "designation" : [
        {
          "language" : "en",
          "use" : {
            "code" : "definition"
          },
          "value" : "The player of the role is a relative of the scoping person descended from a common ancestor, such as a grandparent, by two or more steps in a diverging line."
        },
        {
          "language" : "en",
          "use" : {
            "code" : "display"
          },
          "value" : "cousin"
        }
      ],
      "property" : [
        {
          "code" : "subsumedBy",
          "valueCode" : "EXT"
        }
      ]
    },
    {
      "code" : "DAU",
      "display" : "vlastní dcera",
      "definition" : "Ženský potomek dotčené entity (rodiče).",
      "designation" : [
        {
          "language" : "en",
          "use" : {
            "code" : "definition"
          },
          "value" : "The player of the role is a female offspring of the scoping entity (parent)."
        },
        {
          "language" : "en",
          "use" : {
            "code" : "display"
          },
          "value" : "natural daughter"
        }
      ],
      "property" : [
        {
          "code" : "subsumedBy",
          "valueCode" : "DAUC"
        },
        {
          "code" : "subsumedBy",
          "valueCode" : "NCHILD"
        }
      ]
    },
    {
      "code" : "DAUADOPT",
      "display" : "osvojená dcera",
      "definition" : "Ženský potomek dotčené entity (rodiče), který byl přijat do rodiny prostřednictvím právních prostředků a vychováván dotčenou osobou (rodičem) jako vlastní dítě.",
      "designation" : [
        {
          "language" : "en",
          "use" : {
            "code" : "definition"
          },
          "value" : "The player of the role is a female child taken into a family through legal means and raised by the scoping person (parent) as his or her own child."
        },
        {
          "language" : "en",
          "use" : {
            "code" : "display"
          },
          "value" : "adopted daughter"
        }
      ],
      "property" : [
        {
          "code" : "subsumedBy",
          "valueCode" : "CHLDADOPT"
        },
        {
          "code" : "subsumedBy",
          "valueCode" : "DAUC"
        }
      ]
    },
    {
      "code" : "DAUC",
      "display" : "dcera",
      "definition" : "**Popis:** Ženský potomek (jakéhokoliv typu) dotčené entity (rodiče).",
      "designation" : [
        {
          "language" : "en",
          "use" : {
            "code" : "definition"
          },
          "value" : "**Description:** The player of the role is a female child (of any type) of scoping entity (parent)"
        },
        {
          "language" : "en",
          "use" : {
            "code" : "display"
          },
          "value" : "daughter"
        }
      ],
      "property" : [
        {
          "code" : "subsumedBy",
          "valueCode" : "CHILD"
        }
      ]
    },
    {
      "code" : "DAUFOST",
      "display" : "dcera v náhradní péči (kromě osvojení)",
      "definition" : "Ženský potomek dotčené entity (rodiče), který přijímá rodičovskou péči a výchovu od dotčené osoby (rodiče), ale není s ním nebo s ní spojeno právními nebo pokrevními vazbami.",
      "designation" : [
        {
          "language" : "en",
          "use" : {
            "code" : "definition"
          },
          "value" : "The player of the role is a female child receiving parental care and nurture from the scoping person (parent) but not related to him or her through legal or blood ties."
        },
        {
          "language" : "en",
          "use" : {
            "code" : "display"
          },
          "value" : "foster daughter"
        }
      ],
      "property" : [
        {
          "code" : "subsumedBy",
          "valueCode" : "CHLDFOST"
        },
        {
          "code" : "subsumedBy",
          "valueCode" : "DAUC"
        }
      ]
    },
    {
      "code" : "DAUINLAW",
      "display" : "snacha",
      "definition" : "Manželka syna dotčené osoby.",
      "designation" : [
        {
          "language" : "en",
          "use" : {
            "code" : "definition"
          },
          "value" : "The player of the role is the wife of scoping person's son."
        },
        {
          "language" : "en",
          "use" : {
            "code" : "display"
          },
          "value" : "daughter in-law"
        }
      ],
      "property" : [
        {
          "code" : "subsumedBy",
          "valueCode" : "CHLDINLAW"
        }
      ]
    },
    {
      "code" : "DOMPART",
      "display" : "druh/družka",
      "definition" : "Osoba žijící s dotčenou osobou, která není manželem nebo manželkou dotčené osoby.",
      "designation" : [
        {
          "language" : "en",
          "use" : {
            "code" : "definition"
          },
          "value" : "The player of the role cohabits with the scoping person but is not the scoping person's spouse."
        },
        {
          "language" : "en",
          "use" : {
            "code" : "display"
          },
          "value" : "domestic partner"
        }
      ],
      "property" : [
        {
          "code" : "subsumedBy",
          "valueCode" : "SIGOTHR"
        }
      ]
    },
    {
      "code" : "EXT",
      "display" : "člen širší rodiny",
      "definition" : "**Popis:** Rodinný příslušník, který není v bezprostředním genetickém nebo právním vztahu k dotčené osobě, např. teta, bratranec, sestřenice, prarodič, vnuk, praprarodič, neteř, synovec nebo strýc.",
      "designation" : [
        {
          "language" : "en",
          "use" : {
            "code" : "definition"
          },
          "value" : "**Description:** A family member not having an immediate genetic or legal relationship e.g. Aunt, cousin, great grandparent, grandchild, grandparent, niece, nephew or uncle."
        },
        {
          "language" : "en",
          "use" : {
            "code" : "display"
          },
          "value" : "extended family member"
        }
      ],
      "property" : [
        {
          "code" : "subsumedBy",
          "valueCode" : "FAMMEMB"
        }
      ]
    },
    {
      "code" : "FAMMEMB",
      "display" : "rodinný příslušník",
      "definition" : "Vztah mezi dvěma osobami, který je charakterizován jako vztah \\\"rodinný\\\".",
      "designation" : [
        {
          "language" : "en",
          "use" : {
            "code" : "definition"
          },
          "value" : "A relationship between two people characterizing their \"familial\" relationship"
        },
        {
          "language" : "en",
          "use" : {
            "code" : "display"
          },
          "value" : "family member"
        }
      ],
      "property" : [
        {
          "code" : "subsumedBy",
          "valueCode" : "_PersonalRelationshipRoleType"
        }
      ]
    },
    {
      "code" : "FRND",
      "display" : "přítel/přítelkyně",
      "definition" : "Osoba, která je známá, oblíbená a důvěryhodná pro dotčenou osobu.",
      "designation" : [
        {
          "language" : "en",
          "use" : {
            "code" : "definition"
          },
          "value" : "The player of the role is a person who is known, liked, and trusted by the scoping person."
        },
        {
          "language" : "en",
          "use" : {
            "code" : "display"
          },
          "value" : "unrelated friend"
        }
      ],
      "property" : [
        {
          "code" : "subsumedBy",
          "valueCode" : "_PersonalRelationshipRoleType"
        }
      ]
    },
    {
      "code" : "FTH",
      "display" : "otec",
      "definition" : "Muž, který zplodil, vychoval nebo pečuje o dotčenou osobu (dítě).",
      "designation" : [
        {
          "language" : "en",
          "use" : {
            "code" : "definition"
          },
          "value" : "The player of the role is a male who begets or raises or nurtures the scoping entity (child)."
        },
        {
          "language" : "en",
          "use" : {
            "code" : "display"
          },
          "value" : "father"
        }
      ],
      "property" : [
        {
          "code" : "subsumedBy",
          "valueCode" : "PRN"
        }
      ]
    },
    {
      "code" : "FTHINLAW",
      "display" : "tchán",
      "definition" : "Muž, který je otcem manžela nebo manželky dotčené osoby.",
      "designation" : [
        {
          "language" : "en",
          "use" : {
            "code" : "definition"
          },
          "value" : "The player of the role is the father of the scoping person's husband or wife."
        },
        {
          "language" : "en",
          "use" : {
            "code" : "display"
          },
          "value" : "father-in-law"
        }
      ],
      "property" : [
        {
          "code" : "subsumedBy",
          "valueCode" : "PRNINLAW"
        }
      ]
    },
    {
      "code" : "GGRFTH",
      "display" : "pradědeček",
      "definition" : "Muž, který je otcem prarodiče dotčené osoby.",
      "designation" : [
        {
          "language" : "en",
          "use" : {
            "code" : "definition"
          },
          "value" : "The player of the role is the father of the scoping person's grandparent."
        },
        {
          "language" : "en",
          "use" : {
            "code" : "display"
          },
          "value" : "great grandfather"
        }
      ],
      "property" : [
        {
          "code" : "subsumedBy",
          "valueCode" : "GGRPRN"
        }
      ]
    },
    {
      "code" : "GGRMTH",
      "display" : "prababička",
      "definition" : "Žena, která je matkou prarodiče dotčené osoby.",
      "designation" : [
        {
          "language" : "en",
          "use" : {
            "code" : "definition"
          },
          "value" : "The player of the role is the mother of the scoping person's grandparent."
        },
        {
          "language" : "en",
          "use" : {
            "code" : "display"
          },
          "value" : "great grandmother"
        }
      ],
      "property" : [
        {
          "code" : "subsumedBy",
          "valueCode" : "GGRPRN"
        }
      ]
    },
    {
      "code" : "GGRPRN",
      "display" : "praprarodič",
      "definition" : "Osoba, která je rodičem prarodiče dotčené osoby.",
      "designation" : [
        {
          "language" : "en",
          "use" : {
            "code" : "definition"
          },
          "value" : "The player of the role is a parent of the scoping person's grandparent."
        },
        {
          "language" : "en",
          "use" : {
            "code" : "display"
          },
          "value" : "great grandparent"
        }
      ],
      "property" : [
        {
          "code" : "subsumedBy",
          "valueCode" : "EXT"
        }
      ]
    },
    {
      "code" : "GRFTH",
      "display" : "dědeček",
      "definition" : "Muž, který je otcem rodiče dotčené osoby.",
      "designation" : [
        {
          "language" : "en",
          "use" : {
            "code" : "definition"
          },
          "value" : "The player of the role is the father of the scoping person's mother or father."
        },
        {
          "language" : "en",
          "use" : {
            "code" : "display"
          },
          "value" : "grandfather"
        }
      ],
      "property" : [
        {
          "code" : "subsumedBy",
          "valueCode" : "GRPRN"
        }
      ]
    },
    {
      "code" : "GRMTH",
      "display" : "babička",
      "definition" : "Žena, která je matkou rodiče dotčené osoby.",
      "designation" : [
        {
          "language" : "en",
          "use" : {
            "code" : "definition"
          },
          "value" : "The player of the role is the mother of the scoping person's mother or father."
        },
        {
          "language" : "en",
          "use" : {
            "code" : "display"
          },
          "value" : "grandmother"
        }
      ],
      "property" : [
        {
          "code" : "subsumedBy",
          "valueCode" : "GRPRN"
        }
      ]
    },
    {
      "code" : "GRNDCHILD",
      "display" : "vnouče",
      "definition" : "Potomek, který je dítětem syna nebo dcery dotčené osoby.",
      "designation" : [
        {
          "language" : "en",
          "use" : {
            "code" : "definition"
          },
          "value" : "The player of the role is a child of the scoping person's son or daughter."
        },
        {
          "language" : "en",
          "use" : {
            "code" : "display"
          },
          "value" : "grandchild"
        }
      ],
      "property" : [
        {
          "code" : "subsumedBy",
          "valueCode" : "EXT"
        }
      ]
    },
    {
      "code" : "GRNDDAU",
      "display" : "vnučka",
      "definition" : "Dcera syna nebo dcery dotčené osoby.",
      "designation" : [
        {
          "language" : "en",
          "use" : {
            "code" : "definition"
          },
          "value" : "The player of the role is a daughter of the scoping person's son or daughter."
        },
        {
          "language" : "en",
          "use" : {
            "code" : "display"
          },
          "value" : "granddaughter"
        }
      ],
      "property" : [
        {
          "code" : "subsumedBy",
          "valueCode" : "GRNDCHILD"
        }
      ]
    },
    {
      "code" : "GRNDSON",
      "display" : "vnuk",
      "definition" : "Syn syna nebo dcery dotčené osoby.",
      "designation" : [
        {
          "language" : "en",
          "use" : {
            "code" : "definition"
          },
          "value" : "The player of the role is a son of the scoping person's son or daughter."
        },
        {
          "language" : "en",
          "use" : {
            "code" : "display"
          },
          "value" : "grandson"
        }
      ],
      "property" : [
        {
          "code" : "subsumedBy",
          "valueCode" : "GRNDCHILD"
        }
      ]
    },
    {
      "code" : "GRPRN",
      "display" : "prarodič",
      "definition" : "Osoba, která je rodičem rodiče dotčené osoby.",
      "designation" : [
        {
          "language" : "en",
          "use" : {
            "code" : "definition"
          },
          "value" : "The player of the role is a parent of the scoping person's mother or father."
        },
        {
          "language" : "en",
          "use" : {
            "code" : "display"
          },
          "value" : "grandparent"
        }
      ],
      "property" : [
        {
          "code" : "subsumedBy",
          "valueCode" : "EXT"
        }
      ]
    },
    {
      "code" : "HUSB",
      "display" : "manžel",
      "definition" : "Muž, který je spojen s dotčenou ženou v manželství.",
      "designation" : [
        {
          "language" : "en",
          "use" : {
            "code" : "definition"
          },
          "value" : "The player of the role is a man joined to a woman (scoping person) in marriage."
        },
        {
          "language" : "en",
          "use" : {
            "code" : "display"
          },
          "value" : "husband"
        }
      ],
      "property" : [
        {
          "code" : "subsumedBy",
          "valueCode" : "SPS"
        }
      ]
    },
    {
      "code" : "INLAW",
      "display" : "příbuzní ze strany manžela/manželky",
      "definition" : "Vztah mezi jednotlivcem a členem nejbližší rodiny jeho manželského partnera.",
      "designation" : [
        {
          "language" : "en",
          "use" : {
            "code" : "definition"
          },
          "value" : "A relationship between an individual and a member of their spousal partner's immediate family."
        },
        {
          "language" : "en",
          "use" : {
            "code" : "display"
          },
          "value" : "inlaw"
        }
      ],
      "property" : [
        {
          "code" : "subsumedBy",
          "valueCode" : "EXT"
        }
      ]
    },
    {
      "code" : "MTH",
      "display" : "matka",
      "definition" : "Žena, která zplodila, porodila nebo vychovala a pečuje o dotčenou osobu (dítě).",
      "designation" : [
        {
          "language" : "en",
          "use" : {
            "code" : "definition"
          },
          "value" : "The player of the role is a female who conceives, gives birth to, or raises and nurtures the scoping entity (child)."
        },
        {
          "language" : "en",
          "use" : {
            "code" : "display"
          },
          "value" : "mother"
        }
      ],
      "property" : [
        {
          "code" : "subsumedBy",
          "valueCode" : "PRN"
        }
      ]
    },
    {
      "code" : "MTHINLAW",
      "display" : "tchýně",
      "definition" : "Žena, která je matkou manžela nebo manželky dotčené osoby.",
      "designation" : [
        {
          "language" : "en",
          "use" : {
            "code" : "definition"
          },
          "value" : "The player of the role is the mother of the scoping person's husband or wife."
        },
        {
          "language" : "en",
          "use" : {
            "code" : "display"
          },
          "value" : "mother-in-law"
        }
      ],
      "property" : [
        {
          "code" : "subsumedBy",
          "valueCode" : "PRNINLAW"
        },
        {
          "code" : "synonymCode",
          "valueCode" : "MTHINLOAW"
        }
      ]
    },
    {
      "code" : "MTHINLOAW",
      "display" : "tchýně",
      "definition" : "Žena, která je matkou manžela nebo manželky dotčené osoby.",
      "designation" : [
        {
          "language" : "en",
          "use" : {
            "code" : "definition"
          },
          "value" : "The player of the role is the mother of the scoping person's husband or wife."
        },
        {
          "language" : "en",
          "use" : {
            "code" : "display"
          },
          "value" : "mother-in-law"
        }
      ],
      "property" : [
        {
          "code" : "subsumedBy",
          "valueCode" : "PRNINLAW"
        },
        {
          "code" : "synonymCode",
          "valueCode" : "MTHINLAW"
        }
      ]
    },
    {
      "code" : "NBOR",
      "display" : "soused/sousedka",
      "definition" : "Osoba, která žije v blízkosti nebo vedle dotčené osoby.",
      "designation" : [
        {
          "language" : "en",
          "use" : {
            "code" : "definition"
          },
          "value" : "The player of the role lives near or next to the scoping person."
        },
        {
          "language" : "en",
          "use" : {
            "code" : "display"
          },
          "value" : "neighbor"
        }
      ],
      "property" : [
        {
          "code" : "subsumedBy",
          "valueCode" : "_PersonalRelationshipRoleType"
        }
      ]
    },
    {
      "code" : "NCHILD",
      "display" : "potomek",
      "definition" : "Potomek dotčené entity (rodiče).",
      "designation" : [
        {
          "language" : "en",
          "use" : {
            "code" : "definition"
          },
          "value" : "The player of the role is an offspring of the scoping entity as determined by birth."
        },
        {
          "language" : "en",
          "use" : {
            "code" : "display"
          },
          "value" : "natural child"
        }
      ],
      "property" : [
        {
          "code" : "subsumedBy",
          "valueCode" : "CHILD"
        }
      ]
    },
    {
      "code" : "NEPHEW",
      "display" : "synovec",
      "definition" : "Syn bratra nebo sestry dotčené osoby.",
      "designation" : [
        {
          "language" : "en",
          "use" : {
            "code" : "definition"
          },
          "value" : "The player of the role is a son of the scoping person's brother or sister or of the brother or sister of the scoping person's spouse."
        },
        {
          "language" : "en",
          "use" : {
            "code" : "display"
          },
          "value" : "nephew"
        }
      ],
      "property" : [
        {
          "code" : "subsumedBy",
          "valueCode" : "NIENEPH"
        }
      ]
    },
    {
      "code" : "NIECE",
      "display" : "neteř",
      "definition" : "Dcera bratra nebo sestry dotčené osoby.",
      "designation" : [
        {
          "language" : "en",
          "use" : {
            "code" : "definition"
          },
          "value" : "The player of the role is a daughter of the scoping person's brother or sister or of the brother or sister of the scoping person's spouse."
        },
        {
          "language" : "en",
          "use" : {
            "code" : "display"
          },
          "value" : "niece"
        }
      ],
      "property" : [
        {
          "code" : "subsumedBy",
          "valueCode" : "NIENEPH"
        }
      ]
    },
    {
      "code" : "NIENEPH",
      "display" : "neteř/synovec",
      "definition" : "Potomek bratra nebo sestry dotčené osoby nebo bratra nebo sestry manžela/manželky dotčené osoby.",
      "designation" : [
        {
          "language" : "en",
          "use" : {
            "code" : "definition"
          },
          "value" : "The player of the role is a child of scoping person's brother or sister or of the brother or sister of the scoping person's spouse."
        },
        {
          "language" : "en",
          "use" : {
            "code" : "display"
          },
          "value" : "niece/nephew"
        }
      ],
      "property" : [
        {
          "code" : "subsumedBy",
          "valueCode" : "EXT"
        }
      ]
    },
    {
      "code" : "NOK",
      "display" : "příbuzný",
      "definition" : "Nejbližší příbuzný dotčené osoby.",
      "designation" : [
        {
          "language" : "en",
          "use" : {
            "code" : "definition"
          },
          "value" : "Played by an individual who is designated as the next of kin for another individual which scopes the role."
        },
        {
          "language" : "en",
          "use" : {
            "code" : "display"
          },
          "value" : "next of kin"
        }
      ],
      "property" : [
        {
          "code" : "subsumedBy",
          "valueCode" : "_ContactRoleType"
        }
      ]
    },
    {
      "code" : "PRN",
      "display" : "rodič",
      "definition" : "Osoba, která zplodila, porodila nebo vychovala a pečuje o dotčenou osobu (dítě).",
      "designation" : [
        {
          "language" : "en",
          "use" : {
            "code" : "definition"
          },
          "value" : "The player of the role is one who begets, gives birth to, or nurtures and raises the scoping entity (child)."
        },
        {
          "language" : "en",
          "use" : {
            "code" : "display"
          },
          "value" : "parent"
        }
      ],
      "property" : [
        {
          "code" : "subsumedBy",
          "valueCode" : "FAMMEMB"
        }
      ]
    },
    {
      "code" : "PRNINLAW",
      "display" : "tchyně/tchán",
      "definition" : "Rodič manžela nebo manželky dotčené osoby.",
      "designation" : [
        {
          "language" : "en",
          "use" : {
            "code" : "definition"
          },
          "value" : "The player of the role is the parent of scoping person's husband or wife."
        },
        {
          "language" : "en",
          "use" : {
            "code" : "display"
          },
          "value" : "parent in-law"
        }
      ],
      "property" : [
        {
          "code" : "subsumedBy",
          "valueCode" : "INLAW"
        }
      ]
    },
    {
      "code" : "ROOM",
      "display" : "spolubydlící",
      "definition" : "Osoba, která sdílí obytné prostory s dotčenou osobou.",
      "designation" : [
        {
          "language" : "en",
          "use" : {
            "code" : "definition"
          },
          "value" : "One who shares living quarters with the subject."
        },
        {
          "language" : "en",
          "use" : {
            "code" : "display"
          },
          "value" : "Roommate"
        }
      ],
      "property" : [
        {
          "code" : "subsumedBy",
          "valueCode" : "_PersonalRelationshipRoleType"
        }
      ]
    },
    {
      "code" : "SIB",
      "display" : "sourozenec",
      "definition" : "Osoba, která sdílí jednoho nebo oba rodiče s dotčenou osobou.",
      "designation" : [
        {
          "language" : "en",
          "use" : {
            "code" : "definition"
          },
          "value" : "The player of the role shares one or both parents in common with the scoping entity."
        },
        {
          "language" : "en",
          "use" : {
            "code" : "display"
          },
          "value" : "sibling"
        }
      ],
      "property" : [
        {
          "code" : "subsumedBy",
          "valueCode" : "FAMMEMB"
        }
      ]
    },
    {
      "code" : "SIBINLAW",
      "display" : "švagr/švagrová",
      "definition" : "Osoba, která je: (1) sourozencem manžela/manželky dotčené osoby, nebo (2) manželem/manželkou sourozence dotčené osoby, nebo (3) manželem/manželkou sourozence manžela/manželky dotčené osoby.",
      "designation" : [
        {
          "language" : "en",
          "use" : {
            "code" : "definition"
          },
          "value" : "The player of the role is: (1) a sibling of the scoping person's spouse, or (2) the spouse of the scoping person's sibling, or (3) the spouse of a sibling of the scoping person's spouse."
        },
        {
          "language" : "en",
          "use" : {
            "code" : "display"
          },
          "value" : "sibling in-law"
        }
      ],
      "property" : [
        {
          "code" : "subsumedBy",
          "valueCode" : "INLAW"
        }
      ]
    },
    {
      "code" : "SIGOTHR",
      "display" : "osoba blízká",
      "definition" : "Osoba, která je důležitá pro blaho dotčené osoby; zejména manžel nebo osoba ve obdobném vztahu.",
      "designation" : [
        {
          "language" : "en",
          "use" : {
            "code" : "definition"
          },
          "value" : "A person who is important to one's well being; especially a spouse or one in a similar relationship. (The player is the one who is important)"
        },
        {
          "language" : "en",
          "use" : {
            "code" : "display"
          },
          "value" : "significant other"
        }
      ],
      "property" : [
        {
          "code" : "subsumedBy",
          "valueCode" : "FAMMEMB"
        }
      ]
    },
    {
      "code" : "SIS",
      "display" : "sestra",
      "definition" : "Žena, která sdílí jednoho nebo oba rodiče s dotčenou osobou.",
      "designation" : [
        {
          "language" : "en",
          "use" : {
            "code" : "definition"
          },
          "value" : "The player of the role is a female sharing one or both parents in common with the scoping entity."
        },
        {
          "language" : "en",
          "use" : {
            "code" : "display"
          },
          "value" : "sister"
        }
      ],
      "property" : [
        {
          "code" : "subsumedBy",
          "valueCode" : "SIB"
        }
      ]
    },
    {
      "code" : "SISINLAW",
      "display" : "švagrová",
      "definition" : "Osoba, která je: (1) sestrou manžela/manželky dotčené osoby, nebo (2) manželkou bratra dotčené osoby, nebo (3) manželkou bratra manžela/manželky dotčené osoby.",
      "designation" : [
        {
          "language" : "en",
          "use" : {
            "code" : "definition"
          },
          "value" : "The player of the role is: (1) a sister of the scoping person's spouse, or (2) the wife of the scoping person's brother, or (3) the wife of a brother of the scoping person's spouse."
        },
        {
          "language" : "en",
          "use" : {
            "code" : "display"
          },
          "value" : "sister-in-law"
        }
      ],
      "property" : [
        {
          "code" : "subsumedBy",
          "valueCode" : "SIBINLAW"
        },
        {
          "code" : "synonymCode",
          "valueCode" : "SISLINLAW"
        }
      ]
    },
    {
      "code" : "SISLINLAW",
      "display" : "švagrová",
      "definition" : "Osoba, která je: (1) sestrou manžela/manželky dotčené osoby, nebo (2) manželkou bratra dotčené osoby, nebo (3) manželkou bratra manžela/manželky dotčené osoby.",
      "designation" : [
        {
          "language" : "en",
          "use" : {
            "code" : "definition"
          },
          "value" : "The player of the role is: (1) a sister of the scoping person's spouse, or (2) the wife of the scoping person's brother, or (3) the wife of a brother of the scoping person's spouse."
        },
        {
          "language" : "en",
          "use" : {
            "code" : "display"
          },
          "value" : "sister-in-law"
        }
      ],
      "property" : [
        {
          "code" : "subsumedBy",
          "valueCode" : "SIBINLAW"
        },
        {
          "code" : "synonymCode",
          "valueCode" : "SISINLAW"
        }
      ]
    },
    {
      "code" : "SON",
      "display" : "vlastní syn",
      "definition" : "Mužský potomek dotčené entity (rodiče).",
      "designation" : [
        {
          "language" : "en",
          "use" : {
            "code" : "definition"
          },
          "value" : "The player of the role is a male offspring of the scoping entity (parent)."
        },
        {
          "language" : "en",
          "use" : {
            "code" : "display"
          },
          "value" : "natural son"
        }
      ],
      "property" : [
        {
          "code" : "subsumedBy",
          "valueCode" : "NCHILD"
        },
        {
          "code" : "subsumedBy",
          "valueCode" : "SONC"
        }
      ]
    },
    {
      "code" : "SONADOPT",
      "display" : "osvojený syn",
      "definition" : "Mužský potomek dotčené entity (rodiče), který byl přijat do rodiny prostřednictvím právních prostředků a vychováván dotčenou osobou (rodičem) jako vlastní dítě.",
      "designation" : [
        {
          "language" : "en",
          "use" : {
            "code" : "definition"
          },
          "value" : "The player of the role is a male child taken into a family through legal means and raised by the scoping person (parent) as his or her own child."
        },
        {
          "language" : "en",
          "use" : {
            "code" : "display"
          },
          "value" : "adopted son"
        }
      ],
      "property" : [
        {
          "code" : "subsumedBy",
          "valueCode" : "CHLDADOPT"
        },
        {
          "code" : "subsumedBy",
          "valueCode" : "SONC"
        }
      ]
    },
    {
      "code" : "SONC",
      "display" : "syn",
      "definition" : "**Popis:** Mužský potomek (jakéhokoli typu) dotčené osoby (rodiče).",
      "designation" : [
        {
          "language" : "en",
          "use" : {
            "code" : "definition"
          },
          "value" : "**Description:** The player of the role is a male child (of any type) of scoping entity (parent)"
        },
        {
          "language" : "en",
          "use" : {
            "code" : "display"
          },
          "value" : "son"
        }
      ],
      "property" : [
        {
          "code" : "subsumedBy",
          "valueCode" : "CHILD"
        }
      ]
    },
    {
      "code" : "SONFOST",
      "display" : "syn v náhradní péči (kromě osvojení)",
      "definition" : "Mužský potomek dotčené entity (rodiče), který je v náhradní péči a výchově dotčené osoby (rodiče), ale není s ní spojen právními nebo biologickými vazbami.",
      "designation" : [
        {
          "language" : "en",
          "use" : {
            "code" : "definition"
          },
          "value" : "The player of the role is a male child receiving parental care and nurture from the scoping person (parent) but not related to him or her through legal or blood ties."
        },
        {
          "language" : "en",
          "use" : {
            "code" : "display"
          },
          "value" : "foster son"
        }
      ],
      "property" : [
        {
          "code" : "subsumedBy",
          "valueCode" : "CHLDFOST"
        },
        {
          "code" : "subsumedBy",
          "valueCode" : "SONC"
        }
      ]
    },
    {
      "code" : "SONINLAW",
      "display" : "zeť",
      "definition" : "Manžel dcery dotčené osoby.",
      "designation" : [
        {
          "language" : "en",
          "use" : {
            "code" : "definition"
          },
          "value" : "The player of the role is the husband of scoping person's daughter."
        },
        {
          "language" : "en",
          "use" : {
            "code" : "display"
          },
          "value" : "son in-law"
        }
      ],
      "property" : [
        {
          "code" : "subsumedBy",
          "valueCode" : "CHLDINLAW"
        }
      ]
    },
    {
      "code" : "SPS",
      "display" : "manžel/maželka",
      "definition" : "Osoba, která je manželským partnerem dotčené osoby.",
      "designation" : [
        {
          "language" : "en",
          "use" : {
            "code" : "definition"
          },
          "value" : "The player of the role is a marriage partner of the scoping person."
        },
        {
          "language" : "en",
          "use" : {
            "code" : "display"
          },
          "value" : "spouse"
        }
      ],
      "property" : [
        {
          "code" : "subsumedBy",
          "valueCode" : "SIGOTHR"
        }
      ]
    },
    {
      "code" : "STPCHLD",
      "display" : "nevlastní dítě",
      "definition" : "Dítě manžela/manželky dotčené osoby z předchozího manželství.",
      "designation" : [
        {
          "language" : "en",
          "use" : {
            "code" : "definition"
          },
          "value" : "The player of the role is a child of the scoping person's spouse by a previous union."
        },
        {
          "language" : "en",
          "use" : {
            "code" : "display"
          },
          "value" : "step child"
        }
      ],
      "property" : [
        {
          "code" : "subsumedBy",
          "valueCode" : "CHILD"
        }
      ]
    },
    {
      "code" : "STPDAU",
      "display" : "nevlastní dcera",
      "definition" : "Ženský potomek manžela/manželky dotčené osoby z předchozího manželství.",
      "designation" : [
        {
          "language" : "en",
          "use" : {
            "code" : "definition"
          },
          "value" : "The player of the role is a daughter of the scoping person's spouse by a previous union."
        },
        {
          "language" : "en",
          "use" : {
            "code" : "display"
          },
          "value" : "stepdaughter"
        }
      ],
      "property" : [
        {
          "code" : "subsumedBy",
          "valueCode" : "DAUC"
        },
        {
          "code" : "subsumedBy",
          "valueCode" : "STPCHLD"
        }
      ]
    },
    {
      "code" : "STPSON",
      "display" : "nevlastní syn",
      "definition" : "Mužský potomek manžela/manželky dotčené osoby z předchozího manželství.",
      "designation" : [
        {
          "language" : "en",
          "use" : {
            "code" : "definition"
          },
          "value" : "The player of the role is a son of the scoping person's spouse by a previous union."
        },
        {
          "language" : "en",
          "use" : {
            "code" : "display"
          },
          "value" : "stepson"
        }
      ],
      "property" : [
        {
          "code" : "subsumedBy",
          "valueCode" : "SONC"
        },
        {
          "code" : "subsumedBy",
          "valueCode" : "STPCHLD"
        }
      ]
    },
    {
      "code" : "UNCLE",
      "display" : "strýc",
      "definition" : "Bratr matky nebo otce dotčené osoby.",
      "designation" : [
        {
          "language" : "en",
          "use" : {
            "code" : "definition"
          },
          "value" : "The player of the role is a brother of the scoping person's mother or father."
        },
        {
          "language" : "en",
          "use" : {
            "code" : "display"
          },
          "value" : "uncle"
        }
      ],
      "property" : [
        {
          "code" : "subsumedBy",
          "valueCode" : "EXT"
        }
      ]
    },
    {
      "code" : "WIFE",
      "display" : "manželka",
      "definition" : "Žena, která je manželským partnerem dotčené osoby.",
      "designation" : [
        {
          "language" : "en",
          "use" : {
            "code" : "definition"
          },
          "value" : "The player of the role is a woman joined to a man (scoping person) in marriage."
        },
        {
          "language" : "en",
          "use" : {
            "code" : "display"
          },
          "value" : "wife"
        }
      ],
      "property" : [
        {
          "code" : "subsumedBy",
          "valueCode" : "SPS"
        }
      ]
    },
    {
      "code" : "_ContactRoleType",
      "display" : "ContactRoleType",
      "definition" : "Typy kontaktů pro kód role \\\"CON\\“",
      "designation" : [
        {
          "language" : "en",
          "use" : {
            "code" : "definition"
          },
          "value" : "Types of contact for Role code \"CON\""
        },
        {
          "language" : "en",
          "use" : {
            "code" : "display"
          },
          "value" : "ContactRoleType"
        }
      ],
      "property" : [
        {
          "code" : "notSelectable",
          "valueBoolean" : true
        }
      ]
    },
    {
      "code" : "_PersonalRelationshipRoleType",
      "display" : "PersonalRelationshipRoleType",
      "definition" : "Typy osobních vztahů pro kód role \\\"PRN\\“",
      "designation" : [
        {
          "language" : "en",
          "use" : {
            "code" : "display"
          },
          "value" : "PersonalRelationshipRoleType"
        }
      ],
      "property" : [
        {
          "code" : "notSelectable",
          "valueBoolean" : true
        }
      ]
    }
  ]
}

```
