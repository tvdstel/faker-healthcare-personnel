<?php

declare(strict_types=1);


namespace HealthcareTeamsFaker\Provider\nl_NL;

use Faker\Provider\Base;

class HealthCareTeams extends Base
{
    /*
     *  Returns a one or two part contractType name.
     */
    public function contractType(): string
    {
        return $this->generator->parse(static::randomElement(HealthCareTeamsData::$contractTypeFormats));
    }

    /*
    *  Returns a one or two part function name.
    */
    public function function(): string
    {
        return $this->generator->parse(static::randomElement(HealthCareTeamsData::$functionFormats));
    }

    /*
    *  Returns a one or two part functionGroup name.
    */
    public function functionGroup(): string
    {
        return static::randomElement(HealthCareTeamsData::$functionGroupNames);
    }

    /*
    *  Returns a two part location name.
    */
    public function location(): string
    {
        return $this->generator->parse(static::randomElement(HealthCareTeamsData::$locationFormats));
    }

    /*
    *  Returns a one to three part specialisation name.
    */
    public function specialisation(): string
    {
        return static::randomElement(HealthCareTeamsData::$specialisationNames);
    }

    /*
    *  Returns a one to three part specialisationGroup name.
    */
    public function specialisationGroup(): string
    {
        return static::randomElement(HealthCareTeamsData::$specialisationGroupNames);
    }

    /*
    *  Returns a two part team name that can be prepended with a location name.
    */
    public function team(string $location = null)
    {
        $team = $this->generator->parse(static::randomElement(HealthCareTeamsData::$teamFormats));

        if(is_string($location))
        {
            $team = $location . ' ' . $team;
        }

        return $team;
    }

    // Format helper functions

    public function contractTypeName(): string
    {
        return static::randomElement(HealthCareTeamsData::$contractTypeNames);
    }

    public function contractTypeSuffix(): string
    {
        return 'Contract';
    }

    public function functionName(): string
    {
        return static::randomElement(HealthCareTeamsData::$functionNames);
    }

    public function functionPrefix(): string
    {
        return static::randomElement(HealthCareTeamsData::$functionPrefixes);
    }

    public function teamDisease(): string
    {
        return static::randomElement(HealthCareTeamsData::$teamDiseases);
    }

    public function teamCare(): string
    {
        return static::randomElement(HealthCareTeamsData::$teamCares);
    }

    public function teamName(): string
    {
        return static::randomElement(HealthCareTeamsData::$teamNames);
    }

    public function teamSuffix(): string
    {
        return static::randomElement(HealthCareTeamsData::$teamSuffixes);
    }
    public function teamPrefix(): string
    {
        return static::randomElement(HealthCareTeamsData::$teamPrefixes);
    }

    public function prependLocation(): string
    {
        return 'Locatie';
    }

    public function locationCity(): string
    {
        return static::randomElement(HealthCareTeamsData::$locationCities);
    }

    public function locationRegion(): string
    {
        return static::randomElement(HealthCareTeamsData::$locationRegions);
    }

    public function locationTree(): string
    {
        return static::randomElement(HealthCareTeamsData::$locationTrees);
    }

    public function locationPrefix(): string
    {
        return static::randomElement(HealthCareTeamsData::$locationPrefixes);
    }

    public function locationSuffix(): string
    {
        return static::randomElement(HealthCareTeamsData::$locationSuffixes);
    }

    public function locationName(): string
    {
        return static::randomElement(HealthCareTeamsData::$locationNames);
    }
}
