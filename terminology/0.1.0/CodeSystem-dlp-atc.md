# ATC CZ - HL7 Czech Terminology Implementation Guide v0.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ATC CZ**

## CodeSystem: ATC CZ 

| | |
| :--- | :--- |
| *Official URL*:https://sukl.cz/terminology/CodeSystem/dlp-atc | *Version*:0.1.0 |
| Draft as of 2025-12-02 | *Computable Name*:CS_DLP_atc |

 
Czech national version of the Anatomical Therapeutical Chemical (ATC) code system. 

 This Code system is referenced in the content logical definition of the following value sets: 

* [DLP_atc](ValueSet-dlp-atc.md)

Language: cs

**Properties**

**This code system defines the following properties for its concepts**

**Concepts**

This case-sensitive code system `https://sukl.cz/terminology/CodeSystem/dlp-atc` provides **a fragment** that includes following codes in a Grouped By hierarchy:



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "dlp-atc",
  "language" : "cs",
  "url" : "https://sukl.cz/terminology/CodeSystem/dlp-atc",
  "version" : "0.1.0",
  "name" : "CS_DLP_atc",
  "title" : "ATC CZ",
  "status" : "draft",
  "experimental" : false,
  "date" : "2025-12-02T17:10:03+01:00",
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
  "description" : "Czech national version of the Anatomical Therapeutical Chemical (ATC) code system.",
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
  "caseSensitive" : true,
  "hierarchyMeaning" : "grouped-by",
  "content" : "fragment",
  "property" : [
    {
      "code" : "NT",
      "description" : "N-podle ATC-WHO, C-podle SÚKL",
      "type" : "string"
    }
  ],
  "concept" : [
    {
      "code" : "A",
      "display" : "TRÁVICÍ TRAKT A METABOLISMUS",
      "designation" : [
        {
          "language" : "en",
          "value" : "ALIMENTARY TRACT AND METABOLISM"
        }
      ],
      "property" : [
        {
          "code" : "NT",
          "valueString" : "N"
        }
      ],
      "concept" : [
        {
          "code" : "A01",
          "display" : "STOMATOLOGICKÉ PŘÍPRAVKY",
          "designation" : [
            {
              "language" : "en",
              "value" : "STOMATOLOGICAL PREPARATIONS"
            }
          ],
          "property" : [
            {
              "code" : "NT",
              "valueString" : "N"
            }
          ],
          "concept" : [
            {
              "code" : "A01A",
              "display" : "STOMATOLOGICKÉ PŘÍPRAVKY",
              "designation" : [
                {
                  "language" : "en",
                  "value" : "STOMATOLOGICAL PREPARATIONS"
                }
              ],
              "property" : [
                {
                  "code" : "NT",
                  "valueString" : "N"
                }
              ],
              "concept" : [
                {
                  "code" : "A01AA",
                  "display" : "Látky k prevenci zubního kazu",
                  "designation" : [
                    {
                      "language" : "en",
                      "value" : "Caries prophylactic agents"
                    }
                  ],
                  "property" : [
                    {
                      "code" : "NT",
                      "valueString" : "N"
                    }
                  ],
                  "concept" : [
                    {
                      "code" : "A01AA01",
                      "display" : "fluorid sodný",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "sodium fluoride"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A01AA02",
                      "display" : "monofluorofosforečnan sodný",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "sodium monofluorophosphate"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A01AA03",
                      "display" : "olaflur",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "olaflur"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A01AA04",
                      "display" : "fluorid cínatý",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "stannous fluoride"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A01AA30",
                      "display" : "látky k prevenci zubního kazu, kombinace",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "combinations"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A01AA51",
                      "display" : "fluorid sodný, kombinace",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "sodium fluoride, combinations"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    }
                  ]
                },
                {
                  "code" : "A01AB",
                  "display" : "Antiinfektiva a antiseptika pro lokální léčbu v dutině ústní",
                  "designation" : [
                    {
                      "language" : "en",
                      "value" : "Antiinfectives and antiseptics for local oral treatment"
                    }
                  ],
                  "property" : [
                    {
                      "code" : "NT",
                      "valueString" : "N"
                    }
                  ],
                  "concept" : [
                    {
                      "code" : "A01AB02",
                      "display" : "peroxid vodíku",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "hydrogen peroxide"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A01AB03",
                      "display" : "chlorhexidin",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "chlorhexidine"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A01AB04",
                      "display" : "amfotericin B",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "amphotericin B"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A01AB05",
                      "display" : "polynoxylin",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "polynoxylin"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A01AB06",
                      "display" : "domifen",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "domiphen"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A01AB07",
                      "display" : "oxychinolin",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "oxyquinoline"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A01AB08",
                      "display" : "neomycin",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "neomycin"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A01AB09",
                      "display" : "mikonazol",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "miconazole"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A01AB10",
                      "display" : "natamycin",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "natamycin"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A01AB11",
                      "display" : "různá jiná antiinfektiva a antiseptika",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "various"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A01AB12",
                      "display" : "hexetidin",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "hexetidine"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A01AB13",
                      "display" : "tetracyklin",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "tetracycline"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A01AB14",
                      "display" : "benzoxonium-chlorid",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "benzoxonium chloride"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A01AB15",
                      "display" : "tibezonium-jodid",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "tibezonium iodide"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A01AB16",
                      "display" : "mepartricin",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "mepartricin"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A01AB17",
                      "display" : "metronidazol",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "metronidazole"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A01AB18",
                      "display" : "klotrimazol",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "clotrimazole"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A01AB19",
                      "display" : "peroxoboritan sodný",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "sodium perborate"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A01AB21",
                      "display" : "chlortetracyklin",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "chlortetracycline"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A01AB22",
                      "display" : "doxycyklin",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "doxycycline"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A01AB23",
                      "display" : "minocyklin",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "minocycline"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A01AB24",
                      "display" : "oktenidin",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "octenidine"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A01AB25",
                      "display" : "oxytetracyklin",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "oxytetracycline"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A01AB53",
                      "display" : "chlorhexidin a cetylpyridinium",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "chlorhexidine and cetylpyridinium"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    }
                  ]
                },
                {
                  "code" : "A01AC",
                  "display" : "Kortikosteroidy pro lokální léčbu v dutině ústní",
                  "designation" : [
                    {
                      "language" : "en",
                      "value" : "Corticosteroids for local oral treatment"
                    }
                  ],
                  "property" : [
                    {
                      "code" : "NT",
                      "valueString" : "N"
                    }
                  ],
                  "concept" : [
                    {
                      "code" : "A01AC01",
                      "display" : "triamcinolon",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "triamcinolone"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A01AC02",
                      "display" : "dexamethason",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "dexamethasone"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A01AC03",
                      "display" : "hydrokortison",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "hydrocortisone"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A01AC04",
                      "display" : "prednisolon",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "prednisolone"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A01AC54",
                      "display" : "prednisolon, kombinace",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "prednisolone, combinations"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    }
                  ]
                },
                {
                  "code" : "A01AD",
                  "display" : "Jiná léčiva pro lokální léčbu v dutině ústní",
                  "designation" : [
                    {
                      "language" : "en",
                      "value" : "Other agents for local oral treatment"
                    }
                  ],
                  "property" : [
                    {
                      "code" : "NT",
                      "valueString" : "N"
                    }
                  ],
                  "concept" : [
                    {
                      "code" : "A01AD01",
                      "display" : "epinefrin",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "epinephrine"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A01AD02",
                      "display" : "benzydamin",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "benzydamine"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A01AD05",
                      "display" : "kyselina acetylsalicylová",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "acetylsalicylic acid"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A01AD06",
                      "display" : "adrenalon",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "adrenalone"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A01AD07",
                      "display" : "amlexanox",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "amlexanox"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A01AD08",
                      "display" : "bekaplermin",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "becaplermin"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A01AD11",
                      "display" : "různá jiná léčiva pro lokální léčbu v dutině ústní",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "various"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    }
                  ]
                }
              ]
            }
          ]
        },
        {
          "code" : "A02",
          "display" : "LÉČIVA K TERAPII ONEMOCNĚNÍ SPOJENÝCH S PORUCHOU ACIDITY",
          "designation" : [
            {
              "language" : "en",
              "value" : "DRUGS FOR ACID RELATED DISORDERS"
            }
          ],
          "property" : [
            {
              "code" : "NT",
              "valueString" : "N"
            }
          ],
          "concept" : [
            {
              "code" : "A02A",
              "display" : "ANTACIDA",
              "designation" : [
                {
                  "language" : "en",
                  "value" : "ANTACIDS"
                }
              ],
              "property" : [
                {
                  "code" : "NT",
                  "valueString" : "N"
                }
              ],
              "concept" : [
                {
                  "code" : "A02AA",
                  "display" : "Sloučeniny hořčíku",
                  "designation" : [
                    {
                      "language" : "en",
                      "value" : "Magnesium compounds"
                    }
                  ],
                  "property" : [
                    {
                      "code" : "NT",
                      "valueString" : "N"
                    }
                  ],
                  "concept" : [
                    {
                      "code" : "A02AA01",
                      "display" : "uhličitan hořečnatý",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "magnesium carbonate"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A02AA02",
                      "display" : "oxid hořečnatý",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "magnesium oxide"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A02AA03",
                      "display" : "peroxid hořečnatý",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "magnesium peroxide"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A02AA04",
                      "display" : "hydroxid hořečnatý",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "magnesium hydroxide"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A02AA05",
                      "display" : "křemičitan hořečnatý",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "magnesium silicate"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A02AA10",
                      "display" : "sloučeniny hořčíku, kombinace",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "combinations"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    }
                  ]
                },
                {
                  "code" : "A02AB",
                  "display" : "Sloučeniny hliníku",
                  "designation" : [
                    {
                      "language" : "en",
                      "value" : "Aluminium compounds"
                    }
                  ],
                  "property" : [
                    {
                      "code" : "NT",
                      "valueString" : "N"
                    }
                  ],
                  "concept" : [
                    {
                      "code" : "A02AB01",
                      "display" : "hydroxid hlinitý",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "aluminium hydroxide"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A02AB02",
                      "display" : "algeldrát",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "algeldrate"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A02AB03",
                      "display" : "fosforečnan hlinitý",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "aluminium phosphate"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A02AB04",
                      "display" : "uhličitan dihydroxyhlinito-sodný",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "dihydroxialumini sodium carbonate"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A02AB05",
                      "display" : "aluminium-acetylacetonát",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "aluminium acetoacetate"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A02AB06",
                      "display" : "aloglutamol",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "aloglutamol"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A02AB07",
                      "display" : "dihydroxyaluminium-glycinát",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "aluminium glycinate"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A02AB10",
                      "display" : "sloučeniny hliníku, kombinace",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "combinations"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    }
                  ]
                },
                {
                  "code" : "A02AC",
                  "display" : "Sloučeniny vápníku",
                  "designation" : [
                    {
                      "language" : "en",
                      "value" : "Calcium compounds"
                    }
                  ],
                  "property" : [
                    {
                      "code" : "NT",
                      "valueString" : "N"
                    }
                  ],
                  "concept" : [
                    {
                      "code" : "A02AC01",
                      "display" : "uhličitan vápenatý",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "calcium carbonate"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A02AC02",
                      "display" : "křemičitan vápenatý",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "calcium silicate"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A02AC10",
                      "display" : "sloučeniny vápníku, kombinace",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "combinations"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    }
                  ]
                },
                {
                  "code" : "A02AD",
                  "display" : "Kombinace a komplexy sloučenin hliníku, vápníku a hořčíku",
                  "designation" : [
                    {
                      "language" : "en",
                      "value" : "Combinations and complexes of aluminium, calcium and magnesium compounds"
                    }
                  ],
                  "property" : [
                    {
                      "code" : "NT",
                      "valueString" : "N"
                    }
                  ],
                  "concept" : [
                    {
                      "code" : "A02AD01",
                      "display" : "kombinace běžných solí",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "ordinary salt combinations"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A02AD02",
                      "display" : "magaldrát",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "magaldrate"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A02AD03",
                      "display" : "almagát",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "almagate"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A02AD04",
                      "display" : "hydrotalcit",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "hydrotalcite"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A02AD05",
                      "display" : "almasilát",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "almasilate"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    }
                  ]
                },
                {
                  "code" : "A02AF",
                  "display" : "Antacida s antiflatulencii",
                  "designation" : [
                    {
                      "language" : "en",
                      "value" : "Antacids with antiflatulents"
                    }
                  ],
                  "property" : [
                    {
                      "code" : "NT",
                      "valueString" : "N"
                    }
                  ],
                  "concept" : [
                    {
                      "code" : "A02AF01",
                      "display" : "magaldrát a antiflatulencia",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "magaldrate and antiflatulents"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A02AF02",
                      "display" : "kombinace běžných solí s antiflatulencii",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "ordinary salt combinations and antiflatulents"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    }
                  ]
                },
                {
                  "code" : "A02AG",
                  "display" : "Antacida se spazmolytiky",
                  "designation" : [
                    {
                      "language" : "en",
                      "value" : "Antacids with antispasmodics"
                    }
                  ],
                  "property" : [
                    {
                      "code" : "NT",
                      "valueString" : "N"
                    }
                  ]
                },
                {
                  "code" : "A02AH",
                  "display" : "Antacida s uhličitanem sodným",
                  "designation" : [
                    {
                      "language" : "en",
                      "value" : "Antacids with sodium bicarbonate"
                    }
                  ],
                  "property" : [
                    {
                      "code" : "NT",
                      "valueString" : "N"
                    }
                  ]
                },
                {
                  "code" : "A02AX",
                  "display" : "Antacida, jiné kombinace",
                  "designation" : [
                    {
                      "language" : "en",
                      "value" : "Antacids, other combinations"
                    }
                  ],
                  "property" : [
                    {
                      "code" : "NT",
                      "valueString" : "N"
                    }
                  ]
                }
              ]
            },
            {
              "code" : "A02B",
              "display" : "LÉČIVA K TERAPII PEPTICKÉHO VŘEDU A REFLUXNÍ CHOROBY JÍCNU",
              "designation" : [
                {
                  "language" : "en",
                  "value" : "DRUGS FOR PEPTIC ULCER AND GASTRO-OESOPHAGEAL REFLUX DISEASE (GORD)"
                }
              ],
              "property" : [
                {
                  "code" : "NT",
                  "valueString" : "N"
                }
              ],
              "concept" : [
                {
                  "code" : "A02BA",
                  "display" : "Antagonisté H2-receptorů",
                  "designation" : [
                    {
                      "language" : "en",
                      "value" : "H2-receptor antagonists"
                    }
                  ],
                  "property" : [
                    {
                      "code" : "NT",
                      "valueString" : "N"
                    }
                  ],
                  "concept" : [
                    {
                      "code" : "A02BA01",
                      "display" : "cimetidin",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "cimetidine"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A02BA02",
                      "display" : "ranitidin",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "ranitidine"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A02BA03",
                      "display" : "famotidin",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "famotidine"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A02BA04",
                      "display" : "nizatidin",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "nizatidine"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A02BA05",
                      "display" : "niperotidin",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "niperotidine"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A02BA06",
                      "display" : "roxatidin",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "roxatidine"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A02BA07",
                      "display" : "ranitidin-bismut-citrát",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "ranitidine bismuth citrate"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A02BA08",
                      "display" : "lafutidin",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "lafutidine"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A02BA51",
                      "display" : "cimetidin, kombinace",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "cimetidine, combinations"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A02BA53",
                      "display" : "famotidin, kombinace",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "famotidine, combinations"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    }
                  ]
                },
                {
                  "code" : "A02BB",
                  "display" : "Prostaglandiny",
                  "designation" : [
                    {
                      "language" : "en",
                      "value" : "Prostaglandins"
                    }
                  ],
                  "property" : [
                    {
                      "code" : "NT",
                      "valueString" : "N"
                    }
                  ],
                  "concept" : [
                    {
                      "code" : "A02BB01",
                      "display" : "misoprostol",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "misoprostol"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A02BB02",
                      "display" : "enprostil",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "enprostil"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    }
                  ]
                },
                {
                  "code" : "A02BC",
                  "display" : "Inhibitory protonové pumpy",
                  "designation" : [
                    {
                      "language" : "en",
                      "value" : "Proton pump inhibitors"
                    }
                  ],
                  "property" : [
                    {
                      "code" : "NT",
                      "valueString" : "N"
                    }
                  ],
                  "concept" : [
                    {
                      "code" : "A02BC01",
                      "display" : "omeprazol",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "omeprazole"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A02BC02",
                      "display" : "pantoprazol",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "pantoprazole"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A02BC03",
                      "display" : "lansoprazol",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "lansoprazole"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A02BC04",
                      "display" : "rabeprazol",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "rabeprazole"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A02BC05",
                      "display" : "esomeprazol",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "esomeprazole"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A02BC06",
                      "display" : "dexlansoprazol",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "dexlansoprazole"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A02BC07",
                      "display" : "dexrabeprazol",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "dexrabeprazole"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A02BC08",
                      "display" : "vonoprazan",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "vonoprazan"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A02BC09",
                      "display" : "tegoprazan",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "tegoprazan"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A02BC10",
                      "display" : "fexuprazan",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "fexuprazan"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A02BC11",
                      "display" : "ilaprazol",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "ilaprazole"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A02BC51",
                      "display" : "omeprazol, kombinace",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "omeprazole, combinations"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A02BC53",
                      "display" : "lansoprazol, kombinace",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "lansoprazole, combinations"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A02BC54",
                      "display" : "rabeprazol, kombinace",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "rabeprazole, combinations"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    }
                  ]
                },
                {
                  "code" : "A02BD",
                  "display" : "Kombinace k eradikaci helicobacter pylori",
                  "designation" : [
                    {
                      "language" : "en",
                      "value" : "Combinations for eradication of Helicobacter pylori"
                    }
                  ],
                  "property" : [
                    {
                      "code" : "NT",
                      "valueString" : "N"
                    }
                  ],
                  "concept" : [
                    {
                      "code" : "A02BD01",
                      "display" : "omeprazol, amoxicilin a metronidazol",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "omeprazole, amoxicillin and metronidazole"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A02BD02",
                      "display" : "lansoprazol, tetracyklin a metronidazol",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "lansoprazole, tetracycline and metronidazole"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A02BD03",
                      "display" : "lansoprazol, amoxicilin a metronidazol",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "lansoprazole, amoxicillin and metronidazole"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A02BD04",
                      "display" : "pantoprazol, amoxicilin a klarithromycin",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "pantoprazole, amoxicillin and clarithromycin"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A02BD05",
                      "display" : "omeprazol, amoxicilin a klarithromycin",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "omeprazole, amoxicillin and clarithromycin"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A02BD06",
                      "display" : "esomeprazol, amoxicilin a klarithromycin",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "esomeprazole, amoxicillin and clarithromycin"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A02BD07",
                      "display" : "lansoprazol, amoxicilin a klarithromycin",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "lansoprazole, amoxicillin and clarithromycin"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A02BD08",
                      "display" : "zásaditý citronan bismutitý, tetracyklin a metronidazol",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "bismuth subcitrate, tetracycline and metronidazole"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A02BD09",
                      "display" : "lansoprazol, klarithromycin a tinidazol",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "lansoprazole, clarithromycin and tinidazole"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A02BD10",
                      "display" : "lansoprazol, amoxicilin a levofloxacin",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "lansoprazole, amoxicillin and levofloxacin"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A02BD11",
                      "display" : "pantoprazol, amoxicilin, klarithromycin a metronidazol",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "pantoprazole, amoxicillin, clarithromycin and metronidazole"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A02BD12",
                      "display" : "rabeprazol, amoxicilin a klarithromycin",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "rabeprazole, amoxicillin and clarithromycin"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A02BD13",
                      "display" : "rabeprazol, amoxicilin a metronidazol",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "rabeprazole, amoxicillin and metronidazole"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A02BD14",
                      "display" : "vonoprazan, amoxicilin a klarithromycin",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "vonoprazan, amoxicillin and clarithromycin"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A02BD15",
                      "display" : "vonoprazan, amoxicilin a metronidazol",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "vonoprazan, amoxicillin and metronidazole"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A02BD16",
                      "display" : "omeprazol, amoxicilin a rifabutin",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "omeprazole, amoxicillin and rifabutin"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A02BD17",
                      "display" : "vonoprazan a amoxicilin",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "vonoprazan and amoxicillin"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    }
                  ]
                },
                {
                  "code" : "A02BX",
                  "display" : "Jiná léčiva k terapii peptického vředu a refluxní choroby jícnu",
                  "designation" : [
                    {
                      "language" : "en",
                      "value" : "Other drugs for peptic ulcer and gastro-oesophageal reflux disease (GORD)"
                    }
                  ],
                  "property" : [
                    {
                      "code" : "NT",
                      "valueString" : "N"
                    }
                  ],
                  "concept" : [
                    {
                      "code" : "A02BX01",
                      "display" : "karbenoxolon",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "carbenoxolone"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A02BX02",
                      "display" : "sukralfát",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "sucralfate"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A02BX03",
                      "display" : "pirenzepin",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "pirenzepine"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A02BX04",
                      "display" : "methiosulfonium-chlorid",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "methiosulfonium chloride"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A02BX05",
                      "display" : "zásaditý bismutum(III)-citrát",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "bismuth subcitrate"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A02BX06",
                      "display" : "proglumid",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "proglumide"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A02BX07",
                      "display" : "gefarnát",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "gefarnate"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A02BX08",
                      "display" : "sulglikotid",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "sulglicotide"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A02BX09",
                      "display" : "acetoxolon",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "acetoxolone"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A02BX10",
                      "display" : "zolimidin",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "zolimidine"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A02BX11",
                      "display" : "troxipid",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "troxipide"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A02BX12",
                      "display" : "zásaditý dusičnan bismutitý",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "bismuth subnitrate"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A02BX13",
                      "display" : "kyselina alginová",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "alginic acid"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A02BX14",
                      "display" : "rebamipid",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "rebamipide"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A02BX15",
                      "display" : "teprenon",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "teprenone"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A02BX16",
                      "display" : "irsogladin",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "irsogladine"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A02BX51",
                      "display" : "karbenoxolon, kombinace kromě psycholeptik",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "carbenoxolone, combinations excl. psycholeptics"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A02BX71",
                      "display" : "karbenoxolon, kombinace s psycholeptiky",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "carbenoxolone, combinations with psycholeptics"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A02BX77",
                      "display" : "gefarnát, kombinace s psycholeptiky",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "gefarnate, combinations with psycholeptics"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    }
                  ]
                }
              ]
            },
            {
              "code" : "A02X",
              "display" : "JINÁ LÉČIVA K TERAPII ONEMOCNĚNÍ SPOJENÝCH S PORUCHOU ACIDITY",
              "designation" : [
                {
                  "language" : "en",
                  "value" : "OTHER DRUGS FOR ACID RELATED DISORDERS"
                }
              ],
              "property" : [
                {
                  "code" : "NT",
                  "valueString" : "N"
                }
              ]
            }
          ]
        },
        {
          "code" : "A03",
          "display" : "LÉČIVA K TERAPII FUNKČNÍCH PORUCH GASTROINTESTINÁLNÍHO TRAKTU",
          "designation" : [
            {
              "language" : "en",
              "value" : "DRUGS FOR FUNCTIONAL GASTROINTESTINAL DISORDERS"
            }
          ],
          "property" : [
            {
              "code" : "NT",
              "valueString" : "N"
            }
          ],
          "concept" : [
            {
              "code" : "A03A",
              "display" : "LÉČIVA K TERAPII FUNKČNÍCH PORUCH GASTROINTESTINÁLNÍHO TRAKTU",
              "designation" : [
                {
                  "language" : "en",
                  "value" : "DRUGS FOR FUNCTIONAL GASTROINTESTINAL DISORDERS"
                }
              ],
              "property" : [
                {
                  "code" : "NT",
                  "valueString" : "N"
                }
              ],
              "concept" : [
                {
                  "code" : "A03AA",
                  "display" : "Syntetická anticholinergika, estery s terciární aminoskupinou",
                  "designation" : [
                    {
                      "language" : "en",
                      "value" : "Synthetic anticholinergics, esters with tertiary amino group"
                    }
                  ],
                  "property" : [
                    {
                      "code" : "NT",
                      "valueString" : "N"
                    }
                  ],
                  "concept" : [
                    {
                      "code" : "A03AA01",
                      "display" : "oxyfencyklimin",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "oxyphencyclimine"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A03AA03",
                      "display" : "kamylofin",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "camylofin"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A03AA04",
                      "display" : "mebeverin",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "mebeverine"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A03AA05",
                      "display" : "trimebutin",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "trimebutine"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A03AA06",
                      "display" : "rociverin",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "rociverine"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A03AA07",
                      "display" : "dicykloverin",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "dicycloverine"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A03AA08",
                      "display" : "dihexyverin",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "dihexyverine"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A03AA09",
                      "display" : "difemerin",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "difemerine"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A03AA30",
                      "display" : "piperidolát",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "piperidolate"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    }
                  ]
                },
                {
                  "code" : "A03AB",
                  "display" : "Syntetická anticholinergika, kvarterní amoniové sloučeniny",
                  "designation" : [
                    {
                      "language" : "en",
                      "value" : "Synthetic anticholinergics, quaternary ammonium compounds"
                    }
                  ],
                  "property" : [
                    {
                      "code" : "NT",
                      "valueString" : "N"
                    }
                  ],
                  "concept" : [
                    {
                      "code" : "A03AB01",
                      "display" : "benzilonium",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "benzilone"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A03AB02",
                      "display" : "glykopyrronium-bromid",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "glycopyrronium bromide"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A03AB03",
                      "display" : "oxyfenonium",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "oxyphenonium"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A03AB04",
                      "display" : "penthienacium",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "penthienate"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A03AB05",
                      "display" : "propanthelinium",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "propantheline"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A03AB06",
                      "display" : "otilonium-bromid",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "otilonium bromide"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A03AB07",
                      "display" : "methanthelinium",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "methantheline"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A03AB08",
                      "display" : "tridihexethylium",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "tridihexethyl"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A03AB09",
                      "display" : "isopropamid",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "isopropamide"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A03AB10",
                      "display" : "hexocyklium",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "hexocyclium"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A03AB11",
                      "display" : "poldinium",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "poldine"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A03AB12",
                      "display" : "mepenzolacium",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "mepenzolate"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A03AB13",
                      "display" : "bevonium",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "bevonium"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A03AB14",
                      "display" : "pipenzolacium",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "pipenzolate"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A03AB15",
                      "display" : "difemanilium",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "diphemanil"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A03AB16",
                      "display" : "difenhydramin-jodid",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "(2-benzhydryloxyethyl)diethyl-methylammonium iodide"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A03AB17",
                      "display" : "tiemonium-jodid",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "tiemonium iodide"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A03AB18",
                      "display" : "prifinium-bromid",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "prifinium bromide"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A03AB19",
                      "display" : "timepidium-bromid",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "timepidium bromide"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A03AB21",
                      "display" : "fenpiverinium",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "fenpiverinium"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A03AB53",
                      "display" : "oxyfenonium, kombinace",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "oxyphenonium, combinations"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    }
                  ]
                },
                {
                  "code" : "A03AC",
                  "display" : "Syntetická spazmolytika, amidy s terciárními aminy",
                  "designation" : [
                    {
                      "language" : "en",
                      "value" : "Synthetic antispasmodics, amides with tertiary amines"
                    }
                  ],
                  "property" : [
                    {
                      "code" : "NT",
                      "valueString" : "N"
                    }
                  ],
                  "concept" : [
                    {
                      "code" : "A03AC02",
                      "display" : "dimethylaminopropionylfenothiazin",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "dimethylaminopropionylphenothiazine"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A03AC04",
                      "display" : "nikofetamid",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "nicofetamide"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A03AC05",
                      "display" : "tiropramid",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "tiropramide"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    }
                  ]
                },
                {
                  "code" : "A03AD",
                  "display" : "Papaverin a deriváty",
                  "designation" : [
                    {
                      "language" : "en",
                      "value" : "Papaverine and derivatives"
                    }
                  ],
                  "property" : [
                    {
                      "code" : "NT",
                      "valueString" : "N"
                    }
                  ],
                  "concept" : [
                    {
                      "code" : "A03AD01",
                      "display" : "papaverin",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "papaverine"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A03AD02",
                      "display" : "drotaverin",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "drotaverine"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A03AD30",
                      "display" : "moxaverin",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "moxaverine"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    }
                  ]
                },
                {
                  "code" : "A03AE",
                  "display" : "Antagonisté serotoninových receptorů",
                  "designation" : [
                    {
                      "language" : "en",
                      "value" : "Serotonin receptor antagonists"
                    }
                  ],
                  "property" : [
                    {
                      "code" : "NT",
                      "valueString" : "N"
                    }
                  ],
                  "concept" : [
                    {
                      "code" : "A03AE01",
                      "display" : "alosetron",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "alosetron"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A03AE03",
                      "display" : "cilansetron",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "cilansetron"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    }
                  ]
                },
                {
                  "code" : "A03AX",
                  "display" : "Jiná léčiva k terapii funkčních poruch gastrointestinálního traktu",
                  "designation" : [
                    {
                      "language" : "en",
                      "value" : "Other drugs for functional gastrointestinal disorders"
                    }
                  ],
                  "property" : [
                    {
                      "code" : "NT",
                      "valueString" : "N"
                    }
                  ],
                  "concept" : [
                    {
                      "code" : "A03AX01",
                      "display" : "fenpipran",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "fenpiprane"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A03AX02",
                      "display" : "diisopromin",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "diisopromine"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A03AX03",
                      "display" : "chlorbenzoxamin",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "chlorbenzoxamine"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A03AX04",
                      "display" : "pinaverium",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "pinaverium"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A03AX05",
                      "display" : "fenoverin",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "fenoverine"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A03AX06",
                      "display" : "idanpramin",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "idanpramine"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A03AX07",
                      "display" : "proxazol",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "proxazole"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A03AX08",
                      "display" : "alverin",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "alverine"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A03AX09",
                      "display" : "trepibuton",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "trepibutone"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A03AX10",
                      "display" : "isomethepten",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "isometheptene"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A03AX11",
                      "display" : "karoverin",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "caroverine"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A03AX12",
                      "display" : "floroglucinol",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "phloroglucinol"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A03AX13",
                      "display" : "silikony",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "silicones"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A03AX14",
                      "display" : "valethamát",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "valethamate"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A03AX15",
                      "display" : "silice máty peprné",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "menthae piperitae aetheroleum"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A03AX30",
                      "display" : "trimethyldifenylpropylamin",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "trimethyldiphenylpropylamine"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A03AX58",
                      "display" : "alverin, kombinace",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "alverine, combinations"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    }
                  ]
                }
              ]
            },
            {
              "code" : "A03B",
              "display" : "ALKALOIDY RULÍKU A DERIVÁTY, SAMOTNÉ",
              "designation" : [
                {
                  "language" : "en",
                  "value" : "BELLADONNA AND DERIVATIVES, PLAIN"
                }
              ],
              "property" : [
                {
                  "code" : "NT",
                  "valueString" : "N"
                }
              ],
              "concept" : [
                {
                  "code" : "A03BA",
                  "display" : "Alkaloidy rulíku, terciární aminy",
                  "designation" : [
                    {
                      "language" : "en",
                      "value" : "Belladonna alkaloids, tertiary amines"
                    }
                  ],
                  "property" : [
                    {
                      "code" : "NT",
                      "valueString" : "N"
                    }
                  ],
                  "concept" : [
                    {
                      "code" : "A03BA01",
                      "display" : "atropin",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "atropine"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A03BA03",
                      "display" : "hyoscyamin",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "hyoscyamine"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A03BA04",
                      "display" : "všechny alkaloidy rulíku",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "belladonna total alkaloids"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    }
                  ]
                },
                {
                  "code" : "A03BB",
                  "display" : "Alkaloidy rulíku, semisyntetické kvarterní amoniové sloučeniny",
                  "designation" : [
                    {
                      "language" : "en",
                      "value" : "Belladonna alkaloids, semisynthetic, quaternary ammonium compounds"
                    }
                  ],
                  "property" : [
                    {
                      "code" : "NT",
                      "valueString" : "N"
                    }
                  ],
                  "concept" : [
                    {
                      "code" : "A03BB01",
                      "display" : "butylskopolaminium",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "butylscopolamine"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A03BB02",
                      "display" : "methylatropinium",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "methylatropine"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A03BB03",
                      "display" : "methylskopolaminium",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "methylscopolamine"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A03BB04",
                      "display" : "fentonium",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "fentonium"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A03BB05",
                      "display" : "cimetropium-bromid",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "cimetropium bromide"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A03BB06",
                      "display" : "homatropin-methylbromid",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "homatropine methylbromide"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    }
                  ]
                }
              ]
            },
            {
              "code" : "A03C",
              "display" : "SPAZMOLYTIKA V KOMBINACI S PSYCHOLEPTIKY",
              "designation" : [
                {
                  "language" : "en",
                  "value" : "ANTISPASMODICS IN COMBINATION WITH PSYCHOLEPTICS"
                }
              ],
              "property" : [
                {
                  "code" : "NT",
                  "valueString" : "N"
                }
              ],
              "concept" : [
                {
                  "code" : "A03CA",
                  "display" : "Syntetická anticholinergika v kombinaci s psycholeptiky",
                  "designation" : [
                    {
                      "language" : "en",
                      "value" : "Synthetic anticholinergic agents in combination with psycholeptics"
                    }
                  ],
                  "property" : [
                    {
                      "code" : "NT",
                      "valueString" : "N"
                    }
                  ],
                  "concept" : [
                    {
                      "code" : "A03CA01",
                      "display" : "isopropamid a psycholeptika",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "isopropamide and psycholeptics"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A03CA02",
                      "display" : "klidinium a psycholeptika",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "clidinium and psycholeptics"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A03CA03",
                      "display" : "oxyfencyklimin a psycholeptika",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "oxyphencyclimine and psycholeptics"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A03CA04",
                      "display" : "otilonium-bromid a psycholeptika",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "otilonium bromide and psycholeptics"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A03CA05",
                      "display" : "glykopyrronium-bromid a psycholeptika",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "glycopyrronium bromide and psycholeptics"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A03CA06",
                      "display" : "bevonium a psycholeptika",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "bevonium and psycholeptics"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A03CA07",
                      "display" : "ambutonium a psycholeptika",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "ambutonium and psycholeptics"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A03CA08",
                      "display" : "difemanilium a psycholeptika",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "diphemanil and psycholeptics"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A03CA09",
                      "display" : "pipenzolacium a psycholeptika",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "pipenzolate and psycholeptics"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A03CA30",
                      "display" : "emepronium a psycholeptika",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "emepronium and psycholeptics"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A03CA34",
                      "display" : "propanthelinium a psycholeptika",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "propantheline and psycholeptics"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    }
                  ]
                },
                {
                  "code" : "A03CB",
                  "display" : "Alkaloidy rulíku a deriváty v kombinaci s psycholeptiky",
                  "designation" : [
                    {
                      "language" : "en",
                      "value" : "Belladonna and derivatives in combination with psycholeptics"
                    }
                  ],
                  "property" : [
                    {
                      "code" : "NT",
                      "valueString" : "N"
                    }
                  ],
                  "concept" : [
                    {
                      "code" : "A03CB01",
                      "display" : "methylskopolaminium a psycholeptika",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "methylscopolamine and psycholeptics"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A03CB02",
                      "display" : "všechny alkaloidy rulíku a psycholeptika",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "belladonna total alkaloids and psycholeptics"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A03CB03",
                      "display" : "atropin a psycholeptika",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "atropine and psycholeptics"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A03CB04",
                      "display" : "homatropin-methylbromid a psycholeptika",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "homatropine methylbromide and psycholeptics"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A03CB31",
                      "display" : "hyoscyamin a psycholeptika",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "hyoscyamine and psycholeptics"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    }
                  ]
                },
                {
                  "code" : "A03CC",
                  "display" : "Jiná spazmolytika v kombinaci s psycholeptiky",
                  "designation" : [
                    {
                      "language" : "en",
                      "value" : "Other antispasmodics in combination with psycholeptics"
                    }
                  ],
                  "property" : [
                    {
                      "code" : "NT",
                      "valueString" : "N"
                    }
                  ]
                }
              ]
            },
            {
              "code" : "A03D",
              "display" : "SPAZMOLYTIKA V KOMBINACI S ANALGETIKY",
              "designation" : [
                {
                  "language" : "en",
                  "value" : "ANTISPASMODICS IN COMBINATION WITH ANALGESICS"
                }
              ],
              "property" : [
                {
                  "code" : "NT",
                  "valueString" : "N"
                }
              ],
              "concept" : [
                {
                  "code" : "A03DA",
                  "display" : "Syntetická anticholinergika v kombinaci s analgetiky",
                  "designation" : [
                    {
                      "language" : "en",
                      "value" : "Synthetic anticholinergic agents in combination with analgesics"
                    }
                  ],
                  "property" : [
                    {
                      "code" : "NT",
                      "valueString" : "N"
                    }
                  ],
                  "concept" : [
                    {
                      "code" : "A03DA01",
                      "display" : "tropenzilinium a analgetika",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "tropenzilone and analgesics"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A03DA02",
                      "display" : "pitofenon a analgetika",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "pitofenone and analgesics"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A03DA03",
                      "display" : "bevonium a analgetika",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "bevonium and analgesics"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A03DA04",
                      "display" : "ciklonium a analgetika",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "ciclonium and analgesics"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A03DA05",
                      "display" : "kamylofin a analgetika",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "camylofin and analgesics"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A03DA06",
                      "display" : "trospium a anagetika",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "trospium and analgesics"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A03DA07",
                      "display" : "tiemonium-jodid a analgetika",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "tiemonium iodide and analgesics"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    }
                  ]
                },
                {
                  "code" : "A03DB",
                  "display" : "Alkaloidy rulíku a deriváty v kombinaci s analgetiky",
                  "designation" : [
                    {
                      "language" : "en",
                      "value" : "Belladonna and derivatives in combination with analgesics"
                    }
                  ],
                  "property" : [
                    {
                      "code" : "NT",
                      "valueString" : "N"
                    }
                  ],
                  "concept" : [
                    {
                      "code" : "A03DB04",
                      "display" : "butylskopolaminium a analgetika",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "butylscopolamine and analgesics"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    }
                  ]
                },
                {
                  "code" : "A03DC",
                  "display" : "Jiná spazmolytika v kombinaci s analgetiky",
                  "designation" : [
                    {
                      "language" : "en",
                      "value" : "Other antispasmodics in combination with analgesics"
                    }
                  ],
                  "property" : [
                    {
                      "code" : "NT",
                      "valueString" : "N"
                    }
                  ]
                }
              ]
            },
            {
              "code" : "A03E",
              "display" : "SPAZMOLYTIKA A ANTICHOLINERGIKA V KOMBINACI S DALŠÍMI LÉČIVY",
              "designation" : [
                {
                  "language" : "en",
                  "value" : "ANTISPASMODICS AND ANTICHOLINERGICS IN COMBINATION WITH OTHER DRUGS"
                }
              ],
              "property" : [
                {
                  "code" : "NT",
                  "valueString" : "N"
                }
              ],
              "concept" : [
                {
                  "code" : "A03EA",
                  "display" : "Spazmolytika, psycholeptika a analgetika v kombinaci",
                  "designation" : [
                    {
                      "language" : "en",
                      "value" : "Antispasmodics, psycholeptics and analgesics in combination"
                    }
                  ],
                  "property" : [
                    {
                      "code" : "NT",
                      "valueString" : "N"
                    }
                  ]
                },
                {
                  "code" : "A03ED",
                  "display" : "Spazmolytika v kombinaci s jinými léčivy",
                  "designation" : [
                    {
                      "language" : "en",
                      "value" : "Antispasmodics in combination with other drugs"
                    }
                  ],
                  "property" : [
                    {
                      "code" : "NT",
                      "valueString" : "N"
                    }
                  ]
                }
              ]
            },
            {
              "code" : "A03F",
              "display" : "PROKINETIKA",
              "designation" : [
                {
                  "language" : "en",
                  "value" : "PROPULSIVES"
                }
              ],
              "property" : [
                {
                  "code" : "NT",
                  "valueString" : "N"
                }
              ],
              "concept" : [
                {
                  "code" : "A03FA",
                  "display" : "Prokinetika",
                  "designation" : [
                    {
                      "language" : "en",
                      "value" : "Propulsives"
                    }
                  ],
                  "property" : [
                    {
                      "code" : "NT",
                      "valueString" : "N"
                    }
                  ],
                  "concept" : [
                    {
                      "code" : "A03FA01",
                      "display" : "metoklopramid",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "metoclopramide"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A03FA02",
                      "display" : "cisaprid",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "cisapride"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A03FA03",
                      "display" : "domperidon",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "domperidone"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A03FA04",
                      "display" : "bromoprid",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "bromopride"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A03FA05",
                      "display" : "alizaprid",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "alizapride"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A03FA06",
                      "display" : "kleboprid",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "clebopride"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A03FA07",
                      "display" : "itoprid",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "itopride"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A03FA08",
                      "display" : "cinitaprid",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "cinitapride"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A03FA09",
                      "display" : "mosaprid",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "mosapride"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    },
                    {
                      "code" : "A03FA10",
                      "display" : "akotiamid",
                      "designation" : [
                        {
                          "language" : "en",
                          "value" : "acotiamide"
                        }
                      ],
                      "property" : [
                        {
                          "code" : "NT",
                          "valueString" : "N"
                        }
                      ]
                    }
                  ]
                }
              ]
            }
          ]
        }
      ]
    }
  ]
}

```
