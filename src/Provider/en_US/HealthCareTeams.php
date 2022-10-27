<?php

declare(strict_types=1);


namespace HealthcareTeamsFaker\Provider\en_US;

use Faker\Provider\Base;

class HealthCareTeams extends Base
{
    protected static array $functions = ['dog', 'top dog'];

    public function function(): string
    {
        return static::randomElement(static::$functions);
    }
}

