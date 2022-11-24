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
     *  Location name is created with multiple parts in altering compositions in a human-readable sequence.
     */
    public function location(): string
    {
        $locationName = '';
        $option = static::randomElement(HealthCareTeamsData::$locationOptions);

        foreach (HealthCareTeamsData::$locationParts as $part)
        {
            match ($part)
            {
                'location' => $locationName = $this->addWhenContains($option, $part, 'Locatie ', $locationName),
                'place' => $locationName = $this->addWhenContains($option, $part, static::randomElement(HealthCareTeamsData::$locationPlaces), $locationName),
                'region' => $locationName = $this->addWhenContains($option, $part, static::randomElement(HealthCareTeamsData::$locationRegions),  $locationName),
                'prefix' => $locationName = $this->addWhenContains($option, $part, static::randomElement(HealthCareTeamsData::$locationPrefix),  $locationName),
                'tree' => $locationName = $this->addWhenContains($option, $part, static::randomElement(HealthCareTeamsData::$locationTrees),  $locationName),
                'name' => $locationName = $this->addWhenContains($option, $part, static::randomElement(HealthCareTeamsData::$locationNames),  $locationName),
                'suffix' => $locationName = $this->addWhenContains($option, $part, static::randomElement(HealthCareTeamsData::$locationSuffix),  $locationName),
            };
        }

        return trim($locationName);
    }

    public function addWhenContains(string $requestedOption, string $part, string $partName, string $attribute)
    {
        if(str_contains($requestedOption, $part))
        {
           $attribute .= $partName;
        }
        return $attribute;
    }
}
