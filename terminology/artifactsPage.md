# Terminologies - HL7 Czech Terminology Implementation Guide v0.2.0

* [**Table of Contents**](toc.md)
* **Terminologies**

## Terminologies

This page provides a list of the FHIR artifacts defined in this Implementation Guide.

### Code Systems

| | |
| :--- | :--- |
| [Absent a Unknown Data - IPS](CodeSystem-absent-unknown-uv-ips-cz.md) | Kódový systém pro označení nepřítomnosti nebo neznalosti údajů. Doplněk kódového systému hl7-IPS (International patient Summary). |
| [Administrative Gender (CZ supplement)](CodeSystem-administrative-gender-cz.md) | Pohlaví osoby používané pro administrativní účely. The gender of a person used for administrative purposes. |
| [Allergy Intolerance Category (CZ supplement)](CodeSystem-allergy-intolerance-category-cz.md) | Allergy Intolerance Category (CZ Code system supplement) |
| [AllergyIntoleranceCriticality (CZ supplement)](CodeSystem-allergy-intolerance-criticality-cz.md) | AllergyIntoleranceCriticality CZ Code system supplement |
| [Coverage SelfPay Codes (CZ supplement)](CodeSystem-coverage-selfpay-cz.md) | This code system supplements Coverage SelfPay. |
| [ATC CZ](CodeSystem-dlp-atc.md) | Czech national version of the Anatomical Therapeutical Chemical (ATC) code system. |
| [DLP formy](CodeSystem-dlp-formy.md) | Lékové formy dle DLP. |
| [Codesystem of DLP Lecive latky](CodeSystem-dlp-lecivelatky.md) | Codesystem of DLP Lecive latky. Identification ingredient. |
| [Codesystem of DLP Lecive pripravky](CodeSystem-dlp-lecivepripravky.md) | Codesystem of DLP Lecive pripravky. Identification medication. |
| [Type of healthcare facility](CodeSystem-drzar.md) | Czech national code system for type of healthcare facility. |
| [Codesystem of Health Insurance Companies](CodeSystem-healthInsuranceCompanyCode.md) | National codes of health insurance companies. |
| [Kódový systém MKN-10](CodeSystem-mkn-10.md) | Národní systém pro kódování diagnóz a zdravotních problémů. |
| [NCLPMAT](CodeSystem-nclp-NCLPMAT.md) | NCLP - Číselník materiálů pro laboratoře. |
| [NRZP - Czech health professional occupation](CodeSystem-nrzp-povolani.md) | Czech national code system for health professional occupation used in the national registry of healthcare practicioners. |
| [Contact Role (CZ supplement)](CodeSystem-v2-0131-cz.md) | Role kontaktní osoby. FHIR Code system definition for HL7 v2 table 0131 (Contact Role). |
| [v3 Code System ActCode](CodeSystem-v3-ActCode-cz.md) | This code system supplements v3 ActCode. |
| [Null Flavor (CZ supplement)](CodeSystem-v3-NullFlavor-cz.md) | Null Flavor (CZ Code system supplement) |
| [RoleCode (CZ Supplement)](CodeSystem-v3-RoleCode-cz.md) | Český doplněk kódového systému v3-RoleCode, který je souborem kódů blíže specifikujících druh Role; obsahuje specifické klasifikační kódy pro další upřesnění kódů RoleClass. A Czech supplement to the v3-RoleCode code system which is a set of codes further specifying the kind of Role; specific classification codes for further qualifying RoleClass codes. |

### Value Sets

| | |
| :--- | :--- |
| [eHDSI Agent or Allergen With Exceptions](ValueSet-AllergenWithExceptions.md) | The Value Set is used for coding s specific allergen or other agent/substance (drug, food, chemical agent, etc.) to which the patient has an adverse reaction propensity. It is defined as the union of: (a) eHDSIAllergenNoDrug (b) DLP_lecivePripravky (c) DLP_ATC (d) eHDSIAbsentOrUnknownAllergy (e) eHDSIExceptionalValue |
| [Medical Device with exceptions](ValueSet-MedicalDeviceWithExceptions.md) | The Value Set is used for coding implanted and external medical devices and equipment. It also includes exceptional values. |
| [Standard namespaces for national identity card](ValueSet-OP-NS.md) | National identity card's namespaces (CZ) |
| [Gender for administrative purposes](ValueSet-administrative-gender-cz.md) | Pohlaví pro administrativní účely. (Gender for administrative purposes) |
| [Allergy Intolerance Category (CZ supplement)](ValueSet-allergy-intolerance-category-cz.md) | Category of an identified substance associated with allergies or intolerances. |
| [AllergyIntoleranceCriticality (CZ supplement)](ValueSet-allergy-intolerance-criticality-cz.md) | Estimate of the potential clinical harm, or seriousness, of a reaction to an identified substance. |
| [Condition Value Set](ValueSet-condition-cz.md) | Condition value set includes selected codes from national and recommended EU code systems for health conditions (MKN-10, SNOMED CT and Orphacodes). |
| [Contact and Relationship (CZ)](ValueSet-contact-and-relationship-cz.md) | Číselník vztahů a rolí kontaktních osob k pacientovi. Číselník zahrnuje dva samostatné číselníky: relationship a contact role. |
| [Contact Role (CZ)](ValueSet-contactrole-cz.md) | Číselník rolí kontaktních osob ve vztahu k pacientovi. (Concepts specifying role of contact person.) |
| [Číselník typů úhrady](ValueSet-cz-coverage-type.md) | Číselník typů úhrady zdravotní péče. |
| [Mime types permissible for logo attachment](ValueSet-cz-logo-mime-types.md) | Mime types for logo attachment. It is used in OrganizationLogo extension to restrict the mime type of the logo image. |
| [Body Structure Qualifier](ValueSet-cz-sitequalifier.md) | Body Structure site qualifier. It indicates the body site qualifier from which a specimen is collected. (based on SNOMED CT) |
| [Body Structure Laterality for specimen.](ValueSet-cz-specimen-laterality.md) | Body Structure site laterality qualifier. It indicates the body site laterality from which a specimen is collected. (based on SNOMED CT) |
| [Specimen Additive](ValueSet-cz-specimenAdditive.md) | List of the specimen additives. Additives are commonly added to the vacutainer tubes to preserve the specimen for analysis |
| [Specimen Container](ValueSet-cz-specimencontainer.md) | List of the containers commonly used to collect specimens (e.g. urine, blood,..). |
| [Český číselník ATC skupin](ValueSet-dlp-atc.md) | Value set of DLP ATC |
| [Lékové formy](ValueSet-dlp-formy.md) | Číselník lékových forem dle DLP. |
| [Value set of DLP Lecive latky](ValueSet-dlp-lecivelatky.md) | Value set of DLP Lecive latky (Substances) |
| [Léčivé přípravky](ValueSet-dlp-lecivepripravky.md) | Číselník léčivých přípravků dle DLP. |
| [Kategorie dokumentů](ValueSet-document-category.md) | Kategorie dokumentů pro vyhledávání |
| [Drzar (CZ)](ValueSet-drzar.md) | Číselník druhů zdravotnických zařízení. (Type of healthcare provider facility.) |
| [eHDSI Absent Or Unknown Allergy](ValueSet-eHDSIAbsentOrUnknownAllergy-cz.md) | The Value set is used to encode absent or unknown medical allergies. |
| [eHDSI Absent Or Unknown Device](ValueSet-eHDSIAbsentOrUnknownDevice-cz.md) | The Value set is used to encode absent or unknown medical devices. |
| [eHDSI Allergen No Drug](ValueSet-eHDSIAllergenNoDrug-cz.md) | The value set is used to code the patient's kind of adverse reactions against substance, food or drugs |
| [eHDSI Exceptional Value](ValueSet-eHDSIExceptionalValue-cz.md) | The Value Set is used to code exceptional values for the required binding in FHIR IGs |
| [ValueSet of Health Insurance Company Code](ValueSet-healthInsuranceCompanyCode.md) | Číselník kódů zdravotních pojišťoven. |
| [Typy dokumentů obrazového komplementu](ValueSet-imaging-document-types.md) | Typy dokumentů obrazového komplementu |
| [Typy laboratorních dokumentů](ValueSet-lab-document-types.md) | Číselník typů laboratorních dokumentů. |
| [Materiál vzorků](ValueSet-lab-specimenType.md) | Materiál laboratorního vzorku/vzorku pro obrazová vyšetření. Číselník využívá terminologii SNOMED CT. |
| [Medical Device](ValueSet-medical-device.md) | Medical Device value set is used for coding implanted and external medical devices and equipment. |
| [Typy lékařské dokumentace](ValueSet-medical-document-type.md) | Číselník typů medicínských dokumentů. |
| [Mkn10_5](ValueSet-mkn-10.md) | Číselník obsahující koncepty z kódového systému Mkn10_5. Ciselnik pouzity v HOSP, NRROD, NRNAR, NRVV, NRPOT, NRU, NSHNU, NRPATV, RIP |
| [Číselník NCLPMAT](ValueSet-nclpmat.md) | Číselník laboratorních materiálů NČLP |
| [Occupation of healthcare practitioner (CZ)](ValueSet-nrzp-povolani-vs.md) | Povolání zdravotnických pracovníků dle registru NRZP. (Occupation of health practitioner registered in the national register of health practitioners (NRZP).) |
| [Typ ošetřovatelské dokumentace](ValueSet-nursing-document-type.md) | Číselník typů ošetřovatelské dokumentace |
| [Standard namespaces for passports](ValueSet-passport-NS.md) | Číselník jmenných prostorů pro pasy. (Passport namespaces.) |
| [Role code (CZ)](ValueSet-personal-relationship-cz.md) | Vztah kontaktní osoby k subjektu. (Relationship between subject and contact person.) |
| [Typy žádanek](ValueSet-referralorder-types.md) | Číselník typů žádanek |
| [Registering Provider Service Type (CZ)](ValueSet-registering-provider-service-type-cz.md) | Typ registrujícího lékaře. (Registering healthcare provider service type value set.) |
| [Všechny typy dokumentů](ValueSet-search-document-types.md) | Typy dokumentů zejména pro účely vyhledávání. |

### Concept Maps

|
|

