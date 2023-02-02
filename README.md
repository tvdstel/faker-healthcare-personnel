# faker-healthcare-personnel
Custom FakerPHP provider for faking teams, locations, functions, specialisations etc. in healthcare.

## Installation

Add the library to your composer.json file

 	composer require tvkvds/faker-healthcare-personnel

## Usage

To use this with Faker, you must add the class to the Faker generator:



```php
$faker = \Faker\Factory::create();
$faker->addProvider(new \HealthCareTeams\Provider\en_US\HealthCareTeams($faker));
```


## Available Generators
```php
$faker->contractType(); 
$faker->function(); 
$faker->functionGroup(); 
$faker->location(); 
$faker->specialisation(); 
$faker->specialisationGroup(); 
$faker->team(); // optional: pass location name to prepend
```

## Available language formatters / locales

* en_US
* nl_NL




