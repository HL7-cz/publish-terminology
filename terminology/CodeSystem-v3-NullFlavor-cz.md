# Null Flavor (CZ supplement) - HL7 Czech Terminology Implementation Guide v0.2.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Null Flavor (CZ supplement)**

## CodeSystem: Null Flavor (CZ supplement) 

| | |
| :--- | :--- |
| *Official URL*:https://hl7.cz/terminology/CodeSystem/v3-NullFlavor-cz | *Version*:0.2.0 |
| Draft as of 2025-12-13 | *Computable Name*:NullFlavor |

 
Null Flavor (CZ Code system supplement) 

 This Code system is referenced in the content logical definition of the following value sets: 

* This CodeSystem Supplement is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "v3-NullFlavor-cz",
  "language" : "cs",
  "url" : "https://hl7.cz/terminology/CodeSystem/v3-NullFlavor-cz",
  "version" : "0.2.0",
  "name" : "NullFlavor",
  "title" : "Null Flavor (CZ supplement)",
  "status" : "draft",
  "experimental" : false,
  "date" : "2025-12-13T05:22:58.056901Z",
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
  "description" : "Null Flavor (CZ Code system supplement)",
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
  "supplements" : "http://terminology.hl7.org/CodeSystem/v3-NullFlavor|3.0.0",
  "property" : [
    {
      "code" : "status",
      "uri" : "http://hl7.org/fhir/concept-properties#status",
      "description" : "Status",
      "type" : "code"
    },
    {
      "code" : "subsumedBy",
      "uri" : "http://hl7.org/fhir/concept-properties#parent",
      "description" : "The concept code of a parent concept",
      "type" : "code"
    }
  ],
  "concept" : [
    {
      "code" : "ASKU",
      "display" : "dotázáno, ale neznámé",
      "definition" : "Informace byla zjišťována, ale nebyla získána (např. pacient byl dotázán, ale nevěděl).",
      "designation" : [
        {
          "language" : "en",
          "use" : {
            "code" : "definition"
          },
          "value" : "Information was sought but not found (e.g., patient was asked but didn't know)"
        },
        {
          "language" : "en",
          "use" : {
            "code" : "display"
          },
          "value" : "asked but unknown"
        }
      ],
      "property" : [
        {
          "code" : "status",
          "valueCode" : "active"
        },
        {
          "code" : "subsumedBy",
          "valueCode" : "UNK"
        }
      ]
    },
    {
      "code" : "DER",
      "display" : "odvozeno",
      "definition" : "**Popis:** Skutečná hodnota může existovat, ale musí být odvozena z poskytnutých informací (k vyjádření odvozeného výrazu se obvykle používá rozšíření generického datového typu EXPR).",
      "designation" : [
        {
          "language" : "en",
          "use" : {
            "code" : "definition"
          },
          "value" : "**Description:**An actual value may exist, but it must be derived from the provided information (usually an EXPR generic data type extension will be used to convey the derivation expressionexpression ."
        },
        {
          "language" : "en",
          "use" : {
            "code" : "display"
          },
          "value" : "derived"
        }
      ],
      "property" : [
        {
          "code" : "status",
          "valueCode" : "active"
        },
        {
          "code" : "subsumedBy",
          "valueCode" : "INV"
        }
      ]
    },
    {
      "code" : "INV",
      "display" : "neplatné",
      "definition" : "**Popis:** Hodnota reprezentovaná v instanci není součástí stanoveného oboru hodnot proměnné.",
      "designation" : [
        {
          "language" : "en",
          "use" : {
            "code" : "definition"
          },
          "value" : "**Description:**The value as represented in the instance is not a member of the set of permitted data values in the constrained value domain of a variable."
        },
        {
          "language" : "en",
          "use" : {
            "code" : "display"
          },
          "value" : "invalid"
        }
      ],
      "property" : [
        {
          "code" : "status",
          "valueCode" : "active"
        },
        {
          "code" : "subsumedBy",
          "valueCode" : "NI"
        }
      ]
    },
    {
      "code" : "MSK",
      "display" : "zatajeno",
      "definition" : "K této položce jsou k dispozici informace, ale odesílatel je z bezpečnostních, soukromých nebo jiných důvodů neposkytl. K získání přístupu k těmto informacím může existovat alternativní mechanismus. Poznámka: použití této varianty null flavor sice neposkytuje žádné podrobné údaje, ale přesto může dojít k porušení důvěrnosti informací. Její primární účel spočívá v situacích, kdy je nutné informovat příjemce o existenci informací, aniž by byl poskytnut jejich obsah.",
      "designation" : [
        {
          "language" : "en",
          "use" : {
            "code" : "definition"
          },
          "value" : "There is information on this item available but it has not been provided by the sender due to security, privacy or other reasons. There may be an alternate mechanism for gaining access to this information.\r\n\r\nNote: using this null flavor does provide information that may be a breach of confidentiality, even though no detail data is provided. Its primary purpose is for those circumstances where it is necessary to inform the receiver that the information does exist without providing any detail."
        },
        {
          "language" : "en",
          "use" : {
            "code" : "display"
          },
          "value" : "masked"
        }
      ],
      "property" : [
        {
          "code" : "status",
          "valueCode" : "active"
        },
        {
          "code" : "subsumedBy",
          "valueCode" : "NI"
        }
      ]
    },
    {
      "code" : "NA",
      "display" : "neuplatní se",
      "definition" : "Je známo, že nemá žádnou odpovídající hodnotu (např. poslední menstruace u muže).",
      "designation" : [
        {
          "language" : "en",
          "use" : {
            "code" : "definition"
          },
          "value" : "Known to have no proper value (e.g., last menstrual period for a male)."
        },
        {
          "language" : "en",
          "use" : {
            "code" : "display"
          },
          "value" : "not applicable"
        }
      ],
      "property" : [
        {
          "code" : "status",
          "valueCode" : "active"
        },
        {
          "code" : "subsumedBy",
          "valueCode" : "NI"
        }
      ]
    },
    {
      "code" : "NASK",
      "display" : "nezjišťováno",
      "definition" : "Tato informace nebyla zjišťována (např. pacient nebyl dotazován).",
      "designation" : [
        {
          "language" : "en",
          "use" : {
            "code" : "definition"
          },
          "value" : "This information has not been sought (e.g., patient was not asked)"
        },
        {
          "language" : "en",
          "use" : {
            "code" : "display"
          },
          "value" : "not asked"
        }
      ],
      "property" : [
        {
          "code" : "status",
          "valueCode" : "active"
        },
        {
          "code" : "subsumedBy",
          "valueCode" : "UNK"
        }
      ]
    },
    {
      "code" : "NAV",
      "display" : "dočasně neznámé",
      "definition" : "Informace nejsou v tuto chvíli k dispozici, ale očekává se, že budou k dispozici později.",
      "designation" : [
        {
          "language" : "en",
          "use" : {
            "code" : "definition"
          },
          "value" : "Information is not available at this time but it is expected that it will be available later."
        },
        {
          "language" : "en",
          "use" : {
            "code" : "display"
          },
          "value" : "temporarily unavailable"
        }
      ],
      "property" : [
        {
          "code" : "status",
          "valueCode" : "active"
        },
        {
          "code" : "subsumedBy",
          "valueCode" : "ASKU"
        },
        {
          "code" : "subsumedBy",
          "valueCode" : "NAVU"
        }
      ]
    },
    {
      "code" : "NAVU",
      "display" : "neznámé",
      "definition" : "Informace nejsou v současné době k dispozici (bez očekávání, zda budou nebo nebudou k dispozici v budoucnu).",
      "designation" : [
        {
          "language" : "en",
          "use" : {
            "code" : "definition"
          },
          "value" : "Information is not available at this time (with no expectation regarding whether it will or will not be available in the future)."
        },
        {
          "language" : "en",
          "use" : {
            "code" : "display"
          },
          "value" : "Not available"
        }
      ],
      "property" : [
        {
          "code" : "status",
          "valueCode" : "active"
        },
        {
          "code" : "subsumedBy",
          "valueCode" : "UNK"
        }
      ]
    },
    {
      "code" : "NI",
      "display" : "žádné informace",
      "definition" : "**Popis:** Hodnota je výjimečná (chybí, je vynechána, je neúplná, je nesprávná). Není uvedeno žádné vysvětlení, proč je hodnota označena jako výjimečná. Jedná se o nejobecnější a také výchozí způsob označení výjimečné hodnoty.",
      "designation" : [
        {
          "language" : "en",
          "use" : {
            "code" : "definition"
          },
          "value" : "**Description:**The value is exceptional (missing, omitted, incomplete, improper). No information as to the reason for being an exceptional value is provided. This is the most general exceptional value. It is also the default exceptional value."
        },
        {
          "language" : "en",
          "use" : {
            "code" : "display"
          },
          "value" : "NoInformation"
        }
      ],
      "property" : [
        {
          "code" : "status",
          "valueCode" : "active"
        }
      ]
    },
    {
      "code" : "NINF",
      "display" : "záporná nekonečnost",
      "definition" : "Záporná nekonečnost čísel.",
      "designation" : [
        {
          "language" : "en",
          "use" : {
            "code" : "definition"
          },
          "value" : "Negative infinity of numbers."
        },
        {
          "language" : "en",
          "use" : {
            "code" : "display"
          },
          "value" : "negative infinity"
        }
      ],
      "property" : [
        {
          "code" : "status",
          "valueCode" : "active"
        },
        {
          "code" : "subsumedBy",
          "valueCode" : "OTH"
        }
      ]
    },
    {
      "code" : "NP",
      "display" : "není uvedeno",
      "definition" : "Hodnota není přítomna ve zprávě. Definuje se pouze ve zprávách, nikdy v aplikačních datech! Všechny hodnoty, které nejsou přítomny ve zprávě, musí být v aplikačních datech nahrazeny příslušnou implicitní hodnotou nebo hodnotou „bez informací“ (NI).",
      "designation" : [
        {
          "language" : "en",
          "use" : {
            "code" : "definition"
          },
          "value" : "Value is not present in a message. This is only defined in messages, never in application data! All values not present in the message must be replaced by the applicable default, or no-information (NI) as the default of all defaults."
        },
        {
          "language" : "en",
          "use" : {
            "code" : "display"
          },
          "value" : "not present"
        }
      ],
      "property" : [
        {
          "code" : "status",
          "valueCode" : "active"
        }
      ]
    },
    {
      "code" : "OTH",
      "display" : "jinak",
      "definition" : "**Popis:** Skutečná hodnota není členem oboru hodnot proměnné. (např. pojem není obsažen v požadovaném kódovém systému). **Poznámky k použití**: Tento typ a jeho specializace se nejčastěji používají s datovým typem CD a jeho typy. Může se však vztahovat na \\*jakýkoli\\* datový typ, u kterého jsou omezení typu přísnější, než lze vyjádřit. U kódovaných datových typů lze tento typ null flavor použít pouze v případě, že vazba slovníku má kódovací sílu CNE. Podle definice jsou všechny místní kódy a původní text součástí sady hodnot, pokud je kódovací síla CWE.",
      "designation" : [
        {
          "language" : "en",
          "use" : {
            "code" : "definition"
          },
          "value" : "**Description:**The actual value is not a member of the set of permitted data values in the constrained value domain of a variable. (e.g., concept not provided by required code system).\r\n\r\n**Usage Notes**: This flavor and its specializations are most commonly used with the CD datatype and its flavors. However, it may apply to \\*any\\* datatype where the constraints of the type are tighter than can be conveyed. For example, a PQ that is for a true measured amount whose units are not supported in UCUM, a need to convey a REAL when the type has been constrained to INT, etc.\r\n\r\nWith coded datatypes, this null flavor may only be used if the vocabulary binding has a coding strength of CNE. By definition, all local codes and original text are part of the value set if the coding strength is CWE."
        },
        {
          "language" : "en",
          "use" : {
            "code" : "display"
          },
          "value" : "other"
        }
      ],
      "property" : [
        {
          "code" : "status",
          "valueCode" : "active"
        },
        {
          "code" : "subsumedBy",
          "valueCode" : "INV"
        }
      ]
    },
    {
      "code" : "PINF",
      "display" : "kladná nekonečnost",
      "definition" : "Kladná nekonečnost čísel.",
      "designation" : [
        {
          "language" : "en",
          "use" : {
            "code" : "definition"
          },
          "value" : "Positive infinity of numbers."
        },
        {
          "language" : "en",
          "use" : {
            "code" : "display"
          },
          "value" : "positive infinity"
        }
      ],
      "property" : [
        {
          "code" : "status",
          "valueCode" : "active"
        },
        {
          "code" : "subsumedBy",
          "valueCode" : "OTH"
        }
      ]
    },
    {
      "code" : "QS",
      "display" : "dostatečné množství",
      "definition" : "**Popis:**Konkrétní množství není známo, ale je známo, že není nulové a není specifikováno, protože tvoří většinu materiálu. Např. „Přidejte 10 mg složky X, 50 mg složky Y a dostatečné množství vody na 100 ml.“ K vyjádření množství vody by se použila taro hodnota null flavor.",
      "designation" : [
        {
          "language" : "en",
          "use" : {
            "code" : "definition"
          },
          "value" : "**Description:**The specific quantity is not known, but is known to be non-zero and is not specified because it makes up the bulk of the material. e.g. 'Add 10mg of ingredient X, 50mg of ingredient Y, and sufficient quantity of water to 100mL.' The null flavor would be used to express the quantity of water."
        },
        {
          "language" : "en",
          "use" : {
            "code" : "display"
          },
          "value" : "Sufficient Quantity"
        }
      ],
      "property" : [
        {
          "code" : "status",
          "valueCode" : "active"
        },
        {
          "code" : "subsumedBy",
          "valueCode" : "UNK"
        }
      ]
    },
    {
      "code" : "TRC",
      "display" : "stopa",
      "definition" : "Obsah je větší než nula, ale příliš malý na to, aby mohl být kvantifikován.",
      "designation" : [
        {
          "language" : "en",
          "use" : {
            "code" : "definition"
          },
          "value" : "The content is greater than zero, but too small to be quantified."
        },
        {
          "language" : "en",
          "use" : {
            "code" : "display"
          },
          "value" : "trace"
        }
      ],
      "property" : [
        {
          "code" : "status",
          "valueCode" : "active"
        },
        {
          "code" : "subsumedBy",
          "valueCode" : "UNK"
        }
      ]
    },
    {
      "code" : "UNC",
      "display" : "nekódováno",
      "definition" : "**Popis:** Skutečná hodnota ještě nebyla zakódována pomocí schváleného oboru hodnot. **Příklad**: Byl zadán původní text nebo lokální kód, ale překlad nebo kódování do schválené sady hodnot ještě neproběhlo z důvodu omezení na straně odesílacího systému. Původní text byl zaznamenán pro PQ, ale nebyl proveden pokus o rozdělení hodnoty a jednotky nebo o zakódování jednotky v UCUM. **Poznámky k použití**: Pokud je známo, že není možné koncept zakódovat, mělo by se místo toho použít OTH. Použití UNC však nutně nezaručuje, že koncept bude zakódovatelný, pouze to, že se o kódování nepokusili. Vlastnosti datového typu, jako je původní text a překlady, mohou být přítomny, pokud je použita tato varianta.",
      "designation" : [
        {
          "language" : "en",
          "use" : {
            "code" : "definition"
          },
          "value" : "**Description:** The actual value has not yet been encoded within the approved value domain.\r\n\r\n**Example**: Original text or a local code has been specified but translation or encoding to the approved value set has not yet occurred due to limitations of the sending system. Original text has been captured for a PQ, but not attempt has been made to split the value and unit or to encode the unit in UCUM.\r\n\r\n**Usage Notes**: If it is known that it is not possible to encode the concept, OTH should be used instead. However, use of UNC does not necessarily guarantee the concept will be encodable, only that encoding has not been attempted.\r\n\r\nData type properties such as original text and translations may be present when this null flavor is included."
        },
        {
          "language" : "en",
          "use" : {
            "code" : "display"
          },
          "value" : "un-encoded"
        }
      ],
      "property" : [
        {
          "code" : "status",
          "valueCode" : "active"
        },
        {
          "code" : "subsumedBy",
          "valueCode" : "INV"
        }
      ]
    },
    {
      "code" : "UNK",
      "display" : "není známo",
      "definition" : "**Popis:** Správná hodnota by měla být použita, ale není známa. **Poznámky k použití**: To znamená, že skutečná hodnota není známa. Pokud jedinou neznámou věcí je, jak správně vyjádřit požadovanou hodnotu v rámci daných omezení (sada hodnot, datový typ atd.), pak by se měla použít varianta OTH nebo UNC. Pro datový typ s touto vlastností by neměly být uvedeny žádné jiné vlastnosti, ledaže: 1. Tyto vlastnosti samy o sobě přímo odpovídají sémantice „neznámé“. (Např. lokální kód odeslaný jako překlad, který vyjadřuje „neznámé“). 2. Tyto vlastnosti dále upřesňují povahu toho, co je neznámé. (Např. zadání kódu použití „H“ a předpony URL „tel:“, aby bylo zřejmé, že se jedná o neznámé číslo domácího telefonu.)",
      "designation" : [
        {
          "language" : "en",
          "use" : {
            "code" : "definition"
          },
          "value" : "**Description:**A proper value is applicable, but not known.\r\n\r\n**Usage Notes**: This means the actual value is not known. If the only thing that is unknown is how to properly express the value in the necessary constraints (value set, datatype, etc.), then the OTH or UNC flavor should be used. No properties should be included for a datatype with this property unless:\r\n\r\n1.  Those properties themselves directly translate to a semantic of \"unknown\". (E.g. a local code sent as a translation that conveys 'unknown')\r\n2.  Those properties further qualify the nature of what is unknown. (E.g. specifying a use code of \"H\" and a URL prefix of \"tel:\" to convey that it is the home phone number that is unknown.)"
        },
        {
          "language" : "en",
          "use" : {
            "code" : "display"
          },
          "value" : "unknown"
        }
      ],
      "property" : [
        {
          "code" : "status",
          "valueCode" : "active"
        },
        {
          "code" : "subsumedBy",
          "valueCode" : "NI"
        }
      ]
    }
  ]
}

```
