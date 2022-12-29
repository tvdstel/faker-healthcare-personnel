<?php

declare(strict_types=1);

namespace HealthcareTeamsFaker\Provider\en_US;

use Faker\Provider\Base;

class HealthCareTeams extends Base
{
    public static array $contractTypeFormats = [
        '{{contractTypeName}}',
        '{{contractTypeName}} {{contractTypeSuffix}}',
    ];

    public static array $contractTypeNames = [
        'At-will' ,'Casual' ,'Executive' ,'Freelance' ,'Fulltime' ,'Parttime' ,'Temp' ,'Union' ,'Zero-hour'
    ];

    public static array $functionFormats = [
        '{{functionName}}',
        '{{functionPrefix}} {{functionName}}',
    ];

    public static array $functionGroupNames = [
        'Administration', 'Customer administration',  'Doctor/Specialist', 'Facilitair',  'HR / P&O',
        'ICT & Application Management', 'Internship / Training places', 'Laundry', 'Nurses',  'Paramedical',
        'Reception', 'Volunteers',
    ];

    public static array $functionNames = [
        'Accompanist', 'Application Manager', 'Buyer', 'Care staff', 'Chauffeur', 'Chef', 'Dietitian', 'District Nurse',
        'Doctor', 'Doctor Specialist', 'Hostess', 'Leader', 'Maintenance Technician', 'Nurse',  'Practice nurse',
        'Psychologist', 'Receptionist', 'Secretary', 'Staff', 'Sous chef', 'Therapist', 'Volunteer', 'Warehouse'
    ];

    public static array $functionPrefixes = [
        'Advisor', 'Apprentice' ,'Assistent' ,'Co-ordinator' ,'Employee' ,'Head', 'Intern', 'Junior', 'Manager',
        'Recruiter', 'Substitute', 'Teamleader',
    ];

    public static array $locationCities = [
        'Ardmore', 'Calverton', 'Chicago', 'Denver', 'Ipswich', 'Manchester', 'New York', 'Sacramento', 'Scottsdale', 'Torrance',
    ];
    public static array $locationFormats = [
        '{{locationCity}} {{locationRegion}}',
        '{{locationPrefix}} {{locationName}}{{locationSuffix}}',
        '{{locationPrefix}} {{locationTree}}{{locationSuffix}}',
        '{{prependLocation}} {{locationCity}}',
        '{{prependLocation}} {{locationName}}{{locationSuffix}}',
        '{{prependLocation}} {{locationTree}}',
    ];

    public static array $locationNames = [
        'Ana', 'Bakers',  'Fort', 'Glen', 'Hay', 'Horn', 'Louis', 'Port', 'Scotts', 'Wood',
    ];

    public static array $locationPrefixes = [
        'Big', 'Little', 'New', 'Old',
    ];

    public static array $locationRegions = [
        'East', 'North', 'Middle', 'South', 'West',
    ];

    public static array $locationSuffixes = [
        'church', 'dale', 'field', 'heim', 'land', 'mont', 'ward', 'wood', 'worth', 'vile',
    ];

    public static array $locationTrees = [
        'Chestnut', 'Hazel', 'Hawthorn', 'Holly', 'Linden', 'Magnolia', 'Maple', 'Olive', 'Trumpet', 'Willow',
    ];

    public static array $specialisationGroupNames = [
        'Care and Treatment', 'Disorder/Clinical picture', 'Learning and working', 'Miscellaneous', 'Organisation',
        'Well-being',
    ];

    public static array $specialisationNames = [
        'Blood pricking', 'Care administration', 'Coaching', 'Complaints', 'Data protection', 'Daytime activities',
        'Declarations', 'Dementia', 'Digital presence', 'Durability', 'Events', 'Heart failure', 'Internship guidance',
        'Intranet', 'Law', 'Learning and working', 'Lung diseases', 'Manuel therapy', 'Multicultural zorg', 'Nutrition',
        'Palliative care', 'Rheumatism', 'Safety', 'Salary', 'Working conditions'
    ];

    public static array $teamCares = [
        'Admitted', 'Daytime Activities', 'Day Treatment', 'District Nursing', 'Treatment',
    ];

    public static array $teamDiseases = [
        'COPD', 'Dementia', 'Dermatology', 'Endocrinology', 'ENT',  'Geriatrics',  'Gynecology',  'Oncology',
        'Psychotherapy', 'Physiotherapy',
    ];

    public static array $teamFormats = [
        '{{teamDisease}} {{teamCare}}',
        '{{teamName}} {{teamSuffix}}',
        '{{teamPrefix}} {{teamName}}'
    ];

    public static array $teamNames = [
        'Application Management', 'Domestic service', 'Finance', 'HRM', 'Information provision', 'Linen service',
        'Nutrition service', 'Reception', 'Research',
    ];

    public static array $teamSuffixes = [
        '1', '2', '3', '4', '5', '1a', '2a', '3b', '4a', '5b',
    ];

    public static array $teamPrefixes = [
        'Managers', 'Team',
    ];

    /*
    *  Returns a one or two part contractType name.
    */
    public function contractType(): string
    {
        return $this->generator->parse(static::randomElement(static::$contractTypeFormats));
    }

    /*
    *  Returns a one or two part function name.
    */
    public function function(): string
    {
        return $this->generator->parse(static::randomElement(static::$functionFormats));
    }

    /*
    *  Returns a one or two part functionGroup name.
    */
    public function functionGroup(): string
    {
        return static::randomElement(static::$functionGroupNames);
    }

    /*
    *  Returns a two part location name.
    */
    public function location(): string
    {
        return $this->generator->parse(static::randomElement(static::$locationFormats));
    }

    /*
    *  Returns a one to three part specialisation name.
    */
    public function specialisation(): string
    {
        return static::randomElement(static::$specialisationNames);
    }

    /*
    *  Returns a one to three part specialisationGroup name.
    */
    public function specialisationGroup(): string
    {
        return static::randomElement(static::$specialisationGroupNames);
    }

    /*
    *  Returns a two part team name that can be prepended with a location name.
    */
    public function team(string $location = null): string
    {
        $team = $this->generator->parse(static::randomElement(static::$teamFormats));

        if(is_string($location))
        {
            $team = $location . ' ' . $team;
        }

        return $team;
    }

    // Format helper functions

    public function contractTypeName(): string
    {
        return static::randomElement(static::$contractTypeNames);
    }

    public function contractTypeSuffix(): string
    {
        return 'Contract';
    }

    public function functionName(): string
    {
        return static::randomElement(static::$functionNames);
    }

    public function functionPrefix(): string
    {
        return static::randomElement(static::$functionPrefixes);
    }

    public function locationCity(): string
    {
        return static::randomElement(static::$locationCities);
    }

    public function locationName(): string
    {
        return static::randomElement(static::$locationNames);
    }

    public function locationPrefix(): string
    {
        return static::randomElement(static::$locationPrefixes);
    }

    public function locationRegion(): string
    {
        return static::randomElement(static::$locationRegions);
    }

    public function locationSuffix(): string
    {
        return static::randomElement(static::$locationSuffixes);
    }

    public function locationTree(): string
    {
        return static::randomElement(static::$locationTrees);
    }

    public function prependLocation(): string
    {
        return 'Location';
    }

    public function teamCare(): string
    {
        return static::randomElement(static::$teamCares);
    }

    public function teamDisease(): string
    {
        return static::randomElement(static::$teamDiseases);
    }

    public function teamName(): string
    {
        return static::randomElement(static::$teamNames);
    }

    public function teamPrefix(): string
    {
        return static::randomElement(static::$teamPrefixes);
    }

    public function teamSuffix(): string
    {
        return static::randomElement(static::$teamSuffixes);
    }
}

