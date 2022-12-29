<?php

declare(strict_types=1);

namespace HealthcareTeamsFaker\Provider\nl_NL;

use Faker\Provider\Base;

class HealthCareTeams extends Base
{
    public static array $contractTypeFormats = [
        '{{contractTypeName}}',
        '{{contractTypeName}} {{contractTypeSuffix}}',
    ];

    public static array $contractTypeNames = [
        'Bepaalde tijd fulltime', 'Bepaalde tijd parttime', 'Externe', 'Leerling BBL', 'Leerling BOL',
        'Medewerker in opleiding', 'Onbepaalde tijd fulltime', 'Onbepaalde tijd parttime', 'Oproepkracht',
        'Uitzendkracht', 'Vrijwilliger', 'ZZP-er'
    ];

    public static array $functionFormats = [
        '{{functionName}}',
        '{{functionPrefix}} {{functionName}}',
    ];

    public static array $functionGroupNames = [
        'Arts/specialist', 'Bestuur', 'Facilitair', 'HR / P&O', 'ICT & ApplicatieBeheer', 'Klantadministratie',
        'Paramedisch', 'Receptie', 'Stage / Opleidingsplaatsen', 'Verplegers', 'Verzorgenden', 'Vrijwilligers',  'Wasserij'
    ];

    public static array $functionNames = [
        'Applicatiebeheerder', 'Arts Specialist', 'Arts', 'Basis Arts', 'Begeleider', 'Chaffeur', 'Diëtist', 'Gastvrouw',
        'Inkoper', 'Inkoper', 'Kok', 'Magazijn', 'Onderhoudstechnicus', 'Praktijkverpleegkundige', 'Psycholoog',
        'Receptionist', 'Receptioniste', 'Secretaresse', 'Sous chef', 'Staf', 'Therapeut', 'Verpleegkundige', 'Verzorgende',
        'Voorman', 'Vrijwilliger', 'Wijkverpleegkundige'
    ];

    public static array $functionPrefixes = [
        'Adviseur', 'Assistent', 'Coordinator', 'Hoofd', 'Inval', 'Junior', 'Leerling', 'Manager', 'Medewerker',
        'Recruiter', 'Regie', 'Stagiaire', 'Teamleider'
    ];

    public static array $locationCities = [
        'Amersfoort', 'Enschede', 'Haarlem', 'Heerenberg', 'Hollum', 'Klundert', 'Kortenhoef', 'Leiden', 'Purmerend',
        'Schinveld', 'Utrecht', 'Vreeland', 'Waddinxveen', 'Wierden'
    ];

    public static array $locationFormats = [
        '{{locationCity}} {{locationRegion}}',
        '{{locationPrefix}} {{locationName}}{{locationSuffix}}',
        '{{locationPrefix}} {{locationTree}}{{locationSuffix}}',
        '{{prependLocation}} {{locationCity}}',
        '{{prependLocation}} {{locationName}}{{locationSuffix}}',
        '{{prependLocation}} {{locationTree}}',
    ];

    public static array $locationNames = [
        'Doenrade' ,'Dussen' ,'Essen' ,'Horn' ,'Laar' ,'Mensinge' ,'Nuwen' ,'Ooijen' ,'Vanen' ,'Wychen'
    ];

    public static array $locationPrefixes = [
        'Grote', 'Kleine', 'Nieuwe', 'Oude'
    ];

    public static array $locationRegions = [
        'Midden', 'Noord', 'Oost', 'West', 'Zuid'
    ];

    public static array $locationSuffixes = [
        'burcht', 'haven', 'hof', 'kerk', 'land', 'molen', 'schut', 'sluis', 'vijver', 'water'
    ];

    public static array $locationTrees = [
        'Esdoorn', 'Hazelaar', 'Hulst', 'Kastanje', 'Magnolia', 'Meidoorn', 'Olijfboom', 'Vlier', 'Waterwilg', 'Zilverlinde'
    ];

    public static array $specialisationGroupNames = [
        'Aandoening/ziektebeeld', 'Leren en werken', 'Organisatie', 'Overig', 'Welzijn', 'Zorg en Behandeling'
    ];

    public static array $specialisationNames = [
        'Arbeidsvoorwaarden', 'Bloed prikken', 'Coaching', 'Dagbesteding', 'Declaraties', 'Dementie', 'Duurzaamheid',
        'Evenementen', 'Gegevensbescherming', 'Hartfalen', 'Intranet', 'Klachten', 'Leren en werken', 'Longaandoeningen',
        'Manuele therapie', 'Multiculturele zorg', 'Palliatieve zorg', 'Reuma', 'Salaris', 'Stagebegeleiding',
        'Veiligheid', 'Voeding', 'Website', 'Wetgeving', 'Zorgadministratie'
    ];

    public static array $teamCares = [
        'Behandeling', 'Dagbehandeling', 'Dagbesteding', 'Opname', 'Wijkverpleging'
    ];

    public static array $teamDiseases = [
        'COPD', 'Dementie', 'Dermatologie', 'Endocrinologie', 'Ergotherapie', 'Fysiotherapie', 'Geriatrie',
        'Gynaecologie', 'KNO', 'Oncologie', 'Psychotherapie'
    ];

    public static array $teamFormats = [
        '{{teamDisease}} {{teamCare}}',
        '{{teamName}} {{teamSuffix}}',
        '{{teamPrefix}} {{teamName}}'
    ];

    public static array $teamNames = [
        'Applicatiebeheer', 'Financien', 'HRM', 'Huishoudelijke dienst', 'Informatievoorziening', 'Linnendienst',
        'Onderzoek', 'Receptie', 'Receptie', 'Voedingsdienst'
    ];

    public static array $teamSuffixes = [
        '1', '2', '3', '4', '5', '1a', '2a', '3b', '4a', '5b',
    ];

    public static array $teamPrefixes = [
        'Managers', 'Team',
    ];

    /*
     *  Returns a one or two part contractType name.
     */
    public function contractType(): string
    {
        return $this->generator->parse(static::randomElement(static::$contractTypeFormats));
    }

    /*
    *  Returns a one or two part function name.
    */
    public function function(): string
    {
        return $this->generator->parse(static::randomElement(static::$functionFormats));
    }

    /*
    *  Returns a one or two part functionGroup name.
    */
    public function functionGroup(): string
    {
        return static::randomElement(static::$functionGroupNames);
    }

    /*
    *  Returns a two part location name.
    */
    public function location(): string
    {
        return $this->generator->parse(static::randomElement(static::$locationFormats));
    }

    /*
    *  Returns a one to three part specialisation name.
    */
    public function specialisation(): string
    {
        return static::randomElement(static::$specialisationNames);
    }

    /*
    *  Returns a one to three part specialisationGroup name.
    */
    public function specialisationGroup(): string
    {
        return static::randomElement(static::$specialisationGroupNames);
    }

    /*
    *  Returns a two part team name that can be prepended with a location name.
    */
    public function team(string $location = null): string
    {
        $team = $this->generator->parse(static::randomElement(static::$teamFormats));

        if(is_string($location))
        {
            $team = $location . ' ' . $team;
        }

        return $team;
    }

    // Format helper functions

    public function contractTypeName(): string
    {
        return static::randomElement(static::$contractTypeNames);
    }

    public function contractTypeSuffix(): string
    {
        return 'Contract';
    }

    public function functionName(): string
    {
        return static::randomElement(static::$functionNames);
    }

    public function functionPrefix(): string
    {
        return static::randomElement(static::$functionPrefixes);
    }

    public function locationCity(): string
    {
        return static::randomElement(static::$locationCities);
    }

    public function locationName(): string
    {
        return static::randomElement(static::$locationNames);
    }

    public function locationPrefix(): string
    {
        return static::randomElement(static::$locationPrefixes);
    }

    public function locationRegion(): string
    {
        return static::randomElement(static::$locationRegions);
    }

    public function locationSuffix(): string
    {
        return static::randomElement(static::$locationSuffixes);
    }

    public function locationTree(): string
    {
        return static::randomElement(static::$locationTrees);
    }

    public function prependLocation(): string
    {
        return 'Locatie';
    }

    public function teamCare(): string
    {
        return static::randomElement(static::$teamCares);
    }

    public function teamDisease(): string
    {
        return static::randomElement(static::$teamDiseases);
    }

    public function teamName(): string
    {
        return static::randomElement(static::$teamNames);
    }

    public function teamPrefix(): string
    {
        return static::randomElement(static::$teamPrefixes);
    }

    public function teamSuffix(): string
    {
        return static::randomElement(static::$teamSuffixes);
    }
}
