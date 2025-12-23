# Standard namespaces for national identity card - HL7 Czech Terminology Implementation Guide v0.2.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Standard namespaces for national identity card**

## ValueSet: Standard namespaces for national identity card 

| | | |
| :--- | :--- | :--- |
| *Official URL*:https://hl7.cz/terminology/ValueSet/OP-NS | *Version*:0.2.0 | |
| *Standards status:*[Draft](http://hl7.org/fhir/R4/versions.html#std-process) | [Maturity Level](http://hl7.org/fhir/versions.html#maturity): 1 | *Computable Name*:OPNSVS |

 
National identity card's namespaces (CZ) 

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
  "id" : "OP-NS",
  "meta" : {
    "profile" : ["http://hl7.org/fhir/StructureDefinition/shareablevalueset"]
  },
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
  "url" : "https://hl7.cz/terminology/ValueSet/OP-NS",
  "version" : "0.2.0",
  "name" : "OPNSVS",
  "title" : "Standard namespaces for national identity card",
  "status" : "draft",
  "experimental" : false,
  "date" : "2023-01-01",
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
  "description" : "National identity card's namespaces (CZ)",
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
  "compose" : {
    "include" : [
      {
        "system" : "urn:ietf:rfc:3986",
        "concept" : [
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-AFG",
            "display" : "OP: Afghánistán"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-ALB",
            "display" : "OP: Albánie"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-DZA",
            "display" : "OP: Alžírsko"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-ASM",
            "display" : "OP: Americká Samoa"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-AND",
            "display" : "OP: Andorra"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-AGO",
            "display" : "OP: Angola"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-AIA",
            "display" : "OP: Anguilla"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-ATA",
            "display" : "OP: Antarktida"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-ATG",
            "display" : "OP: Antigua a Barbuda"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-ARG",
            "display" : "OP: Argentina"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-ARM",
            "display" : "OP: Arménie"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-ABW",
            "display" : "OP: Aruba"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-AUS",
            "display" : "OP: Austrálie"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-AUT",
            "display" : "OP: Rakousko"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-AZE",
            "display" : "OP: Ázerbájdžán"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-BHS",
            "display" : "OP: Bahamy"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-BHR",
            "display" : "OP: Bahrajn"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-BGD",
            "display" : "OP: Bangladéš"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-BRB",
            "display" : "OP: Barbados"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-BLR",
            "display" : "OP: Bělorusko"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-BEL",
            "display" : "OP: Belgie"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-BLZ",
            "display" : "OP: Belize"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-BEN",
            "display" : "OP: Benin"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-BMU",
            "display" : "OP: Bermudy"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-BTN",
            "display" : "OP: Bhútán"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-BOL",
            "display" : "OP: Bolívie"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-BES",
            "display" : "OP: Bonaire, Svatý Eustach a Saba"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-BIH",
            "display" : "OP: Bosna a Hercegovina"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-BWA",
            "display" : "OP: Botswana"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-BVT",
            "display" : "OP: Bouvetův ostrov"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-BRA",
            "display" : "OP: Brazílie"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-IOT",
            "display" : "OP: Britské indickooceánské území"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-BRN",
            "display" : "OP: Brunej"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-BGR",
            "display" : "OP: Bulharsko"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-BFA",
            "display" : "OP: Burkina Faso"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-BDI",
            "display" : "OP: Burundi"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-CPV",
            "display" : "OP: Burundi"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-KHM",
            "display" : "OP: Kambodža"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-CMR",
            "display" : "OP: Kamerun"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-CAN",
            "display" : "OP: Kanada"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-CYM",
            "display" : "OP: Kajmanské ostrovy"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-CAF",
            "display" : "OP: Středoafrická republika"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-TCD",
            "display" : "OP: Čad"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-CHL",
            "display" : "OP: Chile"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-CHN",
            "display" : "OP: Čína"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-CXR",
            "display" : "OP: Vánoční ostrov"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-CCK",
            "display" : "OP: Kokosové (Keelingovy) ostrovy"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-COL",
            "display" : "OP: Kolumbie"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-COM",
            "display" : "OP: Komory"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-COD",
            "display" : "OP: Konžská republika"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-COG",
            "display" : "OP: Konžská republika"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-COK",
            "display" : "OP: Cookovy ostrovy"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-CRI",
            "display" : "OP: Kostarika"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-HRV",
            "display" : "OP: Chorvatsko"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-CUB",
            "display" : "OP: Kuba"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-CUW",
            "display" : "OP: Curaçao"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-CYP",
            "display" : "OP: Kypr"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-CZE",
            "display" : "OP: Česko"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-CIV",
            "display" : "OP: Pobřeží slonoviny"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-DNK",
            "display" : "OP: Dánsko"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-DJI",
            "display" : "OP: Džibutsko"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-DMA",
            "display" : "OP: Dominika"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-DOM",
            "display" : "OP: Dominikánská republika"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-ECU",
            "display" : "OP: Ekvádor"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-EGY",
            "display" : "OP: Egypt"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-SLV",
            "display" : "OP: Salvador"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-GNQ",
            "display" : "OP: Rovníková Guinea"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-ERI",
            "display" : "OP: Eritrea"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-EST",
            "display" : "OP: Estonsko"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-SWZ",
            "display" : "OP: Estonsko"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-ETH",
            "display" : "OP: Etiopie"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-FLK",
            "display" : "OP: Falklandy"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-FRO",
            "display" : "OP: Faerské ostrovy"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-FJI",
            "display" : "OP: Fidži"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-FIN",
            "display" : "OP: Finsko"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-FRA",
            "display" : "OP: Francie"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-GUF",
            "display" : "OP: Francouzská Guyana"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-PYF",
            "display" : "OP: Francouzská Polynésie"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-ATF",
            "display" : "OP: Francouzská jižní a antarktická území"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-GAB",
            "display" : "OP: Gabon"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-GMB",
            "display" : "OP: Gambie"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-GEO",
            "display" : "OP: Gruzie"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-DEU",
            "display" : "OP: Německo"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-GHA",
            "display" : "OP: Ghana"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-GIB",
            "display" : "OP: Gibraltar"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-GRC",
            "display" : "OP: Řecko"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-GRL",
            "display" : "OP: Grónsko"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-GRD",
            "display" : "OP: Grenada"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-GLP",
            "display" : "OP: Guadeloupe"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-GUM",
            "display" : "OP: Guam"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-GTM",
            "display" : "OP: Guatemala"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-GGY",
            "display" : "OP: Guernsey"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-GIN",
            "display" : "OP: Guinea"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-GNB",
            "display" : "OP: Guinea-Bissau"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-GUY",
            "display" : "OP: Guyana"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-HTI",
            "display" : "OP: Haiti"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-HMD",
            "display" : "OP: Heardův ostrov a MacDonaldovy ostrovy"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-VAT",
            "display" : "OP: Vatikán"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-HND",
            "display" : "OP: Honduras"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-HKG",
            "display" : "OP: Hongkong"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-HUN",
            "display" : "OP: Maďarsko"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-ISL",
            "display" : "OP: Island"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-IND",
            "display" : "OP: Indie"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-IDN",
            "display" : "OP: Indonésie"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-IRN",
            "display" : "OP: Írán"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-IRQ",
            "display" : "OP: Irák"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-IRL",
            "display" : "OP: Irsko"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-IMN",
            "display" : "OP: Man"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-ISR",
            "display" : "OP: Izrael"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-ITA",
            "display" : "OP: Itálie"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-JAM",
            "display" : "OP: Jamajka"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-JPN",
            "display" : "OP: Japonsko"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-JEY",
            "display" : "OP: Jersey"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-JOR",
            "display" : "OP: Jordánsko"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-KAZ",
            "display" : "OP: Kazachstán"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-KEN",
            "display" : "OP: Keňa"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-KIR",
            "display" : "OP: Kiribati"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-PRK",
            "display" : "OP: Korejská lidově demokratická republika"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-KOR",
            "display" : "OP: Korejská lidově demokratická republika"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-KWT",
            "display" : "OP: Kuvajt"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-KGZ",
            "display" : "OP: Kyrgyzstán"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-LAO",
            "display" : "OP: Laos"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-LVA",
            "display" : "OP: Lotyšsko"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-LBN",
            "display" : "OP: Libanon"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-LSO",
            "display" : "OP: Lesotho"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-LBR",
            "display" : "OP: Libérie"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-LBY",
            "display" : "OP: Libye"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-LIE",
            "display" : "OP: Lichtenštejnsko"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-LTU",
            "display" : "OP: Litva"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-LUX",
            "display" : "OP: Lucembursko"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-MAC",
            "display" : "OP: Macao"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-MDG",
            "display" : "OP: Madagaskar"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-MWI",
            "display" : "OP: Malawi"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-MYS",
            "display" : "OP: Malajsie"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-MDV",
            "display" : "OP: Maledivy"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-MLI",
            "display" : "OP: Mali"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-MLT",
            "display" : "OP: Malta"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-MHL",
            "display" : "OP: Marshallovy ostrovy"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-MTQ",
            "display" : "OP: Martinik"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-MRT",
            "display" : "OP: Mauritánie"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-MUS",
            "display" : "OP: Mauricius"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-MYT",
            "display" : "OP: Mayotte"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-MEX",
            "display" : "OP: Mexiko"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-FSM",
            "display" : "OP: Mikronésie"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-MDA",
            "display" : "OP: Mikronésie"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-MCO",
            "display" : "OP: Monako"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-MNG",
            "display" : "OP: Mongolsko"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-MNE",
            "display" : "OP: Černá Hora"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-MSR",
            "display" : "OP: Montserrat"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-MAR",
            "display" : "OP: Maroko"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-MOZ",
            "display" : "OP: Mosambik"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-MMR",
            "display" : "OP: Myanmar"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-NAM",
            "display" : "OP: Namibie"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-NRU",
            "display" : "OP: Nauru"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-NPL",
            "display" : "OP: Nepál"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-NLD",
            "display" : "OP: Nizozemsko"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-NCL",
            "display" : "OP: Nová Kaledonie"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-NZL",
            "display" : "OP: Nový Zéland"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-NIC",
            "display" : "OP: Nikaragua"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-NER",
            "display" : "OP: Niger"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-NGA",
            "display" : "OP: Nigérie"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-NIU",
            "display" : "OP: Niue"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-NFK",
            "display" : "OP: Norfolk"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-MKD",
            "display" : "OP: Norfolk"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-MNP",
            "display" : "OP: Severní Mariany"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-NOR",
            "display" : "OP: Norsko"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-OMN",
            "display" : "OP: Omán"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-PAK",
            "display" : "OP: Pákistán"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-PLW",
            "display" : "OP: Palau"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-PSE",
            "display" : "OP: Palestina"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-PAN",
            "display" : "OP: Panama"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-PNG",
            "display" : "OP: Papua Nová Guinea"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-PRY",
            "display" : "OP: Paraguay"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-PER",
            "display" : "OP: Peru"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-PHL",
            "display" : "OP: Filipíny"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-PCN",
            "display" : "OP: Pitcairn"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-POL",
            "display" : "OP: Polsko"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-PRT",
            "display" : "OP: Portugalsko"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-PRI",
            "display" : "OP: Portoriko"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-QAT",
            "display" : "OP: Katar"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-ROU",
            "display" : "OP: Rumunsko"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-RUS",
            "display" : "OP: Rusko"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-RWA",
            "display" : "OP: Rwanda"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-REU",
            "display" : "OP: Réunion"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-BLM",
            "display" : "OP: Svatý Bartoloměj"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-SHN",
            "display" : "OP: Svatá Helena"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-KNA",
            "display" : "OP: Svatý Kryštof a Nevis"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-LCA",
            "display" : "OP: Svatá Lucie"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-MAF",
            "display" : "OP: Svatý Martin (FR)"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-SPM",
            "display" : "OP: Saint Pierre a Miquelon"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-VCT",
            "display" : "OP: Svatý Vincenc a Grenadiny"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-WSM",
            "display" : "OP: Samoa"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-SMR",
            "display" : "OP: San Marino"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-STP",
            "display" : "OP: Svatý Tomáš a Princův ostrov"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-SAU",
            "display" : "OP: Saúdská Arábie"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-SEN",
            "display" : "OP: Senegal"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-SRB",
            "display" : "OP: Srbsko"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-SYC",
            "display" : "OP: Seychely"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-SLE",
            "display" : "OP: Sierra Leone"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-SGP",
            "display" : "OP: Singapur"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-SXM",
            "display" : "OP: Svatý Martin (NL)"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-SVK",
            "display" : "OP: Slovensko"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-SVN",
            "display" : "OP: Slovinsko"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-SLB",
            "display" : "OP: Šalomounovy ostrovy"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-SOM",
            "display" : "OP: Somálsko"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-ZAF",
            "display" : "OP: Jižní Afrika"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-SGS",
            "display" : "OP: Jižní Georgie a Jižní Sandwichovy ostrovy"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-SSD",
            "display" : "OP: Jižní Súdán"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-ESP",
            "display" : "OP: Španělsko"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-LKA",
            "display" : "OP: Šrí Lanka"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-SDN",
            "display" : "OP: Súdán"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-SUR",
            "display" : "OP: Surinam"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-SJM",
            "display" : "OP: Špicberky a Jan Mayen"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-SWE",
            "display" : "OP: Švédsko"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-CHE",
            "display" : "OP: Švýcarsko"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-SYR",
            "display" : "OP: Sýrie"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-TWN",
            "display" : "OP: Sýrie"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-TJK",
            "display" : "OP: Tádžikistán"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-TZA",
            "display" : "OP: Tádžikistán"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-THA",
            "display" : "OP: Thajsko"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-TLS",
            "display" : "OP: Východní Timor"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-TGO",
            "display" : "OP: Togo"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-TKL",
            "display" : "OP: Tokelau"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-TON",
            "display" : "OP: Tonga"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-TTO",
            "display" : "OP: Trinidad a Tobago"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-TUN",
            "display" : "OP: Tunisko"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-TKM",
            "display" : "OP: Turkmenistán"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-TCA",
            "display" : "OP: Turks a Caicos"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-TUV",
            "display" : "OP: Tuvalu"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-TUR",
            "display" : "OP: Turecko"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-UGA",
            "display" : "OP: Uganda"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-UKR",
            "display" : "OP: Ukrajina"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-ARE",
            "display" : "OP: Spojené arabské emiráty"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-GBR",
            "display" : "OP: Velká Británie"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-UMI",
            "display" : "OP: Menší odlehlé ostrovy USA"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-USA",
            "display" : "OP: Spojené státy"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-URY",
            "display" : "OP: Uruguay"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-UZB",
            "display" : "OP: Uzbekistán"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-VUT",
            "display" : "OP: Vanuatu"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-VEN",
            "display" : "OP: Venezuela"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-VNM",
            "display" : "OP: Vietnam"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-VGB",
            "display" : "OP: Vietnam"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-VIR",
            "display" : "OP: Vietnam"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-WLF",
            "display" : "OP: Wallis a Futuna"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-ESH",
            "display" : "OP: Západní Sahara"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-YEM",
            "display" : "OP: Jemen"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-ZMB",
            "display" : "OP: Zambie"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-ZWE",
            "display" : "OP: Zimbabwe"
          },
          {
            "code" : "https://hl7.cz/NamingSystem/IdCardNumNS-ALA",
            "display" : "OP: Alandy"
          }
        ]
      }
    ]
  }
}

```
