<?php

declare(strict_types=1);


namespace HealthcareTeamsFaker\Provider\en_US;

use Exception;
use Faker\Provider\Base;
use function PHPUnit\Framework\throwException;

class HealthCareTeamsData extends Base
{
    public static array $locations = [
        'location 01',
        'location 02',
        'location 03',
        'location 04',
        'location 05',
        'location 06',
        'location 07',
        'location 08',
        'location 09',
        'location 10',
    ];

    public static array $teams = [
        'team 01',
        'team 02',
        'team 03',
        'team 04',
        'team 05',
        'team 06',
        'team 07',
        'team 08',
        'team 09',
        'team 10',
    ];

    /*
     * Create a location name.
     */
    public static function location(): string
    {
        //TODO add plausible names
        return static::randomElement(static::$locations);
    }

    /*
     * Create a team name.
     */
    public static function team(): string
    {
        //TODO generate plausible names from multiple parts
        return static::randomElement(static::$teams);
    }

    /*
     *  Create a team name that belongs to a fitting location.
     */
    public static function teamForLocation(string $location): string
    {
        if(!in_array($location, static::$locations))
        {
            throw new Exception('Location does not exist');
        }

        //TODO return a plausible name coupled to the right location
        return 'teamname';
    }



}
