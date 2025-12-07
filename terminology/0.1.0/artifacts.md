# Artifacts Summary - HL7 Czech Terminology Implementation Guide v0.1.0

* [**Table of Contents**](toc.md)
* **Artifacts Summary**

## Artifacts Summary

This page provides a list of the FHIR artifacts defined as part of this implementation guide.

### Terminology: Value Sets 

These define sets of codes used by systems conforming to this implementation guide.

| | |
| :--- | :--- |
| [Body Structure Laterality for specimen.](ValueSet-cz-specimen-laterality.md) | Body Structure site laterality qualifier. It indicates the body site laterality from which a specimen is collected. (based on SNOMED CT) |
| [Body Structure Qualifier](ValueSet-cz-sitequalifier.md) | Body Structure site qualifier. It indicates the body site qualifier from which a specimen is collected. (based on SNOMED CT) |
| [Contact Role (CZ)](ValueSet-contactrole-cz.md) | Číselník rolí kontaktních osob ve vztahu k pacientovi. (Concepts specifying role of contact person.) |
| [Contact and Relationship (CZ)](ValueSet-contact-and-relationship-cz.md) | Číselník vztahů a rolí kontaktních osob k pacientovi. Číselník zahrnuje dva samostatné číselníky: relationship a contact role. |
| [Drzar (CZ)](ValueSet-drzar.md) | Číselník druhů zdravotnických zařízení. (Type of healthcare provider facility.) |
| [Gender for administrative purposes](ValueSet-administrative-gender-cz.md) | Pohlaví pro administrativní účely. (Gender for administrative purposes) |
| [Kategorie dokumentů](ValueSet-document-category.md) | Kategorie dokumentů pro vyhledávání |
| [Lékové formy](ValueSet-dlp-formy.md) | Číselník lékových forem dle DLP. |
| [Léčivé přípravky](ValueSet-dlp-lecivepripravky.md) | Číselník léčivých přípravků dle DLP. |
| [Materiál vzorků](ValueSet-lab-specimenType.md) | Materiál laboratorního vzorku/vzorku pro obrazová vyšetření. Číselník využívá terminologii SNOMED CT. |
| [Medical Device](ValueSet-medical-device.md) | Medical Device value set is used for coding implanted and external medical devices and equipment. |
| [Medical Device with exceptions](ValueSet-MedicalDeviceWithExceptions.md) | The Value Set is used for coding implanted and external medical devices and equipment. It also includes exceptional values. |
| [Mime types permissible for logo attachment](ValueSet-cz-logo-mime-types.md) | Mime types for logo attachment. It is used in OrganizationLogo extension to restrict the mime type of the logo image. |
| [Occupation of healthcare practitioner (CZ)](ValueSet-nrzp-povolani-vs.md) | Povolání zdravotnických pracovníků dle registru NRZP. (Occupation of health practitioner registered in the national register of health practitioners (NRZP).) |
| [Registering Provider Service Type (CZ)](ValueSet-registering-provider-service-type-cz.md) | Typ registrujícího lékaře. (Registering healthcare provider service type value set.) |
| [Role code (CZ)](ValueSet-personal-relationship-cz.md) | Vztah kontaktní osoby k subjektu. (Relationship between subject and contact person.) |
| [Specimen Additive](ValueSet-cz-specimenAdditive.md) | List of the specimen additives. Additives are commonly added to the vacutainer tubes to preserve the specimen for analysis |
| [Specimen Container](ValueSet-cz-specimencontainer.md) | List of the containers commonly used to collect specimens (e.g. urine, blood,..). |
| [Standard namespaces for national identity card](ValueSet-OP-NS.md) | National identity card's namespaces (CZ) |
| [Standard namespaces for passports](ValueSet-passport-NS.md) | Číselník jmenných prostorů pro pasy. (Passport namespaces.) |
| [Typ ošetřovatelské dokumentace](ValueSet-nursing-document-type.md) | Číselník typů ošetřovatelské dokumentace |
| [Typy dokumentů obrazového komplementu](ValueSet-imaging-document-types.md) | Typy dokumentů obrazového komplementu |
| [Typy laboratorních dokumentů](ValueSet-lab-document-types.md) | Číselník typů laboratorních dokumentů. |
| [Typy lékařské dokumentace](ValueSet-medical-document-type.md) | Číselník typů medicínských dokumentů. |
| [Typy žádanek](ValueSet-referralorder-types.md) | Číselník typů žádanek |
| [Value set of DLP Lecive latky](ValueSet-dlp-lecivelatky.md) | Value set of DLP Lecive latky (Substances) |
| [ValueSet of Health Insurance Company Code](ValueSet-healthInsuranceCompanyCode.md) | Číselník kódů zdravotních pojišťoven. |
| [Všechny typy dokumentů](ValueSet-search-document-types.md) | Typy dokumentů zejména pro účely vyhledávání. |
| [eHDSI Absent Or Unknown Allergy](ValueSet-eHDSIAbsentOrUnknownAllergy-cz.md) | The Value set is used to encode absent or unknown medical allergies. |
| [eHDSI Absent Or Unknown Device](ValueSet-eHDSIAbsentOrUnknownDevice-cz.md) | The Value set is used to encode absent or unknown medical devices. |
| [eHDSI Agent or Allergen With Exceptions](ValueSet-AllergenWithExceptions.md) | The Value Set is used for coding s specific allergen or other agent/substance (drug, food, chemical agent, etc.) to which the patient has an adverse reaction propensity. It is defined as the union of: (a) eHDSIAllergenNoDrug (b) DLP_lecivePripravky (c) DLP_ATC (d) eHDSIAbsentOrUnknownAllergy (e) eHDSIExceptionalValue |
| [eHDSI Allergen No Drug](ValueSet-eHDSIAllergenNoDrug-cz.md) | The value set is used to code the patient's kind of adverse reactions against substance, food or drugs |
| [eHDSI Exceptional Value](ValueSet-eHDSIExceptionalValue-cz.md) | The Value Set is used to code exceptional values for the required binding in FHIR IGs |
| [Český číselník ATC skupin](ValueSet-dlp-atc.md) | Value set of DLP ATC |
| [Číselník NCLPMAT](ValueSet-nclpmat.md) | Číselník laboratorních materiálů NČLP |
| [Číselník typů úhrady](ValueSet-cz-coverage-type.md) | Číselník typů úhrady zdravotní péče. |

### Terminology: Code Systems 

These define new code systems used by systems conforming to this implementation guide.

| | |
| :--- | :--- |
| [ATC CZ](CodeSystem-dlp-atc.md) | Czech national version of the Anatomical Therapeutical Chemical (ATC) code system. |
| [Absent a Unknown Data - IPS](CodeSystem-absent-unknown-uv-ips-cz.md) | Kódový systém pro označení nepřítomnosti nebo neznalosti údajů. Doplněk kódového systému hl7-IPS (International patient Summary). |
| [Administrative Gender (CZ supplement)](CodeSystem-administrative-gender-cz.md) | Pohlaví osoby používané pro administrativní účely. The gender of a person used for administrative purposes. |
| [Codesystem of DLP Lecive latky](CodeSystem-dlp-lecivelatky.md) | Codesystem of DLP Lecive latky. Identification ingredient. |
| [Codesystem of DLP Lecive pripravky](CodeSystem-dlp-lecivepripravky.md) | Codesystem of DLP Lecive pripravky. Identification medication. |
| [Codesystem of Health Insurance Companies](CodeSystem-healthInsuranceCompanyCode.md) | National codes of health insurance companies. |
| [Contact Role (CZ supplement)](CodeSystem-v2-0131-cz.md) | Role kontaktní osoby. FHIR Code system definition for HL7 v2 table 0131 (Contact Role). |
| [Coverage SelfPay Codes (CZ supplement)](CodeSystem-coverage-selfpay-cz.md) | This code system supplements Coverage SelfPay. |
| [DLP formy](CodeSystem-dlp-formy.md) | Lékové formy dle DLP. |
| [NCLPMAT](CodeSystem-nclp-NCLPMAT.md) | NCLP - Číselník materiálů pro laboratoře. |
| [NRZP - Czech health professional occupation](CodeSystem-nrzp-povolani.md) | Czech national code system for health professional occupation used in the national registry of healthcare practicioners. |
| [RoleCode (CZ Supplement)](CodeSystem-v3-RoleCode-cz.md) | Český doplněk kódového systému v3-RoleCode, který je souborem kódů blíže specifikujících druh Role; obsahuje specifické klasifikační kódy pro další upřesnění kódů RoleClass. A Czech supplement to the v3-RoleCode code system which is a set of codes further specifying the kind of Role; specific classification codes for further qualifying RoleClass codes. |
| [Type of healthcare facility](CodeSystem-drzar.md) | Czech national code system for type of healthcare facility. |
| [v3 Code System ActCode](CodeSystem-v3-ActCode-cz.md) | This code system supplements v3 ActCode. |

