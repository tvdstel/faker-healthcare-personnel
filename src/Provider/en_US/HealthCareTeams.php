<?php

declare(strict_types=1);


namespace HealthcareTeamsFaker\Provider\en_US;

use Faker\Generator;
use Faker\Provider\Base;

class HealthCareTeams extends Base
{

    public function __construct(Generator $generator)
    {

    }

    /*
     * Create a location name.
     */
    public function location(): string
    {
        //TODO return an array of locations
        return HealthCareTeamsData::location();
    }

    /*
     * Create a team name, optionally coupled to a location
     */
    public function team(string $location = null): string
    {
        if(is_null($location))
        {
            return HealthCareTeamsData::team();
        }
        return HealthCareTeamsData::teamForLocation($location);
    }

    // :)
}

