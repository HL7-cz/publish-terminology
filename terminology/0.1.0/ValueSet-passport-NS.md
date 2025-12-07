# Standard namespaces for passports - HL7 Czech Terminology Implementation Guide v0.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Standard namespaces for passports**

## ValueSet: Standard namespaces for passports 

| | | |
| :--- | :--- | :--- |
| *Official URL*:https://hl7.cz/terminology/ValueSet/passport-NS | *Version*:0.1.0 | |
| *Standards status:*[Draft](http://hl7.org/fhir/R4/versions.html#std-process) | [Maturity Level](http://hl7.org/fhir/versions.html#maturity): 1 | *Computable Name*:PassportNSVS |

 
Číselník jmenných prostorů pro pasy. (Passport namespaces.) 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

Expansion from tx.fhir.org based on codesystem unknown version n/a

This value set contains 249 concepts

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
  "id" : "passport-NS",
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
  "url" : "https://hl7.cz/terminology/ValueSet/passport-NS",
  "version" : "0.1.0",
  "name" : "PassportNSVS",
  "title" : "Standard namespaces for passports",
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
  "description" : "Číselník jmenných prostorů pro pasy. (Passport namespaces.)",
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
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-AFG",
            "display" : "Pas: Afghánistán"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-ALB",
            "display" : "Pas: Albánie"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-DZA",
            "display" : "Pas: Alžírsko"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-ASM",
            "display" : "Pas: Americká Samoa"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-AND",
            "display" : "Pas: Andorra"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-AGO",
            "display" : "Pas: Angola"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-AIA",
            "display" : "Pas: Anguilla"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-ATA",
            "display" : "Pas: Antarktida"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-ATG",
            "display" : "Pas: Antigua a Barbuda"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-ARG",
            "display" : "Pas: Argentina"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-ARM",
            "display" : "Pas: Arménie"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-ABW",
            "display" : "Pas: Aruba"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-AUS",
            "display" : "Pas: Austrálie"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-AUT",
            "display" : "Pas: Rakousko"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-AZE",
            "display" : "Pas: Ázerbájdžán"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-BHS",
            "display" : "Pas: Bahamy"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-BHR",
            "display" : "Pas: Bahrajn"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-BGD",
            "display" : "Pas: Bangladéš"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-BRB",
            "display" : "Pas: Barbados"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-BLR",
            "display" : "Pas: Bělorusko"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-BEL",
            "display" : "Pas: Belgie"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-BLZ",
            "display" : "Pas: Belize"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-BEN",
            "display" : "Pas: Benin"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-BMU",
            "display" : "Pas: Bermudy"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-BTN",
            "display" : "Pas: Bhútán"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-BOL",
            "display" : "Pas: Bolívie"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-BES",
            "display" : "Pas: Bonaire, Svatý Eustach a Saba"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-BIH",
            "display" : "Pas: Bosna a Hercegovina"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-BWA",
            "display" : "Pas: Botswana"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-BVT",
            "display" : "Pas: Bouvetův ostrov"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-BRA",
            "display" : "Pas: Brazílie"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-IOT",
            "display" : "Pas: Britské indickooceánské území"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-BRN",
            "display" : "Pas: Brunej"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-BGR",
            "display" : "Pas: Bulharsko"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-BFA",
            "display" : "Pas: Burkina Faso"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-BDI",
            "display" : "Pas: Burundi"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-CPV",
            "display" : "Pas: Burundi"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-KHM",
            "display" : "Pas: Kambodža"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-CMR",
            "display" : "Pas: Kamerun"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-CAN",
            "display" : "Pas: Kanada"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-CYM",
            "display" : "Pas: Kajmanské ostrovy"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-CAF",
            "display" : "Pas: Středoafrická republika"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-TCD",
            "display" : "Pas: Čad"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-CHL",
            "display" : "Pas: Chile"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-CHN",
            "display" : "Pas: Čína"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-CXR",
            "display" : "Pas: Vánoční ostrov"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-CCK",
            "display" : "Pas: Kokosové (Keelingovy) ostrovy"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-COL",
            "display" : "Pas: Kolumbie"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-COM",
            "display" : "Pas: Komory"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-COD",
            "display" : "Pas: Konžská republika"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-COG",
            "display" : "Pas: Konžská republika"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-COK",
            "display" : "Pas: Cookovy ostrovy"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-CRI",
            "display" : "Pas: Kostarika"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-HRV",
            "display" : "Pas: Chorvatsko"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-CUB",
            "display" : "Pas: Kuba"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-CUW",
            "display" : "Pas: Curaçao"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-CYP",
            "display" : "Pas: Kypr"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-CZE",
            "display" : "Pas: Česko"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-CIV",
            "display" : "Pas: Pobřeží slonoviny"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-DNK",
            "display" : "Pas: Dánsko"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-DJI",
            "display" : "Pas: Džibutsko"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-DMA",
            "display" : "Pas: Dominika"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-DOM",
            "display" : "Pas: Dominikánská republika"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-ECU",
            "display" : "Pas: Ekvádor"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-EGY",
            "display" : "Pas: Egypt"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-SLV",
            "display" : "Pas: Salvador"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-GNQ",
            "display" : "Pas: Rovníková Guinea"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-ERI",
            "display" : "Pas: Eritrea"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-EST",
            "display" : "Pas: Estonsko"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-SWZ",
            "display" : "Pas: Estonsko"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-ETH",
            "display" : "Pas: Etiopie"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-FLK",
            "display" : "Pas: Falklandy"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-FRO",
            "display" : "Pas: Faerské ostrovy"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-FJI",
            "display" : "Pas: Fidži"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-FIN",
            "display" : "Pas: Finsko"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-FRA",
            "display" : "Pas: Francie"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-GUF",
            "display" : "Pas: Francouzská Guyana"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-PYF",
            "display" : "Pas: Francouzská Polynésie"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-ATF",
            "display" : "Pas: Francouzská jižní a antarktická území"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-GAB",
            "display" : "Pas: Gabon"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-GMB",
            "display" : "Pas: Gambie"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-GEO",
            "display" : "Pas: Gruzie"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-DEU",
            "display" : "Pas: Německo"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-GHA",
            "display" : "Pas: Ghana"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-GIB",
            "display" : "Pas: Gibraltar"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-GRC",
            "display" : "Pas: Řecko"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-GRL",
            "display" : "Pas: Grónsko"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-GRD",
            "display" : "Pas: Grenada"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-GLP",
            "display" : "Pas: Guadeloupe"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-GUM",
            "display" : "Pas: Guam"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-GTM",
            "display" : "Pas: Guatemala"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-GGY",
            "display" : "Pas: Guernsey"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-GIN",
            "display" : "Pas: Guinea"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-GNB",
            "display" : "Pas: Guinea-Bissau"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-GUY",
            "display" : "Pas: Guyana"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-HTI",
            "display" : "Pas: Haiti"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-HMD",
            "display" : "Pas: Heardův ostrov a MacDonaldovy ostrovy"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-VAT",
            "display" : "Pas: Vatikán"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-HND",
            "display" : "Pas: Honduras"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-HKG",
            "display" : "Pas: Hongkong"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-HUN",
            "display" : "Pas: Maďarsko"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-ISL",
            "display" : "Pas: Island"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-IND",
            "display" : "Pas: Indie"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-IDN",
            "display" : "Pas: Indonésie"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-IRN",
            "display" : "Pas: Írán"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-IRQ",
            "display" : "Pas: Irák"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-IRL",
            "display" : "Pas: Irsko"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-IMN",
            "display" : "Pas: Man"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-ISR",
            "display" : "Pas: Izrael"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-ITA",
            "display" : "Pas: Itálie"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-JAM",
            "display" : "Pas: Jamajka"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-JPN",
            "display" : "Pas: Japonsko"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-JEY",
            "display" : "Pas: Jersey"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-JOR",
            "display" : "Pas: Jordánsko"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-KAZ",
            "display" : "Pas: Kazachstán"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-KEN",
            "display" : "Pas: Keňa"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-KIR",
            "display" : "Pas: Kiribati"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-PRK",
            "display" : "Pas: Korejská lidově demokratická republika"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-KOR",
            "display" : "Pas: Korejská lidově demokratická republika"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-KWT",
            "display" : "Pas: Kuvajt"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-KGZ",
            "display" : "Pas: Kyrgyzstán"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-LAO",
            "display" : "Pas: Laos"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-LVA",
            "display" : "Pas: Lotyšsko"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-LBN",
            "display" : "Pas: Libanon"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-LSO",
            "display" : "Pas: Lesotho"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-LBR",
            "display" : "Pas: Libérie"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-LBY",
            "display" : "Pas: Libye"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-LIE",
            "display" : "Pas: Lichtenštejnsko"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-LTU",
            "display" : "Pas: Litva"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-LUX",
            "display" : "Pas: Lucembursko"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-MAC",
            "display" : "Pas: Macao"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-MDG",
            "display" : "Pas: Madagaskar"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-MWI",
            "display" : "Pas: Malawi"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-MYS",
            "display" : "Pas: Malajsie"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-MDV",
            "display" : "Pas: Maledivy"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-MLI",
            "display" : "Pas: Mali"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-MLT",
            "display" : "Pas: Malta"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-MHL",
            "display" : "Pas: Marshallovy ostrovy"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-MTQ",
            "display" : "Pas: Martinik"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-MRT",
            "display" : "Pas: Mauritánie"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-MUS",
            "display" : "Pas: Mauricius"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-MYT",
            "display" : "Pas: Mayotte"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-MEX",
            "display" : "Pas: Mexiko"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-FSM",
            "display" : "Pas: Mikronésie"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-MDA",
            "display" : "Pas: Mikronésie"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-MCO",
            "display" : "Pas: Monako"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-MNG",
            "display" : "Pas: Mongolsko"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-MNE",
            "display" : "Pas: Černá Hora"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-MSR",
            "display" : "Pas: Montserrat"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-MAR",
            "display" : "Pas: Maroko"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-MOZ",
            "display" : "Pas: Mosambik"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-MMR",
            "display" : "Pas: Myanmar"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-NAM",
            "display" : "Pas: Namibie"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-NRU",
            "display" : "Pas: Nauru"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-NPL",
            "display" : "Pas: Nepál"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-NLD",
            "display" : "Pas: Nizozemsko"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-NCL",
            "display" : "Pas: Nová Kaledonie"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-NZL",
            "display" : "Pas: Nový Zéland"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-NIC",
            "display" : "Pas: Nikaragua"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-NER",
            "display" : "Pas: Niger"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-NGA",
            "display" : "Pas: Nigérie"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-NIU",
            "display" : "Pas: Niue"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-NFK",
            "display" : "Pas: Norfolk"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-MKD",
            "display" : "Pas: Norfolk"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-MNP",
            "display" : "Pas: Severní Mariany"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-NOR",
            "display" : "Pas: Norsko"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-OMN",
            "display" : "Pas: Omán"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-PAK",
            "display" : "Pas: Pákistán"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-PLW",
            "display" : "Pas: Palau"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-PSE",
            "display" : "Pas: Palestina"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-PAN",
            "display" : "Pas: Panama"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-PNG",
            "display" : "Pas: Papua Nová Guinea"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-PRY",
            "display" : "Pas: Paraguay"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-PER",
            "display" : "Pas: Peru"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-PHL",
            "display" : "Pas: Filipíny"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-PCN",
            "display" : "Pas: Pitcairn"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-POL",
            "display" : "Pas: Polsko"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-PRT",
            "display" : "Pas: Portugalsko"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-PRI",
            "display" : "Pas: Portoriko"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-QAT",
            "display" : "Pas: Katar"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-ROU",
            "display" : "Pas: Rumunsko"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-RUS",
            "display" : "Pas: Rusko"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-RWA",
            "display" : "Pas: Rwanda"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-REU",
            "display" : "Pas: Réunion"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-BLM",
            "display" : "Pas: Svatý Bartoloměj"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-SHN",
            "display" : "Pas: Svatá Helena"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-KNA",
            "display" : "Pas: Svatý Kryštof a Nevis"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-LCA",
            "display" : "Pas: Svatá Lucie"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-MAF",
            "display" : "Pas: Svatý Martin (FR)"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-SPM",
            "display" : "Pas: Saint Pierre a Miquelon"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-VCT",
            "display" : "Pas: Svatý Vincenc a Grenadiny"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-WSM",
            "display" : "Pas: Samoa"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-SMR",
            "display" : "Pas: San Marino"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-STP",
            "display" : "Pas: Svatý Tomáš a Princův ostrov"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-SAU",
            "display" : "Pas: Saúdská Arábie"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-SEN",
            "display" : "Pas: Senegal"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-SRB",
            "display" : "Pas: Srbsko"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-SYC",
            "display" : "Pas: Seychely"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-SLE",
            "display" : "Pas: Sierra Leone"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-SGP",
            "display" : "Pas: Singapur"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-SXM",
            "display" : "Pas: Svatý Martin (NL)"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-SVK",
            "display" : "Pas: Slovensko"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-SVN",
            "display" : "Pas: Slovinsko"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-SLB",
            "display" : "Pas: Šalomounovy ostrovy"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-SOM",
            "display" : "Pas: Somálsko"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-ZAF",
            "display" : "Pas: Jižní Afrika"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-SGS",
            "display" : "Pas: Jižní Georgie a Jižní Sandwichovy ostrovy"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-SSD",
            "display" : "Pas: Jižní Súdán"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-ESP",
            "display" : "Pas: Španělsko"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-LKA",
            "display" : "Pas: Šrí Lanka"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-SDN",
            "display" : "Pas: Súdán"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-SUR",
            "display" : "Pas: Surinam"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-SJM",
            "display" : "Pas: Špicberky a Jan Mayen"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-SWE",
            "display" : "Pas: Švédsko"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-CHE",
            "display" : "Pas: Švýcarsko"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-SYR",
            "display" : "Pas: Sýrie"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-TWN",
            "display" : "Pas: Sýrie"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-TJK",
            "display" : "Pas: Tádžikistán"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-TZA",
            "display" : "Pas: Tádžikistán"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-THA",
            "display" : "Pas: Thajsko"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-TLS",
            "display" : "Pas: Východní Timor"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-TGO",
            "display" : "Pas: Togo"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-TKL",
            "display" : "Pas: Tokelau"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-TON",
            "display" : "Pas: Tonga"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-TTO",
            "display" : "Pas: Trinidad a Tobago"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-TUN",
            "display" : "Pas: Tunisko"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-TKM",
            "display" : "Pas: Turkmenistán"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-TCA",
            "display" : "Pas: Turks a Caicos"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-TUV",
            "display" : "Pas: Tuvalu"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-TUR",
            "display" : "Pas: Turecko"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-UGA",
            "display" : "Pas: Uganda"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-UKR",
            "display" : "Pas: Ukrajina"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-ARE",
            "display" : "Pas: Spojené arabské emiráty"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-GBR",
            "display" : "Pas: Velká Británie"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-UMI",
            "display" : "Pas: Menší odlehlé ostrovy USA"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-USA",
            "display" : "Pas: Spojené státy"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-URY",
            "display" : "Pas: Uruguay"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-UZB",
            "display" : "Pas: Uzbekistán"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-VUT",
            "display" : "Pas: Vanuatu"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-VEN",
            "display" : "Pas: Venezuela"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-VNM",
            "display" : "Pas: Vietnam"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-VGB",
            "display" : "Pas: Vietnam"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-VIR",
            "display" : "Pas: Vietnam"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-WLF",
            "display" : "Pas: Wallis a Futuna"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-ESH",
            "display" : "Pas: Západní Sahara"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-YEM",
            "display" : "Pas: Jemen"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-ZMB",
            "display" : "Pas: Zambie"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-ZWE",
            "display" : "Pas: Zimbabwe"
          },
          {
            "code" : "http://terminology.hl7.org/NamingSystem/passportNumNS-ALA",
            "display" : "Pas: Alandy"
          }
        ]
      }
    ]
  }
}

```
