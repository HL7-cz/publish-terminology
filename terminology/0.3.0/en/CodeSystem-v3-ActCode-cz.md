# ActCode (CZ supplement) - HL7 Czech Terminology Implementation Guide v0.3.0

## CodeSystem: ActCode (CZ supplement) 

 
This code system supplements v3 ActCode. 

This Code system is referenced in the definition of the following value sets:

* [CZ_CoverageType](ValueSet-cz-coverage-type.md)

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "v3-ActCode-cz",
  "language" : "cs",
  "url" : "https://hl7.cz/terminology/CodeSystem/v3-ActCode-cz",
  "version" : "11.0.0",
  "name" : "ActCodeCz",
  "title" : "ActCode (CZ supplement)",
  "status" : "active",
  "experimental" : false,
  "date" : "2026-03-30T12:44:34.79865Z",
  "publisher" : "HL7 Czech Republic",
  "contact" : [{
    "name" : "HL7 Czech Republic",
    "telecom" : [{
      "system" : "url",
      "value" : "https://www.hl7.cz/"
    }]
  }],
  "description" : "This code system supplements v3 ActCode.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CZ",
      "display" : "Czechia"
    }]
  }],
  "content" : "supplement",
  "supplements" : "http://terminology.hl7.org/CodeSystem/v3-ActCode|11.0.0",
  "concept" : [{
    "code" : "HIP",
    "display" : "zdravotní pojištění"
  },
  {
    "code" : "_ActEncounterCode",
    "display" : "ActEncounterCode",
    "definition" : "Doména poskytuje kódy, které klasifikují ActEncounterClass (ENC)."
  },
  {
    "code" : "ACUTE",
    "display" : "akutní hospitalizace",
    "definition" : "Akutní hospitalizace."
  },
  {
    "code" : "AMB",
    "display" : "ambulantní",
    "definition" : "Souhrnný termín pro zdravotní péči poskytovanou ve zdravotnickém zařízení (např. v ordinaci lékaře, klinice nebo nemocnici) na nerezidentní bázi. Termín ambulantní obvykle znamená, že pacient přišel na dané místo a není mu přiděleno lůžko. Někdy se označuje jako ambulantní vyšetření."
  },
  {
    "code" : "EMER",
    "display" : "emergentní",
    "definition" : "Kontakt s pacientem, který se odehrává ve specializovaném zdravotnickém zařízení, kde je pacient okamžitě vyšetřen a ošetřen, a to až do okamžiku, kdy může být propuštěn nebo kdy je odpovědnost za jeho péči převedena na jiné zařízení (například může být pacient přijat k hospitalizaci nebo převezen do jiného zařízení)."
  },
  {
    "code" : "FLD",
    "display" : "terénní",
    "definition" : "Kontakt s pacientem, který se odehrává mimo specializované místo poskytování služeb a mimo bydliště pacienta. Příkladem takových míst může být místo nehody nebo supermarket."
  },
  {
    "code" : "HH",
    "display" : "domácí péče",
    "definition" : "Zdravotní péče poskytovaná v místě bydliště pacienta nebo jím určeném místě."
  },
  {
    "code" : "IMP",
    "display" : "hospitalizace",
    "definition" : "Kontakt s pacientem, při kterém je pacient přijat do nemocnice nebo obdobného zařízení, přidělen na místo, kde pacienti obvykle zůstávají alespoň přes noc, a je mu poskytnuto ubytování, stravování a nepřetržitá ošetřovatelská péče."
  },
  {
    "code" : "NONAC",
    "display" : "neakutní hospitalizace",
    "definition" : "Jakákoli kategorie hospitalizace kromě „akutní“"
  },
  {
    "code" : "OBSENC",
    "display" : "pozorování",
    "definition" : "Kontakt, při kterém pacient obvykle začíná v jiném kontaktu, například na pohotovosti (EMER), ale poté přechází k tomuto typu kontaktu, protože vyžaduje delší léčbu a sledování, aby bylo možné určit, zda jeho stav vyžaduje hospitalizaci nebo propuštění. Ve většině případů bude rozhodnutí o hospitalizaci nebo propuštění učiněno v časovém období stanoveném místními, regionálními nebo národními předpisy, často mezi 24 a 48 hodinami."
  },
  {
    "code" : "PRENC",
    "display" : "pre-hospitalizace"
  }]
}

```
