<?php

declare(strict_types=1);

namespace HealthcareTeamsFaker\Provider\en_US;

use Faker\Factory;
use PHPUnit\Framework\TestCase;

class HealthCareTeamsTest extends TestCase
{
    public function test_contract_type_name_can_be_formatted_correctly(): void
    {
        $faker = Factory::create();
        $faker->addProvider(new HealthCareTeams($faker));
        $provider = new HealthCareTeams($faker);

        // test the parser with a one part format
        $name = $faker->parseFromProperty($provider::$contractTypeFormats[0]);
        $this->assertContains($name, $provider::$contractTypeName);

        // test the parser with a mutiple part format
        $name = $faker->parseFromProperty($provider::$contractTypeFormats[1]);
        $this->assertStringContainsString(' ', $name);

        $this->assertEquals(1, $this->containsFormatOptionCount($provider::$contractTypeName, $name));
        $this->assertEquals(1, $this->containsFormatOptionCount($provider::$contractTypeSuffix, $name));
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
