<?php

declare(strict_types=1);

namespace HealthcareTeamsFaker\Provider\en_US;

class HealthCareTeamsData
{
    /*
     *  Pay attention to the order in which your elements are set.
     *  This order will be used to generate the name.
     */
    public static array $locationNameElements = [
        'location',
        'place',
        'region',
        'prefix',
        'tree',
        'name',
        'suffix',
    ];

    public static array $locationCompositions = [
        'location place',
        'place region',
        'location tree',
        'prefix name-suffix',
        'location name-suffix',
        'prefix tree-suffix'
    ];

    public static array $locationPlaces = [
        'Ardmore',
        'Ipswich',
        'Calverton',
        'Manchester',
        'Torrance',
        'Chicago',
        'New York',
        'Denver',
        'Scottsdale',
        'Sacramento',
    ];

    public static array $locationRegions = [
        'North',
        'East',
        'South',
        'West',
        'Middle',
    ];

    public static array $locationTrees = [
        'Holly',
        'Hazel',
        'Olive',
        'Magnolia',
        'Willow',
        'Linden',
        'Hawthorn',
        'Maple',
        'Chestnut',
        'Trumpet'
    ];

    public static array $locationPrefix = [
        'New ',
        'Old ',
        'Big ',
        'Little ',
    ];

    public static array $locationNames = [
        'Bakers',
        'Fort',
        'Port',
        'Louis',
        'Ana',
        'Glen',
        'Scotts',
        'Hay',
        'Horn',
        'Wood',
    ];

    public static array $locationSuffix = [
        'ville',
        'dale',
        'worth',
        'land',
        'field',
        'heim',
        'mont',
        'ward',
        'wood',
        'church',
    ];


    /*
     *  Pay attention to the order in which your elements are set.
     *  This order will be used to generate the name.
     */
    public static array $teamNameElements = [
        'prefix',
        'name',
        'disease',
        'care',
        'suffix',
    ];

    public static array $teamCompositions = [
        'disease care',
        'name suffix',
        'prefix name',
    ];

    public static array $teamDiseases = [
        'COPD ',
        'Endocrinology ',
        'Dementia ',
        'ENT ',
        'Dermatology ',
        'Oncology ',
        'Gyneacology ',
        'Physiotherapy ',
        'Ergotherapy ',
        'Psychotherapy ',
        'Geriatrics '
    ];

    public static array $teamCare = [
        'Day Treatment',
        'Daytime Activities',
        'Admitted',
        'District Nursing',
        'Treatment',
    ];

    public static array $teamNames = [
        'Domestic service ',
        'Reception ',
        'Linen service ',
        'Nutrition service ',
        'Application Management ',
        'Information provision ',
        'HRM ',
        'Finance ',
        'Research ',
    ];

    public static array $teamSuffix = [
        '1',
        '2',
        '3',
        '4',
        '5',
        '1a',
        '2a',
        '3b',
        '4a',
        '5b',
    ];

    public static array $teamPrefix = [
        'Team ',
        'Managers ',
    ];

    /*
    *  Pay attention to the order in which your elements are set.
    *  This order will be used to generate the name.
    */
    public static array $functionGroupNameElements = [
        'name',
    ];

    public static array $functionGroupCompositions = [
        'name',
    ];

    public static array $functionGroupNames = [
        'Customer administration',
        'Reception',
        'Facilitair',
        'HR / P&O',
        'ICT & Application Management',
        'Laundry',
        'Administration',
        'Doctor/Specialist',
        'Nurses',
        'Volunteers',
        'Internship / Training places',
        'Paramedical',
    ];

    /*
    *  Pay attention to the order in which your elements are set.
    *  This order will be used to generate the name.
    */
    public static array $functionNameElements = [
        'prefix',
        'name',
    ];

    public static array $functionCompositions = [
        'name',
        'prefix name',
    ];

    public static array $functionNames = [
        'Doctor',
        'Doctor Specialist',
        'Secretary',
        'Volunteer',
        'Leader',
        'Nurse',
        'District Nurse',
        'Practice nurse',
        'Staff',
        'Care staff',
        'Receptionist',
        'Hostess',
        'Chef',
        'Sous chef',
        'Maintenance Technician',
        'Warehouse',
        'Buyer',
        'Psychologist',
        'Dietitian',
        'Therapist',
        'Application Manager',
        'Accompanist',
        'Chaffeur',
    ];

    public static array $functionPrefix = [
        'Substitute ',
        'Head ',
        'Employee ',
        'Co-ordinator ',
        'Advisor ',
        'Teamleader ',
        'Recruiter ',
        'Junior ',
        'Manager ',
        'Assistent ',
        'Intern ',
        'Apprentice ',
    ];




}
