# Materiál vzorků - HL7 Czech Terminology Implementation Guide v0.2.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Materiál vzorků**

## ValueSet: Materiál vzorků 

| | |
| :--- | :--- |
| *Official URL*:https://ncez.mzcr.cz/terminology/ValueSet/lab-specimenType | *Version*:0.2.0 |
| Draft as of 2025-12-23 | *Computable Name*:LabSpecimentype |
| **Copyright/Legal**: This value set includes content from SNOMED CT, which is copyright © 2002+ International Health Terminology Standards Development Organisation (IHTSDO), and distributed by agreement between IHTSDO and HL7. Implementer use of SNOMED CT is not covered by this agreement | |

 
Materiál laboratorního vzorku/vzorku pro obrazová vyšetření. Číselník využívá terminologii SNOMED CT. 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

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
  "id" : "lab-specimenType",
  "language" : "cs",
  "url" : "https://ncez.mzcr.cz/terminology/ValueSet/lab-specimenType",
  "version" : "0.2.0",
  "name" : "LabSpecimentype",
  "title" : "Materiál vzorků",
  "status" : "draft",
  "experimental" : false,
  "date" : "2025-12-23T18:27:27+01:00",
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
  "description" : "Materiál laboratorního vzorku/vzorku pro obrazová vyšetření. Číselník využívá terminologii SNOMED CT.",
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
        "system" : "http://snomed.info/sct",
        "concept" : [
          {
            "code" : "258497007",
            "display" : "Stěr z abscesu"
          },
          {
            "code" : "258407001",
            "display" : "Tkáně z abscesu"
          },
          {
            "code" : "119373006",
            "display" : "Vzorek plodové vody"
          },
          {
            "code" : "122552005",
            "display" : "Vzorek arteriální krve"
          },
          {
            "code" : "309201001",
            "display" : "Vzorek ascitické tekutiny"
          },
          {
            "code" : "119341000",
            "display" : "Vzorek žluči"
          },
          {
            "code" : "258493006",
            "display" : "Vzorek močového kamene"
          },
          {
            "code" : "258582006",
            "display" : "Vzorek krevní sraženiny"
          },
          {
            "code" : "119297000",
            "display" : "Vzorek krve"
          },
          {
            "code" : "309051001",
            "display" : "Vzorek tělesné tekutiny"
          },
          {
            "code" : "432825001",
            "display" : "Vzorek tělesného sekretu"
          },
          {
            "code" : "258583001",
            "display" : "Vzorek sraženiny kostní dřeně"
          },
          {
            "code" : "119359002",
            "display" : "Vzorek kostní dřeně"
          },
          {
            "code" : "258417006",
            "display" : "Vzorek kostní tkáně"
          },
          {
            "code" : "309176002",
            "display" : "Kartáčkový odběr z bronchů"
          },
          {
            "code" : "258446004",
            "display" : "Vzorek bronchální tekutiny"
          },
          {
            "code" : "258564008",
            "display" : "Stěr z bukální sliznice"
          },
          {
            "code" : "258418001",
            "display" : "Tkáně z popáleniny"
          },
          {
            "code" : "258448003",
            "display" : "Vzorek tekutiny z burzy"
          },
          {
            "code" : "309110000",
            "display" : "Vzorek tkáně burzy"
          },
          {
            "code" : "119350003",
            "display" : "Vzorek konkrementu"
          },
          {
            "code" : "258627009",
            "display" : "Špička kanyly jako vzorek"
          },
          {
            "code" : "122554006",
            "display" : "Kapilární krevní vzorek"
          },
          {
            "code" : "309101008",
            "display" : "Vzorek chrupavky"
          },
          {
            "code" : "119312009",
            "display" : "Špička katétru jako vzorek"
          },
          {
            "code" : "258450006",
            "display" : "Vzorek mozkomíšního moku"
          },
          {
            "code" : "122580007",
            "display" : "Vzorek ušního mazu"
          },
          {
            "code" : "258452003",
            "display" : "Vzorek chylózní tekutiny"
          },
          {
            "code" : "258581004",
            "display" : "Vzorek sražené krve"
          },
          {
            "code" : "168136008",
            "display" : "Vzorek tekutiny z kolostomie"
          },
          {
            "code" : "119329007",
            "display" : "Vzorek mleziva"
          },
          {
            "code" : "258498002",
            "display" : "Stěr ze spojivky"
          },
          {
            "code" : "122556008",
            "display" : "Vzorek pupečníkové krve"
          },
          {
            "code" : "258499005",
            "display" : "Stěr po kašli"
          },
          {
            "code" : "258419009",
            "display" : "Kyretážní materiál"
          },
          {
            "code" : "258453008",
            "display" : "Vzorek tekutiny z cysty"
          },
          {
            "code" : "258420003",
            "display" : "Tkáně z cysty"
          },
          {
            "code" : "119338009",
            "display" : "Vzorek dentinu"
          },
          {
            "code" : "472919007",
            "display" : "Zdravotnická pomůcka jako vzorek"
          },
          {
            "code" : "258454002",
            "display" : "Vzorek dialyzátu"
          },
          {
            "code" : "258439008",
            "display" : "Vzorek sekretu"
          },
          {
            "code" : "258566005",
            "display" : "Vzorek DNA"
          },
          {
            "code" : "1003705007",
            "display" : "Špička drénu jako vzorek"
          },
          {
            "code" : "258455001",
            "display" : "Vzorek drenážní tekutiny"
          },
          {
            "code" : "119294007",
            "display" : "Vzorek zaschlé krve"
          },
          {
            "code" : "258440005",
            "display" : "Vzorek výpotku"
          },
          {
            "code" : "258456000",
            "display" : "Vzorek tekutiny z empyému"
          },
          {
            "code" : "119336008",
            "display" : "Vzorek vydechovaného vzduchu"
          },
          {
            "code" : "258470000",
            "display" : "Vzorek prostatického sekretu"
          },
          {
            "code" : "258441009",
            "display" : "Vzorek exsudátu"
          },
          {
            "code" : "309128003",
            "display" : "Vzorek nitrooční tekutiny"
          },
          {
            "code" : "258487003",
            "display" : "Stěr stolice"
          },
          {
            "code" : "119339001",
            "display" : "Vzorek stolice"
          },
          {
            "code" : "309117002",
            "display" : "Vzorek fascie"
          },
          {
            "code" : "258458004",
            "display" : "Vzorek tekutiny z píštěle"
          },
          {
            "code" : "258442002",
            "display" : "Vzorek tekutiny"
          },
          {
            "code" : "445744006",
            "display" : "Vzorek tekutiny ze seromu"
          },
          {
            "code" : "309502007",
            "display" : "Vzorek z plodu"
          },
          {
            "code" : "447103002",
            "display" : "Cizí těleso jako vzorek"
          },
          {
            "code" : "258492001",
            "display" : "Vzorek žlučového kamene"
          },
          {
            "code" : "432657002",
            "display" : "Vzorek gangliové cysty"
          },
          {
            "code" : "309213006",
            "display" : "Kartáčkový odběr ze žaludku"
          },
          {
            "code" : "309199003",
            "display" : "Vzorek gastrointestinální tekutiny"
          },
          {
            "code" : "258562007",
            "display" : "Genetický vzorek"
          },
          {
            "code" : "258508008",
            "display" : "Genitální stěr"
          },
          {
            "code" : "258559009",
            "display" : "Vzorek tekutiny z gingivální rýhy"
          },
          {
            "code" : "440493002",
            "display" : "Štěp od pacienta jako vzorek"
          },
          {
            "code" : "258588005",
            "display" : "Vzorek hematomu"
          },
          {
            "code" : "119326000",
            "display" : "Vzorek vlasů"
          },
          {
            "code" : "258424007",
            "display" : "Tkáně srdeční chlopně"
          },
          {
            "code" : "258521001",
            "display" : "Stěr z horní části pochvy"
          },
          {
            "code" : "258461003",
            "display" : "Vzorek tekutiny z hydrokély"
          },
          {
            "code" : "258462005",
            "display" : "Vzorek tekutiny z ileostomie"
          },
          {
            "code" : "258479004",
            "display" : "Vzorek intersticiální tekutiny"
          },
          {
            "code" : "309114009",
            "display" : "Vzorek vazu"
          },
          {
            "code" : "258522008",
            "display" : "Stěr z dolní části pochvy"
          },
          {
            "code" : "309171007",
            "display" : "Vzorek tekutiny z dolních dýchacích cest"
          },
          {
            "code" : "302795002",
            "display" : "Aspirát z lymfatické uzliny"
          },
          {
            "code" : "258488008",
            "display" : "Nátěr z lymfatické uzliny"
          },
          {
            "code" : "309078004",
            "display" : "Vzorek tkáně lymfatické uzliny"
          },
          {
            "code" : "119340004",
            "display" : "Vzorek smolky"
          },
          {
            "code" : "119345009",
            "display" : "Vzorek menstruační krve"
          },
          {
            "code" : "119303007",
            "display" : "Mikrobiální izolát"
          },
          {
            "code" : "119328004",
            "display" : "Vzorek mateřského mléka"
          },
          {
            "code" : "258483004",
            "display" : "Vzorek hlenu"
          },
          {
            "code" : "119327009",
            "display" : "Vzorek nehtu"
          },
          {
            "code" : "168141000",
            "display" : "Vzorek nosní tekutiny"
          },
          {
            "code" : "258467004",
            "display" : "Výplach nosohltanu"
          },
          {
            "code" : "433799002",
            "display" : "Vzorek nervového ganglia"
          },
          {
            "code" : "309129006",
            "display" : "Vzorek nervové tkáně"
          },
          {
            "code" : "309131002",
            "display" : "Vzorek neuromu"
          },
          {
            "code" : "258468009",
            "display" : "Vzorek edémové tekutiny"
          },
          {
            "code" : "309210009",
            "display" : "Kartáčkový odběr z jícnu"
          },
          {
            "code" : "258494000",
            "display" : "Vzorek pankreatického kamene"
          },
          {
            "code" : "122571007",
            "display" : "Vzorek perikardiální tekutiny"
          },
          {
            "code" : "168139001",
            "display" : "Vzorek peritoneální tekutiny"
          },
          {
            "code" : "258469001",
            "display" : "Výplach hltanu"
          },
          {
            "code" : "119361006",
            "display" : "Vzorek plazmy"
          },
          {
            "code" : "110913002",
            "display" : "Cytologický materiál z pleurální tekutiny"
          },
          {
            "code" : "418564007",
            "display" : "Vzorek pleurální tekutiny"
          },
          {
            "code" : "258484005",
            "display" : "Posmrtný tkáňový vzorek"
          },
          {
            "code" : "258428005",
            "display" : "Tkáně produktů početí"
          },
          {
            "code" : "119323008",
            "display" : "Vzorek hnisu"
          },
          {
            "code" : "258502009",
            "display" : "Stěr z hnisu"
          },
          {
            "code" : "119351004",
            "display" : "Vzorek erytrocytů"
          },
          {
            "code" : "258495004",
            "display" : "Vzorek ledvinového kamene"
          },
          {
            "code" : "119342007",
            "display" : "Vzorek slin"
          },
          {
            "code" : "258431006",
            "display" : "Seškrab"
          },
          {
            "code" : "258432004",
            "display" : "Vzorek kožního mazu"
          },
          {
            "code" : "119347001",
            "display" : "Vzorek semenné tekutiny"
          },
          {
            "code" : "119364003",
            "display" : "Vzorek séra"
          },
          {
            "code" : "309261004",
            "display" : "Kartáčkový odběr ze sigmatu"
          },
          {
            "code" : "258475005",
            "display" : "Výplach z paranazálních dutin"
          },
          {
            "code" : "119331003",
            "display" : "Vzorek kosterního svalu"
          },
          {
            "code" : "119325001",
            "display" : "Vzorek kožní tkáně"
          },
          {
            "code" : "258505006",
            "display" : "Stěr z kožního vředu"
          },
          {
            "code" : "258433009",
            "display" : "Nátěrový vzorek"
          },
          {
            "code" : "309072003",
            "display" : "Vzorek měkké tkáně"
          },
          {
            "code" : "119300005",
            "display" : "Vzorek z krevního přípravku"
          },
          {
            "code" : "898201001",
            "display" : "Vzorek ze zdravotnického prostředku"
          },
          {
            "code" : "1003706008",
            "display" : "Vzorek ze špičky drénu"
          },
          {
            "code" : "119305000",
            "display" : "Vzorek z vaku s plazmou"
          },
          {
            "code" : "119349003",
            "display" : "Vzorek spermií"
          },
          {
            "code" : "258434003",
            "display" : "Vycentrovaný močový sediment"
          },
          {
            "code" : "119334006",
            "display" : "Vzorek sputa"
          },
          {
            "code" : "257261003",
            "display" : "Stěr"
          },
          {
            "code" : "445160003",
            "display" : "Stěr z oka"
          },
          {
            "code" : "122569007",
            "display" : "Vzorek potu"
          },
          {
            "code" : "119332005",
            "display" : "Vzorek synoviální tekutiny"
          },
          {
            "code" : "309123007",
            "display" : "Vzorek synovie"
          },
          {
            "code" : "309121009",
            "display" : "Vzorek synoviální tkáně"
          },
          {
            "code" : "440468004",
            "display" : "Tampon jako vzorek"
          },
          {
            "code" : "258465007",
            "display" : "Vzorek slzné tekutiny"
          },
          {
            "code" : "122594008",
            "display" : "Vzorek slz"
          },
          {
            "code" : "309481000",
            "display" : "Vzorek temporální arterie"
          },
          {
            "code" : "309107007",
            "display" : "Vzorek šlachy"
          },
          {
            "code" : "258529004",
            "display" : "Stěr z krku"
          },
          {
            "code" : "119376003",
            "display" : "Tkáňový vzorek"
          },
          {
            "code" : "258538002",
            "display" : "Vzorek transudátu"
          },
          {
            "code" : "258435002",
            "display" : "Vzorek nádorové tkáně"
          },
          {
            "code" : "441479001",
            "display" : "Vzorek čerstvé tkáně"
          },
          {
            "code" : "439628000",
            "display" : "Močový sběrný sáček jako vzorek"
          },
          {
            "code" : "439580004",
            "display" : "Močová savá podložka jako vzorek"
          },
          {
            "code" : "122567009",
            "display" : "Vzorek močového sedimentu"
          },
          {
            "code" : "122575003",
            "display" : "Vzorek moči"
          },
          {
            "code" : "258437005",
            "display" : "Vegetace ze srdeční chlopně"
          },
          {
            "code" : "122555007",
            "display" : "Vzorek žilní krve"
          },
          {
            "code" : "122572000",
            "display" : "Vzorek zvratků"
          },
          {
            "code" : "258591005",
            "display" : "Vzorek leukocytů"
          },
          {
            "code" : "258580003",
            "display" : "Vzorek plné krve"
          },
          {
            "code" : "438805006",
            "display" : "Vzorek celého zubu"
          },
          {
            "code" : "122566000",
            "display" : "Vzorek tekutiny z rány"
          },
          {
            "code" : "258531008",
            "display" : "Stěr z rány"
          },
          {
            "code" : "446302006",
            "display" : "Vzorek vzduchu"
          },
          {
            "code" : "33631000087102",
            "display" : "Alogenní kostní štěp jako vzorek"
          },
          {
            "code" : "703430008",
            "display" : "Vzorek arteriální pupečníkové krve"
          },
          {
            "code" : "16215211000119100",
            "display" : "Vzorek tekutiny z Bartholiniho žlázy"
          },
          {
            "code" : "446129006",
            "display" : "Vzorek žluči ze společného žlučovodu"
          },
          {
            "code" : "446817004",
            "display" : "Vzorek žluči ze žlučníku"
          },
          {
            "code" : "258490009",
            "display" : "Vzorek biliárního kamene"
          },
          {
            "code" : "309105004",
            "display" : "Bioptický vzorek kosti"
          },
          {
            "code" : "258607008",
            "display" : "Vzorek bronchoalveolární laváže"
          },
          {
            "code" : "122577006",
            "display" : "Vzorek cervikálního hlenu"
          },
          {
            "code" : "16216411000119106",
            "display" : "Nátěr ze spojivky"
          },
          {
            "code" : "1003707004",
            "display" : "Drén jako vzorek"
          },
          {
            "code" : "309216003",
            "display" : "Bioptický vzorek duodena"
          },
          {
            "code" : "122574004",
            "display" : "Vzorek duodenální tekutiny"
          },
          {
            "code" : "309166000",
            "display" : "Stěr z ucha"
          },
          {
            "code" : "119314005",
            "display" : "Elektroda jako vzorek"
          },
          {
            "code" : "419695002",
            "display" : "Stěr z prostředí"
          },
          {
            "code" : "309211008",
            "display" : "Bioptický vzorek žaludku"
          },
          {
            "code" : "122573005",
            "display" : "Vzorek žaludečního obsahu"
          },
          {
            "code" : "258459007",
            "display" : "Vzorek žaludeční tekutiny"
          },
          {
            "code" : "122579009",
            "display" : "Vzorek lochií"
          },
          {
            "code" : "258512002",
            "display" : "Stěr z glans penis"
          },
          {
            "code" : "473415003",
            "display" : "Nitroděložní tělísko jako vzorek"
          },
          {
            "code" : "258649003",
            "display" : "Vzorek infuzní tekutiny"
          },
          {
            "code" : "309049000",
            "display" : "Vzorek z léze"
          },
          {
            "code" : "309203003",
            "display" : "Bioptický vzorek jater"
          },
          {
            "code" : "258589002",
            "display" : "Vzorek lymfatické uzliny"
          },
          {
            "code" : "258466008",
            "display" : "Vzorek tekutiny ze středního ucha"
          },
          {
            "code" : "119298005",
            "display" : "Vzorek smíšené žilní krve"
          },
          {
            "code" : "705054005",
            "display" : "Vzorek svalu"
          },
          {
            "code" : "309104000",
            "display" : "Vzorek pohybového aparátu"
          },
          {
            "code" : "447339001",
            "display" : "Nátěr z nosu"
          },
          {
            "code" : "258500001",
            "display" : "Stěr z nosohltanu"
          },
          {
            "code" : "16220931000119104",
            "display" : "Vzorek tekutiny z cysty pankreatu"
          },
          {
            "code" : "119343002",
            "display" : "Vzorek pankreatické tekutiny"
          },
          {
            "code" : "309154006",
            "display" : "Vzorek hypofýzy"
          },
          {
            "code" : "708317005",
            "display" : "Smíšený vzorek z introitu a rektálního stěru"
          },
          {
            "code" : "258513007",
            "display" : "Stěr z předkožky"
          },
          {
            "code" : "258528007",
            "display" : "Rektální stěr"
          },
          {
            "code" : "410580001",
            "display" : "Vzorek respirační tekutiny"
          },
          {
            "code" : "732293002",
            "display" : "Vzorek slinného kamene"
          },
          {
            "code" : "309066003",
            "display" : "Bioptický vzorek kůže"
          },
          {
            "code" : "430268003",
            "display" : "Vzorek z kosti"
          },
          {
            "code" : "119398007",
            "display" : "Vzorek z mozku"
          },
          {
            "code" : "122601001",
            "display" : "Bioptický vzorek z prsu"
          },
          {
            "code" : "119307008",
            "display" : "Vzorek z endotracheální kanyly"
          },
          {
            "code" : "119399004",
            "display" : "Vzorek z oka"
          },
          {
            "code" : "127476006",
            "display" : "Vzorek z vejcovodu"
          },
          {
            "code" : "446951004",
            "display" : "Vzorek z granulační tkáně"
          },
          {
            "code" : "127473003",
            "display" : "Vzorek z ledviny"
          },
          {
            "code" : "119383005",
            "display" : "Vzorek z jater"
          },
          {
            "code" : "122610009",
            "display" : "Bioptický vzorek z plic"
          },
          {
            "code" : "447407009",
            "display" : "Vzorek z nekrotické tkáně"
          },
          {
            "code" : "127469001",
            "display" : "Vzorek z pankreatu"
          },
          {
            "code" : "119403008",
            "display" : "Vzorek z placenty"
          },
          {
            "code" : "1003711005",
            "display" : "Vzorek z náhrady kloubu"
          },
          {
            "code" : "608969007",
            "display" : "Vzorek z kůže"
          },
          {
            "code" : "433308004",
            "display" : "Vzorek ze sleziny"
          },
          {
            "code" : "119379005",
            "display" : "Vzorek ze žaludku"
          },
          {
            "code" : "445447003",
            "display" : "Aspirát z trachey"
          },
          {
            "code" : "441903006",
            "display" : "Vzorek z bronchální aspirace"
          },
          {
            "code" : "440674008",
            "display" : "Vzorek získaný laváží"
          },
          {
            "code" : "57711000052109",
            "display" : "Vzorek získaný punkcí"
          },
          {
            "code" : "16220971000119101",
            "display" : "Vzorek tekutiny z cysty ledviny"
          },
          {
            "code" : "278020009",
            "display" : "Jednorázový vzorek moči"
          },
          {
            "code" : "271514008",
            "display" : "Vzorek kostní dřeně ze sterna"
          },
          {
            "code" : "472894002",
            "display" : "Stěr z rohovky"
          },
          {
            "code" : "472900002",
            "display" : "Stěr z dásně"
          },
          {
            "code" : "472888005",
            "display" : "Stěr z hrtanu"
          },
          {
            "code" : "16210971000119108",
            "display" : "Stěr z léze"
          },
          {
            "code" : "472862007",
            "display" : "Stěr z kožní léze"
          },
          {
            "code" : "472879001",
            "display" : "Stěr z placenty"
          },
          {
            "code" : "472885008",
            "display" : "Stěr z dekubitu"
          },
          {
            "code" : "472883001",
            "display" : "Stěr z chirurgické rány"
          },
          {
            "code" : "472866005",
            "display" : "Stěr z jazyka"
          },
          {
            "code" : "472867001",
            "display" : "Stěr z tonsily"
          },
          {
            "code" : "461911000124106",
            "display" : "Orofaryngeální stěr"
          },
          {
            "code" : "309478005",
            "display" : "Vzorek trombu"
          },
          {
            "code" : "258480001",
            "display" : "Transtracheální aspirát"
          },
          {
            "code" : "258436001",
            "display" : "Vzorek tkáně pupečníku"
          },
          {
            "code" : "258530009",
            "display" : "Uretrální stěr"
          },
          {
            "code" : "444937002",
            "display" : "Vzorek moči z ureteru"
          },
          {
            "code" : "447589008",
            "display" : "Moč po jednorázové katetrizaci"
          },
          {
            "code" : "446907008",
            "display" : "Vzorek moči z ledviny"
          },
          {
            "code" : "258520000",
            "display" : "Vaginální stěr"
          },
          {
            "code" : "703431007",
            "display" : "Vzorek žilní pupečníkové krve"
          },
          {
            "code" : "258482009",
            "display" : "Vzorek tekutiny z puchýře"
          },
          {
            "code" : "258523003",
            "display" : "Stěr z vulvy"
          },
          {
            "code" : "258662004",
            "display" : "Vzorek na adhezním sklíčku"
          },
          {
            "code" : "258527002",
            "display" : "Anální stěr"
          },
          {
            "code" : "258415003",
            "display" : "Bioptický vzorek"
          },
          {
            "code" : "303248007",
            "display" : "Krevní nátěr"
          },
          {
            "code" : "737535000",
            "display" : "Krevní nátěr"
          },
          {
            "code" : "122560006",
            "display" : "Krevní vzorek dárce"
          },
          {
            "code" : "866033003",
            "display" : "Krev v aerobní hemokultivační lahvi"
          },
          {
            "code" : "866032008",
            "display" : "Krev v anaerobní hemokultivační lahvi"
          },
          {
            "code" : "878861003",
            "display" : "Krev v hemokultivační lahvi"
          },
          {
            "code" : "445295009",
            "display" : "Krevní vzorek v EDTA"
          },
          {
            "code" : "309061008",
            "display" : "Aspirát z prsu tenkou jehlou"
          },
          {
            "code" : "309503002",
            "display" : "Sekret z bradavky"
          },
          {
            "code" : "309174004",
            "display" : "Biopsie bronchu"
          },
          {
            "code" : "119308003",
            "display" : "Kanyla jako vzorek"
          },
          {
            "code" : "473409003",
            "display" : "Centrální žilní katétr jako vzorek"
          },
          {
            "code" : "472929000",
            "display" : "Špička centrálního žilního katétru"
          },
          {
            "code" : "445372002",
            "display" : "Mozkomíšní mok z mozkové komory"
          },
          {
            "code" : "258524009",
            "display" : "Cervikální stěr"
          },
          {
            "code" : "440473005",
            "display" : "Kontaktní čočka jako vzorek"
          },
          {
            "code" : "440500007",
            "display" : "Suchá kapka krve"
          },
          {
            "code" : "119319000",
            "display" : "Vzorek léčiva"
          },
          {
            "code" : "309165001",
            "display" : "Vzorek ucha"
          },
          {
            "code" : "258575007",
            "display" : "Ranní moč"
          },
          {
            "code" : "446676001",
            "display" : "Odsáté mateřské mléko"
          },
          {
            "code" : "122568004",
            "display" : "Exsudát z rány"
          },
          {
            "code" : "258519006",
            "display" : "Stěr z ženského genitálu"
          },
          {
            "code" : "737357006",
            "display" : "Vzorek fetální krve"
          },
          {
            "code" : "698276005",
            "display" : "První proud moči"
          },
          {
            "code" : "733056005",
            "display" : "Vzorek tekutiny z ucha"
          },
          {
            "code" : "732976006",
            "display" : "Vzorek tekutiny ze zevního zvukovodu"
          },
          {
            "code" : "16214171000119101",
            "display" : "Vzorek genitální tekutiny"
          },
          {
            "code" : "258570002",
            "display" : "Urogenitální vzorek"
          },
          {
            "code" : "309124001",
            "display" : "Biopsie kloubu"
          },
          {
            "code" : "431361003",
            "display" : "Kloubní tekutina"
          },
          {
            "code" : "309079007",
            "display" : "Biopsie lymfatické uzliny"
          },
          {
            "code" : "309052008",
            "display" : "Vzorek mužského genitálu"
          },
          {
            "code" : "258574006",
            "display" : "Střední proud moči"
          },
          {
            "code" : "119321005",
            "display" : "Vzorek mléka"
          },
          {
            "code" : "119377007",
            "display" : "Vzorek myokardu"
          },
          {
            "code" : "16224371000119105",
            "display" : "Výplach nosu"
          },
          {
            "code" : "16223051000119101",
            "display" : "Obsah paranazální dutiny"
          },
          {
            "code" : "258411007",
            "display" : "Aspirát z nosohltanu"
          },
          {
            "code" : "441620008",
            "display" : "Orální tekutina"
          },
          {
            "code" : "418932006",
            "display" : "Orální stěr"
          },
          {
            "code" : "258511009",
            "display" : "Uretrální stěr u muže"
          },
          {
            "code" : "258510005",
            "display" : "Stěr z penisu"
          },
          {
            "code" : "258526006",
            "display" : "Perianální stěr"
          },
          {
            "code" : "258525005",
            "display" : "Perineální stěr"
          },
          {
            "code" : "472923004",
            "display" : "Špička periferního katétru"
          },
          {
            "code" : "168140004",
            "display" : "Peritoneální dialyzát"
          },
          {
            "code" : "788707000",
            "display" : "Plazma / sérum / plná krev"
          },
          {
            "code" : "708049000",
            "display" : "Plazma s EDTA"
          },
          {
            "code" : "309172000",
            "display" : "Biopsie pleury"
          },
          {
            "code" : "258471001",
            "display" : "Sekret po masáži prostaty"
          },
          {
            "code" : "708112008",
            "display" : "Aspirát z Douglasova prostoru"
          },
          {
            "code" : "258664003",
            "display" : "Vzorek pomocí lepicí pásky"
          },
          {
            "code" : "119348006",
            "display" : "Semenná plazma"
          },
          {
            "code" : "122589008",
            "display" : "Sérum od dárce krve"
          },
          {
            "code" : "122590004",
            "display" : "Sérum od pacienta"
          },
          {
            "code" : "258549008",
            "display" : "Kožní šupina"
          },
          {
            "code" : "258503004",
            "display" : "Kožní stěr"
          },
          {
            "code" : "1179252003",
            "display" : "Mikroskopické sklíčko jako vzorek"
          },
          {
            "code" : "119371008",
            "display" : "Vzorek z abscesu"
          },
          {
            "code" : "446972001",
            "display" : "Aspirát z abscesu"
          },
          {
            "code" : "119392008",
            "display" : "Vzorek z anu"
          },
          {
            "code" : "127456000",
            "display" : "Vzorek z prsu"
          },
          {
            "code" : "16211051000119109",
            "display" : "Vzorek z hluboké rány"
          },
          {
            "code" : "119396006",
            "display" : "Vzorek z endometria"
          },
          {
            "code" : "440229008",
            "display" : "Vzorek z prostředí"
          },
          {
            "code" : "16212771000119105",
            "display" : "Biopsie z víčka"
          },
          {
            "code" : "449446003",
            "display" : "Vzorek ze žlučníku"
          },
          {
            "code" : "119344008",
            "display" : "Vzorek z genitálního systému"
          },
          {
            "code" : "447098004",
            "display" : "Seškrab z nehtu"
          },
          {
            "code" : "430248009",
            "display" : "Vzorek z nosohltanu"
          },
          {
            "code" : "447154002",
            "display" : "Vzorek z nosu"
          },
          {
            "code" : "119397002",
            "display" : "Vzorek z penisu"
          },
          {
            "code" : "434250007",
            "display" : "Biopsie perikardu"
          },
          {
            "code" : "438660002",
            "display" : "Vzorek z implantátu"
          },
          {
            "code" : "446952006",
            "display" : "Seškrab z kůže"
          },
          {
            "code" : "119295008",
            "display" : "Aspirát"
          },
          {
            "code" : "119324002",
            "display" : "Vzorek neznámého materiálu"
          },
          {
            "code" : "703691002",
            "display" : "Vycentrovaný mozkomíšní mok"
          },
          {
            "code" : "258609006",
            "display" : "Aspirát sputa z trachey"
          },
          {
            "code" : "447488002",
            "display" : "Suprapubická moč"
          },
          {
            "code" : "373826004",
            "display" : "Chirurgicky odstraněná tkáň"
          },
          {
            "code" : "472896000",
            "display" : "Stěr z puchýře"
          },
          {
            "code" : "733104004",
            "display" : "Stěr z bukální sliznice"
          },
          {
            "code" : "472884007",
            "display" : "Stěr z hluboké rány"
          },
          {
            "code" : "472886009",
            "display" : "Stěr z gastrostomie"
          },
          {
            "code" : "472901003",
            "display" : "Stěr z paranazální dutiny"
          },
          {
            "code" : "472881004",
            "display" : "Stěr z hltanu"
          },
          {
            "code" : "472882006",
            "display" : "Stěr z povrchové rány"
          },
          {
            "code" : "33901000087104",
            "display" : "Stěr z tracheostomie"
          },
          {
            "code" : "472871003",
            "display" : "Stěr z vředu"
          },
          {
            "code" : "445364004",
            "display" : "Stěr z axily"
          },
          {
            "code" : "445444005",
            "display" : "Stěr z třísla"
          },
          {
            "code" : "445367006",
            "display" : "Stěr z pupku"
          },
          {
            "code" : "710069003",
            "display" : "Vzorek klíštěte"
          },
          {
            "code" : "128157004",
            "display" : "Tkáně z mozku"
          },
          {
            "code" : "399492000",
            "display" : "Tkáně z plic"
          },
          {
            "code" : "699874006",
            "display" : "Tkáně z perikardu"
          },
          {
            "code" : "57741000052105",
            "display" : "Tracheální sekret"
          },
          {
            "code" : "472938003",
            "display" : "Tracheální kanyla jako vzorek"
          },
          {
            "code" : "122877000",
            "display" : "Aspirát z horních dýchacích cest"
          },
          {
            "code" : "258604001",
            "display" : "Vzorek z horních dýchacích cest"
          },
          {
            "code" : "122565001",
            "display" : "Vzorek z močového katétru"
          },
          {
            "code" : "446130001",
            "display" : "Vzorek moči z močového měchýře"
          },
          {
            "code" : "442173007",
            "display" : "Vzorek moči z nefrostomie"
          },
          {
            "code" : "446306009",
            "display" : "Vzorek moči ze sběrného sáčku"
          },
          {
            "code" : "446846006",
            "display" : "Moč z permanentního katétru"
          },
          {
            "code" : "16221251000119108",
            "display" : "Moč z jednorázového katétru"
          },
          {
            "code" : "258577004",
            "display" : "Vaginální sekret"
          },
          {
            "code" : "472932002",
            "display" : "Vaskulární katétr jako vzorek"
          },
          {
            "code" : "703432000",
            "display" : "Vzorek žilní plazmy"
          },
          {
            "code" : "472942000",
            "display" : "Ventrikuloperitoneální shunt jako vzorek"
          },
          {
            "code" : "258438000",
            "display" : "Vzorek sklivce"
          },
          {
            "code" : "119318008",
            "display" : "Vzorek vody"
          },
          {
            "code" : "57921000052103",
            "display" : "Plná krev s edetovou kyselinou"
          },
          {
            "code" : "258565009",
            "display" : "Vzorek choriových klků"
          },
          {
            "code" : "258599007",
            "display" : "Roztok z kontaktní čočky"
          },
          {
            "code" : "439961009",
            "display" : "Implantát jako vzorek"
          },
          {
            "code" : "258603007",
            "display" : "Vzorek z dýchacího systému"
          },
          {
            "code" : "119368000",
            "display" : "Vzorek z cysty"
          },
          {
            "code" : "433861002",
            "display" : "FNAB z paranazální dutiny"
          },
          {
            "code" : "734379005",
            "display" : "Vzorek z periodoncia"
          },
          {
            "code" : "119369008",
            "display" : "Vzorek z vředu"
          },
          {
            "code" : "430304001",
            "display" : "Vzorek z neurčené lokalizace"
          },
          {
            "code" : "127479004",
            "display" : "Vzorek z dělohy"
          },
          {
            "code" : "122550002",
            "display" : "FNAB vzorek"
          },
          {
            "code" : "258576008",
            "display" : "Suprapubický aspirát"
          },
          {
            "code" : "445297001",
            "display" : "Stěr z vnitřní části nosu"
          },
          {
            "code" : "699287008",
            "display" : "Moč ze suprapubického permanentního katétru"
          },
          {
            "code" : "444946008",
            "display" : "Dialyzační tekutina před dialýzou"
          },
          {
            "code" : "122592007",
            "display" : "Sérum nebo plazma"
          },
          {
            "code" : "309141004",
            "display" : "Vzorek nadledvin"
          },
          {
            "code" : "309479002",
            "display" : "Vzorek tepny"
          },
          {
            "code" : "122558009",
            "display" : "Vzorek krve z krevního přípravku"
          },
          {
            "code" : "122559001",
            "display" : "Kontrolní krevní vzorek"
          },
          {
            "code" : "122562003",
            "display" : "Krevní vzorek novorozence"
          },
          {
            "code" : "258587000",
            "display" : "Buffy coat (vrstva leukocytů)"
          },
          {
            "code" : "433116003",
            "display" : "FNAB z jater"
          },
          {
            "code" : "119346005",
            "display" : "Vzorek vaječného žloutku"
          },
          {
            "code" : "122582004",
            "display" : "Vzorek erytrocytů z krevního přípravku"
          },
          {
            "code" : "119333000",
            "display" : "Vzorek fibroblastů"
          },
          {
            "code" : "119320006",
            "display" : "Vzorek potraviny"
          },
          {
            "code" : "122576002",
            "display" : "Genitální hlen"
          },
          {
            "code" : "119337004",
            "display" : "Vzorek vdechovaného plynu"
          },
          {
            "code" : "258606004",
            "display" : "Vzorek z dolních dýchacích cest"
          },
          {
            "code" : "119316007",
            "display" : "Nebuněčná (nebiologická) tekutina"
          },
          {
            "code" : "122551003",
            "display" : "Vzorek periferní krve"
          },
          {
            "code" : "119301009",
            "display" : "Vzorek rostliny"
          },
          {
            "code" : "119362004",
            "display" : "Plazma chudá na trombocyty"
          },
          {
            "code" : "119363009",
            "display" : "Plazma bohatá na trombocyty"
          },
          {
            "code" : "119358005",
            "display" : "Vzorek trombocytů"
          },
          {
            "code" : "725946000",
            "display" : "Vzorek retikulocytů"
          },
          {
            "code" : "309508006",
            "display" : "FNAB z léze měkkých tkání"
          },
          {
            "code" : "119391001",
            "display" : "Vzorek z bronchu"
          },
          {
            "code" : "119367005",
            "display" : "Vzorek z popáleniny"
          },
          {
            "code" : "702701006",
            "display" : "Vzorek z čípku nebo pochvy"
          },
          {
            "code" : "119400006",
            "display" : "Vzorek z rohovky"
          },
          {
            "code" : "1003708009",
            "display" : "Vzorek z drénu"
          },
          {
            "code" : "127462005",
            "display" : "Vzorek ze srdce"
          },
          {
            "code" : "127458004",
            "display" : "Vzorek z plic"
          },
          {
            "code" : "122614000",
            "display" : "FNAB z plic"
          },
          {
            "code" : "432382007",
            "display" : "FNAB z lymfatické uzliny"
          },
          {
            "code" : "128155007",
            "display" : "Vzorek z ovaria"
          },
          {
            "code" : "431406009",
            "display" : "FNAB z pankreatu"
          },
          {
            "code" : "441695007",
            "display" : "FNAB z příušní žlázy"
          },
          {
            "code" : "430250001",
            "display" : "Vzorek z peritonea"
          },
          {
            "code" : "127459007",
            "display" : "Vzorek z pleury"
          },
          {
            "code" : "119386002",
            "display" : "Vzorek z prostaty"
          },
          {
            "code" : "384819001",
            "display" : "Jehlová biopsie prostaty"
          },
          {
            "code" : "434406008",
            "display" : "FNAB ze slinné žlázy"
          },
          {
            "code" : "441810001",
            "display" : "FNAB z měkké tkáně"
          },
          {
            "code" : "441749007",
            "display" : "FNAB z podčelistní žlázy"
          },
          {
            "code" : "128154006",
            "display" : "Vzorek z varlete"
          },
          {
            "code" : "119389009",
            "display" : "Vzorek z hrdla"
          },
          {
            "code" : "399680007",
            "display" : "Vzorek ze štítné žlázy"
          },
          {
            "code" : "119390000",
            "display" : "Vzorek z trachey"
          },
          {
            "code" : "399411006",
            "display" : "Vzorek z trofoblastu"
          },
          {
            "code" : "119393003",
            "display" : "Vzorek z uretry"
          },
          {
            "code" : "450872001",
            "display" : "Vzorek z močového měchýře"
          },
          {
            "code" : "119395005",
            "display" : "Vzorek z děložního čípku"
          },
          {
            "code" : "119394009",
            "display" : "Vzorek z pochvy"
          },
          {
            "code" : "119365002",
            "display" : "Vzorek z rány"
          },
          {
            "code" : "309146009",
            "display" : "FNAB štítné žlázy"
          },
          {
            "code" : "122638001",
            "display" : "Tkáně z tenkého střeva"
          },
          {
            "code" : "258444001",
            "display" : "Vzorek komorové vody"
          },
          {
            "code" : "258485006",
            "display" : "Seškrab z rohovky"
          },
          {
            "code" : "168137004",
            "display" : "Gastrický aspirát"
          },
          {
            "code" : "1259931002",
            "display" : "Vzorek vousů"
          },
          {
            "code" : "168145009",
            "display" : "Vzorek lymfy"
          },
          {
            "code" : "309507001",
            "display" : "Biopsie svalu"
          },
          {
            "code" : "16224171000119108",
            "display" : "Nasotracheální aspirát"
          },
          {
            "code" : "309068002",
            "display" : "Vzorek kožní léze"
          },
          {
            "code" : "396997002",
            "display" : "Aspirát z kostní dřeně"
          },
          {
            "code" : "16215771000119101",
            "display" : "FNAB z tříselné uzliny"
          },
          {
            "code" : "430236006",
            "display" : "Vzorek z nervu"
          },
          {
            "code" : "472898004",
            "display" : "Stěr z ruky"
          },
          {
            "code" : "472868006",
            "display" : "Stěr z peritoneální dutiny"
          },
          {
            "code" : "444787003",
            "display" : "Stěr z endocervixu"
          },
          {
            "code" : "16223971000119109",
            "display" : "FNAB synoviální tekutiny"
          },
          {
            "code" : "122656001",
            "display" : "Tkáně ze žlučníku"
          },
          {
            "code" : "122736005",
            "display" : "Tkáně z placenty"
          },
          {
            "code" : "369611008",
            "display" : "Biopsie tenkého střeva"
          },
          {
            "code" : "309191000",
            "display" : "Biopsie tonsily"
          },
          {
            "code" : "697989009",
            "display" : "Stěr z přední části nosu"
          },
          {
            "code" : "57931000052101",
            "display" : "Kombinovaný vzorek cervikálního hlenu a moči"
          },
          {
            "code" : "433324003",
            "display" : "Vzorek z oční krajiny"
          },
          {
            "code" : "16216171000119108",
            "display" : "Aspirát z jater"
          },
          {
            "code" : "16221491000119104",
            "display" : "Samovolně vyloučená moč"
          }
        ]
      }
    ]
  }
}

```
