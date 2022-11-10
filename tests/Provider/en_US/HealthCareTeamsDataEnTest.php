<?php

declare(strict_types=1);

namespace HealthcareTeamsFaker;

use Faker\Factory;
use HealthcareTeamsFaker\Provider\en_US\HealthCareTeamsData;
use PHPUnit\Framework\TestCase;

class HealthCareTeamsDataEnTest extends TestCase
{

    public function setUp(): void
    {
        $this->faker = Factory::create();
        $this->data = new HealthCareTeamsData($this->faker);
    }

    public function test_it_can_return_a_location_name(): void
    {
        $this->assertIsString($this->data::location());
    }

    public function test_it_can_return_a_team_name():void
    {
        $this->assertIsString($this->data::team());
    }

    public function test_it_can_return_a_team_belonging_to_a_location(): void
    {
        $this->expectExceptionMessage('Location does not exist');
        $this->data::teamForLocation('invalid');

        $this->assertIsString($this->data::teamForLocation( $this->data::location()));
    }

}
