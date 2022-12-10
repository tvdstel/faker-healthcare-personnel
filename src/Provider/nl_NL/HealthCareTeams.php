<?php

declare(strict_types=1);


namespace HealthcareTeamsFaker\Provider\nl_NL;

use Faker\Provider\Base;

class HealthCareTeams extends Base
{
    public function function(): string
    {
        return static::randomElement(HealthCareTeamsData::$functions);
    }

    /*
     *  Returns a two part location name.
     *  Location name is created with multiple elements in altering compositions in a human-readable sequence.
     */
    public function location(): string
    {
        $locationName = '';
        $composition = static::randomElement(HealthCareTeamsData::$locationCompositions);

        foreach (HealthCareTeamsData::$locationNameElements as $nameElement)
        {
            match ($nameElement)
            {
                'location' => $locationName = $this->addToNameWhenContains($composition, $nameElement, $locationName, 'Locatie '),
                'place' => $locationName = $this->addToNameWhenContains($composition, $nameElement, $locationName, static::randomElement(HealthCareTeamsData::$locationPlaces)),
                'region' => $locationName = $this->addToNameWhenContains($composition, $nameElement, $locationName, static::randomElement(HealthCareTeamsData::$locationRegions)),
                'prefix' => $locationName = $this->addToNameWhenContains($composition, $nameElement, $locationName, static::randomElement(HealthCareTeamsData::$locationPrefix)),
                'tree' => $locationName = $this->addToNameWhenContains($composition, $nameElement, $locationName, static::randomElement(HealthCareTeamsData::$locationTrees)),
                'name' => $locationName = $this->addToNameWhenContains($composition, $nameElement, $locationName, static::randomElement(HealthCareTeamsData::$locationNames)),
                'suffix' => $locationName = $this->addToNameWhenContains($composition, $nameElement, $locationName, static::randomElement(HealthCareTeamsData::$locationSuffix)),
            };
        }

        return trim($locationName);
    }

    /*
    *  Returns a two part team name that can be prepended with a location name.
    */
    public function team(string $location = null): string
    {
        $teamName = '';
        $composition = static::randomElement(HealthCareTeamsData::$teamCompositions);

        foreach (HealthCareTeamsData::$teamNameElements as $nameElement)
        {
            match ($nameElement)
            {
                'prefix' => $teamName = $this->addToNameWhenContains($composition, $nameElement, $teamName, static::randomElement(HealthCareTeamsData::$teamPrefix)),
                'name' => $teamName = $this->addToNameWhenContains($composition, $nameElement, $teamName, static::randomElement(HealthCareTeamsData::$teamNames)),
                'disease' => $teamName = $this->addToNameWhenContains($composition, $nameElement, $teamName, static::randomElement(HealthCareTeamsData::$teamDiseases)),
                'care' => $teamName = $this->addToNameWhenContains($composition, $nameElement, $teamName, static::randomElement(HealthCareTeamsData::$teamCare)),
                'suffix' => $teamName = $this->addToNameWhenContains($composition, $nameElement, $teamName, static::randomElement(HealthCareTeamsData::$teamSuffix)),
            };
        }

        if($location)
        {
            $teamName = $location . ' ' . $teamName;
        }

        return trim($teamName);
    }

    /*
    *  Adds extra part to a name when passed option is present in passed element.
    */
    public function addToNameWhenContains(string $option, string $element, string $name, string $partName,): string
    {
        if(str_contains($option, $element))
        {
           $name .= $partName;
        }
        return $name;
    }
}
