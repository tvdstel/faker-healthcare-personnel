<?php

declare(strict_types=1);

namespace HealthcareTeamsFaker\Provider\en_US;

class HealthCareTeamsData
{
    public static array $locationFormats = [
        '{{prependLocation}} {{locationCity}}',
        '{{locationCity}} {{locationRegion}}',
        '{{prependLocation}} {{locationTree}}',
        '{{locationPrefix}} {{locationName}}{{locationSuffix}}',
        '{{prependLocation}} {{locationName}}{{locationSuffix}}',
        '{{locationPrefix}} {{locationTree}}{{locationSuffix}}'
    ];

    public static array $locationCities = [
        'Ardmore', 'Ipswich', 'Calverton', 'Manchester', 'Torrance', 'Chicago', 'New York', 'Denver', 'Scottsdale',
        'Sacramento',
    ];

    public static array $locationRegions = [
        'North', 'East', 'South', 'West', 'Middle',
    ];

    public static array $locationTrees = [
        'Holly', 'Hazel', 'Olive', 'Magnolia', 'Willow', 'Linden', 'Hawthorn', 'Maple', 'Chestnut', 'Trumpet'
    ];

    public static array $locationPrefixes = [
        'New', 'Old', 'Big', 'Little',
    ];

    public static array $locationNames = [
        'Bakers', 'Fort', 'Port', 'Louis', 'Ana', 'Glen', 'Scotts', 'Hay', 'Horn', 'Wood',
    ];

    public static array $locationSuffixes = [
        'ville', 'dale', 'worth', 'land', 'field', 'heim', 'mont', 'ward','wood', 'church',
    ];

    public static array $teamFormats = [
        '{{teamDisease}} {{teamCare}}',
        '{{teamName}} {{teamSuffix}}',
        '{{teamPrefix}} {{teamName}}',
    ];

    public static array $teamDiseases = [
        'COPD', 'Endocrinology', 'Dementia', 'ENT', 'Dermatology', 'Oncology', 'Gyneacology', 'Physiotherapy',
        'Ergotherapy', 'Psychotherapy', 'Geriatrics'
    ];

    public static array $teamCares = [
        'Day Treatment', 'Daytime Activities', 'Admitted', 'District Nursing', 'Treatment',
    ];

    public static array $teamNames = [
        'Domestic service', 'Reception', 'Linen service', 'Nutrition service', 'Application Management',
        'Information provision', 'HRM', 'Finance', 'Research',
    ];

    public static array $teamSuffixes = [
        '1', '2', '3', '4', '5', '1a', '2a', '3b', '4a', '5b',
    ];

    public static array $teamPrefixes = [
        'Team', 'Managers',
    ];

    public static array $functionGroupNames = [
        'Customer administration', 'Reception', 'Facilitair', 'HR / P&O', 'ICT & Application Management',
        'Laundry', 'Administration', 'Doctor/Specialist', 'Nurses', 'Volunteers', 'Internship / Training places',
        'Paramedical',
    ];

    public static array $functionFormats = [
        '{{functionName}}',
        '{{functionPrefix}} {{functionName}}',
    ];

    public static array $functionNames = [
        'Doctor', 'Doctor Specialist', 'Secretary', 'Volunteer', 'Leader', 'Maintenance Technician', 'District Nurse',
        'Practice nurse', 'Staff', 'Care staff', 'Receptionist', 'Hostess', 'Chef', 'Sous chef', 'Nurse', 'Chauffeur',
        'Warehouse', 'Buyer', 'Psychologist', 'Dietitian', 'Therapist', 'Application Manager', 'Accompanist',
    ];

    public static array $functionPrefixes = [
        'Substitute', 'Head', 'Employee', 'Co-ordinator', 'Advisor', 'Teamleader', 'Recruiter', 'Junior',
        'Manager', 'Assistent', 'Intern', 'Apprentice',
    ];

    public static array $specialisationGroupNames = [
        'Disorder/Clinical picture', 'Care and Treatment', 'Well-being', 'Learning and working',
        'Organisation', 'Miscellaneous',
    ];

    public static array $specialisationNames = [
        'Heart failure', 'Dementia', 'Lung diseases', 'Learning and working', 'Rheumatism', 'Blood pricking',
        'Manuel therapy', 'Palliative care','Multicultural zorg', 'Nutrition', 'Internship guidance',
        'Salary', 'Coaching', 'Working conditions', 'Declarations', 'Law', 'Complaints', 'Data protection',
        'Care administration', 'Events', 'Intranet', 'Safety', 'Digital presence', 'Durability', 'Daytime activities',
    ];

    public static array $contractTypeFormats = [
        '{{contractTypeName}}',
        '{{contractTypeName}} {{contractTypeSuffix}}',
    ];

    public static array $contractTypeNames = [
        'Fulltime', 'Parttime', 'Zero-hour', 'Casual', 'Freelance', 'Union', 'Executive', 'At-will', 'Temp',
    ];
}
