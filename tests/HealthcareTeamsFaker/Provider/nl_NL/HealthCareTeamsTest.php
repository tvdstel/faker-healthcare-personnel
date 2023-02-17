<?php

declare(strict_types=1);

namespace HealthcareTeamsFaker\Provider\nl_NL;

use Faker\Factory;
use PHPUnit\Framework\TestCase;

class HealthCareTeamsTest extends TestCase
{
    public function test_location_name_can_be_formatted_correctly(): void
    {
        $faker = Factory::create();
        $faker->addProvider(new HealthCareTeams($faker));
        $provider = new HealthCareTeams($faker);

        // test the parser with a two part format
        $name = $faker->parseFromProperty($provider::$locationFormats[0]);
        $this->assertStringContainsString(' ', $name);

        $this->assertEquals(1, $this->containsFormatOptionCount($provider::$locationCity, $name));
        $this->assertEquals(1, $this->containsFormatOptionCount($provider::$locationRegion, $name));

        // test the parser with a three part format
        $name = $faker->parseFromProperty($provider::$locationFormats[4]);
        $this->assertStringContainsString(' ', $name);

        $this->assertEquals(1, $this->containsFormatOptionCount($provider::$prependLocation, $name));
        $this->assertEquals(1, $this->containsFormatOptionCount($provider::$locationName, $name));
        $this->assertEquals(1, $this->containsFormatOptionCount($provider::$locationSuffix, $name));
        $this->assertEquals(0, $this->containsFormatOptionCount($provider::$locationCity, $name));
    }

    public function containsFormatOptionCount(array $options, string $name): int
    {
        $i = 0;
        foreach ($options as $part) {
            ! str_contains($name, $part) ?: $i++;
        }

        return $i;
    }
}
