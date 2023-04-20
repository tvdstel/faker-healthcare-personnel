<?php

declare(strict_types=1);

namespace HealthcareTeamsFaker\Provider;

use Faker\Provider\Base;

class HealthCareTeamsBase extends Base
{
    public function parseFromProperty(string $string): string
    {
        $callback = function ($matches) {
            if(! property_exists(self::class, $matches[1]) || ! is_array(static::${$matches[1]}))
            {
                throw new \InvalidArgumentException(sprintf('Unknown format "%s"', $matches[1]));
            }
            return static::randomElement(static::${$matches[1]});
        };

        return preg_replace_callback('/{{\s?(\w+|[\w\\\]+->\w+?)\s?}}/u', $callback, $string);
    }

    public static array $contractTypeFormats = [];

    public static array $contractTypeSuffix = [];

    public static array $contractTypeName = [];

    public static array $functionFormats = [];

    public static array $functionGroupNames = [];

    public static array $functionName = [];

    public static array $functionPrefix = [];

    public static array $locationCity = [];
    
    public static array $locationFormats = [];

    public static array $locationName = [];

    public static array $locationPrefix = [];

    public static array $locationRegion = [];

    public static array $locationSuffix = [];

    public static array $locationTree = [];

    public static array $prependLocation = [];

    public static array $specialisationGroupNames = [];

    public static array $specialisationNames = [];

    public static array $teamCare = [];

    public static array $teamDisease = [];

    public static array $teamFormats = [];

    public static array $teamName = [];

    public static array $teamSuffix = [];

    public static array $teamPrefix = [];
}
