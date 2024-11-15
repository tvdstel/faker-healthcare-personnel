<?php

declare(strict_types=1);

namespace HealthcareTeamsFaker\Provider\nl_NL;

use Faker\Factory;
use Faker\Generator;
use HealthcareTeamsFaker\Provider\HealthCareTeamsBase;

class HealthCareTeams extends HealthCareTeamsBase
{

    private Generator $faker;

    public function __construct(Generator $generator)
    {
        parent::__construct($generator);
        $this->faker = Factory::create();
    }

    public static array $contractTypeFormats = [
        '{{contractTypeName}}',
        '{{contractTypeName}} {{contractTypeSuffix}}',
    ];

    public static array $contractTypeSuffix = [
        'Contract',
    ];

    public static array $contractTypeName = [
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
        'Paramedisch', 'Receptie', 'Stage / Opleidingsplaatsen', 'Verplegers', 'Verzorgenden', 'Vrijwilligers', 'Wasserij'
    ];

    public static array $functionName = [
        'Applicatiebeheerder', 'Arts Specialist', 'Arts', 'Basis Arts', 'Begeleider', 'Chauffeur', 'Diëtist', 'Gastvrouw',
        'Inkoper', 'Inkoper', 'Kok', 'Magazijn', 'Onderhoudstechnicus', 'Praktijkverpleegkundige', 'Psycholoog',
        'Receptionist', 'Receptioniste', 'Secretaresse', 'Sous chef', 'Staf', 'Therapeut', 'Verpleegkundige', 'Verzorgende',
        'Voorman', 'Vrijwilliger', 'Wijkverpleegkundige'
    ];

    public static array $functionPrefix = [
        'Adviseur', 'Assistent', 'Coordinator', 'Hoofd', 'Inval', 'Junior', 'Leerling', 'Manager', 'Medewerker',
        'Recruiter', 'Regie', 'Stagiaire', 'Teamleider'
    ];

    public static array $locationCity = [
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

    public static array $locationName = [
        'Doenrade' ,'Dussen' ,'Essen' ,'Horn' ,'Laar' ,'Mensinge' ,'Nuwen' ,'Ooijen' ,'Vanen' ,'Wychen'
    ];

    public static array $locationPrefix = [
        'Grote', 'Kleine', 'Nieuwe', 'Oude'
    ];

    public static array $locationRegion = [
        'Midden', 'Noord', 'Oost', 'West', 'Zuid'
    ];

    public static array $locationSuffix = [
        'burcht', 'haven', 'hof', 'kerk', 'land', 'molen', 'schut', 'sluis', 'vijver', 'water'
    ];

    public static array $locationTree = [
        'Esdoorn', 'Hazelaar', 'Hulst', 'Kastanje', 'Magnolia', 'Meidoorn', 'Olijfboom', 'Vlier', 'Waterwilg', 'Zilverlinde'
    ];

    public static array $prependLocation = [
        'Locatie',
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

    public static array $teamCare = [
        'Behandeling', 'Dagbehandeling', 'Dagbesteding', 'Opname', 'Wijkverpleging'
    ];

    public static array $teamDisease = [
        'COPD', 'Dementie', 'Dermatologie', 'Endocrinologie', 'Ergotherapie', 'Fysiotherapie', 'Geriatrie',
        'Gynaecologie', 'KNO', 'Oncologie', 'Psychotherapie'
    ];

    public static array $teamFormats = [
        '{{teamDisease}} {{teamCare}}',
        '{{teamName}} {{teamSuffix}}',
        '{{teamPrefix}} {{teamName}}'
    ];

    public static array $teamName = [
        'Applicatiebeheer', 'Financien', 'HRM', 'Huishoudelijke dienst', 'Informatievoorziening', 'Linnendienst',
        'Onderzoek', 'Receptie', 'Receptie', 'Voedingsdienst'
    ];

    public static array $teamSuffix = [
        '1', '2', '3', '4', '5', '1a', '2a', '3b', '4a', '5b',
    ];

    public static array $teamPrefix = [
        'Managers', 'Team',
    ];

    /*
     *  Returns a one or two part contractType name.
     */
    public function contractType(): string
    {
        return $this->parseFromProperty(static::randomElement(static::$contractTypeFormats));
    }

    /*
    *  Returns a one or two part function name.
    */
    public function function(): string
    {
        return $this->parseFromProperty(static::randomElement(static::$functionFormats));
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
        return $this->parseFromProperty(static::randomElement(static::$locationFormats));
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
        $team = $this->parseFromProperty(static::randomElement(static::$teamFormats));

        if(isset($location))
        {
            $team = $location . ' ' . $team;
        }

        return $team;
    }

    public function numberAmount(): string
    {
        $percentage = mt_rand(0,1) ? '%' : '';
        return $this->faker->randomNumber(5) . $percentage;
    }

    public function postalCodeNl(): string
    {
        return $this->faker->regexify('[1-9][0-9]{3} [A-Z]{2}');
    }

    public function parseFromProperty(string $string): string
    {
        $callback = function ($matches) {
            if(! property_exists(self::class, $matches[1]) || ! is_array(static::${$matches[1]}))
            {
                throw new \InvalidArgumentException(sprintf('Unknown format "%s"', $matches[1]));
            }
            return static::randomElement(static::${$matches[1]});
        };

        return preg_replace_callback('/{{\s?(\w+|[\w\\\]+->\w+?)\s?}}/u', $callback, $string);
    }
}
