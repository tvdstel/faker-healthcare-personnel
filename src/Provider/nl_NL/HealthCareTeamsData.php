<?php

declare(strict_types=1);

namespace HealthcareTeamsFaker\Provider\nl_NL;

class HealthCareTeamsData
{
    public static array $functions = ['baas', 'boven baas'];


    /*
     *  Pay attention to the order in which your elements are set.
     *  This order will be used to generate the location name.
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
        'Vreeland ',
        'Schinveld ',
        'Utrecht ',
        'Heerenberg ',
        'Klundert ',
        'Waddinxveen ',
        'Hollum ',
        'Purmerend ',
        'Wierden ',
        'Kortenhoef ',
        'Amersfoort ',
        'Enschede ',
        'Leiden ',
        'Haarlem ',
    ];

    public static array $locationRegions = [
        'Noord',
        'Zuid',
        'Oost',
        'West',
        'Midden',
    ];

    public static array $locationTrees = [
        'Hulst',
        'Hazelaar',
        'Olijfboom',
        'Magnolia',
        'Waterwilg',
        'Zilverlinde',
        'Meidoorn',
        'Esdoorn',
        'Kastanje',
        'Vlier',
    ];

    public static array $locationPrefix = [
        'Nieuwe ',
        'Oude ',
        'Grote ',
        'Kleine ',
    ];

    public static array $locationNames = [
        'Mensinge',
        'Laar',
        'Nuwen',
        'Essen',
        'Vanen',
        'Wychen',
        'Doenrade',
        'Ooijen',
        'Horn',
        'Dussen',
    ];

    public static array $locationSuffix = [
        'hof',
        'haven',
        'vijver',
        'molen',
        'sluis',
        'schut',
        'water',
        'land',
        'burcht',
        'kerk',
    ];


    /*
     *  Pay attention to the order in which your elements are set.
     *  This order will be used to generate the location name.
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
        'Endocrinologie ',
        'Dementie ',
        'KNO ',
        'Dermatologie ',
        'Oncologie ',
        'Gyneacologie ',
        'Fysiotherapie ',
        'Ergotherapie ',
        'Psychotherapie ',
        'Geriatrie '
    ];

    public static array $teamCare = [
        'Dagbehandeling',
        'Dagbesteding',
        'Opname',
        'Wijkverpleging',
        'Behandeling',
    ];

    public static array $teamNames = [
        'Huishoudelijke dienst ',
        'Receptie ',
        'Linnendienst ',
        'Voedingsdienst ',
        'Receptie ',
        'Applicatiebeheer ',
        'Informatievoorziening ',
        'HRM ',
        'Financien ',
        'Onderzoek ',
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


}
