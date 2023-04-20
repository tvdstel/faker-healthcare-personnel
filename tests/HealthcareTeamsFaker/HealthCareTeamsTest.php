<?php

declare(strict_types=1);

namespace HealthcareTeamsFaker;

use Faker\Factory;
use HealthcareTeamsFaker\Provider\en_US\HealthCareTeams;
use HealthcareTeamsFaker\Provider\HealthCareTeamsBase;
use PHPUnit\Framework\TestCase;

final class HealthCareTeamsTest extends TestCase
{
    protected array|false $folder;

    protected string $prefix = 'HealthcareTeamsFaker\Provider\\';

    protected string $suffix = '\HealthCareTeams';

    protected string $class;

    public function setUp(): void
    {
        $pathBaseClass = explode('\\', HealthCareTeamsBase::class);
        $nameBaseClass =  array_pop($pathBaseClass) . '.php';

        $this->folder = array_diff(scandir('src/Provider'), ['..', '.', $nameBaseClass]);
    }

    public function setFaker($folder): \Faker\Generator
    {
        $this->class = $this->prefix . $folder . $this->suffix;
        $faker = Factory::create();
        $faker->addProvider(new $this->class($faker));

        return $faker;
    }

    public function test_contract_type_returns_string_in_all_languages(): void
    {
        foreach ($this->folder as $folder) {
            $faker = $this->setFaker($folder);
            $contractType = $faker->contractType();

            $this->assertIsString($contractType);
            $this->assertNotEmpty($contractType);
        }
    }

    public function test_function_returns_string_in_all_languages(): void
    {
        foreach ($this->folder as $folder) {
            $faker = $this->setFaker($folder);
            $function = $faker->function();

            $this->assertIsString($function);
            $this->assertNotEmpty($function);
        }
    }

    public function test_function_group_returns_string_in_all_languages(): void
    {
        foreach ($this->folder as $folder) {
            $faker = $this->setFaker($folder);
            $functionGroup = $faker->functionGroup();

            $this->assertIsString($functionGroup);
            $this->assertNotEmpty($functionGroup);
        }
    }

    public function test_location_returns_string_in_all_languages(): void
    {
        foreach ($this->folder as $folder) {
            $faker = $this->setFaker($folder);
            $location = $faker->location();

            $this->assertIsString($location);
            $this->assertNotEmpty($location);
        }
    }

    public function test_specialisation_returns_string_in_all_languages(): void
    {
        foreach ($this->folder as $folder) {
            $faker = $this->setFaker($folder);
            $specialisation = $faker->specialisation();

            $this->assertIsString($specialisation);
            $this->assertNotEmpty($specialisation);
        }
    }

    public function test_specialisation_group_returns_string_in_all_languages(): void
    {
        foreach ($this->folder as $folder) {
            $faker = $this->setFaker($folder);
            $specialisationGroup = $faker->specialisationGroup();

            $this->assertIsString($specialisationGroup);
            $this->assertNotEmpty($specialisationGroup);
        }
    }

    public function test_team_returns_string_in_all_languages(): void
    {
        foreach ($this->folder as $folder) {
            $faker = $this->setFaker($folder);
            $team = $faker->team();

            $this->assertIsString($team);
            $this->assertNotEmpty($team);
        }
    }

    public function test_team_can_be_prepended_with_location_in_all_languages(): void
    {
        foreach ($this->folder as $folder) {
            $faker = $this->setFaker($folder);

            $location = $faker->location();
            $team = $faker->team($location);

            $this->assertIsString($faker->team());
            $this->assertStringContainsString($location, $team);
        }
    }

    public function test_class_can_parse_properties(): void
    {
        foreach ($this->folder as $folder)
        {
            $faker = $this->setFaker($folder);
            $provider = new $this->class($faker);

            $provider::$locationSuffix = [''];
            $provider::$locationCity = ['City'];
            $provider::$locationRegion = ['Region'];
            $provider::$locationTree = ['Tree'];

            $provider::$locationFormats = ['{{locationSuffix}}'];
            $contractType = $faker->location();
            $this->assertEquals('', $contractType);

            $provider::$locationFormats = ['{{locationCity}}'];
            $contractType = $faker->location();
            $this->assertEquals('City', $contractType);

            $provider::$locationFormats = ['{{locationCity}} {{locationRegion}}'];
            $contractType = $faker->location();
            $this->assertEquals('City Region', $contractType);

            $provider::$locationFormats = ['{{locationCity}} {{locationRegion}}{{locationTree}}'];
            $contractType = $faker->location();
            $this->assertEquals('City RegionTree', $contractType);
        }
    }

}
