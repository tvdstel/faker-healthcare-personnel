<?php

declare(strict_types=1);


namespace HealthcareTeamsFaker;

use PHPUnit\Framework\TestCase;
use Faker\Factory;
use HealthcareTeamsFaker\Provider\nl_NL\HealthCareTeams;

class HealthCareTeamsNlTest extends TestCase
{

    public function setUp(): void
    {
        $faker = Factory::create();
        $faker->addProvider(new HealthCareTeams($faker));
        $this->faker = $faker;
    }

    public function test_it_can_test()
    {
        var_dump($this->faker->function);
        $this->assertIsString($this->faker->function);
    }
}
