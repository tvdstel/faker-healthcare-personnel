<?php

declare(strict_types=1);

namespace HealthcareTeamsFaker\Provider\nl_NL;

class HealthCareTeamsData
{

    public static array $locationFormats = [
        '{{prependLocation}} {{locationCity}}',
        '{{locationCity}} {{locationRegion}}',
        '{{prependLocation}} {{locationTree}}',
        '{{locationPrefix}} {{locationName}}{{locationSuffix}}',
        '{{prependLocation}} {{locationName}}{{locationSuffix}}',
        '{{locationPrefix}} {{locationTree}}{{locationSuffix}}'
    ];

    public static array $locationCities = [
        'Vreeland', 'Schinveld', 'Utrecht', 'Heerenberg', 'Klundert', 'Waddinxveen', 'Hollum',
        'Purmerend', 'Wierden', 'Kortenhoef', 'Amersfoort', 'Enschede', 'Leiden', 'Haarlem',
    ];

    public static array $locationRegions = [
        'Noord', 'Zuid', 'Oost', 'West', 'Midden',
    ];

    public static array $locationTrees = [
        'Hulst', 'Hazelaar', 'Olijfboom', 'Magnolia', 'Waterwilg', 'Zilverlinde',
        'Meidoorn', 'Esdoorn', 'Kastanje', 'Vlier',
    ];

    public static array $locationPrefixes = [
        'Nieuwe', 'Oude', 'Grote', 'Kleine',
    ];

    public static array $locationNames = [
        'Mensinge', 'Laar', 'Nuwen', 'Essen', 'Vanen', 'Wychen', 'Doenrade', 'Ooijen',
        'Horn', 'Dussen',
    ];

    public static array $locationSuffixes = [
        'hof', 'haven', 'vijver', 'molen', 'sluis', 'schut', 'water', 'land', 'burcht', 'kerk',
    ];

    public static array $teamFormats = [
        '{{teamDisease}} {{teamCare}}',
        '{{teamName}} {{teamSuffix}}',
        '{{teamPrefix}} {{teamName}}',
    ];

    public static array $teamDiseases = [
        'COPD', 'Endocrinologie', 'Dementie', 'KNO', 'Dermatologie', 'Oncologie', 'Gyneacologie',
        'Fysiotherapie', 'Ergotherapie', 'Psychotherapie', 'Geriatrie'
    ];

    public static array $teamCares = [
        'Dagbehandeling', 'Dagbesteding', 'Opname', 'Wijkverpleging', 'Behandeling',
    ];

    public static array $teamNames = [
        'Huishoudelijke dienst', 'Receptie', 'Linnendienst', 'Voedingsdienst', 'Receptie',
        'Applicatiebeheer', 'Informatievoorziening', 'HRM', 'Financien', 'Onderzoek',
    ];

    public static array $teamSuffixes = [
        '1', '2', '3', '4', '5', '1a', '2a', '3b', '4a', '5b',
    ];

    public static array $teamPrefixes = [
        'Team ', 'Managers ',
    ];

    public static array $functionGroupNames = [
        'Klantadministratie', 'Receptie', 'Facilitair', 'HR / P&O', 'ICT & ApplicatieBeheer', 'Wasserij',
        'Bestuur', 'Arts/specialist', 'Verplegers', 'Vrijwilligers', 'Verzorgenden', 'Stage / Opleidingsplaatsen',
        'Paramedisch',
    ];

    public static array $functionFormats = [
        '{{functionName}}',
        '{{functionPrefix}} {{functionName}}',
    ];

    public static array $functionNames = [
        'Basis Arts', 'Arts', 'Arts Specialist', 'Secretaresse', 'Vrijwilliger', 'Voorman', 'Verpleegkundige',
        'Wijkverpleegkundige', 'Praktijkverpleegkundige', 'Staf', 'Verzorgende', 'Receptioniste',
        'Gastvrouw', 'Kok', 'Sous chef', 'Onderhoudstechnicus', 'Magazijn', 'Inkoper', 'Psycholoog',
        'Diëtist', 'Therapeut', 'Applicatiebeheerder', 'Begeleider', 'Receptionist', 'Inkoper', 'Chaffeur',
    ];

    public static array $functionPrefixes = [
        'Inval', 'Hoofd', 'Medewerker', 'Coordinator', 'Adviseur', 'Teamleider', 'Recruiter',
        'Junior', 'Manager', 'Assistent', 'Stagiaire', 'Leerling', 'Regie',
    ];

    public static array $specialisationGroupNames = [
        'Aandoening/ziektebeeld', 'Zorg en Behandeling', 'Welzijn',
        'Leren en werken', 'Organisatie', 'Overig',
    ];

    public static array $specialisationNames = [
        'Hartfalen', 'Dementie', 'Longaandoeningen', 'Leren en werken', 'Reuma', 'Bloed prikken',
        'Manuele therapie', 'Palliatieve zorg', 'Multiculturele zorg', 'Voeding', 'Stagebegeleiding', 'Salaris',
        'Coaching', 'Arbeidsvoorwaarden', 'Declaraties', 'Wetgeving', 'Klachten', 'Gegevensbescherming',
        'Zorgadministratie', 'Evenementen', 'Intranet', 'Veiligheid', 'Website','Duurzaamheid', 'Dagbesteding',
    ];

    public static array $contractTypeFormats = [
        '{{contractTypeName}}',
        '{{contractTypeName}} {{contractTypeSuffix}}',
    ];

    public static array $contractTypeNames = [
        'Bepaalde tijd fulltime', 'Bepaalde tijd parttime', 'Onbepaalde tijd fulltime', 'Onbepaalde tijd parttime',
        'Leerling BBL', 'Leerling BOL', 'Medewerker in opleiding', 'Uitzendkracht', 'Oproepkracht',
        'ZZP-er', 'Externe', 'Vrijwilliger',
    ];
}
