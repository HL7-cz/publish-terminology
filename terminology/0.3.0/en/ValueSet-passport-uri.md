# Passport URIs - HL7 Czech Terminology Implementation Guide v0.3.0

## ValueSet: Passport URIs 

 
A country specific URI for passport numbers 

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
  "id" : "passport-uri",
  "language" : "cs",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-fmm",
    "valueInteger" : 2
  },
  {
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
    "valueCode" : "trial-use"
  }],
  "url" : "https://hl7.cz/terminology/ValueSet/passport-uri",
  "version" : "1.0.0",
  "name" : "PassportUri",
  "title" : "Passport URIs",
  "status" : "active",
  "experimental" : false,
  "date" : "2026-01-01",
  "publisher" : "HL7 Czech Republic",
  "contact" : [{
    "name" : "HL7 Czech Republic",
    "telecom" : [{
      "system" : "url",
      "value" : "https://www.hl7.cz/"
    }]
  }],
  "description" : "A country specific URI for passport numbers",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CZ",
      "display" : "Czechia"
    }]
  }],
  "compose" : {
    "include" : [{
      "system" : "urn:ietf:rfc:3986",
      "concept" : [{
        "code" : "http://hl7.org/fhir/sid/passport-AFG",
        "display" : "Afghánistán"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-ALB",
        "display" : "Albánie"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-DZA",
        "display" : "Alžírsko"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-ASM",
        "display" : "Americká Samoa"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-AND",
        "display" : "Andorra"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-AGO",
        "display" : "Angola"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-AIA",
        "display" : "Anguilla"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-ATA",
        "display" : "Antarktida"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-ATG",
        "display" : "Antigua a Barbuda"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-ARG",
        "display" : "Argentina"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-ARM",
        "display" : "Arménie"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-ABW",
        "display" : "Aruba"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-AUS",
        "display" : "Austrálie"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-AUT",
        "display" : "Rakousko"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-AZE",
        "display" : "Ázerbájdžán"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-BHS",
        "display" : "Bahamy"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-BHR",
        "display" : "Bahrajn"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-BGD",
        "display" : "Bangladéš"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-BRB",
        "display" : "Barbados"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-BLR",
        "display" : "Bělorusko"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-BEL",
        "display" : "Belgie"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-BLZ",
        "display" : "Belize"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-BEN",
        "display" : "Benin"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-BMU",
        "display" : "Bermudy"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-BTN",
        "display" : "Bhútán"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-BOL",
        "display" : "Bolívie"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-BES",
        "display" : "Bonaire, Svatý Eustach a Saba"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-BIH",
        "display" : "Bosna a Hercegovina"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-BWA",
        "display" : "Botswana"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-BVT",
        "display" : "Bouvetův ostrov"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-BRA",
        "display" : "Brazílie"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-IOT",
        "display" : "Britské indickooceánské území"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-BRN",
        "display" : "Brunej"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-BGR",
        "display" : "Bulharsko"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-BFA",
        "display" : "Burkina Faso"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-BDI",
        "display" : "Burundi"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-CPV",
        "display" : "Burundi"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-KHM",
        "display" : "Kambodža"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-CMR",
        "display" : "Kamerun"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-CAN",
        "display" : "Kanada"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-CYM",
        "display" : "Kajmanské ostrovy"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-CAF",
        "display" : "Středoafrická republika"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-TCD",
        "display" : "Čad"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-CHL",
        "display" : "Chile"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-CHN",
        "display" : "Čína"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-CXR",
        "display" : "Vánoční ostrov"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-CCK",
        "display" : "Kokosové (Keelingovy) ostrovy"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-COL",
        "display" : "Kolumbie"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-COM",
        "display" : "Komory"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-COD",
        "display" : "Konžská republika"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-COG",
        "display" : "Konžská republika"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-COK",
        "display" : "Cookovy ostrovy"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-CRI",
        "display" : "Kostarika"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-HRV",
        "display" : "Chorvatsko"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-CUB",
        "display" : "Kuba"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-CUW",
        "display" : "Curaçao"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-CYP",
        "display" : "Kypr"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-CZE",
        "display" : "Česko"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-CIV",
        "display" : "Pobřeží slonoviny"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-DNK",
        "display" : "Dánsko"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-DJI",
        "display" : "Džibutsko"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-DMA",
        "display" : "Dominika"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-DOM",
        "display" : "Dominikánská republika"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-ECU",
        "display" : "Ekvádor"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-EGY",
        "display" : "Egypt"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-SLV",
        "display" : "Salvador"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-GNQ",
        "display" : "Rovníková Guinea"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-ERI",
        "display" : "Eritrea"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-EST",
        "display" : "Estonsko"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-SWZ",
        "display" : "Estonsko"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-ETH",
        "display" : "Etiopie"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-FLK",
        "display" : "Falklandy"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-FRO",
        "display" : "Faerské ostrovy"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-FJI",
        "display" : "Fidži"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-FIN",
        "display" : "Finsko"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-FRA",
        "display" : "Francie"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-GUF",
        "display" : "Francouzská Guyana"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-PYF",
        "display" : "Francouzská Polynésie"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-ATF",
        "display" : "Francouzská jižní a antarktická území"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-GAB",
        "display" : "Gabon"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-GMB",
        "display" : "Gambie"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-GEO",
        "display" : "Gruzie"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-DEU",
        "display" : "Německo"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-GHA",
        "display" : "Ghana"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-GIB",
        "display" : "Gibraltar"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-GRC",
        "display" : "Řecko"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-GRL",
        "display" : "Grónsko"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-GRD",
        "display" : "Grenada"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-GLP",
        "display" : "Guadeloupe"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-GUM",
        "display" : "Guam"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-GTM",
        "display" : "Guatemala"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-GGY",
        "display" : "Guernsey"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-GIN",
        "display" : "Guinea"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-GNB",
        "display" : "Guinea-Bissau"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-GUY",
        "display" : "Guyana"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-HTI",
        "display" : "Haiti"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-HMD",
        "display" : "Heardův ostrov a MacDonaldovy ostrovy"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-VAT",
        "display" : "Vatikán"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-HND",
        "display" : "Honduras"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-HKG",
        "display" : "Hongkong"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-HUN",
        "display" : "Maďarsko"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-ISL",
        "display" : "Island"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-IND",
        "display" : "Indie"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-IDN",
        "display" : "Indonésie"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-IRN",
        "display" : "Írán"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-IRQ",
        "display" : "Irák"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-IRL",
        "display" : "Irsko"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-IMN",
        "display" : "Man"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-ISR",
        "display" : "Izrael"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-ITA",
        "display" : "Itálie"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-JAM",
        "display" : "Jamajka"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-JPN",
        "display" : "Japonsko"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-JEY",
        "display" : "Jersey"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-JOR",
        "display" : "Jordánsko"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-KAZ",
        "display" : "Kazachstán"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-KEN",
        "display" : "Keňa"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-KIR",
        "display" : "Kiribati"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-PRK",
        "display" : "Korejská lidově demokratická republika"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-KOR",
        "display" : "Korejská lidově demokratická republika"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-KWT",
        "display" : "Kuvajt"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-KGZ",
        "display" : "Kyrgyzstán"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-LAO",
        "display" : "Laos"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-LVA",
        "display" : "Lotyšsko"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-LBN",
        "display" : "Libanon"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-LSO",
        "display" : "Lesotho"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-LBR",
        "display" : "Libérie"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-LBY",
        "display" : "Libye"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-LIE",
        "display" : "Lichtenštejnsko"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-LTU",
        "display" : "Litva"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-LUX",
        "display" : "Lucembursko"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-MAC",
        "display" : "Macao"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-MDG",
        "display" : "Madagaskar"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-MWI",
        "display" : "Malawi"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-MYS",
        "display" : "Malajsie"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-MDV",
        "display" : "Maledivy"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-MLI",
        "display" : "Mali"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-MLT",
        "display" : "Malta"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-MHL",
        "display" : "Marshallovy ostrovy"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-MTQ",
        "display" : "Martinik"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-MRT",
        "display" : "Mauritánie"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-MUS",
        "display" : "Mauricius"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-MYT",
        "display" : "Mayotte"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-MEX",
        "display" : "Mexiko"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-FSM",
        "display" : "Mikronésie"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-MDA",
        "display" : "Mikronésie"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-MCO",
        "display" : "Monako"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-MNG",
        "display" : "Mongolsko"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-MNE",
        "display" : "Černá Hora"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-MSR",
        "display" : "Montserrat"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-MAR",
        "display" : "Maroko"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-MOZ",
        "display" : "Mosambik"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-MMR",
        "display" : "Myanmar"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-NAM",
        "display" : "Namibie"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-NRU",
        "display" : "Nauru"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-NPL",
        "display" : "Nepál"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-NLD",
        "display" : "Nizozemsko"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-NCL",
        "display" : "Nová Kaledonie"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-NZL",
        "display" : "Nový Zéland"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-NIC",
        "display" : "Nikaragua"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-NER",
        "display" : "Niger"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-NGA",
        "display" : "Nigérie"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-NIU",
        "display" : "Niue"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-NFK",
        "display" : "Norfolk"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-MKD",
        "display" : "Norfolk"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-MNP",
        "display" : "Severní Mariany"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-NOR",
        "display" : "Norsko"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-OMN",
        "display" : "Omán"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-PAK",
        "display" : "Pákistán"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-PLW",
        "display" : "Palau"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-PSE",
        "display" : "Palestina"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-PAN",
        "display" : "Panama"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-PNG",
        "display" : "Papua Nová Guinea"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-PRY",
        "display" : "Paraguay"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-PER",
        "display" : "Peru"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-PHL",
        "display" : "Filipíny"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-PCN",
        "display" : "Pitcairn"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-POL",
        "display" : "Polsko"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-PRT",
        "display" : "Portugalsko"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-PRI",
        "display" : "Portoriko"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-QAT",
        "display" : "Katar"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-ROU",
        "display" : "Rumunsko"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-RUS",
        "display" : "Rusko"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-RWA",
        "display" : "Rwanda"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-REU",
        "display" : "Réunion"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-BLM",
        "display" : "Svatý Bartoloměj"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-SHN",
        "display" : "Svatá Helena"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-KNA",
        "display" : "Svatý Kryštof a Nevis"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-LCA",
        "display" : "Svatá Lucie"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-MAF",
        "display" : "Svatý Martin (FR)"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-SPM",
        "display" : "Saint Pierre a Miquelon"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-VCT",
        "display" : "Svatý Vincenc a Grenadiny"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-WSM",
        "display" : "Samoa"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-SMR",
        "display" : "San Marino"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-STP",
        "display" : "Svatý Tomáš a Princův ostrov"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-SAU",
        "display" : "Saúdská Arábie"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-SEN",
        "display" : "Senegal"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-SRB",
        "display" : "Srbsko"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-SYC",
        "display" : "Seychely"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-SLE",
        "display" : "Sierra Leone"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-SGP",
        "display" : "Singapur"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-SXM",
        "display" : "Svatý Martin (NL)"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-SVK",
        "display" : "Slovensko"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-SVN",
        "display" : "Slovinsko"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-SLB",
        "display" : "Šalomounovy ostrovy"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-SOM",
        "display" : "Somálsko"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-ZAF",
        "display" : "Jižní Afrika"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-SGS",
        "display" : "Jižní Georgie a Jižní Sandwichovy ostrovy"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-SSD",
        "display" : "Jižní Súdán"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-ESP",
        "display" : "Španělsko"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-LKA",
        "display" : "Šrí Lanka"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-SDN",
        "display" : "Súdán"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-SUR",
        "display" : "Surinam"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-SJM",
        "display" : "Špicberky a Jan Mayen"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-SWE",
        "display" : "Švédsko"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-CHE",
        "display" : "Švýcarsko"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-SYR",
        "display" : "Sýrie"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-TWN",
        "display" : "Sýrie"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-TJK",
        "display" : "Tádžikistán"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-TZA",
        "display" : "Tádžikistán"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-THA",
        "display" : "Thajsko"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-TLS",
        "display" : "Východní Timor"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-TGO",
        "display" : "Togo"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-TKL",
        "display" : "Tokelau"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-TON",
        "display" : "Tonga"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-TTO",
        "display" : "Trinidad a Tobago"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-TUN",
        "display" : "Tunisko"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-TKM",
        "display" : "Turkmenistán"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-TCA",
        "display" : "Turks a Caicos"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-TUV",
        "display" : "Tuvalu"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-TUR",
        "display" : "Turecko"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-UGA",
        "display" : "Uganda"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-UKR",
        "display" : "Ukrajina"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-ARE",
        "display" : "Spojené arabské emiráty"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-GBR",
        "display" : "Velká Británie"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-UMI",
        "display" : "Menší odlehlé ostrovy USA"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-USA",
        "display" : "Spojené státy"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-URY",
        "display" : "Uruguay"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-UZB",
        "display" : "Uzbekistán"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-VUT",
        "display" : "Vanuatu"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-VEN",
        "display" : "Venezuela"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-VNM",
        "display" : "Vietnam"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-VGB",
        "display" : "Vietnam"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-VIR",
        "display" : "Vietnam"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-WLF",
        "display" : "Wallis a Futuna"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-ESH",
        "display" : "Západní Sahara"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-YEM",
        "display" : "Jemen"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-ZMB",
        "display" : "Zambie"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-ZWE",
        "display" : "Zimbabwe"
      },
      {
        "code" : "http://hl7.org/fhir/sid/passport-ALA",
        "display" : "Alandy"
      }]
    }]
  }
}

```
