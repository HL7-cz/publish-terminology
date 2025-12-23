# eHDSI Allergen No Drug - HL7 Czech Terminology Implementation Guide v0.2.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **eHDSI Allergen No Drug**

## ValueSet: eHDSI Allergen No Drug 

| | | |
| :--- | :--- | :--- |
| *Official URL*:https://ncez.mzcr.cz/terminology/ValueSet/eHDSIAllergenNoDrug-cz | *Version*:0.2.0 | |
| *Standards status:*[Draft](http://hl7.org/fhir/R4/versions.html#std-process) | [Maturity Level](http://hl7.org/fhir/versions.html#maturity): 1 | *Computable Name*:EHDSIAllergenNoDrugCZ |
| *Other Identifiers:*OID:1.3.6.1.4.1.12559.11.10.1.3.1.42.19 | | |
| **Copyright/Legal**: This value set includes content from SNOMED CT, which is copyright © 2002+ International Health Terminology Standards Development Organisation (IHTSDO), and distributed by agreement between IHTSDO and HL7. Implementer use of SNOMED CT is not covered by this agreement | | |

 
The value set is used to code the patient's kind of adverse reactions against substance, food or drugs 

 **References** 

* Included into [AllergenWithExceptions](ValueSet-AllergenWithExceptions.md)

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
  "id" : "eHDSIAllergenNoDrug-cz",
  "language" : "cs",
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
  "url" : "https://ncez.mzcr.cz/terminology/ValueSet/eHDSIAllergenNoDrug-cz",
  "identifier" : [
    {
      "system" : "urn:ietf:rfc:3986",
      "value" : "urn:oid:1.3.6.1.4.1.12559.11.10.1.3.1.42.19"
    }
  ],
  "version" : "0.2.0",
  "name" : "EHDSIAllergenNoDrugCZ",
  "title" : "eHDSI Allergen No Drug",
  "status" : "active",
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
  "description" : "The value set is used to code the patient's kind of adverse reactions against substance, food or drugs",
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
            "code" : "432003",
            "display" : "kyselina karminová – barvivo (E120)"
          },
          {
            "code" : "2159007",
            "display" : "azorubin"
          },
          {
            "code" : "2309006",
            "display" : "zlato"
          },
          {
            "code" : "2799001",
            "display" : "methylbenzethoniumchlorid"
          },
          {
            "code" : "3718001",
            "display" : "kravské mléko"
          },
          {
            "code" : "3829006",
            "display" : "železo"
          },
          {
            "code" : "6725000",
            "display" : "methylenová modř"
          },
          {
            "code" : "7434003",
            "display" : "erytrosin B – barvivo (E-127)"
          },
          {
            "code" : "8204009",
            "display" : "polyester"
          },
          {
            "code" : "9010006",
            "display" : "methylová modř"
          },
          {
            "code" : "9021002",
            "display" : "karbaryl"
          },
          {
            "code" : "11526002",
            "display" : "aspartam"
          },
          {
            "code" : "12503006",
            "display" : "hliník"
          },
          {
            "code" : "12510000",
            "display" : "eukalyptový olej"
          },
          {
            "code" : "13577000",
            "display" : "ořech"
          },
          {
            "code" : "13652007",
            "display" : "silikon"
          },
          {
            "code" : "14402002",
            "display" : "dřevo"
          },
          {
            "code" : "16313001",
            "display" : "čaj"
          },
          {
            "code" : "17172002",
            "display" : "dibromofluorescein"
          },
          {
            "code" : "17486007",
            "display" : "mecrylate"
          },
          {
            "code" : "17693003",
            "display" : "akriflavin"
          },
          {
            "code" : "19839007",
            "display" : "sorbitol"
          },
          {
            "code" : "19893005",
            "display" : "dichroman draselný"
          },
          {
            "code" : "21592006",
            "display" : "tartrazin"
          },
          {
            "code" : "22242006",
            "display" : "glutaraldehyd"
          },
          {
            "code" : "22836000",
            "display" : "zelenina"
          },
          {
            "code" : "22931006",
            "display" : "Evansova modř"
          },
          {
            "code" : "24102007",
            "display" : "chlorthalonil"
          },
          {
            "code" : "24215009",
            "display" : "kyselina pikrová"
          },
          {
            "code" : "25761002",
            "display" : "glutamin"
          },
          {
            "code" : "27119002",
            "display" : "trimelitický anhydrid"
          },
          {
            "code" : "28230009",
            "display" : "drůbeží maso"
          },
          {
            "code" : "28421003",
            "display" : "kyselina sorbová"
          },
          {
            "code" : "28647000",
            "display" : "maso"
          },
          {
            "code" : "29263009",
            "display" : "káva"
          },
          {
            "code" : "29522004",
            "display" : "tolonium chlorid"
          },
          {
            "code" : "31006001",
            "display" : "říše Plantae (rostliny)"
          },
          {
            "code" : "31347007",
            "display" : "lékořice"
          },
          {
            "code" : "33008008",
            "display" : "prach"
          },
          {
            "code" : "33396006",
            "display" : "nikl"
          },
          {
            "code" : "35605007",
            "display" : "lanolin bezvodý"
          },
          {
            "code" : "35609001",
            "display" : "azofloxin"
          },
          {
            "code" : "37017009",
            "display" : "parazitičtí červi"
          },
          {
            "code" : "37575004",
            "display" : "karmoisin A (E122)"
          },
          {
            "code" : "38271009",
            "display" : "šafránová žluť;"
          },
          {
            "code" : "41750006",
            "display" : "brazilein"
          },
          {
            "code" : "41967008",
            "display" : "stříbro"
          },
          {
            "code" : "42416001",
            "display" : "lanolin"
          },
          {
            "code" : "43230003",
            "display" : "guma"
          },
          {
            "code" : "43735007",
            "display" : "síra"
          },
          {
            "code" : "44027008",
            "display" : "potrava z mořských živočichů (mořské plody)"
          },
          {
            "code" : "47703008",
            "display" : "laktóza"
          },
          {
            "code" : "48540004",
            "display" : "patentní modř V, sodná sůl (E131)"
          },
          {
            "code" : "50593009",
            "display" : "kasein"
          },
          {
            "code" : "51503008",
            "display" : "růžový olej"
          },
          {
            "code" : "51905005",
            "display" : "hořčice"
          },
          {
            "code" : "51963001",
            "display" : "sulfitová sůl"
          },
          {
            "code" : "52454007",
            "display" : "albumin"
          },
          {
            "code" : "52836003",
            "display" : "paraformaldehyd"
          },
          {
            "code" : "54041009",
            "display" : "světlicový olej"
          },
          {
            "code" : "56822005",
            "display" : "kvartérní amoniová sůl"
          },
          {
            "code" : "57126000",
            "display" : "lepidlo"
          },
          {
            "code" : "57720001",
            "display" : "anýzový olej"
          },
          {
            "code" : "59351004",
            "display" : "citrát"
          },
          {
            "code" : "59533004",
            "display" : "potravinové aditivum"
          },
          {
            "code" : "59545008",
            "display" : "pesticid"
          },
          {
            "code" : "61088005",
            "display" : "plast"
          },
          {
            "code" : "61789006",
            "display" : "barvivo"
          },
          {
            "code" : "63338004",
            "display" : "dochucovadlo léčiv"
          },
          {
            "code" : "64601002",
            "display" : "dřevěný prach"
          },
          {
            "code" : "65123005",
            "display" : "cholin"
          },
          {
            "code" : "65345002",
            "display" : "epoxidová pryskyřice"
          },
          {
            "code" : "66562002",
            "display" : "cigaretový tabák"
          },
          {
            "code" : "66925006",
            "display" : "měď"
          },
          {
            "code" : "67324005",
            "display" : "rýže"
          },
          {
            "code" : "68524009",
            "display" : "tragant"
          },
          {
            "code" : "71463006",
            "display" : "polyethylen"
          },
          {
            "code" : "72179002",
            "display" : "oxybenzon"
          },
          {
            "code" : "72511004",
            "display" : "ovoce"
          },
          {
            "code" : "75044009",
            "display" : "sisalové vlákno"
          },
          {
            "code" : "75665004",
            "display" : "glutamát sodný"
          },
          {
            "code" : "80237000",
            "display" : "kakaové máslo"
          },
          {
            "code" : "81911001",
            "display" : "žvýkací tabák"
          },
          {
            "code" : "82566005",
            "display" : "krmivo"
          },
          {
            "code" : "83595008",
            "display" : "kozí mléko"
          },
          {
            "code" : "83619009",
            "display" : "polyvinylalkohol"
          },
          {
            "code" : "84212004",
            "display" : "ethylenimin"
          },
          {
            "code" : "84791008",
            "display" : "disiřičitan sodný"
          },
          {
            "code" : "89889006",
            "display" : "bavlněné vlákno"
          },
          {
            "code" : "102259006",
            "display" : "citrusové ovoce"
          },
          {
            "code" : "102261002",
            "display" : "jahoda"
          },
          {
            "code" : "102262009",
            "display" : "čokoláda"
          },
          {
            "code" : "102263004",
            "display" : "vejce"
          },
          {
            "code" : "102264005",
            "display" : "sýr"
          },
          {
            "code" : "102697003",
            "display" : "laktalbumin"
          },
          {
            "code" : "105590001",
            "display" : "látka"
          },
          {
            "code" : "111095003",
            "display" : "formaldehyd"
          },
          {
            "code" : "115589000",
            "display" : "ethanolamin"
          },
          {
            "code" : "116364004",
            "display" : "diazoniová sůl"
          },
          {
            "code" : "116549003",
            "display" : "organochlorinový pesticid"
          },
          {
            "code" : "116637007",
            "display" : "houbový antigen"
          },
          {
            "code" : "119417004",
            "display" : "organofosfátový insekticid"
          },
          {
            "code" : "128488006",
            "display" : "domácí prach"
          },
          {
            "code" : "226491003",
            "display" : "jablečná šťáva, jablečný mošt"
          },
          {
            "code" : "226723006",
            "display" : "pohanka - obilovina"
          },
          {
            "code" : "226776001",
            "display" : "sušené kravské mléko"
          },
          {
            "code" : "226791004",
            "display" : "ovčí mléko"
          },
          {
            "code" : "226915003",
            "display" : "červené maso"
          },
          {
            "code" : "226916002",
            "display" : "hovězí maso"
          },
          {
            "code" : "226942002",
            "display" : "jehněčí"
          },
          {
            "code" : "226955001",
            "display" : "kuřecí maso"
          },
          {
            "code" : "226963000",
            "display" : "kachní maso"
          },
          {
            "code" : "226967004",
            "display" : "krůtí maso"
          },
          {
            "code" : "227067008",
            "display" : "halibut"
          },
          {
            "code" : "227072004",
            "display" : "jazyk mořský"
          },
          {
            "code" : "227078000",
            "display" : "ďas mořský"
          },
          {
            "code" : "227083008",
            "display" : "platýs"
          },
          {
            "code" : "227099002",
            "display" : "treska polák"
          },
          {
            "code" : "227106004",
            "display" : "treska bělavá"
          },
          {
            "code" : "227136008",
            "display" : "sardinka"
          },
          {
            "code" : "227139001",
            "display" : "šproty"
          },
          {
            "code" : "227151004",
            "display" : "krevety"
          },
          {
            "code" : "227156009",
            "display" : "krevety scampi"
          },
          {
            "code" : "227183005",
            "display" : "rybí jikry"
          },
          {
            "code" : "227215000",
            "display" : "artyčok"
          },
          {
            "code" : "227219006",
            "display" : "lilek"
          },
          {
            "code" : "227220000",
            "display" : "červená řepa"
          },
          {
            "code" : "227227002",
            "display" : "kapusta"
          },
          {
            "code" : "227229004",
            "display" : "bílé zelí"
          },
          {
            "code" : "227230009",
            "display" : "kadeřávek"
          },
          {
            "code" : "227313005",
            "display" : "luštěniny"
          },
          {
            "code" : "227350006",
            "display" : "čočka"
          },
          {
            "code" : "227362005",
            "display" : "červené fazole"
          },
          {
            "code" : "227376006",
            "display" : "semeno anýzu"
          },
          {
            "code" : "227379004",
            "display" : "bobkový list"
          },
          {
            "code" : "227382009",
            "display" : "kardamom"
          },
          {
            "code" : "227383004",
            "display" : "semeno celeru"
          },
          {
            "code" : "227385006",
            "display" : "chilli koření"
          },
          {
            "code" : "227388008",
            "display" : "skořice"
          },
          {
            "code" : "227390009",
            "display" : "list koriandru"
          },
          {
            "code" : "227391008",
            "display" : "semeno koriandru"
          },
          {
            "code" : "227395004",
            "display" : "kari koření"
          },
          {
            "code" : "227396003",
            "display" : "fenykl"
          },
          {
            "code" : "227400003",
            "display" : "zázvor"
          },
          {
            "code" : "227404007",
            "display" : "muškátový květ"
          },
          {
            "code" : "227405008",
            "display" : "majoránka"
          },
          {
            "code" : "227407000",
            "display" : "oregáno"
          },
          {
            "code" : "227408005",
            "display" : "paprika"
          },
          {
            "code" : "227409002",
            "display" : "mák"
          },
          {
            "code" : "227411006",
            "display" : "šalvěj"
          },
          {
            "code" : "227413009",
            "display" : "tymián"
          },
          {
            "code" : "227414003",
            "display" : "kurkuma"
          },
          {
            "code" : "227425007",
            "display" : "fíky"
          },
          {
            "code" : "227435001",
            "display" : "nektarinka"
          },
          {
            "code" : "227444000",
            "display" : "malina"
          },
          {
            "code" : "227447007",
            "display" : "kaki"
          },
          {
            "code" : "227493005",
            "display" : "kešu ořech"
          },
          {
            "code" : "227501001",
            "display" : "makadamiový ořech"
          },
          {
            "code" : "227514000",
            "display" : "dýňové semeno"
          },
          {
            "code" : "227515004",
            "display" : "merlík chilský"
          },
          {
            "code" : "227538001",
            "display" : "nakládaná zelenina"
          },
          {
            "code" : "227598003",
            "display" : "med"
          },
          {
            "code" : "228104004",
            "display" : "butylovaný hydroxyanisol"
          },
          {
            "code" : "229934002",
            "display" : "mouka z cizrny"
          },
          {
            "code" : "229941008",
            "display" : "sójová mouka"
          },
          {
            "code" : "230034002",
            "display" : "ořechy a semena"
          },
          {
            "code" : "255640000",
            "display" : "biocid"
          },
          {
            "code" : "255667006",
            "display" : "parafín"
          },
          {
            "code" : "255764006",
            "display" : "freon"
          },
          {
            "code" : "255769001",
            "display" : "anhydrid hexahydrofthalový"
          },
          {
            "code" : "255772008",
            "display" : "difenylmethan diisokyanát"
          },
          {
            "code" : "255775005",
            "display" : "maleinanhydrid"
          },
          {
            "code" : "255842006",
            "display" : "balzám peruánský"
          },
          {
            "code" : "255859001",
            "display" : "butylovaný hydroxytoluen"
          },
          {
            "code" : "255864002",
            "display" : "ethyl-4-hydroxybenzoát"
          },
          {
            "code" : "255868004",
            "display" : "methyl 4-hydroxybenzoát"
          },
          {
            "code" : "255924000",
            "display" : "eugenol"
          },
          {
            "code" : "256260009",
            "display" : "pyl stromů a keřů"
          },
          {
            "code" : "256272003",
            "display" : "pyl jilmů"
          },
          {
            "code" : "256289006",
            "display" : "pyl chryzantém"
          },
          {
            "code" : "256292005",
            "display" : "pyl květin a bylin"
          },
          {
            "code" : "256293000",
            "display" : "pyl pelyňku černobýlu"
          },
          {
            "code" : "256303006",
            "display" : "pyl ambrózie"
          },
          {
            "code" : "256305004",
            "display" : "stromová pryskyřice"
          },
          {
            "code" : "256306003",
            "display" : "pomeranč"
          },
          {
            "code" : "256307007",
            "display" : "banán"
          },
          {
            "code" : "256313003",
            "display" : "ananas"
          },
          {
            "code" : "256315005",
            "display" : "grapefruit"
          },
          {
            "code" : "256316006",
            "display" : "mandarinka"
          },
          {
            "code" : "256317002",
            "display" : "hrozny"
          },
          {
            "code" : "256318007",
            "display" : "zelené fazole"
          },
          {
            "code" : "256319004",
            "display" : "mrkev"
          },
          {
            "code" : "256326004",
            "display" : "celer"
          },
          {
            "code" : "256329006",
            "display" : "špenát"
          },
          {
            "code" : "256331002",
            "display" : "kopr"
          },
          {
            "code" : "256350002",
            "display" : "mandle"
          },
          {
            "code" : "256351003",
            "display" : "para ořech"
          },
          {
            "code" : "256352005",
            "display" : "vlašský ořech - potravina"
          },
          {
            "code" : "256353000",
            "display" : "lískový ořech"
          },
          {
            "code" : "256354006",
            "display" : "fazole"
          },
          {
            "code" : "256363008",
            "display" : "živočišný materiál"
          },
          {
            "code" : "256419000",
            "display" : "myší epitel"
          },
          {
            "code" : "256435007",
            "display" : "peří"
          },
          {
            "code" : "256443002",
            "display" : "vaječný bílek"
          },
          {
            "code" : "256506002",
            "display" : "materiál z nerezové oceli"
          },
          {
            "code" : "256526003",
            "display" : "slitina kobaltu a chrómu"
          },
          {
            "code" : "256579008",
            "display" : "durapatit"
          },
          {
            "code" : "256596009",
            "display" : "zlatá dentální pájka"
          },
          {
            "code" : "256607001",
            "display" : "žáruvzdorná dentální keramika"
          },
          {
            "code" : "256633009",
            "display" : "polypropylen"
          },
          {
            "code" : "259221006",
            "display" : "methanol"
          },
          {
            "code" : "260118006",
            "display" : "pyl drnavce"
          },
          {
            "code" : "260126003",
            "display" : "pyl olivovníku"
          },
          {
            "code" : "260152009",
            "display" : "kočičí lupy a srst"
          },
          {
            "code" : "260153004",
            "display" : "kravské lupy a srst"
          },
          {
            "code" : "260154005",
            "display" : "psí lupy a srst"
          },
          {
            "code" : "260167008",
            "display" : "sezamové semínko"
          },
          {
            "code" : "260168003",
            "display" : "bílá fazole"
          },
          {
            "code" : "260176001",
            "display" : "kiwi"
          },
          {
            "code" : "260177005",
            "display" : "meloun"
          },
          {
            "code" : "260179008",
            "display" : "mango (ovoce)"
          },
          {
            "code" : "260184002",
            "display" : "hrách"
          },
          {
            "code" : "260189007",
            "display" : "pekanový ořech"
          },
          {
            "code" : "260204008",
            "display" : "semeno bavlny"
          },
          {
            "code" : "260205009",
            "display" : "slunečnicové semeno"
          },
          {
            "code" : "261249004",
            "display" : "slitina nikl–kobalt–chrom"
          },
          {
            "code" : "261712009",
            "display" : "akrylový polymer"
          },
          {
            "code" : "264287008",
            "display" : "zvířecí lupy a srst"
          },
          {
            "code" : "264295007",
            "display" : "bílkovina kravského mléka"
          },
          {
            "code" : "264331002",
            "display" : "obilí"
          },
          {
            "code" : "264337003",
            "display" : "semeno"
          },
          {
            "code" : "276310004",
            "display" : "zvířecí chlupy"
          },
          {
            "code" : "277016007",
            "display" : "alfa-chloralóza"
          },
          {
            "code" : "278840001",
            "display" : "kreveta"
          },
          {
            "code" : "280939008",
            "display" : "hmyzí jed"
          },
          {
            "code" : "288326000",
            "display" : "jed sršně"
          },
          {
            "code" : "288328004",
            "display" : "včelí jed"
          },
          {
            "code" : "288460008",
            "display" : "jed čmeláka"
          },
          {
            "code" : "290008007",
            "display" : "pyl bodláku"
          },
          {
            "code" : "301093003",
            "display" : "anhydrid organické kyseliny"
          },
          {
            "code" : "303300008",
            "display" : "vaječná bílkovina"
          },
          {
            "code" : "303314008",
            "display" : "jed škorpióna"
          },
          {
            "code" : "303315009",
            "display" : "jed pavouků"
          },
          {
            "code" : "311443003",
            "display" : "prach z kávových zrn"
          },
          {
            "code" : "311731000",
            "display" : "parafínový vosk"
          },
          {
            "code" : "387293003",
            "display" : "anthralin (dithranol)"
          },
          {
            "code" : "395734009",
            "display" : "guarová guma"
          },
          {
            "code" : "396049000",
            "display" : "ethyl-2-kyanoakrylát"
          },
          {
            "code" : "398705004",
            "display" : "konopí"
          },
          {
            "code" : "410853002",
            "display" : "perfluorochemical"
          },
          {
            "code" : "412056003",
            "display" : "fazole Lima"
          },
          {
            "code" : "412060000",
            "display" : "pepř černý"
          },
          {
            "code" : "412061001",
            "display" : "borůvky"
          },
          {
            "code" : "412068007",
            "display" : "žito"
          },
          {
            "code" : "412070003",
            "display" : "vanilka"
          },
          {
            "code" : "412071004",
            "display" : "pšenice"
          },
          {
            "code" : "412145001",
            "display" : "barva na vlasy"
          },
          {
            "code" : "412150007",
            "display" : "fragmenty hmyzu"
          },
          {
            "code" : "412153009",
            "display" : "králičí lupy a srst"
          },
          {
            "code" : "412156001",
            "display" : "hedvábí"
          },
          {
            "code" : "412357001",
            "display" : "kukuřice"
          },
          {
            "code" : "415710007",
            "display" : "terpeny"
          },
          {
            "code" : "418266005",
            "display" : "žlutý parafín"
          },
          {
            "code" : "418785009",
            "display" : "parfém"
          },
          {
            "code" : "418920007",
            "display" : "adhezivní látka"
          },
          {
            "code" : "419420009",
            "display" : "vodní meloun"
          },
          {
            "code" : "419604006",
            "display" : "pyl bylin"
          },
          {
            "code" : "419633007",
            "display" : "bílý parafín"
          },
          {
            "code" : "421556008",
            "display" : "kapsicin - pepř"
          },
          {
            "code" : "425620007",
            "display" : "kov"
          },
          {
            "code" : "430503006",
            "display" : "glutamát"
          },
          {
            "code" : "434162003",
            "display" : "neutrální pufrovaný formalín"
          },
          {
            "code" : "472731004",
            "display" : "pyl fíkovníku"
          },
          {
            "code" : "702730004",
            "display" : "jed medůzy"
          },
          {
            "code" : "710039005",
            "display" : "řepkové semeno"
          },
          {
            "code" : "710172008",
            "display" : "chmel"
          },
          {
            "code" : "710179004",
            "display" : "semeno lupiny"
          },
          {
            "code" : "710184005",
            "display" : "skopové maso"
          },
          {
            "code" : "710900003",
            "display" : "pyl slunečnice"
          },
          {
            "code" : "710902006",
            "display" : "pyl heřmánku"
          },
          {
            "code" : "710930006",
            "display" : "protein švába německého"
          },
          {
            "code" : "710937009",
            "display" : "protein švába amerického"
          },
          {
            "code" : "711088004",
            "display" : "protein vepří moči"
          },
          {
            "code" : "711089007",
            "display" : "protein roztoče"
          },
          {
            "code" : "711090003",
            "display" : "protein Acarus siro"
          },
          {
            "code" : "711092006",
            "display" : "protein Dermatophagoides farinae"
          },
          {
            "code" : "711096009",
            "display" : "protein Glycyphagus domesticus"
          },
          {
            "code" : "711097000",
            "display" : "protein Lepidoglyphus destructor"
          },
          {
            "code" : "719108000",
            "display" : "lupinová mouka"
          },
          {
            "code" : "726758002",
            "display" : "čekanka listová"
          },
          {
            "code" : "726759005",
            "display" : "sépie"
          },
          {
            "code" : "726761001",
            "display" : "čekanka"
          },
          {
            "code" : "726763003",
            "display" : "kapr"
          },
          {
            "code" : "734881000",
            "display" : "rajče"
          },
          {
            "code" : "735004000",
            "display" : "sladká brambora"
          },
          {
            "code" : "735006003",
            "display" : "oliheň"
          },
          {
            "code" : "735029006",
            "display" : "mořští korýši, měkkýši a ostnokožci"
          },
          {
            "code" : "735034005",
            "display" : "pstruh"
          },
          {
            "code" : "735035006",
            "display" : "sleď"
          },
          {
            "code" : "735042006",
            "display" : "hlávkový salát"
          },
          {
            "code" : "735043001",
            "display" : "makrela"
          },
          {
            "code" : "735045008",
            "display" : "houby"
          },
          {
            "code" : "735047000",
            "display" : "cibule"
          },
          {
            "code" : "735049002",
            "display" : "broskev"
          },
          {
            "code" : "735050002",
            "display" : "hruška"
          },
          {
            "code" : "735051003",
            "display" : "švestka"
          },
          {
            "code" : "735053000",
            "display" : "brambor"
          },
          {
            "code" : "735106000",
            "display" : "bazalka"
          },
          {
            "code" : "735123009",
            "display" : "brokolice"
          },
          {
            "code" : "735124003",
            "display" : "ječmen"
          },
          {
            "code" : "735211005",
            "display" : "kokos"
          },
          {
            "code" : "735212003",
            "display" : "papája"
          },
          {
            "code" : "735213008",
            "display" : "okurka"
          },
          {
            "code" : "735245003",
            "display" : "treska"
          },
          {
            "code" : "735246002",
            "display" : "úhoř"
          },
          {
            "code" : "735248001",
            "display" : "třešeň"
          },
          {
            "code" : "735249009",
            "display" : "avokádo"
          },
          {
            "code" : "735336002",
            "display" : "květák"
          },
          {
            "code" : "735337006",
            "display" : "ančovičky"
          },
          {
            "code" : "735340006",
            "display" : "citrón"
          },
          {
            "code" : "735341005",
            "display" : "rybí olej"
          },
          {
            "code" : "735959004",
            "display" : "mořští měkkýši"
          },
          {
            "code" : "735971005",
            "display" : "ryba"
          },
          {
            "code" : "735972003",
            "display" : "rak"
          },
          {
            "code" : "735974002",
            "display" : "úhoř říční"
          },
          {
            "code" : "735977009",
            "display" : "mořští korýši"
          },
          {
            "code" : "735979007",
            "display" : "chobotnice"
          },
          {
            "code" : "736027000",
            "display" : "hřebenatka"
          },
          {
            "code" : "736031006",
            "display" : "ústřice"
          },
          {
            "code" : "736162008",
            "display" : "humr"
          },
          {
            "code" : "736258006",
            "display" : "hmyzí sliny"
          },
          {
            "code" : "764166003",
            "display" : "karbol-fuchsín"
          },
          {
            "code" : "765099008",
            "display" : "sardinka pilčard"
          },
          {
            "code" : "767406000",
            "display" : "sulfity a sulfitové deriváty"
          },
          {
            "code" : "770326002",
            "display" : "měkkýš"
          },
          {
            "code" : "771518004",
            "display" : "peckoviny rodu Prunus"
          },
          {
            "code" : "772245002",
            "display" : "alkohol tuků ovčí vlny"
          },
          {
            "code" : "1003736004",
            "display" : "potraviny z mléka savců"
          },
          {
            "code" : "1003752001",
            "display" : "protein latexu Hevea brasiliensis"
          },
          {
            "code" : "1137358000",
            "display" : "pepř (Piper)"
          },
          {
            "code" : "24515005",
            "display" : "koření"
          },
          {
            "code" : "37663002",
            "display" : "jed"
          },
          {
            "code" : "51386004",
            "display" : "potravinové konzervanty"
          },
          {
            "code" : "63045006",
            "display" : "bobule"
          },
          {
            "code" : "70813002",
            "display" : "mléko"
          },
          {
            "code" : "80259003",
            "display" : "dochucovadlo"
          },
          {
            "code" : "87918000",
            "display" : "minerály"
          },
          {
            "code" : "116274004",
            "display" : "umělé sladidlo"
          },
          {
            "code" : "227038007",
            "display" : "bílé ryby"
          },
          {
            "code" : "227110001",
            "display" : "tučné ryby"
          },
          {
            "code" : "256248008",
            "display" : "rostlinný materiál"
          },
          {
            "code" : "256406004",
            "display" : "živočišný epitel"
          },
          {
            "code" : "289954006",
            "display" : "látky obsažené v houbách"
          },
          {
            "code" : "735108004",
            "display" : "zelí"
          },
          {
            "code" : "442571000124108",
            "display" : "stromový ořech"
          },
          {
            "code" : "3692009",
            "display" : "siřičitan sodný"
          },
          {
            "code" : "7791007",
            "display" : "sójový protein"
          },
          {
            "code" : "10827009",
            "display" : "mléčný protein"
          },
          {
            "code" : "14006006",
            "display" : "ethylenoxid"
          },
          {
            "code" : "22968009",
            "display" : "barvivo Sunset Yellow FCF"
          },
          {
            "code" : "23182003",
            "display" : "obiloviny"
          },
          {
            "code" : "35233000",
            "display" : "polyvinylchlorid"
          },
          {
            "code" : "55700001",
            "display" : "nylon"
          },
          {
            "code" : "63766005",
            "display" : "mouka"
          },
          {
            "code" : "73892005",
            "display" : "karmín"
          },
          {
            "code" : "79549001",
            "display" : "kyanoakrylát"
          },
          {
            "code" : "85066006",
            "display" : "azočerné barvivo"
          },
          {
            "code" : "89811004",
            "display" : "lepek"
          },
          {
            "code" : "111088007",
            "display" : "latex"
          },
          {
            "code" : "128489003",
            "display" : "písek"
          },
          {
            "code" : "226934003",
            "display" : "vepřové maso"
          },
          {
            "code" : "227066004",
            "display" : "štikozubec"
          },
          {
            "code" : "227081005",
            "display" : "parmice červená"
          },
          {
            "code" : "227131003",
            "display" : "pangas"
          },
          {
            "code" : "227147001",
            "display" : "srdcovky"
          },
          {
            "code" : "227150003",
            "display" : "mušle"
          },
          {
            "code" : "227339008",
            "display" : "fazolové výhonky"
          },
          {
            "code" : "227346004",
            "display" : "cizrna"
          },
          {
            "code" : "227374009",
            "display" : "bylinky a koření"
          },
          {
            "code" : "227387003",
            "display" : "pažitka"
          },
          {
            "code" : "227389000",
            "display" : "hřebíček"
          },
          {
            "code" : "227398002",
            "display" : "semeno pískavice"
          },
          {
            "code" : "227410007",
            "display" : "rozmarýn"
          },
          {
            "code" : "227423000",
            "display" : "datle"
          },
          {
            "code" : "227511008",
            "display" : "piniový oříšek"
          },
          {
            "code" : "227512001",
            "display" : "pistáciový ořech"
          },
          {
            "code" : "229944000",
            "display" : "pšeničná mouka"
          },
          {
            "code" : "255620007",
            "display" : "potravina"
          },
          {
            "code" : "255786007",
            "display" : "diisokyanát toluenu"
          },
          {
            "code" : "255844007",
            "display" : "směs parabenů"
          },
          {
            "code" : "255871007",
            "display" : "propyl-4-hydroxybenzoát"
          },
          {
            "code" : "256186006",
            "display" : "toluánský balzám"
          },
          {
            "code" : "256218005",
            "display" : "extrakt z řebříčku"
          },
          {
            "code" : "256262001",
            "display" : "pyl břízy bělokoré"
          },
          {
            "code" : "256267007",
            "display" : "pyl borovice"
          },
          {
            "code" : "256270006",
            "display" : "pyl dubu"
          },
          {
            "code" : "256277009",
            "display" : "pyl trav"
          },
          {
            "code" : "256281009",
            "display" : "pyl srhy"
          },
          {
            "code" : "256417003",
            "display" : "koňské lupy a srst"
          },
          {
            "code" : "256440004",
            "display" : "vosí jed"
          },
          {
            "code" : "256496006",
            "display" : "zlatá slitina"
          },
          {
            "code" : "256501007",
            "display" : "uhlíkové vlákno"
          },
          {
            "code" : "256504004",
            "display" : "polykarbonátový zubní materiál"
          },
          {
            "code" : "260108001",
            "display" : "pyl pelyňku pravého"
          },
          {
            "code" : "260131001",
            "display" : "pyl gumovníku"
          },
          {
            "code" : "260156007",
            "display" : "myší močové proteiny"
          },
          {
            "code" : "261243003",
            "display" : "mosaz"
          },
          {
            "code" : "286550009",
            "display" : "slepičí vejce"
          },
          {
            "code" : "289949002",
            "display" : "pyl cypřiše"
          },
          {
            "code" : "289955007",
            "display" : "pyl chmele"
          },
          {
            "code" : "311846002",
            "display" : "pyretroidní insekticid"
          },
          {
            "code" : "373780001",
            "display" : "meskalin"
          },
          {
            "code" : "387239001",
            "display" : "genciánová violeť"
          },
          {
            "code" : "391737006",
            "display" : "mandlový olej"
          },
          {
            "code" : "409595003",
            "display" : "biologicky rizikový materiál"
          },
          {
            "code" : "412161004",
            "display" : "vlna"
          },
          {
            "code" : "418504009",
            "display" : "oves"
          },
          {
            "code" : "431510009",
            "display" : "formalín"
          },
          {
            "code" : "698730007",
            "display" : "pyl růže"
          },
          {
            "code" : "710171001",
            "display" : "koňské maso"
          },
          {
            "code" : "710178007",
            "display" : "lněné semeno"
          },
          {
            "code" : "710183004",
            "display" : "králičí maso"
          },
          {
            "code" : "710932003",
            "display" : "protein molů"
          },
          {
            "code" : "711143002",
            "display" : "methyltetrahydroftalový anhydrid"
          },
          {
            "code" : "711316002",
            "display" : "protein perloočky"
          },
          {
            "code" : "720687003",
            "display" : "protein roztočů prachu"
          },
          {
            "code" : "726731009",
            "display" : "mečoun"
          },
          {
            "code" : "726764009",
            "display" : "bob koňský"
          },
          {
            "code" : "735030001",
            "display" : "česnek"
          },
          {
            "code" : "735046009",
            "display" : "muškátový oříšek"
          },
          {
            "code" : "735214002",
            "display" : "meruňka"
          },
          {
            "code" : "735215001",
            "display" : "jablko"
          },
          {
            "code" : "762766007",
            "display" : "poživatelná látka"
          },
          {
            "code" : "782576004",
            "display" : "stromový pyl"
          },
          {
            "code" : "785344003",
            "display" : "sisalový prach"
          },
          {
            "code" : "442461000124102",
            "display" : "ořech hikorový"
          },
          {
            "code" : "14321009",
            "display" : "kaptafol"
          },
          {
            "code" : "15896008",
            "display" : "methylová fialová 2B"
          },
          {
            "code" : "77249007",
            "display" : "ftalanhydrid"
          },
          {
            "code" : "84181009",
            "display" : "styren"
          },
          {
            "code" : "125706008",
            "display" : "natrium-benzoát"
          },
          {
            "code" : "226793001",
            "display" : "sójové mléko"
          },
          {
            "code" : "227042005",
            "display" : "cejn"
          },
          {
            "code" : "227105000",
            "display" : "kambala velká"
          },
          {
            "code" : "227144008",
            "display" : "tuňák"
          },
          {
            "code" : "227392001",
            "display" : "kmín"
          },
          {
            "code" : "255814009",
            "display" : "tetrachlorftalový anhydrid"
          },
          {
            "code" : "255840003",
            "display" : "kalafuna"
          },
          {
            "code" : "256259004",
            "display" : "pyl"
          },
          {
            "code" : "256290002",
            "display" : "pyl jiřinek"
          },
          {
            "code" : "256330001",
            "display" : "bylina"
          },
          {
            "code" : "256355007",
            "display" : "sójové boby"
          },
          {
            "code" : "261250004",
            "display" : "nikl–titan"
          },
          {
            "code" : "289122001",
            "display" : "kosmetické látky"
          },
          {
            "code" : "301712000",
            "display" : "kvartérní amoniová sloučenina"
          },
          {
            "code" : "408742009",
            "display" : "Rose bengal"
          },
          {
            "code" : "412548006",
            "display" : "ndigotin-disulfonan sodný"
          },
          {
            "code" : "710226003",
            "display" : "šípek"
          },
          {
            "code" : "710943006",
            "display" : "protein švába"
          },
          {
            "code" : "711094007",
            "display" : "protein roztoče Dermatophagoides pteronyssinus"
          },
          {
            "code" : "711098005",
            "display" : "protein roztoče Tyrophagus putrescentiae"
          },
          {
            "code" : "726749009",
            "display" : "mořský vlk"
          },
          {
            "code" : "726755004",
            "display" : "pór"
          },
          {
            "code" : "735009005",
            "display" : "losos"
          },
          {
            "code" : "736030007",
            "display" : "škeble"
          },
          {
            "code" : "736159005",
            "display" : "krab"
          },
          {
            "code" : "773757000",
            "display" : "jed mravence"
          },
          {
            "code" : "1137359008",
            "display" : "sladká paprika"
          },
          {
            "code" : "711319009",
            "display" : "protein potemníka moučného"
          },
          {
            "code" : "762952008",
            "display" : "burský ořech"
          }
        ]
      }
    ]
  }
}

```
