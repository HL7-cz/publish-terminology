# Value Sets - HL7 Czech Terminology Implementation Guide v0.1.0

* [**Table of Contents**](toc.md)
* **Value Sets**

## Value Sets

### Value sets

| | |
| :--- | :--- |
| [eHDSI Agent or Allergen With Exceptions](ValueSet-AllergenWithExceptions.md) | The Value Set is used for coding s specific allergen or other agent/substance (drug, food, chemical agent, etc.) to which the patient has an adverse reaction propensity. It is defined as the union of: (a) eHDSIAllergenNoDrug (b) DLP_lecivePripravky (c) DLP_ATC (d) eHDSIAbsentOrUnknownAllergy (e) eHDSIExceptionalValue |
| [Medical Device with exceptions](ValueSet-MedicalDeviceWithExceptions.md) | The Value Set is used for coding implanted and external medical devices and equipment. It also includes exceptional values. |
| [Standard namespaces for national identity card](ValueSet-OP-NS.md) | National identity card's namespaces (CZ) |
| [Gender for administrative purposes](ValueSet-administrative-gender-cz.md) | Pohlaví pro administrativní účely. (Gender for administrative purposes) |
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
| [Číselník NCLPMAT](ValueSet-nclpmat.md) | Číselník laboratorních materiálů NČLP |
| [Occupation of healthcare practitioner (CZ)](ValueSet-nrzp-povolani-vs.md) | Povolání zdravotnických pracovníků dle registru NRZP. (Occupation of health practitioner registered in the national register of health practitioners (NRZP).) |
| [Typ ošetřovatelské dokumentace](ValueSet-nursing-document-type.md) | Číselník typů ošetřovatelské dokumentace |
| [Standard namespaces for passports](ValueSet-passport-NS.md) | Číselník jmenných prostorů pro pasy. (Passport namespaces.) |
| [Role code (CZ)](ValueSet-personal-relationship-cz.md) | Vztah kontaktní osoby k subjektu. (Relationship between subject and contact person.) |
| [Typy žádanek](ValueSet-referralorder-types.md) | Číselník typů žádanek |
| [Registering Provider Service Type (CZ)](ValueSet-registering-provider-service-type-cz.md) | Typ registrujícího lékaře. (Registering healthcare provider service type value set.) |
| [Všechny typy dokumentů](ValueSet-search-document-types.md) | Typy dokumentů zejména pro účely vyhledávání. |

