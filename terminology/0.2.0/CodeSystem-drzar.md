# Type of healthcare facility - HL7 Czech Terminology Implementation Guide v0.2.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Type of healthcare facility**

## CodeSystem: Type of healthcare facility 

| | |
| :--- | :--- |
| *Official URL*:https://ncez.mzcr.cz/terminology/CodeSystem/drzar | *Version*:0.2.0 |
| Active as of 1980-01-01 | *Computable Name*:CS_Drzar |
| *Other Identifiers:*OID:1.2.203.24341.11.2.10.1 | |

 
Czech national code system for type of healthcare facility. 

 This Code system is referenced in the content logical definition of the following value sets: 

* [Drzar](ValueSet-drzar.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "drzar",
  "language" : "cs",
  "url" : "https://ncez.mzcr.cz/terminology/CodeSystem/drzar",
  "identifier" : [
    {
      "system" : "urn:ietf:rfc:3986",
      "value" : "urn:oid:1.2.203.24341.11.2.10.1"
    }
  ],
  "version" : "0.2.0",
  "name" : "CS_Drzar",
  "title" : "Type of healthcare facility",
  "status" : "active",
  "experimental" : false,
  "date" : "1980-01-01",
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
  "description" : "Czech national code system for type of healthcare facility.",
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
  "content" : "complete",
  "count" : 77,
  "concept" : [
    {
      "code" : "010",
      "display" : "Sdružení zdravotnických zařízení"
    },
    {
      "code" : "101",
      "display" : "Fakultní nemocnice"
    },
    {
      "code" : "102",
      "display" : "Nemocnice"
    },
    {
      "code" : "103",
      "display" : "Specializovaná nemocnice"
    },
    {
      "code" : "104",
      "display" : "Psychiatrická nemocnice"
    },
    {
      "code" : "105",
      "display" : "Nemocnice následné péče"
    },
    {
      "code" : "109",
      "display" : "Porodnice"
    },
    {
      "code" : "110",
      "display" : "Léčebna pro dlouhodobě nemocné (LDN)"
    },
    {
      "code" : "111",
      "display" : "Léčebna tuberkul.a respir.nemocí (TRN)"
    },
    {
      "code" : "112",
      "display" : "Psychiatrická léčebna"
    },
    {
      "code" : "113",
      "display" : "Rehabilitační ústav"
    },
    {
      "code" : "119",
      "display" : "Ostatní odborné léčebné ústavy"
    },
    {
      "code" : "122",
      "display" : "Dětská psychiatrická léčebna"
    },
    {
      "code" : "129",
      "display" : "Ostatní dětské odborné léčebné ústavy"
    },
    {
      "code" : "130",
      "display" : "Lázeňská léčebna"
    },
    {
      "code" : "141",
      "display" : "Dětská ozdravovna"
    },
    {
      "code" : "180",
      "display" : "Hospic"
    },
    {
      "code" : "190",
      "display" : "Další lůžkové zařízení"
    },
    {
      "code" : "300",
      "display" : "Sdružení ambulantních zařízení"
    },
    {
      "code" : "301",
      "display" : "Poskytovatel amb. služeb (nad 5 oborů)"
    },
    {
      "code" : "302",
      "display" : "Poskytovatel amb. služeb (do 5 oborů)"
    },
    {
      "code" : "310",
      "display" : "Zdravotnické středisko"
    },
    {
      "code" : "312",
      "display" : "Zařízení závodní preventivní péče"
    },
    {
      "code" : "320",
      "display" : "Samost. ordinace všeob. prakt. lékaře"
    },
    {
      "code" : "321",
      "display" : "Sam.ord.prakt.lékaře pro děti a dorost"
    },
    {
      "code" : "322",
      "display" : "Samostatná ordinace PL - stomatologa"
    },
    {
      "code" : "323",
      "display" : "Samostatná ordinace PL - gynekologa"
    },
    {
      "code" : "324",
      "display" : "Samostatná ordinace lékaře specialisty"
    },
    {
      "code" : "340",
      "display" : "Samostatné zařízení psychologa"
    },
    {
      "code" : "341",
      "display" : "Samostatné zařízení logopeda"
    },
    {
      "code" : "350",
      "display" : "Domácí zdravotní péče"
    },
    {
      "code" : "351",
      "display" : "Samostatné zařízení fyzioterapeuta"
    },
    {
      "code" : "354",
      "display" : "Zdravotní péče v ústavech sociální p."
    },
    {
      "code" : "359",
      "display" : "Samostatné zařízení nelékaře - jiné"
    },
    {
      "code" : "360",
      "display" : "Samostatná stomatologická laboratoř"
    },
    {
      "code" : "361",
      "display" : "Samostatná odborná laboratoř"
    },
    {
      "code" : "362",
      "display" : "Odběrová místnost"
    },
    {
      "code" : "370",
      "display" : "Samostatná transfuzní stanice"
    },
    {
      "code" : "380",
      "display" : "Zařízení LPS"
    },
    {
      "code" : "389",
      "display" : "Koroner"
    },
    {
      "code" : "390",
      "display" : "Hemodialyzační středisko"
    },
    {
      "code" : "398",
      "display" : "Zařízení pro léčbu závislostí"
    },
    {
      "code" : "399",
      "display" : "Ostatní ambulantní zařízení"
    },
    {
      "code" : "400",
      "display" : "Sdružení dětských zařízení"
    },
    {
      "code" : "420",
      "display" : "Dětský domov pro děti do 3 let"
    },
    {
      "code" : "430",
      "display" : "Dětské centrum"
    },
    {
      "code" : "431",
      "display" : "Dětský stacionář"
    },
    {
      "code" : "460",
      "display" : "Stacionář"
    },
    {
      "code" : "461",
      "display" : "Psychoterapeutický stacionář"
    },
    {
      "code" : "465",
      "display" : "Krizové centrum"
    },
    {
      "code" : "466",
      "display" : "Centrum duševního zdraví"
    },
    {
      "code" : "476",
      "display" : "Záchytná stanice"
    },
    {
      "code" : "480",
      "display" : "Zdravotnická dopravní služba"
    },
    {
      "code" : "481",
      "display" : "Zdravotnická zachranná služba"
    },
    {
      "code" : "483",
      "display" : "Výjezdová skupina záchranné služby"
    },
    {
      "code" : "484",
      "display" : "Další zařízení záchranné služby"
    },
    {
      "code" : "485",
      "display" : "Přeprava pacientů neodkladné péče"
    },
    {
      "code" : "499",
      "display" : "Ostatní zvláštní zdravotnická zařízení"
    },
    {
      "code" : "501",
      "display" : "Sdružení lékáren"
    },
    {
      "code" : "510",
      "display" : "Lékárna"
    },
    {
      "code" : "521",
      "display" : "Oční optika"
    },
    {
      "code" : "530",
      "display" : "Státní ústav pro kontrolu léčiv"
    },
    {
      "code" : "600",
      "display" : "Státní zdravotní ústav"
    },
    {
      "code" : "601",
      "display" : "Krajská hygienická stanice"
    },
    {
      "code" : "605",
      "display" : "Zdravotní ústav"
    },
    {
      "code" : "609",
      "display" : "Další zařízení hygienické služby"
    },
    {
      "code" : "831",
      "display" : "IPVZ"
    },
    {
      "code" : "832",
      "display" : "NCONZO"
    },
    {
      "code" : "900",
      "display" : "Ostatní organizace MZ"
    },
    {
      "code" : "950",
      "display" : "Ostatní zdravotnická zařízení"
    },
    {
      "code" : "952",
      "display" : "Lázeňský dům (jen ubyt. hotel. typu)"
    },
    {
      "code" : "961",
      "display" : "Zdravotnické zařízení v likvidaci"
    },
    {
      "code" : "962",
      "display" : "Hospodářská org. neposkyt. zdrav. péči"
    },
    {
      "code" : "963",
      "display" : "Servisní organizace"
    },
    {
      "code" : "964",
      "display" : "COVID zařízení"
    },
    {
      "code" : "368",
      "display" : "Centrum očkování COVID"
    },
    {
      "code" : "363",
      "display" : "Odběr krevní plasmy"
    }
  ]
}

```
