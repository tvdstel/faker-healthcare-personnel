<?php

declare(strict_types=1);

namespace HealthcareTeamsFaker;

use HealthcareTeamsFaker\Provider\en_US\HealthCareTeams;
use Faker\Factory;
use PHPUnit\Framework\TestCase;

class HealthCareTeamsEnTest extends TestCase
{

    public function setUp(): void
    {
        $faker = Factory::create();
        $faker->addProvider(new HealthCareTeams($faker));
        $this->faker = $faker;
    }

    public function test_it_can_return_a_location_name(): void
    {
        $this->assertIsString($this->faker->location());
    }

    public function test_it_can_return_a_team_name():void
    {
        $this->assertIsString($this->faker->team());
    }

}
