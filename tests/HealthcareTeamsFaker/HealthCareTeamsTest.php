<?php

declare(strict_types=1);

namespace HealthcareTeamsFaker;

use Faker\Factory;
use PHPUnit\Framework\TestCase;

final class HealthCareTeamsTest extends TestCase
{
    protected array|false $folder;

    protected string $prefix = 'HealthcareTeamsFaker\Provider\\';

    protected string $suffix = '\HealthCareTeams';

    public function setUp(): void
    {
        $this->folder = array_diff(scandir('src/Provider'), ['..', '.']);
    }

    public function test_contract_type_returns_string_in_all_languages(): void
    {
        foreach ($this->folder as $folder) {

            $class = $this->prefix . $folder . $this->suffix;
            $faker = Factory::create();
            $faker->addProvider(new $class($faker));

            $contractType = $faker->contractType();

            $this->assertIsString($contractType);
            $this->assertNotEmpty($contractType);
        }
    }

    public function test_function_returns_string_in_all_languages(): void
    {
        foreach ($this->folder as $folder) {

            $class = $this->prefix . $folder . $this->suffix;
            $faker = Factory::create();
            $faker->addProvider(new $class($faker));

            $function = $faker->function();

            $this->assertIsString($function);
            $this->assertNotEmpty($function);
        }
    }

    public function test_function_group_returns_string_in_all_languages(): void
    {
        foreach ($this->folder as $folder) {

            $class = $this->prefix . $folder . $this->suffix;
            $faker = Factory::create();
            $faker->addProvider(new $class($faker));

            $functionGroup = $faker->functionGroup();

            $this->assertIsString($functionGroup);
            $this->assertNotEmpty($functionGroup);
        }
    }

    public function test_location_returns_string_in_all_languages(): void
    {
        foreach ($this->folder as $folder) {

            $class = $this->prefix . $folder . $this->suffix;
            $faker = Factory::create();
            $faker->addProvider(new $class($faker));

            $location = $faker->location();

            $this->assertIsString($location);
            $this->assertNotEmpty($location);
        }
    }

    public function test_specialisation_returns_string_in_all_languages(): void
    {
        foreach ($this->folder as $folder) {

            $class = $this->prefix . $folder . $this->suffix;
            $faker = Factory::create();
            $faker->addProvider(new $class($faker));

            $specialisation = $faker->specialisation();

            $this->assertIsString($specialisation);
            $this->assertNotEmpty($specialisation);
        }
    }

    public function test_specialisation_group_returns_string_in_all_languages(): void
    {
        foreach ($this->folder as $folder) {

            $class = $this->prefix . $folder . $this->suffix;
            $faker = Factory::create();
            $faker->addProvider(new $class($faker));

            $specialisationGroup = $faker->specialisationGroup();

            $this->assertIsString($specialisationGroup);
            $this->assertNotEmpty($specialisationGroup);
        }
    }

    public function test_team_returns_string_in_all_languages(): void
    {
        foreach ($this->folder as $folder) {

            $class = $this->prefix . $folder . $this->suffix;
            $faker = Factory::create();
            $faker->addProvider(new $class($faker));

            $team = $faker->team();

            $this->assertIsString($team);
            $this->assertNotEmpty($team);
        }
    }

    public function test_team_can_be_prepended_with_location_in_all_languages(): void
    {
        foreach ($this->folder as $folder) {
            $class = $this->prefix . $folder . $this->suffix;
            $faker = Factory::create();
            $faker->addProvider(new $class($faker));

            $location = $faker->location();
            $team = $faker->team($location);

            $this->assertIsString($faker->team());
            $this->assertStringContainsString($location, $team);
        }
    }


    // TODO refactor and move to locale?
    public function test_name_elements_are_correctly_parsed(): void
    {
        foreach ($this->folder as $folder) {
            $class = $this->prefix . $folder . $this->suffix;
            $faker = Factory::create();
            $faker->addProvider(new $class($faker));
            $provider = new $class($faker);

            // only test the parser when used
            if (! method_exists($provider, 'parseFromProperty') || ! property_exists($provider, 'contractTypeFormats')) {
                return;
            }

            // test the parser with a one part format
            $onePartResult = $faker->parseFromProperty($provider::$contractTypeFormats[0]);
            $this->assertContains($onePartResult, $provider::$contractTypeName);

            // test the parser with a mutiple part format
            $twoPartResult = $faker->parseFromProperty($provider::$contractTypeFormats[1]);
            $this->assertStringContainsString(' ', $twoPartResult);

            // TODO refactor
            // create name with method that uses the parser
            // for each property used in formatter of the method
            // count how many elements of formatter array are in the name
            // assert this count is 1

            $parts = explode(' ', $twoPartResult);
            $this->assertContains(end($parts), $provider::$contractTypeSuffix);
            array_pop($parts);

            $this->assertContains(implode(' ', $parts), $provider::$contractTypeName);


        }
    }
}
