<?php

declare(strict_types=1);


namespace HealthcareTeamsFaker\Provider\nl_NL;

use PHPUnit\Framework\TestCase;
use Faker\Factory;

class HealthCareTeamsTest extends TestCase
{

    public function setUp(): void
    {
        $this->faker = Factory::create();
        $this->faker->addProvider(new HealthCareTeams($this->faker));
    }

    public function test_it_can_return_a_function()
    {
        $function = $this->faker->function();
        $this->assertIsString($function);
    }

    public function test_it_returns_valid_location()
    {
        $location = $this->faker->location();

        $this->assertIsString($location);
        $this->assertEquals($location, trim($location));
    }

    public function test_it_returns_valid_team()
    {
        $team = $this->faker->team();

        $this->assertIsString($team);
        $this->assertEquals($team, trim($team));
    }

    public function test_it_can_prepend_location_to_team()
    {
        $location = $this->faker->location();
        $team = $this->faker->team($location);

        $this->assertStringContainsString($location, $team);
    }
}
