<?php

declare(strict_types=1);

namespace HealthcareTeamsFaker\Provider\nl_NL;

class HealthCareTeamsData
{
    public static array $functions = ['baas', 'boven baas'];


    /*
     *  Pay attention to the order in which your parts are set.
     *  This order will be used to generate the names.
     */
    public static array $locationParts = [
        'location',
        'place',
        'region',
        'prefix',
        'tree',
        'name',
        'suffix',
    ];

    public static array $locationOptions = [
        'location place',
        'place region',
        'location tree',
        'prefix namesuffix',
        'location namesuffix',
        'prefix treesuffix'
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
}
