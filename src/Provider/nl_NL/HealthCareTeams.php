<?php

declare(strict_types=1);


namespace HealthcareTeamsFaker\Provider\nl_NL;

use Faker\Provider\Base;

class HealthCareTeams extends Base
{
    protected static array $functions = ['baas', 'boven baas'];

    public function function(): string
    {
        return static::randomElement(static::$functions);
    }
}
