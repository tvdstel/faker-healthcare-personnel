<?php

declare(strict_types=1);


namespace HealthcareTeamsFaker\Provider\en_US;

use Faker\Factory;
use HealthcareTeamsFaker\Provider\nl_NL\HealthCareTeams;
use PHPUnit\Framework\TestCase;

class HealthCareTeamsTest extends TestCase
{

    public function setUp(): void
    {
        $this->faker = Factory::create();
        $this->faker->addProvider(new HealthCareTeams($this->faker));
    }

    public function test_it_can_test()
    {
        var_dump($this->faker->location());
       $this->assertIsString($this->faker->location());
    }
}
