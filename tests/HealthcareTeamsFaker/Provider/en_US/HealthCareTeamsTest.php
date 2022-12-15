<?php

declare(strict_types=1);


namespace HealthcareTeamsFaker\Provider\en_US;

use Faker\Factory;

use PHPUnit\Framework\TestCase;

class HealthCareTeamsTest extends TestCase
{

    public function setUp(): void
    {
        $this->faker = Factory::create();
        $this->faker->addProvider(new HealthCareTeams($this->faker));
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

    public function test_it_returns_valid_function_group()
    {
        $functionGroup = $this->faker->functionGroup();

        $this->assertIsString($functionGroup);
        $this->assertEquals($functionGroup, trim($functionGroup));
    }

    public function test_it_returns_valid_function()
    {
        $function = $this->faker->function();

        $this->assertIsString($function);
        $this->assertEquals($function, trim($function));
    }
}
